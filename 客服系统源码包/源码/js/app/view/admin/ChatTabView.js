//==============================================================================
//
//  Chat tab view
//
//==============================================================================

(function(app, $, config)
{
    app.ChatTabView = Backbone.View.extend({

        events : {

            'click .customer-chat-tab-button .close' : 'closeTalk'
        },

        talkViews    : {},
        tmpTalkViews : {},
        unreadTalks  : 0,

        onlineUserViews : [],
        prevOnlineUsers : [],

        initialize : function()
        {
            // Initialize models

            this.settings = app.model.settings;
            this.chat     = app.model.chat;
            this.user     = app.model.user;

            this.$el.html(app.template.chatTab());

            // Initialize controllers

            this.actions = app.controller.actions;

            // Create sub views

            this.tabsView = new app.TabsView({ el : this.$('.chat-wrapper') });

            // Cache view components

            this.$emoticons           = this.$('.customer-chat-emots-menu');
            this.$input               = this.$('.customer-chat-content-message-input-field');
            this.$onlineList          = this.$('#customer-chat-users-online .customer-chat-content-messages-wrapper.users');
            this.$onlineListOperator  = this.$('#customer-chat-users-online .customer-chat-content-messages-wrapper.operators');

            // Create the scrollers

            this.$onlineList        .parent().mCustomScrollbar();
            this.$onlineListOperator.parent().mCustomScrollbar();

            if(!this.user.hasRole('OPERATOR'))
            {
                this.tabsView.remove();
                this.$('#customer-chat-users-online').addClass('admin');
            }

            // Handle status

            this.listenTo(this.chat, 'change:status', function(chat, status)
            {
                if(status === app.AdminChatModel.STATUS_ONLINE) this.$el.removeClass('offline');
                else                                            this.$el.addClass   ('offline');
            });

            // Handle online users list

            this.listenTo(this.chat, 'users:online', this.renderOnlineUsers);

            // Handle new messages

            this.listenTo(this.chat, 'messages:new', this.handleNewMessages);

            // Handle scroller updates

            this.listenTo(this.tabsView, 'tab.show', function()
            {
                $(window).resize();
            });

            // Handle user(s) -> talk map updates

            this.listenTo(this.chat, 'usertalkmap:update', this.handleUserTalkMapUpdate);

            // Handle "new message" indicator hiding

            this.listenTo(this.tabsView, 'tab.show',       this.handleTalkShown);
            this.listenTo(app,           'menu:show:chat', this.handleChatShown);

            // Handle showing talks

            this.listenTo(app, 'talk.show', this.showTalkById);
        },

        _isUserInList : function(user, userList)
        {
            for(var i = 0; i < userList.length; i++)
            {
                if(user.get('id') == userList[i].get('id'))
                {
                    return true;
                }
            }
        },

        renderOnlineUsers : function(users)
        {
            // Notify about new users

            var onlineUsers = [], notified = false;

            for(var i = 0; i < users.length; i++)
            {
                var userModel = users[i];

                if(userModel.has('id') && userModel.get('roles').indexOf('OPERATOR') === -1)
                {
                    onlineUsers.push(userModel);

                    if(!notified)
                    {
                        if(!this._isUserInList(userModel, this.prevOnlineUsers))
                        {
                            app.service.soundPlayer.play('systemMessage');

                            notified = true;
                        }
                    }
                }
            }

            this.prevOnlineUsers = onlineUsers;

            // Clear previous views

            this.$onlineList.html('');
            this.$onlineListOperator.html('');

            for(var i = 0; i < this.onlineUserViews; i++)
            {
                this.onlineUserViews[i].remove();
            }

            // Add currently available users

            for(var i = 0; i < users.length; i++)
            {
                var userModel = users[i];
                    userView  = new app.OnlineUsersItemView({ model : userModel });

                this.onlineUserViews.push(userView);

                userView.on('click', this.showTalk, this);

                var $item = userView.render().$el;

                // Add item to the view

                if(userModel.get('roles').indexOf('OPERATOR') !== -1) this.$onlineListOperator.append($item);
                else                                                  this.$onlineList.append($item);

                // Initialize user info popover

                new app.UserInfoPopoverView({ model : userModel, button : $item[0] });
            }

            // Update the scroller

            $(window).trigger('resize');
        },

        addTalkView : function(talkId, userId)
        {
            // Create button

            var $button = $(app.template.tabButtonChat());
            var $label  = $button.find('span');

            $label.html('Loading...');

            if(userId)
            {
                app.UserModel.getUser(userId, function(user)
                {
                    $label.html(user.getReadableName());
                });
            }
            else if(talkId)
            {
                this.chat.getTalkName(talkId, function(name)
                {
                    $label.html(name);
                });
            }

            $button.data('info', { talkId : talkId, userId : userId });

            // Animate new message icon

            var $icon = $button.find('.new-msg');

            $icon.hide();

            (function animateIcon()
            {
                $icon.animate({ opacity: 0.01 }, { duration : 'slow', complete : function()
                {
                    $icon.animate({ opacity: 1 }, { duration : 'slow', complete : animateIcon });
                }});
            })();

            // Create content

            var $content = $(app.template.tabContentChat({

                id : Math.floor(Date.now() * Math.random())
            }));

            var chatView = new app.ChatView({ el : $content, talkId : talkId, userId : userId, parentView : this });

            // Add new tab to the view

            this.tabsView.addTab({ button : $button, content : $content });

            // Store the view

            var talkView = { chatView : chatView, $button : $button };

            if(typeof talkId !== 'undefined')
            {
                this.talkViews[talkId] = talkView;
            }
            else if(typeof userId !== 'undefined')
            {
                this.tmpTalkViews[userId] = talkView;
            }

            // Handle sent messages

            chatView.on('message.sent', this.handleMessageSent, this);

            return talkView;
        },

        getTalkView : function(talkId, userId)
        {
            return this.talkViews[talkId] || this.tmpTalkViews[userId];
        },

        removeTalkView : function(talkId, userId)
        {
            // Remove the talk

            var talkView = this.getTalkView(talkId, userId);

            this.tabsView.removeTab(this.tabsView.getButtonIndex(talkView.$button[0]));
            talkView.chatView.remove();

            delete this.talkViews[talkId];
            delete this.tmpTalkViews[userId];
        },

        showTalk : function(user, userId)
        {
            if(user)
            {
                // In admin's mode show history for the user

                if(!this.user.hasRole('OPERATOR'))
                {
                    app.trigger('history.search', {

                        name     : user.get('name'),
                        mail     : user.get('mail'),
                        fromDate : '',
                        toDate   : ''
                    });

                    return;
                }

                // Special care for anonymous visitors

                if(user.get('anonymous'))
                {
                    this.inviteVisitor(user);
                    return;
                }

                userId = user.get('id');
            }

            // Cancel if user's trying to chat with himself

            if(this.user.get('id') == userId)
            {
                // Inform the user

                app.view.dialogs.message(app.service.i18n.trans('new.talk'), app.service.i18n.trans('cant.chat.w.self'));

                return;
            }

            // Create and/or show the talk

            var talkId   = this.chat.getTalkIdForUser(userId),
                talkView = this.getTalkView(talkId, userId);

            if(talkId)
            {
                talkId = parseInt(talkId);
            }

            if(!talkView)
            {
                talkView = this.addTalkView(talkId, userId);

                talkView.chatView.silent = true;

                // Download last messages from this talk

                this.chat.watchTalk(talkId);
                this.chat.manageConnection();

                var talk = this.chat.getTalk(talkId);

                // Display already downloaded messages

                if(talk)
                {
                    talkView.chatView.handleNewMessages(talk, true);
                }
            }

            this.tabsView.showTabForButton(talkView.$button[0]);
        },

        showTalkById : function(talkId)
        {
            var talkView = this.getTalkView(talkId);

            talkId = parseInt(talkId);

            if(!talkView)
            {
                talkView = this.addTalkView(talkId);

                // Download last messages from this talk

                this.chat.watchTalk(talkId);

                var talk = this.chat.getTalk(talkId);

                // Display already downloaded messages

                if(talk)
                {
                    talkView.chatView.handleNewMessages(talk, true);
                }
            }

            this.tabsView.showTabForButton(talkView.$button[0]);
        },

        closeTalk : function(e)
        {
            var info = $(e.currentTarget).parent('.customer-chat-tab-button').data('info');

            this.removeTalkView(info.talkId, info.userId);

            e.stopImmediatePropagation();
        },

        inviteVisitor : function(user)
        {
            var _this   = this;
            var buttons = {};

            buttons[app.service.i18n.trans('invite')] = function()
            {
                _this.chat.inviteVisitor(user);

                $(this).dialog('close');
            };

            app.view.dialogs.confirm(

                app.service.i18n.trans('visitor.invite'),
                app.service.i18n.trans('invite.visitor.q'),

                buttons
            );
        },

        handleNewMessages : function(updatedTalks)
        {
            // Handle groups

            _.each(updatedTalks, function(talkId)
            {
                // Skip global talk

                if(talkId == -1)
                {
                    return;
                }

                var talkView = this.getTalkView(talkId);
                var messages = this.chat.getTalk(talkId);

                var notify;

                for(var i = 0; i < messages.length; i++)
                {
                    var extra = messages[i].extra;

                    if(extra)
                    {
                        switch(extra.type)
                        {
                            case app.MessageModel.EXTRA_TALK_START:
                                notify = false;
                            break;

                            case app.MessageModel.EXTRA_TALK_CLOSE:
                                // Mark talk view as offline

                                if(talkView) talkView.offline = true;
                            break;

                            default:
                                notify = true;
                        }
                    }
                    else
                    {
                        notify = true;
                    }
                }

                if(!notify) return;

                // Create new talk, if needed

                if(!talkView)
                {
                    talkView = this.addTalkView(talkId);

                    // Add messages to the chat box

                    talkView.chatView.handleNewMessages(messages);
                }
                else
                {
                    // If talk view is already in place, filter out old messages and messages from this user

                    if(talkView.chatView.lastMsgId > 0)
                    {
                        messages = _.filter(messages, function(message)
                        {
                            return message.id > talkView.chatView.lastMsgId && message.from_id != this.user.get('id');

                        }, this);
                    }
                }

                if(messages.length) this.initTalkView(talkView, messages);

            }, this);
        },

        handleUserTalkMapUpdate : function()
        {
            // Check if any of the temporary talk views can be updated

            for(var userId in this.tmpTalkViews)
            {
                var talkId = parseInt(this.chat.getTalkIdForUser(userId));

                if(talkId)
                {
                    // Update talk's view

                    var talkView = this.tmpTalkViews[userId];

                    talkView.chatView.talkId = talkId;
                    talkView.$button.data('info', { talkId : talkId, userId : userId });

                    this.talkViews[talkId] = talkView;

                    delete this.tmpTalkViews[userId];
                }
            }
        },

        initTalkView : function(talkView, messages, silent)
        {
            if(talkView.chatView.silent)
            {
                silent = true;
            }

            // Pass all the messages to be handled by the talk's view

            talkView.chatView.handleNewMessages(messages, silent);

            if(!silent)
            {
                // Add "new-message" indicator to the tab's button

                var $icon = talkView.$button.find('.new-msg');

                if($icon.is(':hidden'))
                {
                    $icon.show();

                    this.updateUnreadCounter(1);
                }
            }
        },

        handleMessageSent : function(talkId, userId)
        {
            var talkView = this.getTalkView(talkId, userId);

            // Remove the "new-message" indicator from the tab's button

            var $icon = talkView.$button.find('.new-msg');

            if($icon.is(':visible'))
            {
                $icon.hide();

                this.updateUnreadCounter(-1);
            }
        },

        handleTalkShown : function(tabIndex)
        {
            // Remove the "new-message" indicator from the tab's button

            var $icon = this.tabsView.getButton(tabIndex).find('.new-msg');

            if($icon.is(':visible'))
            {
                $icon.hide();

                this.updateUnreadCounter(-1);
            }

            // Scroll chat box to bottom

            var info     = this.tabsView.getButton(tabIndex).data('info'),
                talkId   = info.talkId,
                userId   = info.userId,
                talkView = this.getTalkView(talkId, userId);

            if(talkView)
            {
                setTimeout(function()
                {
                    talkView.chatView.chatBox.scrollToBottom();

                }, 500);
            }
        },

        handleChatShown : function()
        {
            // Update currently visible talk

            this.tabsView.render();
        },

        updateUnreadCounter : function(x)
        {
            var prevCount = this.unreadTalks;

            this.unreadTalks = Math.max(0, this.unreadTalks + x);

            // Notify about the important states

            if(prevCount === 1 && this.unreadTalks === 0)
            {
                this.trigger('talks.read');
            }
            else
            {
                this.trigger('talks.unread');
            }
        }
    });

})(window.Application, jQuery, window.chatConfig);
