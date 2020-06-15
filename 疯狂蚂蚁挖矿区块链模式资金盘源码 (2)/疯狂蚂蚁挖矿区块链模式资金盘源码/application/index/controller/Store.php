<?php

namespace app\index\controller;

use think\Db;
use think\Request;
use think\facade\Env;

class Store extends Base
{
    // +----------------------------------------------------------------------
    // | 私有函数
    // +----------------------------------------------------------------------

    /**
     * 生成OID
     */
    public function generateOID()
    {
        $prefix = chr(mt_rand(65, 90));
        do {
            $number = mt_rand(100000000, 999999999);
            $mid = $prefix . $number;
        } while (!empty(Db::table('uuid')->where('id', '=', $mid)->find()));
        $bool = Db::table('uuid')->insert(['id' => $mid, 'type' => 8]);
        if (empty($bool)) {
            throw new \think\Exception("很抱歉、蚁后编号生成失败！");
        }
        return $mid;
    }

    // +----------------------------------------------------------------------
    // | 内部方法
    // +----------------------------------------------------------------------

	/**
	 * 更新库存
	 */
	public function stock($id)
	{
		$bool = Db::table('store')->where('id', '=', $id)->update([
			'stock'	=>	Db::raw('stock-1'),
			'sales'	=>	Db::raw('sales+1'),
		]);
		if (empty($bool)) {
			throw new \think\Exception("很抱歉、商品库存更新失败！");
		}
	}

    /**
     * 赠送蚁后
     */
    public function give($id, $username,$type='0')
    {
        // 查询蚁后
        $product = null;
        if (is_array($id)) {
            $product = $id;
        } else {
            $product = Db::table('store')->where('id', '=', $id)->find();
            if (empty($product)) {
                throw new \think\Exception("很抱歉、指定的蚁后不存在！");
            }
        }
        // 创建蚁后
      	if($type==0){
         	(new Machine())->create($username, $product, 2);
        }else{
        	 (new Machine())->create($username, $product, 3);
        }

    }

    // +----------------------------------------------------------------------
    // | 对外接口
    // +----------------------------------------------------------------------

    /**
     * 商城首页
     */
    public function index(Request $req)
    {
        // 用户账号
        $username = session('user.account.username');      	
        $user = (new Account())->instance($username);

        // 我的订单
        $myOrders = Db::table('order')->where('buyer', '=', $username)->group('status')->column('status, COUNT(id) AS count');
        $this->assign('myOrders', $myOrders);      	
        // 显示页面
        return $this->fetch();
    }

    /**
     * 商品列表
     */
    public function search(Request $req)
    {
        // 分页数据
        $page = $req->param('page/d', 1);
        $size = $req->param('size/d', 20);
        $offset = $page - 1 < 0 ? 0 : ($page - 1) * $size;
        // 查询对象
        $query = Db::table('store')->field(['sort', 'sales', 'create_at', 'update_at'], true);
        // 条件：按类目搜索
        $catalog = $req->param('catalog/d');
        if (!empty($catalog)) {
            $query->where('catalog', '=', $catalog);
        }
        // 查询数据
        $data = $query->where('status', '=', 1)->where('audit', '=', 1)->order('sort DESC, sales DESC, create_at DESC')->limit($offset, $size)->select();
        // 返回数据
        return json([
            'code'      =>  200,
            'message'   =>  '恭喜您、操作成功！',
            'data'      =>  $data
        ]);
    }

