<?php
	$title='防红公告';
include("../includes/common.php");
if(!isset($_SESSION['authcode'])) {
	$query=file_get_contents('http://auth.6y3a.cn/check.php?url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
	if($query=json_decode($query,true)) {
		if($query['code']==1)$_SESSION['authcode']=true;
		else exit('<h3><html><head><title>冰狱防红系统 | 站点提示信息</title></head><body id="error-page" style="text-align: center;"><h3></h3><h3> <meta http-equiv="Content-Type" content="text双击查看原图ml; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0" id="mixia_vpid"><style type="text/css"> html{background:#eee}body{background:#fff;color:#333;font-family:"微软雅黑","Microsoft YaHei",sans-serif;margin:50em auto;padding:2em 0em;max-width:700px;-webkit-box-shadow:10px 10px 10px rgba(0,0,0,.13);box-shadow:10px 10px 10px rgba(0,0,0,.13);opacity:.8}h1{border-bottom:1px solid #dadada;clear:both;color:#666;font:24px "微软雅黑","Microsoft YaHei",,sans-serif;margin:30px 0 0 0;padding:0;padding-bottom:7px}#error-page{margin-top:50px}h3{text-align:center}#error-page p{font-size:9px;line-height:1.5;margin:25px 0 20px}#error-page code{font-family:Consolas,Monaco,monospace}ul li{margin-bottom:10px;font-size:9px}a{color:#21759B;text-decoration:none;margin-top:-10px}a:hover{color:#D54E21}.button{background:#f7f7f7;border:1px solid #ccc;color:#555;display:inline-block;text-decoration:none;font-size:9px;line-height:26px;height:28px;margin:0;padding:0 10px 1px;cursor:pointer;-webkit-border-radius:3px;-webkit-appearance:none;border-radius:3px;white-space:nowrap;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-box-shadow:inset 0 1px 0 #fff,0 1px 0 rgba(0,0,0,.08);box-shadow:inset 0 1px 0 #fff,0 1px 0 rgba(0,0,0,.08);vertical-align:top}.button.button-large{height:29px;line-height:28px;padding:0 12px}.button:focus,.button:hover{background:#fafafa;border-color:#999;color:#222}.button:focus{-webkit-box-shadow:1px 1px 1px rgba(0,0,0,.2);box-shadow:1px 1px 1px rgba(0,0,0,.2)}.button:active{background:#eee;border-color:#999;color:#333;-webkit-box-shadow:inset 0 2px 5px -3px rgba(0,0,0,.5);box-shadow:inset 0 2px 5px -3px rgba(0,0,0,.5)}table{table-layout:auto;border:1px solid #333;empty-cells:show;border-collapse:collapse}th{padding:4px;border:1px solid #333;overflow:hidden;color:#333;background:#eee}td{padding:4px;border:1px solid #333;overflow:hidden;color:#333}</style></h3><h2 style="color:#FF0000">站点提示信息</h2> <h3>该站点未授权</h3><h3>授权联系站长212528119</h3></body></html></h3>');
	}
}


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
if(isset($_POST['submit'])) {
	$buy=daddslashes($_POST['buy']);
	$modal=daddslashes($_POST['modal']);
	$ding=daddslashes($_POST['ding']);
	
	    
	$sql="update `quan_config` set `buy` ='{$buy}',`modal` ='{$modal}',`ding` ='{$ding}' where `id`='{$siteid}'";
	if($DB->query($sql))showmsg('修改成功！',1);
	else showmsg('修改失败！<br/>'.$DB->error(),4);
}else{
?>

				
				
				
				
<div class="panel-body">
  <form action="./wzgg.php" method="post" class="form-horizontal" role="form">
				
				
  		<div class="form-group">
	  <label class="col-sm-2 control-label">跳转头部公告</label>
	  <div class="col-sm-10"><textarea class="form-control border-input" name="ding" rows="6"><?php echo $conf['ding']; ?></textarea>（部分模板显示）</div>
	</div><br/>
					<div class="form-group">
	  <label class="col-sm-2 control-label">跳转底部公告</label>
	  <div class="col-sm-10"><textarea class="form-control border-input" name="buy" rows="6"><?php echo $conf['buy']; ?></textarea>（部分模板显示）</div>
	</div><br/>
		<div class="form-group">
	  <label class="col-sm-2 control-label">直连顶部公告</label>
	  <div class="col-sm-10"><textarea class="form-control border-input" name="modal" rows="6"><?php echo $conf['modal']; ?></textarea>（部分模板显示）</div>
	</div><br/>
	
	<div class="form-group">
	  <div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="修改" class="btn btn-info btn-fill btn-block"/>
	 </div>
	</div>
  </form>
</div>
</div>
<script>
var items = $("select[default]");
for (i = 0; i < items.length; i++) {
	$(items[i]).val($(items[i]).attr("default"));
}
</script>
<?php
}?>

  
      </div>
  </div>
