<?php
namespace app\index\controller;
use app\index\controller\Common;
use think\Db;
class Index extends Common
{
    public function index()
    {	 

        
    	// $arr=Db::name('typeid')->field("id,tid")->order("id asc")->cache(_cache())->select();
    	// $a=_typeidTid($arr,$b);
    	// $data=[];
    	// foreach ($a as $k => $v) {
    	// 	$data[]=$v['id'];
    	// }
    	// $arr=Db::name('article')->order("id asc")->whereor('typeid','in',$data)->select();
     // var_dump($arr);
    	 
        return $this->fetch();
    }
    // APP下载链接地址
    public function iosurl(){
        // echo "1";exit;
        // echo "等待配置下载地址";
        // return;
        $url=config('download.iosurl');
        header("Location: ".$url);
    }
    public function andurl(){
        // echo "2";exit;
        // echo "等待配置下载地址";
        // return;
        $url=config('download.andurl');
        header("Location: ".$url);
    }
    // APP下载页面
    public function app(){
        return $this->fetch();
    }
     
     
}