    /**
     * 购买产品
     */
    public function buy(Request $req)
    {
        // 用户账号
        $username = session('user.account.username');
        // 查询用户
        $user = (new Account())->instance($username);
        if (empty($user)) {
            return json([
                'code'      =>  501,
                'message'   =>  '很抱歉、请重新登录！'
            ]);
        }
        if (empty($user['account']['status'])) {
            return json([
                'code'      =>  502,
                'message'   =>  '很抱歉、您的账户已被冻结！'
            ]);
        }
        // 实名认证
        if ($user['account']['authen'] != 1) {
            return json([
                'code'      =>  503,
                'message'   =>  '很抱歉、您需要先完成实名认证！'
            ]);
        }
        // 产品编号
    	$id = $req->param('id/d');
    	if (empty($id)) {
    		return json([
    			'code'		=>	504,
    			'message'	=>	'很抱歉、请提供商品编号！'
    		]);
    	}
        // 获取货币
        $currency = $req->param('currency');
        $price_field = 'price';
        $currencys = config('hello.currencys');
        $available = $currencys[1];
        $available['key'] = 1;
        $frozen = $currencys[2];
        $frozen['key'] = 2;
        if (!empty(config('hello.score.enable')) && $currency == config('hello.score.unit')) {
            $price_field = 'price_score';
            $available = $currencys[3];
            $available['key'] = 3;
            $frozen = $currencys[4];
            $frozen['key'] = 4;
        }
      	
      
        // 查询产品
    	$product = Db::table('store')->where('id', '=', $id)->find();
      	if ($product['catalog'] == 1 && $currency== '蚁后积分') {           
            $available = $currencys[6];
            $available['key'] = 6;
        }
      
    	if (empty($product) || empty($product['status'])) {
    		return json([
    			'code'		=>	505,
    			'message'	=>	'很抱歉、该商品不存在或已下架！'
    		]);
    	}
        // 库存不足
    	if ($product['stock'] <= 0) {
    		return json([
    			'code'		=>	506,
    			'message'	=>	'很抱歉、该商品已售罄！'
    		]);
    	}
        // 是否使用激活码
        $activation = empty(config('hello.store.machine.activation')) ? false : true;
        // 余额判断
        if ($user['wallet'][$available['field']] < $product[$price_field]) {
            return json([
                'code'      =>  507,
                'message'   =>  '很抱歉、您的可用' . $available['name'] . '不足！'
            ]);
        }
        // 不能买自己的东西
        if ($product['username'] == $username) {
            return json([
                'code'      =>  506,
                'message'   =>  '很抱歉、您不能购买自己的商品！'
            ]);
        }
        // 个人限购判断
        if ($product['limit'] > 0) {
            // 蚁后的判断
            if ($product['catalog'] == 1) {
                $machines = Db::table('machine')->where('product', '=', $id)->where('source', '=', 1)->where('status', '=', 1)->where('username', '=', $username)->select();
                if (!empty($machines)) {
                    $count = 0;
                    foreach ($machines as $key => $item) {
                        $start = strtotime($item['create_at']);
                        $end = $start + $item['cycle'] * 60 * 60;
                        if ($end > time()) {
                            $count++;
                        }
                    }
                    if ($count >= $product['limit']) {
                        return json([
                            'code'      =>  508,
                            'message'   =>  '很抱歉、该蚁后每人限量' . $product['limit'] . '台！'
                        ]);
                    }
                }
            } else {
                $count = Db::table('order')->where('status', '<>', 0)->where('product', '=', $id)->where('buyer', '=', $username)->count('id');
                if ($count >= $product['limit']) {
                    return json([
                        'code'      =>  509,
                        'message'   =>  '很抱歉、该商品每人限量' . $product['limit'] . '个！'
                    ]);
                }
            }
        }
        // 每天限量判断
        if ($product['day'] > 0) {
            $count = Db::table('order')->where('status', '<>', 0)->where('product', '=', $id)->where('create_at', '>', date('Y-m-d'))->count('id');
            if ($count >= $product['day']) {
                return json([
                    'code'      =>  510,
                    'message'   =>  '很抱歉、该商品每天限量' . $product['day'] . '个！'
                ]);
            }
        }
        // 如果是实物商品，需要收货地址
        $userAddress = null;
        if ($product['catalog'] != 1 && $product['catalog'] != 2) {
            // 获取姓名
            $name = $req->param('name');
            if (empty($name)) {
                return json([
                    'code'      =>  511,
                    'message'   =>  '很抱歉、请提供收货人姓名！'
                ]);
            }
            $userAddress = ['name' => $name];
            // 获取手机
            $mobile = $req->param('mobile');
            if (empty($mobile)) {
                return json([
                    'code'      =>  511,
                    'message'   =>  '很抱歉、请提供收货人手机！'
                ]);
            }
            $userAddress['mobile'] = $mobile;
            // 获取省份
            $province = $req->param('province');
            if (empty($province)) {
                return json([
                    'code'      =>  511,
                    'message'   =>  '很抱歉、请选择省份！'
                ]);
            }
            $userAddress['province'] = $province;
            // 获取城市
            $city = $req->param('city');
            if (empty($city)) {
                return json([
                    'code'      =>  511,
                    'message'   =>  '很抱歉、请选择城市！'
                ]);
            }
            $userAddress['city'] = $city;
            // 获取区县
            $county = $req->param('county');
            if (empty($county)) {
                return json([
                    'code'      =>  511,
                    'message'   =>  '很抱歉、请选择区县！'
                ]);
            }
            $userAddress['county'] = $county;
            // 获取详细地址
            $address = $req->param('address');
            if (empty($address)) {
                return json([
                    'code'      =>  511,
                    'message'   =>  '很抱歉、请提供详细地址！'
                ]);
            }
            $userAddress['address'] = $address;
            // 获取备注
            $remark = $req->param('remark') ?: '';
            $userAddress['remark'] = $remark;
            $userAddress = json_encode($userAddress);
        }
        // 业务编号
        $business = 22;
        if ($product['catalog'] == 1) {
            $business = 20;
        } else if ($product['catalog'] == 2) {
            $business = 19;
        }
        try {
            // 开启事务
            Db::startTrans();
            // 减少库存
            $this->stock($product['id']);
            // 使用激活码
            $code = $req->param('code');
            if ($activation && $code) {
                // 判断激活码
                if (empty($code) || strlen($code) < 6) {
                    throw new \think\Exception("很抱歉、激活码格式不正确！");
                }
                // 是否蚁后的激活码
                $code_prefix = substr($code, 0, 1);
                if (strtolower($code_prefix) != 'm') {
                    throw new \think\Exception("很抱歉、错误的激活码！ -1");
                }
                $code_number = (int) substr($code, 1, 2);
                if ($code_number != $id) {
                    throw new \think\Exception("很抱歉、错误的激活码！ -2");
                }
                // 票券对象
                $tk = new Ticket();
                $ticket = $tk->get($code);
                if (empty($ticket)) {
                    throw new \think\Exception("很抱歉、激活码不存在！");
                }
                if (!empty($ticket['username'])) {
                    throw new \think\Exception("很抱歉、激活码已被使用！");
                }
                // 使用票券
                $tk->update($code, $username);
            } else {
                // 减少余额
                if (empty($product['username'])) {
                    // 买官方商品、直接扣钱
                    (new Wallet())->change($username, $business, [
                        $available['key']   =>  [$user['wallet'][$available['field']], -$product[$price_field], $user['wallet'][$available['field']] - $product[$price_field]]
                    ]);
                } else {
                    // 买其他人的商品、先冻结金额
                    (new Wallet())->change($username, $business, [
                        $available['key']   =>  [$user['wallet'][$available['field']], -$product[$price_field], $user['wallet'][$available['field']] - $product[$price_field]],
                        $frozen['key']      =>  [$user['wallet'][$frozen['field']], $product[$price_field], $user['wallet'][$frozen['field']] + $product[$price_field]],
                    ]);
                }
            }
            // 状态
            $status = $product['catalog'] == 1 || $product['catalog'] == 2 ? 1 : 2;
            // 创建订单
            $charge = config('hello.store.seller.charge') ?: 0;
            $bool = Db::table('order')->insert([
                'oid'       =>  $this->generateOID(),
                'status'    =>  $status,
                'seller'    =>  $product['username'],
                'buyer'     =>  $username,
                'product'   =>  $id,
              	'tprice'	=>  0,
                'title'     =>  $product['title'],
                'currency'  =>  $available['key'],
                'price'     =>  $product[$price_field],
                'charge'    =>  empty($product['username']) ? 0 : $product[$price_field] * $charge,
                'code'      =>  $code,
                'power'     =>  $product['power'],
                'address'   =>  $userAddress,
                'express'   =>  null,
                'create_at' =>  $this->timestamp,
                'update_at' =>  $this->timestamp,
            ]);
            if (empty($bool)) {
                return json([
                    'code'      =>  512,
                    'message'   =>  '很抱歉、订单创建失败请重试！'
                ]);
            }
            // 如果是蚁后
            if ($product['catalog'] == 1) {
                // 创建蚁后
                (new Machine())->create($username, $product);
                // 操作日志
                if ($activation) {
                    $this->log(30, '使用激活码：' . $code . '购买' . $product['title'] . '，周期：' . $product['cycle'] . '小时，收益：' . $product['income']);
                } else {
                    $this->log(30, $product[$price_field] . '购买' . $product['title'] . '，周期：' . $product['cycle'] . '小时，收益：' . $product['income']);
                }
            } else if ($product['catalog'] == 2) {
                // 如果是算力道具
                // 保存道具使用记录
                $bool = Db::table('pool')->insert([
                    'username'      =>  $username,
                    'action'        =>  2,
                    'power'         =>  $user['dashboard']['power'],
                    'prop'          =>  $product['title'],
                    'spend'         =>  $product[$price_field],
                    'reward'        =>  $product['power'],
                    'create_at'     =>  $this->timestamp
                ]);
                if (empty($bool)) {
                    return json([
                        'code'      =>  513,
                        'message'   =>  '很抱歉、服务器繁忙请稍后再试！'
                    ]);
                }
                // 算力增加
                (new Account())->dashboard($username, [
                    'power'     =>  Db::raw('power+' . $product['power'])
                ]);
                // 操作日志
                $this->log(67);
            } else {
                // 操作日志
                $this->log(32);
            }
            // 提交事务
            Db::commit();
        } catch (\Exception $e) {
            Db::rollback();
            return json([
                'code'      =>  555,
                'message'   =>  $e->getMessage(),
            ]);
        }
        // 操作成功
    	return json([
    		'code'			=>	200,
    		'message'		=>	'恭喜您、操作成功！'
    	]);
    }

