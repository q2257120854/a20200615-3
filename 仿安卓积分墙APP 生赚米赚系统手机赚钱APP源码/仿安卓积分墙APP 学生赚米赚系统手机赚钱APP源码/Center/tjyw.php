
<?php
include("sjk.php");
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
$qq = $_POST['qq'];
$yw = $_POST['yw'];
$imei = $_POST['imei'];
$time = $_POST['time'];
$sql = mysql_query("insert into yw (qq,yw,imei,time) values('{$qq}','{$yw}','{$imei}','{$time}')",$con);
if(mysql_affected_rows() == 1){
	echo "提交订单成功！<br/> 充值账号:".$qq."兑换：".$yw."会员：".$imei."提交时间：".$time;
}else {
	echo "提交失败！";
}
?>