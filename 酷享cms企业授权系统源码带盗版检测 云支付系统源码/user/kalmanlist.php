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
 ?>                             <?php
if(!empty($_SESSION['pz']) && $_SESSION['pz'] != ""){
    $pz = $_SESSION['pz'];   
    $numrows=$DB->count("SELECT count(*) from ku_carmine where  operator = '".$userrow['username']."' and ( carmine  like '%$pz%')");
}else{
 
    $numrows=$DB->count("SELECT count(*) from ku_carmine where  operator = '".$userrow['username']."'");
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
    $sql = "SELECT * FROM ku_carmine WHERE  operator = '".$userrow['username']."' and ( carmine  like '%$pz%') order by addtime desc limit $offset,$pagesize";
}else{
    $sql = "SELECT * FROM ku_carmine where  operator = '".$userrow['username']."' order by addtime desc limit $offset,$pagesize";
}
?>
 <div class="main">
      <div class="main-content">
        <div class="container-fluid">
          <h3 class="page-title">卡密列表</h3>
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
            <div class="col-md-12">
              <div class="panel">
                              <div class="panel-heading">
                  <h3 class="panel-title">卡密列表
                  </h3>
                    </div>
                <div class="panel-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>卡密</th>
                        <th>添加时间</th>
                        <th>使用时间</th>
                        <th>到期时间</th>
                        <th>状态</th>
                        <th>操作人</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php
                      $rs=$DB->query($sql);
                    while($res = $DB->fetch($rs))
                   {
                    ?>
                      <tr> 
                        <td><?=$res['id']?></td>
                        <td><?=$res['carmine']?></td>
                        <td><?=$res['addtime']?></td>
                        <td><?=$res['sytiem']?></td>
                        <td><?=$res['expire']?></td>
                        <td><?=$res['operator']?></td>
                        <td><?=kami_sta($res['status'])?></td>
                        <td>
                        <div hidden id="keydiv"><?=$res['carmine']?></div>
                       <span class="label label-info" onclick="copyText()">复制卡密</span>
                        </td>
                      </tr>
                    <?php }?>
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

  <script type="text/javascript">
function copyText() {
var Url2 = document.getElementById("keydiv").innerText;
var oInput = document.createElement('input');
oInput.value = Url2;
document.body.appendChild(oInput);
oInput.select();
document.execCommand("Copy"); 
oInput.className = 'oInput';
oInput.style.display = 'none';
alert('复制卡密成功！');
setInterval('window.clipboardData.setData(\'text\',\'Please No Copies\')',1);
}
  </script>
</body>
</html>         