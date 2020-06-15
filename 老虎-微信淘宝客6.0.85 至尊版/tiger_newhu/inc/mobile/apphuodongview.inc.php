<?php
       global $_W, $_GPC;
	    $weid=$_W['uniacid'];
        $cfg = $this->module['config'];
        $pid=$_GPC['pid'];//用户接口获取 dlptpid
        $uid=$_GPC['uid'];//用户接口返回的ID
		
		$share=pdo_fetch("select * from ".tablename('tiger_newhu_share')." where weid='{$weid}' and id='{$uid}'");
		
		
		if($share['dltype']==1){//是代理
			if(empty($share['dlptpid'])){//如果是代理，PID没填写就默认公众号PID
				$s=pdo_fetch("select settings from ".tablename('uni_account_modules')." where module='tiger_newhu' and uniacid='{$weid}'");
				$cfg=unserialize($s['settings']);
				$share['dlptpid']=$cfg['ptpid'];
			}
			if(empty($share['qdid'])){
				if(!empty($share['dlptpid'])){
			       $share['dlptpid']=$share['dlptpid'];
			    }
			}else{
				$share['dlptpid']=$cfg['qdpid'];//渠道PID
			}
		}else{//不是代理
			if(!empty($share['helpid'])){//查看有没有上级
				$shshare=pdo_fetch("select * from ".tablename('tiger_newhu_share')." where weid='{$weid}' and id='{$share['helpid']}'");
				file_put_contents(IA_ROOT."/addons/tiger_tkxcx/v_log.txt","\n helpid1:".$share['helpid']."--------".json_encode($shshare),FILE_APPEND);	
				if(empty($shshare['id'])){//没有上级代理，就用默认的公众号PID
					$s=pdo_fetch("select settings from ".tablename('uni_account_modules')." where module='tiger_newhu' and uniacid='{$weid}'");
		    		$cfg=unserialize($s['settings']);
					$share['dlptpid']=$cfg['ptpid'];
				}else{//有上级代理
					if($shshare['dltype']==1){//如果上级是代理，就用代理的PID
						$share['dlptpid']=$shshare['dlptpid'];
					}else{//上级不是代理就用默认的PID
						$s=pdo_fetch("select settings from ".tablename('uni_account_modules')." where module='tiger_newhu' and uniacid='{$weid}'");
			    		$cfg=unserialize($s['settings']);
						$share['dlptpid']=$cfg['ptpid'];
					}
				}
			}else{//没有上级就用默认公众号PID
				$s=pdo_fetch("select settings from ".tablename('uni_account_modules')." where module='tiger_newhu' and uniacid='{$weid}'");
				$cfg=unserialize($s['settings']);
				$share['dlptpid']=$cfg['ptpid'];
			}
			
		}
		$cfg['ptpid']=$share['dlptpid'];
		$pidSplit=explode('_',$cfg['ptpid']);
		$memberid=$pidSplit[1];
		if(empty($memberid)){
			$tksign = pdo_fetch("SELECT * FROM " . tablename("tiger_newhu_tksign") . " WHERE  tbuid='{$cfg['tbuid']}'");
		}else{
			$tksign = pdo_fetch("SELECT * FROM " . tablename("tiger_newhu_tksign") . " WHERE  memberid='{$memberid}'");
		}

         $cfg['siteid']=$pidSplit[2];
         $cfg['adzoneid']=$pidSplit[3];
         $memberid=$pidSplit[1];
		if(empty($memberid)){
			$tksign = pdo_fetch("SELECT * FROM " . tablename($this->modulename."_tksign") . " WHERE  tbuid='{$cfg['tbuid']}'");
		}else{
			$tksign = pdo_fetch("SELECT * FROM " . tablename($this->modulename."_tksign") . " WHERE  memberid='{$memberid}'");
		}
        
        $pic=$_GPC['hdpic'];//图片
        $title=$_GPC['hdtitle'];
        $hdid=$_GPC['hdid'];
		
		

        include IA_ROOT . "/addons/tiger_newhu/inc/sdk/tbk/tb.php"; 

        $url=hdlink($hdid,$cfg['adzoneid'],$cfg['siteid'],$tksign['sign'],$share['qdid']);
        $rhyurl=$url['msg'];		
		$tkl=$this->tkl($rhyurl,$pic,$title);
		
		exit(json_encode(array('error'=>0,'url'=>$rhyurl,'tkl'=>$tkl)));
		//http://cs.tigertaoke.com/app/index.php?i=14&c=entry&hdid=1571715733668&hdtitle=%E9%A5%BF%E4%BA%86%E4%B9%88%E4%B8%93%E5%8C%BA&do=apphuodongview&m=tiger_newhu
		echo "<pre>";
		print_r($share);
		echo $tkl;
		print_r($url);
		exit;
		
	
?>