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
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
  
  
  <title><?php echo $conf['sitename']?> - <?php echo $conf['title']?></title>
  <meta name="keywords" content="<?php echo $conf['keywords']?>">
  <meta name="description" content="<?php echo $conf['description']?>">
<link rel="Shortcut Icon" href="./favicon.ico">
<link href="//cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<link href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="./template/fenhong/plugins.css">
  <link rel="stylesheet" href="./template/fenhong/main.css">
  <link rel="stylesheet" href="./template/fenhong/oneui.css">
        <script src="//cdn.staticfile.org/modernizr/2.8.3/modernizr.min.js"></script>
        <!--[if lt IE 9]>
        <script src="//cdn.staticfile.org/html5shiv/3.7.3/html5shiv.min.js"></script>
<link rel="stylesheet" href="https://css.letvcdn.com/lc04_yinyue/2011012/19/20/00/bootstrap.min.css">
        <![endif]-->
       
       
       
       

<style>
img.logo{width:14px;height:14px;margin:0 5px 0 3px;}
.onclick{cursor: pointer;touch-action: manipulation;}
.giftlist{overflow:hidden;width:90%;margin:0 auto}
.giftlist ul{height:270px;overflow:hidden;padding:0}
.giftlist li{width:100%;line-height:35px;padding:0 10px;overflow:hidden;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
.giftlist li strong{margin:0 5px 0 0;font-weight:400;color:#1977d8}

.input-group-addon{background:linear-gradient(135deg,#FFBEC9,#FFBEC9);}

.shuaibi-tip {
    background: #fafafa repeating-linear-gradient(-45deg,#ffb6c1,#ffb6c1 1.125rem,transparent 1.125rem,transparent 2.25rem);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
    margin: 15px 15px;
    padding: 15px;
    border-radius: 5px;
    font-size: 15px;
    color: #555555;
</style>
<img  style="background: linear-gradient(to bottom,	#FFCFE2,#FFCFE2);"  class="full-bg full-bg-bottom" ondragstart="return false;" oncontextmenu="return false;">
</head>
<body>
<br />
<div class="col-xs-12 col-sm-10 col-md-8 col-lg-4 center-block" style="float: none;" >

<div class="elevator_item" id="elevator_item" style="display:block;">

</div>

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
	  
	  <!-公告-->
		<div class="modal fade col-xs-12 " align="left" id="anounce" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">  
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

	  <!-- 公告结束 !-->
	  
	  
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
	  


<div class="widget">

<!--logo-->
    <div class="widget-content themed-background-flat text-center" style="background-image: url(<?php echo $conf['cdn']?>template/fenhong/9da82a025b5c8088a8a636d9be403cbb.jpg);background-size: 100% 100%;">
      <a href="javascript:void(0)">
			<img src="//q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $conf['kfqq']; ?>&spec=100" alt="Avatar" width="60" alt="avatar" style="height: auto filter: alpha(Opacity=80);-moz-opacity: 0.80;opacity: 0.80;" class="img-circle img-thumbnail img-thumbnail-avatar-1x animated zoomInDown">
        </a>

<!--logo-->
<!--logo下面按钮-->
	<div class="widget-content text-center">
		<div class="text-center text-muted">
			<div class="btn-group btn-group-justified">
                <div class="btn-group">
                    <a class="btn btn-default"style="background: linear-gradient(to right,pink ,#FFFFFF,#FFFFFF,#FFFFFF);"data-toggle="modal" href="#anounce"><i class="fa fa-wifi"></i> <span style="font-weight:bold"> 平台公告</span></a>
                </div>
				                <div class="btn-group">
                     <a class="btn btn-default"style="background: linear-gradient(to right,pink ,#FFFFFF,#FFFFFF,#FFFFFF);"data-toggle="modal" href="#lxkf"><i class="fa fa-qq"></i> <span style="font-weight:bold"> 联系站长</span></a>
                </div>
                      
</div></div></div>
    </div>
<!--logo下面按钮-->

</div>
<div class="block full2">
<!--TAB标签-->
	<div class="block-title">

        <ul class="nav nav-tabs" data-toggle="tabs" style="background: linear-gradient(to right,pink ,#ffb6c1,#ffb6c1,#ffb6c1);">
            <li style="width: 25%;" align="center" class="active"><a href="#shop" data-toggle="tab"><span style="font-weight:bold"><img border="0" width="22" src="favicon.ico">防红</span></a></li>
            <li style="width: 25%;" align="center"><a href="#search" data-toggle="tab" id="tab-query"><span style="font-weight:bold"><font color="#ff0000"><i class="fa fa-coffee fa-fw"></i>分站</font></span></a></li>
	    <li style="width: 25%;" align="center" ><a href="#Substation" data-toggle="tab"><span style="font-weight:bold"><font color="#ff0000"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>统计</span></font></a></li>
			<li style="width: 25%;" align="center"><a href="#more" data-toggle="tab"><span style="font-weight:bold"><font color="#FF7F00"><span style="font-weight:bold"><span class="glyphicon glyphicon-gift"></span> 更多</font></span></a></li>
        </ul>
    </div>
<!--TAB标签-->
    <div class="tab-content"><center>
<font color="ff0000"></font></center>
<!--在线防红-->
    <div class="tab-pane active" id="shop">	
    
    
                <?php include ("./duan.php"); ?>
                </div>




<!--在线防红-->

    <!--客服介绍开始-->
<div class="modal fade col-xs-12" align="left" id="lxkf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >  <br />  <br />  

  
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
  
      
          
                  
        <div class="modal-dialog panel panel-primary  animation-fadeInQuick2">
    <div class="modal-content">

<div class="panel-body">







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
                  <i class="fa fa-diamond"></i>&nbsp;黑名单：<font color="#FF6347">有充分的理由即可解除黑名单！</font></font>
              </b>
      </li>
    </ul>
				   
				   
				   
				   
				   					</div>

          
				</div>
</div>
</div>
</div>
</div>
</div>
<!--联系客服结束-->

<!--分站-->
   <div class="tab-pane" id="search">
<table class="table table-borderless table-pricing">
            <tbody>
                <tr class="active" >
                    <td>
                        <h4><span style="font-weight:bold"><font color="#FF8000">加</font><font color="#EC6D13">入</font><font color="#D95A26">我</font><font color="#C64739">们</font><font color="#B3344C"> </font><font color="#A0215F">防</font><font color="#8D0E72">红</font><font color="#7A0085">就</font><font color="#670098">是</font><font color="#5400AB">如</font><font color="#4100BE">此</font><font color="#2E00D1">简</font><font color="#1B00E4">单</font> </span></h4>
                    </td>
                </tr>
                <tr>
                    <td>专属防红接口地址</td>
                </tr>
                <tr>
                    <td>专属网站域名和后台</td>
                </tr>
				<tr>
                    <td> 后台一键添加黑白名单</td>
                </tr>
                
                <tr class="active">
                    <td>
						<a href="#userjs" data-toggle="modal" class="btn btn-effect-ripple  btn-info"><i class="fa fa-th-list"></i><span class="btn-ripple animate" style="height: 100px; width: 100px; top: -34.4px; left: 2.58749px;"></span> 功能介绍</a>
                        <a href="user/reg.php" target="_blank" class="btn btn-effect-ripple  btn-danger"><i class="fa fa-arrow-right"></i> 马上加入</a>
                        <a href="user/" target="_blank" class="btn btn-effect-ripple btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-arrow-right"></i><span class="btn-ripple animate" style="height: 100px; width: 100px; top: -34.4px; left: 2.58749px;"></span> 站长后台</a>
                       
                    </td>
                </tr>
            </tbody>
        </table>
    </table>
        
                </div>
          
                <!--开通分站-->
                
                
              <!--版本介绍-->
<div class="modal fade" align="left" id="userjs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title" id="myModalLabel">版本介绍</h4>
		</div>
		<div class="block">
            <div class="table-responsive">
                <table class="table table-borderless table-vcenter">
                    <thead>
                        <tr>
                            <th style="width: 100px;">功能</th>
                            <th class="text-center" style="width: 20px;">普及版/专业版</th>
                        </tr>
                    </thead>
					<tbody>
						<tr class="active">
                            <td>专属防红平台</td>
                            <td class="text-center">
								<span class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-check"></i></span>
							</td>
                        </tr>
    
						<tr class="success">
                            <td>专属网站域名</td>
                            <td class="text-center">
								<span class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-check"></i></span>
							</td>
                        </tr>

						<tr class="info">
                            <td>赚取下级分站提成</td>
                            <td class="text-center">
								<span class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-close"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-check"></i></span>
							</td>
                        </tr>
						<tr class="">
                            <td>专属防红接口</td>
                            <td class="text-center">
								<span class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-check"></i></span>
							</td>
                        </tr>

						<tr class="">
                            <td>添加黑白名单</td>
                            <td class="text-center">
								<span class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-check"></i></span>
							</td>
                        </tr>
						<tr class="">
                            <td>搭建下级分站</td>
                            <td class="text-center">
								<span class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-close"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-check"></i></span>
							</td>
                        </tr>
						
                    </tbody>
                </table>
            </div>
				<center style="color: #b2b2b2;"><small><em>* 自己的能力决定着你的收入！</em></small></center>
        </div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
		</div>
    </div>
  </div>
</div>
<!--版本介绍-->

		
<!--统计-->
    <div class="tab-pane" id="Substation">
    
			<table class="table table-bordered">
<tbody>
<tr>
<td align="center">
<font size="2"><?php echo $sczs?> 条<br><font color="#65b1c9"><i class="fa fa fa-random fa-2x"></i></font><br>生成总数</font></td>
<td align="center"><font size="2"><?php echo $numrows?> 个<br><font color="#65b1c9"><i class="fa fa-plus-square fa-2x"></i></font><br>黑白名单</font></td>
<td align="center"><font size="2"><?PHP echo PHP_OS; ?><br><font color="#65b1c9"><i class="fa fa-tachometer fa-2x"></i></font><br>操作系统</font></td>
</tr>
<tr>
<td align="center"><font size="2"><?php echo $ymzs?> 条<br><font color="#65b1c9"><i class="fa fa-sitemap fa-2x"></i></font><br>接口总数</font></td>
<td align="center"><font size="2"><?php echo $numrow?> 次<br><font color="#65b1c9"><i class="fa fa-pie-chart fa-2x"></i></font><br>总共请求</font></td>
<td align="center"><font size="2"><?php echo count($tongji)?> 人<br><font color="#65b1c9"><i class="fa fa-line-chart fa-2x"></i></font><br>在线人数</font></td>
</tr>
</tbody>
</table>
	</div>
<!--统计-->
<!--防红源码-->
    <div class="tab-pane" id="gift">
    
    
                      <div class="block-content block-content-full clearfix">
                            <div class="text-right pull-right push-10-t">
                                <div class="font-w1000 push-5">免费提供简约版域名防红工具源码</div>
                                <div class="text-muted">默认对接本站哦！</div>
                            </div>
                            <div class="pull-left">
                                <img class="img-avatar"
                                     src="http://q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $conf['kfqq']; ?>&spec=100">
                            </div>
                        </div>
                    <div class="block-content block-content-mini block-content-full bg-gray-lighter text-center">
                        <center>
                            <a href="/" class="btn btn-danger"><i class="fa fa-download fa-fw"></i> 跳转版源码</a>
                            <div class="btn-group">
                                <a href="/" class="btn btn-info"><i class="fa fa-cloud-download"></i> 直链版源码</a>
                            </div>
                        </center>
                    </div>
	<div class="widget-content">
		<div class="row text-center">
			<div class="col-xs-4">
				<h10 class="widget-heading"><small>程序版本</small><br>V1.1.5</h10>
			</div>
			<div class="col-xs-4">
				<h10 class="widget-heading"><small>程序大小</small><br>2.78KB</h10>
			</div>
			<div class="col-xs-4">
				<h10 class="widget-heading"><small>更新时间</small><br>19.08.27</h10>
			</div>
		</div>
	</div>
</div>
      
      
<!--防红源码-->



<!--接口文档-->
    <div class="tab-pane" id="jkwd">
    
    
                       <a href="javascript:void(0)" class="widget">
                        <center><br>
                            <div id="demo-acc-faq" class="panel-group accordion"><div class="panel panel-trans pad-top"><a href="#demo-acc-faq1" class="text-semibold text-lg text-main collapsed" data-toggle="collapse" data-parent="#demo-acc-faq" aria-expanded="false">彩虹代刷接口</a><div id="demo-acc-faq1" class="mar-ver collapse" aria-expanded="false" style="height: 0px;">跳转版：http://<?php echo $_SERVER['SERVER_NAME'];?>/dwz.php?longurl=<br>直链版：http://<?php echo $_SERVER['SERVER_NAME'];?>/zl.php?longurl=<br>直接在代刷后台-其他组件-防红接口设置-接口地址，填写此接口即可使用！
<img src="<?php echo $conf['cdn']?>template/01/H0ae3dd3c13204a2a90a024d22ead80bf4.png" width="100%" height="100%"/></div></div><div class="panel panel-trans pad-top"><a href="#demo-acc-faq2" class="text-semibold text-lg text-main collapsed" data-toggle="collapse" data-parent="#demo-acc-faq" aria-expanded="false">API返回格式</a><div id="demo-acc-faq2" class="mar-ver collapse" aria-expanded="false"><p>提交方式：POST【参数：longurl】 <br>
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

<!--接口文档-->

<!--更多按钮-->
    <div class="tab-pane" id="more">
	 
	<div class="row">
 
		<div class="col-sm-6">
            <a href="#gift" data-toggle="tab" class="widget">
               <div class="widget-content themed-background-info text-right clearfix" style="background: linear-gradient(to right,#f093fb,#f5576c);color:#fff;">
                    <div class="widget-icon pull-left">
                        <i class="fa fa-gift"></i>
                    </div>
                    <h2 class="widget-heading h3">
                        <strong> 防红源码</strong>
                    </h2>
                    <span>免费防红源码默认对接本站</span>
                </div>
            </a>
        </div>



		<div class="col-sm-6">
            <a href="#jkwd" data-toggle="tab" class="widget">
                 <div class="widget-content themed-background-success text-right clearfix" style="background: linear-gradient(to right,#f6d365,#fda085);color:#fff;">
                    <div class="widget-icon pull-left">
                        <i class="fa fa-paper-plane-o"></i>
                    </div>
                    <h2 class="widget-heading h3">
                        <strong>API接口文档</strong>
                    </h2>
                    <span>其它站点使用API调用一键对接本站</span>
                </div>
            </a>
        </div>


	</div>
	</div>
<!--更多按钮-->


    </div>
</div>





<!--底部排版-->
<div class="panel panel-primary" <?php if($conf['bottom']==''){?>style="display:none;"<?php }?>>
  <?php echo $conf['bottom']?>
  
    </div>
<!--底部排版-->



<!--底部导航-->
<div class="panel panel-default">
  <center>
    <div class="panel-body"><b>
<font color="#C00000">本</font><font color="#B5000B">站</font><font color="#AA0016">地</font><font color="#9F0021">址</font><font color="#94002C">：</font>
<font color="red">
<script language="javascript">
host = window.location.host;
document.write(""+host)
</script>
</font>
<font color="#890037">（</font><font color="#7E0042">欢</font><font color="#73004D">迎</font><font color="#680058">收</font><font color="#5D0063"></font><font color="#52006E">藏</font><font color="#470079">）</font></b><br><span style="font-weight:bold"><font color="#C00000">C</font><font color="#B5000B">o</font><font color="#AA0016">p</font><font color="#9F0021">y</font><font color="#94002C">R</font><font color="#890037">i</font><font color="#7E0042">g</font><font color="#73004D">h</font><font color="#680058">t</font><font color="#5D0063"></font> <i class="fa fa-heart text-danger"></i> <font color="#52006E">2</font><font color="#470079">0</font><font color="#3C0084">1</font><font color="#31008F">9</font><font color="#26009A"> | </font></span><a class="" href="/" data-toggle="modal"><span style="font-weight:bold"><?php echo $conf['sitename']; ?></span></a>

           
    </div>
<!--底部导航-->

</div>
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
<script src="assets/js/fhsc.js"></script>
<script src="assets/js/main.js?ver=<?php echo VERSION ?>"></script>
<link rel="stylesheet" href="./assets/css/Teacher.css">
<div id="suspension">
<div class="livechat-girl animated" style="right: -35px; bottom: 75px;">
<img class="girl" src="assets/images/a.png" oncontextmenu="return false;" ondragstart="return false;" style="border-radius: 0;">
<div class="livechat-hint rd-notice-tooltip rd-notice-type-success rd-notice-position-left single-line hide_hint">
<div class="rd-notice-content">本站共生成［<?php echo $sczs?>］次！</div>
</div>
<script type="text/javascript" src="./assets/js/Teacher.js"></script>
</body>
</html>