<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 网站首页
Route::get('/', 'index/index');
Route::get('/index', 'index/index');
Route::get('/news', 'index/news');
Route::get('/article/:id', 'index/article');
Route::rule('/contact', 'index/contact', 'GET|POST');
Route::rule('/ueditor', 'ueditor/index', 'GET|POST');

Route::get('/setcache', 'setcache/index');

// 服务接口
Route::group('service', function(){
	// 地址查询
	Route::post('region', 'service/region');
	// 汇率查询
	Route::post('exchange', 'service/exchange');
	// 验证码
	Route::rule('englcap', 'service/englcap', 'GET|POST');
  	Route::rule('captcha', 'service/captcha', 'GET|POST');
	// 短信检查
	Route::post('sms_check', 'service/sms_check');
	// 发送短信
	Route::post('sms', 'service/sms');
});


// 注册账号
Route::rule('signup', 'account/signup', 'GET|POST');
// 账号登陆
Route::rule('signin', 'account/signin', 'GET|POST');
Route::rule('message', 'account/message', 'GET|POST');
// 账号登陆
Route::rule('home', 'account/home', 'GET|POST');
// 忘记密码
Route::rule('forgot', 'account/forgot', 'GET|POST');
Route::rule('password', 'account/password', 'GET|POST');
Route::rule('secpwd', 'account/secpwd', 'GET|POST');
// 退出登陆
Route::rule('signout', 'account/signout', 'GET|POST');
Route::rule('jiefeng', 'account/jiefeng', 'GET|POST');
// 账户接口
Route::group('account', function(){
	// 首页
	Route::get('$', 'account/index');
	Route::get('index', 'account/index');
	// 档案
	Route::rule('profile', 'account/profile', 'GET|POST');
    Route::rule('password', 'account/password', 'GET|POST');
    Route::rule('secpwd', 'account/secpwd', 'GET|POST');

	// 编辑
	Route::post('edit', 'account/edit');
	Route::post('shifang', 'account/shifang');
	Route::post('qiandao', 'account/qiandao');
	// 实名
	Route::rule('authen', 'account/authen', 'GET|POST');
	// 密码
	Route::rule('reset', 'account/reset', 'GET|POST');
	// 安全密码
	Route::rule('safeword', 'account/safeword', 'GET|POST');
	// 检查
	Route::post('check', 'account/check');
  	Route::post('encheck', 'account/encheck');
	// 同步
	Route::post('sync', 'account/sync');
});
Route::rule('financial', 'wallet/financial', 'GET|POST');
Route::rule('zhuanru', 'wallet/zhuanru', 'GET|POST');
Route::rule('zhuanchu', 'wallet/zhuanchu', 'GET|POST');
// 钱包接口
Route::group('wallet', function(){
	// 首页
	Route::get('$', 'wallet/index');
	// 记录
	Route::rule('record', 'wallet/record', 'GET|POST');
});

// 转账接口
Route::group('transfer', function(){
	// 首页
	Route::get('$', 'transfer/index');
	// 提交
	Route::post('post', 'transfer/post');
	// 记录
	Route::post('list', 'transfer/search');
});

// imtoken接口
Route::group('imtoken', function(){
	// 首页
	Route::get('$', 'imtoken/index');
	// 提交
	Route::post('post', 'imtoken/post');
	// 记录
	Route::post('list', 'imtoken/search');
});

// 团队接口
Route::group('team', function(){
	// 首页
	Route::get('$', 'team/index');
	// 成员
	Route::post('member', 'team/member');
	// 邀请
	Route::get('inviter', 'team/inviter');
});

// 市场接口
Route::group('market', function(){
	// 首页
	Route::get('$', 'market/index');
    // 买入
    Route::get('buy', 'market/buying');
    // 卖出
    Route::get('sell', 'market/selling');
    // 列表
	Route::post('list', 'market/search');
	// 今日
	Route::post('overview', 'market/overview');
});
// 交易接口
Route::rule('transaction', 'market/transaction', 'GET|POST');
Route::rule('alipay_pay', 'funding/alipay_pay', 'GET|POST');
Route::rule('upload_credentials', 'funding/upload_credentials', 'GET|POST');
Route::group('trade', function(){
	// 买入
	Route::post('buy', 'market/buy');
	// 卖出
	Route::post('sell', 'market/sell');
	// 行动
	Route::post('action', 'market/action');
	// 系统提示
	Route::post('system', 'market/system');
	// 审判
	Route::post('trial', 'market/trial');
});