  	function today_price(){
        $markets = Db::table('market')->field('date, price, high, low')->where('date', '<=', date('Y-m-d'))->order('date DESC')->limit(7)->select();
        if (empty($markets)) {
            $markets[] = [
                'date'	=>	date('Y-m-d'),
                'price'	=>	2,
                'high'	=>	2,
                'low'	=>	2,
            ];
        }
        // 不足一周则补齐
        $count = count($markets);
        for ($i = $count; $i < 7; $i++) {
            $count = count($markets);
            array_push($markets, [
                'date'	=>	date('Y-m-d', strtotime($markets[$count - 1]['date']) - 86400),
                'price'	=>	$markets[$count - 1]['price'] - 0.02,
                'high'	=>	$markets[$count - 1]['price'] - 0.02,
                'low'	=>	$markets[$count - 1]['price'] - 0.02,
            ]);
        }
        // 数据格式化
        foreach ($markets as $key => $value) {
            $markets[$key]['price'] = money($markets[$key]['price']);
            $markets[$key]['high'] = money($markets[$key]['high']);
            $markets[$key]['low'] = money($markets[$key]['low']);
        }
        return $markets[0]['price'];
    }

    /**
     * 我的订单
     */
    public function order(Request $req)
    {
        // 用户账号
        $username = session('user.account.username');
        // 查询订单
        if ($req->isPost()) {
            // 分页数据
            $page = $req->param('page/d', 1);
            $size = $req->param('size/d', 20);
            $offset = $page - 1 < 0 ? 0 : ($page - 1) * $size;
            // 查询对象
            $query = Db::table('order')->alias('o')
                    ->leftJoin('store s', 's.id = o.product')
                    ->leftJoin('profile p_seller', 'p_seller.username = o.seller')
                    ->leftJoin('profile p_buyer', 'p_buyer.username = o.buyer')
                    ->field('o.oid, o.status, o.title, o.price, o.charge, o.address, o.express, p_seller.username AS seller_username, p_seller.nickname AS seller_nickname, p_buyer.username AS buyer_username, p_buyer.nickname AS buyer_nickname, o.update_at AS date');
            // 条件：按类目搜索
            $catalog = $req->param('catalog/d');
            if (!empty($catalog)) {
                $query->where('s.catalog', '=', $catalog);
            }
            // 条件：按状态搜索
            $status = $req->param('status/d');
            if (!empty($status)) {
                $query->where('o.status', '=', $status);
            }
            // 条件：按身份搜索
            $role = $req->param('role');
            if (!empty($role) && in_array($role, ['buyer', 'seller'])) {
                $query->where('o.' . $role, '=', $username);
            } else {
                $query->where('o.seller|o.buyer', '=', $username);
            }
            // 查询数据
            $data = $query->order('o.update_at DESC')->limit($offset, $size)->select();
            // 循环数据
            foreach ($data as $key => $item) {
                // 卖家资料
                $item['seller'] = [
                    'username'  =>  $item['seller_username'],
                    'nickname'  =>  $item['seller_nickname'],
                ];
                // 买家资料
                $item['buyer'] = [
                    'username'  =>  $item['buyer_username'],
                    'nickname'  =>  $item['buyer_nickname'],
                ];
                // 我的身份
                if ($username == $item['buyer_username']) {
                    $item['role'] = 'buyer';
                } else {
                    $item['role'] = 'seller';
                }
                // 收货信息
                if (!empty($item['address'])) {
                    $item['address'] = json_decode($item['address'], true);
                }
                // 保存数据
                unset($item['seller_username'], $item['seller_nickname'], $item['buyer_username'], $item['buyer_nickname']);
                $data[$key] = $item;
            }
            // 返回数据
            return json([
                'code'      =>  200,
                'message'   =>  '恭喜您、操作成功！',
                'data'      =>  $data
            ]);
        }
        // 显示页面
        return $this->fetch();
    }

