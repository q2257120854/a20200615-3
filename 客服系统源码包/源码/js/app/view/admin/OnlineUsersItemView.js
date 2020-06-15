//==============================================================================
//
//  OnlineUsersItemView
//
//==============================================================================

(function(app, config)
{
    var OnlineUsersItemView = Marionette.ItemView.extend({

        modelEvents : {

            'change' : 'render'
        },

        events : {

            'click' : 'onClick'
        },

        onClick : function()
        {
            this.trigger('click', this.model);
        },

        render : function()
        {
            var data = this.model.toJSON();

            data.displayName = this.model.getReadableName();

            app.UserModel.extendUserData(data, this.model);

            // -----

            this.$el.html(app.template.onlineUsersItem(data));

            return this;
        }
    });

    app.OnlineUsersItemView = OnlineUsersItemView;

})(window.Application, window.chatConfig);
