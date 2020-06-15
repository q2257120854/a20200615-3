<?php
$online_log = 'includes/online.txt';  
$timeout = 1800;   
$tongji = array();   
  
if (!file_exists($online_log)) {    
    touch($online_log);  
}  
$onlines = file($online_log);  
  
for ($i=0; $i<count($onlines); $i++) {  
    $online = explode(',', trim($onlines[$i]));   
   
    if ($online[0] != $_SERVER['REMOTE_ADDR'] && $online[1] > time()) {  
        array_push($tongji, $online[0] . ',' . $online[1]);  
    }  
}  
// 更新当前的ip（自己）时间  
array_push($tongji, $_SERVER['REMOTE_ADDR'] . ',' . (time() + $timeout));  
  
// 更新在线人数的文件  
$onlines = implode("\n", $tongji);  
$fp = fopen($online_log, 'w');  
fputs($fp, $onlines);  
fclose($fp);  
$ymzs=$DB->count("SELECT count(*) from quan_host WHERE 1");
$numrow=$DB->count("SELECT count(*) from quan_log WHERE 1");
$sczs=$DB->count("SELECT count(*) from quan_report WHERE 1");
$numrows=$DB->count("SELECT count(*) from quan_list WHERE 1");
?>


<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="//baomitu-1253374355.cos.ap-chengdu.myqcloud.com/uo_tougao/css/uid_1002_onle.css">
  <title><?php echo $conf['sitename']?> - <?php echo $conf['title']?></title>
  <meta name="keywords" content="<?php echo $conf['keywords']?>">
  <meta name="description" content="<?php echo $conf['description']?>">
  		<link href="//cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    	<link href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    	<link rel="stylesheet" href="assets/simple/css/oneui.css">
		<link rel="stylesheet" href="assets/css/common.css?ver=2001">
		<script src="//cdn.staticfile.org/modernizr/2.8.3/modernizr.min.js"></script>
		<!--[if lt IE 9]>
	    <script src="//cdn.staticfile.org/html5shiv/3.7.3/html5shiv.min.js"></script>
	    <script src="//cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
    </head>
