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
    	'__STYLE__'		=>	'/public/style/index/',
	    '__CSS__'		=>	'/public/style/index/css/',
        '__JS__'		=>	'/public/style/index/js/',
        '__JSA__'        =>  '/public/style/admin/js/', 
        '__IMG__'		=>	'/public/style/index/img/', 
        '__P__'	=>	'/public/style/index/plugins/', 
        '__IMAGES__'	=>	'/public/uploads/',
        '__IMGERROE__'	=>	'/public/style/index/img/images.jpg',
        '__PUBLICA__'    =>  '/public/',
        '__STYLEA__'     =>  '/public/style/admin/',
        '__CSSA__'       =>  '/public/style/admin/css/',
        '__JSA__'        =>  '/public/style/admin/js/', 
        '__IMGA__'       =>  '/public/style/admin/img/', 
        '__PLUGINSA__'   =>  '/public/style/admin/plugins/', 
	],
    // 应用Trace
    'app_trace'              => false,
    // 默认控制器名
    'default_controller'     => 'Article',
];
