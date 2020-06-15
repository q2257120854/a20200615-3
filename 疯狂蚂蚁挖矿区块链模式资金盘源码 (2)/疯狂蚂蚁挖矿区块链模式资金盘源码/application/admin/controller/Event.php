<?php

namespace app\admin\controller;

use think\Db;
use think\Request;
use think\facade\Env;
use app\index\controller\Configure;

class Event extends Base
{

    /**
     * 立即发货
     */
    public function shipped(Request $req)
    {
        // 获取编号
        $id = $req->param('id/d');
        if (empty($id)) {
            $this->error('很抱歉、请提供编号！');
            exit;
        }
        // 查询记录
        $log = Db::table('event_log')->where('id', '=', $id)->find();
        if (empty($log)) {
            $this->error('很抱歉、该信息不存在！');
            exit;
        }
        // 获取内容
        $send = $req->param('send');
        if (empty($send)) {
            $this->error('很抱歉、发货信息不能为空！');
            exit;
        }
        // 更新数据
        $bool = Db::table('event_log')->where('id', '=', $id)->update([
            'status'        =>  \app\index\controller\Event::STATUS_SHIPPED,
            'send'          =>  $send,
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
     * 删除记录
     */
    public function remove(Request $req)
    {
        // 获取编号
        $id = $req->param('id/d');
        if (empty($id)) {
            $this->error('很抱歉、请提供编号！');
            exit;
        }
        // 查询记录
        $log = Db::table('event_log')->where('id', '=', $id)->find();
        if (empty($log)) {
            $this->error('很抱歉、该信息不存在！');
            exit;
        }
        // 删除数据
        $bool = Db::table('event_log')->where('id', '=', $id)->delete();
        if (empty($bool)) {
            $this->error('很抱歉、操作失败请再试一次！');
            exit;
        }
        // 操作成功
        $this->success('恭喜您、操作成功！');
        exit;
    }

    /**
     * 刮刮卡
     */
    public function scratch(Request $req)
    {
        // 查询对象
        $query = Db::table('event_log');
        // 条件：按账号搜索
        $username = $req->param('username');
        if (!is_null($username) && strlen($username)) {
            $query->where('username', '=', $username);
        }
        // 条件：按状态搜索
        $status = $req->param('status');
        if (!is_null($status) && strlen($status)) {
            $query->where('status', '=', $status);
        }
        // 条件：按中奖搜索
        $hit = $req->param('hit');
        if (!is_null($hit) && strlen($hit)) {
            $query->where('hit', '=', $hit);
        }
        // 条件：按奖品类型搜索
        $reward_type = $req->param('reward_type');
        if (!is_null($reward_type) && strlen($reward_type)) {
            $query->where('reward_type', '=', $reward_type);
        }
        // 条件：按具体奖品搜索
        $reward = $req->param('reward');
        if (!is_null($reward) && strlen($reward)) {
            $query->where('reward', '=', $reward);
        }
        // 获取奖品
        $rewards = config('hello.event.scratch.reward');
        // 搜索数据
        $logs = $query->order('update_at DESC')->paginate(20, false, ['query' => $req->param()])->each(function($item) use($rewards){
            $item['receive'] = empty($item['receive']) ? [] : json_decode($item['receive'], true);
            if (empty($item['reward'])) {
                $item['reward'] = [
                    'name'  =>  '<div class="text-muted">再接再厉</div>'
                ];
            } else {
                foreach ($rewards as $_key => $_item) {
                    if ($item['reward'] == $_item['id']) {
                        $item['reward'] = $_item;
                        break;
                    }
                }
            }
            return $item;
        });
        $this->assign('logs', $logs);
        // 显示页面
        $this->assign('statuses', [
            '代提货', '待发货', '已发货'
        ]);
        $this->assign('hits', [
            '未中奖', '中奖啦'
        ]);
        $this->assign('types', [
            1   =>  '蚁后',
            2   =>  '实物',
            3   =>  '话费',
        ]);
        return $this->fetch();
    }

    /**
     * 共享蚁巢
     */
    public function pool(Request $req)
    {
        // 读取配置
        $config = Configure::get('hello.event.pool');
        // 提交修改
        if ($req->isPost()) {
            // 要修改的数据
            $data = [];
            // 修改类型
            $action = $req->param('action');
            if ($action == 'pool') {
                // 是否开启
                $data['enable'] = $req->param('enable/b');
                // 剩余容量
                $data['volume'] = $req->param('volume/f');
                // 目前难度
                $data['complexity'] = $req->param('complexity/d');
                // 收益比例
                $data['percent'] = $req->param('percent');
                // 收益浮动
                $data['float'] = $req->param('float');
                // 时间间隔
                $data['interval'] = $req->param('interval/d');
                // 背景图片
                $file = $req->file('background');
                if (!empty($file)) {
                    $info = $file->validate(['ext' => 'jpg,jpeg,png'])->move(Env::get('root_path') . 'public/upload');
                    if (!$info) {
                        $this->error('很抱歉、' . $file->getError() . '！');
                        exit;
                    }
                    $data['background'] = '/upload/' . $info->getSaveName();
                }
            } else {
                // 获取名称
                $name = $req->param('name/a');
                // 获取算力
                $power = $req->param('power/a');
                // 获取价格
                $price = $req->param('price/a');
                // 获取每天限量
                $day = $req->param('day/a');
                // 获取每人限量
                $person = $req->param('person/a');
                // 循环处理
                $data = [
                    'prop'  =>  []
                ];
                foreach ($name as $key => $value) {
                    $data['prop'][] = [
                        'name'      =>  $name[$key],
                        'power'     =>  $power[$key] ?: 0,
                        'price'     =>  $price[$key] ?: 0,
                        'limit'     =>  [
                            'day'   =>  $day[$key] ?: 0,
                            'person'   =>  $person[$key] ?: 0,
                        ],
                    ];
                }
            }
            // 保存设置
            try {
                Configure::set('hello.event.pool', $data);
            } catch (\Exception $e) {
                $this->error($e->getMessage());
                exit;
            }
            // 修改成功
            $this->success('恭喜您、操作成功！', '/admin/event/pool.html');
            exit;
        }
        // 查询对象
        $query = Db::table('pool');
        // 条件：按账号搜索
        $username = $req->param('username');
        if (!is_null($username) && strlen($username)) {
            $query->where('username', '=', $username);
        }
        // 条件：按操作类型搜索
        $action = $req->param('action');
        if (!is_null($action) && strlen($action)) {
            $query->where('action', '=', $action);
        }
        // 条件：按具体道具搜索
        $prop = $req->param('prop');
        if (!is_null($prop) && strlen($prop)) {
            $query->where('prop', '=', $prop);
        }
        // 搜索数据
        $logs = $query->where('action', '<>', 3)->order('create_at DESC')->paginate(20, false, ['query' => $req->param()]);
        $this->assign('logs', $logs);
        // 查询道具
        $props = Db::table('store')->field('id, title')->where('catalog', '=', 2)->order('sort DESC')->select();
        $this->assign('props', $props);
        // 显示页面
        $this->assign('actions', [
            1   =>  '领取收益',
            2   =>  '使用道具',
        ]);
        $this->assign('config', $config);
        return $this->fetch();
    }

    /**
     * 链上合约
     */
    public function contract(Request $req)
    {
        // 获取配置
        $contract = Configure::get('hello.contract') ?: [];
        // 代理人列表
        $agent = array_key_exists('agent', $contract) ? $contract['agent'] : [];
        // 删除代理人
        $remove = $req->param('remove');
        if (!empty($remove) && array_key_exists($remove, $agent)) {
            unset($agent[$remove]);
            // 更新配置
            Configure::set('hello.contract', [
                'agent' =>  $agent
            ]);
        }
        // 添加代理人
        if ($req->isPost()) {
            // 获取手机
            $username = $req->param('username');
            if (empty($username)) {
                $this->error('很抱歉、请填写手机号码！');
                exit;
            }
            // 获取比例
            $ratio = $req->param('ratio');
            if (empty($ratio) || $ratio < 0) {
                $this->error('很抱歉、错误的比例！');
                exit;
            }
            // 获取省市区
            $province = $req->param('province');
            $city = $req->param('city');
            $county = $req->param('county');
            $address = $county ?: $city;
            $address = $address ?: $province;
            // 保存设置
            $agent[$username] = [
                'username'      =>  $username,
                'ratio'         =>  $ratio,
                'address'       =>  $address
            ];
            // 数组排序
            uasort($agent, function($a, $b){
                if ($a['address'] == $b['address']) {
                    return 0;
                }
                return $a['address'] < $b['address'] ? -1 : 1;
            });
            // 更新配置
            Configure::set('hello.contract', [
                'agent' =>  $agent
            ]);
        }
        // 循环处理数据
        foreach ($agent as $key => $item) {
            // 查询地区
            $item['address'] = Db::table('region')->where('code', '=', $item['address'])->value('address');
            // 查询收益
            $item['income'] = Db::table('record')->where('username', '=', $item['username'])->where('business', '=', 39)->sum('now') ?: 0;
            // 保存信息
            $agent[$key] = $item;
        }
        // 显示页面
        $this->assign('agent', $agent);
        return $this->fetch();
    }

    /**
     * 链上合约 - 商店
     */
    public function contract_store(Request $req)
    {
        // 提交请求
        if ($req->isPost()) {
            // 获取动作
            $action = $req->param('action');
            // 合约对象
            $ct = new \app\index\controller\Contract();
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
                    $obj = $ct->get($id);
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
            // 每秒收益
            $profit = $req->param('profit/f') ?: 0;
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
                    'profit'    =>  $profit,
                    'content'   =>  $content,
                ];
                if (!empty($image)) {
                    $data['image'] = $image;
                }
                // 添加宝贝
                if ($action == 'create') {
                    // 创建数据
                    $ct->create($data);
                } else {
                    // 排列顺序
                    $data['sort'] = $req->param('sort/d') ?: 0;
                    // 是否可见
                    $data['visible'] = $req->param('visible/d') ?: 0;
                    /*// 代理商
                    $data['agent'] = $req->param('agent') ?: null;
                    // 归属人
                    $data['owner'] = $req->param('owner') ?: null;*/
                    // 当前价格
                    $data['now_price'] = $req->param('now_price') ?: 0;
                    // 更新数据
                    $ct->update($id, $data);
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
        $query = Db::table('contract');
        // 搜索数据
        $logs = $query->order('loop DESC, update_at DESC')->paginate(20, false, ['query' => $req->param()]);
        $this->assign('logs', $logs);
        // 显示页面
        return $this->fetch();
    }

    /**
     * 链上合约 - 记录
     */
    public function contract_log(Request $req)
    {
        // 商品列表
        $cids = Db::table('contract')->field('id, title')->order('sort DESC, loop DESC')->select();
        $this->assign('cids', $cids);
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
        $logs = $query->order('l.create_at DESC')->paginate(20, false, ['query' => $req->param()]);
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
     * 创业众筹 - 商店
     */
    public function funding(Request $req)
    {
        // 系统配置
        $config = config('hello.funding');
        // 提交请求
        if ($req->isPost()) {
            // 获取动作
            $action = $req->param('action');
            // 众筹对象
            $fd = new \app\index\controller\Funding();
            // 获取数据
            if ($action == 'get') {
                $id = $req->param('id/d');
                if (empty($id)) {
                    return json([
                        'code'      =>  501,
                        'message'   =>  '很抱歉、请提供编号！'
                    ]);
                }
                $obj = $fd->get($id);
                if (empty($obj)) {
                    return json([
                        'code'      =>  502,
                        'message'   =>  '很抱歉、该项目不存在！'
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
            // 项目名称
            $title = $req->param('title');
            if (empty($title)) {
                $this->error('很抱歉、请提供项目名称！');
                exit;
            }
            // 目标金额
            $target = $req->param('target/f');
            if (empty($target)) {
                $this->error('很抱歉、请提供目标金额！');
                exit;
            }
            // 项目分类
            $catalog = $req->param('catalog/d') ?: 1;
            // 项目类型
            $type = $req->param('type/d') ?: 1;
            // 商品详情
            $content = $req->param('content');
            // 图片地址
            $file = $req->file('image');
            $image = null;
            if ($action == 'create' && empty($file)) {
                $this->error('很抱歉、请选择项目图片');
                exit;
            } else {
                if (!empty($file)) {
                    $info = $file->validate(['ext' => 'jpg,jpeg,png'])->move(Env::get('root_path') . 'public/upload');
                    if (!$info) {
                        $this->error('很抱歉、' . $file->getError() . '！');
                        exit;
                    }
                    $image = $info->getSaveName();
                }
            }
            // 项目详情
            $content = $req->param('content');
            try {
                $data = [
                    'type'      =>  $type,
                    'catalog'   =>  $catalog,
                    'title'     =>  $title,
                    'target'    =>  $target,
                    'content'   =>  $content,
                ];
                if (!empty($image)) {
                    $data['image'] = $image;
                }
                // 项目发起人
                $owner = $req->param('owner');
                // 添加项目
                if ($action == 'create') {
                    // 到期时间
                    $data['expire_at'] = date('Y-m-d H:i:s', strtotime('+' . $config['expire'] . ' day'));
                    // 项目发起人
                    if (!empty($owner)) {
                        $data['owner'] = $owner;
                    }
                    // 创建数据
                    $fd->create($data);
                } else {
                    // 项目类型
                    $data['status'] = $req->param('status/d') ?: 1;
                    // 排列顺序
                    $data['sort'] = $req->param('sort/d') ?: 0;
                    // 是否可见
                    $data['visible'] = $req->param('visible/d') ?: 0;
                    // 项目发起人
                    $data['owner'] = $owner;
                    // 到期时间
                    $expire_at = $req->param('expire_at');
                    if (!empty($expire_at)) {
                        $data['expire_at'] = $expire_at;
                    }
                    // 更新数据
                    $fd->update($id, $data);
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
        $query = Db::table('funding');
        // 搜索数据
        $logs = $query->order('sort DESC, current DESC, people DESC, count DESC, update_at DESC')->paginate(20, false, ['query' => $req->param()]);
        $this->assign('logs', $logs);
        // 显示页面
        return $this->fetch();
    }

    /**
     * 创业众筹 - 记录
     */
    public function funding_log(Request $req)
    {
        // 项目列表
        $fids = Db::table('funding')->field('id, title')->order('status ASC, sort DESC')->select();
        $this->assign('fids', $fids);
        // 查询对象
        $query = Db::table('funding_log')->alias('l')->join('funding f', 'f.id = l.fid')
                        ->field('f.title, l.*');
        // 条件：按账号搜索
        $username = $req->param('username');
        if (!is_null($username) && strlen($username)) {
            $query->where('l.username', '=', $username);
        }
        // 条件：按具体项目搜索
        $fid = $req->param('fid');
        if (!is_null($fid) && strlen($fid)) {
            $query->where('l.fid', '=', $fid);
        }
        // 搜索数据
        $logs = $query->order('l.create_at DESC')->paginate(20, false, ['query' => $req->param()]);
        $this->assign('logs', $logs);
        // 显示页面
        return $this->fetch();
    }
    public function successfa(Request $req)
    {
        // 获取编号
        $id = $req->param('id');
        if (empty($id)) {
            $this->error('很抱歉、请提供编号！');
            exit;
        }
        // 查询订单
        $log = Db::table('funding_audit')->where('id', '=', $id)->find();
        if (empty($log)) {
            $this->error('很抱歉、该内排申请不存在！');
            exit;
        }
        // 状态不对
        if ($log['status'] != 0) {
            $this->error('很抱歉、该订单状态不正确！');
            exit;
        }
        $bool = Db::table('funding_audit')->where('id', '=', $id)->update(['status'=>1]);
        if (empty($bool)) {
            $this->error('很抱歉、操作失败请再试一次！');
            exit;
        }
        // 投资次数
        $cishu = Db::table('funding_log')->where('fid', '=', $log['fid'])->where('username', '=', $log['username'])->where('action', '=', 1)->count('id');
        // 更新项目
        $data = array_merge([
            'update_at'	=>	$this->timestamp,
        ], [
            'current'	=>	Db::raw('current+' . $log['money']),
            'people'	=>	Db::raw('people+'.($cishu ? 0 : 1)),
            'count'		=>	Db::raw('count+1'),
        ]);
        // 修改数据
        Db::table('funding')->where('id', '=', $log['fid'])->update($data);
        $fund = Db::table('funding')->where('id', '=', $log['fid'])->find();
        // 项目记录
        $daozhang = round($log['money']/$log['price'],2);
        Db::table('funding_log')->insert([
            'fid'		=>	$id,
            'type'		=>	$fund['type'],
            'currency'  =>  $fund['currency'],
            'action'	=>	1,
            'username'	=>	$log['username'],
            'money'		=>	$log['money'],
            'charge'    =>  $daozhang,
            'create_at'	=>	$this->timestamp,
            'update_at'	=>	$this->timestamp,
        ]);
        $user = (new \app\index\controller\Account())->instance($log['username']);
        (new \app\index\controller\Wallet())->change($log['username'], 108, [
            1   =>  [
                $user['wallet']['money'],
                $daozhang,
                $user['wallet']['money'] + $daozhang,
            ]
        ]);
        // 操作成功
        $this->success('恭喜您、操作成功！');
        exit;
    }
    public function refusefa(Request $req)
    {
        // 获取编号
        $id = $req->param('id');
        if (empty($id)) {
            $this->error('很抱歉、请提供编号！');
            exit;
        }
        // 查询订单
        $log = Db::table('funding_audit')->where('id', '=', $id)->find();
        if (empty($log)) {
            $this->error('很抱歉、该内排申请不存在！');
            exit;
        }
        // 状态不对
        if ($log['status'] != 0) {
            $this->error('很抱歉、该订单状态不正确！');
            exit;
        }
        $bool = Db::table('funding_audit')->where('id', '=', $id)->update(['status'=>2]);
        if (empty($bool)) {
            $this->error('很抱歉、操作失败请再试一次！');
            exit;
        }
        // 操作成功
        $this->success('申请拒绝完毕！');
        exit;
    }
    public function funding_audit(Request $req)
    {
        // 查询对象
        $query = Db::table('funding_audit')->alias('l')->join('funding f', 'f.id = l.fid')
            ->field('f.title, l.*');
        // 条件：按账号搜索
        $username = $req->param('username');
        if (!is_null($username) && strlen($username)) {
            $query->where('l.username', '=', $username);
        }
        // 条件：按具体项目搜索
        $fid = $req->param('fid');
        if (!is_null($fid) && strlen($fid)) {
            $query->where('l.fid', '=', $fid);
        }
        // 搜索数据
        $logs = $query->order('l.create_at DESC')->paginate(20, false, ['query' => $req->param()]);
        $this->assign('logs', $logs);
        // 显示页面
        return $this->fetch();
    }

    /**
     * 票券列表
     */
    public function ticket(Request $req)
    {
        // 操作类型
        $action = $req->param('action');
        if ($action == 'create') {
            try {
                // 生成类型
                $type = $req->param('type', 1);
                // 生成数量
                $number = $req->param('number/d', 1);
                // 创建数据
                $count = (new \app\index\controller\Ticket())->create($type, $number);
            } catch (\Exception $e) {
                $this->error($e->getMessage());
                exit;
            }
            $this->success('恭喜您、成功生成' . $count . '个票券！');
            exit;
        } else if ($action == 'remove') {
            try {
                // 删除数据
                (new \app\index\controller\Ticket())->delete($req->param('token'));
            } catch (\Exception $e) {
                $this->error($e->getMessage());
                exit;
            }
            $this->redirect('/admin/event/ticket.html');
            exit;
        }
        // 票券类型
        $types = Db::table('ticket')->field('type')->group('type')->select();
        $this->assign('types', $types ?: []);
        // 查询对象
        $query = Db::table('ticket');
        // 条件：按账号搜索
        $username = $req->param('username');
        if (!is_null($username) && strlen($username)) {
            $query->where('username', '=', $username);
        }
        // 条件：按类型搜索
        $type = $req->param('type');
        if (!is_null($type) && strlen($type)) {
            $query->where('type', '=', $type);
        }
        // 条件：按号码搜索
        $token = $req->param('token');
        if (!is_null($token) && strlen($token)) {
            $query->where('token', 'like', "%$token%");
        }
        // 查询数据
        $logs = $query->order('create_at DESC')->paginate(20, false, ['query' => $req->param()]);
        $this->assign('logs', $logs);
        // 显示页面
        return $this->fetch();
    }
}
