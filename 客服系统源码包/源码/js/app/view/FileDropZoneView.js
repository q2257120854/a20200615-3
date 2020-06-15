//==============================================================================
//
//  File drop zone view
//
//==============================================================================

(function(app, config, $)
{
    app.FileDropZoneView = Marionette.ItemView.extend({

        events : {

            'drop' : 'handleDrop'
        },

        initialize : function()
        {
            _.bindAll(this, 'enableEffect', 'disableEffect');
        },

        delegateEvents : function()
        {
            // Check browser compatibility

            if(!(window.File && window.FileList && window.FileReader))
            {
                return;
            }

            Marionette.ItemView.prototype.delegateEvents.apply(this, arguments);

            this.el.addEventListener('dragover',  this.enableEffect,  false);
            this.el.addEventListener('dragleave', this.disableEffect, false);
        },

        undelegateEvents : function()
        {
            // Check browser compatibility

            if(!(window.File && window.FileList && window.FileReader))
            {
                return;
            }

            this.el.removeEventListener('dragover',  this.enableEffect,  false);
            this.el.removeEventListener('dragleave', this.disableEffect, false);

            Marionette.ItemView.prototype.undelegateEvents.apply(this, arguments);
        },

        enableEffect : function(e)
        {
            e.preventDefault();
            e.stopPropagation();

            if(!this._isFileTransfer(e)) return;

            if(this.disableTimer) clearTimeout(this.disableTimer);

            this.$el.addClass('active');
        },

        disableEffect : function(e)
        {
            if(this.disableTimer) clearTimeout(this.disableTimer);

            var _this = this;

            this.disableTimer = setTimeout(function()
            {
                _this.$el.removeClass('active');

            }, 100);
        },

        handleDrop : function(e)
        {
            e.preventDefault();
            e.stopPropagation();

            this.disableEffect();

            var files = e.originalEvent.dataTransfer.files || e.originalEvent.target.files;

            if(files && files.length > 0)
            {
                this.trigger('drop', files);
            }
        },

        _isFileTransfer : function(e)
        {
            if(e.dataTransfer.types)
            {
                for(var i = 0; i < e.dataTransfer.types.length; i++)
                {
                    if(e.dataTransfer.types[i] === 'Files') return true;
                }

                return false;
            }

            return true;
        }
    });

})(window.Application, window.chatConfig, jQuery);
