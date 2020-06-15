//==============================================================================
//
//  Message video view
//
//==============================================================================

(function(app, config, $)
{
    var MessageVideoView = app.MessageVideoView = Backbone.View.extend({

        events : {

            'click .chat-inline-view' : 'showContent'
        },

        initialize : function()
        {
            // Initialize models

            this.settings = app.model.settings
            this.type     = MessageVideoView.TYPES[this.options.type];

            // Initialize the content

            this.render();
        },

        render : function()
        {
            var url = this.options.url,
                id  = this.options.videoId;

            this.$el.html(app.template.messageVideo({

                type : this.options.type,
                url  : url,
                id   : id,
                icon : this.type.icon
            }));

            this.$iframe = this.$('iframe');

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

            this.$iframe

                .attr('src', this.type.url.replace('%id%', this.options.videoId))
                .bind('load', $.proxy(this.onLoad, this))
            ;

            this.$el.removeClass('manual-show').addClass('loading');

            this.contentShown = true;
        },

        onLoad : function()
        {
            this.$el

                .removeClass('loading')
                .trigger('contentUpdate')
            ;
        }
    },
    {
        TYPES : {

            youtube : { icon : 'youtube-play', url : '//www.youtube.com/embed/%id%'  },
            vimeo   : { icon : 'vimeo',        url : '//player.vimeo.com/video/%id%' }
        }
    });

})(window.Application, window.chatConfig, jQuery);
