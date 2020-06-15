<?php
//淘宝订单提交
function tbaddorder($cfg,$weid,$member,$orderid){//淘宝 普通用户提交订单
// 		$zgtxmsg=str_replace('#昵称#',$member['nickname'], $cfg['zgtxmsg']);
// 		$zgtxmsg=str_replace('#订单号#',$orderid, $zgtxmsg);
// 		$zgtxmsg=str_replace('#金额#',$jl, $zgtxmsg);
// 		postkefuxiaoxi($cfg,$weid,$member['from_user'],$zgtxmsg);

// 		$mbid=$cfg['khgetorder'];
// 		$mb=pdo_fetch("select * from ".tablename("tiger_newhu_mobanmsg")." where weid='{$weid}' and id='{$mbid}'");
// 		postmobanxiaoxi($cfg,$weid,$member['from_user'],$mb['id'],$orderid);
// 		exit;

	if(empty($member['id'])){
		if(!empty($cfg['ddorrmsg'])){
			$membererr=$cfg['ddorrmsg'];
		}else{
			$membererr='会员数据异常！请稍后在试！';
		}
		return array("error"=>1,'gzh'=>2,'msg'=>$membererr); 
	}

	
	if(pdo_tableexists('tiger_wxdaili_set')){
		$bl=pdo_fetch("select * from ".tablename('tiger_wxdaili_set')." where weid='{$weid}'");
		if($bl['dlfxtype']==1){
				if($member['dltype']==1){
					return array("error"=>1,'msg'=>'对不起!代理不能提交订单!');
				}                  
			}
	}
	
	$order = pdo_fetch("select * from ".tablename("tiger_newhu_order")." where weid='{$weid}' and orderid='{$orderid}'");
	
if(empty($order)){
//查询淘客订单库
		$tkorder = pdo_fetch("select * from ".tablename("tiger_newhu_tkorder")." where weid='{$weid}' and orderid='{$orderid}'");
		if(empty($tkorder)){
			return array("error"=>1,'msg'=>'您提交的订单暂未更新，请过15分钟后在提交，感谢您的支持！');
		}
		
		
		
		//免单商品不能提交
		 $mdset= pdo_fetch("SELECT * FROM " . tablename("tiger_newhu_miandanset") . " WHERE weid='{$weid}' order by id desc ");//免单设置
		 $pidSplit=explode('_',$mdset['miandanpid']);
		 $adzoneid=$pidSplit[3];
		 if($tkorder['tgwid']==$adzoneid){
			 return array("error"=>1,'msg'=>'免单商品不能提交,请到免单入口提交！');
		 }		 
		//结束
		
		$tkordersum = pdo_fetchcolumn("select sum(xgyg) from ".tablename("tiger_newhu_tkorder")." where weid='{$weid}' and orderid='{$orderid}' and orderzt!='订单失效'");
		$tkorder['xgyg']=$tkordersum;
		
		//是否开了按佣金多少来分佣金
		if($cfg['diyyjtype']==1){//开启		
			$fyrmb = unserialize($cfg['fyrmb']);
			$zgfa = unserialize($cfg['zgfa']);
			$yjfa = unserialize($cfg['yjfa']);
			$ejfa = unserialize($cfg['ejfa']);
			foreach ($fyrmb as $key => $value) {
			    if (empty($value)) continue;
			    $tplist[] = array('fyrmb'=>$value,'zgfa'=>$zgfa[$key],'yjfa'=>$yjfa[$key],'ejfa'=>$ejfa[$key]);
			}
			$jlyj=dbddjl($tkorder['xgyg'],$tplist);
			$cfg['zgf']=$jlyj['zgfa'];
			$cfg['yjf']=$jlyj['yjfa'];
			$cfg['ejf']=$jlyj['ejfa'];
			$cfg['gdfxtype']=1;//改成固定计算
			//return array("error"=>1,'msg'=>$cfg['gdfxtype'].'---'.$cfg['zgf'].'---'.$cfg['yjf'].'---'.$cfg['ejf']);
		}
		
		//按佣金佣金结束
		
		//return array("error"=>1,'msg'=>'对理员!'.$tkordersum);
		
		
		if($cfg['dlddfx']==1){
			if(empty($tkorder['relation_id'])){
				$dltgw=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and tgwid='{$tkorder['tgwid']}'");
			}else{
				$dltgw=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and qdid='{$tkorder['relation_id']}'");
			}
			
			if(!empty($dltgw)){
				return array("error"=>1,'msg'=>'对不起!该订单不支持奖励,请联系管理员!');
			}
		}
	if(empty($member['tbsbuid6'])){
		$tbsbuid6=substr($orderid,-6);
		$ups=array('tbsbuid6'=>$tbsbuid6);
		$b=pdo_update("tiger_newhu_share",$ups, array ('id' =>$member['id'],'weid'=>$weid));
	}



	if(!empty($tkorder)){
		if($tkorder['orderzt']=='订单失效'){
			$sh=4;//失效
			return array("error"=>1,'msg'=>'您提交的订单已退款');
		}elseif($tkorder['orderzt']=='订单付款'){
			$sh=3;//已审核
		}elseif($tkorder['orderzt']=='订单结算'){
			$sh=1;//待返
		}
	}else{
		return array("error"=>1,'msg'=>'您提交的订单暂未更新，请过15分钟后在提交，感谢您的支持！');
		$sh=0;//待审核
	}
	if($cfg['fxtype']==1){//积分
		$jltype=0;
	}elseif($cfg['fxtype']==2){//余额
		$jltype=1;
	}

	if($cfg['fxtype']==1){//自购积分
		if($cfg['gdfxtype']==1){
			$jl=$cfg['zgf'];
		}else{
			$jl=intval($tkorder['xgyg']*$cfg['zgf']/100*$cfg['jfbl']);
		}                	
	}elseif($cfg['fxtype']==2){//自购余额
		if($cfg['gdfxtype']==1){
			$jl=$cfg['zgf'];
		}else{
			$jl=$tkorder['xgyg']*$cfg['zgf']/100;  
			$jl=number_format($jl, 2, '.', '');
		}                    
	}                
	$data=array(
		'weid'=>$weid,
		'openid'=>$member['from_user'],
		'memberid'=>$member['openid'],
		'uid'=>$member['id'],
		'nickname'=>$member['nickname'],
		'avatar'=>$member['avatar'],
		'orderid'=>$orderid,
		'itemid'=>$tkorder['numid'],
		'jl'=>$jl,
		'jltype'=>$jltype,
		'sh'=>$sh,
		'yongjin'=>$tkorder['xgyg'],//佣金
		'type'=>0,
		'createtime'=>TIMESTAMP
	);
	
	//插入团长佣金记录
	$appset= pdo_fetch("SELECT * FROM " . tablename("tiger_app_tuanzhangset") . " WHERE weid='{$weid}' order by px desc ");//团长设置
	if(!empty($appset['jlpt'])){
		$tzmember=getinfotz($weid,$member['id']);
		$tzjl=$tkorder['xgyg']*$appset['jlpt']/100;
		$tzjl=number_format($tzjl, 2, '.', '');
		tbintzorder($weid,$member,$tzmember,$tkorder,$orderid,$sh,$tzjl);
	}	 
	//团长佣金记录结束

	if (pdo_insert ("tiger_newhu_order", $data ) === false) {
		return array("error"=>1,'msg'=>'系统繁忙、数据有错误！');
	}else{		
		 pdo_update("tiger_newhu_tkorder", array('zdgd'=>1), array('weid'=>$weid,'orderid' =>$orderid));
		//$member=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and from_user='{$member['openid']}'");//当前粉丝信息
		$zgtxmsg=str_replace('#昵称#',$member['nickname'], $cfg['zgtxmsg']);
		$zgtxmsg=str_replace('#订单号#',$orderid, $zgtxmsg);
		$zgtxmsg=str_replace('#金额#',$jl, $zgtxmsg);
		postkefuxiaoxi($cfg,$weid,$member['from_user'],$zgtxmsg);
		//$this->postText($member['from_user'],$zgtxmsg);//自购提示
		
	if(!empty($member['helpid'])){//一级

		if(pdo_tableexists('tiger_wxdaili_set')){//是否开启代理订单不返给二级
			$bl=pdo_fetch("select * from ".tablename('tiger_wxdaili_set')." where weid='{$weid}'");
			if(empty($bl['dlyjfltype'])){
				$tgw=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and tgwid='{$tkorder['tgwid']}'");//有没有代理推广位
				if(!empty($tgw)){
					if(!empty($cfg['khgetorder'])){//管理员订单提交提醒
						$mbid=$cfg['khgetorder'];
						$mb=pdo_fetch("select * from ".tablename("tiger_newhu_mobanmsg")." where weid='{$weid}' and id='{$mbid}'");
						//$msg=$this->mbmsg($cfg['glyopenid'],$mb,$mb['mbid'],$mb['turl'],$fans,$orderid);   
						postmobanxiaoxi($cfg,$weid,$cfg['glyopenid'],$mb['id'],$orderid,$member['from_user']);							 
					}
				   return array("error"=>0,'msg'=>'订单提交成功！');//有代理的推广位就提交成功
				}
			}
		}

			//插入一级订单
			if(!empty($cfg['yjf'])){
				if($cfg['fxtype']==1){//自购积分
					if($cfg['gdfxtype']==1){
						$jl=$cfg['yjf'];
					}else{
						$jl=intval($tkorder['xgyg']*$cfg['yjf']/100*$cfg['jfbl']);
					}					                	
				}elseif($cfg['fxtype']==2){//自购余额
					if($cfg['gdfxtype']==1){
						$jl=$cfg['yjf'];
					}else{
						$jl=$tkorder['xgyg']*$cfg['yjf']/100;  
						$jl=number_format($jl, 2, '.', '');
					}					                    
				}
				$yjmember=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and id='{$member['helpid']}' order by id desc");
				$yjtxmsg=str_replace('#昵称#',$member['nickname'], $cfg['yjtxmsg']);
				$yjtxmsg=str_replace('#订单号#',$orderid, $yjtxmsg);
				$yjtxmsg=str_replace('#金额#',$jl, $yjtxmsg);
				//$this->postText($yjmember['from_user'],$yjtxmsg);//一级提示
				postkefuxiaoxi($cfg,$weid,$yjmember['from_user'],$yjtxmsg);
				$data2=array(
					'weid'=>$weid,
					'openid'=>$yjmember['from_user'],
					'memberid'=>$yjmember['openid'],//用户UID
					'uid'=>$yjmember['id'],
					'nickname'=>$yjmember['nickname'],
					'jl'=>$jl,
					'jltype'=>$jltype,
					'avatar'=>$yjmember['avatar'],
					'jluid'=>$member['id'],//订单所有人ID
					'jlnickname'=>$member['nickname'],//订单所有人昵称
					'jlavatar'=>$member['avatar'],//订单所有人头像
					'orderid'=>$orderid,
					'itemid'=>$tkorder['numid'],
					'yongjin'=>$tkorder['xgyg'],
					'type'=>1,
					'sh'=>$sh,
					'createtime'=>TIMESTAMP
				);
				$order = pdo_fetchall("select * from ".tablename("tiger_newhu_order")." where weid='{$weid}' and type=1 and orderid={$orderid}");
				if(empty($order)){
					pdo_insert ("tiger_newhu_order", $data2 );//添加一级订单
				}
			}
			//一级订单结束
			//二级订单添加
			if(!empty($yjmember['helpid'])){//二级			
				if(!empty($cfg['ejf'])){
						if($cfg['fxtype']==1){//自购积分
							if($cfg['gdfxtype']==1){
								$jl=$cfg['ejf'];
							}else{
								$jl=intval($tkorder['xgyg']*$cfg['ejf']/100*$cfg['jfbl']);
							}					                	
						}elseif($cfg['fxtype']==2){//自购余额
							if($cfg['gdfxtype']==1){
							$jl=$cfg['ejf'];
						}else{
							$jl=$tkorder['xgyg']*$cfg['ejf']/100;  
							$jl=number_format($jl, 2, '.', '');
						}					                    
					}
					$rjmember=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and id='{$yjmember['helpid']}' order by id desc");
					$ejtxmsg=str_replace('#昵称#',$member['nickname'], $cfg['ejtxmsg']);
					$ejtxmsg=str_replace('#订单号#',$orderid, $ejtxmsg);
					$ejtxmsg=str_replace('#金额#',$jl, $ejtxmsg);
					//$this->postText($rjmember['from_user'],$ejtxmsg);//二级提示
					postkefuxiaoxi($cfg,$weid,$rjmember['from_user'],$ejtxmsg);
					$data3=array(
						'weid'=>$weid,
						'openid'=>$rjmember['from_user'],
						'memberid'=>$rjmember['openid'],//用户openid
						'uid'=>$rjmember['id'],//用户openid                                        
						'nickname'=>$rjmember['nickname'],
						'jl'=>$jl,
						'jltype'=>$jltype,
						'avatar'=>$rjmember['avatar'],
						'jluid'=>$member['id'],
						'jlnickname'=>$member['nickname'],
						'jlavatar'=>$member['avatar'],
						'orderid'=>$orderid,
						'itemid'=>$tkorder['numid'],
						'yongjin'=>$tkorder['xgyg'],
						'type'=>2,
						'sh'=>$sh,
						'createtime'=>TIMESTAMP
					);
					$order = pdo_fetchall("select * from ".tablename("tiger_newhu_order")." where weid='{$weid}' and type=2 and orderid={$orderid}");
					if(empty($order)){
						pdo_insert ("tiger_newhu_order", $data3 );//添加二级订单
					}
				}		
			}
		}
	
		if(!empty($cfg['khgetorder'])){//管理员订单提交提醒
			$mbid=$cfg['khgetorder'];
			$mb=pdo_fetch("select * from ".tablename("tiger_newhu_mobanmsg")." where weid='{$weid}' and id='{$mbid}'");
			//$msg=$this->mbmsg($cfg['glyopenid'],$mb,$mb['mbid'],$mb['turl'],$fans,$orderid);  
			postmobanxiaoxi($cfg,$weid,$cfg['glyopenid'],$mb['id'],$orderid,$member['from_user']);
		}
		return array("error"=>0,'msg'=>'订单提交成功');
	}
}else{
	return array("error"=>1,'msg'=>'您提交的订单已经存在！');
} 

}

