<?php
include '../includes/common.php';
?>
<!doctype html>
<html lang="en"> 
<head>
   <title>用户后台 | <?=$conf['title']?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
  <link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/demo.css">
  <link rel="stylesheet" href="assets/css/user.css">
  <link rel="stylesheet" href="assets/foot/iconfont.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>
<body>
<?php
include 'header.php';
?>
<?php
 include 'nav.php';
 if($my == "clear"){
    unset($_SESSION['pz']);
}
if(!empty($my) && $my != null && $my == "sousuo"){
    $_SESSION['pz'] =$_POST['pz'];
}
 ?>										          <?php
if(!empty($_SESSION['pz']) && $_SESSION['pz'] != ""){
    $pz = $_SESSION['pz'];   
    $numrows=$DB->count("SELECT count(*) from ku_complain where  username = '{$userrow['username']}' and ( title  like '%$pz%' or username like '%$pz%')");
}else{
 
    $numrows=$DB->count("SELECT count(*) from ku_complain where  username = '{$userrow['username']}'");
}
$pagesize=20;
$pages=intval($numrows/$pagesize);
if ($numrows%$pagesize)
{
 $pages++;
 }
if (isset($_GET['page'])){
$page=intval($_GET['page']);
}
else{
$page=1;
}
$offset=$pagesize*($page - 1);

if(!empty($_SESSION['pz']) && $_SESSION['pz'] != ""){
    $pz = $_SESSION['pz'];
    $sql = "SELECT * FROM ku_complain WHERE  username = '{$userrow['username']}' and ( title  like '%$pz%'  or username like '%$pz%') order by addtime desc limit $offset,$pagesize";
}else{
    $sql = "SELECT * FROM ku_complain where  username = '{$userrow['username']}' order by addtime desc limit $offset,$pagesize";
}
?>
 <div class="main">
			<div class="main-content">
				<div class="container-fluid">
				  <h3 class="page-title">工单列表</h3>
 	                    <div class="row">
 	                    <form action="?my=sousuo" method="post">
 	                    <div class="panel-body">
									 <div class="input-group col-md-4">
										<input class="form-control" type="text" name="pz" placeholder="请输入查询内容" value="<?=$_POST['pz']?>" required="">
										<span class="input-group-btn"><button class="btn btn-primary" type="submit">查询</button></span>
					           <?php
                               if(!empty($_SESSION['pz'])){
                          echo '<span class="input-group-btn"><a href="?my=clear"><button class="btn btn-primary" type="button">查看全部列表</button></a></span>';
                               }
                                ?>

								</div>
								</div>
					  </form>
					  <div class="panel-body">
					   <div class="col-md-4">
					     <span class="input-group-btn"><a href="./workadd.html"><button class="btn btn-primary" type="button">新建工单</button></a></span>
					     </div>
					     </div>
						<div class="col-md-12">
							<div class="panel">
                              <div class="panel-heading">
									<h3 class="panel-title">工单详情
									</h3>
						        </div>
								<div class="panel-body">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>产品类型</th>
												<th>工单内容</th>
												<th>创建时间</th>
												<th>回复内容</th>
												<th>处理时间</th>
												<th>提交人</th>
												<th>投诉类型</th>
												<th>状态</th>
												<th>操作</th>
											</tr>
										</thead>
										<tbody>
                                           <?php
                                             $rs=$DB->query($sql);
                                             $f = 1;
                                             while($res = $DB->fetch($rs))
                                              {
                                            ?>
											<tr> 

												<td><?=$res['title']?></td>
												<td><a id="check_notice<?=$f?>" title="点击查看"><?=mb_substr($res['content'], 0, 20, 'utf-8')?></a>
                          <button name="title<?=$f?>" hidden="hidden" value="<?=$res['title']?>"></button>
                          <button name="content<?=$f?>" hidden="hidden" value="<?=$res['content']?>"></button>
                          <button name="addtime<?=$f?>" hidden="hidden" value="<?=$res['addtime']?>"></button>
                          <button name="username<?=$f?>" hidden="hidden" value="<?=$res['username']?>"></button>
												            </td>
												<td><?=$res['addtime']?></td>            
												<td><?=mb_substr($res['hfconte'], 0, 20, 'utf-8')?></td>
												<td><?=$res['hftime']?></td>
												<td><?=$res['username']?></td>
												<td><?=complain_sta($res['type'])?></td>
												<td><?=complain_zt($res['status'])?></td>
												<td>
												
                          <a id="check<?=$f?>"><span class="btn btn-xs btn-info">查看</a>
                          <button name="title<?=$f?>" hidden="hidden" value="<?=$res['title']?>"></button>
                          <button name="hfconte<?=$f?>" hidden="hidden" value="<?=$res['hfconte']?>"></button>
                          <button name="hftime<?=$f?>" hidden="hidden" value="<?=$res['hftime']?>"></button>
                          <button name="name<?=$f?>" hidden="hidden" value="<?=$res['name']?>"></button>
                        
                              <a href="workedit.html?my=dit&id=<?=$res['id']?>" class="btn btn-xs btn-primary" title="回复">
                                回复
                              </a>
                           
												</td>       
											</tr>
										<?php

                      $f++;
                       }?>
										</tbody>
									</table>
								</div>

				       <div class="row">
