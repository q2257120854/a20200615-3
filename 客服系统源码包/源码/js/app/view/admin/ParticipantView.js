//==============================================================================
//
//  Talk participant view
//
//==============================================================================

(function(app)
{
    var ParticipantView = app.ParticipantView = Backbone.View.extend({

        events : {

            'click .show-on-map' : 'showOnMap'
        },

        initialize : function()
        {
            this.listenTo(this.model, 'change', this.render);

            this.$el.html(app.template.userInfo());

            // Cache view components

            this.$avatar = this.$('.customer-chat-content-message-avatar-operator');
            this.$name   = this.$('.info-name');
            this.$id     = this.$('.info-id');
            this.$email  = this.$('.info-email');

            this.$('[class^="row-"]').addClass('empty');

            // Render initially

            this.render();
        },

        render : function()
        {
            var user = this.model;

            if(user.get('image'))
            {
                this.$avatar.css('background-image', 'url("' + user.get('image') + '")');
            }

            // Main information

            this.$name.html(user.getReadableName());
            this.$id.html(user.get('id'));
            this.$email.html(user.get('mail'));

            // Additional details

            this.$('[class^="row-"].empty').hide();

            var info = user.get('info');

            if(info)
            {
                var id;

                for(var key in info)
                {
                    var value = info[key];

                    if(typeof value === 'object')
                    {
                        for(var k in value)
                        {
                            var v = value[k];

                            this._renderInfo(ParticipantView.infoToHtml(key, k), v);
                        }
                    }
                    else
                    {
                        this._renderInfo(ParticipantView.infoToHtml(key), value);
                    }
                }

                // Local time

                this._renderTime();

                // Show on map button

                var geoloc = info.geoloc;

                if(geoloc && geoloc.latitude && geoloc.longitude)
                {
                    this.$('.row-show-on-map').show();
                }
            }

            return this;
        },

        _renderInfo : function(id, value)
        {
            if(!(id && value)) return;

            var $row   = this.$('.row-' + id),
                $value = $row.find('.info-' + id);

            // Prepare text

            var txt = value;

            if(typeof value === 'string')
            {
                txt = value.slice(0, 1).toUpperCase() + value.slice(1);
            }

            // Set link

            if($value.is('a'))
            {
                $value.attr('href', value);

                txt = value;
            }

            // Display

            $row.removeClass('empty').show();
            $value.html(txt);

            // Add icon

            var iconName = ParticipantView.valueToIcon(value);

            if(iconName)
            {
                $('<i>').addClass('fa fa-' + iconName).prependTo($value);
            }
        },

        _renderTime : function()
        {
            var info = this.model.get('info');

            if(info.geoloc && typeof info.geoloc.utcOffset === 'number')
            {
                this.timeOffsetMs = (new Date().getTimezoneOffset() - info.geoloc.utcOffset) * 60 * 1000;

                // From now on, update the time automatically

                this._renderTime = function() {};

                this.localTimeInterval = setInterval($.proxy(this._renderTimeCached, this), 1000);

                this._renderTimeCached();
            }
        },

        _renderTimeCached : function()
        {
            this._renderInfo('localtime', new Date(Date.now() + this.timeOffsetMs).toLocaleTimeString());
        },

        showOnMap : function()
        {
            app.trigger('show:map', this.model.get('id'));
        },

        remove : function()
        {
            Backbone.View.prototype.remove.call(this);

            if(this.localTimeInterval) clearInterval(this.localTimeInterval);
        }
    },
    {
        INFO_TO_HTML : {

            ip          : 'ip',
            referer     : 'url',
            browserName : 'browser',
            os          : 'os',
            language    : 'language',

            geoloc : {

                countryName : 'country',
                regionName  : 'region',
                city        : 'city',
                zipCode     : 'zip',
                timeZone    : 'timezone',
                latitude    : 'latitude',
                longitude   : 'longitude'
            }
        },

        VALUE_TO_ICON : {

            'windows'     : 'windows',
            'macintosh'   : 'apple',
            'linux'       : 'linux',
            'iphone'      : 'mobile',
            'msie'        : 'internet-explorer',
            'firefox'     : 'firefox',
            'safari'      : 'safari',
            'opera'       : 'opera',
            'chrome'      : 'chrome',
            'applewebkit' : 'apple',
            'localtime'   : 'clock-o'
        },

        infoToHtml : function(key, innerKey)
        {
            var r = ParticipantView.INFO_TO_HTML[key];

            if(innerKey && typeof r === 'object')
            {
                r = r[innerKey];
            }

            return r;
        },

        valueToIcon : function(value)
        {
            return ParticipantView.VALUE_TO_ICON[value];
        }
    });

})(window.Application);
