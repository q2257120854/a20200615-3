<?php
	include '../conf/config.php';
	header("content-type:text/html;charset=utf-8");
	if(!isset($_SESSION['username'])||empty($_SESSION['username'])||!isset($_SESSION['uid'])||empty($_SESSION['uid'])){
		echo "<script>alert('请登录！');window.location.href='../index.php'</script>";
		exit();
	}

	$id = $_GET['id'];
	$sql = "SELECT * FROM `version` WHERE id ='$id';";
	$result=mysql_query($sql);
	if($result&&mysql_num_rows($result)){
	   while ($row=mysql_fetch_assoc($result)) {
			  $name = $row['name'];
			  $content = base64_decode($row['content']);
			  $file = $row['file'];
	   }
	}
	
	$action = $_GET['action'];
	if($action=='do'){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$content = base64_encode($_POST['content']);
		$file = $_POST['file'];
		$sql = "UPDATE `version` SET `name` = '$name', `content` = '$content', `file` = '$file' WHERE `id` = '$id';";
	    mysql_query($sql);
		mysql_close();
		echo "<script type=\"text/javascript\">alert('更新成功');window.location.href='qiandao1-index.php'</script>";
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>管理中心-系统设置</title>
<link href="../static/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
		<div id="bg">
			<div id="in_logo"></div>
			<div id="in_lay">
				<div id="in_top">
					<p>修改系统设置</p>
					
				</div>
				<div id="in_con">
					<div id="left">
					<?php
	                include 'left.php';
                    ?>
					</div>
					<div id="right">
						<div class="info">
							<div class="info_top"><h2><a href="qiandao1-index.php">返回管理面板</a></h2></div>
							<table width="100%" cellspacing="0" cellpadding="5" border="0" bgcolor="#ffffff" align="center" class="cfBox">
								<tbody>
		   <iframe id="frame_profile" name="frame_profile" style="display: none"></iframe>
           <form action="qiandao1-chanage.php?action=do" method="post" enctype="multipart/form-data" autocomplete="off" target="frame_profile">
				
			<div id="con">
                <dl>
                    <dt id="acc">网站名字：</dt>
                    <dd>
                      <input name="name" type="text" class="user" value='<?php echo $name?>'/>
                    </dd>
                    <dt>网站公告：</dt>
                    <dd>
					<textarea name="content" clos="100" rows="10"/><?php echo $content?></textarea>
                    </dd>
					<dt>APP下载链接：</dt>
					<dd>
                      <input name="file" type="text" class="user" value='<?php echo $file?>'/>
                    </dd>
					<dd>
                      <input type='hidden' name="id" class="user" value='<?php echo $id?>'/>
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