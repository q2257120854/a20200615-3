<?php
namespace app\api\controller;
use app\api\controller\Common;  // 公用   
use think\Db;       //数据库
// 引用七牛sdk
use Qiniu\Auth;
use Qiniu\Storage\BucketManager;
use Qiniu\Storage\UploadManager;
set_time_limit(0);
class Caiji extends Common
{
 
    public function __construct(){
        
    }
    // 模拟浏览器
    private function get($url){
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  
        return file_get_contents($url,false, stream_context_create($arrContextOptions));
    }
    // 七牛上传文件

    //采集图片
    private function qiniu($url,$type=''){
        if(!$url){
            return '';
        }
        if(!$type){
            $type='.png';
        }
        require_once APP_PATH . '/../vendor/qiniu/autoload.php';
        $db=db::name('member_config')->where(['type'=>'sdkQiniu'])->cache(_cache('db'))->select();
        $accessKey = $db['0']['text'];
        $secretKey = $db['1']['text'];
        $auth = new Auth($accessKey, $secretKey);
        $bmgr = new BucketManager($auth);
        $bucket = $db['2']['text'];
        $key = md5($url.rand(11111,999999)) .$type;
        list($ret, $err) = $bmgr->fetch($url, $bucket, $key);
        if ($err !== null) {
            return '';
        } else {
            return $key;
        }
    }

    
    // 采集小视频
    public function svideo(){
        $category=input('category') ? input('category') : '';
        $html=$this->get('http://api.suxiangw.com/index/svideo/category/'.$category);
        $html=json_decode($html,true);
        if(!$html){
            return "暂无小视频";
        }
        // 循环每条读取视频
        foreach ($html as $k => $v) {
   
            // 检测标题是否存在
            if($v['title']){
                $title=Db::name("article")->where(['title'=>$v['title']])->value('id');
                if($title){
                    // 如果标题已存在跳过采集
                    continue;
                }
            }else{
                // 标题不存在跳过采集
                continue;
            }
            $data['title']=$v['title'];
            // 缩略图是否存在
            if(!$v['image']) continue;
            // 视频是否存在
            if(!$v['video']) continue;

            // 会员开始
            if(empty($v['user'])) continue;
            $uid=Db::name('member')->where(['toutiao_uid'=>$v['user']['id']])->value('id');
            if(!$uid){
                $userInfo=$v['user'];
                // 如果会员不存在增加会员
                $userData['toutiao_uid']=$userInfo['id'];
                $userData['img']=$this->qiniu($userInfo['image']);
                $userData['nickname']=$userInfo['nickname'];
                $userData['qianming']=$userInfo['qianming'];
                $uid=$this->user($userData);
            }
            // 会员结束

            // 上传缩略图
            $data['image']=$this->qiniu($v['image']);
            // 上传视频
            $data['video']=$this->qiniu($v['video'],'.mp4');
            $data['description']='';
            $data['weitoutiao']=0;
            $data['mychannel']=4;
            $time=time();
            $data['create_time']=$v['time'] ? $v['time'] : $time;
            $data['update_time']=$time;
            $data['hide']=1;
            $data['des']=50;
            $data['typeid']=0;
            $data['source']=$v['user']['nickname'];
            $data['uid']=$uid;
            $id=Db::name('article')->insertGetId($data);
            echo $data['title']."   ----   [采集成功]<br><br>";
            unset($data);
        }
       // dump($html);
    }
    // 添加用户或获取用户ID
    private function user($data){
        $map['password']=md5(rand(100000,999999));
        $map['hide']=1;
        $time=time();
        $map['create_time']=$time;
        $map['update_time']=$time;
        $map['toutiao_uid']=$data['toutiao_uid'];
        $map['nickname']=$data['nickname'];
        $map['img']=$data['img'];
        $map['qianming']=$data['qianming'];
   
        $db=Db::name('member')->insertGetId($map);
        return $db;
    }
   

    
}
