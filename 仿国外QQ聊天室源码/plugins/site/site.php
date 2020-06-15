<?php



!defined('IN_ONEZ') && exit('Access Denied');
class onezphp_site extends onezphp{
  function __construct(){
  }
  function myconfig(){
    return array();
  }
  function plugin(){
    global $G;
    $__ptoken=onez()->gp('_ptoken');
    $__method=onez()->gp('_method');
    if(!$__ptoken){
      return;
    }
    if(!onez()->exists($__ptoken)){
      return;
    }
    if(method_exists(onez($__ptoken),$__method)){
      onez($__ptoken)->$__method();
    }
  }
  function index(){
    global $G;
    $this->init();
    $G['this'] && onez('call')->add($G['this']->token);
    onez('call')->call('index');
    if(file_exists($this->path.'/site/www/index.php')){
      onez()->start($this->path.'/site');
      return $this;
    }
    $this->www();
    return $this;
  }
  function admin(){
    onez('main')->init()->www();
  }
  function m(){
    onez('m')->auto();
  }
  function weixin(){
    onez('site.weixin')->api();
  }
  function game(){
    onez('site.game')->auto();
  }
  function game2(){
    onez('game')->api();
  }
  #验证登录账号
  function _login_callback($username,$password,$password_md5){
    global $G;
    $r=onez('user')->_login_callback($username,$password,$password_md5);
    if($r===false){
      $T=$G['this']->data()->open('member')->one("`grade`='admin'");
      if(!$T){
        $arr=array();
        $arr['nickname']='超级管理员';
        $arr['username']='admin';
        $arr['password']=md5('admin');
        $arr['grade']='admin';
        $G['this']->data()->open('member')->insert($arr);
        $r=onez('user')->_login_callback($username,$password,$password_md5);
      }
    }
    return $r;
  }
  function nocheck(){
    define('IS_SITE_FRONT',1);
  }
  #注册新账号
  function _register_callback($username,$password,$password_md5){
    global $G;
    $r=onez('user')->register(array(
      'username'=>$username,
      'password'=>$password,
      'password_md5'=>$password_md5,
      'type'=>'web',
    ));
    if(is_string($r)){
      return array('error'=>$r);
    }
    return "$r[userid]\t$r[username]\t$loginstr";
  }
  function init(){
    global $G;
    if($G['SITE_INIT_NONE']){
      return;
    }
    $appid=$G['appid']=(int)onez()->gp('appid');
    $siteid=$G['siteid']=(int)onez()->gp('siteid');
    if($appid){
      !$G['href_extra'] && $G['href_extra']=array();
      $G['href_extra']['appid']=$appid;
    }
    if($siteid){
      !$G['href_extra'] && $G['href_extra']=array();
      $G['href_extra']['siteid']=$siteid;
    }
    !$G['this'] && $G['this']=$this;
    $_m=onez()->gp('_m');
    if($_m && $_m!='index'){
      return;
    }
    //只运行一次
    if($this->get('is_init')){
      return;
    }
    $this->set('is_init',1);
    
    
    $plugin_init=$this->option('plugin_init');
    if($plugin_init){
      if(onez()->exists($plugin_init)){
        if (is_callable(array(onez($plugin_init), 'plugin_init'))) {
          return call_user_func_array(array(onez($plugin_init), 'plugin_init'), array());
        }
      }
    }
    $mod=onez()->gp('mod');
    $mod=trim($mod,'/');
    if($mod=='logout.php'){
      if(function_exists('_on_logout')){
        _on_logout();
      }
      onez('cache')->cookie('quick_userid','del');
      onez('cache')->cookie('userid','del');
      onez('cache')->cookie($this->cname,'del');
      onez()->location(onez()->href('/index.php'));
    }
    list($grade)=explode('/',$mod);
    $G['url.grade']=$grade;
    
    $conFile=$this->path.'/config.php';
    if(file_exists($conFile)){
      include($conFile);
    }
    if(defined('ONEZ_USERTYPE')){
      onez('user')->set('usertype',ONEZ_USERTYPE);
    }
    #站点设置不判断登录
    $myconfig=$this->myconfig();
    if($myconfig['nocheck']){
      return $this;
    }
    if(!defined('IS_SITE_FRONT')){
      #公共
      if(file_exists(dirname(__FILE__).'/www/config.php')){
        include(dirname(__FILE__).'/www/config.php');
      }
      $login=onez('login')->init($G['this']->cname);
      $G['userid']=(int)$login['id'];
      $G['loginstr']=$login['extra'];
      
      $G['user']=onez('user')->info($G['userid']);
      $G['nickname']=$G['user']['realname'];
      !$G['nickname'] && $G['nickname']=$G['user']['username'];
      $G['avatar']=onez('user')->avatar($G['userid']);
      !$G['user']['grade'] && $G['user']['grade']='users';
      #特殊
      list($grade)=explode('/',$mod);
      if($grade=='admin'){
        if($G['user']['grade']!='admin'){
          onez('showmessage')->error('没有权限',onez()->href('/index.php'));
        }
        include(dirname(__FILE__).'/www/admin/init.php');
      }
      $G['grade']=$G['user']['grade'];
      if($G['user']['grade']=='admin' && $grade!='admin'){
        onez('admin')->menu_top_left.='<ul class="nav navbar-nav">
  <li><a href="'.onez()->href('/admin/index.php').'">超级管理</a></li>
</ul>';
      }
      
      onez('admin')->menu_top_right.='<ul class="nav navbar-nav">
  <li><a href="'.onez()->href('/common/setpwd.php').'" class="onez-miniwin">修改密码</a></li>
</ul>';
      $initFile=$this->path.'/www/'.$grade.'/init.php';
      if(file_exists($initFile)){
        include($initFile);
      }else{
        $_onez=onez()->gp('_onez');
        if($_onez){
          list($ptoken,$urlfile)=explode('|',$_onez);
          if($ptoken=='onez'){
            return;
          }
        }
      }
      $Menu=array();
      $menuFile=$this->path.'/www/'.$grade.'/menu.inc.php';
      if(file_exists($menuFile)){
        $Menu=array_merge($Menu,include($menuFile));
      }
      if($grade=='admin'){
        onez('admin.menu')->init($grade,$Menu);
      }
      onez('admin')->menu=$Menu;
    }
    return $this;
  }
  function getExtra($method,&$obj=false){
    global $G;
    $classes=array();
    if($G['nodes']){
      foreach(array_keys($G['nodes']) as $ptoken){
        if($ptoken=='site'){
          continue;
        }
        $p=onez($ptoken);
        if(method_exists($p,$method)){
          $classname=$p->classname();
          if(in_array($classname,$classes)){
            continue;
          }
          $classes[]=$classname;
          $p->$method($obj);
        }
      }
    }
    foreach(onez('store')->addons() as $p){
      if(method_exists($p,$method)){
        $classname=$p->classname();
        if(in_array($classname,$classes)){
          continue;
        }
        $classes[]=$classname;
        $p->$method($obj);
      }
    }
  }
  function m_notmpl($action){
    if(!onez()->exists('site.mobile')){
      return;
    }
    onez('site.mobile')->parse($action);
  }
  function mod_not_exists(&$myFile,&$modFile,$www_path,&$mod){
    global $G;
    onez('user')->set('usertype','user');
    if(defined('ONEZ_USERTYPE')){
      onez('user')->set('usertype',ONEZ_USERTYPE);
    }
    $_onez=onez()->gp('_onez');
    if($_onez){
      list($ptoken,$urlfile)=explode('|',$_onez);
      if(onez()->exists($ptoken)){
        $urlfile=str_replace('?','&',$urlfile);
        $index=strpos($urlfile,'&');
        $args='';
        if(!$index===false){
          $args=trim(substr($urlfile,$index),'&');
          $urlfile=substr($urlfile,0,$index);
        }
        if($args){
          parse_str($args,$info);
          if($info){
            $_GET=array_merge($_GET,$info);
            $_REQUEST=array_merge($_REQUEST,$info);
          }
        }
        $myFile=onez($ptoken)->path.'/www/'.trim($urlfile,'/');
        if(file_exists($myFile)){
          onez($ptoken)->www_check($mod,$urlfile);
          include($myFile);
          exit();
        }
        $_ptoken=get_class(onez($ptoken));
        $_ptoken=get_parent_class($_ptoken);
        while($_ptoken && $_ptoken!='onezphp'){
          $_ptoken=substr($_ptoken,8);
          $myFile=onez($_ptoken)->path.'/www/'.trim($urlfile,'/');
          if(file_exists($myFile)){
            onez($_ptoken)->www_check($mod,$urlfile);
            include($myFile);
            exit();
          }
          $_ptoken=get_class(onez($_ptoken));
          $_ptoken=get_parent_class($_ptoken);
        }
        
      }
      define('CUR_URL',onez($ptoken)->href($urlfile));
      $mod=''.$ptoken.':'.$urlfile;
      #404提示
      onez('admin')->title=$G['title']='系统提示';
      onez('admin')->header();
      include_once(dirname(__FILE__).'/php/404.php');
      onez('admin')->footer();
      exit();
      return;
    }
    $modFile=dirname(__FILE__).'/www/'.$mod;
    if(file_exists($modFile)){
      return;
    }
    #404提示
    onez('admin')->title=$G['title']='系统提示';
    onez('admin')->header();
    include_once(dirname(__FILE__).'/php/404.php');
    onez('admin')->footer();
    exit();
  }
  function homepage(){
    global $G;
    if($G['app']['siteurl']){
      return $G['app']['siteurl'];
    }
    if($G['app']['token']){
      return 'http://'.$G['app']['token'].'.site.onez.cn';
    }
    return onez()->homepage();
  }
  function error($msg){
    global $G;
    if($G['is_mobile']){
      onez()->location(onez()->homepage().'/m.php?action=status&status=error&text='.urlencode($msg));
    }
  }
  function db_init($tablename,$text='',$number='',$money=''){
    global $G;
    $arr=array();
    $text && $arr['text']=$text;
    $number && $arr['number']=$number;
    $money && $arr['money']=$money;
    
    if($arr){
      $this->data()->init('site.'.$this->token,$tablename,$arr,1);
    }
    return $this;
  }
  function option($key=false,$default=false){
    global $G;
    
    $appid=(int)onez()->gp('appid');
    $siteid=(int)onez()->gp('siteid');
    $has_appid=1;
    if($this->data()->get('noappid')){
      $has_appid=0;
      $appid=0;
      $siteid=0;
    }
    
    $option=$this->get("option.$appid.$siteid");
    if(!$option){
      if(defined('ONEZ_DB_CACHE')){
        $file=ONEZ_DB_CACHE.'/option/'.$this->token.'/'.$appid.'.'.$siteid.'.php';
        if(file_exists($file)){
          $option=include($file);
        }
      }
    }
    if(!$option){
      $option=$this->data()->open('option')->one("1");
      !$option && $option=array();
      $this->set("option.$appid.$siteid",$option);
      if(defined('ONEZ_DB_CACHE')){
        $file=ONEZ_DB_CACHE.'/option/'.$this->token.'/'.$appid.'.'.$siteid.'.php';
        $option['maketime']=time();
        onez()->write($file,"<?php\n!defined('IN_ONEZ') && exit('Access Denied');\nreturn ".var_export($option,1).";");
      }
      
    }
    if($key===false){
      return $option;
    }
    if(!$option[$key] && $default!==false){
      return $default;
    }
    return $option[$key];
  }
  function option_set($arr){
    
    $appid=(int)onez()->gp('appid');
    $siteid=(int)onez()->gp('siteid');
    $has_appid=1;
    if($this->data()->get('noappid')){
      $has_appid=0;
      $appid=0;
      $siteid=0;
    }
    
    $option=$this->data()->open('option')->one("1");
    if(!$option['id']){
      $this->data()->open('option')->insert(array('key1'=>'option'));
    }
    foreach($arr as $k=>$v){
      $option[$k]=$v;
    }
    $this->set("option.$appid.$siteid",$option);
    $option && $this->data()->open('option')->update($option,"key1='option'");
    if(defined('ONEZ_DB_CACHE')){
      $file=ONEZ_DB_CACHE.'/option/'.$this->token.'/'.$appid.'.'.$siteid.'.php';
      $option['maketime']=time();
      onez()->write($file,"<?php\n!defined('IN_ONEZ') && exit('Access Denied');\nreturn ".var_export($option,1).";");
    }
  }
  function bak(){
    $token=$this->token;
    $T=onez('db')->open('data')->record("namespace='site.$token' order by id");
    
    $record=array();
    $record['data']=$T;
    
    $record=serialize($record);
    $record=base64_encode($record);
    $record="<?php
!defined('IN_ONEZ') && exit('Access Denied');
?>$record";
    return $record;
  }
  function copy($tablename,$id_src,$id_to){
    $token=$this->token;
    onez('data')->copytable($token,$token,$tablename,$tablename,$id_src,$id_to);
  }
  function userinit($item){
    global $G;
    if($this->token=='site'){
      return;
    }
    $u=$G['this']->data()->open('member')->one("key11='$item[type]' and key12='$item[token]'");
      
    if(!$u){
      $password_md5=md5($item['type'].$item['token']);
      $username=uniqid();
      $email='wx'.$username.'@wx.onez.cn';
      $onez=array();
      $onez['key11']=$item['type'];
      $onez['key12']=$item['token'];
      $onez['username']=$username;
      $onez['nickname']=$item['nickname'];
      $onez['openid']=$item['openid'];
      $onez['email']=$email;
      $onez['password']=$password_md5;
      $onez['infotime']=time();
      $onez['infoip']=onez()->ip();
      $onez['upuid']=(int)onez('cache')->cookie('upuid');
      $onez['upuid']==$userid && $onez['upuid']=0;
    
      $userid=$G['this']->data()->open('member')->insert($onez);
      $u=$G['this']->data()->open('member')->one("id='$userid'");
      if($item['avatar']){
        $data=onez()->post($item['avatar']);
        if($data){
        	$myid = sprintf("%09d", $userid);
        	$dir1 = substr($myid, 0, 3);
        	$dir2 = substr($myid, 3, 2);
        	$dir3 = substr($myid, 5, 2);
          $avatarFile=ONEZ_CACHE_PATH.'/files/avatars/'.$G['this']->cname.'/'.$dir1.'/'.$dir2.'/'.$dir3.'/'.substr($myid, -2).'.jpg';
          onez()->write($avatarFile,$data);
        }
      }
    }else{
      $userid=$u['id'];
      $onez=array();
      $onez['userid']=$userid;
      $onez['nickname']=$item['nickname'];
      $onez['openid']=$item['openid'];
    
      $G['this']->data()->open('member')->update($onez,"id='$userid'");
      
      if($item['avatar']){
        $data=onez()->post($item['avatar']);
        if($data){
        	$myid = sprintf("%09d", $userid);
        	$dir1 = substr($myid, 0, 3);
        	$dir2 = substr($myid, 3, 2);
        	$dir3 = substr($myid, 5, 2);
          $avatarFile=ONEZ_CACHE_PATH.'/files/avatars/'.$G['this']->cname.'/'.$dir1.'/'.$dir2.'/'.$dir3.'/'.substr($myid, -2).'.jpg';
          onez()->write($avatarFile,$data);
        }
      }
    }
    if($u){
      onez('cache')->cookie('userid'.$G['this']->cname,$u['id']);
      $G['userid']=$u['id'];
      
    }
    $goto=onez()->gp('goto');
    if($goto){
      onez()->location($goto);
    }elseif(defined('HOMEPAGE')){
      onez()->location(HOMEPAGE);
    }else{
      onez()->location(onez()->cururl(false,array('code','callback')));
    }
  }
  function avatar($userid){
    global $G;
  	$myid = sprintf("%09d", $userid);
  	$dir1 = substr($myid, 0, 3);
  	$dir2 = substr($myid, 3, 2);
  	$dir3 = substr($myid, 5, 2);
    $avatarFile='/files/avatars/'.$G['this']->cname.'/'.$dir1.'/'.$dir2.'/'.$dir3.'/'.substr($myid, -2).'.jpg';
    if(file_exists(ONEZ_CACHE_PATH.$avatarFile)){
      return ONEZ_CACHE_URL.$avatarFile;
    }else{
      return $this->url.'/images/avatar.jpg';
    }
  }
  function thumb($url){
    if(!$url){
      return $this->url.'/images/nopic.png';
    }
    $file=str_replace(onez()->homepage(),'',$url);
    if(!file_exists(ONEZ_ROOT.$file)){
      return $url;
    }
    $thumb=substr($file,0,-4).'.thumb.jpg';
    $picFile=ONEZ_CACHE_PATH.$file;
    $thumbFile=ONEZ_CACHE_PATH.$thumb;
    if(!file_exists($thumbFile)){
      $data=onez('image')->load($picFile)->resize(64,64)->data();
      onez()->write($thumbFile,$data);
    }
    return ONEZ_CACHE_URL.$thumb;
  }
  function action($action){
    return $action.'&myaction=event&ptoken='.$this->token;
  }
  function tmpl($action){
    global $A,$record,$G;
    $file=$this->path.'/tmpls/'.$action.'.php';
    if(file_exists($file)){
      include($file);
    }
  }
    /*
  function bind_setting(){
    $arr=onez('call')->get('setting');
    
    #分类
    $arr[]=array('label'=>'网站设置(site)','type'=>'group','key'=>'site',);
    
    $arr[]=array('label'=>'是否允许注册','type'=>'checkbox','key'=>'site_login_register');
    $arr[]=array('label'=>'是否显示二维码','type'=>'checkbox','key'=>'site_login_rndcode');
    $arr[]=array('label'=>'是否开启扫码登录','type'=>'checkbox','key'=>'site_login_qrcode');
    
    onez('call')->set('setting',$arr);
  }
  */
  function cloud($form,$key,$key_hidden,$servicename){
    global $G;
    if(!$this->get('is_cloud_ok')){
      $this->set('is_cloud_ok',1);
      $url='http://service.onez.cn/?_m=home&onez_siteid='.onez()->myoption('onez_siteid').'&appid='.$G['appid'].'&siteid='.$G['siteid'].'&userid='.$G['userid'];
      $G['footer-js'].=<<<ONEZ
onez.onez_service_cloud_init=function(key,key_hidden,servicename){
  var input=$('#input-'+key);
  var p=input.parents('.form-group');
  var label=p.find('label');
  var url='$url';
  url+='&input='+key;
  url+='&input_hidden='+key_hidden;
  url+='&sname='+encodeURIComponent(servicename);
  label.html(label.html()+' <a data-width="1280" class="onez-miniwin btn btn-xs btn-info" href="'+url+'">选择</a>');
  input.addClass('onez-service-cloud');
  
};
$(function(){
  window.addEventListener('message', function(event){
    var data=event.data;
    for(var k in event.data){
      $('#input-'+k).val(event.data[k]);
      if($('#input-'+k).length>0){
        try{
          OnezUploadResult(k,'ok',event.data[k]);
        }catch(e){
        }
      }
    }
    closeWin();
  }, false);
});
ONEZ;
    }
    if($key_hidden){
      $form->add(array('type'=>'hidden','key'=>$key_hidden,'value'=>'','save'=>'1'));
    }
    $G['footer-js'].=<<<ONEZ
onez.onez_service_cloud_init('$key','$key_hidden','$servicename');
ONEZ;
  }
  function addlog(){
    global $G;
    $args=func_get_args();
    list($subject,$token)=$args;
    $log=array();
    $log['userid']=$G['userid'];
    $log['key1']=$subject;
    $log['key2']=onez()->ip();
    $log['token']=$token;
    $log['get']=$_GET;
    $G['this']->data()->open('log')->insert($log);
  }
}