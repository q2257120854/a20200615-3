//==============================================================================
//
//  UploadModel
//
//==============================================================================

(function(app, config)
{
    var UploadModel = Backbone.Model.extend({

        defaults : {

            message_id : null,
            state      : null,
            files_info : null,
            size       : null,
            progress   : 0
        },

        url : function()
        {
              var base = _.result(this, 'urlRoot') || _.result(this.collection, 'url') || urlError();

              if (this.isNew()) return base;

              return base + '&id=' + encodeURIComponent(this.id);
        },

        initialize : function(attrs, options)
        {
            var size       = this.get('size'),
                files_info = this.get('files_info');

            if(typeof files_info === 'string')
            {
                try
                {
                    files_info = JSON.parse(files_info);

                    this.set('files_info', files_info, { silent : true });
                }
                catch(e) {}
            }

            if(!size && files_info)
            {
                size = 0;

                for(var i = 0; i < files_info.length; i++)
                {
                    size += files_info[i].size;
                }

                this.set('size', size, { silent : true });
            }
        },

        deny : function(callback)
        {
            this._requestAndUpdate(config.denyUploadPath, { id : this.get('id') }, callback);
        },

        confirm : function(callback)
        {
            this._requestAndUpdate(config.confirmUploadPath, { id : this.get('id') }, callback);
        },

        abort : function(callback)
        {
            this._requestAndUpdate(config.abortUploadPath, { id : this.get('id') }, callback);
        },

        _requestAndUpdate : function(path, input, callback)
        {
            var _this = this;

            $.post(path, input, function(data)
            {
                if(data.success)
                {
                    // Update

                    _this.set(data.upload);
                }

                if(callback)
                {
                    callback(data);
                }
            });
        },

        isSettled : function()
        {
            return (

                [ UploadModel.STATE_PENDING, UploadModel.STATE_UPLOADING, null ].indexOf(this.get('state')) === -1
            );
        },

        isUnused : function()
        {
            // Check if there are any event listeners (except collection listeners)

            for(var type in this._events)
            {
                if(type !== 'all') // parent collection listens only to 'all' events
                {
                    return false;
                }

                if(this._events[type].length > 1) // parent collection registers only a single 'all' listener
                {
                    return false;
                }
            }

            return true;
        }
    },
    {
        STATE_PENDING   : 'pending',
        STATE_ABORTED   : 'aborted',
        STATE_DENIED    : 'denied',
        STATE_ERROR     : 'error',
        STATE_UPLOADING : 'uploading',
        STATE_UPLOADED  : 'uploaded'
    });

    app.UploadModel = UploadModel;

})(Application, chatConfig);
