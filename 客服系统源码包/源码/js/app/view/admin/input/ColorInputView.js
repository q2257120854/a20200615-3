//==============================================================================
//
//  Color input view
//
//==============================================================================

(function(app, $)
{
    var ColorInputView = app.ColorInputView = app.TextInputView.extend({

        onRender : function()
        {
            this.initColorPicker();
        },

        initColorPicker : function()
        {
            var $el = this.$('input'), _this = this;

            $el.ColorPicker({

                onSubmit : function(hsb, hex, rgb)
                {
                    var value = '#' + hex;

                    $el.val(value);
                    $el.ColorPickerHide();

                    _this.model.set('value', value);
                },

                onChange : function(hsb, hex, rgb)
                {
                    $el.val('#' + hex);
                    $el.blur();
                },

                onHide : function()
                {
                    _this.model.set('value', $el.val());
                },

                onBeforeShow : function()
                {
                    $el.ColorPickerSetColor(this.value);
                }
            })
                .bind('keyup', function()
                {
                    $el.ColorPickerSetColor(this.value);
                })
            ;
        }
    });

})(Application, jQuery);
