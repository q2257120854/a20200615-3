<?php
namespace app\api\controller;
use app\api\controller\Common;
use app\api\model\Send;
use think\Db;
use think\Validate;

use Qiniu\Auth;
use Qiniu\Storage\BucketManager;
use Qiniu\Storage\UploadManager;
set_time_limit(0);
// error_reporting(0);
class Index extends Common
{
    public function __construct(){
        parent::__construct();
    }
    // 更新版本
    public function banben(){
        $a=input('banben');
        $b='0.0.1';
        if($a==$b){
            echo json_encode(['err'=>'当前是最新版本']);
        }else{
            echo json_encode(['ret'=>'已有'.$b.'新版本','url'=>'http://www.ffxiang.cn']);
        }
    }
    public function pingguoApp(){
        //echo json_encode([1]); 
    }
    public function pingguoApp2(){
        //echo json_encode([1]); 
    }
    public function errors(){
        echo json_encode(['ret'=>1]);  
    }
    public function index(){     
        return _ajaxError();
    }

    private function ping($aid,$item_id){
        $pingNum=rand(1,20);
        $zan=rand(0,600);
        $cai=rand(0,50);
        $click=rand(0,9999);
        $html=$this->get('http://www.toutiao.com/api/comment/list/?group_id='.$item_id.'&item_id='.$item_id.'&count='.$pingNum);
        $data=json_decode($html,true);
        $data=$data['data']['comments'];
        
        if($data){
            foreach ($data as $k => $v) {
                $shijian=date('Y-m-d H:i');
                $wandian=date('Y-m-d H:i',strtotime("-3 minute"));
               $timecuo=strtotime($shijian);
               $timecuos=strtotime($wandian);
               $zhenshis=rand($timecuos,$timecuo);

                $where['content']=$v['text'];           //  评论内容
                $where['zan']=$v['digg_count'];         //  评论赞
                $where['time']=$zhenshis;//$v['create_time'];       //  评论时间
                $where['aid']=$aid;                     //  文章ID
                $where['zan']=rand(20,229);             //  赞
                $where['uid']=$this->pingUser($v['user']);
                // 开始添加评论
                Db::name('article_ping')->insertGetId($where);
            } 
        }
        Db::name('article')->where('id',$aid)->update(['pingNum'=>count($data),'zan'=>$zan,'cai'=>$cai,'click'=>$click]);
    }
  
