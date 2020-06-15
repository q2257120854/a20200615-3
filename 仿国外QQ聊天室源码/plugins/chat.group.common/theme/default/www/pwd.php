<?php


!defined('IN_ONEZ') && exit('Access Denied');
include(dirname(__FILE__).'/ui.init.php');
$G['header'].=onez('ui')->css(onez('login')->url.'/php/images/signin.css');
$G['header'].=onez('ui')->css(onez('admin')->url.'/assets/css/font-awesome.min.css');
onez('smarty')->show('pwd.tpl',$G['template']);
