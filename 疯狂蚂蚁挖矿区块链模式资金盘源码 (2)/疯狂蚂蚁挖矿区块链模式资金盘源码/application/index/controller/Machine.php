<?php

namespace app\index\controller;

use think\Db;
use think\Request;

class Machine extends Base
{
	// +----------------------------------------------------------------------
    // | 私有函数
    // +----------------------------------------------------------------------

    /**
     * 生成MID
     */
    public function generateMID()
    {
        $prefix = chr(mt_rand(65, 90));
        do {
            $number = mt_rand(1000000, 9999999);
            $mid = $prefix . $number;
        } while (!empty(Db::table('uuid')->where('id', '=', $mid)->find()));
        $bool = Db::table('uuid')->insert(['id' => $mid, 'type' => 2]);
        if (empty($bool)) {
            throw new \think\Exception("很抱歉、蚁后编号生成失败！");
        }
        return $mid;
    }

    /**
     * 计算收益
     */
    public function compute($machine)
    {
        // 当前时间
        $now = time();
        // 每小时产量
        $yield = money($machine['income'] / $machine['cycle']);
        // 创建时间
        $create_at = strtotime($machine['create_at']);
        // 过期时间
        $expire_at = $create_at + $machine['cycle'] * 3600;
        // 上次领矿时间
        $profit_at = $machine['profit_at'] ? strtotime($machine['profit_at']) : $create_at;
        // 间隔时间
        $interval = $now - $profit_at;
        // 还没有领完
        if ($machine['profit'] < $machine['income']) {
            // 当前时间已经超过了过期时间、应该能将剩余的收益全部领取完
            if ($now > $expire_at) {
                return $machine['income'] - $machine['profit'];
            }
            // 最少需要间隔一个小时
            if ($interval >= 3600) {
                // 之前没领过
                if ($profit_at == $create_at) {
                    $start = $create_at;
                } else {
                    $start = $create_at + $machine['profit'] / $yield * 3600;
                }
                // 从创建时间起，一个小时后才能开始领取
                $start += 3600;
                // 从开始时间 + 3600 * n ，但是要小于当前时间
                $count = 0;
                for (; $start <= $expire_at && $start < $now; $start += 3600) {
                    $count++;
                }
                // 判断结果
                $result = $count * $yield;
                if ($machine['profit'] + $result > $machine['income']) {
                    $result = $machine['income']- $machine['profit'];
                }
                // 返回结果
                return $result;
            }
        }
        // 没有矿可以领
        return 0;
    }

    /**
     * 计算收益，测试用的
     */
    public function compute2($now, $create_at, $profit_at, $income, $cycle, $profit = 0)
    {
        // 当前时间
        $now = strtotime($now);
        // 每小时产量
        $yield = money($income / $cycle);
        // 创建时间
        $create_at = strtotime($create_at);
        // 过期时间
        $expire_at = $create_at + $cycle * 3600;
        // 上次领矿时间
        $profit_at = $profit_at ? strtotime($profit_at) : $create_at;
        // 间隔时间
        $interval = $now - $profit_at;
        // 还没有领完
        if ($profit < $income) {
            // 最少需要间隔一个小时
            if ($interval >= 3600) {
                // 之前没领过
                if ($profit_at == $create_at) {
                    $start = $create_at;
                } else {
                    $start = $create_at + $profit / $yield * 3600;
                }
                // 从创建时间起，一个小时后才能开始领取
                $start += 3600;
                // 从开始时间 + 3600 * n ，但是要小于当前时间
                $count = 0;
                for (; $start <= $expire_at && $start < $now; $start += 3600) {
                    $count++;
                }
                // 判断结果
                $result = $count * $yield;
                if ($profit + $result > $income) {
                    $result = $income- $profit;
                }
                // 返回结果
                return $result;
            }
        }
        // 没有矿可以领
        return 0;
    }

    // +----------------------------------------------------------------------
    // | 内部方法
    // +----------------------------------------------------------------------

