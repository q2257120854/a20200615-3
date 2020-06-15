<?php

namespace app\admin\controller;

use think\Db;
use think\Request;
use think\facade\Env;

class Wallet extends Base
{

    /**
     * 用户钱包
     */
    public function index(Request $req)
    {
        // 查询对象
        $query = Db::table('wallet')->alias('w')
                    ->join('profile p', 'p.username = w.username')
                    ->field('p.avatar, p.idcard, p.nickname, w.*');
        // 条件：按账号搜索
        $username = $req->param('username');
        if (!is_null($username) && strlen($username)) {
            $query->where('w.username', 'like', "%$username%");
        }
        // 条件：按数值搜索
        $numberField = $req->param('numberField');
        $numberOperator = $req->param('numberOperator');
        $numberValue = $req->param('numberValue');
        if (!is_null($numberField) && !is_null($numberOperator) && !is_null($numberValue) && strlen($numberValue)) {
            if ($numberOperator == 1) {
                $query->where('w.'.$numberField, '>', $numberValue);
            } else if ($numberOperator == 2) {
                $query->where('w.'.$numberField, '=', $numberValue);
            } else if ($numberOperator == 3) {
                $query->where('w.'.$numberField, '<', $numberValue);
            }
        }
        // 排序
        $sortField = $req->param('sortField');
        $sortType = $req->param('sortType');
        if (!is_null($sortField)) {
            $query->order('w.' . $sortField . ' ' . $sortType);
        } else {
            $query->order('w.money DESC');
        }
        // 搜索数据
        $users = $query->paginate(20, false, ['query' => $req->param()]);
        $this->assign('users', $users);
        $this->assign('fields', [
            'money'         =>  '可用' . config('hello.unit'),
            'deposit'       =>  '冻结' . config('hello.unit'),
            'score'         =>  '可用' . config('hello.score.unit'),
            'score_deposit' =>  '冻结' . config('hello.score.unit'),
            'spend'         =>  '商城消费额',
            'profit'        =>  '蚁后收益',
            'team_profit'   =>  '团队蚁后收益',
            'bonus'         =>  '全球分红',
            'trade'         =>  '交易分红',
            'sell'          =>  '卖出金额',
            'buy'           =>  '买入金额',
        ]);
        return $this->fetch();
    }

    /**
     * 转账记录
     */
    public function transfer(Request $req)
    {
        // 查询对象
        $query = Db::table('transfer')->order('update_at DESC');
        // 按账号搜索
        $username = $req->param('username');
        if (!empty($username)) {
            $query->where('owner|target', 'like', "%$username%");
        }
        // 查询数据
        $data = $query->paginate(20, false, ['query' => $req->param()]);
        $this->assign('logs', $data);
        // 显示页面
        return $this->fetch();
    }

    /**
     * 流水记录
     */
    public function record(Request $req)
    {
        // 查询对象
        $query = Db::table('record')->alias('r')
                        ->join('profile p', 'p.username = r.username')
                        ->field('r.username, p.avatar, p.nickname, p.idcard, r.*');
        // 条件：按货币查询
        $currency = $req->param('currency/d');
        if (!is_null($currency) && $currency != -1) {
            $query->where('currency', '=', $currency);
        }
        // 条件：按业务查询
        $business = $req->param('business/d');
        if (!is_null($business) && $business != -1) {
            $query->where('business', '=', $business);
        }
        // 条件：按账号搜索
        $username = $req->param('username');
        if (!is_null($username) && strlen($username)) {
            $query->where('r.username', 'like', "%$username%");
        }
        // 条件：按数值搜索
        $numberField = $req->param('numberField');
        $numberOperator = $req->param('numberOperator');
        $numberValue = $req->param('numberValue');
        if (!is_null($numberField) && !is_null($numberOperator) && !is_null($numberValue) && strlen($numberValue)) {
            if ($numberOperator == 1) {
                $query->where('r.'.$numberField, '>', $numberValue);
            } else if ($numberOperator == 2) {
                $query->where('r.'.$numberField, '=', $numberValue);
            } else if ($numberOperator == 3) {
                $query->where('r.'.$numberField, '<', $numberValue);
            }
        }
        // 排序
        $sortField = $req->param('sortField');
        $sortType = $req->param('sortType');
        if (!is_null($sortField)) {
            $query->order('r.' . $sortField . ' ' . $sortType);
        } else {
            $query->order('r.create_at DESC');
        }
        // 查询数据
    	$records = $query->paginate(20, false, ['query' => $req->param()]);
        $this->assign('records', $records);
        $this->assign('fields', [
            'create_at' =>  '具体时间',
            'before'    =>  '之前金额',
            'now'       =>  '操作金额',
            'after'     =>  '之后金额',
        ]);
        return $this->fetch();
    }

