//==============================================================================
//
//  Canned messages view
//
//==============================================================================

(function(app, $, _, config)
{
    app.CannedMessagesView = Backbone.View.extend({

        events : {

            'click #customer-chat-canned-messages-back'            : 'showList',
            'click #customer-chat-canned-messages-add'             : 'showAdd',
            'click .customer-chat-canned-messages-edit'            : 'showEdit',
            'click .customer-chat-canned-messages-remove'          : 'deleteMessage',
            'click #customer-chat-canned-messages-save'            : 'save'
        },

        initialize : function()
        {
            // Initialize models

            this.model = app.model.cannedMessages;
            this.user  = app.model.user;

            this.$el.html(app.template.cannedMessages());

            // Cache view elements

            this.$list        = this.$('#customer-chat-canned-messages-list');
            this.$messages    = this.$list.find('.customer-chat-content-messages-wrapper');
            this.$edit        = this.$('#customer-chat-canned-messages-edit');
            this.$save        = this.$('#customer-chat-canned-messages-save');
            this.$back        = this.$('#customer-chat-canned-messages-back');
            this.$editInputs  = this.$edit.find('input');
            this.$loading     = this.$('.customer-chat-content-loading-icon').hide();

            this.$editInputs.blur($.proxy(this.validateEdit, this));

            // Handle rendering

            this.model.on('change:messages', this.render, this);

            this.showList();
            this.render();
        },

        render : function()
        {
            // Display all of the messages

            this.$messages.html('').append(_.map(this.model.get('messages'), function(item)
            {
                return app.template.cannedMessageItem(item);
            }));
        },

        showList : function()
        {
            // Store the state

            this.state = 'list';

            this.$edit.hide();
            this.$list.show();

            this.enable();
        },

        showEdit : function(evt, id)
        {
            var _this = this;

            // Store the state

            var prevState = this.state;

            this.state = 'edit';

            // Hide add mode-specific fields

            this.$edit.find('.add-only').hide();
            this.$edit.find('.edit-only').show();

            // Remove old validation classes

            this.$edit.find('.customer-chat-input-error').removeClass('customer-chat-input-error');

            // Get the message

            var $link = evt ? $(evt.currentTarget) : null;

            var messageId, message;

            // Get the edited message

            messageId = $link ? $link.data('id') : id;
            message   = app.model.selectedMessage = this.model.getById(messageId);

            // Show the edit form with message's data

            if(message)
            {
                this.$edit.find('#messageNameField').val(message.name);
                this.$edit.find('#messageBodyField').val(message.body);
            }

            this.$list.hide();
            this.$edit.show();
        },

        deleteMessage : function(evt)
        {
            var $link = $(evt.currentTarget);

            // Get the message in question

            var message = this.model.getById($link.data('id'));

            // Ask for confirmation

            var _this   = this;
            var buttons = {};

            buttons[app.service.i18n.trans('remove.msg').replace('%message%', message.name)] = function()
            {
                // Remove the message

                _this.model.deleteMessage(message.id);

                $(this).dialog('close');

                // Update the scroller

                $(window).trigger('resize');
            };

            app.view.dialogs.confirm(

                (app.service.i18n.trans('remove.msg') + '?').replace('%message%', message.name),
                app.service.i18n.trans('remove.msg.q'),

                buttons
            );
        },

        showAdd : function()
        {
            // Store the state

            this.state = 'add';

            // Update tab's header

            this.$edit.find('.customer-chat-tabs-header').html(app.service.i18n.trans('add.new.msg'));

            // Show add mode-specific fields

            this.$edit.find('.edit-only, .pass-only').hide();
            this.$edit.find('.add-only').show();

            // Remove old validation classes

            this.$edit.find('.customer-chat-input-error').removeClass('customer-chat-input-error');

            // Create a new user

            app.model.selectedMessage = {};

            // Show the edit form with empty data

            this.$edit.find('#messageNameField').val('');
            this.$edit.find('#messageBodyField').val('');

            this.$list.hide();
            this.$edit.show();
        },

        save : function()
        {
            // Return if data not valid

            if(!this.isEditValid())
            {
                return;
            }

            // Don't allow the operation to run second time simultaneously

            if(this.syncing)
            {
                return;
            }

            this.disable();

            // Update message's data

            var message = app.model.selectedMessage;

            if(message)
            {
                message.name = this.$edit.find('#messageNameField').val();
                message.body = this.$edit.find('#messageBodyField').val();

                var _this = this;

                this.model.once('message:saved', function(errors)
                {
                    _this.enable();

                    _this.showList();
                });

                this.model.once('message:saveError', function(errors)
                {
                    _this.enable();

                    app.view.dialogs.formError(app.service.i18n.trans('form.error'), _.values(errors));
                });

                this.model.saveMessage(message);
            }
            else
            {
                this.enable();
            }
        },

        disable : function()
        {
            this.syncing = true;

            this.$save.addClass('button-disabled');
            this.$loading.fadeIn();
        },

        enable : function()
        {
            var _this = this;

            setTimeout(function()
            {
                _this.$save.removeClass('button-disabled');
                _this.$loading.fadeOut();

                _this.syncing = false;

                if(_this.state == 'add')
                {
                    _this.showList();
                }

            }, 500);
        },

        validateEdit : function(evt, full)
        {
            this.errors = false;

            var _this   = this;
            var $inputs = full ? this.$editInputs : $(evt.target);

            if(!full)
            {
                var matchFieldId = $(evt.target).data('validator-match');

                if(matchFieldId)
                {
                    $inputs = $inputs.add(_this.$el.find('#' + matchFieldId));
                }
            }

            _this.errors = [];

            function addError($el, msg)
            {
                $el.addClass('customer-chat-input-error');

                if($el.data('validator-msg') !== false)
                {
                    var label = $el.data('validator-label');

                    if(label) msg = label + ': ' + msg;

                    _this.errors.push(msg);
                }
                else
                {
                    _this.errors.push(false);
                }
            }

            $inputs.each(function()
            {
                var $el = $(this);

                // Skip validation if specific state is defined

                var state   = $el.data('validator-state');
                var exState = $el.data('validator-state-ex'); // Exclusive state (not to validate if in this state)

                if(state   && state   !== _this.state) return;
                if(exState && exState === _this.state) return;

                // Reset validation style

                $el.removeClass('customer-chat-input-error');

                // Perform validation

                switch($el.data('validator'))
                {
                    case 'notEmpty':
                        if($el.val().length == 0)
                        {
                            addError($el, app.service.i18n.trans('v.cant.be.empty'));
                        }
                    break;
                }

                var matchFieldId = $el.data('validator-match');

                if(matchFieldId)
                {
                    var $matchEl = _this.$el.find('#' + matchFieldId);

                    if($el.val() !== $matchEl.val())
                    {
                        addError($el, app.service.i18n.trans('pass.have.to.match'));
                    }
                }
            });

            // Display error messages

            if(full && this.errors.length > 0)
            {
                app.view.dialogs.formError(app.service.i18n.trans('form.error'), this.errors);
            }
        },

        isEditValid : function()
        {
            this.validateEdit(null, true);

            return this.errors.length === 0;
        }
    });

})(window.Application, jQuery, _, window.chatConfig);
