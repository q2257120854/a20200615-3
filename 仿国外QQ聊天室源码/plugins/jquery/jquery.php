<?php


!defined('IN_ONEZ') && exit('Access Denied');
class onezphp_jquery extends onezphp{
  function __construct(){
    
  }
  function head($return=0){
    $html.='<script src="'.$this->url.'/js/jquery-1.9.1.min.js"></script>';
    if($return){
      return $html;
    }else{
      echo $html;
    }
  }
  function js(){
    return $this->url.'/js/jquery-1.9.1.min.js';
  }
  function file(){
    return $this->path.'/js/jquery-1.9.1.min.js';
  }
}