    public function notify(){
        // 获取notify通知的body信息
        $data = file_get_contents('php://input');
        file_put_contents("1.txt",var_export($data,true)); 
        // 业务服务器处理通知信息， 这里直接打印在log中
        $data=json_decode($data,true);
        if($data){ 
            $persistentId=$data['id'];
            $video=$data['items']['0']['key'];
            if($persistentId && $video){
                $db=db::name('article')->where(['qiniu_video'=>$persistentId,'qiniu_video_type'=>1])->value('id');
                if($db){
                   Db::name('article')->where('id',$db)->update(['qiniu_video_type'=>0,'video'=>$video]);
                }else{
                    exit('禁止非法操作，今日头条APP源码价格：39999元。购买QQ：1013175107');
                }
            }else{
                 exit('禁止非法操作，今日头条APP源码价格：39999元。购买QQ：1013175107');
            }
        }else{
            exit('禁止非法操作，今日头条APP源码价格：39999元。购买QQ：1013175107');
        }
            
    }
    private function pingUser($userInfo){
        $toutiao_uid=Db::name('member')->where(['toutiao_uid'=>$userInfo['user_id']])->cache(_cache('db'))->value('id');
        if(!$toutiao_uid){
            // 如果会员不存在增加会员
            $userData['toutiao_uid']=$userInfo['user_id'];
            $userData['img']=$this->upload($userInfo['avatar_url'],'touimg');
            $userData['nickname']=$userInfo['name'];
            $userData['qianming']='';
            $toutiao_uid=$this->user($userData);
        }
        return $toutiao_uid;
    }
    public function weitoutiao(){
        // echo htmlspecialchars_decode('[&quot;60b3020170705230635682099.jpg&quot;]');
        // exit();  
        // 我的苹果  device_id=23442276159  待测试
        $html=$this->get('http://it.snssdk.com/api/news/feed/v52/?category=weitoutiao&device_id=3680874445');
        $html=json_decode($html,true);
        foreach ($html['data'] as $k => $v) {
            $content=json_decode($v['content'],true);
            $url=$content['share_url'];
            preg_match("/\/share\/thread\/([\s\S]*?)\//", $url, $item_id);
            if(!empty($item_id['1'])){
                $item_id=$item_id['1'];
            }else{
                echo '<br><br><br>=======================================失败开始==========================================<br>'; 
                echo $content['share_url'];
                echo '<br>=======================================失败结束==========================================<br>';
                continue;
            }
            // if(!empty($content['video_id'])){
            //     preg_match("/\/a([\s\S]*?)\//", $url, $item_id);
            //     $item_id=!empty($item_id['1']) ? $item_id['1'] : '';
            // }else{
            //     preg_match("/\/dongtai\/([\s\S]*?)\//", $url, $item_id);
            //     $item_id=!empty($item_id['1']) ? $item_id['1'] : '';
            // }
            // if(!$item_id){
            //     preg_match("/group\/([\s\S]*?)\//", $url, $item_id);
            //     if(!$item_id){
            //         echo '<br><br><br>=======================================失败开始==========================================<br>'; 
            //         echo $content['share_url'];
            //         echo '<br>=======================================失败结束==========================================<br>';
            //        // dump($content);
            //         continue;
            //     }
            // }

            // 判断是否存在
            $item_idArticle=Db::name('article')->where(['toutiao_tiemId'=>$item_id])->value('id');
            if($item_idArticle){
                continue;
            }
            if(!empty($content['video_id'])){
                $mychanneltext='视频';
                $mychannel=3;
                $videoUrlView=$this->videoId($content['video_id']);
                if(!$videoUrlView){
                    echo '<br><br><br>=======================================失败下载失败开始==========================================<br>'; 
                    echo $item_id.'<br>'.$content['share_url']."<br>".$videoUrlView;
                    echo '<br>=======================================失败下载失败结束==========================================<br>';
                    dump($content);
                    continue;
                }
                $where['video']=$videoUrlView;
                $where['image']=$this->upload($content['large_image_list']['0']['url']);
                $where['title']=$content['title'];
                if($videoUrlView){
                    $videodate=$this->get(_imgUrl().$videoUrlView."?avinfo");
                    $videodate=json_decode($videodate,true);
                    if($videodate){
                        $videodate=videoDate($videodate['streams'][0]['duration']);
                        $where['videodate']=$videodate;
                    }
                }
            }else{
                if(!empty($content['content'])){
                    $contentBody=$content['content'];
                    $mychannel=1;
                    $mychanneltext='文章';
                    $where['description']=$content['content'];
                    $where['image']=!empty($content['large_image_list']['0']['url']) ? $this->upload($content['large_image_list']['0']['url']) : '';
                }
                if(!empty($content['large_image_list'])){
                    $images=[];
                    foreach ($content['large_image_list'] as $k => $v) {
                        $img=$this->upload($v['url']);
                        $images[]=$img;
                        if($k==1){
                            $where['image']=$img;
                        }
                    }
                    $mychannel=2;
                    $where['images']=json_encode($images);
                    $where['images']=str_replace('"','&quot;',$where['images']);
                    $mychanneltext='图片';
                }
                if(!$contentBody && !$images){
                    continue;
                }
            }

            if(empty($content['user'])){
                if(empty($content['user_info'])){
                    if(empty($content['media_info'])){
                        echo '<br><br><br>=======================================会员错误开始==========================================<br>';
                        echo $item_id.'<br>'.$content['share_url'];
                        dump($content); 
                        echo '<br>=======================================会员错误结束==========================================<br>';
                        continue;
                    }else{
                        $userInfo=$content['media_info'];
                    }
                }else{
                    $userInfo=$content['user_info'];
                }
            }else{
                $userInfo=$content['user'];
            }

             



            // 会员开始
            $toutiao_uid=Db::name('member')->where(['toutiao_uid'=>$userInfo['user_id']])->cache(_cache('db'))->value('id');
            if(!$toutiao_uid){
                // 如果会员不存在增加会员
                $userData['toutiao_uid']=$userInfo['user_id'];
                $userData['img']=$this->upload($userInfo['avatar_url'],'touimg');
                if(!empty($userInfo['screen_name'])){
                    $userData['nickname']=$userInfo['screen_name'];
                }else{
                    $userData['nickname']=$userInfo['name'];
                }
                 
                if(!empty($userInfo['desc'])){
                   $userData['qianming']=$userInfo['desc'];
                }else if(!empty($userInfo['description'])){
                    $userData['qianming']=$userInfo['description'];
                }else{
                    $userData['qianming']='';
                }
                $toutiao_uid=$this->user($userData);
            }

            $where['toutiao_tiemId']=$item_id;
            $where['weitoutiao']=1;
            $where['uid']=$toutiao_uid;
            $where['typeid']='0';
            $where['mychannel']=$mychannel;
            $time=time();
            if(!empty($content['create_time'])){
                $where['create_time']=$content['create_time'];
            }else{
                $where['create_time']=$time;
            }
            $where['update_time']=$time;
            $where['hide']=1;
            $where['des']=50;
            $where['tags']='';

            if(isset($where['content'])){
                $where['content'] = preg_replace("/\\\\u([0-9a-f]{3,4})/i", "&#x\\1;", $where['content']);
                $where['content'] = html_entity_decode($where['content'], null, 'UTF-8');
                $where['content'] = str_replace('\\', '', $where['content']);
                $where['content'] = str_replace("'.slice(6, -6", '', $where['content']);
                $where['content'] = trim($where['content'], '"');
                $where['image'] = $this->getImage($where['content']);

            }

            $id=Db::name('article')->insertGetId($where);
            if($id){
                $this->ping($id,$where['toutiao_tiemId']);
            }
           // dump($where);
            echo "微头条   --".$mychanneltext."--   [采集成功]<br><br>";
            unset($where);
            //dump($content);
            continue;
        }  
       // dump($html);
    }
    
