<?php

namespace app\index\controller;

use think\Db;
use think\Request;
use think\facade\Env;

class Contract extends Base
{

	/**
	 * 动作类型
	 */
	const ACTION_PURCHASE = 1;			// 一口价 		增加 	全部比例

	const ACTION_GROUP = 2;				// 团购  		增加 	部分比例

	const ACTION_TRANSFER = 3;			// 转让 			减去 	全部比例

	const ACTION_EXTENDS = 4;			// 继承 			增加 	全部比例

	const ACTION_SELL = 5;				// 出售 			减去 	部分比例

	const ACTION_PROFIT = 6;			// 领取收益      无  	无

	const ACTION_COMMISSION = 18;		// 上级佣金 		无 		无
	const ACTION_AGENT = 19;			// 代理佣金 		无 		无

	/**
	 * 收银台的数据
	 */
	private $_cid = null;				// 当前商品
	private $_bill = [];				// 所有账单
	private $_action = [];				// 操作记录
	private $_capital = [];				// 资金流水
	private $_percent = [];				// 比例份额

	// +----------------------------------------------------------------------
    // | 内部方法
    // +----------------------------------------------------------------------

	/**
	 * 获取商品
	 */
	public function get($id)
	{
		// 获取商品
		$obj = Db::table('contract')->where('id', '=', $id)->find();
		if (empty($obj)) {
			throw new \think\Exception("很抱歉、该商品不存在！");
		}
		// 格式化数据
		$obj['base_price'] = money($obj['base_price']);
		$obj['now_price'] = money($obj['now_price']);
		$obj['inc'] = money($obj['inc']);
		$obj['charge'] = money($obj['charge']);
		$obj['profit'] = money($obj['profit']);
		// 返回数据
		return $obj;
	}

    /**
     * 添加商品
     */
    public function create($goods)
    {
    	$goods['now_price'] = $goods['base_price'];
    	$data = array_merge([
    		'sort'		=>	0,
    		'visible'	=>	1,
    		'status'	=>	1,
    		'agent'		=>	null,
            'owner'     =>  null,
    		'catalog'	=>	1,
    		'title'		=>	null,
    		'image'		=>	null,
    		'content'	=>	null,
    		'base_price'=>	0,
    		'now_price'	=>	0,
    		'inc'		=>	0,
    		'charge'	=>	0,
    		'loop'		=>	1,
    		'profit'	=>	0,
    		'create_at'	=>	$this->timestamp,
    		'update_at'	=>	$this->timestamp,
    	], $goods);
    	$bool = Db::table('contract')->insert($data);
    	if (empty($bool)) {
    		throw new \think\Exception("很抱歉、商品添加失败！");
    	}
    }

    /**
     * 修改商品
     */
    public function update($id, $goods, $force = false)
    {
    	// 查询商品
    	if (empty($force)) {
	    	$model = Db::table('contract')->where('id', '=', $id)->find();
	    	if (empty($model)) {
	    		throw new \think\Exception("很抱歉、该商品不存在！");
	    	}
    	}
    	// 修改数据
    	$goods['update_at'] = $this->timestamp;
    	$data = [];
    	if (empty($force)) {
    		$data = array_merge($model, $goods);
    	} else {
    		$data = $goods;
    	}
    	$bool = Db::table('contract')->where('id', '=', $id)->update($data);
    	if (empty($bool)) {
    		throw new \think\Exception("很抱歉、商品更新失败！");
    	}
    }

