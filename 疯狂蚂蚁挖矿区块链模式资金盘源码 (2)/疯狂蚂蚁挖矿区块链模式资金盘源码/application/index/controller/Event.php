<?php

namespace app\index\controller;

use think\Db;
use think\Request;

class Event extends Base
{

    /**
     * 活动类型
     */
    const TYPE_SCRATCH = 1;             // 刮刮卡

    /**
     * 活动状态
     */
    const STATUS_PICK_UP = 0;           // 待提货
    const STATUS_SHIPPED = 1;           // 已发货
    const STATUS_DELIVERY = 2;          // 代发货

    /**
     * 奖品类型
     */
    const REWARD_MACHINE = 1;           // 蚁后
    const REWARD_ARTICLE = 2;           // 实物，需要发货
    const REWARD_TELFARE = 3;           // 话费，需要发货
    const REWARD_CURRENCY = 8;          // 货币

    // +----------------------------------------------------------------------
    // | 私有函数
    // +----------------------------------------------------------------------

    /**
     * 给一个小数，判断是否中奖
     */
    public function compute($number)
    {
        // 例如        0.01013
        // 总长度      7
        $len = strlen($number);
        // 百千万      100000
        $bqw = str_pad('1', $len - 1, '0');
        // 转为正书    1013
        $zheng = $number * $bqw;
        // 根据随机值判断
        return mt_rand(0, $bqw) <= $number;
    }

    // +----------------------------------------------------------------------
    // | 对外接口
    // +----------------------------------------------------------------------

