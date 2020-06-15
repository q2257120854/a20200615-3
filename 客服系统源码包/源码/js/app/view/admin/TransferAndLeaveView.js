//==============================================================================
//
//  Transfer and leave the talk view
//
//==============================================================================

(function(app, config, $)
{
    var TransferAndLeaveView = app.TransferAndLeaveView = Backbone.View.extend({

        render : function()
        {
            // Clear the view

            this.$el.html(app.template.transferAndLeaveContent());

            // Render online users

            this.selectUserView = new app.SelectUserView({ el : this.$('.users'), model : this.model, filter : this.userFilter }).render();

            return this;
        },

        userFilter : function(user)
        {
            return user.hasRole('OPERATOR') && user.get('id') !== app.model.user.get('id');
        }
    });

})(window.Application, chatConfig, jQuery);
