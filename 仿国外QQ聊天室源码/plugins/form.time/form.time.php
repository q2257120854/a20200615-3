<?php


!defined('IN_ONEZ') && exit('Access Denied');
#名称：时间选择组件
#标识：form.time

class onezphp_form_time extends onezphp{
  function __construct(){
    
  }
  function form_code($arr){
    global $G;
    if($this->times(1)){
      $html.=onez('ui')->js($this->url.'/datepicker/jedate.js');
      $G['footer-js'].=<<<ONEZ
Date.prototype.format = function(format) {
       var date = {
              "M+": this.getMonth() + 1,
              "d+": this.getDate(),
              "h+": this.getHours(),
              "m+": this.getMinutes(),
              "s+": this.getSeconds(),
              "q+": Math.floor((this.getMonth() + 3) / 3),
              "S+": this.getMilliseconds()
       };
       if (/(y+)/i.test(format)) {
              format = format.replace(RegExp.$1, (this.getFullYear() + '').substr(4 - RegExp.$1.length));
       }
       for (var k in date) {
              if (new RegExp("(" + k + ")").test(format)) {
                     format = format.replace(RegExp.$1, RegExp.$1.length == 1
                            ? date[k] : ("00" + date[k]).substr(("" + date[k]).length));
              }
       }
       return format;
}
$(function(){
  $('.onez-form-time').each(function(){
    var value=$(this).val();
    if(value.length>0){
      var newDate = new Date();
      newDate.setTime(parseInt(value) * 1000);
      $(this).val(newDate.format('yyyy-MM-dd hh:mm:ss'));
    }
    var format=$(this).attr('data-format');
    var readonly=$(this).attr('readonly');
    if(typeof readonly!='undefined'){
      return true;
    }
    if(typeof format=='undefined'){
      format='YYYY-MM-DD hh:mm:ss';
    }
    jeDate({
  		dateCell:'#'+$(this).attr('id'),
  		format:format,
  		//isinitVal:true,
  		isTime:true, //isClear:false,
  		//minDate:"2014-09-19 00:00:00",
  		okfun:function(val){
        
      }
  	});
  });
});
ONEZ;
    }
    
    $formkz=onez('bootstrap_form_kz')->init($arr);
    
    $formkz->input->attr('id','input-'.$arr['key'])
                                        ->attr('name',$arr['key'])
                                        ->attr('type','text')
                                        ->attr('class','form-control onez-form-time')
                                        ->attr('placeholder',$hint)
                                        ->attr('style','margin-top:5px;')
                                        ->attr('value',$arr['value'])
                                        ->attr('data-format',$arr['format'])
                                      ;
    
    $html.=$formkz->code();
    
    
    return $html;
  }
  function form_save(&$value,$arr){
    $value=strtotime($value);
  }
}