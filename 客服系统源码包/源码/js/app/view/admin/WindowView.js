//==============================================================================
//
//  Main window view
//
//==============================================================================

(function(app, $, config)
{
    var WindowView = app.WindowView = Backbone.View.extend({

        initialize : function()
        {
            // Initialize models

            this.settings = app.model.settings;

            // Create sub views

            var user = this.user = app.model.user;

            if(user.hasRole('ADMIN'))
            {
                this.settingsView       = new app.SettingsView      ({ el : this.$('.customer-chat-tab-content-settings-ui'),  collection : app.model.uiSettings, tags : [ 'general' ] });
                this.settingsView       = new app.SettingsView      ({ el : this.$('.customer-chat-tab-content-widget-theme'), collection : app.model.uiSettings, tags : [ 'widget' ]  });
                this.logsView           = new app.LogsView          ({ el : this.$('#customer-chat-admin-logs') });
                this.blacklistView      = new app.BlacklistView     ({ el : this.$('#customer-chat-pages-list') });
                this.DepartmentsView    = new app.DepartmentsView   ({ el : this.$('#customer-chat-departments-tab') });
                this.cannedMessagesView = new app.CannedMessagesView({ el : this.$('#customer-chat-canned-messages-tab') });
            }

            this.chatTabView   = new app.ChatTabView  ({ el : this.$('#customer-chat-admin-chat') });
            this.mapView       = new app.MapView      ({ el : this.$('#customer-chat-admin-map') });
            this.qrCodeView    = new app.QRCodeView   ({ el : this.$('#customer-chat-admin-qr') });
            this.operatorsView = new app.OperatorsView({ el : this.$('#customer-chat-operators-tab') });
            this.historyView   = new app.HistoryView  ({ el : this.$('#customer-chat-history') });
            this.tabsView      = new app.TabsView     ({ el : this.$('#customer-chat-admin-settings') });
            this.menuView      = new app.MenuView     ({ el : this.el, windowView : this });

            if(!user.hasRole('ADMIN'))
            {
                this.tabsView.removeTabByTag('departments');
                this.tabsView.removeTabByTag('settings');
                this.tabsView.removeTabByTag('widget-theme');
                this.tabsView.removeTabByTag('canned-messages');
                this.tabsView.removeTabByTag('blacklist');

                this.$('.customer-chat-tab-button.operators span').html(app.service.i18n.trans('edit.profile'));
            }

            // -----

            if(this.user.hasRole('OPERATOR'))
            {
                // Handle "new message" indicator

                this.titleText = document.title;

                this.listenTo(this.chatTabView, 'talks.read',   this.stopMsgIndicator);
                this.listenTo(this.chatTabView, 'talks.unread', this.startMsgIndicator);
            }

            // Keep updating the scroller when necessary

            this.$('#customer-chat-admin-settings .customer-chat-content-messages')

                .bind('show', function()
                {
                    $(window).trigger('resize');
                })

                .not('#customer-chat-history .customer-chat-content-messages')

                .mCustomScrollbar()
            ;

            // Overwrite the standard alert() function

            window.alert = function(message)
            {
                app.view.dialogs.message(app.service.i18n.trans('alert'), message);
            };

            setTimeout($.proxy(this.checkInstall, this), 0);

            // Handle global events

            this.listenTo(app, 'history.search', this.showHistory);
        },

        showHistory : function()
        {
            // Show the settings tab

            this.menuView.showSettings();

            // Show the history tab

            this.tabsView.showTab(this.user.hasRole('OPERATOR') ? 2 : 4);
        },

        startMsgIndicator : function()
        {
            if(!this.msgIndicatorTimer)
            {
                this.msgIndicatorTimer = setInterval($.proxy(this.indicateMsg, this), WindowView.MSG_INDICATOR_INTERVAL);
            }
        },

        stopMsgIndicator : function()
        {
            if(this.msgIndicatorTimer)
            {
                clearInterval(this.msgIndicatorTimer);

                document.title = this.titleText;

                delete this.msgIndicatorTimer;
            }

            // Hide desktop notifications

            app.service.notify.closeAll();
        },

        indicateMsg : function()
        {
            document.title = document.title !== '!' ? '!' : this.titleText;
        },

        checkInstall : function()
        {
            // Prompt to correct installation if failed

            if(!(config.installStatus.validConfig && config.installStatus.validDb))
            {
                if(app.model.user.hasRole('ADMIN'))
                {
                    var options = {};

                    options[app.service.i18n.trans('edit.config')] = function()
                    {
                        // Redirect to the configuration editing page

                        (document.location || window.location).href = config.installWizardPath;
                    };

                    app.view.dialogs.confirm(app.service.i18n.trans('incorrect.install'), app.template.invalidInstallDialogContent(), options);
                }
                else
                {
                    app.view.dialogs.message(app.service.i18n.trans('please.install'), app.service.i18n.trans('not.installed.msg'));
                }
            }

            // Prompt for installation if not already done

            if(!config.ui.installed)
            {
                if(app.model.user.hasRole('ADMIN'))
                {
                    var options = {};

                    options[app.service.i18n.trans('install')] = function()
                    {
                        // Redirect to the install path

                        (document.location || window.location).href = config.installPath;
                    };

                    app.view.dialogs.confirm(app.service.i18n.trans('install'), app.template.installDialogContent(), options);
                }
                else
                {
                    app.view.dialogs.message(app.service.i18n.trans('please.install'), app.service.i18n.trans('not.installed.msg'));
                }
            }
        }
    },
    {
        MSG_INDICATOR_INTERVAL : 1000
    });

})(window.Application, jQuery, window.chatConfig);
