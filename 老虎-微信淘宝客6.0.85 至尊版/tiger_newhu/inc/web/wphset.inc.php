<?php
global $_W, $_GPC;
        $weid=$_W['uniacid'];

        $wphsign = pdo_fetch ( 'select * from ' . tablename ($this->modulename . "_wphsign" ) . " where weid='{$weid}'" );
        
		$wphsignlist = pdo_fetchall ( 'select * from ' . tablename ($this->modulename . "_wphsign" ) . " where weid='{$weid}'" );
		// echo "<pre>";
		// print_r($wphsignlist);
		// exit;
//      echo "<pre>";
//      print_r($wphsign);
//      exit;

		if($_GPC['op']=='delete'){
			$id=$_GPC['id'];
			pdo_delete($this->modulename."_wphsign", array('id' => $id));
						message('删除成功！', referer(), 'success');
		}
        
        
        if(empty($set)){
           if (checksubmit('submit')){  
                $indata=array(
                    'weid'=>$_W['uniacid'],
                    'ddjbbuid'=>$_GPC['ddjbbuid'],
                    'pddpid'=>$_GPC['pddpid'],
                );
            //echo '<pre>';
            //print_r($indata);
            //exit;
                $result=pdo_insert($this->modulename."_set",$indata);
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
                    'ddjbbuid'=>$_GPC['ddjbbuid'],
                    'pddpid'=>$_GPC['pddpid'], 

                );
           if(pdo_update($this->modulename."_set",$updata,array('id'=>$id)) === false){
                  message ( '更新失败' );
                }else{
                  message ( '更新成功!' );
                }
          }
        }

		include $this->template ( 'wphset' );
?>