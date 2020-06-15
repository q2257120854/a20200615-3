<?php
 global $_W;
        global $_GPC;
        $operation = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
        if ($operation == 'post'){
            $id = intval($_GPC['id']);
            if (!empty($id)){
                $item = pdo_fetch("SELECT * FROM " . tablename("tiger_wxdaili_dailidjset") . " WHERE id = :id" , array(':id' => $id));
                if (empty($item)){
                    message('抱歉，代理等级不存在或是已经删除！', '', 'error');
                }
            }
            if (checksubmit('submit')){
                if (empty($_GPC['title'])){
                    message('代理名称必须填写！');
                }
                $data = array(
                    'weid' => $_W['weid'], 
                    'title' => $_GPC['title'], 
					'px' => $_GPC['px'], 
					'sm' => $_GPC['sm'], 
					'fssum' => $_GPC['fssum'], 
					'dlbl1' => $_GPC['dlbl1'], 
					'dlbl1t2' => $_GPC['dlbl1t2'], 
					'dlbl1t3' => $_GPC['dlbl1t3'], 
					'dlbl2' => $_GPC['dlbl2'], 
					'dlbl2t3' => $_GPC['dlbl2t3'], 
					'dlbl3' => $_GPC['dlbl3'], 
                    'createtime' => TIMESTAMP,);               
                if (!empty($id)){
                    pdo_update("tiger_wxdaili_dailidjset", $data, array('id' => $id));
                }else{
                    pdo_insert("tiger_wxdaili_dailidjset", $data);
                }
                message('代理更新成功！', $this -> createWebUrl('dailidjset', array('op' => 'display')), 'success');
            }
        }else if ($operation == 'delete'){
            $id = intval($_GPC['id']);
            $row = pdo_fetch("SELECT id FROM " . tablename("tiger_wxdaili_dailidjset") . " WHERE id = :id", array(':id' => $id));
            if (empty($row)){
                message('抱歉，代理' . $id . '不存在或是已经被删除！');
            }
            pdo_delete("tiger_wxdaili_dailidjset", array('id' => $id));
            message('删除成功！', referer(), 'success');
        }else if ($operation == 'display'){
            $condition = '';
            $list = pdo_fetchall("SELECT * FROM " . tablename("tiger_wxdaili_dailidjset") . " WHERE weid = '{$_W['uniacid']}'  ORDER BY px desc");
        }
        include $this -> template('dailidjset');
?>