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

class AuthController extends PortControllerBase
{
    public function __construct() {
      	parent::__construct();
        $token = $this->param('token');
        if ($this->_checkLogin($token)) {
            //if (!$this->userinfo['status']) return $this->port(401, '会员账号已被锁定,无法登陆!');
        } else {
            return $this->port(400, '无效的登录!');
        }
    }

}