function dbddjl($sjyongjin,$tplist){
	foreach($tplist as $k=>$v){
		if($v['fyrmb']<$sjyongjin){	
			$retarr=array(
				'zgfa'=>$v['zgfa'],
				'yjfa'=>$v['yjfa'],
				'ejfa'=>$v['ejfa'],
			);	
			return $retarr;
			break;
		}
	}
	return '';
}
//淘宝订单提交结束

//拼多多订单提交
function pddaddorder($cfg,$weid,$member,$orderid){
						if(empty($member['id'])){
							if(!empty($cfg['ddorrmsg'])){
								$membererr=$cfg['ddorrmsg'];
							}else{
								$membererr='会员数据异常！请稍后在试！';
							}
							return array("error"=>1,'msg'=>$membererr); 
						}
	        	
	            if(pdo_tableexists('tiger_wxdaili_set')){
	               $bl=pdo_fetch("select * from ".tablename('tiger_wxdaili_set')." where weid='{$weid}'");
	               if($bl['dlfxtype']==1){
	                   if($member['dltype']==1){
											 return array("error"=>1,'msg'=>'对不起!代理不能提交订单!');
	                   }                  
	                }
	            }
	            
	            //die(json_encode(array("statusCode"=>100,'msg'=>$orderid)));  
	            
	            $order = pdo_fetch("select * from ".tablename("tiger_newhu_pddtjorder")." where weid='{$weid}' and orderid='{$orderid}'");
	            if(empty($order)){
	                //查询淘客订单库
	                $tkorder = pdo_fetch("select * from ".tablename("tiger_newhu_pddorder")." where weid='{$weid}' and order_sn='{$orderid}'");
					if(empty($tkorder)){
						return array("error"=>1,'msg'=>'您提交的订单暂未更新，请过15分钟后在提交，感谢您的支持！');
					}
					// return array("error"=>0,'msg'=>'订单提交成功'.$orderid."---".$tkorder['id']);
					
	                if($cfg['dlddfx']==1){
	                	$dltgw=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and pddpid='{$tkorder['p_id']}'");
	                	if(!empty($dltgw)){
											return array("error"=>1,'msg'=>'对不起!该订单不支持奖励,请联系管理员!');
	                	}
	                }
	                
	                
	                
	                if(!empty($tkorder)){
	                   if($tkorder['order_status']==4){//审核失败（不可提现）
	                      $sh=4;//失效
												return array("error"=>1,'msg'=>'您提交的订单已退款！');
	                   }elseif($tkorder['order_status']==1){//已成团，付款成功
	                      $sh=3;//已审核
	                   }elseif($tkorder['order_status']==2){//确认收货
	                      $sh=1;//待返
	                   }
	
	                }else{
										return array("error"=>1,'msg'=>'您提交的订单暂未更新，请过15分钟后在提交，感谢您的支持！');
	                  $sh=0;//待审核
	                }
	                if($cfg['fxtype']==1){//积分
	                	$jltype=0;
	                }elseif($cfg['fxtype']==2){//余额
	                    $jltype=1;
	                }
	                
	                if($cfg['fxtype']==1){//自购积分
	                	if($cfg['gdfxtype']==1){
	                		$jl=$cfg['zgf'];
	                	}else{
	                		$jl=intval($tkorder['promotion_amount']*$cfg['zgf']/100*$cfg['jfbl']);
	                	}                	
	                }elseif($cfg['fxtype']==2){//自购余额
	                	if($cfg['gdfxtype']==1){
	                		 $jl=$cfg['zgf'];
	                	}else{
	                		 $jl=$tkorder['promotion_amount']*$cfg['zgf']/100;  
	                   		 $jl=number_format($jl, 2, '.', '');
	                	}                    
	                }                
	                $data=array(
	                    'weid'=>$weid,
	                    'openid'=>$member['from_user'],
	                    'memberid'=>$member['openid'],
	                    'uid'=>$member['id'],
	                    'nickname'=>$member['nickname'],
	                    'avatar'=>$member['avatar'],
	                    'orderid'=>$orderid,
	                    'itemid'=>$tkorder['goods_id'],
	                    'jl'=>$jl,
	                    'jltype'=>$jltype,
	                    'sh'=>$sh,
	                    'yongjin'=>$tkorder['promotion_amount'],//佣金
	                    'type'=>0,
	                    'createtime'=>TIMESTAMP
	                );
					//插入团长佣金记录
					$appset= pdo_fetch("SELECT * FROM " . tablename("tiger_app_tuanzhangset") . " WHERE weid='{$weid}' order by px desc ");//团长设置
					if(!empty($appset['jlpt'])){
						$tzmember=getinfotz($weid,$member['id']);
						$tzjl=$tkorder['promotion_amount']*$appset['jlpt']/100;
						$tzjl=number_format($tzjl, 2, '.', '');
						pddintzorder($weid,$member,$tzmember,$tkorder,$orderid,$sh,$tzjl);
					}	 
					//团长佣金记录结束
	
	                if (pdo_insert ("tiger_newhu_pddtjorder", $data ) === false) {
									return array("error"=>1,'msg'=>'系统繁忙！');
					} else{

	                   $zgtxmsg=str_replace('#昵称#',$member['nickname'], $cfg['zgtxmsg']);
	                   $zgtxmsg=str_replace('#订单号#',$orderid, $zgtxmsg);
	                   $zgtxmsg=str_replace('#金额#',$jl, $zgtxmsg);
	                   //$this->postText($member['from_user'],$zgtxmsg);//自购提示
										 postkefuxiaoxi($cfg,$weid,$member['from_user'],$zgtxmsg);
	                   if(!empty($member['helpid'])){//一级
	                      
	                      if(pdo_tableexists('tiger_wxdaili_set')){//是否开启代理订单不返给二级
	                          $bl=pdo_fetch("select * from ".tablename('tiger_wxdaili_set')." where weid='{$weid}'");
	                          if(empty($bl['dlyjfltype'])){
	                             $tgw=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and pddpid='{$tkorder['p_id']}'");//有没有代理推广位
									 if(!empty($tgw)){
                                  
										 if(!empty($cfg['khgetorder'])){//管理员订单提交提醒
												$mbid=$cfg['khgetorder'];
												$mb=pdo_fetch("select * from ".tablename("tiger_newhu_mobanmsg")." where weid='{$weid}' and id='{$mbid}'");
												//file_put_contents(IA_ROOT."/addons/tiger_renwubao/log.txt","\n 1old:".json_encode($orderid),FILE_APPEND);
												//$msg=$this->mbmsg($cfg['glyopenid'],$mb,$mb['mbid'],$mb['turl'],$fans,$orderid);  
												postmobanxiaoxi($cfg,$weid,$cfg['glyopenid'],$mb['id'],$orderid,$member['from_user']);	
										 }
										 return array("error"=>0,'msg'=>'订单提交成功');
									 }
	                          }
	                      }
	                       
	
	
	
	                       
	                       //插入一级订单
	                           if(!empty($cfg['yjf'])){
	                               //$credit2_yj=$tkorder['xgyg']*$cfg['yjf']/100;
	                               //$ejprice=$cfg['yjf']*$credit2_yj/100;
	                                    if($cfg['fxtype']==1){//自购积分
	                                    	if($cfg['gdfxtype']==1){
						                		 $jl=$cfg['yjf'];
						                	}else{
						                		$jl=intval($tkorder['promotion_amount']*$cfg['yjf']/100*$cfg['jfbl']);
						                	}					                	
						                }elseif($cfg['fxtype']==2){//自购余额
						                	if($cfg['gdfxtype']==1){
						                		 $jl=$cfg['yjf'];
						                	}else{
						                		$jl=$tkorder['promotion_amount']*$cfg['yjf']/100;  
	                                       	    $jl=number_format($jl, 2, '.', '');
						                	}					                    
						                }
						               $yjmember=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and id='{$member['helpid']}' order by id desc");
                                 	
				                       $yjtxmsg=str_replace('#昵称#',$member['nickname'], $cfg['yjtxmsg']);
				                       $yjtxmsg=str_replace('#订单号#',$orderid, $yjtxmsg);
				                       $yjtxmsg=str_replace('#金额#',$jl, $yjtxmsg);
				                       //$this->postText($yjmember['from_user'],$yjtxmsg);//一级提示
															 postkefuxiaoxi($cfg,$weid,$yjmember['from_user'],$yjtxmsg);
	                                   $data2=array(
	                                        'weid'=>$weid,
	                                        'openid'=>$yjmember['from_user'],
	                                        'memberid'=>$yjmember['openid'],//用户UID
	                                        'uid'=>$yjmember['id'],
	                                        'nickname'=>$yjmember['nickname'],
	                                        'jl'=>$jl,
	                                        'jltype'=>$jltype,
	                                        'avatar'=>$yjmember['avatar'],
	                                            'jluid'=>$member['id'],
	                                            'jlnickname'=>$member['nickname'],
	                                            'jlavatar'=>$member['avatar'],
	                                        'orderid'=>$orderid,
	                                        'itemid'=>$tkorder['goods_id'],
	                                        'yongjin'=>$tkorder['promotion_amount'],
	                                        'type'=>1,
	                                        'sh'=>$sh,
	                                        'createtime'=>TIMESTAMP
	                                    );                    
	                                    
	                                    
	                                    $order = pdo_fetchall("select * from ".tablename("tiger_newhu_pddtjorder")." where weid='{$weid}' and type=1 and orderid={$orderid}");
	                                    if(empty($order)){
	                                        pdo_insert ("tiger_newhu_pddtjorder", $data2 );//添加一级订单
	                                    }
	                                   
	                             }
	                       //一级订单结束
	
	                       if(!empty($yjmember['helpid'])){//二级
	                           
	                           //二级订单添加
	                                 if(!empty($cfg['ejf'])){
	                                     //$ejfprice=$tkorder['xgyg']*$cfg['ejf']/100;
	                                     if($cfg['fxtype']==1){//自购积分
	                                     	if($cfg['gdfxtype']==1){
						                		 $jl=$cfg['ejf'];
						                	}else{
						                		$jl=intval($tkorder['promotion_amount']*$cfg['ejf']/100*$cfg['jfbl']);
						                	}					                	
						                }elseif($cfg['fxtype']==2){//自购余额
						                	if($cfg['gdfxtype']==1){
						                		 $jl=$cfg['ejf'];
						                	}else{
						                		 $jl=$tkorder['promotion_amount']*$cfg['ejf']/100;  
	                                       		 $jl=number_format($jl, 2, '.', '');
						                	}					                    
						                }
						               $rjmember=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and id='{$yjmember['helpid']}' order by id desc");
			                           $ejtxmsg=str_replace('#昵称#',$member['nickname'], $cfg['ejtxmsg']);
			                           $ejtxmsg=str_replace('#订单号#',$orderid, $ejtxmsg);
			                           $ejtxmsg=str_replace('#金额#',$jl, $ejtxmsg);
			                           //$this->postText($rjmember['from_user'],$ejtxmsg);//二级提示
																 postkefuxiaoxi($cfg,$weid,$rjmember['from_user'],$ejtxmsg);
	                                     $data3=array(
	                                        'weid'=>$weid,
	                                        'openid'=>$rjmember['from_user'],
	                                        'memberid'=>$rjmember['openid'],//用户openid
	                                        'uid'=>$rjmember['id'],//用户openid                                        
	                                        'nickname'=>$rjmember['nickname'],
	                                        'jl'=>$jl,
	                                        'jltype'=>$jltype,
	                                        'avatar'=>$rjmember['avatar'],
	                                            'jluid'=>$member['id'],
	                                            'jlnickname'=>$member['nickname'],
	                                            'jlavatar'=>$member['avatar'],
	                                        'orderid'=>$orderid,
	                                        'itemid'=>$tkorder['goods_id'],
	                                        'yongjin'=>$tkorder['promotion_amount'],
	                                        'type'=>2,
	                                         'sh'=>$sh,
	                                        'createtime'=>TIMESTAMP
	                                    );
	                                    $order = pdo_fetchall("select * from ".tablename("tiger_newhu_pddtjorder")." where weid='{$weid}' and type=2 and orderid={$orderid}");
	                                    if(empty($order)){
	                                        pdo_insert ("tiger_newhu_pddtjorder", $data3 );//添加二级订单
	                                    }
	                                 }
	                           //二级订单结束
	
	
	                       }
	                   }
	                   if(!empty($cfg['khgetorder'])){//管理员订单提交提醒
	                        $mbid=$cfg['khgetorder'];
	                        $mb=pdo_fetch("select * from ".tablename("tiger_newhu_mobanmsg")." where weid='{$weid}' and id='{$mbid}'");
	                        //$msg=$this->mbmsg($cfg['glyopenid'],$mb,$mb['mbid'],$mb['turl'],$fans,$orderid);   
													postmobanxiaoxi($cfg,$weid,$cfg['glyopenid'],$mb['id'],$orderid,$member['from_user']);	
	                    }
	
											return array("error"=>0,'msg'=>'订单提交成功！');
					}
	            }else{
								return array("error"=>1,'msg'=>'您提交的订单已经存在！');
	            }
}
//拼多多提交订单结束

