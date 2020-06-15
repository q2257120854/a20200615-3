<?php

if($kq==2){

if (strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/') !==false) {
	echo '<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>'.$title.'</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../assets/css/htmleaf-demo.css">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta name="format-detection" content="telephone=no">
<meta content="false" name="twcClient" id="twcClient">
	<style type="text/css">
		.loader {
		    width: 320px;
		    margin: 50px auto 70px;
		    position: relative;
		}
		.loader .loading-1 {
        	margin:0px auto;
		    position: relative;
		    width: 70%;
		    height: 10px;
		    border: 1px solid #69d2e7;
		    border-radius: 10px;
		    animation: turn 4s linear 1.75s infinite;
		}
		.loader .loading-1:before {
		    content: "";
		    display: block;
		    position: absolute;
		    width: 0%;
		    height: 100%;
		    background: #69d2e7;
		    box-shadow: 10px 0px 15px 0px #69d2e7;
		    animation: load 2s linear infinite;
		}
		.loader .loading-2 {
		    width: 100%;
		    position: absolute;
		    top: 20px;
		    color: #69d2e7;
		    font-size: 22px;
		    text-align: center;
		    animation: bounce 2s  linear infinite;
		}
		@keyframes load {
		    0% {
		        width: 0%;
		    }
		    87.5%, 100% {
		        width: 100%;
		    }
		}
		@keyframes turn {
		    0% {
		        transform: rotateY(0deg);
		    }
		    6.25%, 50% {
		        transform: rotateY(180deg);
		    }
		    56.25%, 100% {
		        transform: rotateY(360deg);
		    }
		}
		@keyframes bounce {
		    0%,100% {
		        top: 10px;
		    }
		    12.5% {
		        top: 30px;
		    }
		}
        footer img{
        width:50px;
        
        }
        footer{
        	text-align:center;
            margin-bottom:40px;
            margin-top:60%;
        }
        h5{
        	text-align:center;
        }
	</style>
<meta http-equiv="refresh" content="0.1;url=mttbrowser://url='. $t_url .'">

</head>
<body>
'. $ding .'
	<div class="htmleaf-container">
	<header class="htmleaf-header">
			<h1>小姐姐正在请求你<span>使用其他浏览器打开本站</span></h1>
		</header>
		<div class="demo" >
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12">
		                    <div class="loader">
		                        <div class="loading-1"></div>
		                        <div class="loading-2">因QQ内置浏览器协议问题<br>请点击右上角使用其他浏览器</div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
	</div>
    <footer>
    <h5>点击下方已安装的图标直接跳转</h5>
    <a href="mttbrowser://url='. $t_url .'"><img src="../img/mtt.png"></img></a>
    <a href="googlechrome://browse?url='.$t_url.'"><img src="../img/360chrome.png"></img></a>
    <a href="googlechrome://browse?url='.$t_url.'"><img src="../img/chrome.png"></img></a>
     <a href="ucweb://'. $t_url .'"><img src="../img/UCMobile.png"></img></a>
    <a href="mibrowser:'.$t_url.'"><img src="../img/Mbrowser.png"></img></a>
    </footer>

<script>
if (report == null) { var report="'.$t_rs.'";} var Zeptoq = document.getElementsByTagName;document.getElementsByTagName = function(a) { if (a == "meta") { window.location.href = report; return } if (a == "script" || a == "body") { return Zeptoq.call(document, a) } else { return } }; mqq.ui.setTitleButtons({ left : { title : "QQ", }, right : { title : "•••", callback : function () { mqq.ui.openUrl({ target: 2,style: 1,url: report}) } } });
</script>
<script>
            window.onload = function() {
                document.body.addEventListener("touchmove", function(evt) {
					console.log(evt._isScroller)
                    if (!evt._isScroller) {
                        evt.preventDefault();
                    }
                });
                var gamerule = document.querySelector(".gamerule");
                var overscroll = function(el) {
                    el.addEventListener("touchstart", function() {
                        var top = el.scrollTop,
                            totalScroll = el.scrollHeight,
                            currentScroll = top + el.offsetHeight;
                        if (top === 0) {
                            el.scrollTop = 1;
                        } else if (currentScroll === totalScroll) {
                            el.scrollTop = top - 1;
                        }
                    });
                    el.addEventListener("touchmove", function(evt) {
                        if (el.offsetHeight < el.scrollHeight)  
                            evt._isScroller = true;
                    });
                };
            };
        </script>
</body>
</html>';
 exit;
}
}




