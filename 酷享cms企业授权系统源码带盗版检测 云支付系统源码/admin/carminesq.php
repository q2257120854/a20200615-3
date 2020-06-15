<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
if ($my == "deletebyid") { 
	$getid = $_GET['id'];
                  $row = $DB->get_row("select * from ku_carmlog where id =".$getid." limit 1");
                  if(!$row){
                      @header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('发生异常！');history.go(-1);</script>");
                  }
                  $sql = "delete from ku_carmlog where id = ".$getid;
                  if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除卡密授权成功！');window.location.href='./carminesq.html';</script>");
                }else{ 
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除卡密授权失败！');history.go(-1);</script>");
                }
}
if($my == "detarz"){
          
                 $sql = " truncate table ku_carmlog";
                if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('成功删除所有卡密授权记录！');window.location.href='./carminesq.html';</script>");
                }else{
                 
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除所有卡密授权失败！');history.go(-1);</script>");
                }
            }

?><br>
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
    $numrows=$DB->count("SELECT count(*) from ku_carmlog where carmine  like '%$pz%' or kuhost like '%$pz%' or operator like '%$pz%' ");
}else{

    $numrows=$DB->count("SELECT count(*) from ku_carmlog");
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
    $sql = "SELECT * FROM ku_carmlog WHERE  carmine  like '%$pz%' or kuhost like '%$pz%' or operator like '%$pz%'  order by id desc limit $offset,$pagesize";
}else{
    $sql = "SELECT * FROM ku_carmlog  order by id desc limit $offset,$pagesize";
   
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
                        <a href="?my=detarz" onclick="return confirm('你确定要删除全部卡密授权吗？');">
                <button class="btn btn-primary">
                     删除全部卡密授权
                    </button>
                    </a> 
                    
                                 
<div class="row">              
            <div class="col-md-12">
                 <div class="white-box">
                      <h2 class="header-title">卡密授权记录</h2>
                         <div class="table-wrap">
                            <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          ID
                        </th>
                        <th data-hide="phone">
                          授权域名
                        </th>
                        <th data-hide="phone,tablet">
                          卡密
                        </th>
                        <th data-hide="phone,tablet">
                          授权QQ
                        </th>
                        <th data-hide="phone,tablet">
                         使用时间
                        </th>
                        <th data-hide="phone,tablet">
                         IP地址
                        </th>
                        <th data-hide="phone,tablet">
                         状态
                        </th>
                        <th data-hide="phone,tablet">
                         操作人
                        </th>
                        <th data-hide="phone,tablet">
                         卡密归属人
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
                          <?=$res['kuhost']?>
                        </td>
                        <td>
                          <?=$res['carmine']?>
                        </td>
                        <td>
                          <?=$res['ku_qq']?>
                        </td>
                        <td>
                          <?=$res['addtime']?>
                        </td>
                        <td>
                          <?=$res['ip']?>
                        </td>
                        <td>
                          <?=kami_log($res['status'])?>
                        </td>
                        <td>
                          <?=$res['operator']?>
                        </td>
                         <td>
                          <?=$res['username']?>
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
 





 

