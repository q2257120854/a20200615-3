<?php

!defined('IN_ONEZ') && exit('Access Denied');
!$group && onez('chat.group.common')->error('您要加入的群不存在');
$guser['key1']=='tickout' && onez('chat.group.common')->error('很抱歉，您无权进入本群。理由：'.($guser['tickout_because']?$guser['tickout_because']:'无'));
$G['grade']=='guest' && !$group['index3'] && onez()->location(onez()->href('/login.php?groupid='.$groupid.'&goto='.urlencode(onez()->href('/group.php?groupid='.$groupid))));

onez('debug')->showerror();
$action=onez()->gp('action');
if($action=='chklogin'){
  onez()->ok('加入成功');
}

$ip=onez()->ip();
if($guser['ip']!=$ip){
  $G['this']->data()->open('group_users')->update(array(
    'ip'=>$ip,
  ),"id='$guser[id]'");
}


if(!empty($_REQUEST['online'])){
  $online=onez()->gp('online');
  $G['this']->data()->open('group')->update(array(
    'online'=>$online,
    'index4'=>$online,
  ),"id='$groupid'");
}
global $A;
$A=array('ver'=>'1.0');
if($action=='send'){
  $style=onez()->gp('style');
  $message=onez()->gp('message');
  if($G['grade']=='guest'){
    $A['print']=array(
      'msgid'=>time(),
      'type'=>'tip',
      'tip'=>'游客不能发言',
    );
  }elseif($guser['key1']!='ok'){
    $A['print']=array(
      'msgid'=>time(),
      'classname'=>'text-red',
      'type'=>'tip',
      'tip'=>'您已被系统禁言。',
    );
  }elseif(!$G['ismaster'] && $G['newuser_limit_time']>0){
    $A['print']=array(
      'msgid'=>time(),
      'classname'=>'text-red',
      'type'=>'tip',
      'tip'=>'您现在不可以发言',
    );
  }else{
    $error=0;
    if(!$G['ismaster'] && $option['talk_busy_time']>0){
      $last=$G['this']->data()->open('message')->one("key1='$userid' order by id desc");
      if(time()-$last['addtime']<$option['talk_busy_time']){
        $A['print']=array(
          'msgid'=>time(),
          'classname'=>'text-red',
          'type'=>'tip',
          'tip'=>'两次发言间隔不能低于'.$option['talk_busy_time'].'秒',
        );
        $error++;
      }
    }
    if(!$error){
      $msg=array(
        'upid'=>$groupid,
        'key1'=>$userid,
        'key2'=>$G['grade'],
        'nickname'=>$G['nickname'],
        'userid'=>$G['userid'],
        'style'=>$style,
        'message'=>$message,
      );
      $msgid=$G['this']->data()->open('message')->insert($msg);
      $A['print']=array(
        'type'=>'me',
        'msgid'=>$msgid,
        'nickname'=>$G['nickname'],
        'style'=>$style,
        'message'=>$message,
        'time'=>date('H:i:s'),
      );
      $A['msg']=array(
        'type'=>'getmsg',
        'id'=>$msgid,
        'nickname'=>$G['nickname'],
        'userid'=>$userid,
        'style'=>$style,
        'message'=>$message,
        'time'=>date('H:i:s'),
      );
      onez('call')->call('chat_push',array(
        'type'=>'message',
        'groupid'=>$groupid,
        'userid'=>$userid,
        'message'=>$message,
      ));
    }
  }
  onez()->output($A);
}elseif($action=='viewuser'){
  $uid=onez()->gp('uid');
  onez('call')->call('chat_group_viewuser',$A);
  if(strpos($uid,'guest.')===false){
    $userid=(int)$uid;
    $grade='user';
    $u=$G['this']->data()->open('member')->one("id='$userid'");
    $nickname=onez('chat.group.common')->nickname($userid);
    $avatar=onez('chat.group.common')->avatar($userid);
    $guser=$G['this']->data()->open('group_users')->one("upid='$groupid' and userid='$userid' and token='user'");
  }else{
    $userid=intval(substr($uid,6));
    $grade='guest';
    $nickname=onez('chat.group.common')->nickname_guest($userid);
    $avatar=onez('chat.group.common')->avatar(0);
    $guser=$G['this']->data()->open('group_users')->one("upid='$groupid' and userid='$userid' and token='guest'");
  }
  $guser['nickname']=$nickname;
  $guser['avatar']=$avatar;
  
  $html=array();
  $html[]='<p><img src="'.$avatar.'" width="32" height="32" style="border-radius: 50%" /> '.$nickname.'</p>';
  $guser['addtime'] && $html[]='<p>加入时间: <code>'.date('Y-m-d H:i:s',$guser['addtime']).'</code>';
  $html[]='<p>个性签名: <code>'.($u['sign']?$u['sign']:'暂无个性签名').'</code>';
  $html[]='<p>';
  $r=onez('call')->call('chat_group_viewuser_all',$guser);
  if($r){
    foreach($r as $v){
      $html[]=$v;
    }
  }
  if($G['ismaster']){#群管理
    $r=onez('call')->call('chat_group_viewuser_master',$guser);
    if($r){
      foreach($r as $v){
        $html[]=$v;
      }
    }
  }
  $html[]='</p>';
  $A['info']=implode("",$html);
  onez()->output($A);
}elseif($action=='history'){
  $auto_delete=$group['auto_delete'];
  !$auto_delete && $auto_delete=$option['auto_delete'];
  if($auto_delete>0){
    $G['this']->data()->open('message')->delete("upid='$groupid' and addtime<".(time()-$auto_delete*60));
  }
  $T=$G['this']->data()->open('message')->page("upid='$groupid' order by id desc");
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
    if($rs['key2']=='guest'){
      $item['avatar']=onez('chat.group.common')->avatar(0);
    }else{
      $item['avatar']=onez('chat.group.common')->avatar($rs['key1']);
    }
    if($rs['key1']==$userid){
      $item['type']='me';
    }
    $item['time']=str_replace($today.' ','',$item['time']);
    $msg[]=$item;
  }
  if($msg){
    $newmsg=onez('call')->call('chat_group_message',$msg);
    if($newmsg){
      $msg=$newmsg[0];
    }
  }
  $A['history']=$msg;
  onez()->output($A);
}elseif($action=='notice'){
  $A['notice']=$group['notice'];
  onez()->output($A);
}elseif($action=='loaduser'){
  $uids=onez()->gp('uids');
  $user=$guest=array();
  foreach(explode(',',$uids) as $uid){
    if(strpos($uid,'guest.')===false){
      $uid=intval($uid);
      if($uid){
        $user[]=$uid;
      }
    }else{
      $uid=intval(substr($uid,6));
      if($uid){
        $guest[]=$uid;
      }
    }
  }
  $users=array();
  $or=array();
  if($user){
    $or[]="(token='user' and userid in (".implode(',',$user)."))";
  }
  if($guest){
    $or[]="(token='guest' and userid in (".implode(',',$guest)."))";
  }
  $A['users']=array();
  if($or){
    $T=$G['this']->data()->open('group_users')->record("(key1<>'tickout') and (".implode(' or ',$or).") order by id desc");
    $users=onez('chat.group.common')->userlist($T);
    if($users){
      $A['users']=$users;
    }
  }
  onez('call')->call('chat_group_loaduser',$A);
  onez()->output($A);
}elseif($action=='userlist'){
  $T=$G['this']->data()->open('group_users')->record("(key1<>'tickout') and token='user' order by id desc");
  
  $users=onez('chat.group.common')->userlist($T);
  if($users){
    $A['users']=$users;
  }
  onez('call')->call('chat_group_userlist',$A);
  onez()->output($A);
#20170611新增
}elseif($action=='che'){
  $msgid=(string)onez()->gp('msgid');
  $time=(int)onez()->gp('time');
  if($group['chetime']!=-1 && $time<time()-$group['chetime']){
    $A['print']=array(
      'msgid'=>time(),
      'type'=>'tip',
      'tip'=>'只能撤回'.$group['chetime'].'秒以内的消息',
    );
    onez()->output($A);
  }
  $G['this']->data()->open('message')->delete("id='$msgid' and addtime>".(time()-$group['chetime']));
  $A['msg']=array(
    'type'=>'doit',
    'event'=>array(
      'action'=>'che',
      'msgid'=>$msgid,
    ),
  );
  onez()->output($A);
}elseif($action=='che2'){
  $msgid=(string)onez()->gp('msgid');
  $time=(int)onez()->gp('time');
  if($G['ismaster']){
    $G['this']->data()->open('message')->delete("id='$msgid'");
  }else{
    if($group['chetime']!=-1 && $time<time()-$group['chetime']){
      $A['print']=array(
        'msgid'=>time(),
        'type'=>'tip',
        'tip'=>'只能撤回'.$group['chetime'].'秒以内的消息',
      );
      onez()->output($A);
    }
    $G['this']->data()->open('message')->delete("id='$msgid' and addtime>".(time()-$group['chetime']));
  }
  $A['msg']=array(
    'type'=>'doit',
    'event'=>array(
      'action'=>'che',
      'msgid'=>$msgid,
    ),
  );
  onez()->output($A);
}elseif($action=='touch'){
  $G['this']->data()->open('group_users')->update(array(
    'lasttime'=>time(),
    'index7'=>time(),
  ),"id='$guser[id]'");
  onez()->output($A);
}elseif($action=='lockall'){
  $status=$group['index5']==1?0:1;
  $G['this']->data()->open('group')->update(array(
    'index5'=>$status,
  ),"id='$groupid'");
  $A['msg']=array(
    'type'=>'doit',
    'event'=>array(
      'action'=>'lockall',
      'status'=>$status,
    ),
  );
  onez()->output($A);
}elseif($action=='clear'){
  $gid=(int)onez()->gp('gid');
  $g=$G['this']->data()->open('group_users')->one("id='$gid'");
  if($g['token']=='user'){
    $userid=$g['userid'];
  }else{
    $userid='guest.'.$g['userid'];
  }
  $G['this']->data()->open('message')->delete("upid='$groupid' and key1='$userid'");
  onez()->ok('操作成功','reload');
}elseif($action=='tickout'){
  $gid=(int)onez()->gp('gid');
  $guser=$item=$G['this']->data()->open('group_users')->one("upid='$groupid' and id='$gid'");
  if($guser['token']=='guest'){
    $A['userid']='guest.'.$guser['userid'];
    $A['nickname']=onez('chat.group.common')->nickname_guest($guser['userid']);
  }else{
    $A['userid']=$guser['userid'];
    $A['nickname']=onez('chat.group.common')->nickname($guser['userid']);
  }
  $onez['tickout_exptime']=strtotime('+10 years');
  ob_clean();
  $id=$G['this']->data()->open('group_badlock')->insert(array(
    'upid'=>$groupid,
    'userid'=>(int)$G['userid'],
    'index1'=>(int)$gid,
    'index2'=>(int)$guser['userid'],
    'key3'=>$onez['ip'],
    'key1'=>$guser['token'],
    'key2'=>$userid,
    'tickout_because'=>$onez['tickout_because'],
    'tickout_exptime'=>$onez['tickout_exptime'],
    'token'=>'tickout',
  ));
  $G['this']->data()->open('group_users')->update(array(
    'tickout_because'=>$onez['tickout_because'],
    'tickout_exptime'=>$onez['tickout_exptime'],
    'tickout_masteruid'=>$G['userid'],
    'tickout_ip'=>$onez['ip']?$guser['ip']:'',
    'tickout_method'=>$onez['ip']?'账号+IP':'账号',
    'key1'=>'tickout',
  ),"id='$gid'");
  $A['status']='success';
  onez()->output($A);
  onez()->ok('操作成功','reload');
}elseif($action=='lock'){
  $gid=(int)onez()->gp('gid');
  $guser=$item=$G['this']->data()->open('group_users')->one("upid='$groupid' and id='$gid'");
  if($guser['token']=='guest'){
    $A['userid']='guest.'.$guser['userid'];
    $A['nickname']=onez('chat.group.common')->nickname_guest($guser['userid']);
  }else{
    $A['userid']=$guser['userid'];
    $A['nickname']=onez('chat.group.common')->nickname($guser['userid']);
  }
  $onez['lock_exptime']=strtotime('+10 years');
  $id=$G['this']->data()->open('group_badlock')->insert(array(
    'upid'=>$groupid,
    'userid'=>$G['userid'],
    'index1'=>(int)$gid,
    'index2'=>(int)$guser['userid'],
    'key3'=>$onez['ip'],
    'key1'=>$guser['token'],
    'key2'=>$userid,
    'lock_because'=>$onez['lock_because'],
    'lock_exptime'=>$onez['lock_exptime'],
    'token'=>'lock',
  ));
  $G['this']->data()->open('group_users')->update(array(
    'lock_because'=>$onez['lock_because'],
    'lock_exptime'=>$onez['lock_exptime'],
    'lock_masteruid'=>$G['userid'],
    'key1'=>'lock',
  ),"id='$gid'");
  $A['status']='success';
  onez()->output($A);
  onez()->ok('操作成功','reload');
}
$G['this']->data()->open('group_users')->update(array(
  'lasttime'=>time(),
  'index7'=>time(),
),"id='$guser[id]'");
$G['title']=$group['name'];

