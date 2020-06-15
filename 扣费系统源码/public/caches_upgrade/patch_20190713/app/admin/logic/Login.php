<?php
// +---------------------------------------------------------------------+
// | OneBase    | [ WE CAN DO IT JUST THINK ]                            |
// +---------------------------------------------------------------------+
// | Licensed   | http://www.apache.org/licenses/LICENSE-2.0 )           |
// +---------------------------------------------------------------------+
// | Author     | Bigotry <3162875@qq.com>                               |
// +---------------------------------------------------------------------+
// | Repository | https://gitee.com/Bigotry/OneBase                      |
// +---------------------------------------------------------------------+

namespace app\admin\logic;
use think\Db;
/**
 * 登录逻辑
 */
class Login extends AdminBase
{
	
	
	
	/**
     * 注册处理
     */
    public function regHandle($username = '', $password = '', $repassword = '', $verify = '')
    {
        $validate_result = $this->validateLogin->scene('reg')->check(compact('username','password','repassword','verify'));
        if (!$validate_result) {
            return [RESULT_ERROR, $this->validateLogin->getError()];
        }
        if($repassword!=$password){return [RESULT_ERROR, '两次密码输入不一致'];}
        if(Db::name("member")->where(['username'=>$username])->find()){
            return [RESULT_ERROR, '用户名已存在'];
        }
        //------------------------开始添加会员

        $data['nickname']  = $username;
        $data['username']  = $username;
		$data['password'] = $password;
        $data['password']  = data_md5_key($data['password']);
     
        $data['leader_id'] = "1";
        $data['is_inside'] = 1;
  
        $result = Db('member')->insert($data);
        $infos=Db::name('member')->where("username='{$data['username']}'")->find()['id'];
        Db::name("auth_group_access")->insert(['member_id'=>$infos,'group_id'=>19,'create_time'=>time()]);
        return [RESULT_SUCCESS, '注册成功', url('login')];

    }
    
    /**
     * 登录处理
     */
    public function loginHandle($username = '', $password = '', $verify = '')
    {
        
        $validate_result = $this->validateLogin->scene('admin')->check(compact('username','password','verify'));
        
        if (!$validate_result) {
            
            return [RESULT_ERROR, $this->validateLogin->getError()];
        }
        
        $member = $this->logicMember->getMemberInfo(['username' => $username]);

        if (!empty($member['password']) && data_md5_key($password) == $member['password']) {
            
            $this->logicMember->setMemberValue(['id' => $member['id']], TIME_UT_NAME, TIME_NOW);

            $auth = ['member_id' => $member['id'], TIME_UT_NAME => TIME_NOW];

            session('member_info', $member);
            session('member_auth', $auth);
            session('member_auth_sign', data_auth_sign($auth));

            action_log('登录', '登录操作，username：'. $username);

            return [RESULT_SUCCESS, '登录成功', url('index/index')];
            
        } else {
            
            $error = empty($member['id']) ? '用户账号不存在' : '密码输入错误';
            
            return [RESULT_ERROR, $error];
        }
    }
  
 
    
    /**
     * 清理缓存
     */
    public function clearCache()
    {
        
        \think\Cache::clear();
        
        return [RESULT_SUCCESS, '清理成功', url('index/index')];
    }
	
	
	/**
     * 注销当前用户
     */
    public function logout()
    {
        
        clear_login_session();
        
        return [RESULT_SUCCESS, '注销成功', url('login/login')];
    }
}