    /**
     * 创建蚁后
     * @param   $source     来源，1：购买，2：赠送
     */
	public function create($username, $product, $source = 1)
	{
        // 蚁后数据
		$data = [
			'mid'			=>	$this->generateMID(),
			'status'		=>	1,
            'source'        =>  $source,
			'username'	    =>	$username,
            'product'       =>  $product['id'],
			'divide'		=>	$product['divide'],
			'name'			=>	$product['title'],
			'cycle'			=>	$product['cycle'],
			'income'		=>	$product['income'],
			'power'			=>	$product['power'],
			'price'			=>	$product['price'],
			'profit'		=>	0,
			'count'			=>	0,
			'profit_at'		=>	null,
			'create_at'		=>	$this->timestamp,
			'update_at'		=>	$this->timestamp,
		];
        // 添加蚁后
		$bool = Db::table('machine')->insert($data);
		if (empty($bool)) {
			throw new \think\Exception("很抱歉、蚁后初始化失败！");
		}
        // 账户对象
        $ac = new Account();
        // 自己的仪表盘更新
        $ac->dashboard($username, [
            'machine_count' =>  Db::raw('machine_count+1'),
            'machine_power' =>  Db::raw('machine_power+'.$product['power']),
            'power'         =>  Db::raw('power+'.$product['power']),
        ]);
        // 上级的仪表盘更新
        $inviter = $ac->value($username, ['type', 'inviter']);
        if (!empty($inviter) && !empty($inviter['inviter'])) {
            if (empty(config('hello.store.machine.rebate'))) {
                // 不存在佣金、只需更新上级算力
                $this->team_power($inviter, $product['power']);
            } else {
                // 存在佣金、需要更新上级算力和佣金
                $this->team_power_commission($inviter, $product['power'], $product['price']);
            }
        }
	}

    /**
     * 递归：团队算力
     * @param  $power  蚁后的算力
     * @param  $index  层级，最多8层
     */
    public function team_power($inviter, $power, $index = 1)
    {
        // 账户对象
        $ac = new Account();
        // 我能拿到的算力
        $team_power = config('hello.level.' . $inviter['type'] . '.team_power');
        if (!empty($team_power) && $team_power > 0) {
            // 要增加的算力
            $myPower = money($team_power * $power);
            if ($myPower > 0) {
                // 更新算力
                $ac->dashboard($inviter['inviter'], [
                    'power'         =>  Db::raw('power+' . $myPower),
                    'team_power'    =>  Db::raw('team_power+' . $myPower),
                ]);
            }
        }
        // 获取上级的信息
        if ($index <= 8) {
            $parent = $ac->value($inviter['inviter'], ['type', 'inviter']);
            if (!empty($parent) && !empty($parent['inviter'])) {
                $this->team_power($parent, $power, $index + 1);
            }
        }
    }

    /**
     * 递归：团队算力、上级收益
     * @param  $power  蚁后的算力
     * @param  $price  蚁后的价格
     * @param  $index  层级，最多8层
     */
    public function team_power_commission($inviter, $power, $price, $index = 1)
    {
        // 账户对象
        $ac = new Account();
        // 我能拿到的佣金
        $commissions = config('hello.level.' . $inviter['type'] . '.commission');
        if (!empty($commissions) && array_key_exists($index, $commissions)) {
            // 具体的佣金
            $commission = $commissions[$index] * $price;
            if ($commission > 0) {
                // 我的资料
                $user = $ac->instance($inviter['inviter']);
                // 增加佣金
                (new Wallet())->change($inviter['inviter'], 29, [
                    1   =>  [
                        $user['wallet']['money'],
                        $commission,
                        $user['wallet']['money'] + $commission
                    ],
                ]);
            }
        }
        // 我能拿到的算力
        $team_power = config('hello.level.' . $inviter['type'] . '.team_power');
        if (!empty($team_power) && $team_power > 0) {
            // 要增加的算力
            $myPower = money($team_power * $power);
            if ($myPower > 0) {
                // 更新算力
                $ac->dashboard($inviter['inviter'], [
                    'power'         =>  Db::raw('power+' . $myPower),
                    'team_power'    =>  Db::raw('team_power+' . $myPower),
                ]);
            }
        }
        // 获取上级的信息
        if ($index <= 8) {
            $parent = $ac->value($inviter['inviter'], ['type', 'inviter']);
            if (!empty($parent) && !empty($parent['inviter'])) {
                $this->team_power_commission($parent, $power, $price, $index + 1);
            }
        }
    }

