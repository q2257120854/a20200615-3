<?php /*a:1:{s:52:"D:\wwwroot\application\index\view\index\article.html";i:1566132242;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <link rel="stylesheet" href="/static/css/sm.css">
    <script src="/static/js/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="/static/css/sm-extend.css">
    <link rel="stylesheet" href="/static/css/iconfont.css">
    <link rel="stylesheet" href="/static/css/main.css">
    <link rel="stylesheet" href="/static/css/order.css">
</head>
<body style="">

<div class="page">

    <!-- 标题栏 -->
    <header class="bar bar-nav" style="background-color: #323663;">

        <a style="position: absolute;z-index: 19;width: 94%;text-align: center;display: inline-block;line-height: 50px;font-size: 1.1rem; color:#FFF;">公告详细</a>
        <div class="logo">
            <a id="cancle" href="javascript:history.go(-1)"><i class="icon icon-left"></i></a></div>
        <a class="icon pull-right open-panel"></a>
    </header>
    <script type="text/javascript" src="/static/js/alert.js"></script>
    
    <div class="content" id="main_content">
        <style type="text/css">
            body {
            background: #FFF;
            }
        </style>
        <div class="buttons-tab"></div>
        <div class="card-header" style="background:#FFF; text-align:center; font-size:16px;"><?php echo htmlentities($article['title']); ?>-<?php echo htmlentities($article['date']); ?>
        </div>
        <div class=" news-content" style="font-size:12px;">
            <?php echo $article['content']; ?>
        </div>
    </div>
</div>
</body>
</html>