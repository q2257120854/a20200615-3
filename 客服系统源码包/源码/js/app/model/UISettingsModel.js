//==============================================================================
//
//  UI settings
//
//==============================================================================

(function(app, $, config, _)
{
    // Create common select options

    var messageSoundOptions = _.map(config.messageSounds, function(v, k)
    {
        return { value : v, label : k };
    });

    var languageOptions = _.map(config.languages, function(v, k)
    {
        return { value : v, label : v };
    });

    // -----

    var UISettingsModel = app.UISettingsModel = Backbone.Collection.extend({

        initialize : function()
        {
            // Read settings

            this.set({ settings : config.ui }, { parse : true });

            this.prevJSON = this.toJSON();
        },

        fetch : function()
        {
            var _this = this;

            $.get(config.getSettingsPath, function(data)
            {
                if(data.success)
                {
                    _this.set(_this.parse(data), { remove : false });
                }
            });
        },

        save : function()
        {
            if(arguments.length > 0)
            {
                this.set.apply(this, arguments);
            }

            // Notify about the started request

            this.trigger('request');

            var _this = this;

            $.post(config.updateSettingsPath, this.changedJSON(), function()
            {
                _this.prevJSON = _this.toJSON();

                // Notify about the finished request

                _this.trigger('sync');
            });
        },

        reset : function(keys)
        {
            var _this = this,
                data  = {};

            if(keys)
            {
                data.keys = keys.join(',');
            }

            $.post(config.resetSettingsPath, data, function(data)
            {
                if(data.success)
                {
                    // Fill the model with new values

                    _this.set(_this.parse(data), { remove : false }).trigger('change');

                    _this.prevJSON = _this.toJSON();
                }
            });
        },

        validate : function(evt, full)
        {
            var errors = {}, hasErrors = false;

            this.forEach(function(model)
            {
                var meta = model.get('meta');

                if(!meta) return;

                var validators = meta.validators,
                    message    = meta.errorMessage;

                if(!validators) return;

                for(var i = 0; i < validators.length; i++)
                {
                    var validator = UISettingsModel.validators[validators[i]];

                    if(!validator(model.get('value')))
                    {
                        errors[model.get('name')] = message;

                        hasErrors = true;
                    }
                }
            });

            if(hasErrors)
            {
                return errors;
            }
        },

        parse : function(data)
        {
            data.settings = _.map(data.settings, function(v, k)
            {
                return {

                    id    : k,
                    name  : k,
                    value : v,
                    meta  : UISettingsModel.schema[k]
                };
            });

            data.settings = _.filter(data.settings, function(v, k)
            {
                return v;
            });

            return data.settings;
        },

        toJSON : function()
        {
            var result = {};

            this.forEach(function(model)
            {
                result[model.get('name')] = model.get('value');
            });

            return result;
        },

        changedJSON : function()
        {
            var result = {};

            this.forEach(function(model)
            {
                var name  = model.get('name'),
                    value = model.get('value');

                if(this.prevJSON[name] !== value)
                {
                    result[name] = value;
                }

            }, this);

            return result;
        }
    },
    {
        schema : {

            // General settings

            'defaultLanguage' : { type : 'select', label : app.service.i18n.trans('default.language'), options : languageOptions, tags : [ 'general' ] },
            'contactMail' : { type : 'text', label : app.service.i18n.trans('contact.mail'), validators : [ 'notEmpty', 'mail' ], tags : [ 'general' ] },
            'chatBoxMedia' : { type : 'select', label : app.service.i18n.trans('media.in.chat'), tags : [ 'general' ], options : [

                { value : 'auto', label : app.service.i18n.trans('display.auto') },
                { value : 'manual', label : app.service.i18n.trans('display.clicked') },
                { value : 'off', label : app.service.i18n.trans('turn.off') }
            ]},
            'maxConnections' : { type : 'text', label : app.service.i18n.trans('max.conn'), validators : [ 'notEmpty', 'number' ], tags : [ 'general' ] },
            'pollingInterval' : { type : 'text', label : app.service.i18n.trans('poll.interval'), validators : [ 'notEmpty', 'number' ], tags : [ 'general' ] },
            'operatorInitChat' : { type : 'checkbox', label : app.service.i18n.trans('operator.init.chat'), tags : [ 'general' ] },
            'onlineTrackInterval' : { type : 'text', label : app.service.i18n.trans('online.track.int'), validators : [ 'notEmpty', 'number' ], tags : [ 'general' ] },
            'messageSound' : { type : 'sound', label : app.service.i18n.trans('msg.sound'), options : messageSoundOptions, tags : [ 'general' ] },
            'systemMessageSound' : { type : 'sound', label : app.service.i18n.trans('sys.msg.sound'), options : messageSoundOptions, tags : [ 'general' ] },
            'fileSharing' : { type : 'select', label : app.service.i18n.trans('file.sharing'), tags : [ 'general' ], options : [

                { value : 'true', label : app.service.i18n.trans('allow') },
                { value : 'false', label : app.service.i18n.trans('turn.off') }
            ]},
            'sharedFileMaxSize' : { type : 'text', label : app.service.i18n.trans('shared.max.size'), validators : [ 'notEmpty', 'decimal' ], tags : [ 'general' ] },
            'gMapsKey' : { type : 'text', label : app.service.i18n.trans('gmaps.key'), tags : [ 'general' ] },

            // Widget settings

            'widgetTheme' : { type : 'widgetTheme', label : app.service.i18n.trans('widget.theme'), options : config.widgetThemes, tags : [ 'widget' ] },
            'widgetSide' : { type : 'select', label : app.service.i18n.trans('widget.side'), tags : [ 'widget' ], options : [

                { value : 'left', label : app.service.i18n.trans('left') },
                { value : 'right', label : app.service.i18n.trans('right') }
            ]},
            'widgetOffset' : { type : 'text', label : app.service.i18n.trans('widget.offset'), validators : [ 'notEmpty', 'number' ], tags : [ 'widget' ] },
            'primaryColor' : { type : 'color', label : app.service.i18n.trans('primary.color'), validators : [ 'notEmpty', 'color' ], tags : [ 'widget' ] },
            'secondaryColor' : { type : 'color', label : app.service.i18n.trans('secondary.color'), validators : [ 'notEmpty', 'color' ], tags : [ 'widget' ] },
            'labelColor' : { type : 'color', label : app.service.i18n.trans('label.color'), validators : [ 'notEmpty', 'color' ], tags : [ 'widget' ] },
            'widgetWidth' : { type : 'text', label : app.service.i18n.trans('widget.width'), validators : [ 'notEmpty', 'number' ], tags : [ 'widget' ] },
            'widgetHeight' : { type : 'text', label : app.service.i18n.trans('widget.height'), validators : [ 'notEmpty', 'number' ], tags : [ 'widget' ] },
            'askForMail' : { type : 'checkbox', label : app.service.i18n.trans('ask.mail'), tags : [ 'widget' ] },
            'mobileBreakpoint' : { type : 'text', label : app.service.i18n.trans('mobile.bp'), validators : [ 'notEmpty', 'number' ], tags : [ 'widget' ] },
            'hideWhenOffline' : { type : 'checkbox', label : app.service.i18n.trans('hide.offline'), tags : [ 'widget' ] },
            'autoShowWidget' : { type : 'select', label : app.service.i18n.trans('show.widget.auto'), tags : [ 'widget' ], options : [

                { value : 'true', label : app.service.i18n.trans('every.refresh') },
                { value : 'once', label : app.service.i18n.trans('first.visit') },
                { value : 'untilAction', label : app.service.i18n.trans('until.hide') },
                { value : 'off', label : app.service.i18n.trans('turn.off') }
            ]},
            'autoShowWidgetAfter' : { type : 'text', label : app.service.i18n.trans('show.widget.after'), validators : [ 'notEmpty', 'number' ], tags : [ 'widget' ] }
        },

        validators : {

            mailExp    : /^[-+\.0-9=a-z_]+@([-0-9a-z]+\.)+([0-9a-z]){2,}$/i,
            colorExp   : /^#(([0-9a-fA-F]{3})|([0-9a-fA-F]{6}))$/,
            numberExp  : /^\d+$/,
            decimalExp : /^\d+(\.\d+)?$/,

            notEmpty : function(value)
            {
                return value && (value + '').length > 0;
            },

            mail : function(value)
            {
                return UISettingsModel.validators.mailExp.test('' + value);
            },

            number : function(value)
            {
                return UISettingsModel.validators.numberExp.test('' + value);
            },

            decimal : function(value)
            {
                return UISettingsModel.validators.decimalExp.test('' + value);
            },

            color : function(value)
            {
                return UISettingsModel.validators.colorExp.test('' + value);
            }
        }
    });

})(window.Application, jQuery, window.chatConfig, _);
