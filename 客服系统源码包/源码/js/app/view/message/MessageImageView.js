//==============================================================================
//
//  Message image view
//
//==============================================================================

(function(app, config, $)
{
    var MessageImageView = app.MessageImageView = Backbone.View.extend({

        events : {

            'click .chat-inline-view' : 'showContent'
        },

        initialize : function()
        {
            // Initialize models

            this.settings = app.model.settings;

            // Initialize the content

            this.render();
        },

        render : function()
        {
            var url = this.options.url;

            this.$el.html(app.template.messageImage({

                url : url
            }));

            this.$imgLink = this.$('.chat-inline-view').attr('href', '#');
            this.$img     = this.$imgLink.find('.image');

            // Handle display settings

            if(this.settings.get('media'))
            {
                if(config.ui.chatBoxMedia === 'auto')
                {
                    this.showContent();
                }
                else
                {
                    this.manualShow = true;

                    this.$el.addClass('manual-show');
                }
            }
            else
            {
                this.$el.addClass('chat-inline-disabled');
            }

            return this;
        },

        showContent : function(evt)
        {
            if(this.contentShown)
            {
                return;
            }

            if(this.manualShow)
            {
                this.manualShow = false;

                if(evt) evt.preventDefault();
            }

            this.$imgLink.attr('href', this.options.url);

            this.$img

                .attr('src', this.options.url)
                .bind('load', $.proxy(this.onLoad, this))
            ;

            this.$el.removeClass('manual-show').addClass('loading');

            this.contentShow = true;
        },

        onLoad : function()
        {
            this.$el

                .removeClass('loading')
                .trigger('contentUpdate')
            ;
        }
    });

})(window.Application, window.chatConfig, jQuery);
