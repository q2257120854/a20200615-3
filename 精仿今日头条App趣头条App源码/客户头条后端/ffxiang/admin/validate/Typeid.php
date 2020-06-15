<?php
namespace app\admin\validate;
use think\Validate;

class Typeid extends Validate
{
    protected $rule = [

        'title|栏目名称'				    =>		'require|max:100',
        'hide|是否隐藏'                      =>		'require|number',
        'tid|菜单排序'                      =>		'require|number',
    ];
    // protected $message  =   [
    //     'title.require'			=>		'菜单名称不能为空',
    //     'title.max'				=>		'菜单名称最多不能超过50个字符',
    //     'title.unique'			=>		'菜单名称已存在',
    //     'tid.require'			=>		'tid字段值错误',
    //     'tid.number'			=>		'tid字段值错误',
    //     'des.number'			=>		'排序必须是数字',
    //     'module.alpha'			=>		'模块命名必须是字母',
    //     'controller.alpha'		=>		'控制器命名必须是字母',
    //     'function.alpha'		=>		'函数必须是字母',
    // ];

}