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
    $numrows=$DB->count("SELECT count(*) from ku_charge where out_trade_no  like '%$pz%' or username like '%$pz%' or type like '%$pz%' ");
}else{ 

    $numrows=$DB->count("SELECT count(*) from ku_charge");
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
    $sql = "SELECT * FROM ku_charge WHERE  out_trade_no  like '%$pz%' or username like '%$pz%' or type like '%$pz%'  order by addtime desc limit $offset,$pagesize";
}else{
    $sql = "SELECT * FROM ku_charge  order by addtime desc limit $offset,$pagesize";
   
}
if($my == "detarz"){
          
                 $sql = " truncate table ku_charge";
                if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('成功删除所有充值记录！');window.location.href='./rechar_list.html';</script>");
                }else{
                 
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除所有充值订单失败！');history.go(-1);</script>");
                }
            }           
?>
<?php
if ($my == "deletebyid") {
	$out_trade_no = $_GET['out_trade_no'];
                  $row = $DB->get_row("select * from ku_charge where out_trade_no =".$out_trade_no." limit 1");
                  if(!$row){
                      @header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('删除订单异常！');history.go(-1);</script>");
                  }
                  $sql = "delete from ku_charge where out_trade_no = ".$out_trade_no;
                  if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除充值订单成功！');window.location.href='./rechar_list.html';</script>");
                }else{
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除充值订单失败！');history.go(-1);</script>");
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
                        <a href="?my=detarz" onclick="return confirm('你确定要删除充值订单吗？');">
                <button class="btn btn-primary">
                     删除全部订单
                    </button>
                    </a>                         
 <div class="row">              
            <div class="col-md-12">
                 <div class="white-box">
                      <h2 class="header-title">充值记录</h2>
                         <div class="table-responsive">
                            <table class="table table-bordered">
                    <thead>
                      <tr>
					  <th>充值单号</th>
					  <th>充值类型</th>
					  <th>充值时间</th>
					  <th>金币数量</th>
					  <th>金币价格</th>
					  <th>到账时间</th>
					  <th>支付方式</th>
					  <th>充值账号</th>
					  <th>充值状态</th>
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
                        <td><?=$res['out_trade_no']?></td>
						<td>充值<?=$res['coin']?>金币</td>
						<td><?=$res['addtime']?></td>
						<td><?=$res['coin']?>/个</td>
						<td><?=$res['money']?>/元</td>
						<td><?=$res['endtime']?></td>
						<td><?=zhifu_sta($res['type'])?></td>
						<td><?=$res['username']?></td>
						<td><?=zhuantai_cz($res['status'])?></td>
                        <td>
                         
                              <a href="?my=deletebyid&out_trade_no=<?=$res['out_trade_no']?>" class="bs-tooltip" title="删除">
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