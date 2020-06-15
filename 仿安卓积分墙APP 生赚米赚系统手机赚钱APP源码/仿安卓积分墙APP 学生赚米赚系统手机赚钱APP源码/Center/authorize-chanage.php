<?php
	include '../conf/config.php';
	header("content-type:text/html;charset=utf-8");
	if(!isset($_SESSION['username'])||empty($_SESSION['username'])||!isset($_SESSION['uid'])||empty($_SESSION['uid'])){
		echo "<script>alert('请登录！');window.location.href='../index.php'</script>";
		exit();
	}

	$uid = $_GET['uid'];
	$sql = "SELECT * FROM `vip` WHERE uid ='$uid';";
	$result=mysql_query($sql);
	if($result&&mysql_num_rows($result)){
	   while ($row=mysql_fetch_assoc($result)) {
			  $username = $row['username'];
			  $jf = $row['jf'];
			  $ip = $row['ip'];
			  $qq = $row['qq'];
			  $tel = $row['tel'];
			  $time = date("Y-m-d",$row['time']);
	   }
	}
	
	$action = $_GET['action'];
	if($action=='do'){
		$uid = $_POST['uid'];
		$username = $_POST['username'];
		$jf = $_POST['jf'];
		$ip = $_POST['ip'];
		$qq = $_POST['qq'];
	    $tel = $_POST['tel'];
		$time = strtotime($_POST['time']);
		$sql = "UPDATE `vip` SET `username` = '$username', `jf` = '$jf', `ip` = '$ip', `qq` = '$qq', `tel` = '$tel', `time` = '$time' WHERE `uid` = '$uid';";
	    mysql_query($sql);
		mysql_close();
		echo "<script type=\"text/javascript\">alert('更新成功');</script>";
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
							<div class="info_top"><h2>修改</h2></div>
							<table width="100%" cellspacing="0" cellpadding="5" border="0" bgcolor="#ffffff" align="center" class="cfBox">
								<tbody>
		   <iframe id="frame_profile" name="frame_profile" style="display: none"></iframe>
           <form action="authorize-chanage.php?action=do" method="post" enctype="multipart/form-data" autocomplete="off" target="frame_profile">
				
			<div id="con">
                <dl>
                    <dt id="acc">姓名：</dt>
                    <dd>
                      <input name="username" type="text" class="user" value='<?php echo $username?>'/>
                    </dd>
                    <dt>账户余额：</dt>
                    <dd>
                      <input name="jf" type="text" class="user" value='<?php echo $jf?>'/>
                    </dd>
					<dt>IP：</dt>
                    <dd>
                      <input name="ip" type="text" class="user" value='<?php echo $ip?>'/>
                    </dd>
					<dt>QQ：</dt>
                    <dd>
                      <input name="qq" type="text" class="user" value='<?php echo $qq?>'/>
                    </dd>
					<dt>电话：</dt>
                    <dd>
                      <input name="tel" type="text" class="user" value='<?php echo $tel?>'/>
                    </dd>
					<dt>时间：</dt>
					<dd>
                      <input name="time" type="text" class="user" value='<?php echo $time?>'/>
                    </dd>
					<dd>
                      <input type='text' name="uid" class="user" value='<?php echo $uid?>'/>
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