    /**
     * 递归：团队收益
     * @param  $index   第几层上级
     * @param  $profit  一键收矿时总共收了多少矿
     * @param  $divide  蚁后最多允许几层上级可以获得收益
     */
    public function team_profit($inviter, $index, $profit, $divide)
    {
        // 在蚁后的允许范围内
        if ($divide >= $index) {
            // 获取上级的信息
            $user = (new Account())->instance($inviter);
            // 上级级别
            $level = $user['account']['type'];
            // 查询该级别的配置
            $config = config('hello.level.'.$level);
            // 存在该级别的配置，并且该级别拥有团队收矿利益配置
            if (!empty($config) && !empty($config['profit'])) {
                // 拥有这一代的配置
                if (array_key_exists($index, $config['profit'])) {
                    // 我能拿多少比例
                    $profit_rate = $config['profit'][$index];
                    if ($profit_rate > 0) {
                        // 实际拿到的利润
                        $money = $profit_rate * $profit;
                        // 加钱
                        (new Wallet())->change($inviter, 30, [
                            1   =>  [$user['wallet']['money'], $money, $user['wallet']['money'] + $money]
                        ]);
                        // 继续给上级的上级加钱
                        if (!empty($user['account']['inviter'])) {
                            $this->team_profit($user['account']['inviter'], $index + 1, $profit, $divide);
                        }
                    }
                }
            }
        }
    }

    // +----------------------------------------------------------------------
    // | 对外接口
    // +----------------------------------------------------------------------

    /**
     * 我的蚁后
     */
    public function index(Request $req)
    {
        // 我的账号
        $username = session('user.account.username');      	
        $user = (new Account())->instance($username);

        // 查询蚁后
        $machines = Db::table('machine')
                    ->where('username', '=', $username)
                    ->where('status', '=', 1)
                    ->order('create_at DESC')->select();
        // 当前时间
        $now = time();
        // 总算力
        $power = 0;
        // 运行中的蚁后
        $running = [];
        // 已过期的蚁后
        $expire = [];
        // 当前可以领取的收益
        $profit = 0;
        // 循环蚁后
        foreach ($machines as $key => $item) {
            // 剩余时间
            $start = strtotime($item['create_at']);
            $end = (($now - $start) / 60 / 60) / $item['cycle'];
            $item['already'] = ceil(($now - $start) / 60 / 60);
            $rate = round($end * 100);
            $rate = $rate < 0 ? 0 : $rate;
            $item['rate'] = $rate;
            // 剩余时间的颜色
            if ($rate < 60) {
                $item['color'] = 'green';
            } else if ($rate >= 60 && $rate < 80) {
                $item['color'] = 'yellow';
            } else {
                $item['color'] = 'red';
            }
            $item['yuji'] = ($item['income'] / $item['cycle']);
            // 总算力
            $power += $item['power'];
          	$item['mimg'] = Db::table('store')->where('id','=',$item['product'])->value('image');
            if ($end >= 1) {
                $item['status'] = 0;
                $expire[] = $item;
            } else {
                // $yield += money($item['income'] / $item['cycle']);
                $running[] = $item;
            }
          	
            // 计算可领取收益
            $profit += $this->compute($item);
        }
        // 领取记录
        $clocks = Db::table('clock')->alias('c')
                    ->join('machine m', 'm.mid = c.mid')
                    ->field('m.name, c.*')
                    ->where('c.username', '=', $username)
                    ->order('c.create_at DESC')->limit(20)->select();
      	$store = Db::table('store')->where('status','=',1)->order('sort desc')->select();
      	$this->assign('store', $store);
        $this->assign('power', $power);
        $this->assign('profit', $profit);
        $this->assign('expire', $expire);
        $this->assign('running', $running);
        $this->assign('machines', $machines);
        $this->assign('clocks', $clocks);
      	
        return $this->fetch();
    }

