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
use app\common\model\product\Product;
use app\common\model\product\ProductCate;
use app\common\model\product\ProductAppointment;
use app\common\model\product\ProductAdopt;
use app\common\model\member\Member;
use app\common\model\member\PaymentMethod;
use app\common\model\order\Order;
use app\common\model\notice\Notice;

class IndexController extends AuthController{
    /**
     * 初始化
     */
    public function __construct() {
        parent::__construct();

    }

    /**
     * 获取配置信息
     */
    public function confInfo()
    {
        $info = $this->confinfo;
        return $this->port(1, '配置信息', $info);
    }

	/**
     * 获取所以区块鱼
     */
   public function index()
   {    
   	    $where['pc.status'] = array('>=', 1);
        $productCate = ProductCate::getList($where, 'sort');
        foreach ($productCate as &$item) {
            $item['block_state'] = ProductCate::getBlockState($this->userinfo['mid'], $item);
            if($item['block_state'] == 2){
                $item['adoptDownTime'] = getAdoptDownTime($item['adopt_time']);
            }
        }
        return $this->port(1, '获取所以区块鱼', $productCate);
   }

    /**
     * 权限
     */
    public function isAuthAccount()
    {
        if($this->userinfo['status'] == 0){
            return $this->port(0, '您的账户被禁用了，工单联系客服解除');
        }
        $methodCount = PaymentMethod::getCount(['mid' => $this->userinfo['mid'], 'status' => 1]);
        if($methodCount < 2){
            return $this->port(0, '賬戶至少啟用兩種收款方式');
        }

        if($this->userinfo['is_idverifly'] == 0){
            return $this->port(0, '请提交姓名身份证实名');
        }elseif($this->userinfo['is_idverifly'] == 0){
            return $this->port(0, '实名信息正在审核中');
        }

        if(!$this->userinfo['is_activation']){
            $integral = $this->confinfo['activation_integral'];
            return $this->port(0, '请充值'. $integral .'鱼饵激活账户');
        }

    }

    /**
     * 预约区块鱼
     */
    public function appointment() {
        $this->isAuthAccount();
        $id = $this->param('id');
        $productCate = ProductCate::getCate($id);

        if(empty($productCate)) return $this->port(0, '区块鱼数据不存在');
        if($productCate['status'] != 1) return $this->port(0, '区块鱼数据错误');

        $where = array('mid' => $this->userinfo['mid'], 'product_cateid' => $id, 'status' => 1);
        $applog = ProductAppointment::getAppo($where);
        if(!empty($applog)) return $this->port(0, '不能重复预约');

        $isappo = isShowAppo($productCate['adopt_time'], true);
        if(!$isappo) return $this->port(0, '当前时间不能预约');

        if($productCate['appointment_integral'] > $this->userinfo['integral']) $this->port(0, '鱼饵不够预约');
        $where['integral'] = $productCate['appointment_integral'];

        //插入鱼饵记录
        Member::changeIntegral(1, $productCate['appointment_integral'], $this->userinfo['mid']);
        //插入预约记录
        $res = ProductAppointment::insertAppo($where);
        if(!$res) return $this->port(0, '预约失败');
        return $this->port(1, '预约成功');
    }

    /**
     * 捕捞区块鱼
     */
    public function adopt() {
        $this->isAuthAccount();
        $id = $this->param('id');
        $res = Order::adoptRedis($id, $this->userinfo['mid']);
        if($res == 1){
            return $this->port(1, '捕捞成功，快去支付吧');
        }elseif($res == 2){
            return $this->port(2, '系统分配中');
        }else{
            return $this->port(0, $res);
        }
    }

    /**
     * 获取今天品种的捕捞结果
     */
    public function adoptResult()
    {
        $id = $this->param('id');
        $res = ProductAdopt::getAdopt(['mid' => $this->userinfo['mid'], 'product_cateid' => $id]);
        if(!$res) return $this->port(0, '捕捞数据错误');
        if($res['status'] == 0 || !$res['product_id']) return $this->port(0, '您来晚一步，商品被捕捞了');
        return $this->port(1, '捕捞成功，快去支付吧');
    }

    /**
     * 弹出通知信息
     */
    public function notice()
    {
        $notice = Notice::getNotice(['ispopped' => 1]);
        return $this->port(1, '通知信息', $notice);
    }

    public function test()
    {

        $res = Member::updateParent(75, 73);
print_r($res);exit;
    }

}
