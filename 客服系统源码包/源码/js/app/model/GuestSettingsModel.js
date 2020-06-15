//==============================================================================
//
//  Widget settings
//
//==============================================================================

(function(app, $)
{
    app.GuestSettingsModel = Backbone.Model.extend({

        defaults : {

            // User settings

            sound  : true,
            scroll : true,
            emots  : true,
            media  : true,
            show   : true,

            // System settings

            autoShow : true
        },

        initialize : function()
        {
            // Read settings from cookies if any

            this.fetch();

            // Handle saving

            this.on('change', this.save, this);
        },

        save : function()
        {
            try
            {
                localStorage.setItem('customer-chat-settings', JSON.stringify(this.attributes));
            }
            catch(e)
            {
                // Do nothing
            }
        },

        fetch : function()
        {
            var jsonString = localStorage.getItem('customer-chat-settings');

            if(jsonString)
            {
                this.set(JSON.parse(jsonString));
            }
        }
    });

})(window.Application, jQuery);
