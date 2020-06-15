<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("sjk.php");
$sql = mysql_query("select * from qd");
while($rows = mysql_fetch_array($sql)){
	echo "#".$rows['imei']."+".$rows['qq']."".$rows['yw']."".$rows['time']."<br/>";
	}
?>