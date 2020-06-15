//==============================================================================
//
//  Widget theme input view
//
//==============================================================================

(function(app, config, $)
{
    var templateOptions = {

        helpers : {

            isSelected : function(options)
            {
                return this.value == options.data.root.value ? new Handlebars.SafeString(options.fn(this)) : '';
            }
        }
    };

    var WidgetThemeInputView = app.WidgetThemeInputView = app.SelectInputView.extend({

        template : function(data)
        {
            return app.template.widgetTheme(data, templateOptions);
        },

        ui : _.extend({}, app.SelectInputView.prototype.ui, {

            preview : 'img'
        }),

        onRender : function()
        {
            this.$el.addClass('widget-theme-row');

            this.updatePreview();
        },

        updatePreview : function()
        {
            // Update theme's preview image

            var themePath = this.model.get('value');

            if(themePath)
            {
                var imagePath = config.rootPath + themePath + '/preview.png';

                this.ui.preview.attr('src', imagePath);
            }
        }
    });

})(Application, chatConfig, jQuery);
