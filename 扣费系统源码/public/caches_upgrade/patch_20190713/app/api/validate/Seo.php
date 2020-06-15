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

namespace app\api\validate;

/**
 * 会员验证器
 */
class Seo extends ApiBase
{
    
    // 验证规则
    protected $rule = [
        'taskid'  => 'require',
        'keyword'  => 'require',
        'search_engine'  => 'require',
        'url'  => 'require',
        'rank'  => 'require',
    ];

    // 验证提示
    protected $message = [
        'taskid.require'    => '用户名不能为空',
        'keyword.require'    => '密码不能为空',
        'search_engine.require'    => '密码不能为空',
        'url.require'    => '密码不能为空',
        'rank.require'    => '密码不能为空',
    ];

    // 应用场景
    protected $scene = [
        
        'vaildate'  =>  ['taskid','keyword','search_engine','url'],
    ];
}
