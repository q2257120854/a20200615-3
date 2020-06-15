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
use vae\controller\AdminCheckLogin;
use app\common\model\member\Member;
use app\common\model\workorder\Workorder;
use app\common\model\notice\Notice;
use app\common\model\order\Order;

class MainController extends AdminCheckLogin
{
    public function index()
    {
        $adminMainHook = vae_set_hook_one('admin_main');
        if(!empty($adminMainHook)) {
            return $adminMainHook;
        }
        $orderSum = Order::getSum(['status' =>['>=', 0]]);
        $data = array(
            'memberCount' => Member::getCount(),
            'workorderCount' => Workorder::getCount(),
            'noticeCount' => Notice::getCount(),
            'orderSum' => number_format($orderSum, '0', '.', ',')
        );
        return view('', $data);
    }
}