include(dirname(__FILE__).'/ui.init.php');
$G['header'].=onez('ui')->css($baseurl.'/images/group.css?t='.filemtime(dirname(__FILE__).'/images/group.css'));
$G['header'].=onez('ui')->js($baseurl.'/js/group.js?t='.filemtime(dirname(__FILE__).'/js/group.js'));
$G['header'].=onez('ui')->js($baseurl.'/js/socket.io/2.0.3/socket.io.js');
$G['header'].=onez('ui')->js($baseurl.'/js/jquery.colorpicker.js');
onez('smarty')->assign('width_right',200);
onez('smarty')->assign('room',md5($option['onez_sitekey']."\t".$_SERVER['SERVER_ADDR']."\t".$groupid));
if(empty($group['alpha'])){
  $group['alpha']=10;
}
$goto=urlencode(onez()->href('/group.php?groupid='.$groupid));
$url=array(
  'notice'=>onez()->href('/notice.php?groupid='.$groupid),
  'modify'=>onez()->href('/modify.php?groupid='.$groupid),
  'login'=>onez()->href('/login.php?groupid='.$groupid.'&goto='.$goto),
  'register'=>onez()->href('/register.php?groupid='.$groupid.'&goto='.$goto),
);
onez('event')->load('viewpic');
onez('smarty')->assign('url',$url);
onez('smarty')->assign('group',$group);
onez('smarty')->assign('pc_nav',onez('call')->call('pc_nav'));
onez('smarty')->assign('ad_pc_tr',$group['ad_pc_tr_code'].$group['ad_pc_tr']);
onez('smarty')->assign('ad_pc_mt',$group['ad_pc_mt_code'].$group['ad_pc_mt']);
onez('smarty')->assign('ad_pc_mb',$group['ad_pc_mb_code'].$group['ad_pc_mb']);
onez('smarty')->assign('ad_pc_bl',$group['ad_pc_bl_code'].$group['ad_pc_bl']);
onez('smarty')->assign('miniwin',onez()->gp('miniwin'));
onez('smarty')->assign('guser',$guser);
onez('smarty')->assign('ismaster',$G['ismaster']?'true':'false');
onez('smarty')->assign('masters',json_encode(array_keys($master)));
onez('smarty')->assign('pluginurl',onez('chat.group.common')->url);
onez('smarty')->assign('userid',$userid);

onez('smarty')->assign('server_host',onez('chat.group.common')->server_host($option));

onez('smarty')->assign('image_maxsize',$option['image_maxsize']?intval($option['image_maxsize']):280);
onez('smarty')->assign('plugins',json_encode(array()));
onez('smarty')->show('group.tpl',$G['template']);
onez('call')->call('chat_group_pc_talk',$group);
