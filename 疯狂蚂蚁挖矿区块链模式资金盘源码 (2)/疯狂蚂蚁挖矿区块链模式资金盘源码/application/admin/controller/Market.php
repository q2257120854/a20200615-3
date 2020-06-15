<?php

namespace app\admin\controller;

use think\Db;
use think\Request;

class Market extends Base
{
	/**
	 * 每日行情
	 */
    public function index()
    {
        $markets = Db::table('market')->alias('m')->order('m.date DESC')->paginate(20);
        $this->assign('markets', $markets);
        return $this->fetch();
    }

    /**
     * 全球分红
     */
    public function bonus(Request $req)
    {
        // 获取日期
        $date = $req->param('date');
        // 获取手续费
        $charge = $req->param('charge');
        // 用户数据
        $users = [];
        $userCount = [];
        $userProfit = [];
        // 计算分红
        if (!empty($date) && !empty($charge)) {
            // 所有的等级
            $levels = config('hello.level');
            // 用户数量
            $userCountTemp = Db::table('account')->fieldRaw('type, COUNT(id) AS count')->group('type')->select();
            $userCount = [];
            foreach ($userCountTemp as $key => $item) {
                $userCount[$item['type']] = $item['count'];
            }
            // 所有类型
            $types = [];
            // 找到每个等级的用户，还有比例
            foreach ($levels as $lv => $item) {
                // 是否存在分红
                $rate = $req->param('lv' . $lv);
                if (!empty($rate)) {
                    $types[] = $lv;
                    // 用户数量
                    $count = array_key_exists($lv, $userCount) ? $userCount[$lv] : 0;
                    // 计算收益
                    if ($count > 0) {
                        $userProfit[$lv] = money($charge * $rate / $count);
                    }
                }
            }
            // 找到每个用户
            if (!empty($types)) {
                // 每个用户是否已经发过
                $gb = Db::table('global_bonus')->where('date', '=', $date)->find();
                // 查询用户
                $users = Db::table('account')
                    ->field('type, username')
                    ->where('type', 'in', $types)
                    ->where('status', '=', 1)
                    ->order('type DESC, id DESC')
                    ->paginate(10, false, ['query' => $req->param()])->each(function($item) use ($gb) {
                        if (empty($gb)) {
                            $item['status'] = 0;
                        } else {
                            $content = $gb['lv' . $item['type']] ? json_decode($gb['lv' . $item['type']], true) : [];
                            if (array_key_exists($item['username'], $content)) {
                                $item['status'] = 1;
                            } else {
                                $item['status'] = 0;
                            }
                        }
                        return $item;
                    });
            }
        }
        // 当前的参数
        $this->assign('param', $req->param());
        $this->assign('users', $users);
        $this->assign('userCount', $userCount);
        $this->assign('userProfit', $userProfit);
        return $this->fetch();
    }

    /**
     * 分红记录
     */
    public function bonus_log(Request $req)
    {
        // 查询记录
        $gbs = Db::table('global_bonus')->order('date DESC')->paginate(20)->each(function($item){
            // 比例数组
            $rateArray = json_decode($item['rate'], true);
            // 所有级别
            for ($i = 0; $i <= 8; $i++) {
                // 元数据
                $origin = $item['lv' . $i] ? json_decode($item['lv' . $i], true) : [];
                if (empty($origin)) {
                    $item['lv' . $i] = [
                        'count' =>  0,
                        'money' =>  0,
                        'rate'  =>  0,
                    ];
                    continue;
                }
                // 用户数量
                $count = count($origin);
                // 发放总金额
                $money = 0;
                foreach ($origin as $key => $value) {
                    $money += $value['money'];
                }
                // 级别比例
                $rate = array_key_exists('lv' . $i, $rateArray) ? $rateArray['lv' . $i] : 0;
                // 更新数据
                $item['lv' . $i] = [
                    'count'     =>  $count,
                    'money'     =>  $money,
                    'rate'      =>  $rate
                ];
            }
            // 返回结果
            return $item;
        });
        $this->assign('gbs', $gbs);
        // 显示页面
        return $this->fetch();
    }

