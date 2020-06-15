//==============================================================================
//
//  Application's main object
//
//==============================================================================

(function(ns, $, Marionette, Handlebars)
{
    var Application = Marionette.Application.extend({

        model      : {},
        view       : {},
        controller : {},
        service    : {},
        template   : {},

        config : function(options)
        {
            this.config = options;
        },

        onBeforeStart : function()
        {
            // Find templates in the DOM and store them

            var template = this.template,
                $els     = $('[type="text/template"]');

            $els.each(function(data)
            {
                template[this.id] = this.innerHTML;
            });

            // Remove templates from the DOM

            $els.remove();

            $els = $('[type="text/x-handlebars-template"]');

            $els.each(function(data)
            {
                template[this.id] = Handlebars.compile(this.innerHTML);
            });

            // Remove templates from the DOM

            $els.remove();
        }
    });

    ns.Application = new Application();

})(window, jQuery, Marionette, Handlebars);
