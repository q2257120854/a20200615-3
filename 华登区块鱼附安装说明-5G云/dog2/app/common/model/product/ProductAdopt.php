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
namespace app\common\model\product;
use think\Db;
use think\Model;
use think\Config;
use app\common\model\product\ProductCate;
use app\common\model\member\Member;
class ProductAdopt extends Model
{
    //列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::where($where)
        ->order('createtime desc')
        ->paginate($rows,false,['query'=>$where])->each(function($item){
            $member = Member::getMember(['mid' => $item['mid']]);
            $item['account'] = $member ? $member['account'] : '';
            $item['nickname'] = $member ? $member['nickname'] : '';
            $item['realname'] = $member ? $member['realname'] : '';

            $productCate = ProductCate::getCate($item['product_cateid']);
            $item['catename'] = $productCate['catename'];
            $item["createtime"] = date("Y-m-d H:i:s", $item["createtime"]);
        })?:[];
        return $list;
    }

    public static function getList($where = array())
    {
        $list = self::where($where)
        ->order('createtime desc')
        ->select()->each(function($item){
            $member = Member::getMember(['mid' => $item['mid']]);
            $item['account'] = $member ? $member['account'] : '';
            $item['nickname'] = $member ? $member['nickname'] : '';
            $item['realname'] = $member ? $member['realname'] : '';
            
            $productCate = ProductCate::getCate($item['product_cateid']);
            $item['catename'] = $productCate['catename'];
            $item["createtime"] = date("Y-m-d H:i:s", $item["createtime"]);
        })->toArray()?:[];
        return $list;
    }
    
    public static function getAdopt($where)
    {
        if(openRedisQueue() && empty($where['id'])){
            $detail = gethash('product_adopt', 'adopt_'. $where['mid'] . '_' . $where['product_cateid']);
        }else{
            $detail = self::where($where)->whereTime('createtime', 'today')->find();
            if($detail){
                $detail = $detail->toArray();
            }else{
                $detail = [];
            }
        }
        return $detail;
    }

    public static function updateAdopt($param)
    {   
        if(openRedisQueue()){
            $adopt =  gethash('product_adopt', 'adopt_'. $param['mid'] . '_' . $param['product_cateid']);
            $adopt['product_id'] = $param['status'];
            $adopt['status'] = $param['status'];
            sethash('product_adopt', 'adopt_'. $adopt['mid'] . '_' . $adopt['product_cateid'], $adopt);
        }
        return self::where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
    }

    public static function insertAdopt($param)
    {
        $id = self::strict(false)->field(true)->insertGetId($param);
        if(openRedisQueue() && $id){
            $param['id'] = $id;
            $param['status'] = 1;
            $param['product_id'] = 0;
            sethash('product_adopt', 'adopt_'. $param['mid'] . '_' . $param['product_cateid'], $param);
            rpushlist('member_adoptlist_'. $param['product_cateid'], $param['mid']);//捕捞入队列
        }
        return $id;
        
    }

    public static function deleteAdopt($id)
    {
        self::where('id',$id)->delete();
    }
    
    //生成捕捞记录
    public static function adoptLog($product_cateid, $mid)
    {
        $where = array('product_cateid' => $product_cateid, 'mid' => $mid);
        $isAdopt = self::getAdopt($where);
        if($isAdopt) return false;
        //是否有预约
        $isAppo = ProductAppointment::getAppo($where);
        $param = array('mid' => $mid, 'product_cateid' => $product_cateid, 'createtime' => time());
        if($isAppo){
            $param['isappo'] = 1;
            $param['integral'] = $isAppo['integral'];
        }else{
            $productCate = ProductCate::getCate($product_cateid);
            $param['integral'] = $productCate['adopt_integral'];
            //插入鱼饵记录
            Member::changeIntegral(1, $param['integral'], $mid);

        }
        return self::insertAdopt($param);
    }
    
    //退还捕捞时间段外的捕捞记录的鱼饵
    public static function ClearAdopt()
    {
        $adoptlist = self::where(['status' => 1])->whereTime('createtime', '<', 'today')->select()->toArray();
        foreach ($adoptlist as &$item) {
            //没有预约记录
            if($item['isappo'] != 1 ){
                Member::changeIntegral(6, $item['integral'], $item['mid']);
            }
            $item['status']  = 0;
        }
        $Model = new self;
        $Model->saveAll($adoptlist);
        return true;
    }

}
