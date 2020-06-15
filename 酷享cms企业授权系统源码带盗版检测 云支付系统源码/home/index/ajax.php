<?php
$fromurl="/";  
if( $_SERVER['HTTP_REFERER'] == "" )
{
header("Location:".$fromurl); exit;
}
include '../../includes/common.php';
$act = isset($_GET['act']) ? daddslashes($_GET['act']) : null;
@header('Content-Type: application/json; charset=UTF-8');
switch ($act){
case 'shouquan':
$verifycode = 1;
if(!function_exists("imagecreate") || !file_exists('../../code.php'))$verifycode=0;
    $kuhost=daddslashes($_POST['kuhost']);
	$ku_qq=daddslashes($_POST['ku_qq']);
	$carmine=daddslashes($_POST['carmine']);
	$code=daddslashes($_POST['code']);
    /*******************ip*****************************/
    $userip = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
    $userip = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];
/************************************************/
	$payrow = $DB->get_row("select * from ku_carmine where carmine = '$carmine'");
	$tsrow = $DB->get_row("select * from ku_author der where ku_qq = '$ku_qq' and kuhost='$kuhost'");
	$tabet=date("Y-m-d",strtotime("+12 month"));
	if ($verifycode==1 && (!$code || strtolower($code) != $_SESSION['vc_code'])) {
		unset($_SESSION['vc_code']);
		$data = array("code"=>-1,"msg"=>"验证码错误！");
            exit(json_encode($data));
	}
    if ($tsrow['kuhost']==$kuhost) {
    	 $data = array("code"=>-1,"msg"=>"域名已经授权，切勿重复授权！");
            exit(json_encode($data));
    }else{
    if ($payrow['status']==1) {
      $data = array("code" => 1,"msg" => "无效卡密，已经被使用！");
            exit(json_encode($data));   
        }elseif ($payrow['status']==2) {
          $data = array("code" => 1,"msg" => "卡密状态封禁，授权失败！");
            exit(json_encode($data));  
        }    
   if ($payrow['carmine']==$carmine) {
    $DB->query("UPDATE `ku_carmine` SET  `sytiem` = '$date',`status` = 1 WHERE `carmine` = '$carmine'"); 
    $sql = "insert into `ku_author` (`kuhost`,`ku_qq`,`operation`,`addtime`,`dhtime`,`channel`,`state`) values ('".$kuhost."','".$ku_qq."','".$ku_qq."','".$date."','".$tabet."','0','1')";
 if ($DB->query($sql)) {

$DB->query("insert into `ku_carmlog` (`kuhost`,`carmine`,`ku_qq`,`addtime`,`ip`,`username`,`operator`,`status`) values ('".$kuhost."','".$carmine."','".$ku_qq."','".$date."','".$userip."','".$payrow['operator']."','".$ku_qq."','0')");

  $data = array("code" => 1,"msg" => "授权成功！请联系客服下载商业版程序源码，授权到期时间：".$tabet);
            exit(json_encode($data));	
 }else{
    $DB->query("insert into `ku_carmlog` (`kuhost`,`carmine`,`ku_qq`,`addtime`,`ip`,`username`,`operator`,`status`) values ('".$kuhost."','".$carmine."','".$ku_qq."','".$date."','".$userip."','".$payrow['operator']."','".$ku_qq."','1')");
 $data = array("code"=>-1,"msg"=>"授权失败，请保存好卡密并联系客服处理！");
            exit(json_encode($data));
 } 		
}else{
$data = array("code"=>-1,"msg"=>"卡密不存在，请重新输入！");
            exit(json_encode($data));

}	
 }   
break;
case 'cha':
$kuhost=daddslashes($_POST['number']);
$cxrow = $DB->get_row("select * from ku_author der where kuhost = '$kuhost'");
$payrow = $DB->get_row("select * from ku_order where out_trade_no = '$kuhost' and status ='1' and state='1' ");
if(is_numeric($_POST['number'])){
if (!$payrow) {
$data = array("code"=>-1);
exit(json_encode($data));
}else{
$data = array("code"=>1);
exit(json_encode($data));
}
}else{
if (!$cxrow) {
$data = array("code"=>-1);
exit(json_encode($data));
}else{
$data = array("code"=>1);
exit(json_encode($data));
}
}
break;
}