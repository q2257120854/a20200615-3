<?php
session_start();

	//1.将session数组清空
$_SESSION = null;
	
	//2.将cookie设置失效
setcookie(session_name(),'',time()-1,'/');//PHPSESSID
	
	//3.可以删除session文件【可选】
session_destroy();
	
header('location:../index.php');
?>