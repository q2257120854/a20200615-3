<?php
/**
 * 登录
**/
$verifycode = 2;//验证码开关

if(!function_exists("imagecreate") || !file_exists('code.php'))$verifycode=0;
include("../includes/common.php");
if(isset($_POST['user']) && isset($_POST['pass'])){
	$user=daddslashes($_POST['user']);
	$pass=daddslashes($_POST['pass']);
	$code=daddslashes($_POST['code']);
	if ($verifycode==1 && (!$code || strtolower($code) != $_SESSION['vc_code'])) {
		unset($_SESSION['vc_code']);
		@header('Content-Type: text/html; charset=UTF-8');
		exit("<script language='javascript'>alert('验证码错误！');history.go(-1);</script>");
	}elseif($user==$conf['admin_user'] && $pass==$conf['admin_pwd']) {
		unset($_SESSION['vc_code']);
		$session=md5($user.$pass.$password_hash);
		$token=authcode("{$user}\t{$session}", 'ENCODE', SYS_KEY);
		setcookie("admin_token", $token, time() + 604800, ";\r\n");
		saveSetting('adminlogin',$date);
		log_result('后台登录', 'IP:'.$clientip, null, 1);
		@header('Content-Type: text/html; charset=UTF-8');
		exit("<script language='javascript'>alert('登陆成功防红管理中心！');window.location.href='./';</script>");
	}else {
		unset($_SESSION['vc_code']);
		@header('Content-Type: text/html; charset=UTF-8');
		exit("<script language='javascript'>alert('账号或密码不对哟！');history.go(-1);</script>");
	}
}elseif(isset($_GET['logout'])){
	setcookie("admin_token", "", time() - 604800, ";\r\n");
	@header('Content-Type: text/html; charset=UTF-8');
	exit("<script language='javascript'>alert('您已成功退出本次登陆！');window.location.href='./login.php';</script>");
}elseif($islogin==1){
	@header('Content-Type: text/html; charset=UTF-8');
	exit("<script language='javascript'>alert('登陆成功欢迎回来！');window.location.href='./';</script>");
}
?>
<html>
<head>
	<title><?php echo $conf['sitename']; ?> | 站长后台登陆［BY冰狱防红系统］</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<link rel="shortcut icon" href="../favicon.ico" />
  	<link rel="stylesheet" href="http://6y3a.cn/admin/style/css/mdui.min.css" />
  	<link rel="stylesheet" href="http://6y3a.cn/admin/style/css/main.css" />
</head>

<body class="mdui-theme-primary-indigo mdui-theme-accent-blue" style="background: linear-gradient(160deg, #b100ff 20%,#00b3ff 80%);">
	<div class="login container">
		<div class="login-heading">后台登录</div>
		<div class="login-body">
			<form action="login.php" method="post" class="form-horizontal">
				<div class="mdui-textfield mdui-textfield-floating-label">
					<label class="mdui-textfield-label">用户名</label>
					<input class="mdui-textfield-input" type="text" name="user" required>
				</div>
				<div class="mdui-textfield mdui-textfield-floating-label">
					<label class="mdui-textfield-label">密码</label>
					<input class="mdui-textfield-input" type="password" name="pass" required>
				</div>
				<div class="login-btn">
					<button class="mdui-btn mdui-btn-block mdui-btn-raised mdui-ripple mdui-color-theme-accent" type="submit" name="submit">登录</button>
				</div>
			</form>
		</div>
	</div>
	<div class="login-footer">
	</div>

<script type="text/javascript" src="http://6y3a.cn/admin/style/js/mdui.min.js"></script>

</body>
</html>