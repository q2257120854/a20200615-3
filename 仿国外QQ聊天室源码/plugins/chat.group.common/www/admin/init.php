<?php


!defined('IN_ONEZ') && exit('Access Denied');
onez('admin')->theme($G['this']->option('theme_admin','skin-red'));#自定义皮肤

$login=onez('login')->init('chat_group',0);
if($login['id']){
  $G['user']=$G['this']->data()->open('member')->one("id='$login[id]'");
  if(!$G['user']){
    onez('cache')->cookie('chat_group','del',-1);
    exit('登录超时');
  }
}
if($G['user']['grade']!='admin'){
  onez('cache')->cookie('chat_group','del',-1);
  onez()->location(onez()->homepage());
}
$G['userid']=$G['user']['id'];

$G['nickname']=$G['user']['nickname'];
$G['avatar']=$G['this']->avatar($G['userid']);
$G['gradename']='超级管理平台';
onez('debug')->showerror();
$Menu=array();
onez('admin.menu')->init('admin',$Menu);
onez('admin')->menu=$Menu;
onez('onez')->init('admin');
