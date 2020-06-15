<?php

!defined('IN_ONEZ') && exit('Access Denied');
include_once(dirname(__FILE__).'/init.php');

$action=onez()->gp('action');
global $A;
$A=array('ver'=>'1.0');
if($action=='send'){
  $style=onez()->gp('style');
  $message=onez()->gp('message');
  #发送方
  $msg=array(
    'method'=>'send',
    'userid'=>$G['userid'],
    'index1'=>$_userid,
    'index2'=>1,//已读
    'upid'=>$groupid,
    'key1'=>$userid,
    'key2'=>$G['grade'],
    'nickname'=>$G['nickname'],
    'userid'=>$G['userid'],
    'style'=>$style,
    'message'=>$message,
  );
  $msgid1=$G['this']->data()->open('message')->insert($msg);
  
  #好友
  $friend=$G['this']->data()->open('friends')->one("userid='$G[userid]' and index1='$_userid'");
  if(!$friend){
    $G['this']->data()->open('friends')->insert(array(
      'userid'=>$G['userid'],
      'index1'=>$_userid,
      'lastmsg'=>$message,
      'key1'=>$user['nickname'],
    ));
  }else{
    $G['this']->data()->open('friends')->update(array(
      'lastmsg'=>$message,
      'key1'=>$user['nickname'],
    ),"id='$friend[id]'");
  }
  
  #接收方
  $msg=array(
    'method'=>'recv',
    'userid'=>$_userid,
    'index1'=>$G['userid'],
    'index2'=>0,//未读
    'upid'=>$groupid,
    'key1'=>$userid,
    'key2'=>$G['grade'],
    'nickname'=>$G['nickname'],
    'userid'=>$G['userid'],
    'style'=>$style,
    'message'=>$message,
  );
  $msgid2=$G['this']->data()->open('message')->insert($msg);
  #好友
  $friend=$G['this']->data()->open('friends')->one("userid='$_userid' and index1='$G[userid]'");
  if(!$friend){
    $G['this']->data()->open('friends')->insert(array(
      'userid'=>$_userid,
      'index1'=>$G['userid'],
      'index2'=>1,
      'lastmsg'=>$message,
      'key1'=>$G['user']['nickname'],
    ));
  }else{
    $G['this']->data()->open('friends')->update(array(
      'lastmsg'=>$message,
      'index2'=>$friend['index2']+1,
      'key1'=>$G['user']['nickname'],
    ),"id='$friend[id]'");
  }
  
  $A['print']=array(
    'type'=>'me',
    'msgid'=>$msgid1,
    'nickname'=>$G['nickname'],
    'style'=>$style,
    'message'=>$message,
    'msgtype'=>'talk',
    'time'=>date('H:i:s'),
  );
  $A['msg']=array(
    'type'=>'getmsg',
    'msgtype'=>'talk',
    'id'=>$msgid2,
    'nickname'=>$G['nickname'],
    'id_from'=>(string)$G['userid'],
    'id_to'=>(string)$_userid,
    'userid'=>$G['userid'],
    'style'=>$style,
    'message'=>$message,
    'time'=>date('H:i:s'),
  );
  onez()->output($A);
}elseif($action=='history'){
  $T=$G['this']->data()->open('message')->page("upid='0' and userid='$G[userid]' order by id desc");
  $msg=array();
  $today=date('Y-m-d');
  foreach($T[0] as $rs){
    if(!$rs['nickname']){
      continue;
    }
    $item=array(
      'type'=>'user',
      'msgid'=>$rs['id'],
      'userid'=>$rs['key1'],
      'nickname'=>$rs['nickname'],
      'style'=>$rs['style'],
      'message'=>$rs['message'],
      'time'=>date('Y-m-d H:i:s',$rs['addtime']),
    );
    $item['avatar']=onez('chat.group.common')->avatar($rs['key1']);
    if($rs['method']=='send'){
      $item['type']='me';
    }
    $item['time']=str_replace($today.' ','',$item['time']);
    $msg[]=$item;
  }
  $A['history']=$msg;
  onez()->output($A);
}

include_once(dirname(__FILE__).'/ui.init.php');
$G['title']=$user['nickname'];
$baseurl=onez('chat.group.common')->url.'/theme/default/www';
$basepath=onez('chat.group.common')->path.'/theme/default/www';

$G['header'].=onez('ui')->css($baseurl.'/images/group.css?t='.filemtime($basepath.'/images/group.css'));
$G['header'].=onez('ui')->js($baseurl.'/js/socket.io/2.0.3/socket.io.js');
$G['header'].=onez('ui')->js($baseurl.'/js/jquery.colorpicker.js');
onez('smarty')->assign('width_right',200);

$G['header'].=onez('ui')->css($baseurl.'/images/group.css?t='.filemtime($basepath.'/images/group.css'));
$G['header'].=onez('ui')->js(onez('chat.group.plugin.talk')->url.'/js/common.js?t='.filemtime(onez('chat.group.plugin.talk')->path.'/js/common.js'));
$G['header'].=onez('ui')->js(onez('chat.group.plugin.talk')->url.'/js/dialog.js?t='.filemtime(onez('chat.group.plugin.talk')->path.'/js/dialog.js'));
$G['header'].=onez('ui')->css(onez('chat.group.plugin.talk')->url.'/css/common.css?t='.filemtime(onez('chat.group.plugin.talk')->path.'/css/common.css'));
$G['header'].=onez('ui')->css(onez('chat.group.plugin.talk')->url.'/css/dialog.css?t='.filemtime(onez('chat.group.plugin.talk')->path.'/css/dialog.css'));


$server_host=onez('chat.group.common')->server_host($option);
$server_room=md5($option['onez_sitekey']."\t".$_SERVER['SERVER_ADDR']."\t0");

onez('event')->load('viewpic');
$pluginurl=onez('chat.group.common')->url;
$G['footer-js'].=<<<ONEZ
var onez=onez||{};
var talk=new oneztalk('.chat',{
  id_friend:'$_userid',
  id_me:'$G[userid]',
  pluginurl:'$pluginurl'
});
talk.connect('$server_host','$server_room','{$G[userid]}');
ONEZ;
onez('smarty')->show('dialog.tpl',$G['template']);