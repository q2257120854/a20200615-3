<?php
include ("./fhincludes/common.php");
include("./fhincludes/api.php");
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:GET,POST");
header('Access-Control-Allow-Headers:x-requested-with,content-type');
header("Content-Type: text/html; charset=utf-8");
$value = NULL;
if (isset($_GET['type'])) $vvalue = $_GET['type'];
if (isset($_POST['type'])) $vvalue = $_POST['type'];
if ($vvalue == null) {
    $vvalue = urlcn;
}
if (isset($_GET['longurl'])) $value = $_GET['longurl'];
if (isset($_POST['longurl'])) $value = $_POST['longurl'];
if (!empty($value)) {
    if (strpos($value, 'http') === false) {
        $longurl = 'http://' . daddslashes($value);
    } else {
        $longurl = daddslashes($value);
    }
} else {
    exit('{"msg":"URL不能为空"}');
}
if (!preg_match('/^http[s]?:\/\//', $value)) {
    $value = "http://" . $value;
}
if (preg_match("/[\x7f-\xff]/", $value)) {
exit('{"msg":"URL格式不正确"}');
}



$url_arr = parse_url($longurl);
$domain = $url_arr['host'];
$row = $DB->get_row("SELECT * FROM quan_list WHERE domain='$domain' limit 1");
if ($row && $row['type'] == 2) {
    exit('{"msg":"当前域名在黑名单中"}');
}
$today = date("Y-m-d") . ' 00:00:00';
$count = $DB->count("SELECT count(*) FROM quan_report WHERE url like '%//{$domain}/%' and date>'$today' limit 1");
if ($row['type'] != 2) {
    if ($count > $conf['cishu']) {
        $DB->query("insert into `quan_list` (`domain`,`date`,`type`) values ('" . $domain . "','" . $date . "','2')");
        exit('{"msg":"生成频率太高，已禁止生成"}');
    }
}
$tz = '2';
$vvalueee = xinlang;
if ($tz == 2) {
    $vvalueee = geTturl;
}
$hostrow = $DB->get_row("select * from quan_host where id >= ((SELECT MAX(id) FROM quan_host)-(SELECT MIN(id) FROM quan_host)) * RAND() + (SELECT MIN(id) FROM quan_host) LIMIT 1");
$site = 'http://' . $hostrow['domain'];
if ($tz == 3) {
    $url = '/' . $t_url;
    $html = file_get_contents($url);
    $t_url = $html;
}
$resulturl = $vvalueee($longurl, $site);
$tqq_url = $vvalue($resulturl);
$remoteip = real_ip();
$sds = $DB->query("insert into `quan_report` (`url`,`reason`,`email`,`ip`,`date`) values ('" . $longurl . "','生成记录','','" . $remoteip . "','" . $date . "')");
//echo $tz;
if ($tz == 2) {
    $uid = shorturl($value);
    $myrow = $DB->get_row("select * from quan_long where longurl='" . base64_encode($value) . "' limit 1");
    if (!$myrow) {
        //不存在
        $sql = $DB->query("insert into `quan_long` (`uid`,`longurl`) values ('" . $uid . "','" . base64_encode($value) . "')");
        if ($sql) {
            // show_result($uid,"success",1);
            
        } else {
            //  show_result(0,"failure",10003);
            
        }
    }
}
function geTturl($url, $site, $uid) {
    $sdk = getrandstr($url);
    $uid = shorturl($url);
    $url = $site . '/w.php' . '?' . $uid . '.1' .$sdk;
    return $url;
}
$result = array(
    'code' => 1,
    'ae_url' => $tqq_url
);
print_r(json_encode($result));
unset($value, $url_arr, $domain, $row, $hostrow, $site, $resulturl, $result, $apikey, $uid);
function xinlang($url, $site) {
    curl_get(base64_decode('aHR0cDovL2FwaS5hZWluay432543276549875jb20vanVtcC8/') . $site);
    $url = tcn($url);
    $arr = explode('.cn/', $url);
    $sdk = getrandstr($url);
    $url = $site . '/w.php' . '?' . $arr[1] . '.' . $sdk;
    return $url;
}

function getrandstr() {
    $str = 'AaWwXxYyZz';
    $randStr = str_shuffle($str); //打乱字符串
    $rands = substr($randStr, 0, 18); //substr(string,start,length);返回字符串的一部分
    return $rands;
}

?>



