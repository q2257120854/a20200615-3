<?php

namespace app\index\controller;

use think\Db;
use think\Request;

class Ticket extends Base
{

	// +----------------------------------------------------------------------
    // | 内部方法
    // +----------------------------------------------------------------------

    /**
     * 生成号码
     */
    public function generateToken($number, $length = 10, $prefix = '')
    {
        $rule = [ [48, 57], [65, 90], [97, 122], '!', '#', '&', '@' ];
        $chars = [];
        foreach ($rule as $key => $item) {
            if (is_array($item)) {
                for ($i = $item[0];$i <= $item[1]; $i++) {
                    $chars[] = chr($i);
                }
            } else {
                $chars[] = $item;
            }
        }
        $char_count = count($chars) - 1;
        $data = [];
        for ($i = 0;$i < $number;$i++) {
            $string = '';
            for ($j = 0;$j < $length; $j++) {
                $idx = mt_rand(0, $char_count);
                $string .= $chars[$idx];
            }
            $data[] = $prefix . $string;
        }
        return $data;
    }

	/**
     * 获取票券
     */
    public function get($token)
    {
    	// 获取数据
    	return Db::table('ticket')->where('token', '=', $token)->find();
    }

	/**
	 * 创建票券
	 */
    public function create($type, $number = 1)
    {
        // 生成号码
        $data = $this->generateToken($number, 10, $type);
        // 当前时间
        $date = $this->timestamp;
        // 添加语句
        $sql = 'INSERT IGNORE INTO ticket (`type`, `token`, `create_at`) VALUES ';
        foreach ($data as $key => $value) {
            $sql .= "('$type', '$value', '$date'),";
        }
        $sql = rtrim($sql, ',');
        // 执行添加
        $bool = Db::execute($sql);
        if (false === $bool) {
            throw new \think\Exception("很抱歉、数据生成失败！");
        }
        // 返回数据
        return $bool;
    }

    /**
     * 修改票券
     */
    public function update($token, $username)
    {
    	// 数据整理
        $data = [
            'username'  =>  $username,
            'update_at' =>  $this->timestamp,
        ];
        // 修改数据
        $bool = Db::table('ticket')->where('token', '=', $token)->update($data);
    	if (empty($bool)) {
    		throw new \think\Exception("很抱歉、数据更新失败请重试！");
    	}
    }

    /**
     * 删除票券
     */
    public function delete($token)
    {
    	// 删除数据
    	$bool = Db::table('ticket')->where('token', '=', $token)->delete();
    	if (empty($bool)) {
    		throw new \think\Exception("很抱歉、数据删除失败请重试！");
    	}
    }

    // +----------------------------------------------------------------------
    // | 内部方法
    // +----------------------------------------------------------------------

    /**
     * 检查票券
     */
    public function check(Request $req)
    {
        // 获取票券
        $token = $req->param('token');
        if (empty($token)) {
            return json([
                'code'      =>  501,
                'message'   =>  '很抱歉、请提供票券！'
            ]);
        }
        // 查询票券
        $obj = $this->get($token);
        if (empty($obj)) {
            return json([
                'code'      =>  502,
                'message'   =>  '很抱歉、请票券不存在！'
            ]);
        }
        if (!empty($obj['username'])) {
            return json([
                'code'      =>  503,
                'message'   =>  '很抱歉、请票券已被使用！'
            ]);
        }
        // 操作成功
        return json([
            'code'      =>  200,
            'message'   =>  '恭喜您、操作成功！'
        ]);
    }
}