//京东提交订单开始
function jdaddorder($cfg,$weid,$member,$orderid){
	if(empty($member['id'])){
		if(!empty($cfg['ddorrmsg'])){
			$membererr=$cfg['ddorrmsg'];
		}else{
			$membererr='会员数据异常！请稍后在试！';
		}
		return array("error"=>1,'msg'=>$membererr); 
	}
        	
            if(pdo_tableexists('tiger_wxdaili_set')){
               $bl=pdo_fetch("select * from ".tablename('tiger_wxdaili_set')." where weid='{$weid}'");
               if($bl['dlfxtype']==1){
                   if($member['dltype']==1){                    
                     return array("error"=>1,'msg'=>'对不起!代理不能提交订单!');
                   }                  
                }
            }
            
            //die(json_encode(array("statusCode"=>100,'msg'=>$orderid)));  
            
            $order = pdo_fetch("select * from ".tablename("tiger_newhu_jdtjorder")." where weid='{$weid}' and orderid='{$orderid}'");
            //die(json_encode(array("statusCode"=>100,'msg'=>$orderid)));  
            if(empty($order)){
                //查询淘客订单库
                $tkorder = pdo_fetch("select * from ".tablename("tiger_newhu_jdorder")." where weid='{$weid}' and orderId='{$orderid}'");
                if(empty($tkorder)){
                	return array("error"=>1,'msg'=>'您提交的订单暂未更新，请过15分钟后在提交，感谢您的支持！');
                }
                
                
                
                
                if(!empty($tkorder)){
                	if($cfg['dlddfx']==1){
	                	$dltgw=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and jdpid='{$tkorder['spId']}'");
	                	if(!empty($dltgw['id'])){
	                		return array("error"=>1,'msg'=>'对不起!该订单不支持奖励,请联系管理员!'.$dltgw['id']."--".$tkorder['spId']);
	                		
	                	}
	                }
                   if($tkorder['validCode']<=14){//审核失败（不可提现）
                      $sh=4;//失效
                      return array("error"=>1,'msg'=>'您提交的订单已退款');
                   }elseif($tkorder['validCode']==16){//已成团，付款成功
                      $sh=3;//已审核
                   }elseif($tkorder['validCode']==17){//确认收货
                      $sh=1;//待返
                   }
                   //$credit2_zg=$tkorder['xgyg']*$cfg['zgf']/100;

                }else{                
                  return array("error"=>1,'msg'=>'您提交的订单暂未更新，请过15分钟后在提交，感谢您的支持'); 
                  $sh=0;//待审核
                }
                if($cfg['fxtype']==1){//积分
                	$jltype=0;
                }elseif($cfg['fxtype']==2){//余额
                    $jltype=1;
                }
                
                if($cfg['fxtype']==1){//自购积分
                	if($cfg['gdfxtype']==1){
                		$jl=$cfg['zgf'];
                	}else{
                		$jl=intval($tkorder['estimateFee']*$cfg['zgf']/100*$cfg['jfbl']);
                	}                	
                }elseif($cfg['fxtype']==2){//自购余额
                	if($cfg['gdfxtype']==1){
                		 $jl=$cfg['zgf'];
                	}else{
                		 $jl=$tkorder['estimateFee']*$cfg['zgf']/100;  
                   		 $jl=number_format($jl, 2, '.', '');
                	}                    
                }                
                $data=array(
                    'weid'=>$weid,
                    'openid'=>$member['from_user'],
                    'memberid'=>$member['openid'],
                    'uid'=>$member['id'],
                    'nickname'=>$member['nickname'],
                    'avatar'=>$member['avatar'],
                    'orderid'=>$orderid,
                    'itemid'=>$tkorder['skuId'],
                    'jl'=>$jl,
                    'jltype'=>$jltype,
                    'sh'=>$sh,
                    'yongjin'=>$tkorder['estimateFee'],//佣金
                    'type'=>0,
                    'createtime'=>TIMESTAMP
                );
				
				//插入团长佣金记录
				$appset= pdo_fetch("SELECT * FROM " . tablename("tiger_app_tuanzhangset") . " WHERE weid='{$weid}' order by px desc ");//团长设置
				if(!empty($appset['jlpt'])){
					$tzmember=getinfotz($weid,$member['id']);
					$tzjl=$tkorder['estimateFee']*$appset['jlpt']/100;
					$tzjl=number_format($tzjl, 2, '.', '');
					jdintzorder($weid,$member,$tzmember,$tkorder,$orderid,$sh,$tzjl);
				}	 
				//团长佣金记录结束

                if (pdo_insert ("tiger_newhu_jdtjorder", $data ) === false) {
					return array("error"=>1,'msg'=>'系统繁忙'); 
				} else{
					

                   $zgtxmsg=str_replace('#昵称#',$member['nickname'], $cfg['zgtxmsg']);
                   $zgtxmsg=str_replace('#订单号#',$orderid, $zgtxmsg);
                   $zgtxmsg=str_replace('#金额#',$jl, $zgtxmsg);
                    //$this->postText($member['from_user'],$zgtxmsg);//自购提示
                    postkefuxiaoxi($cfg,$weid,$member['from_user'],$zgtxmsg);
                   if(!empty($member['helpid'])){//一级
                      
                      if(pdo_tableexists('tiger_wxdaili_set')){//是否开启代理订单不返给二级
                          $bl=pdo_fetch("select * from ".tablename('tiger_wxdaili_set')." where weid='{$weid}'");
                          if(empty($bl['dlyjfltype'])){
                             $tgw=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and jdpid='{$tkorder['spId']}'");//有没有代理推广位
                                   if(!empty($tgw)){
                                         if(!empty($cfg['khgetorder'])){//管理员订单提交提醒
                                            $mbid=$cfg['khgetorder'];
                                            $mb=pdo_fetch("select * from ".tablename("tiger_newhu_mobanmsg")." where weid='{$weid}' and id='{$mbid}'");
                                            //file_put_contents(IA_ROOT."/addons/tiger_renwubao/log.txt","\n 1old:".json_encode($orderid),FILE_APPEND);
                                            //$msg=$this->mbmsg($cfg['glyopenid'],$mb,$mb['mbid'],$mb['turl'],$fans,$orderid);         
                                            postmobanxiaoxi($cfg,$weid,$cfg['glyopenid'],$mb['id'],$orderid,$member['from_user']);	         
                                         }
                                         return array("error"=>0,'msg'=>'订单提交成功'); 
                                   }
                          }
                      }
                       



                       
                       //插入一级订单
                           if(!empty($cfg['yjf'])){
                               //$credit2_yj=$tkorder['xgyg']*$cfg['yjf']/100;
                               //$ejprice=$cfg['yjf']*$credit2_yj/100;
                                    if($cfg['fxtype']==1){//自购积分
                                    	if($cfg['gdfxtype']==1){
					                		 $jl=$cfg['yjf'];
					                	}else{
					                		$jl=intval($tkorder['estimateFee']*$cfg['yjf']/100*$cfg['jfbl']);
					                	}					                	
					                }elseif($cfg['fxtype']==2){//自购余额
					                	if($cfg['gdfxtype']==1){
					                		 $jl=$cfg['yjf'];
					                	}else{
					                		$jl=$tkorder['estimateFee']*$cfg['yjf']/100;  
                                       	    $jl=number_format($jl, 2, '.', '');
					                	}					                    
					                }
					               $yjmember=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and id='{$member['helpid']}' order by id desc");
			                       $yjtxmsg=str_replace('#昵称#',$member['nickname'], $cfg['yjtxmsg']);
			                       $yjtxmsg=str_replace('#订单号#',$orderid, $yjtxmsg);
			                       $yjtxmsg=str_replace('#金额#',$jl, $yjtxmsg);
			                      // $this->postText($yjmember['from_user'],$yjtxmsg);//一级提示
			                       postkefuxiaoxi($cfg,$weid,$yjmember['from_user'],$yjtxmsg);
                                   $data2=array(
                                        'weid'=>$weid,
                                        'openid'=>$yjmember['from_user'],
                                        'memberid'=>$yjmember['openid'],//用户UID
                                        'uid'=>$yjmember['id'],
                                        'nickname'=>$yjmember['nickname'],
                                        'jl'=>$jl,
                                        'jltype'=>$jltype,
                                        'avatar'=>$yjmember['avatar'],
                                            'jluid'=>$member['id'],
                                            'jlnickname'=>$member['nickname'],
                                            'jlavatar'=>$member['avatar'],
                                        'orderid'=>$orderid,
                                        'itemid'=>$tkorder['skuId'],
                                        'yongjin'=>$tkorder['estimateFee'],
                                        'type'=>1,
                                        'sh'=>$sh,
                                        'createtime'=>TIMESTAMP
                                    );                    
                                    
                                    
                                    $order = pdo_fetchall("select * from ".tablename("tiger_newhu_jdtjorder")." where weid='{$weid}' and type=1 and orderid={$orderid}");
                                    if(empty($order)){
                                        pdo_insert ( "tiger_newhu_jdtjorder", $data2 );//添加一级订单
                                    }
                                   
                             }
                       //一级订单结束

                       if(!empty($yjmember['helpid'])){//二级
                           
                           //二级订单添加
                                 if(!empty($cfg['ejf'])){
                                     //$ejfprice=$tkorder['xgyg']*$cfg['ejf']/100;
                                     if($cfg['fxtype']==1){//自购积分
                                     	if($cfg['gdfxtype']==1){
					                		 $jl=$cfg['ejf'];
					                	}else{
					                		$jl=intval($tkorder['estimateFee']*$cfg['ejf']/100*$cfg['jfbl']);
					                	}					                	
					                }elseif($cfg['fxtype']==2){//自购余额
					                	if($cfg['gdfxtype']==1){
					                		 $jl=$cfg['ejf'];
					                	}else{
					                		 $jl=$tkorder['estimateFee']*$cfg['ejf']/100;  
                                       		 $jl=number_format($jl, 2, '.', '');
					                	}					                    
					                }
					               $rjmember=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and id='{$yjmember['helpid']}' order by id desc");
		                           $ejtxmsg=str_replace('#昵称#',$member['nickname'], $cfg['ejtxmsg']);
		                           $ejtxmsg=str_replace('#订单号#',$orderid, $ejtxmsg);
		                           $ejtxmsg=str_replace('#金额#',$jl, $ejtxmsg);
		                           //$this->postText($rjmember['from_user'],$ejtxmsg);//二级提示
		                           postkefuxiaoxi($cfg,$weid,$rjmember['from_user'],$ejtxmsg);
                                     $data3=array(
                                        'weid'=>$weid,
                                        'openid'=>$rjmember['from_user'],
                                        'memberid'=>$rjmember['openid'],//用户openid
                                        'uid'=>$rjmember['id'],//用户openid                                        
                                        'nickname'=>$rjmember['nickname'],
                                        'jl'=>$jl,
                                        'jltype'=>$jltype,
                                        'avatar'=>$rjmember['avatar'],
                                            'jluid'=>$member['id'],
                                            'jlnickname'=>$member['nickname'],
                                            'jlavatar'=>$member['avatar'],
                                        'orderid'=>$orderid,
                                        'itemid'=>$tkorder['skuId'],
                                        'yongjin'=>$tkorder['estimateFee'],
                                        'type'=>2,
                                         'sh'=>$sh,
                                        'createtime'=>TIMESTAMP
                                    );
                                    $order = pdo_fetchall("select * from ".tablename("tiger_newhu_jdtjorder")." where weid='{$weid}' and type=2 and orderid={$orderid}");
                                    if(empty($order)){
                                        pdo_insert ("tiger_newhu_jdtjorder", $data3 );//添加二级订单
                                    }
                                 }
                           //二级订单结束


                       }
                   }
                   if(!empty($cfg['khgetorder'])){//管理员订单提交提醒
                        $mbid=$cfg['khgetorder'];
                        $mb=pdo_fetch("select * from ".tablename("tiger_newhu_mobanmsg")." where weid='{$weid}' and id='{$mbid}'");
                        //file_put_contents(IA_ROOT."/addons/tiger_renwubao/log.txt","\n 1old:".json_encode($orderid),FILE_APPEND);
                        //$msg=$this->mbmsg($cfg['glyopenid'],$mb,$mb['mbid'],$mb['turl'],$fans,$orderid);    
                        postmobanxiaoxi($cfg,$weid,$cfg['glyopenid'],$mb['id'],$orderid,$member['from_user']);              
                   }
					return array("error"=>0,'msg'=>'订单提交成功'); 
				}
            }else{
              return array("error"=>1,'msg'=>'您提交的订单已经记录'); 
            }
	
}
//京东提交订单结束


