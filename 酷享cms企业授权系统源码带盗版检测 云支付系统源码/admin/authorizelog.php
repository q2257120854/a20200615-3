<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
?>
 <?php
if($my == "clear"){
    unset($_SESSION['pz']);
}
if(!empty($my) && $my != null && $my == "so"){
  if ($_POST['pz']=='') {
    	@header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('搜索框内容,不能为空！');history.go(-1);</script>");
    }
    $_SESSION['pz'] =$_POST['pz'];

}
if(!empty($_SESSION['pz']) && $_SESSION['pz'] != ""){
    $pz = $_SESSION['pz'];   
    $numrows=$DB->count("SELECT count(*) from ku_authorlog where host  like '%$pz%' or ip like '%$pz%' or name like '%$pz%' ");
}else{

    $numrows=$DB->count("SELECT count(*) from ku_authorlog");
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
    $sql = "SELECT * FROM ku_authorlog WHERE  host  like '%$pz%' or ip like '%$pz%' or name like '%$pz%'  order by id desc limit $offset,$pagesize";
}else{
    $sql = "SELECT * FROM ku_authorlog  order by id desc limit $offset,$pagesize";
   
}
if($my == "detarz"){
          
                 $sql = " truncate table ku_authorlog";
                if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('成功清除所有日志！');window.location.href='./authorizelog.html';</script>");
                }else{
                 
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('清除日志失败！');history.go(-1);</script>");
                }
            }
?>
<div class="white-box">
                <div class="row">
                <div class="col-md-4">
                    <form class="form-horizontal" action="?my=so" method="POST">
                         <div class="input-group">
                               <input type="text" class="form-control" name="pz" placeholder="请输入搜索内容！" value="<?=$_POST['pz']?>">
                              <span class="input-group-btn">
                             <button class="btn btn-success" type="submit">
                             搜索
                            </button> 
                             </span>
                         
                        </div>
                    </form>
                      </div>
                  <span class="input-group-btn">
                               <?php
     if(!empty($_SESSION['pz'])){
         echo ' <a href="?my=clear"><button class="btn btn-inverse">查看全部记录</button></a>';
     }
     ?> 
                            </span>
                            </div><br>
                 <div class="row">
                    <span class="input-group-btn">
                  <a href="?my=detarz" onclick="return confirm('你确定要清除所有授权日志吗？');">
                         <button class="btn btn-primary">
                                 清空全部日志
                               </button></a> 
                              </span>               
                   </div>
     <div class="row">              
            <div class="col-md-12">
                 <div class="white-box">
                      <h2 class="header-title">授权日志</h2>
                         <div class="table-wrap">
                            <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th data-class="expand">
                          ID
                        </th>
                        <th>
                          授权域名
                        </th>
                        <th data-hide="phone">
                          添加时间
                        </th>
                        <th data-hide="phone,tablet">
                          IP
                        </th>
                        <th data-hide="phone,tablet">
                         授权通道
                        </th>
                        <th data-hide="phone,tablet">
                         操作级别
                        </th>
                        <th data-hide="phone,tablet">
                          操作人
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
                          <?=$res['host']?>
                        </td>
                        <td>
                          <?=$res['time']?>
                        </td>
                        <td>
                          <?=$res['ip']?>
                        </td>
                        <td>
                          <span class="label label-success">
                           <?=$res['channel']?>
                          </span>
                        </td>
                         <td>
                          <?=admin_lv($res['level'])?>
                        </td>
                        <td>
                           <?=$res['name']?>
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