    /**
     * 收银台，算钱用的
     */
    public function cashier($username, $action, $loop, $ratio, $money, $charge = 0, $target = null)
    {
    	// 所有账单
    	$this->_bill[] = [
    		'cid'				=>	$this->_cid,
    		'username'			=>	$username,
    		'action'			=>	$action,
    		'loop'				=>	$loop,
    		'money'				=>	$money,
    		'charge'			=>	$charge,
    		'target'			=>	$target,
    		'ratio'				=>	$ratio,
    	];
    	// 需要记录的操作：一口价、团购、转让、继承、出售、领取收益
    	if (in_array($action, [self::ACTION_PURCHASE, self::ACTION_GROUP, self::ACTION_TRANSFER, self::ACTION_EXTENDS, self::ACTION_SELL, self::ACTION_PROFIT])) {
    		$this->_action[] = [
    			'cid'			=>	$this->_cid,
    			'username'		=>	$username,
    			'action'		=>	$action,
    			'loop'			=>	$loop,
    			'money'			=>	$money,
    			'charge'		=>	$charge,
    			'target'		=>	$target,
    			'ratio'			=>	$ratio,
    			'remark'		=>	null,
    			'create_at'		=>	$this->timestamp
    		];
    	}
    	// 需要更新资金流水：一口价、团购、转让、出售、领取收益、上级佣金、代理佣金
    	if (in_array($action, [self::ACTION_PURCHASE, self::ACTION_GROUP, self::ACTION_TRANSFER, self::ACTION_SELL, self::ACTION_PROFIT, self::ACTION_COMMISSION, self::ACTION_AGENT])) {
    		$business = 0;
    		switch ($action) {
    			case self::ACTION_PURCHASE:
    				$business = 33;
    				break;
    			case self::ACTION_GROUP:
    				$business = 34;
    				break;
    			case self::ACTION_TRANSFER:
    				$business = 35;
    				break;
    			case self::ACTION_SELL:
    				$business = 36;
    				break;
    			case self::ACTION_PROFIT:
    				$business = 37;
    				break;
    			case self::ACTION_COMMISSION:
    				$business = 38;
    				break;
    			case self::ACTION_AGENT:
    				$business = 39;
    				break;
    			default:
    				throw new \think\Exception("很抱歉、该操作尚未配置业务编号！");
    				break;
    		}
    		$exists = false;
    		foreach ($this->_capital as $key => $item) {
    			if ($item['username'] == $username && $item['business'] == $business) {
    				$exists = true;
    				$item['money'] += ($business == 35 ? -$charge : $money);
    				$this->_capital[$key] = $item;
    				break;
    			}
    		}
    		if (!$exists) {
	    		$this->_capital[] = [
	    			'username'		=>	$username,
	    			'business'		=>	$business,
	    			'money'			=>	($business == 35 ? -$charge : $money),
	    		];
    		}
    	}
    	// 需要重新分配比例：一口价、团购、转让、继承、出售
    	if (in_array($action, [self::ACTION_PURCHASE, self::ACTION_GROUP, self::ACTION_TRANSFER, self::ACTION_EXTENDS, self::ACTION_SELL])) {
    		$exists = false;
    		foreach ($this->_percent as $key => $item) {
    			if ($item['username'] == $username && $item['loop'] == $loop) {
    				$exists = true;
	    			$item['ratio'] += $ratio;
    				$this->_percent[$key] = $item;
    				break;
    			}
    		}
    		if (!$exists) {
	    		$this->_percent[] = [
	    			'username'		=>	$username,
	    			'loop'			=>	$loop,
	    			'ratio'			=>	$ratio,
	    		];
    		}
    	}
    }

    /**
     * 老板，结账
     */
    public function checkout()
    {
    	// 批量：记录操作
    	$row = Db::table('contract_log')->insertAll($this->_action);
    	if (empty($row) || $row != count($this->_action)) {
    		throw new \think\Exception("很抱歉、操作记录保存失败！");
    	}
    	// 批量：分配比例
    	$this->set_percent($this->_cid, $this->_percent);
    	// 批量：更新资金
    	(new Wallet())->batch($this->_capital);
    }

    /**
     * 获取某商品拥有比例的人
     * 买卖时间越早的人排在前面
     * @return  [ ['username' => 111, 'ratio' => 1] ]
     */
    public function get_percent($cid, $profile = false)
    {
    	/**
    	 * 先找到拥有比例的人
    	 * A   10%
    	 * B   20%
    	 * C   30%
    	 * D   40%
    	 */
    	if ($profile) {
    		$team = Db::table('contract_percent')->alias('c')
    				->leftJoin('profile p', 'p.username = c.username')
    				->field('c.username, c.loop, c.ratio, p.nickname, p.idcard, p.avatar')
	    			->where('c.cid', '=', $cid)
	    			->where('c.ratio', '>', 0)
	    			->order('c.loop ASC, c.create_at ASC, c.id ASC')
	    			->select();
	    	foreach ($team as $key => $item) {
	    		$item['avatar'] = avatar($item['avatar'], $item['idcard']);
	    		unset($item['idcard']);
	    		$team[$key] = $item;
	    	}
    	} else {
	    	$team = Db::table('contract_percent')->field('username, loop, ratio')
	    			->where('cid', '=', $cid)
	    			->where('ratio', '>', 0)
	    			->order('loop ASC, create_at ASC, id ASC')
	    			->select();
    	}
    	return $team;
    }

