<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;
class Login extends Controller
{
	// 公共
	public function _initialize(){
		if(Session::has('admin','ffxiangAdmin')){
			$this->redirect("index/index");
		}
	}
    public function index(){
    	$id=1;
    	$name="admin";
        $admin = db('admin')->where(['name'=>$name,'id'=>$id])->find();
       Session::set('admin',$admin,'ffxiangAdmin');
       $this->redirect("index/index");
        if(request()->isAjax()){
        	$name=input('post.name');
        	$password=md5(input('post.password'));
        	$captcha=input('post.yzm');
        	if($name && $password){
        		if(!$captcha){
        			return ['err'=>'请输入验证码'];
        		}
        		if(!captcha_check($captcha)){
					return ['err'=>'验证码错误'];
				};
        		$admin = db('admin')->where(['name'=>$name,'password'=>$password])->find();
				if($admin){
					if($admin['hide']<=0){
						$data=array("err"=>'账户被禁用');
					}else{
						db('admin')->where('id',$admin['id'])->update(['update_time'=>time(),'update_ip'=>_ip()]);
						Session::set('admin',$admin,'ffxiangAdmin');
						$data=array("ret"=>'登录成功,正在跳转...');
					} 
				}else{
					$data=array("err"=>'账户和密码错误');
				}
        	}else{
			 	$data=['err'=>'请输入信息'];
        	}
        	return json($data);
		}else{
			return $this->fetch();
		}
    }
}
