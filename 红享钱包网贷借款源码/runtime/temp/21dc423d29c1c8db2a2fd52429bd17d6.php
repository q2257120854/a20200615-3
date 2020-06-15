<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:50:"/www/wwwroot/qumuban.com/thinkphp/tpl/dispatch_jump.tpl";i:1544625794;}*/ ?>

<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo \think\Config::get('config.title'); ?></title>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="/static/skin/loading/styles/normalize.min.css">
    <link rel="stylesheet" href="/static/skin/loading/main.css">
    </head>
    <body class="main-background-color">

        <div class="background-images-wrapper">
            <div class="clouds"></div>
        </div>

        <div class="background-big-text-wrapper animated">
            <h1 class="main-font main-foreground-color animated">Loading..</h1>
        </div>

        <div class="elements-wrapper animated">
            <!-- Error main text -->

            <!-- background image: monster -->
            <div id="monster">
                <img id="eye1" class="eye eye-left-animation" src="/static/skin/loading/images/eye.png" alt="A monster eye">
                <img id="eye2" class="eye eye-right-animation" src="/static/skin/loading/images/eye.png" alt="A monster eye">
            </div>
        </div>
        
        <div class="background-text-wrapper animated">
            <div class="background-small-text-wrapper animated">
                <h4 class="main-font main-foreground-color animated"><?php echo(strip_tags($msg));?><br><a id="homepage-link" href="<?php echo($url);?>">页面自动 <a id="href" href="<?php echo($url);?>"></a>跳转 等待时间： <b id="wait"><?php echo($wait);?></b></a></h4>
            </div>
        </div>
        <script src="/static/skin/loading/scripts/main.js"></script>
        <script type="text/javascript">
            (function(){
                var wait = document.getElementById('wait'),
                    href = document.getElementById('href').href;
                var interval = setInterval(function(){
                    var time = --wait.innerHTML;
                    if(time <= 0) {
                        location.href = href;
                        clearInterval(interval);
                    };
                }, 1000);
            })();
        </script>
    </body>
</html>
