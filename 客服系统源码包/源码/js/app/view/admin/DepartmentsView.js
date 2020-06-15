//==============================================================================
//
//  Departments view
//
//==============================================================================

(function(app, $, _, config)
{
    app.DepartmentsView = Backbone.View.extend({

        events : {

            'click #customer-chat-departments-back'   : 'showList',
            'click #customer-chat-departments-add'    : 'showAdd',
            'click .customer-chat-departments-edit'   : 'showEdit',
            'click .customer-chat-departments-remove' : 'deleteDepartment',
            'click #customer-chat-departments-save'   : 'save'
        },

        initialize : function()
        {
            // Initialize models

            this.model = app.model.departments;
            this.user  = app.model.user;
            this.chat  = app.model.chat;

            this.chat.loadOperators();

            this.$el.html(app.template.departments());

            // Cache view elements

            this.$list        = this.$('#customer-chat-departments-list');
            this.$departments = this.$list.find('.customer-chat-content-departments-wrapper');
            this.$edit        = this.$('#customer-chat-departments-edit');
            this.$save        = this.$('#customer-chat-departments-save');
            this.$back        = this.$('#customer-chat-departments-back');
            this.$editInputs  = this.$edit.find('input');
            this.$loading     = this.$('.customer-chat-content-loading-icon').hide();

            this.$editInputs.blur($.proxy(this.validateEdit, this));

            // Create sub views

            this.operatorsList = new app.SelectListView({

                el           : this.$('.select-list'),
                model        : this.chat,
                renderEvent  : 'change:operators',
                noScroll     : true,
                dataProvider : function()
                {
                    return app.model.chat.getOperators();
                },
                getLabel : function(user)
                {
                    return '<b>' + user.name + '</b> (<i>' + user.mail + '</i>)';
                }
            });

            // Handle rendering

            this.model.on('change:departments', this.render, this);

            this.showList();
            this.render();
        },

        render : function()
        {
            // Display all of the departments

            this.$departments.html('').append(_.map(this.model.get('departments'), function(item)
            {
                return app.template.departmentItem(item);
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

            // Get the department

            var $link = evt ? $(evt.currentTarget) : null;

            var departmentId, department;

            // Get the edited department

            departmentId = $link ? $link.data('id') : id;
            department   = app.model.selectedDepartment = this.model.getById(departmentId);

            // Show the edit form with department's data

            if(department)
            {
                this.$edit.find('#departmentNameField').val(department.name);
                this.$edit.find('#departmentDescriptionField').val(department.description);
            }

            this.$list.hide();
            this.$edit.show();

            this.updateOperators();
        },

        deleteDepartment : function(evt)
        {
            var $link = $(evt.currentTarget);

            // Get the department in question

            var department = this.model.getById($link.data('id'));

            // Ask for confirmation

            var _this   = this;
            var buttons = {};

            buttons[app.service.i18n.trans('remove.dep').replace('%department%', department.name)] = function()
            {
                // Remove the department

                _this.model.deleteDepartment(department.id);

                $(this).dialog('close');

                // Update the scroller

                $(window).trigger('resize');
            };

            app.view.dialogs.confirm(

                (app.service.i18n.trans('remove.dep') + '?').replace('%department%', department.name),
                app.service.i18n.trans('remove.dep.q'),

                buttons
            );
        },

        showAdd : function()
        {
            // Store the state

            this.state = 'add';

            // Update tab's header

            this.$edit.find('.customer-chat-tabs-header').html(app.service.i18n.trans('add.new.dep'));

            // Show add mode-specific fields

            this.$edit.find('.edit-only, .pass-only').hide();
            this.$edit.find('.add-only').show();

            // Remove old validation classes

            this.$edit.find('.customer-chat-input-error').removeClass('customer-chat-input-error');

            // Create a new user

            app.model.selectedDepartment = {};

            // Show the edit form with empty data

            this.$edit.find('#departmentNameField').val('');
            this.$edit.find('#departmentDescriptionField').val('');

            this.$list.hide();
            this.$edit.show();

            this.updateOperators();
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

            // Update department's data

            var department = app.model.selectedDepartment;

            if(department)
            {
                department.name        = this.$edit.find('#departmentNameField').val();
                department.description = this.$edit.find('#departmentDescriptionField').val();
                department.operators   = this.operatorsList.selected;

                var _this = this;

                this.model.once('department:saved', function(errors)
                {
                    _this.enable();

                    _this.showList();
                });

                this.model.once('department:saveError', function(errors)
                {
                    _this.enable();

                    app.view.dialogs.formError(app.service.i18n.trans('form.error'), _.values(errors));
                });

                this.model.saveDepartment(department);
                this.chat.loadOperators();
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
        },

        updateOperators : function()
        {
            // Update operators list selection

            if(this.state === 'add')
            {
                this.operatorsList.selectNone();
            }
            else if(this.state === 'edit')
            {
                this.operatorsList.select(app.model.selectedDepartment.operators);
            }
        }
    });

})(window.Application, jQuery, _, window.chatConfig);
