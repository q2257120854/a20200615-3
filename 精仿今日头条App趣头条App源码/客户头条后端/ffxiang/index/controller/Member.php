<?php
namespace app\index\controller;
use app\index\controller\Common;
use think\Db;
use think\Session;
use think\Request;
class Member extends Common
{ 
	// 公共
	public function __construct(){
		parent::__construct();
		if(!Session::has('user','ffxiangUser')){
			$this->redirect("user/login");
		}
        // 获取会员资料
        $this->assign('member',_member());
        // 获取左侧分类
        $category=Db::name('member_category')->where(['hide'=>'1'])->order('des desc,id asc')->cache(_cache('db'))->select();
        $this->assign('category',$category);
        // 获取二级分类
        $request = Request::instance();
        $controller=strtolower($request->controller());
        $action=strtolower($request->action());
        // 获取顶级分类
        $categorytid=Db::name('member_category')->where(['controller'=>$controller,'function'=>$action])->cache(_cache('db'))->find();
        if($categorytid['tid'] != 0){
            $categorytid=Db::name('member_category')->where('id',$categorytid['tid'])->cache(_cache('db'))->find();
        }
        $categorys=Db::name('member_category')->where(['tid'=>$categorytid['id']])->order('des desc,id asc')->cache(_cache('db'))->select();
        $this->assign('categorys',$categorys);      // 获取二级分类
        $this->assign('active',$controller.$action);    // 二级样式class
        $this->assign('categorytid',$categorytid);  // 获取顶级分类
        // 获取顶级分类函数和方法
	}
    // 会员主页
    public function index(){
        // var_dump($categorys);
        $member=_member();
        $where['id']=['<',3];
        $member_groups=Db::name('member_groups')->where('jingyan','gt',$member['jingyan'])->order('id asc')->find();
        $this->assign('member_groups',$member_groups);
        return $this->fetch();
    }
    // 退出登录
    public function out(){
        _records(_member('id'),'退出登录');
        session(null, 'ffxiangUser');
    	$this->redirect('user/login');
    }
    // 用户设置
    public function modify(){
        return $this->fetch();
    }
    // 图片，昵称设置
    public function nickname(){
        return $this->fetch();
    }
    // 手机绑定
    public function mobile(){
        return $this->fetch();
    }
    // 邮箱绑定
    public function email(){
        return $this->fetch();
    }
    // 修改密码
    public function password(){
        return $this->fetch();
    }
    // 我的记录
    public function records(){
        return $this->fetch();
    }
    // 我的投稿列表
    public function article(){
        return $this->fetch();
    }
    // 我要投稿
    public function articleAdd(){
        $articleCode=Db::name('member_config')->where('name','articleCode')->value('text');
        $this->assign('articleCode',$articleCode);   
        return $this->fetch();
    }
    // 我的收藏
    public function favoriteList(){
        return $this->fetch();
    }
    // 充值
    public function moneypay(){
        $token=Session::get('user','ffxiangUser');
        $this->assign('token',$token);    
        return $this->fetch();
    }
    // 充值记录
    public function payRecord(){
        return $this->fetch();
    }
}
