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
    $numrows=$DB->count("SELECT count(*) from ku_complain where title  like '%$pz%' or type like '%$pz%' or qq like '%$pz%' ");
}else{

    $numrows=$DB->count("SELECT count(*) from ku_complain");
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
    $sql = "SELECT * FROM ku_complain WHERE  title  like '%$pz%' or type like '%$pz%' or qq like '%$pz%'  order by id desc limit $offset,$pagesize";  
}else{
    $sql = "SELECT * FROM ku_complain  order by id desc limit $offset,$pagesize";
   
}
if($my == "detaqc"){
          
                 $sql = "delete from ku_complain where status = 2";
                if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('清除已完成！');window.location.href='./complain.html';</script>");
                }else{
                 
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('清除失败！');history.go(-1);</script>");
                }
            }
if($my == "deta"){
	           $status=1;
	           $stat=2;
	           $sql="update `ku_complain` set `status` ='{$stat}' where `status`='{$status}'";
                if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('标记状态成功！');history.go(-1);</script>");
                }else{
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('标记状态失败！');history.go(-1);</script>");
                }
                }            
?>
<?php
if ($my == "delesc") {
	$id = $_GET['id'];
                  $rowkb = $DB->get_row("select * from ku_complain where id =".$id." limit 1");
                  if(!$rowkb){
                      @header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('数据库异常操作！');history.go(-1);</script>");
                  }
                  if ($rowkb['status']==0) {
                  	 @header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('待处理工单无权限删除！');history.go(-1);</script>");
                  }
                  if ($rowkb['status']==1) {
                  	@header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('已处理工单无权限删除，请更新成已完成状态！');history.go(-1);</script>");
                  }
                  $sql = "delete from ku_complain where id = ".$id;
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
                        <a href="?my=deta" onclick="return confirm('你确定要标记为已完成状态吗？');">
                    <button class="btn btn-primary">
                    已回复全标记为已完成
                    </button>
                    </a>
                     <a href="?my=detaqc" onclick="return confirm('你确定要清除已完成投诉吗？');">
                  <button class="btn btn-danger">
                    全部清除状态已完成工单吗
                    </button>
                    </a>        
    <div class="row">              
            <div class="col-md-12">
                 <div class="white-box">
                      <h2 class="header-title">工单列表</h2>
                         <div class="table-wrap">
                            <table class="table table-bordered">

                    <thead>
                      <tr>
                        <th>
                          产品类型
                        </th>
                        <th data-hide="phone,tablet">
                          工单内容
                        </th>
                        <th data-hide="phone,tablet">
                         创建时间
                        </th>
                        <th data-hide="phone,tablet">
                         用户IP
                        </th>
                        <th data-hide="phone,tablet">
                         联系QQ
                        </th>
                        <th data-hide="phone,tablet">
                         查看密码
                        </th>
                         <th data-hide="phone,tablet">
                         回复内容
                        </th>
                        <th data-hide="phone,tablet">
                         处理时间
                        </th>
                        <th data-hide="phone,tablet">
                         投诉类型
                        </th>
                         <th data-hide="phone,tablet">
                          操作人
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
 $f = 1;
       while($res = $DB->fetch($rs))
        
            {
                 ?>
                      <tr>
                         <td>
                         <?=$res['title']?>
                        </td>
                        <td>
                          <?=mb_substr($res['content'], 0, 20, 'utf-8')?>
                        </td>
                        <td>
                          <?=$res['addtime']?>
                        </td>
                        <td>
                          <?=$res['ip']?>
                        </td>
                        <td>
                        <a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$res['qq']?>&Site=<?=$conf['title']?>&Menu=yes" title="点击直接QQ会话" style="color:#FF00FF"><?=$res['qq']?> </a>
                        </td>
                        <td>
                          <?=$res['key']?>
                        </td>
                        <td>
                          <a id="check<?=$f?>" title="点击查看"><?=mb_substr($res['hfconte'], 0, 20, 'utf-8')?></a>
                          <button name="title<?=$f?>" hidden="hidden" value="<?=$res['title']?>"></button>
                          <button name="hfconte<?=$f?>" hidden="hidden" value="<?=$res['hfconte']?>"></button>
                          <button name="hftime<?=$f?>" hidden="hidden" value="<?=$res['hftime']?>"></button>
                          <button name="name<?=$f?>" hidden="hidden" value="<?=$res['name']?>"></button>
                        </td>
                          <td>
                           <?=$res['hftime']?>
                          
                        </td>
                           <td>
                           <?=complain_sta($res['type'])?>
                          
                        </td>
                           <td>
                           <?=$res['name']?>
                          
                        </td>
                           <td>
                           <?=complain_zt($res['status'])?>
                          
                        </td>
                        <td>
                          
                          <a id="check_notice<?=$f?>"><span class="badge badge-pill badge-danger m-1">查看</a>
                          <button name="title<?=$f?>" hidden="hidden" value="<?=$res['title']?>"></button>
                          <button name="content<?=$f?>" hidden="hidden" value="<?=$res['content']?>"></button>
                          <button name="addtime<?=$f?>" hidden="hidden" value="<?=$res['addtime']?>"></button>
                          <button name="username<?=$f?>" hidden="hidden" value="<?=$res['username']?>"></button>
                              <a href="comedit.html?my=dit&id=<?=$res['id']?>" class="badge badge-pill badge-primary m-1" title="回复">
                                回复
                              </a>
                              <a href="?my=delesc&id=<?=$res['id']?>" class=" badge badge-pill badge-success m-1" title="删除">
                                删除
                              </a>
                        </td>    
                      </tr>
                      <?php

                      $f++;
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