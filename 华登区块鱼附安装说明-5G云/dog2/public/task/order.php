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
use app\common\model\product\Product;
use app\common\model\product\ProductAppointment;
use app\common\model\member\Member;
use app\common\model\member\PaymentMethod;
class Order extends Model
{
    //列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::where($where)->order('createtime desc')->paginate($rows,false,['query'=>$where])?:[];
        return $list;
    }

    public static function getList($where=array())
    {
       
        $list = self::where($where)->order('createtime desc')->select()->each(function($item){
            $config = Config::get('payconfig');
            if(!$item['mid']){
                $item['account'] = $config['mobile'];
                $item['nickname'] = $config['nickname'];
            }else{
                $seller_member = Member::getMember(['mid' => $item['mid']]);
                $item['account'] = $seller_member['account'];
                $item['nickname'] = $seller_member['realname'];
            }
            $item['seller_paymentmethod'] = PaymentMethod::getList(['pm.mid' => $item['seller_mid'], 'pm.status' => 1]);
            $item['levelname'] = Product::getProductName($item['product_id']);
            $item['income'] = $item['price'] - $item['product_price'];
            if($item['status'] == 0){
                //付款倒计时
                $item['count_down'] = ($item["createtime"] + $config['payment_limit_time'] * 3600) - time();
                $item['count_text'] = downTime($item["createtime"] + $config['payment_limit_time'] * 3600);
            }
            $item['createtime'] = date("Y-m-d H:i:s", $item["createtime"]);
            $item['paytime'] = date("Y-m-d H:i:s", $item["paytime"]);
            $item['audittime'] = date("Y-m-d H:i:s", $item["audittime"]);
            $item['incometime'] = date("Y-m-d H:i:s", $item["incometime"]);
            $item['figure'] = intval($item['figure']);
        })->toArray()?:[];
        return $list;
    }

    public static function getOrder($id)
    {
        $detail = self::where(['id' => $id])->find();
        if($detail){
            $detail = $detail->toArray();
            $config = Config::get('payconfig');
            if(!$detail['mid']){
                $detail['account'] = $config['mobile'];
                $detail['nickname'] = $config['nickname'];
            }else{
                $seller_member = Member::getMember(['mid' => $detail['mid']]);
                $detail['account'] = $seller_member['account'];
                $detail['nickname'] = $seller_member['realname'];
            }
            $detail['seller_paymentmethod'] = PaymentMethod::getList(['pm.mid' => $detail['seller_mid'], 'pm.status' => 1]);
            $detail['levelname'] = Product::getProductName($detail['product_id']);
            $detail['income'] = $detail['price'] - $detail['product_price'];
            if($detail['status'] == 0){
                //付款倒计时
                $detail['count_down'] = ($detail["createtime"] + $config['payment_limit_time'] * 3600) - time();
                $detail['count_text'] = downTime($detail["createtime"] + $config['payment_limit_time'] * 3600);
            }
            $detail['createtime'] = date("Y-m-d H:i:s", $detail["createtime"]);
            $detail['paytime'] = date("Y-m-d H:i:s", $detail["paytime"]);
            $detail['audittime'] = date("Y-m-d H:i:s", $detail["audittime"]);
            $detail['incometime'] = date("Y-m-d H:i:s", $detail["incometime"]);
            $detail['figure'] = intval($detail['figure']);
            return $detail;
        }else{
            return [];
        }
    }

    public static function updateOrder($param)
    {
        return self::where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
    }

    public static function insertOrder($param)
    {
        return self::strict(false)->field(true)->insert($param);
    }

    public static function deleteOrder($id)
    {
        return self::where('id',$id)->delete();
    }

    //审核订单
    public static function orderAuditPass($order)
    {
        $param  = array(
            'id' => $order['id'],
            'audittime' => time(),
            'status' => 2
        );
        $res = self::updateOrder($param);
        if(!$res) return false;
        $param1 = array(
            'id' => $order['product_id'], 
            'owner_mid' => $order['mid'],
            'status' => 2
        );
        $pres = Product::updateProduct($param1);
        return $pres;

    }

    //插入订单数据
    public static function createOrder($product, $mid)
    {
        $product = unserialize($product);
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379, 2);
        $redis->delete('blockcat_product_' . $product['id']);
        $redis->close();
        $appo = ProductAppointment::getAppo(['mid' =>$mid, 'product_id' => $product['id']]);
        $integral = $appo ? $appo['integral'] : $product['adopt_integral'];
        $ordersn = createNO('order', 'ordersn', 'SQ');

        $data = array(
            'mid' => $mid,
            'ordersn' => $ordersn,
            'seller_mid' => $product['owner_mid'],
            'product_id' => $product['id'],
            'product_price' => $product['price'],
            'integral' => $integral,
            'price' => $product['price'],
            'cycle' => $product['cycle'],
            'figure' => $product['figure'],
            'createtime' => time()
        );
        self::insertOrder($data);
        //没有预约记录扣除鱼饵
        if(!$appo) Member::changeIntegral(1, $integral, $mid);
        Product::updateProduct(['id' => $product['id'], 'status' => 2]);

    }
    
    //捕捞
    public static function adopt($product_id, $mid)
    {
        try{
            $redis = new \Redis();
            $redis->connect('127.0.0.1', 6379, 2);// 127.0.0.1 连接的IP，6379 连接的端口，2 连接的超时时长，单位：秒
            $res = $redis->ping(); // 检测当前链接状态，返回PONG或者抛出异常。
            if($res === '+PONG'){
                $product = $redis->get('blockcat_product_' . $product_id);
                if(!$product) return '您来晚一步，商品被捕捞了';

                //$adopt = array('mid' => $mid, 'product_id' => $product_id);
                $redis->rpush('blockcat_adoptlist_' . $product_id, $mid);
                //出局第一位捕捞的
                $adoptinfo = $redis->lpop('blockcat_adoptlist_' . $product_id);
                $redis->close();
                //插入捕捞表
                self::createOrder($product, $adoptinfo);
                if($adoptinfo == $mid){
                    return true;
                }else{
                    return '您来晚一步，商品被捕捞了!';
                }
                
            }
            return 'redis服务连接报错!';
        }catch (\Exception $e){
            return '未开启redis服务!';
        }

    }
    
    //付款时间限制
    public static function paymentsCountdown()
    {
        $config = Config::get('payconfig');
        $limithour = $config['payment_limit_time'];
        //$limithour = 30;
        $limittime = time() - $limithour * 3600;
        $where['createtime'] = array('<', $limittime);
        $where['status'] = 0;

        $orderlist = self::where($where)->select()->toArray()?:[];

        foreach ($orderlist as &$item) {
            $item['status'] = '-1';
            //退回鱼饵
            Member::changeIntegral(5, $item['integral'], $item['mid']);
        }
        $Model = new self;
        $Model->saveAll($orderlist);
        return true;
    }

    //收益计算
    public function incomeCalculation()
    {
        $where['income_status'] = 1;
        $where['status'] = 2;
        $orderlist = self::where($where)->select()->toArray()?:[];
    }

}