<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
class Slide extends Common
{
 
    public function index(){
        $data=Db::name('slide_type')->order('des desc,id asc')->select();
    	$this->assign('data',$data);
        return $this->fetch();
    }
    // 添加分组
    public function typeAdd(){
        $id=input("id");
        if(request()->isAjax()){
        
            $post=input('post.');
            $time=time();
            $post['update_time']=$time; //更新时间
            if(!$id){   // 添加数据
                $titledb=Db::name('slide_type')->where('title',$post['title'])->find();
                if($titledb){
                    return ['err'=>'分组标题已存在'];
                }
                $post['create_time']=$time; // 添加时间
                $db=Db::name('slide_type')->insert($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                $db=Db::name('slide_type')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
            
        }else{
            if($id){
                $name=Db::name('slide_type')->where('id',$id)->find();
                //var_dump($name);die();
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
    //删除分组
    public function typeDel(){
        if(request()->isAjax()){
    
            $id=input('id');
            if($id){
                $admin=Db::name('slides')->where('tid',$id)->find();
                if(!$admin){
                    $db=Db::name('slide_type')->delete($id);
                    if($db){
                        $data=['ret'=>'删除成功'];
                    }else{
                        $data=['err'=>'删除失败'];
                    }
                }else{
                    $data=['err'=>'分组有轮播图，请先删除轮播图对应分组'];
                }
                 
            }else{
                $data=['err'=>'id参数错误'];
            }
        }else{
            $data=['err'=>'提交参数错误'];
        }
        return $data;
    }
    // 轮播图列表
    public function lists(){
        $tid=input('tid');
        $data=Db::name('slides')->where('tid',$tid)->order('des desc,id desc')->select();
        $this->assign('data',$data);
        return $this->fetch('list');
    }
    // 显示 隐藏轮播图
    public function hide(){
        $id=input('id');
        if(request()->isAjax()){
         
            if($id){
                $arra=['0'=>'隐藏','1'=>'显示'];
                $type='hide';
                $db=Db::name('slides')->where('id',$id)->value('hide');
                if($db==1){
                    $hide=0;
                }else{
                    $hide=1;
                }
                $db=Db::name('slides')->where('id',$id)->setField($type,$hide);
                if($db){
                    $data=['ret'=>$arra[$hide].'成功','id'=>$hide,'text'=>$arra[$hide]];
                }else{
                    $data=['err'=>$arra[$hide].'失败'];
                }
            }else{
                $data=['err'=>'ID参数错误'];
            }
        }else{
            $data=['err'=>'AJAX参数错误'];
        }
        return $data;
    }
    // 添加图片
    public function add(){
		$id=input("id");
        $this->assign('tid',input("tid"));
        $slide_type=Db::name('slide_type')->select();
        $this->assign('slide_type',$slide_type);
        if(request()->isAjax()){
     
            $post=input('post.');;
            $time=time();
            $post['update_time']=$time; //更新时间
            if(!$id){   // 添加数据
                $post['create_time']=$time; // 添加时间
                $db=Db::name('slides')->insert($post);
                if($db){
                    $data=['ret'=>'添加成功'];
                }else{
                    $data=['err'=>'添加失败'];
                } 
            }else{      //修改数据
                $db=Db::name('slides')->where('id',$id)->update($post);
                if($db){
                    $data=['ret'=>'修改成功'];
                }else{
                    $data=['err'=>'修改失败'];
                }
            }
        }else{
            if($id){
                $name=Db::name('slides')->where('id',$id)->find();
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
            $id=explode('.',$id);
            $id=$id[0];
            if($id){
                $db=db('slides')->delete($id);
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
