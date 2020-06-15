<?php

!defined('IN_ONEZ') && exit('Access Denied');
class onezphp_animate_css extends onezphp{
  function __construct(){
    
  }
  function init(){
    $this->head();
    return $this;
  }
  function head($return=0){
    $html=array();
    $html[]=onez('ui')->css($this->url.'/css/animate.min.css');
    $html[]=onez('ui')->js($this->url.'/js/jquery.animate.js');
    if($return){
      return implode("\n",$html);
    }else{
      echo implode("\n",$html);
    }
  }
  function css(){
    return $this->url.'/css/animate.min.css';
  }
}