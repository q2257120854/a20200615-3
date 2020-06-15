<?php

namespace app\index\controller;

use think\Db;
use think\Request;

class Correct
{

	/**
	 * 找祖宗，更新算力
	 */
	public function team_power_inviter($username, $power, $index, &$data)
	{
	    // 最多8级
	    if ($index <= 8) {
	        // 查找上级
	        $parent = Db::table('account')->field('type, inviter')->where('username', '=', $username)->select();
	        if (!empty($parent) && !empty($parent['inviter'])) {
	        	// 上级的信息
	        	$inviter = $parent['inviter'];
	        	$level = $parent['type'];
	        	// 该上级能得多少比例的算力
	        	$config = config('hello.level.' . $level);
	        	if (!empty($config)) {
	        		// 比例
	        		$percent = $config['team_power'];
		            // 存在上级，上级的实名认证人数增加
		            if (array_key_exists($inviter, $data)) {
		                $data[$inviter]['power'] += $power * $percent;
		                $data[$inviter]['team_power'] += $power * $percent;
		            } else {
		                $data[$inviter] = [
		                	'power'				=>	$power * $percent,
			    	    	'team_power'		=>	$power * $percent,
			    	    	'machine_power'		=>	0,
		                ];
		            }
	        	}
	            // 继续找上级
	            $this->team_power_inviter($inviter, $power, $index + 1, $data);
	        }
	    }
	}

	/**
	 * 修正上级算力
	 */
	public function power(Request $req)
	{
	    // 最终数据
	    $data = [];
	    // 蚁后算力
	    $machines = Db::table('machine')->field('username, power')->select();
	    foreach ($machines as $key => $item) {
	    	// 基本信息
	    	$username = $item['username'];
	    	$power = $item['power'] ?: 0;
	    	if ($power > 0) {
		    	// 自己的蚁后统计算力
		    	if (array_key_exists($username, $data)) {
		    	    $data[$username]['power'] += $power;
		    	    $data[$username]['machine_power'] += $power;
		    	} else {
		    	    $data[$username] = [
		    	    	'power'				=>	$power,
		    	    	'team_power'		=>	0,
		    	    	'machine_power'		=>	$power,
		    	    ];
		    	}
		        // 给他上级统计算力
		        $this->team_power_inviter($username, $power, 1, $data);
	    	}
	    }
	    // 道具算力
	    $props = Db::table('pool')->field('username, reward')->where('action', '=', 2)->select();
	    foreach ($props as $key => $item) {
	    	// 基本信息
	    	$username = $item['username'];
	    	$power = $item['reward'] ?: 0;
	    	if ($power > 0) {
	    		// 自己的道具统计算力
	    		if (array_key_exists($username, $data)) {
	    		    $data[$username]['power'] += $power;
	    		} else {
	    		    $data[$username] = [
		    	    	'power'				=>	$power,
		    	    	'team_power'		=>	0,
		    	    	'machine_power'		=>	0,
		    	    ];
	    		}
	    	}
	    }
	    // 更新数据
	    $update = 'UPDATE `dashboard` SET ';
	    $update_power = ' `power` = CASE ';
	    $update_team_power = ' ,`team_power` = CASE ';
	    $update_machine_power = ' ,`machine_power` = CASE ';
	    foreach ($data as $username => $item) {
	        $update_power .= " WHEN `username` = '$username' THEN " . $item['power'] . " ";
	        $update_team_power .= " WHEN `username` = '$username' THEN " . $item['team_power'] . " ";
	        $update_machine_power .= " WHEN `username` = '$username' THEN " . $item['machine_power'] . " ";
	    }
	    $update .= $update_power . ' ELSE `power` END ';
	    $update .= $update_team_power . ' ELSE `team_power` END ';
	    $update .= $update_machine_power . ' ELSE `machine_power` END ';
	    // 执行语句
	    // Db::startTrans();
	    $bool = Db::execute($update);
	    // if ($bool != count($data)) {
	    //     Db::rollback();
	    //     throw new \think\Exception($bool. ':' . count($data));
	    // }
	    // Db::commit();
	    // print_r($data);
	    echo $bool;
	}
}