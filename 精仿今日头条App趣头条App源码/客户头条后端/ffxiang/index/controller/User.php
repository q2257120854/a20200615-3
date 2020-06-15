<?php
namespace app\index\controller;
use app\index\controller\Common;
use think\Db;
use think\Session;
use think\Request; //获取请求类型
class User extends Common
{
    public function index(){   
        $id=input('id/d');
        if(!$id){
            $this->redirect(_webfig('url'));
        }
        if(_session()){
            $member=_member();
        }
        $user=_user($id);
        if($user['hide']==0){
            $this->error('该账户已被禁止');
        }else if($user['hide']==3){
            $this->error('该账户正在审核');
        }else if($user['hide']==2){
            $this->error('该账户正在审核');
        }
        // 判断是否已关注
        if(_session()){
            $user['guanzhu']=Db::name('member_guanzhu')->where(['uid'=>$member['id'],'gz_uid'=>$user['id']])->value('id');
        }else{
            $user['guanzhu']=0;
        }
        $this->assign('user',$user);
        // 分类导航
        $typeid=Db::name('typeid')->where(['hide'=>1,'tid'=>0])->order('hide desc,des desc')->limit(100)->cache(_cache('db'))->field('id,title')->select();
        $this->assign('typeid',$typeid);
        // 随机头条
        $where['hide']=1;
        $channel=Db::name('member')->field('id,img,mobile,nickname')->where($where)->limit(6)->order('rand()')->select();
        foreach ($channel as $k => $v) {
            if($v['nickname']){
                $channel[$k]['username']=$v['nickname'];
            }else if($v['mobile']){
                $channel[$k]['mobile']=$v['mobile'];
            }
            $channel[$k]['mobile']='';
            $channel[$k]['nickname']='';
            if(!$v['img']){
                $channel[$k]['img']='/public/style/index/member/img/userimg.gif';
            }else{
                $channel[$k]['img']=_imgurl().$v['img'].'?imageView2/1/w/55/h/55';
            }
        }

        $this->assign('channel',$channel);
        return $this->fetch();
    }
    // 会员登录
    public function login(){
        // 判断是否登录
        if(Session::has('user','ffxiangUser')){
            $this->redirect("member/index");
        }
        // 读取会员配置 - 开始
        $data=Db::name('member_config')->select();
        $config=[];
        foreach ($data as $k => $v) {
            $config[$v['name']]['name']=$v['name'];
            $config[$v['name']]['title']=$v['title'];
            $config[$v['name']]['content']=$v['content'];
            $config[$v['name']]['text']=$v['text'];
        }
        $this->assign('config',$config);
        unset($data);   // 销毁变量
        // 读取会员配置 - 结束
        // 会员是否开启 - 开始
        if(!$config['switch']['text'] || $config['switch']==0){
            $this->error('会员未开放');
        }
        $reguser=$config['reguser']['text'] ? '用户名/' : '';
        $regmobile=$config['regmobile']['text'] ? '手机/' : '';
        $regemail=$config['regemail']['text'] ? '邮箱/' : '';
        $username=$reguser.$regmobile.$regemail;
        $username=rtrim($username, "/");
        $this->assign('username',$username);
        // 会员是否开启 - 结束
        if(Request::instance()->isPost()){
            $token=input('token') ? input('token') : '';
            if(!_Dencrypt($token)) return ['err'=>'登录失败'];
            Session::set('user',$token,'ffxiangUser');
            return ['ret'=>'登录成功'];
        }else{
            return $this->fetch();
        }
         
        
    }
    // 用户注册
    public function reg(){
        // 判断是否登录
        if(Session::has('user','ffxiangUser')){
            $this->redirect("member/index");
        }
        // 读取会员配置 - 开始
        $data=Db::name('member_config')->select();
        $config=[];
        foreach ($data as $k => $v) {
            $config[$v['name']]['name']=$v['name'];
            $config[$v['name']]['title']=$v['title'];
            $config[$v['name']]['content']=$v['content'];
            $config[$v['name']]['text']=$v['text'];
        }
        $this->assign('config',$config);
        unset($data);   // 销毁变量
        // 读取会员配置 - 结束
        // 会员是否开启 - 开始
        if(!$config['switch']['text'] || $config['switch']['text']==0){
            $this->error('未开放会员系统');
        }
        if(!$config['regmobile']['text'] && !$config['regemail']['text'] && !$config['reguser']['text']){
            $this->error('会员设置操作有问题，请在后台-会员管理-配置设置中的用户名、手机、邮箱，至少要开放一个');
        }
        $reguser=$config['reguser']['text'] ? '用户名/' : '';
        $regmobile=$config['regmobile']['text'] ? '手机/' : '';
        $regemail=$config['regemail']['text'] ? '邮箱/' : '';
        $username=$reguser.$regmobile.$regemail;
        $username=rtrim($username, "/");
        $this->assign('username',$username);
        // 会员是否开启 - 结束
        return $this->fetch();
         
    }
    // 密码找回
    public function password(){
        // 判断是否登录
        if(Session::has('user','ffxiangUser')){
            $this->redirect("member/index");
        }
        // 读取会员配置 - 开始
        $data=Db::name('member_config')->select();
        $config=[];
        foreach ($data as $k => $v) {
            $config[$v['name']]['name']=$v['name'];
            $config[$v['name']]['title']=$v['title'];
            $config[$v['name']]['content']=$v['content'];
            $config[$v['name']]['text']=$v['text'];
        }
        $this->assign('config',$config);
        unset($data);   // 销毁变量
        // 读取会员配置 - 结束
        // 会员是否开启 - 开始
        if(!$config['switch']['text'] || $config['switch']['text']==0){
            $this->error('未开放会员系统');
        }
        if(!$config['regmobile']['text'] && !$config['regemail']['text']){
            $this->error('会员设置操作有问题，请在后台-会员管理-配置设置中的手机、邮箱，至少要开放一个');
        }
        $regmobile=$config['regmobile']['text'] ? '手机/' : '';
        $regemail=$config['regemail']['text'] ? '邮箱/' : '';
        $username=$regmobile.$regemail;
        $this->assign('username',rtrim($username, "/"));
        // 会员是否开启 - 结束
        return $this->fetch();
    }
    // 绑定手机
    // 绑定邮箱
     
}
