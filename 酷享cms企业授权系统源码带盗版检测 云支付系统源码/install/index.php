<?php
error_reporting(0);  
$title='酷享授权系统';
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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>安装程序 -<?php echo $title;?>安装</title>
<link href="/install/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/install/js/jquery.js"></script>
<script type="text/javascript" src="/install/js/suibian.js"></script>
</head>

<body>

<div class="top">
	<div class="top-logo">
	</div>
	<div class="top-link">
		<ul>
			<li><a href="https://www.kuxiangcms.com/" target="_blank">官方网站</a></li>
			<li><a href="http://kuxiangcms.com" target="_blank">技术论坛</a></li>
			<li><a href="http://www.yunziyuan.com.cn" target="_blank">帮助</a></li>
		</ul>
	</div>
	<div class="top-version">
		<!-- 版本信息 -->
		<h2>cool v 2.0</h2>
	</div>
</div>

<?php if($do=='0'){?>
<div class="main">
	<div class="pleft">
		<dl class="setpbox t1">
			<dt>安装步骤</dt>
			<dd>
				<ul>
					<li class="now">许可协议</li>
					<li>环境检测</li>
					<li>参数配置</li>
					<li>正在安装</li>
					<li>安装完成</li>
				</ul>
			</dd>
		</dl>
	</div>
	<div class="pright">
		<div class="pr-title"><h3>阅读许可协议</h3></div>
		<div class="pr-agreement">
				<p>版权所有西安市碑林区5G云资源服务部保留所有权利。 </p>
				<p>感谢您选酷享企业授权系统（以下简称cool），cool是目前国内最强大、最稳定的第四方个人免签支付解决方案之一，基于 PHP + MySQL   的技术开发</p>
				<p>酷享企业授权系统的官方网址是： <a href="https://www.kuxiangcms.com/" target="_blank">cool</a> 交流论坛：<a href="http://kuxiangcms.com/" target="_blank"></a></p>
				<p>为了使你正确并合法的使用本软件，请你在使用前务必阅读清楚下面的协议条款：</p>
			<strong>一、本授权协议适用且仅适用于 版权所有西安市碑林区5G云资源服务部保留所有权利版本，官方对本授权协议的最终解释权。</strong>
			<strong>二、协议许可的权利 </strong>
				<p>1、您可以在完全遵守本最终用户授权协议的基础上，将本软件应用于非商业用途，而不必支付软件版权授权费用。 </p>
				<p>2、您可以在协议规定的约束和限制范围内修改，cool源代码或界面风格以适应您的网站要求。 </p>
				<p>3、您拥有使用本软件构建的支付网站全部内容所有权，并独立承担与这些内容的相关法律义务。 </p>
				<p>4、获得商业授权之后，您可以将本软件应用于商业用途，同时依据所购买的授权类型中确定的技术支持内容，自购买时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。 </p>
			<strong>二、协议规定的约束和限制 </strong>
				<p>1、未获商业授权之前，不得将本软件用于商业用途（包括但不限于支付网站、经营性网站、以营利为目的或实现盈利的网站）。购买商业授权请登陆   <a href="http://www.yunziyuan.com.cn" target="_blank">5G云资源</a> 了解最新说明。</p>
				<p>2、未经官方许可，不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。</p>
				<p>3、不管你的网站是否整体使用 ，还是部份支付功能使用，在你使用了酷享企业授权的网站系统主页上必须加上5G云资源的官方网址(<a href="http://www.yunziyuan.com.cn" target="_blank">酷享企业授权系统</a>)的链接。</p>
				<p>4、未经官方许可，禁止在cool的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。</p>
				<p>5、如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。 </p>
			<strong>三、有限担保和免责声明 </strong>
				<p>1、本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。 </p>
				<p>2、用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺对免费用户提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。 </p>
				<p>3、电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始确认本协议并安装   余生网络即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。</p>
				<p><b>协议发布时间：</b> 2019年2月18日</p>
				<p><b>版本最新更新：</b> 2019年9月8日 </p>
		</div>
		<div class="btn-box">
			<input name="readpact" type="checkbox" id="readpact" value="" class="check_boxId" /><label for="readpact"><strong class="fc-690 fs-14">我已经阅读并同意此协议</strong></label>
			<input name="继续" type="submit" class="menter_btn_a_a_lf menter_btn_a_a_lfa" value="继续"  />
		</div>
	</div>
</div>

<div class="foot">

</div>

<?php }elseif($do=='1'){?>

<div class="main">
	<div class="pleft">
		<dl class="setpbox t1">
			<dt>安装步骤</dt>
			<dd>
				<ul>
					<li class="succeed">许可协议</li>
					<li class="now">环境检测</li>
					<li >参数配置</li>
					<li>正在安装</li>
					<li>安装完成</li>
				</ul>
			</dd>
		</dl>
	</div>

<div class="pright">
  <div class="enter_lf">
   <div class="Envin_lf">
      <div class="menter_lf"><span>服务器信息</span></div>
      <div class="menter_table_lf">
      <table width="1000" border="0" cellspacing="0" cellpadding="0" class="tabletable">
        <thead>
            <tr>
              <th>参数</th>
              <th>值</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <td>服务器域名</td>
              <td style=" color:#999;"><?php echo $_SERVER["HTTP_HOST"];?></td>
            </tr>
            <tr>
              <td>服务器ip</td>
              <td style=" color:#999;"><?php echo GetHostByName($_SERVER['SERVER_NAME']);?></td>
            </tr>
            <tr>
              <td>服务器操作系统</td>
              <td style=" color:#999;"><?php echo  php_uname('s') ;?></td>
            </tr>
            <tr>
              <td>服务器翻译引擎</td>
              <td style="color:#999;"><?php echo  $_SERVER['SERVER_SOFTWARE'] ;?></td>
            </tr>
            <tr>
              <td>PHP版本</td>
              <td style="color:#999;"><?php echo PHP_VERSION;?></td>
            </tr>
            <tr>
              <td>系统安装目录</td>
              <td style=" color:#999;"><?php echo  $_SERVER['DOCUMENT_ROOT'];?></td>
            </tr>
        </tbody>
      </table>
      </div>
</div>
      <div class="menter_lf"><span>系统环境检测</span></div>
      <div class="menter_table_lf">
      <table width="1000" border="0" cellspacing="0" cellpadding="0" class="tabletable">
        <thead>
            <tr>
              <th>函数检测</th>
              <th>需求</th>
              <th>当前</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <td>PHP 5.2+</td>
			<td>必须</td>
			<td><?php echo phpversion(); ?></td>
            </tr>
            <tr>
              <td>curl_exec()</td>
			<td>必须</td>
			<td><?php echo checkfunc('curl_exec',true); ?></td>
            </tr>
            <tr>
            <td>file_get_contents()</td>
			<td>必须</td>
			<td><?php echo checkfunc('file_get_contents',true); ?></td>
            </tr>
        </tbody>
      </table>

      </div>
</div>
 <div class="menter_btn_lf"></div>
    <div class="menter_btn_a_lf">
           <a href="index.php?do=2"><input type="button" class="menter_btn_a_a_lf" value="下一步"></a>
           <a href="index.php?do=0"><input align="right" type="button" class="menter_btn_a_a_lf" value="后退"></a>
           
    </div>
<?php }elseif($do=='2'){?>

<div class="main">
	<div class="pleft">
		<dl class="setpbox t1">
			<dt>安装步骤</dt>
			<dd>
				<ul>
					<li class="succeed">许可协议</li>
					<li class="succeed">环境检测</li>
					<li class="now">参数配置</li>
					<li>正在安装</li>
					<li>安装完成</li>
				</ul>
			</dd>
		</dl>
	</div>
    <div class="pright">
	<?php
if(defined("SAE_ACCESSKEY"))
echo <<<HTML
检测到您使用的是SAE空间，支持一键安装，请点击 <a href="?do=3">下一步</a>
HTML;
else
echo <<<HTML

<div class="index_mian_right_ly">
 

  <div class="index_mian_right_two_ly">
   <div class="index_mian_right_two_one_ly"><span>数据库配置</span></div>
    <form action="?do=3" class="form-sign" method="post">
   
     <div class="index_mian_right_two_two_o_ly"><b>数据库地址：</b><input class="index_mian_right_two_two_text_ly" name="db_host" value="127.0.0.1" type="text" /><span>一般为localhost</span></div>
     <div class="index_mian_right_two_two_o_ly"><b>数据库端口：</b><input class="index_mian_right_two_two_text_ly" name="db_port" value="3306" type="text" /><span>如无特殊需要，请不要修改</span></div>
     <div class="index_mian_right_two_two_o_ly"><b>数据用户名：</b><input class="index_mian_right_two_two_text_ly" name="db_user" type="text" /></div>
     <div class="index_mian_right_two_two_o_ly"><b>数据库密码：</b><input class="index_mian_right_two_two_text_ly" name="db_pwd" type="text" /></div>
     <div class="index_mian_right_two_two_o_ly"><b>数据库名称：</b><input class="index_mian_right_two_two_text_ly" name="db_name" type="text" /></div>
   </div>
  </div>
  <br>
<!--后退,继续-->
  <div class="index_mian_right_seven_ly">
    <input class="index_mian_right_seven_Forward_ly" type="submit" value="继续" />
     <a href="index.php?do=1"><input class="index_mian_right_seven_Forward_ly" type="button" value="后退" /></a>
  </div>
  </form>
（如果已事先填写好config.php相关数据库配置，请 <a href="?do=3&jump=1">点击此处</a> 跳过这一步！）
HTML;
?>	 
</div>
</div>
</div>
<div class="foot">
</div>

<?php }elseif($do=='3'){
?>

<div class="main">
	<div class="pleft">
		<dl class="setpbox t1">
			<dt>安装步骤</dt>
			<dd>
				<ul>
					<li class="succeed">许可协议</li>
					<li class="succeed">环境检测</li>
					<li class="succeed">参数配置</li>
					<li class="now">正在安装</li>
					<li class="succeed">安装完成</li>
				</ul>
			</dd>
		</dl>
	</div>
    <div class="pright">
  <!--右边-->
  <div class="index_mian_right_one_ly">
   <div class="index_mian_right_one_one_ly"><span>正在安装中</span></div>
<?php
require './db.class.php';
if(defined("SAE_ACCESSKEY") || $_GET['jump']==1){
	if(defined("SAE_ACCESSKEY"))include_once '../includes/sae.php';
	else include_once '../includes/config.php';
	if(!$dbconfig['user']||!$dbconfig['pwd']||!$dbconfig['dbname']) {
		echo '
		<div class="font">请先填写好数据库并保存后再安装！</div> <div class="btn">
   	<a href="javascript:history.back(-1)"><input name="" class="index_mian_right_seven_Forward_ly" type="button" value="返回上一页" /></a>
   </div>';
	} else {
		if(!$con=DB::connect($dbconfig['host'],$dbconfig['user'],$dbconfig['pwd'],$dbconfig['dbname'],$dbconfig['port'])){
			if(DB::connect_errno()==2002)
				echo '
			<div class="font">连接数据库失败，数据库地址填写错误！</div><div class="btn">
   	<a href="javascript:history.back(-1)"><input name="" class="index_mian_right_seven_Forward_ly" type="button" value="返回上一页" /></a>
   </div>';
			elseif(DB::connect_errno()==1045)
				echo '<div class="font">连接数据库失败，数据库用户名或密码填写错误！</div><div class="btn">
   	<a href="javascript:history.back(-1)"><input name="" class="index_mian_right_seven_Forward_ly" type="button" value="返回上一页" /></a>
   </div>';
			elseif(DB::connect_errno()==1049)
				echo '<div class="font">连接数据库失败，数据库名不存在！</div><div class="btn">
   	<a href="javascript:history.back(-1)"><input name="" class="index_mian_right_seven_Forward_ly" type="button" value="返回上一页" /></a>
   </div>';
			else
				echo '<div class="font">连接数据库失败，['.DB::connect_errno().']'.DB::connect_error().'</div><div class="btn">
   	<a href="javascript:history.back(-1)"><input name="" class="index_mian_right_seven_Forward_ly" type="button" value="返回上一页" /></a>
   </div>';
		}else{
			echo '<div class="font">数据库配置文件保存成功！</div>';
			if(DB::query("select * from ku_config where 1")==FALSE)
				echo '<div class="btn">
   	<a href="?do=4"><input  class="index_mian_right_seven_Forward_ly" type="button" value="创建数据表" /></a>
   </div>';
			else
				echo '
			<div class="font">系统检测到你已安装过 酷享云支付！</div><div class="btn">
   	        <a href="?do=6"><input  class="index_mian_right_seven_Forward_ly" type="button" value="跳过安装" /></a>
   	         <a href="?do=4" onclick="if(!confirm(\'全新安装将会清空所有数据，是否继续？\')){return false;}"><input class="index_mian_right_seven_Forward_ly" type="button" value="全新安装" /></a>
            </div>
           ';
		}
	}
}else{
	$db_host=isset($_POST['db_host'])?$_POST['db_host']:NULL;
	$db_port=isset($_POST['db_port'])?$_POST['db_port']:NULL; 
	$db_user=isset($_POST['db_user'])?$_POST['db_user']:NULL;
	$db_pwd=isset($_POST['db_pwd'])?$_POST['db_pwd']:NULL;
	$db_name=isset($_POST['db_name'])?$_POST['db_name']:NULL;

	if($db_host==null || $db_port==null || $db_user==null || $db_pwd==null || $db_name==null){
		echo '
<div class="font">保存错误,请确保每项都不为空！</div><div class="btn">
   	<a href="javascript:history.back(-1)"><input name="" class="index_mian_right_seven_Forward_ly" type="button" value="返回上一页" /></a>
   </div>';
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
				echo '
			<div class="font">连接数据库失败，数据库地址填写错误！</div><div class="btn">
   	<a href="javascript:history.back(-1)"><input  class="index_mian_right_seven_Forward_ly" type="button" value="返回上一页" /></a>
   </div>';
			elseif(DB::connect_errno()==1045)
				echo '
			<div class="font">连接数据库失败，数据库用户名或密码填写错误！</div><div class="btn">
   	<a href="javascript:history.back(-1)"><input name="" class="index_mian_right_seven_Forward_ly" type="button" value="返回上一页" /></a>
   </div>
   ';
			elseif(DB::connect_errno()==1049)
				echo '<div class="font">连接数据库失败，数据库名不存在！</div><div class="btn">
   	<a href="javascript:history.back(-1)"><input name="" class="index_mian_right_seven_Forward_ly" type="button" value="返回上一页" /></a>
   </div>';
			else
				echo '<div class="font">连接数据库失败，['.DB::connect_errno().']'.DB::connect_error().'</div><div class="btn">
   	<a href="javascript:history.back(-1)"><input  class="index_mian_right_seven_Forward_ly" type="button" value="返回上一页" /></a>
   </div>';
		}elseif(file_put_contents('../includes/config.php',$config)){
			echo '<div class="font">数据库配置文件保存成功！</div>';
			if(DB::query("select * from ku_config where 1")==FALSE)
				echo '<div class="btn">
   	<a href="?do=4"><input  class="index_mian_right_seven_Forward_ly" type="button" value="创建数据表" /></a>
   </div>';
			else
				echo '
			<div class="font">系统检测到你已安装过 酷享云支付！</div><div class="btn">
   	        <a href="?do=6"><input  class="index_mian_right_seven_Forward_ly" type="button" value="跳过安装" /></a>
   	         <a href="?do=4" onclick="if(!confirm(\'全新安装将会清空所有数据，是否继续？\')){return false;}"><input class="index_mian_right_seven_Forward_ly" type="button" value="全新安装" /></a>
            </div>';
		}else
			echo '
			<div class="font">保存失败，请确保网站根目录有写入权限!</div><div class="btn">
   	        <a href="javascript:history.back(-1)"><input class="index_mian_right_seven_Forward_ly" type="button" value="返回上一页" /></a>
            </div>';
	}
}
?>
</div>
</div>
<?php }elseif($do=='4'){?>


<div class="main">
	<div class="pleft">
		<dl class="setpbox t1">
			<dt>安装步骤</dt>
			<dd>
				<ul>
					<li class="succeed">许可协议</li>
					<li class="succeed">环境检测</li>
					<li class="succeed">参数配置</li>
					<li class="now">正在安装</li>
					<li class="succeed">安装完成</li>
				</ul>
			</dd>
		</dl>
	</div>
    <div class="pright">
  <div class="index_mian_right_one_ly">
   <div class="index_mian_right_one_one_ly"><span>创建数据表</span></div>
<?php
if(defined("SAE_ACCESSKEY"))include_once '../includes/sae.php';
else include_once '../includes/config.php';
if(!$dbconfig['user']||!$dbconfig['pwd']||!$dbconfig['dbname']) {
	echo '<div class="font">请先填写好数据库并保存后再安装！</div>
    <div class="btn">
    	<a href="javascript:history.back(-1)"><input  class="index_mian_right_seven_Forward_ly" type="button" value="返回上一页" /></a>
    </div>';
} else {
	require './db.class.php';
	$sql=file_get_contents("kuyun.sql");
	$sql=explode(';',$sql);
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

if($e!=0) {
	echo '<div class="font">安装成功！<br/>SQL成功'.$t.'句/失败0句</div>
   <div class="btn">
   	<a href="index.php?do=5"><input align="right" class="index_mian_right_seven_Forward_ly" type="button" value="下一步" /></a>
   </div>';
} else {
	echo '<div class="font">安装失败<br/>SQL成功'.$t.'句/失败'.$e.'句<br/>错误信息：'.$error.'</div>
   <div class="btn">
   	<a href="index.php?do=4"><input align="right" class="index_mian_right_seven_Forward_ly" type="button" value="点此进行重试" /></a>
   </div>';
}
?>
	</div>
  
</div>

<?php }elseif($do=='5'){?>

<div class="main">
	<div class="pleft">
		<dl class="setpbox t1">
			<dt>安装步骤</dt>
			<dd>
				<ul>
					<li class="succeed">许可协议</li>
					<li class="succeed">环境检测</li>
					<li class="succeed">参数配置</li>
					<li class="succeed">正在安装</li>
					<li class="now">安装完成</li>
				</ul>
			</dd>
		</dl>
	</div>
    <div class="pright">
  <!--右边-->
  
  <div class="index_mian_right_one_ly">
   <div class="index_mian_right_one_one_ly"><span>安装完成</span></div>
<?php
	@file_put_contents("install.lock",'酷享授权系统安装锁,余生网络技术QQ2316803263, 购买盗版系统不支持更新 且 漏洞多不适合运营，正版授权请联系余生网络2316803263购买 或到官网www.kuxiangcms.com购买');
	echo '
<div class="font">安装完成！管理账号和密码是:admin/123456</div>
   <div class="btn">
   <a href="../"><input  class="index_mian_right_seven_Forward_ly" type="button" value="网站前台" /></a>
   	<a href="../admin/"><input  class="index_mian_right_seven_Forward_ly" type="button" value="后台管理" /></a>
   </div>
    
<hr/>更多设置选项请登录后台管理进行修改。<br/><br/><font color="#FF0033">如果你的空间不支持本地文件读写，请自行在install/ 目录建立 install.lock 文件！</font></div>';
?>
	 </div>
</div>

<?php }elseif($do=='6'){?>
<div class="main">
	<div class="pleft">
		<dl class="setpbox t1">
			<dt>安装步骤</dt>
			<dd>
				<ul>
					<li class="succeed">许可协议</li>
					<li class="succeed">环境检测</li>
					<li class="succeed">参数配置</li>
					<li class="succeed">正在安装</li>
					<li class="now">安装完成</li>
				</ul>
			</dd>
		</dl>
	</div>
    <div class="pright">
  <!--右边-->
  
  <div class="index_mian_right_one_ly">
   <div class="index_mian_right_one_one_ly"><span>安装完成</span></div>
<?php
	@file_put_contents("install.lock",'酷享授权系统安装锁,余生网络技术QQ2316803263, 购买盗版系统不支持更新 且 漏洞多不适合运营，正版授权请联系余生网络2316803263购买 或到官网www.kuxiangcms.com购买');
	echo '
<div class="font">安装完成！管理账号和密码是:admin/123456</div>
   <div class="btn">
   <a href="../"><input  class="index_mian_right_seven_Forward_ly" type="button" value="网站前台" /></a>
   <a href="../admin/"><input  class="index_mian_right_seven_Forward_ly" type="button" value="后台管理" /></a>
   </div>
    
<hr/>更多设置选项请登录后台管理进行修改。<br/><br/><font color="#FF0033">如果你的空间不支持本地文件读写，请自行在install/ 目录建立 install.lock 文件！</font></div>';
?>
	</div>
</div>

<?php }?>

</div>
</body>
</html>