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

class Product extends Validate
{

    protected $rule = [
        'cate_id' => 'require|number',
        'num' => 'require|number',
        'status' => 'require|number'

    ];

    protected $message = [
        'cate_id.require' => '品种不能为空',
        'cate_id.number' => '品种ID必须为数字',
        'num.require' => '数量不能为空',
        'num.number' => '数量必须为数字',
        'status.require' => '状态不能为空',
        'status.number' => '状态必须为数字'
    ];

    protected $scene = [
        'add' => ['cate_id', 'num', 'status'],
        'edit' => ['cate_id',  'status'],
    ];

}