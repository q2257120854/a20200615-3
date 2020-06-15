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
use app\common\model\member\Member;
use app\common\model\product\ProductLevel;
class ProductAppointment extends Model
{
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::field('pa.*,pc.catename,pc.level_id,m.account,m.realname')
        ->alias('pa')
        ->join('product_cate pc','pa.product_cateid = pc.id')
        ->join('member m','pa.mid = m.mid')
        ->order('pa.createtime desc')
        ->where($where)->paginate($rows,false,['query'=>$where])->each(function($item){
            $item["createtime"] = date("Y-m-d H:i:s", $item["createtime"]);
            $item['levelname'] = ProductLevel::getLevelname($item['level_id']);
        })->toArray()?:[];
        return $list;
    }

    public static function getAppo($where)
    {   
        //获取今天的预约记录->whereTime('createtime', 'today')
        if(openRedisQueue() && empty($where['id'])){
            $detail = gethash('product_appointment', 'appo_'. $where['mid'] . '_' . $where['product_cateid']);
        }else{
            $detail = self::where($where)->whereTime('createtime', 'today')->find();
            if($detail){
                $detail = $detail->toArray();
            }else{
                $detail = [];
            }
        }
        return $detail;
    }

    public static function getList($mid)
    {
        $list = self::field('pa.*,pc.catename')
        ->alias('pa')
        ->join('product_cate pc','pa.product_cateid = pc.id')
        ->order('pa.createtime desc')
        ->where(['mid' => $mid])->select()->each(function($item){
            $item["createtime"] = date("Y-m-d H:i:s", $item["createtime"]);
        })->toArray()?:[];
        return $list;
    }

    public static function updateAppo($param)
    {
        return self::where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
    }

    //获取数量
    public static function getCount($where)
    {
        return $list = self::where($where)->count();
    }
    
    public static function insertAppo($param)
    {   
        $param['createtime'] = time();
        $id = self::strict(false)->field(true)->insertGetId($param);
        if(openRedisQueue() && $id){
            $param['id'] = $id;
            sethash('product_appointment', 'appo_'. $param['mid'] . '_' . $param['product_cateid'], $param);
        }
        return $id;
    }

    //退还捕捞时间段外的预约记录的鱼饵
    public static function ClearAppo()
    {
        $appolist = self::where(['status' => 1])->whereTime('createtime', '<', 'today')->select()->toArray();
        foreach ($appolist as &$item) {
            //预约失败退还鱼饵
            Member::changeIntegral(2, $item['integral'], $item['mid']);
            $item['status'] = 0;
        }
        $Model = new self;
        $Model->saveAll($appolist);
        return true;
    }

}