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
use app\common\model\product\ProductLevel;
use app\common\model\product\Product;
use app\common\model\product\ProductAdopt;
use app\common\model\order\Order;
class ProductCate extends Model
{
    //列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::
        field('pc.*,pl.levelname')
        ->alias('pc')
        ->join('product_level pl','pc.level_id = pl.id')
        ->order('pc.sort asc')
        ->where($where)
        ->paginate($rows,false,['query'=>$where])->each(function($item){
            $item['thumb'] = url($item['thumb'], '', '', true);
            $item['figure'] = floatval($item['figure']);
            $item['bst_currency'] = floatval($item['bst_currency']);
            $item['ocn_figure'] = floatval($item['ocn_figure']);
            $item['unpaidcount'] = Product::getCount(['cate_id' => $item['id'], 'status' => 0]);
            $item['toadoptcount'] = Product::getCount(['cate_id' => $item['id'], 'status' => 1]);
            $item['adoptcount'] = Product::getCount(['cate_id' => $item['id'], 'status' => 2]);

        })?:[];
        return $list;
    }

    public static function getList($where = array(), $order = '')
    {
        $order = empty($order) ? 'minprice' : $order; 
        $list = self::
        field('pc.*,pl.levelname')
        ->alias('pc')
        ->join('product_level pl','pc.level_id = pl.id')
        ->where($where)
        ->order('pc.'.$order.' asc')
        ->select()->each(function($item){
            $item['thumb'] = url($item['thumb'], '', '', true);
            $item['figure'] = floatval($item['figure']);
            $item['bst_currency'] = floatval($item['bst_currency']);
            $item['ocn_figure'] = floatval($item['ocn_figure']);
        })->toArray()?:[];
        return $list;
    }
    
    //获取区块鱼状态
    public static function getBlockState($mid, $productCate)
    {   
        //0-预约，1-繁殖中，2-待捕捞，3-捕捞
        $block_state = 0;

        //未支付区块鱼的品种
        $catecount = Order::unpaidProductCate($mid, $productCate['id']);
        if($catecount) return 1;

        //今天是否捕捞了
        //$product = Product::getProductByMid($mid, $productCate['id']);
        $product = ProductAdopt::getAdopt(['mid' => $mid, 'product_cateid' => $productCate['id']]);
        if($product)  return 1;

        //是否还有待捕捞的区块鱼
        $productNum = Product::getProductID(['cate_id' => $productCate['id'], 'status' => 1]);
        if(!$productNum) return 1;

        $where = array('mid' => $mid, 'product_cateid' => $productCate['id'], 'status' => 1);
        //是否在捕捞时间段
        $isadopt = isAdopt($productCate['adopt_time']);
        if($isadopt){
            return 3;
        }else{
            //是否显示预约
            $showAppo = isShowAppo($productCate['adopt_time']);
            if($showAppo){
                //是否预约了
                $applog = ProductAppointment::getAppo($where);
                if(!$applog){
                    return  0;
                }else{
                    return  2;
                }
                
            }else{
                return 1;
            }

        }
        return 0;
    }

    public static function getCate($id)
    {
        $detail = self::where(['id'=>$id])->find();
        if($detail){
            $detail = $detail->toArray();
        }else{
            $detail = [];
        }
        return $detail;
    }

    public static function adoptTime($id)
    {   
        $loadingtime = config('payconfig')['loadingtime'];
        $microtime = getMicrotime();
        $res = array('timestamp' =>$microtime, 'type' => 0);
        $cate = self::getCate($id);
        if(!$cate) return $res;

        $timeslot = getAdoptTime($cate['adopt_time']);
        if(isShowAppo($cate['adopt_time'])){
            $res['type'] = 1;
            $res['timestamp'] = $timeslot['starttime'] . '000';
        }else{
            //截止loading的毫秒
            $endloadingtime = $timeslot['starttime'] + $loadingtime;
            if(time() < $endloadingtime){
                $res['type'] = 0;
                $res['timestamp'] = $endloadingtime . '000';
            }
        }

        return $res;

    }
    
    //获取价值排序
    public static function getPriceSort($price)
    {
        $where['status'] = array('<>' , 0);
        $where['minprice'] = array('<=', $price);
        $where['maxprice'] = array('>=', $price);
        return self::where($where)->column('id');
    }

    public static function updateCate($param)
    {
        return self::where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
    }

    public static function insertCate($param)
    {
        return self::strict(false)->field(true)->insert($param);
    }

    public static function deleteCate($id)
    {
        self::where('id',$id)->delete();
    }

    //时间段开启捕捞
    public static function openAdoption()
    {
        $where['status'] = 1;
        $list = self::where($where)->select()->toArray()?:[];
        if(empty($list)) return false;

        foreach ($list as $k => $item) {
            //判断时间段
            $isappo = isAdopt($item['adopt_time']);
            if(!$isappo){
                unset($list[$k]);
                deletekey('product_cateid_'.$item['id']); //删除区块鱼品种
                deletekey('productlist_cateid_'.$item['id']); //删除区块鱼数量
                continue;
            }
            $productCate = getredis('product_cateid_'.$item['id']);
            if(!$productCate){
                setredis('product_cateid_'.$item['id'], $item);
                $product = Product::getList(['p.cate_id' => $item['id'], 'p.status' => 1]);
                if(!$product) return false;
                foreach ($product as $v) {
                    setaggregate('productlist_cateid_'.$item['id'], $v);
                }

            }
            
        }
        return true;
    }
}
