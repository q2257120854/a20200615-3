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
use app\common\model\order\Order as Order;
use app\common\model\order\OrderComplaint;

class OrderController extends AdminCheckAuth
{

    // 列表页视图
    public function index()
    {
        $status = vae_get_param('status');
        return view('', ['status' => $status]);
    }

    //列表页数据
    public function getContentList()
    {
        $param = vae_get_param();
        $where = array();
        if(!empty($param['status'])){
            $where['status'] = intval($param['status']);
            $where['seller_mid'] = 0;
        }
        if(!empty($param['keywords'])) {
            $where['id|ordersn'] = ['like', '%' . $param['keywords'] . '%'];
        }
        if(!empty($param['searchtime']) && !empty($param['time'])) {
            $searchtime = trim($param['searchtime']);
            $time = explode(',', $param['time']);
            $starttime = strtotime($time[0]);
            $endtime = strtotime($time[1]);
            $where[$searchtime.'time'] = array('between time', array($starttime, $endtime));
        }
        $list = Order::systemPage($where);
        return vae_assign_table(0,'',$list);
    }

    //详情
    public function detail()
    {   
        $detail = Order::getOrder(vae_get_param('id'));
        return view('', ['detail' => $detail]);
    }

    //提交状态
    public function ajaxStatus()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            if($param['status'] == 1){
                $param['audittime'] = time();
            }
            Order::updateOrder($param);
            return vae_assign(1, '修改会员数据成功');
        }

    }
    
    //订单申诉
    public function complaint()
    {
        return view();
    }
    
    //订单申诉数据
    public function getComplaintList()
    {
        $param = vae_get_param();
        $where = array();
        if(isset($param['status'])){
            $where['oc.status'] = $param['status'];
        }else{
            $where['oc.status'] = 0;
        }
        if(!empty($param['createtime'])) {
            $createtime = explode(',', $param['createtime']);
            $starttime = strtotime($createtime[0]);
            $endtime = strtotime($createtime[1]);
            $where['oc.createtime'] = array('between time', array($starttime, $endtime));
        }
        if(!empty($param['keywords'])) {
            $where['oc.id|o.ordersn'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $list = OrderComplaint::systemPage($where);
        return vae_assign_table(0,'',$list);
    }
    
    //订单数据
    protected function opData() {
        $id = intval(vae_get_param("id"));
        $item = Order::getOrder($id);
        if (empty($item)) {
            vae_assign(0, "未找到订单!");
        }
        return array('id' => $id, 'item' => $item);
    }

    //订单取消
    public function fetchcancel()
    {
        $opdata = $this->opData();
        extract($opdata);
        if ($item['status'] != 1) {
            return vae_assign(0, '订单未付款，不需取消！');
        }
        $res = Order::OrderFetchCancel($item);
        if(!$res) return vae_assign(0, "订单取消失败");
        return vae_assign(1, "订单取消成功");
    }

    //订单支付
    public function pay()
    {
        $opdata = $this->opData();
        extract($opdata);
        if ($item['status'] > 1) {
            return vae_assign(0, '订单已付款，不需重复付款！');
        }
        $res = Order::OrderPay($item);
        if(!$res) return vae_assign(0, "订单付款成功");
        return vae_assign(1, "订单付款成功");
    }
    
    //审核通过
    public function auditpass()
    {
        $opdata = $this->opData();
        extract($opdata);
        if ($item['status'] != 1) {
            return vae_assign(0, '订单未付款，无法审核通过！');
        }
        $res = Order::orderAuditPass($item);
        return vae_assign(1, "订单审核成功");
    }

    //订单解封
    public function unsealing()
    {
        $opdata = $this->opData();
        extract($opdata);
        if ($item['status'] != -2 && $item['is_complaint'] != 1) {
            return vae_assign(0, '订单不是系统封杀！');
        }
        $res = Order::orderUnsealing($item);
        return vae_assign(1, "订单解封成功");
    }
    
    //申诉处理
    public function passComplaint()
    {
        $id = vae_get_param("id");
        $detail = OrderComplaint::getComplaint($id);
        if (empty($detail) || $detail['status'] != 0) vae_assign(0, "订单申诉数据错误");
        $order = Order::getOrder($detail['orderid']);
        if (empty($order)) vae_assign(0, "未找到订单!");

        $res = OrderComplaint::passOrderComplaint($id, $order);
        return vae_assign(1, "申诉处理成功");

    }
    
    //驳回申诉
    public function rejectComplaint()
    {
        $id = vae_get_param("id");
        $detail = OrderComplaint::getComplaint($id);
        if (empty($detail) || $detail['status'] != 0) vae_assign(0, "订单申诉数据错误");
        $order = Order::getOrder($detail['orderid']);
        if (empty($order)) vae_assign(0, "未找到订单!");
        
        $res = OrderComplaint::rejectOrderComplaint($id, $order);
        return vae_assign(1, "驳回申诉成功");
    }

    // 删除
    public function delete()
    {
        $id = vae_get_param("id");
        if (Order::deleteOrder($id) !== false) {
            return vae_assign(1,"成功放入回收站！");
        } else {
            return vae_assign(0,"删除失败！");
        }
    }



}

