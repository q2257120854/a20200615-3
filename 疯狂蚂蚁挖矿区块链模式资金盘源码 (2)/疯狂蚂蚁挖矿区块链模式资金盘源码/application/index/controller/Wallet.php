<?php

namespace app\index\controller;

use think\Db;
use think\Request;

class Wallet extends Base
{

    // +----------------------------------------------------------------------
    // | 私有函数
    // +----------------------------------------------------------------------

    /**
     * 生成RID
     */
    public function generateRID($multiple = 0)
    {
        $prefix = chr(mt_rand(65, 90));
        $prefix .= date('ymd');
        if ($multiple > 0) {
             do {
                $rids = [];
                for ($i = 0;$i < $multiple;$i++) {
                    $number = mt_rand(10000000, 99999999);
                    $rid = $prefix . $number;
                    $rids[] = $rid;
                }
            } while (!empty(Db::table('uuid')->where('id', 'in', $rids)->find()));
            $data = [];
            foreach ($rids as $key => $value) {
                $data[] = [
                    'id'    =>  $value,
                    'type'  =>  8,
                ];
            }
            $bool = Db::table('uuid')->insertAll($data);
            if (empty($bool)) {
                throw new \think\Exception("很抱歉、流水编号生成失败！");
            }
            return $rids;
        } else {
            do {
                $number = mt_rand(10000000, 99999999);
                $rid = $prefix . $number;
            } while (!empty(Db::table('uuid')->where('id', '=', $rid)->find()));
            $bool = Db::table('uuid')->insert(['id' => $rid, 'type' => 8]);
            if (empty($bool)) {
                throw new \think\Exception("很抱歉、流水编号生成失败！");
            }
            return $rid;
        }
    }

    // +----------------------------------------------------------------------
    // | 内部方法
    // +----------------------------------------------------------------------

    /**
     * 资金调整
     * @param  $data  [ field => [before, now, after] ]
     * @param  $other 其他选项
     */
    public function change($username, $business, $data, $other = [])
    {
        // 货币配置
        $currencys = config('hello.currencys');
        // 流水编号
        $rid = $this->generateRID();
        $rows = [];
        $acData = [];
        // 循环数据
        foreach ($data as $cid => $item) {
            // 数据不对
            if (count($item) != 3) {
                throw new \think\Exception("很抱歉、资金流水数据错误！");
            }
            // 保存数据
            $rows[] = [
                'rid'       =>  $rid,
                'username'  =>  $username,
                'currency'  =>  $cid,
                'business'  =>  $business,
                'before'    =>  $item[0],
                'now'       =>  $item[1],
                'after'     =>  $item[2],
                'create_at' =>  $this->timestamp,
            ];
            // 货币不存在
            if (!array_key_exists($cid, $currencys)) {
                throw new \think\Exception("很抱歉、指定更新的货币不存在！ -" . $cid);
            }
            // 得到字段
            $field = $currencys[$cid]['field'];
            // 保存金额
            $acData[$field] = $item[1];
        }
		
        // 添加流水
        $bool = Db::table('record')->insertAll($rows);
        if (empty($bool)) {
            throw new \think\Exception("很抱歉、资金流水更新失败！");
        }
        // 更新金额
        $query = Db::table('wallet')->where('username', '=', $username);
        foreach ($acData as $key => $value) {
            if ($value >= 0) {
                $query->inc($key, $value);
            } else {
                $query->dec($key, -$value);
            }
        }
        // 业务金额
        if ($business == 20 || $business == 22) {
            // 商城购物
            if (array_key_exists('money', $acData)) {
                $query->inc('spend', -$acData['money']);
            }
        } else if ($business == 21) {
            // 蚁后收益
            if (array_key_exists('money', $acData)) {
                $query->inc('profit', $acData['money']);
            }
        } else if ($business == 30) {
            // 团队蚁后收益
            if (array_key_exists('money', $acData)) {
                $query->inc('team_profit', $acData['money']);
            }
        } else if ($business == 31) {
            // 团队交易分红
            if (array_key_exists('money', $acData)) {
                $query->inc('trade', $acData['money']);
            }
        } else if ($business == 32) {
            // 全球交易分红
            if (array_key_exists('money', $acData)) {
                $query->inc('bonus', $acData['money']);
            }
        } else if ($business == 10) {
            // 交易买入
            if (array_key_exists('money', $acData)) {
                $query->inc('buy', $acData['money']);
            }
        } else if ($business == 11 && array_key_exists('number', $other)) {
            // 交易卖出，仅在交易成功时，卖方冻结金额扣除的时候
            $query->inc('sell', $other['number']);
        } else if ($business == 13 && array_key_exists('number', $other)) {
            // 转账转出
            $query->inc('ts_out', $other['number']);
        } else if ($business == 14 && array_key_exists('money', $acData)) {
            // 转账转入
            $query->inc('ts_in', $acData['money']);
        }
        // 更新钱包
        $bool = $query->update(['update_at' => $this->timestamp]);
        if (empty($bool)) {
            throw new \think\Exception("很抱歉、钱包资金更新失败！");
        }
    }

