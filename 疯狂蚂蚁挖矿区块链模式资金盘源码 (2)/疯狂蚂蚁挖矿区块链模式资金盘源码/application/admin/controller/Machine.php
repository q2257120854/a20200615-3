<?php

namespace app\admin\controller;

use think\Db;
use think\Request;

class Machine extends Base
{
	/**
	 * 用户蚁后列表
	 */
    public function index(Request $req)
    {
        // 所有蚁后
        $store = Db::table('store')->field('id, title')->where('catalog', '=', 1)->order('price ASC')->select();
        $this->assign('store', $store);
        // 查询对象
        $query = Db::table('machine')->alias('m')
                    ->join('profile p', 'p.username = m.username')
                    ->field('p.nickname, m.*');
        // 条件：按蚁后查询
        $product = $req->param('product/d');
        if (!is_null($product) && $product != -1) {
            $query->where('product', '=', $product);
        }
        // 条件：按账号搜索
        $username = $req->param('username');
        if (!is_null($username) && strlen($username)) {
            $query->where('m.username', 'like', "%$username%");
        }
        // 条件：按数值搜索
        $numberField = $req->param('numberField');
        $numberOperator = $req->param('numberOperator');
        $numberValue = $req->param('numberValue');
        if (!is_null($numberField) && !is_null($numberOperator) && !is_null($numberValue) && strlen($numberValue)) {
            if ($numberOperator == 1) {
                $query->where('m.'.$numberField, '>', $numberValue);
            } else if ($numberOperator == 2) {
                $query->where('m.'.$numberField, '=', $numberValue);
            } else if ($numberOperator == 3) {
                $query->where('m.'.$numberField, '<', $numberValue);
            }
        }
        // 排序
        $sortField = $req->param('sortField');
        $sortType = $req->param('sortType');
        if (!is_null($sortField)) {
            $query->order('m.' . $sortField . ' ' . $sortType);
        } else {
            $query->order('m.profit_at DESC');
        }
        // 查询数据
        $machines = $query->order('m.id DESC')->paginate(20, false, ['query' => $req->param()])->each(function($item, $key){
            $item['end_at'] = date('Y-m-d H:i:s', strtotime($item['create_at']) + ($item['cycle'] * 60 * 60));
            return $item;
        });
        // 页面显示
        $this->assign('machines', $machines);
        $this->assign('fields', [
            'profit_at' =>  '收矿时间',
            'create_at' =>  '购买时间',
            'divide'    =>  '蚁后等级',
            'cycle'     =>  '运行周期',
            'income'    =>  '预计收益',
            'power'     =>  '算力',
            'price'     =>  '价格',
            'profit'    =>  '累计收益',
            'count'     =>  '收矿次数',
        ]);
        return $this->fetch();
    }

    /**
     * 编辑用户蚁后
     */
    public function edit(Request $req)
    {
        // 获取编号
        $id = $req->param('id');
        if (empty($id)) {
            $this->error('很抱歉、请提供编号！');
            exit;
        }
        // 查询蚁后
        $machine = Db::table('machine')->where('mid', '=', $id)->find();
        if (empty($machine)) {
            $this->error('很抱歉、该蚁后不存在！');
            exit;
        }
        if ($req->isPost()) {
            // 获取参数
            $data = $req->param();
            unset($data['id']);
            // 对比差异
            $acData = array_diff_assoc($data, $machine);
            // 存在差异
            if (!empty($acData)) {
                // 更新档案
                $bool = Db::table('machine')->where('mid', '=', $id)->update($acData);
                if (empty($bool)) {
                    $this->error('很抱歉、更新失败请重试！');
                    exit;
                }
            }
        }
        // 显示页面
        $this->assign('machine', $machine);
        return $this->fetch();
    }

    /**
     * 赠送蚁后
     */
    public function give(Request $req)
    {
        // 提交
        if ($req->isPost()) {
            // 具体的蚁后
            $pid = $req->param('pid/d');
            if (empty($pid)) {
                $this->error('很抱歉、请提供蚁后编号！');
                exit;
            }
            // 查询蚁后
            $product = Db::table('store')->where('id', '=', $pid)->find();
            if (empty($product)) {
                $this->error('很抱歉、指定的蚁后不存在！');
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
                // 赠送蚁后
                foreach ($userList as $key => $value) {
                    $username = trim($value);
                    if (!empty($username)) {
                        (new \app\index\controller\Store())->give($product, $username);
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
        // 所有蚁后
        $store = Db::table('store')->field('id, title')->order('price ASC')->select();
        $this->assign('store', $store);
        // 显示页面
        return $this->fetch();
    }
}
