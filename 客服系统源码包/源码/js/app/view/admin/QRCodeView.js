//==============================================================================
//
//  QRCodeView
//
//==============================================================================

(function(app, config)
{
    var QRCodeView = Backbone.View.extend({

        template : function(data)
        {
            return app.template.qrCode(data);
        },

        initialize : function(options)
        {
            this.render();
        },

        render : function()
        {
            var data = JSON.stringify(config.qrCode);

            // Display view's template

            this.$el.html(this.template());

            // Display QR Code

            app.service.qrCode.display(this.$('.qr-code')[0], {

                data : data,

                width  : 320,
                height : 320
            });

            return this;
        }
    });

    app.QRCodeView = QRCodeView;

})(window.Application, window.chatConfig);
