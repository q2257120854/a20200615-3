<?php

namespace app\index\controller;

use think\Db;
use think\Request;

class Oauth extends Base
{

	/**
	 * 平台类型
	 */
	const PLATFORM_WECHAT = 1;
	const PLATFORM_QQ = 2;


	// +----------------------------------------------------------------------
    // | 内部方法
    // +----------------------------------------------------------------------

	/**
	 * 获取档案
	 */
    public function profile($platform, $appid, $openid)
    {
    	$oauth = Db::table('oauth')->where('platform', '=', $platform)->where('appid', '=', $appid)->where('openid', '=', $openid)->find();
    	return $oauth;
    }

    /**
	 * 查询资料
	 */
    public function find($platform, $appid, $username)
    {
    	$oauth = Db::table('oauth')->where('platform', '=', $platform)->where('appid', '=', $appid)->where('username', '=', $username)->find();
    	return $oauth;
    }

    /**
     * 创建资料
     */
    public function create($platform, $appid, $openid, $unionid, $profile = [])
    {
		// 创建资料
    	$data = array_merge([
    		'platform'		=>	$platform,
    		'appid'			=>	$appid,
    		'openid'		=>	$openid,
    		'unionid'		=>	$unionid,
    		'username'		=>	null,
    		'avatar'		=>	null,
    		'nickname'		=>	null,
    		'gender'		=>	null,
    		'province'		=>	null,
    		'city'			=>	null,
    		'county'		=>	null,
    		'create_at'		=>	$this->timestamp,
    		'update_at'		=>	$this->timestamp,
    	], $profile);
    	$bool = Db::table('oauth')->insert($data);
    	// 返回结果
    	return empty($bool) ? false : true;
    }

	/**
	 * 更新资料
	 */
    public function update($oid, $profile = [])
    {
		// 更新资料
		$profile['update_at'] = $this->timestamp;
    	$bool = Db::table('oauth')->where('oid', '=', $oid)->update($profile);
    	// 返回结果
    	return empty($bool) ? false : true;
    }

    /**
     * 绑定用户
     */
    public function bind($oid, $username)
    {
    	// 是否存在
    	$oauth = Db::table('oauth')->where('oid', '=', $oid)->find();
    	if (empty($oauth)) {
    		throw new \think\Exception("很抱歉、第三方授权信息不存在！");
    	}
    	// 已绑定
    	if (!empty($oauth['username'])) {
    		throw new \think\Exception("很抱歉、第三方授权信息已被绑定！");
    	}
    	// 绑定账号
    	$bool = Db::table('oauth')->where('oid', '=', $oid)->update([
    		'username' 	=> $username,
    		'update_at'	=>	$this->timestamp
    	]);
    	if (empty($bool)) {
    		throw new \think\Exception("很抱歉、第三方授权信息绑定失败！");
    	}
    	// 返回结果
    	return $oauth;
    }

	// +----------------------------------------------------------------------
    // | 对外接口
    // +----------------------------------------------------------------------

	/**
	 * QQ登录
	 */
	public function qq_login(Request $req)
	{
		// 获取配置
		$config = config('hello.oauth.qq');
		if (empty($config) || !array_key_exists('enable', $config) || empty($config['enable'])) {
			$this->error('很抱歉、系统并未开启QQ登录！');
			exit;
		}
		// 来路地址
		$from = empty($_SERVER["HTTP_REFERER"]) ? $req->domain() . '/signin.html' : $_SERVER["HTTP_REFERER"];
		// 基本信息
		$appid = $config['appid'];
		$appkey = $config['appkey'];
		// Step1：获取Authorization Code
		$param = http_build_query([
			'response_type'		=>	'code',
			'client_id'			=>	$appid,
			'redirect_uri'		=>	$req->domain() . '/oauth/qq/callback.html',
			'state'				=>	$from,
			'scope'				=>	'get_user_info',
		]);
		$this->redirect('https://graph.qq.com/oauth2.0/authorize?'.$param);
		exit;
	}