<style type="text/css">
	.block{margin-bottom:10px;background-color:#fff;-webkit-box-shadow:0 2px 17px 2px rgb(222,223,241);box-shadow:0 2px 17px 2px rgb(222,223,241);font-weight:400}
	ul.ft-link{margin:0;padding:0}
	ul.ft-link li{border-right:1px solid #E6E7EC;display:inline-block;line-height:30px;margin:8px 0;text-align:center;width:24%}
	ul.ft-link li a{color:#74829c;text-transform:uppercase;font-size:12px}
	ul.ft-link li a:hover,ul.ft-link li.active a{color:#58c9f3}
	ul.ft-link li:last-child{border-right:none}
	ul.ft-link li a i{display:block}
	.btn-info{color:#ffffff;background-color:#4098f2;border-color:#ffffff}
	.btn{font-weight:100;border-radius:20px;-webkit-transition:all 0.15s ease-out;transition:all 0.15s ease-out}
	.btn-sm,.btn-group-sm > .btn{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}
	.btn-primary{color:#ffffff;background-color:rgb(64,152,242);border-color:rgb(64,152,242)}
</style>
 <body>
	<!-弹出-公告-->
		<div class="modal fade col-xs-12 " align="left" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">  
				<br>  <br> 
			<div class="modal-dialog panel panel-primary  animation-fadeInQuick2">
		    <div class="modal-content">
         <div class="list-group-item reed" style="background:linear-gradient(120deg, #5ED1D7 10%, #71D7A2 90%);">
						<button type="button" class="close " data-dismiss="modal"><span aria-hidden="true"><i class="fa  fa-times-circle"></i></span><span class="sr-only">Close</span></button>
						<script type="text/javascript">
							var now=(new Date()).getHours();
							if(now>0&&now<=6){
							document.write("熬夜对身体不好，快睡觉！");
							}else if(now>6&&now<=11){
							document.write("早上好！美好的一天开始啦！");
							}else if(now>11&&now<=14){
							document.write("中午好！欢迎光临本站！");
							}else if(now>14&&now<=18){
							document.write("下午好！欢迎光临本站！");
							}else{
							document.write("晚上好！睡前生成一次醒来有惊喜哟！");
							}
						</script>
					</div>      <center> <br>
  <p></p>
<strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体;font-size:12px">
<font color="#FF0000">平</font><font color="#F5000A">台</font><font color="#EB0014">誓</font><font color="#E1001E">言</font><font color="#D70028">：</font><font color="#CD0032">真</font><font color="#C3003C">诚</font><font color="#B90046">服</font><font color="#AF0050">务</font><font color="#A5005A">，</font><font color="#9B0064">努</font><font color="#91006E">力</font><font color="#870078">打</font><font color="#7D0082">造</font><font color="#73008C">全</font><font color="#690096">网</font><font color="#5F00A0">最</font><font color="#5500AA">强</font><font color="#4B00B4">稳</font><font color="#4100BE">定</font><font color="#3700C8">防</font><font color="#2D00D2">红</font><font color="#2300DC">网</font><font color="#1900E6">！</font><strong><p></p>
</center>
         	<?php echo $conf['modal']?>
	  
	  
	  
	  
	  

    <p></p>
<center>
<strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, "">
  <span class="glyphicon glyphicon-info-sign"></span> <b></b> 建议网址收藏到浏览器！方便下次打开<strong>			</strong></strong></center><strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, ""><strong><br>
  
		</strong></strong></center><strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, ""><strong><br> 				</strong></strong></div><strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, ""><strong>			</strong></strong></div><strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, ""><strong>		</strong></strong></div><strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, ""><strong>     

	  <!-- 弹出公告结束 !-->
	
	

	  
	  <!--成功-->
		<div class="modal fade col-xs-12 " align="left" id="your-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">  
			<br>  <br> 
			<div class="modal-dialog panel panel-primary  animation-fadeInQuick2">
		    <div class="modal-content">
         <div class="list-group-item reed" style="background:linear-gradient(120deg, #5ED1D7 10%, #71D7A2 90%);">
						<button type="button" class="close " data-dismiss="modal"><span aria-hidden="true"><i class="fa  fa-times-circle"></i></span><span class="sr-only">Close</span></button>
						<script type="text/javascript">
							var now=(new Date()).getHours();
							if(now>0&&now<=6){
							document.write("熬夜对身体不好，快睡觉！");
							}else if(now>6&&now<=11){
							document.write("早上好！美好的一天开始啦！");
							}else if(now>11&&now<=14){
							document.write("中午好！欢迎光临本站！");
							}else if(now>14&&now<=18){
							document.write("下午好！欢迎光临本站！");
							}else{
							document.write("晚上好！睡前生成一次醒来有惊喜哟！");
							}
						</script>
					</div>      <center> <br>
  <p></p>
<strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体;font-size:12px">
<font color="#FF0000">平</font><font color="#F5000A">台</font><font color="#EB0014">誓</font><font color="#E1001E">言</font><font color="#D70028">：</font><font color="#CD0032">真</font><font color="#C3003C">诚</font><font color="#B90046">服</font><font color="#AF0050">务</font><font color="#A5005A">，</font><font color="#9B0064">努</font><font color="#91006E">力</font><font color="#870078">打</font><font color="#7D0082">造</font><font color="#73008C">全</font><font color="#690096">网</font><font color="#5F00A0">最</font><font color="#5500AA">强</font><font color="#4B00B4">稳</font><font color="#4100BE">定</font><font color="#3700C8">防</font><font color="#2D00D2">红</font><font color="#2300DC">网</font><font color="#1900E6">！</font><strong><p></p>
</center>

	  
	  	  <div class="modal-body" style="text-align: center;">您的防红短网址：<b id="dwzdate"><br><img id="aimg_H2R2r" onclick="zoom(this, this.src, 0, 0, 0)" class="zoom" src="http://api.2019fafa.cn/netcard/api.php" onmouseover="img_onmouseoverfunc(this)" onload="thumbImg(this)" border="0" width="100%" alt="" initialized="true"></b></div>
			
			
    <p></p>
<center>
<strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, "">
  <span class="glyphicon glyphicon-info-sign"></span> <b></b> 建议网址收藏到浏览器！方便下次打开<strong>			</strong></strong></center><strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, ""><strong><br>
  
		</strong></strong></center><strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, ""><strong><br> 				</strong></strong></div><strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, ""><strong>			</strong></strong></div><strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, ""><strong>		</strong></strong></div><strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, ""><strong>     

	  <!-- 成功-->
	  
	  		  <!-公告-->
		<div class="modal fade col-xs-12 " align="left" id="mustsee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">  
				<br>  <br> 
			<div class="modal-dialog panel panel-primary  animation-fadeInQuick2">
		    <div class="modal-content">
         <div class="list-group-item reed" style="background:linear-gradient(120deg, #5ED1D7 10%, #71D7A2 90%);">
						<button type="button" class="close " data-dismiss="modal"><span aria-hidden="true"><i class="fa  fa-times-circle"></i></span><span class="sr-only">Close</span></button>
						<script type="text/javascript">
							var now=(new Date()).getHours();
							if(now>0&&now<=6){
							document.write("熬夜对身体不好，快睡觉！");
							}else if(now>6&&now<=11){
							document.write("早上好！美好的一天开始啦！");
							}else if(now>11&&now<=14){
							document.write("中午好！欢迎光临本站！");
							}else if(now>14&&now<=18){
							document.write("下午好！欢迎光临本站！");
							}else{
							document.write("晚上好！睡前生成一次醒来有惊喜哟！");
							}
						</script>
					</div>      <center> <br>
  <p></p>
<strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体;font-size:12px">
<font color="#FF0000">平</font><font color="#F5000A">台</font><font color="#EB0014">誓</font><font color="#E1001E">言</font><font color="#D70028">：</font><font color="#CD0032">真</font><font color="#C3003C">诚</font><font color="#B90046">服</font><font color="#AF0050">务</font><font color="#A5005A">，</font><font color="#9B0064">努</font><font color="#91006E">力</font><font color="#870078">打</font><font color="#7D0082">造</font><font color="#73008C">全</font><font color="#690096">网</font><font color="#5F00A0">最</font><font color="#5500AA">强</font><font color="#4B00B4">稳</font><font color="#4100BE">定</font><font color="#3700C8">防</font><font color="#2D00D2">红</font><font color="#2300DC">网</font><font color="#1900E6">！</font><strong><p></p>
</center>
	  <?php echo $conf['anounce']?>
	  
	  
	  
	  
	  

    <p></p>
<center>
<strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, "">
  <span class="glyphicon glyphicon-info-sign"></span> <b></b> 建议网址收藏到浏览器！方便下次打开<strong>			</strong></strong></center><strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, ""><strong><br>
  
		</strong></strong></center><strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, ""><strong><br> 				</strong></strong></div><strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, ""><strong>			</strong></strong></div><strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, ""><strong>		</strong></strong></div><strong style="color:#b#eaf0cce;font-family:微软雅黑, 宋体, ""><strong>     

	  <!-- 公告结束 !-->	<div class="col-xs-12 col-sm-10 col-md-8 col-lg-4 center-block" style="float: none;">
		<br/>
		<!--顶部导航-->
		<div class="block block-link-hover3" href="javascript:void(0)">
			<div class="block-content block-content-full text-center bg-image" style="background-image: url('./template/qianqiu/HTB1XaMeXQL0gK0jSZFx760WHVXaz.png');background-size: 100% 100%;">
				<div>
					<div>
						<img class="img-avatar img-avatar80 img-avatar-thumb animated zoomInDown"
						src="//q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $conf['kfqq']; ?>&spec=100">
					</div>
				</div>
			</div>
			<div class="panel-body text-center">
				<ul class="ft-link">
					<li>
						<a href="#mustsee" data-toggle="modal" class="">
							<h5>
								<i class="fa fa-envelope-open-o">
									公告
								</i>
							</h5>
					</li>
					</a>
					<li>
						<a href="/user" data-toggle="modal" class="">
							<h5>
								<i class="fa fa-cogs">
									后台
								</i>
							</h5>
					</li>
					<li>
						<a href="#about" data-toggle="modal" class="">
							<h5>
								<i class="fa fa-user-o">
									站长
								</i>
							</h5>
					</li>
					<li>
						<a href="./user/reg.php" data-toggle="modal" class="">
							<h5>
								<i class="fa fa-heartbeat">
									分站
								</i>
							</h5>
				</ul>
			</div>
		</div>
		<aside id="php_text-8" class="widget php_text wow fadelnUp" data-wow-delay="3.0s">
			<div class="textwidget widget-text">
				</table>
				</a>
				<!--logo下面按钮结束-->
				
				<div class="block animated bounceInDown btn-rounded" style="border:1px solid #FFF0F5; background: url(./template/qianqiu/HTB1g0QeXQL0gK0jSZFx760WHVXaU.png);margin-top:15px;font-size:15px;padding:15px;border-radius:15px;background-color: white;">
					<ul class="nav nav-tabs btn btn-block animated zoomInLeft btn-rounded"
					style="overflow: hidden;" data-toggle="tabs">
						<li class="active" style="width: 32%;" align="center">
							<a href="#shop" data-toggle="tab">
								<i class="fa fa-shopping-bag fa-fw">
								</i>
								在线生成
							</a>
						</li>
						<li style="width: 32%;" align="center">
							<a href="#ktfz" data-toggle="tab">
								<i class="fa fa-coffee fa-fw">
								</i>
								分站开通
							</a>
						</li>
						<li style="width: 32%;" align="center">
							<a href="#gift" data-toggle="tab">
								<i class="fa fa-gift fa-fw">
								</i>
								接口API
							</a>
						</li>
					</ul>
					<!--TAB-->
					<div class="block-content tab-content">
						<!--在线防洪-->
						<div class="tab-pane fade fade-up in active" id="shop">
						
						
						
						
						
			
                <?php include ("./duan.php"); ?>




						</div>
						<!--在线防洪-->
											<!--开通分站-->
						<div class="tab-pane fade fade-up" id="ktfz">
							<div class="block block-link-hover2 text-center">
								<div class="block-content block-content-full bg-success">
									<div class="h4 font-w700 text-white push-10">
										
									</div>
									<div class="h5 font-w300 text-white-op">
										可选 [普及版 / 专业版｝
									</div>
								</div>
								<div class="block-content">
									<table class="table table-borderless table-condensed">
										<tbody>
											<tr>
												<td>
													无聊时可以赚点零花钱
												</td>
											</tr>
											<tr>
												<td>
													赠送永久专属防洪接口
												</td>
											</tr>
											<tr>
												<td>
													开通下级分站可得提成
												</td>
											</tr>
											<tr>
												<td>
													分站达到预设余额可提现
												</td>
											</tr>
											<tr>
												<td>
													<strong>
														全天24小时自助搭建实时开通
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="block-content block-content-mini block-content-full bg-gray-lighter">
									<a href="#userjs" data-toggle="modal" class="btn btn-success">
										版本介绍
									</a>
									<button onclick="window.open('./user/reg.php')" class="btn btn-danger">
										开通分站
									</button>
								</div>
							</div>
						</div>
						<!--开通分站-->
						<!--API-->
						<div class="tab-pane fade fade-up" id="gift">
						
						
						
						
						
						  <a href="javascript:void(0)" class="widget">
                        <center><br>
                            <div id="demo-acc-faq" class="panel-group accordion"><div class="panel panel-trans pad-top"><a href="#demo-acc-faq1" class="text-semibold text-lg text-main collapsed" data-toggle="collapse" data-parent="#demo-acc-faq" aria-expanded="false">彩虹代刷接口</a><div id="demo-acc-faq1" class="mar-ver collapse" aria-expanded="false" style="height: 0px;">跳转版：http://<?php echo $_SERVER['SERVER_NAME'];?>/dwz.php?longurl=<br>直链版：http://<?php echo $_SERVER['SERVER_NAME'];?>/zl.php?longurl=<br>直接在代刷后台-其他组件-防红接口设置-接口地址，填写此接口即可使用！
<img src="./template/default/H0ae3dd3c13204a2a90a024d22ead80bf4.png" width="100%" height="100%"/></div></div><div class="panel panel-trans pad-top"><a href="#demo-acc-faq2" class="text-semibold text-lg text-main collapsed" data-toggle="collapse" data-parent="#demo-acc-faq" aria-expanded="false">API返回格式</a><div id="demo-acc-faq2" class="mar-ver collapse" aria-expanded="false"><p>提交方式：POST【参数：longurl】 <br>
  POST接口：http://<?php echo ($_SERVER['SERVER_NAME']);?>/dwz.php
  <br>
  提交方式:GET【参数：?longurl=】
  <br>GET接口：http://<?php echo $_SERVER['SERVER_NAME'];?>/dwz.php?longurl=
  <br>
  GET示范：http://<?php echo $_SERVER['SERVER_NAME'];?>/dwz.php?longurl=<a style="color:#00A1000"><?php echo $_SERVER['SERVER_NAME'];?></a>
  <br>
  访客查询：
  http://<?php echo $_SERVER['SERVER_NAME'];?>/includes/tj.php/?longurl=原网址或者短网址
  <br>
  TEXT返回数据接口：
  http://<?php echo $_SERVER['SERVER_NAME'];?>/dwz.php?format=txt&longurl=
  <br>
  </p></div></div><div class="panel panel-trans pad-top"><a href="#demo-acc-faq3" class="text-semibold text-lg text-main collapsed" data-toggle="collapse" data-parent="#demo-acc-faq" aria-expanded="false">提示黑名单哟</a><div id="demo-acc-faq3" class="mar-ver collapse" aria-expanded="false"><p>
  域名被拉黑，可能您的域名有违规情况，出现博彩，钓鱼，黄，毒，反动等因素！<br />
  IP被拉黑，系统检测到您频繁生成，判断非人工访问，自动屏蔽，请联系官方群管理！
</p></div></div><div class="panel panel-trans pad-top"><a href="#demo-acc-faq4" class="text-semibold text-lg text-main collapsed" data-toggle="collapse" data-parent="#demo-acc-faq" aria-expanded="false">API错误代码</a><div id="demo-acc-faq4" class="mar-ver collapse" aria-expanded="false"><p>
10001：URL不能为空<br />
10002：URL地址错误<br />
10003：当前IP已被拉黑<br />
10004：当前IP生成频率太高，已禁止生成<br />
10005：当前域名已被拉黑<br />
100010：未知错误，联系管理员<br />
</p></div></div>
                        </center>
                    </a>


</div>
						<!--API-->				
						
								
												
					</div>
				</div>
				<!--版本介绍-->
				<div class="modal fade" id="userjs" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-dialog-popin">
						<div class="modal-content">
							<div class="block block-themed block-transparent remove-margin-b">
								<div class="block-header bg-primary-dark">
									<ul class="block-options">
										<li>
											<button data-dismiss="modal" type="button">
												<i class="si si-close">
												</i>
											</button>
										</li>
									</ul>
									<h4 class="block-title">
										版本介绍
									</h4>
								</div>
								<div class="modal-body">
									<div class="table-responsive">
										<table class="table table-borderless table-vcenter">
											<thead>
												<tr>
													<th style="width: 100px;">
														功能
													</th>
													<th class="text-center" style="width: 20px;">
														普及版/专业版
													</th>
												</tr>
											</thead>
											<tbody>
												<tr class="active">
													<td>
														专属防洪平台
													</td>
													<td class="text-center">
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
													</td>
												</tr>
												<tr class="">
													<td>
														三种在线支付接口
													</td>
													<td class="text-center">
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
													</td>
												</tr>
												<tr class="success">
													<td>
														专属网站域名
													</td>
													<td class="text-center">
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
													</td>
												</tr>
												<tr class="">
													<td>
														送防洪专属接口
													</td>
													<td class="text-center">
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
													</td>
												</tr>
												<tr class="info">
													<td>
														赚取开通分站提成
													</td>
													<td class="text-center">
														<span class="btn btn-effect-ripple btn-xs btn-danger">
															<i class="fa fa-close">
															</i>
														</span>
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
													</td>
												</tr>
												<tr class="">
													<td>
														可设置黑白名单
													</td>
													<td class="text-center">
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
													</td>
												</tr>
												<tr class="">
													<td>
														搭建下级分站
													</td>
													<td class="text-center">
														<span class="btn btn-effect-ripple btn-xs btn-danger">
															<i class="fa fa-close">
															</i>
														</span>
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
													</td>
												</tr>
												<tr class="danger">
													<td>
														赠送专属精致APP
													</td>
													<td class="text-center">
														<span class="btn btn-effect-ripple btn-xs btn-danger">
															<i class="fa fa-close">
															</i>
														</span>
														<span class="btn btn-effect-ripple btn-xs btn-success">
															<i class="fa fa-check">
															</i>
														</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<center style="color: #b2b2b2;">
										<small>
											<em>
												* 我们的防洪分站无限授权哦！
											</em>
										</small>
									</center>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									关闭
								</button>
							</div>
						</div>
					</div>
				</div>
				<!--版本介绍-->
				<!--关于我们弹窗-->
				<div class="modal fade" align="left" id="about" tabindex="-1" role="dialog"
				aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">
									<span aria-hidden="true">
										&times;
									</span>
									<span class="sr-only">
										Close
									</span>
								</button>
								<h4 class="modal-title" id="myModalLabel">
									站长QQ
								</h4>
							</div>
							<div class="modal-body">
							
							
							
							
							
							
							
							
								





				       <div class="tab-pane" id="searc">
		        <ul class="list-group animated bounceIn">
                <li class="list-group-item">   
				   <div class="media">
				   
				   
				    <span class="pull-left thumb-sm"><img src="http://q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $conf['kfqq']; ?>&amp;spec=100" class="img-circle img-thumbnail img-avatar"></span>
          <div class="pull-right push-15-t">
            	  <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']; ?>&site=qq&menu=yes" target="_blank" data-toggle="modal" class="btn btn-sm btn-info">联系站长</a>
        </div>
          <div class="pull-left push-10-t">
            <div class="font-w600 push-5"><?php echo $conf['sitename']?></div>
            <div class="text-muted">
<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;8:00 - 21:00</div>
          </div>
        </div><hr> <b>
                <font color="#6699FF" style="text-shadow: black 1px 1px 1px;">
                  <i class="glyphicon glyphicon-refresh text-info fa-spin"></i>&nbsp;链接红了可在本站重新生成！</font>
                <br></b>
              <b>
                <font color="#00CD00" style="text-shadow: black 1px 1px 1px;">
                  <i class="glyphicon glyphicon-ok-circle text-success"></i>&nbsp;白名单：无限生成（联系客服咨询）！</font>
                <br></b>
              <b>
                <font color="#FF6347" style="text-shadow: black 1px 1px 1px;">
                  <i class="fa fa-diamond"></i>&nbsp;黑名单：<font color="#FF6347">有充分理由即可解除黑名单！</font></font>
              </b>
      </li>
    </ul>
				   
				   
				   
				   
				   					</div>

          
				</div>
				
										
																
																						
																												
																	
																																		
																																																			
																																																																				
																																																																																					
																																																																																																						
																																																																																																																							
																																																																																																																																								
																																																																																																																																																									
																																																																																																																																																																										
																																																																																																																																																																																											
																																																																																																																																																																																																																													
																																														</div>
						</div>
					</div>
				</div>
				<div class="block panel panel-primary btn btn-block animated bounceInUp btn-rounded">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td align="center">
									<font size="2">
										<?php echo $ymzs?>
										
										条
										<br>
										<font color="#4098f2">
											<i class="fa fa-shield fa-2x">
											</i>
										</font>
										<br>
										安全接口
									</font>
								</td>
								<td align="center">
									<font size="2">
										<span id="count_site">
										<?php echo count($tongji)?>
										人
										<br>
										<font color="#4098f2">
											<i class="fa fa-sitemap fa-2x">
											</i>
										</font>
										<br>
										在线人数
									</font>
								</td>
								<td align="center">
									<font size="2">
										<?php echo $sczs?>
										
										条
										<br>
										<font color="#4098f2">
											<i class="fa fa-check-square-o fa-2x">
											</i>
										</font>
										<br>
										生成总数
									</font>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!--底部导航-->
				<div class="block panel panel-primary btn btn-block animated bounceInUp btn-rounded">
			<?php echo $conf['bottom']?>
					
							
										
														</div>
														
														
														
				<div class="block panel panel-primary btn btn-block animated bounceInUp btn-rounded">
																
							<?php echo $conf['sitename']?>						<span>
																				<i class="fa fa-heart text-danger">
							</i>
							2019 |
						</span>
						<a class="" href="#about" data-toggle="modal" style="outline: none;">
							客服与帮助
							</span>
							<div id="tingliu">
								<span class="tingliu2">
									您浏览了本站：
								</span>
								<span class="tingliu3" id="stime">
									0小时00分00秒
								</span>
							</div>
						</a>
					</div>
			</div>
			<!--底部导航-->
			

			  <body style="background-image: url(https://acg.toubiec.cn/random);background-attachment: fixed;background-repeat: no-repeat;background-size: cover;-moz-background-size: cover;">

	</div>
	<script src="//cdn.staticfile.org/jquery/1.12.4/jquery.min.js">
	</script>
	<script src="//cdn.staticfile.org/jquery.lazyload/1.9.1/jquery.lazyload.min.js">
	</script>
	<script src="//cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
	<script src="//cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js">
	</script>
	<script src="//cdn.staticfile.org/layer/2.3/layer.js">
	</script>
	<script src="assets/appui/js/app.js">
	</script>
	<script type="text/javascript">
		var isModal = false ;
		var homepage = true;
		var hashsalt = (+[]+[])+(+{}+[])[+!![]]+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+([]+{})[!+[]+!![]+!![]+!![]+!![]]+(!+[]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+[])+(!+[]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(+!![]+[])+([][[]]+[])[!+[]+!![]+!![]]+([][[]]+[])[!+[]+!![]]+(![]+[])[+[]]+(!+[]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+[])+(!+[]+!![]+!![]+!![]+!![]+!![]+[])+([][[]]+[])[!+[]+!![]]+(!+[]+!![]+!![]+!![]+!![]+[])+(![]+[])[+[]]+(!+[]+!![]+[])+(!+[]+!![]+!![]+[])+([]+{})[!+[]+!![]+!![]+!![]+!![]]+([]+{})[!+[]+!![]]+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+([]+{})[!+[]+!![]+!![]+!![]+!![]]+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(+{}+[])[+!![]]+(!+[]+!![]+!![]+!![]+!![]+!![]+!![]+!![]+[])+(!+[]+!![]+[])+(![]+[])[+[]]+(!+[]+!![]+!![]+!![]+!![]+[]) ;
		$(function() {
   		 	$("img.lazy").lazyload({
        		effect: "fadeIn"
    		});
		});
		var ss = 0,
		    mm = 0,
		    hh = 0;
		
		function TimeGo() {
		    ss++;
		    if (ss >= 60) {
		        mm += 1;
		        ss = 0
		    }
		    if (mm >= 60) {
		        hh += 1;
		        mm = 0
		    }
		    ss_str = (ss < 10 ? "0" + ss : ss);
		    mm_str = (mm < 10 ? "0" + mm : mm);
		    tMsg = "" + hh + "小时" + mm_str + "分" + ss_str + "秒";
		    document.getElementById("stime").innerHTML = tMsg;
		    setTimeout("TimeGo()", 1000)
		}
		TimeGo();
		$("#submit_cart_shop").attr({'class':'btn btn-block animated zoomInLeft btn-rounded','style':'background-image: radial-gradient(circle 168px at center, #16d9e3 0%, #30c7ec 47%, #00CCFF 100%);color:#FFFFFF;'});
		$("#submit_buy").attr({'class':'btn btn-block animated zoomInRight btn-rounded','style':'background-image: radial-gradient(circle 168px at center, #6699FF 0%, #30c7ec 47%, #00CCFF 100%);color:#FFFFFF;'});
	</script>
	<script src="assets/js/main.js?ver=2001"></script>
<script src="//lib.baomitu.com/jquery/1.12.4/jquery.min.js"></script>
<script src="//lib.baomitu.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//lib.baomitu.com/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="//lib.baomitu.com/layer/2.3/layer.js"></script>
<script src="<?php echo $cdnserver ?>assets/appui/js/plugins.js"></script>
<script src="<?php echo $cdnserver ?>assets/appui/js/app.js"></script>
<script type="text/javascript">
var isModal =<?php echo empty($conf['modal']) ? 'false' : 'true';?>;
var homepage = true;
var hashsalt =<?php echo $addsalt_js?>;
</script>
	<script src="./template/qianqiu//snowflake.js"></script>
	<script>
		createSnow('', 10);
	</script>
<script src="assets/js/fhsc.js"></script>
<script src="assets/js/main.js?ver=<?php echo VERSION ?>"></script>
</body>
</html>


<link rel="stylesheet" href="./assets/css/Teacher.css">
<div id="suspension">
<div class="livechat-girl animated" style="right: -35px; bottom: 75px;">
<img class="girl" src="assets/images/a.png" oncontextmenu="return false;" ondragstart="return false;" style="border-radius: 0;">
<div class="livechat-hint rd-notice-tooltip rd-notice-type-success rd-notice-position-left single-line hide_hint">
<div class="rd-notice-content">本站共生成［<?php echo $sczs?>］次！</div>
</div>
<script type="text/javascript" src="./assets/js/Teacher.js"></script>