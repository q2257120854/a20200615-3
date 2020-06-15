<?php
$host = 'localhost';//数据库ip
$root = 'root';//用户名
$pwd = 'qq545421536';//密码
$test = 'appyy800cc';
$con = mysql_connect($host,$root,$pwd);
if($con == false){
	echo "数据库连接失败";

}
mysql_select_db($test,$con);//test 库名

mysql_query("set character set 'utf8'");//读库

mysql_query("set names 'utf8'");//写库
?>