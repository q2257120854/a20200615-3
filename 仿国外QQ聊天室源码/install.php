<?php
/* ========================================================================
 * Email:xxx
 * QQ:xxx
 * HomePage:xxx
 * ========================================================================
 * Copyright 2020 葫芦侠一只小可爱丶
 * 
 * ======================================================================== */
error_reporting(E_ALL ^ E_NOTICE);
@set_time_limit(0);

ob_start();
define('ONEZ_ROOT', str_replace("\\",'/', dirname(__FILE__)));
define('APP_STORE_URL', 'http://www.yunziyuan.com');
define('APP_STORE_API', 'http://www.yunziyuan.com/api/usersite.php');
define('ONEZ_PKEY', 'PKEY-29092');
if($_GET['res']) {
	$res = $_GET['res'];
	$reses = tpl_resources();
	if(array_key_exists($res, $reses)) {
		if($res == 'css') {
			header('content-type:text/css');
		} else {
			header('content-type:image/png');
		}
		echo base64_decode($reses[$res]);
		exit();
	}
  
}

$actions = array('license', 'env', 'onez', 'db', 'finish');
$action = $_COOKIE['action'];
$action = in_array($action, $actions) ? $action : 'license';
$ispost = strtolower($_SERVER['REQUEST_METHOD']) == 'post';
if(file_exists(ONEZ_ROOT . '/cache/install.lock') && $action != 'finish') {
	header('location: ./index.php');
	exit;
}
header('content-type: text/html; charset=utf-8');
if($action == 'license') {
	if($ispost) {
		setcookie('action', 'env');
		header('location: ?refresh');
		exit;
	}
	tpl_install_license();
}
if($action == 'env') {
	if($ispost) {
		setcookie('action', $_POST['do'] == 'continue' ? 'onez' : 'license');
		header('location: ?refresh');
		exit;
	}
	$ret = array();
	$ret['server']['os']['value'] = php_uname();
	if(PHP_SHLIB_SUFFIX == 'dll') {
		$ret['server']['os']['remark'] = '建议使用 Linux 系统以提升程序性能';
		$ret['server']['os']['class'] = 'warning';
	}
	$ret['server']['sapi']['value'] = $_SERVER['SERVER_SOFTWARE'];
	if(PHP_SAPI == 'isapi') {
		$ret['server']['sapi']['remark'] = '建议使用 Apache 或 Nginx 以提升程序性能';
		$ret['server']['sapi']['class'] = 'warning';
	}
	$ret['server']['php']['value'] = PHP_VERSION;
	$ret['server']['dir']['value'] = ONEZ_ROOT;
	if(function_exists('disk_free_space')) {
		$ret['server']['disk']['value'] = floor(disk_free_space(ONEZ_ROOT) / (1024*1024)).'M';
	} else {
		$ret['server']['disk']['value'] = 'unknow';
	}
	$ret['server']['upload']['value'] = @ini_get('file_uploads') ? ini_get('upload_max_filesize') : 'unknow';

	$ret['php']['version']['value'] = PHP_VERSION;
	$ret['php']['version']['class'] = 'success';
	if(version_compare(PHP_VERSION, '5.3.0') == -1) {
		$ret['php']['version']['class'] = 'danger';
		$ret['php']['version']['failed'] = true;
		$ret['php']['version']['remark'] = 'PHP版本必须为 5.3.0 以上. ';
	}

	$ret['php']['fopen']['ok'] = @ini_get('allow_url_fopen') && function_exists('fsockopen');
	if($ret['php']['fopen']['ok']) {
		$ret['php']['fopen']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
	} else {
		$ret['php']['fopen']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
	}

	$ret['php']['curl']['ok'] = extension_loaded('curl') && function_exists('curl_init');
	if($ret['php']['curl']['ok']) {
		$ret['php']['curl']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
		$ret['php']['curl']['class'] = 'success';
	} else {
		$ret['php']['curl']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
		$ret['php']['curl']['class'] = 'danger';
		$ret['php']['curl']['remark'] = '您的PHP环境不支持cURL, 也不支持 allow_url_fopen, 系统无法正常运行.';
		$ret['php']['curl']['failed'] = true;
	}

	$ret['php']['ssl']['ok'] = extension_loaded('openssl');
	$ret['php']['ssl']['ok'] = 1;
	if($ret['php']['ssl']['ok']) {
		$ret['php']['ssl']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
		$ret['php']['ssl']['class'] = 'success';
	} else {
		$ret['php']['ssl']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
		$ret['php']['ssl']['class'] = 'danger';
		$ret['php']['ssl']['failed'] = true;
		$ret['php']['ssl']['remark'] = '没有启用OpenSSL, 将无法访问云端接口, 系统无法正常运行.';
	}

	$ret['php']['gd']['ok'] = extension_loaded('gd');
	if($ret['php']['gd']['ok']) {
		$ret['php']['gd']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
		$ret['php']['gd']['class'] = 'success';
	} else {
		$ret['php']['gd']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
		$ret['php']['gd']['class'] = 'danger';
		$ret['php']['gd']['failed'] = true;
		$ret['php']['gd']['remark'] = '没有启用GD, 将无法正常上传和压缩图片, 系统无法正常运行. ';
	}

	$ret['php']['dom']['ok'] = class_exists('DOMDocument');
	if($ret['php']['dom']['ok']) {
		$ret['php']['dom']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
		$ret['php']['dom']['class'] = 'success';
	} else {
		$ret['php']['dom']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
		$ret['php']['dom']['class'] = 'danger';
		$ret['php']['dom']['failed'] = true;
		$ret['php']['dom']['remark'] = '没有启用DOMDocument, 将无法正常安装使用模块, 系统无法正常运行. ';
	}


	$ret['php']['asp_tags']['ok'] = ini_get('asp_tags');
	if(empty($ret['php']['asp_tags']['ok']) || strtolower($ret['php']['asp_tags']['ok']) == 'off') {
		$ret['php']['asp_tags']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
		$ret['php']['asp_tags']['class'] = 'success';
	} else {
		$ret['php']['asp_tags']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
		$ret['php']['asp_tags']['class'] = 'danger';
		$ret['php']['asp_tags']['failed'] = true;
		$ret['php']['asp_tags']['remark'] = '请禁用可以使用ASP 风格的标志，配置php.ini中asp_tags = Off';
	}

	$ret['write']['root']['ok'] = local_writeable(ONEZ_ROOT . '/');
	if($ret['write']['root']['ok']) {
		$ret['write']['root']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
		$ret['write']['root']['class'] = 'success';
	} else {
		$ret['write']['root']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
		$ret['write']['root']['class'] = 'danger';
		$ret['write']['root']['failed'] = true;
		$ret['write']['root']['remark'] = '本地目录无法写入, 将无法使用自动更新功能, 系统无法正常运行.  ';
	}
	$ret['write']['cache']['ok'] = local_writeable(ONEZ_ROOT . '/cache');
	if($ret['write']['cache']['ok']) {
		$ret['write']['cache']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
		$ret['write']['cache']['class'] = 'success';
	} else {
		$ret['write']['cache']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
		$ret['write']['cache']['class'] = 'danger';
		$ret['write']['cache']['failed'] = true;
		$ret['write']['cache']['remark'] = 'cache目录无法写入, 将无法写入配置文件, 系统无法正常安装. ';
	}
	$ret['write']['plugins']['ok'] = local_writeable(ONEZ_ROOT . '/plugins');
	if($ret['write']['plugins']['ok']) {
		$ret['write']['plugins']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
		$ret['write']['plugins']['class'] = 'success';
	} else {
		$ret['write']['plugins']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
		$ret['write']['plugins']['class'] = 'danger';
		$ret['write']['plugins']['failed'] = true;
		$ret['write']['plugins']['remark'] = 'plugins目录无法写入, 将无法写入配置文件, 系统无法正常安装. ';
	}

	$ret['continue'] = true;
	foreach($ret['php'] as $opt) {
		if($opt['failed']) {
			$ret['continue'] = false;
			break;
		}
	}
	if($ret['write']['failed']) {
		$ret['continue'] = false;
	}
	tpl_install_env($ret);
}
if($action == 'onez') {
  if(defined('ONEZ_PKEY') && ONEZ_PKEY!=''){
		setcookie('action', 'db');
		header('location: ?refresh');
		exit();
  }
	$userkey = $_GET['userkey'];
  if($userkey){
    setcookie('userkey', $userkey);
		setcookie('action', 'onez');
		header('location: ?refresh');
		exit();
  }
	$userkey = $_COOKIE['userkey'];
	if(!$ispost) {
    if($userkey){
      $ispost=1;
      $_POST['do']='continue';
      $_POST['onez']=array(
        'type'=>'check',
        'userkey'=>$userkey,
      );
    }
  }
	if($ispost) {
		if($_POST['do'] != 'continue') {
			setcookie('action', 'env');
			header('location: ?refresh');
			exit();
		}
    
    $onez=$_POST['onez'];
    $post=array(
      'action'=>'product',
      'data'=>base64_encode(json_encode($onez)),
    );
  	$ch = curl_init();
  	curl_setopt($ch, CURLOPT_URL, APP_STORE_API);
  	curl_setopt($ch, CURLOPT_POST, 1);
  	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	$content = curl_exec($ch);
  	curl_close($ch);
    $json=json_decode($content,1);
    if($json['error']){
      tpl_install_onez($json['error']);
    }
    if(isset($json['userkey'])){
      setcookie('userkey', $json['userkey']);
    }
    if($json['action']){
			setcookie('action', $json['action']);
			header('location: ?refresh');
			exit();
    }
    if($json['content']){
      tpl_install_onez('',base64_decode($json['content']));
    }
    if($json['extra']){
      mkdirs(dirname(ONEZ_ROOT.'/cache'));
      file_put_contents(ONEZ_ROOT.'/cache/install.extra',$json['extra']);
      if(!file_exists(ONEZ_ROOT.'/cache/install.extra')){
        tpl_install_db('请确认你的安装程序目录有写入权限. 多次安装失败, 请访问论坛获取解决方案！');
      }
    }
    
    
		setcookie('action', 'db');
		header('location: ?refresh');
		exit();
	}
  tpl_install_onez('');
}
if($action == 'db') {
  $G['hasdata']=0;
	if($ispost) {
		if($_POST['do'] != 'continue') {
			setcookie('action', 'onez');
			header('location: ?refresh');
			exit();
		}
    if(!file_exists(dirname(__FILE__).'/lib/onezphp.php')){
      $post=array(
        'action'=>'download',
      );
    }else{
      $post=array(
        'action'=>'download2',
      );
    }
    $post['userkey']=$_COOKIE['userkey'];
    if(file_exists(ONEZ_ROOT.'/cache/install.extra')){
      $post['extra']=file_get_contents(ONEZ_ROOT.'/cache/install.extra');
    }
  	$ch = curl_init();
  	curl_setopt($ch, CURLOPT_URL, APP_STORE_API);
  	curl_setopt($ch, CURLOPT_POST, 1);
  	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	$content = curl_exec($ch);
  	curl_close($ch);
    $json=json_decode($content,1);
    if($json['error']){
      tpl_install_db($json['error']);
    }
    if(!file_exists(dirname(__FILE__).'/lib/onezphp.php')){
      if(!$json['files']['lib/onezphp.php']){
        tpl_install_db('获取安装信息失败，可能是由于网络不稳定，请重试。');
      }
    }
    foreach($json['files'] as $file=>$data){
      $data=base64_decode($data);
      mkdirs(dirname(ONEZ_ROOT.'/'.$file));
      file_put_contents(ONEZ_ROOT.'/'.$file,$data);
      if(!file_exists(ONEZ_ROOT.'/'.$file)){
        tpl_install_db('请确认你的安装程序目录有写入权限. 多次安装失败, 请访问论坛获取解决方案！');
      }
    }
      
      
    include_once(dirname(__FILE__).'/lib/onezphp.php');
    $db=$_POST['db'];
    $user=$_POST['user'];
    if(!$user['username']){
      tpl_install_db('管理员账号不能为空');
    }
    if(!$user['password']){
      tpl_install_db('管理员密码不能为空');
    }
    $link=@mysql_connect($db['server'], $db['username'], $db['password']);
    if(!$link){
      tpl_install_db('无法连接数据库，请检查数据库账号和密码是否正确');
    }
  	if(!@mysql_select_db($db['name'], $link)){
      @mysql_query('CREATE DATABASE IF NOT EXISTS `'.$db['name'].'` DEFAULT CHARSET utf8 COLLATE utf8_general_ci;', $link);
      $error=mysql_error();
      if(!@mysql_select_db($db['name'], $link)){
        tpl_install_db('数据库<code>'.$db['name'].'</code>不存在且无法创建，请检查['.$error.']');
      }
    }
		$statement = @mysql_query("SHOW TABLES LIKE '{$db['prefix']}%';",$link);
		if ($statement) {
      $rs=mysql_fetch_array($statement);
      if($rs){
        if($_POST['clear']){
          @mysql_query("DROP TABLE IF EXISTS {$db['prefix']}data;",$link);
          @mysql_query("DROP TABLE IF EXISTS {$db['prefix']}device;",$link);
          @mysql_query("DROP TABLE IF EXISTS {$db['prefix']}member;",$link);
          @mysql_query("DROP TABLE IF EXISTS {$db['prefix']}order;",$link);
        }else{
          $G['hasdata']=1;
          tpl_install_db('');
        }
      }
		}
    $code=<<<ONEZ
<?php
!defined('IN_ONEZ') && exit('Access Denied');
return array(
  'dbhost'=>'$db[server]',
  'dbuser'=>'$db[username]',
  'dbpass'=>'$db[password]',
  'dbname'=>'$db[name]',
  'dbcharset'=>'utf8',
  'tablepre'=>'$db[prefix]',
  'pconnect'=>'1',
);
ONEZ;
    onez()->write(ONEZ_ROOT.'/config/db.default.php',$code);
    #安装数据库
    $sysFile=ONEZ_ROOT.'/cache/dbtables.php';
    if(file_exists($sysFile)){
      $dbtables=include($sysFile);
      if($dbtables){
        foreach($dbtables as $tablename=>$table){
          $sql=onez('db')->create_mysql($tablename,$table['idname'],$table['fields']);
          onez('db')->db()->query($sql);
        }
      }
    }
    #默认数据
    $sysFile=ONEZ_ROOT.'/cache/datas.default.php';
    if(file_exists($sysFile)){
      $value=onez()->read($sysFile);
      if($value){
        $value=substr($value,strpos($value,'?>')+2);
        $value=base64_decode($value);
        $value=unserialize($value);
        if($value){
          foreach($value as $table=>$datas){
            if(is_numeric($table)){
              $datas['namespace']='site.main';
              $datas['tablename']=$datas['tablename'];
              $datas['appid']='0';
              $datas['siteid']='0';
              onez('db')->open('data')->insert($datas);
            }else{
              foreach($datas as $rs){
                if(!empty($rs)){
                  $rs['namespace']='site.main';
                  $rs['appid']='0';
                  $rs['siteid']='0';
                  onez('db')->open($table)->insert($rs);
                }
              }
            }
          }
        }
      }
    }
    $G['this']=onez('main');
    #写入管理账号
    $userid=onez('db')->open('member')->insert(array(
      'username'=>$user['username'],
      'password'=>md5($user['password']),
      'grade'=>'admin',
      'infotime'=>time(),
      'infoip'=>onez()->ip(),
    ));
    $G['this']->db_init('member','grade,username,password,mobile','appid,upid','amt,amt_pay,amt_charge,amt_lock');
    $T=$G['this']->data()->open('member')->one("`username`='$user[username]'");
    if($T){
      $G['this']->data()->open('member')->update(array(
        'nickname'=>$user['username'],
        'password'=>md5($user['password']),
        'grade'=>'admin',
        'infotime'=>time(),
        'infoip'=>onez()->ip(),
      ),"`username`='$user[username]'");
    }else{
      $G['this']->data()->open('member')->insert(array(
        'nickname'=>$user['username'],
        'username'=>$user['username'],
        'password'=>md5($user['password']),
        'grade'=>'admin',
        'infotime'=>time(),
        'infoip'=>onez()->ip(),
      ));
    }
    onez('cache')->cookie('main',"$userid\t$user[username]\t".uniqid(),0);
    
    $pkey='';
    if(file_exists(ONEZ_ROOT.'/cache/install.extra')){
      $extra=file_get_contents(ONEZ_ROOT.'/cache/install.extra');
      $json=json_decode(base64_decode($extra),1);
      if(!empty($json['pkey'])){
        $pkey=$json['pkey'];
      }
    }
    if(!$pkey && defined('ONEZ_PKEY') && ONEZ_PKEY!=''){
      $pkey=ONEZ_PKEY;
    }
    define('IS_SITE_FRONT',1);
    #带产品识别码的安装
    if($pkey){
      $post=array();
      $post['action']='install';
      $post['userkey']=$_COOKIE['userkey'];
      $post['pkey']=$pkey;
      $post['homepage']=onez()->homepage();
      $response = onez()->post(APP_STORE_API, http_build_query($post));
      $json=json_decode($response,1);
      $arr=array();
      foreach($json as $k=>$v){
        if(strpos($k,'onez_')!==false){
          $arr[$k]=$v;
        }
      }
      onez()->myoption_set($arr);
      if($json['files']){
        foreach($json['files'] as $file=>$data){
          $data=base64_decode($data);
          mkdirs(dirname(ONEZ_ROOT.'/'.$file));
          file_put_contents(ONEZ_ROOT.'/'.$file,$data);
        }
      }
      if($json['addon']){
        onez('onez')->install($json['addon']);
      }
      if($json['addons']){
        foreach($json['addons'] as $v){
          onez('onez')->install($v);
        }
      }
      if($json['error']){
        tpl_install_db($json['error']);
      }
      if($json['datas']){
        onez('onez')->import($json['datas']);
      }
      if($json['plugins'] && is_array($json['plugins'])){
        foreach($json['plugins'] as $v){
          onez($v);
        }
      }
    }
    
    if(file_exists(ONEZ_ROOT.'/cache/install.extra')){
      @unlink(ONEZ_ROOT.'/cache/install.extra');
    }
		touch(ONEZ_ROOT . '/cache/install.lock');
		setcookie('action', 'finish');
		setcookie('userkey', '');
		header('location: ?refresh');
		exit();
	}
  tpl_install_db('');
}
if($action == 'finish') {
	setcookie('action', '', -10);
	tpl_install_finish();
}