    /**
     * 批量设置用户在某商品拥有的比例
     * @param  $data  [ ['username' => 111, 'ratio' => 1] ]
     */
    public function set_percent($cid, $data)
    {
    	// 当前时间
    	$date = date('Y-m-d H:i:s');
    	// 插入语句
    	$insert = 'INSERT IGNORE INTO `contract_percent` (`cid`, `username`, `loop`, `ratio`, `create_at`, `update_at`) VALUES ';
    	// 修改语句
    	$update = 'UPDATE `contract_percent` SET ';
    	$update_ratio = '`ratio` = CASE ';
    	$update_user = [];
    	// 循环所有数据
    	foreach ($data as $key => $item) {
    		// 当前账号
    		$username = $item['username'];
    		// 所占比例
    		$ratio = $item['ratio'];
    		// 插入语句
    		$insert .= "($cid, '$username', " . $item['loop'] . ", 0, '$date', '$date'),";
    		// 修改语句
    		$update_ratio .= " WHEN `username` = '$username' AND `loop` = " . $item['loop'] . " THEN `ratio` + $ratio ";
    		$update_user[] = "'$username'";
    	}
    	// 拼接插入
    	$insert = rtrim($insert, ',');
    	$insert .= ';';
    	// 执行插入
    	$bool = Db::execute($insert);
    	if (false === $bool) {
    		throw new \think\Exception("很抱歉、保存用户比例失败！");
    	}
    	// 拼接修改
    	$update .= $update_ratio . " ELSE `ratio` END, `update_at` = CASE WHEN `username` IN(" . implode(',', $update_user) . ") THEN '$date' ELSE `update_at` END WHERE `cid` = $cid;";
    	// 执行修改
    	$bool = Db::execute($update);
    	if (false === $bool) {
    		throw new \think\Exception("很抱歉、更新用户比例失败！");
    	}
    }

    // +----------------------------------------------------------------------
    // | 对外接口
    // +----------------------------------------------------------------------

    /**
     * 首页
     */
    public function index(Request $req)
    {
    	// 显示页面
    	return $this->fetch();
    }

    /**
     * 详情页面
     */
    public function detail(Request $req, $id)
    {
    	try {
    		// 当前账号
    		$username = session('user.account.username');
    		// 查询商品
    		$obj = $this->get($id);
    		if (!empty($obj['owner'])) {
    			$owner = (new Account())->instance($obj['owner']);
    			$this->assign('owner', $owner);
    		}
    		$this->assign('obj', $obj);
    		// 查询比例
    		$holder = $this->get_percent($id, true);
    		$percent = 0;
    		foreach ($holder as $key => $item) {
    			if ($username == $item['username']) {
    				$item['owner'] = 'me';
    			} else {
    				$item['owner'] = '';
    			}
    			$holder[$key] = $item;
    			$percent += $item['ratio'];
    		}
    		$this->assign('percent', $percent);
    		$this->assign('holder', $holder);
    		// 查询记录
    		$logs = Db::table('contract_log')->alias('c')
    			->join('profile p', 'p.username = c.username')
    			->field('p.nickname AS nickname, c.action, c.money, c.ratio, c.create_at AS date')
    			->where('c.cid', '=', $id)
    			->where('c.action', 'in', [self::ACTION_PURCHASE, self::ACTION_GROUP, self::ACTION_TRANSFER])
    			->limit(20)
    			->order('c.create_at DESC')->select();
    		$this->assign('logs', $logs);
    	} catch (\Exception $e) {
    		$this->error($e->getMessage());
    		exit;
    	}
    	// 显示页面
    	return $this->fetch();
    }

