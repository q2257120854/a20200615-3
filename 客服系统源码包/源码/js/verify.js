//==============================================================================
//
//  Application startup
//
//==============================================================================

jQuery(function($)
{
    var app = window.Application;

    app.config(window.chatConfig);

    app.on('start', function()
    {
        // Initialize services

        this.service.verify = new this.Verification();

        // Initialize views

        this.view.verify = new this.VerificationFormView({ el : '.verify-form' });
    });

    app.start();
});