function mkdirs($dir){
  if(!is_dir($dir)){
    mkdirs(dirname($dir));
    mkdir($dir,0777);
  }
  return ;
}
function local_writeable($dir) {
	$writeable = 0;
	if(!is_dir($dir)) {
		@mkdir($dir, 0777);
	}
	if(is_dir($dir)) {
		if($fp = fopen("$dir/test.txt", 'w')) {
			fclose($fp);
			unlink("$dir/test.txt");
			$writeable = 1;
		} else {
			$writeable = 0;
		}
	}
	return $writeable;
}



function tpl_frame() {
	global $action, $actions;
	$action = $_COOKIE['action'];
	$step = array_search($action, $actions);
	$steps = array();
	for($i = 0; $i <= $step; $i++) {
		if($i == $step) {
			$steps[$i] = ' list-group-item-info';
		} else {
			$steps[$i] = ' list-group-item-success';
		}
	}
	$progress = $step * 20 + 20;
	$content = ob_get_contents();
	ob_clean();
	$tpl = <<<EOF
<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>安装仿QQ群聊天系统</title>
		<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<style>
			html,body{font-size:13px;font-family:"Microsoft YaHei UI", "微软雅黑", "宋体";}
			.pager li.previous a{margin-right:10px;}
			.header a{color:#FFF;}
			.header a:hover{color:#428bca;}
			.footer{padding:10px;}
			.footer a,.footer{color:#eee;font-size:14px;line-height:25px;}
		</style>
		<!--[if lt IE 9]>
		  <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>
	<body style="background:url(?res=background) repeat">
		<div class="container">
			<div class="header" style="margin:15px auto;">
				<ul class="nav nav-pills pull-right" role="tablist">
					<li role="presentation" class="active"><a href="javascript:;">安装向导</a></li>
				</ul>
				<img src="?res=logo" height="40" />
			</div>
			<div class="row well" style="margin:auto 0;">
				<div class="col-xs-3">
					<div class="progress" title="安装进度">
						<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="{$progress}" aria-valuemin="0" aria-valuemax="100" style="width: {$progress}%;">
							{$progress}%
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							安装步骤
						</div>
						<ul class="list-group">
							<a href="javascript:;" class="list-group-item{$steps[0]}"><span class="glyphicon glyphicon-copyright-mark"></span> &nbsp; 许可协议</a>
							<a href="javascript:;" class="list-group-item{$steps[1]}"><span class="glyphicon glyphicon-eye-open"></span> &nbsp; 环境监测</a>
							<a href="javascript:;" class="list-group-item{$steps[2]}"><span class="glyphicon glyphicon-globe"></span> &nbsp; 选择产品</a>
							<a href="javascript:;" class="list-group-item{$steps[3]}"><span class="glyphicon glyphicon-cog"></span> &nbsp; 参数配置</a>
							<a href="javascript:;" class="list-group-item{$steps[4]}"><span class="glyphicon glyphicon-ok"></span> &nbsp; 成功</a>
						</ul>
					</div>
				</div>
				<div class="col-xs-9">
					{$content}
				</div>
			</div>
			<div class="footer" style="margin:15px auto;">
				<div class="text-center">
					Powered by <a href="http://wap.huluxia.com/index.html" target="_blank"><b>葫芦侠社区</b></a> v1.0 &copy; 2020 <a href="http://wap.huluxia.com/index.html" target="_blank">http://wap.huluxia.com/index.html</a>
				</div>
			</div>
		</div>
	</body>
</html>
EOF;
	echo trim($tpl);
}

function tpl_install_license() {
	echo <<<EOF
		<div class="panel panel-default">
			<div class="panel-heading">阅读许可协议</div>
			<div class="panel-body" style="overflow-y:scroll;max-height:400px;line-height:20px;">
				<h3>版权所有 (c)2020，葫芦侠社区保留所有权利。 </h3>
				<p>
					感谢您选择仿QQ群聊天系统。 <br />
					为了使你正确并合法的使用本软件，请你在使用前务必阅读清楚下面的协议条款：
				</p>
				<p>
					<strong>一、本授权协议适用且仅适用于任何下载该源码的人，葫芦侠一只小可爱丶拥有对本授权协议的最终解释权。</strong>
				</p>
				<p>
					<strong>二、协议许可的权利 </strong>
					<ol>
						<li>您可以在完全遵守本最终用户授权协议的基础上，将本软件应用于非商业用途，而不必支付软件版权授权费用。</li>
						<li>您可以在协议规定的约束和限制范围内修改云引擎源代码或界面风格以适应您的网站要求。</li>
						<li>您拥有使用本软件构建的网站全部内容所有权，并独立承担与这些内容的相关法律义务。</li>
						<li>获得商业授权之后，您可以将本软件应用于商业用途，同时依据所购买的授权类型中确定的技术支持内容，自购买时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。</li>
					</ol>
				</p>
				<p>
					<strong>三、协议规定的约束和限制 </strong>
					<ol>
						<li>未获商业授权之前，不得将本软件用于商业用途（包括但不限于企业网站、经营性网站、以营利为目的或实现盈利的网站）。</li>
						<li>未经官方许可，不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。</li>
						<li>未经官方许可，禁止在云引擎的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。</li>
						<li>如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。</li>
					</ol>
				</p>
				<p>
					<strong>四、有限担保和免责声明 </strong>
					<ol>
						<li>本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。</li>
						<li>用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺对免费用户提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。</li>
						<li>电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始确认本协议并安装云引擎，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。</li>
						<li>如果本软件带有其它软件的整合API示范例子包，这些文件版权不属于本软件官方，并且这些文件是没经过授权发布的，请参考相关软件的使用许可合法的使用。</li>
					</ol>
				</p>
			</div>
		</div>
		<form class="form-inline" role="form" method="post">
			<ul class="pager">
				<li class="pull-left" style="display:block;padding:5px 10px 5px 0;">
					<div class="checkbox">
						<label>
							<input type="checkbox"> 我已经阅读并同意此协议
						</label>
					</div>
				</li>
				<li class="previous"><a href="javascript:;" onclick="if(jQuery(':checkbox:checked').length == 1){jQuery('form')[0].submit();}else{alert('您必须同意软件许可协议才能安装！')};">继续 <span class="glyphicon glyphicon-chevron-right"></span></a></li>
			</ul>
		</form>
EOF;
	tpl_frame();
}

function tpl_install_env($ret = array()) {
	if(empty($ret['continue'])) {
		$continue = '<li class="previous disabled"><a href="javascript:;">请先解决环境问题后继续</a></li>';
	} else {
		$continue = '<li class="previous"><a href="javascript:;" onclick="$(\'#do\').val(\'continue\');$(\'form\')[0].submit();">继续 <span class="glyphicon glyphicon-chevron-right"></span></a></li>';
	}
	echo <<<EOF
		<div class="panel panel-default">
			<div class="panel-heading">服务器信息</div>
			<table class="table table-striped">
				<tr>
					<th style="width:150px;">参数</th>
					<th>值</th>
					<th></th>
				</tr>
				<tr class="{$ret['server']['os']['class']}">
					<td>服务器操作系统</td>
					<td>{$ret['server']['os']['value']}</td>
					<td>{$ret['server']['os']['remark']}</td>
				</tr>
				<tr class="{$ret['server']['sapi']['class']}">
					<td>Web服务器环境</td>
					<td>{$ret['server']['sapi']['value']}</td>
					<td>{$ret['server']['sapi']['remark']}</td>
				</tr>
				<tr class="{$ret['server']['php']['class']}">
					<td>PHP版本</td>
					<td>{$ret['server']['php']['value']}</td>
					<td>{$ret['server']['php']['remark']}</td>
				</tr>
				<tr class="{$ret['server']['dir']['class']}">
					<td>程序安装目录</td>
					<td>{$ret['server']['dir']['value']}</td>
					<td>{$ret['server']['dir']['remark']}</td>
				</tr>
				<tr class="{$ret['server']['disk']['class']}">
					<td>磁盘空间</td>
					<td>{$ret['server']['disk']['value']}</td>
					<td>{$ret['server']['disk']['remark']}</td>
				</tr>
				<tr class="{$ret['server']['upload']['class']}">
					<td>上传限制</td>
					<td>{$ret['server']['upload']['value']}</td>
					<td>{$ret['server']['upload']['remark']}</td>
				</tr>
			</table>
		</div>

		<div class="alert alert-info">PHP环境要求必须满足下列所有条件，否则系统或系统部份功能将无法使用。</div>
		<div class="panel panel-default">
			<div class="panel-heading">PHP环境要求</div>
			<table class="table table-striped">
				<tr>
					<th style="width:150px;">选项</th>
					<th style="width:180px;">要求</th>
					<th style="width:50px;">状态</th>
					<th>说明及帮助</th>
				</tr>
				<tr class="{$ret['php']['version']['class']}">
					<td>PHP版本</td>
					<td>5.3或者5.3以上</td>
					<td>{$ret['php']['version']['value']}</td>
					<td>{$ret['php']['version']['remark']}</td>
				</tr>
				<tr class="{$ret['php']['curl']['class']}">
					<td>cURL</td>
					<td>支持</td>
					<td>{$ret['php']['curl']['value']}</td>
					<td>{$ret['php']['curl']['remark']}</td>
				</tr>
				<tr class="{$ret['php']['ssl']['class']}">
					<td>openSSL</td>
					<td>支持</td>
					<td>{$ret['php']['ssl']['value']}</td>
					<td>{$ret['php']['ssl']['remark']}</td>
				</tr>
				<tr class="{$ret['php']['gd']['class']}">
					<td>GD2</td>
					<td>支持</td>
					<td>{$ret['php']['gd']['value']}</td>
					<td>{$ret['php']['gd']['remark']}</td>
				</tr>
				<tr class="{$ret['php']['asp_tags']['class']}">
					<td>asp_tags</td>
					<td>关闭</td>
					<td>{$ret['php']['asp_tags']['value']}</td>
					<td>{$ret['php']['asp_tags']['remark']}</td>
				</tr>
			</table>
		</div>

		<div class="alert alert-info">系统要求云引擎整个安装目录必须可写, 才能使用云引擎所有功能。</div>
		<div class="panel panel-default">
			<div class="panel-heading">目录权限监测</div>
			<table class="table table-striped">
				<tr>
					<th style="width:150px;">目录</th>
					<th style="width:180px;">要求</th>
					<th style="width:50px;">状态</th>
					<th>说明及帮助</th>
				</tr>
				<tr class="{$ret['write']['root']['class']}">
					<td>/</td>
					<td>整目录可写</td>
					<td>{$ret['write']['root']['value']}</td>
					<td>{$ret['write']['root']['remark']}</td>
				</tr>
				<tr class="{$ret['write']['cache']['class']}">
					<td>/cache</td>
					<td>cache目录可写</td>
					<td>{$ret['write']['cache']['value']}</td>
					<td>{$ret['write']['cache']['remark']}</td>
				</tr>
				<tr class="{$ret['write']['plugins']['class']}">
					<td>/plugins</td>
					<td>plugins目录可写</td>
					<td>{$ret['write']['plugins']['value']}</td>
					<td>{$ret['write']['plugins']['remark']}</td>
				</tr>
			</table>
		</div>
		<form class="form-inline" role="form" method="post">
			<input type="hidden" name="do" id="do" />
			<ul class="pager">
				<li class="previous"><a href="javascript:;" onclick="$('#do').val('back');$('form')[0].submit();"><span class="glyphicon glyphicon-chevron-left"></span> 返回</a></li>
				{$continue}
			</ul>
		</form>
EOF;
	tpl_frame();
}

function tpl_install_db($error = '') {
  global $G;
	if(!empty($error)) {
		$message = '<div class="alert alert-danger">发生错误: ' . $error . '</div>';
	}
	$insTypes = array();
	if(file_exists(ONEZ_ROOT . '/index.php') && is_dir(ONEZ_ROOT . '/app') && is_dir(ONEZ_ROOT . '/web')) {
		$insTypes['local'] = ' checked="checked"';
	} else {
		$insTypes['remote'] = ' checked="checked"';
	}
	if (!empty($_POST['type'])) {
		$insTypes = array();
		$insTypes[$_POST['type']] = ' checked="checked"';
	}
	$disabled = empty($insTypes['local']) ? ' disabled="disabled"' : '';
  $db=$_POST['db'];
  $user=$_POST['user'];
  $extra=$_POST['extra'];
  empty($db['server']) && $db['server']='localhost';
  empty($db['username']) && $db['username']='root';
  empty($db['prefix']) && $db['prefix']='onez_';
  empty($db['name']) && $db['name']='group';
  
  if($G['hasdata']){
    $error=<<<ONEZ
				<div class="form-group">
					<label class="col-sm-2 control-label"></label>
					<div class="col-sm-8">
						<input type="checkbox" name="clear" value="1" id="input-clear" />
            <label for="input-clear" style="color:red">
              您的数据库不为空，请重新建立数据库或是清空该数据库或更改表前缀！
              
              如选中此项，将会自动删除已有数据，请慎重操作
            </label>
					</div>
				</div>
ONEZ;
  }
	echo <<<EOF
	{$message}
	<form class="form-horizontal" method="post" role="form">
		<div class="panel panel-default">
			<div class="panel-heading">数据库选项</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-sm-2 control-label">数据库主机</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="db[server]" value="$db[server]">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">数据库用户</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="db[username]" value="$db[username]">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">数据库密码</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="db[password]" value="$db[password]">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">表前缀</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="db[prefix]" value="$db[prefix]">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">数据库名称</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="db[name]" value="$db[name]">
					</div>
				</div>
        $error
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">管理选项</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-sm-2 control-label">管理员账号</label>
					<div class="col-sm-4">
						<input class="form-control" type="username" name="user[username]" value="$user[username]">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">管理员密码</label>
					<div class="col-sm-4">
						<input class="form-control" type="password" name="user[password]" value="$user[password]">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">确认密码</label>
					<div class="col-sm-4">
						<input class="form-control" type="password" name="user[password]" value="$user[password]">
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="do" id="do" />
		<input type="hidden" name="extra" value="{$extra}" />
		<ul class="pager">
			<li class="previous"><a href="javascript:;" onclick="$('#do').val('back');$('form')[0].submit();"><span class="glyphicon glyphicon-chevron-left"></span> 返回</a></li>
			<li class="previous"><a href="javascript:;" onclick="$('#do').val('continue');$('form')[0].submit();">继续 <span class="glyphicon glyphicon-chevron-right"></span></a></li>
		</ul>
	</form>
	<script>
		var lock = false;
		function check(obj) {
			if(lock) {
				return;
			}
			$('.form-control').parent().parent().removeClass('has-error');
			var error = false;
			$('.form-control').each(function(){
				if($(this).val() == '') {
					$(this).parent().parent().addClass('has-error');
					this.focus();
					error = true;
				}
			});
			if(error) {
				alert('请检查未填项');
				return false;
			}
			if($(':password').eq(0).val() != $(':password').eq(1).val()) {
				$(':password').parent().parent().addClass('has-error');
				alert('确认密码不正确.');
				return false;
			}
			lock = true;
			$(obj).parent().addClass('disabled');
			$(obj).html('正在执行安装');
			return true;
		}
	</script>
EOF;
	tpl_frame();
  exit();
}
function tpl_install_onez($error = '',$content='') {
	if(!empty($error)) {
		$message = '<div class="alert alert-danger">发生错误: ' . $error . '</div>';
	}
  if($content){
    echo $content;
  	tpl_frame();
    exit();
  }
  
  
  $onez=$_POST['onez'];
	echo <<<EOF
	{$message}
  <div class="alert alert-info">登录成功后可以自动注册您的站点，如已购买过产品，可以选择后快速安装</div>
	<form class="form-horizontal" method="post" role="form">
		<div class="panel panel-default">
			<div class="panel-heading">登录账号</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-sm-2 control-label">账号</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="onez[username]" value="$onez[username]">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">密码</label>
					<div class="col-sm-4">
						<input class="form-control" type="password" name="onez[password]" value="$onez[password]">
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="do" id="do" />
		<input type="hidden" name="onez[type]" value="login" />
		<ul class="pager">
			<li class="previous"><a href="javascript:;" onclick="$('#do').val('back');$('form')[0].submit();"><span class="glyphicon glyphicon-chevron-left"></span> 返回</a></li>
			<li class="previous"><a href="javascript:;" onclick="$('#do').val('continue');$('form')[0].submit();">继续 <span class="glyphicon glyphicon-chevron-right"></span></a></li>
			<li class="previous"><a href="http://www.yunziyuan.com/?mod=%2Fregister.php" target="_blank">免费注册账号 <span class="glyphicon glyphicon-fire"></span></a></li>
		</ul>
	</form>
	<script>
		var lock = false;
		function check(obj) {
			if(lock) {
				return;
			}
			$('.form-control').parent().parent().removeClass('has-error');
			var error = false;
			$('.form-control').each(function(){
				if($(this).val() == '') {
					$(this).parent().parent().addClass('has-error');
					this.focus();
					error = true;
				}
			});
			if(error) {
				alert('请检查未填项');
				return false;
			}
			lock = true;
			$(obj).parent().addClass('disabled');
			$(obj).html('正在执行安装');
			return true;
		}
	</script>
  <script type="text/javascript" src="http://www.yunziyuan.com/js/install/login.js"></script>
EOF;
	tpl_frame();
  exit();
}

function tpl_install_finish() {
  global $G;
  include_once(dirname(__FILE__).'/lib/onezphp.php');
	$modules = get_store_module();
	$themes = get_store_theme();
  $_REQUEST['mod']='/admin/index.php';
  $regurl=onez('onez')->href('/onez/cloud/profile.php');
  if(!$modules && !$themes){
    $classname='hide';
  }
	echo <<<EOF
	<div class="page-header"><h3>安装完成</h3></div>
	<div class="alert alert-success">
		恭喜您!已成功安装“仿QQ群聊天系统”，您现在可以: 
    <a target="_blank" class="btn btn-success" href="./index.php">访问首页</a>
    
EOF;
	tpl_frame();
}


function get_store_module() {
	$response = onez()->post(APP_STORE_API, http_build_query(array('action' => 'module')));
  $response=json_decode($response,1);
  if(empty($response) || empty($response['content'])){
    return;
  }
	$response = $response['content'];

	$modules = '';
  if(!$response['message']){
    return '';
  }
	foreach ($response['message'] as $key => $module) {
		if ($key % 3 < 1) {
			$modules .= '</tr><tr>';
		}
		$module['detail_link'] = APP_STORE_URL . trim($module['detail_link'], '.');
		$modules .= '<td>';
		$modules .= '<div class="col-sm-4">';
		$modules .= '<a href="' . $module['detail_link'] . '" title="查看详情" target="_blank">';
		$modules .= '<img src="' . $module['logo']. '"' . ' width="50" height="50" ' . $module['title'] . '" /></a>';
		$modules .= '</div>';
		$modules .= '<div class="col-sm-8">';
		$modules .= '<p><a href="' . $module['detail_link'] .'" title="查看详情" target="_blank">' . $module['title'] . '</a></p>';
		$modules .= '<p>安装量：<span class="text-danger">' . $module['purchases'] . '</span></p>';
		$modules .= '</div>';
		$modules .= '</td>';
	}
	$modules = substr($modules, 5) . '</tr>';

	return $modules;
}

function get_store_theme() {
	$response = onez()->post(APP_STORE_API, http_build_query(array('action' => 'theme')));
  $response=json_decode($response,1);
  if(empty($response) || empty($response['content'])){
    return;
  }
	$response = $response['content'];

	$modules = '';
  if(!$response['message']){
    return '';
  }

	$themes = '<tr><td colspan="' . count($response['message']) . '">';
	$themes .= '<div class="form-group">';
	foreach ($response['message'] as $key => $theme) {
		$theme['detail_link'] = APP_STORE_URL . trim($theme['detail_link'], '.');
		$themes .= '<div class="col-sm-2" style="padding-left: 7px;margin-right: 25px;">';
		$themes .= '<a href="' . $theme['detail_link'] .'" title="查看详情" target="_blank" /><img src="' . $theme['logo']. '" /></a>';
		$themes .= '<p></p><p class="text-right">';
		$themes .= '<a href="' . $theme['detail_link']. '" title="查看详情" target="_blank">'  . $theme['title'] . '</a></p>';
		$themes .= '</div>';
	}
	$themes .= '</div>';

	return $themes;
}

function tpl_resources() {
	$res = array(
		'logo' => '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',
    'background'=>'/9j/4AAQSkZJRgABAQAAAQABAAD//gA+Q1JFQVRPUjogZ2QtanBlZyB2MS4wICh1c2luZyBJSkcgSlBFRyB2OTApLCBkZWZhdWx0IHF1YWxpdHkK/9sAQwAIBgYHBgUIBwcHCQkICgwUDQwLCwwZEhMPFB0aHx4dGhwcICQuJyAiLCMcHCg3KSwwMTQ0NB8nOT04MjwuMzQy/9sAQwEJCQkMCwwYDQ0YMiEcITIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIy/8AAEQgAKAAoAwEiAAIRAQMRAf/EAB8AAAEFAQEBAQEBAAAAAAAAAAABAgMEBQYHCAkKC//EALUQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+v/EAB8BAAMBAQEBAQEBAQEAAAAAAAABAgMEBQYHCAkKC//EALURAAIBAgQEAwQHBQQEAAECdwABAgMRBAUhMQYSQVEHYXETIjKBCBRCkaGxwQkjM1LwFWJy0QoWJDThJfEXGBkaJicoKSo1Njc4OTpDREVGR0hJSlNUVVZXWFlaY2RlZmdoaWpzdHV2d3h5eoKDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uLj5OXm5+jp6vLz9PX29/j5+v/aAAwDAQACEQMRAD8A82xgEZwAf++f/rf5+gOBn7uMe+3/ABH+foh7jpj8dv8A9b/P0X7uSMKV5+n+I/z9MSgzggE7ff0/+t/ntwZAOOmO393/ABH+fomdpxnbtx+H/wBb/P0XOO+3Hr/D/wDW/wA/QAMYIP3cfmpP9P8AP0KTkDB42/8Ajv8A9b/P0KAsByOOmPzH/wBb/P0M9eox+O3/AOt/L+SjIJxldo/75/8Arf5+idPUbffp/wDW/wA/QAU4HOcAfjt/xH+e3ABtzn5QPx2//Y/5+iHAzyVxx9P8R/L+S42n+5gf98/4j/P0AEOQp6qB6/w/4j/P0KX5R3Ax6fw//W/z9CgAxgEfdA5H+z/9b/P0BxjA2ge33f8A63+foUUAAOPu8Y9e3/1v8/QwV7bduffb/wDW/wA/QooAMkLj7u3/AMd5/l/n6FFFAH//2Q==',
	);
	return $res;
}