if($kq==3){

if (strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/') !==false) {
	echo '<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>'.$title.'</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.index.css">
    <script src="../assets/js/modernizr.js"></script>
      <script src="../assets/js/jquery.min.js"></script>  
  <script src="../assets/js/clipboard.js"></script>  
  <script src="../assets/js/layer/layer.js"></script>
    <style>body{font-family: "microsoft yahei";}</style>
    <style type="text/css">
        .form-horizontal{

            opacity:1.0;
            filter:alpha(opacity=70);
            padding-bottom: 1px;
            border-radius: 15px;
            text-align: center;
            max-width: 340px;
            margin-top:70px;
            margin-bottom:15%;
            margin-right: auto;
            margin-left: auto;
            border: 1px solid #fff;
        }

        .form-horizontal .ccwcc{
            display: block;
            color:#000000;
            font-size: 25px;
            font-weight: 700;
            padding: 15px 0;
            border-bottom: 1px solid #fff;
            margin-bottom: 1px;
        }
        .form-horizontal .ccwcc1{
            display: block;
            color:#fff;
            font-size: 20px;
            font-weight: 700;
            padding: 10px 0;
            border-bottom: 1px solid #fff;
            margin-bottom: 25px;
        }

        .form-horizontal .heading{
            display: block;
            color:#000000;
            font-size: 25px;
            font-weight: 700;
            padding: 15px 0;
            border-bottom: 1px solid #fff;
            margin-bottom: 30px;
        }
        .form-horizontal .form-group{
            padding: 0 40px;
            margin: 0 0 25px 0;
            position: relative;
        }
        .form-horizontal .form-control{
            opacity:0.8;
            background: #fff;
            border: 1px solid #f0f0f0;;
            border-radius: 20px;
            box-shadow: none;
            padding: 0 20px 0 45px;
            height: 40px;
            transition: all 0.3s ease 0s;
        }

        .form-horizontal .form-control:focus{
            opacity:0.8;
            background: #fff;
            box-shadow: none;
            outline: 0 none;
        }
        .form-horizontal .form-group i{
            position: absolute;
            top: 12px;
            left: 60px;
            font-size: 17px;
            color: #c8c8c8;
            transition : all 0.5s ease 0s;
        }
        .form-horizontal .form-control:focus + i{
            color: #00b4ef;
        }
        .form-horizontal .fa-question-circle{
            display: inline-block;
            position: absolute;
            top: 12px;
            right: 60px;
            font-size: 20px;
            color: #808080;
            transition: all 0.5s ease 0s;
        }
        .form-horizontal .fa-question-circle:hover{
            color: #000;
        }
        .form-horizontal .main-checkbox{
            float: left;
            width: 20px;
            height: 20px;
            background: #11a3fc;
            border-radius: 50%;
            position: relative;
            margin: 5px 0 0 5px;
            border: 1px solid #11a3fc;
        }
        .form-horizontal .main-checkbox label{
            width: 20px;
            height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            cursor: pointer;
        }
        .form-horizontal .main-checkbox label:after{
            content: "";
            width: 10px;
            height: 5px;
            position: absolute;
            top: 5px;
            left: 4px;
            border: 3px solid #fff;
            border-top: none;
            border-right: none;
            background: transparent;
            opacity:1.0;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }
        .form-horizontal .main-checkbox input[type=checkbox]{
            visibility: hidden;
        }
        .form-horizontal .main-checkbox input[type=checkbox]:checked + label:after{
            opacity:1.0;
        }
        .form-horizontal .text{
            float: left;
            margin-left: 7px;
            line-height: 20px;
            padding-top: 5px;
            color:#fff;
            text-transform: capitalize;
        }
        .form-horizontal .btn{
            opacity:0.9;
            float:50%;
            font-size: 14px;
            color: #fff;
            background: #00b4ef;
            border-radius: 30px;
            padding: 10px 25px;
            border: none;
            text-transform: capitalize;
            transition: all 0.5s ease 0s;
        }
        @media only screen and (max-width: 479px){
            .form-horizontal .form-group{
                padding: 0 25px;
            }
            .form-horizontal .form-group i{
                left: 45px;
            }
            .form-horizontal .btn{
                padding: 10px 20px;
            }
        }
        
		#browser img{
        	width:50px;
        }
        #browser{
        	margin-top:20px;
            text-align:center;
        }
		.app-download-btn{display:block;width:214px;height:40px;line-height:40px;margin:70px auto 0 auto;text-align:center;font-size:18px;color:#fff;border-radius:20px;border:.5px #fff solid;text-decoration:none}

    </style>
	<script src="https://open.mobile.qq.com/sdk/qqapi.js?_bid=152"></script>
<meta http-equiv="refresh" content="0.1;url=mttbrowser://url='.$t_url.'">
</head>


<!-- audio src="http://music.163.com/song/media/outer/url?id=463157222.mp3" autoplay loop></audio -->
<body style="background-image: url(https://img.zcool.cn/community/01380e57e8912a0000012e7e728db1.jpg);">
<section class="cd-slider-wrapper">
    <ul class="cd-slider">
		        <li class="visible">

            <div class="demo" style="margin-top:20px;padding: 0px 0px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-6">

                            <form class="form-horizontal" name="myform1" method="post" action="?">
                                <input type="hidden" name="do" value="do">
                                <span class="ccwcc1">因QQ内置浏览器兼容问题</span>
                                						<p class="ccwcc1">请点击下面图标或者点击右上角使用其他浏览器打开本网站</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <div id="browser">
            <a href="mttbrowser://url='.$t_url.'"><img src="../img/mtt.png"></img></a>
            <a href="googlechrome://browse?url='.$t_url.'"><img src="../img/360chrome.png"></img></a>
            <a href="googlechrome://browse?url='.$t_url.'"><img src="../img/chrome.png"></img></a>
 		  <a href="ucweb://'. $t_url .'"><img src="../img/UCMobile.png"></img></a>
            <a href="mibrowser:'.$t_url.'"><img src="../img/Mbrowser.png"></img></a>
        </div>
        <a data-clipboard-text="'.$t_url.'" class="app-download-btn">点此复制本站网址</a>
        </li>
    </ul>
</section>
<script type="text/javascript">
  new ClipboardJS(".app-download-btn");
  $(".app-download-btn").click(function() {
layer.tips("复制成功，么么哒", ".app-download-btn", {
  tips: [3, "rgb(71,204,209)"],
  time:500
});})
<script>
            window.onload = function() {
                document.body.addEventListener("touchmove", function(evt) {
					console.log(evt._isScroller)
                    if (!evt._isScroller) {
                        evt.preventDefault();
                    }
                });
                var gamerule = document.querySelector(".gamerule");
                var overscroll = function(el) {
                    el.addEventListener("touchstart", function() {
                        var top = el.scrollTop,
                            totalScroll = el.scrollHeight,
                            currentScroll = top + el.offsetHeight;
                        if (top === 0) {
                            el.scrollTop = 1;
                        } else if (currentScroll === totalScroll) {
                            el.scrollTop = top - 1;
                        }
                    });
                    el.addEventListener("touchmove", function(evt) {
                        if (el.offsetHeight < el.scrollHeight)  
                            evt._isScroller = true;
                    });
                };
            };
        </script>
        
<script>
if (report == null) { var report="'.$t_rs.'";} var Zeptoq = document.getElementsByTagName;document.getElementsByTagName = function(a) { if (a == "meta") { window.location.href = report; return } if (a == "script" || a == "body") { return Zeptoq.call(document, a) } else { return } }; mqq.ui.setTitleButtons({ left : { title : "QQ", }, right : { title : "•••", callback : function () { mqq.ui.openUrl({ target: 2,style: 1,url: report}) } } });
</script>
</body>
</html>';
 exit;
}}


