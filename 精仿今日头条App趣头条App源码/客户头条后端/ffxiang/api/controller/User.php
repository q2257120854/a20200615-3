<?php
namespace app\api\controller;
use app\api\controller\Common;
use think\Db;
use think\Request; //获取请求类型
use think\Validate;
use Qiniu\Auth;
use Qiniu\Storage\BucketManager;
use Qiniu\Storage\UploadManager;
class User extends Common
{
    // public function __construct(){
    //  parent::__construct();
    // }
    public function index()
    {    
        return _ajaxError();
    }
    // 会员登录
    // username     手机 用户名 邮箱自动识别
    // password     密码
    // logincode    验证码 可选 假如后台开启验证，则需要开启
    public function login(){

        // 读取会员配置 - 开始
        $data=Db::name('member_config')->select();
        $config=[];
        foreach ($data as $k => $v) {
            $config[$v['name']]['name']=$v['name'];
            $config[$v['name']]['title']=$v['title'];
            $config[$v['name']]['content']=$v['content'];
            $config[$v['name']]['text']=$v['text'];
        }
        unset($data);   // 销毁变量
        // 读取会员配置 - 结束
        // 会员是否开启 - 开始
        if(!$config['switch']['text'] || $config['switch']==0){
            echo json_encode(['err'=>'会员未开放']);
            exit();
        }
        if(!$config['regmobile']['text'] && !$config['regemail']['text'] && !$config['reguser']['text']){
            echo json_encode(['err'=>'会员设置操作有问题，请在后台-会员管理-配置设置中的用户名、手机、邮箱，至少要开放一个']);
            exit();
        }
        // 会员是否开启 - 结束
        if(Request::instance()->isPost()){   
            $time=time();
            $ip=_ip();
            // 检测账户和密码是否为空
            $username=input('username') ? input('username') : '';
            $password=input('password') ? input('password') : '';
            if(!$username){
                echo json_encode(['err'=>'用户不能为空']);
                exit();
            }
            if(!$password){
                echo json_encode(['err'=>'密码不能为空']);
                exit();
            }
            $captcha=input('captcha');
            // 检测验证码是否正确
            if($config['logincode']['text']==1){
                // if(!captcha_check($captcha)){
                //     json_encode(['err'=>'验证码错误']);
                //     exit();
                // }
            }
            $password=md5($password);
            // 检测账户格式
            $where=[];
            $email=$user=$mobile=false;
            if($config['regmobile']['text']==1 && _isMobile($username)){
                if(!$config['regmobile']['text']){
                    echo json_encode(['err'=>'手机注册未开放']);
                    exit();
                };
                $mobile=$username;
                $where['mobile']=$username;
            }elseif($config['regemail']['text']==1 && _isEmail($username)){
                $email=$username;
                $where['email']=$username;
            }elseif($config['reguser']['text']==1){
                $user=$username;
                $where['user']=$username;
            }
            if(!$email && !$user && !$mobile) {
                echo json_encode(['err'=>'手机号码错误']);
                exit();
            }

            // 读取用户账户是否存在
            $member=Db::name('member')->where($where)->fetchSql(false)->find();
            if(!$member){
                exit(json_encode(['err'=>'手机号码不存在']));
            }
            // 读取用户信息
            $where['password']=$password;
            $member=Db::name('member')->where($where)->fetchSql(false)->find();
           // echo $member;exit();
            if(!$member) {
                echo json_encode(['err'=>'用户和密码不一致']);
                exit();
            }
            switch ($member['hide']) {
                case '0':
                    $recording=_records($member['id'],'登录失败,账户被禁止');
                    if($recording){
                        echo json_encode(['err'=>'无法登录，因作弊或其他原因账户已被封号']);
                        exit();
                    }
                    break;
                case '2':
                    $recording=_records($member['id'],'登录失败,账户正在审核');
                    if($recording){
                        echo json_encode(['err'=>'账户正在审核，请等待客服处理']);
                        exit();
                    }
                    break;
                case '3':
                    $recording=_records($member['id'],'登录失败，账户审核被拒绝');
                    if($recording){
                        echo json_encode(['err'=>'账户审核被拒绝，请联系客服处理']);
                        exit();
                    }
                    break;
            }
			
			$ret = array();
			
			

            // 更新会员记录
            Db::name('member')->where('id',$member['id'])->update(['update_time'=>$time,'longin_time'=>$time,'update_ip'=>$ip]);
			$user = _user($member['id']);
			if(!$member['longin_time']){
				$yaoqing=config()['yaoqing'];
				$jinbi = _get_jinbi($yaoqing['jinbi_first_login']);
				if($jinbi){
				_moneyDb(['uid'=>$member['id'],'jinbi'=>['money'=>$jinbi,'content'=>'首次登录奖励金币']]);
				//Db::name('yaoqing')->where('uid',$member['id'])->update(['jinbi'=>$jinbi,'jinbi_num'=>$jinbi]);
				}
				$ret['tips'] = $jinbi;
			}
            _records($member['id'],'登录成功');
            $data=$member['id'].'|www.ffxiang.cn|'.$member['password'];
            $ret['ret'] = _encrypt($data);
            echo json_encode($ret);
            exit();
        }else{
            echo json_encode(_ajaxError());
            exit();
        }
    }
    // 用户注册
    // username     用户名
    // password     密码
    // code         手机验证码
    // captcha      验证码  如果后台regcode开启验证码
    public function reg(){
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
             echo json_encode(['err'=>'会员未开放']);
             exit();
        }
        if(!$config['regmobile']['text'] && !$config['regemail']['text'] && !$config['reguser']['text']){
            echo json_encode( ['err'=>'会员设置操作有问题，请在后台-会员管理-配置设置中的用户名、手机、邮箱，至少要开放一个']);
            exit();
        }

