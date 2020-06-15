<?php

namespace app\admin\controller;

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

	public function initialize()
	{
		// 请求对象
		$req = request();
		// 无需登录的方法
		$except = ['Staff/login'];
		// 当前路由
		$current = $req->controller() . '/' . $req->action();
		// 隐秘入口
		$enter = config('hello.admin.enter');
		if (!empty($enter) && !session('?staff') && $req->path() != $enter) {
			header('HTTP/1.1 404 Not Found');
			exit;
		}
		// 没有Session、需要进行检测
		if (!session('?staff') && !in_array($current, $except)) {
			header('Location: /admin/login.html?from=' . urlencode($req->url(true)));
			exit;
		}
	}

	public function log($type, $username, $text = null)
	{
		$req = request();
		$data = [
			'username'	=>	$username,
			'type'		=>	$type,
			'text'		=>	$text,
			'ip'		=>	$req->ip(),
			'ua'		=>	$req->header('user-agent'),
			'create_at'	=>	$this->timestamp,
		];
		Db::table('log')->insert($data);
	}
}