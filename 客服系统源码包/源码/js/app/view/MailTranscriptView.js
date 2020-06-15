//==============================================================================
//
//  Mail transcript view
//
//==============================================================================

(function(app, $)
{
    app.MailTranscriptView = Marionette.ItemView.extend({

        getTemplate : function()
        {
            return app.template.mailTalkTranscript;
        },

        mailExp : new RegExp('^[-+\\.0-9=a-z_]+@([-0-9a-z]+\\.)+([0-9a-z]){2,}$', 'i'),

        mailValid : false,

        ui : {

            'form' : '.form',
            'mail' : '#customer-chat-transcript-mail'
        },

        events : {

            'input   @ui.mail' : 'validateMail',
            'change  @ui.mail' : 'validateMail',
            'keydown @ui.mail' : 'validateMail',
            'blur    @ui.mail' : 'validateMail'
        },

        initialize : function()
        {
            this.bindUIElements();
        },

        getData : function()
        {
            return {

                mail : this.ui.mail.val()
            };
        },

        reset : function(mail)
        {
            this.ui.mail.val(mail || '');

            this.ui.mail.removeClass('customer-chat-input-error');
        },

        focus : function()
        {
            this.ui.mail.focus();
        },

        validateMail : function()
        {
            if(this.ui.mail.val().length == 0 || !this.mailExp.test(this.ui.mail.val()))
            {
                this.ui.mail.addClass('customer-chat-input-error');

                this.mailValid = false;
            }
            else
            {
                this.ui.mail.removeClass('customer-chat-input-error');

                this.mailValid = true;
            }
        },

        isValid : function()
        {
            this.validateMail();

            return this.mailValid;
        },

        getHeight : function()
        {
            return this.ui.form.height();
        }
    });

})(window.Application, jQuery);
