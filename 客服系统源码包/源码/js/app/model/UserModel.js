//==============================================================================
//
//  Chat user
//
//==============================================================================

(function(app, config, $)
{
    var UserModel = app.UserModel = Backbone.Model.extend({

        initialize : function(attributes)
        {
            if(attributes.info && typeof attributes.info === 'string')
            {
                try      { attributes.info = JSON.parse(attributes.info); }
                catch(e) { /* Do nothing... */}
            }
        },

        getAge : function()
        {
            // Initialize models

            this.chat = app.model.chat;

            // Calculate how long ago the message was received (in seconds)

            var currentTime = new Date().getTime()       / 1000;
            var messageTime = this.get('time').getTime() / 1000;

            return Math.ceil(currentTime - messageTime);
        },

        getReadableName : function()
        {
            var name = this.get('name');

            if(this.hasRole('OPERATOR')) return name;

            return name.lastIndexOf('-') !== -1 ? name.slice(0, name.lastIndexOf('-')) : name;
        },

        hasRole : function(role)
        {
            return this.has('roles') && this.get('roles').indexOf(role) !== -1;
        },

        isOnline : function()
        {
            var lastActivity = new Date(this.get('last_activity').replace(/-/g, '/')) / 1000 - config.serverTimeDifference,
                currentTime  = new Date().getTime()                                   / 1000;

            return currentTime - lastActivity <= UserModel.ONLINE_TIME;
        }
    },
    {
        ONLINE_TIME : 30,

        usersCache : {},

        cacheUsers : function(users)
        {
            for(var i = 0; i < users.length; i++)
            {
                var user = users[i];

                this.usersCache[user.id] = new app.UserModel(user);
            }
        },

        updateUsersCache : function(users)
        {
            for(var i = 0; i < users.length; i++)
            {
                var user       = users[i],
                    id         = user.get('id'),
                    cachedUser = this.usersCache[id];

                if(cachedUser)
                {
                    cachedUser.set(user.attributes);
                }
                else
                {
                    this.usersCache[id] = user;
                }
            }
        },

        getUser : function(id, callback)
        {
            if(this.usersCache[id])
            {
                callback(this.usersCache[id]);

                return;
            }

            // Request user data from the server

            var _this = this;

            $.get(config.getUsersPath, { ids : [ id ] }, function(data)
            {
                if(data.success)
                {
                    // Update the cache

                    _this.usersCache[id] = new app.UserModel(data.users[id]);

                    // Notify

                    callback(_this.usersCache[id]);
                }
            });

            return false;
        },

        getUsers : function(ids, callback, errCallback)
        {
            // Check the cache

            var cached = {}, toRequest = [];

            for(var i = 0; i < ids.length; i++)
            {
                var id = ids[i];

                if(this.usersCache[id])
                {
                    cached[id] = this.usersCache[id];
                }
                else
                {
                    toRequest.push(id);
                }
            }

            if(toRequest.length === 0)
            {
                callback(cached);

                return true;
            }

            // Request users data from the server

            var _this = this;

            $.get(config.getUsersPath, { ids : toRequest }, function(data)
            {
                if(data.success)
                {
                    // Update the cache

                    for(var id in data.users)
                    {
                        _this.usersCache[id] = cached[id] = new app.UserModel(data.users[id]);
                    }

                    // Notify

                    callback(cached);
                }
                else
                {
                    if(errCallback) errCallback(data);
                }
            });

            return false;
        },

        getUserSync : function(id)
        {
            return this.usersCache[id];
        },

        addShortUrl : function(data)
        {
            var url = data.info && data.info.referer;

            if(url)
            {
                var parts = url.split('/');

                parts.splice(0, 2);

                if(parts.length > 2)
                {
                    data.shortUrl = parts[0] + '/../' + parts.pop();
                }
                else
                {
                    data.shortUrl = parts[0] + '/' + parts.pop();
                }
            }
            else
            {
                data.shortUrl = '';
            }
        },

        extendUserData : function(data, user)
        {
            this.addShortUrl(data);

            var info = data.info;

            if(info)
            {
                data.url = info.referer;
                data.ip  = info.ip;

                var geoloc = info.geoloc;

                if(geoloc)
                {
                    data.countryCode = geoloc.countryCode;
                    data.countryName = geoloc.countryName;
                    data.city        = geoloc.city;
                }
                else
                {
                    data.countryCode = null;
                    data.countryName = null;
                    data.city        = null;
                }
            }

            var talkId = app.model.chat.getTalkIdForGuest(data.id);

            if(talkId)
            {
                data.departmentName = app.model.chat.getDepartmentForTalk(talkId) && app.model.chat.getDepartmentForTalk(talkId).name;
            }
        }
    });

    // Cache system user

    app.UserModel.usersCache['-1'] = new app.UserModel({

        id   : -1,
        name : 'all'
    });

    app.UserModel.usersCache['-2'] = new app.UserModel({

        id   : -2,
        type : 'system',
        name : 'SYSTEM'
    });

})(window.Application, window.chatConfig, jQuery);
