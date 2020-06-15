<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
class Mychannel extends Common
{
 
    public function index(){
        $data=Db::name('mychannel')->order('id asc')->select();
    	$this->assign('data',$data);
        return $this->fetch();
    }
    // 添加与修改
    public function add(){
		$id=input("id");
        if(request()->isAjax()){
         
            $post=input('post.');;
            $time=time();
            if(!$id){   // 添加数据
                $titledb=Db::name('mychannel')->where('title',$post['title'])->find();
                if($titledb){
                    return ['err'=>'轮播图标题已存在'];
                }
                $db=Db::name('mychannel')->insert($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                $db=Db::name('mychannel')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
        }else{
            if($id){
                $name=Db::name('mychannel')->where('id',$id)->find();
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
    //删除
    public function del(){
        if(request()->isAjax()){
          
            $id=input('id');
            if($id){
                $typeid=Db::name('typeid')->where('mychannel',$id)->find();
                if(!$typeid){
                    $db=Db::name('mychannel')->delete($id);
                    if($db){
                        $data=['ret'=>'删除成功'];
                    }else{
                        $data=['err'=>'删除失败'];
                    }  
                }else{
                    $data=['err'=>'模型下有栏目，请先删除栏目对应模型'];
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
