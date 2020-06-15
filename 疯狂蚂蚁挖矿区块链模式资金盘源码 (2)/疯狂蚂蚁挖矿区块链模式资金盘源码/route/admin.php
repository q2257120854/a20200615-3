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

// 后台入口
Route::rule('zNYFq8ZfSXHczQBV', 'admin/staff/login', 'GET|POST');

// 网站首页
Route::group('admin', function(){
	// 后台登陆
	Route::get('login', 'admin/staff/login');
	Route::post('login', 'admin/staff/login');
	// 搜索
	Route::get('search', 'admin/index/search');
	// 用户管理
	Route::group('account', function(){
		// 编辑
		Route::rule('edit', 'admin/account/edit', 'GET|POST');
		// 列表
		Route::get('/$', 'admin/account/index');
	});
	// 后台首页
	Route::get('/$', 'admin/index/index');
});



// 返回结果
return [];
