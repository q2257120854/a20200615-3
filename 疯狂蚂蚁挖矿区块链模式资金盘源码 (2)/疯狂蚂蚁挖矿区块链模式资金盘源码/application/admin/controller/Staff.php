<?php

namespace app\admin\controller;

use think\Request;

class Staff extends Base
{
    public function login(Request $req)
    {
        if ($req->isPost()) {
            $username = $req->param('username');
            $password = $req->param('password');
            if ($username == config('hello.admin.username') && $password == config('hello.admin.password')) {
                session('staff', time());
                $this->redirect('/admin.html');
            } else {
                $this->error('很抱歉、账号或密码错误！');
                exit;
            }
        }
        return $this->fetch();
    }
}
