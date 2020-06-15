//==============================================================================
//
//  Tabs component view
//
//==============================================================================

(function(app, $, config, _)
{
    app.TabsView = Backbone.View.extend({

        events : {

            'mousedown .customer-chat-tab' : 'switchTab',

            // Arrows

            'click .customer-chat-tab-prev' : 'prevButtons',
            'click .customer-chat-tab-next' : 'nextButtons'
        },

        currentTab : 0,

        prevWinSize : { width : 0, height : 0 },

        initialize : function()
        {
            // Cache view components

            this.$window              = $(window);
            this.$tabContentContainer = this.$el;
            this.$container           = this.$('.customer-chat-tabs');
            this.$buttonsContainer    = this.$('.customer-chat-tabs-wrapper');
            this.$buttons             = this.$('.customer-chat-tab-button');
            this.$tabs                = this.$el.children('.customer-chat-tab-content');
            this.$prev                = this.$('.customer-chat-tab-prev');
            this.$next                = this.$('.customer-chat-tab-next');

            // Initialize

            if(this.$el.is(':visible'))
            {
                this.render();
            }
            else
            {
                // First show the element so it gets resized

                this.$el.show();
                this.render();
                this.$el.hide();
            }

            this.updateOnResize();

            setTimeout($.proxy(this.render, this), 0);
        },

        addTab : function(options)
        {
            // Add button

            var $button = $(options.button);

            this.$buttonsContainer.append($button);
            this.$buttons = this.$buttons.add($button);

            // Add content

            var $content = $(options.content);

            this.$tabs = this.$tabs.add($content);
            this.$tabContentContainer.append($content);

            // Refresh the view

            this.render();

            // Return the just created content element

            return $content;
        },

        removeTab : function(index)
        {
            // Remove button & content

            var $button = this.$buttons.eq(index);

            $button.remove();

            this.$buttons = this.$buttons.not($button);

            var $content = this.$tabs.eq(index);

            $content.remove();

            this.$tabs = this.$tabs.not($content);

            // Refresh the view

            this.render();
        },

        removeTabByTag : function(tag)
        {
            // Remove button & content

            var $button = this.$buttons.parent().find('[data-tag="' + tag + '"]');

            $button.remove();

            this.$buttons = this.$buttons.not($button);

            var $content = this.$tabs.parent().find('[data-tag="' + tag + '"]');

            $content.remove();

            this.$tabs = this.$tabs.not($content);

            // Refresh the view

            this.render();
        },

        removeTabs : function()
        {
            var $buttons  = $();
            var $contents = $();

            // Collect button and content elements

            for(var i = 0; i < arguments.length; i++)
            {
                $buttons  = $buttons.add(this.$buttons.eq(arguments[i]));
                $contents = $contents.add(this.$tabs.eq(arguments[i]));
            }

            // Remove elements

            $buttons.remove();
            $contents.remove();

            this.$buttons = this.$buttons.not($buttons);
            this.$tabs = this.$tabs.not($contents);

            // Refresh the view

            this.render();
        },

        showTab : function(index)
        {
            // Return if the index is invalid

            if(index >= this.$tabs.length || index < 0)
            {
                return;
            }

            // Store the current tab index

            this.currentTab = index;

            // Hide all tabs and show the given one

            this.$tabs.hide().eq(index).show();

            // Add styling to the active button

            this.$buttons.removeClass('customer-chat-active').eq(index).addClass('customer-chat-active');

            // Adjust the buttons container

            this.includeButtonInView(index);

            // Notify

            this.trigger('tab.show', index);
        },

        getButtonIndex : function(button)
        {
            return this.$buttons.index(button);
        },

        getButton : function(index)
        {
            return this.$buttons.eq(index);
        },

        includeButtonInView : function(buttonIndex)
        {
            // Hide the arrow buttons

            this.$prev.hide();
            this.$next.hide();

            // Calculate the total buttons width

            var totalWidth = _.reduce(this.$buttons, function(result, element)
            {
                return result + $(element).outerWidth(true);

            }, 0);

            // Check if adjustment is needed

            var containerWidth = this.$container.width();

            if(totalWidth > containerWidth)
            {
                // Adjust buttons container to make the given button fully visible

                var $button = this.$buttons.eq(buttonIndex);

                var containerX  = this.$buttonsContainer.position().left;
                var buttonX     = $button.position().left;
                var buttonWidth = $button.outerWidth();
                var newX        = containerX;

                if(containerX + buttonX < this.$prev.outerWidth())
                {
                    // Position the button at the left edge

                    newX = -buttonX;

                    if(newX < 0)
                    {
                        newX += this.$prev.outerWidth() - 1;
                    }
                }
                else if(containerX + buttonX + buttonWidth > containerWidth - this.$next.outerWidth())
                {
                    // Position the button at the right edge

                    newX = containerWidth - (buttonX + buttonWidth);

                    if(newX + totalWidth > containerWidth)
                    {
                        newX -= this.$next.outerWidth() - 1;
                    }
                }

                // Show the arrows if necessary

                if(newX !== 0)
                {
                    this.$prev.show();
                }

                if(newX + totalWidth > containerWidth)
                {
                    this.$next.show();
                }

                // Apply positioning

                this.$buttonsContainer.css('left', newX);
            }
            else
            {
                // Align buttons to the left edge

                this.$buttonsContainer.css('left', 0);
            }
        },

        switchTab : function(evt)
        {
            var tabIndex = this.$buttons.index(evt.currentTarget);

            // Show the given tab

            this.showTab(tabIndex);
        },

        showTabForButton : function(button)
        {
            this.switchTab({ currentTarget : button });
        },

        prevButtons : function()
        {
            // Check which button is the closest partly visible on the left

            var containerX = this.$buttonsContainer.position().left;

            var i;

            for(i = 0; i < this.$buttons.length; i++)
            {
                var $button   = this.$buttons.eq(i);
                var buttonPos = $button.position();

                // Translate button's position to parent coordinates

                buttonPos.left += containerX;

                // Check if the button is touching the left edge

                if(buttonPos.left < 0 && 0 < buttonPos.left + $button.outerWidth())
                {
                    break;
                }
            }

            // Show the button

            this.includeButtonInView(i);
        },

        nextButtons : function()
        {
            // Check which button is the closest partly visible on the left

            var containerX     = this.$buttonsContainer.position().left;
            var containerWidth = this.$container.width();

            var i;

            for(i = this.$buttons.length - 1; i >= 0; i--)
            {
                var $button   = this.$buttons.eq(i);
                var buttonPos = $button.position();

                // Translate button's position to parent coordinates

                buttonPos.left += containerX;

                // Check if the button is touching the right edge

                if(buttonPos.left < containerWidth && containerWidth < buttonPos.left + $button.outerWidth())
                {
                    break;
                }
            }

            // Show the button

            this.includeButtonInView(i);
        },

        render : function()
        {
            var tabIndex = Math.max(Math.min(this.currentTab, this.$tabs.length - 1), 0);

            this.showTab(tabIndex);
        },

        updateOnResize : function()
        {
            // Update on resize (with frequency of maximum 2 times a second)

            var timeoutId = null;
            var resize    = $.proxy(this.render, this);
            var _this     = this;

            this.$window.resize(function()
            {
                if(_this.$window.width() !== _this.prevWinSize.width || _this.$window.height() !== _this.prevWinSize.height)
                {
                    _this.prevWinSize = { width : _this.$window.width(), height : _this.$window.height() };

                    if(timeoutId) clearTimeout(timeoutId);
                    timeoutId = setTimeout(resize, 500);
                }
            });
        }
    });

})(window.Application, jQuery, window.chatConfig, _);
