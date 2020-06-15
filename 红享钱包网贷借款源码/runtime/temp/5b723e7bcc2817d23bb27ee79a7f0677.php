<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"/www/wwwroot/123/public/../application/index/view/index/newindex.html";i:1545845794;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>首页</title>
    <link rel="stylesheet" href="/static/new/css/common.css">
    <link rel="stylesheet" href="/static/new/css/loading.css">
    <link rel="stylesheet" href="/static/new/bxslider/jquery.bxslider.min.css">
    <link href="/static/new/css/mui.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/static/new/css/style.css"/>
    <style>
        div{
            background-color: transparent;!important
        }
        .bxslider img{
            width: 100%;
        }
        .bx-wrapper {
            margin-bottom: 0px;
        }
        .bx-controls{
            display: none;
        }
    </style>
<body>
<div class="wrap shouye">
    <div class="bxslider" width="100%">
        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li><img src="<?php echo $vo['image']; ?>" style="height: 200px;"></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <!--<div class="shenqing_but mui-text-center"><button onclick="javascript:window.location.href='<?php echo url('index/index'); ?>'">立即申请</button></div>-->
    <!-- <div class="bar" id="broadcast" name="giftactive">
      <div id="demo" class="gonggao" style="height: 2rem; line-height: 2rem; overflow: hidden;">
        <ul class="mingdan" id="holder">
          <li><a href="#" target="_blank">哈哈**一分钟前借款1000元成功！</a></li>
          <li><a href="#" target="_blank">哈哈**一分钟前借款1000元成功！</a></li>
          <li><a href="#" target="_blank">哈哈**一分钟前借款1000元成功！</a></li>
          <li><a href="#" target="_blank">哈哈**一分钟前借款1000元成功！</a></li>
          <li><a href="#" target="_blank">哈哈**一分钟前借款1000元成功！</a></li>
        </ul>
      </div>
    </div> -->
    <div class="gonglue" style="margin-top: 3rem;">
        <div class="gl_tit">
            <p class="color_hui01">公告中心</p>
        </div>
        <ul class="wenz_ul">
            <li>
                <a href="<?php echo url('news/index'); ?>">
                    <div class="wenz_left">
                        <h2 class="color_hui01 font_b">关于用户忘记移动服务密码的解决方法</h2>
                        <p class="jianjie color_hui02">用户可以拨打移动10086、联通10010、电信10000客服热线按提示操作重置服务密码。</p>
                        <p class="riqi color_hui02">2018-12-26 20:16:38</p>
                    </div>
                    <button class="jinru_btn">立即进入</button>
                </a>
            </li>
        </ul>
    </div>
    <div class="gonglue" style="margin-top: 3rem;">
        <div class="gl_tit">
            <p class="color_hui01">资讯中心</p>
        </div>
        <ul class="wenz_ul">
            <li>
                <a href="<?php echo url('news/newindex'); ?>">
                    <div class="wenz_left">
                        <h2 class="color_hui01 font_b">贷款被拒的原因，我都给你找出来了</h2>
                        <p class="jianjie color_hui02">有很多老铁后台留言表示贷款被拒，本来高高兴兴的来申请贷款，结果申请被拒哭唧唧的走了。</p>
                        <p class="riqi color_hui02">2018-12-25 16:20:56</p>
                    </div>
                    <button class="jinru_btn">立即进入</button>
                </a>
            </li>
        </ul>
    </div>
    <!--div style="margin-top: 20px;">
        <a href="/mobile/loan/lists.html"><p class="color_hui01" style="
    border: 1px solid #ff3846;
    width: 51%;
    text-align: center;
    margin: auto;
    border-radius: 7px;
    background: #ff3846;
    padding: 5px;
    color: #ffffff!important;
"><?php echo $msg; ?></p></a>
    </div-->
</div>
<footer>
    <nav class="mui-bar mui-bar-tab">
        <a class="mui-tab-item  mui-active" href="<?php echo url('index/index'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc01_a.png"></span>
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
        <a class="mui-tab-item" href="<?php echo url('user/index'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc04_b.png"></span>
            <span class="mui-tab-label">我的</span>
        </a>
    </nav>
</footer>
</body>
<script>var siteurl="http://we.biosyun.com";</script>
<script src="/static/new/js/jquery.min.js"></script>
<script src="/static/new/bxslider/jquery.bxslider.min.js"></script>
<script>
    function AutoScroll(obj) {
        $(obj).find("ul:first").animate({
                marginTop: "-22px"
            },
            500,
            function() {
                $(this).css({
                    marginTop: "0px"
                }).find("li:first").appendTo(this);
            });
    }
    $(document).ready(function() {
        setInterval('AutoScroll("#demo")', 3500)
    });

    // 轮播插件
    $('.bxslider').bxSlider({
        'mode':'vertical',
        'controls':false,
        'auto':true,
        'pause':2000,
        'speed':200,
        'autoHover':true
    });
</script>
</html>