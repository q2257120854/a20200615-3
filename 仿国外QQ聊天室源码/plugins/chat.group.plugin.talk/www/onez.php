<?php

!defined('IN_ONEZ') && exit('Access Denied');

$action=onez()->gp('action');
global $A;
$A=array('ver'=>'1.0');
if($action=='getmsg'){
  $msgid=(int)onez()->gp('msgid');
  $T=$G['this']->data()->open('message')->one("id='$msgid'");
  if($T && $T['userid']==$G['userid'] && $T['index2']==0){
    $A['newmsg']=array(
      'uid'=>$T['index1'],
      'uname'=>$T['nickname'],
      'avatar'=>onez('chat.group.common')->avatar($T['index1']),
    );
  }
  onez()->output($A);
}elseif($action=='read'){
  $msgid=(int)onez()->gp('msgid');
  $T=$G['this']->data()->open('message')->one("id='$msgid'");
  if($T && $T['userid']==$G['userid'] && $T['index2']==0){
    $item=array();
    $item['index2']='1';
    $G['this']->data()->open('message')->update($item,"id='$msgid'");
    
    $friend=$G['this']->data()->open('friends')->one("userid='$G[userid]' and index1='$T[index1]'");
    if($friend){
      $G['this']->data()->open('friends')->update(array(
        'index2'=>0,
      ),"id='$friend[id]'");
    }
  }
  onez()->output($A);
}elseif($action=='newmsg'){
  $T=$G['this']->data()->open('friends')->one("userid='$G[userid]' and index2>0");
  if($T){
    $A['newmsg']=array(
      'title'=>$T['lastmsg'],
    );
  }
  onez()->output($A);
}