//==============================================================================
//
//  UploadController
//
//==============================================================================

(function(app, config, _)
{
    var UploadController = Marionette.Object.extend({

        initialize : function(options)
        {
            // Store related models

            this.user    = options.user;
            this.chat    = options.chat;
            this.chatBox = options.chatBox;
            this.talkId  = options.talkId;
            this.toId    = options.toId;
            this.files   = options.files;
            this.input   = options.input;
        },

        run : function()
        {
            var input = this.input,
                files = this.files;

            // Collect files information

            var filesInfo = this._getFilesInfo(files = files || input.files || input.value);

            // Initiate file transfer and send the message

            var uploader = this.uploader = new AjaxUploader({

                url        : config.uploadFilesPath,
                files      : files,
                input      : input,
                filesField : 'files[]',
                onProgress : _.bind(this.onProgress, this),
            });

            var message;

            // Operator

            if(this.user.hasRole && this.user.hasRole('OPERATOR'))
            {
                message = new app.MessageModel({

                    author     : this.user.get('name'),
                    mail       : this.user.get('mail'),
                    authorType : 'operator',
                    body       : this._getMessageBody(files),
                    time       : new Date(),
                    talk_id    : this.talkId,
                    from_id    : this.user.get('id'),
                    to_id      : this.toId,
                    extra      : {

                        type  : app.MessageModel.EXTRA_FILES,
                        files : filesInfo.files
                    },

                    from_user_info : { image : this.user.get('image') }
                },
                {
                    localMessage : true
                });

                message.fromUser = this.user.attributes;
            }
            else  // Guest
            {
                message = new app.MessageModel({

                    author     : this.user.get('name'),
                    authorType : 'guest',
                    body       : this._getMessageBody(files),
                    time       : new Date(),
                    from_id    : this.user.get('id'),
                    extra      : {

                        type  : app.MessageModel.EXTRA_FILES,
                        files : filesInfo.files
                    },

                    from_user_info : { image : this.user.get('image') }
                },
                {
                    localMessage : true
                });
            }

            this.message = message;

            message.uploader = uploader;

            this.listenTo(message.upload, 'change:state', this.onStateChange);

            // Validate the files

            var errors = this._validateFiles(filesInfo);

            if(typeof errors !== 'undefined')
            {
                // Cancel the upload

                message.upload.set('error', errors);
                message.upload.set('state', app.UploadModel.STATE_ERROR);
            }
            else
            {
                // Send the message

                this.chat.sendMessage(message, function(data)
                {
                    message.upload.set(data.upload);
                });
            }

            // Add message to the chat box

            this.chatBox.addMessage(message, true);

            return message.upload;
        },

        onStateChange : function(upload, newState)
        {
            if(newState !== app.UploadModel.STATE_PENDING)
            {
                var prevState = upload.previous('state');

                if(
                    (prevState === null || prevState === app.UploadModel.STATE_PENDING)

                    && newState === app.UploadModel.STATE_UPLOADING
                )
                {
                    // Start actual upload

                    this.uploader.data = { id : this.message.upload.get('id') };
                    this.uploader.upload();
                }
                else
                {
                    this.trigger('unlock');
                }
            }
        },

        onProgress : function(progress)
        {
            // Update the model

            this.message.upload.save('progress', Math.floor(progress * this.message.upload.get('size')));
        },

        _getFilesInfo : function(files)
        {
            var filesInfo = [], totalSize = 0;

            if(typeof files === 'string') // old browsers
            {
                var fileName = files.split('\\').pop();

                filesInfo.push({

                    name : fileName,
                    size : null,
                    type : null
                });

                totalSize = null;
            }
            else
            {
                for(var i = 0; i < files.length; i++)
                {
                    var file = files[i];

                    filesInfo.push({

                        name : file.name,
                        size : file.size,
                        type : file.type
                    });

                    totalSize += file.size;
                }
            }

            return { totalSize : totalSize, files : filesInfo };
        },

        _validateFiles : function(filesInfo)
        {
            if(!filesInfo.totalSize) // old browsers
            {
                return;
            }

            var maxSize = Math.floor(parseFloat(config.ui.sharedFileMaxSize) * 1024 * 1024); // From MB to B

            if(filesInfo.totalSize > maxSize)
            {
                return app.service.i18n.trans('file.too.big', { '%max%' : config.ui.sharedFileMaxSize });
            }
        },

        _getMessageBody : function(files)
        {
            var result = '';

            for(var i = 0; i < files.length; i++)
            {
                var file = files[i];

                result += file.name;
            }

            return result;
        }
    });

    app.UploadController = UploadController;

})(window.Application, window.chatConfig, _);
