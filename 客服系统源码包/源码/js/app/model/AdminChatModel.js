//==============================================================================
//
//  Chat model
//
//==============================================================================

(function(app, $, config, _)
{
    var AdminChatModel = app.AdminChatModel = Backbone.Model.extend({

        defaults : {

            name : 'anonymous',
            mail : '',

            status : null
        },

        usersCache       : {},
        guestsCache      : {},
        onlineUsers      : [],
        lastMessageId    : 0,
        operatorsReady   : false,
        lastTypingUpdate : 0,
        talkingUsersIds  : [],
        watchTalkIds     : [],

        talks             : {},
        userTalkMap       : {},
        talkDepartmentMap : {},
        globalTalks       : {},

        invitingVisitors : {},

        initialize : function()
        {
            // Initialize models

            this.user        = app.model.user;
            this.departments = app.model.departments;

            this.set('status', AdminChatModel.STATUS_OFFLINE);

            // Update state after operators are loaded

            this.once('change:operators', function()
            {
                this.operatorsReady = true;

            }, this);

            // Handle typing status

            this.on('user:store', this.handleTypingUser, this);

            // Handle chatting features

            this.startConnection();
        },

        getTalk : function(id)
        {
            return this.talks[id];
        },

        getGlobalTalk : function(fromId)
        {
            return this.globalTalks[fromId];
        },

        clearGlobalTalk : function(fromId)
        {
            delete this.globalTalks[fromId];
        },

        moveGlobalTalk : function(fromId, newTalkId)
        {
            var globalTalk = this.getGlobalTalk(fromId),
                newTalk    = this.getTalk(newTalkId);

            if(!globalTalk)
            {
                return;
            }

            if(newTalk)
            {
                for(var i = 0; i < globalTalk.length; i++)
                {
                    newTalk.unshift(globalTalk[i]);
                }
            }
            else
            {
                this.talks[newTalkId] = globalTalk;
            }

            this.clearGlobalTalk(fromId);
        },

        getTalkIdForGuest : function(id)
        {
            return this.userTalkMap[id];
        },

        getTalkIdForUsers : function(user1Id, user2Id)
        {
            return this.userTalkMap[user1Id + '_' + user2Id];
        },

        getTalkIdForUser : function(id)
        {
            // Guest talk

            if(this.userTalkMap[id])
            {
                return this.userTalkMap[id];
            }

            // Operators talk

            var user1Id = parseInt(this.user.get('id')),
                user2Id = parseInt(id);

            if(user1Id > user2Id)
            {
                user2Id = user1Id;
                user1Id = id;
            }

            return this.userTalkMap[user1Id + '_' + user2Id];
        },

        getUserIdForTalk : function(talkId)
        {
            for(var userId in this.userTalkMap)
            {
                if(talkId == this.userTalkMap[userId])
                {
                    return userId;
                }
            }

            return null;
        },

        getDepartmentIdForTalk : function(talkId)
        {
            return this.talkDepartmentMap[talkId];
        },

        getDepartmentForTalk : function(talkId)
        {
            return this.departments.getById(this.getDepartmentIdForTalk(talkId));
        },

        getTalkParticipants : function(talk, callback)
        {
            if(!talk)
            {
                callback([]);
            }

            var userIds = [];

            for(var i = 0; i < talk.length; i++)
            {
                // Skip system messages

                if(talk[i].from_id == -2)
                {
                    continue;
                }

                if(userIds.indexOf(talk[i].from_id) === -1)
                {
                    userIds.push(talk[i].from_id);
                }
            }

            var result = [];

            app.UserModel.getUsers(userIds, function(users)
            {
                for(var i = 0; i < userIds.length; i++)
                {
                    result.push(users[userIds[i]]);
                }

                callback(result);
            });
        },

        isParticipantInTalk : function(userId, talkId)
        {
            var talk = this.getTalk(talkId);

            if(talk)
            {
                for(var i = talk.length - 1; i >= 0; i--)
                {
                    if(talk[i].from_id == userId)
                    {
                        return true;
                    }
                }
            }

            return false;
        },

        getTalkOwner : function(talkId)
        {
            var talk = this.getTalk(talkId);

            if(talk)
            {
                for(var i = talk.length - 1; i >= 0; i--)
                {
                    var msg   = talk[i],
                        extra = msg.extra;

                    if(extra && extra.type === app.MessageModel.EXTRA_TALK_OWNER)
                    {
                        return extra.id;
                    }
                }
            }

            return null;
        },

        isTalkOwner : function(talkId, userId)
        {
            return this.getTalkOwner(talkId) == userId;
        },

        getTalkName : function(talkId, callback)
        {
            var uid = this.getUserIdForTalk(talkId);

            if(uid && uid.toString().indexOf('_') === -1) // skip operator-operator talks
            {
                app.UserModel.getUser(uid, function(user)
                {
                    callback(user.getReadableName());
                });

                return;
            }

            var userId = this.user.get('id'); // logged in user's ID
                talk   = this.getTalk(talkId),
                name;

            if(talk)
            {
                // Find the user, which name to use

                for(var i = 0, len = talk.length; i < len; i++)
                {
                    var message = talk[i];

                    if(
                        message.from_id != -2        // skip SYSTEM messages
                        && message.from_id != userId // skip messages from the logged in user
                    )
                    {
                        name = new app.UserModel(message.from_user_info).getReadableName();

                        break;
                    }
                }

                if(name)
                {
                    callback(name);
                }
                else
                {
                    app.UserModel.getUser(talk[0].to_id, function(user)
                    {
                        callback(user.getReadableName());
                    });
                }
            }
            else
            {
                // Wait for the messages to come for this talk

                this.on('messages:new', function handler(updatedTalks)
                {
                    if(updatedTalks.indexOf(talkId.toString()) !== -1)
                    {
                        // Stop listening

                        this.off('messages:new', handler);

                        // Call the function again

                        this.getTalkName(talkId, callback);
                    }

                }, this);
            }
        },

        inviteUserToTalk : function(talkId, operatorId, guestId, callback)
        {
            // Send invitation request

            $.post(config.inviteToTalkPath, { talkId : talkId, userId : operatorId, guestId : guestId }, callback);
        },

        leaveTalk : function(talkId, guestId, silent, callback)
        {
            if(typeof silent === 'undefined') silent = false;

            talkId = parseInt(talkId);

            if(!isNaN(talkId))
            {
                this.unwatchTalk(talkId);
            }
            else
            {
                talkId = undefined;
            }

            // Send leave request

            var p = $.post(config.leaveTalkPath, { talkId : talkId, guestId : guestId, silent : silent });

            if(callback) p.then(callback);
        },

        closeTalk : function(talkId, guestId, callback)
        {
            talkId = parseInt(talkId);

            if(!isNaN(talkId))
            {
                this.unwatchTalk(talkId);
            }
            else
            {
                talkId = undefined;
            }

            // Send close request

            $.post(config.closeTalkPath, { talkId : talkId, guestId : guestId }, callback);
        },

        transferTalk : function(talkId, newOwnerId, callback)
        {
            // Send transfer request

            $.post(config.transferTalkPath, { talkId : talkId, newOwnerId : newOwnerId }, callback);
        },

        onUsers : function(users, visitors)
        {
            var usersData    = [];
            this.onlineUsers = [];

            // Store online users

            for(var i = 0, l = users.length; i < l; i++)
            {
                usersData.push(users[i]);

                this.onlineUsers.push(new app.UserModel(users[i]));
            }

            // Store anonymous visitors

            this.clearUnusedInvites(visitors);

            for(i = 0, l = visitors.length; i < l; i++)
            {
                var userData = this.initVisitor(visitors[i]);

                usersData.push(userData);

                this.onlineUsers.push(new app.UserModel(userData));
            }

            // Notify about online user(s)

            this.trigger('users:online', this.onlineUsers);
        },

        handleTypingUser : function(user)
        {
            if(this.talkingUsersIds.indexOf(user.id) === -1)
            {
                this.talkingUsersIds.push(user.id);
            }
        },

        updateTypingStatus : function(talkId)
        {
            // Send the request only once per given amount of time

            var time = (new Date()).getTime();

            if(this.lastTypingUpdate + AdminChatModel.POLLING_INTERVAL < time)
            {
                this.lastTypingUpdate = time;

                // Send typing status update request

                $.post(config.updateTypingStatusPath, { talkId : talkId, status : true });
            }
        },

        getTypingStatus : function(callback)
        {
            // Get users' IDs

            if(this.talkingUsersIds.length > 0)
            {
                // Get typing status

                var _this = this;

                var p = $.post(config.getTypingStatusPath, function(data)
                {
                    if(data.success)
                    {
                        var typing = _this.filterTyping(data.results);

                        if(typing.length > 0) _this.trigger('talks:typing', typing);
                    }
                });

                if(callback) p.always(callback);
            }
            else
            {
                if(callback) callback();
            }
        },

        filterTyping : function(data)
        {
            var result = [];

            for(var id in data)
            {
                if(data[id]) result.push(parseInt(id));
            }

            return result;
        },

        onTalks : function(talks)
        {
            // Find talks with new messages

            var updatedTalks   = [],
                userIds        = [],
                messages       = [];

            for(var id in talks)
            {
                var storedTalk = this.talks[id],
                    talk       = talks[id];

                // Collect user IDs and messages data

                for(var i = 0; i < talk.length; i++)
                {
                    if(userIds.indexOf(talk[i].from_id) === -1) userIds.push(talk[i].from_id);

                    messages.push(talk[i]);
                }

                if(!storedTalk)
                {
                    // Save the new talk

                    this.talks[id] = talk;

                    // Update last read message ID

                    this.updateLastMessageId(talk[talk.length - 1].id);

                    updatedTalks.push(id);
                }
                else
                {
                    // Add new messages to the talk

                    for(var i = 0; i < talk.length; i++)
                    {
                        storedTalk.push(talk[i]);
                    }

                    // Update last read message ID

                    this.updateLastMessageId(talk[talk.length - 1].id);

                    updatedTalks.push(id);
                }
            }

            if(updatedTalks.length > 0)
            {
                // Request user details

                var _this = this;

                app.UserModel.getUsers(userIds, function()
                {
                    // Add user details to each message

                    _this.addUserInfoToMessages(messages, function()
                    {
                        // Notify about new messages

                        _this.trigger('messages:new', updatedTalks);

                    }, false);
                });
            }
        },

        onUploads : function(data)
        {
            var _this = this;

            data = _.values(data);

            if(data.length > 0)
            {
                app.model.watchedUploads.set(data, { remove : false });
            }
        },

        addUserInfoToMessages : function(messages, callback, includeRecipients)
        {
            if(typeof includeRecipients === 'undefined') includeRecipients = true;

            // Collect all user IDs

            var ids = [];

            for(var i = 0; i < messages.length; i++)
            {
                if(ids.indexOf(messages[i].from_id) === -1)
                {
                    ids.push(messages[i].from_id);
                }

                if(includeRecipients && ids.indexOf(messages[i].to_id) === -1)
                {
                    ids.push(messages[i].to_id);
                }
            }

            // Request user data

            app.UserModel.getUsers(ids, function(users)
            {
                // Fill messages with appropriate details

                for(var i = 0; i < messages.length; i++)
                {
                    messages[i].from_user_info = users[messages[i].from_id].attributes;

                    if(includeRecipients) messages[i].to_user_info = users[messages[i].to_id].attributes;
                }

                // Notify about success

                callback && callback();
            });
        },

        getLastMessages : function(guestId, lastReadId, always)
        {
            // Get last messages data

            $.post(config.lastMessagesPath, { lastMsgId : lastReadId, guestId : guestId }).success(function(data)
            {
                always(data.messages);

            }).fail(function()
            {
                always([]);
            });
        },

        storeUser : function(user)
        {
            this.usersCache[user.id] = user;

            // Notify about user stored

            this.trigger('user:store', user);

            // Save the cookie
            /*
            var date    = new Date();
            var minutes = 15;

            date.setTime(date.getTime() + minutes * 60 * 1000);

            $.cookie('customer-chat-admin-users', JSON.stringify(this.usersCache), { expires : date });*/
        },

        storeGuest : function(guest)
        {
            this.guestsCache[guest.id] = guest;

            // Save the cookie
            /*
            var date    = new Date();
            var minutes = 15;

            date.setTime(date.getTime() + minutes * 60 * 1000);

            $.cookie('customer-chat-admin-guests', JSON.stringify(this.guestsCache), { expires : date });*/
        },

        clearOperator : function(operator)
        {
            delete this.usersCache[operator.id];

            // Update the cookie
            /*
            var date    = new Date();
            var minutes = 15;

            date.setTime(date.getTime() + minutes * 60 * 1000);

            $.cookie('customer-chat-admin-users', JSON.stringify(this.usersCache), { expires : date });*/
        },

        clearGuest : function(guest)
        {
            delete this.guestsCache[guest.id];

            // Update the cookie
            /*
            var date    = new Date();
            var minutes = 15;

            date.setTime(date.getTime() + minutes * 60 * 1000);

            $.cookie('customer-chat-admin-guests', JSON.stringify(this.guestsCache), { expires : date });*/
        },

        loadOperators : function()
        {
            // Get the list of all operators

            var _this = this;

            $.get(config.listOperatorsPath, function(data)
            {
                // Store the operators

                _.each(data.users, function(operator)
                {
                    if(!operator.departments)
                    {
                        operator.departments = [];
                    }

                    _this.storeUser(operator);
                });

                // Notify

                _this.trigger('change:operators');
            });
        },

        getOperators : function()
        {
            var result = [];

            for(var key in this.usersCache)
            {
                result.push(this.usersCache[key]);
            }

            return result;
        },

        getOperator : function(id)
        {
            return this.usersCache[id];
        },

        getGuest : function(id)
        {
            return this.guestsCache[id];
        },

        initVisitor : function(visitor)
        {
            var userData = {

                anonymous : true,
                name      : visitor.name,
                roles     : [ 'GUEST' ],
                info      : {

                    referer : visitor.url
                }
            };

            // Handle invitation status

            var inviteStatus = this.invitingVisitors[userData.name];

            if(inviteStatus)
            {
                userData.inviting    = inviteStatus === 'inviting';
                userData.invited     = inviteStatus === 'invited';
                userData.inviteError = inviteStatus === 'error';
            }

            return userData;
        },

        inviteVisitor : function(user)
        {
            var name = user.get('name');

            if(this.invitingVisitors[name]) // already inviting this visitor
            {
                return;
            }

            this.invitingVisitors[name] = 'inviting';

            user.set('inviting', true);

            var _this = this;

            $.post(config.trackLoginPath, { name : name })

                .done(function(data)
                {
                    _this.invitingVisitors[name] = 'invited';
                })

                .fail(function()
                {
                    _this.invitingVisitors[name] = 'error';
                })
            ;
        },

        clearUnusedInvites : function(visitors)
        {
            for(var name in this.invitingVisitors)
            {
                var found = false;

                for(i = 0, l = visitors.length; i < l; i++)
                {
                    if(visitors[i].name == name)
                    {
                        found = true;
                        break;
                    }
                }

                if(!found)
                {
                    delete this.invitingVisitors[name];
                }
            }
        },

        saveOperator : function(operator)
        {
            // Save operator on the server

            var data = _.clone(operator);

            data.roles = data.roles.join(',');

            var _this = this;

            $.post(config.saveOperatorPath, data, function(data)
            {
                if(data.success)
                {
                    // Save operator in the local cache

                    if(data.id)
                    {
                        // store ID generated on server-side (only on create action)

                        operator.id = data.id;
                    }

                    _this.storeUser(operator);

                    // Notify success

                    _this.trigger('change:operators operator:saved', operator);
                }
                else
                {
                    // Notify failure

                    _this.trigger('operator:saveError', data.errors);
                }
            });
        },

        deleteOperator : function(operator)
        {
            // Remove operator from the local cache

            this.clearOperator(operator);

            // Remove operator from the server

            var _this = this;

            $.post(config.deleteOperatorPath, operator, function(data)
            {
                if(data.success)
                {
                    // Notify success

                    _this.trigger('change:operators operator:deleted');
                }
                else
                {
                    // Notify error

                    _this.trigger('operator:deleteError');
                }
            })
        },

        loadUsersData : function(messages, callback)
        {
            var _this = this;

            var loadCount = 0;

            // Check if there's any message from a not known operator

            for(var i = 0; i < messages.length; i++)
            {
                var message = messages[i];

                if(!this.usersCache[message.from_id])
                {
                    // Load operator's info

                    loadCount++;

                    $.post(config.getUserPath, { id : message.from_id })

                        .success(function(data)
                        {
                            if(data.success)
                            {
                                // Store the data

                                _this.storeUser(data.user);
                            }
                        })

                        .always(function()
                        {
                            loadCount--;

                            if(loadCount <= 0)
                            {
                                // Finish the operation

                                callback();
                            }
                        })
                    ;
                }
            }

            if(loadCount <= 0)
            {
                // Finish the operation

                callback();
            }
        },

        getOperatorName : function(id)
        {
            return this.usersCache[id] && this.usersCache[id].name;
        },

        queryHistory : function(query, callback, errorCallback)
        {
            $.post(config.queryHistoryPath, { query : JSON.stringify(query) }, function(data)
            {
                callback(data);

            }).fail(errorCallback);
        },

        clearHistory : function(callback, errorCallback)
        {
            $.post(config.clearHistoryPath, function(data)
            {
                if(data.success) callback     (data);
                else             errorCallback(data);

            }, 'JSON').fail(errorCallback);
        },

        sendMessage : function(message, callback)
        {
            // Prepare data

            var input = {

                talk_id : message.get('talk_id'),
                to      : message.get('to'),
                body    : message.get('body'),
                extra   : JSON.stringify(message.get('extra'))
            };

            // Send message to the server

            var _this = this;

            $.post(config.sendMessagePath, input, function(data)
            {
                if(data.success)
                {
                    // Add message to the talk cache

                    var talk = _this.getTalk(data.talk_id);

                    if(talk)
                    {
                        talk.push(data.message);
                    }

                    // Update last read message ID

                    _this.updateLastMessageId(data.message.id);

                    // Store new talk IDs

                    _this.watchTalk(data.talk_id, data.userTalkMapping);

                    // Notify success

                    _this.trigger('messages:sent', data.to, data.message);
                    _this.trigger('usertalkmap:update');
                }
                else
                {
                    // Notify error

                    _this.trigger('messages:sendError');
                }

                if(callback) callback(data);
            });
        },

        mailTalkTranscript : function(data)
        {
            return $.post(config.mailTalkTranscriptPath, data);
        },

        setStatus : function(status)
        {
            switch(status)
            {
                case AdminChatModel.STATUS_ONLINE:
                    this.startConnection();
                break;

                case AdminChatModel.STATUS_OFFLINE:
                    this.resetLastActivity();
                    this.stopConnection();
                break;
            }

            this.set('status', status);
        },

        resetLastActivity : function(callback)
        {
            return $.post(config.resetLastActivityPath);
        },

        startConnection : function()
        {
            // Reset request statuses

            this.initRequestsStatus();

            this.stopConnection();

            this.connectionTimer = setInterval($.proxy(this.manageConnection, this), AdminChatModel.POLLING_INTERVAL);

            // Start immediately the first time

            this.manageConnection();

            this.set('status', AdminChatModel.STATUS_ONLINE);
        },

        stopConnection : function()
        {
            if(this.connectionTimer)
            {
                clearInterval(this.connectionTimer);
            }

            this.set('status', AdminChatModel.STATUS_OFFLINE);
        },

        manageConnection : function()
        {
            // Don't make more requests before previous ones has completed

            if(!this.prevRequestsComplete())
            {
                return;
            }

            // Reset request statuses

            this.resetRequestsStatus();

            var _this = this;

            this._manageConnection(function()
            {
                _this.requestsStatus._manageConnection = true;
            });

            if(this.user.hasRole('OPERATOR'))
            {
                // Checking typing status

                this.getTypingStatus(function()
                {
                    _this.requestsStatus.getTypingStatus = true;
                });
            }
            else
            {
                this.requestsStatus.getTypingStatus = true;
            }
        },

        _manageConnection : function(callback)
        {
            var _this = this,
                input = {

                lastMessageId : this.lastMessageId,
                watchedTalks : this.watchTalkIds.join(',')
            };

            if(app.model.watchedUploads.length > 0)
            {
                input.watchedUploads = app.model.watchedUploads.pluck('id').join(',');
            }

            var p = $.post(config.manageConnectionPath, input, function(data)
            {
                if(_this.user.hasRole('OPERATOR'))
                {
                    // User(s) -> talk map

                    _this.updateUserTalkMap(data.userTalkMap);

                    // Talk -> department map

                    _this.updateTalkDepartmentMap(data.talkDepartmentMap);

                    // Notify about the update

                    _this.trigger('usertalkmap:update');

                    // Talks

                    _this.onTalks(data.talks);

                    // Uploads

                    _this.onUploads(data.uploads);
                }

                // Online users

                _this.onUsers(data.users, data.visitors);
            });

            if(callback) p.always(callback);
        },

        watchTalk : function(id, userTalkMapping)
        {
            id = parseInt(id);

            if(!isNaN(id) && this.watchTalkIds.indexOf(id) === -1)
            {
                this.watchTalkIds.push(id);
            }

            for(var k in userTalkMapping)
            {
                this.userTalkMap[k] = userTalkMapping[k];
            }
        },

        unwatchTalk : function(id)
        {
            // Remove the talk from watched talks

            var pos = this.watchTalkIds.indexOf(id);

            if(pos !== -1)
            {
                this.watchTalkIds.splice(pos, 1);
            }
        },

        updateUserTalkMap : function(map)
        {
            if(map)
            {
                // Store the map

                this.userTalkMap = map;
            }

            // Move previously global messages to their own talks if needed

            for(var id in map)
            {
                this.moveGlobalTalk(id, map[id]);
            }
        },

        updateTalkDepartmentMap : function(map)
        {
            if(map)
            {
                // Extend the current map

                for(var talkId in map)
                {
                    this.talkDepartmentMap[talkId] = map[talkId];
                }
            }
        },

        updateLastMessageId : function(newMessageId)
        {
            // Make sure it's an integer

            newMessageId = parseInt(newMessageId);

            // Store if greater than the current one

            if(this.lastMessageId < newMessageId)
            {
                this.lastMessageId = newMessageId;
            }
        },

        prevRequestsComplete : function()
        {
            // Reset if too much time passed

            if(Date.now() - this.requestInitTime > AdminChatModel.REQUEST_STATUS_RESET_TIMEOUT)
            {
                this.initRequestsStatus();

                return true;
            }

            for(var k in this.requestsStatus)
            {
                if(!this.requestsStatus[k])
                {
                    return false;
                }
            }

            this.requestInitTime = Date.now();

            return true;
        },

        initRequestsStatus : function()
        {
            this.requestInitTime = Date.now();

            this.requestsStatus = {

                _manageConnection : true,
                getTypingStatus   : true
            };
        },

        resetRequestsStatus : function()
        {
            for(var k in this.requestsStatus)
            {
                this.requestsStatus[k] = false;
            }
        }
    },
    {
        STATUS_ONLINE                : 'online',
        STATUS_OFFLINE               : 'offline',

        POLLING_INTERVAL             : parseInt(config.ui.pollingInterval) * 1000,
        REQUEST_STATUS_RESET_TIMEOUT : 20000
    });

})(window.Application, jQuery, window.chatConfig, _);
