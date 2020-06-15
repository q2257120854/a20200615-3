<?php
/*!
@name:检查域名状态
@description:检查域名报毒状态
@author:冰狱
@version:+++++
@time:2020-1-17
@copyright:冰狱网络
*/
$mod='blank';
function curl_post($header,$url){
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL,$url);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
 $result = curl_exec ($ch);
 curl_close($ch);
 if ($result == NULL) {
  return 0;
 }
 return $result;
}
include './includes/common.php';
$poison=0;
$msg = null;
if ($_GET['cishu'] == $mail['cishu']) {
	$logs = array();
	//查域名状态
	$hostrow = $DB->query("select * from `quan_host` where type=1");
	foreach($hostrow as $key => $value){
		$url = $value['domain'];
		$id = $value['id'];
		$header = array("Referer: https://guanjia.qq.com/online_server/result.html");
		$ret =curl_post($header,'http://cgi.urlsec.qq.com/index.php?m=check&a=check&callback=url_query&url='.$url);
		$arr=json_decode(substr($ret,10,-1));
		$ret = $arr->data->results->whitetype;
		//1未知 2报毒 3绿标 4腾讯域名
		if ($ret == 2){
			$poison =1;
			$myrow = $DB->get_row("delete from `quan_host` where Id='$id'");
			$msg = $msg.'已报毒:'.$url.'<br>';
		}else{
			$msg = $msg.'未报毒:'.$url.'<br>';
		}
	}
	if ($poison==1) {
		echo $msg;
		send_mail($mail['addressee'],'冰狱监控日志',$msg);
	}else{
		$result=array('code'=>0,'msg'=>'No Red Url','result'=>10007);
		echo json_encode($result);
	}

}else{
	$result=array('code'=>0,'msg'=>'Monitor code error','result'=>10008);
	echo json_encode($result);
}
$DB->close();
//删除无用变量
unset($hostrow,$myrow,$arr,$result,$msg,$ret);