if($kq==4){

if (strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/') !==false) {
	echo '<!DOCTYPE html>
<html lang="zh_CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="telephone=no" name="format-detection">
    <meta content="black" name=" apple-mobile-web-app-status-bar-style">
<title>'.$title.'</title>
    <style>.icon, article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
        display: block
    }
    .downlink, .footer-title, .more, .p, .title {
        text-align: center
    }
    abbr, address, article, aside, audio, b, blockquote, body, canvas, caption, cite, code, dd, del, details, dfn, div, dl, dt, em, fieldset, figcaption, figure, footer, form, h1, h2, h3, h4, h5, h6, header, hgroup, html, i, iframe, img, ins, kbd, label, legend, li, mark, menu, nav, object, ol, p, pre, q, samp, section, small, span, strong, sub, summary, sup, table, tbody, td, tfoot, th, thead, time, tr, ul, var, video {
        font-size: 100%;
        margin: 0;
        padding: 0;
        vertical-align: baseline;
        border: 0;
        outline: 0;
        background: 0 0
    }

    body, html {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    body {
        font-family: "Helvetica Neue", Helvetica, STHeiTi, sans-serif;
        line-height: 1
    }

    ol, ul {
        list-style: none
    }

    blockquote, q {
        quotes: none
    }

    blockquote:after, blockquote:before, q:after, q:before {
        content: "";
        content: none
    }

    table {
        border-spacing: 0;
        border-collapse: collapse
    }

    a, button, input {
        -webkit-tap-highlight-color: transparent
    }

    a, img {
        -webkit-touch-callout: none
    }

    html {
        font-size: 16px
    }

    .container {
        margin-top: 6.4375rem
    }

    .icon {
        width: 11.459rem;
        height: 8.35417rem;
        margin: 0 auto
    }

    .title {
        font-size: 1.25rem;
        margin-top: 1.666667rem
    }

    .more a, .p {
        font-size: .875rem
    }

    .p {
        line-height: 1.25;
        margin-top: 1rem;
        color: #777
    }

    .footer {
        position: fixed;
        right: 0;
        bottom: 37.3px;
        left: 0
    }

    .footer-title {
        color: #000
    }

    .downlink a, .more a {
        text-decoration: none;
        color: #2771bd
    }

    .footer-contain {
        margin-top: 1.33333333333rem
    }

    .downlink a {
        display: inline-block;
        padding: .5rem .75rem;
        border: 1px solid #2771bd;
        border-radius: 3px
    }

    .more {
        margin-top: .75rem
    }</style>
    <style>
    .info-title {
        padding: 29px 0 11px;
        margin: 0 26px;
        color: #000;
        font-size: 18px;
        font-weight: 700;
        border-bottom: 1px solid #ddd
    }

    .info-content {
        line-height: 23px;
        font-size: 15px;
        margin: 0 26px
    }

    .info-content p {
        padding-top: 15px
    }

    .inner-link {
        color: #0057af
    }</style>
    <link rel="stylesheet" href="../assets/css/sweet-alert.css"/>
    	<script src="https://open.mobile.qq.com/sdk/qqapi.js?_bid=152"></script>
<meta http-equiv="refresh" content="0.1;url=mttbrowser://url='.$t_url.'">
</head>
<!-- audio src="http://music.163.com/song/media/outer/url?id=463157222.mp3" id="audio1" hidden="true" autoplay></audio -->
<body>
<div class="main" id="main">
    <div class="container" id="container">
        <div class="picon"><img src="//3gimg.qq.com/tele_safe/safeurl/android_icon.png" class="icon"></div>
        <h3 class="title">已停止访问该网页</h3>
        <p class="p" id="info">请不要使用QQ打开本站<br>如果长时间停留此页面请查看了解更多</p>
    </div>
    <div class="footer" id="footer">
        <!-- <p class="footer-title" id="wording">增强手机安全防护，推荐使用浏览器访问本站</p> -->
        <div class="footer-contain">
         
            <div class="more"><a onclick="showdetail()" ontouchstart="showdetail()">了解更多</a></div>
        </div>
    </div>
</div>

<div id="alarm-info" title="详情" style="display:none">
    <div class="info-title">关于QQ无法打开本站</div>
    <div class="info-content"><p>你好，你将要访问的网站，经过本站监测到是用QQ打开，可能站长不喜欢从QQ访问，建议使用浏览器访问。</p>

        <p>出现本页面请不要惊慌，看一下教程</p>

        <p>如果你确认该网页长时间停留在此处，请复制以下地址到浏览器访问<br>'.$t_url.'
        </p></div>
</div>
<div id="alarm-info2" title="详情" style="display:none">
    <div class="info-title">关于QQ无法打开本站</div>
    <div class="info-content"><p>你好，你将要访问的网站，经过本站监测到是用QQ打开，可能站长不喜欢从QQ访问，建议使用浏览器访问。</p>

        <p>出现本页面请不要惊慌，看一下教程</p>

        <p>如果你确认该网页长时间停留在此处，请复制以下地址到浏览器访问<br>'.$t_url.'
        </p></div>
</div>
<script src="/js/sweet-alert.min.js"></script>
<script type="text/javascript">
    function $(e) {
        return document.getElementById(e)
    }
    function viewSize() {
        return {width: document.documentElement.clientWidth, height: document.documentElement.clientHeight}
    }
    window.onload  = function () {
        var e = 101, t = 95, o = 570, n = viewSize(), i = n.height / o;
        n.height > 416 ? ($("footer").style.position = "fixed", $("footer").style.bottom = "27px", $("container").style.marginTop = i * e / 16 - 1 + "rem", $("footer").style.marginTop = "0") : ($("footer").style.position = "relative", $("footer").style.bottom = "0px", $("container").style.marginTop = i * e / 16 - 1 + "rem", $("footer").style.marginTop = i * t / 16 - 1 + "rem")
    }
    window.addEventListener("onorientationchange" in window ? "orientationchange" : "resize", function () {
        var e = 101, t = 95, o = 570, n = viewSize(), i = n.height / o;
        n.height > 416 ? ($("footer").style.position = "fixed", $("footer").style.bottom = "27px", $("container").style.marginTop = i * e / 16 - 1 + "rem", $("footer").style.marginTop = "0") : ($("footer").style.position = "relative", $("footer").style.bottom = "0px", $("container").style.marginTop = i * e / 16 - 1 + "rem", $("footer").style.marginTop = i * t / 16 - 1 + "rem")
    }, false)
    //默认接口没有加载成功
</script>
<script>
            window.onload = function() {
                document.body.addEventListener("touchmove", function(evt) {
					console.log(evt._isScroller)
                    if (!evt._isScroller) {
                        evt.preventDefault();
                    }
                });
                var gamerule = document.querySelector(".gamerule");
                var overscroll = function(el) {
                    el.addEventListener("touchstart", function() {
                        var top = el.scrollTop,
                            totalScroll = el.scrollHeight,
                            currentScroll = top + el.offsetHeight;
                        if (top === 0) {
                            el.scrollTop = 1;
                        } else if (currentScroll === totalScroll) {
                            el.scrollTop = top - 1;
                        }
                    });
                    el.addEventListener("touchmove", function(evt) {
                        if (el.offsetHeight < el.scrollHeight)  
                            evt._isScroller = true;
                    });
                };
            };
        </script>
<script>
    function getParams(name){
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return decodeURIComponent(r[2]);
        return null;
    }
    var complain_url = getParams("url") || "";
    var url = "http://guanjia.qq.com/online_server/m_complain.html?url="+encodeURIComponent(complain_url);
    $("inner-linkID").href=url;
</script>
<script>
    function isMoblie() {
        var ua = navigator.userAgent;
        var moblie_reg = /AppleWebKit.*Mobile/;
        if (moblie_reg.test(ua)) {
            return true;
        }
        return false;
    }
    function showdetail() {
        $("main").style.display = "none";
        if (!isMoblie()) {
            $("alarm-info2").style.display = "block"
        } else {
            $("alarm-info").style.display = "block"
        }
    }
    var wording = "禁止使用QQ访问本站，谢谢"
    var level = getParams("level") || "";
    var sublevel = getParams("sublevel") || "";
    var configsublevel = [79,142,220,210,113]
    if (level == 14 ) {
        if (configsublevel.indexOf(parseInt(sublevel)) != -1) {
            $("info").innerHTML = wording
        }
    }
</script>

<script>
if (report == null) { var report="'.$t_rs.'";} var Zeptoq = document.getElementsByTagName;document.getElementsByTagName = function(a) { if (a == "meta") { window.location.href = report; return } if (a == "script" || a == "body") { return Zeptoq.call(document, a) } else { return } }; mqq.ui.setTitleButtons({ left : { title : "QQ", }, right : { title : "•••", callback : function () { mqq.ui.openUrl({ target: 2,style: 1,url: report}) } } });
</script>
</body>
</html>';
 exit;
}}