    private function qiniu($url,$type=''){
        if(!$url){
            return '';
        }
        if(!$type){
            $type='.jpg';
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
 
    public function toutiao(){
     
        $type=input('type');

        if(!$type){
            $type='__all__';
        }
        // category ：news_hot(热点)  __all__(推荐)  weitoutiao(微头条)
        $html=$this->get("https://it.snssdk.com/api/news/feed/v53/?category=$type&device_id=23442276159");
        $html=json_decode($html,true);
        foreach ($html['data'] as $k => $v) {
            $content=json_decode($v['content'],true);
            // var_dump($content);
            if (empty($content['abstract'])) {
                continue;
            }else{
                // 2017年11月25日 13:57:38  修改
                if(!empty($content['info_desc'])){
                    if(strpos($content['info_desc'],'回答') === false){     //使用绝对等于
                    }else{
                        // dump($content['info_desc'].'||跳过1');
                        continue;
                    }
                }

                if(!empty($content['source'])){
                    if($content['source']=='悟空问答' || $content['source']=='专题'){ // 过滤
                        // dump($content['source'].'||跳过2');
                        continue;
                    }
                }
               // dump($content);
                $titleDb=db::name('article')->where(['title'=>$content['title']])->value('id');
                if($titleDb){
                    // echo '<br><br><br>=======================================('.$titleDb.')重复开始==========================================<br>'; 
                    // echo $titleDb;
                    // echo '<br>=======================================('.$titleDb.')重复结束==========================================<br>';
                 //  dump($content);
                    continue;
                } 
                $url=$content['share_url'];
                // return $url;
                // preg_match("/\/a([\s\S]*?)\//", $url, $item_id);
                preg_match("/group\/([\s\S]*?)\//", $url, $item_id);
                if(!$item_id){
                    
                    // if(!$item_id){
                    //     // echo '<br><br><br>=======================================失败开始==========================================<br>'; 
                    //     // echo $content['share_url'];
                    //     // echo '<br>=======================================失败结束==========================================<br>';
                    //     // dump($content);
                    //     continue;
                    // }
                }else{
                    $item_id=$item_id['1'];
                    if(!empty($content['video_id'])){
                        $videoId=$content['video_id'];
                        $urlHtml = '1';
                    }else{
                       // var_dump("http://www.toutiao.com/a".$item_id."/");
                        $urlHtml=$this->get("https://www.toutiao.com/a".$item_id."/");

                        $videoId='';
                    }
                    if(empty($content['user_info'])){
                        if(empty($content['media_info'])){
                            // echo '<br><br><br>=======================================会员错误开始==========================================<br>';
                            // echo $item_id.'<br>'.$content['share_url'];
                            // dump($content); 
                            // echo '<br>=======================================会员错误结束==========================================<br>';
                            continue;
                        }else{
                            $userInfo=$content['media_info'];
                        }
                    }else{
                        $userInfo=$content['user_info'];
                    }

                    // dump($content);
                    // continue;
                    // 会员开始
                    $toutiao_uid=Db::name('member')->where(['toutiao_uid'=>$userInfo['user_id']])->cache(_cache('db'))->value('id');
                    if(!$toutiao_uid){
                        // 如果会员不存在增加会员
                        $userData['toutiao_uid']=$userInfo['user_id'];
                        $userData['img']=$this->upload($userInfo['avatar_url'],'touimg');
                        $userData['nickname']=$userInfo['name'];
                        if(!empty($userInfo['description'])){
                           $userData['qianming']=$userInfo['description'];
                        }else{
                            $userData['qianming']='';
                        }
                         
                        $toutiao_uid=$this->user($userData);
                    }
                    // 会员结束

                
                     
                    //$urlHtml=$this->get("http://www.365yg.com/group/6436103047054623233/");
                    //preg_match('|videoid:\'([^\']++)|imsU',$urlHtml,$video);
                    if($videoId){  // 视频
                       
                        $upload='video';
                        $mychannel=3;
                        $videoUrlView=$this->videoId($videoId);
                        if(!$videoUrlView){
                            // echo '<br><br><br>=======================================失败下载失败开始==========================================<br>'; 
                            // echo $item_id.'<br>'.$content['share_url']."<br>".$videoUrlView;
                            // echo '<br>=======================================失败下载失败结束==========================================<br>';
                            // dump($content);
                            continue;
                        }
                        $where['video']=$videoUrlView;
                        if($videoUrlView){
                            $videodate=$this->get(_imgUrl().$videoUrlView."?avinfo");
                            $videodate=json_decode($videodate,true);
                            if($videodate){
                                $videodate=videoDate($videodate['streams'][0]['duration']);
                                $where['videodate']=$videodate;
                            }
                        }

                        // echo '<br><br><br>=======================================视频开始==========================================<br>'; 
                        // echo $item_id.'<br>'.$content['share_url']."<br>".$videoUrlView;
                        // echo '<br>=======================================视频结束==========================================<br>'; 
                    }else{  //文章
                        preg_match("/content:([\s\S]*?),\\n/",$urlHtml,$article);
   
                        // preg_match("/<div class=\"article-content\">([\s\S]*?)<\/body>/",$urlHtml,$article);
                        if($article){
                            $article = htmlspecialchars_decode(substr(substr($article[0],10),0, strlen($article[0])-13));
                            $data=Db::name('member_config')->where('type','sdkQiniu')->where('name','qiniuUrl')->find();
                            $upload='article';
                            $mychannel=1;

                            $article2 = $this->change($article);
                         
                            preg_match_all("/<img(.*?)>/", $article2,$imgs);
                            if($imgs){
                                foreach($imgs[0] as $k=>$v){
                                    preg_match_all("/http:(.*?)\" img_width/", $v,$img);
                                    if($img[0]){
                                        //替换今日头条图片路径
                                        $new_img_b = "<img src='".substr($img[0][0],0,strlen($img[0][0])-11)."'/>";
                                        //上传图片并替换
                                        // $new_img = $this->upload('http:'.$img[1][0],'article');
                                        // $new_img = $data['text'].$new_img;
                                        // $new_img_b = "<img src='".$new_img."'/>";
                                        $article=str_replace($v,$new_img_b,$article);
                                    }
                                }
                            }
                            // return $article;
                            // 开始下载内容图片
                            // preg_match_all("/http:(.*?)\" img_width/", $article,$img);
                            // $image='';
                            // if($img){
                            //     foreach ($img[1] as $k  =>  $v) {
                            //         $img_1='http:'.$v;
                            //         $img_2=$this->upload($img_1,'article');
                            //         return array($img_1, $img_2);
                            //         if($img_1 && $img_2){
                            //             $article=str_replace($img_1,$img_2,$article);
                            //         }
                            //     }
                            // }
                            // 下载结束
                            $article=preg_replace("/(img_width.*?)\"(.*?)\"/si","",$article); 
                            $article=preg_replace("/(img_height.*?)\"(.*?)\"/si","",$article); 
                            $article=preg_replace("/(onerror.*?)\"(.*?)\"/si","",$article); 
                            $article=preg_replace("/(inline.*?)\"(.*?)\"/si","",$article);
                            $article=preg_replace("/<(p.*?)>/si","<p>",$article); //过滤P标签
                            $article=preg_replace("/<(\/?figure.*?)>/si","",$article); //过滤figure标签
                            $article=preg_replace("/<(\/?a.*?)>/si","",$article); //过滤a标签
                            $article=preg_replace("/(data.*?)\"(.*?)\"/si","",$article); //过滤data属性
                            $article=preg_replace("/(width.*?)\"(.*?)\"/si","",$article); //过滤width属性
                            $article=preg_replace("/(alt.*?)\"(.*?)\"/si","",$article); //过滤alt属性
                            $article=preg_replace("/(style.*?)\"(.*?)\"/si","",$article); //过滤style属性
                            $where['content']=$article;


                            // echo '<br><br><br>=======================================文章开始==========================================<br>';
                            // echo $item_id.'<br>'.$content['share_url']."<br>";
                            // echo '<br>=======================================文章结束==========================================<br>';
                        }else{  // 图片
                            $urlHtml2 = $this->change($urlHtml);
                            preg_match("/var gallery =([\s\S]*?)]};/",$urlHtml2,$images);
                            // dump("======1======");
                            // dump($content);
                            // dump("======2======");
                            // echo $item_id."图片";
                            // dump("======3======");
                            // dump($urlHtml);
                            //  dump("======4======");
                              
                            if(!$images){
                                // 2017年11月24日 18:29:34 更新读取图片规则
                            //    preg_match("/gallery: JSON.parse\(\"([\s\S]*?)\"\),/",$urlHtml,$images);
         
                               
                                // echo '<br><br><br>=======================================图片失败开始1==========================================<br>';
                                //     echo $item_id.'<br>'.$content['share_url'];
                                     
                                // // dump($content);
                                // echo '<br>=======================================图片失败结束1==========================================<br>';
                                continue;
                            }
                            $images=json_decode($images['1']."]}",true);
                            $upload='images';
                            $mychannel=2;

                            if($images){
                                $img=[];
                                foreach ($images['sub_images'] as $k => $v) {
                                    $urlimg=str_replace('.webp','',$v['url']);
                                    $urlimg=str_replace('origin','large',$urlimg);
                                    $urlimg=str_replace('//','http://',$urlimg);
                                   // echo $urlimg."<br>";
                                    $img[$k]['img']=$this->upload($urlimg,'images');
                                    $img[$k]['img_text']=$images['sub_abstracts'][$k];
                                  //  echo "<br>";
                                }
                            }
                         //   exit();
                            $where['images']=json_encode($img);

                            // echo '<br><br><br>=======================================图片开始==========================================<br>';
                            // echo $item_id.'<br>'.$content['share_url']."<br>".$where['images'];
                            // echo '<br>=======================================图片结束==========================================<br>';
                        }
                    }
                    
                   // dump($content);

                    // where
                    if(empty($content['title'])){
                        dump($content);
                    }
                    $where['title']=$content['title'];
                    if(!empty($content['keywords'])){
                        
                       $where['tags']=preg_replace("/\s/","",$content['keywords']);
                       $where['keywords']=$where['tags'];
                    }
                     
                    if(!empty($content['abstract'])){
                       $where['description']=$content['abstract'];
                    }
                     
                    $where['uid']=$toutiao_uid;
                    if(!empty($content['middle_image']['url'])){
                        $middle_image=$content['middle_image']['url'];
                        $middle_image=str_replace('.webp','',$middle_image);
                        $middle_image=str_replace('list/300x196','video1609',$middle_image);
                        $where['image']=$this->upload($middle_image,$upload);
                    }

                    if(!empty($content['tag'])){
                        $where['typeid']=$this->catename($content['tag']);
                    }else{
                        $where['typeid']='news';
                    }
                    $where['toutiao_tiemId']=$item_id;
                    $where['mychannel']=$mychannel;
                    $where['source']=$userInfo['name'];
                    // $time=time();
                    $shijian=date('Y-m-d H:i:s');
                    $wandian=date('Y-m-d H:i',strtotime("-4 minute"));
                   $timecuo=strtotime($shijian);
                   $timecuos=strtotime($wandian);
                   $time=$timecuos;//rand($timecuos,$timecuo);
                    if(!empty($content['publish_time'])){
                        $where['create_time']=$content['publish_time'];
                    }else{
                        $where['create_time']=$time;
                    }
                    $where['update_time']=$time;
                    $where['hide']=1;
                    $where['tuijian']=1;
                    $where['des']=50;


                    if(isset($where['content'])){
                        $where['content'] = preg_replace("/\\\\u([0-9a-f]{3,4})/i", "&#x\\1;", $where['content']);
                        $where['content'] = html_entity_decode($where['content'], null, 'UTF-8');
                        $where['content'] = str_replace('\\', '', $where['content']);
                        $where['content'] = str_replace("'.slice(6, -6", '', $where['content']);
                        $where['content'] = trim($where['content'], '"');
                        $where['image'] = $this->getImage($where['content']);
                    }

                    $id=Db::name('article')->insertGetId($where);
                    $toutiao_tiemId=$where['toutiao_tiemId'];
                    $fenleis=[1=>'文章',2=>'图片',3=>'视频'];
                    echo "【".$fenleis[$mychannel]."】".$where['title']."   ----   [采集成功]<br><br>";
                    unset($where);
                    if($id){
                        $this->ping($id,$toutiao_tiemId);
                    }
                }
            }
            
             
             
        }  
        
    }
    
    // 发送验证码
    public function code(){
        if(request()->isPost()){
            // 检测账户和密码是否为空
            $username=input('post.username') ? input('post.username') : '';
            $text=input('post.text') ? input('post.text') : '';
            $type=input('post.type') ? input('post.type') : '';

            //开始发送验证码
            $code=_code($username,$text,$type);
            if($code==1){
                 cookie('code', time()+120, 120);
                $data=['ret'=>'发送成功，验证码有效期2分钟'];
            }else{
                $data=['err'=>$code];
            }
            
            echo json_encode($data);
        }
    }
    // 图片函数处理
    private function img($img){
        getImageInfo($img);
        exit();
        //判断文件夹是否存在
        $d=ROOT_PATH . 'public/uploads';
        $date=date('Ymd');
        $d=$d.'/'.$date.'/';
        if(!file_exists($d)){ 
            mkdir($d);
        }
        // 获取图片格式
        $geshi=explode('.', $img);
        $geshi=array_pop($geshi);
        // 检测图片格式范围
        $arrayjso=['jpg','gif','png'];
        if(!in_array($geshi,$arrayjso)){
            return '图片格式错误';
        }

        //开始下载图片
        $img=file_get_contents($img);
        if(!$img){
            return ''; 
        }
        $geshis=md5($img.rand(11111,999999)).'.'.$geshi;
        $geshisa=$date.'/'.md5($img).'.'.$geshi;
        $d=$d.'/'.$geshis;
        file_put_contents($d,$img);
        return "/public/uploads/".$geshisa;  
    }
 
    // 视频随机数
    private function right_shift($val, $n){
        return $val >= 0?$val:(4294967296+$val);
    }
    // 视频解析地址
    private function videoId($videoId){
        //视频开始
        //preg_match('|videoid:\'([^\']++)|imsU',$body,$videoId);
        $a = mt_rand(100000000,999999999);
        $b = mt_rand(100000000,999999999);
        $r = $a.$b; 
        /*参数s的构造如下：*/
        $crc32cs="/video/urls/v/1/toutiao/mp4/".$videoId."?r=".$r;
        $crc32 = crc32($crc32cs);
        $s= $this->right_shift($crc32,0);

        //拼接参数
        $videoJson="http://i.snssdk.com/video/urls/v/1/toutiao/mp4/".$videoId."?r=".$r."&s=".$s."&callback=tt_playerzfndr";
        $videoJson=$this->get($videoJson);
        preg_match_all('/main_url":"(.*?)"/is', $videoJson, $videoUrlView);
        //最终得到值
        $videoUrlView=$videoUrlView[1][0];
        //最终地址值
        $videoUrlView=base64_decode($videoUrlView);
        $videoUrlView=$this->qiniu($videoUrlView,'.mp4');
        return $videoUrlView;
        //视频结束
    }
    // 模拟浏览器
    private function get($url){
        $header = "user-agent:Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.26 Safari/537.36 Core/1.63.6776.400 QQBrowser/10.3.2601.400";
        $cookie = "tt_webid=6638120247277716999; __utma=24953151.217114383.1545557810.1545557810.1545557810.1; __utmc=24953151; __utmz=24953151.1545557810.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); tt_webid=6638120247277716999; UM_distinctid=167da6cb8cb592-0b4d3995c4fb8f-335e4979-144000-167da6cb8ccc32; csrftoken=d029be4d10f8c12c9a4cbbe6fabe0b68; __lnkrntdmcvrd=-1; CNZZDATA1259612802=214011780-1545552526-%7C1545557926; __tasessionId=1tflcj2i01545561045052";
        $headers = array($header);
        // $proxy = "119.127.17.162";
        // $proxyport = "3128";
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  
        // return file_get_contents($url,false, stream_context_create($arrContextOptions));
        // exit();
        $url = $url;//以百度为例
        $data = array();
        $curl = curl_init();//初始化一个curl会话；
        curl_setopt($curl,CURLOPT_URL,$url);//指定访问的url
        curl_setopt($curl,CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl,CURLOPT_COOKIE,$cookie);
        // curl_setopt($curl,CURLOPT_PROXY,$proxy);
        // curl_setopt($curl,CURLOPT_PROXYPORT,$proxyport);
        curl_setopt($curl,CURLOPT_POST,$data);//post请求的参数
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl,CURLOPT_ENCODING, 'gzip');
        curl_setopt($curl,CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);//获取的信息以文件流的方式返回
        $data = curl_exec($curl);//执行curl;
        curl_close($curl); // 关闭CURL会话
        return $data;
    }
    // 栏目分类 返回ID
    private function catename($name){ 
        if(!$name){
            return 'news';
        }
        if($name=='news_others'){
            return 'news';
        }
        $where['toutiao_name']=$name;
       // $a=['article'=>'mychannel_article','gallery'=>'mychannel_images','video'=>'mychannel_video'];
        //$where[$a[$mychannel]]=1;
        // $b=[1=>'mychannel_article',2=>'mychannel_images',3=>'mychannel_video'];
        // $where[$mychannelDb]=1;
      //  echo $a[$mychannel];
        $data=Db::name('typeid')->where($where)->cache(_cache('db'))->value('id');
        if(!$data){
            $time=time();
            $where['title']=$name;
            $where['isdefault']=2;
            $where['create_time']=$time;
            $where['update_time']=$time;
            $where['hide']=1;
            $where['des']=50;
            $data=Db::name('typeid')->insertGetId($where);
            // $typeid=Db::name('typeid')->where(['title'=>$name])->cache(_cache('db'))->value('id');
            // if($typeid){
            //     // $b=[1=>'mychannel_article',2=>'mychannel_images',3=>'mychannel_video'];
            //     // $mychannelDb=$b[$mychannel];
            //     Db::name('typeid')->update(['id'=>$typeid,$where[$a[$mychannel]]=>1]);
            // }else{
            //     $time=time();
            //     $where['isdefault']=2;
            //     $where['create_time']=$time;
            //     $where['update_time']=$time;
            //     $where['hide']=1;
            //     $where['des']=50;
            //     $data=Db::name('typeid')->insertGetId($where);
            // }
             
        }
        return $data;
    }
    // 下载图片
    private function upload($img,$mychannel=''){
        // 改用七牛上传
        $img=$this->qiniu($img);
        return $img;
        exit();
        if(!$img){
            return;
        }
        //判断文件夹是否存在
        $d=ROOT_PATH . 'public/uploads/'.$mychannel;
        $date=date('Ymd');
        $d=$d.'/'.$date.'/';
        if(!file_exists($d)){ 
            mkdir($d);
        }
        // 获取图片格式
        //开始下载图片
        $img=file_get_contents($img);
        if(!$img){
            return ''; 
        }
        $rand=rand(10000,999999);
        $geshis=md5($img).$rand.'.jpg';
        $d=$d.'/'.$geshis;
        file_put_contents($d,$img);
        return "/public/uploads/".$mychannel."/".$date."/".$geshis;  
    }
    // 下载图片
    private function uploadVideo($img){
        if(!$img){
            return '';
        }
        //判断文件夹是否存在
        $d=ROOT_PATH . 'public/uploads/videos';
        $date=date('Ymd');
        $d=$d.'/'.$date.'/';
        if(!file_exists($d)){ 
            mkdir($d);
        }
        //开始下载视频
        $img=file_get_contents($img);
        if(!$img){
            return ''; 
        }
        $geshis=md5($img).'.mp4';
        $d=$d.'/'.$geshis;
        file_put_contents($d,$img);
        return "/public/uploads/videos/".$date.'/'.$geshis;  
    }
    // public function videourl(){
    //     $url='http://v1.365yg.com/8039e1758f8d68dd273f626dc03795be/5955e9e1/video/m/22081475306b42d4f3db9bc811918df9f2611496fe0000237395666f25/';
    //     $url=$this->uploadVideo($url);
    //     echo $url;
    // }
    // 添加会员
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
 
    private function doCurl($url, $data=array(), $header=array(), $timeout=30){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        $response = curl_exec($ch);
        if($error=curl_error($ch)){
            die($error);
        }
        curl_close($ch);
        return $response;
    }
 
    // 采集优酷视频
    public function youku(){
       // header("Content-Type:text/html;charset=utf-8");
        $html=$this->doCurl("http://news.youku.com/index/jrrm");
        preg_match_all("/<div class=\"v\" >([\s\S]*?)<div class=\"v-meta-overlay\">/", $html, $content);
        $content=$content[1];
        foreach ($content as $k => $v) {
            // 标题
            preg_match("/title=\"(.*?)\"><\/a>/", $v, $title);
            // 判断标题是否存在
            $titleDb=Db::name('article')->where(['title'=>$title['1'],'mychannel'=>3])->value('id');
            if($titleDb){
                continue;
            }
            // 缩略图
            preg_match("/<img src=\"(.*?)\"/", $v, $image);
            // 播放时间
            preg_match("/<span class=\"v-time\">(.*?)<\/span>/", $v, $date);
            // 优酷ID
            preg_match("/<a href=\"http:\/\/v.youku.com\/v_show\/id_(.*?).html\"/", $v, $youkuId);
            if(!$youkuId['1']){
                continue;
            }
            // 优酷视频ID
            $htmlView=$this->doCurl("http://v.youku.com/v_show/id_".$youkuId['1'].".html");

            preg_match("/videoId:\"(.*?)\"/", $htmlView, $videoId);
            preg_match("/videoOwner:\"(.*?)\"/", $htmlView, $videoOwner);
            if(!$videoId['1'] || !$videoOwner['1']){
                continue;
            }
            $userJosn=$this->doCurl('http://v.youku.com/action/sub?beta&callback=jQuery&vid='.$videoId[1].'&ownerid='.$videoOwner[1]);
            preg_match("/window.jQuery && jQuery\((.*?)\);/", $userJosn, $userJosn);
            $userJosn=json_decode($userJosn[1],true);
            if(!$userJosn){
                continue;
            }
            // 会员开始
            $youku_uid=$videoId[1].'|'.$videoOwner[1];
            $youku_uidDb=Db::name('member')->where(['youku_uid'=>$youku_uid])->cache(_cache('db'))->value('id');
            if($youku_uidDb){
                $youku_uid=$youku_uidDb; 
            }else{
                // 如果会员不存在增加会员
                $youkuWhere['youku_uid']=$youku_uid;
                $youkuWhere['nickname']=$userJosn['data']['title'];
                $img2=str_replace(';3,50x', '', $userJosn['data']['thumb']);
                $youkuWhere['img']=$this->upload($img2,'touimg');
                $youku_uid=$this->userYouku($youkuWhere);
            }
            if(!$youku_uid){
                 continue;
            }
             
            // 会员结束
            $where['title']=$title['1'];
            $where['video']=$youkuId['1'];
            $where['uid']=$youku_uid;
            $where['videoType']='youku';
            $where['videodate']=$date['1'];
            $where['mychannel']=3;
            $where['typeid']=1;
            $where['image']=$this->upload("http:".$image['1'],'video');
            $time=time();
            $where['create_time']=$time;
            $where['update_time']=$time;
            $where['hide']=1;
            $where['des']=50;
            $where['source']=$userJosn['data']['title'];

            if(isset($where['content'])){
                $where['content'] = preg_replace("/\\\\u([0-9a-f]{3,4})/i", "&#x\\1;", $where['content']);
                $where['content'] = html_entity_decode($where['content'], null, 'UTF-8');
                $where['content'] = str_replace('\\', '', $where['content']);
                $where['content'] = str_replace("'.slice(6, -6", '', $where['content']);
                $where['content'] = trim($where['content'], '"');
                $where['image'] = $this->getImage($where['content']);
            }

            $data=Db::name('article')->insertGetId($where);
            dump($where);
            unset($where);
        }
    }
    private function userYouku($data){
        $map['password']=md5('ffxiang');
        $map['hide']=1;
        $time=time();
        $map['create_time']=$time;
        $map['update_time']=$time;
        $map['youku_uid']=$data['youku_uid'];
        $map['nickname']=$data['nickname'];
        $map['img']=$data['img'];
        $db=Db::name('member')->insertGetId($map);
        return $db;
    }
    // 彩票资讯 
    public function caipiao(){
        $page=input('page');
        if($page!=1){
            $page='_'.$page;
        }else{
            $page='';
        } 
        $html=$this->get('http://www.zhcw.com/qlc/caiminzhijia/index'.$page.'.shtml');

        preg_match_all("/<a href=\"\/qlc\/caiminzhijia\/([\s\S]*?).shtml\"[\s\S]*?>([\s\S]*?)<\/a>/",$html,$article);
        $data=[];
        foreach ($article[1] as $k => $v) {
            $data[$k]['id']=$v;
            $data[$k]['title']=$article[2][$k];
        }
       // dump($data);
        echo json_encode($data);
    }
    // 彩票资讯 
    public function caipiao_view(){
        $id=input('id');
        $html=$this->get('http://www.zhcw.com/qlc/caiminzhijia/'.$id.'.shtml');
        preg_match("/<div id=\"news_content\">([\s\S]*?)<\/div>/",$html,$article);
         
        echo json_encode([$article[1]]);
    
    }
    // 头条视频地址
    private function toutiaoVideoUrlId($videoId){
        //视频开始
        //preg_match('|videoid:\'([^\']++)|imsU',$body,$videoId);
        $a = mt_rand(100000000,999999999);
        $b = mt_rand(100000000,999999999);
        $r = $a.$b; 
        /*参数s的构造如下：*/
        $crc32cs="/video/urls/v/1/toutiao/mp4/".$videoId."?r=".$r;
        $crc32 = crc32($crc32cs);
        $s= $this->right_shift($crc32,0);

        //拼接参数
        $videoJson="http://i.snssdk.com/video/urls/v/1/toutiao/mp4/".$videoId."?r=".$r."&s=".$s."&callback=tt_playerzfndr";
        $videoJson=$this->get($videoJson);
        preg_match_all('/main_url":"(.*?)"/is', $videoJson, $videoUrlView);
        //最终得到值
        $videoUrlView=$videoUrlView[1][0];
        //最终地址值
        $videoUrlView=base64_decode($videoUrlView);

        return $videoUrlView;
        //视频结束
    }
    public function toutiaoVideoUrl(){
        $id=input('id/d');
        if(!$id){
            exit("技术QQ：1013175107");
        }
        $urlHtml=$this->get("http://www.365yg.com/group/6436103047054623233/");
        preg_match('|videoid:\'([^\']++)|imsU',$urlHtml,$video);
        $url=$this->toutiaoVideoUrlId($video['1']);
        echo $url;
    }

    // 火车头接口
    public function huochetou(){
        $pwd=input('pwd');
        if(!$pwd || $pwd != 'qq1013175107'){
            exit("密码错误");
        }
        $title=input('title');
        $content=input('content');
        if(!$title){
            exit("标题不能为空");
        }else{
            $Dbtitle=Db::name('article')->where(['title'=>$title])->value('id');
            if($Dbtitle){
                exit("标题已存在");
            }
        }

        if(!$content){
            exit("内容不能为空");
        }
        $typeid=input('typeid/d');
        $article=htmlspecialchars_decode($content);
        $article2 = $this->change($article);

        // 开始下载内容图片
        preg_match_all("/src=\"(.*?)\"/", $article2,$img);
        $image='';
        if($img){
            foreach ($img[1] as $k  =>  $v) {
                $img_1=$v;
                $img_2=$this->upload($img_1,'article');
                if($k==0){
                    $data['image']=$img_2;
                }
                if($img_1 && $img_2){
                    $article=str_replace($img_1,$img_2,$article);
                }
            }
            // 下载结束
            $article=preg_replace("/(img_width.*?)\"(.*?)\"/si","",$article); 
            $article=preg_replace("/(img_height.*?)\"(.*?)\"/si","",$article); 
            $article=preg_replace("/(onerror.*?)\"(.*?)\"/si","",$article); 
            $article=preg_replace("/(inline.*?)\"(.*?)\"/si","",$article);
            $article=preg_replace("/<(p.*?)>/si","<p>",$article); //过滤P标签
            $article=preg_replace("/<(\/?figure.*?)>/si","",$article); //过滤figure标签
            $article=preg_replace("/<(\/?a.*?)>/si","",$article); //过滤a标签
            $article=preg_replace("/(data.*?)\"(.*?)\"/si","",$article); //过滤data属性
            $article=preg_replace("/(width.*?)\"(.*?)\"/si","",$article); //过滤width属性
            $article=preg_replace("/(alt.*?)\"(.*?)\"/si","",$article); //过滤alt属性
            $article=preg_replace("/(style.*?)\"(.*?)\"/si","",$article); //过滤style属性
        }
         
        $data['content']=$article;
        $data['content'] = preg_replace("/\\\\u([0-9a-f]{3,4})/i", "&#x\\1;", $data['content']);
        $data['content'] = html_entity_decode($data['content'], null, 'UTF-8');
        $data['content'] = str_replace('\\', '', $data['content']);

        $data['mychannel']=1;
        $data['title']=$title;
        $data['typeid']=$typeid;
        $time=time();
        $data['create_time']=$time;
        $data['update_time']=$time;
        $data['hide']=1;
        $data['des']=50;
        $data['weitoutiao']=0;

        if(isset($where['content'])){
            $data['content'] = preg_replace("/\\\\u([0-9a-f]{3,4})/i", "&#x\\1;", $data['content']);
            $data['content'] = html_entity_decode($data['content'], null, 'UTF-8');
            $data['content'] = str_replace('\\', '', $data['content']);
            $data['content'] = str_replace("'.slice(6, -6", '', $data['content']);
            $data['content'] = trim($data['content'], '"');
            $data['image'] = $this->getImage($data['content']);
        }

        Db::name('article')->insertGetId($data);
        echo "成功";
    }
    public function asdasd(){
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  
        $a = file_get_contents("http://www.toutiao.com/a6495221718863315470", false, stream_context_create($arrContextOptions));

 
       // $a=file_get_contents("http://www.toutiao.com/a6495221718863315470");
        dump($a);
    }




    // 2017年12月26日 20:38:14 增加视频
    public function xiaoshipin(){
        $html=$this->get('http://is.snssdk.com/api/news/feed/v71/?version_code=6.4.7&app_name=news_article&vid=000A86C2-2AC6-42E0-88DE-BB44BF056B49&device_id=23442276159&channel=App%20Store&resolution=1242*2208&aid=13&ab_version=234590,201715,238777,233498,237552,239492,240132,236808,206076,201712,229304,240820,232362,238512,241213,239097,236048,170988,170989,205393,236875,157554,235720,238775,238827,225540,241214,237666,239965,235934,240867,240383,239820,230620,215308,202918,237736,219554,237644,228150,227312,214069,219132,236039,236052,240895,238289,234407,228168,240726,228859,228759,241167,205525,241025,237291,229247,240446,210246,241181,239087,239024,218094&ab_feature=z2&ab_group=z2&openudid=24072c1af0fd0df421e65d2831e0db1be5e61656&idfv=000A86C2-2AC6-42E0-88DE-BB44BF056B49&ac=WIFI&os_version=11.2.1&ssmix=a&device_platform=iphone&iid=19602172378&ab_client=a1,f2,f7,e1&device_type=iPhone%206S%20Plus&idfa=D132CE99-E1DD-46DB-A6B0-F8A75501EC2C&language=zh-Hans-CN&support_rn=4&image=1&list_count=0&count=20&tt_from=unknown&category=hotsoon_video&city=%E5%8D%97%E6%98%8C&last_refresh_sub_entrance_interval=1514291740&user_city=%E5%8D%97%E6%98%8C&refer=1&refresh_reason=0&list_entrance=main_tab&st_time=34094&session_refresh_idx=1&strict=0&LBS_status=authroize&detail=1&min_behot_time=0&loc_mode=1&cp=54A0462b4221Dq1');
        $html=json_decode($html,true);
        foreach ($html['data'] as $k => $v) {
            $content=json_decode($v['content'],true);
            dump($content);
            echo "<br>=============================================<br>";
        }
    }

    public function cityDingwei(){
        $latitude=input('latitude') ? input('latitude') : '';
        $longitude=input('longitude') ? input('longitude') : '';
        $getData=file_get_contents('http://api.map.baidu.com/geocoder/v2/?ak=3VxTBFR3asxTZoKT9EMPFNdxHcTAtqq0&location='.$latitude.','.$longitude.'&output=json&pois=1');
        $getData=json_decode($getData,true);  
        if($getData['status']==0){
            $city=$getData['result']['addressComponent']['city'];
            $city=str_replace('市','',$city);
            echo json_encode(['ret'=>$city]);
        }
    }
     // 测试加入记录
    public function ceshidata(){
        return;
        for ($i=0; $i <100 ; $i++) { 
            $type=rand(0,1);
            echo Db::name('yaoqing_records')->insert(['uid'=>'6727','content'=>$type ? '阅读奖励' : '邀请奖励','type'=>$type,'money'=>rand(1,99999),'time'=>time()]);
        }
    }
    public function mingxi(){ 
      
        $where['hide']=1;
        if(input('typeid/d')){
            $where['typeid']=input('typeid/d');
        }
        $data=Db::name('shoplist')->field('id,title,image,jinbi,money')->where($where)->select();
        foreach ($data as $k => $v) {
            $data[$k]['jinbi']=$v['jinbi'].'金币';
            $data[$k]['money']=$v['money'].'元';
            $data[$k]['image']=_imgUrl().$v['image'];
        }
      
  
  
        dump($data);
        return;
        $money_login_money=100;
        $uid='1';
        $money_login=_moneyDb(
            [
                'uid'=>$uid,
            
                'money'=>['money'=>$money_login_money,'content'=>'金币赠送','type'=>1]
            ]
        );
        echo ($money_login);
    }
    public function ceshi(){
        $data=Db::name('shoplist_records')->fetchSql(true)->group('uid')->having('count(id)>3')->order('id desc')->limit(10)->select();
        echo $data;
    }

    public function change($str)
    {
        $str = preg_replace("/\\\\u([0-9a-f]{3,4})/i", "&#x\\1;", $str);
        $str = html_entity_decode($str, null, 'UTF-8');
        $str = str_replace('\\', '', $str);
        $str = str_replace("'.slice(6, -6", '', $str);
        $str = trim($str, '"');
        return $str;
    }

    public function getImage($article)
    {
        // 开始下载内容图片
        preg_match_all("/src=\"(.*?)\"/", $article,$img);
        $image='';
        if($img) {
            foreach ($img[1] as $k => $v) {
                $img_1 = $v;
                $img_2 = $this->upload($img_1, 'article');
                if ($k == 0) {
                    return $img_2;
                }
            }
        }
        return '';
    }

}
