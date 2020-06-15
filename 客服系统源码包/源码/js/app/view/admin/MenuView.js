//==============================================================================
//
//  Menu view
//
//==============================================================================

(function(app, $, config)
{
    app.MenuView = Backbone.View.extend({

        events : {

            'click .status-switch' : 'switchStatus',

            'mousedown #customer-chat-side-button-chat'     : 'showChat',
            'mousedown #customer-chat-side-button-map'      : 'showMap',
            'mousedown #customer-chat-side-button-settings' : 'showSettings',
            'mousedown #customer-chat-side-button-qr'       : 'showQRCode',
            'mousedown #customer-chat-header-menu-qr'       : 'showQRCode',
            'mousedown #customer-chat-side-button-logs'     : 'showLogs',

            'mousedown #customer-chat-header-menu-widget-snippet' : 'showWidgetSnippet',
            'mousedown #customer-chat-side-button-widget-snippet' : 'showWidgetSnippet',

            'click #customer-chat-header-menu-edit' : 'editProfile',
            'click #customer-chat-header-menu-logs' : 'showLogs'
        },

        msgBlinking : false,

        initialize : function(options)
        {
            // Initialize models

            this.settings = app.model.settings;
            this.user     = app.model.user;
            this.chat     = app.model.chat;

            // Initialize views

            this.operatorsView = options.windowView.operatorsView;
            this.tabsView      = options.windowView.tabsView;

            // Cache view components

            this.$window = $(window);

            // Top menu

            this.$statusSwitch   = this.$('.status-switch');
            this.$menu           = this.$('.customer-chat-header-menu');
            this.$button         = this.$('#customer-chat-button-menu');
            this.$avatar         = this.$('.customer-chat-content-message-avatar-operator');
            this.$editProfile    = this.$('#customer-chat-header-menu-edit');
            this.$install        = this.$('#customer-chat-header-menu-install');
            this.$uninstall      = this.$('#customer-chat-header-menu-uninstall');
            this.$editConfig     = this.$('#customer-chat-header-menu-edit-config');
            this.$menuLogs       = this.$('#customer-chat-header-menu-logs');
            this.$widgetSnippet1 = this.$('#customer-chat-header-menu-widget-snippet');
            this.$widgetSnippet2 = this.$('#customer-chat-side-button-widget-snippet');

            // Side menu

            this.$sideMarker = this.$('.customer-chat-side-menu-triangle');
            this.$msgIcon    = this.$('#customer-chat-side-button-chat i');
            this.$sideChat   = this.$('#customer-chat-side-button-chat');
            this.$sideMap    = this.$('#customer-chat-side-button-map');
            this.$sideQR     = this.$('#customer-chat-side-button-qr');
            this.$sideLogs   = this.$('#customer-chat-side-button-logs');

            // Main tabs

            this.$chat     = this.$('#customer-chat-admin-chat');
            this.$map      = this.$('#customer-chat-admin-map');
            this.$settings = this.$('#customer-chat-admin-settings');
            this.$qrCode   = this.$('#customer-chat-admin-qr');
            this.$logs     = this.$('#customer-chat-admin-logs');

            // Conditional visibility

            if(this.user.hasRole('ADMIN'))
            {
                if(config.ui.installed) this.$install.hide();
                else                    this.$uninstall.hide();

                this.$editProfile.hide();
            }
            else
            {
                this.$install.hide();
                this.$uninstall.hide();
                this.$editConfig.hide();
                this.$menuLogs.hide();
                this.$sideLogs.hide();
                this.$widgetSnippet1.hide();
                this.$widgetSnippet2.hide();
            }

            // Initialize

            this.hide();

            if(this.user.hasRole('OPERATOR'))
            {
                // Handle status

                this.listenTo(this.chat, 'change:status', this.updateStatus);
                this.updateStatus(this.chat, this.chat.get('status'));

                // Handle "new message" indicator

                this.listenTo(options.windowView.chatTabView, 'talks.read',   this.stopAnimateMsgIcon);
                this.listenTo(options.windowView.chatTabView, 'talks.unread', this.animateMsgIcon);
            }

            this.listenTo(this.user, 'change', this.updateUser);

            this.listenTo(app, 'show:map', this.showMap);

            this.updateUser();
        },

        updateUser : function()
        {
            this.$button.find('.customer-chat-header-button-text').html(app.service.i18n.trans('welcome') + ', ' + this.user.getReadableName());

            if(this.user.get('image'))
            {
                this.$avatar.css('background-image', 'url("' + this.user.get('image') + '")');
            }
        },

        blinkMsgIcon : function()
        {
            if(!this.msgBlinking)
            {
                return;
            }

            var _this = this;

            this.$msgIcon.fadeOut('slow', function()
            {
                _this.$msgIcon.fadeIn('slow', function()
                {
                    _this.blinkMsgIcon();
                });
            });
        },

        animateMsgIcon : function()
        {
            this.msgBlinking = true;
            this.blinkMsgIcon();
        },

        stopAnimateMsgIcon : function()
        {
            this.msgBlinking = false;
        },

        show : function(evt)
        {
            // Toggle menu

            this.$menu.fadeIn('fast');

            // Handle hiding

            evt.stopImmediatePropagation();

            $('html, body').one('mousedown', $.proxy(this.hide, this));
        },

        hide : function()
        {
            // Hide menu

            this.$menu.fadeOut('fast');

            // Handle showing

            this.$button.one('mousedown', $.proxy(this.show, this));
        },

        switchStatus : function()
        {
            if(this.chat.get('status') === app.AdminChatModel.STATUS_ONLINE)
            {
                this.chat.setStatus(app.AdminChatModel.STATUS_OFFLINE);
            }
            else
            {
                this.chat.setStatus(app.AdminChatModel.STATUS_ONLINE);
            }
        },

        updateStatus : function(chat, status)
        {
            this.$statusSwitch.removeClass('offline online loading');

            switch(status)
            {
                case app.AdminChatModel.STATUS_ONLINE:  this.$statusSwitch.addClass('online');  break;
                case app.AdminChatModel.STATUS_OFFLINE: this.$statusSwitch.addClass('offline'); break;
            }
        },

        showChat : function(evt)
        {
            // Adjust tab marker

            var markerY = 18 + this.$sideChat[0].offsetTop;

            this.$sideMarker.animate({ top : markerY }, 'fast');

            // Show the chat

            this.hideTabs();

            this.$chat.show();

            // Update the scrollers

            $(window).resize();

            // Notify

            app.trigger('menu:show:chat');
        },

        showMap : function(evt)
        {
            // Adjust tab marker

            var markerY = 18 + this.$sideMap[0].offsetTop;

            this.$sideMarker.animate({ top : markerY }, 'fast');

            // Show the chat

            this.hideTabs();

            this.$map.show();

            // Update the scrollers

            $(window).resize();

            // Notify

            app.trigger('menu:show:map');
        },

        showSettings : function(evt)
        {
            // Adjust tab marker

            var markerY = 18 + (evt ? evt.currentTarget : this.$('#customer-chat-side-button-settings')[0]).offsetTop;

            this.$sideMarker.animate({ top : markerY }, 'fast');

            // Show the settings

            this.hideTabs();

            this.$settings.show();

            this.tabsView.render();

            // Update scroll boxes

            this.$('#customer-chat-admin-settings .customer-chat-content-messages').each(function()
            {
                $(this).mCustomScrollbar('update');
            });

            // Notify

            app.trigger('menu:show:settings');
        },

        showQRCode : function(evt)
        {
            // Adjust tab marker

            var markerY = 18 + this.$sideQR[0].offsetTop;

            this.$sideMarker.animate({ top : markerY }, 'fast');

            // Show the settings

            this.hideTabs();

            this.$qrCode.show();

            // Notify

            app.trigger('menu:show:qrcode');
        },

        showLogs : function(evt)
        {
            // Adjust tab marker

            var markerY = 18 + this.$sideLogs[0].offsetTop;

            this.$sideMarker.animate({ top : markerY }, 'fast');

            // Show the logs

            this.hideTabs();

            this.$logs.show();

            // Update scroll boxes

            this.$('#customer-chat-admin-logs .customer-chat-content-messages').mCustomScrollbar('update');

            // Notify

            app.trigger('menu:show:logs');
        },

        editProfile : function()
        {
            // Show the edit tab for the logged-in user

            var settingsButton = this.$('#customer-chat-side-button-settings')[0];

            this.showSettings({ currentTarget : settingsButton });

            // Handle initial loading of the operators

            if(this.chat.operatorsReady) this._editProfile();
            else
            {
                this.listenToOnce(this.chat, 'change:operators', function()
                {
                    this._editProfile();
                });
            }
        },

        _editProfile : function()
        {
            this.operatorsView.showEdit(null, this.user.get('id'));
            this.tabsView.showTab(this.user.hasRole('OPERATOR') ? 0 : 1);
        },

        showWidgetSnippet : function()
        {
            app.view.dialogs.message(app.service.i18n.trans('widget.embd.code'), new app.WidgetCodeView(), 550, 330);
        },

        hideTabs : function()
        {
            this.$chat.hide();
            this.$map.hide();
            this.$settings.hide();
            this.$qrCode.hide();
            this.$logs.hide();
        }
    });

})(window.Application, jQuery, window.chatConfig);
