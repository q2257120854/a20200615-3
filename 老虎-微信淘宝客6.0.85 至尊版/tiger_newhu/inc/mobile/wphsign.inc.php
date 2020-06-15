<?php
global $_W, $_GPC;


					    
       if($_GPC['op']=='post'){
           $data=array(
							'weid'=>$_W['uniacid'],
							'access_token'=>$_GPC['access_token'],
							'expires_in'=>$_GPC['expires_in'],
							'refresh_token'=>$_GPC['refresh_token'],
							'open_id'=>$_GPC['open_id'],
							'endtime'=>$_GPC['endtime'],
							'createtime'=>time(),
           );
           // echo "<pre>";
           // print_r($data);	
           $go = pdo_fetch("SELECT id FROM " . tablename($this->modulename."_wphsign") . " WHERE  owner_name='{$_GPC['owner_name']}'");
            if(empty($go)){
                  $res=pdo_insert($this->modulename."_wphsign",$data);
                  if($res=== false){
                    echo '授权失败111';
                  }else{
                    //echo '授权成功:'.$_GPC['sign'];
                    $url=$_W['siteroot']."web/index.php?c=site&a=entry&do=wphset&m=tiger_newhu";
                    //echo $url;
                    echo "<a href='".$url."' style='font-size:20px;width:60%;height:50px;text-height:50px;text-align: center'>授权成功！点击返回</a>";
                   // message('授权成功！',$url, 'success');
                  }
            }else{                          
                  $res=pdo_update($this->modulename."_wphsign", $data, array('open_id' =>$_GPC['open_id']));
                  if($res=== false){
                    echo '授权失败222';
                  }else{
                    $url=$_W['siteroot']."web/index.php?c=site&a=entry&do=wphset&m=tiger_newhu";
                    echo "<a href='".$url."' style='font-size:20px;width:60%;height:50px;text-height:50px;text-align: center'>授权成功！点击返回</a>";
                    //message('授权成功！',$url, 'success');
                  }
            }
       }
?>