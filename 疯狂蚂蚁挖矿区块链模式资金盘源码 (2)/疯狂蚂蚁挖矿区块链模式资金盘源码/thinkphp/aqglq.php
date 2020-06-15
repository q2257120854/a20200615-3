<?php 
//$str = $_SERVER['PHP_SELF'];
$str = $_SERVER["REQUEST_URI"];
//$pattern_url = "/^((?!token).)*$/is"; 
$pattern_url = "/(admin|signin|sms|yuntongxun)/is"; //括号里是白名单 添加要排除的方法关键词或者路径关键词哪个文件要白名单 就写哪个Productsup
if (!preg_match($pattern_url, $str)){ 
include('qjgl.php');
}else{
include('qjgl2.php');
}
?>