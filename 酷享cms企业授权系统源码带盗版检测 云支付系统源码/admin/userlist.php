<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
?>
 <?php
if(!empty($_SESSION['pz']) && $_SESSION['pz'] != ""){
    $pz = $_SESSION['pz'];   
    $numrows=$DB->count("SELECT count(*) from ku_admin where id  like '%$pz%' or username like '%$pz%' or grade like '%$pz%' ");
}else{

    $numrows=$DB->count("SELECT count(*) from ku_admin");
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
    $sql = "SELECT * FROM ku_admin WHERE  id  like '%$pz%' or username like '%$pz%' or grade like '%$pz%'  order by id desc limit $offset,$pagesize";
}else{
    $sql = "SELECT * FROM ku_admin  order by id desc limit $offset,$pagesize";
   
}
?>
<?php
if ($my == "deletebyid") {
	$userid = $_GET['id'];
                  $rowe = $DB->get_row("select * from ku_admin where id =".$userid." limit 1");
                  if(!$rowe){
                      @header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('删除异常！');history.go(-1);</script>");
                  }
                  if ($rowe['grade']==0) {
                  	@header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('无权限删除超级管理员！');history.go(-1);</script>");
                  }
                  if ($row['grade']==1) {
                  	@header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('删除失败管理员权限不足！');history.go(-1);</script>");
                  }
                  if ($row['grade']==2) {
                  	@header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('删除失败管理员权限不足！');history.go(-1);</script>");
                  }
                  if ($row['grade']==4) {
                  	@header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('删除失败管理员权限不足！');history.go(-1);</script>");
                  }
                  $sql = "delete from ku_admin where id = ".$userid;
                  if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除管理员成功！');window.location.href='./userlist.html';</script>");
                }else{
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除管理员失败！');history.go(-1);</script>");
                }
}?>
<div class="white-box">               
 <div class="row">              
            <div class="col-md-12">
                 <div class="white-box">
                      <h2 class="header-title">管理员列表</h2>
                         <div class="table-wrap">
                            <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          ID
                        </th>
                        <th data-hide="phone">
                          管理昵称
                        </th>
                        <th data-hide="phone,tablet">
                          管理账号
                        </th>
                        <th data-hide="phone,tablet">
                          创建时间
                        </th>
                        <th data-hide="phone,tablet">
                          IP白名单
                        </th>
                        <th data-hide="phone,tablet">
                         权限等级
                        </th>
                        <th data-hide="phone,tablet">
                          状态
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
                          <?=$res['username']?>
                        </td>
                        <td>
                          <?=$res['addtime']?>
                        </td>
                        <td>
                          <?=$res['userip']?>
                        </td>
                        <td>
                           <?=user_sta($res['grade'])?>
                        </td>
                        <td>
                           <?=user_zt($res['active'])?>
                          
                        </td>
                        <td class="align-center">
                              <a href="useredit.html?my=useredit&id=<?=$res['id']?>" class="bs-tooltip" title="修改">
                                <i class="icon-pencil">
                                </i>
                              </a>
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