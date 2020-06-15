<?php
global $_W, $_GPC;
        $cfg = $this->module['config'];
        
        $fans=$this->islogin();
// 				print_r($fans);
// 				exit;
        if(empty($fans['tkuid'])){
        	$fans = mc_oauth_userinfo();
	        if(empty($fans)){
	        	$loginurl=$_W['siteroot'].str_replace('./','app/',$this->createMobileurl('login'))."&m=tiger_newhu"."&tzurl=".urlencode($tktzurl);        	  	  	     	  	  	 
       	  	  	 header("Location: ".$loginurl); 
       	  	  	exit;
	        }	        
        }
        
        
        


		//$fans = $_W['fans'];
        $dluid=$_GPC['dluid'];//share id
        $mc=mc_fetch($fans['openid']);


        $member=$this->getmember($fans,$mc['uid']);
		
		if($member['tztype']!=1){
			 message("只有团长能进！！请联系管理员！",'','error');
		}
		
        if($member['status']==1){
        	// message("维护中！！！",'','error');
        	header('Location:'.$cfg['heitzurl']);
        }
        if($cfg['zdgdtype']==1){
        	$this->getzdorder($member,$cfg);
        }        
				
				if(empty($member['yaoqingma'])){
					 pdo_update($this->modulename . "_share",array('yaoqingma'=>'tk'.$member['id']), array ('id' =>$member['id'],'weid'=>$_W['uniacid']));
				}
				