    /**
     * 一键收矿
     */
    public function profit(Request $req)
    {
        try {
            // 开启事务
            Db::startTrans();
            // 用户账号
            $username = session('user.account.username');
            // 账户对象
            $ac = new Account();
            // 查询账户
            $user = $ac->instance($username);
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
            // 我的蚁后
            $machines = Db::table('machine')
                        ->where('username', '=', $username)
                        ->where('status', '=', 1)
                        ->order('create_at DESC')->select();
            // 可领取收益
            $profit = 0;
            // 领取记录列表
            $logs = [];
            // 循环蚁后
            foreach ($machines as $key => $machine) {
                // 计算收益
                $money = $this->compute($machine);
                // 存在可领取的收益
                if ($money > 0) {
                    // 累计总收益
                    $profit += $money;
                    // 更新蚁后状态
                    $row = Db::table('machine')->where('mid', '=', $machine['mid'])->update([
                        'profit'    =>  Db::raw('profit+' . $money),
                        'count'     =>  Db::raw('count+1'),
                        'profit_at' =>  $this->timestamp,
                        'update_at' =>  $this->timestamp,
                    ]);
                    if (empty($row)) {
                        return json([
                            'code'      =>  503,
                            'message'   =>  '很抱歉、服务器繁忙请稍后再试！ -1',
                        ]);
                    }
                    // 保存领取日志
                    $logs[] = [
                        'username'      =>  $username,
                        'mid'           =>  $machine['mid'],
                        'money'         =>  $money,
                        'create_at'     =>  $this->timestamp,
                    ];
                    // 这是最后一次领取
                    if ($money + $machine['profit'] >= $machine['income']) {
                        $ac->dashboard($username, [
                            'machine_expire'    =>  Db::raw('machine_expire+1')
                        ]);
                    }
                    // 递归：团队收益
                    if (!empty($user['account']['inviter'])) {
                        $this->team_profit($user['account']['inviter'], 1, $money, $machine['divide']);
                    }
                }
            }
            // 没有矿可以领取
            if ($profit <= 0) {
                return json([
                    'code'      =>  504,
                    'message'   =>  '很抱歉、请过一段时间再来！',
                ]);
            }
            // 存在日志记录
            if (!empty($logs)) {
                // 保存领矿记录
                $row = Db::table('clock')->insertAll($logs);
                if ($row != count($logs)) {
                    return json([
                        'code'      =>  505,
                        'message'   =>  '很抱歉、服务器繁忙请稍后再试！ -2',
                    ]);
                }
            }
            // 存在可领矿石
            if ($profit > 0) {
                // 更新余额
                (new Wallet())->change($username, 21, [
                    1 => [
                        $user['wallet']['money'],
                        $profit,
                        $user['wallet']['money'] + $profit
                    ]
                ]);
            }
            // 操作日志
            $this->log(31, $profit);
            // 提交事务
            Db::commit();
        } catch (\Exception $e) {
            Db::rollback();
            return json([
                'code'      =>  500,
                'message'   =>  $e->getMessage()
            ]);
        }
        // 操作成功
        return json([
            'code'      =>  200,
            'message'   =>  '恭喜您、操作成功！'
        ]);
    }
    public function allprofit(Request $req)
    {
        try {
            // 开启事务
            Db::startTrans();
            // 用户账号
            $username = session('user.account.username');
            // 账户对象
            $ac = new Account();
            // 查询账户
            $user = $ac->instance($username);
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
            // 我的蚁后
            $machines = Db::table('machine')
                ->where('username', '=', $username)
                ->where('status', '=', 1)
                ->order('create_at DESC')->select();
            // 可领取收益
            $profit = 0;
            // 领取记录列表
            $logs = [];
            // 循环蚁后
            foreach ($machines as $key => $machine) {
                // 计算收益
                $money = $this->compute($machine);
                // 存在可领取的收益
                if ($money > 0) {
                    // 累计总收益
                    $profit += $money;
                    // 更新蚁后状态
                    $row = Db::table('machine')->where('mid', '=', $machine['mid'])->update([
                        'profit'    =>  Db::raw('profit+' . $money),
                        'count'     =>  Db::raw('count+1'),
                        'profit_at' =>  $this->timestamp,
                        'update_at' =>  $this->timestamp,
                    ]);
                    if (empty($row)) {
                        return json([
                            'code'      =>  503,
                            'message'   =>  '很抱歉、服务器繁忙请稍后再试！ -1',
                        ]);
                    }
                    // 保存领取日志
                    $logs[] = [
                        'username'      =>  $username,
                        'mid'           =>  $machine['mid'],
                        'money'         =>  $money,
                        'create_at'     =>  $this->timestamp,
                    ];
                    // 这是最后一次领取
                    if ($money + $machine['profit'] >= $machine['income']) {
                        $ac->dashboard($username, [
                            'machine_expire'    =>  Db::raw('machine_expire+1')
                        ]);
                    }
                    // 递归：团队收益
                    if (!empty($user['account']['inviter'])) {
                        //$this->team_profit($user['account']['inviter'], 1, $money, $machine['divide']);
                    }
                }
            }
            // 没有矿可以领取
            if ($profit <= 0) {
                return json([
                    'code'      =>  504,
                    'message'   =>  '很抱歉、请过一段时间再来！',
                ]);
            }
            // 存在日志记录
            if (!empty($logs)) {
                // 保存领矿记录
                $row = Db::table('clock')->insertAll($logs);
                if ($row != count($logs)) {
                    return json([
                        'code'      =>  505,
                        'message'   =>  '很抱歉、服务器繁忙请稍后再试！ -2',
                    ]);
                }
            }
            // 存在可领矿石
            if ($profit > 0) {
                // 更新余额
                (new Wallet())->change($username, 21, [
                    7 => [
                        $user['wallet']['mpocket'],
                        $profit,
                        $user['wallet']['mpocket'] + $profit
                    ]
                ]);
            }
            // 操作日志
            $this->log(31, $profit);
            // 提交事务
            Db::commit();
        } catch (\Exception $e) {
            Db::rollback();
            return json([
                'code'      =>  500,
                'message'   =>  $e->getMessage()
            ]);
        }
        // 操作成功
        return json([
            'code'      =>  200,
            'message'   =>  '恭喜您、操作成功！'
        ]);
    }
    public function shop(Request $req)
    {
        $username = session('user.account.username');
        // 账户对象
        $ac = new Account();
        // 查询账户
        $user = $ac->instance($username);

        $id = $req->param('id/d', 1);
        $machine = Db::table('store')->where('catalog', '=', 1)->where('status', '=', 1)->where('id', '=', $id)->find();
        if(empty($machine)){
            $this->error('很抱歉、不可用的产品！');
        }
        $machine['chanliang'] = money(($machine['income']/$machine['cycle']));
        $this->assign('user', $user);
        $this->assign('id', $id);
        $this->assign('machine', $machine);
        // 显示页面
        return $this->fetch();
    }
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

