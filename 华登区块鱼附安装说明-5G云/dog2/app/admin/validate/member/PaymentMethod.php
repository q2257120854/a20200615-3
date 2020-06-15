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

class PaymentMethod extends Validate
{
    protected $rule = [
        'type' => 'require|number',
        'titleofaccount' => 'require',
        'account' => 'require',
        //'paymentcode_file' => 'image',
        'verifycode' => 'require',
        'ispaymentcode' => 'require|boolean'
    ];

    protected $message = [
        'type.require' => '类型不能为空',
        'type.number' => '类型不能为空',
        'titleofaccount.require' => '账户名称不能为空',
        'account.require' => '账户不能为空',
        //'paymentcode_file.image' => '请上传收款二维码图片',
        'verifycode.require' => '验证码不能为空',
        'ispaymentcode.require' => '是否上传收款二维码不能为空',
        'ispaymentcode.boolean' => '是否上传收款二维码必须为0或1',

    ];

    protected $scene = [
        'add' => ['type', 'titleofaccount', 'account', 'paymentcode_file', 'verifycode'],


    ];
}