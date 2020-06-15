//==============================================================================
//
//  Class for communicating with "beacons"
//
//==============================================================================

(function(app, config)
{
    function Beacon() {}

    Beacon.prototype = {

        constructor : Beacon,

        send : function(url, data, callback)
        {
            data._t = Date.now();

            // Add data to URL

            var separator = url.indexOf('?') !== -1 ? '&' : '?';

            if(data)
            {
                for(var key in data)
                {
                    url += separator + key + '=' + encodeURIComponent(data[key]);

                    if(separator === '?') separator = '&';
                }
            }

            // Send

            var img = new Image();

            img.onload = img.onerror = function()
            {
                if(callback)
                {
                    callback(img.width);
                }

                img.onload = img.onerror = null;
            };

            img.src = url;
        }
    };

    app.Beacon = Beacon;

})(window.Application, window.chatConfig);
