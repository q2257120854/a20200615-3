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
<title>管理中心-添加数据</title>
<link href="../static/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
		<div id="bg">
			<div id="in_logo"></div>
			<div id="in_lay">
				<div id="in_top">
					<p>广告管理</p>
	
				</div>
				<div id="in_con">
					<div id="left">
					<?php
	                include 'left.php';
                    ?>
					</div>
					<div id="right">
						<div class="info">
							<div class="info_top"><h2><a href="sz-add.php">添加广告</a></h2></div>
							<table width="100%" cellspacing="0" cellpadding="5" border="0" bgcolor="#ffffff" align="center" class="cfBox">
								<tbody>
								    <th width="10%" class="buy_tr">广告类型</th>
									<th width="10%" class="buy_tr">广告价格</th>
                                    <th width="40%" class="buy_tr">广告代码</th>
									<th width="10%" class="buy_tr">是否审核</th>
									<th width="10%" class="buy_tr">开始时间</th>
									<th width="10%" class="buy_tr">结束时间</th>
									<th width="10%" class="buy_tr">操作</th>
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
 $query = "select count(*) as total from authorize";
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
										$sql="select * from authorize limit $offset,$page_size";
										$result=mysql_query($sql);
										if($result&&mysql_num_rows($result)){
											while ($row=mysql_fetch_assoc($result)) {
											echo "<tr>";
											echo "<td width='10%'' class='buy_tr'>".$row['username']."</td>";
											echo "<td width='10%'' class='buy_tr'>".$row['domain']."</td>";
											echo "<td width='40%'' class='buy_tr'>".$row['ip']."</td>";
											echo "<td width='10%'' class='buy_tr'>".$row['qq']."</td>";
											echo "<td width='10%'' class='buy_tr'>".$row['tel']."</td>";
											echo "<td width='10%'' class='buy_tr'>".date("Y-m-d",$row['time'])."</td>";
											echo "<td width='10%'' class='buy_tr'>
												<a href='sz-chanage.php?id=".$row['id']."'>修改</a> | <a href='sz-del.php?id=".$row['id']."'>删除</a>
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
							<li>记录条数：<?php echo $message_count;?>条</li>

							
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