<?php

namespace app\index\controller;

use think\Db;
use think\Request;

class Transfer extends Base
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
        $bool = Db::table('uuid')->insert(['id' => $mid, 'type' => 4]);
        if (empty($bool)) {
            throw new \think\Exception("很抱歉、订单编号生成失败！");
        }
        return $mid;
    }

    // +----------------------------------------------------------------------
    // | 对外接口
    // +----------------------------------------------------------------------

    /**
     * 转账首页
     */
    public function index()
    {
        // 显示页面
        $this->assign('charge', json_encode(config('hello.transfer.charge') ?: 0));
        return $this->fetch();
    }

    /**
     * 提交转账
     */
    public function post(Request $req)
    {
        try {
            // 当前用户
            $username = session('user.account.username');
            // 开启事务
            Db::startTrans();
            // 对方账号
            $target = $req->param('target/s');
			
            if (empty($target)) {
                return json([
                    'code'      =>  501,
                    'message'   =>  '很抱歉、请输入对方账号！'
                ]);
            }
            if ($username == $target) {
                return json([
                    'code'      =>  502,
                    'message'   =>  '很抱歉、不能转账给自己！'
                ]);
            }
            // 货币数量
            $number = $req->param('number/f');
            if (empty($number) || $number < 10) {
                return json([
                    'code'      =>  502,
                    'message'   =>  '很抱歉、最低转账10个币！'
                ]);
            }          	
            // 安全密码
            $safeword = $req->param('safeword');
            if (empty($safeword)) {
                return json([
                    'code'      =>  503,
                    'message'   =>  '很抱歉、请输入安全密码！'
                ]);
            }
            // 计算手续费
            $charge = config('hello.transfer.charge') ?: 0;
            if (is_array($charge)) {
                // 先计算比例
                $charge_number = money($number * $charge['percent']);
                // 如果低于按最低收
                if (array_key_exists('min', $charge) && $charge_number < $charge['min']) {
                    $charge_number = $charge['min'];
                }
                // 如果高于按最高收
                if (array_key_exists('max', $charge) && $charge_number > $charge['max']) {
                    $charge_number = $charge['max'];
                }
                $charge = $charge_number;
            } else {
                // 直接计算
                $charge = money($number * $charge);
            }
            // 最后总支出
            $total = $charge + $number;
            // 账户对象
            $ac = new Account();
            // 对方的账号
            $userTarget = $ac->instance($target);
            if (empty($userTarget)) {
                return json([
                    'code'      =>  504,
                    'message'   =>  '很抱歉、对方的账号不存在！'
                ]);
            }
            if (empty($userTarget['account']['status'])) {
                return json([
                    'code'      =>  504,
                    'message'   =>  '很抱歉、对方的账号已被冻结！'
                ]);
            }
            if ($userTarget['account']['authen'] != 1) {
                return json([
                    'code'      =>  505,
                    'message'   =>  '很抱歉、请对方先完成实名认证！'
                ]);
            }
            // 自己的账号
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
            // 判断余额
            if ($user['wallet']['money'] < $total) {
                return json([
                    'code'      =>  508,
                    'message'   =>  '很抱歉、您的资金不足！'
                ]);
            }
            // 转账记录
            $bool = Db::table('transfer')->insert([
                'tid'       =>  $this->generateTID(),
                'owner'     =>  $username,
                'target'    =>  $target,
                'number'    =>  $number,
                'charge'    =>  $charge,
                'create_at' =>  $this->timestamp,
                'update_at' =>  $this->timestamp,
            ]);
            if (empty($bool)) {
                return json([
                    'code'      =>  509,
                    'message'   =>  '很抱歉、转账记录保存失败！'
                ]);
            }
            // 资金对象
            $wl = new Wallet();
            // 扣自己的钱
            $wl->change($username, 13, [
                1   =>  [
                    $user['wallet']['money'],
                    -($total),
                    $user['wallet']['money'] - $total,
                ]
            ], [
                'number'    =>  $number,
            ]);
            // 给对方加钱
            $wl->change($target, 14, [
                1   =>  [
                    $userTarget['wallet']['money'],
                    $number,
                    $userTarget['wallet']['money'] + $number,
                ]
            ]);
            // 操作日志 62
            $this->log(62);
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
        $query = Db::table('transfer')->field('tid AS id, owner, target, number, charge, update_at AS date');
        // 按类型分
        if ($req->param('type') == 'in') {
            // 查转入
            $query->where('target', '=', $username);
        } else {
            // 查转出
            $query->where('owner', '=', $username);
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
