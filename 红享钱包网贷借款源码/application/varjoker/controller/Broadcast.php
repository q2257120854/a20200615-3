<?php
namespace app\varjoker\controller;

class Broadcast extends Common
{
    public function index()
    {
        $list = db('broadcast')->order('id desc')->paginate(10);
        $this->assign('list', $list);
        return $this->fetch();
    }
    /*
     * 添加轮播图
     */
    public function addbroadcast()
    {
        $file = request()->file('image');
        if(!$file){
            $this->error('未上传图片');
        }
        $url = input('post.url');
        if(!$url){
            $this->error('未填写URL');
        }
        $img = uploadimg($file);
        $data = db('broadcast')->insert(['image'=>$img,'url'=>$url,'uid'=>session('adminuser'),'addtime'=>date('Y-m-d H:i:s')]);
        if($data){
            vsyslog('新增首页轮播图',session('adminuser'));
            $this->success('新增轮播图成功');
        }else{
            $this->error('新增轮播图失败');
        }
    }
    /*
     * 删除轮播
     */
    public function deld()
    {
        $id = input('get.id');
        $data = db('broadcast')->where('id',$id)->delete();
        if($data){
            vsyslog('删除首页轮播图',session('adminuser'));
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    /*
     * 编辑轮播
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
            if($sdata['url']){
                $data['url'] = $sdata['url'];
            }
            $ok = db('broadcast')->where('id',$sdata['id'])->update($data);
            if($ok){
                vsyslog('修改首页轮播图',session('adminuser'));
                $this->success('修改成功');
                exit;
            }else{
                $this->error('修改失败');
                exit;
            }
        }
        $data = db('broadcast')->where('id',$id)->find();
        return json($data);
    }
}
