<?php

namespace app\index\controller;

use think\Db;
use think\Controller;

class Base extends Controller
{

	public $timestamp;

	public function __construct()
	{
		parent::__construct();
		$this->timestamp = date('Y-m-d H:i:s');
	}

	private function toast($message = '很抱歉、请重新登录！')
	{
		$json = json_encode([
			'code'		=>	403,
			'message'	=>	$message
		]);
		header('Content-Type: application/json; charset=utf-8');
		echo $json;
		exit;
	}

	public function initialize()
	{
		// 请求对象
		$req = request();
		// 来自APP
		$from = $req->param('from');
		if ($from == 'app') {
			// 设置Cookie
			cookie('platform', 'app', 86400 * 7);
			session('platform', 'app');
		}
		// 无需登录的方法
		$except = ['Index/index', 'Account/signin',  'Index/getinfo','Index/setinfo', 'Account/signup','Account/encheck', 'Account/check', 'Account/forgot', 'Service/exchange', 'Service/sms', 'Service/sms_check', 'Service/captcha','Service/englcap', 'Oauth/qq_login', 'Oauth/qq_callback'];
		// 当前路由
		$current = $req->controller() . '/' . $req->action();
		// 没有Session、需要进行检测

		if (!session('?staff') && !session('?user') && !in_array($current, $except)) {
			if ($req->isPost()) {
				$this->toast();
				exit;
			} else {
				header('Location: /signin.html?from=' . urlencode($req->url(true)));
				exit;
			}
		}
      	if(session('user') && session('user')['account']['status']==0){
            session('user', null);
            session('staff', null);
            header('Location: /signin.html');
            exit;
        }
		// 所在平台
		$ua = strtolower($req->header('user-agent'));
		if (stripos($ua, 'iphone') !== false) {
			$this->assign('platform', 'ios');
		} else if (stripos($ua, 'window') !== false) {
			$this->assign('platform', 'pc');
		} else {
			$this->assign('platform', 'android');
		}
	}

	public function log($type, $text = null, $username = null)
	{
		$req = request();
		$data = [
			'username'	=>	$username ?: session('user.account.username'),
			'type'		=>	$type,
			'text'		=>	$text,
			'ip'		=>	$req->ip(),
			'ua'		=>	$req->header('user-agent'),
			'create_at'	=>	$this->timestamp,
		];
		Db::table('log')->insert($data);
	}
}