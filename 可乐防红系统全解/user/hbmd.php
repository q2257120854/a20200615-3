<?php

include("../includes/common.php");
 
if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
$title = '黑白名单';
   require ('./head.php');
  
  
include("../fhincludes/common.php");

?>
<!--

署名：冰狱  （版权勿删！）

-->


   <div class="container" style="padding-top:10px;">
   
<div class="panel panel-default">
<div class="panel-heading font-bold" style="background-color: #9999CC;color: white;" >黑白名单</div>
<div class="panel-body">
<?php
$my=isset($_GET['my'])?$_GET['my']:null;
if($my=='add')
{
	if($url = $_GET['url']){
		$url = parse_url($url);
		$url = $url['host'];
	}

echo '<form action="./hbmd.php?my=add_submit" method="POST">
<div class="form-group">
<label>域名:</label>(不要加http://和/)<br>
<input type="text" class="form-control" name="domain" value="'.@$url.'" required>
</div>
<div class="form-group">
<label>类型:</label><br>
<select class="form-control" name="type"><option value="2">黑名单</option><option value="1">白名单</option></select>
</div>
<input type="submit" class="btn btn-primary btn-block" value="确定添加"></form>';
echo '<br/><a href="./hbmd.php">>>返回记录列表</a>';
echo '</div></div>';
}
elseif($my=='add_submit')
{
$domain=$_POST['domain'];
$type=$_POST['type'];
if($domain==NULL or $type==NULL){
  showmsg('保存错误,请确保每项都不为空!',3);
} else {
  $sql="insert into `quan_list` (`domain`,`date`,`type`) values ('".$domain."','".$date."','".$type."')";
  if($DB->query($sql)){
  	showmsg('添加'.($type==2?'黑名单':'白名单').'成功！<br/><br/><a href="./hbmd.php">>>返回列表</a>',1);
  }else
  	showmsg('添加'.($type==2?'黑名单':'白名单').'失败！'.$DB->error(),4);
  }
}
elseif($my=='del'){
$id=intval($_GET['id']);
$sql=$DB->query("DELETE FROM quan_list WHERE id='$id'");
if($sql){$res='删除成功！';}
else{$res='删除失败！';}
exit("<script language='javascript'>alert('{$res}');history.go(-1);</script>");
}

elseif($my=='del2'){
$checkbox=$_POST['checkbox'];
$i=0;
foreach($checkbox as $id){
	$DB->query("DELETE FROM quan_list WHERE id='$id'");
	$i++;
}
exit("<script language='javascript'>alert('成功删除{$i}条记录');history.go(-1);</script>");
}

else
{

if(isset($_GET['kw'])) {
	if($_GET['type']==1) {
		$sql=" `domain`='{$_GET['kw']}'";
		$numrows=$DB->count("SELECT count(*) from quan_list WHERE{$sql}");
		$con='包含 '.$_GET['kw'].' 的共有 <b>'.$numrows.'</b> 个记录';
	}
}else{
	$numrows=$DB->count("SELECT count(*) from quan_list WHERE 1");
	$sql=" 1";
	$con='系统共有 <b>'.$numrows.'</b> 条黑白名单记录';
}
$con.='<a href="./hbmd.php?my=add" class="btn btn-primary btn-sm">添加记录</a>';
echo $con;
?>
      <div class="table-responsive">
	  <form name="form1" method="post" action="hbmd.php?my=del2">
        <table class="table table-striped">
          <thead><tr><th>域名</th><th>状态</th><th>添加时间</th><th>操作</th></tr></thead>
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

$rs=$DB->query("SELECT * FROM quan_list WHERE{$sql} order by id desc limit $offset,$pagesize");
while($res = $DB->fetch($rs))
{
echo '<tr><td><input type="checkbox" name="checkbox[]" value="'.$res['id'].'"> '.htmlspecialchars($res['domain']).'</td><td>'.($res['type']==2?'<font color="black">黑名单</font>':'<font color="orange">白名单</font>').'</td><td>'.$res['date'].'</td><td><a href="./hbmd.php?my=del&id='.$res['id'].'" class="btn btn-xs btn-danger" onclick="return confirm(\'你确实要删除此记录吗？\');">删除</a></td></tr>';
}
?>
          </tbody>
        </table>
<input type="submit" name="Submit" value="删除选中">
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
echo '<li><a href="hbmd.php?page='.$first.$link.'">首页</a></li>';
echo '<li><a href="hbmd.php?page='.$prev.$link.'">&laquo;</a></li>';
} else {
echo '<li class="disabled"><a>首页</a></li>';
echo '<li class="disabled"><a>&laquo;</a></li>';
}
for ($i=1;$i<$page;$i++)
echo '<li><a href="hbmd.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '<li class="disabled"><a>'.$page.'</a></li>';
for ($i=$page+1;$i<=$pages;$i++)
echo '<li><a href="hbmd.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '';
if ($page<$pages)
{
echo '<li><a href="hbmd.php?page='.$next.$link.'">&raquo;</a></li>';
echo '<li><a href="hbmd.php?page='.$last.$link.'">尾页</a></li>';
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
