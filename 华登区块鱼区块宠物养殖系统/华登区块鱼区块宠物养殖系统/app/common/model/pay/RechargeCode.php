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
namespace app\common\model\pay;
use think\Db;
use think\Model;
use think\Config;
class RechargeCode extends Model
{
    //列表
    public static function systemPage($where)
    {
        $rows = empty($where['limit']) ? Config::get('paginate.list_rows') : $where['limit'];
        $list = self::where($where)->paginate($rows,false,['query'=>$where])->each(function($item){
            $item["createtime"] = date("Y-m-d H:i:s", $item["createtime"]);
        })?:[];
    	return $list;
    }

    public static function getList()
    {
    	$list = self::select()->toArray()?:[];
    	return $list;
    }

    public static function updateCode($param)
    {
        return self::where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
    }

    public static function insertCode($param)
    {   
        $param['createtime'] = time();
        return self::strict(false)->field(true)->insert($param);
    }

    public static function deleteCode($id)
    {
        return self::where('id',$id)->delete();
    }

    public static function randCode()
    {
        $list = self::getList();
        if(!$list) return false;
        $code = $list[array_rand($list)];
        return url($code['rechargecode'], '', '', true);
    }

}