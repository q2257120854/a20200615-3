<?php
error_reporting(0);
require './db.class.php';
@header('Content-Type: text/html; charset=UTF-8');
$do=isset($_GET['do'])?$_GET['do']:'0';
if(file_exists('install.lock')){
	$installed=true;
	$do='0';
}

function checkfunc($f,$m = false) {
	if (function_exists($f)) {
		return '<font color="green">可用</font>';
	} else {
		if ($m == false) {
			return '<font color="black">不支持</font>';
		} else {
			return '<font color="red">不支持</font>';
		}
	}
}

function checkclass($f,$m = false) {
	if (class_exists($f)) {
		return '<font color="green">可用</font>';
	} else {
		if ($m == false) {
			return '<font color="black">不支持</font>';
		} else {
			return '<font color="red">不支持</font>';
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
可乐防红安装向导
</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
<script src="//lib.baomitu.com/jquery/1.12.4/jquery.min.js"></script>
<script src="//lib.baomitu.com/layer/2.3/layer.js"></script>
<script src="//lib.baomitu.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../assets/layuiadmin/layui/css/layui.css" media="all">
<link rel="stylesheet" href="../assets/layuiadmin/style/admin.css" media="all">
<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
<script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
</head>

<?php if($do=='0'){?>
<div class="layui-fluid">
<div class="layui-row layui-col-space15">
<div class="layui-col-md8">    
<div class="layui-card">
<div class="layui-card-header">
更新日记
</div>
<div class="layui-card-body">
<div class="layui-row layui-col-space10">



<div class="layui-col-xs12 layui-col-sm4">
<div class="layuiadmin-card-text">
<div class="layui-text-top"><i class="layui-icon layui-icon-upload-circle"></i>V.2020.01.17（更新日记）</div>
1.新增一套前台模板<br>
2.加入监控域名功能<br>
3.爆红域名自动删除<br>
4.优化前台四套模板<br>
</div>
</div>


<div class="layui-col-xs12 layui-col-sm4">
<div class="layuiadmin-card-text">
<div class="layui-text-top"><i class="layui-icon layui-icon-upload-circle"></i>V.2019.12.28（更新日记）</div>
1.安装向导预先添加域名<br>
2.重复安装直接跳过页面<br>
3.修复微信跳转图片显示<br>
4.统计页面版权后台更改<br>
</div>
</div>
<div class="layui-col-xs12 layui-col-sm4">
<div class="layuiadmin-card-text">
<div class="layui-text-top"><i class="layui-icon layui-icon-upload-circle"></i>V2019.10.11（更新日记）</div>
1.新增加二套前台模板<br>
2.零一号模板改善优化<br>
3.新增加接口类型选择<br>
4.修复前后台已知BUG<br>
</div>
</div>
<div class="layui-form-item">


		<?php if($installed){ ?>
		您已经安装过，如需重新安装请删除<font color=red> install/install.lock </font>文件后再安装！
		<?php }else{?>
		<center>
<a href="index.php?do=1" class="layui-btn" lay-submit lay-filter="set_website">开始安装</a>
</center>
		<?php }?>

<br/><a target="_blank"  style="color:red">( 服务器PHP版本调至5.6 确保该版本已安装sg11解密组件) </a>

</div>
</div>
</div>
</div>
</div>



	</div>
</div>

<?php }elseif($do=='1'){?>

<div class="layui-fluid">
<div class="layui-row layui-col-space15">
<div class="layui-col-md8">    
<div class="layui-card">
<div class="layui-card-header">
环境检查
</div>
<div class="layui-card-body">
<div class="layui-row layui-col-space10">
<div class="layui-col-xs12 layui-col-sm4">



	<table class="table table-striped">
		<thead>
			<tr>
				<th style="width:20%">函数检测</th>
				<th style="width:15%">需求</th>
				<th style="width:15%">当前</th>
				<th style="width:50%">用途</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>PHP 5.6+</td>
				<td>必须</td>
				<td><?php echo phpversion(); ?></td>
				<td>PHP版本支持</td>
			</tr>
			<tr>
				<td>curl_exec()</td>
				<td>必须</td>
				<td><?php echo checkfunc('curl_exec',true); ?></td>
				<td>抓取网页</td>
			</tr>
			<tr>
				<td>file_get_contents()</td>
				<td>必须</td>
				<td><?php echo checkfunc('file_get_contents',true); ?></td>
				<td>读取文件</td>
			</tr>
			<tr>
				<td>文件读写</td>
				<td>推荐</td>
				<td><?php if (is_writable('./')) { echo '<font color="green">可用</font>'; } else { echo '<font color="black">不支持</font>'; } ?></td>
				<td>写入权限</td>
			</tr>
		</tbody>
	</table>
	<p><span><a class="btn btn-primary" href="index.php?do=0"><<上一步</a></span>
	<span style="float:right"><a class="btn btn-primary" href="index.php?do=2" align="right">下一步>></a></span></p>
</div>

<?php }elseif($do=='2'){?>



<div class="layui-fluid">
<div class="layui-row layui-col-space15">
<div class="layui-col-md8">    
<div class="layui-card">
<div class="layui-card-header">
配置数据库
</div>
<div class="layui-card-body">
<div class="layui-row layui-col-space10">
<div class="layui-col-xs12 layui-col-sm4">


<div class="panel-body">
	<?php
if(ini_get('acl.app_id') && !preg_match('/php-tae-temp/',PHP_BINDIR))
echo <<<HTML
检测到您使用的是ACE空间，请在本地填写好config.php里的数据库相关配置，再用SVN软件上传。千万不能直接用爱特等在线文件管理器直接修改，因为ACE的本地文件读写都是临时性的。<br><br>
<font color="blue">数据库信息填写提示：<br>
进入ACE管理控制台－扩展服务－数据库(MySQL)，成功开通后就可以显示数据库所需配置信息。“外网地址”即为MYSQL主机，“账户名”即为MYSQL用户名，“数据库”即为数据库名，数据库密码填写开通MySQL服务时填写的密码（并非阿里云登录密码）。</font>
<br><br>
如果已填写好config.php数据库相关配置，请点击 <a href="?do=3">下一步</a>
HTML;
elseif(defined("SAE_ACCESSKEY"))
echo <<<HTML
检测到您使用的是SAE空间，支持一键安装，请点击 <a href="?do=3">下一步</a>
HTML;
else
echo <<<HTML
		<form action="?do=3" class="form-sign" method="post">
		<label for="name">数据库地址:</label>
		<input type="text" class="form-control" name="db_host" value="localhost">
		<label for="name">数据库端口:</label>
		<input type="text" class="form-control" name="db_port" value="3306">
		<label for="name">数据库用户名:</label>
		<input type="text" class="form-control" name="db_user">
		<label for="name">数据库密码:</label>
		<input type="text" class="form-control" name="db_pwd">
			<label for="name">数据库名:</label>
		<input type="text" class="form-control" name="db_name">
		<br><input type="submit" class="btn btn-primary btn-block" name="submit" value="保存配置">
		</form><br/>
		（如果已事先填写好config.php相关数据库配置，请 <a href="?do=3&jump=1">点击此处</a> 跳过这一步！）
HTML;
?>
	</div>
</div>

<?php }elseif($do=='3'){?>

<div class="layui-fluid">
<div class="layui-row layui-col-space15">
<div class="layui-col-md8">    
<div class="layui-card">
<div class="layui-card-header">
保存数据库
</div>
<div class="layui-card-body">
<div class="layui-row layui-col-space10">
<div class="layui-col-xs12 layui-col-sm4">



	<div class="panel-body">
<?php
if(defined("SAE_ACCESSKEY") || (ini_get('acl.app_id') && !preg_match('/php-tae-temp/',PHP_BINDIR)) || $_GET['jump']==1){
	if(defined("SAE_ACCESSKEY"))include_once '../includes/sae.php';
	else include_once '../config.php';
	if(!$dbconfig['user']||!$dbconfig['pwd']||!$dbconfig['dbname']) {
		echo '<div class="alert alert-danger">请先填写好数据库并保存后再安装！<hr/><a href="javascript:history.back(-1)"><< 返回上一页</a></div>';
	} else {
		if(!$con=DB::connect($dbconfig['host'],$dbconfig['user'],$dbconfig['pwd'],$dbconfig['dbname'],$dbconfig['port'])){
			if(DB::connect_errno()==2002)
				echo '<div class="alert alert-warning">连接数据库失败，数据库地址填写错误！</div>';
			elseif(DB::connect_errno()==1045)
				echo '<div class="alert alert-warning">连接数据库失败，数据库用户名或密码填写错误！</div>';
			elseif(DB::connect_errno()==1049)
				echo '<div class="alert alert-warning">连接数据库失败，数据库名不存在！</div>';
			else
				echo '<div class="alert alert-warning">连接数据库失败，['.DB::connect_errno().']'.DB::connect_error().'</div>';
		}else{
			echo '<div class="alert alert-success">数据库配置文件保存成功！</div>';
			if(DB::query("select * from quan_host where 1")==FALSE)
				echo '<p align="right"><a class="btn btn-primary btn-block" href="?do=4">创建数据表>></a></p>';
			else
				echo '<div class="list-group-item list-group-item-info">系统检测到你已安装过可乐防洪</div>
				<div class="list-group-item">
					<a href="?do=7" class="btn btn-block btn-info">跳过安装</a>
				</div>
				<div class="list-group-item">
					<a href="?do=4" onclick="if(!confirm(\'全新安装将会清空所有数据，是否继续？\')){return false;}" class="btn btn-block btn-warning">强制全新安装</a>
				</div>';
		}
	}
}else{
	$db_host=isset($_POST['db_host'])?$_POST['db_host']:NULL;
	$db_port=isset($_POST['db_port'])?$_POST['db_port']:NULL;
	$db_user=isset($_POST['db_user'])?$_POST['db_user']:NULL;
	$db_pwd=isset($_POST['db_pwd'])?$_POST['db_pwd']:NULL;
	$db_name=isset($_POST['db_name'])?$_POST['db_name']:NULL;

	if($db_host==null || $db_port==null || $db_user==null || $db_pwd==null || $db_name==null){
		echo '<div class="alert alert-danger">保存错误,请确保每项都不为空<hr/><a href="javascript:history.back(-1)"><< 返回上一页</a></div>';
	} else {
		$config="<?php
/*数据库配置*/
\$dbconfig=array(
	'host' => '{$db_host}', //数据库服务器
	'port' => {$db_port}, //数据库端口
	'user' => '{$db_user}', //数据库用户名
	'pwd' => '{$db_pwd}', //数据库密码
	'dbname' => '{$db_name}' //数据库名
);
?>";
		if(!$con=DB::connect($db_host,$db_user,$db_pwd,$db_name,$db_port)){
			if(DB::connect_errno()==2002)
				echo '<div class="alert alert-warning">连接数据库失败，数据库地址填写错误！</div>';
			elseif(DB::connect_errno()==1045)
				echo '<div class="alert alert-warning">连接数据库失败，数据库用户名或密码填写错误！</div>';
			elseif(DB::connect_errno()==1049)
				echo '<div class="alert alert-warning">连接数据库失败，数据库名不存在！</div>';
			else
				echo '<div class="alert alert-warning">连接数据库失败，['.DB::connect_errno().']'.DB::connect_error().'</div>';
		}elseif(file_put_contents('../config.php',$config)){
			echo '<div class="alert alert-success">数据库配置文件保存成功！</div>';
			if(DB::query("select * from quan_host where 1")==FALSE)
				echo '<p align="right"><a class="btn btn-primary btn-block" href="?do=4">创建数据表>></a></p>';
			else
				echo '<div class="list-group-item list-group-item-info">系统检测到你已安装过可乐防洪</div>
				<div class="list-group-item">
					<a href="?do=7" class="btn btn-block btn-info">跳过安装</a>
				</div>
				<div class="list-group-item">
					<a href="?do=4" onclick="if(!confirm(\'全新安装将会清空所有数据，是否继续？\')){return false;}" class="btn btn-block btn-warning">强制全新安装</a>
				</div>';
		}else
			echo '<div class="alert alert-danger">保存失败，请确保网站根目录有写入权限<hr/><a href="javascript:history.back(-1)"><< 返回上一页</a></div>';
	}
}
?>
	</div>
</div>
<?php }elseif($do=='4'){?>



<div class="layui-fluid">
<div class="layui-row layui-col-space15">
<div class="layui-col-md8">    
<div class="layui-card">
<div class="layui-card-header">
导入数据
</div>
<div class="layui-card-body">
<div class="layui-row layui-col-space10">
<div class="layui-col-xs12 layui-col-sm4">
	<div class="panel-body">
<?php
if(defined("SAE_ACCESSKEY"))include_once '../includes/sae.php';
else include_once '../config.php';
if(!$dbconfig['user']||!$dbconfig['pwd']||!$dbconfig['dbname']) {
	echo '<div class="alert alert-danger">请先填写好数据库并保存后再安装！<hr/><a href="javascript:history.back(-1)"><< 返回上一页</a></div>';
} else {
	$sql=file_get_contents("install.sql");
	$sql=explode(';</explode>',$sql);
	$cn = DB::connect($dbconfig['host'],$dbconfig['user'],$dbconfig['pwd'],$dbconfig['dbname'],$dbconfig['port']);
	if (!$cn) die('err:'.DB::connect_error());
	DB::query("set sql_mode = ''");
	DB::query("set names utf8");
	$t=0; $e=0; $error='';
	for($i=0;$i<count($sql);$i++) {
		if ($sql[$i]=='')continue;
		if(DB::query($sql[$i])) {
			++$t;
		} else {
			++$e;
			$error.=DB::error().'<br/>';
		}
	}
}
if($e==0) {
	echo '<div class="alert alert-success">安装成功！<br/>SQL成功'.$t.'句/失败'.$e.'句</div><p align="right"><a class="btn btn-block btn-primary" href="index.php?do=5">下一步>></a></p>';
} else {
	echo '<div class="alert alert-danger">安装失败<br/>SQL成功'.$t.'句/失败'.$e.'句<br/>错误信息：'.$error.'</div><p align="right"><a class="btn btn-block btn-primary" href="index.php?do=4">点此进行重试</a></p>';
}
?>
	</div>
</div>

<?php }elseif($do=='5'){?>


<div class="layui-fluid">
<div class="layui-row layui-col-space15">
<div class="layui-col-md8">    
<div class="layui-card">
<div class="layui-card-header">
添加域名
</div>
<div class="layui-card-body">
<div class="layui-row layui-col-space10">
<div class="layui-col-xs12 layui-col-sm4">

	<div class="panel-body">
		<form action="?do=6" class="form-sign" method="post">
		<label for="name">域名(不带http://和/):</label>
		<input type="text" class="form-control" name="siteurl">
		<br><input type="submit" class="btn btn-primary btn-block" name="submit" value="保存配置">
		</form><br/>
		（如果想添加更多域名，请在后台添加！）
	</div>
</div>

<?php }elseif($do=='6'){?>
<div class="layui-fluid">
<div class="layui-row layui-col-space15">
<div class="layui-col-md8">    
<div class="layui-card">
<div class="layui-card-header">
安装完成
</div>
<div class="layui-card-body">
<div class="layui-row layui-col-space10">
<div class="layui-col-xs12 layui-col-sm4">
	<div class="panel-body">
<?php
$domain=isset($_POST['siteurl'])?$_POST['siteurl']:NULL;
if($domain==NULL ){
	echo '<div class="alert alert-danger">保存错误,请确保每项都不为空<hr/><a href="javascript:history.back(-1)"><< 返回上一页</a></div>';
} else {
	include_once '../config.php';
	$today = date("Y-m-d H:i:s") . '';

	$cn = DB::connect($dbconfig['host'],$dbconfig['user'],$dbconfig['pwd'],$dbconfig['dbname'],$dbconfig['port']);
	$sql = "insert into `quan_host` (`domain`,`date`,`type`) values ('".$domain."','$today','1')";
	$ad=DB::query($sql);
	if($ad){
		@file_put_contents("install.lock",'安装锁');
		echo '<div class="alert alert-info"><font color="green">安装完成！管理账号和密码是:admin/123456</font><br/><br/><a href="../">>>网站首页</a>｜<a href="../admin/">>>后台管理</a><hr/>更多设置选项请登录后台管理进行修改。<br/><br/><font color="#FF0033">如果你的空间不支持本地文件读写，请自行在install/ 目录建立 install.lock 文件！</font></div>';
	}else{
		echo '<div class="alert alert-danger">保存失败!'.DB::error().'</div>';
	}
}
?>
	</div>
</div>

<?php }elseif($do=='7'){?>
<div class="layui-fluid">
<div class="layui-row layui-col-space15">
<div class="layui-col-md8">    
<div class="layui-card">
<div class="layui-card-header">
安装完成
</div>
<div class="layui-card-body">
<div class="layui-row layui-col-space10">
<div class="layui-col-xs12 layui-col-sm4">
	<div class="panel-body">
<?php
	@file_put_contents("install.lock",'安装锁');
	echo '<div class="alert alert-info"><font color="green">安装完成！管理账号和密码是:admin/123456</font><br/><br/><a href="../">>>网站首页</a>｜<a href="../admin/">>>后台管理</a><hr/>更多设置选项请登录后台管理进行修改。<br/><br/><font color="#FF0033">如果你的空间不支持本地文件读写，请自行在install/ 目录建立 install.lock 文件！</font></div>';
?>
	</div>
</div>


<?php }?>


</div></body></html>