    /**
     * 设置行情
     */
    public function set(Request $req)
    {
        // 获取日期
        $date = $req->param('date');
        if (empty($date)) {
            $this->error('很抱歉、请设置日期！');
            exit;
        }
        // 获取价格
        $price = $req->param('price');
        if (empty($price)) {
            $this->error('很抱歉、请设置价格！');
            exit;
        }
        // 获取最高价格
        $high = $req->param('high');
        if (empty($high)) {
            $high = $price;
        }
        // 获取最低价格
        $low = $req->param('low');
        if (empty($low)) {
            $low = $price;
        }
        // 查询数据
        $market = Db::table('market')->where('date', '=', $date)->find();
        if (empty($market)) {
            // 添加数据
            $bool = Db::table('market')->insert([
                'date'              =>  $date,
                'price'             =>  $price,
                'high'              =>  $high,
                'low'               =>  $low,
                'buy_count'         =>  0,
                'buy_money'         =>  0,
                'sell_count'        =>  0,
                'sell_money'        =>  0,
                'success_count'     =>  0,
                'success_money'     =>  0,
                'charge'            =>  0,
                'create_at'         =>  $this->timestamp,
                'update_at'         =>  $this->timestamp,
            ]);
            if (empty($bool)) {
                $this->error('很抱歉、设置失败请再试一次！');
            }
        } else {
            // 更新数据
            $bool = Db::table('market')->where('id', '=', $market['id'])->update([
                'price'             =>  $price,
                'high'              =>  $high,
                'low'               =>  $low,
                'update_at'         =>  $this->timestamp,
            ]);
            if (empty($bool)) {
                $this->error('很抱歉、设置失败请再试一次！');
            }
        }
        // 操作成功
        $this->success('恭喜您、操作成功！', '/admin/market/index.html');
        exit;
    }

    /**
     * 买入订单
     */
    public function buy(Request $req)
    {
        // 查询对象
        $query = Db::table('trade')->alias('t')->where('type', '=', \app\index\controller\Market::TYPE_BUY);
        // 条件：按发布者搜索
        $owner = $req->param('owner');
        if (!is_null($owner) && strlen($owner)) {
            $query->where('t.owner', 'like', "%$owner%");
        }
        // 条件：按接单者搜索
        $target = $req->param('target');
        if (!is_null($target) && strlen($target)) {
            $query->where('t.target', 'like', "%$target%");
        }
        // 条件：按状态搜索
        $status = $req->param('status');
        if (!is_null($status) && $status != -1) {
            $query->where('t.status', '=', $status);
        }
        // 条件：按数值搜索
        $numberField = $req->param('numberField');
        $numberOperator = $req->param('numberOperator');
        $numberValue = $req->param('numberValue');
        if (!is_null($numberField) && !is_null($numberOperator) && !is_null($numberValue) && strlen($numberValue)) {
            if ($numberOperator == 1) {
                $query->where('t.'.$numberField, '>', $numberValue);
            } else if ($numberOperator == 2) {
                $query->where('t.'.$numberField, '=', $numberValue);
            } else if ($numberOperator == 3) {
                $query->where('t.'.$numberField, '<', $numberValue);
            }
        }
        // 排序
        $sortField = $req->param('sortField');
        $sortType = $req->param('sortType');
        if (!is_null($sortField)) {
            $query->order('t.' . $sortField . ' ' . $sortType);
        } else {
            $query->order('t.update_at DESC');
        }
        // 查询数据
        $trades = $query->order('t.id DESC')->paginate(20, false, ['query' => $req->param()]);
        $this->assign('trades', $trades);
        $this->assign('fields', [
            'update_at' =>  '时间',
            'number'    =>  '数量',
            'price'     =>  '单价',
            'charge'    =>  '服务费',
        ]);
        $this->assign('statuses', [
            0           =>  '已取消',
            1           =>  '匹配中',
            2           =>  '待付款',
            3           =>  '待确认',
            4           =>  '投诉中',
            8           =>  '成交',
        ]);
        return $this->fetch();
    }

