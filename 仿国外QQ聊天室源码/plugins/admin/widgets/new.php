<?php

!defined('IN_ONEZ') && exit('Access Denied');
class onezphp_admin_widgets_new extends onezphp_admin_widgets{
  var $attrs=array();
  function __construct(){
    
  }
  function attr($key,$value){
    $this->attrs[$key]=$value;
    return $this;
  }
  function code(){
    $name=$this->get('tag');
    if(!$name){
      $name='div';
    }
    $A='<'.$name;
    foreach($this->attrs as $k=>$v){
      $A.=' '.$k.'="'.$v.'"';
    }
    $A.='>';
    $B='</'.$name.'>';
    if($this->code){
      return $A.$this->code.$B;
    }else{
      return $A.$this->html.$B;
    }
  }
}