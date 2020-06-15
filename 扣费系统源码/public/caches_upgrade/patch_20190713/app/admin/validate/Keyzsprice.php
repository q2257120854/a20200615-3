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
class Keyzsprice extends AdminBase
{

   protected $rule =   [
        
        'page_one'              => 'require|number',
        'page_two'               => 'require|number',
        'zhisu_range'              => 'require|number',
        'chenben_one' => 'require|number',
        'chenben_two' => 'require|number',
    ];

    // 验证提示
    protected $message  =   [
        
        'page_one.require'              => '第一页价格不能为空',
        'page_one.number'               => '第一页价格必须为数字',
        'page_two.require'               => '第二页价格不能为空',
        'page_two.number'              => '第二页价格必须为数字',
        'zhisu_range.require'               => '指数范围不能为空',
        'zhusu_range.number' => '指数范围必须是数字',
        'chenben_one.require' => '第一页成本价不能为空',
        'chenben_one.number' => '第一页成本价必须为数字',
        'chenben_two.require' => '第二页成本价不能为空',
        'chenben_two.number' => '第二页成本价必须为数字',
    ];

    // 应用场景
    protected $scene = [
        
        'edit' =>  ['page_one','page_two','zhisu_range','chenben_one','chenben_two'],
    ];



}