<?php

global $_W, $_GPC;
	    $cfg = $this->module['config'];
		$weid=$_W['uniacid'];//绑定公众号的ID
		$gettype=$_GPC['gettype'];
		$zhcode=$_GPC['zhcode'];
		$key=$_GPC['key'];

		$fans=$this->islogin();
		if(empty($fans['tkuid'])){
			if($_W['account']['level']==4){
				$fans = mc_oauth_userinfo();  
			}			
		}
		$openid=$fans['openid'];
		if(empty($openid)){
			$openid=$_W['openid'];
		}
		$share=pdo_fetch("select * from ".tablename('tiger_newhu_share')." where weid='{$_W['uniacid']}' and from_user='{$openid}'");



		include $this->template ( 'sn/list' ); 
		
?>