<?php
error_reporting(0);
define('CACHE_FILE', 0);
define('IN_CRONLITE', true);
define('SYSTEM_ROOT', dirname(__FILE__) . '/');
define('ROOT', dirname(SYSTEM_ROOT) . '/');
define('TEMPLATE_ROOT', ROOT . '/template/');
date_default_timezone_set('PRC');
$date = date('Y-m-d H:i:s');
include_once(SYSTEM_ROOT . 'base.php');
header('Cache-Control: no-store, no-cache, must-revalidate');
error_reporting(0);
header('Pragma: no-cache');
error_reporting(0);
if (($is_defend==true || CC_Defender==3)) {
    if ((!isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])!='xmlhttprequest')) {
        include_once(SYSTEM_ROOT . 'txprotect.php');
    }
    if ((CC_Defender==1 && check_spider()==false)) {
    }
    if (((CC_Defender==1 && check_spider()==false) || CC_Defender==3)) {
        cc_defender();
    }
}
if (is_file(SYSTEM_ROOT . '360safe/360webscan.php')) {
    require_once(SYSTEM_ROOT . '360safe/360webscan.php');
}
session_start();
$scriptpath = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
$sitepath = substr($scriptpath, 0, strrpos($scriptpath, '/'));
$siteurl = ($_SERVER['SERVER_PORT']==443 ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $sitepath . '/';
require(ROOT . 'config.php');
require(SYSTEM_ROOT . 'version.php');
if ((!defined('SQLITE') && !$dbconfig['user'] || !$dbconfig['pwd'] || !$dbconfig['dbname'])) {
    header('Content-type:text/html;charset=utf-8');
    echo '你还没安装！<a href="/install/">点此安装</a>';
    exit(0);
}
include_once(SYSTEM_ROOT . 'db.class.php');
$DB = new DB($dbconfig['host'], $dbconfig['user'], $dbconfig['pwd'], $dbconfig['dbname'], $dbconfig['port']);
if ($DB->query('select * from shua_config where 1')==false) {
    header('Content-type:text/html;charset=utf-8');
    echo '你还没安装！<a href="/install/">点此安装</a>';
    exit(0);
}
include(SYSTEM_ROOT . 'cache.class.php');
$CACHE = new CACHE();
$conf = unserialize($CACHE->read());
if (empty($conf['version'])) {
    $conf = $CACHE->update();
}
define('SYS_KEY', $conf['syskey']);

if (!strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/')===false && $conf['qqjump']==1) {
    header('Content-type:text/html;charset=utf-8');
    echo '<!DOCTYPE html>
<html>
 <head>
  <title>请使用浏览器打开</title>
  <script src="https://open.mobile.qq.com/sdk/qqapi.js?_bid=152"></script>
  <script type="text/javascript"> mqq.ui.openUrl({ target: 2,url: "' . $siteurl . "\"}); </script>\r\n </head>\r\n <body></body>\r\n</html>";
    exit(0);
}
$password_hash = '!#$^$$%^#@';
include_once(SYSTEM_ROOT . 'authcode.php');
define('authcode', $authcode);
define('DIST_ID', hexdec($distid));
include_once(SYSTEM_ROOT . 'price.class.php');
include_once(SYSTEM_ROOT . 'template.class.php');
include_once(SYSTEM_ROOT . 'function.php');
include_once(SYSTEM_ROOT . 'core.func.php');
include_once(SYSTEM_ROOT . 'ajax.func.php');
include_once(SYSTEM_ROOT . 'member.php');
if (!file_exists(ROOT . 'install/install.lock') && file_exists(ROOT . 'install/index.php')) {
    sysmsg('<h2>检测到无 install.lock 文件</h2><ul><li><font size="4">如果您尚未安装本程序，请<a href="./install/">前往安装</a></font></li><li><font size="4">如果您已经安装本程序，请手动放置一个空的 install.lock 文件到 /install 文件夹下，<b>为了您站点安全，在您完成它之前我们不会工作。</b></font></li></ul><br/><h4>为什么必须建立 install.lock 文件？</h4>它是代刷网的保护文件，如果检测不到它，就会认为站点还没安装，此时任何人都可以安装/重装代刷网。<br/><br/>', true);
}
$cookiesid = $_COOKIE['mysid'];
if ((!$cookiesid || !preg_match('/^[0-9a-z]{32}$/i', $cookiesid))) {
    $cookiesid = md5(uniqid(mt_rand(), 1) . time());
    setcookie('mysid', $cookiesid, time() + 604800, '/');
}
$domain = addslashes($_SERVER['HTTP_HOST']);
$siterow = $DB->get_row('select * from shua_site where domain=\'' . $domain . '\' or domain2=\'' . $domain . '\' limit 1');
if ($siterow && $siterow['status']==1) {
    $is_fenzhan = true;
    $conf = array_merge($conf, $siterow);
    $conf['kfqq'] = $conf['qq'];
} else {
    $is_fenzhan = false;
}
if (!defined('authcode')) {
    exit(0);
}
function x_real_ip()
{
    $ip = $_SERVER['REMOTE_ADDR'];
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && preg_match_all("#\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}#s", $_SERVER['HTTP_X_FORWARDED_FOR'], $matches)) {
        foreach ($matches[0] as $xip) {
            if (!preg_match("#^(10|172\.16|192\.168)\.#", $xip)) {
                $ip = $xip;
            } else {
            }
        }
    } elseif (isset($_SERVER['HTTP_CLIENT_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_CF_CONNECTING_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CF_CONNECTING_IP'])) {
        $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
    } else {
        if ((isset($_SERVER['HTTP_X_REAL_IP']) && preg_match("/^([0-9]{1,3}\.){3}[0-9]{1,3}$/", $_SERVER['HTTP_X_REAL_IP']))) {
            $ip = $_SERVER['HTTP_X_REAL_IP'];
        }
    }
    return $ip;
}
function check_spider()
{
    $useragent = strtolower($_SERVER['HTTP_USER_AGENT']);
    if (strpos($useragent, 'baiduspider')!==false) {
        return 'baiduspider';
    }
    if (strpos($useragent, 'googlebot')!==false) {
        return 'googlebot';
    }
    if (strpos($useragent, '360spider')!==false) {
        return '360spider';
    }
    if (strpos($useragent, 'soso')!==false) {
        return 'soso';
    }
    if (strpos($useragent, 'bing')!==false) {
        return 'bing';
    }
    if (strpos($useragent, 'yahoo')!==false) {
        return 'yahoo';
    }
    if (strpos($useragent, 'sohu-search')!==false) {
        return 'Sohubot';
    }
    if (strpos($useragent, 'sogou')!==false) {
        return 'sogou';
    }
    if (strpos($useragent, 'youdaobot')!==false) {
        return 'YoudaoBot';
    }
    if (strpos($useragent, 'robozilla')!==false) {
        return 'Robozilla';
    }
    if (strpos($useragent, 'msnbot')!==false) {
        return 'msnbot';
    }
    if (strpos($useragent, 'lycos')!==false) {
        return 'Lycos';
    }
    if (!strpos($useragent, 'ia_archiver')===false) {
    } elseif (!strpos($useragent, 'iaarchiver')===false) {
        return 'alexa';
    }
    if (strpos($useragent, 'archive.org_bot')!==false) {
        return 'Archive';
    }
    if (strpos($useragent, 'sitebot')!==false) {
        return 'SiteBot';
    }
    if (strpos($useragent, 'gosospider')!==false) {
        return 'gosospider';
    }
    if (strpos($useragent, 'gigabot')!==false) {
        return 'Gigabot';
    }
    if (strpos($useragent, 'yrspider')!==false) {
        return 'YRSpider';
    }
    if (strpos($useragent, 'gigabot')!==false) {
        return 'Gigabot';
    }
    if (strpos($useragent, 'wangidspider')!==false) {
        return 'WangIDSpider';
    }
    if (strpos($useragent, 'foxspider')!==false) {
        return 'FoxSpider';
    }
    if (strpos($useragent, 'docomo')!==false) {
        return 'DoCoMo';
    }
    if (strpos($useragent, 'yandexbot')!==false) {
        return 'YandexBot';
    }
    if (strpos($useragent, 'sinaweibobot')!==false) {
        return 'SinaWeiboBot';
    }
    if (strpos($useragent, 'catchbot')!==false) {
        return 'CatchBot';
    }
    if (strpos($useragent, 'surveybot')!==false) {
        return 'SurveyBot';
    }
    if (strpos($useragent, 'dotbot')!==false) {
        return 'DotBot';
    }
    if (strpos($useragent, 'purebot')!==false) {
        return 'Purebot';
    }
    if (strpos($useragent, 'ccbot')!==false) {
        return 'CCBot';
    }
    if (strpos($useragent, 'mlbot')!==false) {
        return 'MLBot';
    }
    if (strpos($useragent, 'adsbot-google')!==false) {
        return 'AdsBot-Google';
    }
    if (strpos($useragent, 'ahrefsbot')!==false) {
        return 'AhrefsBot';
    }
    if (strpos($useragent, 'spbot')!==false) {
        return 'spbot';
    }
    if (strpos($useragent, 'augustbot')!==false) {
        return 'AugustBot';
    }
    return false;
}
function cc_defender()
{
    $iptoken = md5(x_real_ip() . date('Ymd')) . md5(time() . rand(11111, 99999));
    if ((!isset($_COOKIE['sec_defend']) || substr($_COOKIE['sec_defend'], 0, 32)!==substr($iptoken, 0, 32))) {
        if (!$_COOKIE['sec_defend_time']) {
            $_COOKIE['sec_defend_time'] = 0;
        }
        $sec_defend_time = $_COOKIE['sec_defend_time'] + 1;
        include_once(SYSTEM_ROOT . 'hieroglyphy.class.php');
        $x = new hieroglyphy();
        $setCookie = $x->hieroglyphyString($iptoken);
        header('Content-type:text/html;charset=utf-8');
        if ($sec_defend_time >= 10) {
            exit('浏览器不支持COOKIE或者不正常访问！');
        }
        echo '<html><head><meta http-equiv="pragma" content="no-cache"><meta http-equiv="cache-control" content="no-cache"><meta http-equiv="content-type" content="text/html;charset=utf-8"><title>正在加载中</title><script>function setCookie(name,value){var exp = new Date();exp.setTime(exp.getTime() + 60*60*1000);document.cookie = name + "="+ escape (value).replace(/\+/g, \'%2B\') + ";expires=" + exp.toGMTString() + ";path=/";}function getCookie(name){var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");if(arr=document.cookie.match(reg))return unescape(arr[2]);else return null;}var sec_defend_time=getCookie(\'sec_defend_time\')||0;sec_defend_time++;setCookie(\'sec_defend\',' . $setCookie . ');setCookie(\'sec_defend_time\',sec_defend_time);if(sec_defend_time>1)window.location.href="./index.php";else window.location.reload();</script></head><body></body></html>';
        exit(0);
    } elseif (isset($_COOKIE['sec_defend_time'])) {
        setcookie('sec_defend_time', '', time() - 604800, '/');
    }
}
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
