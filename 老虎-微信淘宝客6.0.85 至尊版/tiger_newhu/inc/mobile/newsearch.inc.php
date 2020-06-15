<?php
	global $_W, $_GPC;
	$op=$_GPC['op'];
	$cfg = $this->module['config'];
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
	if(!empty($share['dlptpid']) || !empty($share['qdid'])){
		  $cfg['ptpid']=$share['dlptpid'];
//            $cfg['pddpid']=$share['dlqqpid'];
		  if(!empty($share['qdid'])){
			$qdid=$share['qdid'];
			$qdidlist=pdo_fetch("select * from ".tablename('tiger_newhu_qudaolist')." where weid='{$_W['uniacid']}' and relation_id='{$qdid}'");
			$cfg['ptpid']=$qdidlist['root_pid'];
		  }	  

	 }else{
	   if(!empty($share['helpid'])){//查询有没有上级
			 $sjshare=pdo_fetch("select * from ".tablename('tiger_newhu_share')." where weid='{$_W['uniacid']}' and dltype=1 and id='{$share['helpid']}'");
			 if(!empty($sjshare['dlptpid'])){
			   $cfg['ptpid']=$sjshare['dlptpid'];
//                 $cfg['qqpid']=$sjshare['dlqqpid'];
			   if(!empty($share['qdid'])){
				$qdid=$share['qdid'];
				$qdidlist=pdo_fetch("select * from ".tablename('tiger_newhu_qudaolist')." where weid='{$_W['uniacid']}' and relation_id='{$qdid}'");
				$cfg['ptpid']=$qdidlist['root_pid'];
			  }	
			 }
		}
	 }
	 $tbpid=$cfg['ptpid'];
	 
	 //获取京东推广位
	 $jdset=pdo_fetch("select * from ".tablename('tuike_jd_jdset')." where weid='{$_W['uniacid']}' order by id desc");
	 if($share['dltype']==1){//是代理
	 	if(empty($share['jdpid'])){//如果是代理，PID没填写就默认公众号PID					
	 		$share['jdpid']=$jdset['jdpid'];
	 	}
	 }else{//不是代理
	 	if(!empty($share['helpid'])){//查看有没有上级
	 		$shshare=pdo_fetch("select * from ".tablename('tiger_newhu_share')." where weid='{$_W['uniacid']}' and id='{$share['helpid']}'");
	 		//file_put_contents(IA_ROOT."/addons/tiger_tkxcx/v_log.txt","\n helpid1:".$share['helpid']."--------".json_encode($shshare),FILE_APPEND);	
	 		if(empty($shshare['id'])){//没有上级代理，就用默认的公众号PID
	 		    $share['jdpid']=$jdset['jdpid'];
	 		}else{//有上级代理
	 			if($shshare['dltype']==1){//如果上级是代理，就用代理的PID
	 				$share['jdpid']=$shshare['jdpid'];
	 			}else{//上级不是代理就用默认的PID
	 		   		$share['jdpid']=$jdset['jdpid'];
	 			}
	 		}
	 	}else{//没有上级就用默认公众号PID
	 		$share['jdpid']=$jdset['jdpid'];
	 	}			
	 }
	 $jdpid=$share['jdpid'];
	 
	 //获取拼多多PID
	 if($share['dltype']==1){//是代理
	 	if(empty($share['pddpid'])){//如果是代理，PID没填写就默认公众号PID
	 		$pddset=pdo_fetch("select * from ".tablename('tuike_pdd_set')." where weid='{$_W['uniacid']}'");
	 		$share['pddpid']=$pddset['pddpid'];
	 	}
	 }else{//不是代理
	 	if(!empty($share['helpid'])){//查看有没有上级
	 		$shshare=pdo_fetch("select * from ".tablename('tiger_newhu_share')." where weid='{$_W['uniacid']}' and id='{$share['helpid']}'");
	 		//file_put_contents(IA_ROOT."/addons/tiger_tkxcx/v_log.txt","\n helpid1:".$share['helpid']."--------".json_encode($shshare),FILE_APPEND);	
	 		if(empty($shshare['id'])){//没有上级代理，就用默认的公众号PID
	 			$pddset=pdo_fetch("select * from ".tablename('tuike_pdd_set')." where weid='{$_W['uniacid']}'");
	 		    $share['pddpid']=$pddset['pddpid'];
	 		}else{//有上级代理
	 			if($shshare['dltype']==1){//如果上级是代理，就用代理的PID
	 				$share['pddpid']=$shshare['pddpid'];
	 			}else{//上级不是代理就用默认的PID
	 				$pddset=pdo_fetch("select * from ".tablename('tuike_pdd_set')." where weid='{$_W['uniacid']}'");
	 		   		$share['pddpid']=$pddset['pddpid'];
	 			}
	 		}
	 	}else{//没有上级就用默认公众号PID
	 		$pddset=pdo_fetch("select * from ".tablename('tuike_pdd_set')." where weid='{$_W['uniacid']}'");
	 		$share['pddpid']=$pddset['pddpid'];
	 	}			
	 }
	 $pddpid=$share['pddpid'];
	 if(empty($p_id)){
	 	$pddpid=$pddset['pddpid'];
	 }
	 



$dblist = pdo_fetchall("select * from ".tablename($this->modulename."_cdtype")." where weid='{$_W['uniacid']}' and fftype=1  order by px desc");//底部菜单
include $this -> template('newsearch/search');	