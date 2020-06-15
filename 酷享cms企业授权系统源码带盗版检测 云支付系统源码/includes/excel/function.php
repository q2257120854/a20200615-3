<?php 
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

function tb_update($host, $qq, $set)
{
    global $conf;
    if( empty($conf["apiautodata"]) || $conf["apiautodata"] == 0 ) 
    {
        return false;
    }

    $apiurl = $conf["apiurl"];
    $url = $apiurl . "api.php?act=data_update";
    $post = "token=" . $conf["serverapi"] . "&host=" . $host . "&qq=" . $qq . "&set=" . urlencode($set);
    $ret = get_curl($url, $post);
    $ret = json_decode($ret, true);
    systemlog(3, "【修改授权】远程同步数据：" . $ret["msg"]);
}

function tb_delete($host, $qq)
{
    global $conf;
    if( empty($conf["apiautodata"]) || $conf["apiautodata"] == 0 ) 
    {
        return false;
    }

    $apiurl = $conf["apiurl"];
    $url = $apiurl . "api.php?act=data_delete";
    $post = "token=" . $conf["serverapi"] . "&host=" . $host . "&qq=" . $qq;
    $ret = get_curl($url, $post);
    $ret = json_decode($ret, true);
    systemlog(3, "【删除授权】远程同步数据：" . $ret["msg"]);
}

function tb_add($data)
{
    global $conf;
    if( empty($conf["apiautodata"]) || $conf["apiautodata"] == 0 ) 
    {
        return false;
    }

    $hostdata = array(  );
    array_push($hostdata, $data);
    $apiurl = $conf["apiurl"];
    $url = $apiurl . "api.php?act=data_save";
    $post = "token=" . $conf["serverapi"] . "&data=" . json_encode($hostdata);
    $ret = get_curl($url, $post);
    $ret = json_decode($ret, true);
    systemlog(3, "【添加授权】远程同步数据：" . $ret["msg"]);
}

function curPageURL()
{
    $pageURL = "http";
    if( $_SERVER["HTTPS"] == "on" ) 
    {
        $pageURL .= "s";
    }

    $pageURL .= "://";
    if( $_SERVER["SERVER_PORT"] != "80" ) 
    {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    }
    else
    {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }

    return $pageURL;
}

function getkm($qz, $len = 18)
{
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $strlen = strlen($str);
    $randstr = $qz;
    $i = 0;
    while( $i < $len ) 
    {
        $randstr .= $str[mt_rand(0, $strlen - 1)];
        $i++;
    }
    return $randstr;
}

function index_daili_lv($lv)
{
    if( $lv == 0 ) 
    {
        return "<span>普通会员</span>";
    }

    if( $lv == 1 ) 
    {
        return "<span style=\"color:#008000\">普通代理</span>";
    }

    if( $lv == 2 ) 
    {
        return "<span style=\"color:#006400\">高级代理</span>";
    }

    if( $lv == 3 ) 
    {
        return "<span style=\"color:#436EEE\">钻石代理</span>";
    }

    return NULL;
}

function daili_lv($lv)
{
    if( $lv == 0 ) 
    {
        return "<span class=\"label label-primary\" >普通会员</span>";
    }

    if( $lv == 1 ) 
    {
        return "<span class=\"label label-primary\" >普通代理</span>";
    }

    if( $lv == 2 ) 
    {
        return "<span class=\"label label-success\" >高级代理</span>";
    }

    if( $lv == 3 ) 
    {
        return "<span class=\"label label-warning\" >钻石代理</span>";
    }

    return NULL;
}

function admin_lv($lv)
{
    if( $lv == 0 ) 
    {
        return "<span class=\"label label-danger\" style=\"color:  #FFFFFF\">BOOS</span>";
    }

    if( $lv == 1 ) 
    {
        return "<span class=\"label label-success\" style=\"color:#FFFFFF\">普通管理</span>";
    }

    if( $lv == 2 ) 
    {
        return "<span class=\"label label-success\" style=\"color:#FFFFFF\">高级代理</span>";
    }

    if( $lv == 3 ) 
    {
        return "<span class=\"label label-success\" style=\"color:#FFFFFF\">钻石代理</span>";
    }

    if( $lv == 4 ) 
    {
        return "<span class=\"label label-success\" style=\"color:#FFFFFF\">前台授权</span>";
    }

    if( $lv == 5 ) 
    {
        return "<span class=\"label label-success\" style=\"color:#FFFFFF\">会员授权</span>";
    }

    return NULL;
}

