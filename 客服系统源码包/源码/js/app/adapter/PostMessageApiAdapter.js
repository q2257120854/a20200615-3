//==============================================================================
//
//  Two-way adapter between external API and the widget
//
//==============================================================================

(function(app, $)
{
    app.PostMessageApiAdapter = function(widgetFacade)
    {
        // "PostMessage API -> widget" communication

        var _this            = this;
        var $window          = $(window);
        var messageNamespace = window.name;

        $window.bind('message', function(evt)
        {
            var data = evt.originalEvent.data;

            if(!data || data.indexOf(messageNamespace) !== 0) return;

            data = data.slice(messageNamespace.length);

            var parts     = data.split(':');
            var type      = parts[0];
            var typeParts = type.split('.');
            var baseType  = typeParts[0];

            if(baseType !== 'api')
            {
                return;
            }

            var apiCall = typeParts[1];

            // Call the given method on the facade

            if(typeof widgetFacade[apiCall] === 'function')
            {
                var args = parts.slice(1).join(':');

                widgetFacade[apiCall](args);
            }
        });

        // "Widget -> PostMessage API" communication

        widgetFacade.on('all', function(eventName)
        {
            var apiCall;

            // Map event name to API call

            switch(eventName)
            {
                case 'operators:online':  apiCall = 'operatorsonline';  break;
                case 'operators:offline': apiCall = 'operatorsoffline'; break;
                case 'messages:new':      apiCall = 'message';          break;
                case 'login:success':     apiCall = 'loginsuccess';     break;
                case 'logout:success':    apiCall = 'logoutsuccess';    break;
                case 'operator:typing':   apiCall = 'operatortyping';   break;
            }

            // Forward the event to the parent window

            window.parent.postMessage(messageNamespace + 'api.' + apiCall, '*');
        });
    };

})(window.Application, jQuery);
