<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
class Link extends Common
{
 
    public function index(){
        $data=Db::name('link')->order('des desc,id desc')->select();
    	$this->assign('data',$data);
        return $this->fetch();
    }
    // 添加
    public function add(){
		$id=input("id");
        if(request()->isAjax()){
            $post=input('post.');;
            if(!$id){   // 添加数据
                $db=Db::name('link')->insert($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                $db=Db::name('link')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
        }else{
            if($id){
                $name=Db::name('link')->where('id',$id)->find();
                if($name){
                     $this->assign('name',$name);
                }else{
                    $data=['err'=>'id参数错误'];
                }
            }
            $data=$this->fetch();
        }
        return $data;
    }
    //删除文章
    public function del(){
        if(request()->isAjax()){
            $id=input('id');
            if($id){
                $db=db('article')->delete($id);
                if($db){
                    $data=['ret'=>'删除成功'];
                }else{
                    $data=['err'=>'删除失败'];
                }    
            }else{
                $data=['err'=>'id参数错误'];
            }
        }else{
            $data=['err'=>'提交参数错误'];
        }
        return $data;
    } 
}
