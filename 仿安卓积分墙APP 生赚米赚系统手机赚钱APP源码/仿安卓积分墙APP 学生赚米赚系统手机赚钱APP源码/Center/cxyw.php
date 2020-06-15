<?php
include("sjk.php");
$qq = $_POST['qq'];
$result = mysql_query("SELECT * FROM yw WHERE qq='{$qq}'");
while($rows = mysql_fetch_array($result))
{
	echo "账号：".$qq."----业务：".$rows['yw']."---IMEI：".$rows['imei']."----提交时间：".$rows['time'];
}
?>