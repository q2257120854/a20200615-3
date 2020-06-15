<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
?>
 <?php
if(!empty($_SESSION['pz']) && $_SESSION['pz'] != ""){
    $pz = $_SESSION['pz'];   
    $numrows=$DB->count("SELECT count(*) from ku_admin_log where id  like '%$pz%' or name like '%$pz%' or grade like '%$pz%' ");
}else{

    $numrows=$DB->count("SELECT count(*) from ku_admin_log");
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
    $sql = "SELECT * FROM ku_admin_log WHERE  id  like '%$pz%' or name like '%$pz%' or grade like '%$pz%'  order by id desc limit $offset,$pagesize";
}else{
    $sql = "SELECT * FROM ku_admin_log  order by id desc limit $offset,$pagesize";
   
}
?>
<?php
if ($my == "deletebyid") {
	$userid = $_GET['id'];
                  $rowe = $DB->get_row("select * from ku_admin_log where id =".$userid." limit 1");
                  if(!$rowe){
                      @header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('删除异常！');history.go(-1);</script>");
                  }
               if ($row['grade']==0) {
	             $sql = "delete from ku_admin_log where id = ".$userid;
                  if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除日志成功！');window.location.href='./userlog.html';</script>");
                }else{
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除日志失败！');history.go(-1);</script>");
                }
                   }else{

                   	@header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('删除日志异常，无权限删除！');history.go(-1);</script>");
                   }
                 
}?>
<div class="white-box">
<div class="row">
  <div class="col-md-12">
                 <div class="white-box">
                      <h2 class="header-title">登录记录</h2>
                         <div class="table-wrap">
                            <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          ID
                        </th>
                        <th data-hide="phone">
                          登入账号
                        </th>
                        <th data-hide="phone,tablet">
                          日志详情
                        </th>
                        <th data-hide="phone,tablet">
                          权限等级
                        </th>
                        <th data-hide="phone,tablet">
                          登入时间
                        </th>
                        <th data-hide="phone,tablet">
                         登入IP
                        </th>
                         <th data-hide="phone,tablet">
                          操作
                        </th>
                      </tr>
                    </thead>
                    <tbody>

           <?php
                    $rs=$DB->query($sql);
       while($res = $DB->fetch($rs))
            {
                 ?>
                      <tr>
                         <td>
                         <?=$res['id']?>
                        </td>
                        <td>
                          <?=$res['name']?>
                        </td>
                        <td>
                          <?=$res['type']?>
                        </td>
                        <td>
                         <?=user_sta($res['grade'])?>
                        </td>
                        <td>
                          <?=$res['date']?>
                        </td>
                        <td>
                           <?=$res['ip']?>
                        </td>
                        <td>
                              <a href="?my=deletebyid&id=<?=$res['id']?>" class="bs-tooltip" title="删除">
                                <i class="icon-trash">
                                </i>
                              </a>
                        </td>    
                      </tr>
                      <?php }?>
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
