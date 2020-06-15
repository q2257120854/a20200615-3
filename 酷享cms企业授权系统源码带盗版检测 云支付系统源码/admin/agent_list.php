<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
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
    $numrows=$DB->count("SELECT count(*) from ku_user where username  like '%$pz%' or user_qq like '%$pz%'  or user_belong like '%$pz%' or user_name like '%$pz%' ");
}else{
    $numrows=$DB->count("SELECT count(*) from ku_user");
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
    $sql = "SELECT * FROM ku_user WHERE  username  like '%$pz%' or user_qq like '%$pz%'  or user_belong like '%$pz%' or user_name like '%$pz%'  order by id desc limit $offset,$pagesize";
}else{
    $sql = "SELECT * FROM ku_user  order by id desc limit $offset,$pagesize";
}

if ($my == "deletebyid") {
	$id = $_GET['id'];
                  $row = $DB->get_row("select * from ku_user where id =".$id." limit 1");
                  if(!$row){
                      @header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('删除失败,代理账号不存在！');history.go(-1);</script>");
                  }
                  $sql = "delete from ku_user where id = ".$id;
                  if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除代理账号成功！');window.location.href='./agent_list.html';</script>");
                }else{
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除代理账号失败！');history.go(-1);</script>");
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
                <div class="col-md-12">
                 <div class="white-box">
                    <h2 class="header-title">代理列表</h2>
                     <div class="table-wrap">
                            <table class="table table-bordered">
                    <thead>
                
                      <tr>
                        <th>ID</th>
                        <th>代理账号</th>
                        <th>代理昵称</th>
                        <th>代理QQ</th>
                        <th>收款名称</th>
                        <th>收款账号</th>
                        <th>添加时间</th>
                        <th>赏金余额</th>
                        <th>金币余额</th>
                        <th>赠送授权数</th>
                        <th>修改授权上限</th>
                        <th>代理等级</th>
                        <th>上级账号</th>
                        <th>状态</th>
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
                      <td><?=$res['username']?></td>
                      <td><?=$res['user_name']?></td>
                      <td><a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$res['user_qq']?>&Site=酷享授权&Menu=yes"><?=$res['user_qq']?></a></td>
                      <td><?=$res['number_nc']?></td>
                      <td><?=$res['number_zh']?></td>
                      <td><?=$res['user_addtime']?></td>
                      <td><?=$res['money']?>元</td>
                      <td><?=$res['reward_money']?>个</td>
                      <td><?=$res['user_lv']?>个</td>
                      <td><?=$res['squan_limit']?>次</td>
                      <td><?=daili_lv($res['user_limit'])?></td>
                      <?php if ($res['user_belong']=='') { ?>
                      <td>无</td>
                     <?php }else{ ?>
                      <td><?=$res['user_belong']?></td>
                      <?php } ?>
                      <td><?=daili_sta($res['user_status'])?></td>
                      <td>
                      <a href="agentedit.html?my=edit&id=<?=$res['id']?>" class="bs-tooltip" title="修改">
                        <i class="icon-pencil"></i>
                        </a>
                              <a href="?my=deletebyid&id=<?=$res['id']?>" class="bs-tooltip" title="删除">
                                <i class="icon-trash"></i>
                             
                              </a>
                        </td>    
                      </tr>
                       <?php  }?>
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