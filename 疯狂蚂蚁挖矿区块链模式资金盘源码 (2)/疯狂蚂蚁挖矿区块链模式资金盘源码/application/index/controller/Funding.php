<?php

namespace app\index\controller;

use think\Db;
use think\Request;
use think\facade\Env;

class Funding extends Base
{

	/**
	 * 操作类型
	 */
	const ACTION_INVEST = 1;				// 购买
	const ACTION_OVER = 8;				// 结束

	// +----------------------------------------------------------------------
    // | 内部方法
    // +----------------------------------------------------------------------

	/**
     * 获取项目
     */
    public function get($id)
    {
    	// 获取数据
    	return Db::table('funding')->where('id', '=', $id)->find();
    }

	/**
	 * 创建项目
	 */
    public function create($project)
    {
    	// 数据整理
    	$data = array_merge([
    		'sort'		=>	0,
    		'visible'	=>	1,
    		'type'		=>	1,
    		'status'	=>	2,
            'currency'  =>  1,
    		'owner'		=>	null,
    		'content'	=>	null,
    		'target'	=>	0,
    		'current'	=>	0,
    		'people'	=>	0,
    		'count'		=>	0,
    		'create_at'	=>	$this->timestamp,
    		'update_at'	=>	$this->timestamp,
    	], $project);
    	// 添加数据
    	$id = Db::table('funding')->insertGetId($data);
    	if (empty($id)) {
    		throw new \think\Exception("很抱歉、项目创建失败请重试！");
    	}
        // 返回数据
        return $id;
    }

    /**
     * 修改项目
     */
    public function update($id, $project)
    {
    	// 数据整理
    	$data = array_merge([
    		'update_at'	=>	$this->timestamp,
    	], $project);
    	// 修改数据
    	$bool = Db::table('funding')->where('id', '=', $id)->update($data);
    	if (empty($bool)) {
    		throw new \think\Exception("很抱歉、项目更新失败请重试！");
    	}
    }

    /**
     * 删除项目
     */
    public function delete($id)
    {
    	// 删除数据
    	$bool = Db::table('funding')->where('id', '=', $id)->delete();
    	if (empty($bool)) {
    		throw new \think\Exception("很抱歉、项目删除失败请重试！");
    	}
    }

    // +----------------------------------------------------------------------
    // | 对外接口
    // +----------------------------------------------------------------------

