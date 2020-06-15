<?php
namespace app\varjoker\controller;

class Notice extends Common
{
    public function index()
    {
        $list = db('notice')->order('id desc')->paginate(10);
        $this->assign('list', $list);
        return $this->fetch();
    }
    /*
     * 添加公告
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
        $data = db('notice')->insert($data);
        if($data){
            vsyslog('新增首页公告',session('adminuser'));
            $this->success('新增公告成功');
        }else{
            $this->error('新增公告失败');
        }
    }
    /*
     * 删除公告
     */
    public function deld()
    {
        $id = input('get.id');
        $data = db('notice')->where('id',$id)->delete();
        if($data){
            vsyslog('删除首页公告',session('adminuser'));
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    /*
     * 编辑公告
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

            $ok = db('notice')->where('id',$sdata['id'])->update($data);
            if($ok){
                vsyslog('修改首页公告',session('adminuser'));
                $this->success('修改成功');
                exit;
            }else{
                $this->error('修改失败');
                exit;
            }
        }
        $data = db('notice')->where('id',$id)->find();
        return json($data);
    }
}
