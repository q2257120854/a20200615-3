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
use app\common\model\member\MemberRechargelog;

class IndexController extends AdminCheckLogin
{
    public function index()
    {
    	$where['status'] = 0;
        $totalLogs = MemberRechargelog::getCount($where);
        return view('', ['totalLogs' => $totalLogs]);
    }
}