    /**
     * 获取一批人的资金
     */
    public function pull($users)
    {
        $result = Db::table('wallet')->field('username, money, deposit')->where('username', 'in', $users)->select();
        $data = [];
        foreach ($result as $key => $item) {
            $data[$item['username']] = $item;
        }
        return $data;
    }

    /**
     * 批量调整 - 针对可用资金
     * @param  $data
     *         [
     *              [
     *                  'username'  =>  '',
     *                  'business'  =>  0,
     *                  'money'     =>  0,
     *              ]
     *         ]
     */
    public function batch($data)
    {
        // 用户列表
        $users = [];
        // 修改语句
        $update = 'UPDATE `wallet` SET `money` = CASE `username` ';
        // 循环数据
        foreach ($data as $key => $item) {
            // 当前金额
            $money = $item['money'];
            // 保存用户
            if (!in_array($item['username'], $users)) {
                $users[] = $item['username'];
            }
            // 修改语句
            $update .= " WHEN '" . $item['username'] . "' THEN `money` + $money ";
        }
        // 查询这批人当前的资金
        $userWallet = $this->pull($users);
        // 当前时间
        $date = $this->timestamp;
        // 修改语句
        $update .= " ELSE `money` END, `update_at` = CASE WHEN `username` IN('" . implode("', '", $users) . "') THEN '$date' ELSE `update_at` END;";
        // 执行修改
        $bool = Db::execute($update);
        if (empty($bool)) {
            throw new \think\Exception("很抱歉、钱包资金更新失败！");
        }
        // 批量获取编号
        $ids = $this->generateRID(count($data));
        // 要添加的数据
        $insertData = [];
        foreach ($data as $key => $item) {
            $before = 0;
            if (!array_key_exists($item['username'], $userWallet)) {
                throw new \think\Exception("很抱歉、找不到用户的钱包！");
            }
            $before = $userWallet[$item['username']]['money'];
            $insertData[] = [
                'rid'       =>  array_shift($ids),
                'username'  =>  $item['username'],
                'currency'  =>  1,
                'business'  =>  $item['business'],
                'before'    =>  $before,
                'now'       =>  $item['money'],
                'after'     =>  $before + $item['money'],
                'create_at' =>  $date,
            ];
        }
        // 执行添加
        $bool = Db::table('record')->insertAll($insertData);
        if (empty($bool) || $bool != count($insertData)) {
            throw new \think\Exception("很抱歉、资金流水更新失败！");
        }
    }

