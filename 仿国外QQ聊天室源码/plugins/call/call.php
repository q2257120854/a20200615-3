<?php

!defined('IN_ONEZ') && exit('Access Denied');
#名称：自定义事件响应机制
#标识：call

class onezphp_call extends onezphp{
  var $sysplugins=array();
  var $hide_tokens=array();
  var $call_plugins=array();
  function __construct(){
    
  }
  function hide(){
    foreach(func_get_args() as $v){
      $this->hide_tokens[]=$v;
    }
    return $this;
  }
  function add(){
    foreach(func_get_args() as $ptoken){
      if(!in_array($ptoken,$this->sysplugins)){
        onez($ptoken)->init();
        $this->sysplugins[]=$ptoken;
      }
    }
    return $this;
  }
  function plugins($ptoken=false,$bind_name=false){
    global $G;
    $plugins=array();
    if($ptoken!==false){//是否指定响应插件
      if(is_array($ptoken)){
        foreach($ptoken as $token){
          if(onez()->exists($token)){
            $plugins[]=onez($token);
          }
        }
      }else{
        if(onez()->exists($ptoken)){
          $plugins[]=onez($ptoken);
        }
      }
      if(!$plugins){
        return;
      }
    }
    if(!$plugins){//遍历
      $plugins=onez('onez')->addons();
      !$plugins && $plugins=array();
    }
    $addons_system=$this->get('addons_system');
    if($addons_system && is_array($addons_system)){
      $plugins=array_merge($plugins,$addons_system);
    }
    if($G['this']){
      $plugins[]=$G['this'];
    }
    foreach($this->sysplugins as $ptoken){
      $plugins[]=onez($ptoken);
    }
    if($bind_name===false){
      return $plugins;
    }
    $newplugins=$newplugins_tokens=array();
    if($plugins){
      foreach($plugins as $p){
        if(in_array($p->token,$this->hide_tokens)){
          continue;
        }
        if(method_exists($p,'bind_'.$bind_name)){
          if(in_array($p->token,$newplugins_tokens)){
            continue;
          }
          $newplugins_tokens[]=$p->token;
          $newplugins[]=$p;
        }
      }
    }
    return $newplugins;
  }
  //触发自定义事件(目标需包含方法bind_$name()才可以接收)
  function call($name,$data=false,$ptoken=false){
    global $G;
    if(preg_match('/[^0-9a-zA-Z_]+/i',$name)){
      return;
    }
    $this->set($name,array());
    $plugins=$this->plugins($ptoken,$name);
    if(!$plugins){
      return;
    }
    $this->call_plugins=array();
    foreach($plugins as $p){
      $this->call_plugins[]=$p->token;
      $current=$this->get($name);
      $r=call_user_func_array(array($p, 'bind_'.$name), array($data,$current));
      if($r){
        $current[]=$r;
        $this->set($name,$current);
      }
    }
    return $this->get($name);
  }
  /**
  * 
  * 检查指定的插件是否包含bind属性
  * 
  * @return
  */
  function is_bind($ptoken){
    if(!onez()->exists($ptoken)){
      return 0;
    }
    $methods=get_class_methods(get_class(onez($ptoken)));
    foreach($methods as $m){
      if(substr($m,0,5)=='bind_'){
        return 1;
      }
    }
    return 0;
  }
}