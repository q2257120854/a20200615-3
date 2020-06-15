//==============================================================================
//
//  WatchedUploadsCollection
//
//==============================================================================

(function(app, config)
{
    var WatchedUploadsCollection = Backbone.Collection.extend({

        url : config.uploadCrudPath,

        model : app.UploadModel,

        parse : function(data)
        {
            if(data.success)
            {
                return data.uploads;
            }
        },

        initialize : function()
        {
            this.on('add',    this.onAdd,    this);
            this.on('remove', this.onRemove, this);

            _.bindAll(this, 'removeUnused');
        },

        set : function()
        {
            Backbone.Collection.prototype.set.apply(this, arguments);

            // Defer cleanup to give other functions a chance of using the models

            setTimeout(this.removeUnused, 0);
        },

        removeUnused : function()
        {
            for(var i = this.models.length - 1; i >= 0; i--)
            {
                var model = this.models[i];

                if(model.isSettled() || model.isUnused())
                {
                    this.remove(model);
                }
            }
        }
    });

    app.WatchedUploadsCollection = WatchedUploadsCollection;

})(Application, chatConfig);
