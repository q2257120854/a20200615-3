//==============================================================================
//
//  Departments
//
//==============================================================================

(function(app, $, config, _)
{
    app.DepartmentsModel = Backbone.Model.extend({

        defaults : {

            departments : []
        },

        initialize : function()
        {
            this.user = app.model.user;

            // Read settings

            this.fetch();
        },

        fetch : function()
        {
            var _this = this;

            $.get(config.listDepartmentsPath, function(data)
            {
                if(data.success)
                {
                    for(var i = data.results.length - 1; i >= 0; i--)
                    {
                        var item = data.results[i];
                        
                        if(!item.operators)
                        {
                            item.operators = [];
                        }
                    }

                    // Store the data

                    _this.set('departments', data.results);
                }
            });
        },

        saveDepartment : function(department)
        {
            // Notify about the started request

            this.trigger('request');

            var _this = this;

            $.post(config.updateDepartmentPath, department, function(data)
            {
                // Notify about the finished request

                if(data.success)
                {
                    // Save department in the local cache

                    if(data.id)
                    {
                        // store ID generated on server-side (only on create action)

                        department.id = data.id;

                        if(!_this.getById(data.id))
                        {
                            _this.get('departments').push(department);
                        }
                    }

                    // Notify success

                    _this.trigger('sync department:saved change:departments change', department);
                }
                else
                {
                    // Notify failure

                    _this.trigger('department:saveError', data.errors);
                }
            });
        },

        getById : function(id)
        {
            var items = this.get('departments');

            for(var i = 0; i < items.length; i++)
            {
                if(items[i].id === id) return items[i];
            }

            return null;
        },

        deleteDepartment : function(id)
        {
            // Remove department from the local cache

            var items = this.get('departments');

            for(var i = 0; i < items.length; i++)
            {
                if(items[i].id === id)
                {
                    items.splice(i, 1);
                    break;
                }
            }

            // Remove department from the server

            var _this = this;

            $.post(config.deleteDepartmentPath, { id : id }, function(data)
            {
                if(data.success)
                {
                    // Notify success

                    _this.trigger('change:departments department:deleted');
                }
                else
                {
                    // Notify error

                    _this.trigger('department:deleteError');
                }
            })
        }
    });

})(window.Application, jQuery, window.chatConfig, _);
