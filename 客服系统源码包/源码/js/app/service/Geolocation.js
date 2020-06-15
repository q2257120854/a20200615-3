//==============================================================================
//
//  Geolocation
//
//==============================================================================

(function(app, config, $)
{
    app.Geolocation = function()
    {
        this.info  = createEmptyInfo();
        this.empty = true;

        var _this = this;

        this.requestInfo = function(callback, ip)
        {
            ip = ip || '';

            $.get(config.geolocConfig.url + ip, function(data)
            {
                _this.info  = decode(data);
                _this.empty = false;

            }).always(function()
            {
                if(callback) callback(_this.info);
            });
        };
    };

    function decode(data)
    {
        return {

            countryCode : data.country_code,
            countryName : data.country_name,
            regionCode  : data.region_code,
            regionName  : data.region_name,
            city        : data.city,
            zipCode     : data.zip_code,
            timeZone    : data.time_zone,
            timeZone    : data.time_zone,
            latitude    : data.latitude,
            longitude   : data.longitude,
            metroCode   : data.metro_code,
            utcOffset   : new Date().getTimezoneOffset()
        };
    }

    function createEmptyInfo()
    {
        return {

            countryCode : '',
            countryName : '',
            regionCode  : '',
            regionName  : '',
            city        : '',
            zipCode     : '',
            timeZone    : '',
            timeZone    : '',
            latitude    : '',
            longitude   : '',
            metroCode   : '',
            utcOffset   : new Date().getTimezoneOffset()
        };
    }

})(window.Application, window.chatConfig, window.jQuery);
