<?php
global $_W, $_GPC;
        $weid=$_W['uniacid'];

        $set = pdo_fetch ( 'select * from ' . tablename ($this->modulename . "_snset" ) . " where weid='{$weid}' order by id desc" );

        
        if(empty($set)){
           if (checksubmit('submit')){  
                $indata=array(
				 'weid'=>$weid,
                    'appkey'=>trim($_GPC['appkey']),
                    'appsecret'=>trim($_GPC['appsecret']), 
                    'snpid'=>trim($_GPC['snpid']), 
                    'createtime'=>time(), 
                );
            //echo '<pre>';
            //print_r($indata);
            //exit;
                $result=pdo_insert($this->modulename."_snset",$indata);
                if(empty($result)){
                  message('添加失败', referer(), 'error');
                }else{
                  message ( '添加成功!' );
                }    
           }
        }else{
         if (checksubmit('submit')){
           $id = intval($_GPC['id']);
           $updata=array(              
		   'weid'=>$weid,
                    'appkey'=>trim($_GPC['appkey']),
                    'appsecret'=>trim($_GPC['appsecret']), 
                    'snpid'=>trim($_GPC['snpid']), 
					'createtime'=>time(), 

                );
           if(pdo_update($this->modulename."_snset",$updata,array('id'=>$id)) === false){
                  message ( '更新失败' );
                }else{
                  message ( '更新成功!' );
                }
          }
        }

		include $this->template ( 'snset' );
?>