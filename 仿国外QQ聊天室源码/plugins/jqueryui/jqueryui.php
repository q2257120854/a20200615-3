<?php


!defined('IN_ONEZ') && exit('Access Denied');
class onezphp_jqueryui extends onezphp{
  function __construct(){
    
  }
  function head($return=0){
    $html.='<script src="'.$this->url.'/js/jquery-ui.min.js"></script>';
    if($return){
      return $html;
    }else{
      echo $html;
    }
  }
  function js(){
    return $this->url.'/js/jquery-ui.min.js';
  }
}