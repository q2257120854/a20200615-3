<?php
include("sjk.php");
$account = $_POST['id'];
$jf = $_POST['jf'];
$_sql = mysql_query("UPDATE vip SET jf='{$jf}' WHERE account='{$account}'");
if(mysql_affected_rows())
{
	echo '修改成功！';
}else
{
	echo '本次未作任何更改！';	
}
?>