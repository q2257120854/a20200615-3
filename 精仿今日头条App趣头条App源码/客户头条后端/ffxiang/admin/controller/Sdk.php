<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Cache;
use think\Db;
use app\api\model\Send;
class Sdk extends Common
{
    public function index(){
        return $this->fetch();
    }
    // 通知模板配置
    public function temp(){
      $name=Db::name('member_config')->where('type','sdkTemp')->select();
      $this->assign('data',$name);
      if(request()->isAjax()){
   
          $post=input('post.');
          if($post){
              foreach ($name as $k => $v) {
                  Db::name('member_config')->where('name',$v['name'])->setField('text',$post[$v['name']]);
              }
              $data=['ret'=>'保存成功'];
          }else{
              $data=['err'=>'提交参数错误'];
          }
      }else{
          $data=$this->fetch();
      }
      return $data;
    }
    // 手机配置
    public function mobile(){
      $data=Db::name('member_config')->where('type','sdkMobile')->select();
      $this->assign('data',$data);
      if(request()->isAjax()){
      
          $post=input('post.');
          if($post){
              foreach ($data as $k => $v) {
                  Db::name('member_config')->where('name',$v['name'])->setField('text',$post[$v['name']]);
              }
              $data=['ret'=>'保存成功'];
          }else{
              $data=['err'=>'提交参数错误'];
          }
      }else{
          $data=$this->fetch();
      }
      return $data;
    }
    // 邮箱配置
    public function email(){
      $data=Db::name('member_config')->where('type','sdkEmail')->select();
      $this->assign('data',$data);
      if(request()->isAjax()){
      
          $post=input('post.');
          if($post){
              foreach ($data as $k => $v) {
                  Db::name('member_config')->where('name',$v['name'])->setField('text',$post[$v['name']]);
              }
              $data=['ret'=>'保存成功'];
          }else{
              $data=['err'=>'提交参数错误'];
          }
      }else{
          $data=$this->fetch();
      }
      return $data;
    }
    // 测试邮箱
    public function emails(){
      if(request()->isAjax()){
  
        $Send = new Send;
        $result = $Send->email(['email'=>input('post.username'),'content'=>'邮箱测试成功']);
        if($result !== true){
            return ['err'=>'测试失败，原因：'.$result];
        }
        return ['ret'=>'邮箱测试成功'];
      }
    }
    // beecloud支付配置
    public function beecloud(){
      $data=Db::name('member_config')->where('type','sdkBeecloud')->select();
      $this->assign('data',$data);
      if(request()->isAjax()){
       
          $post=input('post.');
          if($post){
              foreach ($data as $k => $v) {
                  Db::name('member_config')->where('name',$v['name'])->setField('text',$post[$v['name']]);
              }
              $data=['ret'=>'保存成功'];
          }else{
              $data=['err'=>'提交参数错误'];
          }
      }else{
          $data=$this->fetch();
      }
      return $data;
    }
    // 七牛存储
    public function qiniu(){
      $data=Db::name('member_config')->where('type','sdkQiniu')->select();
      $this->assign('data',$data);
      if(request()->isAjax()){
     
          $post=input('post.');
          if($post){
              foreach ($data as $k => $v) {
                  Db::name('member_config')->where('name',$v['name'])->setField('text',$post[$v['name']]);
              }
              $data=['ret'=>'保存成功'];
          }else{
              $data=['err'=>'提交参数错误'];
          }
      }else{
          $data=$this->fetch();
      }
      return $data;
    }
}
