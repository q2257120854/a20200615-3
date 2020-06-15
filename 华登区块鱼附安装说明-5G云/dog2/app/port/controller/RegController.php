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
class RegController extends PortControllerBase {

    /**
     * Wap注册页面
     */
    public function index() {
        $webconfig = Config::get('webconfig');
        $data['webtitle'] = $webconfig['admin_title'];
        $data['mid'] = $this->param('mid');
        return view('', $data);
    }

    /**
     * 用户协议
     */
    public function agreement()
    {
        $webconfig = Config::get('webconfig');
        $data['webtitle'] = $webconfig['admin_title'];
    	$conf = Config::get('userconfig');
        $data['content'] = $conf['registration_agreement'];
        return view('', $data);
    }

    public function download()
    {
    	$conf = Config::get('webconfig');
        $data['webtitle'] = $conf['admin_title'];
        $data['logo'] = $conf['logo'];
    	$data['iosDownloadlink'] = $conf['iosDownloadlink'];
    	$data['androidDownloadlink'] = $conf['androidDownloadlink'];
    	return view('', $data);
    }
}
