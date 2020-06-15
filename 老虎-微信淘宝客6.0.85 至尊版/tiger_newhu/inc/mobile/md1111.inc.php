<?php
 global $_W, $_GPC;
 $cfg = $this->module['config'];
  $op=$_GPC['op'];
 $pid=$_GPC['pid'];
 $qdid=$_GPC['qdid'];
 $itemid=$_GPC['itemid'];//云商品库商品ID
 $itemtitle=$_GPC['itemtitle'];
 if(empty($itemtitle)){
	 $itemtitle="双11免单商品".$itemid;
 }
 if(empty($pid)){
 		 $pid=$cfg['ptpid'];
 }
 $url=$cfg['tknewurl']."app/index.php?i=".$_W['uniacid']."&c=entry&do=md1111&m=tiger_newhu&pid=".$pid."&qdid=".$qdid."&itemid=".$goodsid."&itemtitle=".$itemtitle;
 
 if($op==1){
	 
	 $pidSplit=explode('_',$pid);
	 $memberid=$pidSplit[1];
	
	 if(empty($memberid)){
	 	$tksign = pdo_fetch("SELECT * FROM " . tablename($this->modulename."_tksign") . " WHERE  tbuid='{$cfg['tbuid']}'");
	 }else{
	 	$tksign = pdo_fetch("SELECT * FROM " . tablename($this->modulename."_tksign") . " WHERE  memberid='{$memberid}'");
	 }
	 include IA_ROOT . "/addons/tiger_newhu/inc/sdk/tbk/tb.php"; 
	 include IA_ROOT . "/addons/tiger_newhu/inc/sdk/tbk/goodsapi.php"; 
	  $turl="https://item.taobao.com/item.htm?id=".$itemid;
	  $res=hqyongjin($turl,$ck,$cfg,$this->modulename,'','',$tksign['sign'],$tksign['tbuid'],$_W,1,$itemid,$qdid);
	  if(empty($res['money'])){
	    $rhyurl=$res['itemurl'];
	  }else{
	    $rhyurl=$res['dclickUrl'];
	  }
	  
	  $tjcontent=$itemtitle;
	  $rhyurl=str_replace("http:","https:",$rhyurl);
	  $taokouling=$this->tkl($rhyurl,"http://img.haodanku.com/Fh0BbosiDoN2exhl0TDidj3nXguW",$tjcontent);
	  
	  exit(json_encode(array("code"=>200,"itemurl"=>"【免单】".$itemtitle.$taokouling,"msg"=>11111)));
	  
	  echo $taokouling;
	  echo "<pre>";
	  print_r($res);
	  echo $rhyurl;
	  exit;
	 
	 
	 
 }


 include $this->template ( 'md1111' );
?>