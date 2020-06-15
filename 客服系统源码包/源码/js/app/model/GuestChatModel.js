//==============================================================================
//
//  Chat model
//
//==============================================================================

(function(app, $, config, _)
{
    var GuestChatModel = app.GuestChatModel = Backbone.Model.extend({

        defaults : {

            name : 'anonymous',
            mail : ''
        },

        guestModel : true,

        lastMessages         : [],
        lastMessageIdAtLogin : 0,
        lastMessageId        : 0,

        lastTypingUpdate : 0,

        initialize : function()
        {
            this.on('login:success', this.startConnection, this);
            this.on('login:success', this.stopTracking,    this);
            this.on('login:success', this.confirmLogin,    this);
            this.on('login:login',   this.startTracking,   this);
            this.on('logout:init',   this.startTracking,   this);
        },

        autoLogin : function()
        {
            // Check if user is already logged in

            var _this = this;

            $.post(config.isLoggedInPath, { info : JSON.stringify(config.info) }, function(data)
            {
                if(data.success)
                {
                    // Store the login data

                    _this.set({ id : data.id, name : _this._getVisibleName(data.name), mail : data.mail, image : data.image });

                    // Cache user

                    app.UserModel.cacheUsers([ { id : data.id, name : _this._getVisibleName(data.name), mail : data.mail, image : data.image } ]);

                    if(data.lastMessageId)
                    {
                        _this.lastMessageIdAtLogin = data.lastMessageId;
                    }

                    // Notify success

                    _this.trigger('login:success');
                }
                else
                {
                    // Notify about need to log in again

                    _this.trigger('login:login');
                }
            });
        },

        login : function(input, callback)
        {
            var _this = this;

            // Request geolocation data

            app.service.geoloc.requestInfo();

            // Send log-in request

            input.info = JSON.stringify(config.info);

            $.post(config.loginPath, input, function(data)
            {
                if(data.success)
                {
                    // Store the login data

                    if(input.auto)
                    {
                        _this.set({ id : data.id, name : _this._getVisibleName(data.name), mail : data.mail, image : data.image });

                        // Cache user

                        app.UserModel.cacheUsers([ { id : data.id, name : _this._getVisibleName(data.name), mail : data.mail, image : data.image } ]);
                    }
                    else
                    {
                        _this.set({ id : data.id, name : _this._getVisibleName(input.name), mail : input.mail, image : input.image, department : input.department });
                    }

                    // Notify success

                    if(callback) callback(data);

                    _this.trigger('login:success', true, input);
                }
                else
                {
                    // Notify about need to log in again

                    _this.trigger('login:error');
                }
            });
        },

        logout : function(silent)
        {
            silent = !!silent;

            // Stop connection management

            this.stopConnection();

            // Send a logout request

            var _this = this;

            $.post(config.logoutPath, { silent : silent }, function(data)
            {
                if(data && data.success)
                {
                    // Clear user data

                    _this.set({ id : null, name : null, mail : null, image : null });

                    // Notify about successful log-out

                    _this.trigger('logout:success');
                }
                else
                {
                    // Notify about log-out error

                    _this.trigger('logout:error');
                }
            });

            // Clear messages cache

            this.lastMessages  = [];
            this.lastMessageId = this.lastMessageIdAtLogin = 0;

            // Notify about logging out

            this.trigger('logout:init');
        },

        checkOperators : function()
        {
            // Check if there's any operator on-line

            var _this = this;

            $.get(config.isOperatorOnlinePath, function(data)
            {
                if(data.success)
                {
                    // Notify about online operator(s)

                    _this.trigger('operators:online');
                }
                else
                {
                    // Notify about no operator(s)

                    _this.trigger('operators:offline');
                }
            });

            // Also reload departments list

            this.loadDepartments();
        },

        loadDepartments : function(data)
        {
            var _this = this;

            // Download all departments with thier statuses

            $.get(config.onlineDepartmentsPath, function(data)
            {
                if(data.departments && (data.departments.length === 0 || _.pluck(data.departments, 'status').indexOf('online') !== -1))
                {
                    // Store departments list

                    _this.departments = data.departments;

                    _this.trigger('departments:change');
                }
            });

        },

        onOperatorStatus : function(status)
        {
            if(status === 'online')
            {
                // Notify about online operator(s)

                this.trigger('operators:online');
            }
            else
            {
                // Notify about no operator(s)

                this.trigger('operators:offline');
            }
        },

        updateTypingStatus : function()
        {
            // Send the request only once per given amount of time

            var time = (new Date()).getTime();

            if(this.lastTypingUpdate + GuestChatModel.POLLING_INTERVAL < time)
            {
                this.lastTypingUpdate = time;

                // Send typing status update request

                $.post(config.updateTypingStatusPath, { status : true });
            }
        },

        getTypingStatus : function(callback)
        {
            var _this = this;

            var p = $.post(config.getTypingStatusPath, function(data)
            {
                if(data.success && data.result)
                {
                    _this.trigger('operator:typing');
                }
            });

            if(callback) p.always(callback);
        },

        onUser : function(userData)
        {
            var user = app.UserModel.getUserSync(this.get('id'));

            if(user)
            {
                user.set(userData);
                user.set('name', this._getVisibleName(userData.name));
            }
        },

        onMessages : function(data)
        {
            // Handle new messages data

            var _this = this;

            // Check if there are any new messages

            if(data.length > 0)
            {
                // Remove already read messages

                this.removeReadMessages(data);

                // Store the messages

                this.storeMessages(data);

                // Collect operator(s) info

                this.loadOperatorsData(data, function()
                {
                    // Add users info to messages

                    for(var i = 0; i < data.length; i++)
                    {
                        var msg = data[i];

                        if(msg.from_id > 0)
                        {
                            app.UserModel.getUser(msg.from_id, function(user)
                            {
                                msg.from_user_info = user.attributes;
                            });
                        }
                    }

                    // Notify about new messages

                    _this.trigger('messages:new', data);
                });
            }
        },

        removeReadMessages : function(data)
        {
            for(var i = data.length - 1; i >= 0; i--)
            {
                var message = data[i];

                if(message.id && message.id <= this.lastMessageId)
                {
                    data.splice(i, 1);
                }
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

        storeMessages : function(messages)
        {
            // Prepare the messages

            _.each(messages, function(message)
            {
                if(!message.datetime && message.time)
                {
                    message.datetime = message.time.getTime();
                }

                // Update last message's ID

                if(message.id && message.id > this.lastMessageId)
                {
                    this.lastMessageId = message.id;
                }

            }, this);

            // Save the messages

            this.lastMessages = this.lastMessages.concat(messages);
        },

        loadOperatorsData : function(messages, callback)
        {
            // Check if there's any message from a not known operator

            var ids = [];

            for(var i = 0; i < messages.length; i++)
            {
                var fromId = parseInt(messages[i].from_id);

                if(ids.indexOf(fromId) === -1)
                {
                    ids.push(fromId);
                }
            }

            if(ids.length === 0)
            {
                callback();

                return;
            }

            // Load operators' info

            app.UserModel.getUsers(ids, function(users)
            {
                // Notify the caller

                callback();
            });
        },

        getOperatorName : function(id)
        {
            var user = app.UserModel.getUserSync(id);

            return user && user.getReadableName();
        },

        sendMessage : function(message, callback)
        {
            // Prepare data

            var input = {

                body  : message.get('body'),
                extra : JSON.stringify(message.get('extra'))
            };

            // Send message to the server

            var _this = this;

            $.post(config.sendMessagePath, input, function(data)
            {
                if(data.success)
                {
                    // Store the message

                    message.set('id', parseInt(data.id));

                    _this.storeMessages([ message.attributes ]);

                    // Notify success

                    _this.trigger('messages:sent');
                }
                else
                {
                    // Notify error

                    _this.trigger('messages:sendError');
                }

                if(callback) callback(data);
            });
        },

        isChatting : function()
        {
            return !!this.connectionTimer;
        },

        mailTalkTranscript : function(data)
        {
            return $.post(config.mailTalkTranscriptPath, data);
        },

        startConnection : function()
        {
            // Clear previous interval

            this.stopConnection();

            // Reset request statuses

            this.initRequestsStatus();

            // Start connection interval

            this.connectionTimer = setInterval($.proxy(this.manageConnection, this), GuestChatModel.POLLING_INTERVAL);

            // Send initial requests

            this.manageConnection();
        },

        stopConnection : function()
        {
            if(this.connectionTimer)
            {
                clearInterval(this.connectionTimer);

                this.connectionTimer = null;
            }
        },

        isConnected : function()
        {
            return !!this.connectionTimer;
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

            // Manage connection

            this._manageConnection(function()
            {
                _this.requestsStatus._manageConnection = true;
            });

            // Checking typing status

            this.getTypingStatus(function()
            {
                _this.requestsStatus.getTypingStatus = true;
            });
        },

        _manageConnection : function(callback)
        {
            var _this = this, input = {

                lastMessageId : this.lastMessageId
            };

            if(this.currentUrl != this.prevUrl)
            {
                input.url = this.prevUrl = this.currentUrl;
            }

            if(!app.service.geoloc.empty)
            {
                config.info.geoloc = app.service.geoloc.info;

                input.info = JSON.stringify(config.info);

                app.service.geoloc.empty = true;
            }

            if(app.model.watchedUploads.length > 0)
            {
                input.watchedUploads = app.model.watchedUploads.pluck('id').join(',');
            }

            var p = $.post(config.manageConnectionPath, input, function(data)
            {
                // User data

                _this.onUser(data.user);

                // Messages

                if(data.lastMessageId && data.lastMessageId > this.lastMessageId)
                {
                    this.lastMessageId = data.lastMessageId;
                }

                _this.onMessages(data.messages);

                // Uploads

                _this.onUploads(data.uploads);
            });

            if(callback) p.always(callback);
        },

        prevRequestsComplete : function()
        {
            // Reset if too much time passed

            if(Date.now() - this.requestInitTime > GuestChatModel.REQUEST_STATUS_RESET_TIMEOUT)
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
        },

        startTracking : function()
        {
            if(config.ui.operatorInitChat !== 'true')
            {
                return;
            }

            // Clear previous interval

            this.stopTracking();

            // Start connection interval

            this.trackingTimer = setInterval($.proxy(this.manageTracking, this), Math.max(2000, 1000 * parseInt(config.ui.onlineTrackInterval)));

            // Send initial requests

            this.manageTracking();
        },

        manageTracking : function()
        {
            // Send keep-alive beacon

            var data = {};

            data.url = this.currentUrl || config.info.referer;

            app.service.beacon.send(config.trackKeepAlivePath, data, $.proxy(this.onTrackingResponse, this));
        },

        stopTracking : function()
        {
            if(this.trackingTimer)
            {
                clearInterval(this.trackingTimer);
            }
        },

        onTrackingResponse : function(msg)
        {
            if(msg === GuestChatModel.TRACK_MESSAGE_LOGIN)
            {
                this.stopTracking();

                this.login({ auto : true }, $.proxy(this.confirmLogin, this));
            }
        },

        confirmLogin : function()
        {
            $.post(config.trackConfirmLoginPath);
        },

        _getVisibleName : function(name)
        {
            return app.service.i18n.trans('you');
        }
    },
    {
        POLLING_INTERVAL             : parseInt(config.ui.pollingInterval) * 1000,
        REQUEST_STATUS_RESET_TIMEOUT : 20000,

        TRACK_MESSAGE_LOGIN : 2
    });

})(window.Application, jQuery, window.chatConfig, _);
