//==============================================================================
//
//  Message file view
//
//==============================================================================

(function(app, config, $)
{
    var MessageFileView = app.MessageFileView = Marionette.ItemView.extend({

        getTemplate : function()
        {
            return app.template.messageFile;
        },

        templateHelpers : {

            fileSize : function()
            {
                if(!this.size)
                {
                    return '';
                }

                return this.size < 1024        ? this.size                                + ' B'  :
                       this.size < 1024 * 1024 ? (this.size / 1024).toFixed(2)            + ' kB' :
                                                 (this.size / (1024 * 1024)).toFixed(2)   + ' MB';
            },

            fileIcon : function()
            {
                if(this.type)
                {
                    for(var s in MessageFileView.mimeToIcon)
                    {
                        if(this.type.indexOf(s) > -1)
                        {
                            return MessageFileView.mimeToIcon[s];
                        }
                    }
                }

                return 'file-o';
            },

            state : function()
            {
                var alternatives = Array.prototype.slice.call(arguments, 0, arguments.length - 1),
                    options      = arguments[arguments.length - 1];

                if(alternatives.indexOf(this.state) > -1)
                {
                    return options.fn(this);
                }

                return options.inverse(this);
            },

            showConfirmDeny : function(options)
            {
                if(!this.isAuthor && this.isOperator && [ 'pending', 'uploading', null ].indexOf(this.state) > -1)
                {
                    return options.fn(this);
                }

                return options.inverse(this);
            }
        },

        className : 'file-message',

        ui : {

            progress : '.progress-bar',
            abort    : '.abort',
            deny     : '.deny',
            confirm  : '.confirm',
            links    : '.download'
        },

        events : {

            'click @ui.abort'   : 'abortUpload',
            'click @ui.deny'    : 'denyUpload',
            'click @ui.confirm' : 'confirmUpload'
        },

        initialize : function(options)
        {
            this.user    = app.model.user || app.model.chat;
            this.message = options.message;
            this.upload  = this.message.upload;

            if(this.message.uploader)
            {
                this.uploader = this.message.uploader;

                _.bindAll(this, 'onError', 'onAbort', 'onLoad', 'onProgress');

                // Handle events

                this.uploader.on('error', this.onError);
                this.uploader.on('abort', this.onAbort);
                this.uploader.on('load',  this.onLoad);
            }

            // Model updates

            this.listenTo(this.message.upload, 'change:state',    this.render);
            this.listenTo(this.message.upload, 'change:progress', this.onProgress);

            this.template = this.getTemplate();
            this.render();
        },

        render : function()
        {
            var state = this.upload && this.upload.get('state');

            // Don't go back from "uploaded" state (except for the "error" state)

            if(
                state !== app.UploadModel.STATE_ERROR    &&
                state !== app.UploadModel.STATE_UPLOADED &&

                this.upload.previous('state') === app.UploadModel.STATE_UPLOADED
            )
            {
                return;
            }

            var files = this.getFiles();

            var isOperator  = app.model.user && app.model.user.hasRole('OPERATOR'),
                isUploading = !!this.uploader;

            this.$el.html(this.template({

                files : files,

                isAuthor    : this.user.get('id') == this.message.get('from_id'),
                isUploading : isUploading,
                isGuest     : !app.model.user,
                isOperator  : isOperator,
                state       : state,
                error       : this.upload.get('error'),

            }, {

                helpers : this.templateHelpers
            }));

            this.$el

                .attr('class', 'file-message')
                .addClass(state ? state : 'initial')
            ;

            if(isOperator)
            {
                this.$el.addClass('operator');
            }
            else if(!isUploading)
            {
                this.$el.addClass('no-actions');
            }

            this.bindUIElements();

            if(state === app.UploadModel.STATE_UPLOADED && files)
            {
                this.setDownloadLinks(_.pluck(files, 'id'));
            }

            this.onProgress(this.upload, this.upload.get('progress'));

            return this;
        },

        getFiles : function()
        {
            if(this.upload.has('files'))
            {
                return this.upload.get('files');
            }

            return this.message.get('extra').files;
        },

        onError : function()
        {
            this.upload.set('state', app.UploadModel.STATE_ERROR);
        },

        onAbort : function()
        {
            this.uploader = null;
            this.upload.set('state', app.UploadModel.STATE_ABORTED);
        },

        onLoad : function(response)
        {
            this.upload.set('state', app.UploadModel.STATE_UPLOADED);

            this.ui.progress.width('100%');

            response = JSON.parse(response);

            if(response.success)
            {
                this.setDownloadLinks(response.files);
            }
            else
            {
                this.onError();
            }
        },

        onProgress : function(upload, progress)
        {
            var percentage = Math.floor(progress / this.upload.get('size') * 100);

            // Make sure no to lower current progress

            if(this.prevPercentage > percentage) return;

            this.ui.progress.width(percentage + '%');

            this.prevPercentage = percentage;
        },

        abortUpload : function()
        {
            this.upload.abort();

            if(this.uploader.uploading)
            {
                this.uploader.abort();
            }
            else
            {
                this.onAbort();
            }
        },

        denyUpload : function()
        {
            this.upload.deny();
        },

        confirmUpload : function()
        {
            this.upload.confirm();
        },

        setDownloadLinks : function(fileIds)
        {
            this.ui.links.each(function(i)
            {
                $(this)
                    .attr('href', config.downloadFilePath + '&id=' + fileIds[i])
                    .attr('target', '_blank')
                ;
            });
        }
    },
    {
        mimeToIcon : {

            'text'          : 'file-text-o',
            'pdf'           : 'file-pdf-o',
            'image'         : 'file-image-o',
            'audio'         : 'file-audio-o',
            'video'         : 'file-video-o',
            'word'          : 'file-word-o',
            'excel'         : 'file-excel-o',
            'spreadsheetml' : 'file-excel-o',
            'powerpoint'    : 'file-powerpoint-o',
            'zip'           : 'cube',
            'tar'           : 'cube'
        }
    });

})(window.Application, window.chatConfig, window.jQuery);