    /**
     * 代理商页面
     */
    public function agent(Request $req)
    {
        // 用户账号
        $username = session('user.account.username');
        // 获取配置
        $config = Configure::get('hello.contract') ?: [];
        if (empty($config) || !array_key_exists('agent', $config) || !array_key_exists($username, $config['agent'])) {
            $this->error('很抱歉、您没有权限执行该操作！');
            exit;
        }
        // 提交请求
        if ($req->isPost()) {
            // 获取动作
            $action = $req->param('action');
            // 获取数据
            if ($action == 'get') {
                $id = $req->param('id/d');
                if (empty($id)) {
                    return json([
                        'code'      =>  501,
                        'message'   =>  '很抱歉、请提供编号！'
                    ]);
                }
                try {
                    // 查询数据
                    $obj = $this->get($id);
                    // 删除多余字段
                    unset($obj['agent'], $obj['create_at'], $obj['owner'], $obj['profit'], $obj['sort'], $obj['update_at']);
                } catch (\Exception $e) {
                    return json([
                        'code'      =>  502,
                        'message'   =>  '很抱歉、该商品不存在！'
                    ]);
                }
                return json([
                    'code'      =>  200,
                    'message'   =>  '恭喜您、操作成功！',
                    'data'      =>  $obj
                ]);
            }
            // 商品编号
            $id = $req->param('id/d');
            if ($action == 'update' && empty($id)) {
                $this->error('很抱歉、请刷新页面再试一次！');
                exit;
            }
            // 商品名称
            $title = $req->param('title');
            if (empty($title)) {
                $this->error('很抱歉、请提供商品名称！');
                exit;
            }
            // 基础价格
            $base_price = $req->param('base_price');
            if (empty($base_price)) {
                $this->error('很抱歉、请提供基础价格！');
                exit;
            }
            // 商品分类
            $catalog = $req->param('catalog/d') ?: 0;
            // 增幅比例
            $inc = $req->param('inc/f') ?: 0;
            // 手续费比例
            $charge = $req->param('charge/f') ?: 0;
            // 商品详情
            $content = $req->param('content');
            // 图片地址
            $file = $req->file('image');
            if (empty($file)) {
                $image = null;
            } else {
                $info = $file->validate(['ext' => 'jpg,jpeg,png'])->move(Env::get('root_path') . 'public/upload');
                if (!$info) {
                    $this->error('很抱歉、' . $file->getError() . '！');
                    exit;
                }
                $image = $info->getSaveName();
            }
            // 宝贝详情
            $content = $req->param('content');
            try {
                $data = [
                    'catalog'   =>  $catalog,
                    'title'     =>  $title,
                    'base_price'=>  $base_price,
                    'inc'       =>  $inc,
                    'charge'    =>  $charge,
                    'content'   =>  $content,
                ];
                if (!empty($image)) {
                    $data['image'] = $image;
                }
                // 添加宝贝
                if ($action == 'create') {
                    // 创建数据
                    $data['agent'] = $username;
                    $this->create($data);
                } else {
                    // 是否可见
                    $data['visible'] = $req->param('visible/d') ?: 0;
                    // 当前价格
                    $data['now_price'] = $req->param('now_price') ?: 0;
                    // 更新数据
                    $this->update($id, $data);
                }
            } catch (\Exception $e) {
                $this->error($e->getMessage());
                exit;
            }
            // 操作成功
            $this->success('恭喜您、操作成功！');
            exit;
        }
        // 查询对象
        $query = Db::table('contract')->where('agent', '=', $username);
        // 搜索数据
        $logs = $query->order('loop DESC, update_at DESC')->paginate(20, false, ['query' => $req->param()]);
        $this->assign('logs', $logs);
        // 显示页面
        return $this->fetch();
    }

    /**
     * 代理商 - 查看记录
     */
    public function agent_log(Request $req)
    {
        // 用户账号
        $username = session('user.account.username');
        // 获取配置
        $config = Configure::get('hello.contract') ?: [];
        if (empty($config) || !array_key_exists('agent', $config) || !array_key_exists($username, $config['agent'])) {
            $this->error('很抱歉、您没有权限执行该操作！');
            exit;
        }
        // 商品列表
        $cids = Db::table('contract')->field('id, title')->where('agent', '=', $username)->order('sort DESC, loop DESC')->select();
        $this->assign('cids', $cids);
        // 获取商品编号
        $cidList = [];
        foreach ($cids as $key => $item) {
            if (!in_array($item['id'], $cidList)) {
                $cidList[] = $item['id'];
            }
        }
        // 查询对象
        $query = Db::table('contract_log')->alias('l')->join('contract c', 'c.id = l.cid')
                        ->field('c.title, l.*');
        // 条件：按账号搜索
        $username = $req->param('username');
        if (!is_null($username) && strlen($username)) {
            $query->where('l.username', '=', $username);
        }
        // 条件：按操作类型搜索
        $action = $req->param('action');
        if (!is_null($action) && strlen($action)) {
            $query->where('l.action', '=', $action);
        }
        // 条件：按具体商品搜索
        $cid = $req->param('cid');
        if (!is_null($cid) && strlen($cid)) {
            $query->where('l.cid', '=', $cid);
        }
        // 搜索数据
        $logs = $query->where('cid', 'in', $cidList)->order('l.create_at DESC')->paginate(20, false, ['query' => $req->param()]);
        $this->assign('logs', $logs);
        // 显示页面
        $this->assign('actions', [
            1   =>  '一口价',
            2   =>  '团购',
            3   =>  '转让',
            4   =>  '继承',
            5   =>  '出售',
        ]);
        return $this->fetch();
    }

