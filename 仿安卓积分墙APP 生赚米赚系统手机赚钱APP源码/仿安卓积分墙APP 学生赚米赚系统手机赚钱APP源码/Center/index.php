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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理中心-会员管理</title>
<link href="../static/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
		<div id="bg">
			<div id="in_logo"></div>
			<div id="in_lay">
				<div id="in_top">
					<p>会员管理</p>
					
				</div>
				<div id="in_con">
					<div id="left">
					<?php
	                include 'left.php';
                    ?>
					</div>
					<div id="right">
						<div class="info">
						<div class="info_top">
					<h2><font color="#0E04EC">不会用？不会配置？请联系我们技术QQ：2408221403<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2408221403&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:185951958:51" alt="授权客服" title="授权客服"/></a>（技术支持只限于授权用户&#38543;&#20415;&#25784;&#28304;&#30721;&#119;&#119;&#119;&#46;&#115;&#117;&#105;&#98;&#105;&#97;&#110;&#108;&#117;&#46;&#99;&#111;&#109;）</font></h2></div>
							<table width="100%" cellspacing="0" cellpadding="5" border="0" bgcolor="#ffffff" align="center" class="cfBox">
								<tbody>
								    <th width="10%" class="buy_tr">会员ID</th>
									<th width="20%" class="buy_tr">账户余额</th>
                                    <!---2016.2.23删除<th width="10%" class="buy_tr">IP</th>
									<th width="20%" class="buy_tr">QQ</th>--->
									<th width="30%" class="buy_tr">识别号码</th>
									<th width="20%" class="buy_tr">登录时间</th>
									<th width="20%" class="buy_tr">操作</th>
									<?php
 $page = $_GET["page"];
 if(isset($_POST["page"]) && $_POST["page"] != "")
    {
     $page = $_POST['page'];
     }
 if($page == ""){
     $page = 1;
     }

 $page_size = 10; //每页多少条数据
 $_pageNum = 10; //最多显示多少个页码
 $query = "select count(*) as total from vip";
 $result = mysql_query($query);
 $rownum = mysql_fetch_row($result);
 $message_count = $rownum[0];

 $page_count = ceil($message_count / $page_size);
 $offset = ($page-1) * $page_size;
 $pages = $page_count;
 $_start = $page - floor($_pageNum / 2); //计算开始页
 $_start = $_start < 1 ? 1 : $_start;
 $_end = $page + floor($_pageNum / 2); //计算结束页
 $_end = $_end > $pages? $pages : $_end;

 $_curPageNum = $_end - $_start + 1;
 // 左调整
if($_curPageNum < $_pageNum && $_start > 1){
     $_start = $_start - ($_pageNum - $_curPageNum);
     $_start = $_start < 1 ? 1 : $_start;
     $_curPageNum = $_end - $_start + 1;
     }
 // 右边调整
if($_curPageNum < $_pageNum && $_end < $pages){
     $_end = $_end + ($_pageNum - $_curPageNum);
     $_end = $_end > $pages? $pages : $_end;
     }


 ?>
									<?php 
										$sql="select * from vip limit $offset,$page_size";
										$result=mysql_query($sql);
										if($result&&mysql_num_rows($result)){
											while ($row=mysql_fetch_assoc($result)) {
											echo "<tr>";
											echo "<td width='10%'' class='buy_tr'>".$row['uid']."</td>";
											echo "<td width='10%'' class='buy_tr'>".$row['jf']."</td>";
											//2016.2.23删除echo "<td width='10%'' class='buy_tr'>".$row['ip']."</td>";
											//2016.2.23删除echo "<td width='20%'' class='buy_tr'>".$row['qq']."</td>";
											echo "<td width='20%'' class='buy_tr'>".$row['account']."</td>";
											echo "<td width='20%'' class='buy_tr'>".$row['sj']."</td>";
											echo "<td width='10%'' class='buy_tr'><a href='authorize-del.php?uid=".$row['uid']."'>删除</a>
											</td>";
											echo "</tr>";
											}
										}
									?>
									
								</tbody>
							</table>
							<!----------------------------------------->
							<div class="pages">
							<li>当前页码：<?php echo $page;?>/<?php echo $page_count;?></li>
							<li>会员数量：<?php echo $message_count;?>&nbsp;个</li>

							
							<?php
if($page != 1){
     echo "<li><a href=?page=1>首页</a></li>";
     echo "<li><a href=?page=" . ($page-1) . ">上一页</a></li>   ";
     }

for ($i = $_start; $i <= $_end; $i++){
     if($i == $page){
         $_pageHtml .= '<li class="active"><a>' . $i . '</a></li>';
         }else{
         $_pageHtml .= '<li><a href="' . $url . '?page=' . $i . '">' . $i . '</a></li>';
         }
     }
echo $_pageHtml;
if($page < $page_count){
     echo "<li><a href=?page=" . ($page + 1) . ">下一页</a></li>";
     echo "<li><a href=?page=" . $page_count . ">尾页</a></li>";
     }
?>
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