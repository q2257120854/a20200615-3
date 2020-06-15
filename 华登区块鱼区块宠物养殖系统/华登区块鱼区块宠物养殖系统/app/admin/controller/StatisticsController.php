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
use think\Config;
use app\common\model\member\Member;
use app\common\model\member\MemberRechargelog;
use app\common\model\member\MemberIncomelog;
use app\common\model\product\Product;
use app\common\model\product\ProductAdopt;
use app\common\model\product\ProductCate;
use app\common\model\product\ProductAppointment;
use app\common\model\order\Order;

class StatisticsController extends AdminCheckAuth
{
    //充值记录
    public function rechargelog()
    {
        $recharge_amount = MemberRechargelog::getSum();
        return view('', ['recharge_amount' => $recharge_amount]);
    }
    
    //获取充值记录的数据
    public function getRechargelogList()
    {
    	$param = vae_get_param();
        $where = array();
        if(!empty($param['keywords'])) {
            $where['mr.id|m.account'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $list = MemberRechargelog::systemPage($where);
        return vae_assign_table(0,'',$list);
    }

    //通过充值
    public function passrecharge()
    {
        $confinfo = config('payconfig');
        $id = vae_get_param('id');
        $log = MemberRechargelog::getlog($id);
        if(!$log || $log['status'] != 0) return vae_assign(0, "充值记录数据错误");
        //激活账户
        $activation_integral = $confinfo['activation_integral'];
        if ($log['integral'] >= $activation_integral) {
            Member::updateMember(['mid' => $log['mid'], 'is_activation' => 1]);
        }

        Member::changeIntegral(9, $log['integral'], $log['mid']);
        MemberRechargelog::updatelog(['id' => $id, 'status' => 1]);
        return vae_assign(1, "确认充值成功");
    }

    //驳回充值
    public function rejectcharge()
    {
        $id = vae_get_param('id');
        $log = MemberRechargelog::getlog($id);
        if(!$log || $log['status'] != 0) return vae_assign(0, "充值记录数据错误");

        MemberRechargelog::updatelog(['id' => $id, 'status' => -1]);
        return vae_assign(1, "驳回充值成功");
    }

    //捕捞记录
    public function adoptlog()
    {
        $product_cateid = vae_get_param('product_cateid');
        $data['product_cateid'] = $product_cateid;
        $res = ProductCate::adoptTime(intval($product_cateid));
        $data['endTime'] = $res['timestamp'];
        $data['type'] = $res['type'];
        return view('', $data);
    }

    //获取捕捞记录的数据
    public function getAdoptlogList()
    {
        $param = vae_get_param();
        $where = array();
        if(!empty($param['keywords'])) {
            $where['mr.id|m.account'] = ['like', '%' . $param['keywords'] . '%'];
        }
        if(!empty($param['product_cateid'])){
            $todaystart = strtotime(date('Y-m-d'.'00:00:00',time()));
            $where['createtime'] = ['>' , $todaystart];
            $where['product_cateid'] = intval($param['product_cateid']);
        }
        $list = ProductAdopt::systemPage($where);
        return vae_assign_table(0,'',$list);
    }
    
    //请求捕捞倒计时间
    public function ajaxAdoptTime()
    {
        $product_cateid = vae_get_param('product_cateid');
        $res = ProductCate::adoptTime(intval($product_cateid));
        $data['endTime'] = $res['timestamp'];
        $data['type'] = $res['type'];

        return vae_assign(1, "获取时间成功", $data);
    }

    //指定用户分配区块鱼
    public function adopt()
    {
        $id = vae_get_param('id');
        $adopt = ProductAdopt::getAdopt(['id' => $id]);
        if(!$adopt) return vae_assign(0, "数据不存在");

        /*$isadopt = Product::getProductByMid($adopt['mid'], $adopt['product_cateid']);
        if($isadopt) return vae_assign(0, "会员已捕捞过该品种");*/
        if($adopt['status'] == 2) return vae_assign(0, "会员已捕捞过该品种");

        $productCate = ProductCate::getCate($adopt['product_cateid']);
        if($productCate['isauto']) return vae_assign(0, "该品种不是人工分配捕捞");

        $isadopt = isAdopt($productCate['adopt_time']);
        if(!$isadopt) return vae_assign(0, "不在捕捞时间之内");

        $loadingtime = config('payconfig')['loadingtime'];
        $adoptTime = getAdoptTime($productCate['adopt_time']);
        if(time() > ($adoptTime['starttime'] + $loadingtime)){
            return vae_assign(0, "人工分配已经超过时间限制");
        }

        $product = Product::getProductID(['cate_id' => $adopt['product_cateid'], 'status' => 1]);
        if(!$product) return vae_assign(0, "区块鱼数量不足");

        $res = Order::distributionRedis($id, $adopt['product_cateid'], $adopt['mid']);
        if(!$res) return vae_assign(0, "指定会员捕捞失败");
        return vae_assign(1, "指定会员捕捞成功");

    }
    
    //预约记录
    public function appointmentlog()
    {
        return view();
    }
    
    //获取预约记录的数据
    public function getAppointmentlogList()
    {
        $param = vae_get_param();
        $where = array();
        if(!empty($param['keywords'])) {
            $where['pa.id|m.account'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $list = ProductAppointment::systemPage($where);
        return vae_assign_table(0,'',$list);
    }
    
    //收益记录
    public function incomelog()
    {
        return view();
    }

    //获取收益记录的数据
    public function getIncomelogList()
    {
        $param = vae_get_param();
        $where = array();
        if(!empty($param['keywords'])) {
            $where['mi.id|m.account'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $list = MemberIncomelog::systemPage($where);
        return vae_assign_table(0,'',$list);
    }
    
    //获取最近10s的充值记录
    public function ajaxLatelyLogs()
    {
        $where = array();
        $where['status'] = 0;
        $totalLogs = MemberRechargelog::getCount($where);
        //最近10s的充值记录
        $where['createtime'] = array('>', time() - 10);
        $latelyLogs = MemberRechargelog::getCount($where);

        return vae_assign(1, '',['totalLogs' => $totalLogs, 'latelyLogs' => $latelyLogs]);
    }
}
