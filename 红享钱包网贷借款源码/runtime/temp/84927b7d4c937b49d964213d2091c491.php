<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\wwwroot\demo.52jscn.com\public/../application/index\view\user\index.html";i:1545801044;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>个人中心</title>
    <link href="/static/new/css/mui.min.css" rel="stylesheet" />
    <link href="/static/new/css/style.css" rel="stylesheet" />
    <style type="text/css">
    </style>
</head>
<body>
<header>
    <a class="mui-icon" onclick="javaScript:history.go(-1)">
        <img src="/static/new/images/head_back.png">
    </a>
    <p class="mui-text-center">个人中心</p>
   
</header>
<div class="wrap user">
    <div class="tou_top">
        <div class="touxiang">
            <img src="/static/new/images/touxiang.png" class="touxiang_img">
            <div class="us_xinxi">
                <span class="shenfen"><?php if($user['name'] == ''): ?>未实名<?php else: ?>已实名<?php endif; ?></span>
                <p class="us_name"><?php echo $user['mobile']; ?></p>
            </div>
        </div>
        <div class="mui-row us_nav_w">
            <div class="mui-col-xs-4 mui-text-center">
                <a href="<?php echo url('loan/index'); ?>" class="block_a">
                    <img src="/static/new/images/cont_ioc06.png">
                    <p class="us_nav_tit">借款记录</p>
                </a>
            </div>
            <div class="mui-col-xs-4 mui-text-center">
                <a href="<?php echo url('user/vip'); ?>" class="block_a">
                    <img src="/static/new/images/cont_ioc07.png">
                    <p class="us_nav_tit">我的会员卡</p>
                </a>
            </div>
            <div class="mui-col-xs-4 mui-text-center">
                <a href="<?php if($user['perfect'] == '1'): ?>javascript:mui.toast('您未完成认证暂时无法查看',{ duration:'long', type:'div' });<?php else: ?><?php echo url('user/bank'); endif; ?>" class="block_a">
                    <img src="/static/new/images/cont_ioc08.png">
                    <p class="us_nav_tit">我的银行卡</p>
                </a>
            </div>
        </div>
    </div>
    <div class="cont_nav">
        <ul class="cont_nav_ul">
            <li class="cont_nav_li">
                <a href="<?php echo url('user/renzheng'); ?>" class="block_a">
                    <img src="/static/new/images/cont_ioc01.png" class="nav_ioc">
                    我的认证
                </a>
            </li>
            <li class="cont_nav_li">
                <a href="<?php echo url('user/youhui'); ?>" class="block_a">
                    <img src="/static/new/images/cont_ioc02.png" class="nav_ioc">
                    优惠券
                </a>
            </li>
            <!--<li class="cont_nav_li">-->
                <!--<a href="qianbao.html" class="block_a">-->
                    <!--<img src="/static/new/images/cont_ioc09.png" class="nav_ioc">-->
                    <!--钱包-->
                <!--</a>-->
            <!--</li>-->
        </ul>
        <ul class="cont_nav_ul">
            <li class="cont_nav_li">
                <a href="<?php $config = config('config');$data = str_replace("{用户}",session('id'),$config['kfurl']);echo $data;  ?>" class="block_a">
                    <img src="/static/new/images/cont_ioc03.png" class="nav_ioc">
                    在线客服
                </a>
            </li>
            <li class="cont_nav_li">
                <a href="<?php echo url('login/findpass'); ?>" class="block_a">
                    <img src="/static/new/images/cont_ioc04.png" class="nav_ioc">
                    修改密码
                </a>
            </li>
            <li class="cont_nav_li">
                <a href="<?php echo url('index/auto'); ?>" class="block_a">
                    <img src="/static/new/images/cont_ioc05.png" class="nav_ioc">
                    关于我们
                </a>
            </li>
        </ul>
    </div>
    <div class="exit_btn">
        <button onclick="javascript:window.location.href='<?php echo url('login/lout'); ?>'">退出登录</button>
    </div>
</div>
<footer>
    <nav class="mui-bar mui-bar-tab">
        <a class="mui-tab-item" href="<?php echo url('index/index'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc01_b.png"></span>
            <span class="mui-tab-label">首页</span>
        </a>
        <a class="mui-tab-item" href="<?php echo url('loan/index'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc02_b.png"></span>
            <span class="mui-tab-label">借款</span>
        </a>
        <a class="mui-tab-item" href="<?php echo url('user/cion'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc03_b.png"></span>
            <span class="mui-tab-label">钱包</span>
        </a>
        <a class="mui-tab-item mui-active" href="<?php echo url('user/index'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc04_a.png"></span>
            <span class="mui-tab-label">我的</span>
        </a>
    </nav>
</footer>
</body>
<script src="/static/new/js/mui.min.js"></script>
<script src="/static/new/js/jquery.min.js"></script>
<script>
    mui('footer').on('tap','a',function(){document.location.href=this.href;});
</script>
</html>