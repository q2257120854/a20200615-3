<?php
namespace app\index\model;

use think\Model;

class Pay extends Model
{
    /*
     * 生成vip支付订单
     */
    public function VipOrder($vip,$order,$money)
    {

        $reordr= db('reorder')->insert(['uid'=>session('id'),'money'=>$money,'viptype'=>$vip,'number'=>$order,'addtime'=>date("Y-m-d H:i:s")]);
        if(!$reordr){
            return false;
        }
        return true;
    }
    /*
     *生成普通订单
     */
    public function Order($title,$name,$pid,$money,$order){
    
      $ret = db('pay')->insert(['pid'=>$pid,'uid'=>session('id'),'title'=>$title,'money'=>$money,'name'=>$name,'number'=>$order,'addtime'=>date("Y-m-d H:i:s")]);
      if(!$ret){
      return false;
      }
      return true;
    }

}