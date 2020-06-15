<?php
// +----------------------------------------------------------------------
// | vaeThink [ Programming makes me happy ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://wwmr.vaeThink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://wwmr.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 听雨 < 389625819@qq.com >
// +---------------------------------------------------------------------
namespace app\common\model\member;
use think\Db;
use think\Model;
use think\Config;
use app\common\model\member\Member;
class MemberRechargelog extends Model
{
    //分页列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::field('mr.*,m.account,m.realname')
        ->alias('mr')
        ->join('member m','mr.mid = m.mid')
        ->order('mr.createtime desc')
        ->where($where)
        ->paginate($rows,false,['query'=>$where])->each(function($item){
            $item['payment_voucher'] = url($item['payment_voucher'], '', '', true);
            $item["createtime"] = date("Y-m-d H:i:s", $item["createtime"]);
        })?:[];
        return $list;
    }

    //列表
    public static function getList($where, $limit = 100)
    {
        $list = self::field('mr.*,m.account,m.realname')
        ->alias('mr')
        ->join('member m','mr.mid = m.mid')
        ->order('mr.createtime desc')
        ->where($where)
        ->select()->each(function($item){
            $item['payment_voucher'] = url($item['payment_voucher'], '', '', true);
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

    public static function getSum($where = array())
    {
        $sum = self::where($where)->whereTime('createtime', 'today')->sum('realintegral');
        return intval($sum);
    }

    public static function getCount($where = array())
    {
        return $list = self::where($where)->count();
    }

}