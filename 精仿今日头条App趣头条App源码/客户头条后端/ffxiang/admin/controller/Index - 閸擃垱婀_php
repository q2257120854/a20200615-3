<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Cache;
use think\Db;
use Qiniu\Auth as Auth;
use Qiniu\Storage\UploadManager;
class Index extends Common
{
    public function index(){
      //$tate=date("Y-m-d",strtotime("-2 day"));
     // $db=Db::name('article')->field('id')->whereTime('create_time', '>=', $tate)->fetchSql(true)->select();
    
        return $this->fetch();
    }
    public function main(){
      $jubao=Db::name('jubao')->order('id desc')->where('admin_id',null)->fetchSql(false)->limit(3)->select();
      $this->assign('jubao',$jubao);
      $ping=Db::name('article_ping')->order('id desc')->fetchSql(false)->limit(5)->select();
      $this->assign('ping',$ping);
    	return $this->fetch();
    }
    public function config(){
    	$config=config();
    	$this->assign('cfg',$config['config']);
    	if(request()->isAjax()){
        //  exit(json_encode(['err'=>'演示站无权操作！']));
            $post=input('post.');
           	if($post){
           		$data=$post;
           		if($data){
           			$data=var_export($data, true);
           			$data=str_replace("array", "return", $data);
           			$data=str_replace("(", "[", $data);
           			$data=str_replace(")", "];", $data);
           			$data="<?php\r\n".$data;
           			file_put_contents(APP_PATH.'extra/config.php', print_r($data, true));
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
    public function appConfig(){
      $config=config();
      $this->assign('cfg',$config['appConfig']);
      if(request()->isAjax()){
        //  exit(json_encode(['err'=>'演示站无权操作！']));
            $post=input('post.');
            if($post){
              $data=$post;
              if($data){
                $data=var_export($data, true);
                $data=str_replace("array", "return", $data);
                $data=str_replace("(", "[", $data);
                $data=str_replace(")", "];", $data);
                $data="<?php\r\n".$data;
                file_put_contents(APP_PATH.'extra/appConfig.php', print_r($data, true));
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
    //清空缓存
    public function cache_del(){
    	Cache::clear();
    	return ['ret'=>'清空成功'];
    }
    //上传图片
    public function upload(){

	    if(request()->file('image')){
            $file = request()->file('image');
          //   exit(json_encode(['err'=>'演示站无权操作！']));
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
                dump($err);
            } else {
                return $ret['key'];
            }


            exit();
	    	// 获取表单上传文件 例如上传了001.jpg
		    $file = request()->file('image');
		    // 移动到框架应用根目录/public/uploads/ 目录下
		    $info = $file->validate(['ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'uploads');
		    if($info){
		        // 成功上传后 获取上传信息
		        // 输出 jpg
		        //echo $info->getExtension();
		        // 输出 42a79759f284b767dfcb2a0197904287.jpg
		        $data=$info->getSaveName(); 
		        $data=str_replace("\\","/",$data);
            $data=config('view_replace_str.__IMAGES__').$data;
		    }else{
		        // 上传失败获取错误信息
		        $data=$file->getError();
		    }
		    return $data;
	    }else{
	    	 return $this->fetch();
	    }  
	}
  //图片集
    public function uploads(){
       
      if(request()->isPost()){
       
            $file = request()->file('file'); 
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
                dump($err);
            } else {
                $data=['img'=>$ret['key'],'imgurl'=>_imgUrl().$ret['key'],'text'=>''];
                return  json_encode($data);
            }

        exit();
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('file');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->validate(['ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'uploads');
        if($info){
            // 成功上传后 获取上传信息
            // 输出 jpg
            //echo $info->getExtension();
            // 输出 42a79759f284b767dfcb2a0197904287.jpg
            $data=$info->getSaveName(); 
            $data=str_replace("\\","/",$data);
            $data=['img'=>config('view_replace_str.__IMAGES__').$data,'text'=>str_replace('.'.$info->getExtension(),'',$_FILES['file']['name'])];
        }else{
            // 上传失败获取错误信息
            $data=$file->getError();
        }
        echo json_encode($data);
      }
      
  }
 
   
	//icon 图标
	public function fontawesome(){
    
		return $this->fetch();
	}
	//退出登陆
	public function out(){
    	session(null, 'ffxiangAdmin');
    	$this->redirect("login/index");
  }
  // 第三方登录配置
  public function sdk(){
    return $this->fetch();
  }
  // 通知模板配置
  public function temp(){
    $name=Db::name('member_config')->where('type','temp')->select();
    $this->assign('data',$name);
    if(request()->isAjax()){
  
        $post=input('post.');
        if($post){
            foreach ($name as $k => $v) {
                Db::name('member_config')->where('name',$v['name'])->setField('text',$post[$v['name']]);
            }
            $data=['ret'=>'保存成功'];
        }else{
            $data=['err'=>'提交参数错误'];
        }
    }else{
        $data=$this->fetch();
    }
    return $data;
  }
  public function videoUploads(){
    if(request()->file('video')){
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
          //$fops = "avthumb/mp4/vb/1.25m";
          //$fops = "avthumb/mp4/ab/160k/ar/44100/acodec/libfaac/r/30/vb/2200k/vcodec/libx264/s/1280x720/autoscale/1/stripmeta/0";
          //可以对转码后的文件进行使用saveas参数自定义命名，当然也可以不指定文件会默认命名并保存在当间
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
          list($ret, $err) = $uploadMgr->putFile($uptoken, null, $filePath);
          if ($err !== null) {
              //echo json_encode(['err'=>$err]);
              echo json_encode(['err'=>'失败']);
          } else {
              echo json_encode(['ret'=>$ret['key']]);
          }
       
      }else{
         return $this->fetch('uploadvideo');
      }  
  }
  public function shanchu(){
      return;
    Db::query("truncate table fx_article");
    Db::query("truncate table fx_article_ping");
    Db::query("truncate table fx_article_ping_xia");
    Db::query("truncate table fx_article_ping_xia_zan");
    Db::query("truncate table fx_article_ping_zan");
    Db::query("truncate table fx_article_zan");
    Db::query("truncate table fx_code");
    Db::query("truncate table fx_jubao");
    Db::query("truncate table fx_member");
    Db::query("truncate table fx_member_band");
    Db::query("truncate table fx_member_fangke");
    Db::query("truncate table fx_member_favorite");
    Db::query("truncate table fx_member_guanzhu");
    Db::query("truncate table fx_member_records");
    Db::query("truncate table fx_pay_record");
    Db::query("truncate table fx_tz_zan");

  }
  // 京东
  // 采集京东商城图片
  public function caijiImgList(){
    $url=input('url');
    preg_match_all("/\/\/item.jd.com\/(.*?).html/",$url,$url);
    $url=$url[1];
    $url=$url[0];
    if(!$url){
      exit(json_encode(['']));
    }
    $html=$this->get('https://item.m.jd.com/ware/detail.json?wareId='.$url);
    $html=json_decode($html,true);
    $html=$html['ware'];
    $data['title']=$html['wname'];
    foreach ($html['images'] as $k => $v) {
      $img=str_replace('n0/jfs','n1/s400x400_jfs',$v['bigpath']);
      $img=str_replace('!q70.jpg','',$img);
      $imgs[]=$this->imgUrl($img);
    }
   $data['images']=$imgs;
    
    $str=$html['wdisHtml'];
    $str=preg_replace("/\s+/", " ", $str); //过滤多余回车
    $str=preg_replace("/<[ ]+/si","<",$str); //过滤<__("<"号后面带空格)
    $str=preg_replace("/<\!–.*?–>/si","",$str); //注释
    $str=preg_replace("/<(\!.*?)>/si","",$str); //过滤DOCTYPE
    $str=preg_replace("/<(\/?html.*?)>/si","",$str); //过滤html标签
    $str=preg_replace("/<(\/?div.*?)>/si","",$str); //过滤div标签
    $str=preg_replace("/<(\/?a.*?)>/si","",$str); //过滤a标签
    $str=preg_replace("/<(\/?head.*?)>/si","",$str); //过滤head标签
    $str=preg_replace("/<(\/?meta.*?)>/si","",$str); //过滤meta标签
    $str=preg_replace("/<(\/?body.*?)>/si","",$str); //过滤body标签
    $str=preg_replace("/<(\/?link.*?)>/si","",$str); //过滤link标签
    $str=preg_replace("/<(\/?form.*?)>/si","",$str); //过滤form标签
    $str=preg_replace("/cookie/si","COOKIE",$str); //过滤COOKIE标签
    $str=preg_replace("/<(applet.*?)>(.*?)<(\/applet.*?)>/si","",$str); //过滤applet标签
    $str=preg_replace("/<(\/?applet.*?)>/si","",$str); //过滤applet标签
    $str=preg_replace("/<(style.*?)>(.*?)<(\/style.*?)>/si","",$str); //过滤style标签
    $str=preg_replace("/<(\/?style.*?)>/si","",$str); //过滤style标签
    $str=preg_replace("/<(title.*?)>(.*?)<(\/title.*?)>/si","",$str); //过滤title标签
    $str=preg_replace("/<(\/?title.*?)>/si","",$str); //过滤title标签
    $str=preg_replace("/<(object.*?)>(.*?)<(\/object.*?)>/si","",$str); //过滤object标签
    $str=preg_replace("/<(\/?objec.*?)>/si","",$str); //过滤object标签
    $str=preg_replace("/<(noframes.*?)>(.*?)<(\/noframes.*?)>/si","",$str); //过滤noframes标签
    $str=preg_replace("/<(\/?noframes.*?)>/si","",$str); //过滤noframes标签
    $str=preg_replace("/<(i?frame.*?)>(.*?)<(\/i?frame.*?)>/si","",$str); //过滤frame标签
    $str=preg_replace("/<(\/?i?frame.*?)>/si","",$str); //过滤frame标签
    $str=preg_replace("/<(script.*?)>(.*?)<(\/script.*?)>/si","",$str); //过滤script标签
    $str=preg_replace("/<(\/?script.*?)>/si","",$str); //过滤script标签
    $str=preg_replace("/javascript/si","Javascript",$str); //过滤script标签
    $str=preg_replace("/vbscript/si","Vbscript",$str); //过滤script标签
    $str=preg_replace("/on([a-z]+)\s*=/si","On\\1=",$str); //过滤script标签
    $str=preg_replace("/&#/si","&＃",$str); //过滤script标签
    $data['text']=$str;
 
    // 获取价格
    $money=$this->get('https://item.m.jd.com/product/'.$url.'.html');
    preg_match("/name=\"jdPrice\" value=\"(.*?)\"\//", $money, $money);
    $data['money']=$money['1'];
    echo json_encode($data);
  }
  // 模拟浏览器
    private function get($url){
        $ch = curl_init();

        // 设置浏览器的特定header
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Host:item.m.jd.com",
            "Connection: keep-alive",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8",
            "Upgrade-Insecure-Requests: 1",
            "DNT:1",
            "Accept-Language: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
            'Cookie:JAMCookie=true; __jda=.882330932.1512470771.1512470771.1512470771.0; abtest=20180105154902515_40; mobilev=html5; USER_FLAG_CHECK=9d87ddea2df2d7308a7c613b248569c0; sid=2ad987cecf149a91a4fd89b1b301503f',
            ));

        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');//浏览器

        // 在HTTP请求头中"Referer: "的内容。
        curl_setopt($ch, CURLOPT_REFERER,$url);
        curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, br");
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT,30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//302redirect

        // 针对https的设置
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        $html = curl_exec($ch);
        curl_close($ch);

        return $html; 
    }
     // 下载图片
  private function imgUrl($img){
    //判断文件夹是否存在
    $d=ROOT_PATH . 'public/uploads/shopimg';
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
    return "/public/uploads/shopimg/".$date."/".$geshis;
  }
}
