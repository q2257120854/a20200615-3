<?php
$fromurl="./"; 
if( $_SERVER['HTTP_REFERER'] == "" )
{
header("Location:".$fromurl); exit;
}
include 'includes/common.php';
$act = isset($_GET['act']) ? daddslashes($_GET['act']) : null;
@header('Content-Type: application/json; charset=UTF-8');
include 'includes/db.biz.php';
$biz = new Biz();
switch ($act){
case 'complain':
$title = daddslashes($_POST['title']);
$type = daddslashes($_POST['Product']);
$content = daddslashes($_POST['comp']);
$qq = daddslashes($_POST['qq']);
$key =getkm(ku);
$user_IP = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
$user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];
$tsrow = $DB->get_row("select * from ku_complain where qq = '$qq' and status =  0 ");
$sql = "insert into `ku_complain` (`title`,`content`,`type`,`addtime`,`ip`,`qq`,`key`,`hfconte`,`hftime`,`name`,`status`) values ('".$title."','".$content."','".$type."','".$date."','".$user_IP."','".$qq."','".$key."','','','','')";
$thtis ="投诉提交成功,请保存好您的秘钥!".'<br>查询秘钥：'.$key;
if ($tsrow['qq']==$qq || $user_IP==$tsrow['ip'] ) {
	exit('{"code":-1,"msg":"你已经有提交投诉，请使用秘钥查询处理状态！"}');
}
if ($DB->query($sql)) {
 if(function_exists(send_email)){ 	
send_email($qq."@qq.com", "投诉提交成功", "恭喜您于".date("Y-m-d H:i:s")."!本次投诉查询秘钥：".$key.",请您保存好秘钥,方便查询投诉跟进状态！");
}                      
     $data = array("code" => 1,"msg"=>$thtis);
     exit(json_encode($data));
}else{
exit('{"code":-1,"msg":"提交投诉失败！"}');

}	

break;

case 'domain':
$host = daddslashes($_POST['ym']);
if (strexists($host, "http://")) {
	exit('{"code":-1,"msg":"域名无需输入http://！"}');
	$DB->close();
		exit(json_encode($data));
	}
	if (!strexists($host, ".")) {
	exit('{"code":-1,"msg":"域名格式疑似不正确！"}');
	$DB->close();
		exit(json_encode($data));
	}else {
		$row = $biz->query($host);
		if ($row) {
			if ($row['state'] != 1) {
				if ($row['state'] == 0) {
					exit('{"code":-1,"msg":"您的授权域名<font color=red>被冻结</font>,请联系客服处理！"}');
				} else if ($row['state'] == 2) {
					
					exit('{"code":-1,"msg":"您的授权域名<font color=red>被封禁</font>,请联系客服处理！"}');
				} else {
					
					exit('{"code":-1,"msg":"您的授权域名<font color=red>异常</font>！"}');
				}
			} else {
				if (strtotime($date) > strtotime($row['dhtime'])) {
					exit('{"code":-1,"msg":"您的域名授权<font color=red>已到期</font>，请联系客服续期！"}');
				} else {
					exit('{"code":1,"msg":"您的域名<font color=green>正版授权</font>,可使用本站正版程序！"}');
				}

			}

		} else {
			exit('{"code":-1,"msg":"<font color=red>此网站属于盗版系统！</font><br>友情提示：购买正版享受更多官方服务！"}');
		}

	}
	$DB->close();
	exit(json_encode($data));
break;

case 'sqepowe':
	$host = daddslashes(trim($_POST['kuhost']));
	$ku_qq = daddslashes(trim($_POST['ku_qq']));
	$km = daddslashes(trim($_POST['carmine']));
	if (strexists($host, "http://")) {
		exit('{"code":-1,"msg":"域名无需输入http://！"}');
		
		$DB->close();
		exit(json_encode($data));
	}
	if (!strexists($host, ".")) {
		exit('{"code":-1,"msg":"域名格式疑似不正确！"}');
		$DB->close();
		exit(json_encode($data));
	}
	if (substr_count($host, ".") == 1) {
		$data = array("code" => -1, "msg" => "授权顶级域名请加www");
		$DB->close();
		exit(json_encode($data));
	}
	$checkkm = $biz->checkkm($km);
		if ($checkkm['code'] != 1) {
			$DB->close();
			exit(json_encode($checkkm));
		} else {
			$checkhost = $biz->checkhost($host);
			if ($checkhost['code'] != 1) {
				$DB->close();
				exit(json_encode($checkhost));
			} else {
				$addauths = $biz->addauths($km, $ku_qq,$host);

				$DB->close();
				exit(json_encode($addauths));
			}
		}
	break;


    }
?>