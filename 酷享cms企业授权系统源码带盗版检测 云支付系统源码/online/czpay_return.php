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
   $row_pay = $DB->get_row("SELECT * FROM `ku_order` WHERE `out_trade_no` = '$out_trade_no'");
   $chaus = "select * from ku_user where username = '{$row_pay['ascription']}'";
   $userztus = $DB->get_row($chaus);
    if (empty($userztus['user_belong_money'])) {
     if ($userztus['user_limit']==2) {
        $rat=$conf['user_gj_money'];//设置的返佣高级代理比例
      }elseif ($userztus['user_limit']==3) {
        $rat=$conf['user_zs_money'];//设置的返佣砖石代理比例
      }
     }else{
    $rat=$userztus['user_belong_money'];//设置的返佣比例
     }
    if($_GET['trade_status'] == 'TRADE_SUCCESS') {
            if ($row_pay['status'] == 0){

                $sql = "UPDATE `ku_user` SET `reward_money` =reward_money+{$row_pay['coin']} WHERE `username` = '{$row_pay['username']}'";
                if ($DB->query($sql)){
                   /***************************充值***记录*******************************************************/ 
                $DB->query("insert into `ku_charge` (`out_trade_no`,`coin`,`addtime`,`money`,`type`,`endtime`,`username`,`status`) values ('".$row_pay['out_trade_no']."','".$row_pay['coin']."','".$row_pay['addtime']."','".$row_pay['money']."','".$type."','".$date."','".$row_pay['username']."','1')");
                   /*********************************************************************************************/
                   if (!empty($row_pay['user_belong'])) {
  
                   }else{
                      if ($userztus['user_limit']!=1) {
                    //分佣
                    $reward=$row_pay['money'];
                    $fymoney=sprintf('%.3f',$reward*$rat/100);//返佣计算
                    
                    $belong = "UPDATE `ku_user` SET `money` = money+{$fymoney} WHERE `username` = '{$row_pay['ascription']}'";
                  if ($DB->query($belong)) { 
                    $reward=$row_pay['money'];
                    $fymoney=sprintf('%.3f',$reward*$rat/100);//返佣计算
                   $DB->query("insert into `ku_cons` (`out_trade_no`,`name`,`reward`,`addtime`,`username`,`money`,`user_belong`,`data`,`status`) values ('".$out_trade_no."','充值金币赏金','".$reward."','".$date."','".$row_pay['username']."','".$fymoney."','".$row_pay['ascription']."','1','1')"); 
                       }
                     }
                   }
                   echo '<script>alert("在线金币充值成功！");window.location.href="../user/recharge.html"</script>'; 
                }else{
                     /***************************充值***记录*******************************************************/
                $DB->query("insert into `ku_charge` (`out_trade_no`,`coin`,`addtime`,`money`,`type`,`endtime`,`username`,`status`) values ('".$row_pay['out_trade_no']."','".$row_pay['coin']."','".$row_pay['addtime']."','".$row_pay['money']."','".$type."','".$date."','".$row_pay['username']."','3')");
                   /*********************************************************************************************/
                    echo '<script>alert("金币充值失败！");window.location.href="../user/recharge.html"</script>';

                }
                $DB->query("UPDATE `ku_order` SET `trade_no` = '$trade_no',`status` = 1,`type` ='{$type}',`endtime` ='{$date}' WHERE `out_trade_no` = '$out_trade_no'");
            }
        }
        else {
            echo "trade_status=".$_GET['trade_status'];
        }

	//echo "该订单已处理！<br />";

	//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
}
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

else {
    //验证失败
    //如要调试，请看alipay_notify.php页面的verifyReturn函数
    echo "验证失败";
}
?>
        <title><?=$conf['title']?></title>
	</head>
    <body>
    </body>
</html>