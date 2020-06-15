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
    't/:id' => 'article/typeid',
    'a/:id' => 'article/view',
    'u/:id' => 'user/index',




    // 手机
     
     
    'm/a/:id' => 'm/view',
    'm/u/:id' => 'm/user',
    'm/yaoqing'=> 'm/yaoqing',
    'm' => 'm/index',






    // 其他
    'app' => 'index/app',
    'p/:id' => 'article/page',
    'search' => 'article/search',


    // 会员
   // 'login/'                     =>                  'user/login',
    'reg/'                       =>                  'user/reg',
    'pwd/'                       =>                  'user/password',
  //  'member/index'                     =>                  'member/index',
    'member/moneypay'                     =>                  'member/moneypay',
    'member/article'                     =>                  'member/article',
    'member/articleadd'                     =>                  'member/articleadd',
    'member/favoritelist'                     =>                  'member/favoritelist',
    'member/modify'                     =>                  'member/modify',
    'member/nickname'                     =>                  'member/nickname',
    'member/mobile'                     =>                  'member/mobile',
    'member/email'                     =>                  'member/email',
    'member/password'                     =>                  'member/password',
    'member/records'                     =>                  'member/records',
    'member/out'                     =>                  'member/out',
    'member/nickname'                     =>                  'member/nickname',
    'member/nickname'                     =>                  'member/nickname',

    // '__pattern__' => [
    //     'id'    =>  '\d+',
      
    // ],
    // '[article]'     => [
    //     't/:id'   => ['index/article/typeid'],
    //     'a/:id'   => ['article/view', ['method' => 'get']],
    // ],

    // //member 会员
     
    // 'm/' 						=>					'member/index',
    // //aritlce 内容
    // 'a/' 						=>					'article/index',
    // 't/:id' 					=>					'index/article/typeid',
    // 'a/:id'                     =>                  'index/article/view/id',
 


];
