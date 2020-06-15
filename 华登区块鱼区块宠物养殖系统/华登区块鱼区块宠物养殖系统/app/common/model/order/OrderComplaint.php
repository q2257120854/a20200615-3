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
namespace app\common\model\order;
use think\Db;
use think\Model;
use think\Config;
use app\common\model\member\Member;
use app\common\model\product\Product;
use app\common\model\Order\order;
class OrderComplaint extends Model
{
    //列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::
        field('oc.*,o.product_price,o.ordersn')
        ->alias('oc')
        ->join('order o','oc.orderid = o.id')
        ->where($where)
        ->order('createtime desc')
        ->paginate($rows,false,['query'=>$where])->each(function($item){
            $member = Member::getMember(['mid' => $item['mid']]);
            $item['account'] = $member['account'];
            $item['nickname'] = $member['nickname'];
        })?:[];
        return $list;
    }

    public static function getList($where=array())
    {
       
        $list = self::where($where)->order('id desc')->select()->each(function($item){
        })->toArray()?:[];
        return $list;
    }

    public static function getComplaint($id)
    {
        $detail = self::where(['id' => $id])->find();
        if($detail){
            $detail = $detail->toArray();
            return $detail;
        }else{
            return [];
        }
    }

    public static function getComplaint1($orderid)
    {
        $detail = self::where(['orderid' => $orderid])->find();
        if($detail){
            $detail = $detail->toArray();
            return $detail;
        }else{
            return [];
        }
    }

    public static function updateComplaint($param)
    {
        return self::where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
    }

    public static function insertComplaint($param)
    {
        $param['createtime'] = time();
        return self::strict(false)->field(true)->insert($param);
    }

    public static function deleteComplaint($id)
    {
        return self::where('id',$id)->delete();
    }
    
    //处理申诉
    public static function passOrderComplaint($id, $order)
    {
        self::updateComplaint(['id' => $id, 'status' => 1]);
        Order::updateOrder(['id' => $order['id'], 'status' => -2]);
        Product::updateProduct(['id' => $order['product_id'], 'status' => 1]);
        //TODO
        return true;

    }

    //驳回申诉
    public static function rejectOrderComplaint($id, $order)
    {
        self::updateComplaint(['id' => $id, 'status' => -1]);
        Order::updateOrder(['id' => $order['id'], 'status' => 1]);
        //TODO
        return true;
    }
    
    //撤销申诉
    public static function revokeOrderComplaint($id, $order)
    {
        self::updateComplaint(['id' => $id, 'status' => 2]);
        //订单审核通过
        return Order::orderAuditPass($order);
        //TODO
        return true;
    }

}