function daili_lvbt($lv)
{
    if( $lv == 1 ) 
    {
        return "普通代理";
    }

    if( $lv == 2 ) 
    {
        return "高级代理";
    }

    if( $lv == 3 ) 
    {
        return "钻石代理";
    }

    return NULL;
}

function daili_sta($sta)
{
    if( $sta == 0 ) 
    {
        return "<span class=\"label label-success\">正常</span>";
    }

    if( $sta == 1 ) 
    {
        return "<span class=\"label label-danger\">封禁</span>";
    }

    if( $sta == 2 ) 
    {
        return "<span class=\"label label-danger\">冻结</span>";
    }

    return NULL;
}

function complain_zt($lain)
{
    if( $lain == NULL ) 
    {
        return "";
    }

    if( $lain == 0 ) 
    {
        return "<span class=\"label label-danger\">待处理</span>";
    }

    if( $lain == 1 ) 
    {
        return "<span class=\"label label-warning\">已回复</span>";
    }

    if( $lain == 2 ) 
    {
        return "<span class=\"label label-success\">已完成</span>";
    }

    return NULL;
}

function complain_sta($sta)
{
    if( $sta == NULL ) 
    {
        return "";
    }

    if( $sta == 0 ) 
    {
        return "<span class=\"label label-success\">BUG反馈</span>";
    }

    if( $sta == 1 ) 
    {
        return "<span class=\"label label-danger\">账号问题</span>";
    }

    if( $sta == 2 ) 
    {
        return "<span class=\"label label-danger\">代理问题</span>";
    }

    if( $sta == 3 ) 
    {
        return "<span class=\"label label-default\">订单问题</span>";
    }

    if( $sta == 4 ) 
    {
        return "<span class=\"label label-info\">授权问题</span>";
    }

    if( $sta == 5 ) 
    {
        return "<span class=\"label label-primary\">其他建议</span>";
    }

    return NULL;
}

function Article_type($sta)
{
    if( $sta == 0 ) 
    {
        return "<span class=\"label label-default btn-xs\">案例中心</span>";
    }

    if( $sta == 1 ) 
    {
        return "<span class=\"label label-info\">更新日志</span>";
    }

    if( $sta == 2 ) 
    {
        return "<span class=\"label label-primary\">广告栏目</span>";
    }

    return NULL;
}

function widesue_type($sta)
{
    if( $sta == 0 ) 
    {
        return "<span class=\"label label-default btn-xs\">首页轮图</span>";
    }

    if( $sta == 1 ) 
    {
        return "<span class=\"label label-info\">产品介绍</span>";
    }

    if( $sta == 2 ) 
    {
        return "<span class=\"label label-primary\">案例中心轮图</span>";
    }

    return NULL;
}

function Article_state($sta)
{
    if( $sta == 0 ) 
    {
        return "<span class=\"label label-success\">显示</span>";
    }

    if( $sta == 1 ) 
    {
        return "<span class=\"label label-danger\">不显示</span>";
    }

    return NULL;
}

function user_sta($sta)
{
    if( $sta == 0 ) 
    {
        return "<span class=\"label label-success\">超级管理</span>";
    }

    if( $sta == 1 ) 
    {
        return "<span class=\"label label-danger\">平台管理</span>";
    }

    if( $sta == 2 ) 
    {
        return "<span class=\"label label-danger\">授权管理</span>";
    }

    if( $sta == 3 ) 
    {
        return "<span class=\"label label-primary\">高级管理</span>";
    }

    if( $sta == 4 ) 
    {
        return "<span class=\"label label-primary\">财务管理</span>";
    }

    return NULL;
}

function user_zt($zt)
{
    if( $zt == 0 ) 
    {
        return "<span class=\"label label-success\">正常</span>";
    }

    if( $zt == 1 ) 
    {
        return "<span class=\"label label-danger\">封禁</span>";
    }

    return NULL;
}

function kami_log($log)
{
    if( $log == 0 ) 
    {
        return "<span class=\"label label-success\">正常</span>";
    }

    if( $log == 1 ) 
    {
        return "<span class=\"label label-danger\">异常</span>";
    }

    if( $log == 2 ) 
    {
        return "<span class=\"label label-info\">无效</span>";
    }

    return NULL;
}

function kami_sta($sta)
{
    if( $sta == 0 ) 
    {
        return "<span class=\"label label-success\">未使用</span>";
    }

    if( $sta == 1 ) 
    {
        return "<span class=\"label label-danger\">已使用</span>";
    }

    if( $sta == 2 ) 
    {
        return "<span class=\"label label-info\">已封禁</span>";
    }

    return NULL;
}

