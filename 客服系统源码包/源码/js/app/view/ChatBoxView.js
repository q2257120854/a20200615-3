//==============================================================================
//
//  Chat box view
//
//==============================================================================

(function(app, $)
{
    var ChatBoxView = app.ChatBoxView = Backbone.View.extend({

        initialize : function()
        {
            // Initialize models

            this.settings = app.model.settings;

            // Cache view components

            this.$wrapper = this.$('.customer-chat-content-messages-wrapper');

            // -----

            this.$el.mCustomScrollbar();

            this.messageViews = [];

            // Handle content updates

            this.$el.bind('contentUpdate', $.proxy(this.updateScroller, this));
        },

        addMessage : function(message, scrollDown, ignoreScrollSettings)
        {
            // Get previous message

            var prevMsg;

            if(this.messageViews.length)
            {
                prevMsg = this.messageViews[this.messageViews.length - 1].model;
            }

            // Create message's view

            var messageView = new app.MessageView({

                model       : message,
                fullDate    : this.options.fullDate,
                prevMessage : prevMsg
            });

            // Store reference to the view

            this.messageViews.push(messageView);

            // Append new message

            this.$wrapper.append(messageView.el);

            // Update the scroll area

            var _this = this;

            setTimeout(function()
            {
                _this.updateScroller();

                if(ignoreScrollSettings)
                {
                    if(scrollDown) _this.$el.mCustomScrollbar('scrollTo', 'bottom');
                }
                else
                {
                    if(_this.settings.get('scroll') || scrollDown) // Auto-scroll if desired
                    {
                        _this.$el.mCustomScrollbar('scrollTo', 'bottom');
                    }
                }

            }, 200);

            return messageView;
        },

        clear : function()
        {
            // Destroy messages

            for(var i = 0; i < this.messageViews.length; i++)
            {
                this.messageViews[i]
                    .remove()
                    .clean();
            }

            // Remove all messages

            this.$wrapper.html('');
            this.messageViews = [];
        },

        updateScroller : function()
        {
            this.$el.mCustomScrollbar('update');
        },

        scrollToBottom : function()
        {
            this.$el.mCustomScrollbar('scrollTo', 'bottom');
        },

        storeScrollPos : function()
        {
            this.lastScrollPos = Math.abs(this.$('.mCSB_container').position().top);
        },

        scrollToLastPos : function()
        {
            this.$el.mCustomScrollbar('scrollTo', this.lastScrollPos);
        }
    });

})(window.Application, jQuery);
