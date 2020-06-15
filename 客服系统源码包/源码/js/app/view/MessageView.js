//==============================================================================
//
//  Message view
//
//==============================================================================

(function(app, config, $)
{
    var URL_EXP   = /(((http(s)?:(?:\/\/)?)(?:[\-;:&=\+\$,\w]+@)?[A-Za-z0-9\.\-]+|(?:www\.|[\-;:&=\+\$,\w]+@)[A-Za-z0-9\.\-]+)((?:\/[\+~%\/\.\w\-_*\[\]]*)?\??(?:[\-\+=&;%@\.\w_\[\]]*)#?(?:[\.\!\/\\\w=]*))?)/,
        IMG_EXP   = /(png|gif|jpg|jpeg)$/i,
        YT_EXP    = /youtube.com\/(?:watch\?v=|v\/)([^&\/?]+)|youtu.be\/([^&\/?]+)/i,
        VIMEO_EXP = /vimeo.com\/(?:[\w\/]+\/)*([\d]+)/i;

    var MessageView = app.MessageView = Backbone.View.extend({

        initialize : function()
        {
            this.subviews = [];

            // Check if the message should be grouped with a previous one

            if(this.options.prevMessage)
            {
                this.prevMessage = this.options.prevMessage;

                if(this.model.get('from_id') == this.prevMessage.get('from_id'))
                {
                    this.short = true;
                }
            }

            // Initialize models

            this.settings = app.model.settings;

            // Handle rendering

            this.listenTo(this.model, 'change', this.render);

            // Initialize the content

            this.render();

            // Fade in

            this.$el.hide();
            this.$el.fadeIn('fast');
        },

        render : function()
        {
            // Clear the view

            this.$el.html(app.template.message({

                author     : this.model.getReadableName() || this.model.get('author'),
                isSystem   : this.model.isSystemMessage(),
                isOperator : this.model.get('authorType') == 'operator'
            }));

            // Cache elements

            this.$time = this.$('.customer-chat-content-message-time');

            // Fill the element with data

            this.buildBody(this.$('.customer-chat-content-message-body'));

            this.updateTime(true);

            // Create the avatar

            if(this.short && !this.model.isSystemMessage())
            {
                // Handle short (grouped) views

                this.$el.addClass('short');

                // Hide time if desired

                if(this.prevMessage.getAge() - this.model.getAge() < MessageView.VISIBLE_AGE_LIMIT)
                {
                    this.$time.hide();
                }
            }
            else
            {
                new app.AvatarView({ el : this.$('.avatar')[0], model : this.model });
            }
        },

        buildBody : function($body)
        {
            // Check for file message

            var extra = this.model.get('extra');

            if(extra && extra.type === app.MessageModel.EXTRA_FILES)
            {
                $body.append(this.storeSubview(MessageView.createFileView(this.model)));

                return;
            }

            var emots = this.settings.get('emots');

            var body = this.model.get('body').split('<').join('&lt;').split('>').join('&gt;');

            // Create message elements

            var match, useImages = config.ui.chatBoxMedia !== 'off';

            while(match = URL_EXP.exec(body))
            {
                var plainText = body.slice(0, match.index),
                    i         = match.index,
                    url       = match[0],
                    text      = url,
                    regular   = true;

                if(url.indexOf('@') > -1)
                {
                    url = 'mailto:' + url;
                }
                else if(url.indexOf('://') === -1)
                {
                    url = 'http://' + url;
                }

                // Remove parsed part

                body = body.slice(i + url.length);

                // Append elements

                if(plainText.length > 0)
                {
                    $body.append(emots ? MessageView.addEmoticons(plainText) : plainText);
                }

                if(useImages)
                {
                    // Special views

                    if(MessageView.isImageLink(url))
                    {
                        // Image link

                        $body.append(this.storeSubview(MessageView.createImageView(url)));

                        regular = false;
                    }
                    else
                    {
                        var id;

                        if(id = MessageView.isYouTubeLink(url))
                        {
                            // YouTube video link

                            $body.append(this.storeSubview(MessageView.createVideoView('youtube', url, id)));

                            regular = false;
                        }
                        else if(id = MessageView.isVimeoLink(url))
                        {
                            // Vimeo video link

                            $body.append(this.storeSubview(MessageView.createVideoView('vimeo', url, id)));

                            regular = false;
                        }
                    }
                }

                if(regular)
                {
                    // Regular link

                    $body.append(MessageView.createLinkElement(text, url));
                }

            }

            // Add remaining text

            $body.append(emots ? MessageView.addEmoticons(body) : body);
        },

        storeSubview : function(view)
        {
            this.subviews.push(view);

            return view.el;
        },

        updateTime : function(reschedule)
        {
            // Update the time field

            var seconds = this.model.getAge();

            var minutes = Math.floor(seconds / 60);
            var hours   = Math.floor(minutes / 60);
            var days    = Math.floor(hours   / 24);
            var weeks   = Math.floor(days    /  7);
            var time    = this.model.get('time');

            var fullDate     = (time.getDate() < 10 ? '0' : '') + time.getDate() + '.' + ((time.getMonth() + 1) < 10 ? '0' : '') + (time.getMonth() + 1) + '.' + time.getFullYear();
            var fullTime     = (time.getHours() < 10 ? '0' : '') + time.getHours() + ':' + (time.getMinutes() < 10 ? '0' : '') + time.getMinutes() + ':' + (time.getSeconds() < 10 ? '0' : '') + time.getSeconds();
            var fullDateTime = fullDate + ' ' + fullTime;

            // Always display the full date, if desired

            if(this.options.fullDate)
            {
                this.$time.html(fullDateTime);

                return;
            }

            var text =

                weeks   > 0 ? fullDateTime :
                days    > 0 ? days    + ' ' + app.service.i18n.trans('timeDaysAgo')    :
                hours   > 0 ? hours   + ' ' + app.service.i18n.trans('timeHoursAgo')   :
                minutes > 0 ? minutes + ' ' + app.service.i18n.trans('timeMinutesAgo') :
                              Math.max((seconds - seconds % 5), 1) + ' ' + app.service.i18n.trans('timeSecondsAgo')
            ;

            this.$time.html(text);

            // Reschedule the update

            if(reschedule)
            {
                var nextTimeout =

                    days    > 0 ? -1                            :
                    hours   > 0 ? (60 - minutes % 60) * 60 * 60 :
                    minutes > 5 ? (5 - minutes % 5) * 60        :
                    minutes > 0 ? 60                            :
                                  10 - seconds % 10
                ;

                if(nextTimeout == -1)
                {
                    return;
                }

                // -----

                var self = this;

                this.timerId = setTimeout(function()
                {
                    self.updateTime(true);

                }, nextTimeout * 1000);
            }
        },

        clean : function()
        {
            // Stop update timer

            if(this.timerId) clearTimeout(this.timerId);

            // Remove sub views

            for(var i = 0; i < this.subviews.length; i++)
            {
                this.subviews[i].remove();
            }

            return this;
        }
    },
    {
        VISIBLE_AGE_LIMIT : 300, // 5 minutes (in seconds)

        EMOTICONS : {

            '&gt;:|' : 'emot emot-9',
            '&gt;:D' : 'emot emot-10',
            ':)'     : 'emot emot-1',
            ';)'     : 'emot emot-2',
            ':('     : 'emot emot-3',
            ':D'     : 'emot emot-4',
            ':P'     : 'emot emot-5',
            '=)'     : 'emot emot-6',
            ':|'     : 'emot emot-7',
            '=|'     : 'emot emot-8',
            'o_O'    : 'emot emot-11',
            '=O'     : 'emot emot-12',
            '&lt;3'  : 'emot emot-13',
            ':S'     : 'emot emot-14',
            ':*'     : 'emot emot-15',
            ':$'     : 'emot emot-16',
            '=B'     : 'emot emot-17',
            ':-D'    : 'emot emot-18',
            ';-D'    : 'emot emot-19',
            '*-D'    : 'emot emot-20'
        },

        addEmoticons : function(text)
        {
            // Fill text with emoticons

            for(var emoticon in MessageView.EMOTICONS)
            {
                text = text.split(emoticon).join(

                    MessageView.createEmotElement(MessageView.EMOTICONS[emoticon])
                );
            }

            return text;
        },

        createEmotElement : function(className)
        {
            return '<i class="' + className + '"></i>';
        },

        createLinkElement : function(text, url)
        {
            return '<a href="' + url + '" target="_blank">' + text + '</a>';
        },

        createImageView : function(url)
        {
            return new app.MessageImageView({ url : url });
        },

        createVideoView : function(type, url, videoId)
        {
            return new app.MessageVideoView({ type : type, url : url, videoId : videoId });
        },

        createFileView : function(message)
        {
            return new app.MessageFileView({ message : message });
        },

        isYouTubeLink : function(url)
        {
            var parts = YT_EXP.exec(url);

            if(parts)
            {
                return parts[1] || parts[2];
            }

            return null;
        },

        isVimeoLink : function(url)
        {
            var parts = VIMEO_EXP.exec(url);

            if(parts)
            {
                return parts[1];
            }

            return null;
        },

        isImageLink : function(url)
        {
            return IMG_EXP.test(url);
        }
    });

})(window.Application, window.chatConfig, jQuery);
