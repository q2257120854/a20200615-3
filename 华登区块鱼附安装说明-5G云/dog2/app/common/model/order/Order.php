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
use app\common\model\product\ProductCate;
use app\common\model\product\ProductAppointment;
use app\common\model\product\ProductAdopt;
use app\common\model\member\Member;
use app\common\model\member\MemberLevel;
use app\common\model\member\MemberIncomelog;
use app\common\model\member\PaymentMethod;
use app\common\model\order\OrderComplaint;
class Order extends Model
{
    //列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::where($where)->order('createtime desc')->paginate($rows,false,['query'=>$where])->each(function($item){
            $config = Config::get('payconfig');
            if(!$item['mid']){
                $item['account'] = $config['mobile'];
                $item['nickname'] = $config['nickname'];
            }else{
                $member = Member::getMember(['mid' => $item['mid']]);
                $item['account'] = $member['account'];
                $item['nickname'] = $member['nickname'];
            }
            if(!$item['seller_mid']){
                $item['seller_account'] = $config['mobile'];
                $item['seller_nickname'] = $config['nickname'];
            }else{
                $seller_member = Member::getMember(['mid' => $item['seller_mid']]);
                $item['seller_account'] = $seller_member['account'];
                $item['seller_nickname'] = $seller_member['nickname'];
            }
            $item['seller_paymentmethod'] = PaymentMethod::getList(['pm.mid' => $item['seller_mid'], 'pm.status' => 1]);
            $item['levelname'] = Product::getProductName($item['product_id']);
            $item['income'] = self::revenueFigures($item) * $item['income_days'];
            if($item['status'] == 0 || $item['status'] == 1){
                //付款和审核倒计时
                $item['count_down'] = ($item["createtime"] + $config['payment_limit_time'] * 3600) - time();
                $item['count_text'] = downTime($item["createtime"] + $config['payment_limit_time'] * 3600);
            }
            $complaint = OrderComplaint::getComplaint1($item['id']);
            $item['complaint_id'] = !empty($complaint) ? $complaint['id'] : 0;
            $item['complaint_staus'] = !empty($complaint) ? $complaint['status'] : 0;

