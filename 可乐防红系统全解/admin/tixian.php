<?php
include('../includes/common.php');
if(!isset($_SESSION['authcode'])) {
	$query=file_get_contents('http://auth.6y3a.cn/check.php?url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
	if($query=json_decode($query,true)) {
		if($query['code']==1)$_SESSION['authcode']=true;
		else exit('<h3><html><head><title>冰狱防红系统 | 站点提示信息</title></head><body id="error-page" style="text-align: center;"><h3></h3><h3> <meta http-equiv="Content-Type" content="text双击查看原图ml; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0" id="mixia_vpid"><style type="text/css"> html{background:#eee}body{background:#fff;color:#333;font-family:"微软雅黑","Microsoft YaHei",sans-serif;margin:50em auto;padding:2em 0em;max-width:700px;-webkit-box-shadow:10px 10px 10px rgba(0,0,0,.13);box-shadow:10px 10px 10px rgba(0,0,0,.13);opacity:.8}h1{border-bottom:1px solid #dadada;clear:both;color:#666;font:24px "微软雅黑","Microsoft YaHei",,sans-serif;margin:30px 0 0 0;padding:0;padding-bottom:7px}#error-page{margin-top:50px}h3{text-align:center}#error-page p{font-size:9px;line-height:1.5;margin:25px 0 20px}#error-page code{font-family:Consolas,Monaco,monospace}ul li{margin-bottom:10px;font-size:9px}a{color:#21759B;text-decoration:none;margin-top:-10px}a:hover{color:#D54E21}.button{background:#f7f7f7;border:1px solid #ccc;color:#555;display:inline-block;text-decoration:none;font-size:9px;line-height:26px;height:28px;margin:0;padding:0 10px 1px;cursor:pointer;-webkit-border-radius:3px;-webkit-appearance:none;border-radius:3px;white-space:nowrap;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-box-shadow:inset 0 1px 0 #fff,0 1px 0 rgba(0,0,0,.08);box-shadow:inset 0 1px 0 #fff,0 1px 0 rgba(0,0,0,.08);vertical-align:top}.button.button-large{height:29px;line-height:28px;padding:0 12px}.button:focus,.button:hover{background:#fafafa;border-color:#999;color:#222}.button:focus{-webkit-box-shadow:1px 1px 1px rgba(0,0,0,.2);box-shadow:1px 1px 1px rgba(0,0,0,.2)}.button:active{background:#eee;border-color:#999;color:#333;-webkit-box-shadow:inset 0 2px 5px -3px rgba(0,0,0,.5);box-shadow:inset 0 2px 5px -3px rgba(0,0,0,.5)}table{table-layout:auto;border:1px solid #333;empty-cells:show;border-collapse:collapse}th{padding:4px;border:1px solid #333;overflow:hidden;color:#333;background:#eee}td{padding:4px;border:1px solid #333;overflow:hidden;color:#333}</style></h3><h2 style="color:#FF0000">站点提示信息</h2> <h3>该站点未授权</h3><h3>授权联系站长212528119</h3></body></html></h3>');
	}
}
$title = '余额提现处理';
include('./head.php');
if ($islogin!=1) {

}
echo '  
    <div class="col-md-12 center-block" style="float: none;">
';
if ($conf['fenzhan_tixian']==0) {
    showmsg('当前站点未开放提现功能！');
}
$my = (isset($_GET['my']) ? $_GET['my'] : NULL);
if ($my=='delete') {
    $id = intval($_GET['id']);
    $sql = 'DELETE FROM shua_tixian WHERE id=\'' . $id . '\'';
    $DB->query($sql);
    exit('<script language=\'javascript\'>alert(\'删除成功！\');window.location.href=\'tixian.php\';</script>');
} elseif ($my=='complete') {
    $id = intval($_GET['id']);
    $DB->query('update shua_tixian set status=1,endtime=NOW() where id=\'' . $id . '\'');
    exit('<script language=\'javascript\'>alert(\'已变更为已提现状态\');window.location.href=\'tixian.php\';</script>');
} elseif ($my=='reset') {
    $id = intval($_GET['id']);
    $DB->query('update shua_tixian set status=0 where id=\'' . $id . '\'');
    exit('<script language=\'javascript\'>alert(\'已变更为未提现状态\');window.location.href=\'tixian.php\';</script>');
} elseif ($my=='back') {
    $id = intval($_GET['id']);
    $rows = $DB->get_row('select * from shua_tixian where id=\'' . $id . '\' limit 1');
    $DB->query('update shua_site set rmb=rmb+' . $rows['money'] . ' where zid=\'' . $rows['zid'] . '\'');
    $DB->query('DELETE FROM shua_tixian WHERE id=\'' . $id . '\'');
    exit('<script language=\'javascript\'>alert(\'已成功退回到分站余额\');window.location.href=\'tixian.php\';</script>');
} elseif ($my=='search') {
    $sql = ' `pay_account`=\'' . $_GET['kw'] . '\' or `pay_name`=\'' . $_GET['kw'] . '\'';
} else {
    $sql = ' 1';
}
$numrows = $DB->count('SELECT count(*) from shua_tixian WHERE' . $sql);
echo '<form method="get">
		<input type="hidden" name="my" value="search">
		<div class="input-group xs-mb-15">
			<input type="text" placeholder="请输入要搜索的提现账号或者姓名！" name="kw"
				   class="form-control text-center"
				   required>
			<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">立即搜索</button>
			</span>
		</div>
	</form>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead><tr><th>ID</th><th>ZID</th><th>金额</th><th>实际到账</th><th>提现方式</th><th>提现账号</th><th>姓名</th>';
echo ($conf['fenzhan_skimg']==1 ? '<th>收款图</th>' : 'NULL');
echo '<th>申请时间</th><th>完成时间</th><th>状态</th><th>操作</th></tr></thead>
          <tbody>
';
$pagesize = 30;
$pages = intval($numrows / $pagesize);
if ($numrows % $pagesize) {
}
if (isset($_GET['page'])) {
    $page = intval($_GET['page']);
} else {
    $page = 1;
}
$offset = $pagesize * ($page - 1);
$rs = $DB->query('SELECT * FROM shua_tixian WHERE' . $sql . ' order by id desc limit ' . $offset . ',' . $pagesize);
while ($res = $DB->fetch($rs)) {
    echo '<tr><td><b>' . $res['id'] . '</b></td><td>' . $res['zid'] . '</td><td>' . $res['money'] . '</td><td>' . $res['realmoney'] . '</td><td>' . display_type($res['pay_type']) . '</td><td><span onclick="inputInfo(' . $res['id'] . ')" title="修改信息">' . $res['pay_account'] . '</span></td><td><span onclick="inputInfo(' . $res['id'] . ')" title="修改信息">' . $res['pay_name'] . '</span></td>' . ($conf['fenzhan_skimg']==1 ? '<td><a onclick="skimg(' . $res['zid'] . ')">点击查看</a></td>' : NULL) . '<td>' . $res['addtime'] . '</td><td>' . ($res['status']==1 ? $res['endtime'] : NULL) . '</td><td>' . display_zt($res['status']) . '</td><td>' . ($res['status']==0 ? '<a href="./tixian.php?my=complete&id=' . $res['id'] . '" class="btn btn-success btn-xs">完成</a>&nbsp;<a href="./tixian.php?my=back&id=' . $res['id'] . '" class="btn btn-xs btn-info" onclick="return confirm(\'你确实要将' . $res['money'] . '元退回到该分站余额吗？\');">退回</a>' : '<a href="./tixian.php?my=reset&id=' . $res['id'] . '" class="btn btn-info btn-xs">撤销</a>') . '&nbsp;<a href="./record.php?zid=' . $res['zid'] . '" class="btn btn-warning btn-xs">明细</a>&nbsp;<a href="./tixian.php?my=delete&id=' . $res['id'] . '" class="btn btn-xs btn-danger" onclick="return confirm(\'你确实要删除此记录吗？\');">删除</a></td></tr>';
}
echo '          </tbody>
        </table>
      </div>
';
echo '<ul class="pagination">';
$first = 1;
$prev = $page - 1;
$next = $page + 1;
$last = $pages;
if ($page > 1) {
    echo '<li><a href="tixian.php?page=' . $first . $link . '">首页</a></li>';
    echo '<li><a href="tixian.php?page=' . $prev . $link . '">&laquo;</a></li>';
} else {
    echo '<li class="disabled"><a>首页</a></li>';
    echo '<li class="disabled"><a>&laquo;</a></li>';
}
$i = 1;
while ($i < $page) {
    echo '<li><a href="tixian.php?page=' . $i . $link . '">' . $i . '</a></li>';
}
echo '<li class="disabled"><a>' . $page . '</a></li>';
$i = $page + 1;
while ($i <= $pages) {
    echo '<li><a href="tixian.php?page=' . $i . $link . '">' . $i . '</a></li>';
}
echo '';
if ($page < $pages) {
    echo '<li><a href="tixian.php?page=' . $next . $link . '">&raquo;</a></li>';
    echo '<li><a href="tixian.php?page=' . $last . $link . '">尾页</a></li>';
} else {
    echo '<li class="disabled"><a>&raquo;</a></li>';
    echo '<li class="disabled"><a>尾页</a></li>';
}
echo '</ul>';
echo "    </div>
  </div>
<script src=\"//cdn.bootcss.com/layer/3.0.1/layer.min.js\"></script>
<script>
function inputInfo(id) {
	var ii = layer.load(2, {shade:[0.1,'#fff']});
	\$.ajax({
		type : 'GET',
		url : 'ajax.php?act=tixian&id='+id,
		dataType : 'json',
		success : function(data) {
			layer.close(ii);
			if(data.code == 0){
				layer.open({
				  type: 1,
				  title: '修改数据',
				  skin: 'layui-layer-rim',
				  content: data.data
				});
			}else{
				layer.alert(data.msg);
			}
		},
		error:function(data){
			layer.msg('服务器错误');
			return false;
		}
	});
}
function saveInfo(id) {
	var pay_type=\$(\"#pay_type\").val();
	var pay_account=\$(\"#pay_account\").val();
	var pay_name=\$(\"#pay_name\").val();
	if(pay_account=='' || pay_name==''){layer.alert('请确保每项不能为空！');return false;}
	\$('#save').val('Loading');
	var ii = layer.load(2, {shade:[0.1,'#fff']});
	\$.ajax({
		type : \"POST\",
		url : \"ajax.php?act=editTixian\",
		data : {id:id,pay_type:pay_type,pay_account:pay_account,pay_name:pay_name},
		dataType : 'json',
		success : function(data) {
			layer.close(ii);
			if(data.code == 0){
				layer.msg('保存成功！');
				window.location.reload();
			}else{
				layer.alert(data.msg);
			}
			\$('#save').val('保存');
		} 
	});
}
function skimg(zid){
	layer.open({
		type: 1,
		area: ['360px', '400px'],
		title: '站点'+zid+'的收款图查看',
		shade: 0.3,
		anim: 1,
		shadeClose: true, //开启遮罩关闭
		content: '<center><img width=\"300px\" src=\"../assets/img/skimg/sk_'+zid+'.png\"></center>'
	});
}
</script>";

function display_zt($zt)
{
    if ($zt==1) {
        return '<font color=green>已完成</font>';
    }
    return '<font color=blue>未完成</font>';
}
function display_type($type)
{
    if ($type==1) {
        return '微信';
    }
    if ($type==2) {
        return 'QQ钱包';
    }
    return '支付宝';
}