    /**
     * 商品列表
     */
    public function list(Request $req)
    {
    	// 用户账号
    	$username = session('user.account.username');
    	// 分页数据
    	$page = $req->param('page/d', 1);
    	$size = $req->param('size/d', 100);
    	$offset = $page - 1 < 0 ? 0 : ($page - 1) * $size;

    	// 查询对象
    	$query = Db::table('contract')->alias('c')
    				->leftJoin('profile p', 'p.username = c.owner')
    				->field('c.id, c.title, c.image, c.now_price, c.loop, p.idcard, p.avatar')
    				->where('visible', '=', 1);
        // 条件：按分类查询
        $catalog = $req->param('catalog/d');
        if (!empty($catalog)) {
            $query->where('catalog', '=', $catalog);
        }
    	// 如果是我的
    	if ($req->param('filter') == 'my') {
    		// 查询我是股东的产品
    		$cidList = Db::table('contract_percent')
    				->where('username', '=', $username)
    				->where('ratio', '>', 0)
    				->group('cid')->column('cid');
    		if (empty($cidList)) {
    			$query->where('c.id', '=', PHP_INT_MAX);
    		} else {
    			$query->where('c.id', 'in', $cidList);
    		}
    	}
    	// 查询数据
    	$data = $query->limit($offset, $size)->order('c.sort DESC, c.loop DESC, c.update_at DESC')->select();
    	// 数据格式化
    	foreach ($data as $key => $item) {
    		$item['avatar'] = avatar($item['avatar'], $item['idcard']);
    		unset($item['idcard']);
    		$data[$key] = $item;
    	}
    	// 返回数据
    	return json([
    		'code'		=>	200,
    		'message'	=>	'恭喜您、操作成功！',
    		'data'		=>	$data,
    	]);
    }

