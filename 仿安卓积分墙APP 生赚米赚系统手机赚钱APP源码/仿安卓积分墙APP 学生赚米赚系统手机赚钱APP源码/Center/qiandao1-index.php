<?php
	include '../conf/config.php';
	header("content-type:text/html;charset=utf-8");
	if(!isset($_SESSION['username'])||empty($_SESSION['username'])||!isset($_SESSION['uid'])||empty($_SESSION['uid'])){
		echo "<script>alert('请登录！');window.location.href='../index.php'</script>";
		exit();
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
					<p>系统设置</p>
		
				</div>
				<div id="in_con">
					<div id="left">
					<?php
	                include 'left.php';
                    ?>
					</div>
					<div id="right">
					
						<div class="info">
							<div class="info_top"><h2><a href="qiandao1-add.php">【添加内容(仅供后期开发,请勿添加)】</a></h2></div>
							<table width="100%" cellspacing="0" cellpadding="5" border="0" bgcolor="#ffffff" align="center" class="cfBox">
								<tbody>
									<th width="20%" class="buy_tr">网站名字</th>
									<th width="30%" class="buy_tr">网站公告</th>
									<th width="40%" class="buy_tr">APP下载地址</th>
									<th width="10%" class="buy_tr">操作</th>
									<?php 
										$sql="select * from version";
										$result=mysql_query($sql);
										if($result&&mysql_num_rows($result)){
											while ($row=mysql_fetch_assoc($result)) {
											echo "<tr>";
											echo "<td width='20%'' class='buy_tr'>".$row['name']."</td>";
											echo "<td width='30%'' class='buy_tr'>".base64_decode($row['content'])."</td>";
											echo "<td width='40%'' class='buy_tr'>".$row['file']."</td>";
											echo "<td width='10%'' class='buy_tr'>
												<a href='qiandao1-chanage.php?id=".$row['id']."'>修改</a>| |<a href='qiandao1-del.php?id=".$row['id']."'>删除</a>
											</td>";
											echo "</tr>";
											}
										}
									?>
									
								</tbody>
							</table>	
							<!----------------------------------------->
							<div class="pages">
							<li>使用说明：</li>
							<li>这里的为网站相关信息！请勿添加或删除！若添加或删除会导致网站相关功能失效！！！自行修改即可，<font color="#0E04EC">不会用？不会配置？请联系我们技术QQ：2408221403&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2408221403&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:185951958:51" alt="授权客服" title="授权客服"/></a>（技术支持只限于授权用户，&#38543;&#20415;&#25784;&#28304;&#30721;&#119;&#119;&#119;&#46;&#115;&#117;&#105;&#98;&#105;&#97;&#110;&#108;&#117;&#46;&#99;&#111;&#109;
）</font></li>
							</div>
							<!----------------------------------------->				
						</div>
					</div>
				<div class="clear"></div>
				</div>
			</div>
		</div>
</body>
</html>