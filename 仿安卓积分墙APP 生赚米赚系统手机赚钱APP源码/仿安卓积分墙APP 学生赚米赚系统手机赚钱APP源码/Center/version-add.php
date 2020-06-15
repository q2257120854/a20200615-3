<?php
	include '../conf/config.php';
	header("content-type:text/html;charset=utf-8");
	if(!isset($_SESSION['username'])||empty($_SESSION['username'])||!isset($_SESSION['uid'])||empty($_SESSION['uid'])){
		echo "<script>alert('请登录！');window.location.href='../index.php'</script>";
		exit();
	}
	
	$action = $_GET['action'];
	if($action=='do'){
		$name = $_POST['name'];
		$content = base64_encode($_POST['content']);
		$file = $_POST['file'];
        
		if(!$name||!$file){
		   echo "<script type=\"text/javascript\">alert('添加失败');</script>";
		}else{
		   $sql = "INSERT INTO `version` (`name`, `content`, `file`) VALUES ('$name', '$content', '$file');";
	       mysql_query($sql);
		   mysql_close();
		   echo "<script>alert('添加成功！');window.location.href='index.php'</script>";
		   die;
		}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>产品授权管理中心</title>
<link href="../static/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
		<div id="bg">
			<div id="in_logo"></div>
			<div id="in_lay">
				<div id="in_top">
					<p>产品授权管理中心</p>
					
				</div>
				<div id="in_con">
					<div id="left">
					<?php
	                include 'left.php';
                    ?>
					</div>
					<div id="right">
						<div class="info">
							<div class="info_top"><h2>添加</h2></div>
							<table width="100%" cellspacing="0" cellpadding="5" border="0" bgcolor="#ffffff" align="center" class="cfBox">
								<tbody>
		   <iframe id="frame_profile" name="frame_profile" style="display: none"></iframe>
           <form action="version-add.php?action=do" method="post" enctype="multipart/form-data" autocomplete="off" target="frame_profile">
				
			<div id="con">
                <dl>
                    <dt id="acc">网站名字：</dt>
                    <dd>
                      <input name="name" type="text" class="user" />
                    </dd>
                    <dt>网站公告：</dt>
                    <dd>
					<textarea name="content" clos="100" rows="10"></textarea>
                    </dd>
					<dt>APP下载地址：</dt>
					<dd>
                      <input name="file" type="text" class="user" />
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