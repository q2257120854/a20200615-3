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
namespace app\common\model\notice;
use think\Db;
use think\Model;
use think\Config;
class Notice extends Model
{

    //列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::order('createtime desc')->where($where)->paginate($rows,false,['query'=>$where])->each(function($item){
            $item["createtime"] = date("Y-m-d H:i:s", $item["createtime"]);
            $item["sendtime"] = date("Y-m-d H:i:s", $item["sendtime"]);
            $item['type'] =  $item["type"] == "1" ? "系统通知" : "活动通知";
        })?:[];
        return $list;
    }

    public static function getList($where)
    {

        $list = self::order('id asc')->where($where)->select()->each(function($item){
            $item["createtime"] = date("Y-m-d H-i-s", $item["createtime"]);
            $item["sendtime"] = date("Y-m-d H-i-s", $item["sendtime"]);
            $item['type'] =  $item["type"] == "1" ? "系统通知" : "活动通知";
        })?:[];

        return $list;
    }

    public static function getNotice($where)
    {
    	$detail = self::where($where)->find()->toArray();
    	return $detail;
    }

    public static function updateNotice($param)
    {
        return self::where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
    }

    public static function insertNotice($param)
    {
        return self::strict(false)->field(true)->insert($param);
    }

    public static function deleteNotice($id)
    {
        self::where('id',$id)->delete();
    }

    public static function getCount($where = array())
    {
        $count = self::where($where)->count();
        return intval($count);
    }

}