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
<link rel="stylesheet" href="template/tianlan/oneui.css">
  <link rel="stylesheet" href="template/tianlan/common.css">
          <script src="//cdn.staticfile.org/modernizr/2.8.3/modernizr.min.js"></script>
        <!--[if lt IE 9]>
        <script src="//cdn.staticfile.org/html5shiv/3.7.3/html5shiv.min.js"></script>
<link rel="stylesheet" href="https://css.letvcdn.com/lc04_yinyue/2011012/19/20/00/bootstrap.min.css">
        <![endif]-->
        
        
        
  <style>body{background: linear-gradient(to bottom,	#49BDAD,#6a67c7) fixed;}</style>
</head>
<body>
<div style="padding-top:6px;">
<div class="col-xs-12 col-sm-10 col-md-8 col-lg-4 center-block" style="float: none;">

<!--公告-->
<div class="modal fade" align="left" id="anounce" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">公告</h4>
      </div>
	  <div class="modal-body">

	  <?php echo $conf['anounce']?>
	  	  	  </div>

    </div>
  </div>
 </div>
<!--公告-->
<!--弹出公告-->
<div class="modal fade" align="left" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">公告</h4>
      </div>
	  <div class="modal-body">

         	<?php echo $conf['modal']?>
	  	  	  </div>

    </div>
  </div>
 </div>
<!--弹出公告-->


<!--成功-->
<div class="modal fade" id="your-modal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-popin">
	<div class="modal-content">
		<div class="block block-themed block-transparent remove-margin-b">
			<div class="block-header bg-primary-dark">
				<ul class="block-options">
					<li>
						<button data-dismiss="modal" type="button"><i class="fa fa-times-circle"></i></button>
					</li>
				</ul>
				<h3 class="block-title">生成成功</h3>
			</div><div class="modal-body" style="text-align: center;">您的防红短网址：<b id="dwzdate"></b><br><p>请记得收藏我们的网址哦！mua~<br><img id="aimg_H2R2r" onclick="zoom(this, this.src, 0, 0, 0)" class="zoom" src="http://api.2019fafa.cn/netcard/api.php" onmouseover="img_onmouseoverfunc(this)" onload="thumbImg(this)" border="0" width="100%" alt="" initialized="true"></p></div></div>
		<div class="modal-footer">
			<button class="btn btn-sm btn-default" type="button" data-dismiss="modal">关闭</button>
		</div>
	</div>
</div>
</div>

<!--成功-->



<!--顶部导航-->
    <div class="block block-link-hover3" style="box-shadow:0px 5px 10px 0 rgba(0, 0, 0, 0.25);">
        <div class="block-content block-content-full text-center bg-image"
             style="background-image: url('template/tianlan/head3.jpg');background-size: 100% 100%;">
            <div>
                <div>
                    <img class="img-avatar img-avatar80 img-avatar-thumb" src="//q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $conf['kfqq']; ?>&spec=100">
                </div>
            </div>
        </div>
       <img width="100%" src="template/tianlan/jh3.jpg">
        <div class="block-content block-content-mini block-content-full">
            <div class="btn-group btn-group-justified">
				<div class="btn-group">
					<a class="btn btn-default" data-toggle="modal" href="#anounce"><i class="fa fa-bullhorn"></i>&nbsp;<span style="font-weight:bold">站点公告</span></a>
					</div>
					 	<a href="#customerservice" target="_blank" data-toggle="modal" class="btn btn-default"><i class="fa fa-qq"></i>&nbsp;<span style="font-weight:bold">联系站长</span></a>
			           
             </div>
        </div>
    </div>
<!--顶部导航-->



<div class="block">
<!--TAB标签-->

        <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
            <li style="width: 25%;" align="center" class="active"><a href="#shop" data-toggle="tab"><span style="font-weight:bold"><i class="fa fa-shopping-bag fa-fw"></i> 防红</span></a></li>
			<li style="width: 25%;" align="center" ><a href="#zzhu" data-toggle="tab"><span style="font-weight:bold"><font color="#ff0000"><i class="fa fa-coffee fa-fw"></i> 分站</span></font></a></li>
			<li style="width: 25%;" align="center"><a href="#more" data-toggle="tab"><span style="font-weight:bold"><i class="fa fa-folder-open"></i> 更多</span></a></li>
            <li style="width: 25%;" align="center"><a href="#htgl" data-toggle="tab" id="tab-query"><span style="font-weight:bold"><i class="fa fa-search"></i> 统计</span></a></li>
        </ul>
<!--TAB标签-->
    <div class="block-content tab-content">
<!--防红-->
    <div class="tab-pane active" id="shop">	
<?php include ("./duan.php"); ?>
                </div>
<!--防红-->


<!--防红源码-->
<div class="modal fade" id="fhym" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">防红源码</h4>
      </div>
      
	  <div class="modal-body">
	  
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
</div>
	</div>
</div>
<!--防红源码--> 

                           <!--后台管理-->
                <div class="tab-pane fade fade-up" id="htgl">




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
          
                <!--后台管理-->


          

<!--API接口-->
<div class="modal fade" id="aaaa" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">API接口文档</h4>
      </div>
      
	  <div class="modal-body">
			
			
			
			
                    <a href="javascript:void(0)" class="widget">
                        <center><br>
                            <div id="demo-acc-faq" class="panel-group accordion"><div class="panel panel-trans pad-top"><a href="#demo-acc-faq1" class="text-semibold text-lg text-main collapsed" data-toggle="collapse" data-parent="#demo-acc-faq" aria-expanded="false">彩虹代刷接口</a><div id="demo-acc-faq1" class="mar-ver collapse" aria-expanded="false" style="height: 0px;">跳转版：http://<?php echo $_SERVER['SERVER_NAME'];?>/dwz.php?longurl=<br>直链版：http://<?php echo $_SERVER['SERVER_NAME'];?>/zl.php?longurl=<br>直接在代刷后台-其他组件-防红接口设置-接口地址，填写此接口即可使用！
<img src="template/01/H0ae3dd3c13204a2a90a024d22ead80bf4.png" width="100%" height="100%"/></div></div><div class="panel panel-trans pad-top"><a href="#demo-acc-faq2" class="text-semibold text-lg text-main collapsed" data-toggle="collapse" data-parent="#demo-acc-faq" aria-expanded="false">API返回格式</a><div id="demo-acc-faq2" class="mar-ver collapse" aria-expanded="false"><p>提交方式：POST【参数：longurl】 <br>
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
		<div class="modal-footer">
			<button class="btn btn-sm btn-default" type="button" data-dismiss="modal">关闭</button>
		</div>
	</div>
</div>
</div>
<!--API接口--> 


                           <!--开通分站-->
                <div class="tab-pane fade fade-up" id="zzhu">






                       <div class="block block-link-hover2 text-center">
                    <div class="block-content block-content-full bg-success">
                        <div class="h4 font-w700 text-white push-10"><i
                                    class="fa fa-cny fa-fw"></i><strong><?php echo $conf['fenzhan_price'] ?>元</strong> /
                            <i
                                    class="fa fa-cny fa-fw"></i><strong><?php echo $conf['fenzhan_price2'] ?>元</strong>
                        </div>
                        <div class="h5 font-w300 text-white-op">普及版 / 专业版两种分站供你选择</div>
                    </div>
                    <div class="block-content">
                        <table class="table table-borderless table-condensed">
                            <tbody>
                            <tr>
                                <td>独立的防红后台</td>
                            </tr>
                            <tr>
                                <td>拥有主站一样的权限</td>
                            </tr>
                            <tr>
                                <td>一键添加黑名单白名单</td>
                            </tr>
                            <tr>
                                <td><strong>可以推广下级分站赚钱</td>
                            </tr>
                            <tr>
                                <td>分站满<?php echo $conf['tixian_min']; ?>元即可申请提现</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="block-content block-content-mini block-content-full bg-gray-lighter">
                     <a href="#userjs" data-toggle="modal" class="btn btn-success">版本介绍</a>
                    <button onclick="window.open('./user/reg.php')" class="btn btn-danger">开通分站</button>
                    </div>
                </div>
        
        
                </div>
          
                <!--开通分站-->
                
                
                 <!--版本介绍-->
    <div class="modal fade" id="userjs" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popin">
            <div class="modal-content">
                <div class="block block-themed block-transparent remove-margin-b">
                    <div class="block-header bg-primary-dark">
                        <ul class="block-options">
                            <li>
                                <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                            </li>
                        </ul>
                        <h4 class="block-title">版本介绍</h4>
                    </div>
                    <div class="modal-body">
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
                                        <span class="btn btn-effect-ripple btn-xs btn-success"><i
                                                    class="fa fa-check"></i></span>
                                        <span class="btn btn-effect-ripple btn-xs btn-success"><i
                                                    class="fa fa-check"></i></span>
                                    </td>
                                </tr>
                                <tr class="success">
                                    <td>专属网站域名</td>
                                    <td class="text-center">
                                        <span class="btn btn-effect-ripple btn-xs btn-success"><i
                                                    class="fa fa-check"></i></span>
                                        <span class="btn btn-effect-ripple btn-xs btn-success"><i
                                                    class="fa fa-check"></i></span>
                                    </td>
                                </tr>
                                <tr class="info">
                                    <td>赚取开通分站提成</td>
                                    <td class="text-center">
                                        <span class="btn btn-effect-ripple btn-xs btn-danger"><i
                                                    class="fa fa-close"></i></span>
                                        <span class="btn btn-effect-ripple btn-xs btn-success"><i
                                                    class="fa fa-check"></i></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>专属防红接口</td>
                                    <td class="text-center">
                                        <span class="btn btn-effect-ripple btn-xs btn-success"><i
                                                    class="fa fa-check"></i></span>
                                        <span class="btn btn-effect-ripple btn-xs btn-success"><i
                                                    class="fa fa-check"></i></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>搭建下级分站</td>
                                    <td class="text-center">
                                        <span class="btn btn-effect-ripple btn-xs btn-danger"><i
                                                    class="fa fa-close"></i></span>
                                        <span class="btn btn-effect-ripple btn-xs btn-success"><i
                                                    class="fa fa-check"></i></span>
                                    </td>
                                </tr>
                                <tr class="danger">
                                    <td>赠送专属精致APP</td>
                                    <td class="text-center">
                                        <span class="btn btn-effect-ripple btn-xs btn-danger"><i
                                                    class="fa fa-close"></i></span>
                                        <span class="btn btn-effect-ripple btn-xs btn-success"><i
                                                    class="fa fa-check"></i></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <center style="color: #b2b2b2;">
                            <small><em>* 分站可接广告位赚钱！</em></small>
                        </center>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>
    <!--版本介绍-->

<!--更多-->
    <div class="tab-pane fade fade-right" id="more">
			
				
					
						<div class="col-xs-6 col-sm-4 col-lg-4">
                <a class="block block-link-hover2 text-center" href="#aaaa" target="_blank" data-toggle="modal">
                  <div class="block-content block-content-full bg-warning" clearfix" style="background: linear-gradient(to right,#f10d3105,#fda085);color:#fff;">
                    <i class="fa fa-check-square-o fa-3x text-white"></i>
                    <div class="font-w1000 text-white-op push-15-t">API文档</div></div>
                </a>
              </div>
              
			  <div class="col-xs-6 col-sm-4 col-lg-4">
                <a class="block block-link-hover2 text-center" href="#fhym" target="_blank" data-toggle="modal">
                  <div class="block-content block-content-full bg-flat"  clearfix" style="background: linear-gradient(to right,#f093fb,#f55710c);color:#fff;">
                    <i class="fa fa-cloud-download fa-3x text-white"></i>
                    <div class="font-w1000 text-white-op push-15-t">防红源码</div></div>
                </a>
                
                
              </div>
                </div>
                <!--更多-->


    </div>
</div>

<!--站长-->
<div class="modal fade" align="left" id="customerservice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">联系站长</h4>
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
                  <i class="fa fa-diamond"></i>&nbsp;黑名单：<font color="#FF6347">有充分的理由即可解除黑名单！</font></font>
              </b>
      </li>
    </ul>
				   
				   
				   
				   
				   					</div>

          
				</div>
</div>
</div>
</div>
<!--站长-->


<!--底部排版-->
<div class="panel panel-primary" <?php if($conf['bottom']==''){?>style="display:none;"<?php }?>>
  <?php echo $conf['bottom']?>
  
    </div>
<!--底部排版-->

<div class="block block-content block-content-mini block-content-full">







	<!--网站日志-->
	<div class="row text-center" >
		<div class="col-xs-4">
			<h5 class="widget-heading"><small>接口总数</small><br><a href="javascript:void(0)" class="themed-color-flat"><?php echo $ymzs?> 条</a></h5>
		</div>
		<div class="col-xs-4">
			 <h5 class="widget-heading"><small>生成总数</small><br><a href="javascript:void(0)" class="themed-color-flat"><?php echo $sczs?> 条</a></h5>
		</div>
		<div class="col-xs-4">
			<h5 class="widget-heading"><small>请求总数</small><br><a href="javascript:void(0)" class="themed-color-flat"><?php echo $numrow?> 次</a></h5>
		</div>
	</div>
	<!--网站日志-->
	
	
	
	<!--底部导航-->
	<div class="block-content text-center border-t">
		<a href="javascript:void(0);" onclick="AddFavorite('冰狱防红系统',location.href)">
  <b style="text-shadow: LightSteelBlue 1px 0px 0px;">
  <i class="fa fa-heart text-danger animation-pulse"></i>
  <font color=#CB0034>本</font>
  <font color=#BE0041>站</font>
  <font color=#B1004E>网</font>
  <font color=#A4005B>址</font>
  <font color=#970068>：<?php echo $_SERVER['SERVER_NAME'];?></font>
  <font color=#2F00D0></font>
  <font color=#CB0034>&nbsp;</font>
  <font color=#CB0034>建</font>
  <font color=#BE0041>议</font>
  <font color=#B1004E>收</font>
  <font color=#A4005B>藏</font>
    <i class="fa fa-heart text-danger animation-pulse"></i>
  </b>
</a>
	</div>
	<!--底部导航-->
	</div>
</div>

	 <br> 

<!-- 收藏代码开始-->
<script>
    function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("手机用户：点击底部 “≡” 添加书签/收藏网址!\n\n电脑用户：请您按 Ctrl+D 手动收藏本网址! ");
     }
  }
}
</script>
<!-- 收藏代码结束-->


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