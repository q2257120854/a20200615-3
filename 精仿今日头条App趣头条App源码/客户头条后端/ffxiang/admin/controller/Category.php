<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
class Category extends Common
{
	 
    public function index(){
        $category=Db::name('category')->order('des desc,id asc')->select();
        $category=get_tree_option($category,0);
        $this->assign('data',$category);
        return $this->fetch();
    }
    public function add(){	
        if(request()->isAjax()){
            // exit(json_encode(['err'=>'演示站无权操作！']));
            if(input('id')){
                $data=input('post.');
                if($data){
                    $info=Db::name('category')->where('id',input('id'))->update($data);
                    if($info){
                        $data=json(array("ret"=>"修改成功",'url'=>url('index')));
                    }else{
                        $data=json(array("err"=>"修改失败"));
                    }
                }else{
                    $data=json(array("err"=>$validate->getError()));
                }

            }else{
                $validate = validate('Category');
                $data=input('post.');
                if($validate->check($data)){
                    $info=Db::name('category')->insert($data);
                    if($info){
                        $data=json(array("ret"=>"添加成功",'url'=>url('add')));
                    }else{
                        $data=json(array("err"=>"添加失败"));
                    }
                }else{
                    $data=json(array("err"=>$validate->getError()));
                }   
            }
        }else{
            $category=Db::name('category')->field('id,tid,title')->order('des desc,id asc')->select();
            $category=get_tree_option($category,0);
            $this->assign('category',$category);
            if(input('id')){
                $name=Db::name('category')->where('id',input('id'))->find();
                $categoryID=$name['tid'];
                $this->assign('name',$name);
            } 
            $data=$this->fetch();
        }
        return $data;
    }
    //删除菜单栏目
    public function del(){
        if(request()->isAjax()){
     
            $id=input('post.id/d');
            if(!$id){return json(array("err"=>"参数错误1")); exit();}
            $category=DB::name('category')->where('tid',$id)->field('id')->select();
            if($category){
                $data=array("err"=>"请先删除下级菜单");
            }else{
                $del=Db::name('category')->delete($id);
                if($del){
                    $data=array("ret"=>'删除成功');
                }else{
                    $data=array("err"=>'删除失败');
                }
            }
        }else{
            $data=array("err"=>"参数错误2");
        }
        return json($data);
    }
    // 显示 隐藏菜单
    public function hide(){
       
        $id=input('id');
        $type=input('hide'); // 1左边 2 右边
        if($id){
            if($type==1){
                $type='hideleft';
            }else{
                $type='hideright';
            }
            $db=DB::name('category')->where('id',$id)->field($type)->find();
            if($db[$type]==1){
                $hide=0;
            }else{
                $hide=1;
            }
            $db=DB::name('category')->where('id',$id)->setField($type,$hide);
            if($db){
                $this->redirect("category/index");
            }else{
                $this->error('设置失败');
            }
        }
    }
    // 删除菜单
    
     
}
