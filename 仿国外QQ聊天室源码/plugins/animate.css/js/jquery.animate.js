(function($){
  $.fn.ani=function(name,once){
    if(typeof once=='undefined'){
      once=true;
    }
    if(once){
      var _this_=$(this).addClass('animated '+name);
      setTimeout(function(){
        _this_.removeClass('animated '+name);
      }, 1000);
    }else{
      $(this).addClass('animated infinite '+name);
    }
    return $(this);
  };
})(jQuery);