    /**
     * 商家中心
     */
    public function seller(Request $req)
    {
        // 获取配置
        $config = config('hello.store.seller');
        // 未开启
        if (empty($config) || empty($config['enable'])) {
            $this->error('很抱歉、该模块尚未开启！');
            exit;
        }
        // 用户账号
        $username = session('user.account.username');
        // 查询用户
        $user = (new Account())->instance($username);
        if (empty($user)) {
            $this->error('很抱歉、请重新登录！');
            exit;
        }
        if (empty($user['account']['status'])) {
            $this->error('很抱歉、您的账户已被冻结！');
            exit;
        }
        // 实名认证
        if ($user['account']['authen'] != 1) {
            $this->error('很抱歉、您需要先完成实名认证！');
            exit;
        }
        // 我的订单
        $myOrders = Db::table('order')->where('seller', '=', $username)->group('status')->column('status, COUNT(id) AS count');
        $this->assign('myOrders', $myOrders);
        // 我的商品
        $products = Db::table('store')->where('username', '=', $username)->order('sort DESC, create_at ASC')->select();
        $this->assign('products', $products);
        // 显示页面
        return $this->fetch();
    }

    /**
     * 发布商品
     */
    public function publish(Request $req)
    {
        // 获取配置
        $config = config('hello.store.seller');
        // 未开启
        if (empty($config) || empty($config['enable'])) {
            $this->error('很抱歉、该模块尚未开启！');
            exit;
        }
        // 用户账号
        $username = session('user.account.username');
        // 查询用户
        $user = (new Account())->instance($username);
        if (empty($user)) {
            $this->error('很抱歉、请重新登录！');
            exit;
        }
        if (empty($user['account']['status'])) {
            $this->error('很抱歉、您的账户已被冻结！');
            exit;
        }
        // 实名认证
        if ($user['account']['authen'] != 1) {
            $this->error('很抱歉、您需要先完成实名认证！');
            exit;
        }
        // 提交发布
        if ($req->isPost()) {
            try {
                // 开启事务
                Db::startTrans();
                // 按等级限量
                if (array_key_exists('limit', $config)) {
                    $limits = $config['limit'];
                    if (array_key_exists($user['account']['type'], $limits)) {
                        $limit = $limits[$user['account']['type']];
                        // 查询我已发布的数量
                        $count = Db::table('store')->where('username', '=', $username)->count('id');
                        if ($count >= $limit) {
                            return json([
                                'code'      =>  501,
                                'message'   =>  '很抱歉、您当前级别只允许发布' . $limit . '个商品！'
                            ]);
                        }
                    }
                }
                // 获取名称
                $title = $req->param('title');
                if (empty($title)) {
                    return json([
                        'code'      =>  502,
                        'message'   =>  '很抱歉、请提供宝贝名称！'
                    ]);
                }
                // 获取类目
                $catalog = $req->param('catalog');
                if (empty($catalog)) {
                    return json([
                        'code'      =>  503,
                        'message'   =>  '很抱歉、请选择所属类目！'
                    ]);
                }
                // 获取库存
                $stock = $req->param('stock/d');
                if (empty($stock) || $stock <= 0) {
                    return json([
                        'code'      =>  504,
                        'message'   =>  '很抱歉、请提供库存数量！'
                    ]);
                }
                // 获取价格
                $price = $req->param('price/f');
                if (empty($price) || $price <= 0) {
                    return json([
                        'code'      =>  505,
                        'message'   =>  '很抱歉、请提供销售价格！'
                    ]);
                }
                // 图片上传
                $file = $req->file('image');
                $folder = Env::get('root_path') . 'public/store/';
                is_dir($folder . date('Ymd')) or mkdir($folder . date('Ymd'), 0777, true);
                // 图片检查
                $info = $file->validate(['ext' => 'jpg,jpeg,png'])->check();
                if (!$info) {
                    return json([
                        'code'      =>  506,
                        'message'   =>  '很抱歉、错误的宝贝主图！'
                    ]);
                }
                // 图片压缩
                $imageObj = \think\Image::open($file);
                $image = date('Ymd') . '/' . md5(time() . mt_rand()) . '.' . $imageObj->type();
                $imageObj->thumb(640, 1136)->save($folder . $image);
                // 获取详情
                $content = $req->param('content');
                // 是否需要审核
                $audit = config('hello.store.seller.audit');
                $audit = empty($audit) ? 1 : 0;
                // 添加数据
                $row = Db::table('store')->insert([
                    'sort'      =>  0,
                    'status'    =>  1,
                    'audit'     =>  $audit,
                    'catalog'   =>  $catalog,
                    'username'  =>  $username,
                    'divide'    =>  0,
                    'title'     =>  $title,
                    'image'     =>  $image,
                    'cycle'     =>  0,
                    'income'    =>  0,
                    'power'     =>  0,
                    'price'     =>  $price,
                    'limit'     =>  0,
                    'day'       =>  0,
                    'sales'     =>  0,
                    'stock'     =>  $stock,
                    'content'   =>  $content,
                    'create_at' =>  $this->timestamp,
                    'update_at' =>  $this->timestamp,
                ]);
                if (empty($row)) {
                    return json([
                        'code'      =>  510,
                        'message'   =>  '很抱歉、宝贝发布失败请重试！'
                    ]);
                }
                // 提交事务
                Db::commit();
            } catch (\Exception $e) {
                Db::rollback();
                return json([
                    'code'      =>  555,
                    'message'   =>  $e->getMessage()
                ]);
            }
            // 操作成功
            return json([
                'code'      =>  200,
                'message'   =>  '恭喜您、操作成功！'
            ]);
        }
        // 显示页面
        return $this->fetch();
    }

