//==============================================================================
//
//  Chat view
//
//==============================================================================

(function(app, $, config, _)
{
    var ChatView = app.ChatView = Backbone.View.extend({

        events : {

            'click .customer-chat-content-message-emots-button'  : 'toggleEmoticons',
            'click .customer-chat-emoticon'                      : 'addEmoticon',
            'click .btn-canned-msg'                              : 'selectCannedMessage',
            'click .btn-mail-transcript'                         : 'mailTalkTranscript',
            'change .file-button input'                          : 'onFilesSelect',
            'keydown .customer-chat-content-message-input-field' : 'sendMessage',
            'click .invite'                                      : 'invite',
            'click .leave'                                       : 'leave',
            'show'                                               : '_setInputPadding'
        },

        guestUrl           : '',
        typingInfoBlinking : false,
        lastMsgId          : 0,
        participants       : null,
        participantViews   : null,

        initialize : function(options)
        {
            _.bindAll(this, 'handleSentMessage');

            // Initialize models

            this.settings = app.model.settings;
            this.chat     = app.model.chat;
            this.user     = app.model.user;
            this.talkId   = options.talkId;
            this.userId   = options.userId;

            this.participants     = [];
            this.participantViews = [];

            // Store parent view

            this.parentView = this.options.parentView;

            // Create sub views

            this.chatBox = new app.ChatBoxView({ el : this.$('.customer-chat-content-messages') });

            // Cache view components

            this.$currentUrl           = this.$('.current-url');
            this.$emoticons            = this.$('.customer-chat-emots-menu');
            this.$typingInfo           = this.$('.typing-indicator');
            this.$input                = this.$('.customer-chat-content-message-input-field');
            this.$fileInput            = this.$('[type="file"]');
            this.$fileBtn              = this.$('.file-button');
            this.$participantsScroller = this.$('.customer-chat-talk-header-users .participants-scroller');
            this.$participants         = this.$('.customer-chat-talk-header-users .participants-content');

            this.$fileBtn.data('for', this.$fileBtn.attr('for'));

            if(config.ui.fileSharing == 'true')
            {
                this.fileDropZone = new app.FileDropZoneView({ el : this.el });
                this.fileDropZone.on('drop', this.onFilesDrop, this);
            }
            else
            {
                this.$fileBtn.hide();
            }

            // Initialize elements

            this.$participantsScroller.mCustomScrollbar();

            this.$currentUrl.parent().css('opacity', 0);

            // Handle model

            if(typeof this.model === 'undefined')
            {
                // Request user model

                app.UserModel.getUser(this.userId, $.proxy(function(user)
                {
                    this.model = user;

                    if(this.model.hasRole('OPERATOR'))
                    {
                        this.$el.addClass('operator');
                    }

                    // Handle user updates

                    this.listenTo(this.model, 'change', this.handleModelUpdate);
                    this.handleModelUpdate(false);

                }, this));
            }

            // Handle typing status

            this.listenTo(this.chat, 'talks:typing', this.handleRemoteTyping);

            // Handle participants updates

            this.on('participants:update', this.handleParticipantsUpdate, this);

            if(this.userId)
            {
                this.updateParticipants(this.userId);
            }
        },

        toggleEmoticons : function()
        {
            // Toggle emoticons

            this.$emoticons.toggle('fade', 'fast');
        },

        addEmoticon : function(evt)
        {
            var $emot = $(evt.currentTarget);

            this.$input.val(this.$input.val() + ' ' + $emot.data('emot') + ' ');

            // Set focus on the input

            this.$input.focus();

            // Hide emoticons menu

            this.$emoticons.fadeOut('fast');
        },

        sendMessage : function(evt)
        {
            // Handle typing status

            this.handleTyping();

            // React only to the ENTER key

            if(evt.keyCode !== 13 || evt.shiftKey)
            {
                return;
            }

            var body = this.$input.val();

            // Do nothing if there's no input

            if(body.length == 0)
            {
                return;
            }

            var message = new app.MessageModel({

                author     : this.user.get('name'),
                mail       : this.user.get('mail'),
                authorType : 'operator',
                body       : body,
                time       : new Date(),
                talk_id    : this.talkId,
                from_id    : this.user.get('id'),
                to         : this.userId
            },
            {
                localMessage : true
            });

            message.fromUser = this.user.attributes;

            // Send the message

            this.chat.sendMessage(message, this.handleSentMessage);

            // Add message to the chat box

            this.chatBox.addMessage(message, true);

            // Update participants

            this.updateParticipants(this.user.get('id'));

            // Clear the input field

            this.$input.val('');

            // Notify about message sent

            this.trigger('message.sent', this.talkId, this.userId);
        },

        handleSentMessage : function(data)
        {
            this.lastMsgId = data.message.id;
        },

        handleNewMessages : function(messages, silent)
        {
            var update = false, system = true;

            if(this.silent)
            {
                silent = true;

                this.silent = false;
            }

            for(var i = 0; i < messages.length; i++)
            {
                var message = messages[i];

                // Skip old messages

                if(this.lastMsgId < message.id)
                {
                    this.handleMessage(message);
                    this.lastMsgId = message.id;

                    update = true;
                }

                system = system && message.from_id == app.MessageModel.USER_ID_SYSTEM;
            }

            // Notify

            if(update && !silent)
            {
                if(this.settings.get('sound'))
                {
                    app.service.soundPlayer.play(system ? 'systemMessage' : 'message');
                }

                var lastMessageData = messages[messages.length - 1];

                lastMessageData.info = this.model.get('info');

                var lastMessage = new app.MessageModel(lastMessageData);

                // -----

                // Delaying the execution to get up-to-date unread talks count

                var _this = this;

                setTimeout(function()
                {
                    app.service.notify.create(app.service.i18n.trans('app.name'), {

                        body : lastMessage.getReadableName() + ': ' + lastMessage.get('body'),

                        onClick : function()
                        {
                            // Show the proper talk

                            if(_this.talkId) app.trigger('talk.show', _this.talkId);
                        }
                    });

                }, 0);
            }
        },

        handleMessage : function(msgData)
        {
            // Add the message to the chat box

            if(msgData.from_user_info && typeof msgData.from_user_info.info === 'object') msgData.info = msgData.from_user_info.info;

            var message     = new app.MessageModel(msgData),
                hideMessage = false;

            if(!this.model)
            {
                var toId = message.get('to_id');

                if(toId != -1)
                {
                    var _this = this;

                    app.UserModel.getUser(toId, function(user)
                    {
                        _this.model = user;

                        _this.listenTo(_this.model, 'change', _this.handleModelUpdate);
                        _this.handleModelUpdate(false);
                    });
                }
            }

            // Check for extra information

            var extra = message.get('extra');

            if(extra)
            {
                switch(extra.type)
                {
                    case app.MessageModel.EXTRA_USER_LEAVE:
                        this.removeParticipant(extra.id);
                    break;

                    case app.MessageModel.EXTRA_TALK_CLOSE:
                        // Leave the talk silently

                        this.chat.leaveTalk(this.talkId, undefined, true);
                    break;

                    case app.MessageModel.EXTRA_TALK_OWNER:
                    // Leave the talk if current user didn't send any messages (and isn't talk's owner)

                    if(extra.id != this.user.get('id') && !(this.chat.isTalkOwner(this.talkId, this.user.get('id')) || this.chat.isParticipantInTalk(this.user.get('id'), this.talkId)))
                        {
                            this.chat.leaveTalk(this.talkId, undefined, true);
                        }
                        else
                        {
                            // Store the new owner

                            this.ownerId = parseInt(extra.id);
                        }
                    break;

                    case app.MessageModel.EXTRA_TALK_START:
                        hideMessage = true;
                    break;
                }
            }

            // Add message to the chat box

            if(!hideMessage) this.chatBox.addMessage(message);

            // Update participants

            this.updateParticipants(message.get('from_id'));

            return !hideMessage;
        },

        handleTyping : function()
        {
            if(this.talkId)
            {
                this.chat.updateTypingStatus(this.talkId);
            }
        },

        handleRemoteTyping : function(ids)
        {
            // Check for this talk ID

            if(ids.indexOf(parseInt(this.talkId)) === -1) return;

            this.startTypingInfoBlink();

            // Hide automatically later

            if(this.stopTypingBlinkTimer) clearTimeout(this.stopTypingBlinkTimer);

            this.stopTypingBlinkTimer = setTimeout($.proxy(this.stopTypingInfoBlink, this), ChatView.TYPING_STATUS_TIME);
        },

        handleModelUpdate : function(animate)
        {
            if(typeof animate === 'undefined') animate = true;

            // Update URL currently visited by user

            var info = this.model.get('info');

            if(info)
            {
                if(this.guestUrl !== info.referer)
                {
                    this.guestUrl = info.referer;

                    // Animation

                    var _this = this, duration = animate ? 'slow' : 0;

                    this.$currentUrl.parent().animate({ opacity : 0 }, { duration : duration, complete : function()
                    {
                        _this.$currentUrl.html(info.referer).attr('href', info.referer);

                        $(this).animate({ opacity : 1 }, { duration : duration });
                    }});
                }
            }
        },

        handleParticipantsUpdate : function()
        {
            var _this = this;

            app.UserModel.getUsers(this.participants, function(users)
            {
                // Check if any guest takes part in the talk

                var guest;

                for(var id in users)
                {
                    var user = users[id];

                    if(!user.hasRole('OPERATOR'))
                    {
                        guest = user;

                        break;
                    }
                }

                if(guest)
                {
                    // Update the current model

                    if(_this.model !== guest)
                    {
                        // Remove previous listener

                        if(_this.model)
                        {
                            _this.stopListening(_this.model);
                        }

                        _this.model = guest;

                        // Handle model updates

                        _this.listenTo(_this.model, 'change', _this.handleModelUpdate);
                        _this.handleModelUpdate();
                    }

                    // Show the current URL element

                    _this.$currentUrl.parent().css('visibility', 'visible');
                }
                else if(_this.model && _this.model.hasRole('OPERATOR'))
                {
                    // Hide the current URL element

                    _this.$currentUrl.parent().css('visibility', 'hidden');
                }
            });
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

        selectCannedMessage : function()
        {
            var _this = this;
            var  view = new app.SelectCannedMessageView({ model : app.model.cannedMessages });

            var buttons = {};

            buttons[app.service.i18n.trans('insert')] = function()
            {
                var $this   = $(this);
                var message = view.selected;

                $this.dialog('close');

                // Update the message input field

                if(message)
                {
                    var currValue = _this.$input.val();

                    _this.$input.val(currValue + (currValue.length > 0 ? ' ' : '') + message).focus();
                }
            };

            app.view.dialogs.confirm(app.service.i18n.trans('select.msg'), view, buttons, 'auto');
        },

        mailTalkTranscript : function()
        {
            app.controller.actions.run('mailTalkTranscript', [ this.talkId, this.model && this.model.get('mail') ]);
        },

        addParticipant : function(user)
        {
            var view = new app.ParticipantView({ model : user });

            this.$participants.append(view.el);

            // Remember the view for later removal

            this.participantViews.push(view);
        },

        updateParticipants : function(userId)
        {
            userId = parseInt(userId);

            // Skip SYSTEM user

            if(userId == -2)
            {
                return;
            }

            if(this.participants.indexOf(userId) === -1)
            {
                var _this = this;

                app.UserModel.getUser(userId, function(user)
                {
                    // Display new participant

                    _this.addParticipant(user);

                    _this.$participantsScroller.mCustomScrollbar('update');
                });

                this.participants.push(userId);

                // Notify

                this.trigger('participants:update');
            }
        },

        removeParticipant : function(userId)
        {
            // Find the participant view

            for(var i = this.participantViews.length; i--;)
            {
                var view = this.participantViews[i];

                if(view.model.get('id') == userId)
                {
                    // Remove the view

                    view.remove();
                }
            }
        },

        remove : function()
        {
            Backbone.View.prototype.remove.call(this);

            for(var i = this.participantViews.length; i--;)
            {
                this.participantViews[i].remove();
            }

            this.participantViews = [];

            this.chatBox.clear();
        },

        invite : function()
        {
            // Display operator list pop-up

            var _this = this;
            var  view = new app.SelectUserView({ model : this.chat, filter : function(user)
            {
                return user.hasRole('OPERATOR') && user.get('id') !== app.model.user.get('id');
            } });

            app.view.dialogs.confirm(app.service.i18n.trans('select.operator'), view, {

                'Invite' : function()
                {
                    var $this = $(this);
                    var user  = view.selected;

                    $this.dialog('close');

                    // Invite the user

                    if(user)
                    {
                        _this._invite(user.get('id'));
                    }
                }

            }, 'auto');
        },

        _invite : function(operatorId)
        {
            this.chat.inviteUserToTalk(this.talkId, operatorId, this.userId, $.proxy(this.handleInviteResult, this));
        },

        handleInviteResult : function(data)
        {
            // Check if there was any error

            if(!data.success)
            {
                // Display the error

                app.view.dialogs.message(app.service.i18n.trans('invitation'), data.errors);
            }
            else
            {
                // Add new user to participants list

                var _this = this;

                app.UserModel.getUser(data.userId, function(user)
                {
                    _this.addParticipant(user);
                });

                // Update the talk if it was tranformed from a global talk

                if(data.userTalkMapping)
                {
                    // Store new talk IDs

                    this.chat.watchTalk(data.talkId, data.userTalkMapping);

                    // Notify about the update

                    this.chat.trigger('usertalkmap:update');
                }

                // Request new chat state

                this.chat.manageConnection();
            }
        },

        leave : function()
        {
            // Check if current user is the owner of this talk

            if(this.ownerId == this.user.get('id'))
            {
                // Display extended leave dialog

                this.transferAndLeave();
            }
            else
            {
                // Ask for confirmation

                var _this = this, options = {};

                options[app.service.i18n.trans('leave.talk.confirm')] = function()
                {
                    _this._leave();

                    $(this).dialog('close');
                };

                app.view.dialogs.confirm(app.service.i18n.trans('invitation'), app.service.i18n.trans('leave.talk.q'), options);
            }
        },

        transferAndLeave : function()
        {
            // Display the dialog

            var _this = this;
            var  view = new app.TransferAndLeaveView({ model : this.chat });

            var options = {};

            options[app.service.i18n.trans('transfer.n.leave')] = function()
            {
                var $this = $(this);
                var user  = view.selectUserView.selected;

                $this.dialog('close');

                if(user)
                {
                    // Transfer the talk

                    _this.transfer(user.get('id'));

                    // Leave

                    _this._leave();
                }
            };

            options[app.service.i18n.trans('end.talk')] = function()
            {
                _this.endTalk();

                $(this).dialog('close');
            };

            app.view.dialogs.confirm(app.service.i18n.trans('leave.talk'), view, options, 'auto');
        },

        endTalk : function()
        {
            // Send the close request

            this.chat.closeTalk(this.talkId, this.userId, $.proxy(this.handleEndTalkResult, this));

            // Close the talk's view

            app.view.window.chatTabView.removeTalkView(this.talkId, this.userId);
        },

        handleEndTalkResult : function(data)
        {
            // Check if there was any error

            if(!data.success)
            {
                // Display the error

                app.view.dialogs.message(app.service.i18n.trans('transfer'), data.errors);
            }
        },

        _leave : function()
        {
            // Stop watching this talk

            this.chat.leaveTalk(this.talkId, this.userId, false, $.proxy(function(data)
            {
                if(data.success)
                {
                    // Close the talk's view

                    app.view.window.chatTabView.removeTalkView(this.talkId, this.userId);
                }
                else
                {
                    app.view.dialogs.message(app.service.i18n.trans('leave'), data.errors);
                }

            }, this));
        },

        transfer : function(newOwnerId)
        {
            // Transfer the talk

            this.chat.transferTalk(this.talkId, newOwnerId, $.proxy(this.handleTransferResult, this));

            // Store new owner

            this.ownerId = newOwnerId;
        },

        handleTransferResult : function(data)
        {
            // Check if there was any error

            if(!data.success)
            {
                // Display the error

                app.view.dialogs.message(app.service.i18n.trans('transfer'), data.errors);
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

                user    : this.user,
                chat    : this.chat,
                chatBox : this.chatBox,
                talkId  : this.talkId,
                toId    : this.toId,
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
        },

        _setInputPadding : function()
        {
            if(this._setInputPaddingDisabled) return;

            if(ChatView.inputPadding)
            {
                this.$input.css('padding-left', ChatView.inputPadding);
            }
            else
            {
                setTimeout($.proxy(function()
                {
                    this._setInputPaddingDisabled = true;

                    var hidden = this.$el.is(':hidden');

                    if(hidden) this.$el.show();

                    var btnWidth = this.$('.btn-canned-msg').outerWidth();

                    if(hidden) this.$el.hide();

                    this._setInputPaddingDisabled = false;

                    if(btnWidth > 0)
                    {
                        ChatView.inputPadding = btnWidth + 8;

                        this._setInputPadding();
                    }

                }, this), 0);
            }
        }
    },
    {
        TYPING_STATUS_TIME : 2000,

        inputPadding : null
    });

})(window.Application, jQuery, window.chatConfig, _);