<div class="dataTables_footer clearfix">
<div class="col-md-12">
<div class="dataTables_paginate paging_bootstrap">
              <?php
echo'<ul class="pagination">';
$first=1;
$prev=$page-1;
$next=$page+1;
$last=$pages;
if ($page>1)
{
echo '<li class="prev disabled"><a href="?page='.$first.$link.'">首页</a></li>';
echo '<li><a href="?page='.$prev.$link.'">&laquo;</a></li>';
} else {
echo '<li><a>首页</a></li>';
echo '<li ><a>&laquo;</a></li>';
}
for ($i=1;$i<$page;$i++)
echo '<li><a href="?page='.$i.$link.'">'.$i .'</a></li>';
echo '<li ><a>'.$page.'</a></li>';
for ($i=$page+1;$i<=$pages;$i++)
echo '<li><a href="?page='.$i.$link.'">'.$i .'</a></li>';
echo '';
if ($page<$pages)
{
echo '<li><a href="?page='.$next.$link.'">&raquo;</a></li>';
echo '<li><a href="?page='.$last.$link.'">尾页</a></li>';
} else {
echo '<li ><a>&raquo;</a></li>';
echo '<li ><a>尾页</a></li>';
}
echo'</ul>';
#分页
           
?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 <div class="clearfix"></div>
    <footer>
      <div class="container-fluid">
        <p class="copyright"><a href="http://www.kuxiangcms.com/" title="5G云资源" target="_blank"><?php echo $conf['copyright'] ?></a></p>
      </div>
    </footer>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
  <script src="assets/vendor/chartist/js/chartist.min.js"></script>
  <script src="assets/scripts/klorofil-common.js"></script> 
  <script type="text/javascript" src="/public/layer/layer.js"></script>
<script>
<?php
    $f1 = 1;
    foreach ($rs as $row){
    ?>
    $("#check_notice<?=$f1?>").click(function(){
        var title = $("button[name='title<?=$f1?>']").val();
        var content = $("button[name='content<?=$f1?>']").val();
        var addtime = $("button[name='addtime<?=$f1?>']").val();
        var username = $("button[name='username<?=$f1?>']").val();
        layer.open({
           type:1,
             area:['420px','260px'],
            btn:['关闭'],
            title:title,
             content:'<ul class="list-group">' +
                 '<li class="list-group-item list-group-item-primary">' +
                '产品类型：'+title +'<br />' +
                 '投诉内容：'+content+'<br />' +
                 '创建时间：'+addtime+'&nbsp;'+
                '发送人：'+username+'<br />' +
                 '</ul>'
        });
    });
      $("#check<?=$f1?>").click(function(){
        var title = $("button[name='title<?=$f1?>']").val();
        var hfconte = $("button[name='hfconte<?=$f1?>']").val();
        var hftime = $("button[name='hftime<?=$f1?>']").val();
        var name = $("button[name='name<?=$f1?>']").val();
        layer.open({
           type:1,
             area:['420px','260px'],
            btn:['关闭'],
            title:title,
             content:'<ul class="list-group">' +
                 '<li class="list-group-item list-group-item-primary">' +
                '产品类型：'+title +'<br />' +
                 '回复内容：'+hfconte+'<br />' +
                 '回复时间：'+hftime+'&nbsp;&nbsp;'+
                '操&nbsp;作人：'+name+'<br />' +
                 '</ul>'
        });
    });
    <?php
    $f1++;
    } ?>
    </script>
</body>
</html>					
