<?php

!defined('IN_ONEZ') && exit('Access Denied');
#名称：聊天系统基础本
#标识：chat.group.common

onez('www.product');
class onezphp_chat_group_common extends onezphp_www_product{
  var $version='v2.1';
  function __construct(){
    global $G;
    $G['chat']=$this;
  }
  function bind_admin_menu($grade){
    $Menu=onez('call')->get('admin_menu');
    if($grade=='admin'){
      $Menu[]=array (
        'name' => '高级设置',
        'href' => '',
        'icon' => '',
        'group' => 'setting',
      );
      $Menu[]=array (
        'name' => '基本设置',
        'href' => onez('chat.group.common')->href('/admin/common/setting.php',0),
        'icon' => '',
        'group' => 'setting',
      );
      $Menu[]=array (
        'name' => '用户管理',
        'href' => '',
        'icon' => '',
      );
      $Menu[]=array (
        'name' => '管理员管理',
        'href' => onez('chat.group.common')->href('/admin/users/admin.php',0),
        'icon' => '',
      );
      $Menu[]=array (
        'name' => '用户管理',
        'href' => onez('chat.group.common')->href('/admin/users/users.php',0),
        'icon' => '',
      );
      $Menu[]=array (
        'name' => '踢出名单',
        'href' => onez('chat.group.common')->href('/admin/users/tickout.php',0),
        'icon' => '',
      );
      $Menu[]=array (
        'name' => '禁言名单',
        'href' => onez('chat.group.common')->href('/admin/users/lock.php',0),
        'icon' => '',
      );
      $Menu[]=array (
        'name' => '群组管理',
        'href' => '',
        'icon' => '',
      );
      $Menu[]=array (
        'name' => '分类管理',
        'href' => onez('chat.group.common')->href('/admin/group/group.category.php',0),
        'icon' => '',
      );
      $Menu[]=array (
        'name' => '群组列表',
        'href' => onez('chat.group.common')->href('/admin/group/group.php',0),
        'icon' => '',
      );
    }
    onez('call')->set('admin_menu',$Menu);
  }
  function myconfig(){
    global $G;
    $login=onez('login')->init($G['this']->cname,0);
    if($login){
      $G['userid']=(int)$login['id'];
      $G['loginstr']=$login['extra'];
    }
    if($G['url.grade']!='admin'){
      define('IS_SITE_FRONT',1);
      return array('nocheck'=>1);
    }
  }
  function bind_index(){
    global $G;
    $_onez=onez()->gp('_onez');
    if(strpos($_onez,'onez|/')!==false || strpos($_onez,'|/admin/')!==false){
      $G['url.grade']='admin';
      include_once(dirname(__FILE__).'/www/admin/init.php');
      return;
    }
    $mod=onez()->gp('mod');
    if($_onez){
      include_once(dirname(__FILE__).'/www/admin/init.php');
      return;
    }
    if($mod=='/admin/index.php'){
      $_REQUEST['mod']='';
      onez()->location($this->href('/admin/index.php'));
    }
    if($G['url.grade']=='admin'){
    }else{
      onez('call')->call('index_check');
      onez()->start(dirname(__FILE__).'/theme/default');
    }
  }
  function bind_redirect(){
    global $G;
    onez()->location(onez()->href('/index.php'));
  }
  function checkpwd($group,$userid,$utype){
    global $G,$A,$baseurl;
    if(!$group['key3']){
      return 0;
    }
    $action=onez()->gp('action');
    if(defined('IS_M_API')){
      $r=include(dirname(__FILE__).'/tmpls/pwd.php');
      if($r=='onez'){
        return 0;
      }else{
        $A['record']=$record;
        onez()->output($A);
      }
    }
    if($action=='chklogin'){
      $password=onez()->gp('password');
      if($password==$group['key3']){
        return 0;
      }else{
        onez()->error('密码不正确');
      }
    }
    include(dirname(__FILE__).'/theme/default/www/pwd.php');
    exit();
  }
  function error($html){
    global $G,$baseurl;
    ob_clean();
    include(dirname(__FILE__).'/theme/default/www/error.php');
    exit();
  }
  function adduser($groupid,$userid,$utype){
    global $G;
    $group=$G['this']->data()->open('group')->one("id='$groupid'");
    if(!$group){
      return;
    }
    if($utype=='guest'){
      $user=$G['this']->data()->open('guest')->one("id='$userid'");
      if(!$user){
        return;
      }
      $guser=$G['this']->data()->open('group_users')->one("upid='$groupid' and userid='$userid' and token='guest'");
      if(!$guser){
        $exptime=$this->checkpwd($group,$userid,$utype);
        $G['this']->data()->open('group_users')->insert(array(
          'token'=>'guest',
          'upid'=>$groupid,
          'userid'=>$userid,
          'key1'=>'ok',
        ));
        return $G['this']->data()->open('group_users')->one("upid='$groupid' and userid='$userid' and token='guest'");
      }
      return $guser;
    }elseif($utype=='user'){
      $user=$G['this']->data()->open('member')->one("id='$userid'");
      if(!$user){
        return;
      }
      $guser=$G['this']->data()->open('group_users')->one("upid='$groupid' and userid='$userid' and token='user'");
      if(!$guser){
        $exptime=$this->checkpwd($group,$userid,$utype);
        $G['this']->data()->open('group_users')->insert(array(
          'token'=>'user',
          'upid'=>$groupid,
          'userid'=>$userid,
          'key1'=>'ok',
        ));
        return $G['this']->data()->open('group_users')->one("upid='$groupid' and userid='$userid' and token='user'");
      }
      return $guser;
    }
  }
  function get_gid($groupid,$uid){
    $guser=$this->get_guser($groupid,$uid);
    return $guser['id'];
  }
  function get_guser($groupid,$uid){
    global $G;
    if(strpos($uid,'guest.')===false){
      $userid=(int)$uid;
      $guser=$G['this']->data()->open('group_users')->one("upid='$groupid' and userid='$userid' and token='user'");
    }else{
      $userid=intval(substr($uid,6));
      $guser=$G['this']->data()->open('group_users')->one("upid='$groupid' and userid='$userid' and token='guest'");
    }
    return $guser;
  }
  function avatar($userid){
    global $G;
  	$myid = sprintf("%09d", $userid);
  	$dir1 = substr($myid, 0, 3);
  	$dir2 = substr($myid, 3, 2);
  	$dir3 = substr($myid, 5, 2);
    $avatarFile='/avatars/'.$G['this']->cname.'/'.$dir1.'/'.$dir2.'/'.$dir3.'/'.substr($myid, -2).'.jpg';
    if(file_exists(ONEZ_CACHE_PATH.$avatarFile)){
      return onez('m.plugin')->thumb(ONEZ_CACHE_URL.$avatarFile.'?t='.filemtime(ONEZ_CACHE_PATH.$avatarFile)).'?t='.filemtime(ONEZ_CACHE_PATH.$avatarFile);
    }else{
      return onez('m.plugin')->thumb(onez('chat.group.common')->url.'/images/avatar.jpg');
    }
  }
  function avatar_group($group){
    if($group['icon']){
      return onez('m.plugin')->thumb($group['icon']);
    }
    return onez('m.plugin')->thumb(onez('chat.group.common')->url.'/images/avatar.jpg');
  }
  function avatar_set($userid,$url){
    global $G;
    $usertype=$this->usertype();
  	$myid = sprintf("%09d", $userid);
  	$dir1 = substr($myid, 0, 3);
  	$dir2 = substr($myid, 3, 2);
  	$dir3 = substr($myid, 5, 2);
    $avatarFile='/avatars/'.$G['this']->cname.'/'.$dir1.'/'.$dir2.'/'.$dir3.'/'.substr($myid, -2).'.jpg';
    $data=onez()->post($url);
    
    onez()->write(ONEZ_CACHE_PATH.$avatarFile,$data);
    return $this;
  }
  function nickname($userid){
    global $G;
    !$this->users && $this->users=array();
    if(!$this->users[$userid]){
      $this->users[$userid]=$G['this']->data()->open('member')->one("id='$userid'");
    }
    return $this->users[$userid]['nickname'];
  }
  function nickname_guest($userid){
    global $G;
    !$this->guests && $this->guests=array();
    if(!$this->guests[$userid]){
      $this->guests[$userid]=$G['this']->data()->open('guest')->one("id='$userid'");
    }
    $nickname=$this->users[$userid]['nickname'];
    !$nickname && $nickname='游客'.$userid;
    return $nickname;
  }
  function usertag($userid){
    global $G;
    if(strpos($userid,'guest.')!==false){
      return array('tag_style'=>'guest','tag'=>'游客');
    }
    !$this->users && $this->users=array();
    if(!$this->users[$userid]){
      $this->users[$userid]=$G['this']->data()->open('member')->one("id='$userid'");
    }
    if($this->users[$userid]['tag']){
      return array('tag_style'=>'custom','tag'=>$this->users[$userid]['tag']);
    }
    return array('tag_style'=>'user','tag'=>'会员');
  }
  function userlist($T){
    global $G,$master;
    $users=array();
    foreach($T as $rs){
      if($rs['token']=='guest'){
        $u=$G['this']->data()->open('guest')->one("id='$rs[userid]'");
        if(!$u){
          continue;
        }
        $item=array(
          'gid'=>$rs['id'],
          'userid'=>'guest.'.$u['id'],
          'nickname'=>'游客'.$u['id'],
          'tag'=>'游客',
          'avatar'=>onez('chat.group.common')->avatar(0),
        );
        if($u['id']==$userid){
          $item['type']='me';
        }else{
          $item['type']='guest';
        }
        $users['guest.'.$u['id']]=$item;
      }else{
        $u=$G['this']->data()->open('member')->one("id='$rs[userid]'");
        if(!$u){
          continue;
        }
        $item=array(
          'gid'=>$rs['id'],
          'userid'=>$u['id'],
          'nickname'=>$u['nickname'],
          'tag'=>'会员',
          'avatar'=>onez('chat.group.common')->avatar($u['id']),
        );
        if($rs['tag']){
          $item['tag']=$rs['tag'];
        }
        if($u['id']==$userid){
          $item['type']='me';
        }elseif(!empty($master[$u['id']])){
          $item['type']='master';
        }else{
          $item['type']='user';
        }
        $users[$u['id']]=$item;
      }
    }
    return $users;
  }
  function options_history($key=false){
    $options=array();
    $options['none']='不保存';
    $options['system']='系统保存 (所有人看到相同的记录)';
    #$options['user']='用户保存 (只能看到自己的，不能看加入前和离线的)';
    if($key!==false){
      return $options[$key];
    }
    return $options;
  }
  function options_mode($key=false){
    $options=array();
    $options['chat']='聊天室模式';
    $options['group']='群组模式';
    if($key!==false){
      return $options[$key];
    }
    return $options;
  }
  function server_host($option){
    if($_SERVER['HTTPS']=='on'){
      if($option['server_host_https']){
        return $option['server_host_https'];
      }elseif($option['server_host']){
        $host=$option['server_host'];
        $host=str_replace('ws://','wss://',$host);
        $host=str_replace('11111','22222',$host);
        return $host;
      }else{
        return 'wss://www.onez.cn:22222';
      }
    }else{
      if($option['server_host']){
        return $option['server_host'];
      }else{
        return 'ws://www.onez.cn:11111';
      }
    }
  }
}