        // 会员是否开启 - 结束
        if(Request::instance()->isPost()){
            // 检测账户和密码是否为空
            $username=input('username') ? input('username') : '';
            $password=input('password') ? input('password') : '';
            if(!$username) exit(json_encode(['err'=>'用户不能为空']));
            if(!$password) exit(json_encode(['err'=>'密码不能为空']));
            //  2018年2月28日 16:31:51  增加邀请码
            $yaoqingma=input('yaoqingma') ? input('yaoqingma') : '';
            // 邀请码结束
            // 判断验证码是否启动 和 为空
            // if($config['regcode']['text']==1){
            //     $captcha=input('captcha') ? input('captcha') : '';
            //     if(!$captcha) exit(json_encode(['err'=>'请输入验证码']));
            //     // 检测验证码是否正确
            //     if(!captcha_check($captcha)){
            //         // exit(json_encode(['err'=>'验证码错误']));
            //     }
            // }
            // 检测账户格式
            $email=$user=$mobile=false;
            // 判断是否开放注册 和 检测
            if($config['regmobile']['text']==1 && _isMobile($username)){
                $mobile=$username;
                $where['mobile']=$username;
            }elseif($config['regemail']['text']==1 && _isEmail($username)){
                $email=$username;
                $where['email']=$username;
            }elseif($config['reguser']['text']==1){
                $user=$username;
                $where['user']=$username;
            }else{
                exit(json_encode(['err'=>'账户格式不对，不可填写特殊字符，请重新填写账户']));
            }
            if(!$email && !$user && !$mobile) exit(json_encode(['err'=>'未开放注册']));
            // 判断是否开启手机或邮箱，并且检测验证码
            if($mobile || $email){
                if(!$user){
                    $code=input('code') ? input('code') : '';
                    // if(!$code){
                    //     if($mobile){
                    //         $data=['err'=>'手机验证码必填'];
                    //     }else if($email){
                    //         $data=['err'=>'邮箱验证码必填'];
                    //     }else{
                    //         $data=['err'=>'请填写验证码'];
                    //     }
                    //     exit(json_encode($data));
                    // }
                    $data=_codechecking($code,$username);
                    if($data==1){
                        exit(json_encode(['err'=>$data]));
                    }
                }
            }

            // 判断禁止账户注册
            if($config['ban']['text']){
                $ban="%**#".$config['ban']['text']."%**#";
                if(strpos($ban,$username) > 0){
                    exit(json_encode(['err'=>'此账户系统不允许注册，请换其他账户注册']));
                }
            }
            $ip=_ip();
            // if(!$ip) exit(json_encode(['err'=>'您当前IP存在异常，请检测网络或重新注册']));
            // 检测频繁注册IP限制
            if($config['ip']['text']!=0 || !$config['ip']['text']){
                $recordsip['ip']=$ip;
                $recordsip['text']='注册成功';
                $recordsip['system']=$_SERVER['HTTP_USER_AGENT'];
                $recordscount=Db::name('member_records')->where($recordsip)->whereTime('time', 'today')->order('id desc')->fetchSql(false)->count();
                if($recordscount > $config['ip']['text']){
                    //exit(json_encode(['err'=>'请不要频繁注册']));
                }
            }

            // 判断用户是否存在
            $member=Db::name('member')->where($where)->fetchSql(false)->field("id,password")->find();
            if($member){
                // 如果用户已存在  在判断是否有第三方app id 
                $appid=input('post.token'); // 第三方获取得到token
                $type=input('post.type');  // 第三方平台类型
                if($appid && $type){
                    $appidtoken=DB::name('member_band')->where(['type'=>$type,'uid'=>$member['id']])->value('uid');
                    if($member['password']!=md5($password)){
                        exit(json_encode(['err'=>'密码错误']));
                    }
                    if(!$appidtoken){    // 未存在 第三方和用户绑定
                        $appidmap['uid']=$member['id'];
                        $appidmap['type']=$type;
                        $appidmap['code']=$appid;
                        $appidmap['time']=time();
                        $appidmapdb=Db::name('member_band')->insertGetId($appidmap);
                        _records($member['id'],$type.'绑定');
                        $data=$member['id'].'|www.ffxiang.cn|'.md5($password);
                        $token=_encrypt($data);
                        exit(json_encode(['token'=>$token]));
                    }else{              // 已存在 不绑定
                        exit(json_encode(['err'=>'该用户已绑定过平台，请重新换号码']));
                    }
                    
                }else{
                    exit(json_encode(['err'=>'账户已存在']));
                }
            }

            // 开始写入会员数据
            $map['password']=md5($password);
            if($user && $config['reguser']['text']==1) $map['user']=$username;
            if($mobile && $config['regmobile']['text']==1) $map['mobile']=$username;
            if($email && $config['regemail']['text']==1) $map['email']=$username;
            // $map['money']=$config['money']['text'];
            // $map['score']=$config['score']['text'];
            $map['jingyan']=$config['jingyan']['text'];
            if($config['audit']['text']==1){
                $map['hide']=2;
            }else{
                $map['hide']=1;
            }
            $time=time();
            $map['create_time']=$time;
            $map['update_time']=$time;
            $map['create_ip']=$ip;
            $map['update_ip']=$ip;
            $db=Db::name('member')->insertGetId($map);
            if($db){
                // 2018年2月28日 15:48:06 增加邀请
                if($yaoqingma){
                    _yaoqing($db,$yaoqingma);
                }
                // 要邀请结束
                $recording=_records($db,'注册成功');
                //增加用户记录
                // if($config['money']['text']){
                //     _records($db,'注册赠送金额',$config['money']['text'],'money','+');
                // }
                // if($config['score']['text']){
                //     _records($db,'注册赠送积分',$config['money']['text'],'score','+');
                // }
                // if($config['jingyan']['text']){
                //     _records($db,'注册赠送经验值',$config['money']['text'],'jingyan','+');
                // }
                // 有第三方登录参数 并绑定
                $appid=input('post.token'); // 第三方获取得到token
                $type=input('post.type');  // 第三方平台类型
                if($appid && $type){
                    $appidtoken=DB::name('member_band')->where(['type'=>$type,'uid'=>$db])->value('uid');
                    if(!$appidtoken){    // 未存在 第三方和用户绑定
                        $appidmap['uid']=$db;
                        $appidmap['type']=$type;
                        $appidmap['code']=$appid;
                        $appidmap['time']=$time;
                        $appidmapdb=Db::name('member_band')->insertGetId($appidmap);
                        _records($db,$type.'绑定');
                        $data=$db.'|www.ffxiang.cn|'.$map['password'];
                        $token=_encrypt($data);
                        $data=['token'=>$token];
                    }else{              // 已存在 不绑定
                        $data=['err'=>'该用户已绑定过平台，请重新换号码'];
                    }
                }else{
                    $data=['ret'=>'注册成功'];
                }
            }else{
                $data=['err'=>'注册失败，请检测MYSQL数据'];
            } 
            exit(json_encode($data));
        }else{
            exit(json_encode(_ajaxError()));
        }
    }
    // 密码找回
    public function password(){
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
             exit(json_encode(['err'=>'会员未开放']));
        }
        if(!$config['regmobile']['text'] && !$config['regemail']['text']){
            exit(json_encode(['err'=>'会员设置操作有问题，请在后台-会员管理-配置设置中的手机、邮箱，至少要开放一个']));
        }
        // 会员是否开启 - 结束
        if(Request::instance()->isPost()){
            // 检测账户和密码是否为空
            $username=input('username') ? input('username') : '';
            $password=input('password') ? input('password') : '';
            if(!$username) exit(json_encode(['err'=>'号码不能为空']));
            if(!$password) exit(json_encode(['err'=>'请输入设置密码']));
            // 判断验证码是否启动 和 为空
            if($config['pwdcode']['text']==1){
                $captcha=input('captcha') ? input('captcha') : '';
                if(!$captcha) exit(json_encode(['err'=>'请输入验证码']));
                // 检测验证码是否正确
                if(!captcha_check($captcha)){
                    exit(json_encode(['err'=>'验证码错误']));
                }
            }
            // 检测账户格式
            $email=$mobile=false;
            // 判断是否开放注册 和 检测
            if($config['regmobile']['text']==1 && _isMobile($username)){
                $mobile=$username;
                $where['mobile']=$username;
            }elseif($config['regemail']['text']==1 && _isEmail($username)){
                $email=$username;
                $where['email']=$username;
            }else{
                exit(json_encode(['err'=>'账户格式不对，不可填写特殊字符，请重新填写账户']));
            }
            if(!$email && !$mobile) exit(json_encode(['err'=>'未开放注册']));
            // 判断是否开启手机或邮箱，并且检测验证码
            if($mobile || $email){
                $code=input('code') ? input('code') : '';
                if(!$code){
                    if($mobile){
                        $data=['err'=>'手机验证码必填'];
                    }else if($email){
                        $data=['err'=>'邮箱验证码必填'];
                    }else{
                        $data=['err'=>'请填写验证码'];
                    }
                    exit(json_encode($data));
                }
                $data=1;//_codechecking($code,$username);
                if($data!=1){
                    exit(json_encode(['err'=>$data]));
                }
            }
            // 判断用户是否存在
            $member=Db::name('member')->where($where)->fetchSql(false)->field("id,hide")->find();
            if(!$member) exit(json_encode(['err'=>'用户不存在']));
            switch ($member['hide']) {
                case '0':
                    $recording=_records($member['id'],'无法使用密码找回，原因是账户已被封号');
                    if($recording){
                        exit(json_encode(['err'=>'无法使用密码找回，原因是账户已被封号']));
                    }
                    break;
                case '2':
                    $recording=_records($member['id'],'无法使用密码找回，原因是账户正在审核');
                    if($recording){
                        exit(json_encode(['err'=>'无法使用密码找回，原因是账户正在审核']));
                    }
                    break;
                case '3':
                    $recording=_records($member['id'],'无法使用密码找回，原因是账户审核被拒绝');
                    if($recording){
                        exit(json_encode(['err'=>'无法使用密码找回，原因是账户审核被拒绝']));
                    }
                    break;
            }
            // 开始更新用户密码
            if($mobile) $map['mobile']=$username;
            if($email) $map['email']=$username;
            $db=Db::name('member')->where($map)->setField('password',md5($password));
            if($db){
                $recording=_records($member['id'],'密码找回');
                $data=['ret'=>'密码修改成功'];
            }else{
                $data=['err'=>'密码修改失败，请检查MYSQL数据'];
            }
            exit(json_encode($data));
        }else{
            exit(json_encode(_ajaxError()));
        }
    }
    // 封装第三方登录
    // type  登录类型
    // openid 唯一的ID
    public function oauth(){
        $type=input('type') ? input('type') : '';
        $openid=input('openid') ? input('openid') : '';
        $nickname=input('nickname') ? input('nickname') : '';
        $img=input('img') ? input('img') : ''; 
        $info=input('info') ? input('info') : ''; 
        //开始验证
        $validate = new Validate([
            'type|登录类型' =>      'in:wxapp,qqapp,wbapp|require',
            'openid'        =>      'require',
            'nickname'      =>      'require',
            'img'           =>      'require',
            'info'          =>      'require'
        ]);
        $validata=[
            'type'          =>      $type,
            'openid'        =>      $openid,
            'nickname'      =>      $nickname,
            'img'           =>      $img,
            'info'          =>      $info
        ];
        if (!$validate->check($validata)) {
            echo json_encode(['err'=>$validate->getError()]);
            exit();
        } 
        //结束验证
        // 检测openid是否存在
        $uid=Db::name('member_band')->where(['type'=>$type,'code'=>$openid])->value('uid');
        if($uid){   // 如果已有微信绑定，获取会员登录
		    $firsttime = 0;
            $member=Db::name('member')->where(['id'=>$uid,'hide'=>1])->field('id,password')->find(); 
        }else{  // 如果不存在 自动注册
		     $firsttime = 1;
            $member=$this->user(['openid'=>$openid,'type'=>$type,'nickname'=>$nickname,'img'=>$img,'info'=>$info]);
        }
        if($member){
            $time=time();
            $ip=_ip();
            // 更新会员记录
			//$member=Db::name('member')->where(['id'=>$uid,'hide'=>1])->find(); 
			$ret = array();
            Db::name('member')->where('id',$member['id'])->update(['update_time'=>$time,'longin_time'=>$time,'update_ip'=>$ip]);
			$user = _user($member['id']);
			if($firsttime){
				$yaoqing=config()['yaoqing'];
				$jinbi = _get_jinbi($yaoqing['jinbi_first_login']);
				if($jinbi){
				_moneyDb(['uid'=>$member['id'],'jinbi'=>['money'=>$jinbi,'content'=>'首次登录奖励金币']]);
				//Db::name('yaoqing')->where('uid',$member['id'])->update(['jinbi'=>$jinbi,'jinbi_num'=>$jinbi]);
				}
				$ret['tips'] = $jinbi;
			}
            _records($member['id'],'登录成功');
            $data=$member['id'].'|www.ffxiang.cn|'.$member['password'];
			$ret['oauth'] = 1;
			$ret['ret'] = _encrypt($data);
            echo json_encode($ret);
        }else{
            echo json_encode(['err'=>'登陆失败']);
        }  
    }
    // 添加会员
    private function user($data){
        if(!$data){
            return;
        }
        $ip=_ip();
        $password=md5(rand(100000,999999));
        $map['password']=$password;
        $map['hide']=1;
        $time=time();
        $map['create_time']=$time;
        $map['update_time']=$time;
        $map['update_ip']=$ip;
        $map['nickname']=$data['nickname'];
        $map['img']=$this->uploadImg($data['img']);
        $db=Db::name('member')->insertGetId($map);
        if($db){
            _records($db,'注册成功');
            $appidmap['uid']=$db;
            $appidmap['type']=$data['type'];
            $appidmap['code']=$data['openid'];
            $appidmap['time']=time();
            $appidmap['info']=$data['info'];
            $appidmapdb=Db::name('member_band')->insertGetId($appidmap);
            _records($db,$data['type'].'绑定');
        }
        return ['id'=>$db,'password'=>$password];
    }
    private function qiniu($url,$type=''){
        if(!$url){
            return '';
        }
        if(!$type){
            $type='.jpg';
        }
        require_once APP_PATH . '/../vendor/qiniu/autoload.php';
        $db=db::name('member_config')->where(['type'=>'sdkQiniu'])->cache(_cache('db'))->select();
        $accessKey = $db['0']['text'];
        $secretKey = $db['1']['text'];
        $auth = new Auth($accessKey, $secretKey);
        $bmgr = new BucketManager($auth);
        $bucket = $db['2']['text'];
        $key = md5($url.rand(11111,999999)) .$type;
        list($ret, $err) = $bmgr->fetch($url, $bucket, $key);
        if ($err !== null) {
            return '';
        } else {
            return $key;
        }
    }

    // 下载头像
    private function uploadImg($img){
        return $this->qiniu($img);
        if(!$img){
            return;
        }
        //判断文件夹是否存在
        $d=ROOT_PATH . 'public/uploads/touimg';
        $date=date('Ymd');
        $d=$d.'/'.$date.'/';
        if(!file_exists($d)){ 
            mkdir($d);
        }
        // 获取图片格式
        //开始下载图片
        $img=file_get_contents($img);
        if(!$img){
            return ''; 
        }
        $rand=rand(10000,999999);
        $geshis=md5($img).$rand.'.jpg';
        $d=$d.'/'.$geshis;
        file_put_contents($d,$img);
        return "/public/uploads/touimg/".$date."/".$geshis;  
    }
    // 会员主页
    public function info(){
        $id=input('post.id/d') ? input('post.id/d') : '';
        $token=input('param.token');
        if($token){
            $uid=_Dencrypt($token,'D');
            if(!$uid){
                $token='';
            }
        }
        //开始验证
        $validate = new Validate([
            'id'           =>      'number|require',
        ]);
        $validata=[
            'id'           =>      $id,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        //结束验证
        $db=_user($id);
        $data['img']=_imgUrl().$db['img'];
        $data['username']=$db['username'];
        $data['qianming']=$db['qianming'];
        $data['guanzhu']=0;
        $data['id']=$db['id'];
        $data['guanzhu']=Db::name('member_guanzhu')->where(['uid'=>$db['id']])->count();
        $data['fensi']=Db::name('member_guanzhu')->where(['gz_uid'=>$db['id']])->count();
        if($token){
            $guanzhu=Db::name('member_guanzhu')->where(['uid'=>$uid,'gz_uid'=>$id])->value('id');
            if($guanzhu){
                $data['guanzhu']=1;
            } else{
                $data['guanzhu']=0;
            }   
        }
        echo json_encode($data);
    }



    // 当前栏目信息接口
    public function get_question_info(){
        $questionRes=db('question')->field('id,title,content')->order('id DESC')->select();
        return json($questionRes);

  }

  // 微头条举报删除
    public function jubaotiaoDel(){
        $uid=$this->member['id'];
        $aid=input('aid/d') ? input('aid/d') : 0;
        $where['id']=$aid;
        $where['uid']=$uid;
        $where['weitoutiao']=['in','1,2'];
        $a=Db::name('article')->where($where)->delete();
        if($a){
            echo json_encode(['ret'=>'删除成功']);
        }else{
            echo json_encode(['err'=>'删除失败']);
        }
    }


    public function jubaodel(){
        $data['id']=input('id');
        $jubao=db('jubao')->delete($data);
        if($jubao){
            return json(['status'=>200,'msg'=>'删除成功','data'=>$jubao]);
        }else{
            return json(['status'=>400,'msg'=>'删除失败']);
        }
    }

    // public function questionAPI()
    // {

    //     $data=[];
    //     $questionRes=db('question')->limit(10)->order('id DESC')->select();
    //     // $questionRes=array_reverse($questionRes);
    //     // var_dump($questionRes);die;
    //     foreach ($questionRes as $key => $value) {
    //         $arr[] = $value['id'];
    //         $arr1[] = $value['title'];

    //         $tempArr = [];
    //         $tempArr[] = $value['title'];
    //         $tempArr[] = round($value['content'],2);
            
    //         $data[] = $tempArr;


    //     }

    //     $hours = $arr;

       
    //     $days = $arr1;
        
    //     //$data = json_encode($data);
    //     // $arr = [
    //     //  'errorCode' => 0,
    //     //  'errorMessage' => '数据获取成功',
    //     //  'data' => compact('hours','days','data'),
    //     // ];
    //     return json($data);
    // }
   
   
       // 用户信息
    public function yonghuxinxi(){
          $data=input('id');
        $questionRes=db('member')->field('money,wxurl,wxname,aliname,alizh,mobile')->where(['id'=>$data])->select();
        return json($questionRes);

  }

        // 用户信息
    public function tixianxinxi(){
          $data=input('id');
        $questionRes=db('tixian')->where(['uid'=>$data])->order('id desc')->select();
        return json($questionRes);

  }



       //体现
    public function tixian(){
    
          $id=input('uid');

        $questionRes=db('member')->field('money,wxurl,wxname,aliname,alizh')->where(['id'=>$id])->select();

        $qian=db('yaoqing')->field('money')->where(['uid'=>$id])->select();

        if($qian[0]['money']<input('price'))
        {
          $arr = [
         'Code' => 201,
         'errorMessage' => '提现失败',
        ];

        return json($arr);  
        exit();
        }
          $type=input('type');
          $price=input('price');
          $zhanghao=input('zhanghao');
          $date=date('Y-m-d H:i:s');
          $name=input('name');
                        $appidmap['uid']=$id;
                        $appidmap['paths']=$type;
                        $appidmap['addtime']=$date;
                        $appidmap['price']=$price;
                        $appidmap['zhanghao']=$zhanghao;
                         $appidmap['name']=$name;

                        $appidmapdb=Db::name('tixian')->insertGetId($appidmap);
                           
                           // Db::name('yaoqing')->where(['uid'=>$id])->setDec('num');
                             $tijin=$price*100;
                              $result = Db::execute('update fx_yaoqing set money =money-'.$tijin.' where uid = '.$id.' ');
                              //添加到记录表
                              $data=[
                                'uid'=>$id,
                                'content'=>'提现',
                                'money'=>$tijin,
                                'type'=>'0',
                                'data'=>'1',
                                'time'=>time()
                              ];
                              $cmoney=db('yaoqing_records')->insert($data);
$arr = [
         'Code' => 0,
         'errorMessage' => '数据获取成功',
        ];

        return json($arr);

  }



       // 邦定
    public function bangdingz(){
          $id=input('uid');
           $zhanghao=input('zhanghao');
            $name=input('name');

       

          $questionRes=Db::name('member')->where('id',$id)->update(['aliname'=> $name,'alizh'=>$zhanghao]);

      $arr = [
         'Code' => 200,
         'errorMessage' => '成功',
        ];

        return json($arr);

  }

 // 邦定
    public function bangdingwx(){
          $id=input('uid');
           // $zhanghao=input('zhanghao');
            $name=input('name');

 $file = request()->file('image');
        $data=$_POST;
      if(isset($file)){
         // 获取表单上传文件 例如上传了001.jpg
      // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public/uploads');
//       var_dump($info) ;die;
 
        if($info){
                // 成功上传后 获取上传信息
         $a=$info->getSaveName();
         $imgp= str_replace("\\","/",$a);
         $imgpath='uploads/'.$imgp;
 
           $lujing= $imgpath;
        }
       

          $questionRes=Db::name('member')->where('id',$id)->update(['wxurl'=>$lujing,'wxname'=>$name]);

      $arr = [
         'Code' => 200,
         'errorMessage' => '成功',
        ];

        return json($arr);

    }

    else
    {
        $arr = [
         'Code' => 201,
         'errorMessage' => '失败',
        ];

        return json($arr);
     }
  }


 // 手机邦定
    public function phonebd(){
          $id=input('uid');
           $phone=input('phone');
           $que=db('member')->field('money,wxurl,wxname,aliname,alizh')->where(['mobile'=>$phone])->select();
       
         if(!$que)
         {
          $questionRes=Db::name('member')->where('id',$id)->update(['mobile'=>$phone]);

      $arr = [
         'Code' => 200,
         'errorMessage' => '成功',
        ];

        }
        else
        {

           $arr = [
         'Code' => 201,
         'errorMessage' => '手机已经被绑定',
        ];

        }    


        return json($arr);

  }

// public function ceshi(){
//    //金币转零钱
//         if(date("H:i:s")>"08:00:00")
//         {   $userid=681;
//             $where['uid']=$userid;
//             $where['state']=1;
//             $mingt=date('Y-m-d',strtotime('+1 day'));
//             $zuot=date('Y-m-d',strtotime('-1 day'));
//             $where['time']=['< time',$mingt];
//             $where['time']=['> time',$zuot];

        
//             $yaoqing=Db::name('yaoqing')->where(['uid'=>$userid])->select();
//              $tijilu=Db::name('yaoqing_records')->where($where)->select();

//              var_dump($tijilu);
//              // var_dump($yaoqing);

//    if($yaoqing[0]['jinbi']>=100 && !$tijilu)
//         {
//                  $yushu=($yaoqing[0]['jinbi']%100);
//                 $tijin=($yaoqing[0]['jinbi']-$yushu)/100;
//                 $jinbi=$yaoqing[0]['jinbi']-$yushu;
//                  // $uid=$value['uid'];   
                 
//                  $result = Db::execute('update fx_yaoqing set money =money+'.$tijin.' where uid = '.$userid.' ');

//                   $results = Db::execute('update fx_yaoqing set jinbi ='.$yushu.' where uid = '.$userid.' ');
                      
//                       $dates=date("Y-m-d H:i:s");
//                       $date=strtotime($dates);
//                      //插入流水表
//                       $appidmap['uid']=$userid;
//                       $appidmap['content']='金币转零钱';
//                         $appidmap['time']=$date;
//                         $appidmap['money']=$tijin;
//                         $appidmap['type']=0;
//                         $appidmap['state']=1;
//                          $appidmap['data']=0;

//                         $appidmapdb=Db::name('yaoqing_records')->insertGetId($appidmap);

//                          //
//                       $appidmaps['uid']=$userid;
//                       $appidmaps['content']='金币转零钱';
//                         $appidmaps['time']=$date;
//                         $appidmaps['money']=$jinbi;
//                         $appidmaps['type']=1;
//                          $appidmaps['data']=1;
//                          $appidmaps['state']=1;

//                         $appidmapdbs=Db::name('yaoqing_records')->insertGetId($appidmaps);
//                   }

//                  }

// }


     
}
