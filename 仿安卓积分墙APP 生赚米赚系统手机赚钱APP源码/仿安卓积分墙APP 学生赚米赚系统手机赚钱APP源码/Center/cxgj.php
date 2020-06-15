<?php
include("sjk.php");
$account = $_POST['id'];
$result = mysql_query("SELECT * FROM gj WHERE account='{$account}'");
while($rows = mysql_fetch_array($result))
{
	echo "账号：".$account."结果".$rows['imei'].'<br />';
}
?>