    /**
     * 立即购买
     */
    public function buy(Request $req)
    {
    	try {
    		// 开启事务
    		Db::startTrans();
    		// 获取配置
    		$config = Configure::get('hello.contract') ?: [];
	    	// 当前用户
	    	$username = session('user.account.username');
	    	// 安全密码
	    	$safeword = $req->param('safeword');
	    	if (empty($safeword)) {
	    		throw new \think\Exception("很抱歉、请填写安全密码！");
	    	}
	    	// 用户对象
	    	$ac = new Account();
	    	// 查询账号
	    	$user = $ac->instance($username, null, $safeword);
	    	if (empty($user)) {
	    		return json([
	    			'code'		=>	501,
	    			'message'	=>	'很抱歉、安全密码不正确！'
	    		]);
	    	}
	    	if (empty($user['account']['status'])) {
	    		return json([
	    			'code'		=>	502,
	    			'message'	=>	'很抱歉、您的账号已被冻结！'
	    		]);
	    	}
	    	if ($user['account']['authen'] != 1) {
	    		return json([
	    			'code'		=>	503,
	    			'message'	=>	'很抱歉、请先完成实名认证！'
	    		]);
	    	}
	    	// 获取编号
	    	$id = $req->param('id/d');
	    	if (empty($id)) {
	    		return json([
	    			'code'		=>	504,
	    			'message'	=>	'很抱歉、请提供商品编号！'
	    		]);
	    	}
	    	// 查询商品
	    	$goods = $this->get($id);
	    	if (empty($goods['visible'])) {
	    		return json([
	    			'code'		=>	505,
	    			'message'	=>	'很抱歉、该商品不存在！'
	    		]);
	    	}
	    	// 保存编号
	    	$this->_cid = $id;
    		// 获取比例
    		$ratio = $req->param('ratio/d', 1);
    		if (empty($ratio) || $ratio < 1 || $ratio > 100 || !is_int($ratio)) {
	    		throw new \think\Exception("很抱歉、请提供正确的比例！");
	    	}
	    	// 查询已占比例
    		$total_ratio = Db::table('contract_log')->where('cid', '=', $id)->sum('ratio');
    		// 剩余比例
    		$surplus_ratio = 100 - $total_ratio;
    		// 我要买的比例
    		$buy_ratio = $ratio;
    		// 商品状态
			$status = 3;
			// 归属人
			$owner = null;
    		// 当前价格
    		$now_price = $goods['now_price'];
    		// 当前轮次
			$loop = $goods['loop'];
    		// 应付价格
    		$price = 0;
    		// 手续费
    		$charge = $goods['charge'];
    		// 卖家列表 账号 => 钱
    		$sellers = [];
    		// 拥有比例的人，说明是股东
    		$holder = [];
    		// 步骤一：先卖系统剩余的空闲比例
    		if ($surplus_ratio > 0) {
    			// 我要买的比例 大于 剩余比例 ， 那么先将剩余的这部分比例从系统手里买到
    			if ($buy_ratio >= $surplus_ratio) {
    				// 计算价格
    				$price += $now_price * ($surplus_ratio / 100);
    				// 收银台：我买到了部分
    				$this->cashier($username, ($surplus_ratio == 100 ? self::ACTION_PURCHASE : self::ACTION_GROUP), $loop, $surplus_ratio, -$price);
    				// 我要买的比例减少
    				$buy_ratio -= $surplus_ratio;

    				// 我刚好买了最后一部分，意味着接下来进行的是新轮次
					// 轮次更新
					$loop++;
					// 价格更新
					$now_price += $now_price * $goods['inc'];

    			} else {
    				// 计算价格
    				$price += $now_price * ($buy_ratio / 100);
    				// 收银台：我买到了全部
    				$this->cashier($username, ($buy_ratio == 100 ? self::ACTION_PURCHASE : self::ACTION_GROUP), $loop, $buy_ratio, -$price);
    				// 我要买的比例减少
    				$buy_ratio = 0;
    			}
    		}

    		// 步骤二：再从别人手里买部分比例
    		if ($buy_ratio > 0) {
    			// 找到现在拥有比例的人，按最早拥有排序，早买早出
    			$holder = $this->get_percent($id);
    			if (empty($holder)) {
    				throw new \think\Exception("很抱歉、暂时找不到正在出售拥有该商品的人！");
    			}
				// 打算买的比例
				$old_buy_ratio = $buy_ratio;
				// 本轮的价格
				$loop_price = 0;
    			// 循环拥有该商品的人
    			foreach ($holder as $key => $item) {
    				// 如果是我自己，则跳过
    				if ($item['username'] == $username) {
    					// 如果我拥有全部比例，那么就不能买了
    					if ($item['ratio'] == 100) {
    						throw new \think\Exception("很抱歉、该商品就是您的无需再买！");
    					}
    					continue;
    				}
    				// 正常是先卖之前轮次的人，如果卖家出现本轮的人，则代表需要启动新轮次
    				if ($item['loop'] == $loop) {
    					// 更新轮次
    					$loop++;
    					// 更新价格
    					$now_price += $now_price * $goods['inc'];
    				}

    				if ($item['ratio'] < $buy_ratio) {
    					// 卖家收益
    					$loop_price += $seller_money = $now_price * ($item['ratio'] / 100);
    					// 卖家的手续费
    					$seller_charge = $seller_money * $charge;
    					// 收银台：这个人拥有我需要的一部分比例
    					$this->cashier($item['username'], self::ACTION_SELL, $item['loop'], -$item['ratio'], $seller_money - $seller_charge, $seller_charge);
    					// 收银台：我在这个人手里买的比例
		    			$this->cashier($username, ($item['ratio'] == 100 ? self::ACTION_PURCHASE : self::ACTION_GROUP), $loop, $item['ratio'], -$seller_money);
    					// 要买的比例再次减少
    					$buy_ratio -= $item['ratio'];
    				} else {
    					// 卖家收益
    					$loop_price += $seller_money = $now_price * ($buy_ratio / 100);
    					// 卖家的手续费
    					$seller_charge = $seller_money * $charge;
    					// 收银台：这个人拥有的比我需要的更多
    					$this->cashier($item['username'], self::ACTION_SELL, $item['loop'], -$buy_ratio, $seller_money - $seller_charge, $seller_charge);
    					// 收银台：我在这个人手里买的比例
		    			$this->cashier($username, ($buy_ratio == 100 ? self::ACTION_PURCHASE : self::ACTION_GROUP), $loop, $buy_ratio, -$seller_money);
    					// 要买的比例再次减少
    					$buy_ratio = 0;
    				}

    				// 记录该卖家
    				$sellers[$item['username']] = $seller_money;
    				// 如果不需要再买了
    				if ($buy_ratio <= 0) {
						// 不需要继续了
    					break;
    				}
    			}
    			// 本轮卖出去了
    			if ($loop_price > 0) {
    				// 计算价格
	    			$price += $loop_price;
    			}
    		}

    		// 判断价格
    		if ($price <= 0) {
				throw new \think\Exception("很抱歉、没有什么可买的！");
    		}
    		// 判断余额
	    	if ($user['wallet']['money'] < $price) {
	    		throw new \think\Exception("很抱歉、您的可用资金不足！");
	    	}

    		// 上级存在推广收益
    		$commission = config('hello.contract.commission');
    		if (!empty($commission) && $commission > 0) {
    			// 如果我有上级
    			if (!empty($user['action']['inviter'])) {
    				// 给我的上级计算收益
    				$this->cashier($user['action']['inviter'], self::ACTION_COMMISSION, 0, 0, $price * $charge * $commission);
    			}
	    		// 找到卖家的上级
	    		$need_inviter_users = array_keys($sellers) ?: [];
	    		$user_inviter = $ac->inviters($need_inviter_users);
	    		// 循环给上级算账
	    		foreach ($user_inviter as $key => $item) {
    				// 如果其他卖家也有上级
    				if (!empty($item['inviter'])) {
    					// 该卖家卖到的钱
    					$seller_money = $sellers[$item['username']];
    					// 给他们的上级计算收益
    					$this->cashier($item['inviter'], self::ACTION_COMMISSION, 0, 0, $seller_money * $charge * $commission);
    				}
	    		}
    		}

    		// 我所在的省市区代理能获得收益
    		if (array_key_exists('agent', $config)) {
    			// 获取我的身份证
	    		$idcard = $user['profile']['idcard'];
	    		if (!empty($idcard)) {
	    			// 地址码
	    			$code = substr($idcard, 0, 6);
	    			// 根据地址码找到数据
	    			$region = Db::table('region')->where('code', '=', $code)->find();
	    			if (!empty($region)) {
	    				// 省代码
	    				$province_code = $region['province'];
	    				// 市代码
	    				$city_code = $region['city'];
	    				// 区代码
	    				$county_code = $region['code'];
	    				// 找到省市区代理
	    				foreach ($config['agent'] as $key => $item) {
	    					// 代理账号
	    					$agent_username = $item['username'];
	    					// 代理比例
	    					$agent_ratio = $item['ratio'];
	    					// 符合代理要求
	    					if (in_array($item['address'], [$province_code, $city_code, $county_code])) {
	    						// 收银台：代理收益
	    						$this->cashier($agent_username, self::ACTION_AGENT, 0, 0, $agent_ratio * $price);
	    					}
	    				}
	    			}
	    		}
    		}

    		// 接下来：找系统结账（添加记录，更新比例，资金流水）
    		$this->checkout();

    		// 步骤三：判断是否启动新轮次，需要查查看现在谁还有比例，如果都是本轮的人，说明上一轮的人全部都套现了，而我是那个最后接盘的人
			// 没有找到股东账号
			$holder = $this->get_percent($id);
			if (!empty($holder) && $surplus_ratio <= $ratio && $loop == $goods['loop']) {
				// 循环股东账号的比例
				$array = [];
				foreach ($holder as $key => $item) {
					if (!in_array($item['loop'], $array)) {
						$array[] = $item['loop'];
					}
				}
				// 所有股东的比例都在同一轮，说明需要启动新轮次
				if (count($array) == 1) {
					// 轮次更新
					$loop++;
					// 价格更新
					$now_price += $now_price * $goods['inc'];
				}
			}

			// 我独自买断
			if ($ratio == 100) {
				// 更新状态
				$status = 2;
				// 更新归属人
				$owner = $username;
			} else {
				// 判断归属人
				$ownerList = [];
				$ownerPercent = 0;
				foreach ($holder as $key => $item) {
					if (!in_array($item['username'], $ownerList)) {
						$ownerList[] = $item['username'];
					}
					$ownerPercent += $item['ratio'];
				}
				if (count($ownerList) == 1 && $ownerPercent == 100) {
					// 某人买断
					$status = 2;
					$owner = $ownerList[0];
				} else {
					// 群众瓜分
					$status = 3;
					$owner = null;
				}
			}

    		// 最后：更新商品
    		$this->update($id, [
    			'status'	=>	$status,
    			'owner'		=>	$owner,
    			'now_price'	=>	$now_price,
    			'loop'		=>	$loop,
    		], true);

	    	// 提交事务
    		Db::commit();
    	} catch (\Exception $e) {
    		Db::rollback();
    		return json([
    			'code'		=>	555,
    			'message'	=>	$e->getMessage(),
    			'trace'		=>	$e->getTrace()
    		]);
    	}
    	// 操作成功
    	return json([
    		'code'		=>	200,
    		'message'	=>	'恭喜您、操作成功！',
    	]);
    }

