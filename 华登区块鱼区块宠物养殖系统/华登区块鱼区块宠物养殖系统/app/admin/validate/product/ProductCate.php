<?php
// +----------------------------------------------------------------------
// | vaeThink [ Programming makes me happy ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://www.vaeThink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 听雨 < 389625819@qq.com >
// +---------------------------------------------------------------------
namespace app\admin\validate\product;
use think\Validate;
use think\Db;

class ProductCate extends Validate
{

    protected $rule = [
        'catename' => 'require',
        'level_id' => 'require|number',
        'sort' => 'require|number',
        'adopt_time' => 'require',
        'appointment_integral' => 'require|number',
        'adopt_integral' => 'require|number',
        'cycle' => 'require|number',
        'figure' => 'require|float',
        'bst_currency' => 'require|float',
        'ocn_figure' => 'require|float',
        'isincome_transferred' => 'require|boolean',
        'isauto' => 'require|boolean',

        'status' => 'require|number'
    ];

    protected $message = [
        'catename.require' => '品种不能为空',
        'level_id.require' => '等级不能为空',
        'level_id.number' => '等级ID必须为数字',
        'sort.require' => '排序不能为空',
        'sort.number' => '排序必须为数字',
        'adopt_time.require' => '捕捞时间不能为空',
        'appointment_integral.require' => '预约鱼饵不能为空',
        'appointment_integral.number' => '预约鱼饵必须为数字',
        'adopt_integral.require' => '捕捞鱼饵不能为空',
        'adopt_integral.number' => '捕捞鱼饵必须为数字',
        'cycle.require' => '合约收益天数不能为空',
        'cycle.number' => '合约收益天数必须为数字',
        'figure.require' => '收益不能为空',
        'figure.float' => '收益必须为数字',
        'bst_currency.require' => 'BST虚拟币不能为空',
        'bst_currency.float' => 'BST虚拟币必须为数字',
        'ocn_figure.require' => 'OCN幣收益比例不能为空',
        'ocn_figure.float' => 'OCN幣收益比例必须为数字',
        'isincome_transferred.require' => '收益转存不能为空',
        'isincome_transferred.boolean' => '收益转存必须为0或1',
        'isauto.require' => '分配方式不能为空',
        'isauto.boolean' => '分配方式必须为0或1',
        'status.require' => '状态不能为空',
        'status.number' => '状态必须为数字'
    ];

    protected $scene = [
        'add' => ['catename', 'level_id', 'sort', 'adopt_time', 'appointment_integral', 'adopt_integral', 'cycle', 'figure' , 'bst_currency', 'ocn_figure', 'isincome_transferred', 'isauto', 'status'],
        'edit' => ['catename', 'level_id', 'sort', 'adopt_time', 'appointment_integral', 'adopt_integral', 'cycle', 'figure' , 'bst_currency', 'ocn_figure', 'isincome_transferred', 'isauto', 'status'],

    ];

}