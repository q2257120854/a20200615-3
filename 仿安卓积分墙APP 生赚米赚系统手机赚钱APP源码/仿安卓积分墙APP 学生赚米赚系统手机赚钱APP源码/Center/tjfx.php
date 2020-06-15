<?php
include("sjk.php");
$qq = $_POST['qq'];
$yw = $_POST['yw'];
$imei = $_POST['imei'];
$time = $_POST['time'];
$sql = mysql_query("insert into fx (qq,yw,imei,time) values('{$qq}','{$yw}','{$imei}','{$time}')",$con);
if(mysql_affected_rows() == 1){
	echo "提交订单成功！<br/> 方式:".$qq."状态：".$yw."会员：".$imei."分享时间：".$time;
}else {
	echo "提交失败！";
}
?>