//==============================================================================
//
//  Blacklist view
//
//==============================================================================

(function(app, config, $)
{
    var BlacklistView = app.BlacklistView = Backbone.View.extend({

        events : {

            'click .save' : 'save'
        },

        syncing : false,

        initialize : function()
        {
            this.$el.html(app.template.blacklist());
            
            // Cache view elements

            this.$input    = this.$('textarea');
            this.$save     = this.$('.save');
            this.$loading  = this.$('.customer-chat-content-loading-icon').hide();
        },

        disable : function()
        {
            this.syncing = true;

            this.$save.addClass('button-disabled');
            this.$loading.fadeIn();
        },

        enable : function()
        {
            var _this = this;

            setTimeout(function()
            {
                _this.$save.removeClass('button-disabled');
                _this.$loading.fadeOut();

                _this.syncing = false;

            }, 500);
        },

        save : function()
        {
            this.disable();

            $.post(config.updateBlacklistPath, { contents : this.$input.val() }, $.proxy(function(data)
            {
                if(!data.success)
                {
                    app.view.dialogs.message(app.service.i18n.trans('error'), app.service.i18n.trans('error.saving.file'));
                }

                this.enable();

            }, this));
        }
    });

})(window.Application, window.chatConfig, jQuery);
