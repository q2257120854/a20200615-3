<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("sjk.php");
$sql = mysql_query("select * from yw");
while($rows = mysql_fetch_array($sql)){
	echo "会员ID:".$rows['imei']."&nbsp;兑换:".$rows['yw']."&nbsp;充值账号:".$rows['qq']."&nbsp;兑换时间:".$rows['time']."<br/>";
	}
?>
