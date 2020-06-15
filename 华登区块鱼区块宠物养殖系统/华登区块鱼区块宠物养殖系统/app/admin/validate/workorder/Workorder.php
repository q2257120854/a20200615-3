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
namespace app\admin\validate\workorder;
use think\Validate;
use think\Db;

class Workorder extends Validate
{
    protected $rule = [
        'type' => 'require|number',
        'contact' => 'require',
        'title' => 'require',
    ];

    protected $message = [
        'type.require' => '工單类型错误',
        'type.number' => '工單类型错误',
        'contact.require' => '聯繫信息不能为空',
        'title.require' => '工單標題不能为空'
    ];

    protected $scene = [
        'add' => ['type', 'contact', 'title'],

    ];
}