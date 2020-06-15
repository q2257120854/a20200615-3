//==============================================================================
//
//  jquery.extramouse - jQuery plugin adding extra mouse management methods
//  
//  by mirrormx@o2.pl
//
//==============================================================================

;(function($)
{
    // Properties & methods
    
    $.mouseX = 0;
    $.mouseY = 0;
    
    $(document).mousemove(function(evt)
    {
        $.mouseX = evt.pageX;
        $.mouseY = evt.pageY;
    });
    
    $.fn.mouseX = function()
    {
        return $.mouseX - this.offset().left;
    };
    
    $.fn.mouseY = function()
    {
        return $.mouseY - this.offset().top;
    };
    
    $.fn.pointInBounds = function(pageX, pageY)
    {
        var bounds = this.offset();
        
        bounds.right  = bounds.left + this.outerWidth();
        bounds.bottom = bounds.top  + this.outerHeight();
        
        return(
        
            bounds.left <= pageX && pageX <= bounds.right &&
            bounds.top  <= pageY && pageY <= bounds.bottom
        );
    };
    
    $.fn.underMouse = function()
    {
        return this.pointInBounds($.mouseX, $.mouseY);
    };
    
    // Events
    
    $.event.special.xclick = {
        
        add : function()
        {
            var _this = this;
            
            // Listen for global mouse click
            
            $(document).bind('click.xclick', function()
            {
                // Check if cursor is over the element
                
                if($(_this).underMouse())
                {
                    // Fire the event
                    
                    $(_this).triggerHandler('xclick');
                }
            });
        },
        
        remove : function()
        {
            // Remove global mouse click handler
            
            $(document).unbind('click.xclick');
        }
    };
    
    $.event.special.xmousemove = {
        
        add : function()
        {
            var _this = this;
            
            // Listen for global mouse move
            
            $(document).bind('mousemove.xmousemove', function()
            {
                // Check if cursor is over the element
                
                if($(_this).underMouse())
                {
                    // Fire the event
                    
                    $(_this).triggerHandler('xmousemove');
                }
            });
        },
        
        remove : function()
        {
            // Remove global mouse move handler
            
            $(document).unbind('mousemove.xmousemove');
        }
    };
    
    $.event.special.xmouseover = {
        
        add : function()
        {
            var _this = this;
            var over  = false;
            
            // Listen for global mouse move
            
            $(document).bind('mousemove.xmouseover', function()
            {
                // Check if element is under cursor
                
                if($(_this).underMouse())
                {
                    if(!over)
                    {
                        // Store the state
                        
                        over = true;
                        
                        // Fire the event
                        
                        $(_this).triggerHandler('xmouseover');
                    }
                }
                else
                {
                    // Store the state
                    
                    over = false;
                }
            });
        },
        
        remove : function()
        {
            // Remove global mouse move handler
            
            $(document).unbind('mousemove.xmouseover');
        }
    };
    
    $.event.special.xmouseout = {
        
        add : function()
        {
            var _this = this;
            var over  = false;
            
            // Listen for global mouse move
            
            $(document).bind('mousemove.xmouseout', function()
            {
                // Check if cursor has left the element
                
                if(!$(_this).underMouse())
                {
                    if(over)
                    {
                        // Store the state
                        
                        over = false;
                        
                        // Fire the event
                        
                        $(_this).triggerHandler('xmouseout');
                    }
                }
                else
                {
                    // Store the state
                    
                    over = true;
                }
            });
        },
        
        remove : function()
        {
            // Remove global mouse move handler
            
            $(document).unbind('mousemove.xmouseout');
        }
    };
    
})(jQuery);