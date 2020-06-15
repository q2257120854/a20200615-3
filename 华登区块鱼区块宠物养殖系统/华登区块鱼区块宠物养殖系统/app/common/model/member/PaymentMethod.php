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
use app\common\model\member\PaymentType;
class PaymentMethod extends Model
{
    //分页列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::
        field('pm.*,pt.name as typename,pt.logo')
        ->alias('pm')
        ->join('payment_type pt','pm.type = pt.id')
        ->where($where)
        ->paginate($rows,false,['query'=>$where])->each(function($item){
            $item['logo'] = url($item['logo'], '', '', true);
            $item['paymentcode'] = $item['paymentcode'] ? url($item['paymentcode'], '', '', true) : $item['paymentcode'];
            $item["add_time"] = date("Y-m-d H:i:s", $item["add_time"]);
        })?:[];
        return $list;
    }

    //列表
    public static function getList($where, $limit = 100)
    {
        $list = self::field('pm.*,pt.name as typename,pt.logo')
        ->alias('pm')
        ->join('payment_type pt','pm.type = pt.id')
        ->order('pm.status desc')
        ->limit($limit)
        ->where($where)->select()->each(function($item){
            $item['logo'] = url($item['logo'], '', '', true);
            $item['paymentcode'] = $item['paymentcode'] ? url($item['paymentcode'], '', '', true) : $item['paymentcode'];
            $item["add_time"] = date("Y-m-d H:i:s", $item["add_time"]);
        })->toArray()?:[];
        return $list;
    }

    public static function getMethod($where)
    {
        $detail = self::
            field('pm.*,pt.name as typename,pt.logo')
            ->alias('pm')
            ->join('payment_type pt','pm.type = pt.id')
            ->where($where)->find()->toArray();
        return $detail;
    }

    public static function getCount($where = array())
    {
        $count = self::where($where)->count();
        return intval($count);
    }

    public static function updateMethod($param)
    {
        return self::where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
    }

    public static function insertMethod($param)
    {
        $param['add_time'] = time();
        return self::strict(false)->field(true)->insert($param);
    }

    public static function deleteMethod($id)
    {
        self::where('id',$id)->delete();
    }



}