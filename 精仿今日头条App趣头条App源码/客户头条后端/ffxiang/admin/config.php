<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
return [
	// 公共样式
    'view_replace_str'  =>  [
    	'__PUBLIC__'	=>	'/public/',
    	'__STYLE__'		=>	'/public/style/admin/',
	    '__CSS__'		=>	'/public/style/admin/css/',
        '__JS__'		=>	'/public/style/admin/js/', 
        '__IMG__'		=>	'/public/style/admin/img/', 
        '__PLUGINS__'	=>	'/public/style/admin/plugins/', 
        '__IMAGES__'	=>	'/public/uploads/',
        '__IMGERROE__'	=>	'/public/style/admin/img/images.jpg',
	],
	// 动画class
	'adminClass'		=>	[
		'main'			=>	'    ',
		'top'			=>	'  ',
		'left'			=>	'   ',
		'right'			=>	'   ',
	],
	// 第三方接口
	'appkey'			=>	[
		'ip'			=>	'51601367eff4ff5de64633ff127b75e8'		// 接口地址：https://www.juhe.cn/docs/api/id/1
	],
	//分页配置
    'paginate'               => [
        'type'      => 'bootstrap',
        'var_page'  => 'page',
        'list_rows' => 20,
    ],
    'url_route_on'           => false,
];