function host_sta($sta)
{
    if( $sta == 1 ) 
    {
        return "<span class=\"label label-success\">正常</span>";
    }

    if( $sta == 0 ) 
    {
        return "<span class=\"label label-info\">冻结</span>";
    }

    if( $sta == 2 ) 
    {
        return "<span class=\"label label-danger\">封禁</span>";
    }

    return NULL;
}

function auth_sta($sta)
{
    if( $sta == 1 ) 
    {
        return "<span class=\"label label-success\">支付授权</span>";
    }

    if( $sta == 0 ) 
    {
        return "<span class=\"label label-info\">卡密授权</span>";
    }

    if( $sta == 2 ) 
    {
        return "<span class=\"label label-primary\">手动授权</span>";
    }

    return NULL;
}

function zhifu_sta($sta)
{
    if( $sta == alipay ) 
    {
        return "<span class=\"label label-info\">支付宝</span>";
    }

    if( $sta == qqpay ) 
    {
        return "<span class=\"label label-info\">QQ支付</span>";
    }

    if( $sta == wxpay ) 
    {
        return "<span class=\"label label-primary\">微信支付</span>";
    }

    return NULL;
}

function zhuantai_sta($sta)
{
    if( $sta == 0 ) 
    {
        return "<span class=\"label label-danger\">未支付</span>";
    }

    if( $sta == 1 ) 
    {
        return "<span class=\"label label-success\">已支付</span>";
    }

    return NULL;
}

function zhuantai_cz($sta)
{
    if( $sta == 0 ) 
    {
        return "<span class=\"label label-danger\">未完成</span>";
    }

    if( $sta == 1 ) 
    {
        return "<span class=\"label label-success\">已完成</span>";
    }

    if( $sta == 2 ) 
    {
        return "<span class=\"label label-primary\">已退款</span>";
    }

    if( $sta == 3 ) 
    {
        return "<span class=\"label label-danger\">充值失败</span>";
    }

    return NULL;
}

function user_lv_zt($sta)
{
    if( $sta == 0 ) 
    {
        return "<span class=\"label label-success\">已完成</span>";
    }

    if( $sta == 1 ) 
    {
        return "<span class=\"label label-success\">佣金入账</span>";
    }

    if( $sta == 2 ) 
    {
        return "<span class=\"label label-primary\">佣金退回</span>";
    }

    if( $sta == 3 ) 
    {
        return "<span class=\"label label-danger\">交易无效</span>";
    }

    return NULL;
}

function pay_lv($sta)
{
    if( $sta == 0 ) 
    {
        return "<span class=\"label label-primary\">待处理</span>";
    }

    if( $sta == 1 ) 
    {
        return "<span class=\"label label-success\">处理成功</span>";
    }

    if( $sta == 2 ) 
    {
        return "<span class=\"label label-info\">提现驳回</span>";
    }

    if( $sta == 3 ) 
    {
        return "<span class=\"label label-danger\">提现冻结</span>";
    }

    return NULL;
}

function cauthcode($host)
{
    $authcode = md5(AUTH_MD5_KEY . "-" . $host);
    return $authcode;
}

function get_curl($url, $post = 0, $referer = 0, $cookie = 0, $header = 0, $ua = 0, $nobaody = 0)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    $httpheader[] = "Accept:*/*";
    $httpheader[] = "Accept-Encoding:gzip,deflate,sdch";
    $httpheader[] = "Accept-Language:zh-CN,zh;q=0.8";
    $httpheader[] = "Connection:close";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    if( $post ) 
    {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }

    if( $header ) 
    {
        curl_setopt($ch, CURLOPT_HEADER, true);
    }

    if( $cookie ) 
    {
        curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    }

    if( $referer ) 
    {
        if( $referer == 1 ) 
        {
            curl_setopt($ch, CURLOPT_REFERER, "http://m.qzone.com/infocenter?g_f=");
        }
        else
        {
            curl_setopt($ch, CURLOPT_REFERER, $referer);
        }

    }

    if( $ua ) 
    {
        curl_setopt($ch, CURLOPT_USERAGENT, $ua);
    }
    else
    {
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 4.4.2; NoxW Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/30.0.0.0 Mobile Safari/537.36");
    }

    if( $nobaody ) 
    {
        curl_setopt($ch, CURLOPT_NOBODY, 1);
    }

    curl_setopt($ch, CURLOPT_ENCODING, "gzip");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $ret = curl_exec($ch);
    curl_close($ch);
    return $ret;
}

