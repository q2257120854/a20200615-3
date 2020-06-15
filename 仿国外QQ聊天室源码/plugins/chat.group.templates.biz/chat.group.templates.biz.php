<?php

!defined('IN_ONEZ') && exit('Access Denied');
#名称：商务模板
#标识：chat.group.templates.biz

class onezphp_chat_group_templates_biz extends onezphp{
  function __construct(){
    
  }
  function bind_templates_name(){
    return array($this->token,'商务模板');
  }
}