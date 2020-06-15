<?php
       global $_W, $_GPC;
      $cfg = $this->module['config'];
      	$dluid=$_GPC['dluid'];
        if($_GPC['uid']){
	    	$uid=$_GPC['uid'];
	    }else{
	    	$fans=$this->islogin();
	        if(empty($fans['tkuid'])){
	        	$fans = mc_oauth_userinfo();	        
	        }
	    }
        
		
		//PID绑定
		if(!empty($dluid)){
          $share=pdo_fetch("select * from ".tablename('tiger_newhu_share')." where weid='{$_W['uniacid']}' and id='{$dluid}'");
        }else{
          //$fans=mc_oauth_userinfo();
          $openid=$fans['openid'];
          if(empty($uid)){
          	$zxshare=pdo_fetch("select * from ".tablename('tiger_newhu_share')." where weid='{$_W['uniacid']}' and from_user='{$openid}'");
          }else{
          	$zxshare=pdo_fetch("select * from ".tablename('tiger_newhu_share')." where weid='{$_W['uniacid']}' and id='{$uid}'");
          }
		  if(empty($zxshare['qdid'])){
		  	if(!empty($zxshare['dlptpid'])){
		         $cfg['ptpid']=$zxshare['dlptpid'];
		         $cfg['qqpid']=$zxshare['dlqqpid'];
		      }
		  }else{
		  	$cfg['ptpid']=$zxshare['dlptpid'];//渠道PID
		  	$qdid=$zxshare['qdid'];
		       $qdidlist=pdo_fetch("select * from ".tablename('tiger_newhu_qudaolist')." where weid='{$_W['uniacid']}' and relation_id='{$qdid}'");
		  	 $cfg['ptpid']=$qdidlist['root_pid'];
		       $pid=$qdidlist['root_pid'];
		  }
        }
        if($zxshare['dltype']==1){
            if(!empty($zxshare['dlptpid'])){
               $cfg['ptpid']=$zxshare['dlptpid'];
               $cfg['qqpid']=$zxshare['dlqqpid'];
            }
			if(empty($zxshare['qdid'])){
				if(!empty($zxshare['dlptpid'])){
			       $cfg['ptpid']=$zxshare['dlptpid'];
			       $cfg['qqpid']=$zxshare['dlqqpid'];
			    }
			}else{
				$cfg['ptpid']=$zxshare['dlptpid'];//渠道PID
				$qdid=$zxshare['qdid'];
			     $qdidlist=pdo_fetch("select * from ".tablename('tiger_newhu_qudaolist')." where weid='{$_W['uniacid']}' and relation_id='{$qdid}'");
				 $cfg['ptpid']=$qdidlist['root_pid'];
			     $pid=$qdidlist['root_pid'];
			}
            
        }else{
           if(!empty($zxshare['helpid'])){//查询有没有上级
                 $sjshare=pdo_fetch("select * from ".tablename('tiger_newhu_share')." where weid='{$_W['uniacid']}' and dltype=1 and id='{$zxshare['helpid']}'");           
            }
        }
        

        if(!empty($sjshare['dlptpid'])){
            if(!empty($sjshare['dlptpid'])){
              $cfg['ptpid']=$sjshare['dlptpid'];
              $cfg['qqpid']=$sjshare['dlqqpid'];
            }   
			if(empty($sjshare['qdid'])){
				if(!empty($sjshare['dlptpid'])){
				   $cfg['ptpid']=$sjshare['dlptpid'];
				   $cfg['qqpid']=$sjshare['dlqqpid'];
				 } 
			}else{
				$qdid=$sjshare['qdid'];
			  	$qdidlist=pdo_fetch("select * from ".tablename('tiger_newhu_qudaolist')." where weid='{$_W['uniacid']}' and relation_id='{$qdid}'");
				$cfg['ptpid']=$qdidlist['root_pid'];
			    $pid=$qdidlist['root_pid'];
			}
        }else{
           if($share['dlptpid']){
               if(!empty($share['dlptpid'])){
                 $cfg['ptpid']=$share['dlptpid'];
                 $cfg['qqpid']=$share['dlqqpid'];
               }       
            }
        }
		//结束
		if(empty($pid)){
				$pid=$cfg['ptpid'];
		}else{
			$cfg['ptpid']=$pid;
		}
		//echo $pid;
		 $pidSplit=explode('_',$pid);
         $cfg['siteid']=$pidSplit[2];
         $cfg['adzoneid']=$pidSplit[3];
         $memberid=$pidSplit[1];
		if(empty($memberid)){
			$tksign = pdo_fetch("SELECT * FROM " . tablename($this->modulename."_tksign") . " WHERE  tbuid='{$cfg['tbuid']}'");
		}else{
			$tksign = pdo_fetch("SELECT * FROM " . tablename($this->modulename."_tksign") . " WHERE  memberid='{$memberid}'");
		}
		
        
        
        
        $pic="";
        $title="饿了么活动";
        $hdid="1571715733668";

        include IA_ROOT . "/addons/tiger_newhu/inc/sdk/tbk/tb.php"; 
        

        // $url=hdlink($hdid,$cfg['adzoneid'],$cfg['siteid'],$tksign['sign'],"");
			$url=hdlinknew($hdid,$cfg['adzoneid'],$cfg['siteid'],$tksign['sign'],$qdid);
			// echo "<pre>";
			// print_r($url);
			// exit;
	
         $rhyurl=$url['msg']['click_url'];//长链接
		 $xcxewm=$url['msg']['wx_qrcode_url'];//小程序二维码

		// echo $rhyurl;
		// exit;    

        $tkl=$this->tkl($rhyurl,$pic,$title);
		// 	echo "<pre>";
		// 	echo $rhyurl."<br>";
		// print_r($tkl);
		// exit;
 // 
      
       $userAgent = $_SERVER['HTTP_USER_AGENT'];
		if (!strpos($userAgent, 'MicroMessenger')) {
			//Header("Location:".$rhyurl); 
		}
		if($_GPC['app']==1){
			exit(json_encode(array('err'=>1,'rhyurl'=>$rhyurl,'xcxewm'=>$xcxewm,'tkl'=>$tkl)));
		}


       //echo $tkl;

       include $this->template ( 'home/ele' );
?>