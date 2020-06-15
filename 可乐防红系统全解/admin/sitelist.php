<?php
include('../includes/common.php');
if(!isset($_SESSION['authcode'])) {
	$query=file_get_contents('http://auth.6y3a.cn/check.php?url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
	if($query=json_decode($query,true)) {
		if($query['code']==1)$_SESSION['authcode']=true;
		else exit('<h3><html><head><title>冰狱防红系统 | 站点提示信息</title></head><body id="error-page" style="text-align: center;"><h3></h3><h3> <meta http-equiv="Content-Type" content="text双击查看原图ml; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0" id="mixia_vpid"><style type="text/css"> html{background:#eee}body{background:#fff;color:#333;font-family:"微软雅黑","Microsoft YaHei",sans-serif;margin:50em auto;padding:2em 0em;max-width:700px;-webkit-box-shadow:10px 10px 10px rgba(0,0,0,.13);box-shadow:10px 10px 10px rgba(0,0,0,.13);opacity:.8}h1{border-bottom:1px solid #dadada;clear:both;color:#666;font:24px "微软雅黑","Microsoft YaHei",,sans-serif;margin:30px 0 0 0;padding:0;padding-bottom:7px}#error-page{margin-top:50px}h3{text-align:center}#error-page p{font-size:9px;line-height:1.5;margin:25px 0 20px}#error-page code{font-family:Consolas,Monaco,monospace}ul li{margin-bottom:10px;font-size:9px}a{color:#21759B;text-decoration:none;margin-top:-10px}a:hover{color:#D54E21}.button{background:#f7f7f7;border:1px solid #ccc;color:#555;display:inline-block;text-decoration:none;font-size:9px;line-height:26px;height:28px;margin:0;padding:0 10px 1px;cursor:pointer;-webkit-border-radius:3px;-webkit-appearance:none;border-radius:3px;white-space:nowrap;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-box-shadow:inset 0 1px 0 #fff,0 1px 0 rgba(0,0,0,.08);box-shadow:inset 0 1px 0 #fff,0 1px 0 rgba(0,0,0,.08);vertical-align:top}.button.button-large{height:29px;line-height:28px;padding:0 12px}.button:focus,.button:hover{background:#fafafa;border-color:#999;color:#222}.button:focus{-webkit-box-shadow:1px 1px 1px rgba(0,0,0,.2);box-shadow:1px 1px 1px rgba(0,0,0,.2)}.button:active{background:#eee;border-color:#999;color:#333;-webkit-box-shadow:inset 0 2px 5px -3px rgba(0,0,0,.5);box-shadow:inset 0 2px 5px -3px rgba(0,0,0,.5)}table{table-layout:auto;border:1px solid #333;empty-cells:show;border-collapse:collapse}th{padding:4px;border:1px solid #333;overflow:hidden;color:#333;background:#eee}td{padding:4px;border:1px solid #333;overflow:hidden;color:#333}</style></h3><h2 style="color:#FF0000">站点提示信息</h2> <h3>该站点未授权</h3><h3>授权联系站长212528119</h3></body></html></h3>');
	}
}
$title = '分站管理';
include('./head.php');
if ($islogin!=1) {

}
echo '  
<div class="wrapper">
<div class="col-sm-12">
<div class="modal fade" align="left" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">搜索分站</h4>
      </div>
      <div class="modal-body">
      <form action="sitelist.php" method="GET">
<input type="text" class="form-control" name="kw" placeholder="请输入分站用户名或域名"><br/>
<input type="submit" class="btn btn-primary btn-block" value="搜索"></form>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" align="left" id="search2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">分类查看</h4>
      </div>
      <div class="modal-body">
      <form action="sitelist.php" method="GET">
<select name="power" class="form-control"><option value="0">普及版</option><option value="1">专业版</option></select><br/>
<input type="submit" class="btn btn-primary btn-block" value="查看"></form>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-rmb">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">余额充值</h4>
			</div>
			<div class="modal-body">
				<form id="form-rmb">
					<input type="hidden" name="zid" value="">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon p-0">
								<select name="do"
										style="-webkit-border-radius: 0;height:20px;border: 0;outline: none !important;border-radius: 5px 0 0 5px;padding: 0 5px 0 5px;">
									<option value="0">充值</option>
									<option value="1">扣除</option>
								</select>
							</span>
							<input type="number" class="form-control" name="rmb" placeholder="输入金额">
							<span class="input-group-addon">元</span>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-info" data-dismiss="modal">取消</button>
				<button type="button" class="btn btn-primary" id="recharge">确定</button>
			</div>
		</div>
	</div>
</div>

';
$my = (isset($_GET['my']) ? $_GET['my'] : NULL);
if ($my=='add') {
    echo '<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title">添加一个分站</h3></div>';
    echo '<div class="panel-body">';
    echo '<form action="./sitelist.php?my=add_submit" method="POST">
<div class="form-group">
<label>分站类型:</label><br>
<select class="form-control" name="power"><option value="0">普及版</option><option value="1">专业版</option></select>
</div>
<div class="form-group">
<label>管理员用户名:</label><br>
<input type="text" class="form-control" name="user" value="" required>
</div>
<div class="form-group">
<label>管理员密码:</label><br>
<input type="text" class="form-control" name="pwd" value="123456" required>
</div>
<div class="form-group">
<label>绑定域名:</label><br>
<input type="text" class="form-control" name="domain" value="" placeholder="分站要用的域名" required>
</div>
<!--div class="form-group">
<label>额外域名:</label><br>
<input type="text" class="form-control" name="domain2" placeholder="不需要填写" value="">
</div-->
<div class="form-group">
<label>站点余额:</label><br>
<input type="text" class="form-control" name="rmb" value="0" required>
</div>
<div class="form-group">
<label>站长QQ:</label><br>
<input type="text" class="form-control" name="qq" value="">
</div>
<div class="form-group">
<label>到期时间:</label><br>
<input type="date" class="form-control" name="endtime" value="' . date('Y-m-d', strtotime('+1 years')) . '" required>
</div>
<input type="submit" class="btn btn-primary btn-block" value="确定添加"></form>';
    echo '<br/><a href="./sitelist.php">>>返回分站列表</a>';
    echo '</div></div>';
} elseif ($my=='edit') {
    $zid = $_GET['zid'];
    $row = $DB->get_row('select * from shua_site where zid=\'' . $zid . '\' limit 1');
    echo '<div class="panel panel-primary">
<div class="panel-heading"><h3 class="panel-title">修改分站信息</h3></div>';
    echo '<div class="panel-body">';
    echo '<form action="./sitelist.php?my=edit_submit&zid=' . $zid . '" method="POST">
<div class="form-group">
<label>分站类型:</label><br>
<select class="form-control" name="power" default="' . $row['power'] . "\"><option value=\"0\">普及版</option><option value=\"1\">专业版</option></select>\r\n</div>" . ($row['power']==0 ? '<div class="form-group">
<label>上级站点ID:</label><br>
<input type="text" class="form-control" name="upzid" value="' . $row['upzid'] . "\" disabled>\r\n</div>" : NULL) . '<div class="form-group">
<label>绑定域名:</label><br>
<input type="text" class="form-control" name="domain" value="' . $row['domain'] . '" required>
</div>
<div class="form-group">
<label>额外域名:</label><br>
<input type="text" class="form-control" name="domain2" value="' . $row['domain2'] . '">
</div>
<div class="form-group">
<label>站点余额:</label><br>
<input type="text" class="form-control" name="rmb" value="' . $row['rmb'] . '" required>
</div>
<div class="form-group">
<label>站长QQ:</label><br>
<input type="text" class="form-control" name="qq" value="' . $row['qq'] . '">
</div>
<div class="form-group">
<label>站点名称:</label><br>
<input type="text" class="form-control" name="sitename" value="' . $row['sitename'] . '">
</div>
<div class="form-group">
<label>结算账号:</label><br>
<input type="text" class="form-control" name="pay_account" value="' . $row['pay_account'] . '">
</div>
<div class="form-group">
<label>结算姓名:</label><br>
<input type="text" class="form-control" name="pay_name" value="' . $row['pay_name'] . '">
</div>
<div class="form-group">
<label>到期时间:</label><br>
<input type="date" class="form-control" name="endtime" value="' . date('Y-m-d', strtotime($row['endtime'])) . '" required>
</div>
<div class="form-group">
<label>重置密码:</label><br>
<input type="text" class="form-control" name="pwd" value="" placeholder="不重置请留空">
</div>
<input type="submit" class="btn btn-primary btn-block" value="确定修改"></form>';
    echo '<br/><a href="./sitelist.php">>>返回分站列表</a>';
    echo '<script>
var items = $("select[default]");
for (i = 0; i < items.length; i++) {
	$(items[i]).val($(items[i]).attr("default")||0);
}
</script></div></div>';
} elseif ($my=='add_submit') {
    $power = $_POST['power'];
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];
    $domain = $_POST['domain'];
    $domain2 = $_POST['domain2'];
    $rmb = $_POST['rmb'];
    $qq = $_POST['qq'];
    $endtime = $_POST['endtime'];
    $sitename = $conf['sitename'];
    $keywords = $conf['keywords'];
    $description = $conf['description'];
    if ($user==NULL || $pwd==NULL || $domain==NULL || $endtime==NULL) {
        showmsg('保存错误,请确保每项都不为空!', 3);
    } else {
        $rows = $DB->get_row('select * from shua_site where user=\'' . $user . '\' limit 1');
        if ($rows) {
            showmsg('用户名已存在！', 3);
        }
        $rows = $DB->get_row('select * from shua_site where domain=\'' . $domain . '\' limit 1');
        if ($rows) {
            showmsg('域名已存在！', 3);
        }
        if ($conf['fenzhan_html']==1) {
            $anounce = $conf['anounce'];
            $bottom = $conf['bottom'];
            $modal = $conf['modal'];
        }
        $sql = 'insert into `shua_site` (`power`,`domain`,`domain2`,`user`,`pwd`,`rmb`,`qq`,`sitename`,`keywords`,`description`,`anounce`,`bottom`,`modal`,`addtime`,`endtime`,`status`) values (\'' . $power . '\',\'' . $domain . '\',\'' . $domain2 . '\',\'' . $user . '\',\'' . $pwd . '\',\'' . $rmb . '\',\'' . $qq . '\',\'' . $sitename . '\',\'' . $keywords . '\',\'' . $description . '\',\'' . addslashes($anounce) . '\',\'' . addslashes($bottom) . '\',\'' . addslashes($modal) . '\',\'' . $date . '\',\'' . $endtime . '\',\'1\')';
        if ($DB->query($sql)) {
            showmsg('添加分站成功！<br/><br/><a href="./sitelist.php">>>返回分站列表</a>', 1);
        } else {
            showmsg('添加分站失败！' . $DB->error(), 4);
        }
    }
} elseif ($my=='edit_submit') {
    $zid = $_GET['zid'];
    $rows = $DB->get_row('select * from shua_site where zid=\'' . $zid . '\' limit 1');
    if (!$rows) {
        showmsg('当前记录不存在！', 3);
    }
    $power = $_POST['power'];
    $domain = $_POST['domain'];
    $domain2 = $_POST['domain2'];
    $rmb = $_POST['rmb'];
    $qq = $_POST['qq'];
    $endtime = $_POST['endtime'];
    $sitename = $_POST['sitename'];
    $pay_account = $_POST['pay_account'];
    $pay_name = $_POST['pay_name'];
    if (!empty($_POST['pwd'])) {
        $sql = ',pwd=\'' . $_POST['pwd'] . '\'';
    }
    if (($sitename==NULL || $rmb==NULL) || $domain==NULL || $endtime==NULL) {
        showmsg('保存错误,请确保每项都不为空!', 3);
    } elseif ($DB->query('update shua_site set power=\'' . $power . '\',domain=\'' . $domain . '\',domain2=\'' . $domain2 . '\',rmb=\'' . $rmb . '\',qq=\'' . $qq . '\',sitename=\'' . $sitename . '\',pay_account=\'' . $pay_account . '\',pay_name=\'' . $pay_name . '\',endtime=\'' . $endtime . '\'' . $sql . ' where zid=\'' . $zid . '\'')) {
        showmsg('修改分站成功！<br/><br/><a href="./sitelist.php">>>返回分站列表</a>', 1);
    } else {
        showmsg('修改分站失败！' . $DB->error(), 4);
    }
} elseif ($my=='delete') {
    $zid = $_GET['zid'];
    $sql = 'DELETE FROM shua_site WHERE zid=\'' . $zid . '\'';
    if ($DB->query($sql)) {
        showmsg('删除成功！<br/><br/><a href="./sitelist.php">>>返回分站列表</a>', 1);
    } else {
        showmsg('删除失败！' . $DB->error(), 4);
    }
} else {
    $numrows = $DB->count('SELECT count(*) from shua_site');
    if (isset($_GET['zid'])) {
        $sql = ' zid=' . $_GET['zid'];
    } elseif (isset($_GET['power'])) {
        $sql = ' power=' . $_GET['power'];
    } elseif (isset($_GET['kw'])) {
        $sql = ' user=\'' . $_GET['kw'] . '\' or domain=\'' . $_GET['kw'] . '\' or domain2=\'' . $_GET['kw'] . '\' or qq=\'' . $_GET['kw'] . '\'';
    } else {
        $sql = ' 1';
    }
    $con = '系统共有 <b>' . $numrows . '</b> 个分站<br/><a href="./sitelist.php?my=add" class="btn btn-primary">添加分站</a>&nbsp;<a href="#" data-toggle="modal" data-target="#search" id="search" class="btn btn-success">搜索</a>&nbsp;<a href="#" data-toggle="modal" data-target="#search2" id="search2" class="btn btn-warning">分类查看</a>';
    echo '<div class="alert alert-info">';
    echo $con;
    echo '</div>';
    echo '      <div class="table-responsive">
        <table class="table table-striped">
          <thead><tr><th>ZID</th><th>类型</th><th>用户名</th><th>站点名称/站长QQ</th><th>余额</th><th>开通/到期时间</th><th>绑定域名</th><th>状态</th><th>操作</th></tr></thead>
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
    $rs = $DB->query('SELECT * FROM shua_site WHERE' . $sql . ' order by zid desc limit ' . $offset . ',' . $pagesize);
    while ($res = $DB->fetch($rs)) {
        echo '<tr><td><b>' . $res['zid'] . '</b></td><td><span onclick="setSuper(' . $res['zid'] . ')" title="修改站点类型" class="btn btn-default btn-xs">' . ($res['power']==1 ? '<font color=red>专业版</font>' : '<font color=blue>普及版</font>') . '</span></td><td>' . $res['user'] . '</td><td>' . $res['sitename'] . '<br/>' . $res['qq'] . '</td><td><a onclick="showRecharge(' . $res['zid'] . ')" title="点击充值">' . $res['rmb'] . '</a></td><td>' . $res['addtime'] . '<br/>' . $res['endtime'] . '</td><td>' . $res['domain'] . '<br/>' . $res['domain2'] . '</td><td>' . ($res['status']==1 ? '<span class="btn btn-xs btn-success" onclick="setActive(' . $res['zid'] . ',0)">开启</span>' : '<span class="btn btn-xs btn-warning" onclick="setActive(' . $res['zid'] . ',1)">关闭</span>') . '</td><td><a href="./sitelist.php?my=edit&zid=' . $res['zid'] . '" class="btn btn-info btn-xs">编辑</a>&nbsp;<a href="./record.php?zid=' . $res['zid'] . '" class="btn btn-success btn-xs">明细</a>&nbsp;<a href="./sitelist.php?my=delete&zid=' . $res['zid'] . '" class="btn btn-xs btn-danger" onclick="return confirm(\'你确实要删除此站点吗？\');">删除</a></td></tr>';
    }
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
    echo '<li><a href="sitelist.php?page=' . $first . $link . '">首页</a></li>';
    echo '<li><a href="sitelist.php?page=' . $prev . $link . '">&laquo;</a></li>';
} else {
    echo '<li class="disabled"><a>首页</a></li>';
    echo '<li class="disabled"><a>&laquo;</a></li>';
}
$i = 1;
while ($i < $page) {
    echo '<li><a href="sitelist.php?page=' . $i . $link . '">' . $i . '</a></li>';
}
echo '<li class="disabled"><a>' . $page . '</a></li>';
if ($pages >= 10) {
    $s = 10;
} else {
    $s = $pages;
}
$i = $page + 1;
while ($i <= $s) {
    echo '<li><a href="sitelist.php?page=' . $i . $link . '">' . $i . '</a></li>';
}
echo '';
if ($page < $pages) {
    echo '<li><a href="sitelist.php?page=' . $next . $link . '">&raquo;</a></li>';
    echo '<li><a href="sitelist.php?page=' . $last . $link . '">尾页</a></li>';
} else {
    echo '<li class="disabled"><a>&raquo;</a></li>';
    echo '<li class="disabled"><a>尾页</a></li>';
}
echo '</ul>';
echo "    </div>
  </div>
