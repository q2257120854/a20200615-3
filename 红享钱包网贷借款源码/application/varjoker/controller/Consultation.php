<?php
namespace app\varjoker\controller;

class Consultation extends Common
{
    public function index()
    {
        $list = db('consultation')->order('id desc')->paginate(10);
        $this->assign('list', $list);
        return $this->fetch();
    }
    /*
     * 添加咨询
     */
    public function addbroadcast()
    {
        $data = input('post.');
        $file = request()->file('image');
        if(!$file){
            $this->error('未上传图片');
        }
        $title = $data['title'];
        if(!$title){
            $this->error('未填写标题');
        }
        $key = $data['key'];
        if(!$key){
            $this->error('未填写简介');
        }
        $img = uploadimg($file);
        $data['image'] = $img;
        $data['auth']  = session('adminuser');
        $data['addtime']=date('Y-m-d H:i:s');
        $data = db('consultation')->insert($data);
        if($data){
            vsyslog('新增首页咨询',session('adminuser'));
            $this->success('新增咨询成功');
        }else{
            $this->error('新增咨询失败');
        }
    }
    /*
     * 删除咨询
     */
    public function deld()
    {
        $id = input('get.id');
        $data = db('consultation')->where('id',$id)->delete();
        if($data){
            vsyslog('删除首页咨询',session('adminuser'));
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    /*
     * 编辑咨询
     */
    public function editd()
    {
        $id = input('id');
        if(input('post.')){
            $sdata = input('post.');
            $file = request()->file('image');
            $data =[];
            if($file){
                $data['image'] = uploadimg($file);
            }
            $data['title'] = $sdata['title'];
            $data['key'] = $sdata['key'];
            $data['content'] = $sdata['content'];

            $ok = db('consultation')->where('id',$sdata['id'])->update($data);
            if($ok){
                vsyslog('修改首页咨询',session('adminuser'));
                $this->success('修改成功');
                exit;
            }else{
                $this->error('修改失败');
                exit;
            }
        }
        $data = db('consultation')->where('id',$id)->find();
        return json($data);
    }
    /*
     * 首页借款轮播
     */
    public function loanlist()
    {
        $list = db('zixun')->paginate(10);
        $this->assign('list', $list);
        return $this->fetch();
    }
    /*
     * 添加
     */
    public function addzixun()
    {
        $data = input('post.');
        $data['addtime'] = date('Y-m-d H:i:s');
        $vdata = db('zixun')->insert($data);
        if(!$vdata){
            $this->error("添加失败");
        }
        $this->success("添加成功");
    }
  	public function delds()
    {
      $id = input('get.id');
        $data = db('zixun')->where('id',$id)->delete();
        if($data){
            vsyslog('删除首页咨询轮播',session('adminuser'));
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
}
