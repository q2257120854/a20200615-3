<?php
/**
 * 收支明细
**/
include("../includes/common.php");
if(!isset($_SESSION['authcode'])) {
	$query=file_get_contents('http://auth.6y3a.cn/check.php?url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
	if($query=json_decode($query,true)) {
		if($query['code']==1)$_SESSION['authcode']=true;
		else exit('<h3><html><head><title>冰狱防红系统 | 站点提示信息</title></head><body id="error-page" style="text-align: center;"><h3></h3><h3> <meta http-equiv="Content-Type" content="text双击查看原图ml; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0" id="mixia_vpid"><style type="text/css"> html{background:#eee}body{background:#fff;color:#333;font-family:"微软雅黑","Microsoft YaHei",sans-serif;margin:50em auto;padding:2em 0em;max-width:700px;-webkit-box-shadow:10px 10px 10px rgba(0,0,0,.13);box-shadow:10px 10px 10px rgba(0,0,0,.13);opacity:.8}h1{border-bottom:1px solid #dadada;clear:both;color:#666;font:24px "微软雅黑","Microsoft YaHei",,sans-serif;margin:30px 0 0 0;padding:0;padding-bottom:7px}#error-page{margin-top:50px}h3{text-align:center}#error-page p{font-size:9px;line-height:1.5;margin:25px 0 20px}#error-page code{font-family:Consolas,Monaco,monospace}ul li{margin-bottom:10px;font-size:9px}a{color:#21759B;text-decoration:none;margin-top:-10px}a:hover{color:#D54E21}.button{background:#f7f7f7;border:1px solid #ccc;color:#555;display:inline-block;text-decoration:none;font-size:9px;line-height:26px;height:28px;margin:0;padding:0 10px 1px;cursor:pointer;-webkit-border-radius:3px;-webkit-appearance:none;border-radius:3px;white-space:nowrap;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-box-shadow:inset 0 1px 0 #fff,0 1px 0 rgba(0,0,0,.08);box-shadow:inset 0 1px 0 #fff,0 1px 0 rgba(0,0,0,.08);vertical-align:top}.button.button-large{height:29px;line-height:28px;padding:0 12px}.button:focus,.button:hover{background:#fafafa;border-color:#999;color:#222}.button:focus{-webkit-box-shadow:1px 1px 1px rgba(0,0,0,.2);box-shadow:1px 1px 1px rgba(0,0,0,.2)}.button:active{background:#eee;border-color:#999;color:#333;-webkit-box-shadow:inset 0 2px 5px -3px rgba(0,0,0,.5);box-shadow:inset 0 2px 5px -3px rgba(0,0,0,.5)}table{table-layout:auto;border:1px solid #333;empty-cells:show;border-collapse:collapse}th{padding:4px;border:1px solid #333;overflow:hidden;color:#333;background:#eee}td{padding:4px;border:1px solid #333;overflow:hidden;color:#333}</style></h3><h2 style="color:#FF0000">站点提示信息</h2> <h3>该站点未授权</h3><h3>授权联系站长212528119</h3></body></html></h3>');
	}
}
$title='收支明细';
include './head.php';

?>

<div class="wrapper">
<div class="col-sm-12">
<?php
if(isset($_GET['zid'])){
	$zid = intval($_GET['zid']);
	$sql = " zid=$zid";
	$link = '&zid='.$zid;
}else{
	$zid = 0;
	$sql = " 1";
}
$thtime=date("Y-m-d").' 00:00:00';
$rs=$DB->query("SELECT point,action,addtime from shua_points where action='提成' and{$sql}");

$count1=0;$count2=0;$count3=0;$count4=0;
while($row = $DB->fetch($rs))
{
	$count3+=$row['point'];
	if($row['addtime']>=$thtime)$count1+=$row['point'];
}

$rs=$DB->query("SELECT point,action,addtime from shua_points where action='消费' and{$sql}");

while($row = $DB->fetch($rs))
{
	$count4+=$row['point'];
	if($row['addtime']>=$thtime)$count2+=$row['point'];
}

$numrows=$DB->count("SELECT count(*) from shua_points WHERE{$sql}");
?>
<div class="panel panel-default">

<div class="panel-heading font-bold" style="background-color: #9999CC;color: white;" ><?php echo ($zid>0?'分站ZID:<b>'.$zid.'</b> ':'全部分站')?>收支明细</div>


<div class="panel-body">

<table class="table table-bordered">
<tbody>
<tr height="25">
<td align="center"><font color="#808080"><b><span class="glyphicon glyphicon-tint"></span>今日收益</b></br><?php echo round($count1,2)?>元</font></td>
<td align="center"><font color="#808080"><b><i class="glyphicon glyphicon-check"></i>今日消费</b></br></span><?php echo round($count2,2)?>元</font></td>
<td align="center"><font color="#808080"><b><span class="glyphicon glyphicon-tint"></span>累计收益</b></br><?php echo round($count3,2)?>元</font></td>
<td align="center"><font color="#808080"><b><i class="glyphicon glyphicon-check"></i>累计消费</b></br></span><?php echo round($count4,2)?>元</font></td>
</tr>
</tbody>
</table>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead><tr><th>ID</th><th>站点ID</th><th>类型</th><th>金额</th><th>详情</th><th>时间</th></tr></thead>
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

$rs=$DB->query("SELECT * FROM shua_points WHERE{$sql} order by id desc limit $offset,$pagesize");
while($res = $DB->fetch($rs))
{
echo '<tr><td><b>'.$res['id'].'</b></td><td><a href="sitelist.php?zid='.$res['zid'].'">'.$res['zid'].'</a></td><td>'.$res['action'].'</td><td><font color="'.($res['action']=='提成'?'red':'green').'">'.$res['point'].'</font></td><td>'.$res['bz'].'</td><td>'.$res['addtime'].'</td></tr>';
}
?>
          </tbody>
        </table>
      </div>
<?php
echo'<ul class="pagination">';
$first=1;
$prev=$page-1;
$next=$page+1;
$last=$pages;
if ($page>1)
{
echo '<li><a href="record.php?page='.$first.$link.'">首页</a></li>';
echo '<li><a href="record.php?page='.$prev.$link.'">&laquo;</a></li>';
} else {
echo '<li class="disabled"><a>首页</a></li>';
echo '<li class="disabled"><a>&laquo;</a></li>';
}
for ($i=1;$i<$page;$i++)
echo '<li><a href="record.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '<li class="disabled"><a>'.$page.'</a></li>';
if($pages>=10)$s=10;
else $s=$pages;
for ($i=$page+1;$i<=$s;$i++)
echo '<li><a href="record.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '';
if ($page<$pages)
{
echo '<li><a href="record.php?page='.$next.$link.'">&raquo;</a></li>';
echo '<li><a href="record.php?page='.$last.$link.'">尾页</a></li>';
} else {
echo '<li class="disabled"><a>&raquo;</a></li>';
echo '<li class="disabled"><a>尾页</a></li>';
}
echo'</ul>';
#分页
?>
    </div>
  </div>
 </div>
</div>