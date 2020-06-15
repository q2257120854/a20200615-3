<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"/www/wwwroot/m.mkuaixun09.cn/public/../application/index/view/user/renzheng.html";i:1545795802;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>认证中心</title>
    <link href="/static/new/css/mui.min.css" rel="stylesheet" />
    <link href="/static/new/css/style.css" rel="stylesheet" />
    <style type="text/css">
        body{
            background: #fff;
        }
    </style>
</head>
<body>
<header>
    <a class="mui-icon" onclick="javaScript:history.go(-1)">
        <img src="/static/new/images/head_back.png">
    </a>
    <p class="mui-text-center">认证中心</p>
   
</header>
<div class="wrap renzheng02">
    <div class="rz_top mui-row">
        <div class="mui-col-xs-6 mui-text-center">
            <p class="top_tit"></p>
            <p class="top_num"></p>
        </div>
        <div class="mui-col-xs-6 mui-text-center">
            <p class="top_tit"></p>
            <p class="top_num"></p>
        </div>
    </div>
    <div class="rz_nav_wrap">
        <p class="rz_nav_top">基础认证</p>
        <div class="">
            <ul class="rz_nav_ul mui-row">
                <li class="mui-col-xs-4 rz_nav_li mui-text-center">
                  <?php if($user['idcard'] == '0'): ?>
                    <img src="/static/new/images/weiwancheng.png" class="zt_img">
                    <a href="<?php echo url('info/idcard'); ?>?typeid=3" class="block_a">
                      <?php else: ?>
                         <img src="/static/new/images/yiwancheng.png" class="zt_img">
                    <a href="javascript:;" class="block_a">   
                      <?php endif; ?>
                        <img src="/static/new/images/rz_ioc01.png" class="rz_nav_img">
                        <p class="rz_nav_tit">实名认证</p>
                    </a>
                </li>
                <li class="mui-col-xs-4 rz_nav_li mui-text-center">
                   <?php if($user['personal'] == ''): ?>
                    <a href="<?php echo url('info/personal'); ?>" class="block_a">
                        <img src="/static/new/images/weiwancheng.png" class="zt_img">
                        <?php else: ?>
                         <img src="/static/new/images/yiwancheng.png" class="zt_img">
                    <a href="javascript:;" class="block_a">   
                      <?php endif; ?>
                        <img src="/static/new/images/rz_ioc02.png" class="rz_nav_img">
                        <p class="rz_nav_tit">个人资料</p>
                    </a>
                </li>
                           <li class="mui-col-xs-4 rz_nav_li mui-text-center">
                  <?php if($user['bankAuth'] == ''): ?>
                    <img src="/static/new/images/weiwancheng.png" class="zt_img">
                    <a href="<?php echo url('info/bank'); ?>?typeid=4" class="block_a">
                        <?php else: ?>
                         <img src="/static/new/images/yiwancheng.png" class="zt_img">
                    <a href="javascript:;" class="block_a">
                      <?php endif; ?>
                        <img src="/static/new/images/rz_ioc05.png" class="rz_nav_img">
                        <p class="rz_nav_tit">银行卡</p>
                    </a>
                </li>
             
            </ul>
            <ul class="rz_nav_ul mui-row">
                <li class="mui-col-xs-4 rz_nav_li mui-text-center">
                  <?php if($user['photoAuth'] == ''): ?>
                    <img src="/static/new/images/weiwancheng.png" class="zt_img">
                    <a href="<?php echo url('info/phtoshop'); ?>" class="block_a">
                        <?php else: ?>
                         <img src="/static/new/images/yiwancheng.png" class="zt_img">
                    <a href="javascript:;" class="block_a">   
                      <?php endif; ?>
                        <img src="/static/new/images/rz_ioc04.png" class="rz_nav_img">
                        <p class="rz_nav_tit">身份证</p>
                    </a>
                </li>
        
                    <li class="mui-col-xs-4 rz_nav_li mui-text-center">
                    <?php if($user['zhimaAuth'] == ''): ?>
                    <img src="/static/new/images/weiwancheng.png" class="zt_img">
                    <a href="<?php echo url('info/zhima'); ?>?typeid=7" class="block_a">
                        <?php else: ?>
                        <img src="/static/new/images/yiwancheng.png" class="zt_img">
                        <a href="javascript:;" class="block_a">
                            <?php endif; ?>
                        <img src="/static/new/images/rz_ioc06.png" class="rz_nav_img">
                        <p class="rz_nav_tit">芝麻分</p>
                    </a>
                </li>

            </ul>
            <ul class="rz_nav_ul mui-row">
               <p style="
    padding-left: 20px;
    padding-bottom: 2px;
    border-bottom: 1px solid #e5e5e5;
    margin-bottom: 2px;
">辅助认证</p>   <li class="mui-col-xs-4 rz_nav_li mui-text-center">
                    <?php if($user['mobileAuth'] == ''): ?>
                    <img src="/static/new/images/weiwancheng.png" class="zt_img">
                    <a href="<?php echo url('info/operator'); ?>?typeid=1" class="block_a">
                        <?php else: ?>
                         <img src="/static/new/images/yiwancheng.png" class="zt_img">
                    <a href="javascript:;" class="block_a">   
                      <?php endif; ?>
                        <img src="/static/new/images/rz_ioc03.png" class="rz_nav_img">
                        <p class="rz_nav_tit">运营商</p>
                    </a>
                </li>
         
                    <li class="mui-col-xs-4 rz_nav_li mui-text-center" style="border-right: 1px solid rgba(0,0,0,.1)">
                    <?php if($user['taobaoAuth'] == ''): ?>
                    <img src="/static/new/images/weiwancheng.png" class="zt_img">
                    <a href="<?php echo url('info/taobao'); ?>?typeid=2" class="block_a">
                        <?php else: ?>
                        <img src="/static/new/images/yiwancheng.png" class="zt_img">
                        <a href="javascript:;" class="block_a">
                            <?php endif; ?>
                            <img src="/static/new/images/rz_ioc07.png" class="rz_nav_img">
                            <p class="rz_nav_tit">淘宝</p>
                        </a>
                </li>
            </ul>

        </div>
    </div>
    <div class="shuoming">
        <marquee direction=left  scrolldelay="10" scrollamount="10" loop="-1" behavior="scroll" hspace="1" vspace="10" onMouseOver="this.stop()"
                 onMouseOut="this.start()" width="98%" height="20px">
            <p>温馨提示：运营商认证和淘宝认证为辅助加分选项，认证完成可进一步提高审核通过率获取更高额度。  </p>
        </marquee>

    </div>
    <button type="button" class="mui-btn mui-btn-danger mui-btn-outlined" style="margin-left: 10%;width: 80%;" onclick="javascript:window.location.href='<?php echo url('index/index'); ?>'">立即申请</button>
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