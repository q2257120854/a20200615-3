<?php
!defined('IN_ONEZ') && exit('Access Denied');
onez('user')->set('usertype','member');
#验证登录账号
function _login_callback($username,$password,$password_md5){
  return onez('user')->_login_callback($username,$password,$password_md5);
}
if(file_exists(dirname(__FILE__).'/config.php')){
  include(dirname(__FILE__).'/config.php');
}
$login=onez('login')->init('main');
$G['userid']=(int)$login['id'];
$G['loginstr']=$login['extra'];

$G['user']=onez('user')->info($G['userid']);
$G['nickname']=$G['user']['realname'];
!$G['nickname'] && $G['nickname']=$G['user']['username'];
$G['avatar']=onez('user')->avatar($G['userid']);
