<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?=$conf['title']?></title>
</head>
<?php

require_once("epay.config.php");
require_once("lib/epay_submit.class.php");
/*
 * 类别选择
 * */
$mayid = $_POST['mayid'];
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
/*
 * 请求参数
 * */
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
/*
 * 页面跳转同步通知页面路径
 * */
if ($mayid==0) {
$notify_url = "http://".$_SERVER['HTTP_HOST']."/online/epay_notify.php";
$return_url = "http://".$_SERVER['HTTP_HOST']."/online/epay_return.php";
}else{
$notify_url = "http://".$_SERVER['HTTP_HOST']."/online/epay_notify.php";
$return_url = "http://".$_SERVER['HTTP_HOST']."/online/getkai_return.php";	
}
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

#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
#
/* 
 * 商品名称
 * */
if ($mayid==0) {
$name = '购买商业授权版';
}else{
$name = '购买商业开源版';

}

#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
/*
 * 付款金额
 * */
if ($mayid==0) {
$money =$conf['pay_fee'];
}else{
$money =$conf['pay_fee_kai'];

}

#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
/*
 * 站点名称
 * */
$sitename = $conf['title'];
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
/*
 * 授权域名
 * */
$sq_url = $_POST['sq_url'];
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
//授权QQ
$sq_qq = $_POST['sq_qq'];
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
#用户账户
$username = $_POST['username'];
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
#查询
$trow = $DB->get_row("select * from ku_author der where kuhost = '$sq_url'");
//归属人
$ascription = $_POST['ascription'];
if ($mayid==0) {
if ($sq_url=='') {
@header('Content-Type: text/html; charset=UTF-8');
 exit("<script language='javascript'>alert('授权域名不能为空！');window.location.href='/user/recharge.html';</script>");	
}elseif ($trow['kuhost']==$sq_url) {
	@header('Content-Type: text/html; charset=UTF-8');
 exit("<script language='javascript'>alert('当前域名已经授权，请勿重复授权！');window.location.href='/user/recharge.html';</script>");
}
}
/*
 * 插入订单数据表sumption
 * */
$DB->query("insert into `ku_order` (`trade_no`,`out_trade_no`,`notify_url`,`return_url`,`type`,`name`,`username`,`ascription`,`money`,`url`,`qq`,`addtime`) values ('kuyun".rand(100000,999999)."','$out_trade_no','$notify_url','$return_url','$type','$name','$username','$ascription','$money','$sq_url','$sq_qq','$date')");
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