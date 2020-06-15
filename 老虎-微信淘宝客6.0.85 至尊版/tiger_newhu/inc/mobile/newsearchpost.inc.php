<?php
header('Content-Type: text/html;charset=utf-8');
    header('Access-Control-Allow-Origin:*'); // *代表允许任何网址请求
    header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); // 允许请求的类型
    header('Access-Control-Allow-Credentials: true'); // 设置是否允许发送 cookies
    header('Access-Control-Allow-Headers: Content-Type,Content-Length,Accept-Encoding,X-Requested-with, Origin'); // 设置允许自定义请求头的字段
global $_W, $_GPC;
$content=trim($_GPC['content']);
$tbpid=$_GPC['tbpid'];
$qdid=$_GPC['qdid'];
$pddpid=$_GPC['pddpid'];
$jdpid=$_GPC['jdpid'];
$uid=$_GPC['uid'];
$cfg = $this->module['config'];

$share=pdo_fetch("select * from ".tablename('tiger_newhu_share')." where weid='{$_W['uniacid']}' and id='{$uid}'");

 
  //京东开始
 $arr=strstr($content,"jd.com");
  if($arr!==false){
	  $jdset=pdo_fetch("select * from ".tablename('tuike_jd_jdset')." where weid='{$_W['uniacid']}' order by id desc");
	  if(empty($jdpid)){
		  $jdpid=$jdset['jdpid'];
	  }
	  $geturl=$this->geturl($content);
	  $goodsid=$this->jdgoodsID($geturl);
	  $csssurl=$_W['siteroot']."app/index.php?i=".$_W['uniacid']."&c=entry&jdlm=1&do=jdview&m=tuike_jd&cjcjss=1&itemid=".$goodsid;
	 // echo $csssurl;
	 // exit;
	  $ssview=$this->curl_request($csssurl);
	  $sssviewarr=@json_decode($ssview, true);
	  $yhjurl=$sssviewarr['discount_link'];//优惠券链接
	  if(empty($sssviewarr['itemtitle'])){
	  	//暂无优惠
	  }
	  // echo "<pre>";
	  // print_r($sssviewarr);
	  // exit;
	  $zl= $this->jdviewzl($jdset,$goodsid,$jdpid,$yhjurl);
	  // echo "<pre>";
	  // echo $goodsid."----<br>";
	  // echo $jdpid."----<br>";
	  // echo $yhjurl."----<br>";
	  // print_r($jdset);
	  // print_r($zl);
	  // exit;
	  $couponmoney=$sssviewarr['couponmoney'];
	  $vurl=$zl;
	  $itemprice=$sssviewarr['itemprice'];
	  $itemendprice=$sssviewarr['itemendprice'];
	  $rate=$sssviewarr['rate'];
	  //奖励
	  $bl=pdo_fetch("select * from ".tablename('tiger_wxdaili_set')." where weid='{$_W['uniacid']}'");
	  if($cfg['lbratetype']==3){//全都用代理积分
	  	$flyj=$this->ptyjjl($itemendprice,$rate,$cfg);
	  	if($cfg['fxtype']==1){//积分           
	     		 $lx=$cfg["hztype"];	
	     		  $flyj=intval($flyj);		           		 
	      }else{//余额
	          $lx=$cfg["yetype"];
	          if($cfg['txtype']==3){
	              $lx='集分宝';            
	          }
	          $zyh=$couponmoney+$flyj;//优惠金额
	    	    $zyhhprice=$itemprice-$zyh;//优惠后价格
	      }
	  }else{
	         if($cfg['fxtype']==1){//积分
	              $flyj=$this->sharejl($itemendprice,$rate,$bl,$share,$cfg);
	          }else{//余额            
	              $flyj=$this->sharejl($itemendprice,$rate,$bl,$share,$cfg);
	              $zyh=$couponmoney+$flyj;//优惠金额
	              $zyhhprice=$itemprice-$zyh;//优惠后价格
	          }	
	  }
	 //    $msg=str_replace('#换行#','', $cfg['pddwenan']);
		// $msg=str_replace('#拼多多短网址#',$vurl, $msg);
		// $msg=str_replace('#名称#',$sssviewarr['itemtitle'], $msg);
		// $msg=str_replace('#推荐理由#',$sssviewarr['itemtitle'], $msg);
		// $msg=str_replace('#原价#',$itemprice, $msg);
		// $msg=str_replace('#券后价#',$itemendprice, $msg);
		// $msg=str_replace('#优惠券#',$couponmoney, $msg);			
		// $msg=str_replace('#奖励#',$flyj.$lx, $msg);
		if(empty($couponmoney)){
			$couponmoney=0;
		}
		$data=array(
			'pttype'=>1,
			'url'=>$vurl,
			'itemtitle'=>$sssviewarr['itemtitle'],
			'itemprice'=>$itemprice,
			'itemendprice'=>$itemendprice,
			'couponmoney'=>$couponmoney,
			'flyj'=>$flyj			
		);
		exit(json_encode(array('err' => 1, 'data' =>$data)));
		echo "<pre>";
		print_r($data);

	  //结束
  }