function curl_get($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; U; Android 4.4.1; zh-cn; R815T Build/JOP40D) AppleWebKit/533.1 (KHTML, like Gecko)Version/4.0 MQQBrowser/4.5 Mobile Safari/533.1");
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
}

function GetHttpStatusCode($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 1);
    curl_setopt($curl, CURLOPT_NOBODY, 1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 30);
    curl_exec($curl);
    $rtn = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    return $rtn;
}

function real_ip()
{
    $ip = $_SERVER["REMOTE_ADDR"];
    if( isset($_SERVER["HTTP_X_FORWARDED_FOR"]) && preg_match_all("#\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}#s", $_SERVER["HTTP_X_FORWARDED_FOR"], $matches) ) 
    {
        foreach( $matches[0] as $xip ) 
        {
            if( !preg_match("#^(10|172\\.16|192\\.168)\\.#", $xip) ) 
            {
                $ip = $xip;
                break;
            }

        }
    }
    else
    {
        if( isset($_SERVER["HTTP_CLIENT_IP"]) && preg_match("/^([0-9]{1,3}\\.){3}[0-9]{1,3}\$/", $_SERVER["HTTP_CLIENT_IP"]) ) 
        {
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        else
        {
            if( isset($_SERVER["HTTP_CF_CONNECTING_IP"]) && preg_match("/^([0-9]{1,3}\\.){3}[0-9]{1,3}\$/", $_SERVER["HTTP_CF_CONNECTING_IP"]) ) 
            {
                $ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
            }
            else
            {
                if( isset($_SERVER["HTTP_X_REAL_IP"]) && preg_match("/^([0-9]{1,3}\\.){3}[0-9]{1,3}\$/", $_SERVER["HTTP_X_REAL_IP"]) ) 
                {
                    $ip = $_SERVER["HTTP_X_REAL_IP"];
                }

            }

        }

    }

    return $ip;
}

function get_qqnick($uin)
{
    if( $data = file_get_contents("http://users.qzone.qq.com/fcg-bin/cgi_get_portrait.fcg?get_nick=1&uins=" . $uin) ) 
    {
        $data = str_replace(array( "portraitCallBack(", ")" ), array( "", "" ), $data);
        $data = mb_convert_encoding($data, "UTF-8", "GBK");
        $row = json_decode($data, true);
        return $row[$uin][6];
    }

    return NULL;
}

function get_ip_city($ip)
{
    $url = "http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip=";
    $city = @get_curl($url . $ip);
    $city = json_decode($city, true);
    if( $city["city"] ) 
    {
        $location = $city["province"] . $city["city"];
    }
    else
    {
        $location = $city["province"];
    }

    if( $location ) 
    {
        return $location;
    }

    return false;
}

function str_filter($str)
{
    $str = str_replace(">", "", $str);
    $str = str_replace("/", "", $str);
    $str = str_replace("\\", "", $str);
    $str = str_replace("<", "", $str);
    $str = str_replace(":", "", $str);
    $str = str_replace("'", "", $str);
    $str = str_replace(" ", "", $str);
    $str = str_replace("=", "", $str);
    $str = str_replace("||", "", $str);
    $str = str_replace("-", "", $str);
    $str = str_replace("#", "", $str);
    $str = str_replace("*", "", $str);
    $str = str_replace("?", "", $str);
    return $str;
}

function systemlog($type = 1, $txt)
{
    $sql = "insert into auth_zzi_log(log_type,log_time,log_ip,log_text,log_read)" . "values(" . $type . ",now(),'" . real_ip() . "','" . $txt . "',0)";
    global $DB;
    $DB->query($sql);
}

function send_email($to, $etitle = "5G云资源", $msg = "酷享云授权站")
{
    global $conf;
    if( $conf["mail_stmp"] && $conf["mail_port"] && $conf["mail_pwd"] && $conf["mail_port"] ) 
    {
        include(SYSTEM_ROOT . "smtp.class.php");
        $ssl = ($conf["mail_port"] == 465 ? true : false);
        $x = new SMTP($conf["mail_stmp"], $conf["mail_port"], true, $conf["mail_name"], $conf["mail_pwd"], $ssl);
        if( $x->send($to, $conf["mail_name"], $etitle, $msg, $conf["sitename"]) ) 
        {
            $data = array( "code" => 1, "msg" => "发送成功！" );
        }
        else
        {
            $data = array( "code" => -1, "msg" => $x->log );
        }

    }
    else
    {
        $data = array( "code" => -1, "msg" => "系统发件邮箱还未配置" );
    }

    return $data;
}

function daddslashes($string, $force = 0, $strip = false)
{
    !defined("MAGIC_QUOTES_GPC") and define("MAGIC_QUOTES_GPC", get_magic_quotes_gpc());
    if( !MAGIC_QUOTES_GPC || $force ) 
    {
        if( is_array($string) ) 
        {
            foreach( $string as $key => $val ) 
            {
                $string[$key] = daddslashes($val, $force, $strip);
            }
        }
        else
        {
            $string = addslashes(($strip ? stripslashes($string) : $string));
        }

    }

    return $string;
}

function strexists($string, $find)
{
    return strpos($string, $find) !== false;
}

function dstrpos($string, $arr)
{
    if( empty($string) ) 
    {
        return false;
    }

    foreach( (array) $arr as $v ) 
    {
        if( strpos($string, $v) !== false ) 
        {
            return true;
        }

    }
    return false;
}

function checkmobile()
{
    $useragent = strtolower($_SERVER["HTTP_USER_AGENT"]);
    $ualist = array( "android", "midp", "nokia", "mobile", "iphone", "ipod", "blackberry", "windows phone" );
    if( dstrpos($useragent, $ualist) || strexists($_SERVER["HTTP_ACCEPT"], "VND.WAP") || strexists($_SERVER["HTTP_VIA"], "wap") ) 
    {
        return true;
    }

    return false;
}

function authcode($string, $operation = "DECODE", $key = "", $expiry = 0)
{
    $ckey_length = 4;
    $key = md5(($key ? $key : ENCRYPT_KEY));
    $keya = md5(substr($key, 0, 16));
    $keyb = md5(substr($key, 16, 16));
    $keyc = ($ckey_length ? ($operation == "DECODE" ? substr($string, 0, $ckey_length) : substr(md5(microtime()), 0 - $ckey_length)) : "");
    $cryptkey = $keya . md5($keya . $keyc);
    $key_length = strlen($cryptkey);
    $string = ($operation == "DECODE" ? base64_decode(substr($string, $ckey_length)) : sprintf("%010d", ($expiry ? $expiry + time() : 0)) . substr(md5($string . $keyb), 0, 16) . $string);
    $string_length = strlen($string);
    $result = "";
    $box = range(0, 255);
    $rndkey = array(  );
    $i = 0;
    while( $i <= 255 ) 
    {
        $rndkey[$i] = ord($cryptkey[$i % $key_length]);
        $i++;
    }
    $j = $i = 0;
    while( $i < 256 ) 
    {
        $j = ($j + $box[$i] + $rndkey[$i]) % 256;
        $tmp = $box[$i];
        $box[$i] = $box[$j];
        $box[$j] = $tmp;
        $i++;
    }
    $a = $j = $i = 0;
    while( $i < $string_length ) 
    {
        $a = ($a + 1) % 256;
        $j = ($j + $box[$a]) % 256;
        $tmp = $box[$a];
        $box[$a] = $box[$j];
        $box[$j] = $tmp;
        $result .= chr(ord($string[$i]) ^ $box[($box[$a] + $box[$j]) % 256]);
        $i++;
    }
    if( $operation == "DECODE" ) 
    {
        if( (substr($result, 0, 10) == 0 || 0 < substr($result, 0, 10) - time()) && substr($result, 10, 16) == substr(md5(substr($result, 26) . $keyb), 0, 16) ) 
        {
            return substr($result, 26);
        }

        return "";
    }

    return $keyc . str_replace("=", "", base64_encode($result));
}

function random($length, $numeric = 0)
{
    $seed = base_convert(md5(microtime() . $_SERVER["DOCUMENT_ROOT"]), 16, ($numeric ? 10 : 35));
    $seed = ($numeric ? str_replace("0", "", $seed) . "012340567890" : $seed . "zZ" . strtoupper($seed));
    $hash = "";
    $max = strlen($seed) - 1;
    $i = 0;
    while( $i < $length ) 
    {
        $hash .= $seed[mt_rand(0, $max)];
        $i++;
    }
    return $hash;
}

function showmsg($content = "未知的异常", $type = 4, $back = false)
{
    switch( $type ) 
    {
        case 1:
            $panel = "success";
            break;
        case 2:
            $panel = "info";
            break;
        case 3:
            $panel = "warning";
            break;
        case 4:
            $panel = "danger";
            break;
    }
    echo "<div class=\"panel panel-" . $panel . "\">\r\n      <div class=\"panel-heading\">\r\n        <h3 class=\"panel-title\">提示信息</h3>\r\n        </div>\r\n        <div class=\"panel-body\">";
    echo $content;
    if( $back ) 
    {
        echo "<hr/><a href=\"" . $back . "\"><< 返回上一页</a>";
    }
    else
    {
        echo "<hr/><a href=\"javascript:history.back(-1)\"><< 返回上一页</a>";
    }

    echo "</div>\r\n    </div>";
    exit();
}

function sysmsg($msg = "未知的异常", $die = true)
{
    echo "  \r\n <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n<head>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n<title>";
    echo $conf["title"];
    echo "-错误提示</title>\r\n<meta name=\"description\" content=\"";
    echo $conf["description"];
    echo "\" />\r\n<style type=\"text/css\">\r\nhtml{background:url(public/images/paper.jpg)!important;}\r\na,fieldset,img{border:0;}\r\na{color:#221919;text-decoration:none;outline:none;}\r\na:hover{color:#3366cc;text-decoration:underline;}\r\nbody{font-size:24px;color:#B7AEB4;}\r\nbody a.link,body h1,body p{-webkit-transition:opacity 0.5s ease-in-out;-moz-transition:opacity 0.5s ease-in-out;transition:opacity 0.5s ease-in-out;}\r\n#wrapper{text-align:center;margin:100px auto;width:594px;}\r\na.link{text-shadow:0px 1px 2px white;font-weight:600;color:#3366cc;opacity:0;}\r\nh1{text-shadow:0px 1px 2px white;font-size:24px;opacity:0;}\r\nimg{-webkit-transition:opacity 1s ease-in-out;-moz-transition:opacity 1s ease-in-out;transition:opacity 1s ease-in-out;height:202px;width:199px;opacity:0;}\r\np{text-shadow:0px 1px 2px white;font-weight:normal;font-weight:200;opacity:0;}\r\n.fade{opacity:1;}\r\n@media only screen and (min-device-width:320px) and (max-device-width:480px){\r\n    #wrapper{margin:40px auto;text-align:center;width:280px;}\r\n}\r\n</style>\r\n<script type=\"text/javascript\" src=\"public/js/jquery-1.4.2.min.js\"></script>\r\n<script type=\"text/javascript\">\r\n\$(document).ready(function(){\r\n    if (!\$.browser.msie){\r\n        \$(\"img\").addClass('fade').delay(800).queue(function(next){\r\n            \$(\"h1, p\").addClass(\"fade\");\r\n            \$(\"a.link\").css(\"opacity\", 1);\r\n            next();\r\n        });\r\n    }else{\r\n        \$(\"img, h1, p\").addClass('fade');\r\n        \$('a.link').css('opacity', 1);\r\n    }\r\n});\r\n</script>\r\n</head>\r\n<body>\r\n    <div id=\"wrapper\">\r\n        <a href=\"./\"><img src=\"public/images/404_icon.png\"></a>\r\n        <div>   \r\n         <p><h1>唉呀出错了!</h1>";
    echo $msg;
    echo "</p>\r\n            <a class=\"link\" href=\"./\" onclick=\"history.go(-1)\"><span id=\"sec\">5</span> 秒后返回首页</a>\r\n            <br /><br /><br />\r\n            <a class=\"link\" href=\"./\">访问首页</a>\r\n        </div>\r\n    </div>\r\n    \r\n    <script type=\"text/javascript\">\r\n    \$(function () {            \r\n       setTimeout(\"lazyGo();\", 1000);\r\n    });\r\n    function lazyGo() {\r\n        var sec = \$(\"#sec\").text();\r\n        \$(\"#sec\").text(--sec);\r\n        if (sec > 0)\r\n            setTimeout(\"lazyGo();\", 1000);\r\n        else\r\n            window.location.href = \"./\";\r\n    }\r\n    </script>\r\n\r\n    \r\n</body>\r\n</html>\r\n    ";
    if( $die == true ) 
    {
        exit();
    }

    return NULL;
}

function checkIfActive($string)
{
    $array = explode(",", $string);
    $php_self = substr($_SERVER["REQUEST_URI"], strrpos($_SERVER["REQUEST_URI"], "/") + 1, strrpos($_SERVER["REQUEST_URI"], ".") - strrpos($_SERVER["REQUEST_URI"], "/") - 1);
    if( in_array($php_self, $array) ) 
    {
        return "active";
    }

    return NULL;
}


