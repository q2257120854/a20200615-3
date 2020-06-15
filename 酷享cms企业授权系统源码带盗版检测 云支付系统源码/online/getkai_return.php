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
        if($_GET['trade_status'] == 'TRADE_SUCCESS') {
            if ($row['status'] == 0){
                $user_lv=$conf['user_lv'];//赠送授权数
                $lv=$user_lv+$userrow['user_lv'];//计算好的授权数
                $reward_money=$conf['reward_money'];//赠送授权金币数
                $sql = "UPDATE `ku_user` SET `user_lv`='{$lv}',`reward_money` =reward_money+{$reward_money} WHERE `username` = '{$row['username']}'";
                if ($DB->query($sql)){
                     /***************************开源购买***记录************************************************/
            $DB->query("insert into `ku_power` (`out_trade_no`,`name`,`addtime`,`url`,`money`,`dhtime`,`type`,`endtime`,`username`,`user_lv`,`reward_money`,`status`) values ('".$row['out_trade_no']."','".$row['name']."','".$row['addtime']."','".$row['url']."','".$row['money']."','','".$type."','".$date."','".$row['username']."','".$user_lv."','".$reward_money."','1')");
                   /*********************************************************************************************/
            echo '<script>alert("购买开源版成功，请联系客服提供订单号索要系统源码文件包！");window.location.href="/user/recharge.html"</script>';
                }else{
                    echo '<script>alert("购买开源版失败！");window.location.href="/user/recharge.html"</script>';
                }
                $DB->query("UPDATE `ku_order` SET `trade_no` = '$trade_no',`state` = 1,`status` = 1,`type` ='{$type}',`endtime` ='{$date}' WHERE `out_trade_no` = '$out_trade_no'");  
            }
        }
        else {
            echo "trade_status=".$_GET['trade_status'];
        }

        //echo "订单已处理！<br />";

        //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——

        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    }
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