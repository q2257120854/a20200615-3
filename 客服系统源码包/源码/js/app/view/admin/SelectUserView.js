//==============================================================================
//
//  Select user view
//
//==============================================================================

(function(app, config, $)
{
    var SelectUserView = app.SelectUserView = Backbone.View.extend({

        events : {

            'mousedown .user-item' : 'selectUser'
        },

        templateHelpers : {

            displayName : function()
            {
                var name = this.get('name');

                if(name.length > SelectUserView.DISPLAY_NAME_MAX_LENGTH)
                {
                    name = name.slice(0, SelectUserView.DISPLAY_NAME_MAX_LENGTH) + '...';
                }

                return name;
            },

            displayMail : function()
            {
                var mail = this.get('mail');

                if(mail.length > SelectUserView.DISPLAY_MAIL_MAX_LENGTH)
                {
                    mail = mail.slice(0, SelectUserView.DISPLAY_MAIL_MAX_LENGTH) + '...';
                }

                return mail;
            },

            isSelected : function(options)
            {
                var selected = options.data.root.selected, selectedId = selected && selected.get('id');

                return this.get('id') == selectedId ? new Handlebars.SafeString(options.fn(this)) : '';
            }
        },

        initialize : function()
        {
            this.filter = this.options.filter;

            this.listenTo(this.model, 'users:online', this.render);
        },

        render : function()
        {
            this.users = this.model.onlineUsers;

            if(this.filter)
            {
                this.users = _.filter(this.users, this.filter);
            }

            this.$el.html(app.template.selectUserContent({

                users    : this.users,
                selected : this.selected
            },
            {
                helpers : this.templateHelpers
            }));

            this.$users = this.$('.users');

            // Initialize the scroller

            this.$el.find('.canned-messages-wrapper').mCustomScrollbar();

            $(window).resize();

            return this;
        },

        selectUser : function(e)
        {
            var $user = $(e.currentTarget);
            var user  = this.users[$user.index()];

            this.$users.children().removeClass('selected');
            $user.addClass('selected');

            this.selected = user;
        }
    },
    {
        DISPLAY_NAME_MAX_LENGTH : 32,
        DISPLAY_MAIL_MAX_LENGTH : 64
    });

})(window.Application, chatConfig, jQuery);
