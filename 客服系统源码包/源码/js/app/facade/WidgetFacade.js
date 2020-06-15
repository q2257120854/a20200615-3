//==============================================================================
//
//  API for external interaction with the widget
//
//==============================================================================

(function(app, Backbone, _)
{
    app.WidgetFacade = function()
    {
        // Add support for events handling

        _.extend(this, Backbone.Events);

        // Cache used components

        var widget    = app.view.widget;
        var chatModel = app.model.chat;

        // Methods

        _.extend(this, {

            show : function()
            {
                widget.show();
            },

            hide : function()
            {
                widget.hide();
            },

            fullscreenOn : function()
            {
                widget.fullscreenOn();
            },

            fullscreenOff : function()
            {
                widget.fullscreenOff();
            },

            endChat : function()
            {
                widget.endChatConfirm();
            },

            sendMessage : function(body)
            {
                widget._sendMessage(body);
            }

        });

        // Events

        chatModel

            .once('operators:online', function()
            {
                this.trigger('operators:online');

            }, this)

            .once('operators:offline', function()
            {
                this.trigger('operators:offline');

            }, this)

            .on('messages:new', function()
            {
                this.trigger('messages:new');

            }, this)

            .on('login:success', function()
            {
                this.trigger('login:success');

            }, this)

            .on('logout:success', function()
            {
                this.trigger('logout:success');

            }, this)

            .on('operator:typing', function()
            {
                this.trigger('operator:typing');

            }, this)
        ;
    };

})(window.Application, Backbone, _);
