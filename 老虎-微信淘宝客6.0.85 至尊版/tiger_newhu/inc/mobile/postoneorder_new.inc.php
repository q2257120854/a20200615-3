<?php
 global $_W,$_GPC;
  $cfg = $this->module['config'];
//  $isorderid=pdo_indexexists('tiger_newhu_tkorder', 'orderid');//索引存在,就删除
//  if($isorderid){
// 	 pdo_query("ALTER TABLE " . tablename('tiger_newhu_tkorder') . " DROP KEY `orderid`;");
//  }




			
			 $miyao=$_GPC['miyao'];
			 if($miyao!==$cfg['miyao']){
				exit(json_encode(array('status' => 2, 'content' => '密钥错误，请检测秘钥，或更新缓存！')));
			 }
			
			 $content=htmlspecialchars_decode($_GPC['content']);
			 //file_put_contents(IA_ROOT."/addons/tiger_newhu/inc/mobile/log--ordernews.txt","\n dantiao:". $content,FILE_APPEND);
			//$content='{"adzone_id":"15983850040","adzone_name":"\u968f2","alipay_total_price":"0","auction_category":"\u5bb6\u5ead\/\u4e2a\u4eba\u6e05\u6d01\u5de5\u5177","commission":"0.00","commission_rate":"1.0000","create_time":"2019-02-23 11:00:05","income_rate":"0.0900","item_num":"1","item_title":"\u5bb6\u7528\u53a8\u623f\u536b\u751f\u95f4\u529e\u516c\u5ba4\u5bbe\u9986\u4e00\u6b21\u6027\u52a0\u539a\u5e73\u53e3\u70b9\u65ad\u5f0f\u5f69\u8272\u5851\u6599\u888b\u5783\u573e\u888b","num_iid":"582330533609","order_type":"\u6dd8\u5b9d","pay_price":"0.00","price":"11.90","pub_share_pre_fee":"0","seller_nick":"\u98ce\u4e91e\u65cf2009","seller_shop_title":"\u901f\u7131\u5bb6\u5c45\u751f\u6d3b\u9986","site_id":"85950268","site_name":"\u5fae\u4fe1","subsidy_rate":"0.0000","subsidy_type":"-1","terminal_type":"2","tk3rd_type":"--","tk_status":"13","total_commission_rate":"0.0900","trade_id":"355210017600037153","trade_parent_id":"355210017597037153"}';
			$news=@json_decode($content, true);
			 				 
 			 //echo "<pre>";
 			 //print_r($news);
   			 			 
			 
			 
			 if(empty($news)){
				 exit("wushuju");
			 }
			 //echo "<pre>";
			 if(empty($news[1]['trade_id'])){//单条
			 	
			 			if($news["tk_status"]==3){
			 				$orderzt="订单结算";
			 			}elseif($news["tk_status"]==12){
			 				$orderzt="订单付款";
			 			}elseif($news["tk_status"]==13){
			 				$orderzt="订单失效";
			 			}elseif($news["tk_status"]==14){
			 				$orderzt="订单成功";
			 			}
			 			
			 			if($news['terminal_type']==1){
			 				$pt="PC";
			 			}else{
			 				$pt="无线";
			 			}	 
			 			$tbsbuid6=substr($news["trade_parent_id"],-6);
			 			$data=array(
			 				'weid'=>$_W['uniacid'],
			 				'addtime'=>strtotime($news["tb_paid_time"]),
			 				'orderid'=>$news["trade_parent_id"],
			 				'forderid'=>$news["trade_parent_id"],
			 				'zorderid'=>$news["trade_id"],
			 				'numid'=>$news["item_id"],
			 				'shopname'=>$news["seller_shop_title"],
			 				'title'=>$news["item_title"],						
			 				'orderzt'=>$orderzt,
			 				'srbl'=>$news["income_rate"]."%",
			 				'fcbl'=>"",
			 				'fkprice'=>$news["alipay_total_price"],
			 				'xgyg'=>$news["pub_share_pre_fee"],
			 				'jstime'=>strtotime($news["tk_earning_time"]),
			 				'pt'=> $pt,
			 				'mtid'=>$news["site_id"],//媒体ID
			 				'mttitle'=>$news["site_name"],//媒体名称
							
							'itempic'=>"http:".$news["item_img"],//图片
							'dsf'=>$news["tk_order_role"],//第三方
							'wq'=>$news["refund_tag"],//维权
							
// 			 				'tgwid'=>$news["adzone_id"],//推广位ID
// 			 				'tgwtitle'=>$news["adzone_name"],//推广位名称

			 				'tbsbuid6'=>$tbsbuid6,
			 				'ly'=>1,
			 				'createtime'=>TIMESTAMP,
			 			);
			 			if(!empty($news["relation_id"])){
			 				$data['relation_id']=$news["relation_id"];//渠道ID
			 				$data['special_id']=$news["special_id"];//渠道ID
			 				$data['click_time']=$news["click_time"];//渠道ID
			 			}
						if(!empty($news["adzone_id"])){
							$data['tgwid']=$news["adzone_id"];//渠道ID
							$data['tgwtitle']=$news["adzone_name"];//渠道ID
						}
						
			 			$ord=pdo_fetch ( 'select orderid,orderzt,relation_id from ' . tablename ( $this->modulename . "_tkorder" ) . " where weid='{$_W['uniacid']}' and numid='{$news['item_id']}'  and (orderid='{$news['trade_id']}' or orderid='{$news['trade_parent_id']}')" );
						//print_r($ord);
						//if($ord){
							//echo $news['trade_id']."---";
							//$result=pdo_delete("tiger_newhu_tkorder",array ('orderid'=>$news['trade_parent_id'],'weid'=>$_W['uniacid']));
							//echo "del:". $result;
							//exit;
						//}
			 			if(empty($ord)){
			 				if(!empty($data['addtime'])){
															
			 					$a=pdo_insert ($this->modulename . "_tkorder", $data );
			 				} 
			 			}else{
							if($orderzt!="订单失效" || $ord['orderzt']!="订单失效"){
								
								if(!empty($news["relation_id"]) and empty($ord['relation_id'])){
									$share=pdo_fetch ( 'select * from ' . tablename ("tiger_newhu_share" ) . " where weid='{$_W['uniacid']}' and qdid='{$ord['relation_id']}'" );
									if(!empty($share['from_user'])){
										if(!empty($cfg['dlorder'])){
											$mbid=$cfg['dlorder'];
											// $mb=pdo_fetch("select * from ".tablename("tiger_newhu_mobanmsg")." where weid='{$_W['uniacid']}' and id='{$mbid}'");
											// $str=$this->mbmsg($share['from_user'],$mb,$mb['mbid'],'',$share,$news["trade_parent_id"],$cfg,'');
											$str=postmobanxiaoxi($cfg,$_W['uniacid'],$share['from_user'],$mbid,$news['trade_parent_id'],$share['from_user']);
										
										}
									}
								}
								
								
								$a=pdo_update($this->modulename . "_tkorder",$data, array ('orderid' =>$news['trade_parent_id'],'numid'=>$news["item_id"],'weid'=>$_W['uniacid']));
							}			 				
			 			}	
						
						//
											 
			 	//echo $a;
				//exit;

			 }else{

						
				 
						$result= array();
						foreach ($news as $key => $info) {
							$result[$info['trade_parent_id']][] = $info;//合并相同订单
						}			
						sort($result);
						//print_r($result);
						
						
						foreach($result as $k=>$v){
							 if(empty($v[1])){
								  getdata($v[0],1,$_W);
									//print_r($v[0]);
							 }else{
								  $ord=pdo_fetch('select * from '.tablename("tiger_newhu_tkorder")." where weid='{$_W['uniacid']}'  and orderid='{$v[0]['trade_parent_id']}'");
									if($ord){
										$result=pdo_delete("tiger_newhu_tkorder",array ('orderid'=>$v[0]['trade_parent_id'],'weid'=>$_W['uniacid']));//删除该订单id的所有订单
										
									}
									//print_r($v);
									foreach($v as $i=>$b){										
										getdata($b,2,$_W);
									}
							 }
						}
				 
			 }
			  

			 
			 function getdata($v,$a,$_W){//$a 2 相同订单插件,1不同订单号插入
			 //return $_W['uniacid'];
				 if($v["tk_status"]==3){
				 	$orderzt="订单结算";
				 }elseif($v["tk_status"]==12){
				 	$orderzt="订单付款";
				 }elseif($v["tk_status"]==13){
				 	$orderzt="订单失效";
				 }elseif($v["tk_status"]==14){
				 	$orderzt="订单成功";
				 }
				 
				 if($v['terminal_type']==1){
				 	$pt="PC";
				 }else{
				 	$pt="无线";
				 }	 
				 $tbsbuid6=substr($v["trade_parent_id"],-6);
				 $data=array(
				 	'weid'=>$_W['uniacid'],
				 	'addtime'=>strtotime($v["tk_create_time"]),
				 	'orderid'=>$v["trade_parent_id"],
				 	'forderid'=>$v["trade_parent_id"],
				 	'zorderid'=>$v["trade_id"],
				 	'numid'=>$v["item_id"],
				 	'shopname'=>$v["seller_shop_title"],
				 	'title'=>$v["item_title"],						
				 	'orderzt'=>$orderzt,
				 	'srbl'=>$v["income_rate"]."%",
				 	'fcbl'=>"",
				 	'fkprice'=>$v["alipay_total_price"],
				 	'xgyg'=>$v["pub_share_pre_fee"],
				 	'jstime'=>strtotime($v["tk_earning_time"]),
				 	'pt'=> $pt,
				 	'mtid'=>$v["site_id"],//媒体ID
				 	'mttitle'=>$v["site_name"],//媒体名称
					
					'itempic'=>"http:".$v["item_img"],//图片
					'dsf'=>$v["tk_order_role"],//第三方
					'wq'=>$v["refund_tag"],//维权
// 				 	'tgwid'=>$v["adzone_id"],//推广位ID
// 				 	'tgwtitle'=>$v["adzone_name"],//推广位名称
				 	'ly'=>1,
				 	'tbsbuid6'=>$tbsbuid6,
				 	'createtime'=>TIMESTAMP,
				 );
				 if(!empty($v["relation_id"])){
	 				$data['relation_id']=$v["relation_id"];//渠道ID
	 				$data['special_id']=$v["special_id"];//渠道ID
	 				$data['click_time']=$v["click_time"];//渠道ID
	 			}
				if(!empty($v["adzone_id"])){
					$data['tgwid']=$v["adzone_id"];//渠道ID
					$data['tgwtitle']=$v["adzone_name"];//渠道ID
				}
				 
				 if($a==2){
					
							$aaa=pdo_insert ("tiger_newhu_tkorder", $data );
							return $aaa."<br>";
				 }else{
					 $ord=pdo_fetchall ( 'select * from ' . tablename ("tiger_newhu_tkorder") . " where weid='{$_W['uniacid']}' and orderid='{$data['orderid']}'" );
					 //print_r($ord);
					 if(!empty($ord)){//已存在,更新
						 if($ord['orderzt']!='订单失效'){
							 if(!empty($v["relation_id"]) and empty($ord['relation_id'])){
							 	$share=pdo_fetch ( 'select * from ' . tablename ("tiger_newhu_share" ) . " where weid='{$_W['uniacid']}' and qdid='{$ord['relation_id']}'" );
							 	if(!empty($share['from_user'])){
							 		if(!empty($cfg['dlorder'])){
							 			$mbid=$cfg['dlorder'];
							 			// $mb=pdo_fetch("select * from ".tablename("tiger_newhu_mobanmsg")." where weid='{$_W['uniacid']}' and id='{$mbid}'");
							 			// $str=$this->mbmsg($share['from_user'],$mb,$mb['mbid'],'',$share,$news["trade_parent_id"],$cfg,'');
							 			$str=postmobanxiaoxi($cfg,$_W['uniacid'],$share['from_user'],$mbid,$v['trade_parent_id'],$share['from_user']);
							 		
							 		}
							 	}
							 }
							 $res=pdo_update("tiger_newhu_tkorder",$data, array ('orderid' =>$data['orderid'],'weid'=>$_W['uniacid']));
						 }						 
					 }else{
						 if(!empty($data['addtime'])){
							 
								$res=pdo_insert ("tiger_newhu_tkorder", $data );
								return $res;
						 } 
					 }
				 }
				 
				 
			 }
			 
			 //发送模版消息
			 function postmobanxiaoxi($cfg,$weid,$openid,$id,$orderid,$yhopenid){//$yhopenid 用户的OPENID
			 	$url=$cfg[tknewurl]."app/index.php?i=".$weid."&c=entry&do=mobanxiaoxi&m=tiger_newhu&openid=".$openid."&id=".$id."&orderid=".$orderid."&yhopenid=".$yhopenid;
			 	// return $url;
			 	xxcurl($url);
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

			exit(json_encode(array('status' => 1, 'content' => '成功')));
