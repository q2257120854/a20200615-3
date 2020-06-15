<?php /*a:2:{s:73:"D:\phpstudy\PHPTutorial\WWW\demo\application\index\view\team\inviter.html";i:1561361111;s:73:"D:\phpstudy\PHPTutorial\WWW\demo\application\index\view\common\world.html";i:1555433041;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex,nofollow">
    <meta name="robots" content="noarchive">
    <title><?php echo htmlentities(app('config')->get('hello.title')); ?></title>
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
  <style>
    .foot-menu img{
        width: 30%;
        height: 30%;
        margin: 0 auto;
    }
    .foot-menu span{
       color:#4f528c;
    }
    .foot-menu .active{
      color: #53acff;
    }
    .foot-bar{
    	background: #323663;
    }
  </style>
    
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
           <img src="/static/42/images/shouye@<?php echo app('request')->path()=='account' || app('request')->path() == ''?'3' : '1'; ?>x.png" alt=""><span class="<?php echo app('request')->path()=='account' || app('request')->path() == ''?'active' : ''; ?>">首页</span></a></div>
        <div class="foot-menu"><a href="/machine.html">
            <img src="/static/42/images/kuangjishangcheng@<?php echo app('request')->path()=='machine'?'3' : '1'; ?>x.png" alt=""></i><span class="<?php echo app('request')->path()=='machine'?'active' : ''; ?>">我的蚁后</span></a></div>
        <div class="foot-menu"><a href="/team.html">
            <img src="/static/42/images/tuandui@<?php echo app('request')->path()=='team'?'3' : '1'; ?>x.png" alt=""><span class="<?php echo app('request')->path()=='team'?'active' : ''; ?>">我的团队</span></a></div>
        <div class="foot-menu"><a href="/market.html">
            <img src="/static/42/images/jiaoyi%20(1)@<?php echo app('request')->path()=='market'?'3' : '1'; ?>x.png" alt=""></i><span class="<?php echo app('request')->path()=='market'?'active' : ''; ?>">交易中心</span></a></div>
        <div class="foot-menu"><a href="/home.html">
            <img src="/static/42/images/wo@<?php echo app('request')->path()=='home'?'3' : '1'; ?>x.png" alt=""><span class="<?php echo app('request')->path()=='home'?'active' : ''; ?>">会员中心</span></a></div>
    </nav>
    

    <div class="content" id="main_content">
        

 <div style="font-size:15px;padding: 20px 2px">点击复制链接:
    <span id="btn-copy" data-url="<?php echo htmlentities(app('request')->domain()); ?>/signup.html?i=<?php echo app('config')->get('hello.inviter.anonymous')?app('session')->get('user.account.uid') : app('session')->get('user.account.username'); ?>" style="color:#009ad6;">
        <?php echo htmlentities(app('request')->domain()); ?>/signup.html?i=<?php echo app('config')->get('hello.inviter.anonymous')?app('session')->get('user.account.uid') : app('session')->get('user.account.username'); ?>
    </span>
</div>
  <img src='http://qr.topscan.com/api.php?text=<?php echo htmlentities(app('request')->domain()); ?>/signup.html?i=<?php echo app('config')->get('hello.inviter.anonymous')?app('session')->get('user.account.uid') : app('session')->get('user.account.username'); ?>'style="height: 200px;width: 200px;top: 500px;left: 126px;position: absolute;z-index: 2;">

<img src="/static/image/inviter.jpg" width="100%">



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