//==============================================================================
//
//  Internationalization
//
//==============================================================================

(function(app, config)
{
    app.service.i18n = {

        trans : function(key, vars)
        {
            var text = config.trans[key];

            if(typeof text === 'undefined')
            {
                console.log('Missing translation for "' + key + '"', new Error().stack);

                return '* ' + key + ' *';
            }

            if(vars)
            {
                for(var search in vars)
                {
                    text = text.split(search).join(vars[search]);
                }
            }

            return text;
        }
    };

})(window.Application, window.chatConfig);
