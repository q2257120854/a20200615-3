<?php
// +----------------------------------------------------------------------
// | vaeThink [ Programming makes me happy ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://wwmc.vaeThink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://wwmc.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 听雨 < 389625819@qq.com >
// +---------------------------------------------------------------------
namespace app\common\model\member;
use think\Db;
use think\Model;
use think\Config;
class MemberCurrencylog extends Model
{
    //分页列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::field('mc.*,m.account,m.realname')
        ->alias('mc')
        ->join('member m','mc.mid = m.mid')
        ->order('mc.createtime desc')
        ->where($where)
        ->paginate($rows,false,['query'=>$where])->each(function($item){
            $item["createtime"] = date("Y-m-d H:i:s", $item["createtime"]);
            $item["typename"] = self::getTypename($item['type']);
            $item['currency'] = '+' . $item['currency'];
        })?:[];
        return $list;
    }

    //列表
    public static function getList($where)
    {
        $list = self::field('mc.*,m.account,m.realname')
        ->alias('mc')
        ->join('member m','mc.mid = m.mid')
        ->order('mc.createtime desc')
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
        $income = self::where($where)->sum('currency');
        return $income;
    }

    public static function getTypename($type)
    {
        $typeArr = array(
            '0' => 'BST虚拟币',
            '1' => 'OCN幣'
        );
        return $typeArr[$type];
    }


}