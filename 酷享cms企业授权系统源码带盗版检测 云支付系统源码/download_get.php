<?php

include 'includes/common.php';

if(empty($_SESSION['logintoken']) || empty($_SESSION['loginqq']) || $_SESSION['logintoken']!=md5($_SESSION['loginqq']."/")) {
     exit("<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<script language='javascript'>alert('验证信息已过期，请返回重新扫码验证。');history.go(-1);</script>");
}
if(empty($_GET['type']) && ($_GET['type'] != "installer" && $_GET['type'] != "updater") ){
      exit("<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<script language='javascript'>alert('下载文件错误。');history.go(-1);</script>");;
}
$type = empty($_GET['type'])?exit():daddslashes($_GET['type']);
$qq = empty($_GET['qq'])?exit(): str_filter($_GET['qq']);
if($qq!=$_GET['qq']) exit;
$host = $DB->get_row("select ku_qq,addtime from ku_author where ku_qq = '$qq'");
if(!$host){
        exit("<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<script language='javascript'>alert('您的验证信息有误,请刷新页面重试。');history.go(-1);</script>");
}
$authcode = cauthcode($host['kuhost']);

// if($conf['down_iswurl'] == 1){
//     $html = '<!Doctype html>
// <html>
// <head>
// <meta charset="utf-8">
//  <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"  name="viewport" />
// <meta http-equiv="X-UA-Compatible" content="IE=edge"><title>获取下载地址成功</title></head><body >'
//             . '<div style="width:100%;margin: 0 auto;text-align: center;">'
//             . '<br><br><br><br><h2>恭喜您:'. get_qqnick($qq).'('.$qq.'),获取下载地址成功!</h2>'
//             . '<hr>'
//            .  $conf['down_w_url']
//              . '<hr>'
//             . '  <small>请尽快下载！'.$date.'</small></div>'
//             . '</body></html>';
//  exit($html);
// }


$file_real=substr($authcode,0,16).'.zip';
$file=CACHE_DIR."/{$file_real}";
require_once('includes/pclzip.php');
if($type=='installer') {  
    $file_path=ROOT.PACKAGE_DIR.'/installer870040075/';

    $file_str=file_get_contents(ROOT.PACKAGE_DIR.'/authcode.php');
    $file_str=str_replace('1000000001',$authcode,$file_str);
    file_put_contents($file_path.AUTHCODE_PATH.'/authcode.php',$file_str);

    $file_name=NAME_PY.'_release_'.rand(999,99999).'.zip';

}elseif($type=='updater') {
    $file_path=ROOT.PACKAGE_DIR.'/updater870040075/';

    $file_str=file_get_contents(ROOT.PACKAGE_DIR.'/authcode.php');
    $file_str=str_replace('1000000001',$authcode,$file_str);
    file_put_contents($file_path.AUTHCODE_PATH.'/authcode.php',$file_str);

    $file_name=NAME_PY.'_update_'.rand(999,99999).'.zip';
}

if(file_exists($file))unlink($file);
$zip = new PclZip($file);
$v_list = $zip->create($file_path ,PCLZIP_OPT_REMOVE_PATH,$file_path);

$file_size=filesize("$file");
header("Content-Description: File Transfer");
header("Content-Type:application/force-download");
header("Content-Length: {$file_size}");
header("Content-Disposition:attachment; filename={$file_name}");
readfile("$file");

