//==============================================================================
//
//  Select avatar view
//
//==============================================================================

(function(app, config, $)
{
    app.SelectAvatarView = Backbone.View.extend({

        events : {

            'mousedown .customer-chat-content-message-avatar' : 'selectAvatar'
        },

        render : function()
        {
            // Clear the view

            this.$el.html(app.template.selectAvatarContent({

                urls : this.model
            }));

            this.$avatars = this.$('.avatars');

            // Initialize the scroller

            this.$el.find('.avatars-wrapper').mCustomScrollbar();

            $(window).resize();

            return this;
        },

        selectAvatar : function(e)
        {
            var $avatar = $(e.currentTarget);
            var image   = $avatar.data('image');

            this.$avatars.children().removeClass('selected');
            $avatar.addClass('selected');

            this.selected = image;
        }
    });

})(window.Application, chatConfig, jQuery);
