//==============================================================================
//
//  Select list view
//
//==============================================================================

(function(app, config, $)
{
    var SelectListView = app.SelectListView = Backbone.View.extend({

        events : {

            'click .entry-item'  : 'toggleEntry',
            'click .select-all'  : 'selectAll',
            'click .select-none' : 'selectNone'
        },

        initialize : function()
        {
            this.selected = [];

            this.dataProvider = this.options.dataProvider;
            this.getLabel     = this.options.getLabel;

            this.options.iconActive   = this.options.iconActive   || 'check-square-o';
            this.options.iconInactive = this.options.iconInactive || 'square-o';

            if(this.options.styleItem)
            {
                var origStyleItem = $.proxy(this.styleItem, this),
                    newStyleItem  = $.proxy(this.options.styleItem, this);

                this.styleItem = function($entry, $icon, selected)
                {
                    origStyleItem($entry, $icon, selected);
                    newStyleItem ($entry, $icon, selected);
                };
            }

            this.listenTo(this.model, this.options.renderEvent, this.render);

            if(this.options.readOnly)
            {
                this.$el.addClass('read-only');

                // Disable event handling

                setTimeout($.proxy(this.undelegateEvents, this), 0);
            }

            // Handle scroller

            var _this = this;

            if(!this.options.noScroll) setInterval(function()
            {
                _this.$el.find('.entries').mCustomScrollbar('update');

            }, 500);

            this.render();
        },

        render : function()
        {
            var entries = this.dataProvider();

            this.$el.html(app.template.selectListContent({

                actions : !(this.options.readOnly || this.options.single)
            }));

            // Display entries

            if(entries.length === 0)
            {
                this.$el.addClass('empty');
            }
            else
            {
                this.$el.removeClass('empty');
            }

            this.$entries = this.$('.entries');

            for(var i = 0; i < entries.length; i++)
            {
                var entry = entries[i], entryId = parseInt(entry.id),

                    $entry = $('<a class="entry-item"></a>'),

                    displayName = entry.name,
                    displayMail = entry.mail,

                    $icon = $('<i>').addClass('fa')
                ;

                if(!this.options.readOnly)
                {
                    $entry.append($icon);
                }

                $entry
                    .append(this.getLabel(entry))

                    .data('entryId', entryId)
                    .data('entry',   entry)
                ;

                this.styleItem($entry, $icon, this.isSelected(entryId));
                this.$entries.append($entry);
            }

            // Initialize the scroller

            if(!this.options.noScroll) this.$el.find('.entries').mCustomScrollbar();

            return this;
        },

        toggleEntry : function(e)
        {
            var $entry = $(e.currentTarget);

            // Handle disabled entries

            if($entry.hasClass('disabled'))
            {
                return;
            }

            var entryId = $entry.data('entryId'),
                i       = this.selected.indexOf(entryId),
                $icon   = $entry.find('.fa');

            if(this.options.single)
            {
                this.selectNone(true);

                this.selected = [ entryId ];

                this.styleItem($entry, $icon, true);
            }
            else if(i !== -1)
            {
                this.selected.splice(i, 1);

                // Update icon

                this.styleItem($entry, $icon, false);
            }
            else
            {
                this.selected.push(entryId);

                // Update icon

                this.styleItem($entry, $icon, true);
            }

            this.trigger('updateSelection');
        },

        select : function(ids)
        {
            if(ids.length === 0 && this.options.selectedOnly)
            {
                this.$el.addClass('empty');
            }

            this.selected = [];

            var _this = this;

            this.$entries.find('a').each(function()
            {
                var $entry  = $(this),
                    entryId = $entry.data('entryId'),
                    $icon   = $entry.find('.fa');

                if(ids.indexOf(entryId) !== -1)
                {
                    _this.selected.push(entryId);

                    // Update icon

                    _this.styleItem($entry, $icon, true);

                    if(_this.options.selectedOnly)
                    {
                        $entry.show();
                    }
                }
                else
                {
                    // Update icon

                    _this.styleItem($entry, $icon, false);

                    if(_this.options.selectedOnly)
                    {
                        $entry.hide();
                    }
                }
            });

            this.trigger('updateSelection');
        },

        selectAll : function(silent)
        {
            this.selected = [];

            var _this = this;

            this.$entries.find('a').each(function()
            {
                var $entry  = $(this),
                    entryId = $entry.data('entryId'),
                    $icon   = $entry.find('.fa');

                _this.selected.push(entryId);

                // Update icon

                _this.styleItem($entry, $icon, true);
            });

            if(!silent) this.trigger('updateSelection');
        },

        selectNone : function(silent)
        {
            this.selected = [];

            var _this = this;

            this.$entries.find('a').each(function()
            {
                var $entry = $(this),
                    $icon  = $entry.find('.fa');

                // Update icon

                _this.styleItem($entry, $icon, false);
            });

            if(!silent) this.trigger('updateSelection');
        },

        isSelected : function(entryId)
        {
            return this.selected.indexOf(entryId) !== -1;
        },

        styleItem : function($entry, $icon, selected)
        {
            if(selected)
            {
                $entry.addClass('active');

                $icon
                    .removeClass('fa-' + this.options.iconInactive)
                    .addClass   ('fa-' + this.options.iconActive)
                ;
            }
            else
            {
                $entry.removeClass('active');

                $icon
                    .removeClass('fa-' + this.options.iconActive)
                    .addClass   ('fa-' + this.options.iconInactive)
                ;
            }
        },

        clearItemStyle : function($entry, $icon)
        {
            $icon
                .removeClass('fa-' + this.options.iconActive)
                .removeClass('fa-' + this.options.iconInactive)
            ;
        }
    });

})(window.Application, chatConfig, jQuery);