//唯品会提交订单开始
function wphaddorder($cfg,$weid,$member,$orderid){
	if(empty($member['id'])){
		if(!empty($cfg['ddorrmsg'])){
			$membererr=$cfg['ddorrmsg'];
		}else{
			$membererr='会员数据异常！请稍后在试！';
		}
		return array("error"=>1,'msg'=>$membererr); 
	}
        	
            if(pdo_tableexists('tiger_wxdaili_set')){
               $bl=pdo_fetch("select * from ".tablename('tiger_wxdaili_set')." where weid='{$weid}'");
               if($bl['dlfxtype']==1){
                   if($member['dltype']==1){                    
                     return array("error"=>1,'msg'=>'对不起!代理不能提交订单!');
                   }                  
                }
            }
            
            //die(json_encode(array("statusCode"=>100,'msg'=>$orderid)));  
            
            $order = pdo_fetch("select * from ".tablename("tiger_newhu_wphtjorder")." where weid='{$weid}' and orderid='{$orderid}'");
            //die(json_encode(array("statusCode"=>100,'msg'=>$orderid)));  
            if(empty($order)){
                //查询淘客订单库
                $tkorder = pdo_fetch("select * from ".tablename("tiger_newhu_wphorder")." where weid='{$weid}' and orderSn='{$orderid}'");
                if(empty($tkorder)){
                	return array("error"=>1,'msg'=>'您提交的订单暂未更新，请过15分钟后在提交，感谢您的支持！');
                }
                
                
                
                
                if(!empty($tkorder)){
                	if($cfg['dlddfx']==1){
	                	$dltgw=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and wphpid='{$tkorder['pid']}'");
	                	if(!empty($dltgw['id'])){
	                		return array("error"=>1,'msg'=>'对不起!该订单不支持奖励,请联系管理员!'.$dltgw['id']."--".$tkorder['pid']);
	                		
	                	}
	                }
                   if($tkorder['orderSubStatusName']=='已失效'){//审核失败（不可提现）
                      $sh=4;//失效
                      return array("error"=>1,'msg'=>'您提交的订单已退款');
                   }elseif($tkorder['orderSubStatusName']=='已付款'){//已成团，付款成功
                      $sh=3;//已审核
                   }elseif($tkorder['orderSubStatusName']=='已结算' || $tkorder['orderSubStatusName']=='已签收' || $tkorder['orderSubStatusName']=='待结算'){//确认收货
                      $sh=1;//待返
                   }
                   //$credit2_zg=$tkorder['xgyg']*$cfg['zgf']/100;

                }else{                
                  return array("error"=>1,'msg'=>'您提交的订单暂未更新，请过15分钟后在提交，感谢您的支持'); 
                  $sh=0;//待审核
                }
                if($cfg['fxtype']==1){//积分
                	$jltype=0;
                }elseif($cfg['fxtype']==2){//余额
                    $jltype=1;
                }
                
                if($cfg['fxtype']==1){//自购积分
                	if($cfg['gdfxtype']==1){
                		$jl=$cfg['zgf'];
                	}else{
                		$jl=intval($tkorder['commission']*$cfg['zgf']/100*$cfg['jfbl']);
                	}                	
                }elseif($cfg['fxtype']==2){//自购余额
                	if($cfg['gdfxtype']==1){
                		 $jl=$cfg['zgf'];
                	}else{
                		 $jl=$tkorder['commission']*$cfg['zgf']/100;  
                   		 $jl=number_format($jl, 2, '.', '');
                	}                    
                }                
                $data=array(
                    'weid'=>$weid,
                    'openid'=>$member['from_user'],
                    'memberid'=>$member['openid'],
                    'uid'=>$member['id'],
                    'nickname'=>$member['nickname'],
                    'avatar'=>$member['avatar'],
                    'orderid'=>$orderid,
                    'itemid'=>$tkorder['skuId'],
                    'jl'=>$jl,
                    'jltype'=>$jltype,
                    'sh'=>$sh,
                    'yongjin'=>$tkorder['commission'],//佣金
                    'type'=>0,
                    'createtime'=>TIMESTAMP
                );
				
			

                if (pdo_insert ("tiger_newhu_wphtjorder", $data ) === false) {
					return array("error"=>1,'msg'=>'系统繁忙'); 
				} else{
					

                   $zgtxmsg=str_replace('#昵称#',$member['nickname'], $cfg['zgtxmsg']);
                   $zgtxmsg=str_replace('#订单号#',$orderid, $zgtxmsg);
                   $zgtxmsg=str_replace('#金额#',$jl, $zgtxmsg);
                    //$this->postText($member['from_user'],$zgtxmsg);//自购提示
                    postkefuxiaoxi($cfg,$weid,$member['from_user'],$zgtxmsg);
                   if(!empty($member['helpid'])){//一级
                      
                      if(pdo_tableexists('tiger_wxdaili_set')){//是否开启代理订单不返给二级
                          $bl=pdo_fetch("select * from ".tablename('tiger_wxdaili_set')." where weid='{$weid}'");
                          if(empty($bl['dlyjfltype'])){
                             $tgw=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and jdpid='{$tkorder['spId']}'");//有没有代理推广位
                                   if(!empty($tgw)){
                                         if(!empty($cfg['khgetorder'])){//管理员订单提交提醒
                                            $mbid=$cfg['khgetorder'];
                                            $mb=pdo_fetch("select * from ".tablename("tiger_newhu_mobanmsg")." where weid='{$weid}' and id='{$mbid}'");
                                            //file_put_contents(IA_ROOT."/addons/tiger_renwubao/log.txt","\n 1old:".json_encode($orderid),FILE_APPEND);
                                            //$msg=$this->mbmsg($cfg['glyopenid'],$mb,$mb['mbid'],$mb['turl'],$fans,$orderid);         
                                            postmobanxiaoxi($cfg,$weid,$cfg['glyopenid'],$mb['id'],$orderid,$member['from_user']);	         
                                         }
                                         return array("error"=>0,'msg'=>'订单提交成功'); 
                                   }
                          }
                      }
                       



                       
                       //插入一级订单
                           if(!empty($cfg['yjf'])){
                               //$credit2_yj=$tkorder['xgyg']*$cfg['yjf']/100;
                               //$ejprice=$cfg['yjf']*$credit2_yj/100;
                                    if($cfg['fxtype']==1){//自购积分
                                    	if($cfg['gdfxtype']==1){
					                		 $jl=$cfg['yjf'];
					                	}else{
					                		$jl=intval($tkorder['commission']*$cfg['yjf']/100*$cfg['jfbl']);
					                	}					                	
					                }elseif($cfg['fxtype']==2){//自购余额
					                	if($cfg['gdfxtype']==1){
					                		 $jl=$cfg['yjf'];
					                	}else{
					                		$jl=$tkorder['commission']*$cfg['yjf']/100;  
                                       	    $jl=number_format($jl, 2, '.', '');
					                	}					                    
					                }
					               $yjmember=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and id='{$member['helpid']}' order by id desc");
			                       $yjtxmsg=str_replace('#昵称#',$member['nickname'], $cfg['yjtxmsg']);
			                       $yjtxmsg=str_replace('#订单号#',$orderid, $yjtxmsg);
			                       $yjtxmsg=str_replace('#金额#',$jl, $yjtxmsg);
			                      // $this->postText($yjmember['from_user'],$yjtxmsg);//一级提示
			                       postkefuxiaoxi($cfg,$weid,$yjmember['from_user'],$yjtxmsg);
                                   $data2=array(
                                        'weid'=>$weid,
                                        'openid'=>$yjmember['from_user'],
                                        'memberid'=>$yjmember['openid'],//用户UID
                                        'uid'=>$yjmember['id'],
                                        'nickname'=>$yjmember['nickname'],
                                        'jl'=>$jl,
                                        'jltype'=>$jltype,
                                        'avatar'=>$yjmember['avatar'],
                                            'jluid'=>$member['id'],
                                            'jlnickname'=>$member['nickname'],
                                            'jlavatar'=>$member['avatar'],
                                        'orderid'=>$orderid,
                                        'itemid'=>$tkorder['skuId'],
                                        'yongjin'=>$tkorder['commission'],
                                        'type'=>1,
                                        'sh'=>$sh,
                                        'createtime'=>TIMESTAMP
                                    );                    
                                    
                                    
                                    $order = pdo_fetchall("select * from ".tablename("tiger_newhu_wphtjorder")." where weid='{$weid}' and type=1 and orderid={$orderid}");
                                    if(empty($order)){
                                        pdo_insert ( "tiger_newhu_wphtjorder", $data2 );//添加一级订单
                                    }
                                   
                             }
                       //一级订单结束

                       if(!empty($yjmember['helpid'])){//二级
                           
                           //二级订单添加
                                 if(!empty($cfg['ejf'])){
                                     //$ejfprice=$tkorder['xgyg']*$cfg['ejf']/100;
                                     if($cfg['fxtype']==1){//自购积分
                                     	if($cfg['gdfxtype']==1){
					                		 $jl=$cfg['ejf'];
					                	}else{
					                		$jl=intval($tkorder['commission']*$cfg['ejf']/100*$cfg['jfbl']);
					                	}					                	
					                }elseif($cfg['fxtype']==2){//自购余额
					                	if($cfg['gdfxtype']==1){
					                		 $jl=$cfg['ejf'];
					                	}else{
					                		 $jl=$tkorder['commission']*$cfg['ejf']/100;  
                                       		 $jl=number_format($jl, 2, '.', '');
					                	}					                    
					                }
					               $rjmember=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and id='{$yjmember['helpid']}' order by id desc");
		                           $ejtxmsg=str_replace('#昵称#',$member['nickname'], $cfg['ejtxmsg']);
		                           $ejtxmsg=str_replace('#订单号#',$orderid, $ejtxmsg);
		                           $ejtxmsg=str_replace('#金额#',$jl, $ejtxmsg);
		                           //$this->postText($rjmember['from_user'],$ejtxmsg);//二级提示
		                           postkefuxiaoxi($cfg,$weid,$rjmember['from_user'],$ejtxmsg);
                                     $data3=array(
                                        'weid'=>$weid,
                                        'openid'=>$rjmember['from_user'],
                                        'memberid'=>$rjmember['openid'],//用户openid
                                        'uid'=>$rjmember['id'],//用户openid                                        
                                        'nickname'=>$rjmember['nickname'],
                                        'jl'=>$jl,
                                        'jltype'=>$jltype,
                                        'avatar'=>$rjmember['avatar'],
                                            'jluid'=>$member['id'],
                                            'jlnickname'=>$member['nickname'],
                                            'jlavatar'=>$member['avatar'],
                                        'orderid'=>$orderid,
                                        'itemid'=>$tkorder['skuId'],
                                        'yongjin'=>$tkorder['commission'],
                                        'type'=>2,
                                         'sh'=>$sh,
                                        'createtime'=>TIMESTAMP
                                    );
                                    $order = pdo_fetchall("select * from ".tablename("tiger_newhu_wphtjorder")." where weid='{$weid}' and type=2 and orderid={$orderid}");
                                    if(empty($order)){
                                        pdo_insert ("tiger_newhu_wphtjorder", $data3 );//添加二级订单
                                    }
                                 }
                           //二级订单结束


                       }
                   }
                   if(!empty($cfg['khgetorder'])){//管理员订单提交提醒
                        $mbid=$cfg['khgetorder'];
                        $mb=pdo_fetch("select * from ".tablename("tiger_newhu_mobanmsg")." where weid='{$weid}' and id='{$mbid}'");
                        //file_put_contents(IA_ROOT."/addons/tiger_renwubao/log.txt","\n 1old:".json_encode($orderid),FILE_APPEND);
                        //$msg=$this->mbmsg($cfg['glyopenid'],$mb,$mb['mbid'],$mb['turl'],$fans,$orderid);    
                        postmobanxiaoxi($cfg,$weid,$cfg['glyopenid'],$mb['id'],$orderid,$member['from_user']);              
                   }
					return array("error"=>0,'msg'=>'订单提交成功'); 
				}
            }else{
              return array("error"=>1,'msg'=>'您提交的订单已经记录'); 
            }
	
}
//唯品会提交订单结束