            $item['createtime'] = $item['createtime'] ? date("Y-m-d H:i:s", $item["createtime"]) : '';
            $item['paytime'] = $item['paytime'] ? date("Y-m-d H:i:s", $item["paytime"]) : '';
            $item['audittime'] = $item['audittime'] ? date("Y-m-d H:i:s", $item["audittime"]) : '';
            $item['incometime'] = $item['incometime'] ? date("Y-m-d H:i:s", $item["incometime"]) : '';
            $item['figure'] = floatval($item['figure']);
            if($item['payment_voucher']){
                $item['payment_voucher'] = url($item['payment_voucher'], '', '', true);
            }
        })?:[];
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
                $member = Member::getMember(['mid' => $item['mid']]);
                $item['account'] = $member['account'];
                $item['nickname'] = $member['nickname'];
            }
            if(!$item['seller_mid']){
                $item['seller_account'] = $config['mobile'];
                $item['seller_nickname'] = $config['nickname'];
            }else{
                $seller_member = Member::getMember(['mid' => $item['seller_mid']]);
                $item['seller_account'] = $seller_member['account'];
                $item['seller_nickname'] = $seller_member['nickname'];
            }
            $item['seller_paymentmethod'] = PaymentMethod::getList(['pm.mid' => $item['seller_mid'], 'pm.status' => 1]);
            $item['levelname'] = Product::getProductName($item['product_id']);
            $item['income'] = self::revenueFigures($item) * $item['income_days'];
            if($item['status'] == 0 || $item['status'] == 1){
                //付款倒计时
                $item['count_down'] = ($item["createtime"] + $config['payment_limit_time'] * 3600) - time();
                $item['count_text'] = downTime($item["createtime"] + $config['payment_limit_time'] * 3600);
            }
            $complaint = OrderComplaint::getComplaint1($item['id']);
            $item['complaint_id'] = !empty($complaint) ? $complaint['id'] : 0;
            $item['complaint_staus'] = !empty($complaint) ? $complaint['status'] : 0;

            $item['createtime'] = $item['createtime'] ? date("Y-m-d H:i:s", $item["createtime"]) : '';
            $item['paytime'] = $item['paytime'] ? date("Y-m-d H:i:s", $item["paytime"]) : '';
            $item['audittime'] = $item['audittime'] ? date("Y-m-d H:i:s", $item["audittime"]) : '';
            $item['incometime'] = $item['incometime'] ? date("Y-m-d H:i:s", $item["incometime"]) : '';
            $item['figure'] = floatval($item['figure']);
            if($item['payment_voucher']){
                $item['payment_voucher'] = url($item['payment_voucher'], '', '', true);
            }
            
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
                $member = Member::getMember(['mid' => $detail['mid']]);
                $detail['account'] = $member['account'];
                $detail['nickname'] = $member['nickname'];
            }
            if(!$detail['seller_mid']){
                $detail['seller_account'] = $config['mobile'];
                $detail['seller_nickname'] = $config['nickname'];
            }else{
                $seller_member = Member::getMember(['mid' => $detail['seller_mid']]);
                $detail['seller_account'] = $seller_member['account'];
                $detail['seller_nickname'] = $seller_member['nickname'];
            }
            $detail['seller_paymentmethod'] = PaymentMethod::getList(['pm.mid' => $detail['seller_mid'], 'pm.status' => 1]);
            $detail['levelname'] = Product::getProductName($detail['product_id']);
            $detail['income'] = $detail['price'] - $detail['product_price'];
            if($detail['status'] == 0){
                //付款倒计时
                $detail['count_down'] = ($detail["createtime"] + $config['payment_limit_time'] * 3600) - time();
                $detail['count_text'] = downTime($detail["createtime"] + $config['payment_limit_time'] * 3600);
            }
            $detail['createtime'] = $detail['createtime'] ? date("Y-m-d H:i:s", $detail["createtime"]) : '';
            $detail['paytime'] = $detail['paytime'] ? date("Y-m-d H:i:s", $detail["paytime"]) : '';
            $detail['audittime'] = $detail['audittime'] ? date("Y-m-d H:i:s", $detail["audittime"]) : '';
            $detail['incometime'] = $detail['incometime'] ? date("Y-m-d H:i:s", $detail["incometime"]) : '';
            $detail['figure'] = floatval($detail['figure']);
            return $detail;
        }else{
            return [];
        }
    }
    
    //获取数量
    public static function getCount($where)
    {
        return $list = self::where($where)->count();
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

    public static function getSum($where = array())
    {
        $sum = self::where($where)->sum('product_price');
        return intval($sum);
    }
    
    //未支付的订单的所有区块鱼品种
    public static function unpaidProductCate($mid, $product_cateid)
    {
        $count = self::
        field('p.cate_id')
        ->alias('o')
        ->join('product p','o.product_id = p.id')
        ->where(['o.mid' => $mid, 'o.status' => ['<>', '3'], 'p.cate_id' => $product_cateid])
        ->whereTime('createtime', 'today')
        ->count();
        return $count;

    }
    //支付订单
    public static function OrderPay($order)
    {
        $param  = array(
            'id' => $order['id'],
            'paytime' => time(),
            'status' => 1
        );
        $res = self::updateOrder($param);
        if($res){
            //短信通知
            $product = Product::getProduct($order['product_id']);
            Member::sendNotice($order['seller_mid'], $product['cate_id'], 6); //转让方
        }
        return $res;
    }
    
    //取消订单
    public static function OrderFetchCancel($order)
    {
        $param  = array(
            'id' => $order['id'],
            'canceltime' => time(),
            'status' => -1
        );
        $res = self::updateOrder($param);
        if(!$res) return false;
        $param1 = array(
            'id' => $order['product_id'], 
            'status' => 1
        );
        $pres = Product::updateProduct($param1);
        return $pres;
    }

    //审核订单
    public static function orderAuditPass($order)
    {
        $param  = array(
            'id' => $order['id'],
            'audittime' => time(),
            'income_status' => 1,
            'status' => 2
        );
        $res = self::updateOrder($param);
        if(!$res) return false;
        $param1 = array(
            'id' => $order['product_id'], 
            'owner_mid' => $order['mid'],
            'transferor_mid' => $order['seller_mid'],
            'status' => 2
        );
        Member::updateMember(['mid' => $order['mid'], 'is_promoter' => 1]);
        //卖家原订单状态改为已转让
        self::where(['mid' => $order['seller_mid'], 'product_id' => $order['product_id'], 'income_status' => 2, 'status' => 2])->update(['status' => 3]);

        $pres = Product::updateProduct($param1);
        if($pres){
            //短信通知
            $product = Product::getProduct($order['product_id']);
            Member::sendNotice($order['mid'], $product['cate_id'], 2); //捕捞方
            Member::sendNotice($order['seller_mid'], $product['cate_id'], 3);//转让方
        }
        return $pres;

    }
    
    //解禁订单
    public static function orderUnsealing($order)
    {
        $param  = array(
            'id' => $order['id'],
            'createtime' => time(),
            'status' => 0
        );
        $res = self::updateOrder($param);
        if(!$res) return false;
        Member::updateMember(['mid' => $order['mid'], 'status' => 1]);
    }

    //插入订单数据
    public static function createOrder($product, $mid)
    {
        $appo = ProductAppointment::getAppo(['mid' =>$mid, 'product_cateid' => $product['cate_id']]);
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
        return true;

    }
    
    //捕捞
    public static function adoptRedis($product_cateid, $mid)
    {
    	$productCate = getredis('product_cateid_'. $product_cateid);
        if(!$productCate) return '当前时间不能捕捞';

        $adopt = ProductAdopt::getAdopt(['mid' => $mid, 'product_cateid' => $product_cateid]);
        if($adopt) {
            if($adopt['status'] ==0) return '您来晚一步，商品被捕捞了';
            if($adopt['status'] ==1) return '系统分配中';
            if($adopt['status'] ==2) return '捕捞成功，请及时去支付';
        }

        $product = getaggregateSize('productlist_cateid_' . $product_cateid);
        if(!$product) return '您来晚一步，商品被捕捞了';

        $isAppo = ProductAppointment::getAppo(['product_cateid' => $product_cateid, 'mid' => $mid]);
        if(!$isAppo){
            $member = Member::getMember(['mid' => $mid]);
            if($productCate['adopt_integral'] > $member['integral']) return 'M分不足，请及时充值';
        }

        $adoptLogId = ProductAdopt::adoptLog($product_cateid, $mid);
        //是否自动分配
        if($productCate['isauto']){
            //分配区块鱼
            self::distributionRedis($adoptLogId, $product_cateid, $mid, $productCate['isauto']);
            return true;
        }else{
            return 2;
        }

    }

    //分配区块鱼
    public static function distributionRedis($adoptLogId, $product_cateid, $mid, $isauto = false)
    {   
        //是否自动分配
        if($isauto){
            if(openRedisQueue()){
                $mid = ipoplist('member_adoptlist_'. $product_cateid);
            }
        }
        if(openRedisQueue()){
            $product = getaggregate('productlist_cateid_' . $product_cateid);//随机分配区块鱼
        }else{
            $product = Product::randomProduct($product_cateid);
        }
        
        //修改预约记录
        $appo = ProductAppointment::getAppo(['mid' =>$mid, 'product_cateid' => $product_cateid]);
        if($appo) ProductAppointment::updateAppo(['id' => $appo['id'], 'product_id' => $appo['product_cateid'], 'status' =>2]);
        //修改捕捞记录
        ProductAdopt::updateAdopt(['id' => $adoptLogId, 'mid' => $mid, 'product_cateid' => $product_cateid, 'product_id' => $product['id'], 'status' =>2]);
        //区块鱼的价格整数
        $product['price'] = round($product['price'], 0);
        //TODO 短信通知
        $res = self::createOrder($product, $mid);
        if($res){
            Product::updateProduct(['id' => $product['id'], 'price' => $product['price'], 'status' => 0]);
            //短信通知
            Member::sendNotice($mid, $product_cateid, 4);
        }
        return $res;
    }
    
    //捕捞
    public static function adopt($product_cateid, $mid)
    {
        //$isadopt = Product::getProductByMid($mid, $product_cateid);
        //if($isadopt) return '您已捕捞过该品种';

        $adopt = ProductAdopt::getAdopt(['mid' => $mid, 'product_cateid' => $product_cateid, 'status' => 1]);
        if($adopt) {
            if($adopt['status'] ==0) return '您来晚一步，商品被捕捞了';
            if($adopt['status'] ==1) return '系统分配中';
            if($adopt['status'] ==2) return '捕捞成功，请及时去支付';
        }

        $product = Product::getProductID(['cate_id' => $product_cateid, 'status' => 1]);
        if(!$product) return '您来晚一步，商品被捕捞了';

        $productCate = ProductCate::getCate($product_cateid);

        $isAppo = ProductAppointment::getAppo(['product_cateid' => $product_cateid, 'mid' => $mid]);
        if(!$isAppo){
            $member = Member::getMember(['mid' => $mid]);
            if($productCate['adopt_integral'] > $member['integral']) return 'M分不足，请及时充值';//M分不足，请及时充值
        }

        $adoptLogId = ProductAdopt::adoptLog($product_cateid, $mid);

        //是否自动分配
        if($productCate['isauto']){
            //分配区块鱼
            self::distribution($adoptLogId, $product_cateid, $product, $mid);
            return true;
        }else{
            return 2;
        }
    }
    
    //分配区块鱼
    public static function distribution($adoptLogId, $product_cateid, $product, $mid)
    {
        $product = Product::randomProduct($product_cateid);
        //修改预约记录
        $appo = ProductAppointment::getAppo(['mid' =>$mid, 'product_cateid' => $product_cateid]);
        if($appo) ProductAppointment::updateAppo(['id' => $appo['id'], 'product_id' => $appo['product_cateid'], 'status' =>2]);
        //修改捕捞记录
        ProductAdopt::updateAdopt(['id' => $adoptLogId, 'product_id' => $product['id'], 'status' =>2]);
        //区块鱼的价格整数
        $product['price'] = round($product['price'], 0);
        //TODO 短信通知
        $res = self::createOrder($product, $mid);
        if($res){
            Product::updateProduct(['id' => $product['id'], 'price' => $product['price'], 'status' => 0]);
            //短信通知
            Member::sendNotice($mid, $product_cateid, 4);
        }
        return $res;
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
            //第一次超时进入系统申诉
            if($item['is_complaint'] == 0){
                $item['is_complaint'] = 1;
                $item['status'] = '-2';
                //禁用会员
                Member::updateMember(['mid' => $item['mid'], 'status' => 0]);
            }else{
                //区块鱼状态
                Product::updateProduct(['id' =>$item['product_id'], 'status' => 1]);
                $item['status'] = '-1';
                //退回鱼饵
                Member::changeIntegral(5, $item['integral'], $item['mid']);
            }

        }
        $Model = new self;
        $Model->saveAll($orderlist);
        return true;
    }
    
    //自动审核通过
    public static function autoAuditPass()
    {
        $config = Config::get('payconfig');
        $limithour = $config['auto_blockwrite'];
        $limittime = time() - $limithour * 3600;
        //$where['paytime'] = array('<', $limittime);
        $where['createtime'] = array('<', $limittime);
        $where['status'] = 1;

        $orderlist = self::where($where)->select()->toArray()?:[];
        foreach ($orderlist as &$item) {
            //区块鱼状态
            Product::updateProduct(['id' =>$item['product_id'], 'owner_mid' => $item['mid'], 'transferor_mid' => $item['seller_mid'], 'status' => 2]);
            //卖家原订单状态改为已转让
            self::where(['mid' => $item['seller_mid'], 'product_id' => $item['product_id'], 'income_status' => 2, 'status' => 2])->update(['status' => 3]);
            $item['income_status'] = 1;
            $item['status'] = '2';
            $item['audittime'] = time();
        }
        $Model = new self;
        $Model->saveAll($orderlist);
        return true;
    }
    
    //处理系统申诉订单
    public static function autoCancel()
    {
        $where['is_complaint'] = 1;
        $where['status'] = '-2';
        $orderlist = self::where($where)->select()->toArray()?:[];
        foreach ($orderlist as &$item) {
            //区块鱼状态
            Product::updateProduct(['id' =>$item['product_id'], 'owner_mid' => $item['seller_mid'], 'status' => 1]);
            Member::changeIntegral(5, $item['integral'], $item['mid']);
            $item['status'] = '-1';
        }
        $Model = new self;
        $Model->saveAll($orderlist);
        return true;
    }
    
    //计算具体收益数字
    public static function revenueFigures($order)
    {
        $income =  ($order['product_price'] * ($order['figure'] / 100)) / $order['cycle'];
        return round($income, 2);
    }
    
    //合约收益
    public static function contractRevenue($income, $mid)
    {
        $data = array('mid' => $mid, 'type' => 0, 'income' => $income, 'createtime' => time(), 'status' => 1);
        MemberIncomelog::insertlog($data);
    }
    
    //推荐收益
    public static function recommendIncome($income, $mid)
    {
        $config = config('payconfig');

        $commission1 = round($income * ($config['commission1'] /100), 2); 
        $commission2 = round($income * ($config['commission2'] /100), 2); 
        $commission3 = round($income * ($config['commission3'] /100), 2); 

        $member = Member::getMember(['mid' => $mid]);
        if(!empty($member['parent_mid'])){
            //一级推荐
            $m1 = Member::getMember(['mid' => $member['parent_mid']]);
            //检查推荐收益要求
            if(checkMemberRecommend($m1, $config)){
                $data1 = array('mid' => $m1['mid'], 'type' => 1, 'income' => $commission1, 'createtime' => time(), 'status' => 1);
                Member::changeIncome(1, $commission1, $m1['mid'], 1);
                MemberIncomelog::insertlog($data1);
            }

            //二级推荐
            if(!empty($m1['parent_mid'])){
                $m2 = Member::getMember(['mid' => $m1['parent_mid']]);
                //检查推荐收益要求
                if(checkMemberRecommend($m2, $config)){
                    $data2 = array('mid' => $m2['mid'], 'type' => 1, 'income' => $commission2, 'createtime' => time(), 'status' => 1);
                    Member::changeIncome(1, $commission2, $m2['mid'], 1);
                    MemberIncomelog::insertlog($data2);
                }

                //三级推荐
                if(!empty($m2['parent_mid'])){
                    $m3 = Member::getMember(['mid' => $m2['parent_mid']]);
                    //检查推荐收益要求
                    if(checkMemberRecommend($m3, $config)){
                        $data3 = array('mid' => $m3['mid'], 'type' => 1, 'income' => $commission3, 'createtime' => time(), 'status' => 1);
                        Member::changeIncome(1, $commission3, $m3['mid'], 1);
                        MemberIncomelog::insertlog($data3);
                    }

                }
            }
        }
        return true;
  
    }
    
    //团队收益
    public static function teamIncome($income, $mid, $effective_level = 0)
    {
        $team = array();
        $member = Member::getMember(['mid' => $mid]);
        $maxLevel = MemberLevel::getMaxLevel();
        $maxIncome = round($income * $maxLevel['service_award'] / 100, 2);
        $i = 0;
        while (!in_array($member['parent_mid'], $team) && !empty($member['parent_mid'])) {
            if($effective_level && $i >= $effective_level) break;
            if($maxIncome <= 0) break;
            $member = Member::getMember(['mid' => $member['parent_mid']]);
            $team_income = 0;
            $level = MemberLevel::getInfoByLevel($member['level']);
            if(!empty($level)){
                $team_income = round($income * $level['service_award'] / 100, 2);
                if($maxIncome <= $team_income){
                    $team_income = $maxIncome;
                }
            }
            $team[] = array('mid' => $member['mid'], 'income' => $team_income);
            $maxIncome  -= $team_income;
            $i++;

        }
        foreach ($team as $item) {
            if($item['income'] > 0){
                $data = array('mid' => $item['mid'], 'type' => 2, 'income' => $item['income'], 'createtime' => time(), 'status' => 1);
                Member::changeIncome(2, $item['income'], $item['mid'], 1);
                MemberIncomelog::insertlog($data);
            }
        }
        return true;

    }
    
    //收益转存
    public static function incomeTransferred($income, $mid)
    {
        $data = array('mid' => $mid, 'type' => 3, 'income' => $income, 'createtime' => time(), 'status' => 1);
        MemberIncomelog::insertlog($data);
        Member::changeIncome(3, $income, $mid, 1);
    }

    //收益计算
    public static function incomeCalculation()
    {
        $config = Config::get('payconfig');
        //今天凌晨的时间戳
        $time = time();
        $start = mktime(0,0,0,date("m", $time),date("d", $time),date("Y", $time));

        $where['income_status'] = 1;
        $where['status'] = 2;
        $where['incometime'] = array('<', $start);
        $orderlist = self::where($where)->select()->toArray()?:[];

        foreach ($orderlist as &$item) {
            $income = self::revenueFigures($item);
            $item['incometime'] = time();
            $item['income_days'] += 1;
            //开启收益转存
            if(($item['price']+$income) >= intval($config['income_transferred'])){
                self::incomeTransferred($income, $item['mid']);
            }else{
                $item['price'] = $income + $item['price'];
                //区块鱼升值
                Product::updateProduct(['id' => $item['product_id'], 'price' => $item['price']]);
                self::contractRevenue($income, $item['mid']);
                
                //区块鱼品种升级
                $cate_id = Product::upgradeWrite($item['product_id']);
                if($cate_id){
                    Product::updateProduct(['id' => $item['product_id'], 'cate_id' => $cate_id]);
                }
            }
            self::recommendIncome($income, $item['mid']);
            self::teamIncome($income, $item['mid'], $config['effective_level']);
            //收益完成
            if($item['income_days'] >= $item['cycle']){
                $item['income_status'] = 2;
                //区块鱼状态
                Product::updateProduct(['id' => $item['product_id'], 'status' => 1]);
            }
            
        }
        $Model = new self;
        $Model->saveAll($orderlist);
        return true;
    }

}