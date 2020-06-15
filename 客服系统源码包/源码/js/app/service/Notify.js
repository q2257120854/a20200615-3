//==============================================================================
//
//  Notifications
//
//==============================================================================

(function(app, config, notify)
{
    app.Notify = function()
    {
        // Create a dummy interface if notifications are not supported

        if(!notify.isSupported)
        {
            this.requestPermission = this.create = this.closeAll = function() {};

            return;
        }

        //----------------------------------------------------------------------

        var visible = []; // visible notifications

        // Requests permission to use notifications

        this.requestPermission = function(callback)
        {
            switch(notify.permissionLevel())
            {
                case notify.PERMISSION_DENIED:
                    // Do nothing
                break;

                case notify.PERMISSION_GRANTED:
                    // Do nothing
                break;

                case notify.PERMISSION_DEFAULT:
                default:
                    notify.requestPermission();
                break;
            }
        };

        // Creates and shows a notification

        this.create = function(title, options)
        {
            if(notify.permissionLevel() !== notify.PERMISSION_GRANTED) return;

            // Configure

            options.icon = options.icon || config.rootPath + 'img/fav.ico';
            options.tag  = options.tag  || 'global';

            closeTagged(options.tag);

            // Type casting

            title        = '' + title;
            options.body = '' + options.body;

            // Create notification

            var n = notify.createNotification(title, options);

            visible.push(n);

            // Handle events

            var nativeN = n.notification;

            nativeN.onclose = function()
            {
                var i = visible.indexOf(n);

                if(i !== -1) visible.splice(i, 1);
            };

            nativeN.onclick = function()
            {
                nativeN.onclose();

                if(options.onClick) options.onClick();
            };

            return n;
        };

        // Closes all available notifications

        this.closeAll = function()
        {
            for(var i = visible.length - 1; i >= 0; i--)
            {
                visible[i].close();
            }

            visible = [];
        };

        // Private methods

        function closeTagged(tag)
        {
            for(var i = visible.length - 1; i >= 0; i--)
            {
                var n = visible[i];

                n.close();

                visible.splice(i, 1);
            }
        }

        // Handle closing after page's closed

        var _this = this;

        window.onunload = window.onbeforeunload = function()
        {
            _this.closeAll();
        };
    };

})(window.Application, window.chatConfig, window.notify);
