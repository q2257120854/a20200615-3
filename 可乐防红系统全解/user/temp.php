<?php
    
include("../includes/common.php");
   
    
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
$title = '域名列表';
     require ('./head.php');
    
    
include("../fhincludes/common.php");
?>
   <div class="container" style="padding-top:10px;">
   
<div class="panel panel-default">
<div class="panel-heading font-bold" style="background-color: #9999CC;color: white;" >系统域名列表</div>
<div class="panel-body">
<?php
$my=isset($_GET['my'])?$_GET['my']:null;

if($my=='add')
{
  if($url = $_GET['url']){
    $url = parse_url($url);
    $url = $url['host'];
  }
}elseif($my=='add_submit'){
  $domain=$_POST['domain'];
  $type=1;
  if($domain==NULL or $type==NULL){
    showmsg('保存错误,请确保每项都不为空!',3);
  } else {
      $jump = str_replace("http://","",strtolower($domain));
      $jump = trim($jump);
      $arr = explode("\r\n", $jump);
      foreach ($arr as $key => $val) {
        $myrow=$DB->get_row("select * from `quan_host` where domain='$val' limit 1");
        if (!$myrow) $sql = $DB->get_row("insert into `quan_host` (`domain`,`date`,`type`) values ('".$val."','".$date."','".$type."')");
      }
      showmsg('添加域名成功！<br/><br/><a href="./temp.php">>>返回列表</a>',1);
    /*
    $sql="insert into `quan_host` (`domain`,`date`,`type`) values ('".$domain."','".$date."','".$type."')";
    if($DB->query($sql)){
      showmsg('添加'.($type==2?'已报毒':'未报毒').'域名成功！<br/><br/><a href="./temp.php">>>返回列表</a>',1);
    }else
      showmsg('添加'.($type==2?'已报毒':'未报毒').'域名失败！'.$DB->error(),4);*/
  }
}elseif($my=='del'){
$id=intval($_GET['id']);
$sql=$DB->query("DELETE FROM quan_host WHERE id='$id'");
if($sql){$res='删除成功！';}
else{$res='删除失败！';}
exit("<script language='javascript'>alert('{$res}');history.go(-1);</script>");
}

elseif($my=='del2'){
$checkbox=$_POST['checkbox'];
$i=0;
foreach($checkbox as $id){
  $DB->query("DELETE FROM quan_host WHERE id='$id'");
  $i++;
}
exit("<script language='javascript'>alert('成功删除{$i}条记录');history.go(-1);</script>");
}

else
{

if(isset($_GET['kw'])) {
  if($_GET['type']==1) {
    $sql=" `domain`='{$_GET['kw']}'";
    $numrows=$DB->count("SELECT count(*) from quan_host WHERE{$sql}");
    $con='包含 '.$_GET['kw'].' 的共有 <b>'.$numrows.'</b> 个记录';
  }
}else{
  $numrows=$DB->count("SELECT count(*) from quan_host WHERE 1");
  $sql=" 1";
  $con='系统共有 <b>'.$numrows.'</b> 个域名';
}
echo $con;
?>
      <div class="table-responsive">
    <form name="form1" method="post" action="temp.php?my=del2">
        <table class="table table-striped">
          <thead><tr><th>域名</th><th>添加时间</th></tr></thead>
          <tbody>
<?php
$pagesize=30;
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

$rs=$DB->query("SELECT * FROM quan_host WHERE{$sql} order by id desc limit $offset,$pagesize");
while($res = $DB->fetch($rs))
{
echo '<tr><td> '.htmlspecialchars($res['domain']).'</td><td>'.$res['date'].'</td></tr>';
}
?>
          </tbody>
        </table>
</form>
      </div>
<?php
echo'<ul class="pagination">';
$first=1;
$prev=$page-1;
$next=$page+1;
$last=$pages;
if ($page>1)
{
echo '<li><a href="temp.php?page='.$first.$link.'">首页</a></li>';
echo '<li><a href="temp.php?page='.$prev.$link.'">&laquo;</a></li>';
} else {
echo '<li class="disabled"><a>首页</a></li>';
echo '<li class="disabled"><a>&laquo;</a></li>';
}
for ($i=1;$i<$page;$i++)
echo '<li><a href="temp.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '<li class="disabled"><a>'.$page.'</a></li>';
for ($i=$page+1;$i<=$pages;$i++)
echo '<li><a href="temp.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '';
if ($page<$pages)
{
echo '<li><a href="temp.php?page='.$next.$link.'">&raquo;</a></li>';
echo '<li><a href="temp.php?page='.$last.$link.'">尾页</a></li>';
} else {
echo '<li class="disabled"><a>&raquo;</a></li>';
echo '<li class="disabled"><a>尾页</a></li>';
}
echo'</ul>';
#分页
}
?>
    </div>
  </div>
  
  