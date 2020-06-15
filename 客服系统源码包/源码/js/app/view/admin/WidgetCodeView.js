//==============================================================================
//
//  Widget embedding code view
//
//==============================================================================

(function(app, config, $)
{
    var WidgetCodeView = app.WidgetCodeView = Backbone.View.extend({

        render : function()
        {
            // Clear the view

            this.$el.html(app.template.widgetCodeContent({

                src       : config.widgetInitPath,
                srcInline : config.widgetInitInlinePath
            }));

            // Initialize components

            var tabs = new app.TabsView({ el : this.$('.widget-code') });

            tabs.$el.show();

            return this;
        }
    });

})(window.Application, chatConfig, jQuery);
