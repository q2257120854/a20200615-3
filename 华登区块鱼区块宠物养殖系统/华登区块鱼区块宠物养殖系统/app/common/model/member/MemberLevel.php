<?php
// +----------------------------------------------------------------------
// | vaeThink [ Programming makes me happy ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://www.vaeThink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 听雨 < 389625819@qq.com >
// +---------------------------------------------------------------------
namespace app\common\model\member;
use think\Db;
use think\Model;
use think\Config;
class MemberLevel extends Model
{
    //列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::where($where)->order('level asc')->paginate($rows,false,['query'=>$where])?:[];
    	return $list;
    }

    public static function getList()
    {
    	$list = self::order('level asc')->select()->toArray()?:[];
    	return $list;
    }

    public static function getLevel($id)
    {
        $detail = self::where(['id' => $id])->find();
        if($detail){
            $detail = $detail->toArray();
            return $detail;
        }else{
            return [];
        }
    }

    public static function getInfoByLevel($level)
    {
        $detail = self::where(['level' => $level])->find();
        if($detail){
            $detail = $detail->toArray();
            return $detail;
        }else{
            return [];
        }
    }

    public static function getLevelname($level)
    {
        $level = self::where(['level' => $level])->find();
        if($level){
            $level = $level->toArray();
            return $level['levelname'];
        }else{
            return '';
        }
        
    }

    public static function updateLevel($param)
    {
        return self::where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
    }

    public static function insertLevel($param)
    {
        return self::strict(false)->field(true)->insert($param);
    }

    public static function deleteLevel($id)
    {
        return self::where('id',$id)->delete();
    }
    
    //获取升级条件
    public static function getUpgradeLevel($level)
    {
        $level = self::order('level asc')->where('level', '>', $level)->find();
        if($level){
            $level = $level->toArray();
            return $level;
        }else{
            return [];
        }
    }
    
    //获取最高等级
    public static function getMaxLevel()
    {
        $level = self::order('level desc')->find();
        if($level){
            $level = $level->toArray();
            return $level;
        }else{
            return [];
        }
    }

}