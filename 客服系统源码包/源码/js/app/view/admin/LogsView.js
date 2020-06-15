//==============================================================================
//
//  Logs view
//
//==============================================================================

(function(app, $, config)
{
    app.LogsView = Backbone.View.extend({

        events : {

            'click #customer-chat-logs-refresh' : 'refresh',
            'click #customer-chat-logs-clear'   : 'clear'
        },

        syncing : false,

        initialize : function()
        {
            // Initialize models

            this.model = app.model.logs;

            // Initialize the content

            this.$el.html(app.template.logs());

            // Cache view elements

            this.$scroller = this.$('.customer-chat-content-messages');
            this.$wrapper  = this.$('.customer-chat-content-messages-wrapper');
            this.$refresh  = this.$('#customer-chat-logs-refresh');
            this.$clear    = this.$('#customer-chat-logs-clear');
            this.$loading  = this.$('.customer-chat-content-loading-icon').hide();

            // Keep updating the scroller when necessary

            this.$scroller

                .bind('show', function()
                {
                    $(window).trigger('resize');
                })

                .mCustomScrollbar()
            ;

            // Initialize when shown

            var _this = this;

            this.$scroller.bind('show', function()
            {
                _this.init();
            });

            // Clean the view when hidden

            this.$scroller.bind('hide', function()
            {
                _this.clean();
            });

            // Handle rendering

            this.model.on('change',  this.render,  this);
            this.model.on('request', this.disable, this);
            this.model.on('sync',    this.enable,  this);
        },

        render : function()
        {
            this.$wrapper.html('').append($('<pre>').text(this.model.get('content')));

            // Scroll to bottom

            var _this = this;

            setTimeout(function()
            {
                _this.$scroller.mCustomScrollbar('update');
                _this.$scroller.mCustomScrollbar('scrollTo', 'bottom');

            }, 200);
        },

        disable : function()
        {
            this.syncing = true;

            this.$refresh.addClass('button-disabled');
            this.$clear.addClass('button-disabled');
            this.$loading.fadeIn();
        },

        enable : function()
        {
            var _this = this;

            setTimeout(function()
            {
                _this.$refresh.removeClass('button-disabled');
                _this.$clear.removeClass('button-disabled');
                _this.$loading.fadeOut();

                _this.syncing = false;

            }, 500);
        },

        init : function()
        {
            if(this.model.has('content'))
            {
                var _this = this;

                setTimeout(function()
                {
                    _this.render();

                }, 200);
            }
            else
            {
                this.model.fetch();
            }
        },

        refresh : function()
        {
            if(!this.syncing)
            {
                this.model.fetch();
            }
        },

        clean : function()
        {
            this.$wrapper.html('');
        },

        clear : function()
        {
            if(this.syncing) return;

            // Ask for confirmation

            var _this = this, options = {};

            options[app.service.i18n.trans('clear')] = function()
            {
                _this._clear();

                $(this).dialog('close');
            };

            app.view.dialogs.confirm(app.service.i18n.trans('clear.logs'), app.service.i18n.trans('clear.logs.q'), options);
        },

        _clear : function()
        {
            this.model.clear($.proxy(this.onClear, this.onClearError));
        },

        onClear : function()
        {
            app.view.dialogs.message(app.service.i18n.trans('clear.logs'), app.service.i18n.trans('logs.cleared'));
        },

        onClearError : function()
        {
            app.view.dialogs.message(app.service.i18n.trans('clear.logs'), app.service.i18n.trans('clear.logs.err'));
        },
    });

})(window.Application, jQuery, window.chatConfig);