//苏宁易购提交订单开始
function snaddorder($cfg,$weid,$member,$orderid){
	if(empty($member['id'])){
		if(!empty($cfg['ddorrmsg'])){
			$membererr=$cfg['ddorrmsg'];
		}else{
			$membererr='会员数据异常！请稍后在试！';
		}
		return array("error"=>1,'msg'=>$membererr); 
	}
        	
            if(pdo_tableexists('tiger_wxdaili_set')){
               $bl=pdo_fetch("select * from ".tablename('tiger_wxdaili_set')." where weid='{$weid}'");
               if($bl['dlfxtype']==1){
                   if($member['dltype']==1){                    
                     return array("error"=>1,'msg'=>'对不起!代理不能提交订单!');
                   }                  
                }
            }
            
            //die(json_encode(array("statusCode"=>100,'msg'=>$orderid)));  
            
            $order = pdo_fetch("select * from ".tablename("tiger_newhu_sntjorder")." where weid='{$weid}' and orderid='{$orderid}'");
            //die(json_encode(array("statusCode"=>100,'msg'=>$orderid)));  
            if(empty($order)){
                //查询淘客订单库
                $tkorder = pdo_fetch("select * from ".tablename("tiger_newhu_snorder")." where weid='{$weid}' and orderCode='{$orderid}'");
                if(empty($tkorder)){
                	return array("error"=>1,'msg'=>'您提交的订单暂未更新，请过15分钟后在提交，感谢您的支持！');
                }
                
                
                
                
                if(!empty($tkorder)){
                	if($cfg['dlddfx']==1){
	                	$dltgw=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and wphpid='{$tkorder['pid']}'");
	                	if(!empty($dltgw['id'])){
	                		return array("error"=>1,'msg'=>'对不起!该订单不支持奖励,请联系管理员!'.$dltgw['id']."--".$tkorder['pid']);
	                		
	                	}
	                }
                   if($tkorder['orderLineStatusDesc']=='退款' || $tkorder['orderLineStatusDesc']=='订单已取消'){//审核失败（不可提现）
                      $sh=4;//失效
                      return array("error"=>1,'msg'=>'您提交的订单已退款');
                   }elseif($tkorder['orderLineStatusDesc']=='支付完成'){//已成团，付款成功
                      $sh=3;//已审核
                   }elseif($tkorder['orderLineStatusDesc']=='确认收货'){//确认收货
                      $sh=1;//待返
                   }
                   //$credit2_zg=$tkorder['xgyg']*$cfg['zgf']/100;

                }else{                
                  return array("error"=>1,'msg'=>'您提交的订单暂未更新，请过15分钟后在提交，感谢您的支持'); 
                  $sh=0;//待审核
                }
                if($cfg['fxtype']==1){//积分
                	$jltype=0;
                }elseif($cfg['fxtype']==2){//余额
                    $jltype=1;
                }
                
                if($cfg['fxtype']==1){//自购积分
                	if($cfg['gdfxtype']==1){
                		$jl=$cfg['zgf'];
                	}else{
                		$jl=intval($tkorder['prePayCommission']*$cfg['zgf']/100*$cfg['jfbl']);
                	}                	
                }elseif($cfg['fxtype']==2){//自购余额
                	if($cfg['gdfxtype']==1){
                		 $jl=$cfg['zgf'];
                	}else{
                		 $jl=$tkorder['prePayCommission']*$cfg['zgf']/100;  
                   		 $jl=number_format($jl, 2, '.', '');
                	}                    
                }                
                $data=array(
                    'weid'=>$weid,
                    'openid'=>$member['from_user'],
                    'memberid'=>$member['openid'],
                    'uid'=>$member['id'],
                    'nickname'=>$member['nickname'],
                    'avatar'=>$member['avatar'],
                    'orderid'=>$orderid,
                    'itemid'=>$tkorder['sellerCode'],
                    'jl'=>$jl,
                    'jltype'=>$jltype,
                    'sh'=>$sh,
                    'yongjin'=>$tkorder['prePayCommission'],//佣金
                    'type'=>0,
                    'createtime'=>TIMESTAMP
                );
				
			

                if (pdo_insert ("tiger_newhu_sntjorder", $data ) === false) {
					return array("error"=>1,'msg'=>'系统繁忙'); 
				} else{
					

                   $zgtxmsg=str_replace('#昵称#',$member['nickname'], $cfg['zgtxmsg']);
                   $zgtxmsg=str_replace('#订单号#',$orderid, $zgtxmsg);
                   $zgtxmsg=str_replace('#金额#',$jl, $zgtxmsg);
                    //$this->postText($member['from_user'],$zgtxmsg);//自购提示
                    postkefuxiaoxi($cfg,$weid,$member['from_user'],$zgtxmsg);
                   if(!empty($member['helpid'])){//一级
                      
                      if(pdo_tableexists('tiger_wxdaili_set')){//是否开启代理订单不返给二级
                          $bl=pdo_fetch("select * from ".tablename('tiger_wxdaili_set')." where weid='{$weid}'");
                          if(empty($bl['dlyjfltype'])){
                             $tgw=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and jdpid='{$tkorder['spId']}'");//有没有代理推广位
                                   if(!empty($tgw)){
                                         if(!empty($cfg['khgetorder'])){//管理员订单提交提醒
                                            $mbid=$cfg['khgetorder'];
                                            $mb=pdo_fetch("select * from ".tablename("tiger_newhu_mobanmsg")." where weid='{$weid}' and id='{$mbid}'");
                                            //file_put_contents(IA_ROOT."/addons/tiger_renwubao/log.txt","\n 1old:".json_encode($orderid),FILE_APPEND);
                                            //$msg=$this->mbmsg($cfg['glyopenid'],$mb,$mb['mbid'],$mb['turl'],$fans,$orderid);         
                                            postmobanxiaoxi($cfg,$weid,$cfg['glyopenid'],$mb['id'],$orderid,$member['from_user']);	         
                                         }
                                         return array("error"=>0,'msg'=>'订单提交成功'); 
                                   }
                          }
                      }
                       



                       
                       //插入一级订单
                           if(!empty($cfg['yjf'])){
                               //$credit2_yj=$tkorder['xgyg']*$cfg['yjf']/100;
                               //$ejprice=$cfg['yjf']*$credit2_yj/100;
                                    if($cfg['fxtype']==1){//自购积分
                                    	if($cfg['gdfxtype']==1){
					                		 $jl=$cfg['yjf'];
					                	}else{
					                		$jl=intval($tkorder['prePayCommission']*$cfg['yjf']/100*$cfg['jfbl']);
					                	}					                	
					                }elseif($cfg['fxtype']==2){//自购余额
					                	if($cfg['gdfxtype']==1){
					                		 $jl=$cfg['yjf'];
					                	}else{
					                		$jl=$tkorder['prePayCommission']*$cfg['yjf']/100;  
                                       	    $jl=number_format($jl, 2, '.', '');
					                	}					                    
					                }
					               $yjmember=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and id='{$member['helpid']}' order by id desc");
			                       $yjtxmsg=str_replace('#昵称#',$member['nickname'], $cfg['yjtxmsg']);
			                       $yjtxmsg=str_replace('#订单号#',$orderid, $yjtxmsg);
			                       $yjtxmsg=str_replace('#金额#',$jl, $yjtxmsg);
			                      // $this->postText($yjmember['from_user'],$yjtxmsg);//一级提示
			                       postkefuxiaoxi($cfg,$weid,$yjmember['from_user'],$yjtxmsg);
                                   $data2=array(
                                        'weid'=>$weid,
                                        'openid'=>$yjmember['from_user'],
                                        'memberid'=>$yjmember['openid'],//用户UID
                                        'uid'=>$yjmember['id'],
                                        'nickname'=>$yjmember['nickname'],
                                        'jl'=>$jl,
                                        'jltype'=>$jltype,
                                        'avatar'=>$yjmember['avatar'],
                                            'jluid'=>$member['id'],
                                            'jlnickname'=>$member['nickname'],
                                            'jlavatar'=>$member['avatar'],
                                        'orderid'=>$orderid,
                                        'itemid'=>$tkorder['sellerCode'],
                                        'yongjin'=>$tkorder['prePayCommission'],
                                        'type'=>1,
                                        'sh'=>$sh,
                                        'createtime'=>TIMESTAMP
                                    );                    
                                    
                                    
                                    $order = pdo_fetchall("select * from ".tablename("tiger_newhu_sntjorder")." where weid='{$weid}' and type=1 and orderid={$orderid}");
                                    if(empty($order)){
                                        pdo_insert ( "tiger_newhu_sntjorder", $data2 );//添加一级订单
                                    }
                                   
                             }
                       //一级订单结束

                       if(!empty($yjmember['helpid'])){//二级
                           
                           //二级订单添加
                                 if(!empty($cfg['ejf'])){
                                     //$ejfprice=$tkorder['xgyg']*$cfg['ejf']/100;
                                     if($cfg['fxtype']==1){//自购积分
                                     	if($cfg['gdfxtype']==1){
					                		 $jl=$cfg['ejf'];
					                	}else{
					                		$jl=intval($tkorder['prePayCommission']*$cfg['ejf']/100*$cfg['jfbl']);
					                	}					                	
					                }elseif($cfg['fxtype']==2){//自购余额
					                	if($cfg['gdfxtype']==1){
					                		 $jl=$cfg['ejf'];
					                	}else{
					                		 $jl=$tkorder['prePayCommission']*$cfg['ejf']/100;  
                                       		 $jl=number_format($jl, 2, '.', '');
					                	}					                    
					                }
					               $rjmember=pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and id='{$yjmember['helpid']}' order by id desc");
		                           $ejtxmsg=str_replace('#昵称#',$member['nickname'], $cfg['ejtxmsg']);
		                           $ejtxmsg=str_replace('#订单号#',$orderid, $ejtxmsg);
		                           $ejtxmsg=str_replace('#金额#',$jl, $ejtxmsg);
		                           //$this->postText($rjmember['from_user'],$ejtxmsg);//二级提示
		                           postkefuxiaoxi($cfg,$weid,$rjmember['from_user'],$ejtxmsg);
                                     $data3=array(
                                        'weid'=>$weid,
                                        'openid'=>$rjmember['from_user'],
                                        'memberid'=>$rjmember['openid'],//用户openid
                                        'uid'=>$rjmember['id'],//用户openid                                        
                                        'nickname'=>$rjmember['nickname'],
                                        'jl'=>$jl,
                                        'jltype'=>$jltype,
                                        'avatar'=>$rjmember['avatar'],
                                            'jluid'=>$member['id'],
                                            'jlnickname'=>$member['nickname'],
                                            'jlavatar'=>$member['avatar'],
                                        'orderid'=>$orderid,
                                        'itemid'=>$tkorder['sellerCode'],
                                        'yongjin'=>$tkorder['prePayCommission'],
                                        'type'=>2,
                                         'sh'=>$sh,
                                        'createtime'=>TIMESTAMP
                                    );
                                    $order = pdo_fetchall("select * from ".tablename("tiger_newhu_sntjorder")." where weid='{$weid}' and type=2 and orderid={$orderid}");
                                    if(empty($order)){
                                        pdo_insert ("tiger_newhu_sntjorder", $data3 );//添加二级订单
                                    }
                                 }
                           //二级订单结束


                       }
                   }
                   if(!empty($cfg['khgetorder'])){//管理员订单提交提醒
                        $mbid=$cfg['khgetorder'];
                        $mb=pdo_fetch("select * from ".tablename("tiger_newhu_mobanmsg")." where weid='{$weid}' and id='{$mbid}'");
                        //file_put_contents(IA_ROOT."/addons/tiger_renwubao/log.txt","\n 1old:".json_encode($orderid),FILE_APPEND);
                        //$msg=$this->mbmsg($cfg['glyopenid'],$mb,$mb['mbid'],$mb['turl'],$fans,$orderid);    
                        postmobanxiaoxi($cfg,$weid,$cfg['glyopenid'],$mb['id'],$orderid,$member['from_user']);              
                   }
					return array("error"=>0,'msg'=>'订单提交成功'); 
				}
            }else{
              return array("error"=>1,'msg'=>'您提交的订单已经记录'); 
            }
	
}
//唯品会提交订单结束

