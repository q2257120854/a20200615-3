<?php
global $_W,$_GPC;
$articletype= pdo_fetchall("SELECT * FROM " . tablename("tiger_newhu_articletype") . " WHERE weid='{$_W['uniacid']}'");
 $id = intval($_GPC['id']);
 
        load ()->func ( 'tpl' );
        $operation = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
        if ($operation == 'post'){
            $id = intval($_GPC['id']);
            if (!empty($id)){
                $item = pdo_fetch("SELECT * FROM " . tablename("tiger_newhu_article") . " WHERE id = :id" , array(':id' => $id));
                if (empty($item)){
                    message('抱歉，兑换文章不存在或是已经删除！', '', 'error');
                }
            }
            if (checksubmit('submit')){
                if (empty($_GPC['title'])){
                    message('请输入兑换文章名称！');
                }

                $data = array(
                    'weid' => $_W['uniacid'], 
                    'title' => $_GPC['title'], 
                    'px' => $_GPC['px'], 	
								'tj' => $_GPC['tj'], 	
                    'type' => $_GPC['type'], 					
					'videourl' => $_GPC['videourl'], 
					'picurl' => $_GPC['picurl'], 
					'click' => $_GPC['click'], 
					'wlurl' => $_GPC['wlurl'], 
                    'content' => $_GPC['content'], 
                    'createtime' => TIMESTAMP,);
               
                if (!empty($id)){
                    pdo_update("tiger_newhu_article", $data, array('id' => $id));
                }else{
                    pdo_insert("tiger_newhu_article", $data);
                }
                message('文章更新成功！', $this -> createWebUrl('article', array('op' => 'display')), 'success');
            }
        }else if ($operation == 'delete'){
            $row = pdo_fetch("SELECT id FROM " . tablename("tiger_newhu_article") . " WHERE id = :id", array(':id' => $id));
            if (empty($row)){
                message('抱歉，文章' . $id . '不存在或是已经被删除！');
            }
            pdo_delete("tiger_newhu_article", array('id' => $id));
            message('删除成功！', referer(), 'success');
        }else if ($operation == 'display'){
            if (checksubmit()){
                if (!empty($_GPC['displayorder'])){
                    foreach ($_GPC['displayorder'] as $id => $displayorder){
                        pdo_update("tiger_newhu_article", array('displayorder' => $displayorder), array('id' => $id));
                    }
                    message('排序更新成功！', referer(), 'success');
                }
            }
            $condition = '';
            $list = pdo_fetchall("SELECT * FROM " . tablename("tiger_newhu_article") . " WHERE weid = '{$_W['weid']}'  ORDER BY px ASC");
           
        }
        include $this -> template('article');