	/**
	 * QQ回调
	 */
	public function qq_callback(Request $req)
	{
		// 获取配置
		$config = config('hello.oauth.qq');
		if (empty($config) || !array_key_exists('enable', $config) || empty($config['enable'])) {
			$this->error('很抱歉、系统并未开启QQ登录！');
			exit;
		}
		// 基本信息
		$appid = $config['appid'];
		$appkey = $config['appkey'];
		// 获取参数
		$code = $req->param('code');
		if (empty($code)) {
			$this->error('很抱歉、请提供Code！');
			exit;
		}
		$state = $req->param('state');
		if (empty($state)) {
			$this->error('很抱歉、请提供State！');
			exit;
		}
		$from = urldecode($state);
		// Step2：通过Authorization Code获取Access Token
		$url = 'https://graph.qq.com/oauth2.0/token';
		$param = http_build_query([
			'grant_type'		=>	'authorization_code',
			'client_id'			=>	$appid,
			'client_secret'		=>	$appkey,
			'code'				=>	$code,
			'redirect_uri'		=>	$req->domain() . '/oauth/qq/callback.html',
		]);
		// access_token=B6A692F68CAF7E7F7833D6B57F19BFCD&expires_in=7776000&refresh_token=E0B9709D26A0A74600D35F9957DE8AED
		$string = get($url . '?' . $param);
		if (empty($string)) {
			$this->error('很抱歉、获取AccessToken失败请重试！');
			exit;
		}
		$atarr = [];
		parse_str($string, $atarr);
		if (empty($atarr) || count($atarr) != 3) {
			$this->error('很抱歉、错误的AccessToken返回值！');
			exit;
		}
		// 获取用户OpenID_OAuth2.0
		$url = 'https://graph.qq.com/oauth2.0/me';
		$param = http_build_query([
			'access_token'		=>	$atarr['access_token'],
		]);
		// callback( {"client_id":"101475973","openid":"A9745831A4D4F33670283ED425816B84"} );
		$string = get($url . '?' . $param);
		if (empty($string)) {
			$this->error('很抱歉、获取OpenID失败请重试！');
			exit;
		}
		$oparr = jsonp_decode($string, true);
		if (empty($oparr)) {
			$this->error('很抱歉、错误的OpenID返回值！');
			exit;
		}
		$openid = $oparr['openid'];
		// 查询账号
		$profile = $this->profile(self::PLATFORM_QQ, $appid, $openid);
		// 拉取资料、没有档案或一周未更新
		$qquser = null;
		if (empty($profile) || time() - strtotime($profile['update_at']) > 86400 * 7) {
			// 获取用户信息
			$url = 'https://graph.qq.com/user/get_user_info';
			$param = http_build_query([
				'access_token'		=>	$atarr['access_token'],
				'oauth_consumer_key'=>	$appid,
				'openid'			=>	$openid,
			]);
			$json = get($url . '?' . $param);
			if (empty($json)) {
				$this->error('很抱歉、获取信息失败请重试！');
				exit;
			}
			$qquser = json_decode($json, true);
			if (empty($qquser)) {
				$this->error('很抱歉、错误的QQ信息！');
				exit;
			}
			// qquser 的内容如下
			/*array(18) {
				"ret"					=>		0
				"msg"					=>		"",
				"is_lost"				=>		0
				"nickname"				=>		"昵称",
				"gender"				=>		"男",
				"province"				=>		"省",
				"city"					=>		"市",
				"year"					=>		"1991",
				"figureurl"				=>		"http://qzapp.qlogo.cn/qzapp/101475973/A9745831A4D4F33670283ED425816B84/30",
				"figureurl_1"			=>		"http://qzapp.qlogo.cn/qzapp/101475973/A9745831A4D4F33670283ED425816B84/50",
				"figureurl_2"			=>		"http://qzapp.qlogo.cn/qzapp/101475973/A9745831A4D4F33670283ED425816B84/100",
				"figureurl_qq_1"		=>		"http://thirdqq.qlogo.cn/qqapp/101475973/A9745831A4D4F33670283ED425816B84/40",
				"figureurl_qq_2"		=>		"http://thirdqq.qlogo.cn/qqapp/101475973/A9745831A4D4F33670283ED425816B84/100",
				"is_yellow_vip"			=>		"0",
				"vip"					=>		"0",
				"yellow_vip_level"		=>		"0",
				"level"					=>		"0",
				"is_yellow_year_vip"	=>		"0",
			}*/
		}
		// 创建账号
		if (empty($profile)) {
			// 基本资料
			$oid = md5(self::PLATFORM_QQ . $appid . $openid);
			$avatar = $qquser['figureurl_qq_2'] ?: $qquser['figureurl_2'];
			$nickname = $qquser['nickname'];
			// 保存资料
			$bool = $this->create(self::PLATFORM_QQ, $appid, $openid, null, [
				'oid'			=>	$oid,
				'avatar'		=>	$avatar,
				'nickname'		=>	$qquser['nickname'],
				'gender'		=>	$qquser['gender'] == '男' ? 1 : 2,
				'province'		=>	$qquser['province'],
				'city'			=>	$qquser['city'],
			]);
			if (empty($bool)) {
				$this->error('很抱歉、更新个人资料失败！');
				exit;
			}
		} else {
			// 基本资料
			$oid = $profile['oid'];
			$avatar = $profile['avatar'];
			$nickname = $profile['nickname'];
			// 更新资料
			if (!empty($qquser)) {
				// 基本资料
				$avatar = $qquser['figureurl_qq_2'] ?: $qquser['figureurl_2'];
				$nickname = $qquser['nickname'];
				// 更新资料
				$bool = $this->update($oid, [
					'avatar'		=>	$avatar,
					'nickname'		=>	$qquser['nickname'],
					'gender'		=>	$qquser['gender'] == '男' ? 1 : 2,
					'province'		=>	$qquser['province'],
					'city'			=>	$qquser['city'],
				]);
				if (empty($bool)) {
					$this->error('很抱歉、更新个人资料失败！');
					exit;
				}
			}
			// 已经绑定了账号，说明一定不是注册
			if (!empty($profile['username'])) {
				// 判断来路，如果是登录或注册，那么直接去首页
				if (stripos($from, 'signin') || stripos($from, 'signup')) {
					try {
						// 快速登录
						(new Account())->quick_login($profile['username']);
						// 操作日志
						$this->log(16);
					} catch (\Exception $e) {
						$this->error($e->getMessage());
						exit;
					}
					// 直接去首页
					$this->redirect('/account.html');
					exit;
				}
			}
		}
		// 页面跳转，分为以下几个情况
		// 情况一：注册
		if (!session('?user') && (empty($profile) || empty($profile['username']))) {
			// 没有登录的情况下，档案不存在，或档案中没有绑定用户，说明是注册
			// 跳转注册
			$param = http_build_query([
				'avatar'	=>	$avatar,
				'nickname'	=>	$qquser['nickname'],
				'o'			=>	$oid,
			]);
			if (stripos($from, '?')) {
				$this->redirect($from . '&' . $param);
			} else {
				$this->redirect($from . '?' . $param);
			}
		}
		// 情况二：登录
		else if (!session('?user') && !empty($profile) && !empty($profile['username'])) {
			// 没有登录的情况下，档案存在，且档案中绑定了用户，说明是登录
			try {
				// 快速登录
				(new Account())->quick_login($profile['username']);
				// 操作日志
				$this->log(16);
			} catch (\Exception $e) {
				$this->error($e->getMessage());
				exit;
			}
			// 直接去首页
			$this->redirect('/account.html');
			exit;
		}
		// 情况三：绑定
		else if (session('?user') && (empty($profile) || empty($profile['username']))) {
			// 已经登录的情况下，档案不存在，或是档案里没有用户，说明是绑定
			$username = session('user.account.username');
			try {
				$this->bind($oid, $username);
			} catch (\Exception $e) {
				$this->error($e->getMessage());
				exit;
			}
			// 跳回来路
			$this->redirect($from);
			exit;
		}
		// 其他情况
		else {
			// 跳回来路
			$this->redirect($from);
			exit;
		}
		exit;
	}
}