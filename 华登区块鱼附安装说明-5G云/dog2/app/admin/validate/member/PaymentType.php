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
namespace app\admin\validate\member;
use think\Validate;
use think\Db;

class PaymentType extends Validate
{
    protected $rule = [
        'name' => 'require',
        'logo' => 'require',
        'ispaymentcode' => 'require|boolean',
        'status' => 'require|boolean'
    ];

    protected $message = [
        'name.require' => '名称不能为空',
        'logo.require' => 'LOGO不能为空',
        'ispaymentcode.require' => '是否上传收款二维码不能为空',
        'ispaymentcode.boolean' => '是否上传收款二维码必须为0或1',
        'status.require' => '状态不能为空',
        'status.boolean' => '状态必须为0或1',

    ];

    protected $scene = [
        'edit' => ['name', 'logo', 'ispaymentcode', 'status'],
    ];
}