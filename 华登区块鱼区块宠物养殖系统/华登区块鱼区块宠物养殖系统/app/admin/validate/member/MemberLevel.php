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

class MemberLevel extends Validate
{
    protected $rule = [
        'levelname' => 'require|unique:member_level',
        'level' => 'require|number|unique:member_level',
        'down' => 'require|number',
        'threedown' => 'require|number',
        'commission' => 'require|number',
        'team_size' => 'require|number',
        'discount' => 'require|number',
        'service_award' => 'require|number'
    ];

    protected $message = [
        'levelname.require' => '等级名称不能为空',
        'levelname.unique' => '等级名称必须唯一',
        'level.require' => '等级不能为空',
        'level.number' => '等级必须为数字',
        'level.unique' => '等级必须唯一',
        'down.require' => '直推有效客户不能为空',
        'down.number' => '直推有效客户必须为数字',
        'threedown.require' => '三代之内有效客户不能为空',
        'threedown.number' => '三代之内有效客户必须为数字',
        'commission.require' => '个人推广奖励不能为空',
        'commission.number' => '个人推广奖励必须为数字',
        'team_size.require' => '团队人数不能为空',
        'team_size.number' => '个人推广奖励必须为数字',
        'discount.require' => '鱼饵优惠不能为空',
        'discount.number' => '鱼饵优惠必须为数字',
        'service_award.require' => '团队服务奖励不能为空',
        'service_award.number' => '团队服务奖励必须为数字'
    ];

    protected $scene = [
        'add' => ['levelname', 'level', 'down', 'threedown', 'commission', 'team_size', 'discount', 'service_award'],
        'edit' => ['levelname', 'level', 'down', 'threedown', 'commission', 'team_size', 'discount', 'service_award']
    ];
}