    /**
     * 赠送资金
     */
    public function give(Request $req)
    {
        // 提交
        if ($req->isPost()) {
            // 具体的业务
            $business = $req->param('business/d');
            if (empty($business)) {
                $this->error('很抱歉、请提供赠送名义！');
                exit;
            }
            // 具体的货币
            $cid = $req->param('currency/d');
            if (empty($cid)) {
                $this->error('很抱歉、请提供货币编号！');
                exit;
            }
            $currency = config('hello.currencys.' . $cid);
            if (empty($currency)) {
                $this->error('很抱歉、错误的货币编号！');
                exit;
            }
            $field = $currency['field'];
            // 具体的数量
            $number = $req->param('number/f');
            if (empty($number)) {
                $this->error('很抱歉、请提供货币数量！');
                exit;
            }
            // 用户账号
            $users = $req->param('users');
            if (empty($users)) {
                $this->error('很抱歉、请提供用户账号！');
                exit;
            }
            // 账号转换
            $userList = explode("\n", $users);
            if (empty($userList)) {
                $this->error('很抱歉、请提供用户账号！');
                exit;
            }
            $username = null;
            try {
                // 开启事务
                Db::startTrans();
                // 赠送资金
                foreach ($userList as $key => $value) {
                    $username = trim($value);
                    if (!empty($username)) {
                        // 查询账号
                        $user = (new \app\index\controller\Account())->instance($username);
                        if (empty($user)) {
                            $this->error('很抱歉、用户【' . $username . '】不存在！');
                            exit;
                        }
                        // 流水记录
                        $record = [];
                        // 更改余额
                        $record[$cid] = [$user['wallet'][$field], $number, $number + $user['wallet'][$field]];
                        // 更新钱包
                        (new \app\index\controller\Wallet())->change($username, $business, $record);
                        // 日志记录
                        $this->log(11, $username, '原' . $currency['name'] . '：' . $user['wallet'][$field] . '，现' . $currency['name'] . '：' . ($number + $user['wallet'][$field]));
                    }
                }
                // 提交事务
                Db::commit();
            } catch (\Exception $e) {
                Db::rollback();
                if (!is_null($username)) {
                    $this->error('很抱歉、请检查【' . $username . '】是否正常！');
                } else {
                    $this->error($e->getMessage());
                }
                exit;
            }
            // 操作成功
            $this->success('恭喜您、操作成功！');
            exit;
        }
        // 获取业务
        $businessArray = config('hello.businesses');
        // 获取货币
        $currencyArray = config('hello.currencys');
        // 处理业务
        $businesses = [];
        foreach ($currencyArray as $key => $item) {
            $businesses[$key] = [];
            foreach ($businessArray as $_key => $_item) {
                if (in_array($_key, $item['businesses'])) {
                    $businesses[$key][$_key] = $_item;
                }
            }
        }
        $this->assign('businesses', json_encode($businesses));
        // 显示页面
        return $this->fetch();
    }

    /**
     * imToken
     */
    public function imtoken(Request $req)
    {
        // 读取配置
        $config = Db::table('config')->where('token', '=', 'imtoken')->value('value');
        $exists = true;
        if (empty($config)) {
            $exists = false;
            $config = [
                'enable'        =>  0,
                'charge'        =>  0,
                'code'          =>  '',
                'qrcode'        =>  '',
            ];
        } else {
            $config = json_decode($config, true);
        }
        // 更新配置
        if ($req->isPost()) {
            // 是否开启
            $config['enable'] = $req->param('enable/d');
            // 手续费
            $config['charge'] = $req->param('charge/f');
            // 钱包地址
            $config['code'] = $req->param('code');
            // 二维码
            $file = $req->file('qrcode');
            if (!empty($file)) {
                $info = $file->validate(['ext' => 'jpg,jpeg,png'])->move(Env::get('root_path') . 'public/upload');
                if (!$info) {
                    $this->error($file->getError());
                    exit;
                } else {
                    $config['qrcode'] = $info->getSaveName();
                }
            }
            // 保存信息
            if ($exists) {
                $data = [
                    'value'     =>  json_encode($config),
                    'update_at' =>  $this->timestamp,
                ];
                $bool = Db::table('config')->where('token', '=', 'imtoken')->update($data);
            } else {
                $data = [
                    'type'      =>  5,
                    'parent'    =>  0,
                    'token'     =>  'imtoken',
                    'name'      =>  'imToken',
                    'value'     =>  json_encode($config),
                    'create_at' =>  $this->timestamp,
                    'update_at' =>  $this->timestamp,
                ];
                $bool = Db::table('config')->insert($data);
            }
            // 判断结果
            if (empty($bool)) {
                $this->error('很抱歉、更新配置失败请重试！');
                exit;
            }
        }
        // 查询对象
        $query = Db::table('imtoken');
        // 条件：按账号查询
        $username = $req->param('username');
        if (!is_null($username) && strlen($username)) {
            $query->where('username', 'like', "%$username%");
        }
        // 条件：按类型搜索
        $type = $req->param('type');
        if (!is_null($type) && $type != -1) {
            $query->where('type', '=', $type);
        }
        // 条件：按状态搜索
        $status = $req->param('status');
        if (!is_null($status) && $status != -1) {
            $query->where('status', '=', $status);
        }
        // 查询数据
        $logs = $query->order('update_at DESC')->paginate(20, false, ['query' => $req->param()]);
        $this->assign('logs', $logs);
        // 显示页面
        $this->assign('config', $config);
        $this->assign('types', [
            1   =>  '充值',
            2   =>  '提现',
        ]);
        $this->assign('statuses', [
            0   =>  '失败',
            1   =>  '成功',
            2   =>  '待审核',
        ]);
        return $this->fetch();
    }

    /**
     * imToken 审核通过
     */
    public function imtoken_ok(Request $req)
    {
        // 获取编号
        $id = $req->param('id');
        if (empty($id)) {
            $this->error('很抱歉、请提供编号！');
            exit;
        }
        try {
            // 开启事务
            Db::startTrans();
            // im对象
            $im = new \app\index\controller\Imtoken();
            $im->agree($id);
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
     * imToken 审核拒绝
     */
    public function imtoken_no(Request $req)
    {
        // 获取编号
        $id = $req->param('id');
        if (empty($id)) {
            $this->error('很抱歉、请提供编号！');
            exit;
        }
        try {
            // 开启事务
            Db::startTrans();
            // im对象
            $im = new \app\index\controller\Imtoken();
            $im->refuse($id);
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
