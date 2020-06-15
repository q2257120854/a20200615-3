<?php 
include("includes/common.php");
@header("Content-Type: application/json; charset=UTF-8");
$act = (!empty($_GET["act"]) ? str_filter($_GET["act"]) : NULL);
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

switch( $act ) 
{
    case "query":
        $_POST = $_GET;
        $host = daddslashes($_POST["host"]);
        $authcode = daddslashes($_POST["authcode"]);
        $referer = $_SERVER["HTTP_REFERER"];
        $notauthtis = (!empty($conf["not_tips"]) ? $conf["not_tips"] : "检查到您的网站未授权,暂时无法使用我们的程序!");
        $errtis = (!empty($conf["abnormal"]) ? $conf["abnormal"] : "检查到您的网站使用异常,暂时无法使用我们的程序!");
        $endtis = (!empty($conf["expire_tips"]) ? $conf["expire_tips"] : "您的网站已到期,请联系客服续费!");
        if( cauthcode($host) != $authcode ) 
        {
            $sql = "select kuhost,state,dhtime from ku_author where kuhost = '" . $host . "'";
            $row = $DB->get_row($sql);
            if( $row ) 
            {
                if( $row["state"] != 1 ) 
                {
                    $data = array( "code" => -1, "msg" => $errtis );
                    $DB->close();
                    exit( json_encode($data) );
                }

                if( strtotime($row["dhtime"]) < strtotime(date("Y-m-d H:i:s")) ) 
                {
                    $data = array( "code" => -1, "msg" => $endtis . "--" );
                    $DB->close();
                    exit( json_encode($data) );
                }

                $data = array( "code" => 1, "msg" => "正版授权" . $referer, "authcode" => cauthcode($host), "version" => $conf["version"], "buiid" => $conf["buiid"] );
                $DB->close();
                exit( json_encode($data) );
            }

            $data = array( "code" => -1, "msg" => $notauthtis );
            $DB->close();
            exit( json_encode($data) );
        }

        $sql = "select kuhost,state,dhtime from ku_author where kuhost = '" . $host . "'";
        $row = $DB->get_row($sql);
        if( $row ) 
        {
            if( $row["state"] != 1 ) 
            {
                $data = array( "code" => -1, "msg" => $errtis );
                $DB->close();
                exit( json_encode($data) );
            }

            if( strtotime($row["dhtime"]) < strtotime(date("Y-m-d H:i:s")) ) 
            {
                $data = array( "code" => -1, "msg" => $endtis );
                $DB->close();
                exit( json_encode($data) );
            }

            $data = array( "code" => 1, "msg" => "正版授权", "authcode" => cauthcode($host), "version" => $conf["version"], "buiid" => $conf["buiid"] );
            $DB->close();
            exit( json_encode($data) );
        }

        $data = array( "code" => -1, "msg" => $notauthtis );
        $DB->close();
        exit( json_encode($data) );
    default:
        exit( "{\"code\":-2,\"message\":\"NOT ACTION！\"}" );
}

