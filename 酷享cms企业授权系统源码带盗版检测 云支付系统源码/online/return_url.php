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

    $authcode = md5(random(32).$qq);

    //状态
    $row = $DB->get_row("SELECT * FROM `ku_order` WHERE `out_trade_no` = '$out_trade_no'");
      $tabet=date("Y-m-d",strtotime("+12 month"));
    if($_GET['trade_status'] == 'TRADE_SUCCESS') {
        if ($row['status'] == 0){
            if($isqq!='' && $conf['ipauth']==0){
                echo "<script language='javascript'>alert('授权平台已存在该QQ，请使用“添加站点”！');history.go(-1);</script>";
                $sql = "insert into `ku_author` (`kuhost`,`ku_qq`,`operation`,`addtime`,`dhtime`,`channel`,`state`) values ('".$row['url']."','".$row['qq']."','".$row['qq']."','".$date."','".$tabet."','1','1')";
                if ($DB->query($sql)){
                    exit("<script language='javascript'>window.location.href='../index.html?authonline=ok&url=".$row['url']."&qq=".$row['qq']."&type=addsite';</script>");
                }
            }else{
                 $sql = "insert into `ku_author` (`kuhost`,`ku_qq`,`operation`,`addtime`,`dhtime`,`channel`,`state`) values ('".$row['url']."','".$row['qq']."','".$row['qq']."','".$date."','".$tabet."','1','1')";
                if ($DB->query($sql)){
                    exit("<script language='javascript'>window.location.href='../index.html?authonline=ok&url=".$row['url']."&qq=".$row['qq']."&type=addauth';</script>");
                }
            }
            $DB->query("UPDATE `ku_order` SET `trade_no` = '$trade_no',`state` = 1,`status` = 1,`type` ='{$type}',`endtime` ='{$date}' WHERE `out_trade_no` = '$out_trade_no'");  
            }
        }
    }
    else {
      echo "trade_status=".$_GET['trade_status'];
    }

	echo "该订单已处理！<br />";

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