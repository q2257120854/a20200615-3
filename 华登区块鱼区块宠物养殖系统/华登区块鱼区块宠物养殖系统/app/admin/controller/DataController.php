<?php
// +----------------------------------------------------------------------
// | vaeThink [ Programming makes me happy ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://www.vaeThink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 听雨 < 389625819@qq.com >
// +---------------------------------------------------------------------
namespace app\admin\controller;
use vae\controller\AdminCheckAuth;
use think\Db;
use think\Config;

class DataController extends AdminCheckAuth
{

    // 列表页视图
    public function index()
    {
        //$mysql = 'ALTER TABLE blockcat_member_notice  AUTO_INCREMENT  = 1;';
        if($this->request->isPost()){
            $param = vae_get_param();
            $param['member'] = isset($param['member']) ? $param['member'] : [];
            $param['product'] = isset($param['product']) ? $param['product'] : [];
            $param['workorder'] = isset($param['workorder']) ? $param['workorder'] : [];

            if (is_array($param['member'])) {
                foreach ($param['member'] as $data) {
                    if($data == 'member'){
                        Db::execute('DELETE  FROM `blockcat_member`;');
                    }else if($data == 'level'){
                        Db::execute('DELETE  FROM `blockcat_member_level`;');
                    }else if($data == 'method'){
                        Db::execute('DELETE  FROM `blockcat_payment_method`;');
                    }else if($data == 'integrallog'){
                        Db::execute('DELETE  FROM `blockcat_member_integrallog`;');
                    }else if($data == 'rechargelog'){
                        Db::execute('DELETE  FROM `blockcat_member_rechargelog`;');
                    }else if($data == 'adopt'){
                        Db::execute('DELETE  FROM `blockcat_product_adopt`;');
                    }else if($data == 'appointment'){
                        Db::execute('DELETE  FROM `blockcat_product_appointment`;');
                    }else if($data == 'incomelog'){
                        Db::execute('DELETE  FROM `blockcat_member_incomelog`;');
                    }else if($data == 'assetsalelog'){
                        Db::execute('DELETE  FROM `blockcat_member_assetsalelog`;');
                    }else if($data == 'order'){
                        Db::execute('DELETE  FROM `blockcat_order`;');
                    }else if($data == 'complaint'){
                        Db::execute('DELETE  FROM `blockcat_order_complaint`;');
                    }
                }
            }
            if (is_array($param['product'])) {
                foreach ($param['product'] as $data) {
                    if($data == 'product'){
                        Db::execute('DELETE  FROM `blockcat_product`;');
                    }else if($data == 'cate'){
                        Db::execute('DELETE  FROM `blockcat_product_cate`;');
                    }else if($data == 'level'){
                        Db::execute('DELETE  FROM `blockcat_product_level`;');
                    }else if($data == 'owner'){
                        Db::table('blockcat_product')->where('id','>',0)->update(['owner_mid' => 0, 'transferor_mid' => 0, 'status' => 1]);
                    }
                }
            }

            if (is_array($param['workorder'])) {
                 foreach ($param['workorder'] as $data) {
                    if($data == 'workorder'){
                        Db::execute('DELETE  FROM `blockcat_workorder`;');
                    }else if($data == 'type'){
                        Db::execute('DELETE  FROM `blockcat_workorder_type`;');
                    }
                }
            }
            return vae_assign(1, '数据清理成功');
        }else{
            return view();
        }

    }

    
}