    /**
     * 编辑商品
     */
    public function edit(Request $req)
    {
        // 获取配置
        $config = config('hello.store.seller');
        // 未开启
        if (empty($config) || empty($config['enable'])) {
            $this->error('很抱歉、该模块尚未开启！');
            exit;
        }
        // 用户账号
        $username = session('user.account.username');
        // 查询用户
        $user = (new Account())->instance($username);
        if (empty($user)) {
            $this->error('很抱歉、请重新登录！');
            exit;
        }
        if (empty($user['account']['status'])) {
            $this->error('很抱歉、您的账户已被冻结！');
            exit;
        }
        // 实名认证
        if ($user['account']['authen'] != 1) {
            $this->error('很抱歉、您需要先完成实名认证！');
            exit;
        }
        // 获取编号
        $id = $req->param('id/d');
        if (empty($id)) {
            $this->error('很抱歉、请提供宝贝编号！');
            exit;
        }
        // 查询宝贝
        $goods = Db::table('store')->where('id', '=', $id)->where('username', '=', $username)->find();
        if (empty($goods)) {
            $this->error('很抱歉、该宝贝不存在或已被删除！');
            exit;
        }
        $this->assign('goods', $goods);
        // 提交发布
        if ($req->isPost()) {
            try {
                // 开启事务
                Db::startTrans();
                // 获取名称
                $title = $req->param('title');
                if (empty($title)) {
                    return json([
                        'code'      =>  504,
                        'message'   =>  '很抱歉、请提供宝贝名称！'
                    ]);
                }
                // 获取类目
                $catalog = $req->param('catalog');
                if (empty($catalog)) {
                    return json([
                        'code'      =>  505,
                        'message'   =>  '很抱歉、请选择所属类目！'
                    ]);
                }
                // 获取库存
                $stock = $req->param('stock/d');
                if (empty($stock) || $stock <= 0) {
                    return json([
                        'code'      =>  506,
                        'message'   =>  '很抱歉、请提供库存数量！'
                    ]);
                }
                // 获取价格
                $price = $req->param('price/f');
                if (empty($price) || $price <= 0) {
                    return json([
                        'code'      =>  507,
                        'message'   =>  '很抱歉、请提供销售价格！'
                    ]);
                }
                // 图片上传
                $file = $req->file('image');
                $image = null;
                if (!empty($file)) {
                    $folder = Env::get('root_path') . 'public/store/';
                    is_dir($folder . date('Ymd')) or mkdir($folder . date('Ymd'), 0777, true);
                    // 图片检查
                    $info = $file->validate(['ext' => 'jpg,jpeg,png'])->check();
                    if (!$info) {
                        return json([
                            'code'      =>  508,
                            'message'   =>  '很抱歉、错误的宝贝主图！'
                        ]);
                    }
                    // 图片压缩
                    $imageObj = \think\Image::open($file);
                    $image = date('Ymd') . '/' . md5(time() . mt_rand()) . '.' . $imageObj->type();
                    $imageObj->thumb(640, 1136)->save($folder . $image);
                }
                // 获取详情
                $content = $req->param('content');
                // 更新数据
                $data = [
                    'catalog'   =>  $catalog,
                    'title'     =>  $title,
                    'price'     =>  $price,
                    'stock'     =>  $stock,
                    'content'   =>  $content,
                    'update_at' =>  $this->timestamp,
                ];
                // 是否需要审核
                $audit = config('hello.store.seller.audit');
                if (!empty($audit)) {
                    $data['audit'] = 0;
                }
                // 是否更换了图片
                if (!empty($image)) {
                    $data['image'] = $image;
                }
                $row = Db::table('store')->where('id', '=', $id)->update($data);
                if (empty($row)) {
                    return json([
                        'code'      =>  510,
                        'message'   =>  '很抱歉、宝贝更新失败请重试！'
                    ]);
                }
                // 提交事务
                Db::commit();
            } catch (\Exception $e) {
                Db::rollback();
                return json([
                    'code'      =>  555,
                    'message'   =>  $e->getMessage()
                ]);
            }
            // 操作成功
            return json([
                'code'      =>  200,
                'message'   =>  '恭喜您、操作成功！'
            ]);
        }
        // 显示页面
        return $this->fetch();
    }

