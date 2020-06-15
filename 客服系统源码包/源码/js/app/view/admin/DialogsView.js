//==============================================================================
//
//  Dialogs view
//
//==============================================================================

(function(app, $, config)
{
    app.DialogsView = Backbone.View.extend({

        initialize : function()
        {
            // Cache view components

            this.$confirm   = $(app.template.confirmDialog());
            this.$formError = $(app.template.formErrorDialog());
        },

        confirm : function(title, message, buttons, width)
        {
            this._createBody(this.$confirm, message);

            if(!buttons[app.service.i18n.trans('cancel')])
            {
                buttons[app.service.i18n.trans('cancel')] = function()
                {
                    $(this).dialog('close');
                };
            }

            this.$confirm.dialog({

                title     : title,
                resizable : false,
                modal     : true,
                width     : width ? width : 400,
                maxWidth  : 900,
                height    : 'auto',
                buttons   : buttons,
                show      : 'fade',
                position  : { of : app.view.window.$el }
            });
        },

        formError : function(title, errorMessages)
        {
            this.$formError.html('');

            for(var i = 0; i < errorMessages.length; i++)
            {
                var $p  = $('<p>');
                var msg = errorMessages[i];

                if(msg && msg.length > 0)
                {
                    $p.html(errorMessages[i]);
                }

                this.$formError.append($p);
            }

            var buttons = {};

            buttons[app.service.i18n.trans('close')] = function()
            {
                $(this).dialog('close');
            };

            this.$formError.dialog({

                title     : title,
                resizable : false,
                modal     : true,
                width     : 400,
                height    : 'auto',
                buttons   : buttons,
                show      : 'fade',
                position  : { of: app.view.window.$el }
            });
        },

        message : function(title, message, width, height)
        {
            this._createBody(this.$formError, message);

            var buttons = {};

            buttons[app.service.i18n.trans('close')] = function()
            {
                $(this).dialog('close');
            };

            this.$formError.dialog({

                title     : title,
                resizable : false,
                modal     : true,
                width     : width  ? width  : 400,
                height    : height ? height : 'auto',
                buttons   : buttons,
                show      : 'fade',
                position  : { of: app.view.window.$el }
            });
        },

        _createBody : function($container, message)
        {
            if(message)
            {
                if(message instanceof Backbone.View) $container.html('').append(message.render().el);
                else                                 $container.html('<p>' + message + '</p>');
            }
        }
    });

})(window.Application, jQuery, window.chatConfig);
