<?php
namespace app\admin\validate;
use think\Validate;

class Member extends Validate
{
    protected $rule = [
        'user|账户'                         =>      'max:200|alphaDash',
        'mobile|手机'				        =>		'number',
        'nickname|昵称'                     =>      'max:200',
        'money|余额'                        =>		'number',
        'score|积分'                        =>      'number',
        'jingyan|经验值'                    =>      'number',
        'password|密码'                     =>      'min:6'
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