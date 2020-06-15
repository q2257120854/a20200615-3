//==============================================================================
//
//  Operators view
//
//==============================================================================

(function(app, $, _, config)
{
    app.OperatorsView = Backbone.View.extend({

        mailExp  : new RegExp('^[-+\\.0-9=a-z_]+@([-0-9a-z]+\\.)+([0-9a-z]){2,}$', 'i'),

        events : {

            'click #customer-chat-operators-back'            : 'showList',
            'click #customer-chat-operators-add'             : 'showAdd',
            'click #customer-chat-operators-change-password' : 'showChangePassword',
            'click #customer-chat-operators-cancel'          : 'showEdit',
            'click .customer-chat-operators-edit'            : 'showEdit',
            'click .customer-chat-operators-remove'          : 'deleteOperator',
            'click #avatar-from-collection'                  : 'selectAvatar',
            'click #customer-chat-operators-save'            : 'save'
        },

        initialize : function()
        {
            // Initialize models

            this.model = app.model.chat;
            this.user  = app.model.user;

            this.$el.html(app.template.operators());

            // Cache view elements

            this.$list        = this.$('#customer-chat-operators-list');
            this.$operators   = this.$list.find('.customer-chat-content-messages-wrapper');
            this.$edit        = this.$('#customer-chat-operators-edit');
            this.$save        = this.$('#customer-chat-operators-save');
            this.$back        = this.$('#customer-chat-operators-back');
            this.$editInputs  = this.$edit.find('input');
            this.$avatarInput = this.$edit.find('#avatarUploadField');
            this.$loading     = this.$('.customer-chat-content-loading-icon').hide();

            var isOperator = this.user.hasRole('OPERATOR') && !this.user.hasRole('ADMIN');

            // Create sub views

            this.departmentsList = new app.SelectListView({

                el           : this.$('.select-list'),
                model        : app.model.departments,
                renderEvent  : 'change:departments',
                readOnly     : isOperator,
                selectedOnly : isOperator,
                noScroll     : true,
                dataProvider : function()
                {
                    return app.model.departments.get('departments');
                },
                getLabel : function(department)
                {
                    return '<b>' + department.name + '</b>' + (department.description ? (' (<i>' + department.description + '</i>)') : '');
                }
            });

            if(isOperator)
            {
                this.departmentsList.select(this.user.get('departments') || []);

                this.$back.remove();

                this.listenToOnce(this.model, 'change:operators', function()
                {
                    this.showEdit(null, this.user.get('id'));
                });

                this.$('.select-list').html(app.service.i18n.trans('no.entries'));
            }

            this.$editInputs.blur($.proxy(this.validateEdit, this));

            // Handle rendering

            this.model.on('change:operators', this.render, this);

            this.showList();
            this.render();

            this.model.loadOperators();
        },

        render : function()
        {
            // Display all of the operators

            this.$operators.html('').append(_.map(this.model.getOperators(), function(item)
            {
                if(item.roles.indexOf('ADMIN') < 0)
                {
                    item = _.extend({}, item, { removeVisible : true });
                }

                return app.template.operatorItem(item);
            }));
        },

        setEditAvatarIcon : function($item, image)
        {
            $item.find('.avatar').css('background-image', 'url("' + image + '")');
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

            this.$edit.find('.add-only, .pass-only').hide();
            this.$edit.find('.edit-only').show();

            // Remove old validation classes

            this.$edit.find('.customer-chat-input-error').removeClass('customer-chat-input-error');

            // Get the user

            var $link = evt ? $(evt.currentTarget) : null;

            var userId, user;

            if(prevState !== 'pass')
            {
                // Get the edited operator

                userId = $link ? $link.data('id') : id;
                user   = app.model.selectedOperator = app.model.chat.getOperator(userId);
            }
            else
            {
                user   = app.model.selectedOperator;
                userId = user.id;
            }

            // Update tab's header

            this.$edit.find('.customer-chat-tabs-header').html(this.user.get('id') === id ? app.service.i18n.trans('edit.profile') : app.service.i18n.trans('edit.operator'));

            // Show the edit form with operator's data

            if(user)
            {
                this.$edit.find('#usernameField').val(user.name);
                this.$edit.find('#mailField')    .val(user.mail);

                if(user.image) _this.setEditAvatarIcon(this.$edit, user.image);
            }

            // Initialize file uploader

            var dialogs = app.view.dialogs;

            this.$avatarInput.unbind('change').change(function()
            {
                var uploader = new AjaxUploader({

                    url        : config.uploadAvatarPath,
                    input      : _this.$avatarInput[0],
                    filesField : 'avatar',
                    data       : { userId : userId }
                });

                uploader.on('load', function(response)
                {
                    dialogs.message(app.service.i18n.trans('avatar.uploaded'), app.service.i18n.trans('uploaded.success'));

                    // Update the model

                    user.image = JSON.parse(response).image;

                    _this.model.saveOperator(user);

                    // Update the view

                    _this.setEditAvatarIcon(_this.$edit, user.image);
                });

                uploader.upload();

                dialogs.message(app.service.i18n.trans('uploading'), app.service.i18n.trans('uploading.image'));
            });

            this.$list.hide();
            this.$edit.show();

            this.updateDepartments();
        },

        deleteOperator : function(evt)
        {
            var $link = $(evt.currentTarget);

            // Get the operator in question

            var user = app.model.chat.getOperator($link.data('id'));

            // Ask for confirmation

            var _this   = this;
            var buttons = {};

            buttons[app.service.i18n.trans('remove.user').replace('%user%', user.name)] = function()
            {
                // Remove the user

                _this.model.deleteOperator(user);

                $(this).dialog('close');

                // Update the scroller

                $(window).trigger('resize');
            };

            app.view.dialogs.confirm(

                (app.service.i18n.trans('remove.user') + '?').replace('%user%', user.name),
                app.service.i18n.trans('remove.user.q'),

                buttons
            );
        },

        showAdd : function()
        {
            // Store the state

            this.state = 'add';

            // Update tab's header

            this.$edit.find('.customer-chat-tabs-header').html(app.service.i18n.trans('add.new.operator'));

            // Show add mode-specific fields

            this.$edit.find('.edit-only, .pass-only').hide();
            this.$edit.find('.add-only').show();

            // Remove old validation classes

            this.$edit.find('.customer-chat-input-error').removeClass('customer-chat-input-error');

            // Create a new user

            app.model.selectedOperator = { roles : [ 'OPERATOR' ] };

            // Show the edit form with empty data

            this.$edit.find('#usernameField').val('');
            this.$edit.find('#mailField')    .val('');
            this.$edit.find('#passField')    .val('');
            this.$edit.find('#rePassField')  .val('');

            this.$list.hide();
            this.$edit.show();

            this.updateDepartments();
        },

        showChangePassword : function()
        {
            // Store the state

            this.state = 'pass';

            // Update tab's header

            this.$edit.find('.customer-chat-tabs-header').html('Change password');

            // Show add mode-specific fields

            this.$edit.find('.edit-only, .add-only').hide();
            this.$edit.find('.pass-only').show();

            if(this.user.hasRole('ADMIN')) this.$edit.find('.current-pass').hide();

            // Remove old validation classes

            this.$edit.find('.customer-chat-input-error').removeClass('customer-chat-input-error');

            // Show the change password form with empty data

            this.$edit.find('#changePassCurrentField').val('');
            this.$edit.find('#changePassField')       .val('');
            this.$edit.find('#changePassRetypeField') .val('');

            this.$list.hide();
            this.$edit.show();
        },

        selectAvatar : function()
        {
            var _this = this;
            var  view = new app.SelectAvatarView({ model : config.defaultAvatars });

            app.view.dialogs.confirm(app.service.i18n.trans('select.avatar'), view, {

                'OK' : function()
                {
                    var $this = $(this);
                    var image = view.selected;

                    $this.dialog('close');

                    // Update the user's model

                    if(image)
                    {
                        // Update the model

                        var user = app.model.selectedOperator;

                        user.image = image;

                        _this.model.saveOperator(user);

                        // Update the view

                        _this.setEditAvatarIcon(_this.$edit, user.image);
                    }
                }
            });
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

            // Update operator's data

            var user = app.model.selectedOperator;

            if(user)
            {
                if(this.state == 'edit' || this.state == 'add')
                {
                    user.name     = this.$edit.find('#usernameField').val();
                    user.mail     = this.$edit.find('#mailField').val();
                    user.password = this.$edit.find('#passField').val();

                    if(this.departmentsList)
                    {
                        user.departments = this.departmentsList.selected;
                    }
                }
                else if(this.state == 'pass')
                {
                    user.currPassword = this.$edit.find('#changePassCurrentField').val();
                    user.password     = this.$edit.find('#changePassField').val();
                }

                var _this = this;

                app.model.chat.once('operator:saved', function(errors)
                {
                    _this.enable();

                    if(_this.user.hasRole('ADMIN')) _this.showList();
                    else                            _this.showEdit();
                });

                app.model.chat.once('operator:saveError', function(errors)
                {
                    _this.enable();

                    app.view.dialogs.formError(app.service.i18n.trans('form.error'), _.values(errors));
                });

                this.model.saveOperator(user);
                app.model.departments.fetch();
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
                    case 'mail':
                        if($el.val().length == 0 || !_this.mailExp.test($el.val()))
                        {
                            addError($el, app.service.i18n.trans('enter.valid.mail'));
                        }
                    break;

                    case 'notEmpty':
                        if($el.val().length == 0)
                        {
                            addError($el, app.service.i18n.trans('v.cant.be.empty'));
                        }
                    break;

                    case 'password':
                        if($el.val().length < 6)
                        {
                            addError($el, app.service.i18n.trans('pass.need.6.chars'));
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
        },

        updateDepartments : function()
        {
            if(!this.departmentsList) return;

            // Update departments list selection

            if(this.state === 'add')
            {
                this.departmentsList.selectNone();
            }
            else if(this.state === 'edit')
            {
                this.departmentsList.select(app.model.selectedOperator.departments);
            }
        }
    });

})(window.Application, jQuery, _, window.chatConfig);