    /**
     * 删除商品
     */
    public function delete(Request $req)
    {
        // 获取配置
        $config = config('hello.store.seller');
        // 未开启
        if (empty($config) || empty($config['enable'])) {
            $this->error('很抱歉、该模块尚未开启！');
            exit;
        }
        // 用户账号
        $username = session('user.account.username');
        // 查询用户
        $user = (new Account())->instance($username);
        if (empty($user)) {
            $this->error('很抱歉、请重新登录！');
            exit;
        }
        if (empty($user['account']['status'])) {
            $this->error('很抱歉、您的账户已被冻结！');
            exit;
        }
        // 实名认证
        if ($user['account']['authen'] != 1) {
            $this->error('很抱歉、您需要先完成实名认证！');
            exit;
        }
        // 获取编号
        $id = $req->param('id/d');
        if (empty($id)) {
            $this->error('很抱歉、请提供宝贝编号！');
            exit;
        }
        // 查询宝贝
        $goods = Db::table('store')->where('id', '=', $id)->where('username', '=', $username)->find();
        if (empty($goods)) {
            $this->error('很抱歉、该宝贝不存在或已被删除！');
            exit;
        }
        // 还有未完成的订单
        $count = Db::table('order')->where('product', '=', $id)->count('id');
        if (!empty($count) && $count > 0) {
            $this->error('很抱歉、还有未完成的订单！');
            exit;
        }
        // 删除宝贝
        $bool = Db::table('store')->where('id', '=', $id)->delete();
        if (empty($bool)) {
            $this->error('很抱歉、删除失败请重试！');
            exit;
        }
        // 操作成功
        $this->success('恭喜您、操作成功！');
        exit;
    }

