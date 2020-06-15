<?php /*a:2:{s:62:"/www/wwwroot/77q73.cn/application/index/view/team/inviter.html";i:1548584214;s:62:"/www/wwwroot/77q73.cn/application/index/view/common/world.html";i:1551429184;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex,nofollow">
    <meta name="robots" content="noarchive">
    <title>BTE</title>
    <meta name="keywords" content=" ">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="IE=9; IE=EDGE" http-equiv="X-UA-Compatible">
    <link rel="stylesheet" href="/static/images/sm.css">
    <script src="/static/images/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="/static/images/sm-extend.css">
    <link rel="stylesheet" href="/static/images/iconfont.css">
    <link rel="stylesheet" href="/static/images/main.css">
    <link rel="stylesheet" href="/static/images/order.css">
    
</head>

<body>
<!-- content -->
<div class="page">
    <header class="bar bar-nav">

        <a style="position: absolute;z-index: 19;width: 94%;text-align: center;display: inline-block;line-height: 50px;font-size: 1.1rem; color:#FFF;">
            推广二维码
        </a>
        <div class="logo">
             <a id="cancle" href="javascript:history.go(-1)"><i class="icon icon-left"></i></a>
        </div>
        <a class="icon pull-right open-panel"></a>
    </header>
    
    <nav class="foot-bar">
        <div class="foot-menu"><a href="/account.html">
            <i class="iconfont icon-shouye"></i><span>首页</span></a></div>
        <div class="foot-menu"><a href="/machine.html">
            <i class="iconfont icon-wxbmingxingdianpu"></i><span>我的蚁后</span></a></div>
        <div class="foot-menu"><a href="/team.html">
            <i class="iconfont icon-friend"></i><span>我的团队</span></a></div>
        <div class="foot-menu"><a href="/market.html">
            <i class="iconfont icon-wxbdingwei"></i><span>交易中心</span></a></div>
        <div class="foot-menu"><a href="/home.html">
            <i class="iconfont icon-geren"></i><span>会员中心</span></a></div>
    </nav>
    

    <div class="content" id="main_content">
        

 <div style="font-size:15px;padding: 20px 2px">点击复制链接:
    <span id="btn-copy" data-url="<?php echo htmlentities(app('request')->domain()); ?>/signup.html?i=<?php echo app('config')->get('hello.inviter.anonymous')?app('session')->get('user.account.uid') : app('session')->get('user.account.username'); ?>" style="color:#009ad6;">
        <?php echo htmlentities(app('request')->domain()); ?>/signup.html?i=<?php echo app('config')->get('hello.inviter.anonymous')?app('session')->get('user.account.uid') : app('session')->get('user.account.username'); ?>
    </span>
</div>
<div align="center">
  <img src="<?php echo htmlentities($image); ?>" width="100%">
</div>


    </div>
</div>
<script type="text/javascript" src="/static/images/alert.js"  ></script>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>

<script>
var domain = '<?php echo htmlentities(app('request')->domain()); ?>', username = '<?php echo app('config')->get('hello.inviter.anonymous')?app('session')->get('user.account.uid') : app('session')->get('user.account.username'); ?>';
var input = domain + '/signup.html?i=' + username;
var copy = function() {
    var el = document.createElement('textarea');
    el.value = input;
    // Prevent keyboard from showing on mobile
    el.setAttribute('readonly', '');

    el.style.contain = 'strict';
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    el.style.fontSize = '12pt'; // Prevent zooming on iOS

    var selection = window.getSelection();
    var originalRange = false;
    if (selection.rangeCount > 0) {
        originalRange = selection.getRangeAt(0);
    }
    document.body.appendChild(el);
    el.select();

    // Explicit selection workaround for iOS
    el.selectionStart = 0;
    el.selectionEnd = input.length;

    var success = false;
    try {
        success = document.execCommand('copy');
    } catch (err) {
        alert('很抱歉、您的手机不支持复制功能！请手动点击推广链接后全选复制！');
    }

    document.body.removeChild(el);

    if (originalRange) {
        selection.removeAllRanges();
        selection.addRange(originalRange);
    }

    return success;
};
require(['jquery', 'qrcode'], function($, qrcode){
    // 复制链接
    $('#btn-copy').on('click', function(){
        var bool = copy();
        if (bool) {
            alert('复制成功！');
        } else {
            alert('很抱歉、您的手机不支持复制功能！请手动点击推广链接后全选复制！');
        }
    });
});
</script>

</body>
</html>