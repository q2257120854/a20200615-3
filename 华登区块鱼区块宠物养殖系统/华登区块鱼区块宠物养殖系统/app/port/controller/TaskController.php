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
namespace app\port\controller;
use vae\controller\PortControllerBase;
use think\Session;
use think\Config;
use app\common\model\product\Product;
use app\common\model\product\ProductCate;
use app\common\model\product\ProductAppointment;
use app\common\model\product\ProductAdopt;
use app\common\model\member\Member;
use app\common\model\order\Order;
class TaskController extends PortControllerBase {
    
    //定时清理超时未支付订单(每分钟触发)
    public function countDown()
    {  
       $res = Order::paymentsCountdown();
       print_r($res);exit;
    }

    //定时审核超时已支付订单(每分钟触发)
    public function auditPass()
    {  
       $res = Order::autoAuditPass();
       print_r($res);exit;
    }

    //凌晨整点结算昨天的订单收益(每天触发)
    public function income()
    {
        $res = Order::incomeCalculation();
        print_r($res);exit;
        
    }

    //处理系统申诉订单
    public function autoCancel()
    {
        $res = Order::autoCancel();
        print_r($res);exit;
        
    }
    
    //过了捕捞时间退还积分(预约和捕捞的)
    public function refundIntegral()
    {
        $res = ProductAppointment::ClearAppo();
        $res = ProductAdopt::ClearAdopt();
        print_r($res);exit;
    }
    
    //开启区块鱼品种捕捞队列
    public function openAdoptQueue()
    {

        $res = ProductCate::openAdoption();
        print_r($res);exit;
    }

    public function test()
    {   
        //$res = gethash('product_appointment', 'appo_98_8');
        //$res = ProductAdopt::getAdopt(['mid' => 98, 'product_cateid' =>8]);
        /*$res = rpushlist('product_cateid_list8', 1);
        $res = rpushlist('product_cateid_list8', 12);
        $res = rpushlist('product_cateid_list8', 123);
        $res = rpushlist('product_cateid_list8', 1234);*/
        $res = getaggregateSize('productlist_cateid_1');
        //$res = flushallRedis();
        print_r($res);exit;

    }

    public function test1()
    {
        $res = flushallRedis();
        print_r($res);exit;
        /*$list = Order::getList(['income_status' => 2, 'status' => 2]);
        foreach ($list as  &$item) {
            $where = array(
                'id' => $item['product_id'],
                'owner_mid' => $item['mid'],
                'price' => $item['price']
            );
            $product_count= Product::getCount($where);
            if(!$product_count){
                Order::updateOrder(['id' => $item['id'], 'status' => 3]);
            }
        }

        echo "string";*/
    }
}        