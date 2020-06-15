<?php
// +----------------------------------------------------------------------
// | vaeThink [ Programming makes me happy ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://wwpm.vaeThink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://wwpm.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 听雨 < 389625819@qq.com >
// +---------------------------------------------------------------------
namespace app\common\model\member;
use think\Db;
use think\Model;
use think\Config;
use app\common\model\member\Member;
class MemberIntegrallog extends Model
{
    //列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::order('createtime desc')
        ->where($where)->paginate($rows,false,['query'=>$where])->each(function($item){
            $item['typename'] = self::getTypename($item['type']);
            $item["createtime"] = date("Y-m-d H:i:s", $item["createtime"]);
            if($item['type']==3){
                $ordermember = Member::getMember(['mid' => $item['other_mid']]);
                $item['typename'] .= '（受赠人：'.$ordermember['realname'].'）';
            }
            if($item['type']==4){
                $ordermember = Member::getMember(['mid' => $item['other_mid']]);
                $item['typename'] .= '（'.$ordermember['realname'].'）';
            }
            if($item['integral'] >0){
                $item['integral'] = '+'.$item['integral'];
            }
        })?:[];
        return $list;
    }

    //鱼饵记录
    public static function getList($where=array())
    {
        $list = self::order('createtime desc')
        ->where($where)->select()->each(function($item){
            $item['typename'] = self::getTypename($item['type']);
            $item["createtime"] = date("Y-m-d H:i:s", $item["createtime"]);
            if($item['type']==3){
                $ordermember = Member::getMember(['mid' => $item['other_mid']]);
                $item['typename'] .= '（受赠人：'.$ordermember['realname'].'）';
            }
            if($item['type']==4){
                $ordermember = Member::getMember(['mid' => $item['other_mid']]);
                $item['typename'] .= '（'.$ordermember['realname'].'）';
            }
            if($item['integral'] >0){
                $item['integral'] = '+'.$item['integral'];
            }
        })->toArray()?:[];
        return $list;
    }

    public static function insertLog($param)
    {
        $param['createtime'] = time();
        return self::strict(false)->field(true)->insert($param);
    }

    public static function getTypename($type)
    {
        $typeArr = array(
            '0' => '注册',
            '1' => '预约(捕捞)',
            '2' => '预约失败',
            '3' => '转出',
            '4' => '转入',
            '5' => '付款超时',
            '6' => '捕捞失败',
            '7' => '后台充值',
            '8' => '后台扣除',
            '9' => '充值'
        );
        return $typeArr[$type];
    }


}