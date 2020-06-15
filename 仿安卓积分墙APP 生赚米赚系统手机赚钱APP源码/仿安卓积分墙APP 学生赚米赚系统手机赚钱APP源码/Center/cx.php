<?php
include("sjk.php");
$account = $_POST['id'];
$result = mysql_query("SELECT * FROM vip WHERE account='{$account}'");
while($rows = mysql_fetch_array($result))
{
	echo "账号：".$account."  当前积分：".$rows['jf'].'<br />';
}
?>