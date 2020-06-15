//==============================================================================
//
//  Admin settings
//
//==============================================================================

(function(app, $)
{
    app.AdminSettingsModel = Backbone.Model.extend({

        defaults : {

            sound  : true,
            scroll : true,
            emots  : true,
            media  : true
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
                localStorage.setItem('customer-chat-admin-settings', JSON.stringify(this.attributes));
            }
            catch(e)
            {
                // Do nothing
            }
        },

        fetch : function()
        {
            var jsonString = localStorage.getItem('customer-chat-admin-settings');

            if(jsonString)
            {
                this.set(JSON.parse(jsonString));
            }
        }
    });

})(window.Application, jQuery);