    /**
     * 批量调整 - 针对冻结资金
     * @param  $data
     *         [
     *              [
     *                  'username'  =>  '',
     *                  'business'  =>  0,
     *                  'money'     =>  0,
     *              ]
     *         ]
     */
    public function batch_deposit($data)
    {
        // 用户列表
        $users = [];
        // 修改语句
        $update = 'UPDATE `wallet` SET `deposit` = CASE `username` ';
        // 循环数据
        foreach ($data as $key => $item) {
            // 当前金额
            $deposit = $item['deposit'];
            // 保存用户
            if (!in_array($item['username'], $users)) {
                $users[] = $item['username'];
            }
            // 修改语句
            $update .= " WHEN '" . $item['username'] . "' THEN `deposit` + $deposit ";
        }
        // 查询这批人当前的资金
        $userWallet = $this->pull($users);
        // 当前时间
        $date = $this->timestamp;
        // 修改语句
        $update .= " ELSE `deposit` END, `update_at` = CASE WHEN `username` IN('" . implode("', '", $users) . "') THEN '$date' ELSE `update_at` END;";
        // 执行修改
        $bool = Db::execute($update);
        if (empty($bool)) {
            throw new \think\Exception("很抱歉、钱包资金更新失败！");
        }
        // 批量获取编号
        $ids = $this->generateRID(count($data));
        // 要添加的数据
        $insertData = [];
        foreach ($data as $key => $item) {
            $before = 0;
            if (!array_key_exists($item['username'], $userWallet)) {
                throw new \think\Exception("很抱歉、找不到用户的钱包！");
            }
            $before = $userWallet[$item['username']]['deposit'];
            $insertData[] = [
                'rid'       =>  array_shift($ids),
                'username'  =>  $item['username'],
                'currency'  =>  2,
                'business'  =>  $item['business'],
                'before'    =>  $before,
                'now'       =>  $item['deposit'],
                'after'     =>  $before + $item['deposit'],
                'create_at' =>  $date,
            ];
        }
        // 执行添加
        $bool = Db::table('record')->insertAll($insertData);
        if (empty($bool) || $bool != count($insertData)) {
            throw new \think\Exception("很抱歉、资金流水更新失败！");
        }
    }

    // +----------------------------------------------------------------------
    // | 对外方法
    // +----------------------------------------------------------------------

    public function index(Request $req)
    {
        return $this->fetch();
    }

