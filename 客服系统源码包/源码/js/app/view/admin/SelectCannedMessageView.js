//==============================================================================
//
//  Select canned message view
//
//==============================================================================

(function(app, config, $)
{
    var SelectCannedMessageView = app.SelectCannedMessageView = Backbone.View.extend({

        events : {

            'mousedown .customer-chat-content-canned-message' : 'selectMessage'
        },

        templateHelpers : {

            displayBody : function(body)
            {
                if(body.length > SelectCannedMessageView.DISPLAY_BODY_MAX_LENGTH)
                {
                    body = body.slice(0, SelectCannedMessageView.DISPLAY_BODY_MAX_LENGTH) + '...';
                }

                return body;
            },

            displayName : function(name)
            {
                if(name.length > SelectCannedMessageView.DISPLAY_NAME_MAX_LENGTH)
                {
                    name = name.slice(0, SelectCannedMessageView.DISPLAY_NAME_MAX_LENGTH) + '...';
                }

                return name;
            }
        },

        initialize : function()
        {
            this.listenTo(this.model, 'change', this.render);
        },

        render : function()
        {
            // Create customized messages

            var messages = JSON.parse(JSON.stringify(this.model.get('messages')));

            for(var i = 0; i < messages.length; i++)
            {
                messages[i].body = this.model.getParametrizedMessage(messages[i].body);
            }

            // Clear the view

            this.$el.html(app.template.selectCannedMessageContent({

                messages : messages
            },
            {
                helpers : this.templateHelpers
            }));

            this.$messages = this.$('.messages');

            // Initialize the scroller

            this.$el.find('.canned-messages-wrapper').mCustomScrollbar();

            $(window).resize();

            return this;
        },

        selectMessage : function(e)
        {
            var $message = $(e.currentTarget);
            var message  = $message.data('message');

            this.$messages.children().removeClass('selected');
            $message.addClass('selected');

            this.selected = message;
        }
    },
    {
        DISPLAY_NAME_MAX_LENGTH : 50,
        DISPLAY_BODY_MAX_LENGTH : 100
    });

})(window.Application, chatConfig, jQuery);
