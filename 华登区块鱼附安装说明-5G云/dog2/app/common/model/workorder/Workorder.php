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
class Workorder extends Model
{
    //列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::
        field('w.*,wt.title as typename,m.account')
        ->alias('w')
        ->join('workorder_type wt','w.type = wt.id')
        ->join('member m','w.mid = m.mid')
        ->order('w.add_time desc')
        ->where($where)
        ->paginate($rows,false,['query'=>$where])->each(function($item){
            if(!empty($item['screenshot'])){
                $item['screenshot'] = url($item['screenshot'], '', '', true);
            }
            $item["add_time"] = date("Y-m-d H:i:s",$item["add_time"]);
        })?:[];
        return $list;
    }

    public static function getList($where)
    {
        $list = self::
        field('w.*,wt.title as typename,m.account')
        ->alias('w')
        ->join('workorder_type wt','w.type = wt.id')
        ->join('member m','w.mid = m.mid')
        ->order('w.add_time desc')
        ->where($where)->select()->each(function($item){
            if(!empty($item['screenshot'])){
                $item['screenshot'] = url($item['screenshot'], '', '', true);
            }
            $item["add_time"] = date("Y-m-d H:i:s",$item["add_time"]);
        })?:[];
        return $list;
    }

    public static function getWorkorder($where)
    {
        $detail = self::
            field('w.*,wt.title as typename,m.account')
            ->alias('w')
            ->join('workorder_type wt','w.type = wt.id')
            ->join('member m','w.mid = m.mid')
            ->where($where)->find()->toArray();
        $detail["add_time"] = date("Y-m-d H:i:s",$detail["add_time"]);
        return $detail;
    }

    public static function updateWorkorder($param)
    {
        return self::where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
    }

    public static function insertWorkorder($param)
    {
        $param['add_time'] = time();
        return self::strict(false)->field(true)->insert($param);
    }

    public static function deleteWorkorder($id)
    {
        self::where('id',$id)->delete();
    }

    public static function getCount($where = array())
    {
        $count = self::where($where)->count();
        return intval($count);
    }
}