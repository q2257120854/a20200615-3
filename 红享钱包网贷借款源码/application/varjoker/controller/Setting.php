<?php
namespace app\varjoker\controller;

class Setting extends Common
{
    public function index()
    {
        return $this->fetch();
    }
    public function savesys()
    {
         $data=input('post.');
         if(empty($data['switch'])){
             $data['switch'] = 1;
         }
         $action='config';
        if(!save_config($data,$action,true,true))
        {
            $this->error("保存配置失败");
        }
        vsyslog('保存系统配置',session('adminuser'));
        $this->success("操作成功");
    }
    /*
     *接口配置
     */
    public function apiindex()
    {
        return $this->fetch();

    }
    /*
     * 短信接口配置
     */
    public function smsindex()
    {
        return $this->fetch();

    }
    public function savesms()
    {
        $data=input('post.');
        $action='smstid';
        if(!save_config($data,$action,true,true))
        {
            $this->error("保存配置失败");
        }
        vsyslog('保存接口配置',session('adminuser'));
        $this->success("操作成功");
    }
    public function saveapi()
    {
        $data=input('post.');
        $action='api';
        if(!save_config($data,$action,true,true))
        {
            $this->error("保存配置失败");
        }
        vsyslog('保存接口配置',session('adminuser'));
        $this->success("操作成功");
    }
    /*
     * 借款配置
     */
    public function loanindex()
    {
        return $this->fetch();
    }
    public function saveloan()
    {
        $data=input('post.');
        $action='loan';
        if(!save_config($data,$action,true,true))
        {
            $this->error("保存配置失败");
        }
        vsyslog('保存接口配置',session('adminuser'));
        $this->success("操作成功");
    }
    /*
     * 关于我们
     */
    public function auto()
    {
        if(input('post.content')){
            db('sutext')->where('id',1)->update(['content'=>input('post.content')]);
            $this->success('修改成功');
            exit;
        }
        $data = db('sutext')->where('id',1)->find();
        $this->assign('data',$data);
        return $this->fetch();
    }
    /*
     * 借款协议
     */
    public function xieyi()
    {
        if(input('post.content')){
            db('sutext')->where('id',2)->update(['content'=>input('post.content')]);
            $this->success('修改成功');
            exit;
        }
        $data = db('sutext')->where('id',2)->find();
        $this->assign('data',$data);
        return $this->fetch();
    }
  /*
   *注册协议
   */
  	public function regtext()
    {
     if(input('post.content')){
            db('sutext')->where('id',3)->update(['content'=>input('post.content')]);
            $this->success('修改成功');
            exit;
        }
        $data = db('sutext')->where('id',3)->find();
        $this->assign('data',$data);
        return $this->fetch();
    }
    /*
     * 推广页
     */
    public function tuiguang()
    {

        return $this->fetch();
    }
    public function tuiguangsave()
    {
        $data=input('post.');
        $file = request()->file('image');
        if($file){
            $data['bgimg'] = uploadimg($file);
        }
        $action='tuiguang';
        if(!save_config($data,$action,true,true))
        {
            $this->error("保存配置失败");
        }
        vsyslog('保存接口配置',session('adminuser'));
        $this->success("操作成功");
    }
}
