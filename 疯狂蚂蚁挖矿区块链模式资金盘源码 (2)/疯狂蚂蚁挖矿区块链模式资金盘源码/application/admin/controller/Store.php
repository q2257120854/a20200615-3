<?php

namespace app\admin\controller;

use think\Db;
use think\Request;
use think\facade\Env;

class Store extends Base
{
    /**
     * 实物商城
     */
    public function index(Request $req)
    {
        // 查询产品
        $store = Db::table('store')->where('catalog', '<>', 1)->where('catalog', '<>', 2)->where('audit', '=', 1)->order('sort DESC')->paginate(10, false, ['query' => $req->param()]);
        $this->assign('store', $store);
        return $this->fetch();
    }

    /**
     * 蚁后商城
     */
    public function machine(Request $req)
    {
        // 查询产品
        $store = Db::table('store')->where('catalog', '=', 1)->where('audit', '=', 1)->order('sort DESC')->paginate(10, false, ['query' => $req->param()]);
        $this->assign('store', $store);
        return $this->fetch();
    }
	/**
     * 赠送蚁后
     */
    public function give($id, $username,$type='0')
    {
            // 查询蚁后
            $product = null;
            if (is_array($id)) {
              $pid = $id;
            } else {
              $pid = Db::table('store')->where('id', '=', $id)->find();
              if (empty($pid)) {
                throw new \think\Exception("很抱歉、指定的蚁后不存在！");
              }
            }  
            
            try {
                // 开启事务
                Db::startTrans();
                // 赠送蚁后
                if (!empty($username)) {
                  (new \app\index\controller\Store())->give($pid, $username,1);
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
               
            }           
    }
    /**
     * 道具商城
     */
    public function prop(Request $req)
    {
        // 查询产品
        $store = Db::table('store')->where('catalog', '=', 2)->where('audit', '=', 1)->order('sort DESC')->paginate(10, false, ['query' => $req->param()]);
        $this->assign('store', $store);
        return $this->fetch();
    }

    /**
     * 审核通过
     */
    public function audit_ok(Request $req)
    {
        // 获取编号
        $id = $req->param('id/d');
        if (empty($id)) {
            $this->error('很抱歉、请提供编号！');
            exit;
        }
        // 修改商品
        $bool = Db::table('store')->where('id', '=', $id)->update([
            'audit'     =>  1,
            'update_at' =>  $this->timestamp,
        ]);
        if (empty($bool)) {
            $this->error('很抱歉、操作失败请重试！');
            exit;
        }
        // 操作成功
        $this->success('恭喜您、操作成功！');
        exit;
    }

    /**
     * 审核列表
     */
    public function audit(Request $req)
    {
        // 查询产品
        $store = Db::table('store')->where('audit', '=', 0)->order('sort DESC')->paginate(10, false, ['query' => $req->param()]);
        $this->assign('store', $store);
        return $this->fetch();
    }

    /**
     * 删除商品
     */
    public function remove(Request $req)
    {
        // 获取编号
        $id = $req->param('id/d');
        if (empty($id)) {
            $this->error('很抱歉、请提供编号！');
            exit;
        }
        // 查询商品
        $seller = Db::table('store')->where('id', '=', $id)->value('username');
        if (empty($seller)) {
            $this->error('很抱歉、官方产品无法删除！');
            exit;
        }
        // 删除商品
        $bool = Db::table('store')->where('id', '=', $id)->delete();
        if (empty($bool)) {
            $this->error('很抱歉、操作失败请重试！');
            exit;
        }
        // 操作成功
        $this->success('恭喜您、操作成功！');
        exit;
    }

    /**
     * 批量调整价格
     */
    public function adjust_price(Request $req)
    {
        // 提交处理
        if ($req->isPost()) {
            // 获取编号
            $idList = $req->param('id/a');
            // 获取价格
            $priceList = $req->param('price/a');
            // 当前时间
            $date = $this->timestamp;
            // 修改语句
            $update = 'UPDATE `store` SET `price` = CASE `id` ';
            // 批量处理
            foreach ($idList as $key => $id) {
                // 获取价格
                $price = $priceList[$key];
                // 修改语句
                $update .= " WHEN $id THEN $price ";
            }
            // 修改语句
            $update .= " ELSE `price` END, `update_at` = CASE WHEN `id` IN(" . implode(', ', $idList) . ") THEN '$date' ELSE `update_at` END;";
            // 执行修改
            $row = Db::execute($update);
            if (empty($row)) {
                $this->error('很抱歉、执行失败请再试试看！');
                exit;
            }
            // 操作成功
            $this->success('恭喜您、操作成功！');
            exit;
        }
        // 查询产品
        $store = Db::table('store')->field('id, title, catalog, price')->order('catalog ASC, sort DESC')->select();
        $this->assign('store', $store);
        return $this->fetch();
    }

    /**
     * 发布商品
     */
    public function create(Request $req)
    {
        if ($req->isPost()) {
            // 获取参数
            $data = $req->param();
            // 标题必填
            if (empty($data['title'])) {
                $this->error('很抱歉、请填写名称！');
                exit;
            }
            // 其他除图片和介绍外，均可为0
            foreach ($data as $key => $value) {
                if ($key != 'image' && $key != 'content') {
                    $data[$key] = $data[$key] ?: 0;
                }
            }
            // 图片上传
            $imageFile = $req->file('image');
            if (empty($imageFile)) {
                $this->error('很抱歉、请提供图片！');
                exit;
            }
            $info = $imageFile->validate(['ext' => 'jpg,jpeg,png'])->move(Env::get('root_path') . 'public/store');
            if (!$info) {
                $this->error($imageFile->getError());
                exit;
            } else {
                $data['image'] = str_ireplace('\\', '/', $info->getSaveName());
            }
            // 添加数据
            $row = Db::table('store')->insert(array_merge([
                'sort'      =>  0,
                'status'    =>  1,
                'catalog'   =>  1,
                'username'  =>  null,
                'divide'    =>  0,
                'title'     =>  null,
                'image'     =>  null,
                'cycle'     =>  0,
                'income'    =>  0,
                'power'     =>  0,
                'price'     =>  0,
                'price_score'   =>  0,
                'limit'     =>  0,
                'day'       =>  0,
                'sales'     =>  0,
                'stock'     =>  0,
                'content'   =>  null,
                'create_at' =>  $this->timestamp,
                'update_at' =>  $this->timestamp,
            ], $data));
            if (empty($row)) {
                $this->error('很抱歉、添加失败请重试！');
                exit;
            }
            // 跳转地址
            $go = '/admin/store.html';
            if ($req->param('catalog/d') == 1) {
                $go = '/admin/store/machine.html';
            } else if ($req->param('catalog/d') == 2) {
                $go = '/admin/store/prop.html';
            }
            // 操作成功
            $this->success('恭喜您、操作成功！', $go);
            exit;
        }
        return $this->fetch();
    }

    /**
     * 编辑商品
     */
    public function edit(Request $req)
    {
        // 产品编号
        $id = $req->param('id/d');
        if (empty($id)) {
            $this->error('很抱歉、请提供编号！');
            exit;
        }
        // 查询产品
        $product = Db::table('store')->where('id', '=', $id)->find();
        if (empty($product)) {
            $this->error('很抱歉、该产品不存在！');
            exit;
        }
        if ($req->isPost()) {
            // 获取参数
            $data = $req->param();
            // 标题必填
            if (empty($data['title'])) {
                $this->error('很抱歉、请填写名称！');
                exit;
            }
            // 其他除图片和介绍外，均可为0
            foreach ($data as $key => $value) {
                if ($key != 'image' && $key != 'content') {
                    $data[$key] = $data[$key] ?: 0;
                }
            }
            // 图片上传
            $imageFile = $req->file('image');
            if (!empty($imageFile)) {
                $info = $imageFile->validate(['ext' => 'jpg,jpeg,png'])->move(Env::get('root_path') . 'public/store');
                if (!$info) {
                    $this->error($imageFile->getError());
                    exit;
                } else {
                    $data['image'] = str_ireplace('\\', '/', $info->getSaveName());
                }
            }
            // 更新数据
            $data['update_at'] = $this->timestamp;
            $row = Db::table('store')->where('id', '=', $id)->update($data);
            if (empty($row)) {
                $this->error('很抱歉、更新失败请重试！');
                exit;
            }
            // 跳转地址
            $go = '/admin/store.html';
            if ($product['catalog'] == 1) {
                $go = '/admin/store/machine.html';
            } else if ($product['catalog'] == 2) {
                $go = '/admin/store/prop.html';
            }
            // 操作成功
            $this->success('恭喜您、操作成功！', $go);
            exit;
        }
        $this->assign('product', $product);
        return $this->fetch();
    }

    /**
     * 删除订单
     */
    public function removeOrder(Request $req)
    {
        // 获取编号
        $oid = $req->param('oid');
        if (empty($oid)) {
            $this->error('很抱歉、请提供订单编号！');
            exit;
        }
        // 查询订单
        $bool = Db::table('order')->where('oid', '=', $oid)->delete();
        if (empty($bool)) {
            $this->error('很抱歉、操作失败请重试！');
            exit;
        }
        // 操作成功
        $this->success('恭喜您、操作成功！');
        exit;
    }

    /**
     * 立即发货
     */
    public function shipped(Request $req)
    {
        // 获取编号
        $oid = $req->param('oid');
        if (empty($oid)) {
            $this->error('很抱歉、请提供订单编号！');
            exit;
        }
        // 查询订单
        $order = Db::table('order')->where('oid', '=', $oid)->find();
        if (empty($order)) {
            $this->error('很抱歉、该订单不存在！');
            exit;
        }
        // 获取内容
        $send = $req->param('send');
        if (empty($send)) {
            $this->error('很抱歉、发货信息不能为空！');
            exit;
        }
        // 更新数据
        $bool = Db::table('order')->where('oid', '=', $oid)->update([
            'status'        =>  1,
            'express'       =>  $send,
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
     * 商城订单
     */
    public function order(Request $req)
    {
        // 查询对象
        $query = Db::table('order')->alias('o')->join('store s', 's.id = o.product')
                ->field('o.oid, o.buyer, o.seller, o.status, s.catalog, o.title, o.address, o.express, o.update_at AS date');
        // 条件：按账号搜索
        $username = $req->param('username');
        if (!is_null($username) && strlen($username)) {
            $query->where('seller|buyer', '=', $username);
        }
        // 条件：按状态搜索
        $status = $req->param('status');
        if (!is_null($status) && strlen($status)) {
            $query->where('o.status', '=', $status);
        }
        // 条件：按商品类型搜索
        $catalog = $req->param('catalog');
        if (!is_null($catalog) && strlen($catalog)) {
            $query->where('s.catalog', '=', $catalog);
        }
        // 条件：按具体商品搜索
        $product = $req->param('product');
        if (!is_null($product) && strlen($product)) {
            $query->where('product', '=', $product);
        }
        // 搜索数据
        $logs = $query->order('o.update_at DESC')->paginate(20, false, ['query' => $req->param()])->each(function($item){
            if (!empty($item['address'])) {
                $item['address'] = json_decode($item['address'], true);
            }
            return $item;
        });
        $this->assign('logs', $logs);
        // 全部商品
        $products = Db::table('store')->field('id, title')->order('sort DESC, sales DESC')->select();
        $this->assign('products', $products);
        // 显示页面
        $this->assign('statuses', [
            '失败', '交易成功', '待发货', '待确认'
        ]);
        return $this->fetch();
    }
}
