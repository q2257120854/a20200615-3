<?php
namespace app\api\controller;
use app\api\controller\Common;  // 公用   
use think\Db;       //数据库
class Fad extends Common
{   
    //获取首页广告
    public function getAd()
    {   
        // 首页广告的字段
        $where=['tid'=>'4','hide'=>'1'];
        //检查首页广告是否关闭
        if (config('ad.hide')=='0') {
            echo json_encode(['code'=>201]);exit();
        }
        $config=config('ad.order');
        //检查抽取的顺序：0为顺序，1为随机
        if($config=='0'){
            $data['data']=db('slides')->where($where)->find();
            
        }else{
            $data['data']=db('slides')->where($where)->order('rand()')->find();
        }
        if ($data['data']===null) {
               echo json_encode(['code'=>201]);exit(); 
        }
        //添加配置数据
        $data['time']=config('ad.time');
        $data['hide']=config('ad.hide');
        $data['code']=200;
        echo json_encode($data);
    }



}

 