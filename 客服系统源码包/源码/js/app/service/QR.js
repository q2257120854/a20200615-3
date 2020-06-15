//==============================================================================
//
//  Class for creating QR Codes
//
//==============================================================================

(function(app, config, _)
{
    function QR() {}

    QR.prototype = {

        constructor : QR,

        display : function(element, options)
        {
            _.defaults(options || {}, {

                width : 256,
                height: 256
            });

            element.innerHTML = '';

            new QRCode(element, {

                text         : options.data,
                width        : options.width,
                height       : options.height,
                colorDark    : '#000000',
                colorLight   : '#ffffff',
                correctLevel : QRCode.CorrectLevel.H
            });
        }
    };

    app.QR = QR;

})(window.Application, window.chatConfig, window._);
