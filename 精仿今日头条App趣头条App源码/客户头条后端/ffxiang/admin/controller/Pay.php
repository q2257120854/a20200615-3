<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
use think\Validate;
class Pay extends Common
{
    public function index(){
        $data=Db::name('pay')->order('des desc,id asc')->where("type!=''")->fetchSql(false)->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
    // 修改记录
    public function add(){
    	$id=input('id/d');
    	$name=Db::name('pay')->where('id',$id)->find();
    	$this->assign('name',$name);
    	if(request()->isAjax()){
        
    		// 开始验证
    		$validate = new Validate([
				'id'		=>		'require|number',
				'title'		=>		'require',
				'hide'		=>		'in:0,1|number',
				'des'		=>		'number',
			]);
			$validata=input('post.');
			if (!$validate->check($validata)) {
				return ['err'=>$validate->getError()];
			}
			// 验证结束
			Db::name('pay')->update($validata);
			return ['ret'=>'修改成功'];
    	}else{
    		return $this->fetch();
    	}
    }
    // 快速开关
    public function hide(){
    	if(request()->isAjax()){
           
            $id=input('id') ? input('id'): '0';
            $type=input('type') ? input('type') : '0';
            $text=['0'=>'<font color="#f00">关闭</font>','1'=>'<font color="#1ab394">开启</font>'];
            if($id){
                Db::name('pay')->where('id',$id)->setField('hide',$type);
                $data=[$text[$type]];   
            }else{
                $data=['GET值错误'];
            }
        }else{
            $data=['提交错误'];
        }
        return $data;
    }
    // 支付记录
    public function record(){
        $data=Db::name('pay_record')->order('id desc')->paginate(50);
        $this->assign('data',$data);
        $page = $data->render();
        $this->assign('page', $page);
        return $this->fetch();
    }
}
