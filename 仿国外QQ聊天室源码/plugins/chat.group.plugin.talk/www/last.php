<?php

!defined('IN_ONEZ') && exit('Access Denied');
$friends=$G['this']->data()->open('friends')->record("userid='$G[userid]' order by index2 desc");
!$friends && onez('chat.group.common')->error('没有任何交谈记录');
foreach($friends as $k=>$rs){
  $rs['friendid']=$rs['index1'];
  $rs['avatar']=onez('chat.group.common')->avatar($rs['key1']);
  $rs['nickname']=$rs['key1'];
  $rs['summary']=$rs['lastmsg'];
  $rs['new']=$rs['index2']?1:0;
  $friends[$k]=$rs;
}
$G['title']='最近联系人';

include_once(dirname(__FILE__).'/ui.init.php');
$pluginurl=onez('chat.group.common')->url;
if($G['userid']){
  $option=$G['this']->option();
  $server_host=onez('chat.group.common')->server_host($option);
  $server_room=md5($option['onez_sitekey']."\t".$_SERVER['SERVER_ADDR']."\t0");
  $G['footer'].='<div class="apps-message" data-host="'.$server_host.'" data-room="'.$server_room.'" data-userid="'.$G['userid'].'"></div>';
}
$G['footer'].=onez('ui')->js(onez('chat.group.plugin.talk')->url.'/js/common.js?t='.filemtime(onez('chat.group.plugin.talk')->path.'/js/common.js'));
onez('smarty')->assign('friends',$friends);
onez('smarty')->show('last.tpl',$G['template']);