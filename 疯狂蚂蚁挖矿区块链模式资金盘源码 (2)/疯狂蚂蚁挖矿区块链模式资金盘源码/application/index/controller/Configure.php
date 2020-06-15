<?php

namespace app\index\controller;

use think\Db;
use think\facade\Cache;

class Configure
{

    /**
     * 缓存前缀
     */
    const PREFIX = 'configure.';

    /**
     * 配置格式
     */
    const TYPE_STRING = 1;
    const TYPE_NUMBER = 2;
    const TYPE_BOOLEAN = 3;
    const TYPE_FILE = 4;
    const TYPE_JSON = 5;
    const TYPE_ARRAY = 6;

    /**
     * 格式化
     */
    public static function format($data, $type, $isWrite = true)
    {
        switch ($type) {
            // 1：字符
            case self::TYPE_STRING:
                return $data;
                break;
            // 2：数值
            case self::TYPE_NUMBER:
                return $data;
                break;
            // 3：布尔
            case self::TYPE_BOOLEAN:
                return $data;
                break;
            // 4：文件
            case self::TYPE_FILE:
                return $data;
                break;
            // 5：json
            case self::TYPE_JSON:
                return $isWrite ? json_encode($data) : json_decode($data, true);
                break;
            // 6：数组
            case self::TYPE_ARRAY:
                return $data;
                break;
            default:
                return $data;
                break;
        }
    }

    /**
     * 获取配置
     */
    public static function get($key)
    {
        // 先读取缓存
        $result = Cache::get(self::PREFIX . $key);
        if (empty($result)) {
            // 再从数据库查
            $result = Db::table('config')->where('token', '=', $key)->find();
            if (empty($result)) {
                // 最后从配置文件里查
                $result = config($key);
                if (empty($result)) {
                    return null;
                }
            } else {
                // 格式化数据
                $result = self::format($result['value'], self::TYPE_JSON, false);
            }
            // 保存到缓存
            Cache::set(self::PREFIX . $key, $result, 60);
        }
        // 直接返回
        return $result;
    }

    /**
     * 设置配置
     */
    public static function set($key, $values, $type = self::TYPE_JSON, $parent = 0)
    {
        // 查询数据
        $config = Db::table('config')->where('token', '=', $key)->find();
        if (empty($config)) {
            // 新建配置
            $oldData = config($key) ?: [];
            $newData = array_merge($oldData, $values);
            $data = $newData;
            $bool = Db::table('config')->insert([
                'type'      =>  $type,
                'parent'    =>  $parent,
                'token'     =>  $key,
                'name'      =>  $key,
                'value'     =>  self::format($newData, $type),
                'create_at' =>  date('Y-m-d H:i:s'),
                'update_at' =>  date('Y-m-d H:i:s'),
            ]);
            if (empty($bool)) {
                throw new \think\Exception("很抱歉、保存配置失败！");
            }
        } else {
            // 更新配置
            $oldData = self::format($config['value'], $type, false);
            $newData = array_merge($oldData, $values);
            $data = $newData;
            $bool = Db::table('config')->where('token', '=', $key)->update([
                'value'     =>  self::format($newData, $type),
                'update_at' =>  date('Y-m-d H:i:s'),
            ]);
            if (empty($bool)) {
                throw new \think\Exception("很抱歉、保存配置失败！");
            }
        }
        // 保存到缓存
        Cache::set(self::PREFIX . $key, $data, 60);
    }

    /**
     * 重写配置
     */
    public static function rewrite($key, $values, $type = self::TYPE_JSON, $parent = 0)
    {
        // 查询数据
        $config = Db::table('config')->where('token', '=', $key)->find();
        if (empty($config)) {
            // 新建配置
            $newData = $values;
            $data = $newData;
            $bool = Db::table('config')->insert([
                'type'      =>  $type,
                'parent'    =>  $parent,
                'token'     =>  $key,
                'name'      =>  $key,
                'value'     =>  self::format($newData, $type),
                'create_at' =>  date('Y-m-d H:i:s'),
                'update_at' =>  date('Y-m-d H:i:s'),
            ]);
            if (empty($bool)) {
                throw new \think\Exception("很抱歉、保存配置失败！");
            }
        } else {
            // 更新配置
            $newData = $values;
            $data = $newData;
            $bool = Db::table('config')->where('token', '=', $key)->update([
                'value'     =>  self::format($newData, $type),
                'update_at' =>  date('Y-m-d H:i:s'),
            ]);
            if (empty($bool)) {
                throw new \think\Exception("很抱歉、保存配置失败！");
            }
        }
        // 保存到缓存
        Cache::set(self::PREFIX . $key, $data, 60);
    }
}
