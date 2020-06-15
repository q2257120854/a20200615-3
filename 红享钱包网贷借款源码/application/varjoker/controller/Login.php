<?php
namespace app\varjoker\controller;

use think\Controller;

class Login extends Controller
{
   public function index()
   {
        return $this->fetch();
   }
   public function LogChek()
   {
       $data = input('post.');
       if(!$data){
           $this->error('数据出错，请重新输入');
       }
       $admin_model = model('Admin');
       $login  = $admin_model->SetLogin($data['user'],$data['pass']);
       if(!$login){
           $this->error('账号或密码错误，请重新输入');
       }else{
           SetArray($login);
           $this->success("登录成功",url('index/index'));
       }

   }

   public function logout()
   {
       session('adminid',null);
       $this->success('安全退出中。。。',url('login/index'));
   }
}
