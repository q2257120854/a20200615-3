<?php
// +----------------------------------------------------------------------
// | vaeThink [ Programming makes me happy ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://wwma.vaeThink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://wwma.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 听雨 < 389625819@qq.com >
// +---------------------------------------------------------------------
namespace app\common\model\member;
use think\Db;
use think\Model;
use think\Config;
use app\common\model\member\Member;
class MemberAssetsalelog extends Model
{
    //分页列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::field('ma.*,m.account')
        ->alias('ma')
        ->join('member m','ma.mid = m.mid')
        ->order('ma.createtime desc')
        ->where($where)
        ->paginate($rows,false,['query'=>$where])->each(function($item){
            $item["createtime"] = date("Y-m-d H:i:s", $item["createtime"]);
        })?:[];
        return $list;
    }

    //列表
    public static function getList($where, $limit = 100)
    {
        $list = self::field('ma.*,m.account')
        ->alias('ma')
        ->join('member m','ma.mid = m.mid')
        ->order('ma.createtime desc')
        ->where($where)
        ->select()->each(function($item){
            $item["createtime"] = date("Y-m-d H:i:s", $item["createtime"]);
        })?:[];
        return $list;
    }

    public static function getlog($where)
    {
        $detail = self::where($where)->whereTime('createtime', 'today')->find();
        if($detail){
            $detail = $detail->toArray();
        }else{
            $detail = [];
        }
        return $detail;
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

    public static function getLogCount($where)
    {
        $count = self::where($where)->whereTime('createtime', 'today')->count();
        return $count;
    }


}