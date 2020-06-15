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
    $numrows=$DB->count("SELECT count(*) from ku_article where title  like '%$pz%' or oper like '%$pz%' or type like '%$pz%' ");
}else{

    $numrows=$DB->count("SELECT count(*) from ku_article");
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
    $sql = "SELECT * FROM ku_article WHERE title  like '%$pz%' or oper like '%$pz%' or type like '%$pz%'  order by addtime desc limit $offset,$pagesize";
}else{
    $sql = "SELECT * FROM ku_article WHERE type =2 order by addtime desc limit $offset,$pagesize";
   
}        
?>
<?php
if ($my == "deleteid") {
    $id = $_GET['id'];
                  $row = $DB->get_row("select * from ku_article where type =2 and id =".$id." limit 1");
                  if(!$row){
                      @header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('删除广告轮图异常！');history.go(-1);</script>");
                  }
                  $sql = "delete from ku_article where id = ".$id;
                  if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除广告轮图成功！');window.location.href='./widesue.html';</script>");
                }else{
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除广告轮图失败！');history.go(-1);</script>");
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
                                <div class="row">
                <div class="col-md-4">
                              <div class="input-group">
                            <span class="input-group-btn">
                        <a href="./widesueadd.html">
                         <button class="btn btn-primary">
                        添加广告轮图
                       </button>
                       </a> 
                    </span>
                </div>
            </div>
        </div>                     
 <div class="row">              
                <div class="col-md-12">
                 <div class="white-box">
                    <h2 class="header-title">广告轮图</h2>
                     <div class="table-wrap">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>标题</td>
                                        <td>图片</td>
                                        <td>跳转地址</td>
                                        <td>图片显示栏目</td>
                                        <td>添加时间</td>
                                        <td>状态</td>
                                        <td>发布人</td>
                                        <td>操作</td>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                    $rs=$DB->query($sql);
                 while($res = $DB->fetch($rs))
                  {
                   ?>
                                    <tr>
                                       
                                        <td><?=$res['title']?></td>
                                        <td><img src="<?=$res['img']?>" width="80px" height="35px"/></td>
                                        
                                        <td><?=$res['content']?></td>
                                        <td><?=widesue_type($res['dada'])?></td>
                                        <td><?=$res['addtime']?></td>
                                        <td><?=Article_state($res['state'])?></td>
                                        <td><?=$res['oper']?></td>
                                        <td width=10%;>
                                          <a href="./widesuedit.html?my=widedit&id=<?=$res['id']?>" class="btn btn-xs btn-purple" title="编辑">
                                           编辑
                                              </a>

                                          <a href="?my=deleteid&id=<?=$res['id']?>" class="btn btn-xs btn-danger" title="删除">
                                           删除
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