// 蚁后接口
Route::group('machine', function(){
	// 首页
	Route::get('$', 'machine/index');
	// 收矿
	Route::post('profit', 'machine/profit');
	Route::post('allprofit', 'machine/allprofit');
	Route::post('buy', 'machine/buy');
});
Route::rule('shop', 'machine/shop', 'GET|POST');
Route::rule('getinfo', 'index/getinfo', 'GET|POST');
Route::rule('setinfo', 'index/setinfo', 'GET|POST');
// 商城接口
Route::post('buy', 'store/buy');
Route::rule('order', 'store/order', 'GET|POST');
Route::group('store', function(){
	// 首页
	Route::get('$', 'store/index');
	// 列表
	Route::post('list', 'store/search');
	// 发布
	Route::rule('publish', 'store/publish', 'GET|POST');
	// 编辑
	Route::rule('edit', 'store/edit', 'GET|POST');
	// 删除
	Route::post('delete', 'store/delete');
	// 更改状态
	Route::post('status', 'store/status');
	// 发货
	Route::post('shipped', 'store/shipped');
	// 确认收货
	Route::post('confirm', 'store/confirm');
	// 商家中心
	Route::get('seller', 'store/seller');
});

// 帮助接口
Route::group('help', function(){
	// 首页
	Route::get('/', 'help/index');
});


// 幸运转盘
Route::rule('turntable', 'event/turntable', 'GET|POST');
// 刮刮乐
Route::rule('scratch', 'event/scratch', 'GET|POST');
// 共享蚁巢
Route::rule('pool', 'event/pool', 'GET|POST');
// 活动接口
Route::group('event', function(){
	// 申请提货
	Route::post('pickup', 'event/pickup');
	// 查看发货
	Route::post('look', 'event/look');
});

// 链上合约
Route::group('contract', function(){
	// 首页
	Route::get('$', 'contract/index');
	// 详情页面
	Route::get(':id', 'contract/detail')->pattern(['id' => '\d+']);
	// 商品列表
	Route::post('list', 'contract/list');
	// 商品详情
	Route::post('preview', 'contract/preview');
	// 商品记录
	Route::post('log', 'contract/log');
	// 买商品
	Route::post('buy', 'contract/buy');
	// 转让商品
	Route::post('transfer', 'contract/transfer');
	// 代理商
	Route::rule('agent', 'contract/agent', 'GET|POST');
	Route::get('agent_log', 'contract/agent_log');
});

// 众筹
Route::group('funding', function(){
	// 首页
	Route::get('$', 'funding/index');
	Route::get('index', 'funding/index');
	// 详情
	Route::get(':id', 'funding/detail')->pattern(['id' => '\d+']);
	// 列表
	Route::post('list', 'funding/list');
	// 详情
	Route::post('preview', 'funding/preview');
	// 记录
	Route::post('log', 'funding/logs');
	// 引导
	Route::get('welcome', 'funding/welcome');
	// 发布
	Route::rule('publish', 'funding/publish', 'GET|POST');
	// 编辑
	Route::rule('edit/:id', 'funding/edit', 'GET|POST')->pattern(['id' => '\d+']);
	// 投资
	Route::post('invest', 'funding/invest');
	// 结束
	Route::post('over', 'funding/over');
});

// 票券接口
Route::group('ticket', function(){
	// 检查
	Route::post('check', 'ticket/check');
});

// 第三方授权
Route::group('oauth', function(){
	// QQ
	Route::group('qq', function(){
		// 登录
		Route::get('login', 'oauth/qq_login');
		// 回调
		Route::get('callback', 'oauth/qq_callback');
	});
});

// 返回结果
return [];
