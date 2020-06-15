<?php

!defined('IN_ONEZ') && exit('Access Denied');
$goto=onez()->gp('goto');
!$goto && $goto=onez()->href('/index.php');
$mod=onez()->gp('mod');
$action=onez()->gp('action');
if($action=='chklogin'){
  $username=onez()->gp('username');
  $password=onez()->gp('password');
  $password_md5=md5($password);
  $T=$G['this']->data()->open('member')->one("`username`='$username' and `password`='$password_md5'");
  !$T && onez()->error('账号或密码不正确');
  onez('cache')->cookie('chat_group',"$T[id]\t$T[username]",0);
  onez()->ok('登录成功',$goto);
}
include(dirname(__FILE__).'/ui.init.php');
$G['header'].=onez('ui')->css(onez('login')->url.'/php/images/signin.css');
$G['header'].=onez('ui')->css(onez('admin')->url.'/assets/css/font-awesome.min.css');
$url=array(
  'index'=>onez()->href('/index.php'),
  'register'=>onez()->href('/register.php?goto='.urlencode($goto)),
);
onez('call')->call('third_login');
ob_clean();
onez('smarty')->assign('url',$url);
onez('smarty')->show('login.tpl',$G['template']);