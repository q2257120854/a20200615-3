<?php

!defined('IN_ONEZ') && exit('Access Denied');
if(!$G['userid']){
  onez('chat.group.common')->error('请先登录');
}
$_userid=(int)onez()->gp('userid');
!$_userid && onez('chat.group.common')->error('请选择您要交谈的用户');
$user=$G['this']->data()->open('member')->one("id='$_userid'");
!$user && onez('chat.group.common')->error('用户不存在或已被删除');
