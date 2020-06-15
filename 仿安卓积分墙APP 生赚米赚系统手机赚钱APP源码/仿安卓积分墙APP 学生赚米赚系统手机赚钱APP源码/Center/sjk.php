<?php
$host = 'localhost';//数据库ip(一般不用改)
$root = 'root';//数据库用户名
$pwd = 'root';//数据库密码
$test = 'suibianlu5';//数据库名
$con = mysql_connect($host,$root,$pwd);
if($con == false){
	echo "数据库连接失败";

}
mysql_select_db($test,$con);//test 库名

mysql_query("set character set 'utf8'");//读库

mysql_query("set names 'utf8'");//写库
?>