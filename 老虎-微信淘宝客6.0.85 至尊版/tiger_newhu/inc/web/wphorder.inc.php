<?php
        global $_W, $_GPC;
        $weid=$_W['uniacid'];//绑定公众号的ID
        $pindex = max(1, intval($_GPC['page']));
		$psize = 20;
        $order=$_GPC['order'];
        $orderSubStatusName=$_GPC['orderSubStatusName'];
        $op=$_GPC['op'];
        $dd=$_GPC['dd'];
        
      if($op==1){//同步
	  
	  $sjarr=getDateFromRange($_GPC['starttime'], $_GPC['endtime']);

		foreach($sjarr as $k=>$v){
			//echo "<pre>";
			// echo $v['d1']."---".$v['d2']."<br>";
			$res=getwphorder($v['d1'],$v['d2'],$weid);
			// echo "<pre>";
			// print_r($res);
			$aaa=inorder($res,$weid);
		}

		// echo "<pre>";
		// print_r($list);
		// exit;
	
		message('订单同步成功', '', 'error');
		exit;
      }
	  
	  
	  function inorder($res,$weid){
		  if(!empty($res)){
		  	foreach($res as $k=>$v){
		  		$v=(array)$v;
		  		    $list['weid']=$weid;
		  			$list['orderSn']=$v['orderSn'];
		  			$list['status']=$v['status'];
		  			$list['newCustomer']=$v['newCustomer'];
		  			$list['channelTag']=$v['channelTag'];
		  			$list['orderTime']=$v['orderTime']/1000;
		  			$list['signTime']=$v['signTime']/1000;
		  			$list['settledTime']=$v['settledTime']/1000;
		  			$list['lastUpdateTime']=$v['lastUpdateTime']/1000;
		  			$list['settled']=$v['settled'];
		  			$list['selfBuy']=$v['selfBuy'];
		  			$list['orderSubStatusName']=$v['orderSubStatusName'];
		  			$list['commission']=$v['commission'];
		  			$list['afterSaleChangeCommission']=$v['afterSaleChangeCommission'];
		  			$list['afterSaleChangeGoodsCount']=$v['afterSaleChangeGoodsCount'];
		  			$list['commissionEnterTime']=$v['commissionEnterTime'];
		  			$list['orderSource']=$v['orderSource'];
		  			$list['pid']=$v['pid'];
		  			$list['isPrepay']=$v['isPrepay'];
		  			$list['orderSn']=$v['orderSn'];
		  			$a=(array)$v['detailList'][0];
		  			$list['goodsId']=$a['goodsId'];
		  			$list['goodsName']=$a['goodsName'];
		  			$list['goodsThumb']=$a['goodsThumb'];
		  			$list['goodsCount']=$a['goodsCount'];
		  			$list['commissionTotalCost']=$a['commissionTotalCost'];
		  			$list['commissionRate']=$a['commissionRate'];
		  			// $list[$k]['commission']=$a['commission'];
		  			$list['commCode']=$a['commCode'];
		  			$list['commName']=$a['commName'];
		  			$list['afterSaleInfo']=$a['afterSaleInfo'];
		  			$list['sizeId']=$a['sizeId'];
		  			$list['createtime']=time();
		  			// echo "<pre>";
		  			// print_r($list);
		  			// exit;
				
		  			$ord=pdo_fetchall ( 'select * from ' . tablename ("tiger_newhu_wphorder" ) . " where weid='{$weid}' and orderSn='{$list['orderSn']}'" );
		  			if(empty($ord)){
		  				if(!empty($list['orderSn'])){
		  					$a=pdo_insert ("tiger_newhu_wphorder", $list );
							
		  				}						 	
		  				//echo "插入成功";
		  			}else{
		  				if(!empty($list['orderSn'])){
		  					$b=pdo_update("tiger_newhu_wphorder",$list, array ('orderSn' =>$list['orderSn'],'weid'=>$weid));
		  				}
		  				//echo "更新成功";
		  			}
		  	}
		  }
	  }
	  
	  function getwphorder($starttime,$endtime,$weid){
	  			$wphsignset=pdo_fetch("select * from ".tablename('tiger_newhu_wphsign')." where weid='{$weid}'");
	  			$whpsign=$wphsignset['access_token'];
	  			require_once IA_ROOT."/addons/tiger_newhu/inc/sdk/wph/com/vip/adp/api/open/service/UnionOrderServiceClient.php";
	  			try {
	  			    $service=\com\vip\adp\api\open\service\UnionOrderServiceClient::getService();
	  			    $ctx=\Osp\Context\InvocationContextFactory::getInstance();
	  			    $ctx->setAppKey("2bc54d13");
	  			    $ctx->setAppSecret("E80CC551126603A3F53AA84F366527F3");
	  			    $ctx->setAppURL("https://gw.vipapis.com/");
	  				$ctx->setAccessToken($whpsign);
	  			    $ctx->setLanguage("zh");
	  			    $queryModel1=new \com\vip\adp\api\open\service\OrderQueryModel();
	  			    // $queryModel1->status=1;//订单状态:0-不合格，1-待定，2-已完结，该参数不设置默认代表全部状态
	  			    $queryModel1->orderTimeStart=$starttime;//开始时间 毫秒
	  			    $queryModel1->orderTimeEnd=$endtime;//结束时间
	  			    $queryModel1->page=1;
	  			    $queryModel1->pageSize=80;
	  			    $queryModel1->requestId="requestIdsfsdfass";
	  			    // $queryModel1->updateTimeStart=1;
	  			    // $queryModel1->updateTimeEnd=1;
	  			    // $orderSnList2=array();//订单号列表
	  			    // $orderSnList2[0]="value";
	  			    $queryModel1->orderSnList=$orderSnList2;
	  			    $res=(array)$service->orderListWithOauth($queryModel1);
	  				$res=$res['orderInfoList'];
	  				return $res;
	  				// echo "<pre>";
	  				// print_r($res);
	  				// exit;
	  			} catch(\Osp\Exception\OspException $e){
					return "";
	  				// return $e;
	  			    // var_dump($e);
	  			}
	  }
      
      function getDateFromRange($startdate, $enddate){
	    $stimestamp = strtotime($startdate);
	    $etimestamp = strtotime($enddate);
	    // 计算日期段内有多少天
	    $days = ($etimestamp-$stimestamp)/86400+1;

	    // 保存每天日期
	    $date = array();
	    for($i=0; $i<$days; $i++){
			$d1=strtotime(date('Y-m-d', $stimestamp+(86400*$i)));
			$d2=$d1+86400;
	        $date[$i] =array('d1'=>$d1*1000,'d2'=>$d2*1000);
	    }
		
	    return $date;
	}
	
	if(checksubmit('submitdel')){//删除
			if(!$_GPC['id']){
            	 message('请选择订单', referer(), 'error');
        	}
            foreach ($_GPC['id'] as $id){
                $row = pdo_fetch("SELECT id FROM " . tablename($this->modulename.'_wphorder') . " WHERE id = :id", array(':id' => $id));

                if (empty($row)){
                    continue;
                }
                pdo_delete($this->modulename."_wphorder",array('id'=>$id));
            }
            message('批量删除成功', referer(), 'success');        	
    }
        
       


       if($op=='seach'){
           if (!empty($order)){
              $where .= " and (orderSn='{$order}' or pid='{$order}')  ";
            }
//            if (!empty($zt)){
//              $where .= " and orderzt='{$zt}'";
//            }
           $day=date('Y-m-d');
           $day=strtotime($day);//今天0点时间戳  

            if($dd==1){//当日
                $where.=" and orderTime>{$day}";        
            }
            if($dd==2){//昨天
                $day3=strtotime(date("Y-m-d",strtotime("-1 day")));//昨天时间
                $where.=" and orderTime>{$day3} and orderTime<{$day}";        
            }
            if($dd==3){//本月
                // 本月起始时间:
                $bbegin_time = strtotime(date("Y-m-d H:i:s", mktime ( 0, 0, 0, date ( "m" ), 1, date ( "Y" ))));
                $where.=" and orderTime>{$bbegin_time}";        
            }
            if($dd==4){
                 // 上月起始时间:
                 //$sbegin_time = strtotime(date('Y-m-01 00:00:00',strtotime('-1 month')));//上个月开始时间
                 $sbegin_time = strtotime(date('Y-m-d', mktime(0,0,0,date('m')-1,1,date('Y'))));//上个月开始时间
                 $send_time = strtotime(date("Y-m-d 23:59:59", strtotime(-date('d').'day')));//上个月结束时间
                 if($zt==2){//按结算时间算
                   $where.="and settledTime>{$sbegin_time} and settledTime<{$send_time}";
                 }else{
                   $where.="and orderTime>{$sbegin_time} and orderTime<{$send_time}";
                 }
                 
            }
            if(!empty($orderSubStatusName)){//已失效
              $where.=" and orderSubStatusName='{$orderSubStatusName}'";
            }
            
       
       }
		
		// echo $where;

		$list = pdo_fetchall("select * from ".tablename($this->modulename."_wphorder")." where weid='{$_W['uniacid']}' {$where} order by id desc LIMIT " . ($pindex - 1) * $psize . ",{$psize}");
		$total = pdo_fetchcolumn("SELECT COUNT(*) FROM " . tablename($this->modulename.'_wphorder')." where weid='{$_W['uniacid']}'  {$where}");
		$pager = pagination($total, $pindex, $psize);
//      $totalsum = pdo_fetchcolumn("SELECT sum(xgyg) FROM " . tablename($this->modulename.'_wphorder')." where weid='{$_W['uniacid']}'  {$where}");

//echo "<pre>";
//print_r($list);



        include $this->template ( 'wphorder' );

