//==============================================================================
//
//  Canned messages
//
//==============================================================================

(function(app, $, config, _)
{
    app.CannedMessagesModel = Backbone.Model.extend({

        defaults : {

            messages : []
        },

        initialize : function()
        {
            this.user = app.model.user;

            // Read settings

            this.fetch();
        },

        fetch : function()
        {
            var _this = this;

            $.get(config.listCannedMessagesPath, function(data)
            {
                if(data.success)
                {
                    // Store the data

                    _this.set('messages', data.messages);
                }
            });
        },

        saveMessage : function(message)
        {
            // Notify about the started request

            this.trigger('request');

            var _this = this;

            $.post(config.updateCannedMessagePath, message, function(data)
            {
                // Notify about the finished request

                if(data.success)
                {
                    // Save message in the local cache

                    if(data.id)
                    {
                        // store ID generated on server-side (only on create action)

                        message.id = data.id;

                        if(!_this.getById(data.id))
                        {
                            _this.get('messages').push(message);
                        }
                    }

                    // Notify success

                    _this.trigger('sync message:saved change:messages change', message);
                }
                else
                {
                    // Notify failure

                    _this.trigger('message:saveError', data.errors);
                }
            });
        },

        getById : function(id)
        {
            var items = this.get('messages');

            for(var i = 0; i < items.length; i++)
            {
                if(items[i].id == id) return items[i];
            }

            return null;
        },

        deleteMessage : function(id)
        {
            // Remove message from the local cache

            var items = this.get('messages');

            for(var i = 0; i < items.length; i++)
            {
                if(items[i].id === id)
                {
                    items.splice(i, 1);
                    break;
                }
            }

            // Remove message from the server

            var _this = this;

            $.post(config.deleteCannedMessagePath, { id : id }, function(data)
            {
                if(data.success)
                {
                    // Notify success

                    _this.trigger('change:messages message:deleted');
                }
                else
                {
                    // Notify error

                    _this.trigger('message:deleteError');
                }
            })
        },

        getParametrizedMessage : function(body)
        {
            var template = _.template(body, undefined, {

                safeUndefines : true,
                interpolate   : /\{(.+?)\}/g
            });

            return template(this.user.attributes);
        }
    });

})(window.Application, jQuery, window.chatConfig, _);
