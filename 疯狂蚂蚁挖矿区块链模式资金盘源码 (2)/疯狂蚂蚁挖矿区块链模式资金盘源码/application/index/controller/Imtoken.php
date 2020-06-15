<?php

namespace app\index\controller;

use think\Db;
use think\Request;
use think\facade\Env;

class Imtoken extends Base
{

    // +----------------------------------------------------------------------
    // | 私有函数
    // +----------------------------------------------------------------------

    /**
     * 生成TID
     */
    public function generateTID()
    {
        $prefix = chr(mt_rand(65, 90));
        do {
            $number = mt_rand(100000000, 999999999);
            $mid = $prefix . $number;
        } while (!empty(Db::table('uuid')->where('id', '=', $mid)->find()));
        $bool = Db::table('uuid')->insert(['id' => $mid, 'type' => 5]);
        if (empty($bool)) {
            throw new \think\Exception("很抱歉、订单编号生成失败！");
        }
        return $mid;
    }

    // +----------------------------------------------------------------------
    // | 内部方法
    // +----------------------------------------------------------------------

    /**
     * 同意
     */
    public function agree($tid)
    {
        // 查询订单
        $order = Db::table('imtoken')->where('tid', '=', $tid)->find();
        if (empty($order)) {
            throw new \think\Exception("很抱歉、该订单不存在！");
        }
        if ($order['status'] != 2) {
            throw new \think\Exception("很抱歉、错误的订单状态！");
        }
        // 用户账号
        $username = $order['username'];
        $user = (new Account())->instance($username);
        if (empty($user)) {
            throw new \think\Exception("很抱歉、用户不存在！");
        }
        if (empty($user['account']['status'])) {
            throw new \think\Exception("很抱歉、用户已被冻结！");
        }
        // 资金对象
        $wl = new Wallet();
        // 如果是充值订单
        if ($order['type'] == 1) {
            // 给用户加钱
            $wl->change($username, 16, [
                1   =>  [
                    $user['wallet']['money'],
                    $order['number'],
                    $user['wallet']['money'] + $order['number'],
                ]
            ], [
                'number'    =>  $order['number'],
            ]);
        } else {
            // 扣除用户的冻结资金
            $total = $order['number'] + $order['charge'];
            $wl->change($username, 15, [
                2   =>  [
                    $user['wallet']['deposit'],
                    -($total),
                    $user['wallet']['deposit'] - $total,
                ]
            ]);
        }
        // 更改状态
        $bool = Db::table('imtoken')->where('tid', '=', $tid)->update([
            'status'    =>  1,
            'update_at' =>  $this->timestamp
        ]);
        if (empty($bool)) {
            throw new \think\Exception("很抱歉、更改订单状态失败！");
        }
    }

    /**
     * 拒绝
     */
    public function refuse($tid)
    {
        // 查询订单
        $order = Db::table('imtoken')->where('tid', '=', $tid)->find();
        if (empty($order)) {
            throw new \think\Exception("很抱歉、该订单不存在！");
        }
        if ($order['status'] != 2) {
            throw new \think\Exception("很抱歉、错误的订单状态！");
        }
        // 用户账号
        $username = $order['username'];
        $user = (new Account())->instance($username);
        if (empty($user)) {
            throw new \think\Exception("很抱歉、用户不存在！");
        }
        if (empty($user['account']['status'])) {
            throw new \think\Exception("很抱歉、用户已被冻结！");
        }
        // 资金对象
        $wl = new Wallet();
        // 如果是提现订单
        if ($order['type'] == 2) {
            // 调整资金
            $total = $order['number'] + $order['charge'];
            $wl->change($username, 17, [
                1   =>  [
                    $user['wallet']['money'],
                    $total,
                    $user['wallet']['money'] + $total,
                ],
                2   =>  [
                    $user['wallet']['deposit'],
                    -($total),
                    $user['wallet']['deposit'] - $total,
                ],
            ]);
        }
        // 更改状态
        $bool = Db::table('imtoken')->where('tid', '=', $tid)->update([
            'status'    =>  0,
            'update_at' =>  $this->timestamp
        ]);
        if (empty($bool)) {
            throw new \think\Exception("很抱歉、更改订单状态失败！");
        }
    }

    // +----------------------------------------------------------------------
    // | 对外接口
    // +----------------------------------------------------------------------

    /**
     * imtoken首页
     */
    public function index()
    {
        // 获取配置
        $config = Db::table('config')->where('token', '=', 'imtoken')->value('value');
        if (empty($config)) {
            $config = [
                'enable'        =>  false,
                'charge'        =>  0,
                'code'          =>  '',
                'qrcode'        =>  '',
            ];
        } else {
            $config = json_decode($config, true);
        }
        // 暂未开启
        if (empty($config['enable'])) {
            $this->error('很抱歉、系统暂未开启该服务！');
            exit;
        }
        // 显示页面
        $this->assign('config', $config);
        return $this->fetch();
    }

