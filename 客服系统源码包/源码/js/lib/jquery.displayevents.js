//--------------------------------------------------------------------------
//
//  jQuery plugin dispatching show/hide events on DOM elements
//  
//  by mirrormx@o2.pl
//
//--------------------------------------------------------------------------

;(function($)
{
    // Override the show & hide methods
    
    var show = $.fn.show;
    var hide = $.fn.hide;
    
    $.fn.show = function()
    {
        // Call the base version
        
        var result = show.apply(this, arguments);
        
        // Dispatch the event
        
        propagateDown(this, 'show');
        
        return result;
    };
    
    $.fn.hide = function()
    {
        // Call the base version
        
        var result = hide.apply(this, arguments);
        
        // Dispatch the event
        
        propagateDown(this, 'hide');
        
        return result;
    };
    
    function propagateDown(obj, evt)
    {
        obj.triggerHandler(evt);
        
        obj.children().each(function()
        {
            propagateDown($(this), evt);
        });
    }

})(jQuery);