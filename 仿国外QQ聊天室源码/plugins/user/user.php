<?php

!defined('IN_ONEZ') && exit('Access Denied');
#名称：用户中心
#标识：user

class onezphp_user extends onezphp{
  function __construct(){
    
  }
  //数据表
  function db(){
    global $G;
    $db=$this->get('db');
    if($db){
      return $db;
    }
    if($G['this']){
      $usertype=$this->getvar('usertype');
      if(!$usertype){
        $usertype='user';
        $this->set('usertype',$usertype);
      }
      if($usertype=='user'){
        $db=$G['this']->data();
        $this->set('db',$db);
        $this->set('idname','id');
        return $db;
      }
    }
    $db=onez('db');
    $this->set('db',$db);
    $this->set('idname','userid');
    return $db;
  }
  function idname(){
    $idname=$this->get('idname');
    if(!$idname){
      $this->db();
      $idname=$this->get('idname');
    }
    !$idname && $idname='id';
    return $idname;
  }
  function xxx(&$xxx){
    
  }
  function parse(&$u){
    $idname=$this->idname();
    $usertype=$this->usertype();
    if($usertype=='user'){
      $u['userid']=$u['id'];
      #$u['username']=$u['key1'];
      #$u['grade']=$u['key3'];
    }
    if(!$u['nickname']){
      $u['nickname']=$u['username'];
    }
  }
  /**
  * 如设置为虚拟表，自动初始化
  */
  function install($usertype){
    if($usertype=='user'){
      if(onez()->exists('site.develop')){
        onez('site.develop')->table_init_byfile(dirname(__FILE__).'/inc/dbtables.php');
      }
    }
  }
  function myinfo($userid,$key=false,$value=false){
    global $G;
    $userinfo=$G['this']->data()->open('userinfo')->one("userid='$userid'");
    if($value===false){
      if($key===false){
        return $userinfo;
      }
      return $userinfo[$key];
    }
    if(!$userinfo){
      $G['this']->data()->open('userinfo')->insert(array(
        'userid'=>$userid,
      ));
    }
    $G['this']->data()->open('userinfo')->update(array(
      $key=>$value,
    ),"userid='$userid'");
    return $this;
  }
  function usertype(){
    global $G;
    $usertype=$this->getvar('usertype');
    !$usertype && $usertype='member';
    return $usertype;
  }
  function avatar($userid,$big=0){
    global $G;
    $usertype=$this->usertype();
  	$myid = sprintf("%09d", $userid);
  	$dir1 = substr($myid, 0, 3);
  	$dir2 = substr($myid, 3, 2);
  	$dir3 = substr($myid, 5, 2);
    $avatarFile='/cache/avatars/'.$G['this']->cname.'/'.$dir1.'/'.$dir2.'/'.$dir3.'/'.substr($myid, -2).'.jpg';
    if(file_exists(ONEZ_ROOT.$avatarFile)){
      return onez()->homepage().$avatarFile;
    }elseif($G['this'] && file_exists($G['this']->path.'/images/avatar.jpg')){
      return $G['this']->url.'/images/avatar.jpg';
    }else{
      return $this->url.'/images/avatar.jpg';
    }
  }
  function avatar_set($userid,$url){
    global $G;
    $usertype=$this->usertype();
  	$myid = sprintf("%09d", $userid);
  	$dir1 = substr($myid, 0, 3);
  	$dir2 = substr($myid, 3, 2);
  	$dir3 = substr($myid, 5, 2);
    $avatarFile='/cache/avatars/'.$G['this']->cname.'/'.$dir1.'/'.$dir2.'/'.$dir3.'/'.substr($myid, -2).'.jpg';
    $data=onez()->post($url);
    onez()->write(ONEZ_ROOT.$avatarFile,$data);
    return $this;
  }
  //用户资料
  function info($xxx,$is_userid=1){
    global $G;
    $info=$this->get("/info/$xxx");
    if($info){
      return $info;
    }
    $idname=$this->idname();
    if($is_userid){
      $info=$this->db()->open('member')->one("$idname='$xxx'");
    }else{
      $info=$this->db()->open('member')->one("$xxx");
    }
    if(!$info){
      return array();
    }
    if(!$info['userid'] && $info['id']){
      $this->db()->open('member')->update(array('userid'=>$info['id']),"id='$info[id]'");
      $info['userid']=$info['id'];
    }
    $this->parse($info);
    $this->set("/info/$xxx",$info);
    if(!$is_userid){
      $this->set("/info/$info[userid]",$info);
    }
    return $info;
  }
  function register($item){
    global $G;
    $appid=(int)onez()->gp('appid');
    if($this->db()->open('member')->rows("username='$item[username]'")>0){
      return '这个账号已被使用，请更换';
    }
    
    $password=$item['password'];
    $password_md5=md5($item['password']);
    $username=$item['username'];
    $email=$item['email'];
    !$email && $email='o'.uniqid().'@site.onez.cn';
    $onez=array();
    if(onez()->exists('ucenter') && onez('ucenter')->is_open()){
      $userid=onez('ucenter')->register($username,$password,$email);
      if($userid<=0){
        switch($userid){
          case -1:
            $info['error']='用户名不合法！请重新填写！';
            break;
          case -2:
            $info['error']='包含不允许注册的词语！请重新填写！';
            break;
          case -3:
            $info['error']='用户名已经存在！请重新填写！';
            break;
          case -4:
            $info['error']='Email 格式有误，请重新填写';
            break;
          case -5:
            $info['error']='Email 不允许注册';
            break;
          case -6:
            $info['error']='该 Email 已经被注册';
            break;
        }
        return $info['error'];
      }
    }
    !$item['type'] && $item['type']='quick';
    $onez['appid']=$appid;
    $userid && $onez['userid']=$userid;
    $onez['regtype']=$item['type'];
    $onez['utype']=$item['type'];
    $onez['utoken']=$item['token'];
    $onez['username']=$username;
    $onez['nickname']=$item['nickname']?$item['nickname']:$username;
    $onez['groupid']=(int)$item['groupid'];
    $onez['email']=$email;
    $onez['password']=$password_md5;
    $onez['infotime']=time();
    $onez['infoip']=onez()->ip();
    $onez['upuid']=(int)onez('cache')->cookie('upuid');
    $onez['upuid']==$userid && $onez['upuid']=0;
  
    $userid=$this->db()->open('member')->insert($onez);
    if($item['avatar']){
      $this->avatar_set($userid,$item['avatar']);
    }
    return $this->info($userid);
  }
  /**
  * 更新用户资料
  * @return
  */
  function update($userid,$arr,$value=false){//如果$value有值，$arr表示字符变量
    $idname=$this->idname();
    if($value!==false){
      $arr=array($arr=>$value);
    }
    $this->db()->open('member')->update($arr,"$idname='$userid'");
    return $this;
  }
  function _login_callback($username,$password,$password_md5){
    global $G;
    $T=$this->db()->open('member')->one("`username`='$username' and `password`='$password_md5'");
    
    $usertype=$this->getvar('usertype');
    if(!$T){
      return false;
    }
    !$T['userid'] && $T['userid']=$T['id'];
    $loginstr=uniqid();
    return "$T[userid]\t$T[username]\t$loginstr";
  }
  //用户列表
  function userlist($xxx){
    $idname=$this->idname();
    $xxx=str_replace('userid',$idname,$xxx);
    $userlist=$this->db()->open('member')->record("$xxx");
    foreach($userlist as $k=>$rs){
      $this->parse($userlist[$k]);
    }
    return $userlist;
  }
  //用户列表(分页)
  function userlist_page($xxx,$pagesize=20){
    $idname=$this->idname();
    $xxx=str_replace('userid',$idname,$xxx);
    $userlist=$this->db()->open('member')->page("$xxx",false,$pagesize);
    foreach($userlist[0] as $k=>$rs){
      $this->parse($userlist[0][$k]);
    }
    return $userlist;
  }
  //用户昵称
  function nickname($userid,$showavatar=1){
    global $G;
    $user=$this->info($userid);
    !$user['nickname'] && $user['nickname']='匿名';
    if(!$showavatar){
      return $user['nickname'];
    }
    return '<img src="'.$this->avatar($userid).'" style="height:16px" /> '.$user['nickname'];
  }
  function vars(){
    $var=array();
    $var[]=array('name'=>'当前用户信息','event'=>'$user=${onez:user:info|<G(userid)>};');
    $var[]=array('name'=>'UID','event'=>'$userid=$G{userid};');
    $var[]=array('name'=>'昵称','event'=>'$nickname=${onez:user:nickname|<G(userid)>};');
    $var[]=array('name'=>'余额','event'=>'$user=${onez:user:info|<G(userid)>};$amt=$user[\'amt\'];');
    $var[]=array('name'=>'积分','event'=>'$user=${onez:user:info|<G(userid)>};$credit=$user[\'credit\'];');
    return $var;
  }
}