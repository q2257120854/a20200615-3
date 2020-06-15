//==============================================================================
//
//  Sound input view
//
//==============================================================================

(function(app, $)
{
    var SoundInputView = app.SoundInputView = app.SelectInputView.extend({

        modelEvents : {

            'change' : 'render',
            'change' : 'playSound'
        },

        initialize : function()
        {
            this.soundPlayer = app.service.soundPlayer;

            var _this = this;

            _.each(this.model.get('meta').options, function(option)
            {
                var info = {};

                info[option.value] = option.value;

                _this.soundPlayer.addSounds(info);
            });
        },

        playSound : function(evt)
        {
            this.soundPlayer.play(this.model.get('value'));
        }
    });

})(Application, jQuery);
