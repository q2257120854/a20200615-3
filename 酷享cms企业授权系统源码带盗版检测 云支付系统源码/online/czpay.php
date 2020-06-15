<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?=$conf['title']?></title>
</head>
<?php
require_once("epay.config.php");
require_once("lib/epay_submit.class.php");
//类型选择

$coin=$_POST['coin'];
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
/*
 * 请求参数
 * */  
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
/*
 * 页面跳转同步通知页面路径
 * */
$notify_url = "http://".$_SERVER['HTTP_HOST']."/online/czpay_notify.php";
$return_url = "http://".$_SERVER['HTTP_HOST']."/online/czpay_return.php";
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
/*
 * 商户订单号
 * */
$out_trade_no = date("YmdHis").mt_rand(100,999);
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
/*
 * 支付方式
 * */
$type = $_POST['type'];
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
/*
 * 商品名称
 * */
$name = '金币充值';
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
/*
 * 付款金额
 * */
//类型价格
if ($coin==1) {
$money =$conf['coin_money']; //类型1
}elseif ($coin==2) {
$money =$conf['coin_money_1']; //类型2
}elseif ($coin==3) {
$money =$conf['coin_money_2']; //类型3
}
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
#金币数量
if ($coin==1) {
$coinjb =$conf['coin_nb']; //类型1
}elseif ($coin==2) {
$coinjb =$conf['coin_nb_1']; //类型2
}elseif ($coin==3) {
$coinjb =$conf['coin_nb_2']; //类型3
}
/*
 * 站点名称
 * */
$sitename = $conf['title'];
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
/*
 * 充值账号
 * */
$username = $_POST['username'];
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
//归属人
$ascription = $_POST['ascription'];
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
/*
 * 插入订单数据表sumption coin
 * */
$DB->query("insert into `ku_order` (`trade_no`,`out_trade_no`,`notify_url`,`return_url`,`type`,`name`,`username`,`ascription`,`money`,`coin`,`url`,`qq`,`addtime`) values ('kuyun".rand(100000,999999)."','$out_trade_no','$notify_url','$return_url','$type','$name','$username','$ascription','$money','$coinjb','$sq_url','$sq_qq','$date')");
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
/*
 * 构造要请求的参数数组，无需改动
 * */
$parameter = array(
		"pid" => trim($alipay_config['partner']),
		"type" => $type,
		"notify_url"	=> $notify_url,
		"return_url"	=> $return_url,
		"out_trade_no"	=> $out_trade_no,
		"name"	=> $name,
		"money"	=> $money,
		"sitename"	=> $sitename
);
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
/*
 * 建立请求
 * */
$alipaySubmit = new AlipaySubmit($alipay_config);
$html_text = $alipaySubmit->buildRequestForm($parameter);
echo $html_text;
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————

?>
</body>
</html>