    /**
     * 商品状态
     */
    public function status(Request $req)
    {
        // 获取配置
        $config = config('hello.store.seller');
        // 未开启
        if (empty($config) || empty($config['enable'])) {
            return json([
                'code'      =>  500,
                'message'   =>  '很抱歉、该模块尚未开启！',
            ]);
        }
        // 用户账号
        $username = session('user.account.username');
        // 查询用户
        $user = (new Account())->instance($username);
        if (empty($user)) {
            return json([
                'code'      =>  501,
                'message'   =>  '很抱歉、请重新登录！'
            ]);
        }
        if (empty($user['account']['status'])) {
            return json([
                'code'      =>  502,
                'message'   =>  '很抱歉、您的账户已被冻结！'
            ]);
        }
        // 实名认证
        if ($user['account']['authen'] != 1) {
            return json([
                'code'      =>  503,
                'message'   =>  '很抱歉、您需要先完成实名认证！'
            ]);
        }
        // 获取编号
        $id = $req->param('id/d');
        if (empty($id)) {
            return json([
                'code'      =>  504,
                'message'   =>  '很抱歉、请提供宝贝编号！'
            ]);
        }
        // 查询宝贝
        $goods = Db::table('store')->where('id', '=', $id)->where('username', '=', $username)->find();
        if (empty($goods)) {
            return json([
                'code'      =>  505,
                'message'   =>  '很抱歉、该宝贝不存在或已被删除！'
            ]);
        }
        // 调整宝贝
        $status = $req->param('status/d');
        $status = in_array($status, [1, 0]) ? $status : 1;
        $bool = Db::table('store')->where('id', '=', $id)->update([
            'status'        =>  $status,
            'update_at'     =>  $this->timestamp
        ]);
        if (empty($bool)) {
            return json([
                'code'      =>  506,
                'message'   =>  '很抱歉、宝贝更新失败请重试！'
            ]);
        }
        // 操作成功
        return json([
            'code'      =>  200,
            'message'   =>  '恭喜您、操作成功！'
        ]);
    }

