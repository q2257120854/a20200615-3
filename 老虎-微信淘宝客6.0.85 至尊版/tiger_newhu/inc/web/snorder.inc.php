<?php
        global $_W, $_GPC;
        $weid=$_W['uniacid'];//绑定公众号的ID
        $pindex = max(1, intval($_GPC['page']));
		$psize = 20;
        $order=$_GPC['order'];
        $orderLineStatusDesc=$_GPC['orderLineStatusDesc'];
        $op=$_GPC['op'];
        $dd=$_GPC['dd'];
        
      if($op==1){//同步
	  
	  $snset = pdo_fetch ( 'select * from ' . tablename ("tiger_newhu_snset" ) . " where weid='{$weid}' order by id desc" );
	  //return $snset;
	  // require_once IA_ROOT."/addons/tiger_newhu/inc/sdk/sn/config/config.php";
	
	  
	  $sjarr=getDateFromRange($_GPC['starttime'], $_GPC['endtime']);
	  // echo "<pre>";
	  // print_r($sjarr);
	  // exit;

		foreach($sjarr as $k=>$v){
			//echo "<pre>";
			// echo $v['d1']."---".$v['d2']."<br>";
			$res=getsnorder($v['d1'],$v['d2'],$weid);
			// echo "<pre>";
			// print_r($res);
			// exit;
			// // 
		
			 $aaa=inorder($res,$weid);
			 // echo "<pre>";
			 // echo 111;
			 // print_r($aaa);
			 // exit;
		}

		// echo "<pre>";
		// print_r($list);
		// exit;
	
		message('订单同步成功', '', 'error');
		exit;
      }
	  
	  
	  function inorder($res,$weid){
		  // return array_values($res);
		  if(!empty($res)){
		  	foreach($res as $k=>$v){
		  		    // return $v['sn_responseContent'];
		  		    $list['weid']=$weid;
		  			$list['orderCode']=$v['orderCode'];
		  			$list['payTime']=strtotime($v['orderDetail'][0]['payTime']);
		  			$list['orderSubmitTime']=strtotime($v['orderDetail'][0]['orderSubmitTime']);
					$list['orderLineNumber']=$v['orderDetail'][0]['orderLineNumber'];
					$list['orderLineStatusDesc']=$v['orderDetail'][0]['orderLineStatusDesc'];
					$list['orderLineStatusChangeTime']=strtotime($v['orderDetail'][0]['orderLineStatusChangeTime']);
					$list['orderLineOrigin']=$v['orderDetail'][0]['orderLineOrigin'];
					$list['productName']=$v['orderDetail'][0]['productName'];
					$list['saleNum']=$v['orderDetail'][0]['saleNum'];
					$list['payAmount']=$v['orderDetail'][0]['payAmount'];
					$list['orderLineFlag']=$v['orderDetail'][0]['orderLineFlag'];
					$list['childAccountId']=$v['orderDetail'][0]['childAccountId'];
					$list['sellName']=$v['orderDetail'][0]['sellName'];
					$list['sellerCode']=$v['orderDetail'][0]['sellerCode'];
					$list['goodsNum']=$v['orderDetail'][0]['goodsNum'];
					$list['commissionRatio']=$v['orderDetail'][0]['commissionRatio'];
					$list['prePayCommission']=$v['orderDetail'][0]['prePayCommission'];
					$list['productFirstCatalog']=$v['orderDetail'][0]['productFirstCatalog'];
					$list['productSecondCatalog']=$v['orderDetail'][0]['productSecondCatalog'];
					$list['productThirdCatalog']=$v['orderDetail'][0]['productThirdCatalog'];
					$list['orderType']=$v['orderDetail'][0]['orderType'];
					$list['positionId']=$v['orderDetail'][0]['positionId'];
					$list['goodsGroupCatalog']=$v['orderDetail'][0]['goodsGroupCatalog'];
					$list['saleType']=$v['orderDetail'][0]['saleType'];
					$list['pictureUrl']=$v['orderDetail'][0]['pictureUrl'];
		  			$list['createtime']=time();			

		  			$ord=pdo_fetchall ( 'select * from ' . tablename ("tiger_newhu_snorder" ) . " where weid='{$weid}' and orderCode='{$list['orderCode']}'" );
		  			if(empty($ord)){
		  				if(!empty($list['orderCode'])){
		  					$a=pdo_insert ("tiger_newhu_snorder", $list );
							
		  				}						 	
		  				//echo "插入成功";
		  			}else{
		  				if(!empty($list['orderCode'])){
		  					$b=pdo_update("tiger_newhu_snorder",$list, array ('orderCode' =>$list['orderCode'],'weid'=>$weid));
		  				}
		  				//echo "更新成功";
		  			}
		  	}
		  }
	  }
	  
	  function getsnorder($starttime,$endtime,$weid){
	  			$snset = pdo_fetch ( 'select * from ' . tablename ("tiger_newhu_snset" ) . " where weid='{$weid}' order by id desc" );
				//return $snset;
				require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/sn/config/config.php";
	  			require_once IA_ROOT."/addons/tiger_newhu/inc/sdk/sn/SuningSdk.php";
	  			require_once IA_ROOT."/addons/tiger_newhu/inc/sdk/sn/DefaultSuningClient.php";	
	  			require_once IA_ROOT."/addons/tiger_newhu/inc/sdk/sn/request/netalliance/OrderQueryRequest.php";
	  			$req = new OrderQueryRequest();
	  			$req -> setEndTime($endtime);
	  			$req -> setOrderLineStatus("0");
	  			$req -> setPageNo("1");
	  			$req -> setPageSize("30");
	  			$req -> setStartTime($starttime);
	  			//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
	  			$req -> setCheckParam('true');
	  			$serverUrl = "https://open.suning.com/api/http/sopRequest";
	  			$appKey = $snset['appkey'];
	  			 $appSecret = $snset['appsecret'];
	  			$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
	  			$resp1 = $client -> execute($req);
	  			$resp=json_decode($resp1,true);
			    $resp=$resp['sn_responseContent']['sn_body']['queryOrder'];
				return $resp;
	  }
      
      function getDateFromRange($startdate, $enddate){
	    $stimestamp = strtotime($startdate);
	    $etimestamp = strtotime($enddate);
	    // 计算日期段内有多少天
	    $days = ($etimestamp-$stimestamp)/86400+1;

	    // 保存每天日期
	    $date = array();
	    for($i=0; $i<$days; $i++){
			$d1=date('Y-m-d H:i:s', $stimestamp+(86400*$i));
			$d2=date('Y-m-d H:i:s', $stimestamp+(86400*$i)+86400);
	        $date[$i] =array('d1'=>$d1,'d2'=>$d2);
	    }
		
	    return $date;
	}
	
	if(checksubmit('submitdel')){//删除
			if(!$_GPC['id']){
            	 message('请选择订单', referer(), 'error');
        	}
            foreach ($_GPC['id'] as $id){
                $row = pdo_fetch("SELECT id FROM " . tablename($this->modulename.'_snorder') . " WHERE id = :id", array(':id' => $id));

                if (empty($row)){
                    continue;
                }
                pdo_delete($this->modulename."_snorder",array('id'=>$id));
            }
            message('批量删除成功', referer(), 'success');        	
    }
        
       


       if($op=='seach'){
           if (!empty($order)){
              $where .= " and (orderCode='{$order}' or childAccountId='{$order}')  ";
            }
//            if (!empty($zt)){
//              $where .= " and orderzt='{$zt}'";
//            }
           $day=date('Y-m-d');
           $day=strtotime($day);//今天0点时间戳  

            if($dd==1){//当日
                $where.=" and payTime>{$day}";        
            }
            if($dd==2){//昨天
                $day3=strtotime(date("Y-m-d",strtotime("-1 day")));//昨天时间
                $where.=" and payTime>{$day3} and payTime<{$day}";        
            }
            if($dd==3){//本月
                // 本月起始时间:
                $bbegin_time = strtotime(date("Y-m-d H:i:s", mktime ( 0, 0, 0, date ( "m" ), 1, date ( "Y" ))));
                $where.=" and payTime>{$bbegin_time}";        
            }
            if($dd==4){
                 // 上月起始时间:
                 //$sbegin_time = strtotime(date('Y-m-01 00:00:00',strtotime('-1 month')));//上个月开始时间
                 $sbegin_time = strtotime(date('Y-m-d', mktime(0,0,0,date('m')-1,1,date('Y'))));//上个月开始时间
                 $send_time = strtotime(date("Y-m-d 23:59:59", strtotime(-date('d').'day')));//上个月结束时间
                 if($zt==2){//按结算时间算
                   $where.="and orderLineStatusChangeTime>{$sbegin_time} and orderLineStatusChangeTime<{$send_time}";
                 }else{
                   $where.="and payTime>{$sbegin_time} and payTime<{$send_time}";
                 }
                 
            }
            if(!empty($orderLineStatusDesc)){//已失效
              $where.=" and orderLineStatusDesc='{$orderLineStatusDesc}'";
            }
            
       
       }
		
		// echo $where;

		$list = pdo_fetchall("select * from ".tablename($this->modulename."_snorder")." where weid='{$_W['uniacid']}' {$where} order by id desc LIMIT " . ($pindex - 1) * $psize . ",{$psize}");
		$total = pdo_fetchcolumn("SELECT COUNT(*) FROM " . tablename($this->modulename.'_snorder')." where weid='{$_W['uniacid']}'  {$where}");
		$pager = pagination($total, $pindex, $psize);
//      $totalsum = pdo_fetchcolumn("SELECT sum(xgyg) FROM " . tablename($this->modulename.'_snorder')." where weid='{$_W['uniacid']}'  {$where}");

//echo "<pre>";
//print_r($list);



        include $this->template ( 'snorder' );