//发送客服消息
function postkefuxiaoxi($cfg,$weid,$openid,$msg){
	$url=$cfg[tknewurl]."app/index.php?i=".$weid."&c=entry&do=kefuxiaoxi&m=tiger_newhu&openid=".$openid."&msg=".urlencode($msg);
	xxcurl($url);
}

//发送模版消息
function postmobanxiaoxi($cfg,$weid,$openid,$id,$orderid,$yhopenid){//$yhopenid 用户的OPENID
	$url=$cfg[tknewurl]."app/index.php?i=".$weid."&c=entry&do=mobanxiaoxi&m=tiger_newhu&openid=".$openid."&id=".$id."&orderid=".$orderid."&yhopenid=".$yhopenid;
	xxcurl($url);
}


//渠道信息入库
function getqudaolist($sign,$weid,$page=1){
	$url="http://api1.tigertaoke.com/qudaoapilist.php?&page=".$page."&sign=".$sign;        
    $arr=xxcurl($url);
    $arr= @json_decode($arr, true);

	
    if($arr['error']==0){
		if(empty($arr['data'])){
			return "NO";
		}
		
		if(empty($arr['data'][0]['root_pid'])){//只有一个的情况会只显示一个数组
			$rid = pdo_fetch("select * from ".tablename("tiger_newhu_qudaolist")." where weid='{$weid}' and relation_id='{$arr['data']['relation_id']}'");
			if(empty($rid)){
				$indata2=array(
					  'weid'=>$weid,
					  'uid'=>0,
					  'relation_app'=>$arr['data']['relation_app'],
					  'create_date'=>$arr['data']['create_date'],
					  'account_name'=>$arr['data']['account_name'],
					  'real_name'=>$arr['data']['real_name'],
					  'relation_id'=>$arr['data']['relation_id'],
					  'offline_scene'=>$arr['data']['offline_scene'],
					  'online_scene'=>$arr['data']['online_scene'],
					  'note'=>$arr['data']['note'],
					  'root_pid'=>$arr['data']['root_pid'],
					  'rtag'=>$arr['data']['rtag'],  
					  'createtime'=>time(),
				);
				pdo_insert ("tiger_newhu_qudaolist", $indata2 );//插入数据
			}
		}else{
			foreach($arr['data'] as $k=>$v){
				$rid = pdo_fetch("select * from ".tablename("tiger_newhu_qudaolist")." where weid='{$weid}' and relation_id='{$v['relation_id']}'");
				if(empty($rid)){
					$indata=array(
						  'weid'=>$weid,
						  'uid'=>0,
						  'relation_app'=>$v['relation_app'],
						  'create_date'=>$v['create_date'],
						  'account_name'=>$v['account_name'],
						  'real_name'=>$v['real_name'],
						  'relation_id'=>$v['relation_id'],
						  'offline_scene'=>$v['offline_scene'],
						  'online_scene'=>$v['online_scene'],
						  'note'=>$v['note'],
						  'root_pid'=>$v['root_pid'],
						  'rtag'=>$v['rtag'],  
						  'createtime'=>time(),
					);
					pdo_insert ("tiger_newhu_qudaolist", $indata );//插入数据
				}
			}
		}
		
    	
    	return "OK";  
    }else{
		return "NO";  
	}
    	
}