    /**
     * 流水记录
     */
    public function record(Request $req)
    {
        // 查询记录
        if ($req->isPost()) {
            // 用户账号
            $username = session('user.account.username');
            // 获取货币
            $cid = $req->param('cid/d', 1);
            if (!in_array($cid, [1, 2, 3, 4,6])) {
                $cid = 1;
            }
            // 当前货币
            $currency = config('hello.currencys.' . $cid);
            // 所有业务
            $businesses = array_intersect_key(config('hello.businesses'), array_fill_keys($currency['businesses'], true));
            // 分页数据
            $page = $req->param('page/d', 1);
            $size = $req->param('size/d', 20);
            $offset = $page - 1 < 0 ? 0 : ($page - 1) * $size;
            // 查询对象
            $query = Db::table('record')->where('username', '=', $username)->where('currency', '=', $cid);
            // 按类型查询
            $type = $req->param('type');
            if (is_null($type)) {
                $query->where('business', 'in', $currency['businesses']);
            } else {
                $query->where('business', '=', $type);
            }
            // 查询数据
            $list = $query->field('rid, business, now, create_at')
                    ->limit($offset, $size)->order('create_at DESC')
                    ->select();
            // 查询总额
            $total = $query->sum('now');
            // 返回结果
            return json([
                'code'              =>  200,
                'message'           =>  '恭喜您、操作成功！',
                'data'              =>  [
                    'unit'          =>  config('hello.unit'),
                    'total'         =>  $total,
                    'currency'      =>  $currency,
                    'businesses'    =>  $businesses,
                    'list'          =>  $list,
                ],
            ]);
        }
        // 显示页面
        return $this->fetch();
    }
    public function financial(Request $req)
    {
        $username = session('user.account.username');
        // 获取货币
        $type = $req->param('type/d', 1);
        switch ($type)
        {
            case 1:
                $business = '21';
                // 分页数据
                $page = $req->param('page/d', 1);
                $size = $req->param('size/d', 50);
                $offset = $page - 1 < 0 ? 0 : ($page - 1) * $size;
                // 查询对象
                $query = Db::table('record')->where('username', '=', $username)->where('currency', '=', 7)->where('business', '=', $business);

                // 查询数据
                $list = $query->field('rid, business, now, create_at,after')
                    ->limit($offset, $size)->order('create_at DESC')
                    ->select();
                $business = config('hello.businesses');
                $index =  $query->field('rid')->count(1);
                $fetch = 'financial';
                break;
            case 2:
                $business = '103';
                // 分页数据
                $page = $req->param('page/d', 1);
                $size = $req->param('size/d', 50);
                $offset = $page - 1 < 0 ? 0 : ($page - 1) * $size;
                // 查询对象
                $query = Db::table('record')->where('username', '=', $username)->where('currency', '=', 1)->where('business', '=', $business);

                // 查询数据
                $list = $query->field('rid, business, now, create_at,after')
                    ->limit($offset, $size)->order('create_at DESC')
                    ->select();
                $business = config('hello.businesses');
                $index =  $query->field('rid')->count(1);
                $fetch = 'financial2';
                break;
            case 3:
                $business = '10,11,12';
                // 分页数据
                $page = $req->param('page/d', 1);
                $size = $req->param('size/d', 50);
                $offset = $page - 1 < 0 ? 0 : ($page - 1) * $size;
                // 查询对象
                $query = Db::table('record')->where('username', '=', $username)->where('currency', '=', 1)->where('business', 'in', $business);

                // 查询数据
                $list = $query->field('rid, business, now, create_at,after')
                    ->limit($offset, $size)->order('create_at DESC')
                    ->select();
                $business = config('hello.businesses');
                $index =  $query->field('rid')->count(1);
                $fetch = 'financial3';
                break;
            default:
                $business = 21;
                // 分页数据
                $page = $req->param('page/d', 1);
                $size = $req->param('size/d', 50);
                $offset = $page - 1 < 0 ? 0 : ($page - 1) * $size;
                // 查询对象
                $query = Db::table('record')->where('username', '=', $username)->where('business', '=', $business);

                // 查询数据
                $list = $query->field('rid, business, now, create_at,after')
                    ->limit($offset, $size)->order('create_at DESC')
                    ->select();
                $business = config('hello.businesses');
                $index =  $query->field('rid')->count(1);
                $fetch = 'finacial';
        }

        $this->assign('business',$business);
        $this->assign('list',$list);
        $this->assign('index',$index);
        $this->assign('page',$page);
        // 显示页面
        return $this->fetch($fetch);
    }
    public function zhuanru(Request $req)
    {
        $username = session('user.account.username');
        if ($req->isPost()) {
            $user = (new Account())->instance($username,null,$req->param('safeword'));
            $num = $req->param('num');
            if($user['wallet']['mpocket']<$num || !is_numeric($num) || $num<=0 || preg_match("/[ ':;*~`$%^&+=-)(<>{}]|\]|\[|\/|\\\|\"|\|/",$num)){
                return json([
                    'code'              =>  500,
                    'message'           =>  '很抱歉、您的蚁巢钱包余额不足！',
                ]);
            }
            (new Wallet())->change($username, 106, [
                7	=>	[$user['wallet']['mpocket'], -$num, $user['wallet']['mpocket'] - $num],
                8	=>	[$user['wallet']['poll'], 5*$num, $user['wallet']['poll'] + 5*$num],
            ]);
            return json([
                'code'              =>  200,
                'message'           =>  '恭喜您、操作成功！',
            ]);
        }
        $user = (new Account())->instance($username);
        $this->assign('user',$user);
        return $this->fetch();
    }
    public function zhuanchu(Request $req)
    {
        $username = session('user.account.username');
        $user = (new Account())->instance($username);
        $this->assign('user',$user);
        return $this->fetch();
    }
}
