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

namespace app\admin\validate;

/**
 * 折扣验证器
 */
class Discount extends AdminBase
{
    
    // 验证规则
    protected $rule =   [
        
        'rank_id'  => 'require',
        'discount' => 'require',
        
        
    ];

    // 验证提示
    protected $message  =   [
        
        'rank_id.require'    => '级别不能为空',
       
        'discount.require'   => '折扣不能为空',

    ];

    // 应用场景
    protected $scene = [
        
        'add'  =>  ['rank_id','discount'],
  
    ];
    
}
