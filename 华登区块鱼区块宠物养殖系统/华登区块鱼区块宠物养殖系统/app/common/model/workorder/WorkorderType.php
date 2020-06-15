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
namespace app\common\model\workorder;
use think\Db;
use think\Model;
use think\Config;
class WorkorderType extends Model
{

    //列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::where($where)
        ->paginate($rows,false,['query'=>$where])?:[];
        return $list;
    }

    public static function getList()
    {
        $list = self::where(['status' => 1])->select()->toArray()?:[];
        return $list;
    }

    public static function getType($where)
    {
        $detail = self::where($where)->find();
        if($detail){
            $detail = $detail->toArray();
        }else{
            $detail = [];
        }
        return $detail;

    }

    public static function updateType($param)
    {
        return self::where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
    }

    public static function insertType($param)
    {
        return self::strict(false)->field(true)->insert($param);
    }

    public static function deleteType($id)
    {
        self::where('id',$id)->delete();
    }

}