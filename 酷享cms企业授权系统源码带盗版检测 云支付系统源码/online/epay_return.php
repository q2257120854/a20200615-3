<?php
/* * 
 * 功能：酷享云支付页面跳转同步通知页面
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。
*/

require_once("epay.config.php");
require_once("lib/epay_notify.class.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
//计算得出通知验证结果
$alipayNotify = new AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyReturn();
if($verify_result) {

    //验证成功

	//商户订单号 

	$out_trade_no = $_GET['out_trade_no'];

	//支付宝交易号

	$trade_no = $_GET['trade_no'];

	//交易状态
	$trade_status = $_GET['trade_status'];

	//支付方式 
	$type = $_GET['type'];

    //状态 
    $row = $DB->get_row("SELECT * FROM `ku_order` WHERE `out_trade_no` = '$out_trade_no'");
    $tabet=date("Y-m-d",strtotime("+12 month"));
    if($_GET['trade_status'] == 'TRADE_SUCCESS') {
        if ($row['status'] == 0){
          $sql = "insert into `ku_author` (`kuhost`,`ku_qq`,`operation`,`addtime`,`dhtime`,`channel`,`state`) values ('".$row['url']."','".$row['qq']."','".$row['username']."','".$date."','".$tabet."','1','1')";
        if ($DB->query($sql)) {
             /***************************授权***记录*******************************************************/
            $DB->query("insert into `ku_power` (`out_trade_no`,`name`,`addtime`,`url`,`money`,`dhtime`,`type`,`endtime`,`username`,`status`) values ('".$row['out_trade_no']."','".$row['name']."','".$row['addtime']."','".$row['url']."','".$row['money']."','".$tabet."','".$type."','".$date."','".$row['username']."','1')");
                   /*********************************************************************************************/
          echo '<script>alert("购买授权成功！");window.location.href="../user/recharge.html"</script>';

        }else{
        echo '<script>alert("购买授权失败！");window.location.href="../user/recharge.html"</script>';
        } 
            $DB->query("UPDATE `ku_order` SET `trade_no` = '$trade_no',`state` = 1,`status` = 1,`type` ='{$type}',`endtime` ='{$date}' WHERE `out_trade_no` = '$out_trade_no'");  
            }
        }else{
      echo "trade_status=".$_GET['trade_status'];
    }
    
}else{
    echo "验证失败";
}
?>
<title><?=$conf['title']?></title>
	</head>
    <body>
    </body>
</html>