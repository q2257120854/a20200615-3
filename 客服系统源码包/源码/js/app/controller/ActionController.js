//==============================================================================
//
//  Controller handling global actions
//
//==============================================================================

(function(app, _)
{
    var ActionController = app.ActionController = function() {};

    _.extend(ActionController.prototype, {

        run : function(actionName, attrs)
        {
            if(this.actions[actionName])
            {
                this.actions[actionName].apply(this, attrs);
            }
        },

        actions : {

            showTalk : function(talkId)
            {
                app.trigger('talk.show', talkId);
            },

            mailTalkTranscript : function(talkId, mail)
            {
                // Display pop-up window

                var view = new app.MailTranscriptView(), buttons = {}, _this = this;

                buttons[app.service.i18n.trans('send')] = function()
                {
                    var $this = $(this);

                    if(view.isValid())
                    {
                        app.view.dialogs.message(app.service.i18n.trans('uploading'), app.service.i18n.trans('uploading'));

                        // Send transcript

                        var input = view.getData();

                        input.talkId = talkId;

                        app.model.chat.mailTalkTranscript(input)

                            .success(function(data)
                            {
                                if(data.success) _this._mailTranscriptOnSuccess();
                                else             _this._mailTranscriptOnError();

                            }.bind(_this))

                            .fail(_this._mailTranscriptOnError.bind(_this))
                        ;

                        // Clean

                        $this.dialog('close');

                        view.destroy();
                    }
                };

                app.view.dialogs.confirm(app.service.i18n.trans('mailTranscriptHeader'), view, buttons, 300);

                // Set default email (guest's email)

                if(mail && mail !== app.service.i18n.trans('empty.mail.placeholder')) view.reset(mail);
            }
        },

        _mailTranscriptOnSuccess : function()
        {
            app.view.dialogs.message(app.service.i18n.trans('contactSuccessHeader'), app.service.i18n.trans('mailTranscriptSuccess'));
        },

        _mailTranscriptOnError : function()
        {
            app.view.dialogs.message(app.service.i18n.trans('error'), app.service.i18n.trans('mailTranscriptError'));
        }
    });

})(window.Application, _);