    /**
     * 立即发货
     */
    public function shipped(Request $req)
    {
        // 获取配置
        $config = config('hello.store.seller');
        // 未开启
        if (empty($config) || empty($config['enable'])) {
            $this->error('很抱歉、该模块尚未开启！');
            exit;
        }
        // 用户账号
        $username = session('user.account.username');
        // 查询用户
        $user = (new Account())->instance($username);
        if (empty($user)) {
            $this->error('很抱歉、请重新登录！');
            exit;
        }
        if (empty($user['account']['status'])) {
            $this->error('很抱歉、您的账户已被冻结！');
            exit;
        }
        // 实名认证
        if ($user['account']['authen'] != 1) {
            $this->error('很抱歉、您需要先完成实名认证！');
            exit;
        }
        // 获取编号
        $oid = $req->param('oid');
        if (empty($oid)) {
            $this->error('很抱歉、请提供订单编号！');
            exit;
        }
        // 查询订单
        $order = Db::table('order')->where('oid', '=', $oid)->where('seller', '=', $username)->find();
        if (empty($order)) {
            $this->error('很抱歉、该订单不存在！');
            exit;
        }
        // 获取内容
        $send = $req->param('send');
        if (empty($send)) {
            $this->error('很抱歉、请填写发货信息！');
            exit;
        }
        // 更新数据
        $bool = Db::table('order')->where('oid', '=', $oid)->update([
            'status'        =>  3,
            'express'       =>  $send,
            'update_at'     =>  $this->timestamp,
        ]);
        if (empty($bool)) {
            $this->error('很抱歉、操作失败请再试一次！');
            exit;
        }
        // 操作成功
        $this->success('恭喜您、操作成功！');
        exit;
    }

    /**
     * 确认收货
     */
    public function confirm(Request $req)
    {
        // 获取配置
        $config = config('hello.store.seller');
        // 用户账号
        $username = session('user.account.username');
        try {
            // 开启事务
            Db::startTrans();
            // 获取安全密码
            $safeword = $req->param('safeword');
            if (empty($safeword)) {
                throw new \think\Exception('很抱歉、请输入安全密码！');
            }
            // 查询用户
            $ac = new Account();
            $user = $ac->instance($username, null, $safeword);
            if (empty($user)) {
                throw new \think\Exception('很抱歉、安全密码不正确！');
            }
            if (empty($user['account']['status'])) {
                throw new \think\Exception('很抱歉、您的账户已被冻结！');
            }
            // 实名认证
            if ($user['account']['authen'] != 1) {
                throw new \think\Exception('很抱歉、您需要先完成实名认证！');
            }
            // 获取编号
            $oid = $req->param('oid');
            if (empty($oid)) {
                throw new \think\Exception('很抱歉、请提供订单编号！');
            }
            // 查询订单
            $order = Db::table('order')->where('oid', '=', $oid)->where('buyer', '=', $username)->find();
            if (empty($order)) {
                throw new \think\Exception('很抱歉、该订单不存在！');
            }
            // 找到卖家
            $seller = $ac->instance($order['seller']);
            if (empty($seller)) {
                throw new \think\Exception('很抱歉、卖家的账号异常！');
            }
            if (empty($seller['account']['status'])) {
                throw new \think\Exception('很抱歉、卖家的账户已被冻结！');
            }
            // 我的钱减少
            $wl = new Wallet();
            $wl->change($username, 22, [
                2   =>  [$user['wallet']['deposit'], -$order['price'], $user['wallet']['deposit'] - $order['price']],
            ]);
            // 卖家的钱增加
            $wl->change($seller['account']['username'], 24, [
                1   =>  [$seller['wallet']['money'], $order['price'] - $order['charge'], $seller['wallet']['money'] + ($order['price'] - $order['charge'])],
            ]);
            // 更新订单
            $bool = Db::table('order')->where('oid', '=', $oid)->update([
                'status'        =>  1,
                'update_at'     =>  $this->timestamp,
            ]);
            if (empty($bool)) {
                throw new \think\Exception('很抱歉、操作失败请再试一次！');
            }
            // 提交事务
            Db::commit();
        } catch (\Exception $e) {
            Db::rollback();
            $this->error($e->getMessage());
            exit;
        }
        // 操作成功
        $this->success('恭喜您、操作成功！');
        exit;
    }
}
