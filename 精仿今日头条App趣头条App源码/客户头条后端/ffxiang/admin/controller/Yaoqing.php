<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
class Yaoqing extends Common
{
 
    public function config(){
        $config=config()['yaoqing'];
        $config['money_news_time']=$config['money_news_time']/1000;
        $this->assign('cfg',$config);
        if(request()->isAjax()){
            $post=input('post.');
            if($post){
              $data=$post;
              if($data){
                $data['money_news_time']=$data['money_news_time']*1000;
                $data=var_export($data, true);
                $data=str_replace("array", "return", $data);
                $data=str_replace("(", "[", $data);
                $data=str_replace(")", "];", $data);
                $data="<?php\r\n".$data;
                file_put_contents(APP_PATH.'extra/yaoqing.php', print_r($data, true));
                $data=['ret'=>'保存成功'];
              }else{
                $data=['err'=>'保存失败'];
              }
            }else{
              $data=['err'=>'提交参数错误'];
            }
        }else{
            $data=$this->fetch();
        }
        return $data;
    }
    public function records(){
        $get=input();
        $where=[];
        if(!empty($get['uid'])){
            $where['uid']=$get['uid'];
        }
        $data=Db::name('yaoqing_records')->order('time desc')->where($where)->paginate('',false,['query'=>request()->param()]);
         // foreach ($data as $key => $value) {

         //   $data[$key]['moneys']= $value['money']/100;

         // }
        $page = $data->render();
       
        $this->assign('data',$data);
        $this->assign('page', $page);
        return $this->fetch();
    }
    public function so(){
        $get=input();
        $where=[];
        if(!empty($get['uid'])){
            $where['s1']=$get['uid'];
             
        }else{
            $where['tudi_num']=['<>',0];
        }
         
        $data=Db::name('yaoqing')->where($where)->order('tudi_num desc')->paginate('',false,['query'=>request()->param()]);
     
        $page = $data->render();
        $this->assign('data',$data);
        $this->assign('page', $page);
        return $this->fetch();
    }
    // 任务系统
    public function renwu(){
 
        $data=Db::name('renwu')->order('desc desc,id,asc')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
    
}
