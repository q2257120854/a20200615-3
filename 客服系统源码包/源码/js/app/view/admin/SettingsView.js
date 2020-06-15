//==============================================================================
//
//  Settings view
//
//==============================================================================

(function(app, $, Handlebars, config)
{
    var SettingsView = app.SettingsView = Marionette.CompositeView.extend({

        getTemplate : function()
        {
            return app.template.settings;
        },

        getChildView : function(item)
        {
            var meta = item.get('meta');

            if(!meta)
            {
                return Backbone.View;
            }

            switch(meta.type)
            {
                case 'color':
                    return app.ColorInputView;
                break;

                case 'select':
                    return app.SelectInputView;
                break;

                case 'checkbox':
                    return app.CheckboxInputView;
                break;

                case 'sound':
                    return app.SoundInputView;
                break;

                case 'widgetTheme':
                    return app.WidgetThemeInputView;
                break;

                default:
                    return app.TextInputView;
            }
        },

        filter : function(item)
        {
            if(!this.options.tags)
            {
                return true;
            }

            var itemTags = item.get('meta') && item.get('meta').tags;

            return itemTags && _.intersection(this.options.tags, itemTags).length > 0;
        },

        childViewContainer : '.customer-chat-content-messages-wrapper',

        ui : {

            save    : '#customer-chat-ui-save',
            reset   : '#customer-chat-ui-reset',
            loading : '.customer-chat-content-loading-icon'
        },

        events : {

            'click @ui.save'  : 'save',
            'click @ui.reset' : 'reset'
        },

        collectionEvents : {

            'update'  : 'render',
            'request' : 'disable',
            'sync'    : 'enable'
        },

        initialize : function()
        {
            this.syncing = false;

            this.render();
        },

        onRender : function()
        {
            this.ui.loading.hide();
        },

        save : function()
        {
            if(this.isValid() && !this.syncing)
            {
                this.collection.save();
            }
        },

        isValid : function()
        {
            var errors = this.collection.validate();

            // Display message if errors are present

            this.$('.customer-chat-input-error').removeClass('customer-chat-input-error');

            if(errors)
            {
                for(var name in errors)
                {
                    this.$('[name="' + name + '"]').addClass('customer-chat-input-error');
                }

                app.view.dialogs.message('Form error', 'Some settings are invalid');

                return false;
            }

            return true;
        },

        reset : function()
        {
            // Ask for confirmation

            var _this = this, options = {};

            options[app.service.i18n.trans('reset')] = function()
            {
                _this._reset();

                $(this).dialog('close');
            };

            app.view.dialogs.confirm(app.service.i18n.trans('reset.settings'), app.service.i18n.trans('reset.settings.q'), options);
        },

        _reset : function()
        {
            // Find keys to reset

            var keys = this.collection.reduce(function(memo, model)
            {
                if(this.filter(model))
                {
                    memo.push(model.get('name'));
                }

                return memo;

            }, [], this);

            this.collection.reset(keys);
        },

        disable : function()
        {
            this.syncing = true;

            this.ui.save.addClass('button-disabled');
            this.ui.loading.fadeIn();
        },

        enable : function()
        {
            var _this = this;

            setTimeout(function()
            {
                _this.ui.save.removeClass('button-disabled');
                _this.ui.loading.fadeOut();

                _this.syncing = false;

            }, 500);
        },
    });

})(Application, jQuery, Handlebars, chatConfig);