    /**
     * 提交申请
     */
    public function post(Request $req)
    {
        try {
            // 当前用户
            $username = session('user.account.username');
            // 开启事务
            Db::startTrans();
            // 获取配置
            $config = Db::table('config')->where('token', '=', 'imtoken')->value('value');
            if (empty($config)) {
                $config = [
                    'enable'        =>  false,
                    'charge'        =>  0,
                    'code'          =>  '',
                    'qrcode'        =>  '',
                ];
            } else {
                $config = json_decode($config, true);
            }
            // 暂未开启
            if (empty($config['enable'])) {
                return json([
                    'code'      =>  500,
                    'message'   =>  '很抱歉、系统尚未开启该服务！'
                ]);
            }
            // 申请类型
            $type = $req->param('type');
            if (!in_array($type, ['recharge', 'withdraw'])) {
                return json([
                    'code'      =>  501,
                    'message'   =>  '很抱歉、错误的请求类型！'
                ]);
            }
            // 提现：判断地址和二维码
            if ($type == 'withdraw') {
                // 钱包地址
                $imtoken_code = $req->param('imtoken_code');
                if (empty($imtoken_code)) {
                    return json([
                        'code'      =>  502,
                        'message'   =>  '很抱歉、请填写您的钱包地址！'
                    ]);
                }
                // 钱包二维码
                $file = $req->file('imtoken_qrcode');
                if (!empty($file)) {
                    $info = $file->validate(['ext' => 'jpg,jpeg,png'])->move(Env::get('root_path') . 'public/upload');
                    if (!$info) {
                        return json([
                            'code'      =>  503,
                            'message'   =>  $file->getError(),
                        ]);
                    } else {
                        $imtoken_qrcode = $info->getSaveName();
                    }
                } else {
                    $imtoken_qrcode = null;
                }
            }
            // 货币数量
            $number = $req->param('number/f');
            if (empty($number) || $number <= 0) {
                return json([
                    'code'      =>  504,
                    'message'   =>  '很抱歉、请输入货币数量！'
                ]);
            }
            // 支付凭证
            if ($type == 'recharge') {
                $file = $req->file('certificate');
                if (!empty($file)) {
                    $info = $file->validate(['ext' => 'jpg,jpeg,png'])->move(Env::get('root_path') . 'public/upload');
                    if (!$info) {
                        return json([
                            'code'      =>  513,
                            'message'   =>  $file->getError(),
                        ]);
                    } else {
                        $certificate = $info->getSaveName();
                    }
                }
            }
            // 安全密码
            $safeword = $req->param('safeword');
            if (empty($safeword)) {
                return json([
                    'code'      =>  505,
                    'message'   =>  '很抱歉、请输入安全密码！'
                ]);
            }
            // 计算手续费
            $charge = $config['charge'];
            if ($type == 'recharge') {
                $charge = 0;
            } else {
                if ($charge <= 0) {
                    $charge = 0;
                } else if ($charge >= 1) {
                    $charge = $charge;
                } else {
                    $charge = money($number * $charge);
                }
            }
            // 最后总支出
            $total = $charge + $number;
            // 账户对象
            $ac = new Account();
            // 我的账户
            $user = $ac->instance($username, null, $safeword, true);
            if (empty($user)) {
                return json([
                    'code'      =>  506,
                    'message'   =>  '很抱歉、安全密码不正确！'
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
                    'message'   =>  '很抱歉、请您先完成实名认证！'
                ]);
            }

            // 申请记录
            if ($type == 'recharge') {
                // 充值订单
                $bool = Db::table('imtoken')->insert([
                    'tid'       =>  $this->generateTID(),
                    'type'      =>  1,
                    'status'    =>  2,
                    'username'  =>  $username,
                    'number'    =>  $number,
                    'charge'    =>  $charge,
                    'address'   =>  null,
                    'qrcode'    =>  null,
                    'certificate'    =>  $certificate,
                    'create_at' =>  $this->timestamp,
                    'update_at' =>  $this->timestamp,
                ]);
            } else {
                // 判断余额
                if ($user['wallet']['money'] < $total) {
                    return json([
                        'code'      =>  508,
                        'message'   =>  '很抱歉、您的资金不足！'
                    ]);
                }
                // 提现订单
                $bool = Db::table('imtoken')->insert([
                    'tid'       =>  $this->generateTID(),
                    'type'      =>  2,
                    'status'    =>  2,
                    'username'  =>  $username,
                    'number'    =>  $number,
                    'charge'    =>  $charge,
                    'address'   =>  $imtoken_code,
                    'qrcode'    =>  $imtoken_qrcode,
                    'certificate'    =>  null,
                    'create_at' =>  $this->timestamp,
                    'update_at' =>  $this->timestamp,
                ]);
            }
            if (empty($bool)) {
                return json([
                    'code'      =>  509,
                    'message'   =>  '很抱歉、服务器繁忙请稍后再试！'
                ]);
            }
            // 如果是提现的话，需要扣钱
            if ($type == 'withdraw') {
                // 资金对象
                $wl = new Wallet();
                // 扣自己的资金
                $wl->change($username, 16, [
                    1   =>  [
                        $user['wallet']['money'],
                        -($total),
                        $user['wallet']['money'] - $total,
                    ],
                    2   =>  [
                        $user['wallet']['deposit'],
                        ($total),
                        $user['wallet']['deposit'] + $total,
                    ],
                ], [
                    'number'    =>  $number,
                ]);
                // 操作日志
                $this->log(65);
            } else {
                // 操作日志
                $this->log(64);
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

    /**
     * 列表记录
     */
    public function search(Request $req)
    {
        // 自己的账号
        $username = session('user.account.username');
        // 分页数据
        $page = $req->param('page/d', 1);
        $size = $req->param('size/d', 20);
        $offset = $page - 1 < 0 ? 0 : ($page - 1) * $size;
        // 查询对象
        $query = Db::table('imtoken')->field('tid AS id, status, number, charge, update_at AS date')->where('username', '=', $username);
        // 按类型分
        if ($req->param('type') == 'recharge') {
            // 查充值
            $query->where('type', '=', 1);
        } else {
            // 查提现
            $query->where('type', '=', 2);
        }
        // 查询数据
        $data = $query->limit($offset, $size)->order('update_at DESC')->select();
        // 返回数据
        return json([
            'code'      =>  200,
            'message'   =>  '恭喜您、操作成功！',
            'data'      =>  $data
        ]);
    }
}
