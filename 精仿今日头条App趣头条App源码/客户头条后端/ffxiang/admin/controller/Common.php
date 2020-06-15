<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;
class Common extends Controller
{
	// 公共
	public function _initialize(){
		//parent::_initialize();
		if(!Session::has('admin','ffxiangAdmin')){
			$this->redirect("Login/index");
		}else{
			$adminId=Session::get('admin','ffxiangAdmin');
			$adminId=db('admin')->where(['id'=>$adminId['id'],'name'=>$adminId['name'],'type'=>$adminId['type'],'hide'=>$adminId['hide'],'password'=>$adminId['password']])->cache(_cache('db'))->find();
			if(!$adminId){
				session(null, 'ffxiangAdmin');
				$this->redirect("Login/index");
			}else{
				if($adminId['id']!=1 && $adminId['type']!=1){
					$controller=strtolower(request()->controller());
					$action=strtolower(request()->action());
					$if=0;
					if($controller=='index' && $action=='index'){
						$if=1;
					}
					if($controller=='index' && $action=='out'){
						$if=1;
					}
					if($controller=='index' && $action=='main'){
						$if=1;
					}
					if($if==0){
						$adminTypeData=db('admin_type')->where('id',$adminId['type'])->cache(_cache('db'))->value('data');
						$adminCategoryId=db('category')->where(['controller'=>$controller,'function'=>$action])->value('id');
						$permissionSucceeded=0;
						if($adminCategoryId && $adminTypeData){
							 $a=json_decode($adminTypeData,true);

							foreach ($a as $v) {
						 
								if($adminCategoryId==$v){
									$permissionSucceeded=1;
									break;
								}
							}
						}else{
							$this->error('菜单ID或adminType字段参数不存在');
						}
						// 开始判断权限  0 没权限  1有权限
						if($permissionSucceeded==0){
							echo "无权访问";exit();
						}
					} 
				} 
			 
			}
			//var_dump($adminId);
		}
		// echo request()->controller();
		// echo "\r\n<br>";
		// echo request()->action();
		// 管理员权限判断
		//$adminType=db('')
	}
}
