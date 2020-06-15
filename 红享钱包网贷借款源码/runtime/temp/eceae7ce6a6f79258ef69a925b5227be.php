<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\wwwroot\demo.52jscn.com\public/../application/index\view\index\index.html";i:1545831691;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>首页</title>
    <link href="/static/new/css/mui.min.css" rel="stylesheet" />
    <link href="/static/new/css/style.css" rel="stylesheet" />
    <style type="text/css">
        body{
            background-color: #fff;
        }
      .index .jisu_jine .jine_01txt {
    color: #ffffff;
    font-size: 2rem;
    font-weight: bold;
    margin-top: -3rem;
    position: absolute;
    margin-left: -3.8rem;
}
      .index .jisu_jine .jine_02txt {
    font-size: 1.33rem;
    padding-top: .6rem;
    margin-top: -3rem;
    position: absolute;
    margin-left: 43%;
    color: #fff;
}
    </style>
</head>
<body>
<header>
    <a class="mui-icon" onclick="javaScript:history.go(-1)">
        <img src="/static/new/images/head_back.png">
    </a>
    <p class="mui-text-center">首页</p>

</header>
<div class="wrap index">
    <!-- 轮播 -->
    <div id="slider" class="mui-slider" >
        <div class="mui-slider-group mui-slider-loop">

            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="mui-slider-item">
                <a href="#">
                    <img src="<?php echo $vo['image']; ?>" style="height: 200px;">
                </a>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </div>
        <div class="mui-slider-indicator">
            <div class="mui-indicator mui-active"></div>
            <div class="mui-indicator"></div>
        </div>
    </div>
    <div class="in_nav">
        <p class="tongzhi"><marquee direction=up  scrolldelay="10" scrollamount="1" loop="-1" behavior="scroll" hspace="20" vspace="10" onMouseOver="this.stop()"
                                    onMouseOut="this.start()" width="100%" height="20px" style="
    margin-left: 0px;
    margin-right: 0px;
">
<?php if(is_array($zixun) || $zixun instanceof \think\Collection || $zixun instanceof \think\Paginator): $i = 0; $__LIST__ = $zixun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?>
        <p><?php echo $vos['content']; ?></p>
<?php endforeach; endif; else: echo "" ;endif; ?>
        </marquee></p>
        <div class="mui-row in_nav_c">
            <div class="mui-col-xs-4 mui-text-center">
                <a href="<?php if(session('id') == ''): ?>javascript:mui.toast('请登录后查看',{ duration:'long', type:'div' });setTimeout(function(){top.location.href = '<?php echo url('login/index'); ?>'},2000);<?php else: ?><?php echo url('loan/index'); endif; ?>" class="clock_a">
                    <img src="/static/new/images/in_ioc01.png">
                    <p>我的借款</p>
                </a>
            </div>
            <div class="mui-col-xs-4 mui-text-center">
                <a href="<?php if(session('id') == ''): ?>javascript:mui.toast('请登录后查看',{ duration:'long', type:'div' });setTimeout(function(){top.location.href = '<?php echo url('login/index'); ?>'},2000);<?php else: ?><?php echo url('loan/index'); endif; ?>" class="clock_a">
                    <img src="/static/new/images/in_ioc02.png">
                    <p>我要还款</p>
                </a>
            </div>
            <div class="mui-col-xs-4 mui-text-center">
                <a href="<?php echo url('index/newindex'); ?>" class="clock_a">
                    <img src="/static/new/images/in_ioc03.png">
                    <p>帮助中心</p>
                </a>
            </div>
        </div>
    </div>
    <div class="jisu_jine">
        <div class="jine_txt mui-text-center">
            <span class="jine_01txt">￥<?php echo $maxm; ?></span></br>
            <p class="jine_02txt">快速贷款</p>
        </div>
    </div>
    <div class="shenq_btn mui-text-center">
        <button type="button" <?php if($msg == '立即申请'): ?> onclick="shenqing()"<?php endif; ?>><?php echo $msg; ?></button>
    </div>
</div>
<footer>
    <nav class="mui-bar mui-bar-tab">
        <a class="mui-tab-item  mui-active" href="<?php echo url('index/index'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc01_a.png"></span>
            <span class="mui-tab-label">首页</span>
        </a>
        <a class="mui-tab-item" href="<?php if(session('id') == ''): ?>javascript:mui.toast('请登录后查看',{ duration:'long', type:'div' });setTimeout(function(){top.location.href = '<?php echo url('login/index'); ?>'},2000);<?php else: ?><?php echo url('loan/index'); endif; ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc02_b.png"></span>
            <span class="mui-tab-label">借款</span>
        </a>
        <a class="mui-tab-item" href="<?php if(session('id') == ''): ?>javascript:mui.toast('请登录后查看',{ duration:'long', type:'div' });setTimeout(function(){top.location.href = '<?php echo url('login/index'); ?>'},2000);<?php else: ?><?php echo url('user/cion'); endif; ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc03_b.png"></span>
            <span class="mui-tab-label">钱包</span>
        </a>
        <a class="mui-tab-item" href="<?php if(session('id') == ''): ?>javascript:mui.toast('请登录后查看',{ duration:'long', type:'div' });setTimeout(function(){top.location.href = '<?php echo url('login/index'); ?>'},2000);<?php else: ?><?php echo url('user/index'); endif; ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc04_b.png"></span>
            <span class="mui-tab-label">我的</span>
        </a>
    </nav>
</footer>
<style>
    .tc_wc{
        position: fixed;
        top:0;
        left:0;
        z-index:10001;
        width:100%;
        height:100%;
        background:rgba(0,0,0,.6);
    }
    .ing_da{
        margin-top:35%;
        width:85%

    }
    .gb_wh{
        width: 30px;
        height: 30px;
    }
</style>
<div class="tc_wc mui-text-center">
    <p><a href="<?php echo url('user/youhui'); ?>"><img src="/static/new/images/newindex.png" class="ing_da"></a></p>
    <p><img src="/static/new/images/guanbi.png" class="gb_wh" onclick="gbzz()"></p>
</div>
</body>
<script src="/static/new/js/mui.min.js"></script>
<script src="/static/new/js/jquery.min.js"></script>
<script>
    function gbzz(){
        $('.tc_wc').hide();
    }
    mui('footer').on('tap','a',function(){document.location.href=this.href;});
    function shenqing(){
      <?php if(session('id') == ''): ?>mui.toast('请登录后查看',{ duration:'long', type:'div' });setTimeout(function(){top.location.href = '<?php echo url('login/index'); ?>'},2000);<?php else: if($user['perfect'] == '1'): ?>mui.toast('您未完成认证暂时无法申请借款',{ duration:'long', type:'div' });setTimeout(function(){top.location.href = '<?php echo url('user/renzheng'); ?>'},2000);<?php else: 
                                                                                                      if($loan){
                                                                                                         ?>
                                                                                                      mui.toast('您有未完成订单，暂时无法发起借款',{ duration:'long', type:'div' });
                                                                                                          <?php 
                                                                                                      }else{
                                                                                                          ?>
                                                                                                      window.location.href='<?php echo url('loan/loanatonce'); ?>';
                                                                                                           <?php 
                                                                                                         }
                                                                                                       endif; endif; ?>
         
    }
</script>
</html>