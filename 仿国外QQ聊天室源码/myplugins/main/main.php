<?php
!defined('IN_ONEZ') && exit('Access Denied');
#名称：基础站点
#标识：main

onez('www.product');
class onezphp_main extends onezphp_www_product{

  function __construct(){
  }
  function init(){
    global $G;
    $G['this']=$this;
    $G['SITE_INIT_NONE']=1;
    onez('call')->add('chat.group.free','chat.group.plugin.talk');
    $G['SITE_INIT_NONE']=0;
    onez('chat.group.free')->init();
  }
}