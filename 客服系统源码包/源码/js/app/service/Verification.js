//==============================================================================
//
//  Verification
//
//==============================================================================

(function(app, config, $)
{
    function Verification()
    {
        this.config    = config.services.verify;
        this.onSuccess = null;
        this.onFailure = null;
        this.onError   = null;
    }

    Verification.prototype = {

        constructor : Verification,

        verify : function(purchaseCode)
        {
            if(purchaseCode.length === 1)
            {
                purchaseCode = purchaseCode[0];
            }

            $.post(this.config.url, JSON.stringify({ app : this.config.app, code : purchaseCode }), null, 'json')

                .done($.proxy(this.handleResponse, this))
                .fail($.proxy(this.handleError, this))
            ;
        },

        handleResponse : function(data)
        {
            if(data.success)
            {
                if(this.onSuccess) this.onSuccess(data);
            }
            else
            {
                if(this.onFailure) this.onFailure(data);
            }
        },

        handleError : function(e)
        {
            if(this.onError) this.onError(e);
        }
    };

    app.Verification = Verification;

})(window.Application, window.chatConfig, jQuery);
