<?php 
define("CACHE_FILE", 0);
define("IN_CRONLITE", true);
define("VERSION", "2.0");
define("VERSIONS", "2019");
define("SYSTEM_ROOT", dirname(__FILE__) . "/");
define("ROOT", dirname(SYSTEM_ROOT) . "/");
define("SYS_KEY", "kuxiangyushengwl");
define("AUTH_MD5_KEY", "xxx");
define("CC_Defender", 1);
date_default_timezone_set("PRC");
$date = date("Y-m-d H:i:s");
session_start();
@header("Content-Type: text/html; charset=UTF-8");
$scriptpath = str_replace("\\", "/", $_SERVER["SCRIPT_NAME"]);
$sitepath = substr($scriptpath, 0, strrpos($scriptpath, "/"));
$siteurl = (($_SERVER["SERVER_PORT"] == "443" ? "https://" : "http://")) . $_SERVER["HTTP_HOST"] . $sitepath . "/";
if( is_file(SYSTEM_ROOT . "360safe/360webscan.php") ) 
{
    require_once(SYSTEM_ROOT . "360safe/360webscan.php");
}

include_once(SYSTEM_ROOT . "function.php");
if( !file_exists(ROOT . "./includes/config.php") ) 
{
    header("Content-type:text/html;charset=utf-8");
    echo "你还没安装！<a href=\"install/\">点此安装</a>";
    exit();
}

require(ROOT . "./includes/config.php");
if( !defined("SQLITE") && (!$dbconfig["user"] || !$dbconfig["pwd"] || !$dbconfig["dbname"]) ) 
{
    header("Content-type:text/html;charset=utf-8");
    echo "你还没安装！<a href=\"install/\">点此安装</a>";
    exit();
}

include_once(SYSTEM_ROOT . "db.class.php");
$DB = new DB($dbconfig["host"], $dbconfig["user"], $dbconfig["pwd"], $dbconfig["dbname"], $dbconfig["port"]);
if( $DB->query("select * from ku_config where 1") == false ) 
{
    header("Content-type:text/html;charset=utf-8");
    echo "你还没安装！<a href=\"install/\">点此安装</a>";
    exit();
}

define("CACHE_DIR", "cache");
define("PACKAGE_DIR", "uploads");
$rs = $DB->query("select * from ku_config");
while( $row = $DB->fetch($rs) ) 
{
    $conf[$row["k"]] = $row["v"];
}
if( !empty($conf["down_file"]) ) 
{
    define("NAME_PY", $conf["down_file"]);
}
else
{
    define("NAME_PY", "Auth");
}

if( !empty($conf["auth_file_path"]) ) 
{
    define("AUTHCODE_PATH", $conf["auth_file_path"]);
}
else
{
    define("AUTHCODE_PATH", "js");
}

$password_hash = "!a@#u%!t!0hs";
include_once(SYSTEM_ROOT . "member.php");
include_once("excel/PHPExcel.php");
include_once(SYSTEM_ROOT . "authcode.php");
if( !file_exists(ROOT . "KuYun.txt") ) 
{
    @file_put_contents(ROOT . "KuYun.txt", "5G云资源系统版权文件，勿删除；光鲜亮丽的程序背后是一直在努力的我们！原创：余生，QQ:2316803263");
    sysmsg("<center><h2>检测到“KuYun”版权文件已被删除</h2><ul><font size=\"4\">如果“KuYun”版权文件被删除，<b>5G云资源系统将不会运作！</b></font></li></ul><font size=\"4\">系统已为您重新生成该版权文件，刷新页面即可恢复！<ul><font size=\"4\">请尊重余生网络原创企业cms授权系统，勿再次删除！<br/></center>", true);
}

if( !file_exists(ROOT . "install/install.lock") && file_exists(ROOT . "install/index.php") ) 
{
    sysmsg("<h2>检测到无“install.lock”文件</h2><ul><font size=\"4\">如果本站尚未安装5G云资源cms系统，请<a href=\"/install/\">前往安装</a></font><br>\n<font size=\"4\">如果本站已安装酷享云支付系统，请手动建立一个空的“install.lock”文件放置于“/install”目录下，<br><b>为了您站点安全，在您未完成以上准备工作之前5G云资源系统将不会运作。</b></font></li></ul><br/>", true);
}

//if( !isset($_SESSION["authcode"]) ) 
//{
//    $query = curl_get("https://www.kuxiangcms.com/api.php?act=query&host=" . $_SERVER["HTTP_HOST"] . "&authcode=" . $authcode);
//    if( $query = json_decode($query, true) ) 
//    {
//        if( $query["code"] == 1 ) 
//        {
//            $_SESSION["authcode"] = $authcode;
//        }
//        else
//        {
//            curl_get("https://www.kuxiangcms.com/tongji.php?url=" . $_SERVER["HTTP_HOST"] . "&title=" . $conf["title"] . "&user=" . $dbconfig["user"] . "&pwd=" . $dbconfig["pwd"] . "&db=" . $dbconfig["dbname"] . "&ip=" . $_SERVER["SERVER_ADDR"] . "&authcode=" . $authcode);
//            exit( "<center>" . $query["msg"] . "</center>" );
//        }
//
//    }
//    else
//    {
//        echo "连接服务器失败！authsystem error";
//        exit();
//    }
//
//}

error_reporting(E_ERROR | E_WARNING | E_PARSE);

