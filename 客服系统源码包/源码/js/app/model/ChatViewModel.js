//==============================================================================
//
//  Chat view model
//
//==============================================================================

(function(app, $, config, _)
{
    app.ChatViewModel = Backbone.Model.extend({
    
        defaults : {
        
            name : 'anonymous',
            mail : ''
        }
    });

})(window.Application, jQuery, window.chatConfig, _);