    /**
     * 卖出订单
     */
    public function sell(Request $req)
    {
        // 查询对象
        $query = Db::table('trade')->alias('t')->where('type', '=', \app\index\controller\Market::TYPE_SELL);
        // 条件：按发布者搜索
        $owner = $req->param('owner');
        if (!is_null($owner) && strlen($owner)) {
            $query->where('t.owner', 'like', "%$owner%");
        }
        // 条件：按接单者搜索
        $target = $req->param('target');
        if (!is_null($target) && strlen($target)) {
            $query->where('t.target', 'like', "%$target%");
        }
        // 条件：按状态搜索
        $status = $req->param('status');
        if (!is_null($status) && $status != -1) {
            $query->where('t.status', '=', $status);
        }
        // 条件：按数值搜索
        $numberField = $req->param('numberField');
        $numberOperator = $req->param('numberOperator');
        $numberValue = $req->param('numberValue');
        if (!is_null($numberField) && !is_null($numberOperator) && !is_null($numberValue) && strlen($numberValue)) {
            if ($numberOperator == 1) {
                $query->where('t.'.$numberField, '>', $numberValue);
            } else if ($numberOperator == 2) {
                $query->where('t.'.$numberField, '=', $numberValue);
            } else if ($numberOperator == 3) {
                $query->where('t.'.$numberField, '<', $numberValue);
            }
        }
        // 排序
        $sortField = $req->param('sortField');
        $sortType = $req->param('sortType');
        if (!is_null($sortField)) {
            $query->order('t.' . $sortField . ' ' . $sortType);
        } else {
            $query->order('t.update_at DESC');
        }
        // 查询数据
        $trades = $query->order('t.id DESC')->paginate(20, false, ['query' => $req->param()]);
        $this->assign('trades', $trades);
        $this->assign('fields', [
            'update_at' =>  '时间',
            'number'    =>  '数量',
            'price'     =>  '单价',
            'charge'    =>  '服务费',
        ]);
        $this->assign('statuses', [
            0           =>  '已取消',
            1           =>  '匹配中',
            2           =>  '待付款',
            3           =>  '待确认',
            4           =>  '投诉中',
            8           =>  '成交',
        ]);
        return $this->fetch();
    }

    /**
     * 投诉订单
     */
    public function report(Request $req)
    {
        // 查询对象
        $query = Db::table('trade')->alias('t')->where('status', '=', \app\index\controller\Market::STATUS_IN_THE_COMPLAINT);
        // 条件：按发布者搜索
        $owner = $req->param('owner');
        if (!is_null($owner) && strlen($owner)) {
            $query->where('t.owner', 'like', "%$owner%");
        }
        // 条件：按接单者搜索
        $target = $req->param('target');
        if (!is_null($target) && strlen($target)) {
            $query->where('t.target', 'like', "%$target%");
        }
        // 条件：按类型搜索
        $type = $req->param('type');
        if (!is_null($type) && $type != -1) {
            $query->where('t.type', '=', $type);
        }
        // 条件：按数值搜索
        $numberField = $req->param('numberField');
        $numberOperator = $req->param('numberOperator');
        $numberValue = $req->param('numberValue');
        if (!is_null($numberField) && !is_null($numberOperator) && !is_null($numberValue) && strlen($numberValue)) {
            if ($numberOperator == 1) {
                $query->where('t.'.$numberField, '>', $numberValue);
            } else if ($numberOperator == 2) {
                $query->where('t.'.$numberField, '=', $numberValue);
            } else if ($numberOperator == 3) {
                $query->where('t.'.$numberField, '<', $numberValue);
            }
        }
        // 排序
        $sortField = $req->param('sortField');
        $sortType = $req->param('sortType');
        if (!is_null($sortField)) {
            $query->order('t.' . $sortField . ' ' . $sortType);
        } else {
            $query->order('t.update_at DESC');
        }
        // 查询数据
        $trades = $query->order('t.id DESC')->paginate(20, false, ['query' => $req->param()]);
        $this->assign('trades', $trades);
        $this->assign('fields', [
            'update_at' =>  '时间',
            'number'    =>  '数量',
            'price'     =>  '单价',
            'charge'    =>  '服务费',
        ]);
        $this->assign('types', [
            \app\index\controller\Market::TYPE_BUY           =>  '买入',
            \app\index\controller\Market::TYPE_SELL          =>  '卖出',
        ]);
        return $this->fetch();
    }

