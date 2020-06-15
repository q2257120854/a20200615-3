<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/19
 * Time: 22:16
 */

namespace app\admin\validate;

/**
 * 菜单验证器
 */
class Weblist extends AdminBase
{

    // 验证规则
    protected $rule =   [

        'web_name'  => 'require',
        'url'        => 'require',
        'id'        => 'require',
    ];

    // 验证提示
    protected $message  =   [

        'web_name.require'    => '请输入网站名称',
        'url.require'    => '请输入网站URL或者熊掌号全称',
        'id.require'    => '参数错误',
    ];

    // 应用场景
    protected $scene = [

        'add'  =>  ['web_name', 'url'],
        'edit'  =>  ['web_name', 'url','id'],
    ];



}