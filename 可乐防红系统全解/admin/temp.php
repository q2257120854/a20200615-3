<?php
$title='域名管理';

include("../includes/common.php");
	if(!isset($_SESSION['authcode'])) {
	$query=file_get_contents('http://auth.6y3a.cn/check.php?url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
	if($query=json_decode($query,true)) {
		if($query['code']==1)$_SESSION['authcode']=true;
		else exit('<h3><html><head><title>冰狱防红系统 | 站点提示信息</title></head><body id="error-page" style="text-align: center;"><h3></h3><h3> <meta http-equiv="Content-Type" content="text双击查看原图ml; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0" id="mixia_vpid"><style type="text/css"> html{background:#eee}body{background:#fff;color:#333;font-family:"微软雅黑","Microsoft YaHei",sans-serif;margin:50em auto;padding:2em 0em;max-width:700px;-webkit-box-shadow:10px 10px 10px rgba(0,0,0,.13);box-shadow:10px 10px 10px rgba(0,0,0,.13);opacity:.8}h1{border-bottom:1px solid #dadada;clear:both;color:#666;font:24px "微软雅黑","Microsoft YaHei",,sans-serif;margin:30px 0 0 0;padding:0;padding-bottom:7px}#error-page{margin-top:50px}h3{text-align:center}#error-page p{font-size:9px;line-height:1.5;margin:25px 0 20px}#error-page code{font-family:Consolas,Monaco,monospace}ul li{margin-bottom:10px;font-size:9px}a{color:#21759B;text-decoration:none;margin-top:-10px}a:hover{color:#D54E21}.button{background:#f7f7f7;border:1px solid #ccc;color:#555;display:inline-block;text-decoration:none;font-size:9px;line-height:26px;height:28px;margin:0;padding:0 10px 1px;cursor:pointer;-webkit-border-radius:3px;-webkit-appearance:none;border-radius:3px;white-space:nowrap;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-box-shadow:inset 0 1px 0 #fff,0 1px 0 rgba(0,0,0,.08);box-shadow:inset 0 1px 0 #fff,0 1px 0 rgba(0,0,0,.08);vertical-align:top}.button.button-large{height:29px;line-height:28px;padding:0 12px}.button:focus,.button:hover{background:#fafafa;border-color:#999;color:#222}.button:focus{-webkit-box-shadow:1px 1px 1px rgba(0,0,0,.2);box-shadow:1px 1px 1px rgba(0,0,0,.2)}.button:active{background:#eee;border-color:#999;color:#333;-webkit-box-shadow:inset 0 2px 5px -3px rgba(0,0,0,.5);box-shadow:inset 0 2px 5px -3px rgba(0,0,0,.5)}table{table-layout:auto;border:1px solid #333;empty-cells:show;border-collapse:collapse}th{padding:4px;border:1px solid #333;overflow:hidden;color:#333;background:#eee}td{padding:4px;border:1px solid #333;overflow:hidden;color:#333}</style></h3><h2 style="color:#FF0000">站点提示信息</h2> <h3>该站点未授权</h3><h3>授权联系站长212528119</h3></body></html></h3>');
	}
}

require ('./head.php');
   
include('../fhincludes/common.php');
?>



   <div class="container" style="padding-top:10px;">
   <div class="panel panel-default">
<div class="panel-heading font-bold" style="background-color: #9999CC;color: white;" >域名管理</div>
<div class="panel-body">
<?php
$my=isset($_GET['my'])?$_GET['my']:null;

if($my=='add')
{
  if($url = $_GET['url']){
    $url = parse_url($url);
    $url = $url['host'];
  }
echo '<form action="./temp.php?my=add_submit" method="POST">
<div class="form-group">
<label>域名:</label>(不要加http://和/)<br>
<textarea class="form-control" id="domain" name="domain">'.@$url.'</textarea>
</div>
<input type="submit" class="btn btn-primary btn-block" value="确定添加"></form>';
echo '<br/><a href="./temp.php">>>返回记录列表</a>';
echo '</div></div>';
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
$con.='<a href="./temp.php?my=add" class="btn btn-primary btn-sm">添加域名</a>';
echo $con;
?>
      <div class="table-responsive">
    <form name="form1" method="post" action="temp.php?my=del2">
        <table class="table table-striped">
          <thead><tr><th>域名</th><th>添加时间</th><th>操作</th></tr></thead>
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
echo '<tr><td><input type="checkbox" name="checkbox[]" value="'.$res['id'].'"> '.htmlspecialchars($res['domain']).'</td><td>'.$res['date'].'</td><td><a href="./temp.php?my=del&id='.$res['id'].'" class="btn btn-xs btn-danger" onclick="return confirm(\'你确实要删除此记录吗？\');">删除</a></td></tr>';
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


  