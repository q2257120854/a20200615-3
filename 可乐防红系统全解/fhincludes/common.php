<?php
error_reporting(0);
define('IN_CRONLITE', true);
define('SYSTEM_ROOT', dirname(__FILE__).'/');
define('ROOT', dirname(SYSTEM_ROOT).'/');
define('SYS_KEY', 'quanquan');
define('CC_Defender', 1); //防CC攻击开关(1为session模式)
date_default_timezone_set("PRC");
$date = date("Y-m-d H:i:s");
session_start();
if(CC_Defender!=0)

require ROOT.'config.php';
if(!defined('SQLITE') && (!$dbconfig['user']||!$dbconfig['pwd']||!$dbconfig['dbname']))//检测安装
{
header('Content-type:text/html;charset=utf-8');
echo '你还没安装！<a href="install/">点此安装</a>';
exit();
}
//连接数据库
include_once(SYSTEM_ROOT."db.class.php");
$DB=new DB($dbconfig['host'],$dbconfig['user'],$dbconfig['pwd'],$dbconfig['dbname'],$dbconfig['port']);
if($DB->query("select * from quan_config where 1")==FALSE)//检测安装2
{
header('Content-type:text/html;charset=utf-8');
echo '<div class="row">你还没安装！<a href="install/">点此安装</a></div>';
exit();
}

$siterow=$DB->get_row("select * from quan_domain where domain='{$_SERVER['HTTP_HOST']}' limit 1");
if($siterow && $siterow['siteid']!=1){
	$siteid=$siterow['siteid'];
	$conf=$DB->get_row("SELECT * FROM quan_config WHERE id='$siteid' limit 1");//获取系统配置
	if($conf['date']<date("Y-m-d"))
		exit("<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>您的网站已到期，请联系管理员续期！");
	elseif($conf['active']==0)
		exit("<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>您的网站已关闭，请联系管理员开通！");
	else{
		$is_fenzhan=1;
	}
}else{
	$is_fenzhan=0;
	$siteid=1;
	$conf=$DB->get_row("SELECT * FROM quan_config WHERE id='$siteid' limit 1");//获取系统配置
}
$password_hash='!@#%!s!0';
include_once(SYSTEM_ROOT."function.php");
include_once(SYSTEM_ROOT."member.php");
include_once(SYSTEM_ROOT."api.conf.php");

$online_log = '../includes/online.txt';  // 保存用户ip和时间的文件，形式：ip,time = 192.168.xx.xx,1516242630  
$timeout = 1800;   // 设置多长时间（10分）用户不在，设为掉线  
$tongji = array();   // 保存当前在线所有用户，后用来更新文件  
  
if (!file_exists($online_log)) {    // 文件不存在，就创建  
    touch($online_log);  
}  
$onlines = file($online_log);   // 以数组的形式将用户ip和time取出来array([0]=>'192.168.xx.xx,1516242630', [1]=>...)  
  
for ($i=0; $i<count($onlines); $i++) {  
    $online = explode(',', trim($onlines[$i]));   // 将用户ip和时间分隔开  
    // 过滤文件中其他的浏览者：前面!=是其他的浏览者，和当前的ip（自己）不一样，过滤掉超时的其他ip  
    if ($online[0] != $_SERVER['REMOTE_ADDR'] && $online[1] > time()) {  
        array_push($tongji, $online[0] . ',' . $online[1]);  
    }  
}  
// 更新当前的ip（自己）时间  
array_push($tongji, $_SERVER['REMOTE_ADDR'] . ',' . (time() + $timeout));  
  
// 更新在线人数的文件  
$onlines = implode("\n", $tongji);  
$fp = fopen($online_log, 'w');  
fputs($fp, $onlines);  
fclose($fp);  

?>