    /**
     * 众筹首页
     */
    public function index(Request $req)
    {
        // 获取配置
        $config = config('hello.funding');
        if (empty($config) || empty($config['enable'])) {
            $this->error('很抱歉、系统尚未开启该模块！');
            exit;
        }
        $info =  Db::table('funding')->where('id', '=', 1)->find();
        $market = Db::table('market')->where('date', '=', date('Y-m-d'))->find();
        $this->assign('market',$market);
        $this->assign('info',$info);
        // 显示页面
        return $this->fetch();
    }
    public function alipay_pay(Request $req)
    {
        $money = $req->param('num');
        $this->assign('money',$money);
        if ($req->isPost()) {
            $imageFile = $req->file('image');
            if (empty($imageFile)) {
                return json([
                    'code'		=>	507,
                    'message'	=>	'很抱歉、请提供图片文件！'
                ]);
            }
            // 上传图片
            $info = $imageFile->validate(['ext' => 'jpg,jpeg,png'])->move(Env::get('root_path') . 'public/upload');
            if (!$info) {
                return json([
                    'code'		=>	508,
                    'message'	=>	$imageFile->getError()
                ]);
            }
            // 保存路径
            $content = '/upload/' . str_ireplace('\\', '/', $info->getSaveName());
            return json([
                'code'      =>  200,
                'message'   =>  '恭喜您、操作成功！',
                'image'      =>  $content
            ]);
        }
        // 显示页面
        return $this->fetch();
    }
    public function upload_credentials(Request $req)
    {
        $money = $req->param('num');
        if ($req->isPost()) {
            $username = session('user.account.username');
            $market = Db::table('market')->where('date', '=', date('Y-m-d'))->find();
            if($market['price']<=0 || preg_match("/[ ':;*~`$%^&+=-)(<>{}]|\]|\[|\/|\\\|\"|\|/",$market['price'])){
                return json([
                    'code'      =>  500,
                    'message'   =>  '当前币价不正常！',
                ]);
            }
            Db::table('funding_audit')->insert([
                'fid'		=>	1,
                'username'	=>	$username,
                'money'		=>	$req->param('num'),
                'price'    =>   $market['price'],
                'image'    =>   $req->param('wx_img'),
                'create_at'	=>	$this->timestamp,
                'update_at'	=>	$this->timestamp,
            ]);
            return json([
                'code'      =>  200,
                'message'   =>  '恭喜您、操作成功！',
            ]);
        }
        $this->assign('money',$money);
        return $this->fetch();
    }
    /**
     * 众筹详情
     */
    public function detail(Request $req, $id)
    {
        // 获取配置
        $config = config('hello.funding');
        if (empty($config) || empty($config['enable'])) {
            $this->error('很抱歉、系统尚未开启该模块！');
            exit;
        }
        $this->assign('charge', $config['charge']);
        // 查询数据
        $fund = $this->get($id);
        if (empty($fund) || empty($fund['visible'])) {
            $this->error('很抱歉、该项目不存在！');
            exit;
        }
        $this->assign('fund', $fund);
        // 拥有主人
        if (!empty($fund['owner'])) {
            // 主人资料
            $owner = (new Account())->instance($fund['owner']);
            $this->assign('owner', $owner);
            // 查询他的投资总额
            $myTotalMoney = Db::table('funding_log')
                    ->where('username', '=', $fund['owner'])
                    ->where('action', '=', self::ACTION_INVEST)
                    ->sum('money');
            $this->assign('myTotalMoney', $myTotalMoney ?: 0);
            // 查询我投资的项目数量
            $myInvestCount = Db::table('funding_log')
                    ->where('username', '=', $fund['owner'])
                    ->where('action', '=', self::ACTION_INVEST)
                    ->group('fid')->count('id');
            $this->assign('myInvestCount', $myInvestCount ?: 0);
        }
        // 显示页面
        $this->assign('now', date('Y-m-d H:i:s'));
        return $this->fetch();
    }