        // 查询产品
        $product = Db::table('store')->where('id', '=', $id)->find();
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
        $mtype = $req->param('type');
        if($mtype==1){
            $mymoney = $user['wallet']['mpocket'];
        }else{
            $mymoney = $user['wallet']['money'];
        }
        // 余额判断
        if ($mymoney < $product['price']) {
            return json([
                'code'      =>  507,
                'message'   =>  '很抱歉、余额不足！'
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
        $business = 20;
        try {
            // 开启事务
            Db::startTrans();
            // 减少库存
            (new Store())->stock($product['id']);
            if($mtype == 1){
                (new Wallet())->change($username, $business, [
                    7  =>  [$user['wallet']['mpocket'], -$product['price'], $user['wallet']['mpocket'] - $product['price']]
                ]);
            }else{
                (new Wallet())->change($username, $business, [
                    1  =>  [$user['wallet']['money'], -$product['price'], $user['wallet']['money'] - $product['price']]
                ]);
            }


            // 状态
            $status = 1;
            // 创建订单
            $charge = config('hello.store.seller.charge') ?: 0;
            $bool = Db::table('order')->insert([
                'oid'       =>  (new Store())->generateOID(),
                'status'    =>  $status,
                'seller'    =>  $product['username'],
                'buyer'     =>  $username,
                'product'   =>  $id,
                'tprice'	=>  0,
                'title'     =>  $product['title'],
                'currency'  =>  $mtype == 1?7:1,
                'price'     =>  $product['price'],
                'charge'    =>  0,
                'code'      =>  '',
                'power'     =>  $product['power'],
                'address'   =>  '',
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

            (new Machine())->create($username, $product);
            $this->log(30, $product['price'] . '购买' . $product['title'] . '，周期：' . $product['cycle'] . '小时，收益：' . $product['income']);

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
}
