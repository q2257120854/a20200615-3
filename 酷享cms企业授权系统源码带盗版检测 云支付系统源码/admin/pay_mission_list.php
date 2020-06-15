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
    $numrows=$DB->count("SELECT count(*) from ku_cons where out_trade_no  like '%$pz%' or username like '%$pz%' or user_belong like '%$pz%' ");
}else{

    $numrows=$DB->count("SELECT count(*) from ku_cons");
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
    $sql = "SELECT * FROM ku_cons WHERE  out_trade_no  like '%$pz%' or username like '%$pz%' or user_belong like '%$pz%'  order by addtime desc limit $offset,$pagesize";  
}else{
    $sql = "SELECT * FROM ku_cons WHERE data='1' order by addtime desc limit $offset,$pagesize";
   
}
if($my == "detaqc"){

                 $sql = "delete from ku_cons";
                if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('清除已完成！');window.location.href='./pay_mission_list.html';</script>");
                }else{
                 
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('清除失败！');history.go(-1);</script>");
                }
            }
           
?>
<?php
if ($my == "delesc") {
	$id = $_GET['id'];
                  $rowkb = $DB->get_row("select * from ku_cons where out_trade_no =".$id." limit 1");
                  if(!$rowkb){
                      @header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('数据库异常操作！');history.go(-1);</script>");
                  }
                  $sql = "delete from ku_cons where out_trade_no = ".$id;
                  if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除成功！');history.go(-1);</script>");
                }else{
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除失败！');history.go(-1);</script>");
                }
}?>
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
                  
                     <a href="?my=detaqc" onclick="return confirm('你确定要清除所有佣金记录吗？');">
                  <button class="btn btn-danger">
                    全部清除佣金记录
                    </button>
                    </a>        
    <div class="row">              
            <div class="col-md-12">
                 <div class="white-box">
                      <h2 class="header-title">佣金收入明细</h2>
                         <div class="table-wrap">
                            <table class="table table-bordered">

                    <thead>
                      <tr>
                        <th>
                          单号
                        </th>
                        <th data-hide="phone,tablet">
                          分佣详情
                        </th>
                        <th data-hide="phone,tablet">
                         分佣时间
                        </th>
                        <th data-hide="phone,tablet">
                         付款金额
                        </th>
                        <th data-hide="phone,tablet">
                         付款账号
                        </th>
                         <th data-hide="phone,tablet">
                         所得佣金
                        </th>
                        <th data-hide="phone,tablet">
                         入金账号
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
                         <?=$res['out_trade_no']?>
                        </td>
                        <td>
                          <?=$res['name']?>
                        </td>
                        <td>
                          <?=$res['addtime']?>
                        </td>
                        <td>
                          <?=$res['reward']?>元
                        </td>
                        <td>
                         <?=$res['username']?>
                        </td>
                        <td>
                          <?=$res['money']?>元
                        </td>
                        <td>
                          <?=$res['user_belong']?>
                        </td>
                        <td>
                           <?=user_lv_zt($res['status'])?>
                        </td>
                        <td>
                        <a href="?my=delesc&id=<?=$res['out_trade_no']?>" class=" badge badge-pill badge-success m-1" title="删除">
                                删除
                              </a>
                        </td>    
                      </tr>
                      <?php
                       }?>
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
    <script type="text/javascript" src="/public/layer/layer.js"></script>
</body>

</html>