    /**
     * 项目列表
     */
    public function list(Request $req)
    {
        // 获取配置
        $config = config('hello.funding');
        if (empty($config) || empty($config['enable'])) {
            return json([
                'code'      =>  500,
                'message'   =>  '很抱歉、系统尚未开启该模块！'
            ]);
        }
    	// 用户账号
    	$username = session('user.account.username');
    	// 分页数据
    	$page = $req->param('page/d', 1);
    	$size = $req->param('size/d', 100);
    	$offset = $page - 1 < 0 ? 0 : ($page - 1) * $size;

    	// 查询对象
    	$query = Db::table('funding')->alias('f')
    				->leftJoin('profile p', 'p.username = f.owner')
    				->field('f.id, f.title, f.image, f.target, f.current, f.people, f.create_at, p.nickname, p.idcard, p.avatar')
    				->where('f.visible', '=', 1);
    	// 过滤数据
    	$filter = $req->param('filter');
    	if ($filter == 'my') {
    		// 我发布的项目
    		$query->where('owner', '=', $username);
    	} else if ($filter == 'invest') {
    		// 我付费的项目
    		$fidList = Db::table('funding_log')
    				->where('username', '=', $username)
    				->where('action', '=', self::ACTION_INVEST)
    				->group('fid')->column('fid');
    		if (empty($fidList)) {
    			$query->where('f.id', '=', PHP_INT_MAX);
    		} else {
    			$query->where('f.id', 'in', $fidList);
    		}
    	} else if ($filter == 'official') {
    		// 官方项目
    		$query->where('f.type', '=', 8);
    	} else if ($filter == 'public') {
    		// 大众项目
    		$query->where('f.type', '=', 1)->where('f.status', '<>', 2);
    	} else {
            // 所有项目
            $query->where('f.status', '<>', 2);
        }
        // 按类目搜索
        $catalog = $req->param('catalog/d');
        if (!empty($catalog)) {
            $query->where('f.catalog', '=', $catalog);
        }
    	// 查询数据
    	$data = $query->limit($offset, $size)->order('f.status ASC, f.sort DESC, f.type DESC, f.update_at DESC')->select();
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
     * 项目记录
     */
    public function logs(Request $req)
    {
        // 获取配置
        $config = config('hello.funding');
        if (empty($config) || empty($config['enable'])) {
            return json([
                'code'      =>  500,
                'message'   =>  '很抱歉、系统尚未开启该模块！'
            ]);
        }
        // 项目编号
        $id = $req->param('id/d');
        // 分页数据
        $page = $req->param('page/d', 1);
        $size = $req->param('size/d', 100);
        $offset = $page - 1 < 0 ? 0 : ($page - 1) * $size;

        // 查询对象
        $query = Db::table('funding_log')->alias('l')
                    ->leftJoin('profile p', 'p.username = l.username')
                    ->field('l.action, l.money, l.create_at AS date, p.nickname, p.idcard, p.avatar')
                    ->where('fid', '=', $id);
        // 查询数据
        $data = $query->limit($offset, $size)->order('l.update_at DESC')->select();
        // 数据格式化
        foreach ($data as $key => $item) {
            $item['avatar'] = avatar($item['avatar'], $item['idcard']);
            unset($item['idcard']);
            $data[$key] = $item;
        }
        // 返回数据
        return json([
            'code'      =>  200,
            'message'   =>  '恭喜您、操作成功！',
            'data'      =>  $data,
        ]);
    }

    /**
     * 投资项目
     */
    public function invest(Request $req)
    {
    	try {
            // 获取配置
            $config = config('hello.funding');
            if (empty($config) || empty($config['enable'])) {
                throw new \think\Exception("很抱歉、系统尚未开启该模块！");
            }
    		// 开启事务
    		Db::startTrans();
    		// 获取编号
    		$id = $req->param('id/d');
    		if (empty($id)) {
    			throw new \think\Exception("很抱歉、请提供编号！");
    		}
    		// 查询项目
    		$fund = $this->get($id);
    		if (empty($fund) || empty($fund['visible'])) {
    			throw new \think\Exception("很抱歉、该项目不存在！");
    		}
            if ($fund['status'] == 2) {
                throw new \think\Exception("很抱歉、该项目还未开始！");
            }
    		if ($fund['status'] == 3 || $fund['expire_at'] < $this->timestamp) {
    			throw new \think\Exception("很抱歉、该项目已结束！");
    		}
    		// 安全密码
    		$safeword = $req->param('safeword');
            if (empty($safeword)) {
                throw new \think\Exception("很抱歉、请提供安全密码！");
            }
    		// 用户账号
    		$username = session('user.account.username');
    		// 用户账号
    		$user = (new Account())->instance($username, null, $safeword);
    		if (empty($user)) {
    			throw new \think\Exception("很抱歉、安全密码不正确！");
    		}
    		if (empty($user['account']['status'])) {
	    		throw new \think\Exception("很抱歉、您的账号已被冻结！");
	    	}
	    	// 获取金额
	    	$money = $req->param('money/f');
	    	if (empty($money) || $money < 0 || preg_match("/[ ':;*~`$%^&+=-)(<>{}]|\]|\[|\/|\\\|\"|\|/",$money)) {
	    		throw new \think\Exception("很抱歉、错误的金额！");
	    	}
	    	// 判断余额
	    	if ($user['wallet']['money'] < $money) {
	    		throw new \think\Exception("很抱歉、您的可用资金不足！");
	    	}
	    	// 用户扣钱
	    	(new Wallet())->change($username, 40, [
	    		1 	=>	[$user['wallet']['money'], -($money), $user['wallet']['money'] - $money],
    			2 	=>	[$user['wallet']['deposit'], $money, $user['wallet']['deposit'] + $money],
	    	]);
	    	// 投资次数
	    	$cishu = Db::table('funding_log')->where('fid', '=', $id)->where('username', '=', $username)->where('action', '=', self::ACTION_INVEST)->count('id');
	    	// 更新项目
	    	$this->update($id, [
	    		'current'	=>	Db::raw('current+' . $money),
	    		'people'	=>	Db::raw('people+'.($cishu ? 0 : 1)),
	    		'count'		=>	Db::raw('count+1'),
	    	]);
	    	// 项目记录
	    	$bool = Db::table('funding_log')->insert([
	    		'fid'		=>	$id,
	    		'type'		=>	$fund['type'],
                'currency'  =>  $fund['currency'],
	    		'action'	=>	self::ACTION_INVEST,
	    		'username'	=>	$username,
	    		'money'		=>	$money,
                'charge'    =>  0,
	    		'create_at'	=>	$this->timestamp,
	    		'update_at'	=>	$this->timestamp,
	    	]);
	    	if (empty($bool)) {
	    		throw new \think\Exception("很抱歉、参与记录保存失败！");
	    	}
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

    /**
     * 项目结束
     */
    public function over(Request $req)
    {
        try {
            // 获取配置
            $config = config('hello.funding');
            if (empty($config) || empty($config['enable'])) {
                throw new \think\Exception("很抱歉、系统尚未开启该模块！");
            }
            // 开启事务
            Db::startTrans();
            // 获取编号
            $id = $req->param('id/d');
            if (empty($id)) {
                throw new \think\Exception("很抱歉、请提供编号！");
            }
            // 查询项目
            $fund = $this->get($id);
            if (empty($fund) || empty($fund['visible'])) {
                throw new \think\Exception("很抱歉、该项目不存在！");
            }
            if ($fund['status'] == 3) {
                throw new \think\Exception("很抱歉、该项目已结束！");
            }
            // 安全密码
            $safeword = $req->param('safeword');
            if (empty($safeword)) {
                throw new \think\Exception("很抱歉、请提供安全密码！");
            }
            // 用户账号
            $username = session('user.account.username');
            // 用户账号
            $user = (new Account())->instance($username, null, $safeword);
            if (empty($user)) {
                throw new \think\Exception("很抱歉、安全密码不正确！");
            }
            if (empty($user['account']['status'])) {
                throw new \think\Exception("很抱歉、您的账号已被冻结！");
            }
            // 只能操作自己的项目
            if ($fund['owner'] != $username) {
                throw new \think\Exception("很抱歉、您无权执行该操作！");
            }
            // 参与者扣钱列表
            $depositList = [];
            // 发起人所得金额
            $money = 0;
            // 找出所有参与人员和他投的钱
            $holder = Db::table('funding_log')->fieldRaw('username, SUM(money) AS money')->where('fid', '=', $id)->where('action', '=', self::ACTION_INVEST)->group('username')->select();
            foreach ($holder as $key => $item) {
                // 准备：用户扣除冻结金额
                $depositList[] = [
                    'username'      =>  $item['username'],
                    'business'      =>  41,
                    'deposit'       =>  -$item['money'],
                ];
                // 准备：发起人所得金额
                $money += $item['money'];
            }
            // 计算手续费
            $charge = $money * $config['charge'];
            if ($money - $charge > 0) {
                // 钱包对象
                $wl = new Wallet();
                // 发起人加钱
                $wl->change($username, 41, [
                    1   =>  [$user['wallet']['money'], $money - $charge, $user['wallet']['money'] + ($money - $charge)],
                ]);
                // 参与人减钱
                $wl->batch_deposit($depositList);
            }
            // 更新项目
            $this->update($id, [
                'status'    =>  3,
            ]);
            // 项目记录
            $bool = Db::table('funding_log')->insert([
                'fid'       =>  $id,
                'type'      =>  $fund['type'],
                'currency'  =>  $fund['currency'],
                'action'    =>  self::ACTION_OVER,
                'username'  =>  $username,
                'money'     =>  $money - $charge > 0 ? $money - $charge : 0,
                'charge'    =>  $charge > 0 ? $charge : 0,
                'create_at' =>  $this->timestamp,
                'update_at' =>  $this->timestamp,
            ]);
            if (empty($bool)) {
                throw new \think\Exception("很抱歉、项目记录保存失败！");
            }
            // 提交事务
            Db::commit();
        } catch (\Exception $e) {
            Db::rollback();
            return json([
                'code'      =>  555,
                'message'   =>  $e->getMessage(),
                'trace'     =>  $e->getTrace()
            ]);
        }
        // 操作成功
        return json([
            'code'      =>  200,
            'message'   =>  '恭喜您、操作成功！'
        ]);
    }

    /**
     * 引导页 - 规则说明
     */
    public function welcome()
    {
        // 用户账号
        $username = session('user.account.username');
        // 获取配置
        $config = config('hello.funding');
        if (empty($config) || empty($config['enable'])) {
            $this->error('很抱歉、系统尚未开启该模块！');
            exit;
        }
        // 查询我的投资总额
        $myTotalMoney = Db::table('funding_log')
                ->where('username', '=', $username)
                ->where('action', '=', self::ACTION_INVEST)
                ->sum('money');
        // 我最大能筹集多少钱
        $maxTarget = 0;
        foreach ($config['condition'] as $maxMoney => $needMoney) {
            // 判断我是否符合
            if ($myTotalMoney >= $needMoney) {
                // 保存我最大能筹集的钱
                $maxTarget = $maxMoney;
            }
        }
        if ($maxTarget == PHP_INT_MAX) {
            $maxTarget = $config['max'];
        }
        // 查询我投资的项目数量
        $myInvestCount = Db::table('funding_log')->where('username', '=', $username)->where('action', '=', self::ACTION_INVEST)->group('fid')->count('id');
        $this->assign('myInvestCount', $myInvestCount ?: 0);
        $this->assign('myTotalMoney', $myTotalMoney);
        $this->assign('maxTarget', $maxTarget);
        $this->assign('max', $config['max']);
        // 显示页面
        return $this->fetch();
    }

    /**
     * 发布项目
     */
    public function publish(Request $req)
    {
        // 用户账号
        $username = session('user.account.username');
        // 获取配置
        $config = config('hello.funding');
        if (empty($config) || empty($config['enable'])) {
            $this->error('很抱歉、系统尚未开启该模块！');
            exit;
        }
        // 查询我的投资总额
        $myTotalMoney = Db::table('funding_log')
                ->where('username', '=', $username)
                ->where('action', '=', self::ACTION_INVEST)
                ->sum('money');
        // 我最大能筹集多少钱
        $maxTarget = 0;
        foreach ($config['condition'] as $maxMoney => $needMoney) {
            // 判断我是否符合
            if ($myTotalMoney >= $needMoney) {
                // 保存我最大能筹集的钱
                $maxTarget = $maxMoney;
            }
        }
        if ($maxTarget == PHP_INT_MAX) {
            $maxTarget = $config['max'];
        }
        // 不够资格
        if ($maxTarget <= 0) {
            $this->error('很抱歉、您需要先去支持别人的项目！');
            exit;
        }
        // 提交请求
        if ($req->isPost()) {
            try {
                // 开启事务
                Db::startTrans();
                // 安全密码
                $safeword = $req->param('safeword');
                if (empty($safeword)) {
                    throw new \think\Exception("很抱歉、请提供安全密码！");
                }
                // 用户账号
                $user = (new Account())->instance($username, null, $safeword);
                if (empty($user)) {
                    throw new \think\Exception("很抱歉、安全密码不正确！");
                }
                if (empty($user['account']['status'])) {
                    throw new \think\Exception("很抱歉、您的账号已被冻结！");
                }
                if ($user['account']['authen'] != 1) {
                    throw new \think\Exception("很抱歉、请先完成实名认证！");
                }
                // 目标金额
                $target = $req->param('target/f');
                if (empty($target)) {
                    throw new \think\Exception("很抱歉、错误的项目金额！");
                }
                // 判断是否达标
                if ($target > $maxTarget) {
                    throw new \think\Exception("很抱歉、项目金额超过您的可筹集范围！");
                }
                // 已有项目在进行中
                $runningProjectCount = Db::table('funding')->where('owner', '=', $username)->where('status', 'in', [1, 2])->count('id');
                if ($runningProjectCount > 0) {
                    throw new \think\Exception("很抱歉、您已有项目在进行中！");
                }
                // 项目分类
                $catalog = $req->param('catalog/d');
                if (empty($catalog) || !array_key_exists($catalog, $config['catalog'])) {
                    throw new \think\Exception("很抱歉、请选择项目分类！");
                }
                // 项目标题
                $title = $req->param('title');
                if (empty($title)) {
                    throw new \think\Exception("很抱歉、请提供项目标题！");
                }
                // 项目图片
                $file = $req->file('image');
                if (empty($file)) {
                    throw new \think\Exception("很抱歉、请提供项目图片！");
                }
                $info = $file->validate(['ext' => 'jpg,jpeg,png'])->move(Env::get('root_path') . 'public/upload');
                if (!$info) {
                    throw new \think\Exception('很抱歉、' . $file->getError() . '！');
                }
                $image = str_ireplace('\\', '/', $info->getSaveName());
                // 项目介绍
                $content = $req->param('content');
                // 发布项目
                $status = $config['audit'] ? 2 : 1;
                $expire_at = date('Y-m-d H:i:s', strtotime('+' . $config['expire'] . ' day'));
                $id = $this->create([
                    'status'    =>  $status,
                    'owner'     =>  $username,
                    'catalog'   =>  $catalog,
                    'title'     =>  $title,
                    'image'     =>  $image,
                    'content'   =>  $content,
                    'target'    =>  $target,
                    'expire_at' =>  $expire_at,
                ]);
                // 提交事务
                Db::commit();
            } catch (\Exception $e) {
                Db::rollback();
                $this->error($e->getMessage());
                exit;
            }
            // 操作成功
            $this->success('恭喜您、操作成功！', '/funding/' . $id . '.html');
            exit;
        }
        // 显示页面
        $this->assign('maxTarget', $maxTarget);
        return $this->fetch();
    }

    /**
     * 编辑项目
     */
    public function edit(Request $req, $id)
    {
        // 用户账号
        $username = session('user.account.username');
        // 获取配置
        $config = config('hello.funding');
        if (empty($config) || empty($config['enable'])) {
            $this->error('很抱歉、系统尚未开启该模块！');
            exit;
        }
        // 获取编号
        if (empty($id)) {
            $this->error('很抱歉、请提供项目编号！');
            exit;
        }
        // 查询项目
        $fund = $this->get($id);
        if (empty($fund) || empty($fund['visible'])) {
            $this->error('很抱歉、该项目不存在！');
            exit;
        }
        // 状态不对
        if ($fund['status'] != 1 && $fund['status'] != 2) {
            $this->error('很抱歉、该项目当前无法编辑！');
            exit;
        }
        // 不是自己的
        if ($fund['owner'] != $username) {
            $this->error('很抱歉、您无法执行该操作！');
            exit;
        }
        // 提交请求
        if ($req->isPost()) {
            try {
                // 开启事务
                Db::startTrans();
                // 安全密码
                $safeword = $req->param('safeword');
                if (empty($safeword)) {
                    throw new \think\Exception("很抱歉、请提供安全密码！");
                }
                // 用户账号
                $user = (new Account())->instance($username, null, $safeword);
                if (empty($user)) {
                    throw new \think\Exception("很抱歉、安全密码不正确！");
                }
                if (empty($user['account']['status'])) {
                    throw new \think\Exception("很抱歉、您的账号已被冻结！");
                }
                if ($user['account']['authen'] != 1) {
                    throw new \think\Exception("很抱歉、请先完成实名认证！");
                }
                // 项目标题
                $title = $req->param('title');
                if (empty($title)) {
                    throw new \think\Exception("很抱歉、请提供项目标题！");
                }
                // 项目图片
                $file = $req->file('image');
                $image = null;
                if (!empty($file)) {
                    $info = $file->validate(['ext' => 'jpg,jpeg,png'])->move(Env::get('root_path') . 'public/upload');
                    if (!$info) {
                        throw new \think\Exception('很抱歉、' . $file->getError() . '！');
                    }
                    $image = str_ireplace('\\', '/', $info->getSaveName());
                }
                // 项目介绍
                $content = $req->param('content');
                // 发布项目
                $data = [
                    'title'     =>  $title,
                    'content'   =>  $content,
                ];
                if (!empty($image)) {
                    $data['image'] = $image;
                }
                $this->update($id, $data);
                // 提交事务
                Db::commit();
            } catch (\Exception $e) {
                Db::rollback();
                $this->error($e->getMessage());
                exit;
            }
            // 操作成功
            $this->success('恭喜您、操作成功！', '/funding/' . $id . '.html');
            exit;
        }
        // 显示页面
        $this->assign('fund', $fund);
        return $this->fetch();
    }

}