    /**
     * 交易详情
     */
    public function transaction(Request $req)
    {
        return $this->fetch();
    }

    /**
     * 取消订单
     */
    public function cancel(Request $req)
    {
        // 获取编号
        $id = $req->param('id');
        if (empty($id)) {
            $this->error('很抱歉、请提供编号！');
            exit;
        }
        // 查询订单
        $trade = Db::table('trade')->where('tid', '=', $id)->find();
        if (empty($trade)) {
            $this->error('很抱歉、该订单不存在！');
            exit;
        }
        // 状态不对
        if ($trade['status'] == 0) {
            $this->error('很抱歉、该订单已经取消了！');
            exit;
        }
        if ($trade['status'] == 8) {
            $this->error('很抱歉、成功的订单无法取消！');
            exit;
        }
        try {
            // 开启事务
            Db::startTrans();
            // 执行取消操作
            (new \app\index\controller\Market())->cancel($trade, null, true);
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
  	/**
     * 删除成功订单
     */
    public function removemkt(Request $req)
    {
        // 获取编号
        $id = $req->param('id');
        if (empty($id)) {
            $this->error('很抱歉、请提供编号！');
            exit;
        }
        // 查询订单
        $trade = Db::table('trade')->where('tid', '=', $id)->find();
        if (empty($trade)) {
            $this->error('很抱歉、该订单不存在！');
            exit;
        }
        // 状态不对
        if ($trade['status'] != 8) {
            $this->error('很抱歉、该订单状态未完成！');
            exit;
        }        
        $bool = Db::table('trade')->where('tid', '=', $id)->delete();
        if (empty($bool)) {
            $this->error('很抱歉、操作失败请再试一次！');
            exit;
        }
        // 操作成功
        $this->success('恭喜您、操作成功！');
        exit;
    }
    /**
     * 查询手续费
     */
    public function charge(Request $req)
    {
        // 获取日期
        $date = $req->param('date');
        if (empty($date)) {
            $date = date('Y-m-d');
        }
        // 查询服务费
        $charge = Db::table('market')->where('date', '=', $date)->value('charge');
        if (is_null($charge)) {
            $charge = 0;
        }
        // 查询全球分红发放情况
        $rate = [];
        $gb = Db::table('global_bonus')->field('charge, rate')->where('date', '=', $date)->find();
        if (!empty($gb)) {
            $charge = $gb['charge'];
            $rate = json_decode($gb['rate'], true);
        }
        // 返回数据
        return json([
            'code'      =>  200,
            'message'   =>  '恭喜您、操作成功！',
            'data'      =>  [
                'date'  =>  $date,
                'charge'    =>  money($charge),
                'rate'      =>  $rate,
            ]
        ]);
    }

    /**
     * 发放奖励
     */
    public function send(Request $req)
    {
        try {
            // 开启事务
            Db::startTrans();
            // 获取日期
            $date = $req->param('date');
            if (empty($date)) {
                return json([
                    'code'      =>  501,
                    'message'   =>  '很抱歉、请提供日期！'
                ]);
            }
            // 获取手续费
            $charge = $req->param('charge/f');
            if (empty($charge) || $charge < 0) {
                return json([
                    'code'      =>  502,
                    'message'   =>  '很抱歉、错误的手续费！'
                ]);
            }
            // 获取用户类型
            $type = $req->param('type/d');
            if (is_null($type)) {
                return json([
                    'code'      =>  503,
                    'message'   =>  '很抱歉、错误的用户类型！'
                ]);
            }
            // 获取比例
            $rate = $req->param('rate');
            if (empty($rate)) {
                return json([
                    'code'      =>  504,
                    'message'   =>  '很抱歉、错误的比例！'
                ]);
            }
            // 获取账号
            $username = $req->param('username');
            if (empty($username)) {
                return json([
                    'code'      =>  505,
                    'message'   =>  '很抱歉、请提供账号！'
                ]);
            }
            // 获取金额
            $money = $req->param('money/f');
            if (empty($money) || $money < 0) {
                return json([
                    'code'      =>  506,
                    'message'   =>  '很抱歉、错误的金额！'
                ]);
            }
            // 查询账号
            $user = (new \app\index\controller\Account())->instance($username);
            if (empty($user) || empty($user['account']['status'])) {
                return json([
                    'code'      =>  507,
                    'message'   =>  '很抱歉、账号不存在或已被冻结！'
                ]);
            }
            // 查询这一天是否发过
            $gb = Db::table('global_bonus')->where('date', '=', $date)->find();
            if (empty($gb)) {
                // 具体数据
                $gb = [
                    'date'      =>  $date,
                    'charge'    =>  $charge,
                    'rate'      =>  json_encode(['lv' . $type => $rate]),
                    'people'    =>  1,
                    'money'     =>  $money,
                    'lv0'       =>  null,
                    'lv1'       =>  null,
                    'lv2'       =>  null,
                    'lv3'       =>  null,
                    'lv4'       =>  null,
                    'lv5'       =>  null,
                    'lv6'       =>  null,
                    'lv7'       =>  null,
                    'lv8'       =>  null,
                    'create_at' =>  $this->timestamp,
                    'update_at' =>  $this->timestamp,
                ];
                // 根据用户设置不同的lv
                $gb['lv'.$type] = json_encode([
                    $username       =>  [
                        'username'  =>  $username,
                        'rate'      =>  $rate,
                        'money'     =>  $money,
                        'time'      =>  date('Y-m-d H:i:s')
                    ]
                ]);
                // 添加记录
                $bool = Db::table('global_bonus')->insert($gb);
            } else {
                // 已经发过了
                $content = $gb['lv' . $type] ? json_decode($gb['lv' . $type], true) : [];
                if (array_key_exists($username, $content)) {
                    return json([
                        'code'      =>  510,
                        'message'   =>  '很抱歉、该用户已经发过了！'
                    ]);
                }
                // 要修改的数据
                $data = [
                    'charge'    =>  $charge,
                    'people'    =>  Db::raw('people+1'),
                    'money'     =>  Db::raw('money+'.$money),
                    'update_at' =>  $this->timestamp,
                ];
                // 标记已经发过了
                $content[$username] = [
                    'username'  =>  $username,
                    'rate'      =>  $rate,
                    'money'     =>  $money,
                    'time'      =>  date('Y-m-d H:i:s')
                ];
                $data['lv' . $type] = json_encode($content);
                // 修改比率
                $rateArray = json_decode($gb['rate'], true);
                $rateArray['lv'.$type] = $rate;
                $data['rate'] = json_encode($rateArray);
                // 更新数据
                $bool = Db::table('global_bonus')->where('id', '=', $gb['id'])->update($data);
            }
            // 判断结果
            if (empty($bool)) {
                return json([
                    'code'      =>  511,
                    'message'   =>  '很抱歉、发送日志保存失败！',
                ]);
            }
            // 发放金额
            (new \app\index\controller\Wallet())->change($username, 32, [
                1   =>  [
                    $user['wallet']['money'],
                    $money,
                    $user['wallet']['money'] + $money,
                ]
            ]);
            // 提交事务
            Db::commit();
        } catch (\Exception $e) {
            Db::rollback();
            return json([
                'code'      =>  555,
                'message'   =>  $e->getMessage(),
                'trace'     =>  $e->getTrace(),
                'vars'      =>  get_defined_vars(),
            ]);
        }
        // 操作成功
        return json([
            'code'      =>  200,
            'message'   =>  '恭喜您、操作成功！',
        ]);
    }
}
