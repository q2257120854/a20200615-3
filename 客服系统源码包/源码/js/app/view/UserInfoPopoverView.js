//==============================================================================
//
//  User info popover view
//
//==============================================================================

(function(app, config, $)
{
    app.UserInfoPopoverView = Backbone.View.extend({

        initialize : function(options)
        {
            var $button = $(options.button);

            $button.popover({

                placement : 'right',
                trigger   : 'manual',
                container : 'body',
                title     : app.service.i18n.trans('user.info'),
                html      : true,
                content   : this.render().$el

            }).mouseenter(function()
            {
                var $this = $(this);

                $('body > .popover').remove();

                $this.popover('show');

                var $popover = $('body > .popover');

                $this.add($popover).bind('mouseleave', function()
                {
                    setTimeout(function()
                    {
                        if(!$popover.underMouse()) $popover.remove();

                    }, 250);
                });

            });
        },

        render : function()
        {
            var info = this.model.has('info') ? this.model.get('info') : {};

            this.$el.html(app.template.userInfoPopoverContent({

                name    : this.model.getReadableName(),
                id      : this.model.get('author') || this.model.get('name'),
                mail    : this.model.get('authorMail') || this.model.get('mail'),
                image   : this.model.fromUser && this.model.fromUser.image || this.model.get('image'),
                ip      : info.ip,
                referer : info.referer
            }));

            return this;
        }
    });

})(window.Application, chatConfig, jQuery);
