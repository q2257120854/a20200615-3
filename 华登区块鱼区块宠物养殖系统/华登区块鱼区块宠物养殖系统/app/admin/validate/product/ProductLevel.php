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

class ProductLevel extends Validate
{
    protected $rule = [
        'levelname' => 'require|unique:product_level',
        'level' => 'require|number|unique:product_level',
        'status' => 'require|boolean'
    ];

    protected $message = [
        'levelname.require' => '等级名称不能为空',
        'levelname.unique' => '等级名称不能为重复',
        'level.require' => '等级不能为空',
        'level.number' => '等级必须为数字',
        'level.unique' => '等级不能为重复',
        'status.require' => '状态不能为空',
        'status.boolean' => '状态必须为0或1'

    ];

    protected $scene = [
        'add' => ['levelname', 'level', 'status'],
        'edit' => ['levelname', 'level', 'status'],
    ];
}