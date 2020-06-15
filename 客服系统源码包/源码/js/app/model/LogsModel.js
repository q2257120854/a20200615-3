//==============================================================================
//
//  Logs
//
//==============================================================================

(function(app, $, config)
{
    app.LogsModel = Backbone.Model.extend({
        
        fetch : function()
        {
            // Notify about the started request
            
            this.trigger('request');

            var _this = this;
            
            $.get(config.getLogsPath, function(data)
            {
                // Store the data
                
                _this.set('content', data);

                // Notify about the finished request
                
                _this.trigger('sync');
            });
        },

        set : function(key, data)
        {
            var oldLength = typeof this.attributes[key] === 'string' ? this.attributes[key].length : 0;

            this.attributes[key] = data;

            var newLength = typeof this.attributes[key] === 'string' ? this.attributes[key].length : 0;

            if(newLength !== oldLength)
            {
                this.trigger('change:' + key, this, this.attributes[key]);
                this.trigger('change', this);
            }
        },

        clear : function(callbackSuccess, callbackError)
        {
            // Notify about the started request
            
            this.trigger('request');

            var _this = this;
            
            $.get(config.clearLogsPath, function(data)
            {
                if(data.success)
                {
                    // Clear the data
                    
                    _this.set('content', '');

                    // Notify about the finished request
                    
                    _this.trigger('sync');
                    
                    if(callbackSuccess) callbackSuccess();
                }
                else
                {
                    if(callbackError) callbackError();
                }
            });
        }
    });

})(window.Application, jQuery, window.chatConfig);