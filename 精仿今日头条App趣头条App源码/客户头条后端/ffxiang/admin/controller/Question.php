<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
use think\Session;
class Question extends Common
{
    public function index(){
        $questionRes=db('question')->order('id DESC')->paginate(5);
        $this->assign('questionRes',$questionRes);
        return view();
    }
    // 添加问题
    public function add(){
        if (request()->isPost()) {
            $data = input('post.');
            // var_dump($data);die;
            //验证
            // $validate = validate('article');
            // if (!$validate->check($data)) {
            //     $this->error($validate->getError());
            // }
            $add = db('question')->insert($data);
            if ($add) {
                $this->success('添加问题成功！','index');
            } else {
                $this->error('添加问题失败！');
            }
            // return;
        }
        return view();
    }

    public function edit(){
        if(request()->isPost()){
            $data=input('post.');
            //验证
            // $validate=validate('question');
            // if(!$validate->scene('edit')->check($data)){
            //     $this->error($validate->getError());
            // }
            
            $save=db('question')->update($data);
            if($save!==false){
                $this->success('修改问题成功！','lst');
            }else{
                $this->error('修改问题失败！');
            }
            return;
        }
        $questions=db('question')->field('id,title,content')->find(input('id'));
        $this->assign([
            'questions'=>$questions,
            ]);
        return view();
    }

    public function del($id){
        
        $del=db('question')->delete($id);
        if($del){
            $this->success('删除问题成功！','index');
        }else{
            $this->error('删除问题失败！');
        }
    }
    
    
    // 批量更新排序
    public function desAll(){
        if(request()->isAjax()){
            $post=input('post.');
            foreach($_POST['des'] as $k => $v){
                $id = intval($k);
                $name = intval($v);
                Db::name('article')->where('id',$id)->setField('des',$name);
            }
            $data=['ret'=>'更新排序成功'];
        }else{
            $data=['err'=>'提交类型错误'];
        }
        return $data;
    }
    // 批量删除
    public function delAll(){
        if(request()->isAjax()){
            $post=input('post.');
            if(input('?post.delAll')){
                $post=$post['delAll'];
                $db=Db::name('article')->delete($post);
                if($db){
                    $data=['ret'=>'删除成功'];
                }else{
                    $data=['err'=>'删除失败'];
                }
            }else{
                $data=['err'=>'删除失败，未选中数据'];
            }
        }else{
            $data=['err'=>'提交类型错误'];
        }
        return $data;
    }
    // 批量设置hide
    public function all(){
        if(request()->isAjax()){
            $post=input('post.');
            $type=input('type');
            if(input('?post.delAll')){
                $post=$post['delAll'];
                $db=Db::name('article');
                foreach ($post as $k => $v) {
                    if($type=='del'){
                     //   echo "删除成功";
                        $db->delete($v);
                    }else{
                        $db->where('id',$v)->setField('hide',$type);
                    }
                }
                if($db){
                    $data=['ret'=>'删除成功'];
                }else{
                    $data=['err'=>'删除失败'];
                }
            }else{
                $data=['err'=>'删除失败，未选中数据'];
            }
        }else{
            $data=['err'=>'提交类型错误'];
        }
        return $data;
    }
    
}