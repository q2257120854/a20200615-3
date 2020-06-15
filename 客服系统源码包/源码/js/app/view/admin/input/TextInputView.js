//==============================================================================
//
//  Text input view
//
//==============================================================================

(function(app, $)
{
    var TextInputView = app.TextInputView = app.InputView.extend({

        ui : {

            input : 'input'
        },

        events : {

            'change @ui.input' : 'updateModel'
        },

        getTemplate : function()
        {
            return app.template.textInput;
        },

        updateModel : function()
        {
            this.model.set('value', this.ui.input.val());
        }
    });

})(Application, jQuery);
