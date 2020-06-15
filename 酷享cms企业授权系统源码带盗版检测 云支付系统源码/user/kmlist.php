<?php
include '../ayangw/common.php';


function km_sta($sta){
    if($sta == 0){
        return '<span class="am-badge am-badge-success">未使用</span>';
    }
     if($sta == 1){
        return '<span class="am-badge am-badge-danger">已使用</span>';
    }
}
if($my == "clear"){
    unset($_SESSION['pz']);
}
if(!empty($my) && $my != null && $my == "sousuo"){
  
    $_SESSION['pz'] =$_POST['pz'];
}
?>
<!doctype html>
<html class="no-js fixed-layout">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>授权列表 | <?=$conf['title']?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<?php
include 'header.php';
?>

<div class="am-cf admin-main">
  <!-- sidebar start -->
 <?php
 include 'nav.php';
 ?>
  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">卡密管理</strong>  <small> </small></div>
      </div>


      <div class="am-g">
        <div class="am-u-sm-12">
            <?php
            if($userrow['daili_lv'] != 2 && $userrow['daili_lv'] != 3){
                 echo '<div class="am-panel am-panel-default">
    <div class="am-panel-bd"><i class="am-icon-times am-icon-fw"></i> 您没有权限操作本页面哦。</div>
</div>';
            }elseif($my == "deletebyid"){
                $id = intval($_GET['id']);
                 $sql = "delete from auth_zzi_kms where km_operator = '".$userrow['daili_user']."' and km_id = ".$id;
                if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('成功删除卡密！');window.location.href='./kmlist.php';</script>");
                }else{
                 
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除失败！');history.go(-1);</script>");
                } 
            }else if($my == "detall"){
          
                 $sql = "delete from auth_zzi_kms where  km_operator = '".$userrow['daili_user']."' and km_operator = '".$userrow['daili_user']."'";
                if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('成功删除已使用卡密！');window.location.href='./kmlist.php';</script>");
                }else{
                 
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除失败！');history.go(-1);</script>");
                }
            }elseif($my == "detysy"){
                $sql = "delete from auth_zzi_kms where  km_operator = '".$userrow['daili_user']."' and km_status = 1";
                if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('成功删除已使用卡密！');window.location.href='./kmlist.php';</script>");
                }else{
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除失败！');history.go(-1);</script>");
                }
                
            }elseif($my == "add_submit"){
                $countall = $DB->get_row("select count(km_id) from auth_zzi_kms where  km_operator = '".$userrow['daili_user']."'");
                
                if($countall[0] >= intval($conf['dl_createkm_uplimit'])){
                     @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('您已经生成的卡密数量达到系统上限，请先使用已生成的卡密或清理已使用的卡密后再尝试！');window.location.href='./kmlist.php';</script>");
                }else{
                    $number = daddslashes($_POST['number']);
                $endtime = daddslashes($_POST['endtime']);
                $operator = $userrow['daili_user'];
                echo '<div class="am-panel am-panel-default">
  <div class="am-panel-hd">成功生成一下卡密</div>
  <div class="am-panel-bd">';
                echo '<ul class="am-list am-list-static">';
                for ($i = 0; $i < $number; $i++) {
                    $km=getkm($conf['kmqz']."_",20);
                    $sql = "insert into auth_zzi_kms(km_kms,km_ctime,km_etime,km_operator,km_status) values('$km',now(),'$endtime','$operator',0)";
                    if($DB->query($sql)) {
                            echo "<li >$km</li>";
                    }
                }
                echo ' <li><a href="kmlist.php">返回卡密列表>>。</a></li>';
                echo '</ul>';
                echo ' </div></div>';
                }
                

            }elseif($my == "create"){
                 if($userrow['daili_lv'] == 2 || $userrow['daili_lv'] == 3){
                ?>
            <form action="?my=add_submit" method="POST">
<div class="am-input-group">
  <span class="am-input-group-label"><i class="am-icon-heart am-icon-fw"></i></span>
  <input type="number" class="am-form-field" name="number" id="number" placeholder="生成数量">
</div>
            <br>
<div class="am-input-group">
  <span class="am-input-group-label"><i class="am-icon-hourglass am-icon-fw"></i></span>
  <input type="text" class="am-form-field" value="2022/2/2" name="endtime" id="endtime" placeholder="到期时间">
</div>     
 
             <br>
  <button type="submit" class="am-btn am-btn-primary am-btn-block">生成卡密</button>
</form>
              <?php
                 }
                 }else{
                
            if($userrow['daili_lv'] == 2 || $userrow['daili_lv'] == 3){
                
            
            ?>
            <div style="overflow-x:scroll;min-height:400px;">

                
                <div class="am-g">
  <div class="am-u-lg-6">
      <form action="?my=sousuo" method="POST">
    <div class="am-input-group">
      <span class="am-input-group-btn">
          <button class="am-btn am-btn-default" type="submit"><span class="am-icon-search"></span>搜索 </button>
      </span>
      <input type="text" class="am-form-field" name="pz">
    </div>
          </form>
  </div>
<div class="am-u-lg-6">

 <form action="?my=create" method="POST">
    <div class="am-input-group">
      <span class="am-input-group-btn">
           <?php
     if(!empty($_SESSION['pz'])){
         echo ' <a href="?my=clear" class="am-btn am-btn-primary">查看全部列表</a>';
     }
     ?>
          <button type="submit" class="am-btn am-btn-secondary">生成卡密</button>
          <a href="?my=detysy" class="am-btn am-btn-warning"  onclick="return confirm('你确实要删除已使用的卡密吗？');">清除已使用</a>
             <a href="?my=detall" class="am-btn am-btn-danger"  onclick="return confirm('你确实要删除全部卡密吗？');">清除所有</a>
      </span>
 
    </div>
          </form>
</div>

</div>
          <table class="am-table am-table-bd am-table-striped admin-content-table">
            <thead>
            <tr>
              <th>卡密</th><th>创建时间</th><th>使用时间</th><th>到期时间</th><th>绑定域名</th><th>状态</th><th>操作人</th><th>管理</th>
            </tr>
            </thead>
            <tbody>
            
          <?php
if(!empty($_SESSION['pz']) && $_SESSION['pz'] != ""){
    $pz = $_SESSION['pz'];   
    $numrows=$DB->count("SELECT count(*) from auth_zzi_kms where  km_operator = '".$userrow['daili_user']."' and ( km_kms  like '%$pz%'  or km_bindhost like '%$pz%' )");
}else{
 
    $numrows=$DB->count("SELECT count(*) from auth_zzi_kms where  km_operator = '".$userrow['daili_user']."'");
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
    $sql = "SELECT * FROM auth_zzi_kms WHERE  km_operator = '".$userrow['daili_user']."' and ( km_kms  like '%$pz%'  or km_bindhost like '%$pz%' ) order by km_id desc limit $offset,$pagesize";
}else{
    $sql = "SELECT * FROM auth_zzi_kms where  km_operator = '".$userrow['daili_user']."' order by km_id desc limit $offset,$pagesize";
    // echo $sql;
}

$rs=$DB->query($sql);
while($res = $DB->fetch($rs))
{
    ?>
  <tr>
     
      <td><?=$res['km_kms']?></td>
       <td><?=$res['km_ctime']?></td>
        <td><?=$res['km_stime']?></td>
      <td><?=$res['km_etime']?></td>
       <td><?=$res['km_bindhost']?></td>
     
     <td>
       <?=km_sta($res['km_status'])?>
      </td>
      <td>
          <span class="am-badge am-badge-success"><?=$res['km_operator']?></span>
      </td>
      <td>
          <div class="am-dropdown" data-am-dropdown>
                  <button class="am-btn am-btn-default am-btn-xs am-dropdown-toggle" data-am-dropdown-toggle><span class="am-icon-cog"></span> <span class="am-icon-caret-down"></span></button>
                  <ul class="am-dropdown-content">
                    <li><a href="?my=deletebyid&id=<?=$res['km_id']?>" >1. 删除</a></li>
                  </ul>
                </div>
         
      </td>
  </tr>      
        
     <?php
//echo '<tr><td>'.$res['auth_id'].'</td><td>'.$res['auth_host'].'</td><td>'.$res['auth_time'].'</td><td>'.$res['auth_endtime'].'</td><td>'.$res['auth_qq'].'</td><td><span class="am-badge am-badge-success">'.$res['auth_operator'].'</option></td><td><a href="?act=deletebyid&id='.$res['auth_id'].'" class="am-btn am-btn-warning am-round am-btn-sx">移除记录</a></td></tr>';
}
?>
            </tbody>
          </table>
        </div>
   <?php
echo'<ul class="am-pagination">';
$first=1;
$prev=$page-1;
$next=$page+1;
$last=$pages;
if ($page>1)
{
echo '<li><a href="?page='.$first.$link.'">首页</a></li>';
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
            }
            }
?>
     </div>
          
       
      </div>
    </div>

    <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2018 <?=$conf['title']?>, ZongZI.</p>
    </footer>
  </div>
  <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
<script>
function checkaddauthhost(){
    if($("#auth_host").val() == ""){
        alert("授权域名不能为空");
        return false;
    }
    if($("#auth_qq").val() == ""){
        alert("绑定的QQ不能为空");
        return false;
    }
    var host = $("#auth_host").val();
    if(host.indexOf("/") >= 0){
        alert("授权域名不格式错误");
        return false;
    }
     if(host.indexOf(".") == -1){
        alert("授权域名不格式错误");
        return false;
    }
    if($("#auth_skey").val() == ""){
        var skey = $("#auth_qq").val();
        $("#auth_skey").val(skey);
    }
    return true;
}

</script>