    /**
     * 立即转让
     */
    public function transfer(Request $req)
    {
    	try {
    		// 开启事务
    		Db::startTrans();
    		// 安全密码
    		$safeword = $req->param('safeword');
    		// 用户账号
    		$username = session('user.account.username');
    		// 账号对象
    		$ac = new Account();
    		// 用户对象
    		$user = $ac->instance($username, null, $safeword);
    		if (empty($user)) {
    			throw new \think\Exception("很抱歉、安全密码不正确！");
    		}
    		if (empty($user['account']['status'])) {
	    		return json([
	    			'code'		=>	501,
	    			'message'	=>	'很抱歉、您的账号已被冻结！'
	    		]);
	    	}
	    	// 对方账号
	    	$mobile = $req->param('mobile/d');
	    	if (empty($mobile)) {
	    		throw new \think\Exception("很抱歉、请填写对方的手机号码！");
	    	}
	    	// 查询对方账号
	    	$target = $ac->instance($mobile);
	    	if (empty($target)) {
	    		return json([
	    			'code'		=>	502,
	    			'message'	=>	'很抱歉、对方账号不存在！'
	    		]);
	    	}
	    	if (empty($target['account']['status'])) {
	    		return json([
	    			'code'		=>	503,
	    			'message'	=>	'很抱歉、对方账号已被冻结！'
	    		]);
	    	}
	    	if ($target['account']['authen'] != 1) {
	    		return json([
	    			'code'		=>	504,
	    			'message'	=>	'很抱歉、请对方先完成实名认证！'
	    		]);
	    	}
	    	// 获取编号
	    	$id = $req->param('id/d');
	    	if (empty($id)) {
	    		return json([
	    			'code'		=>	505,
	    			'message'	=>	'很抱歉、请提供商品编号！'
	    		]);
	    	}
	    	// 查询商品
	    	$goods = $this->get($id);
	    	if (empty($goods['visible'])) {
	    		return json([
	    			'code'		=>	506,
	    			'message'	=>	'很抱歉、该商品不存在！'
	    		]);
	    	}
	    	// 保存编号
	    	$this->_cid = $id;
	    	// 没有权限
	    	if ($goods['owner'] != $username) {
	    		return json([
	    			'code'		=>	507,
	    			'message'	=>	'很抱歉、您没有权限执行该操作！'
	    		]);
	    	}
	    	// 转让的总比例
	    	$total_ratio = 0;
	    	// 收取的总手续费
	    	$total_charge = 0;
	    	// 循环股东
	    	$holder = $this->get_percent($id);
	    	foreach ($holder as $key => $item) {
	    		// 如果出现其他人的账号，说明我不是单独拥有着
	    		if ($item['username'] != $username) {
	    			throw new \think\Exception("很抱歉、您还未彻底拥有该商品！");
	    		}
	    		// 统计比例
	    		$total_ratio += $item['ratio'];
	    		// 计算手续费
	    		if ($item['loop'] < $goods['loop']) {
	    			$total_charge += $charge = $item['ratio'] / 100 * $goods['now_price'] * $goods['charge'];
	    		} else {
	    			$total_charge += $charge = $item['ratio'] / 100 * ($goods['now_price'] + $goods['now_price'] * $goods['inc']) * $goods['charge'];
	    		}
	    		// 收银台：减少我的比例
	    		$this->cashier($item['username'], self::ACTION_TRANSFER, $item['loop'], -$item['ratio'], 0, $charge, $mobile);
	    		// 收银台：对方增加比例
	    		$this->cashier($mobile, self::ACTION_EXTENDS, $item['loop'], $item['ratio'], 0, 0);
	    	}
	    	// 比例不对
	    	if ($total_ratio != 100) {
	    		throw new \think\Exception("很抱歉、您需要拥有全部比例才能转让！");
	    	}
	    	// 没钱付手续费
	    	if ($user['wallet']['money'] < $total_charge) {
	    		throw new \think\Exception("很抱歉、您的资金不足以支付手续费！");
	    	}

	    	// 接下来：找系统结账（添加记录，更新比例，资金流水）
    		$this->checkout();

	    	// 最后：更新商品
    		$this->update($id, [
    			'owner'		=>	$mobile,
    		], true);

    		// 提交事务
    		Db::commit();
    	} catch (\Exception $e) {
    		Db::rollback();
    		return json([
    			'code'		=>	555,
    			'message'	=>	$e->getMessage()
    		]);
    	}
    	// 操作成功
    	return json([
    		'code'		=>	200,
    		'message'	=>	'恭喜您、操作成功！'
    	]);
    }
}