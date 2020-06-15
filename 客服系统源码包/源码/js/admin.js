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
        this.service.notify      = new this.Notify();
        this.service.qrCode      = new this.QR();

        this.service.notify.requestPermission();

        // Initialize collections

        this.model.watchedUploads = new this.WatchedUploadsCollection();

        // Initialize models

        this.model.user           = new this.UserModel(window.userData);
        this.model.uiSettings     = new this.UISettingsModel();
        this.model.logs           = new this.LogsModel();
        this.model.departments    = new this.DepartmentsModel();
        this.model.cannedMessages = new this.CannedMessagesModel();
        this.model.settings       = new this.AdminSettingsModel();
        this.model.chat           = new this.AdminChatModel();

        this.model.chat.on('users:online', $.proxy(this.UserModel.updateUsersCache, this.UserModel));

        this.model.user.listenTo(this.model.chat, 'operator:saved', function(user)
        {
            if(user.id === this.get('id')) this.set(user);
        });

        // Initialize controllers

        this.controller.actions = new this.ActionController();

        // Initialize views

        this.view.dialogs = new this.DialogsView();
        this.view.window  = new this.WindowView ({ el : '#customer-chat', model : this.model.chat });
    });

    app.start();
});
