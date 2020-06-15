<?php
if(!defined('IN_CRONLITE'))exit();

$my=isset($_GET['my'])?$_GET['my']:null;

$clientip=real_ip();

if(isset($_COOKIE["admin_token"]))
{ 
	$token=authcode(daddslashes($_COOKIE['admin_token']), 'DECODE', SYS_KEY);
	list($user, $sid) = explode("\t", $token);
	if($row = $DB->get_row("select * from ku_admin where username ='$user' limit 1")){
	$session=md5($row['username'].$row['userpass'].$password_hash);
	if($session==$sid) {
		$islogin=1;
	}
}
}

if(isset($_COOKIE["user_token"]))
{
	$token=authcode(daddslashes($_COOKIE['user_token']), 'DECODE', SYS_KEY);
	list($user, $sid) = explode("\t", $token);
	if($userrow = $DB->get_row("select * from ku_user where username ='$user' limit 1")){
		$session=md5($userrow['username'].$userrow['pwd'].$password_hash);
		if($session==$sid) {
			$islogin2=1;
		}
	}
}


?>