//==============================================================================
//
//  Widget view
//
//==============================================================================

(function(app, $, config)
{
    var WidgetView = app.WidgetView = Backbone.View.extend({

        events : {

            // Login form

            'click #customer-chat-login-start'                : 'login',
            'keydown #customer-chat-content-login-form input' : 'loginOnEnter',

            // Chat box

            'click #customer-chat-button-toggle'                : 'toggle',
            'click #customer-chat-button-toggle i'              : 'toggle',
            'click .customer-chat-header'                       : 'toggle',
            'click .customer-chat-header-title'                 : 'toggle',
            'click .customer-chat-header-indicator'             : 'toggle',

            'click #customer-chat-button-close'                 : 'close',
            'click #customer-chat-button-settings'              : 'toggleSettings',
            'click .customer-chat-content-message-emots-button' : 'toggleEmoticons',
            'click .customer-chat-toggle-sound'                 : 'toggleSetting',
            'click .customer-chat-toggle-scroll'                : 'toggleSetting',
            'click .customer-chat-toggle-emots'                 : 'toggleSetting',
            'click .customer-chat-toggle-media'                 : 'toggleSetting',
            'click .customer-chat-toggle-show'                  : 'toggleSetting',
            'click #customer-chat-toggle-fs'                    : 'toggleFullscreen',
            'click #customer-chat-action-end-chat'              : 'endChat',
            'click #customer-chat-action-end-chat-confirm'      : 'endChatConfirm',
            'click #customer-chat-action-end-chat-cancel'       : 'endChatCancel',
            'click #customer-chat-action-mail-transcript'       : 'showMailTranscript',
            'click #customer-chat-action-transcript-send'       : 'mailTranscriptSend',
            'keydown #customer-chat-content-mail-transcript'    : 'mailTranscriptSendOnEnter',
            'click #customer-chat-action-transcript-cancel'     : 'mailTranscriptCancel',
            'click #customer-chat-action-silent-logout'         : 'silentLogout',
            'click .customer-chat-emoticon'                     : 'addEmoticon',
            'keydown #customer-chat-message-input'              : 'messageTyping',
            'change .file-button input'                         : 'onFilesSelect',
            'click  .file-button input'                         : 'onFileInputClick',
            'click #chat-send-button'                           : 'sendMessage',

            // Contact form

            'click #customer-chat-contact-send' : 'sendContactMessage',

            // Information

            'click #customer-chat-info-back' : 'showPrevState',
        },

        initialized        : false,
        talkInProgress     : false,
        visible            : false,
        state              : '',
        prevState          : '',
        titleBlinking      : false,
        typingInfoBlinking : false,
        emotsVisible       : false,
        messageNamespace   : 'mcs_',

        initialize : function()
        {
            // Initialize models

            this.settings = app.model.settings;

            // Create sub views

            this.loginForm      = new app.LoginFormView         ({ el : this.$('#customer-chat-content-login-form')   });
            this.chatBox        = new app.ChatBoxView           ({ el : this.$('.customer-chat-content-messages')     });
            this.contactForm    = new app.ContactFormView       ({ el : this.$('#customer-chat-content-contact-form') });
            this.mailTranscript = new app.MailTranscriptView    ({ el : this.$('#customer-chat-content-mail-transcript') });
            this.selectAvatar   = new app.SelectAvatarInlineView({ el : this.$('#customer-chat-select-avatar'), model : config.defaultAvatars });

            // Cache view components

            this.$window              = $(window);
            this.$html                = $('html');
            this.$header              = this.$('.customer-chat-header');
            this.$title               = this.$('.customer-chat-header-title');
            this.$mobileTitle         = $('#mobile-widget i');
            this.$toggleBtn           = this.$('#customer-chat-button-toggle');
            this.$settingsBtn         = this.$('#customer-chat-button-settings');
            this.$settings            = this.$('.customer-chat-header-menu');
            this.$typingInfo          = this.$('.typing-indicator');
            this.$emoticons           = this.$('.customer-chat-emots-menu');
            this.$input               = this.$('#customer-chat-message-input');
            this.$fileInput           = this.$('[type="file"]');
            this.$fileBtn             = this.$('.file-button');
            this.$contactName         = this.$('#customer-chat-contact-name');
            this.$contactMail         = this.$('#customer-chat-contact-mail');
            this.$contactMessage      = this.$('#customer-chat-contact-message');
            this.$loginName           = this.$('#customer-chat-login-name');
            this.$loginMail           = this.$('#customer-chat-login-mail');
            this.$info                = this.$('#customer-chat-info-text');
            this.$toggleSound         = this.$('.customer-chat-toggle-sound');
            this.$toggleScroll        = this.$('.customer-chat-toggle-scroll');
            this.$toggleEmots         = this.$('.customer-chat-toggle-emots');
            this.$toggleMedia         = this.$('.customer-chat-toggle-media');
            this.$toggleShow          = this.$('.customer-chat-toggle-show');
            this.$endChat             = this.$('#customer-chat-action-end-chat');
            this.$endChatConfirmation = this.$('#customer-chat-action-end-chat-confirmation');
            this.$endChatConfirm      = this.$('#customer-chat-action-end-chat-confirm');

            if(config.ui.fileSharing == 'true')
            {
                this.fileDropZone = new app.FileDropZoneView({ el : this.$('.file-drop-zone') });
                this.fileDropZone.on('drop', this.onFilesDrop, this);
            }
            else
            {
                this.$fileBtn.hide();
            }

            // Set the initial state

            this.showLoading();

            // Handle on-line/off-line visibility

            this.model.once('operators:online', function()
            {
                this.postMessage('show');

                this.initialized = true;

            }, this);

            this.model.once('operators:offline', function()
            {
                if(!this.initialized && config.ui.hideWhenOffline === 'true')
                {
                    this.postMessage('hide');
                }
                else
                {
                    this.postMessage('show');
                }

            }, this);

            // Check if operators are on-line/off-line

            this.model.once('operators:online',  this.autoLogin,   this);
            this.model.once('operators:offline', this.showContact, this);

            // Disable default link elements functionality for buttons

            this.$('a[href="#"]').click(function(e) { e.preventDefault(); });

            // Handle logging in / out

            this.model.on('login:success',  this.showChat,        this);
            this.model.on('login:login',    this.showLogin,       this);
            this.model.on('login:login',    this.autoShowChat,    this);
            this.model.on('login:error',    this.showLoginError,  this);
            this.model.on('logout:init',    this.onLogout,        this);
            this.model.on('logout:success', this.onLogoutSuccess, this);
            this.model.on('logout:error',   this.onLogoutError,   this);

            // Handle last & new messages

            this.model.on('messages:new', this.handleMessages, this);

            // Handle typing status

            this.model.on('operator:typing', this.handleOperatorTyping, this);

            // Handle settings

            this.settings.on('change', this.renderSettings, this);

            this.renderSettings();

            // Handle frames communication

            this.initFramesCommunication();

            // Start up

            this.model.checkOperators();

            // Store widget's properties

            this.storeProperties();

            // Add welcome message to the chat-box

            this.showWelcomeMessage();

            // Show if it's the mobile or inline version

            if(config.mobile || config.inline) this.show();

            // Handle auto showing

            if(
                config.ui.autoShowWidget === 'true' ||
                config.ui.autoShowWidget !== 'off' && this.settings.get('autoShow')
            )
            {
                // Show the widget

                this.autoShowTimer = setTimeout($.proxy(this.show, this), config.ui.autoShowWidgetAfter * 1000);
            }

            // Handle scrollbar updates

            setInterval($.proxy(this.chatBox.updateScroller, this.chatBox), 1500);
        },

        setState : function(state)
        {
            // Return if it's the current state

            if(this.state == state)
            {
                return;
            }

            // Store the new state

            this.state = state;

            // Show appropriate view

            this.$settings.hide();
            this.$emoticons.hide();

            this.$el.removeClass('login-form chat-box contact-form loading-screen info-screen end-talk mail-transcript');

            switch(state)
            {
                case 'loading':
                    this.$el.addClass('loading-screen');
                    this.$title.html(app.service.i18n.trans('loadingLabel'));
                break;

                case 'chat':
                    this.$el.addClass('chat-box');
                    this.$title.html(app.service.i18n.trans('chatHeader'));

                    // Add last messages to the chat

                    if(this.msgsInitialized)
                    {
                        this.msgsInitialized = true;

                        for(var i = 0; i < this.model.lastMessages.length; i++)
                        {
                            var msgData = this.model.lastMessages[i];

                            var message = new app.MessageModel({

                                authorType : msgData.authorType,
                                author     : msgData.authorType === 'guest' ? msgData.author : this.model.getOperatorName(msgData.from_id),
                                body       : msgData.body,
                                time       : new Date(msgData.datetime)
                            });

                            // Add message to the chat box

                            this.chatBox.addMessage(message, true);
                        }
                    }

                    this.prevState = state;
                break;

                case 'mailTranscript':
                    this.$el.addClass('mail-transcript');
                    this.$title.html(app.service.i18n.trans('mailTranscriptHeader'));

                    // Fill input with user's email

                    var mail = this.model.get('mail');

                    if(mail && mail !== app.service.i18n.trans('empty.mail.placeholder'))
                    {
                        this.mailTranscript.reset(mail);
                    }
                    else
                    {
                        this.mailTranscript.reset();
                    }

                    this.mailTranscript.focus();
                break;

                case 'endTalk':
                    this.$el.addClass('chat-box end-talk');
                    this.$title.html(app.service.i18n.trans('chatHeader'));

                    this.prevState = state;
                break;

                case 'login':
                    this.$el.addClass('login-form');
                    this.$title.html(app.service.i18n.trans('chatHeader'));
                    this.fullscreenOff();
                    this.loginForm.reset();

                    this.prevState = state;
                break;

                case 'contact':
                    this.$el.addClass('contact-form');
                    this.$title.html(app.service.i18n.trans('contactHeader'));
                    this.fullscreenOff();

                    this.prevState = state;
                break;

                case 'info':
                    this.$el.addClass('info-screen');
                break;
            }

            this.updateSize();
        },

        show : function()
        {
            this.visible = true;

            // Disable auto-showing later

            if(config.ui.autoShowWidget === 'once')
            {
                this.settings.set('autoShow', false);
            }

            if(this.autoShowTimer)
            {
                clearTimeout(this.autoShowTimer);

                delete this.autoShowTimer;
            }

            this.$el.addClass('customer-chat-visible');
            this.stopTitleBlink();

            // Go fullscreen if it was the previous state

            if(this.prevFullscreen) this.fullscreenOn();

            // -----

            this.postMessage('animate|bottom=0');
        },

        hide : function(preventAnimation)
        {
            var type = preventAnimation ? 'css' : 'animate';

            this.visible        = false;
            this.prevFullscreen = this.fullscreen;

            // Remember not to auto-show the next time

            if(config.ui.autoShowWidget === 'untilAction')
            {
                this.settings.set('autoShow', false);
            }

            if(this.fullscreen)
            {
                this.postMessage(type + '|bottom=' + (this.headerHeight - (this.contentHeight || this.frameHeight)) + 'px');

                // Exit fullscreen mode

                this.fullscreenOff();
            }
            else
            {
                // Store widget's properties

                this.storeProperties($.proxy(function()
                {
                    // Animate when properties are ready

                    this.postMessage(type + '|bottom=' + (this.headerHeight - (this.contentHeight || this.frameHeight)) + 'px');

                }, this));
            }

            // -----

            this.$el.removeClass('customer-chat-visible');

            // Hide menus

            this.$settings.hide();
            this.$emoticons.hide();
        },

        toggle : function(evt)
        {
            // Prevent on mobile and inline

            if(config.mobile || config.inline)
            {
                return;
            }

            // Prevent when nested elements are clicked

            if(evt && (evt.target !== evt.currentTarget))
            {
                return;
            }

            if(this.visible)
            {
                this.hide();
            }
            else
            {
                this.show();
            }
        },

        toggleFullscreen : function()
        {
            if(this.fullscreen) this.fullscreenOff();
            else                this.fullscreenOn();
        },

        fullscreenOn : function()
        {
            // Disable on mobile and inline version

            if(config.mobile || config.inline)
            {
                return;
            }

            this.storeProperties();

            this.$html.addClass('fs');
            this.postMessage('animate|width=100%,height=100%,' + config.ui.widgetSide + '=0');

            this.fullscreen = true;
        },

        fullscreenOff : function()
        {
            // Disable on mobile and inline version

            if(config.mobile || config.inline)
            {
                return;
            }

            this.$html.removeClass('fs');

            if(this.frameWidth && this.frameHeight && this.frameOffset)
            {
                this.postMessage('animate|width=' + this.frameWidth + 'px,height=' + this.frameHeight + 'px,' + config.ui.widgetSide + '=' + this.frameOffset, 'px');
            }

            this.fullscreen = false;
        },

        close : function()
        {
            if(history.length > 1) history.back();
            else
            {
                window.open('', '_self');
                window.close();
            }
        },

        resetChatAndLoginForm : function()
        {
            this.chatBox.clear();
            this.loginForm.reset();

            this.noWelcomeMessage = false;
        },

        autoLogin : function()
        {
            // Show loading screen

            this.showLoading();

            // Check if user is already logged in

            this.model.autoLogin();
        },

        login : function()
        {
            this.manualLogin = true;

            // Get the input

            var input = {

                department : this.loginForm.selectDepartment.selected[0],
                name       : this.$loginName.val(),
                mail       : this.$loginMail.val(),
                image      : this.selectAvatar.selected
            };

            // Return if form is not valid

            if(!this.loginForm.isValid())
            {
                return;
            }

            // Show loading screen

            this.showLoading();

            // Send the login request

            this.model.login(input);
        },

        loginOnEnter : function(e)
        {
            if(e.which === 13) // ENTER
            {
                this.login();
            }
        },

        toggleSettings : function()
        {
            // Disable if hidden

            if(!this.visible)
            {
                return;
            }

            // Toggle menu

            if(this.$settings.is(':visible'))
            {
                this.$settings.fadeOut('fast');

                // Hide logout confirmation

                this.$endChatConfirmation.hide();
                this.$endChat.show();
            }
            else
            {
                this.$settings.fadeIn('fast');
            }
        },

        toggleEmoticons : function()
        {
            if(this.emotsVisible) this.hideEmoticons();
            else                  this.showEmoticons();
        },

        showEmoticons : function()
        {
            // Hide settings menu

            this.$settings.fadeOut('fast');

            this.emotsVisible = true;

            this.$emoticons.fadeIn('fast');

            var _this = this;

            setTimeout(function()
            {
                $('html, body').bind('click.hideemots', $.proxy(_this.hideEmoticons, _this));

            }, 10);
        },

        hideEmoticons : function()
        {
            this.emotsVisible = false;

            $('html, body').unbind('.hideemots');

            this.$emoticons.fadeOut('fast');
        },

        toggleSetting : function(evt)
        {
            var $option = $(evt.currentTarget);

            // Get setting's name

            var settingName = $option.attr('id').split('customer-chat-setting-toggle-')[1];

            // Update the setting

            this.settings.set(settingName, !this.settings.get(settingName));
        },

        endChat : function()
        {
            // Show confirmation

            this.$endChat.hide();
            this.$endChatConfirmation.show();
        },

        endChatCancel: function()
        {
            // Hide confirmation

            this.$endChatConfirmation.hide();
            this.$endChat.show();
        },

        endChatConfirm : function()
        {
            // Hide confirmation

            this.$endChatConfirmation.hide();
            this.$endChat.show();

            // Hide the menu

            this.$settings.hide();

            // Clear the chatbox & login form

            this.resetChatAndLoginForm();

            // Logout

            this.model.logout();
        },

        mailTranscriptCancel : function()
        {
            this.showPrevState();
        },

        mailTranscriptSend : function()
        {
            if(!this.mailTranscript.isValid())
            {
                return;
            }

            // Send transcript

            this.showLoading();

            this.model.mailTalkTranscript(this.mailTranscript.getData())

                .success(function(data)
                {
                    if(data.success) this._mailTranscriptOnSuccess();
                    else             this._mailTranscriptOnError();

                }.bind(this))

                .fail(this._mailTranscriptOnError.bind(this))
            ;
        },

        _mailTranscriptOnSuccess : function()
        {
            this.showInfo(app.service.i18n.trans('mailTranscriptSuccess'), app.service.i18n.trans('contactSuccessHeader'));
        },

        _mailTranscriptOnError : function()
        {
            this.showInfo(app.service.i18n.trans('mailTranscriptError'), app.service.i18n.trans('contactErrorHeader'));
        },

        mailTranscriptSendOnEnter : function(e)
        {
            if(e.which === 13) // ENTER
            {
                this.mailTranscriptSend();
            }
        },

        silentLogout : function()
        {
            // Clear the chatbox & login form

            this.resetChatAndLoginForm();

            // Show login form

            this.showLogin();
        },

        renderSettings : function()
        {
            // Update view according to the model

            this.settings.get('sound')  ? this.$toggleSound .removeClass('customer-chat-disabled') : this.$toggleSound .addClass('customer-chat-disabled');
            this.settings.get('scroll') ? this.$toggleScroll.removeClass('customer-chat-disabled') : this.$toggleScroll.addClass('customer-chat-disabled');
            this.settings.get('emots')  ? this.$toggleEmots .removeClass('customer-chat-disabled') : this.$toggleEmots .addClass('customer-chat-disabled');
            this.settings.get('media')  ? this.$toggleMedia .removeClass('customer-chat-disabled') : this.$toggleMedia .addClass('customer-chat-disabled');
            this.settings.get('show')   ? this.$toggleShow  .removeClass('customer-chat-disabled') : this.$toggleShow  .addClass('customer-chat-disabled');
        },

        addEmoticon : function(evt)
        {
            var $emot = $(evt.currentTarget);

            this.$input.val(this.$input.val() + ' ' + $emot.data('emot') + ' ');

            // Set focus on the input

            if(!config.mobile) this.$input.focus();

            // Hide emoticons menu

            this.$emoticons.fadeOut('fast');
        },

        handleMessages : function(messages)
        {
            var notify = false, system = true;

            // Add messages to the chat

            for(var i = 0; i < messages.length; i++)
            {
                var msgData = messages[i];

                // Skip messages from the guest himself

                if(this.talkInProgress && msgData.from_id == this.model.get('id'))
                {
                    continue;
                }

                msgData.authorType = 'operator';
                msgData.author     = this.model.getOperatorName(msgData.from_id);

                var message = new app.MessageModel(msgData);

                system = system && message.isSystemMessage();

                // Check for extra information

                var extra = message.get('extra'), showMessage = !message.isSystemMessage();

                if(extra)
                {
                    // Show only necessary system messages

                    showMessage = showMessage || WidgetView.VISIBLE_EXTRA_MESSAGES.indexOf(extra.type) !== -1;

                    switch(extra.type)
                    {
                        case app.MessageModel.EXTRA_TALK_CLOSE:
                            // End the chat

                            this.showEndTalk();
                            this.model.logout();
                        break;

                        case app.MessageModel.EXTRA_TALK_START:
                            showMessage = false;
                        break;
                    }
                }

                if(showMessage)
                {
                    // Add message to the chat box

                    this.chatBox.addMessage(message);

                    notify = true;
                }
            }

            this.talkInProgress = true;

            // Don't notify if old messages are downloaded or guest messages are downloaded

            if(notify && this.shouldNotifyAbout(messages))
            {
                // Play notification sound

                if(this.settings.get('sound'))
                {
                    app.service.soundPlayer.play(system ? 'systemMessage' : 'message');
                }

                // Show the widget and notify visually

                if(!this.visible)
                {
                    if(this.settings.get('show')) this.toggle();
                    else                          this.startTitleBlink();
                }

                if(this.$mobileTitle.is(':visible'))
                {
                    this.stopTitleBlink();
                    this.startTitleBlink();
                }

                // Hide typing indicator

                setTimeout($.proxy(this.stopTypingInfoBlink, this), 1);
            }
        },

        shouldNotifyAbout : function(messages)
        {
            return this.model.lastMessageId > this.model.lastMessageIdAtLogin && messages[0].from_id != this.model.get('id');
        },

        messageTyping : function(evt)
        {
            // Handle typing status

            this.handleTyping();

            // React only to the ENTER key

            if(evt.keyCode !== 13 || evt.shiftKey)
            {
                return;
            }

            this.sendMessage();
        },

        sendMessage : function()
        {
            var body = $.trim(this.$input.val());

            // Do nothing if there's no input

            if(body.length == 0)
            {
                return;
            }

            // Clear the input field

            this.$input.val('');

            // Auto login if not yet logged in

            if(!this.model.isConnected())
            {
                this.noWelcomeMessage = true;

                this.login();

                this.model.once('login:success', function()
                {
                    this._sendMessage(body);

                    this.$input.focus();

                }, this);
            }
            else
            {
                this._sendMessage(body);
            }
        },

        _sendMessage : function(body)
        {
            // Do nothing if there's no input

            if(body.length == 0)
            {
                return;
            }

            var message = new app.MessageModel({

                author     : this.model.get('name'),
                authorType : 'guest',
                body       : body,
                time       : new Date(),
                from_id    : this.model.get('id'),

                from_user_info : { image : this.model.get('image') }
            },
            {
                localMessage : true
            });

            // Send the message

            this.model.sendMessage(message);

            // Add message to the chat box

            this.chatBox.addMessage(message, true);
        },

        inputFocus : function()
        {
            this.$el.addClass('input-focused');

            this.chatBox.updateScroller();
        },

        inputBlur : function()
        {
            var _this = this;

            setTimeout(function()
            {
                _this.$el.removeClass('input-focused');
                _this.chatBox.updateScroller();

            }, 100);
        },

        handleTyping : function()
        {
            this.model.updateTypingStatus();
        },

        handleOperatorTyping : function()
        {
            this.startTypingInfoBlink();

            // Hide automatically later

            if(this.stopTypingBlinkTimer) clearTimeout(this.stopTypingBlinkTimer);

            this.stopTypingBlinkTimer = setTimeout($.proxy(this.stopTypingInfoBlink, this), WidgetView.TYPING_STATUS_TIME);
        },

        sendContactMessage : function()
        {
            // Return if form is not valid

            if(!this.contactForm.isValid())
            {
                return;
            }

            // Get the input

            var input = {

                name     : this.$contactName.val(),
                mail     : this.$contactMail.val(),
                question : this.$contactMessage.val(),
                userInfo : JSON.stringify(config.info)
            };

            // Send question from the contact form

            var _this = this;

            $.post(config.contactPath, input, function(data)
            {
                if(data.success)
                {
                    // Clear the form fields

                    _this.contactForm.reset();

                    _this.showInfo(app.service.i18n.trans('contactSuccessMessage'), app.service.i18n.trans('contactSuccessHeader'));
                }
                else
                {
                    _this.showInfo(app.service.i18n.trans('contactErrorMessage'), app.service.i18n.trans('contactErrorHeader'))
                }
            });

            this.showLoading();
        },

        startTitleBlink : function()
        {
            this.titleBlinking = true;

            this.blinkTitle();
        },

        blinkTitle : function()
        {
            if(!this.titleBlinking)
            {
                return;
            }

            var _this = this;

            this.$mobileTitle.fadeOut('slow');
            this.$title.fadeOut('slow', function()
            {
                _this.$mobileTitle.fadeIn('slow');
                _this.$title.fadeIn('slow', function()
                {
                    _this.blinkTitle();
                });
            });
        },

        stopTitleBlink : function()
        {
            this.titleBlinking = false;
        },

        startTypingInfoBlink : function()
        {
            if(!this.typingInfoBlinking)
            {
                this.typingInfoBlinking = true;
                this.blinkTypingInfo();
            }
        },

        blinkTypingInfo : function()
        {
            if(!this.typingInfoBlinking)
            {
                return;
            }

            var _this = this;

            this.$typingInfo.fadeIn('slow', function()
            {
                _this.$typingInfo.fadeOut('slow', function()
                {
                    _this.blinkTypingInfo();
                });
            });
        },

        stopTypingInfoBlink : function()
        {
            this.typingInfoBlinking = false;
        },

        autoShowChat : function()
        {
            // Login automatically if no departments are available

            var departments = this.model.departments;

            if(!departments || departments.length === 0)
            {
                this.showChat();
            }
        },

        showLogin : function()
        {
            this.setState('login');

            this.showWelcomeMessage();
        },

        showLoginError : function()
        {
            this.showInfo(app.service.i18n.trans('loginError'));
        },

        onLogout : function()
        {
            // Wait for success response

            this.showLoading();
        },

        onLogoutSuccess : function()
        {
            // Initialize the chat again

            if(this.state !== 'endTalk' && this.prevState !== 'endTalk')
            {
                this.showLogin();
                this.model.checkOperators();
            }
            else
            {
                this.showEndTalk();
            }
        },

        onLogoutError : function()
        {
            // Initialize the chat again

            this.showLogin();
            this.model.checkOperators();
        },

        showWelcomeMessage : function(manual, input)
        {
            if(this.noWelcomeMessage) return;

            // Don't show when operator initiates the talk

            if(input && input.auto) return;

            // Clear the chat box

            this.chatBox.clear();

            // Create the message

            var message = new app.MessageModel({

                authorType : 'operator',
                author     : app.service.i18n.trans('initMessageAuthor'),
                body       : app.service.i18n.trans('initMessageBody'),
                time       : new Date()
            },
            {
                localMessage : true
            });

            // Add message to the chat box

            this.chatBox.addMessage(message);

            // Prevent message from being doubled

            this.noWelcomeMessage = true;
        },

        showChat : function()
        {
            this.setState('chat');
        },

        showMailTranscript : function()
        {
            this.setState('mailTranscript');
        },

        showEndTalk : function()
        {
            this.setState('endTalk');
        },

        showContact : function()
        {
            this.setState('contact');
        },

        showLoading : function()
        {
            this.setState('loading');
        },

        showInfo : function(text, title)
        {
            this.$info.html(text);
            this.$title.html(title);

            this.setState('info');
        },

        showPrevState : function()
        {
            this.setState(this.prevState);
        },

        storeProperties : function(callback)
        {
            // Disable on mobile and inline version

            if(config.mobile || config.inline)
            {
                return;
            }

            if(!this.fullscreen)
            {
                this.headerHeight = this.$header.height();

                var _this = this;

                this.postMessage('get.properties', function(data)
                {
                    var p = data.split(',');

                    _this.frameWidth  = parseInt(p[0]);
                    _this.frameHeight = parseInt(p[1]);
                    _this.frameOffset = parseInt(p[2]);

                    if(callback)
                    {
                        callback();
                    }

                });
            }
        },

        postMessage : function(data, callback)
        {
            // Disable on mobile and inline version

            if(config.mobile || config.inline)
            {
                return;
            }

            window.parent.postMessage(this.messageNamespace + data, '*');

            if(callback)
            {
                var $window = this.$window;
                var id      = Math.floor(new Date().getTime() * Math.random());

                var _this = this;

                this.$window.bind('message.' + id, function(evt)
                {
                    var cbData = _this.postMessageData(evt.originalEvent.data);

                    if(!cbData) return;

                    var parts = cbData.split(':');

                    if(parts[0] === data)
                    {
                        callback(parts[1]);
                        $window.unbind('message.' + id);
                    }
                });
            }
        },

        initFramesCommunication : function()
        {
            this.messageNamespace = window.name;

            var _this = this;

            this.$window.bind('message', function(evt)
            {
                var data = _this.postMessageData(evt.originalEvent.data);

                if(!data) return;

                var parts = data.split(':');

                if     (parts[0] === 'state.mobile')  _this.$html.addClass   ('mobile-widget');
                else if(parts[0] === 'state.desktop') _this.$html.removeClass('mobile-widget');
                else if(parts[0] === 'url')           _this.model.currentUrl = decodeURIComponent(parts[1]);
            });
        },

        postMessageData : function(data)
        {
            if(!data || typeof data !== 'string' || data.indexOf(this.messageNamespace) !== 0) return;

            return data.slice(this.messageNamespace.length);
        },

        updateSize : function()
        {
            setTimeout($.proxy(function()
            {
                var height;

                if(this.state === 'login')
                {
                    height = this.loginForm.getHeight() + this.$header.height();
                }
                else if(this.state === 'contact')
                {
                    height = this.contactForm.getHeight() + this.$header.height();
                }
                else if(this.state === 'chat')
                {
                    height = this.frameHeight;
                }

                if(height)
                {
                    this.contentHeight = Math.max(this.frameHeight, height);

                    this.storeProperties($.proxy(function()
                    {
                        if(!this.visible)
                        {
                            this.postMessage('css|bottom=' + (this.headerHeight - (this.contentHeight || this.frameHeight)) + 'px');
                        }

                        this.postMessage('css|minHeight=' + height + 'px');

                    }, this));
                }

            }, this), 0);
        },

        onFileInputClick : function(e)
        {
            if(this.isUploadLocked())
            {
                e.preventDefault();
            }
        },

        onFilesSelect : function(e)
        {
            if(this.isUploadLocked()) return;

            this.sendFiles(null, e.target);
        },

        onFilesDrop : function(files)
        {
            if(this.isUploadLocked()) return;

            this.sendFiles(files);
        },

        isUploadLocked : function()
        {
            return this.currUpload && this.currUpload.get('state') === app.UploadModel.STATE_PENDING;
        },

        sendFiles : function(files, input)
        {
            var files = files || (input && input.files);

            if(input && !input.value || files && files.length === 0)
            {
                return;
            }

            this.lockUpload();

            var uploadController = new app.UploadController({

                user    : this.model,
                chat    : this.model,
                chatBox : this.chatBox,
                files   : files,
                input   : input
            });

            uploadController.on('unlock', this.unlockUpload, this);

            this.currUpload = uploadController.run();
        },

        lockUpload : function()
        {
            this.$fileBtn.addClass('disabled').removeAttr('for');
        },

        unlockUpload : function()
        {
            this.$fileBtn.removeClass('disabled').attr('for', this.$fileBtn.data('for'));

            // Reset file selection

            this.$fileInput.val(null);
        }
    },
    {
        TYPING_STATUS_TIME : 2000,
        ANIMATION_TIME     :  400,

        VISIBLE_EXTRA_MESSAGES : [

            app.MessageModel.EXTRA_TALK_CLOSE
        ]
    });

})(window.Application, jQuery, window.chatConfig);
