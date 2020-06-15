<?php

!defined('IN_ONEZ') && exit('Access Denied');
#名称：网站模板
#标识：templates

class onezphp_templates extends onezphp{
  var $name='';
  function __construct(){
    
  }
  function options($ptoken=false){
    $options=array();
    if($ptoken){
      $options[$ptoken]='默认模板';
    }
    $r=onez('call')->call('template');
    if($r){
      foreach($r as $v){
        if($v && $v['key'] && $v['value']){
          $options[$v['key']]=$v['value'];
        }
      }
    }
    return $options;
  }
  function bind_template(){
    if(!$this->name){
      return;
    }
    return array('key'=>$this->token,$this->name);
  }
}