    /**
     * 申请提货
     */
    public function pickup(Request $req)
    {
        try {
            // 开启事务
            Db::startTrans();
            // 用户账号
            $username = session('user.account.username');
            // 获取编号
            $id = $req->param('id/d');
            if (empty($id)) {
                return json([
                    'code'      =>  500,
                    'message'   =>  '很抱歉、请提供编号！'
                ]);
            }
            // 查询记录
            $log = Db::table('event_log')->where('id', '=', $id)->where('username', '=', $username)->find();
            if (empty($log)) {
                return json([
                    'code'      =>  502,
                    'message'   =>  '很抱歉、该记录不存在！'
                ]);
            }
            // 状态不对
            if ($log['status'] == self::STATUS_SHIPPED) {
                return json([
                    'code'      =>  503,
                    'message'   =>  '很抱歉、该奖品已发货！'
                ]);
            }
            // 状态不对
            if ($log['status'] == self::STATUS_DELIVERY) {
                return json([
                    'code'      =>  504,
                    'message'   =>  '很抱歉、请勿重复申请提货！'
                ]);
            }
            // 用户对象
            $user = (new Account())->instance($username);
            if (empty($user)) {
                return json([
                    'code'      =>  505,
                    'message'   =>  '很抱歉、请重新登录！'
                ]);
            }
            if (empty($user['account']['status'])) {
                return json([
                    'code'      =>  506,
                    'message'   =>  '很抱歉、您的账号已被冻结！'
                ]);
            }
            if ($user['account']['authen'] != 1) {
                return json([
                    'code'      =>  507,
                    'message'   =>  '很抱歉、请先通过实名认证！'
                ]);
            }
            // 获取数据
            $data = [];
            $data['name'] = $req->param('name');
            $data['mobile'] = $req->param('mobile');
            $data['province'] = $req->param('province');
            $data['city'] = $req->param('city');
            $data['county'] = $req->param('county');
            $data['address'] = $req->param('address');
            // 更新记录
            $bool = Db::table('event_log')->where('id', '=', $id)->update([
                'status'    =>  self::STATUS_DELIVERY,
                'receive'   =>  json_encode($data),
                'update_at' =>  $this->timestamp
            ]);
            if (empty($bool)) {
                return json([
                    'code'      =>  510,
                    'message'   =>  '很抱歉、更新记录失败请重试！'
                ]);
            }
            // 操作日志
            $this->log(21);
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

    /**
     * 查看发货
     */
    public function look(Request $req)
    {
        // 用户账号
        $username = session('user.account.username');
        // 获取编号
        $id = $req->param('id/d');
        if (empty($id)) {
            return json([
                'code'      =>  500,
                'message'   =>  '很抱歉、请提供编号！'
            ]);
        }
        // 查询记录
        $log = Db::table('event_log')->where('id', '=', $id)->where('username', '=', $username)->find();
        if (empty($log)) {
            return json([
                'code'      =>  502,
                'message'   =>  '很抱歉、该记录不存在！'
            ]);
        }
        // 状态不对
        if ($log['status'] == self::STATUS_PICK_UP) {
            return json([
                'code'      =>  503,
                'message'   =>  '很抱歉、该奖品还未提货！'
            ]);
        }
        // 返回数据
        return json([
            'code'      =>  200,
            'message'   =>  '恭喜您、操作成功！',
            'data'      =>  [
                'type'      =>  $log['reward_type'],
                'receive'   =>  json_decode($log['receive'], true),
                'send'      =>  $log['send'],
            ],
        ]);
    }

    /**
     * 大转盘
     */
    public function turntable()
    {
        return $this->fetch();
    }

    /**
     * 刮刮乐
     */
    public function scratch(Request $req)
    {
        // 用户账号
        $username = session('user.account.username');
        // 得到所有的奖品
        $rewards = config('hello.event.scratch.reward');
        // 是否开启
        if (empty(config('hello.event.scratch.enable'))) {
            $this->error('很抱歉、活动尚未开启！');
            exit;
        }
        // 申请刮卡
        if ($req->isPost()) {
            try {
                // 没有得奖的原因
                $remark = null;
                // 开启事务
                Db::startTrans();
                // 是否开启
                if (empty(config('hello.event.scratch.enable'))) {
                    return json([
                        'code'      =>  500,
                        'message'   =>  '很抱歉、活动尚未开启！'
                    ]);
                }
                // 用户对象
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
                        'message'   =>  '很抱歉、您的账号已被冻结！'
                    ]);
                }
                if ($user['account']['authen'] != 1) {
                    return json([
                        'code'      =>  503,
                        'message'   =>  '很抱歉、请先通过实名认证！'
                    ]);
                }
                // 查询记录次数
                $count = Db::table('event_log')->where('username', '=', $username)->where('type', '=', self::TYPE_SCRATCH)->count('id');
                // 查询机会
                $chance = config('hello.event.scratch.chance');
                if (array_key_exists('people', $chance) && $chance['people'] > 0) {
                    if ($user['dashboard']['team_count'] < $chance['people']) {
                        return json([
                            'code'      =>  504,
                            'message'   =>  '很抱歉、您没有足够的机会！ -1'
                        ]);
                    }
                    $team_count = $user['dashboard']['team_count'];
                    $cishu = floor($team_count / $chance['people']);
                    if ($cishu <= 0) {
                        return json([
                            'code'      =>  504,
                            'message'   =>  '很抱歉、您没有足够的机会！ -2'
                        ]);
                    }
                    if ($count >= $cishu) {
                        return json([
                            'code'      =>  504,
                            'message'   =>  '很抱歉、您没有足够的机会！ -3',
                        ]);
                    }
                }
                // 查询我的中奖记录
                $myRewardLogCount = Db::table('event_log')
                        ->fieldRaw('reward, COUNT(id) AS count')
                        ->where('username', '=', $username)
                        ->where('type', '=', self::TYPE_SCRATCH)
                        ->where('hit', '=', 1)
                        ->group('reward')
                        ->select();
                // 所有已中奖的数量
                $allRewardLogCount = Db::table('event_log')
                        ->fieldRaw('reward, COUNT(id) AS count')
                        ->where('type', '=', self::TYPE_SCRATCH)
                        ->where('hit', '=', 1)
                        ->group('reward')
                        ->select();

                // 最终中的奖
                $reward = null;
                // 循环所有奖品
                foreach ($rewards as $key => $item) {
                    // 默认不可以参与抽奖
                    $canyu = false;
                    // 概率大于0才可以抽奖
                    if ($item['percent'] > 0) {
                        // 数量大于0才可以抽奖
                        if ($item['number'] > 0) {
                            // 循环所有人的中奖记录，判断是否还有名额
                            $isNumber = true;
                            foreach ($allRewardLogCount as $_key => $_item) {
                                if ($_item['reward'] == $item['id'] && $_item['count'] >= $item['number']) {
                                    $remark = 1;
                                    $isNumber = false;
                                    break;
                                }
                            }
                            // 还有数量
                            if ($isNumber) {
                                // 存在中奖限制
                                if (array_key_exists('limit', $item)) {
                                    // 存在个人中奖数量的限制
                                    $isPerson = true;
                                    if (array_key_exists('person', $item['limit'])) {
                                        // 循环我中过的奖，根据数量判断是否可以继续参与抽奖
                                        foreach ($myRewardLogCount as $_key => $_item) {
                                            if ($_item['reward'] == $item['id'] && $_item['count'] >= $item['limit']['person']) {
                                                $remark = 2;
                                                $isPerson = false;
                                                break;
                                            }
                                        }
                                    }
                                    // 存在指定天数内名额的限制
                                    $isDay = true;
                                    if (array_key_exists('day', $item['limit'])) {
                                        // 开始时间
                                        $date = date('Y-m-d', strtotime('-' . $item['limit']['day'][0] . ' day'));
                                        // 查询指定时间内，该奖品的中奖数量
                                        $dayCount = Db::table('event_log')
                                                ->where('type', '=', self::TYPE_SCRATCH)
                                                ->where('hit', '=', 1)
                                                ->where('reward', '=', $item['id'])
                                                ->where('create_at', '>=', $date)
                                                ->count('id');
                                        // 判断是否还有名额
                                        if ($dayCount >= $item['limit']['day'][1]) {
                                            $remark = 3;
                                            $isDay = false;
                                        }
                                    }
                                    // 当个人限制和指定天数的限制都通过，那么可以参与抽奖
                                    $canyu = $isPerson && $isDay;
                                } else {
                                    // 不存在中奖限制的话，可以直接参与抽奖
                                    $canyu = true;
                                }
                            }
                        }
                    }
                    // print_r([$item['name'], $canyu, $isNumber, $isPerson, $isDay]);
                    // 当可以参与抽奖的时候，计算是否中奖
                    if ($canyu && ($item['percent'] >= 1 || $this->compute($item['percent']))) {
                        $reward = $item;
                        break;
                    }
                }
                // 如果中的是蚁后，需要赠送蚁后
                if (!empty($reward) && $reward['type'] == self::REWARD_MACHINE) {
                    (new Store())->give($reward['machine'], $username);
                }
                // 如果中的是货币，需要赠送货币
                if (!empty($reward) && ($reward['type'] == self::REWARD_CURRENCY)) {
                    (new Wallet())->change($username, 23, [
                        1   =>  [
                            $user['wallet']['money'],
                            $reward['value'],
                            $user['wallet']['money'] + $reward['value'],
                        ]
                    ]);
                }
                // 添加记录
                $evLog = [
                    'username'      =>  $username,
                    'type'          =>  self::TYPE_SCRATCH,
                    'status'        =>  0,
                    'hit'           =>  0,
                    'reward'        =>  0,
                    'reward_type'   =>  0,
                    'receive'       =>  null,
                    'send'          =>  null,
                    'create_at'     =>  $this->timestamp,
                    'update_at'     =>  $this->timestamp,
                ];
                if (!empty($reward)) {
                    $evLog['hit'] = 1;
                    $evLog['reward'] = $reward['id'];
                    $evLog['reward_type'] = $reward['type'];
                    $evLog['status'] = ($reward['type'] == self::REWARD_MACHINE || $reward['type'] == self::REWARD_CURRENCY) ? self::STATUS_SHIPPED : self::STATUS_PICK_UP;
                }
                $bool = Db::table('event_log')->insert($evLog);
                if (empty($bool)) {
                    throw new \think\Exception("很抱歉、抽奖记录保存失败！");
                }
                // 操作日志
                $this->log(20);
                // 提交事务
                Db::commit();
            } catch (\Exception $e) {
                Db::rollback();
                return json([
                    'code'      =>  555,
                    'message'   =>  $e->getMessage(),
                ]);
            }
            // 返回结果
            return json([
                'code'      =>  200,
                'message'   =>  '恭喜您、操作成功！',
                'data'      =>  [
                    'remark'=>  $remark,
                    'reward'=>  [
                        'name'  =>  empty($reward) ? '再接再厉' : $reward['name'],
                        'date'  =>  date('Y-m-d'),
                        'status'=>  ($reward['type'] == self::REWARD_MACHINE || $reward['type'] == self::REWARD_CURRENCY) ? self::STATUS_SHIPPED : self::STATUS_PICK_UP
                    ]
                ]
            ]);
        }
        // 查询记录次数
        $count = Db::table('event_log')->where('username', '=', $username)->where('type', '=', self::TYPE_SCRATCH)->count('id');
        // 查询机会
        $myChance = 0;
        $chance = config('hello.event.scratch.chance');
        if (array_key_exists('people', $chance) && $chance['people'] > 0) {
            $user = (new Account())->instance($username);
            if ($user['dashboard']['team_count'] > $chance['people']) {
                $team_count = $user['dashboard']['team_count'];
                $myChance = floor($team_count / $chance['people']);
                $myChance -= $count;
                $myChance = $myChance < 0 ? 0 : $myChance;
            }
        } else {
            $myChance = -1;
        }
        $this->assign('myChance', $myChance);
        // 查询我的中奖记录
        $myRewardLog = Db::table('event_log')
                ->fieldRaw('id, type, status, reward, reward_type, update_at AS date')
                ->where('username', '=', $username)
                ->where('type', '=', self::TYPE_SCRATCH)
                ->where('hit', '=', 1)
                ->order('update_at DESC')
                ->select();
        // 数据格式化
        foreach ($myRewardLog as $key => $item) {
            // 奖品名称
            foreach ($rewards as $_key => $_item) {
                if ($_item['id'] == $item['reward']) {
                    $myRewardLog[$key]['reward'] = $_item['name'];
                }
            }
        }
        $this->assign('myRewardLog', $myRewardLog);
        // 奖品数据
        $rewardData = [];
        foreach ($rewards as $key => $item) {
            $rewardData[] = $item['name'];
        }
        $this->assign('rewards', json_encode($rewardData));
        // 显示页面
        return $this->fetch();
    }

    /**
     * 共享蚁巢
     */
    public function pool(Request $req)
    {
        // 获取配置
        $config = Configure::get('hello.event.pool');
        if (empty($config) || empty($config['enable'])) {
            $this->error('很抱歉、该模块尚未开启！');
            exit;
        }
        $this->assign('config', $config);
        // 用户账号
        $username = session('user.account.username');
        // 已领总矿
        $collect = Db::table('pool')->where('action', '=', 1)->sum('reward');
        $this->assign('collect', $collect);
        // 用户账号
        $user = (new Account())->instance($username, null, null, true);
        if (empty($user)) {
            return json([
                'code'      =>  500,
                'message'   =>  '很抱歉、请重新登录！',
            ]);
        }
        // 请求处理
        if ($req->isPost()) {
            // 最终返回的数据
            $data = [];
            try {
                // 开启事务
                Db::startTrans();
                // 行为判断
                switch ($req->param('action')) {
                    // 倒计时
                    case 'countdown':
                        // 查询上次领取或加入的时间
                        $last_at = Db::table('pool')->where('username', '=', $username)->where('action', '<>', 2)->order('create_at DESC')->value('create_at');
                        if (empty($last_at)) {
                            // 第一次加入，那么上次的时间就是当前时间
                            $last_at = $this->timestamp;
                            // 如果他拥有算力的话，那就开始计算
                            if ($user['dashboard']['power'] > 0) {
                                $bool = Db::table('pool')->insert([
                                    'username'      =>  $username,
                                    'action'        =>  3,
                                    'power'         =>  0,
                                    'prop'          =>  null,
                                    'spend'         =>  0,
                                    'reward'        =>  0,
                                    'create_at'     =>  $last_at,
                                ]);
                                if (empty($bool)) {
                                    return json([
                                        'code'      =>  501,
                                        'message'   =>  '很抱歉、请刷新页面再试！',
                                    ]);
                                }
                            }
                        }
                        // 保存时间
                        $data['duration'] = $config['interval'];
                        $data['last_at'] = $last_at;
                        break;
                    // 领取收益
                    case 'profit':
                        // 账号判断
                        if (empty($user['account']['status'])) {
                            return json([
                                'code'      =>  500,
                                'message'   =>  '很抱歉、您的账号已被冻结！',
                            ]);
                        }
                        if ($user['account']['authen'] != 1) {
                            return json([
                                'code'      =>  500,
                                'message'   =>  '很抱歉、请先完成实名认证！',
                            ]);
                        }
                        if (empty($user['dashboard']['power']) || $user['dashboard']['power'] <= 0) {
                            return json([
                                'code'      =>  500,
                                'message'   =>  '很抱歉、您的算力不足！',
                            ]);
                        }
                        // 查询上次领取或加入的时间
                        $last_at = Db::table('pool')->where('username', '=', $username)->where('action', '<>', 2)->order('create_at DESC')->value('create_at');
                        if (empty($last_at)) {
                            return json([
                                'code'      =>  501,
                                'message'   =>  '很抱歉、请刷新页面再试！',
                            ]);
                        }
                        // 对比时间
                        $second = time() - strtotime($last_at);
                        if ($second < $config['interval']) {
                            return json([
                                'code'      =>  502,
                                'message'   =>  '很抱歉、请过一段时间再来！',
                            ]);
                        }
                        $second = $second > $config['interval'] ? $config['interval'] : $second;
                        // 剩余的比例
                        $collectPercent = money(1 - ($collect / $config['volume']));
                        // 计算收益
                        $profit = money($user['dashboard']['power'] * $second * $config['percent'] * $collectPercent);
                        if ($profit <= 0) {
                            return json([
                                'code'      =>  503,
                                'message'   =>  '很抱歉、您来晚了！',
                                'data'      =>  [
                                    $config['volume'], $collect, $collectPercent,
                                    $user['dashboard']['power'], $second, $config['percent']
                                ]
                            ]);
                        }
                        // 保存记录
                        $bool = Db::table('pool')->insert([
                            'username'      =>  $username,
                            'action'        =>  1,
                            'power'         =>  $user['dashboard']['power'],
                            'prop'          =>  null,
                            'spend'         =>  0,
                            'reward'        =>  $profit,
                            'create_at'     =>  $this->timestamp,
                        ]);
                        if (empty($bool)) {
                            return json([
                                'code'      =>  504,
                                'message'   =>  '很抱歉、服务器繁忙请稍后再试！',
                            ]);
                        }
                        // 给用户加钱
                        (new Wallet())->change($username, 18, [
                            1       =>  [
                                $user['wallet']['money'],
                                $profit,
                                $user['wallet']['money'] + $profit,
                            ],
                        ]);
                        // 操作记录
                        $this->log(66);
                        break;
                    default:
                        # code...
                        break;
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
                'message'   =>  '恭喜您、操作成功！',
                'data'      =>  $data
            ]);
        }
        // 查询道具
        $props = Db::table('store')->where('catalog', '=', 2)->order('sort DESC')->select();
        $this->assign('props', $props);
        // 显示页面
        return $this->fetch();
    }

    /**
     * 链上合约 - 代理商
     */
    public function contract_agent(Request $req)
    {
        // 显示页面
        return $this->fetch();
    }
}
