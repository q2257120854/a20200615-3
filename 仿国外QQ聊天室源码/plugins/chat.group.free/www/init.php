<?php


!defined('IN_ONEZ') && exit('Access Denied');
$login=onez('login')->init('chat_group',0);
if($login['id']){
  $G['user']=$G['this']->data()->open('member')->one("id='$login[id]'");
  if(!$G['user']){
    onez('cache')->cookie('chat_group','del',-1);
    exit('登录超时');
  }
  $G['userid']=$G['user']['id'];
}
$G['avatar']=$G['this']->avatar($G['userid']);
$G['nickname']=$G['user']['nickname'];
$G['gradename']='超级管理员';
$G['href_logout']='../'.onez()->href('/exit.php');
