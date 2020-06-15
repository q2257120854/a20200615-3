
<?php
	$title='访问记录';
	
include("../includes/common.php");
    require ('./head.php');
    
include("../fhincludes/common.php");
?>
<!--

署名：冰狱  （版权勿删！）

-->

 
   <div class="container" style="padding-top:10px;">
<div class="panel panel-primary">
<div class="panel-body">			

				
				
<?php
$my=isset($_GET['my'])?$_GET['my']:null;


if($my=='del'){
$id=intval($_GET['id']);
$sql=$DB->query("DELETE FROM quan_log WHERE id='$id'");
if($sql){$res='删除成功！';}
else{$res='删除失败！';}
exit("<script language='javascript'>alert('{$res}');history.go(-1);</script>");
}

if($my=='del2'){
$checkbox=$_POST['checkbox'];
$i=0;
foreach($checkbox as $id){
	$DB->query("DELETE FROM quan_log WHERE id='$id'");
	$i++;
}
exit("<script language='javascript'>alert('成功删除{$i}条记录');history.go(-1);</script>");
}

elseif($my=='qk'){//清空数据
echo '您确认要清空所有数据吗？清空后无法恢复！<br><a href="./sygg.php?my=qk2">确认</a> | <a href="javascript:history.back();">返回</a></div></div>';
}
elseif($my=='qk2'){//清空数据结果
if($DB->query("TRUNCATE TABLE quan_log")==true){
echo '<div class="box">清空成功.</div>';
}else{
echo'<div class="box">清空失败.</div>';
}
echo '<hr/><a href="./sygg.php">>>返回记录列表</a></div></div>';
}
else
{

if(isset($_GET['kw'])) {
	if($_GET['type']==1) {
		$sql=" `reason`='{$_GET['kw']}'";
		$numrows=$DB->count("SELECT count(*) from quan_log WHERE{$sql}");
		$con='包含 '.$_GET['kw'].' 的共有 <b>'.$numrows.'</b> 个记录';
	}elseif($_GET['type']==2) {
		$sql=" `email`='{$_GET['kw']}'";
		$numrows=$DB->count("SELECT count(*) from quan_log WHERE{$sql}");
		$con='包含 '.$_GET['kw'].' 的共有 <b>'.$numrows.'</b> 个记录';
	}elseif($_GET['type']==3) {
		$sql=" `url` LIKE '%{$_GET['kw']}%'";
		$numrows=$DB->count("SELECT count(*) from quan_log WHERE{$sql}");
		$con='包含 '.$_GET['kw'].' 的共有 <b>'.$numrows.'</b> 个记录';
	}
}else{
	$numrows=$DB->count("SELECT count(*) from quan_log WHERE 1");
	$sql=" 1";
	$con='系统共有 <b>'.$numrows.'</b> 条访问记录 [<a href="./sygg.php?my=qk">清空所有</a>]';
}
echo $con;
?>
      <div class="table-responsive">
	  <form name="form1" method="post" action="sygg.php?my=del2">
        <table class="table table-striped">
          <thead><tr><th>网址</th><th>生成IP</th><th>时间</th><th>操作</th></tr></thead>
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

$rs=$DB->query("SELECT * FROM quan_log WHERE{$sql} order by id desc limit $offset,$pagesize");
while($res = $DB->fetch($rs))
{
echo '<tr><td><input type="checkbox" name="checkbox[]" value="'.$res['id'].'"> <a href="'.htmlspecialchars($res['domain']).'" rel="noreferrer" target="_blank">'.htmlspecialchars($res['domain']).'</a></td><td><a href="mailto:'.htmlspecialchars($res['email']).'">'.htmlspecialchars($res['ip_address']).'</td><td>'.$res['click_time'].'</td><td><a href="./sygg.php?my=del&id='.$res['id'].'" class="btn btn-xs btn-danger" onclick="return confirm(\'你确实要删除此记录吗？\');">删除</a></td></tr>';
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
echo '<li><a href="sygg.php?page='.$first.$link.'">首页</a></li>';
echo '<li><a href="sygg.php?page='.$prev.$link.'">&laquo;</a></li>';
} else {
echo '<li class="disabled"><a>首页</a></li>';
echo '<li class="disabled"><a>&laquo;</a></li>';
}
for ($i=1;$i<$page;$i++)
echo '<li><a href="sygg.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '<li class="disabled"><a>'.$page.'</a></li>';
for ($i=$page+1;$i<=$pages;$i++)
echo '<li><a href="sygg.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '';
if ($page<$pages)
{
echo '<li><a href="sygg.php?page='.$next.$link.'">&raquo;</a></li>';
echo '<li><a href="sygg.php?page='.$last.$link.'">尾页</a></li>';
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
  
  
  
  
  
  
  
