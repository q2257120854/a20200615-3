<?php

!defined('IN_ONEZ') && exit('Access Denied');
class onezphp_admin_widgets_tip extends onezphp_admin_widgets{
  var $title='系统提示';
  var $content='';
  function __construct(){
    
  }
  function code(){
    $this->html.='<div class="callout callout-info">
          <h4>'.$this->title.'</h4>
          <p>'.$this->content.'</p>
        </div>';
    return $this->html;
  }
}