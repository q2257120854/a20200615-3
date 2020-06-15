//==============================================================================
//
//  Single chat message
//
//==============================================================================

(function(app, config)
{
    var MessageModel = app.MessageModel = Backbone.Model.extend({

        defaults : {

            author       : '',
            body         : '',
            toAuthor     : 'all',
            toAuthorMail : ''
        },

        initialize : function(attributes, options)
        {
            this.options = options || {};

            // Initialize fields if stored as server-side data

            if(attributes)
            {
                     if(typeof attributes.datetime === 'string') this.set('time', new Date(attributes.datetime.replace(/-/g,"/")));
                else if(typeof attributes.datetime === 'object') this.set('time', attributes.datetime);

                if(typeof attributes.from_user_info === 'string' && attributes.from_user_info !== 'all')
                {
                    try      { attributes.from_user_info = JSON.parse(attributes.from_user_info); }
                    catch(e) { /* Do nothing... */}
                }

                if(typeof attributes.from_user_info === 'object')
                {
                    var fromUser = attributes.from_user_info;

                    this.fromUser = fromUser;

                    if(this.get('author').length === 0) this.set('author',     fromUser.name);
                    if(!this.has('authorMail'))         this.set('authorMail', fromUser.mail);
                }

                if(typeof attributes.to_user_info === 'string' && attributes.to_user_info !== 'all')
                {
                    try      { attributes.to_user_info = JSON.parse(attributes.to_user_info); }
                    catch(e) { /* Do nothing... */}
                }

                if(typeof attributes.to_user_info === 'object')
                {
                    var toUser = attributes.to_user_info;

                    this.toUser = toUser;

                    this.set('toAuthor',     toUser.name);
                    this.set('toAuthorMail', toUser.mail);
                }

                if(attributes.extra && typeof attributes.extra === 'string')
                {
                    try      { attributes.extra = JSON.parse(attributes.extra); }
                    catch(e) { /* Do nothing... */}
                }


                // Initialize system message

                if(attributes.from_id == MessageModel.USER_ID_SYSTEM)
                {
                    this.set('authorType', 'system');
                    this.set('author',     'SYSTEM');

                    this.fromUser = {

                        name : 'SYSTEM'
                    };

                    var body = this.getSystemMessageBody(attributes.extra);

                    if(body)
                    {
                        attributes.body = body;
                    }
                }

                // Files upload

                if(attributes.extra && attributes.extra.type === MessageModel.EXTRA_FILES)
                {
                    if(attributes.upload)
                    {
                        var existingUpload = app.model.watchedUploads.get(attributes.upload.id);

                        if(existingUpload)
                        {
                            this.upload = existingUpload;
                        }
                        else
                        {
                            this.upload = new app.UploadModel(attributes.upload);
                        }

                        app.model.watchedUploads.add(this.upload);
                    }
                    else
                    {
                        // Temporary upload object

                        this.upload = new app.UploadModel({

                            'files_info' : attributes.extra.files
                        });

                        app.model.watchedUploads.add(this.upload);
                    }
                }

                // Store updated attributes

                this.set(attributes);
            }
        },

        getAge : function()
        {
            // Calculate how long ago the message was received (in seconds)

            var currentTime = Math.floor(new Date().getTime()       / 1000);
            var messageTime = Math.floor(this.get('time').getTime() / 1000 - (this.options.localMessage ? 0 : config.serverTimeDifference));

            return Math.ceil(currentTime - messageTime);
        },

        getTime : function()
        {
            return new Date(this.get('time').getTime() - (this.options.localMessage ? 0 : config.serverTimeDifference * 1000));
        },

        getReadableName : function()
        {
            var name = this.get('author');

            return name.lastIndexOf('-') !== -1 ? name.slice(0, name.lastIndexOf('-')) : name;
        },

        getToUserReadableName : function()
        {
            var name = this.get('toAuthor');

            return name.lastIndexOf('-') !== -1 ? name.slice(0, name.lastIndexOf('-')) : name;
        },

        getTalkName : function()
        {
            var toName = this.get('toAuthor');

            return this.getReadableName() + (toName ? '/' + (toName.lastIndexOf('-') !== -1 ? toName.slice(0, toName.lastIndexOf('-')) : toName) : '');
        },

        isSystemMessage : function()
        {
            return this.get('from_id') == MessageModel.USER_ID_SYSTEM;
        },

        // Generates translated version of the system message

        getSystemMessageBody : function(extra)
        {
            var i18n = app.service.i18n;

            switch(extra.type)
            {
                case MessageModel.EXTRA_TALK_CLOSE:
                    if(extra.user) return i18n.trans('sm.closed.talk', { '%user%' : extra.user });

                    return i18n.trans('sm.user.closed.chat');
                break;
                case MessageModel.EXTRA_TALK_OWNER:  return i18n.trans('sm.now.talk.owner', { '%user%' : extra.user });
                case MessageModel.EXTRA_USER_INVITE: return i18n.trans('sm.user.invited',   { '%name%' : extra.name, '%mail%' : extra.mail });
                case MessageModel.EXTRA_USER_LEAVE:  return i18n.trans('sm.user.left',      { '%name%' : extra.name, '%mail%' : extra.mail });
            }

            return null;
        }
    },
    {
        TO_ID_ALL      : -1,
        USER_ID_SYSTEM : -2,

        EXTRA_USER_INVITE : 'user_invite',
        EXTRA_USER_LEAVE  : 'user_leave',
        EXTRA_TALK_START  : 'talk_start',
        EXTRA_TALK_CLOSE  : 'talk_close',
        EXTRA_TALK_OWNER  : 'talk_owner',
        EXTRA_FILES       : 'files'
    });

})(window.Application, window.chatConfig);
