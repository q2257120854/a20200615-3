
<?php
	$title='网站配置';
	
include("../includes/common.php");
if(!isset($_SESSION['authcode'])) {
	$query=file_get_contents('http://auth.6y3a.cn/check.php?url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
	if($query=json_decode($query,true)) {
		if($query['code']==1)$_SESSION['authcode']=true;
		else exit('<h3><html><head><title>可乐防红系统 | 站点提示信息</title></head><body id="error-page" style="text-align: center;"><h3></h3><h3> <meta http-equiv="Content-Type" content="text双击查看原图ml; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0" id="mixia_vpid"><style type="text/css"> html{background:#eee}body{background:#fff;color:#333;font-family:"微软雅黑","Microsoft YaHei",sans-serif;margin:50em auto;padding:2em 0em;max-width:700px;-webkit-box-shadow:10px 10px 10px rgba(0,0,0,.13);box-shadow:10px 10px 10px rgba(0,0,0,.13);opacity:.8}h1{border-bottom:1px solid #dadada;clear:both;color:#666;font:24px "微软雅黑","Microsoft YaHei",,sans-serif;margin:30px 0 0 0;padding:0;padding-bottom:7px}#error-page{margin-top:50px}h3{text-align:center}#error-page p{font-size:9px;line-height:1.5;margin:25px 0 20px}#error-page code{font-family:Consolas,Monaco,monospace}ul li{margin-bottom:10px;font-size:9px}a{color:#21759B;text-decoration:none;margin-top:-10px}a:hover{color:#D54E21}.button{background:#f7f7f7;border:1px solid #ccc;color:#555;display:inline-block;text-decoration:none;font-size:9px;line-height:26px;height:28px;margin:0;padding:0 10px 1px;cursor:pointer;-webkit-border-radius:3px;-webkit-appearance:none;border-radius:3px;white-space:nowrap;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-box-shadow:inset 0 1px 0 #fff,0 1px 0 rgba(0,0,0,.08);box-shadow:inset 0 1px 0 #fff,0 1px 0 rgba(0,0,0,.08);vertical-align:top}.button.button-large{height:29px;line-height:28px;padding:0 12px}.button:focus,.button:hover{background:#fafafa;border-color:#999;color:#222}.button:focus{-webkit-box-shadow:1px 1px 1px rgba(0,0,0,.2);box-shadow:1px 1px 1px rgba(0,0,0,.2)}.button:active{background:#eee;border-color:#999;color:#333;-webkit-box-shadow:inset 0 2px 5px -3px rgba(0,0,0,.5);box-shadow:inset 0 2px 5px -3px rgba(0,0,0,.5)}table{table-layout:auto;border:1px solid #333;empty-cells:show;border-collapse:collapse}th{padding:4px;border:1px solid #333;overflow:hidden;color:#333;background:#eee}td{padding:4px;border:1px solid #333;overflow:hidden;color:#333}</style></h3><h2 style="color:#FF0000">站点提示信息</h2> <h3>该站点未授权</h3><h3>授权联系站长212528119</h3></body></html></h3>');
	}
}
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");

    require ('./head.php');
    
include("../fhincludes/common.php");
?>
<!--

署名：可乐  （版权勿删！）

-->

   <div class="container" style="padding-top:10px;">
<div class="panel panel-primary">
<div class="panel-body">
				
				
<?php
if(isset($_POST['submit'])) {
    $tz=daddslashes($_POST['tz']);
	$free=intval($_POST['free']);
    $ti=daddslashes($_POST['ti']);
    $bt=daddslashes($_POST['bt']);
    $tj=daddslashes($_POST['tj']);
    $sitename=daddslashes($_POST['sitename']);
    $duan=daddslashes($_POST['duan']);
    $cishu=daddslashes($_POST['cishu']);
    
	$sql="update `quan_config` set `tz` ='{$tz}',`bt` ='{$bt}',`cishu` ='{$cishu}',`ti` ='{$ti}',`tj` ='{$tj}',`sitename` ='{$sitename}',`sitename` ='{$sitename}',`free` ='{$free}' where `id`='{$siteid}'";
	if($DB->query($sql))showmsg('修改成功！',1);
	else showmsg('修改失败！<br/>'.$DB->error(),4);
}else{
?>

				
				
				
				
<div class="panel-body">
  <form action="./fhset.php" method="post" class="form-horizontal" role="form">
				
				
				
        	<div class="form-group">
	  <label class="col-sm-2 control-label">短链类型</label>
	  <div class="col-sm-10"><select name="duan" class="form-control border-input" default="<?php echo $conf['duan']?>">
  <option value="type=tcn">t.cn</option>
  <option value="type=urlcn">url.cn</option>
		<option value="type=suoim">suo.im</option>
	  </select></div>
	  </div><br/>
        		<div class="form-group">
	  <label class="col-sm-2 control-label">跳转链接切换</label>
	  <div class="col-sm-10"><select name="tz" class="form-control border-input" default="<?php echo $conf['tz']?>">
		<option value="2">①本地入库</option>
        <option value="3">②真实链接</option>
	  </select></div>
	  </div><br/>

            		
            		
        		
                    		<div class="form-group">
	  <label class="col-sm-2 control-label">统计开关</label>
	  <div class="col-sm-10"><select name="tj" class="form-control border-input" default="<?php echo $conf['tj']?>">
		<option value="1">①开启</option>
		<option value="2">②关闭</option>
	  </select></div>
	  </div><br/>
	  
    		<div class="form-group">
	  <label class="col-sm-2 control-label">统计顶文本</label>
	  <div class="col-sm-10"><input type="text" name="sitename" value="<?php echo $conf['sitename']; ?>" class="form-control border-input"/></div>
	</div><br/>
	
	  
	
	
                		<div class="form-group">
	  <label class="col-sm-2 control-label">选择防红标题</label>
	  <div class="col-sm-10"><select name="ti" class="form-control border-input" default="<?php echo $conf['ti']?>">
		<option value="1">①自动获取</option>
		<option value="2">②使用自定义</option>
	  </select></div>
	  </div><br/>
    		<div class="form-group">
	  <label class="col-sm-2 control-label">自定义标题</label>
	  <div class="col-sm-10"><input type="text" name="bt" value="<?php echo $conf['bt']; ?>" class="form-control border-input"/></div>
	</div><br/>
        		<div class="form-group">
	  <label class="col-sm-2 control-label">报毒接口秘钥</label>
	  <div class="col-sm-10"><input type="text" name="cishu" value="<?php echo $conf['cishu']; ?>" class="form-control border-input"/>这个是监控秘钥APP上的反馈群也是这个号码<br>监控地址http://<?php echo $_SERVER['SERVER_NAME']; ?>/cron.php?key=<?php echo $conf['cishu']; ?></div>
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
