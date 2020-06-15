//==============================================================================
//
//  VerificationFormView
//
//==============================================================================

(function(app, config)
{
    var VerificationFormView = Marionette.ItemView.extend({

        template : false,

        ui : {

            token   : '.token',
            code    : '.code',
            submit  : '[type="submit"]',
            loading : '.loading',
            error   : '.error'
        },

        events : {

            'submit' : 'onSubmit'
        },

        initialize : function(options)
        {
            this.loading = false;

            this.render();

            this.verify = app.service.verify;
            this.verify.onSuccess = $.proxy(this.onSuccess, this);
            this.verify.onFailure = $.proxy(this.onFailure, this);
            this.verify.onError   = $.proxy(this.onError,   this);
        },

        onSubmit : function(e)
        {
            if(!this.done) e.preventDefault();

            if(this.loading) return;

            this.startLoading();

            this.verify.verify(this.ui.code.map(this.getCodeFromInput).get());
        },

        getCodeFromInput : function(index, el)
        {
            return el.value.trim();
        },

        onSuccess : function(data)
        {
            // Include token in the form and submit it

            this.ui.token.val(data.token);
            this.done = true;
            this.$el.submit();
        },

        onFailure : function(data)
        {
            this.stopLoading();

            // Display the error

            var msg = VerificationFormView.ERRORS[data.error] || VerificationFormView.DEFAULT_ERROR;

            this.ui.error.html(msg).show();
        },

        onError : function(e)
        {
            this.stopLoading();

            // Display the error

            this.ui.error.html(VerificationFormView.DEFAULT_ERROR).show();
        },

        startLoading : function()
        {
            this.loading = true;
            this.ui.loading.stop().fadeIn();
            this.ui.error.hide();
            this.ui.submit.addClass('disabled');
        },

        stopLoading : function()
        {
            this.ui.submit.removeClass('disabled');
            this.ui.loading.stop().fadeOut();
            this.loading = false;
        }
    },
    {
        DEFAULT_ERROR : app.service.i18n.trans('connection.error'),

        ERRORS : {

            'invalid.code.format' : app.service.i18n.trans('invalid.code.format'),
            'invalid.purchase'    : app.service.i18n.trans('invalid.purchase')
        }
    });

    app.VerificationFormView = VerificationFormView;

})(window.Application, window.chatConfig);
