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
use vae\controller\AuthController;

class ApiController extends AuthController
{
    //上传文件
    public function upload()
    {
        $param = vae_get_param();
        $module =  'port';
        $use =  'workorder';
        $res = vae_upload($module,$use);
        if($res['code'] == 1){
            return vae_assign(1,'',$res['data']);
        }
        return vae_assign(0,$res['msg']);
    }
}
