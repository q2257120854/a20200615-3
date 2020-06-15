<?php
header('Content-Type:application/json; charset=utf-8');
include("includes/common.php");
$qq=daddslashes($_GET['qq']);
$row=$DB->get_row("SELECT * FROM ku_author WHERE ku_qq='$qq' limit 1");
if($row['kuhost'])
echo 1;
else
echo 0;
$DB->close();
?>