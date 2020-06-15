//==============================================================================
//
//  Base input view
//
//==============================================================================

(function(app, $)
{
    var InputView = app.InputView = Marionette.ItemView.extend({

        className : 'customer-chat-content-row',

        modelEvents : {

            'change' : 'render'
        }
    });

})(Application, jQuery);
