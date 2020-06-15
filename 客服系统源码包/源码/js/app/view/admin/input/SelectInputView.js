//==============================================================================
//
//  Select input view
//
//==============================================================================

(function(app, $)
{
    var templateOptions = {

        helpers : {

            isSelected : function(options)
            {
                return this.value == options.data.root.value ? new Handlebars.SafeString(options.fn(this)) : '';
            }
        }
    };

    var SelectInputView = app.SelectInputView = app.InputView.extend({

        template : function(data)
        {
            return app.template.select(data, templateOptions);
        },

        ui : {

            input : 'select'
        },

        events : {

            'change @ui.input' : 'updateModel',
            'keyup  @ui.input' : 'updateModel'
        },

        updateModel : function()
        {
            this.model.set('value', this.ui.input.val());
        }
    });

})(Application, jQuery);
