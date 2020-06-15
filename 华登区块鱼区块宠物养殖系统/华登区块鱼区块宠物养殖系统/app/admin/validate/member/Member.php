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

class Member extends Validate
{
    protected $rule = [
        'account' => 'require',
        'pwd' => 'require|length:6,12|alphaNum',
        'pwd2' => 'require|length:6|number',
        'nickname' => 'chsAlphaNum',
        'integral' => 'number',
        'bst_currency' => 'float',
        'ocn_currency' => 'float',
        'recommend_income' => 'number',
        'team_income' => 'number',
        'income_transferred' => 'number',
        'level' => 'require|number',
        'realname' => 'chs',
        'idnum' => 'length:18',
        'parent_mid' => 'number',
        'is_idverifly' => 'require|number',
        'is_promoter' => 'require|boolean',
        'is_activation' => 'require|boolean',
        'status' => 'require|boolean',

        'repwd' => 'require|confirm:pwd',
        'repwd2' => 'require|confirm:pwd2',
        'verifycode' => 'require'
    ];

    protected $message = [
        'account.require' => '会员账号不能为空',
        'account.unique' => '会员账号不能为重复',
        'pwd.require' => '会员密码不能为空',
        'pwd.length' => '会员密码必须6~12字母和数字',
        'pwd.alphaNum' => '会员密码必须6~12字母和数字',
        'pwd2.require' => '二级密码不能为空',
        'pwd2.length' => '二级密码必须6数字',
        'pwd2.number' => '二级密码必须6数字',
        'nickname.chsAlphaNum' => '会员昵称必须为汉字、字母和数字',
        'integral.number' => '鱼饵必须为数字',
        'bst_currency.float' => 'BST虚拟币必须为数字',
        'ocn_currency.float' => 'OCN幣必须为数字',
        'recommend_income.number' => '推荐收益必须为数字',
        'team_income.number' => '团队收益必须为数字',
        'income_transferred.number' => '收益转存必须为数字',
        'level.require' => '等级不能为空',
        'level.number' => '等级必须为数字',
        'realname.chs' => '真实姓名必须为中文',
        'idnum.length' => '身份证号码格式有误',
        'parent_mid.number' => '推荐人ID必须为数字',
        'is_idverifly.require' => '是否实名不能为空',
        'is_idverifly.number' => '是否实名必须为数字',
        'is_promoter.require' => '是否为推广员不能为空',
        'is_promoter.boolean' => '是否为推广员必须为0或1',
        'is_activation.require' => '是否激活不能为空',
        'is_activation.boolean' => '是否激活必须为0或1',
        'status.require' => '状态不能为空',
        'status.boolean' => '状态必须为0或1',

        'repwd.require' => '确认密码不能为空',
        'repwd.confirm' => '两次密码不一致',
        'repwd2.require' => '二级密码不能为空',
        'repwd2.confirm' => '两次二级密码不一致',
        'verifycode.require' => '验证码不能为空',


    ];

    protected $scene = [
        'add' => ['nickname', 'account', 'pwd', 'pwd2', 'realname', 'idnum', 'is_idverifly', 'integral', 'bst_currency', 'ocn_currency', 'recommend_income', 'team_income', 'income_transferred', 'parent_mid', 'level', 'is_promoter', 'is_activation', 'status'],
        'edit' => ['realname', 'idnum', 'is_idverifly', 'bst_currency', 'ocn_currency', 'recommend_income', 'team_income', 'income_transferred', 'parent_mid', 'level'],
        'reg' => ['nickname', 'account', 'pwd', 'repwd', 'pwd2', 'repwd2', 'verifycode'],
        'forgetpwd' => ['pwd', 'repwd', 'verifycode'],
        'realname' => ['realname', 'idnum'],
        'changepwd' => ['pwd', 'repwd', 'verifycode'],
        'changepwd2' => ['pwd2', 'repwd2', 'verifycode'],
    ];
}