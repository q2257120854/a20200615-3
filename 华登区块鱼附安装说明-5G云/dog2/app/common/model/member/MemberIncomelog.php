<?php
// +----------------------------------------------------------------------
// | vaeThink [ Programming makes me happy ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://wwmi.vaeThink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://wwmi.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 听雨 < 389625819@qq.com >
// +---------------------------------------------------------------------
namespace app\common\model\member;
use think\Db;
use think\Model;
use think\Config;
use app\common\model\member\Member;
class MemberIncomelog extends Model
{
    //分页列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::field('mi.*,m.account,m.realname')
        ->alias('mi')
        ->join('member m','mi.mid = m.mid')
        ->order('mi.createtime desc')
        ->where($where)
        ->paginate($rows,false,['query'=>$where])->each(function($item){
            $item["createtime"] = date("Y-m-d H:i:s", $item["createtime"]);
            $item["typename"] = self::getTypename($item['type']);
            $item['integral'] = '+' . $item['income'];
        })?:[];
        return $list;
    }

    //列表
    public static function getList($where, $limit = 100)
    {
        $list = self::field('mi.*,m.account,m.realname')
        ->alias('mi')
        ->join('member m','mi.mid = m.mid')
        ->order('mi.createtime desc')
        ->where($where)
        ->select()->each(function($item){
            $item["createtime"] = date("Y-m-d H:i:s", $item["createtime"]);
        })?:[];
        return $list;
    }

    public static function getlog($id)
    {
        $detail = self::where(['id' => $id])->find();
        if($detail){
            $detail = $detail->toArray();
            return $detail;
        }else{
            return [];
        }
    }

    public static function updatelog($param)
    {
        return self::where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
    }

    public static function insertlog($param)
    {
        return self::strict(false)->field(true)->insert($param);
    }

    public static function deletelog($id)
    {
        self::where('id',$id)->delete();
    }
    
    //获取总和
    public static function getLogSum($where)
    {
        $income = self::where($where)->sum('income');
        return $income;
    }

    public static function getTypename($type)
    {
        $typeArr = array(
            '0' => '合约收益',
            '1' => '推荐收益',
            '2' => '团队收益',
            '3' => '收益转存'
        );
        return $typeArr[$type];
    }


}