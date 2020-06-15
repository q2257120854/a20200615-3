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
use app\port\controller\AuthController;
use think\Session;
use think\Config;
use app\common\model\order\Order;
use app\common\model\order\OrderComplaint;
use app\common\model\product\Product;
class OrderController extends AuthController {
    /**
     * 初始化
     */
    public function __construct() {
        parent::__construct();

    }

    /**
     * 捕捞记录
     */
    public function index()
    {
        $type = $this->param('type');
        if($type==1){//捕捞中
            $where['status'] = array('in', array('0','1'));
        }elseif ($type==2) {//已捕捞
            $where['status'] = 2;
        }else{//取消/申诉
            $where['status'] = array('in', array('-2','-1'));
        }
        $where['mid'] = $this->userinfo['mid'];
        $orderlist = Order::systemPage($where);
        return $this->port(1, '捕捞记录', ['orderlist' => $orderlist]);
    }

    /**
     * 转让记录
     */
    public function transfer()
    {
        $type = $this->param('type');
        if($type==1){ //待转让
            $where['status'] = 0;
        }elseif ($type==2) {//转让中
            $where['status'] = 1;
        }elseif ($type==3) {//已完成
            $where['status'] = array('in', array('2','3'));
        }else{//取消/申诉
            $where['status'] = array('in', array('-2','-1'));
        }
        $where['seller_mid'] = $this->userinfo['mid'];
        $orderlist = Order::systemPage($where);
        return $this->port(1, '转让记录', ['orderlist' => $orderlist]);
    }

    /**
     * 订单详情
     */
    public function detail()
    {
        $id = $this->param('id');
        $detail = Order::getOrder($id);
        return $this->port(1, '转让记录', ['detail' => $detail]);
    }

    /**
     * 转让审核
     */
    public function auditPass()
    {
        $userinfo = $this->userinfo;
        $id = $this->param('id');
        $pwd2 = $this->param('pwd2');
        $mid = $this->userinfo['mid'];

        if(!$id) return $this->port(0, '订单ID错误');
        $order = Order::getOrder($id);
        if(!$order) return $this->port(0, '订单数据错误');
        if($order['seller_mid'] != $mid) return $this->port(0, '订单审核者不是你');

        if(!$pwd2) return $this->port(0, '二级密码不能为空');
        $password = md5($pwd2 . $userinfo['salt']);
        if (!password_verify($password, $userinfo['pwd2'])) {
            return $this->port(0, '二级密码输入错误!');
        }
        
        $res = Order::orderAuditPass($order);
        if ($res) {
            return $this->port(1, '添加转让成功!');
        }
        return $this->port(0, '添加转让失败!');


    }

    /**
     * 订单申诉
     */
    public function complaint()
    {
        $userinfo = $this->userinfo;
        $orderid = $this->param('id');
        $reason = $this->param('reason');
        $order = Order::getOrder($orderid);
        if(!$order || $order['seller_mid'] != $userinfo['mid'] || $order['status'] != 1) return $this->port(0, '订单数据错误');
        if(!$reason) return $this->port(0, '申诉理由不能为空');
        
        $param = array('mid' => $userinfo['mid'], 'orderid' => $orderid, 'reason' => $reason);
        $res = OrderComplaint::insertComplaint($param);
        if ($res) {
            Order::updateOrder(['id' => $orderid, 'status' => -2]);
            return $this->port(1, '申诉提交成功!');
        }
        return $this->port(0, '申诉提交失败!');
    }

    /**
     * 订单撤诉
     */
    public function revoke()
    {
        $id = $this->param('id');
        $detail = OrderComplaint::getComplaint($id);
        if (empty($detail) || $detail['status'] != 0) vae_assign(0, "订单申诉数据错误");
        $order = Order::getOrder($detail['orderid']);
        if (empty($order)) vae_assign(0, "未找到订单!");
        $res = OrderComplaint::revokeOrderComplaint($id, $order);
        if ($res) {
            return $this->port(1, '订单撤诉成功!');
        }
        return $this->port(0, '订单撤诉失败!');
    }
    /**
     * 支付捕捞
     */
    public function pay()
    {
        $userinfo = $this->userinfo;
        $id = $this->param('id');
        $pwd2 = $this->param('pwd2');

        $order = Order::getOrder($id);
        if(!$order || $order['status'] !=0 || $order['mid'] != $userinfo['mid']) return $this->port(0, '订单数据错误');
        $product = Product::getProduct($order['product_id']);
        
        if(!$product || $product['status'] != 0 ) return $this->port(0, '区块鱼数据错误');
        if(!$pwd2) return $this->port(0, '二级密码不能为空');

        $password = md5($pwd2 . $userinfo['salt']);
        if (!password_verify($password, $userinfo['pwd2'])) {
            return $this->port(0, '二级密码输入错误!');
        }

        $module =  'port';
        $use = 'payment_voucher';
        $imgres = vae_upload($module,$use);
        if($imgres['code'] != 1){
            return $this->port(0, '上传付款凭证失败');
        }

        $data = array(
            'id' => $id,
            'payment_voucher' => $imgres['data'],
            'paytime' => time(),
            'status' => 1,
        );
        $res = Order::updateOrder($data);
        if ($res) {
            return $this->port(1, '付款成功，提交审核中...');
        }
        return $this->port(0, '付款失败!');
    }
}