//京东结束


 //拼多多
         $arr=strstr($content,"yangkeduo.com");
        if($arr!==false){        	
			
			//PID结束
        	$pddset=pdo_fetch("select * from ".tablename('tuike_pdd_set')." where weid='{$_W['uniacid']}'");
			if(empty($pddpid)){
				$p_id=$pddset['pddpid'];
			}else{
               $p_id=$pddpid;
            }
			$owner_name=$pddset['ddjbbuid'];
			
			
			//获取链接
			$geturl=$this->geturl($content);
			$itemid=$this->pddgoodsID($geturl);
			//return $this->respText($itemid);
			if(empty($itemid)){
				//暂无优惠券
			}		
			include ROOT_PATH . "inc/sdk/tbk/pdd.php"; 
			//转链详情
			$zl=pddviewzl($owner_name,$itemid,$p_id);	
			$goods=pddview($owner_name,$itemid);
			// echo "<pre>";
			// print_r($zl);
			// print_r($goods);
			// exit;
			$data=$goods['goods_detail_response']['goods_details'][0];
			
			$zldata=$zl['goods_promotion_url_generate_response']['goods_promotion_url_list'][0];		
            //exit(json_encode(array('err' => 100, 'data' =>$zldata)));
			
			$itemendprice=($data['min_group_price']-$data['coupon_discount'])/100;
			$itemtitle=$data['goods_name'];
			$itemprice=$data['min_group_price']/100;
			$couponmoney=$data['coupon_discount']/100;
			
			$url2=$zldata['we_app_web_view_url'];//短网址
			$itemdesc=$data['goods_desc'];
			$rate=$data['promotion_rate']/10;//实际佣金
			if(!empty($zl['error_response'])){
				//$itemtitle=$zl['error_response']['error_msg'];
				//$itemtitle=$cfg['error2'];
				//return $this->respText($itemtitle);
			}
			if(empty($rate)){
				$itemtitle=$cfg['error2'];
				//return $this->respText($itemtitle);
			}
			$bl=pdo_fetch("select * from ".tablename('tiger_wxdaili_set')." where weid='{$_W['uniacid']}'");
			if($cfg['lbratetype']==3){//全都用代理积分
				$flyj=$this->ptyjjl($itemendprice,$rate,$cfg);
	        	if($cfg['fxtype']==1){//积分           
	           		 $lx=$cfg["hztype"];	
	           		  $flyj=intval($flyj);		           		 
		        }else{//余额
		            $lx=$cfg["yetype"];
		            if($cfg['txtype']==3){
		                $lx='集分宝';            
		            }
		            $zyh=$couponmoney+$flyj;//优惠金额
	          	    $zyhhprice=$itemprice-$zyh;//优惠后价格
		        }
			}else{
	               if($cfg['fxtype']==1){//积分
			            $flyj=$this->sharejl($itemendprice,$rate,$bl,$share,$cfg);
			        }else{//余额            
			            $flyj=$this->sharejl($itemendprice,$rate,$bl,$share,$cfg);
			            $zyh=$couponmoney+$flyj;//优惠金额
			            $zyhhprice=$itemprice-$zyh;//优惠后价格
			        }	
			}
			
			// $tturl=$_W['siteroot'].str_replace('./','app/',$this->createMobileurl('pddgoodslist',array('key'=>$itemtitle)));			
   //          $ddwz=$this->pdddwzw($url2);
			
			// $msg=str_replace('#换行#','', $cfg['pddwenan']);
			// $msg=str_replace('#名称#',$itemtitle, $msg);
			// $msg=str_replace('#推荐理由#',$itemdesc, $msg);
			// $msg=str_replace('#原价#',$itemprice, $msg);
			// $msg=str_replace('#券后价#',$itemendprice, $msg);
			// $msg=str_replace('#优惠券#',$couponmoney, $msg);
			// $msg=str_replace('#拼多多短网址#',$ddwz, $msg);
			// $msg=str_replace('#奖励#',$flyj.$lx, $msg);
			// $msg=str_replace('#同类产品#',$ddwz, $msg);
			$data=array(
			    'pttype'=>2,
				'url'=>$url2,
				'itemtitle'=>$itemtitle,
				'itemprice'=>$itemprice,
				'itemendprice'=>$itemendprice,
				'couponmoney'=>$couponmoney,
				'flyj'=>$flyj			
			);
			exit(json_encode(array('err' => 100, 'data' =>$data)));
			echo "<pre>";
			print_r($data);
        }
         //拼多多结束
		 
		 
		 
		 //淘宝
		 if(empty($tbpid)){
			 $tbpid=$cfg['ptpid'];
		 }
		$pidSplit=explode('_',$tbpid);
		$memberid=$pidSplit[1];
		$cfg['siteid']=$pidSplit[2];
		$cfg['adzoneid']=$pidSplit[3];
		if(empty($memberid)){
			$tksign = pdo_fetch("SELECT * FROM " . tablename($this->modulename."_tksign") . " WHERE  tbuid='{$cfg['tbuid']}'");
		}else{
			$tksign = pdo_fetch("SELECT * FROM " . tablename($this->modulename."_tksign") . " WHERE  memberid='{$memberid}'");
		}
		
        include ROOT_PATH . "inc/sdk/tbk/tb.php"; 
		include ROOT_PATH . "inc/sdk/tbk/goodsapi.php"; 
		$tklinfo=tklnew($content,$cfg['adzoneid'],$cfg['siteid'],$tksign['sign']);
		if($tklinfo['sub_code']==10000){
			//无佣金
		}
		$goodsid=$tklinfo['data']['num_iid'];
		if(!empty($goodsid)){
				  $geturl="https://item.taobao.com/item.htm?id=".$goodsid;
		}else{
			$geturl=$this->geturl($content);
		}
		
		 if(!empty($geturl)){ 
			 $istao=$this->myisexists($geturl);            
			  if(!empty($istao)){
				if($istao==1){//e22a地址				
					 $goodsid=$this->getgoodsid($geturl);
					 if(empty($goodsid)){
						$goodsid=$this->hqgoodsid($geturl); 
					 }
					  if(empty($goodsid)){
						 //无佣金
					  }  
									 
				}elseif($istao==2){//淘宝天猫地址
					$goodsid=$this->mygetID($geturl); 
					 if(empty($goodsid)){
						$goodsid=$this->getgoodsid($geturl);
					 }
					  if(empty($goodsid)){
						  //无佣金
					  }                     
				}elseif($istao==3){
					 $geturlitemid=$this->getrhy($geturl);
					 $goodsid=$geturlitemid['itemid'];				 
				}
				$url="https://item.taobao.com/item.htm?id=".$goodsid;
				$key=urlencode($url);                     
				$goods=cjsearch(1,$cfg['ptpid'],$tksign['sign'],$tksign['tbuid'],$_W,$cfg,$key,2,'','','','',0,0,0);   
				$goods=$goods['result_list']['map_data'];//超级搜索结果  
				
				if(!empty($goods['coupon_amount'])){//优惠券金额					
					$conmany=$goods['coupon_amount'];     
				}else{
					$conmany=0;
				} 

				 $res=hqyongjin($url,0,$cfg,$this->modulename,'','',$tksign['sign'],$tksign['tbuid'],$_W,1,$goodsid,$qdid);//申请高佣金     
				 $erylj=$res['dcouponLink'];
				 if(!empty($erylj)){
				 	 $erylj=str_replace("http:","https:",$erylj);
				     $taokouling=$this->tkl($erylj,$goods['pict_url'],$goods['title']);
				     $res['taokouling']=$taokouling;
				 }
				  $itemprice=$goods['zk_final_price'];
				  $commissionRate=$res['commissionRate'];
				  if(empty($conmany)){//如果ID为空优惠券有门槛的，就不计算优惠券
				    $yongjin=$itemprice*$commissionRate/100;//佣金
				    $itemendprice=$itemprice;
				  }else{
				    $yongjin=($itemprice-$conmany)*$commissionRate/100;//佣金
				    $itemendprice=$itemprice-$conmany;
				  }
				   $bl=pdo_fetch("select * from ".tablename('tiger_wxdaili_set')." where weid='{$_W['uniacid']}'");
				   if($cfg['lbratetype']==3){//全都用代理积分
				   	$flyj=$this->ptyjjl($itemendprice,$commissionRate,$cfg);
				   	if($cfg['fxtype']==1){//积分           
				      		 $lx=$cfg["hztype"];	
				      		  $flyj=intval($flyj);		           		 
				       }else{//余额
				           $lx=$cfg["yetype"];
				           if($cfg['txtype']==3){
				               $lx='集分宝';            
				           }
				           $zyh=$conmany+$flyj;//优惠金额
				     	    $zyhhprice=$itemprice-$zyh;//优惠后价格
				       }
				   }else{
				   	 
				          if($cfg['fxtype']==1){//积分
				               $flyj=$this->sharejl($itemendprice,$commissionRate,$bl,$share,$cfg);
				           }else{//余额            
				           	 //return $this->respText("aacs".$share['dltype']);
				               $flyj=$this->sharejl($itemendprice,$commissionRate,$bl,$share,$cfg);
				               //return $this->respText("aacs".$flyj);
				              
				               $zyh=$conmany+$flyj;//优惠金额
				               $zyhhprice=$itemprice-$zyh;//优惠后价格
				           }	
				   }
				   $goodsviewtz=$_W['siteroot'].str_replace('./','app/',$this->createMobileurl('tklview',array('itemid'=>$goodsid,'itemendprice'=>$itemendprice,'couponmoney'=>$conmany,'itempic'=>urlencode($goods['pict_url']),'tkl'=>$res['taokouling'],'itemprice'=>$itemprice)))."&rhyurl=".urlencode($erylj)."&itemtitle=".urlencode($goods['title']);
				   
				   $tcn=$this->dwz($erylj,$goodsviewtz);//短网址
		    	   $data=array(
				    'pttype'=>3,
				   	'url'=>$tcn,
				   	'itemtitle'=>$goods['title'],
				   	'itemprice'=>$itemprice,
				   	'itemendprice'=>$itemendprice,
				   	'couponmoney'=>$conmany,
				   	'flyj'=>$flyj,
					'tkl'=>$res['taokouling']
				   );
				   exit(json_encode(array('err' => 100, 'data' =>$data)));
				   echo "<pre>";
				   print_r($data);
				
				
			 }
		 }else{
         	  exit(json_encode(array('err' => 200, 'data' =>"查不到")));
         }
