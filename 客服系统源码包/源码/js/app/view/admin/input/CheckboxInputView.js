//==============================================================================
//
//  Checkbox input view
//
//==============================================================================

(function(app, $)
{
    var templateOptions = {

        helpers : {

            isChecked : function(options)
            {
                return this.value == 'true' ? new Handlebars.SafeString(options.fn(this)) : '';
            }
        }
    };

    // -----

    var CheckboxInputView = app.CheckboxInputView = app.InputView.extend({

        ui : {

            input : 'input'
        },

        events : {

            'change @ui.input' : 'updateModel'
        },

        template : function(data)
        {
            return app.template.checkbox(data, templateOptions);
        },

        updateModel : function()
        {
            this.model.set('value', this.ui.input.is(':checked') ? 'true' : 'false');
        }
    });

})(Application, jQuery);