<script src=\"//lib.baomitu.com/layer/2.3/layer.js\"></script>
<script>
function showRecharge(zid) {
	\$(\"input[name='zid']\").val(zid);
	\$('#modal-rmb').modal('show');
}
function setSuper(zid) {
	\$.ajax({
		type : 'GET',
		url : 'ajax.php?act=setSuper&zid='+zid,
		dataType : 'json',
		success : function(data) {
			layer.msg('切换成功');
			window.location.reload();
		},
		error:function(data){
			layer.msg('服务器错误');
			return false;
		}
	});
}
function setActive(zid,active) {
	\$.ajax({
		type : 'GET',
		url : 'ajax.php?act=setSite&zid='+zid+'&active='+active,
		dataType : 'json',
		success : function(data) {
			window.location.reload();
		},
		error:function(data){
			layer.msg('服务器错误');
			return false;
		}
	});
}
\$(document).ready(function(){
	\$(\"#recharge\").click(function(){
		var zid=\$(\"input[name='zid']\").val();
		var actdo=\$(\"select[name='do']\").val();
		var rmb=\$(\"input[name='rmb']\").val();
		if(rmb==''){layer.alert('请输入金额');return false;}
		var ii = layer.load(2, {shade:[0.1,'#fff']});
		\$.ajax({
			type : \"POST\",
			url : \"ajax.php?act=siteRecharge\",
			data : {zid:zid,actdo:actdo,rmb:rmb},
			dataType : 'json',
			success : function(data) {
				layer.close(ii);
				if(data.code == 0){
					layer.msg('修改余额成功');
					window.location.reload();
				}else{
					layer.alert(data.msg);
				}
			},
			error:function(data){
				layer.msg('服务器错误');
				return false;
			}
		});
	});
});
</script>";
