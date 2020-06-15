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
use app\common\model\product\ProductLevel;
use app\common\model\member\Member;
class Product extends Model
{
    //列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];

        $list = self::
        field('p.*,pc.catename,pc.thumb,pc.minprice,pc.maxprice,pc.adopt_time,pc.appointment_integral,pc.adopt_integral,pc.cycle,pc.figure,pc.bst_currency,pc.ocn_figure,pl.levelname')
        ->alias('p')
        ->join('product_cate pc','p.cate_id = pc.id')
        ->join('product_level pl','pc.level_id = pl.id')
        ->order('p.id desc')
        ->where($where)
        ->paginate($rows,false,['query'=>$where])->each(function($item){
            $config = Config::get('payconfig');
            $item['thumb'] = url($item['thumb'], '', '', true);
            $item['isadopt'] = isAdopt($item['adopt_time']);
            $item['figure'] = intval($item['figure']);
            if(!$item['owner_mid']){
                $item['owner'] = $config['nickname'];
            }else{
                $member = Member::getMember(['mid' => $item['owner_mid']]);
                $item['owner'] = $member['nickname'];
            }
            if(!$item['transferor_mid']){
                $item['transferor'] = $config['nickname'];
            }else{
                $member = Member::getMember(['mid' => $item['transferor_mid']]);
                $item['transferor'] = $member['nickname'];
            }
        })->toArray()?:[];

        return $list;
    }

    public static function getList($where)
    {
        $list = self::
        field('p.*,pc.catename,pc.thumb,pc.minprice,pc.maxprice,pc.adopt_time,pc.appointment_integral,pc.adopt_integral,pc.cycle,pc.figure,pc.bst_currency,pc.ocn_figure,pl.levelname')
        ->alias('p')
        ->join('product_cate pc','p.cate_id = pc.id')
        ->join('product_level pl','pc.level_id = pl.id')
        ->order('p.id desc')
        ->where($where)->select()->each(function($item){
            $config = Config::get('payconfig');
            if(!$item['owner_mid']){
                $item['owner'] = $config['nickname'];
            }else{
                $member = Member::getMember(['mid' => $item['owner_mid']]);
                $item['owner'] = $member['nickname'];
            }
            if(!$item['transferor_mid']){
                $item['transferor'] = $config['nickname'];
            }else{
                $member = Member::getMember(['mid' => $item['transferor_mid']]);
                $item['transferor'] = $member['nickname'];
            }
        })->toArray()?:[];
        return $list;
    }
    
    //获取数量
    public static function getCount($where)
    {
        return self::where($where)->count();
    }

    public static function getProductID($where)
    {
        return self::where($where)->select()->toArray()?:[];
    }
    
    //获取商品名字
    public static function getProductName($id)
    {
       $detail = self::field('pl.levelname')
       ->alias('p')
       ->join('product_cate pc','p.cate_id = pc.id')
        ->join('product_level pl','pc.level_id = pl.id')
       ->where(['p.id'=>$id])->find();
       return $detail['levelname'];
    }

    public static function getProduct($id)
    {
        $detail = self::
        field('p.*,pc.catename,pc.thumb,pc.minprice,pc.maxprice,pc.adopt_time,pc.figure,pc.bst_currency,pc.ocn_figure')
        ->alias('p')
        ->join('product_cate pc','p.cate_id = pc.id')
        ->where(['p.id'=>$id])->find();
        if($detail){
            $detail = $detail->toArray();
            $config = Config::get('payconfig');
            if(!$detail['owner_mid']){
                $detail['owner'] = $config['nickname'];
            }else{
                $member = Member::getMember(['mid' => $detail['owner_mid']]);
                $detail['owner'] = $member['nickname'];
            }
        }else{
            $detail = [];
        }
    	return $detail;
    }

    public static function getProductByMid($mid, $cate_id)
    {
        return self::where(['cate_id' => $cate_id, 'owner_mid' => $mid])->find();
    }

    public static function updateProduct($param, $isedit = false)
    {   
        if(!empty($param['cate_id']) && $isedit){
            $product = self::getProduct($param['id']);
            if($product['cate_id'] != $param['cate_id']){
                $cate = ProductCate::getCate($param['cate_id']);
                $param['price'] = $cate['minprice'];
            }
        }
        return self::where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
    }

    public static function insertProduct($param)
    {   
        $cate = ProductCate::getCate($param['cate_id']);
        $param['price'] = $param['price'] ? $param['price'] : $cate['minprice'];
        return self::strict(false)->field(true)->insert($param);
    }
    //批量插入
    public static function batchInsert($param)
    {
        /*$cate = ProductCate::getCate($param['cate_id']);
        $param['price'] = $cate['minprice'];*/
        $num = $param['num'];
        unset($param['num']);
        $data = array();
        for ($i=0; $i < $num ; $i++) { 
            $data[$i] = $param;
        }
        $Model = new self;
        $Model->saveAll($data);
        return true;
    }

    public static function deleteProduct($id)
    {
        self::where('id',$id)->delete();
    }
    
    //随机出局某区块鱼
    public static function randomProduct($product_cateid)
    {
        $products = self::getList(['p.cate_id' => $product_cateid, 'p.status' =>1]);
        if(!$products) return false;
        $product = $products[array_rand($products)];
        return $product;
    }

    //获取用户资产
    public static function getTotalAssets($mid)
    {
        $where = array(
            'owner_mid' => $mid,
            'status' => array('in', array(0, 1, 2))
        );
        return self::where($where)->sum('price');
    }
    
    //生成某个价值的区块
    public static function blockWrite($asset, $mid)
    {   
        $where['minprice'] = array('<=', $asset);
        $where['maxprice'] = array('>=', $asset);
        $catelist = ProductCate::getList($where);

        $cate = $catelist[array_rand($catelist)];
        $param = array(
            'cate_id' => $cate['id'],
            'price' => $asset,
            'owner_mid' => $mid,
            'transferor_mid' => $mid,
        );
        $res = self::insertProduct($param);
        return $res;
    }
    
    //升级区块
    public static function upgradeWrite($id)
    {
        $product = self::getProduct($id);
        if(!$product) return false;

        $catelist = ProductCate::getPriceSort(intval($product['price']));
        if(!$catelist) return false;
        if(in_array($product['cate_id'], $catelist)) return false;
        $cate_id = $catelist[array_rand($catelist)];
        if(!$cate_id) return false;
        self::updateProduct(['id' => $id, 'cate_id' => $cate_id]);
        return $cate_id;

    }
    
}