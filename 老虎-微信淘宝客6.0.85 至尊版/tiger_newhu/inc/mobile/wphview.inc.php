<?php

global $_W, $_GPC;
	    $cfg = $this->module['config'];
		$weid=$_W['uniacid'];//绑定公众号的ID

		//PID绑定
		$fans=$this->islogin();
		if(empty($fans['tkuid'])){
			$fans = mc_oauth_userinfo();        
		}
		if(!empty($dluid)){
		  $share=pdo_fetch("select * from ".tablename('tiger_newhu_share')." where weid='{$_W['uniacid']}' and id='{$dluid}'");
		}else{
		  //$fans=mc_oauth_userinfo();
		  $openid=$fans['openid'];
		  if(empty($openid)){
		  	$openid=$_W['openid'];
		  }
		  $zxshare=pdo_fetch("select * from ".tablename('tiger_newhu_share')." where weid='{$_W['uniacid']}' and from_user='{$openid}'");
		}
		if($zxshare['dltype']==1){
		    if(!empty($zxshare['wphpid'])){
		       $wphpid=$zxshare['wphpid'];
		    }
		}else{
		   if(!empty($zxshare['helpid'])){//查询有没有上级
		         $sjshare=pdo_fetch("select * from ".tablename('tiger_newhu_share')." where weid='{$_W['uniacid']}' and dltype=1 and id='{$zxshare['helpid']}'");           
		    }
		}
		
		
		if(!empty($sjshare['wphpid'])){
		    if(!empty($sjshare['wphpid'])){
		      $wphpid=$sjshare['wphpid'];
		    }   
		}else{
		   if($share['wphpid']){
		       if(!empty($share['wphpid'])){
		         $wphpid=$zxshare['wphpid'];
		       }       
		    }
		}
		//结束
		
        $itemid=$_GPC['itemid'];
		$wphsignset=pdo_fetch("select * from ".tablename('tiger_newhu_wphsign')." where weid='{$weid}'");
		$whpsign=$wphsignset['access_token'];		
		 require_once IA_ROOT."/addons/tiger_newhu/inc/sdk/wph/com/vip/adp/api/open/service/UnionGoodsServiceClient.php";
		try {
		    $service=\com\vip\adp\api\open\service\UnionGoodsServiceClient::getService();
		    $ctx=\Osp\Context\InvocationContextFactory::getInstance();
		    $ctx->setAppKey("2bc54d13");
		    $ctx->setAppSecret("E80CC551126603A3F53AA84F366527F3");
		    $ctx->setAppURL("https://gw.vipapis.com/");
			$ctx->setAccessToken($whpsign);
		    $ctx->setLanguage("zh");
		    $goodsIdList1=array();
		    $goodsIdList1[0]=$itemid;
			$res=$service->getByGoodsIdsWithOauth($goodsIdList1,"requestId");
			$res=(array)$res[0];
			
			
			$views['itemid']=$res['goodsId'];
			$views['itemtitle']=$res['goodsName'];
			$views['itemprice']=$res['marketPrice'];
			$views['itemendprice']=$res['vipPrice'];
			$views['itempic']=$res['goodsThumbUrl'];
			$views['itempic5']=$res['goodsCarouselPictures'];//5张图片
			// [commissionRate] => 8 佣金比例
			// [commission] => 15.92 佣金金额
			$views['zk']=$res['discount']*10;//折扣
			$views['goodsDetailPictures']=$res['goodsDetailPictures'];//详情图片
			$views['url']=$res['destUrl'];//商品移动端网址
			$views['zkendtime']=date('Y-m-d H:i:s',$res['sellTimeTo']/1000);
			

			// echo "<pre>";
			// print_r($views);
			// print_r($res);
			// exit;
		} catch(\Osp\Exception\OspException $e){
		    var_dump($e);
		}
		
		//转链
		// $url="https://m.vip.com/product-1710613821-6918569181804676509.html";
		$zlurl=$this->wphzl($views['url'],$wphpid);
		$views['rhyurl']=$zlurl['url'];//转链后台的短网址
		// echo "<pre>";
		// print_r($views);
		// exit;



		include $this->template ( 'wph/view' ); 
		
?>