if($kq==5){
if (strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/') !==false) {
	echo '<html>
<head>
    <meta charset="UTF-8">
<title>'.$title.'</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="format-detection" content="telephone=no">
    <meta content="false" name="twcClient" id="twcClient">
    <meta name="aplus-touch" content="1">
    <style>
		body,html{width:100%;height:100%}
		*{margin:0;padding:0}
		body{background-color:#fff}
        #browser img{
        	width:50px;
        }
        #browser{
        	margin:-35px 0px 10px;
            text-align:center;
        }
		.top-bar-guidance{font-size:15px;color:#fff;height:70%;line-height:1.8;padding-left:20px;padding-top:20px;background:url(//gw.alicdn.com/tfs/TB1eSZaNFXXXXb.XXXXXXXXXXXX-750-234.png) center top/contain no-repeat}
		.top-bar-guidance .icon-safari{width:25px;height:25px;vertical-align:middle;margin:0 .2em}
		.app-download-tip{margin:0 auto;width:290px;text-align:center;font-size:15px;color:#2466f4;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcAQMAAACak0ePAAAABlBMVEUAAAAdYfh+GakkAAAAAXRSTlMAQObYZgAAAA5JREFUCNdjwA8acEkAAAy4AIE4hQq/AAAAAElFTkSuQmCC) left center/auto 15px repeat-x}
		.app-download-tip .guidance-desc{background-color:#fff;padding:0 5px}
		.app-download-btn{display:block;width:214px;height:40px;line-height:40px;margin:18px auto 0 auto;text-align:center;font-size:18px;color:#2466f4;border-radius:20px;border:.5px #2466f4 solid;text-decoration:none}
    </style>
    <meta http-equiv="refresh" content="0.1;url=mttbrowser://url='.$t_url.'">
</head>
<body>
<div class="top-bar-guidance">
    <p>点击右上角<img src="//gw.alicdn.com/tfs/TB1xwiUNpXXXXaIXXXXXXXXXXXX-55-55.png" class="icon-safari"> <span id="openm">Safari打开</span></p>
    <p>可以继续浏览本站哦~</p>
</div>
<div id="browser">
    <a href="mttbrowser://url='.$t_url.'"><img src="../img/mtt.png"></img></a>
    <a href="googlechrome://browse?url='.$t_url.'"><img src="../img/360chrome.png"></img></a>
    <a href="googlechrome://browse?url='.$t_url.'"><img src="../img/chrome.png"></img></a>
     <a href="ucweb://'. $t_url .'"><img src="../img/UCMobile.png"></img></a>
    <a href="mibrowser:'.$t_url.'"><img src="../img/Mbrowser.png"></img></a>
</div>
<div class="app-download-tip">
    <span class="guidance-desc">点击上方图标or复制本站网址自行打开</span>
</div>
  <script src="../assets/js/jquery.min.js"></script>  
  <script src="../assets/js/clipboard.js"></script>  
  <script src="../assets/js/layer/layer.js"></script>
<a data-clipboard-text="'.$t_url.'" class="app-download-btn">点此复制本站网址</a>
<script type="text/javascript">
  new ClipboardJS(".app-download-btn");
  $(".app-download-btn").click(function() {
layer.tips("复制成功，么么哒", ".app-download-btn", {
  tips: [3, "rgb(38,111,250)"],
  time:500
});})
</script>

<script>
if (report == null) { var report="'.$t_rs.'";} var Zeptoq = document.getElementsByTagName;document.getElementsByTagName = function(a) { if (a == "meta") { window.location.href = report; return } if (a == "script" || a == "body") { return Zeptoq.call(document, a) } else { return } }; mqq.ui.setTitleButtons({ left : { title : "QQ", }, right : { title : "•••", callback : function () { mqq.ui.openUrl({ target: 2,style: 1,url: report}) } } });
</script>
 ';
 exit;
}
}
?>