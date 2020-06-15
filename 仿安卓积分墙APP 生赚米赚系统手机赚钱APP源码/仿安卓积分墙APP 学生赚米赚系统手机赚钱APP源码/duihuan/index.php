<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>APP积分墙_能赚钱的app</title>
    <meta name="Description" content="APP积分墙，一款能赚钱的APP，一款让你越来越有钱的APP。小伙伴们通过完成指定的小任务，来获得现金和实物奖励。欢迎加入APP积分墙,一起用手机赚钱。" />
    <meta name="Keywords" content="手机赚钱,赚钱APP，任务赚钱，分享赚钱，转发赚钱，挂机赚钱" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="view/default/css/invite_css.css">
	<link rel="stylesheet" href="view/default/css/invite.css">
	<script type="text/javascript" src="view/default/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="view/default/js/mobile.js"></script>
</head>
<body>
<div class="invite2get">
    <section class="1">
    	<ul class="invite-tl">
        	<li><a id="pnav_1" onClick="tab(1)" class="current">兑换列表</a></li>
            <li><a id="pnav_2" onClick="tab(2)">积分排行</a></li>
        </ul>
        <div class="scrolllist">
        	<div class="bd">
            	<ul id="pst_1" class="niu-dir">
				<?php
include("sjk.php");
$sql = mysql_query("select * from yw");
while($rows = mysql_fetch_array($sql)){
    echo '<li><span class="h-if"><b>';
	echo "ID:&nbsp;".$rows['imei']."&nbsp;兑换:&nbsp;".$rows['yw']."&nbsp;时间:&nbsp;".$rows['time']."/";
	echo '</b></span>';
	}
?>
                				
              </ul>
              <ul id="pst_2" class="niu-dir" style="display:none;">
								    <?php
include("sjk.php");
$sql = mysql_query("select * from vip");
while($rows = mysql_fetch_array($sql)){
    echo '<li><span class="h-if"><b>';
	echo "ID:&nbsp;".$rows['uid']."&nbsp;余额:&nbsp;".$rows['jf']."&nbsp;金币&nbsp;&nbsp;".$rows['shijian']."/";
	echo '</b></span>';
	}
?>
              </ul>
         </div>
     </div>
   </section>
</div>

<div class="put"></div>
<div style="display:none;">
<!---统计代码sansuib.com-三岁半资源网--->
</div>
<script>
	function getObjByClass (param){
		var tags=tags||document.getElementsByTagName('*');
		var list=[];
		for( var k in tags){
			var tag=tags[k];
			if(typeof(tag.className)!='undefined'&&tag.className.indexOf(param)>-1 )
				list.push(tag);
		}
		return list;
	}
	function create_cookie(name,value,days){
		if (days){
			var date = new Date();
			date.setTime(date.getTime()+(days*24*60*60*1000));
			var expires = "; expires="+date.toGMTString();
		}
		else var expires = "";
		document.cookie = name+"="+value+expires+"; path=/";
	}
	function tab(i){
		if(i==1){
			getObj("pst_1").style.display="block";
			getObj("pst_2").style.display="none";
			getObj("pnav_1").className="current";
			getObj("pnav_2").className="";
		}else{
			getObj("pst_2").style.display="block";
			getObj("pst_1").style.display="none";
			getObj("pnav_1").className="";
			getObj("pnav_2").className="current";
		}
	}
	function getObj(id){
		return document.getElementById(id);
	}
</script>

</body>
</html>