/**
 * 请求接口返回内容
 * @param  string $url [请求的URL地址]
 * @param  string $params [请求的参数]
 * @param  int $ipost [是否采用POST形式]
 * @return  string
 */
function xxcurl($url, $params = false, $ispost = 0)
{
    $httpInfo = array();
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'JuheData');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    if ($ispost) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_URL, $url);
    } else {
        if ($params) {
            curl_setopt($ch, CURLOPT_URL, $url.'?'.$params);
        } else {
            curl_setopt($ch, CURLOPT_URL, $url);
        }
    }
    $response = curl_exec($ch);
    if ($response === FALSE) {
        //echo "cURL Error: " . curl_error($ch);
        return false;
    }
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $httpInfo = array_merge($httpInfo, curl_getinfo($ch));
    curl_close($ch);
    return $response;
} 


//递归查询 无线 上级 是否是  团长
   // $uid  用户ID
   // $weid 公众号ID
   //返回团长用户ID
   function getinfotz($weid,$uid){
           if($uid>1){
               $infos = pdo_fetch("select * from ".tablename("tiger_newhu_share")." where weid='{$weid}' and id='{$uid}'");
               if(!empty($infos)){
				   if($infos['tztype']==1){
					   return array('id'=>$infos['id'],'nickname'=>$infos['nickname'],'avatar'=>$infos['avatar'],'from_user'=>$infos['from_user']);
				   }else{
					   return getinfotz($weid,$infos['helpid']);
				   }
               }else{
                   return "";
               }
           }else{
               return "";
           }
   }
   
   
   //淘宝插入团长奖励
   function tbintzorder($weid,$member,$tzmember,$tkorder,$orderid,$sh,$jl){
	   $data2=array(
	   	'weid'=>$weid,
	   	'openid'=>$tzmember['from_user'],
	   	'memberid'=>$tzmember['openid'],//用户UID
	   	'uid'=>$tzmember['id'],
	   	'nickname'=>$tzmember['nickname'],
	   	'jl'=>$jl,//奖励佣金
	   	'jltype'=>1,//0积分 1余额
	   	'avatar'=>$tzmember['avatar'],
	   	'jluid'=>$member['id'],//订单所有人ID
	   	'jlnickname'=>$member['nickname'],//订单所有人昵称
	   	'jlavatar'=>$member['avatar'],//订单所有人头像
	   	'orderid'=>$orderid,
	   	'itemid'=>$tkorder['numid'],
	   	'yongjin'=>$tkorder['xgyg'],
	   	'type'=>9,//0 自有  1级奖励 2级奖励  9团长无限下级奖励
		'tztype'=>1,//1 为普通用户 团长分佣
	   	'sh'=>$sh,
	   	'createtime'=>TIMESTAMP
	   );
	   pdo_insert ("tiger_newhu_order", $data2 );
   }
   
   //拼多多插入团长奖励
   function pddintzorder($weid,$member,$tzmember,$tkorder,$orderid,$sh,$jl){
	   $data2=array(
	        'weid'=>$weid,
	        'openid'=>$tzmember['from_user'],
	        'memberid'=>$tzmember['openid'],//用户UID
	        'uid'=>$tzmember['id'],
	        'nickname'=>$tzmember['nickname'],
	        'jl'=>$jl,
	        'jltype'=>1,
	        'avatar'=>$tzmember['avatar'],
	            'jluid'=>$member['id'],
	            'jlnickname'=>$member['nickname'],
	            'jlavatar'=>$member['avatar'],
	        'orderid'=>$orderid,
	        'itemid'=>$tkorder['goods_id'],
	        'yongjin'=>$tkorder['promotion_amount'],
	        'type'=>9,//0 自有  1级奖励 2级奖励  9团长无限下级奖励
	        'tztype'=>1,//1 为普通用户 团长分佣
	        'sh'=>$sh,
	        'createtime'=>TIMESTAMP
	    );  
   	   pdo_insert ("tiger_newhu_pddtjorder", $data2 );
   }
   
   //京东插入团长奖励
   function jdintzorder($weid,$member,$tzmember,$tkorder,$orderid,$sh,$jl){
	   $data2=array(
	        'weid'=>$weid,
	        'openid'=>$tzmember['from_user'],
	        'memberid'=>$tzmember['openid'],//用户UID
	        'uid'=>$tzmember['id'],
	        'nickname'=>$tzmember['nickname'],
	        'jl'=>$jl,
	        'jltype'=>1,
	        'avatar'=>$tzmember['avatar'],
			'jluid'=>$member['id'],
			'jlnickname'=>$member['nickname'],
			'jlavatar'=>$member['avatar'],
	        'orderid'=>$orderid,
	        'itemid'=>$tkorder['skuId'],
	        'yongjin'=>$tkorder['estimateFee'],
	        'type'=>9,//0 自有  1级奖励 2级奖励  9团长无限下级奖励
	        'tztype'=>1,//1 为普通用户 团长分佣
	        'sh'=>$sh,
	        'createtime'=>TIMESTAMP
	    );   
   	   pdo_insert ("tiger_newhu_jdtjorder", $data2 );
   }