//      
//      $fans = mc_oauth_userinfo();
//      echo "<pre>";
//      print_r($member);
//      exit;


        $fzlist = pdo_fetchall("select * from ".tablename($this->modulename."_cdtype")." where weid='{$_W['uniacid']}' and fftype=0  order by px desc");
        $dblist = pdo_fetchall("select * from ".tablename($this->modulename."_cdtype")." where weid='{$_W['uniacid']}' and fftype=1  order by px desc");//底部菜单
				$lblist = pdo_fetchall("select * from ".tablename($this->modulename."_cdtype")." where weid='{$_W['uniacid']}' and fftype=8  order by px desc");//会员中心轮播图
	
				
				// 本月起始时间:
				$bbegin_time = strtotime(date("Y-m-d H:i:s", mktime ( 0, 0, 0, date ( "m" ), 1, date ( "Y" ))));
				$bend_time = strtotime(date("Y-m-d H:i:s", mktime ( 23, 59, 59, date ( "m" ), date ( "t" ),date( "Y" ))));
				// 上月起始时间:
				$sbegin_time = strtotime(date('Y-m-d', mktime(0,0,0,date('m')-1,1,date('Y'))));//上个月开始时间
				$send_time = strtotime(date("Y-m-d 23:59:59", strtotime(-date('d').'day')));//上个月结束时间
				
				
				$jltype=1;//团长只奖励余额	
							
				// 淘宝统计收入开始
				
				//淘宝上月【付款】佣金
				$sydfygorder = pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename($this->modulename.'_order')." where weid='{$_W['uniacid']}' and  uid='{$member['id']}' and  (sh=1 || sh=3)  and createtime>'{$sbegin_time}' and createtime<'{$send_time}' and jltype='{$jltype}' and tztype=1");
				if(empty($sydfygorder)){
					$sydfygorder='0.00';
				}else{
					$sydfygorder=number_format($sydfygorder,2);
				}
				//淘宝上月【结算】佣金
				$syjsyjorder = pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename($this->modulename.'_order')." where weid='{$_W['uniacid']}' and  uid='{$member['id']}' and  sh=2 and createtime>'{$sbegin_time}' and createtime<'{$send_time}' and jltype='{$jltype}' and tztype=1");
				if(empty($syjsyjorder)){
					$syjsyjorder='0.00';
				}else{
					$syjsyjorder=number_format($syjsyjorder,2);
				}
				
				//淘宝本月预估【付款】收入【佣金】
				$byygfkyjorder = pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename($this->modulename.'_order')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and (sh=1 || sh=3)  and createtime>'{$bbegin_time}' and createtime<'{$bend_time}' and jltype='{$jltype}' and tztype=1");
				if(empty($byygfkyjorder)){
					$byygfkyjorder='0.00';
				}else{
					$byygfkyjorder=number_format($byygfkyjorder,2);
				}
				
				//淘宝本月预估【结算】收入【佣金】
				$byfkjssryjorder = pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename($this->modulename.'_order')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and sh=2 and createtime>'{$bbegin_time}' and createtime<'{$bend_time}' and jltype='{$jltype}' and tztype=1");
				if(empty($byfkjssryjorder)){
					$byfkjssryjorder='0.00';
				}else{
					$byfkjssryjorder=number_format($byfkjssryjorder,2);
				}	
				
				$daytime=strtotime(date("Y-m-d 00:00:00"));//今天0点
				$zttime=strtotime(date("Y-m-d 00:00:00",strtotime("-1 day")));//昨天0点
				
				//今日付款笔数
				$dayordercount= pdo_fetchcolumn("SELECT count(id) FROM " . tablename('tiger_newhu_order')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and  (sh=1 || sh=2 || sh=3) and createtime>'{$daytime}' and jltype='{$jltype}' and tztype=1"); 
				if(empty($dayordercount)){
					$dayordercount=0;
				}
				//今日付款佣金
				$daycordersum= pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename('tiger_newhu_order')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and  (sh=1 || sh=2 || sh=3) and createtime>'{$daytime}' and jltype='{$jltype}' and tztype=1"); 
				if(empty($daycordersum)){
					$daycordersum='0.00';
				}else{
					$daycordersum=number_format($daycordersum,2);
				}
								
				//昨日付款笔数
				$zrfkcount= pdo_fetchcolumn("SELECT count(id) FROM " . tablename('tiger_newhu_order')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and  (sh=1 || sh=2 || sh=3) and createtime<'{$daytime}' and createtime>'{$zttime}'  and jltype='{$jltype}' and tztype=1");
				if(empty($zrfkcount)){
					$zrfkcount=0;
				}
				//昨日付款佣金
				$zrfksum= pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename('tiger_newhu_order')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and  (sh=1 || sh=2 || sh=3) and createtime<'{$daytime}' and createtime>'{$zttime}'  and jltype='{$jltype}' and tztype=1");
				if(empty($zrfksum)){
					$zrfksum='0.00';
				}else{
					$zrfksum=number_format($zrfksum,2);
				}
				
				//淘宝上月【订单数】,付款和结算的
				$syddsorder = pdo_fetchcolumn("SELECT COUNT(id) FROM " . tablename($this->modulename.'_order')." where weid='{$_W['uniacid']}' and  uid='{$member['id']}' and  (sh=1 ||  sh=2 || sh=3)  and createtime>'{$sbegin_time}' and createtime<'{$send_time}' and jltype='{$jltype}' and tztype=1");
				if(empty($syddsorder)){
					$syddsorder=0;
				}
				
				//淘宝本月预估【订单数】,付款和结算的
				$byddsorder = pdo_fetchcolumn("SELECT COUNT(id) FROM " . tablename($this->modulename.'_order')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and (sh=1 || sh=2 || sh=3)  and createtime>'{$bbegin_time}' and createtime<'{$bend_time}' and jltype='{$jltype}' and tztype=1");
				if(empty($byddsorder)){
					$byddsorder=0;
				}
				// 淘宝统计统计结束
			  
			  
			  //拼多多收入统计---------------------------------------------------
			  //上月【付款】佣金
			  $pddsydfygorder = pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename($this->modulename.'_pddtjorder')." where weid='{$_W['uniacid']}' and  uid='{$member['id']}' and  (sh=1 || sh=3)  and createtime>'{$sbegin_time}' and createtime<'{$send_time}' and jltype='{$jltype}' and tztype=1");
			  if(empty($pddsydfygorder)){
			  	$pddsydfygorder='0.00';
			  }else{
			  	$pddsydfygorder=number_format($pddsydfygorder,2);
			  }
			  //上月【结算】佣金
			  $pddsyjsyjorder = pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename($this->modulename.'_pddtjorder')." where weid='{$_W['uniacid']}' and  uid='{$member['id']}' and  sh=2 and createtime>'{$sbegin_time}' and createtime<'{$send_time}' and jltype='{$jltype}' and tztype=1");
			  if(empty($pddsyjsyjorder)){
			  	$pddsyjsyjorder='0.00';
			  }else{
			  	$pddsyjsyjorder=number_format($pddsyjsyjorder,2);
			  }
			  
			  //本月预估【付款】收入【佣金】
			  $pddbyygfkyjorder = pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename($this->modulename.'_pddtjorder')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and (sh=1 || sh=3)  and createtime>'{$bbegin_time}' and createtime<'{$bend_time}' and jltype='{$jltype}' and tztype=1");
			  if(empty($pddbyygfkyjorder)){
			  	$pddbyygfkyjorder='0.00';
			  }else{
			  	$pddbyygfkyjorder=number_format($pddbyygfkyjorder,2);
			  }
			  
			  //本月预估【结算】收入【佣金】
			  $pddbyfkjssryjorder = pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename($this->modulename.'_pddtjorder')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and sh=2 and createtime>'{$bbegin_time}' and createtime<'{$bend_time}' and jltype='{$jltype}' and tztype=1");
			  if(empty($pddbyfkjssryjorder)){
			  	$pddbyfkjssryjorder='0.00';
			  }else{
			  	$pddbyfkjssryjorder=number_format($pddbyfkjssryjorder,2);
			  }	
			  
			  $daytime=strtotime(date("Y-m-d 00:00:00"));//今天0点
			  $zttime=strtotime(date("Y-m-d 00:00:00",strtotime("-1 day")));//昨天0点
			  
			  //今日付款笔数
			  $pdddayordercount= pdo_fetchcolumn("SELECT count(id) FROM " . tablename('tiger_newhu_pddtjorder')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and  (sh=1 || sh=2 || sh=3) and createtime>'{$daytime}' and jltype='{$jltype}' and tztype=1"); 
			  if(empty($pdddayordercount)){
			  	$pdddayordercount=0;
			  }
			  //今日付款佣金
			  $pdddaycordersum= pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename('tiger_newhu_pddtjorder')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and  (sh=1 || sh=2 || sh=3) and createtime>'{$daytime}' and jltype='{$jltype}' and tztype=1"); 
			  if(empty($pdddaycordersum)){
			  	$pdddaycordersum='0.00';
			  }else{
			  	$pdddaycordersum=number_format($pdddaycordersum,2);
			  }
			  				
			  //昨日付款笔数
			  $pddzrfkcount= pdo_fetchcolumn("SELECT count(id) FROM " . tablename('tiger_newhu_pddtjorder')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and  (sh=1 || sh=2 || sh=3) and createtime<'{$daytime}' and createtime>'{$zttime}'  and jltype='{$jltype}' and tztype=1");
			  if(empty($pddzrfkcount)){
			  	$pddzrfkcount=0;
			  }
			  //付款佣金
			  $pddzrfksum= pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename('tiger_newhu_pddtjorder')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and  (sh=1 || sh=2 || sh=3) and createtime<'{$daytime}' and createtime>'{$zttime}'  and jltype='{$jltype}' and tztype=1");
			  if(empty($pddzrfksum)){
			  	$pddzrfksum='0.00';
			  }else{
			  	$pddzrfksum=number_format($pddzrfksum,2);
			  }
			  
			  //上月【订单数】,付款和结算的
			  $pddsyddsorder = pdo_fetchcolumn("SELECT COUNT(id) FROM " . tablename($this->modulename.'_pddtjorder')." where weid='{$_W['uniacid']}' and  uid='{$member['id']}' and  (sh=1 ||  sh=2 || sh=3)  and createtime>'{$sbegin_time}' and createtime<'{$send_time}' and jltype='{$jltype}' and tztype=1");
			  if(empty($pddsyddsorder)){
			  	$pddsyddsorder=0;
			  }
			  
			  //本月预估【订单数】,付款和结算的
			  $pddbyddsorder = pdo_fetchcolumn("SELECT COUNT(id) FROM " . tablename($this->modulename.'_pddtjorder')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and (sh=1 || sh=2 || sh=3)  and createtime>'{$bbegin_time}' and createtime<'{$bend_time}' and jltype='{$jltype}' and tztype=1");
			  if(empty($pddbyddsorder)){
			  	$pddbyddsorder=0;
			  }
			  //拼多多收入统计结束-----------------------------------------------
			  
			  //京东收入统计开始------------------------------------------------------
			  //淘宝上月【付款】佣金
			  $jdsydfygorder = pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename($this->modulename.'_jdtjorder')." where weid='{$_W['uniacid']}' and  uid='{$member['id']}' and  (sh=1 || sh=3)  and createtime>'{$sbegin_time}' and createtime<'{$send_time}' and jltype='{$jltype}' and tztype=1");
			  if(empty($jdsydfygorder)){
			  	$jdsydfygorder='0.00';
			  }else{
			  	$jdsydfygorder=number_format($jdsydfygorder,2);
			  }
			  //淘宝上月【结算】佣金
			  $jdsyjsyjorder = pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename($this->modulename.'_jdtjorder')." where weid='{$_W['uniacid']}' and  uid='{$member['id']}' and  sh=2 and createtime>'{$sbegin_time}' and createtime<'{$send_time}' and jltype='{$jltype}' and tztype=1");
			  if(empty($jdsyjsyjorder)){
			  	$jdsyjsyjorder='0.00';
			  }else{
			  	$jdsyjsyjorder=number_format($jdsyjsyjorder,2);
			  }
			  
			  //淘宝本月预估【付款】收入【佣金】
			  $jdbyygfkyjorder = pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename($this->modulename.'_jdtjorder')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and (sh=1 || sh=3)  and createtime>'{$bbegin_time}' and createtime<'{$bend_time}' and jltype='{$jltype}' and tztype=1");
			  if(empty($jdbyygfkyjorder)){
			  	$jdbyygfkyjorder='0.00';
			  }else{
			  	$jdbyygfkyjorder=number_format($jdbyygfkyjorder,2);
			  }
			  
			  //淘宝本月预估【结算】收入【佣金】
			  $jdbyfkjssryjorder = pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename($this->modulename.'_jdtjorder')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and sh=2 and createtime>'{$bbegin_time}' and createtime<'{$bend_time}' and jltype='{$jltype}' and tztype=1");
			  if(empty($jdbyfkjssryjorder)){
			  	$jdbyfkjssryjorder='0.00';
			  }else{
			  	$jdbyfkjssryjorder=number_format($jdbyfkjssryjorder,2);
			  }	
			  
			  $daytime=strtotime(date("Y-m-d 00:00:00"));//今天0点
			  $zttime=strtotime(date("Y-m-d 00:00:00",strtotime("-1 day")));//昨天0点
			  
			  //今日付款笔数
			  $jddayordercount= pdo_fetchcolumn("SELECT count(id) FROM " . tablename('tiger_newhu_jdtjorder')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and  (sh=1 || sh=2 || sh=3) and createtime>'{$daytime}' and jltype='{$jltype}' and tztype=1"); 
			  if(empty($jddayordercount)){
			  	$jddayordercount=0;
			  }
			  //今日付款佣金
			  $jddaycordersum= pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename('tiger_newhu_jdtjorder')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and  (sh=1 || sh=2 || sh=3) and createtime>'{$daytime}' and jltype='{$jltype}' and tztype=1"); 
			  if(empty($jddaycordersum)){
			  	$jddaycordersum='0.00';
			  }else{
			  	$jddaycordersum=number_format($jddaycordersum,2);
			  }
			  				
			  //昨日付款笔数
			  $jdzrfkcount= pdo_fetchcolumn("SELECT count(id) FROM " . tablename('tiger_newhu_jdtjorder')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and  (sh=1 || sh=2 || sh=3) and createtime<'{$daytime}' and createtime>'{$zttime}'  and jltype='{$jltype}' and tztype=1");
			  if(empty($jdzrfkcount)){
			  	$jdzrfkcount=0;
			  }
			  //昨日付款佣金
			  $jdzrfksum= pdo_fetchcolumn("SELECT SUM(jl) FROM " . tablename('tiger_newhu_jdtjorder')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and  (sh=1 || sh=2 || sh=3) and createtime<'{$daytime}' and createtime>'{$zttime}'  and jltype='{$jltype}' and tztype=1");
			  if(empty($jdzrfksum)){
			  	$jdzrfksum='0.00';
			  }else{
			  	$jdzrfksum=number_format($jdzrfksum,2);
			  }
			  
			  //淘宝上月【订单数】,付款和结算的
			  $jdsyddsorder = pdo_fetchcolumn("SELECT COUNT(id) FROM " . tablename($this->modulename.'_jdtjorder')." where weid='{$_W['uniacid']}' and  uid='{$member['id']}' and  (sh=1 ||  sh=2 || sh=3)  and createtime>'{$sbegin_time}' and createtime<'{$send_time}' and jltype='{$jltype}' and tztype=1");
			  if(empty($jdsyddsorder)){
			  	$jdsyddsorder=0;
			  }
			  
			  //淘宝本月预估【订单数】,付款和结算的
			  $jdbyddsorder = pdo_fetchcolumn("SELECT COUNT(id) FROM " . tablename($this->modulename.'_jdtjorder')." where weid='{$_W['uniacid']}' and uid='{$member['id']}' and (sh=1 || sh=2 || sh=3)  and createtime>'{$bbegin_time}' and createtime<'{$bend_time}' and jltype='{$jltype}' and tztype=1");
			  if(empty($jdbyddsorder)){
			  	$jdbyddsorder=0;
			  }
			  // 京东收入统计结束
				


        //print_r($member);


       include $this->template ( 'member/tzptmember' );
