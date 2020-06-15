<?php
namespace app\api\controller;
use app\api\controller\Common;  // 公用   
use think\Db;       //数据库
use think\Session;  // session
use think\Request; //获取请求类型
use think\Validate;

use Qiniu\Auth as Auth;
use Qiniu\Storage\UploadManager;
set_time_limit(0);
class Member extends Common
{
    public $member=null;
    public function __construct($tokenaaa=''){

        parent::__construct();

      //  $token="pyx341AH3RDIZM3y41q1fIm7vvYWLFgryxLVw7HelNxHYKMlkG+EC+k4/souIXExfIkBY6ajy90vRg";
//pyx341AH3RDIZM3y41q1fIm7vvYWLFgryxLVw7HelNxHYKMlkG+EC+k4/souIXExfIkBY6ajy90vRg
        // echo $tokenaaa;
        
        // exit();
        // 读取会员配置 - 开始
        $config=Db::name('member_config')->where('name','switch')->value('text');
        unset($data);   // 销毁变量
        // 读取会员配置 - 结束
        // 会员是否开启 - 开始
        if(!$config || $config==0){
            exit(json_encode(['err'=>'会员未开放']));
        }

        // 会员是否开启 - 结束
        // 获取登录token
        $token=Session::get('user','ffxiangUser') ? Session::get('user','ffxiangUser') : input('post.token');
     //   $token="oHlx5wQF1hbOb4b541rsNImlr/4ZJRFmxgCakObfwtsXaqkoyG7WW+c7rs4oLXRtetpXPfGqmNZyFKk";
        if(!$token){
            if($tokenaaa){
                $token=$tokenaaa;

            }else{
                echo json_encode(['err'=>'token不正确']);
                // exit();
            }
             
        }
          
  

        // 解密token UID
        $uid=_Dencrypt($token,'D');
        
        if(!$uid){
            echo json_encode(['err'=>'会员UID不正确，请重新获取token']);
            exit();
        }
        // 解密成功获取会员信息
        $member=_user($uid);
        // 检测会员限制
        if($member){
            switch ($member['hide']) {
                case '0':
                    $recording=_records($member['id'],'API操作,账户被禁止');
                    if($recording){
                        $data=['err'=>'无法登录，原因是账户已被封号'];
                    }
                    echo json_encode($data);
                    break;
                    exit();
                case '2':
                    $recording=_records($member['id'],'API操作,账户正在审核');
                    if($recording){
                        $data=['err'=>'账户正在审核，请等待客服处理'];
                    }
                    echo json_encode($data);
                    break;
                    exit();
                case '3':
                    $recording=_records($member['id'],'API操作，账户审核被拒绝');
                    if($recording){
                        $data=['err'=>'账户审核被拒绝，拒绝原因：'.$member['hidetent']];
                    }
                    echo json_encode($data);
                    break;
                    exit();
            }
        }else{
            echo json_encode(['err'=>'会员不存在']);
            exit();
        }
        $this->member=$member;
    }
    public function index(){
        exit(json_encode(_ajaxError()));
    }
    // 获取会员信息
    public function info(){ 
        // 会员信息
        $member=_user($this->member['id']);
        $member['dongtai']=Db::name('member_guanzhu')->where(['uid'=>$member['id']])->count();
        $member['fensi']=Db::name('member_guanzhu')->where(['gz_uid'=>$member['id']])->count();
        $fangkeDB=Db::name('member_fangke')->where(['f_uid'=>$member['id']])->field('f_uid')->whereTime('time', 'week')->count();
        $member['fangke']=$fangkeDB;
        $member['img']=_imgUrl().$member['img'];
        // 我的关注
        $guanzhu=Db::name('member_guanzhu')->where(['uid'=>$member['id']])->field('gz_uid')->limit(6)->select();
       
        foreach ($guanzhu as $k => $v) { 
            $user=_user($v['gz_uid']);
            $guanzhu[$k]['username']=$user['username'];
            $guanzhu[$k]['img']=_imgUrl().$user['img'];
            $guanzhu[$k]['uid']=$user['id'];
        }
        $member['guanzhu']=$guanzhu;

          //金币转零钱
        if(date("H:i:s")>"22:00:00")
        {   $userid=$member['id'];
            $where['uid']=$userid;
            $where['state']=1;
            $mingt=date('Y-m-d',strtotime('+1 day'));
            $zuot=date('Y-m-d',strtotime('-1 day'));
            $where['time']=['< time',$mingt];
            $where['time']=['> time',$zuot];

        
            $yaoqing=Db::name('yaoqing')->where(['uid'=>$userid])->select();
             $tijilu=Db::name('yaoqing_records')->where($where)->select();
   if($yaoqing[0]['jinbi']>=100 && !$tijilu)
        {
                 $yushu=($yaoqing[0]['jinbi']%100);
                $tijin=($yaoqing[0]['jinbi']-$yushu)/100;
                $jinbi=$yaoqing[0]['jinbi']-$yushu;

                 // $uid=$value['uid'];   
                 
                 $result = Db::execute('update fx_yaoqing set money =money+'.$tijin.' where uid = '.$userid.' ');

                  $results = Db::execute('update fx_yaoqing set jinbi ='.$yushu.' where uid = '.$userid.' ');
                      
                      $dates=date("Y-m-d H:i:s");
                      $date=strtotime($dates);
                     //插入流水表
                      $appidmap['uid']=$userid;
                      $appidmap['content']='金币转零钱';
                        $appidmap['time']=$date;
                        $appidmap['money']=$tijin;
                        $appidmap['type']=0;
                         $appidmap['data']=0;
                         $appidmap['state']=1;

                        $appidmapdb=Db::name('yaoqing_records')->insertGetId($appidmap);

                         //
                      $appidmaps['uid']=$userid;
                      $appidmaps['content']='金币转零钱';
                        $appidmaps['time']=$date;
                        $appidmaps['money']=$jinbi;
                        $appidmaps['type']=1;
                         $appidmaps['data']=1;
                         $appidmaps['state']=1;

                        $appidmapdbs=Db::name('yaoqing_records')->insertGetId($appidmaps);
                  }

                 }
                    // }


        echo json_encode(['ret'=>$member]);
    }
    // 头像、昵称修改
    public function nickname(){
        // 检测账户和密码是否为空
        $nickname=input('post.nickname','','strip_tags') ? input('post.nickname','','strip_tags') : '';
        //开始验证
        $validate = new Validate([
            'nickname|昵称'        =>      'require|max:15',
        ]);
        $validata=[
            'nickname'        =>      $nickname,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        //结束验证
        $data=Db::name('member')->where('id',$this->member['id'])->update(['nickname'=>$nickname]);
        if($data){
            echo json_encode(['ret'=>'修改成功']);
        }else{
            echo json_encode(['err'=>'修改失败']);
        }
    }
    // 签名
    public function qianming(){
        // 检测账户和密码是否为空
        $text=input('post.text','','strip_tags') ? input('post.text','','strip_tags') : '';
        //开始验证
        $validate = new Validate([
            'text|签名'        =>      'require',
        ]);
        $validata=[
            'text'        =>      $text,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        //结束验证
        $data=Db::name('member')->where('id',$this->member['id'])->update(['qianming'=>$text]);
        if($data){
            echo json_encode(['ret'=>'修改成功']);
        }else{
            echo json_encode(['err'=>'修改失败']);
        }
    }
    // 头像
    public function touxiang(){
        if(request()->isPost()){
            $file = request()->file('image');
            // 要上传图片的本地路径
            $filePath = $file->getRealPath();
            if(!$filePath){
                exit(json_encode(['err'=>'非法操作']));
            }
            $ext = pathinfo($file->getInfo('name'), PATHINFO_EXTENSION);  //后缀
            $geshi=['jpg','png','gif','jpeg','JPEG','JPG','GIF','PNG'];
            if(!in_array($ext,$geshi)){
                exit(json_encode(['err'=>'图片格式不对，请换张图片吧']));
            }
            $key =substr(md5($file->getRealPath()) , 0, 5). date('YmdHis') . rand(100, 999999) . '.jpg' ;
            require_once APP_PATH . '/../vendor/qiniu/autoload.php';
            $db=db::name('member_config')->where(['type'=>'sdkQiniu'])->cache(_cache('db'))->select();
            $accessKey = $db['0']['text'];
            $secretKey = $db['1']['text'];
            $auth = new Auth($accessKey, $secretKey);
            $bucket = $db['2']['text'];
            $domain = $db['3']['text'];
            $token = $auth->uploadToken($bucket);
            // 初始化 UploadManager 对象并进行文件的上传
            $uploadMgr = new UploadManager();
            // 调用 UploadManager 的 putFile 方法进行文件的上传
            list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
            if ($err !== null) {
                echo json_encode(["err"=>$err]);
            } else {
                //返回图片的完整URL
                Db::name('member')->where('id',$this->member['id'])->update(['img'=>$ret['key']]);
                echo json_encode(['ret'=>$domain .'/'. $ret['key']]);
            }
        }
        exit();

        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('image');
        //exit(json_encode(['err'=>$_FILES]));
      //  $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads'. DS . 'touimg');
        $info = $file->validate(['size'=>105678,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'uploads' . DS . 'touimg');
        if($info){
            // 成功上传后 获取上传信息
            // 输出 jpg
          //  echo $info->getExtension();
            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
            $img='/public/uploads/touimg/'.$info->getSaveName();
            $img=str_replace('\\','/',$img);
            $where['img']=$img;
            Db::name('member')->where('id',$this->member['id'])->update($where);
            echo json_encode(['ret'=>$img]);
            // 输出 42a79759f284b767dfcb2a0197904287.jpg
            //echo $info->getFilename(); 
        }else{
            // 上传失败获取错误信息
            echo json_encode(['err'=>$file->getError()]);
        }
    }
    // 绑定手机
    public function mobile(){
        $username=input('post.username') ? input('post.username') : '';
        // 检测号码是否为空
        if(!$username) return ['err'=>'请填写绑定手机号码'];
        // 检测手机号码格式是否正确
        if(!_isMobile($username)) return ['err'=>'手机格式错误，请填写正确手机'];
        $code=input('post.code') ? input('post.code') : '';
        if(!$code) return ['err'=>'请填写手机验证码'];
        $data=_codechecking($code,$username);
        if($data!=1){
            return ['err'=>$data];
        }
        // 判断手机号码是否被其他用户绑定
        $member=DB::name('member')->where('mobile',$username)->value('id');
        if($member) return ['err'=>'手机已被其他用户绑定，请重新换手机'];
        // 判断用户是否绑定过手机号码
        if($this->member['mobile']){
            return ['err'=>'您已经绑定过手机，如需要解绑请联系客服'];
        }
        // 更新用户手机号码
        $db=Db::name('member')->where('id',$this->member['id'])->setField('mobile',$username);
        if($db){
            $recording=_records($this->member['id'],'绑定手机');
            $data=['ret'=>'绑定手机成功'];
        }else{
            $data=['err'=>'绑定手机失败'];
        }
        return $data;
    }
    // 绑定邮箱
    public function email(){
        $username=input('post.username') ? input('post.username') : '';
        // 检测号码是否为空
        if(!$username) return ['err'=>'请填写绑定手机号码'];
        // 检测手机号码格式是否正确
        if(!_isEmail($username)) return ['err'=>'邮箱格式错误，请填写正确邮箱'];
        $code=input('post.code') ? input('post.code') : '';
        if(!$code) return ['err'=>'请填写邮箱验证码'];
        $data=_codechecking($code,$username);
        if($data!=1){
            return ['err'=>$data];
        }
        // 判断手机号码是否被其他用户绑定
        $member=DB::name('member')->where('email',$username)->value('id');
        if($member) return ['err'=>'邮箱已被其他用户绑定，请重新换邮箱'];
        // 判断用户是否绑定过手机号码
        if($this->member['email']){
            return ['err'=>'您已经绑定过邮箱，如需要解绑请联系客服'];
        }
        // 更新用户手机号码
        $db=Db::name('member')->where('id',$this->member['id'])->setField('email',$username);
        if($db){
            $recording=_records($this->member['id'],'绑定邮箱');
            $data=['ret'=>'绑定邮箱成功'];
        }else{
            $data=['err'=>'绑定邮箱失败'];
        }
        return $data;
    }
    // 修改原密码
    public function password(){
        $password=input('post.password') ? input('post.password') : '';
        $password2=input('post.password2') ? input('post.password2') : '';
        // 检测是否为空
        if(!$password) exit(json_encode(['err'=>'原密码不可为空']));
        if(!$password2) exit(json_encode(['err'=>'新密码不可为空']));
        if(md5($password) == md5($password2)) exit(json_encode(['err'=>'原密码和新密码不允许相同']));
        if(md5($password2) == $this->member['password']) exit(json_encode(['err'=>'原密码和新密码不允许相同']));
        // 更新用户密码
        $db=Db::name('member')->where('id',$this->member['id'])->setField('password',md5($password2));
        if($db){
            $recording=_records($this->member['id'],'绑定手邮箱');
            $data=['ret'=>'绑定邮箱成功'];
        }else{
            $data=['err'=>'绑定邮箱失败'];
        }
       
        exit(json_encode($data));
    } 
    // 会员记录
    // $money  1调用有金额  2调用-1金额
    // $type  money调用金额记录  score调用积分记录 jingyan调用经验值记录 默认无
    // $data 调用data
    // $pages 显示数量 类型limit
    public function records(){
        $money=input('post.money') ? input('post.money') : '';
        $type=input('post.type') ? input('post.type') : '';
        $data=input('post.data') ? input('post.data') : '';
        $pages=input('post.pages') ? input('post.pages') : '';
        $where=[];
        if($money){
            if($money=='-1'){
                $where['money']=0;
            }else{
                $where['money']=$money;
            }
        }
        if($type){
            $where['type']=$type;
        }
        if($data){
            $where['data']=$data;
        }
        $where['uid']=$this->member['id'];
        $data=Db::name('member_records')->where($where)->order('id desc')->paginate($pages)->toarray();
        $type=['money'=>'元','score'=>'积分','jingyan'=>'经验值'];
        foreach ($data['data'] as $k => $v) {
            if($v['money']){
                $data['data'][$k]['text']=$v['text'].' <b id="data1">'.$v['data'].'</b><b id="data2">'.$v['money'].'</b> '.$type[$v['type']];
            }
            $data['data'][$k]['date']=date('Y-m-d H:i:s',$v['time']);
        }
      
        exit(json_encode($data));
    }
    // 投稿文章
    // title    标题      必填
    // content  内容      必填
    // typeid   分类      必填
    // writer   作者      选项
    // image    缩略图    选项
    // keywords  关键词   选项
    // description 描述   选项
    // source   来源      选项
    // mychannel   1文章 2图片 3视频
    public function articleAdd(){
        $aritlceId=input('id/d');
        // 检测是否开启投稿
        $data=DB::name('member_config')->where("name='articleAdd' or name='articleHide' or name='articleScore' or name='articleNum' or name='articleCode' or name='articleJingyan' or name='articleMoney'")->fetchSql(false)->select();
        $articleAdd=$data['0']['text'];     //文章投稿
        $articleHide=$data['1']['text'];    //投稿审核
        $articleScore=$data['2']['text'];   //投稿奖励积分
        $articleNum=$data['3']['text'];     //每天投稿限制
        $articleCode=$data['4']['text'];    //投稿文章开启验证码
        $articleJingyan=$data['5']['text'];   //投稿奖励积分
        $articleMoney=$data['6']['text'];   //投稿奖励积分
        unset($data);   // 销毁变量
        // 读取会员配置 - 结束
        // 检测会员投稿分组权限
        if($articleAdd=='-1'){
            exit(json_encode(['err'=>'文章投稿已关闭']));
        }
        // 检测投稿文章是否审核
        if($articleHide=='-1'){
            $where['hide']=1; 
        }else{
            $where['hide']=2;
        }
        $title=input('post.title','','strip_tags') ? input('post.title','','strip_tags') : '';
        if($title){
            $where['title']=$title;
        }
        $mychannel=input('post.mychannel/d') ? input('post.mychannel/d') : '1';
        if($mychannel==1 || $mychannel==2){
            $images=input('param.images') ? input('param.images') : '';
            if($images){
               // $images=json_decode($images,true);
                //$images=json_encode($images);
                $where['images']=$images;
                //提取第一条缩略图
                $img=json_decode(htmlspecialchars_decode($images),true);
                if($img){
                    $where['image']=$img[0];
                }
            }
        }else if($mychannel==3){
            if(!$title){
                exit(json_encode(['err'=>'标题不可为空']));
            }
            $video=input('post.video') ? input('post.video') : '';
            $videourl=input('post.videourl') ? input('post.videourl') : '';
            $where['qiniu_video']=$video;
            $where['qiniu_video_type']=1;
            $where['qiniu_video']=$video;
            $where['video']=$videourl;
            //file_put_contents("video.txt",var_export($video,true));    
        }
         
        $description=input('post.description','','strip_tags') ? input('post.description','','strip_tags') : '';
        if($description){
            $where['description']=$description;
        }
         
        $where['mychannel']=$mychannel;
        $time=time();
        //开始验证
        $validate = new Validate([
            'title'         =>      'max:30',
            'description'   =>      'max:250',
            'mychannel'     =>      'require|number|in:1,2,3',
        ]);
        $validata=[
            'title'         =>      $title,
            'description'   =>      $description,
            'mychannel'     =>      $mychannel,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        if(!$title && !$images && !$description){
            exit(json_encode(['err'=>'请填写完整内容']));
        }
        //结束验证
        // 是否开启验证
        if($articleCode==1){
            $yzm=input('post.yzm/d') ? input('post.yzm/d') : '';
            if($yzm){
                if(!captcha_check($yzm)){
                    return ['err'=>'验证码错误'];
                }
            }else{
                return ['err'=>'请输入验证码'];
            }
        }
        if(!$aritlceId){
            $where['update_time']=$time;
            $where['des']=50;
            $where['flags']=0;
            $where['click']=0;
            $where['create_time']=$time;
            $where['uid']=$this->member['id'];
            $where['weitoutiao']=1;
            $where['keywords']=input('keywords');
            $where['writer']=input('writer');
            $where['content']=input('content');
            $where['source']=input('source');
            $where['typeid']=input('typeid');
            $id=Db::name('article')->insertGetId($where);
            if($where['hide']==1){
                // 检测金额奖励
                if($articleMoney){
                    // 检测是否已奖励，防止重复奖励
                    $aritlcejiance=Db::name('member_records')->where(['type'=>'money','text'=>'投稿奖励ID：'.$id,'data'=>'+'])->value('id');
                    if(!$aritlcejiance){
                        _records($this->member['id'],'投稿奖励ID：'.$id,$articleMoney,'money','+');
                        Db::name('member')->where('id',$this->member['id'])->setInc('money',$articleMoney);
                    }
                }
                // 检测积分奖励
                if($articleScore){
                    // 检测是否已奖励，防止重复奖励
                    $aritlcejiance=Db::name('member_records')->where(['type'=>'score','text'=>'投稿奖励ID：'.$id,'data'=>'+'])->value('id');
                    if(!$aritlcejiance){
                        _records($this->member['id'],'投稿奖励ID：'.$id,$articleScore,'score','+');
                        Db::name('member')->where('id',$this->member['id'])->setInc('score',$articleScore);
                    }
                }
                // 检测经验值奖励
                if($articleJingyan){
                    // 检测是否已奖励，防止重复奖励
                    $aritlcejiance=Db::name('member_records')->where(['type'=>'jingyan','text'=>'投稿奖励ID：'.$id,'data'=>'+'])->value('id');
                    if(!$aritlcejiance){
                        _records($this->member['id'],'投稿奖励ID：'.$id,$articleJingyan,'jingyan','+');
                        Db::name('member')->where('id',$this->member['id'])->setInc('jingyan',$articleJingyan);
                    }
                }
                _records($this->member['id'],'投稿文章ID：'.$id.'自动审核通过');
                $data=['ret'=>'发布成功'];
            }else{
                _records($this->member['id'],'投稿文章ID：'.$id.'等待审核');
                $data=['ret'=>'发布成功，等待审核'];
            }
        }else{
            // 检测文章
            $article=Db::name('article')->where(['id'=>$aritlceId,'uid'=>$this->member['id']])->value('id');
            if(!$article){
                return ['err'=>'非法修改'];
            }
            Db::name('article')->where('id',$article)->update($where);
            $data=['ret'=>'修改成功'];
            if($where['hide']==1){
                _records($this->member['id'],'投稿文章ID：'.$article.'修改成功，自动审核通过');
                $data=['ret'=>'修改成功'];
            }else{
                _records($this->member['id'],'投稿文章ID：'.$article.'修改成功，等待审核');
                $data=['ret'=>'修改成功，等待审核'];
            }
        }
        exit(json_encode($data));
    }
    // 上传图片
    public function imagesUpload(){
            $file = request()->file('image');
            // 要上传图片的本地路径
            $filePath = $file->getRealPath();
            if(!$filePath){
                exit(json_encode(['err'=>'非法操作']));
            }
            $ext = pathinfo($file->getInfo('name'), PATHINFO_EXTENSION);  //后缀
            $geshi=['jpg','MOV','png','gif','jpeg','JPEG','JPG','GIF','PNG'];
            if(!in_array($ext,$geshi)){
                exit(json_encode(['err'=>'图片格式不对，请换张图片吧']));
            }
            $key =substr(md5($file->getRealPath()) , 0, 5). date('YmdHis') . rand(100, 999999) . '.jpg' ;
            require_once APP_PATH . '/../vendor/qiniu/autoload.php';
            $db=db::name('member_config')->where(['type'=>'sdkQiniu'])->cache(_cache('db'))->select();
            $accessKey = $db['0']['text'];
            $secretKey = $db['1']['text'];
            $auth = new Auth($accessKey, $secretKey);
            $bucket = $db['2']['text'];
            $token = $auth->uploadToken($bucket);
            // 初始化 UploadManager 对象并进行文件的上传
            $uploadMgr = new UploadManager();
            // 调用 UploadManager 的 putFile 方法进行文件的上传
            list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
            if ($err !== null) {
                echo json_encode(["err"=>$err]);
            } else {
                echo json_encode(['ret'=>$ret['key']]);
            }

            exit();
        $file = request()->file('image');
        $info = $file->validate(['size'=>105678,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'uploads' . DS . 'weitoutiao' . DS . 'images');
        if($info){
            $img='/public/uploads/weitoutiao/images/'.$info->getSaveName();
            $img=str_replace('\\','/',$img);
            echo json_encode(['ret'=>$img]);
        }else{
            echo json_encode(['err'=>$file->getError()]);
        }
    }
    // 上传视频
    public function videoUpload(){
       // $file = request()->file('video');
      //  $file=$_FILES['video'];
     
        require_once APP_PATH . '/../vendor/qiniu/autoload.php';
        $db=db::name('member_config')->where(['type'=>'sdkQiniu'])->cache(_cache('db'))->select();
        $accessKey = $db['0']['text'];
        $secretKey = $db['1']['text'];
        $auth = new Auth($accessKey, $secretKey);
        $bucket = $db['2']['text'];
        $pipeline = $db['4']['text'];
        $fops = $db['5']['text'];
        $auth = new Auth($accessKey, $secretKey);
        //要进行转码的转码操作 
      //  $fops = "avthumb/mp4/vb/1.25m";
        //$fops = "avthumb/mp4/ab/160k/ar/44100/acodec/libfaac/r/30/vb/2200k/vcodec/libx264/s/1280x720/autoscale/1/stripmeta/0";
        //可以对转码后的文件进行使用saveas参数自定义命名，当然也可以不指定文件会默认命名并保存在当间

          $file = request()->file('video');
          $key =substr(md5($file->getRealPath()) , 0, 5). date('YmdHis') . rand(100, 999999) . '.mp4';
            $token = $auth->uploadToken($bucket);

        
        $savekey = \Qiniu\base64_urlSafeEncode($bucket);
        $fops = $fops.'|saveas/'.$savekey;
        $wenurl=config()['appConfig']['url'];
        $policy = array(
        'persistentOps' => $fops,
        'persistentPipeline' => $pipeline,
        'persistentNotifyUrl' => $wenurl.'/index.php/api/index/notify',
        );
        $uptoken = $auth->uploadToken($bucket, null, 3600, $policy);
        //上传文件的本地路径
        $file = request()->file('video');
        $filePath = $file->getRealPath();
        $uploadMgr = new UploadManager();
        list($ret, $err) = $uploadMgr->putFile($uptoken, $key, $filePath);
        // if ($err !== null) {
        //     //echo json_encode(['err'=>$err]);
        //     echo json_encode(['err'=>'失败']);
        // } else {
            
        // }
        echo json_encode(['ret'=>['persistentId'=>$ret['persistentId'],'key'=>$key]]);
        exit();
        //下面代码作废，上面代码改用七牛存储

        $file = request()->file('video');
        $ext = pathinfo($file->getInfo('name'), PATHINFO_EXTENSION);  //后缀

        $key ='wtt'.substr(md5($file->getRealPath()) , 0, 5). date('YmdHis') . rand(100, 999999) .".". $ext;
        require_once APP_PATH . '/../vendor/qiniu/autoload.php';
        $db=db::name('member_config')->where(['type'=>'sdkQiniu'])->cache(_cache('db'))->select();
        $accessKey = $db['0']['text'];
        $secretKey = $db['1']['text'];
        $auth = new Auth($accessKey, $secretKey);
        $bucket = $db['2']['text'];
         
 

        //转码是使用的队列名称。 
        $pipeline = 'abc';

        //要进行转码的转码操作。 
        $fops = "avthumb/mp4/s/640x360/vb/1.25m";


        //可以对转码后的文件进行使用saveas参数自定义命名，当然也可以不指定文件会默认命名并保存在当间。
        $savekey = \Qiniu\base64_urlSafeEncode($key);
        $fops = $fops.'|saveas/'.$savekey;

        $policy = array(
          'persistentOps' => $fops,
          'persistentPipeline' => $pipeline
        );
        $uptoken = $auth->uploadToken($bucket, $key, 3600, $policy);

        //上传文件的本地路径

        $filePath = $file->getRealPath();
        if(!$filePath){
            exit(json_encode(['err'=>'非法操作']));
        }

        $uploadMgr = new UploadManager();

        list($ret, $err) = $uploadMgr->putFile($uptoken, $key, $filePath);
        

        if ($err !== null) {
            var_dump($err);
        } else {
            var_dump($ret);
        }
        exit();



        $file = request()->file('video');
        // 要上传图片的本地路径
        $filePath = $file->getRealPath();
        if(!$filePath){
            exit(json_encode(['err'=>'非法操作']));
        }
        $ext = pathinfo($file->getInfo('name'), PATHINFO_EXTENSION);  //后缀
        // $geshi=['rm','rmvb','wmv','avi','mp4','3gp','mkv','RM','mov','flv'];
        // echo json_encode(['err'=>_inArray($ext,$geshi).'||'.$ext]); 
        // exit();
        // if(!_inArray($ext,$geshi)){
        //     exit(json_encode(['err'=>'视频格式不支持'.$ext]));
        // }
        $key ='wtt'.substr(md5($file->getRealPath()) , 0, 5). date('YmdHis') . rand(100, 999999)."." . $ext;
        require_once APP_PATH . '/../vendor/qiniu/autoload.php';
        $db=db::name('member_config')->where(['type'=>'sdkQiniu'])->cache(_cache('db'))->select();
        $accessKey = $db['0']['text'];
        $secretKey = $db['1']['text'];
        $auth = new Auth($accessKey, $secretKey);
        $bucket = $db['2']['text'];
        $domain = $db['3']['text'];
        $token = $auth->uploadToken($bucket);
        // 初始化 UploadManager 对象并进行文件的上传
        $uploadMgr = new UploadManager();
        // 调用 UploadManager 的 putFile 方法进行文件的上传
        list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
        if ($err !== null) {
            echo json_encode(["err"=>$err]);
        } else {
            echo json_encode(['ret'=>$ret['key']]);
        }
        file_put_contents("video.txt",var_export($ret,true));  
        file_put_contents("video2.txt",var_export($err,true));
        exit();

        if($info){
            $img='/public/uploads/weitoutiao/video/'.$info->getSaveName();
            $img=str_replace('\\','/',$img);
            echo json_encode(['ret'=>$img]);
            file_put_contents("video.txt",var_export($img,true));  
        }else{
            echo json_encode(['err'=>$file->getError()]);
        }
    }
     
    // 会员投稿文章列表
    // $pages 显示数量 类型limit
    public function articleList(){
        $money=input('post.money') ? input('post.money') : '';
        $type=input('post.type') ? input('post.type') : '';
        $data=input('post.data') ? input('post.data') : '';
        $pages=input('post.pages') ? input('post.pages') : '';
        $where=[];
        if($money){
            if($money=='-1'){
                $where['money']=0;
            }else{
                $where['money']=$money;
            }
        }
        if($type){
            $where['type']=$type;
        }
        if($data){
            $where['data']=$data;
        }
        $where['uid']=$this->member['id'];
        $data=Db::name('article')->where($where)->order('des desc,id desc')->field('id,title,typeid,style,flags,des,tags,image,click,keywords,description,create_time,update_time,content,hide,source,writer')->paginate($pages)->toarray();
        $hide=[0=>'隐藏',1=>'通过',2=>'审核',3=>'拒绝'];
        foreach ($data['data'] as $k => $v) {
            $data['data'][$k]['create_time']=date('Y-m-d H:i:s',$v['create_time']);
            $data['data'][$k]['update_time']=date('Y-m-d H:i:s',$v['update_time']);
            $data['data'][$k]['hides']=$hide[$v['hide']];
        }
      
        exit(json_encode($data));
    }
    // 读取会员名投稿列表
    // id 文章内容ID
    public function articleView(){
        $id=input('post.id/d');
        if(!$id){
          
            exit(json_encode(['err'=>'文章ID错误']));
        }
        // 检测文章
        $article=Db::name('article')->where(['id'=>$id,'uid'=>$this->member['id']])->find();
        if(!$article){
          
            exit(json_encode(['err'=>'文章不存在']));
        }
     
        exit(json_encode(['ret'=>$article]));
    }
    // 添加用户收藏
    // uid 用户ID
    // aid 收藏ID
    // type 收藏类型ID  在_mychannel表查看
    public function favoriteAdd(){
        $aid=input('post.aid') ? input('post.aid/d') : '';
          //开始验证
        $validate = new Validate([
            'aid'           =>      'require|number',
        ]);
        $validata=[
            'aid'           =>      $aid,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));
        }
        //结束验证
        // 检测是否已收藏
        $shou=Db::name('member_favorite')->where(['uid'=>$this->member['id'],'aid'=>$aid,'type'=>0])->value('id');
        if($shou) exit(json_encode(['err'=>'您已经收藏过了，在会员中心查看我的收藏']));
        // 添加用户收藏
        $where['uid']=$this->member['id'];
        $where['aid']=$aid;
        $where['time']=time();
        $db=Db::name('member_favorite')->insert($where);
        if($db){
            _records($this->member['id'],'收藏ID：'.$aid);
            $data=['ret'=>'已收藏'];
        }else{
            $data=['err'=>'收藏失败'];
        }
        exit(json_encode($data));
    }
    // 删除用户收藏
    // id 收藏ID
    public function favoriteDel(){
        $aid=input('post.aid') ? input('post.aid/d') : '';
          //开始验证
        $validate = new Validate([
            'aid'           =>      'require|number',
        ]);
        $validata=[
            'aid'           =>      $aid,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));
        }
        //结束验证
         $db=Db::name('member_favorite')->where(['uid'=>$this->member['id'],'aid'=>$aid,'type'=>0])->delete();
         if($db){
            _records($this->member['id'],'删除收藏ID：'.$aid);
            $data=['ret'=>'取消收藏'];
         }else{
            $data=['err'=>'取消失败'];
         }
         echo json_encode($data); 
    }
    // 用户支付记录
    // status 0 未付款  1已付款
    // type 1pc 2wap 3wx 4app
    // sctype 0充值  1购物车  2购买VIP 
    // pages 显示数量
    public function payRecords(){
        $status=input('post.status') ? input('post.status') : '';
        $type=input('post.type') ? input('post.type') : '';
        $sctype=input('post.sctype') ? input('post.sctype') : '';
        $pages=input('post.pages') ? input('post.pages') : '';
        //开始验证
        $validate = new Validate([
            'status'        =>      'in:0,1|number',
            'type'          =>      'in:1,2,3',
            'sctype'        =>      'in:0,1,2|number',
            'pages'         =>      'number',
        ]);
        $validata=[
            'status'        =>      $status,
            'type'          =>      $type,
            'sctype'        =>      $sctype,
            'pages'         =>      $pages,
        ];
        if (!$validate->check($validata)) {
            
            exit(json_encode(['err'=>$validate->getError()]));
        }
        //结束验证
        if($status){
            $where['status']=$status;
        }
        if($type){
            $where['type']=$type;
        }
        if($sctype){
            $where['sctype']=$sctype;
        }
        $where['uid']=$this->member['id'];
        $data=Db::name('pay_record')->where($where)->order('id desc')->field('id,money,status,type,ip,info,sctype,scookies,create_time')->paginate($pages)->toarray();
        $sctype=[0=>'充值',1=>'消费',2=>'购买VIP'];
        foreach ($data['data'] as $k => $v) {
            $data['data'][$k]['sctype']=$sctype[$v['sctype']];
            $data['data'][$k]['create_time']=date('Y-m-d H:i:s',$v['create_time']);
            $data['data'][$k]['money']=$data['data'][$k]['money']/100;
        }
       
        exit(json_encode($data));
    }
    // 关注会员
    public function guanzhu(){
        $gz_uid=input('post.gz_uid/d') ? input('post.gz_uid/d') : '';
        //开始验证
        $validate = new Validate([
            'gz_uid'         =>     'require|number',
        ]);
        $validata=[
            'gz_uid'         =>      $gz_uid,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        $uid=$this->member['id'];
        // 检测是否已关注
        $shou=Db::name('member_guanzhu')->where(['uid'=>$uid,'gz_uid'=>$gz_uid])->value('id');
        if($shou)  exit(json_encode(['err'=>'您已经关注过了，在我的查看我的关注']));
        // 添加用户收藏
        $where['uid']=$uid;
        $where['gz_uid']=$gz_uid;
        $where['time']=time();
        $db=Db::name('member_guanzhu')->insert($where);
        if($db){
            _records($uid,'关注会员ID：'.$gz_uid);
            $data=['ret'=>'关注成功'];
        }else{
            $data=['err'=>'关注失败'];
        }
        exit(json_encode($data));
    }
    // 取消关注会员
    public function guanzhuDel(){
        $gz_uid=input('post.gz_uid/d') ? input('post.gz_uid/d') : '';
        //开始验证
        $validate = new Validate([
            'gz_uid'         =>     'require|number',
        ]);
        $validata=[
            'gz_uid'         =>      $gz_uid,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        //结束验证
        // 检测是否存在
        $uid=$this->member['id'];
        $db=Db::name('member_guanzhu')->where(['uid'=>$uid,'gz_uid'=>$gz_uid])->delete();
        if($db){
            _records($uid,'取消关注会员ID：'.$gz_uid);
            $data=['ret'=>'取消成功'];
        }else{
            $data=['err'=>'取消失败'];
        }
        exit(json_encode($data));
    }
    // 我的关注
    public function guanzhuList(){
        $pages=input('post.pages') ? input('post.pages') : '';
        $type=input('param.type') ? input('param.type') : '';     // 1我的关注  2我的粉丝
        if(!$type){
            $type=1;
        }
        //开始验证
        $validate = new Validate([
            'pages'         =>      'number',
            'type'          =>      'number|in:1,2',
        ]);
        $validata=[
            'pages'         =>      $pages,
            'type'          =>      $type,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        //结束验证
       // $where['a.uid']=$this->member['id'];
        // $data=Db::name('member_zhaiquanguanzhu')->where($where)->order('id desc')->paginate($pages)->toarray();
        // dump($data);
        if($type==1){
            $auid='a.gz_uid';
            $where['a.uid']=$this->member['id'];
        }else{
            $auid='a.uid';
            $where['a.gz_uid']=$this->member['id'];
         //    $member['fensi']=Db::name('member_guanzhu')->where(['gz_uid'=>$member['id']])->count();
        }
        $join = [
            ['__MEMBER__ w',$auid.'=w.id'],
        ];
        $data=Db::name('member_guanzhu')->alias('a')->join($join)->where($where)->order('a.id desc')->field('w.id,w.img')->fetchSql(false)->paginate($pages)->toarray();
        // dump($data);
        // exit();
        foreach ($data['data'] as $k => $v) {
            $user=_user($v['id']);
            $data['data'][$k]['img']=_imgUrl().$user['img']."?imageView2/1/w/100/h/100";
            $data['data'][$k]['username']=$user['username'];
            $data['data'][$k]['qianming']=$user['qianming'];
            $data['data'][$k]['guanzhu']=Db::name('member_guanzhu')->where(['uid'=>$this->member['id'],'gz_uid'=>$user['id']])->value('id');
        }
        exit(json_encode($data));
    }
    // 7天访客
    public function fangke(){
        $pages=input('post.pages') ? input('post.pages') : '';
        //开始验证
        $validate = new Validate([
            'pages'         =>      'number',
        ]);
        $validata=[
            'pages'         =>      $pages,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        //结束验证
 
        $where['f_uid']=$this->member['id'];
        // $data=Db::name('member_zhaiquanguanzhu')->where($where)->order('id desc')->paginate($pages)->toarray();
        // dump($data);
        // $where['f_uid']=$this->member['id'];
        $data=Db::name('member_fangke')->where($where)->field('uid')->order('id desc')->paginate($pages)->toarray();
        // dump($data);
        // exit();
        foreach ($data['data'] as $k => $v) {
            $user=_user($v['uid']);
            $data['data'][$k]['id']=$user['id'];
            $data['data'][$k]['img']=_imgUrl().$user['img']."?imageView2/1/w/100/h/100";
            $data['data'][$k]['username']=$user['username'];
            $time=Db::name('member_fangke')->where(['uid'=>$v['uid']])->order('id desc')->value('time');
            $data['data'][$k]['time']="访问时间：".date('m-d H:i',$time);
            $data['data'][$k]['guanzhu']=Db::name('member_guanzhu')->where(['uid'=>$this->member['id'],'gz_uid'=>$user['id']])->value('id');
        }
        exit(json_encode($data));
    }
    // 访客记录
    public function fangkejilu(){
        $f_uid=input('post.f_uid/d') ? input('post.f_uid/d') : '';
        //开始验证
        $validate = new Validate([
            'f_uid'         =>      'require|number',   // 对方
        ]);
        $validata=[
            'f_uid'         =>      $f_uid,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        //结束验证
        $where['uid']=$this->member['id'];
        if($this->member['id']==$f_uid){
            exit();
        }
        $where['f_uid']=$f_uid;
        $where['time']=time();

        $yif=Db::name('member_fangke')->where($where)->find();
       if($yif)
       {
        $db=Db::name('member_fangke')->insert($where);

        }
        if($db){
            exit(json_encode(['ret'=>$db]));
        }else{
            exit(json_encode(['err'=>$db]));
        }
    }
    // 文章赞和踩
    public function zancai(){
        $aid=input('post.aid/d') ? input('post.aid/d') : '';
        $type=input('post.type/d') ? input('post.type/d') : ''; // 1赞 2踩
        if(!$type){
            $type=1;
        }
        //开始验证
        $validate = new Validate([
            'aid'           =>      'require|number',
            'type'          =>      'require|number|in:1,2',
        ]);
        $validata=[
            'aid'           =>      $aid,
            'type'          =>      $type,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        //结束验证
        $uid=$this->member['id'];
        $zan=Db::name('article_zan')->where(['aid'=>$aid,'uid'=>$uid])->cache(_cache('db'))->find();
        if($zan){
            if($zan['zan']){
                $text='您已经赞过啦！';
            }else{
                $text='您已经踩过啦！';
            }
            exit(json_encode(['err'=>$text]));
        }else{
            if($type==1){
                $where['zan']=1;
                $ziduan='zan';
            }else if($type==2){
                $where['cai']=1;
                $ziduan='cai';
            }
            $where['uid']=$uid;
            $where['aid']=$aid;
            $where['time']=time();
            $db=Db::name('article_zan')->insert($where);
            if($db){
                Db::name('article')->where(['id'=>$aid])->setInc($ziduan);
                exit(json_encode(['ret'=>$db]));
            }else{
                exit(json_encode(['err'=>$db]));
            }
        }
         
    }
    // 评论
    public function ping(){
        $aid=input('post.aid/d') ? input('post.aid/d') : '';
        $content=input('post.content','','strip_tags') ? input('post.content','','strip_tags') : '';
        $pingId=input('post.pingId/d') ? input('post.pingId/d') : '';
        $pingId2=input('post.pingId2/d') ? input('post.pingId2/d') : '';
        //开始验证
        $validate = new Validate([
            'aid'           =>      'require|number',
            'pingId'        =>      'number',
            'pingId2'       =>      'number',
        ]);
        $validata=[
            'aid'           =>      $aid,
            'pingId'        =>      $pingId,
            'pingId2'       =>      $pingId2
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        //结束验证
        $uid=$this->member['id'];
        // 限制会员每日100条评论数量 防止恶意刷评论
        $count=Db::name('article_ping')->whereTime('time', 'today')->where(['uid'=>$uid])->count();
        if($count>100){
            exit(json_encode(['err'=>'发布失败，每日发布评论限制100条内']));
        }else{
            if(!$pingId){
                $where['uid']=$uid;
                $where['aid']=$aid;
                $where['time']=time();
                $where['content']=$content;
                $db=Db::name('article_ping')->insert($where);
                if($db){
                    Db::name('article')->where(['id'=>$aid])->setInc('pingNum');
                    exit(json_encode(['ret'=>$db]));
                }else{
                    exit(json_encode(['err'=>$db]));
                }
            }else{
                $ping_uid=db::name('article_ping')->where(['id'=>$pingId])->value('uid');
                $where['ping_id']=$pingId;
                $where['ping_uid']=$ping_uid;
                $where['uid']=$uid;
                $where['aid']=$aid;
                $where['time']=time();
                if($pingId2){
                    $pingId2=db::name('article_ping_xia')->where(['id'=>$pingId2])->find();
                    $user=_user($pingId2['uid']);
                    $where['content']=$content.'//<a>@'.$user['username'].'</a>：'.$pingId2['content'];
                }else{
                    $where['content']=$content;
                } 
                $db=Db::name('article_ping_xia')->insert($where);
                if($db){
                    exit(json_encode(['ret'=>$db]));
                }else{
                    exit(json_encode(['err'=>$db]));
                }
            }   
        }
         
    }
    // 文章评论赞
    public function pingZan(){
        $aid=input('post.aid/d') ? input('post.aid/d') : '';
        //开始验证
        $validate = new Validate([
            'aid'           =>      'require|number',
        ]);
        $validata=[
            'aid'           =>      $aid,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        //结束验证
        $uid=$this->member['id'];
        $zan=Db::name('article_ping_zan')->where(['pingId'=>$aid,'uid'=>$uid])->cache(_cache('db'))->value('id');
        if($zan){
            exit(json_encode(['err'=>'您已经赞过啦！']));
        }else{
            $where['zan']=1;
            $where['uid']=$uid;
            $where['pingId']=$aid;
            $where['time']=time();
            $db=Db::name('article_ping_zan')->insert($where);
            if($db){
                Db::name('article_ping')->where(['id'=>$aid])->setInc('zan');
                exit(json_encode(['ret'=>$db]));
            }else{
                exit(json_encode(['err'=>$db]));
            }
        } 
    }
    // 被评论赞
    public function pingZan_xia(){
        $aid=input('post.aid/d') ? input('post.aid/d') : '';
        //开始验证
        $validate = new Validate([
            'aid'           =>      'require|number',
        ]);
        $validata=[
            'aid'           =>      $aid,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        //结束验证
        $uid=$this->member['id'];
        $zan=Db::name('article_ping_xia_zan')->where(['pingId'=>$aid,'uid'=>$uid])->cache(_cache('db'))->value('id');
        if($zan){
            exit(json_encode(['err'=>'您已经赞过啦！']));
        }else{
            $where['zan']=1;
            $where['uid']=$uid;
            $where['pingId']=$aid;
            $where['time']=time();
            $db=Db::name('article_ping_xia_zan')->insert($where);
            if($db){
                Db::name('article_ping_xia')->where(['id'=>$aid])->setInc('zan');
                exit(json_encode(['ret'=>$db]));
            }else{
                exit(json_encode(['err'=>$db]));
            }
        } 
    }
    // 被赞用户列表
    public function zanList(){
        $pages=input('post.pages/d') ? input('post.pages/d') : '';
        //开始验证
        $validate = new Validate([
            'pages'         =>      'number',
        ]);
        $validata=[
            'pages'         =>      $pages,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        //结束验证
        $uid=$this->member['id'];
  
        $where['w.uid']=$uid;
        $join = [
            ['__ARTICLE_PING__ w','a.pingId=w.id'],
        ];
        $data=Db::name('article_ping_zan')->where($where)->alias('a')->join($join)->field('a.uid,w.content,a.pingId,w.aid,a.time')->order('a.time desc')->fetchSql(false)->paginate($pages)->toarray();
        foreach ($data['data'] as $k => $v) {
            $user=_user($v['uid']);
            $data['data'][$k]['img']=_imgUrl().$user['img']."?imageView2/1/w/100/h/100";
            $data['data'][$k]['username']=$user['username'];
            $data['data'][$k]['time']=date('m-d H:i',$v['time']);
        }
        exit(json_encode($data));
    }
    // 被评论用户列表
    public function pingList(){
        $pages=input('post.pages/d') ? input('post.pages/d') : '';
        //开始验证
        $validate = new Validate([
            'pages'         =>      'number',
        ]);
        $validata=[
            'pages'         =>      $pages,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        //结束验证
        $uid=$this->member['id'];

        $where['ping_uid']=$uid;
        $data=Db::name('article_ping_xia')->where($where)->order('time desc')->fetchSql(false)->paginate($pages)->toarray();
        foreach ($data['data'] as $k => $v) {
            $user=_user($v['uid']);
            $data['data'][$k]['img']=_imgUrl().$user['img']."?imageView2/1/w/100/h/100";
            $data['data'][$k]['username']=$user['username'];
            $data['data'][$k]['time']=date('m-d H:i',$v['time']);
            // 被评论内容
            $data['data'][$k]['contentPing']=db::name('article_ping')->where(['id'=>$v['ping_id']])->value('content');
        }
        exit(json_encode($data));
    }
    // 我的收藏
    public function shoucangList(){
        $pages=input('post.pages/d') ? input('post.pages/d') : '';
        $type=input('param.type/d') ? input('param.type/d') : '';  //1我的收藏 2阅读历史
        //开始验证
        $validate = new Validate([
            'pages'         =>      'number',
            'type'          =>      'in:0,1|number',
        ]);
        $validata=[
            'pages'         =>      $pages,
            'type'          =>      $type,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        //结束验证
        $uid=$this->member['id'];
  
        $where['a.uid']=$uid;
        $where['a.type']=$type;
        $join = [
            ['__ARTICLE__ w','a.aid=w.id'],
        ];
        $config=config()['appConfig'];
        $data=Db::name('member_favorite')->where($where)->alias('a')->join($join)->field('w.id,w.title,w.description,w.mychannel,w.image,w.create_time,w.source,w.pingNum,w.images,w.videodate,w.uid,w.click,w.weitoutiao,w.zan,w.video,w.qiniu_video_type,content')->order('a.time desc')->fetchSql(false)->paginate($pages)->toarray();
        foreach ($data['data'] as $k => $v) {
           // $data['data'][$k]['image']=$weburl.$imageImg;
            if($v['image'] && $v['mychannel']!=3){
                $data['data'][$k]['image']=_imgUrl().$v['image']."?imageView2/1/w/172/h/120";
            }else{
                if($v['image']){
                    $data['data'][$k]['image']=_imgUrl().$v['image'];
                }else{
                    if($v['mychannel']==1){
                        
                    }else{
                        $data['data'][$k]['image']=_imgUrl().'/'.$v['video'].'?vframe/jpg/offset/2/w/300/h/200';
                    } 
                }
            }
             
            $data['data'][$k]['create_time']=date('m-d H:i',$v['create_time']);
            if($v['weitoutiao']==0){
                $kuandu="?imageView2/1/w/180/h/124";
                if($v['mychannel']==2){
                    $images='';
                    // foreach (json_decode($v['images'],true) as $ks => $vs) {
                    //     if($ks<3){
                    //         $images.='<div class="aui-col-xs-4"><img id="ffxiangImgCache" ffxiang-src="'._imgUrl().$vs['img'].$kuandu.'" src="../image/loadingImage.png"></div>';
                    //     }else{
                    //         continue;
                    //     }
                    // }
                    $data['data'][$k]['pcList']=json_decode($v['images'],true);
                    if($v['image']){
                        $images='<div class="aui-col-xs-12" style="height:11.5rem"><img style="height:11.5rem" id="ffxiangImgCache" ffxiang-src="'._imgUrl().$v['image'].'?imageView2/1/w/400/h/280" src="../image/loadingImage.png" /></div>';
                    }else{
                        $images=json_decode($v['images'],true);
                        $images=$images['0']['img'];
                        $images='<div class="aui-col-xs-12" style="height:11.5rem"><img style="height:11.5rem" id="ffxiangImgCache" ffxiang-src="'._imgUrl().$images.'?imageView2/1/w/400/h/280" src="../image/loadingImage.png" /></div>';
                    }
                    $data['data'][$k]['images']=$images.'<em class="aui-iconfont aui-icon-image"> '.count(json_decode($v['images'],true)).' 图</em>';
                    // $data['data'][$k]['images']=$images.'<em class="aui-iconfont aui-icon-image"> '.count(json_decode($v['images'])).' 图</em>';
                }else if($v['mychannel']==3){
                    $user=_user($v['uid']);
                    if($user){
                        $data['data'][$k]['user']['username']=$user['username'];
                        $data['data'][$k]['user']['img']=_imgUrl().$user['img']."?imageView2/1/w/100/h/100"; 
                        $data['data'][$k]['uid']=$user['id'];
                    }
                
                    $data['data'][$k]['video']=_imgUrl().$v['video'];
       
                     
                }else if($v['mychannel']==1){
                    $contet=[];
                    // preg_match_all("/src=\"(.*?)\"/", $v['content'],$content);
                    // $content=$content['1'];
                    // $data['data'][$k]['imagesArticleList']=$content;
                    // $data['data'][$k]['content']='';
                    preg_match_all("/img(.*?)src=\"(.*?)\"/", $v['content'],$img);
                    foreach($img[2] as $ka=>$va){
                        // if(strpos($va,'http') !== false){ 
                        //     $contet[]=$va;
                        // }else{
                        //     $contet[]=_imgUrl().$va;
                        // }
                        if(strstr($va,'http')){
                            $contet[]=$va;
                        }else if(strpos($va,'/public/uploads/us/') !== false){
                            $contet[]=$config['url'].$va;
                        }else{
                            $contet[]=_imgUrl().$va;
                        }   
                    }
                    $data['data'][$k]['imagesArticleList']=$contet;
                }
            }else{
                $data['data'][$k]['description']=_substr($v['description'],100,'<a>...[查看全文]</a>'); 
                if($v['mychannel']==3 || $v['video']){
                    if($v['qiniu_video_type']){
                        $image=_imgUrl().'/'.$v['video'].'?vframe/jpg/offset/2/w/200/h/200';
                    }else{
                        if($v['image']){
                            $image=_imgUrl().'/'.$v['image'].'?imageView2/1/w/300/h/200';
                        }else{
                            $image=_imgUrl().'/'.$v['video'].'?vframe/jpg/offset/2/w/300/h/200';
                        }
                    }
                    $data['data'][$k]['image']=$image;
                    // $images='<div class="aui-col-xs-12" tapmode onclick=""><img id="ffxiangImgCache" ffxiang-src="'.$image.'" src="../image/loadingImage.png" class="fx-video-img"></div>';
                }else{
                    $kuandu="?imageView2/1/w/200/h/200";
                    $data['data'][$k]['images']=json_decode(htmlspecialchars_decode($v['images']),true);
                    if($data['data'][$k]['images']){
                        $images='';
                        $imagesPro='';
                        foreach ($data['data'][$k]['images'] as $ks=> $vsa) {
                            if(count($data['data'][$k]['images'])==1 || count($data['data'][$k]['images'])==2){
                                $col="aui-col-xs-6";
                            }else{
                                $col="aui-col-xs-4";
                            }
                            $imagesPro[]=_imgUrl().$vsa;
                            $images.='<div class="'.$col.'" tapmode onclick="img('.$v['id'].','.$ks.')"><img id="ffxiangImgCache" ffxiang-src="'._imgUrl().$vsa.$kuandu.'" src="../image/loadingImage.png"></div>';
                        }
                        $data['data'][$k]['images']=$images;
                        $data['data'][$k]['imagesPro']=$imagesPro;
                    } 
                } 
                if($v['uid']){
                    $user=_user($v['uid']);
                    if($user){
                        $data['data'][$k]['user']['username']=$user['username'];
                        $data['data'][$k]['user']['img']=_imgUrl().$user['img']."?imageView2/1/w/100/h/100"; 
                    }
                    $data['data'][$k]['uid']=$user['id'];
                }
            }
            count($data['data'][$k]['content']);
        }
        exit(json_encode($data));
    }
    // 举报
    public function jubao(){
        $aid=input('post.aid/d') ? input('post.aid/d') : 0;
        $content=input('post.content','','strip_tags') ? input('post.content','','strip_tags') : '';
        //开始验证
        $validate = new Validate([
            'aid'           =>      'number',
            'content'       =>      'require',
        ]);
        $validata=[
            'content'       =>      $content
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        //结束验证
        // 检测是否已举报
        $ip=_ip();
        if(!$ip){
            exit(json_encode(['err'=>'IP地区异常']));
        }
        $uid=$this->member['id'];
        $db=db::name('jubao')->where(['aid'=>$aid,'uid'=>$uid])->cache(_cache('db'))->value('id');
        if($db){
            exit(json_encode(['err'=>'您已经举报过啦']));
        }
        // 限制每天举报/意见反馈 10条
        $jianzhi=Db::name('jubao')->where(['ip'=>$ip])->whereTime('time', 'today')->count();
        if($jianzhi>10){
           exit(json_encode(['err'=>'1防止恶意攻击，举报或反馈每天不超过10条，请明天再来举报或反馈'])); 
        }
        $jianzhi=Db::name('jubao')->where(['uid'=>$uid])->whereTime('time', 'today')->count();
        if($jianzhi>10){
           exit(json_encode(['err'=>'2防止恶意攻击，举报或反馈每天不超过10条，请明天再来举报或反馈'])); 
        }

        $where['uid']=$this->member['id'];
        $where['aid']=$aid;
        $where['content']=$content;
        $where['time']=time();
        $where['ip']=$ip;
        $db=Db::name('jubao')->insert($where);
        if($db){
            exit(json_encode(['ret'=>'举报成功']));
        }else{
            exit(json_encode(['err'=>$db]));
        }
    }
    // 会员列表
    public function userList(){
        $pages=input('post.pages/d') ? input('post.pages/d') : '';
        //开始验证
        $validate = new Validate([
            'pages'         =>      'number',
        ]);
        $validata=[
            'pages'         =>      $pages,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        //结束验证

        $where['a.hide']=1;
        $join = [
            ['__ARTICLE__ w','a.id=w.uid'],
        ];
        $data=Db::name('member')->where($where)->alias('a')->join($join)->field('a.id')->order('a.id desc')->fetchSql(false)->paginate($pages)->toarray();
        foreach ($data['data'] as $k => $v) {
            $user=_user($v['id']);
            $data['data'][$k]['img']=_imgUrl().$user['img']."?imageView2/1/w/100/h/100";
            $data['data'][$k]['username']=$user['username'];
            $data['data'][$k]['qianming']=$user['qianming'];
            $data['data'][$k]['guanzhu']=Db::name('member_guanzhu')->where(['uid'=>$this->member['id'],'gz_uid'=>$user['id']])->value('id');
        }
        exit(json_encode($data));
    }
    //意见反馈
    public function yjfk(){
        $pages=input('post.pages/d') ? input('post.pages/d') : '';
        //开始验证
        $validate = new Validate([
            'pages'         =>      'number',
        ]);
        $validata=[
            'pages'         =>      $pages,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));;
        }
        //结束验证

        $where['uid']=$this->member['id'];
        $data=Db::name('jubao')->where($where)->order('id ')->fetchSql(false)->paginate($pages)->toarray();
        foreach ($data['data'] as $k => $v) {
            $user=_user($v['uid']);
            $data['data'][$k]['img']=_imgUrl().$user['img']."?imageView2/1/w/100/h/100";
            $data['data'][$k]['time']=date('m-d H:i',$v['time']);
            $data['data'][$k]['username']=$user['username'];
        }
        exit(json_encode($data));
    }



    // 2017年12月7日 17:19:25 
    // 删除历史
    public function sclsDel(){
        $id=input('id') ? input('id') : '';
        $type=input('type/d') ? input('type/d') : 0;

        //开始验证
        $validate = new Validate([
            'id'         =>     'require',
        ]);
        $validata=[
            'id'         =>      $id,
        ];
        if (!$validate->check($validata)) {
            exit(json_encode(['err'=>$validate->getError()]));
        }
        //结束验证
        $ids=explode(',',$id);
        $uid=$this->member['id'];
        foreach ($ids as $k => $v) {
            $db=Db::name('member_favorite')->where(['uid'=>$uid,'aid'=>$v,'type'=>$type])->delete();
            echo 'db:'.$db.'  |  id:'.$v;
        }
    }
    // 2018年1月29日 18:52:32 增加
    // 小视频
    // 通过文章ID 读取用户是否已关注和赞
    public function guanzhuzan(){
        $uid=$this->member['id'];
        $gz_uid=input('gz_uid');
        $aid=input('aid/d');
        if(!$aid){
            return;
        }
        $data['guanzhu']=DB::name('member_guanzhu')->where(['uid'=>$uid,'gz_uid'=>$gz_uid])->value('id');
        $data['zan']=Db::name('article_zan')->where(['aid'=>$aid,'uid'=>$uid])->value('zan');
        echo json_encode($data);
    }
    // 增加微头条删除
    public function weitoutiaoDel(){
        $uid=$this->member['id'];
        $aid=input('aid/d') ? input('aid/d') : 0;
        $where['id']=$aid;
        $where['uid']=$uid;
        $where['weitoutiao']=['in','1,2'];
        $a=Db::name('article')->where($where)->delete();
        if($a){
            echo json_encode(['ret'=>'删除成功']);
        }else{
            echo json_encode(['err'=>'删除失败']);
        }
    }

}
