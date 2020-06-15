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
class Keyword extends AdminBase
{

    // 验证规则
    protected $rule =   [

        'id'  => 'require',
        'keywords'        => 'require',
        'page_one'        => 'require',
        //-------------------充值
        'userid'  => 'require',
        'price'  => 'require',
        //--------------------补录
        'keyword_id'=> 'require',
        'search_engine'=> 'require',
        'rand'=> 'require',
        'page'=> 'require',
        'create_time'=>'require'
    ];

    // 验证提示
    protected $message  =   [

        'id.require'    => '参数错误',
        'keywords.require'    => '关键词不能为为空',
        'page_one.require'    => '第一页价格不能为空',
        //-------------------充值
        'userid.require'    => '请输入用户id',
        'price.require'    => '请输入充值金额',
        //--------------------补录
        'keyword_id.require'    => '关键词ID错误',
        'search_engine.require'    => '浏览器错误',
        'page.require'    => '选择排名页数',
        'rand.require'    => '输入排名',
        'create_time.require'    => '请选择补录时间',
    ];

    // 应用场景
    protected $scene = [

        'edit'  =>  ['id', 'keywords','page_one'],
        'chongzhi'  =>  ['userid', 'price'],

        'bulu'  =>  ['keyword_id', 'search_engine', 'page', 'rand', 'create_time'],

    ];



}