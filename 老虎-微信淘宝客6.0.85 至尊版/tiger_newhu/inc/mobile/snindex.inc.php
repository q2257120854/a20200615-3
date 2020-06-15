<?php

global $_W, $_GPC;
	    $cfg = $this->module['config'];
		$weid=$_W['uniacid'];//绑定公众号的ID

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

		
		$lbad = pdo_fetchall("SELECT * FROM " . tablename("tiger_newhu_ad") . " WHERE weid = '{$_W['uniacid']}' and type=9 order by id desc");//轮播图
		// $ad4 = pdo_fetchall("SELECT * FROM " . tablename("tiger_newhu_ad") . " WHERE weid = '{$_W['uniacid']}' and type=8 order by id desc");//菜单下4张图
		$dblist = pdo_fetchall("select * from ".tablename("tiger_newhu_cdtype")." where weid='{$_W['uniacid']}' and fftype=12  order by px desc");//底部菜单
		$cdlist = pdo_fetchall("select * from ".tablename("tiger_newhu_cdtype")." where weid='{$_W['uniacid']}' and fftype=11  order by px desc");//首页轮播图下面菜单

		include $this->template ( 'sn/index' ); 
		
?>