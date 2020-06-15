<?php

!defined('IN_ONEZ') && exit('Access Denied');
$goto=onez()->gp('goto');
!$goto && $goto=onez()->href('/index.php');
$action=onez()->gp('action');
if($action=='regpost'){
  $nickname=onez()->gp('nickname');
  if($G['this']->option('nickname_maxlength')){
    $nickname_maxlength=$G['this']->option('nickname_maxlength');
    if(onez()->strlen($nickname)>$nickname_maxlength){
      onez()->error('昵称长度不能大于'.$nickname_maxlength.'个字符');
    }
  }
  $qq=onez()->gp('qq');
  $username=onez()->gp('username');
  $password=onez()->gp('password');
  $password2=onez()->gp('password2');
  $password_md5=md5($password);
  if($password!=$password2){
    onez()->error('两次密码不一致');
  }
  $onez=array();
  $onez['nickname']=$nickname;
  $onez['key8']=$nickname;
  $onez['key9']=$onez['ip']=onez()->ip();
  $onez['key10']=$onez['address']=onez('ip')->init($onez['ip'])->address();
  $onez['qq']=$qq;
  $onez['username']=$username;
  $G['this']->data()->open('member')->rows("`username`='$onez[username]'")>0 && onez()->error('这个账号已经存在，请更换');
  $onez['password']=$password_md5;
  $onez['grade']='user';
  $userid=$G['this']->data()->open('member')->insert($onez);
  
  onez('cache')->cookie('chat_group',"$userid\t$onez[username]",0);
  onez()->ok('注册成功',$goto);
}
include(dirname(__FILE__).'/ui.init.php');
$G['header'].=onez('ui')->css(onez('login')->url.'/php/images/signin.css');
$G['header'].=onez('ui')->css(onez('admin')->url.'/assets/css/font-awesome.min.css');
$url=array(
  'index'=>onez()->href('/index.php'),
  'login'=>onez()->href('/login.php?goto='.urlencode($goto)),
);
onez('smarty')->assign('url',$url);
onez('smarty')->show('register.tpl',$G['template']);