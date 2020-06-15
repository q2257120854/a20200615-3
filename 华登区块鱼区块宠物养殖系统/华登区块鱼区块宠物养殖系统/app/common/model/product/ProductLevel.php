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
namespace app\common\model\product;
use think\Db;
use think\Model;
use think\Config;
class ProductLevel extends Model
{
    //列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::order('level asc')->where($where)->paginate($rows,false,['query'=>$where])?:[];
        return $list;
    }

    public static function getList()
    {
        $list = self::order('level asc')->where(['status' => 1])->select()->toArray()?:[];
        return $list;
    }

    public static function getLevel($id)
    {
        $detail = self::where(['id'=>$id])->find()->toArray();
        return $detail;
    }

    public static function getLevelname($id)
    {
       $detail = self::where(['id'=>$id])->find();
       if($detail){
            $detail = $detail->toArray();
            return $detail['levelname'];
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
        self::where('id',$id)->delete();
    }
}
