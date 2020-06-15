<?php
	include '../conf/config.php';
	header("content-type:text/html;charset=utf-8");
	if(!isset($_SESSION['username'])||empty($_SESSION['username'])||!isset($_SESSION['uid'])||empty($_SESSION['uid'])){
		echo "<script>alert('请登录！');window.location.href='../index.php'</script>";
		exit();
	}
	
	$action = $_GET['action'];
	if($action=='do'){
		$username = 'admin';
		$password=md5($_POST['password']);
        $rpassword=md5($_POST['rpassword']);

		if(!$_POST['password']){
			echo "<script>alert('填写密码！');</script>";
			die;
		}
		if($password!=$rpassword){
            echo "<script>alert('两次密码不一致！');</script>";
        }else{
			$sql = "UPDATE `user` SET `password` = '$password' WHERE `user`.`username` = '$username';";
	        mysql_query($sql);
		    mysql_close();

	session_start();

	//1.将session数组清空
	$_SESSION = null;
	
	//2.将cookie设置失效
	setcookie(session_name(),'',time()-1,'/');//PHPSESSID
	
	//3.可以删除session文件【可选】
	session_destroy();
		    echo "<script type=\"text/javascript\">alert('更新成功');</script>";
		}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>管理中心</title>
<link href="../static/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
		<div id="bg">
			<div id="in_logo"></div>
			<div id="in_lay">
				<div id="in_top">
					<p>管理中心</p>
					
				</div>
				<div id="in_con">
					<div id="left">
					<?php
	                include 'left.php';
                    ?>
					</div>
					<div id="right">
						<div class="info">
							<div class="info_top"><h2>修改密码</h2></div>
							<table width="100%" cellspacing="0" cellpadding="5" border="0" bgcolor="#ffffff" align="center" class="cfBox">
								<tbody>
		   <iframe id="frame_profile" name="frame_profile" style="display: none"></iframe>
           <form action="profile.php?action=do" method="post" enctype="multipart/form-data" autocomplete="off" target="frame_profile">
				
			<div id="con">
                <dl>
                    <dt id="acc">账号：</dt>
                    <dd>
                      <input name="username" type="text" class="user" value='admin' readonly="true"/>&nbsp;
                    </dd>
                    <dt>新密码：</dt>
                    <dd>
                      <input name="password" type="password" class="pw" />&nbsp;
                    </dd>
                    <dt>确认密码：</dt>
                      <dd><input name="rpassword" type="password" class="pw" />&nbsp;
                    </dd>
                </dl>
            </div>
			<div id="bottom">
			  <button type="submit" value="true" id="submit"/><strong>保存</strong></button>
            </div>

			</form>


								</tbody>
							</table>					
						</div>
					</div>
				<div class="clear"></div>
				</div>
			</div>
		</div>
</body>
</html>