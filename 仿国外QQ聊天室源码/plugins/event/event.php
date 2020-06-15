<?php

!defined('IN_ONEZ') && exit('Access Denied');
class onezphp_event extends onezphp{
  var $eventName;
  var $event;
  function __construct(){
  }
  function load($token, $id = 0){//避免与主类冲突
    $eventName=$token;
    $this->event=onez('event_'.$eventName)->init($eventName);
    $this->eventName=$this->event->eventName;
    return $this;
  }
  function args(){
    if(!$this->eventName){
      return;
    }
    $args=func_get_args();
    $s=array();
    foreach($args as $v){
      if($v[0]=='@'){
        $s[]=substr($v,1);
        continue;
      }
      $s[]=var_export($v,1);
    }
    return $this->eventName.'('.implode(',',$s).')';
  }
  function click(){
    return call_user_func_array(array($this, 'args'), func_get_args());
  }
}