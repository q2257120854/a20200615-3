//==============================================================================
//
//  Login form view
//
//==============================================================================

(function(app, $, config)
{
    app.LoginFormView = Backbone.View.extend({

        events : {

            'click .select-department' : 'showDepartments'
        },

        mailExp : new RegExp('^[-+\\.0-9=a-z_]+@([-0-9a-z]+\\.)+([0-9a-z]){2,}$', 'i'),

        nameValid : false,
        mailValid : false,

        initialize : function()
        {
            // Store models

            this.model = app.model.chat;

            // Initialize sub views

            this.selectDepartment = this.createSelectDepartmentView();

            // Cache view elements

            this.$form           = this.$('.form');
            this.$name           = this.$('#customer-chat-login-name');
            this.$mail           = this.$('#customer-chat-login-mail');
            this.$departmentsBtn = this.$('.select-department');

            this.listenTo(this.selectDepartment, 'updateSelection', this.onSelectDepartment);

            this.$name.on('input change keydown blur', $.proxy(this.validateName, this));
            this.$mail.on('input change keydown blur', $.proxy(this.validateMail, this));

            this.reset();
        },

        reset : function()
        {
            var departments = this.model.departments;

            if(!departments || departments.length === 0)
            {
                this.$departmentsBtn.parent().hide();
            }
            else
            {
                this.$departmentsBtn.parent().show();
            }

            this.$name.val('');
            this.$mail.val('');

            this.$name.removeClass('customer-chat-input-error');
            this.$mail.removeClass('customer-chat-input-error');

            // Conditional visibility

            if(config.ui.askForMail !== 'true')
            {
                this.$mail.hide().val(app.service.i18n.trans('empty.mail.placeholder'));
            }

            this.$mail.hide().val(app.service.i18n.trans('empty.mail.placeholder'));
            this.$name.hide().val('anonymous');
        },

        validateDepartment : function()
        {
            var valid       = false,
                departments = this.model.departments;

            if(!departments || departments.length === 0)
            {
                this.departmentValid = true;

                return;
            }

            if(this.selectDepartment.selected.length > 0)
            {
                valid = true;
            }

            if(valid)
            {
                var department = _.findWhere(app.model.chat.departments, { id : this.selectDepartment.selected[0] });

                this.$departmentsBtn
                    .removeClass('customer-chat-input-error')
                    .addClass('selected')
                    .find('.empty-content')
                        .hide()
                        .end()
                    .find('.content')
                        .html(department.name)
                        .show()
                ;

                this.departmentValid = true;
            }
            else
            {
                this.$departmentsBtn
                    .addClass('customer-chat-input-error')
                    .find('.empty-content')
                        .show()
                        .end()
                    .find('.content')
                        .hide()
                ;

                this.departmentValid = false;
            }
        },

        validateName : function()
        {
            if(this.$name.val().length == 0)
            {
                this.$name.addClass('customer-chat-input-error');

                this.nameValid = false;
            }
            else
            {
                this.$name.removeClass('customer-chat-input-error');

                this.nameValid = true;
            }
        },

        validateMail : function()
        {
            if(this.$mail.val().length == 0 || !this.mailExp.test(this.$mail.val()))
            {
                this.$mail.addClass('customer-chat-input-error');

                this.mailValid = false;
            }
            else
            {
                this.$mail.removeClass('customer-chat-input-error');

                this.mailValid = true;
            }
        },

        isValid : function()
        {
            this.validateDepartment();
            this.validateName();
            this.validateMail();

            return this.departmentValid && this.nameValid && this.mailValid;
        },

        showDepartments : function()
        {
            this.$el.addClass('departments-view');
        },

        hideDepartments : function()
        {
            this.$el.removeClass('departments-view');
        },

        onSelectDepartment : function()
        {
            this.validateDepartment();
            this.hideDepartments();
        },

        createSelectDepartmentView : function()
        {
            return new app.SelectListView({

                el           : this.$('.departments .list'),
                model        : this.model,
                single       : true,
                iconActive   : 'check',
                iconInactive : 'circle',
                renderEvent  : 'departments:change',

                dataProvider : function()
                {
                    var departments = app.model.chat.departments;

                    if(departments)
                    {
                        departments = _.groupBy(departments, 'status');

                        var online  = departments.online  || [],
                            offline = departments.offline || [];

                        return online.concat(offline);
                    }

                    return [];
                },

                getLabel : function(department)
                {
                    return '<div><span>' + department.name + '</span>' + (department.description ? ('<em>' + department.description + '</em></div>') : '');
                },

                styleItem : function($entry, $icon, $selected)
                {
                    if($entry.data('entry').status === 'offline')
                    {
                        $entry.removeClass('online').addClass('offline disabled');
                    }
                    else
                    {
                        $entry.removeClass('offline disabled').addClass('online');
                    }
                }
            });
        },

        getHeight : function()
        {
            return this.$form.height();
        }
    });

})(window.Application, jQuery, window.chatConfig);
