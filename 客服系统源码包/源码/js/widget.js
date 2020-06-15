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

        this.service.soundPlayer = new this.SoundPlayer();
        this.service.geoloc      = new this.Geolocation();
        this.service.beacon      = new this.Beacon();

        // Initialize collections

        this.model.watchedUploads = new this.WatchedUploadsCollection();

        // Initialize models

        this.model.settings = new this.GuestSettingsModel();
        this.model.chat     = new this.GuestChatModel();

        // Initialize views

        this.view.widget = new this.WidgetView({ el : '#customer-chat-widget', model : this.model.chat });

        // Initialize API

        window.phpLiveChat = new this.WidgetFacade();

        new this.PostMessageApiAdapter(window.phpLiveChat);
    });

    app.start();
});
