<?php
/* *
 * 功能：酷享云支付异步通知页面
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。
*/

require_once("epay.config.php");
require_once("lib/epay_notify.class.php");
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
/*
 * 计算得出通知验证结果
 * */

$alipayNotify = new AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyNotify();
#———————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
if($verify_result) {
    //验证成功
	
	//商户订单号
	$out_trade_no = $_GET['out_trade_no'];

	//易支付交易号
	$trade_no = $_GET['trade_no'];

	//交易状态
	$trade_status = $_GET['trade_status'];

	//支付方式
	$type = $_GET['type'];

    $authcode = md5(random(32).$qq);

	if ($_GET['trade_status'] == 'TRADE_SUCCESS') {
	    if ($row['status'] == 0){
	        $DB->query("UPDATE `ku_order` SET `trade_no` = '$trade_no',`status` = 1,`endtime` ='{$date}' WHERE `out_trade_no` = '$out_trade_no'");
        }
    }

	echo "success";		//请不要修改或删除

}
else {
    //验证失败
    echo "fail";
}
?>