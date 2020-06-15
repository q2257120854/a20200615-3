//==============================================================================
//
//  Avatar view
//
//==============================================================================

(function(app, config, $)
{
    var AvatarView = app.AvatarView = Backbone.View.extend({

        initialize : function()
        {
            // Handle rendering

            this.listenTo(this.model, 'change', this.render);

            // Initialize the content

            this.render();
        },

        render : function()
        {
            // Clear the view

            this.$el.html('');

            if(this.model.isSystemMessage())
            {
                var props = AvatarView.INFO,
                    extra = this.model.get('extra');

                if(extra)
                {
                    switch(extra.type)
                    {
                        case app.MessageModel.EXTRA_TALK_OWNER:
                            props = AvatarView.OWNER;
                        break;
                        case app.MessageModel.EXTRA_USER_INVITE:
                            props = AvatarView.INVITE;
                        break;
                        case app.MessageModel.EXTRA_USER_LEAVE:
                            props = AvatarView.LEAVE;
                        break;
                        case app.MessageModel.EXTRA_TALK_CLOSE:
                            props = AvatarView.CLOSE;
                        break;
                    }
                }

                var $icon = $('<i>').addClass('fa fa-' + props.icon).addClass(props.className);

                this.$el.append($icon);

                this.$el.css('background-image', 'none');
            }
            else
            {
                this.$el.removeClass('customer-chat-content-message-avatar').addClass('customer-chat-content-message-avatar-operator');

                if(this.model.fromUser && this.model.fromUser.image) this.$el.css('background-image', 'url("' + this.model.fromUser.image + '")');
            }
        }
    },
    {
        INFO   : { icon : 'info',        className : 'avatar-info'   },
        OWNER  : { icon : 'user',        className : 'avatar-owner'  },
        INVITE : { icon : 'sign-in',     className : 'avatar-invite' },
        LEAVE  : { icon : 'sign-out',    className : 'avatar-leave'  },
        CLOSE  : { icon : 'power-off',   className : 'avatar-close'  }
    });

})(window.Application, window.chatConfig, jQuery);
