<?php
// +----------------------------------------------------------------------
// | vaeThink [ Programming makes me happy ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://www.vaeThink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 听雨 < 389625819@qq.com >
// +---------------------------------------------------------------------
namespace app\port\controller;
use vae\controller\PortControllerBase;
use app\common\model\member\Member;
use think\Session;
use think\Config;
class LoginController extends PortControllerBase {
    /**
     * 获取网站logo
     */
    public function get_enter_logo() {
        $conf = Config::get('webconfig');
        $siteLogo = $conf['logo'];
        $siteName = $conf['admin_title'];
        $request = \think\Request::instance();
        $data['site_logo'] = $request->domain() . $siteLogo;
        $data['site_name'] = $siteName;
        $data['site_name'] = $siteName;
        return $this->port(1, '获取网站信息', $data);
    }

    /**
     * 获取用户协议
     */
    public function get_user_regagree()
    {
       $conf = Config::get('userconfig');
       $data['registration_agreement'] = $conf['registration_agreement'];
        return $this->port(1, '获取用户协议', $data);
    }
    /**
     * 登录
     */
    public function index() {
        $account = trim($this->param('account'));
        $password =  trim($this->param('password'));
        if (!$account) return $this->port(0, '请输入手机号码');
        if (!$password) return $this->port(0, '请输入密码');

        $userinfo = Member::getMember(['account' => $account, 'status' =>['<>', -1]]);
        if (!$userinfo) return $this->port(0, '会员账号不存在');

        $password = md5($password . $userinfo['salt']);
        if (!password_verify($password, $userinfo['pwd'])) {
            return $this->port(0, '会员账号或密码输入错误!');
        }

        //if (!$userinfo['status']) return $this->port(0, '账号已被锁定,无法登陆!');
        $token = $this->uniqidReal();
        $time = time();
        $ip = get_client_ip();
        Config::set('session.id', md5('uni-app' . $account));
        Session::set('user_token', [$token, $time, $ip], 'uni-app');
        $hash_token = password_hash($token . $time . $account . $ip, PASSWORD_DEFAULT);
        //检查升级
        Member::cheakUpgrade($userinfo['mid']);
        return $this->port(1, '登录成功',[
            'token'   => base64_encode(json_encode(['mid' => $userinfo['mid'], 'token' => $hash_token]))
        ]);
    }
    /**
     * 注册
     */
    public function register() {
        $param = $this->param();
        $result = $this->validate($param, 'app\admin\validate\member\Member.reg');
      	
        if ($result !== true) {
            return $this->port(0, $result);
        } else {
            $key = '__blockcat_member_verifycodesession_'.$param['account'];
            $verifycode1 = Session::pull($key);
            $verifycodesendtime = Session::pull('verifycodesendtime');
          
           if( !isset($verifycode1) ||  $verifycode1 != $param['verifycode'] || !isset($verifycodesendtime) || $verifycodesendtime+600<time()){
                return $this->port(0, '验证码错误或已过期');
            }

            $member = Member::getMember(['account' => $param['account'], 'status' => ['<>', -1]]);
            if(!empty($member)){
                return $this->port(0, '此手机号已注册，请直接登录!');
            }
            $parent_mid = isset($param['mid']) ? $param['mid'] : 0;
            if($parent_mid){
                $parent_member = Member::getMember(['mid' => $parent_mid]);
                if(empty($parent_member)) return $this->port(0, '无效的推荐人');
                if(!$parent_member['status']) return $this->port(0, '推荐人已被锁定,无法推荐!');
                if($parent_member['is_promoter'] < 1) return $this->port(0, '无推广权限，请联系管理员!');
            }
            $data = array(
                'parent_mid' => $parent_mid,
                'nickname' => $param['nickname'],
                'account' => $param['account'],
                'pwd' => $param['pwd'],
                'pwd2' => $param['pwd2'],
                'status' => 1,
            );
            $mid = Member::insertMember($data);
            if($mid){
                $integral = config('payconfig')['reg_give'];
                Member::changeIntegral(0, $integral, $mid);
                Member::updateParent($mid, $data['parent_mid']);
                return $this->port(1, '会员账号注册成功!');
            }
            return $this->port(0, '会员账号注册失败!');
        }
        
    }

    /**
     * 忘记密码修改密码
     */
    public function forgetpwd() {
        $param = $this->param();
        $result = $this->validate($param, 'app\admin\validate\member\Member.forgetpwd');

        $account = $this->param('account');
        if(empty($account))  return $this->port(0, '会员账号不能为空');
        if ($result !== true) {
            return $this->port(0, $result);
        } else {
            $key = '__blockcat_member_verifycodesession_'.$param['account'];
            $verifycode1 = Session::pull($key);
            $verifycodesendtime = Session::pull('verifycodesendtime');
			
            if( !isset($verifycode1) ||  $verifycode1 != $param['verifycode'] || !isset($verifycodesendtime) || $verifycodesendtime+600<time()){
                return $this->port(0, '验证码错误或已过期');
            }

            $member = Member::getMember(['account' => $param['account'], 'status' => ['<>', -1]]);
            if(empty($member)){
                return $this->port(0, '此手机号未注册!');
            }
            $pwd = password_hash(md5($param['pwd'].$member['salt']), PASSWORD_DEFAULT);
            $data = array(
                'mid' => $member['mid'],
                'pwd' => $pwd,
            );
            $res = Member::updateMember($data);
            if($res){
                return $this->port(1, '会员密码修改成功!');
            }
            return $this->port(0, '会员密码修改失败!');
        }
        
    }

    /**
     * 获取验证码
     */
    public function verifycode() {
        $mobile = $this->param('mobile');
        $temp =  $this->param('temp');
        if (empty($mobile)) return $this->port(0, '请输入手机号!');
        if (empty($temp)) return $this->port(0, '发送短信类型错误!');

        $verifycodesendtime = Session::pull('verifycodesendtime');

        if(!empty($verifycodesendtime) && $verifycodesendtime+60>time()){
            return $this->port(0, '请求频繁请稍后重试!');
        } 

        $member = Member::getMember(['account' => $mobile, 'status' => ['<>', -1]]);
        if($temp=='sms_forget' && empty($member)){
            return $this->port(0, '此手机号未注册!');
        }
        if($temp=='sms_reg' && !empty($member)){
            return $this->port(0, '此手机号已注册，请直接登录!');
        }

        $key = '__blockcat_member_verifycodesession_'.$mobile;
        $code =  mt_rand(111111, 999999);
        //$code = 201314;
        $content = '您的验证码是' . $code;;
        $res = sendSms($mobile, $content);
        //$res = 1;
        if($res){
            Session::set($key, $code);
            Session::set('verifycodesendtime', time());
         
            return $this->port(1, '短信发送成功');
        }else{
            return $this->port(0, '短信发送失败');
        }

    }
    /**
     * 生成唯一的uuid值
     * @param  integer $lenght 生成的uuid长度
     * @return
     */
    public function uniqidReal($lenght = 13) {
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($lenght / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
        } else {
            throw new Exception("no cryptographically secure random function available");
        }
        return substr(bin2hex($bytes), 0, $lenght);
    }
}
