<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"/www/wwwroot/123/public/../application/index/view/user/youhui.html";i:1545842854;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>优惠券</title>
    <link href="/static/new/css/mui.min.css" rel="stylesheet" />
    <link href="/static/new/css/style.css" rel="stylesheet" />
    <style type="text/css">
        body{
            /*background: #fff;*/
        }
    </style>
</head>
<body>
<header>
    <a class="mui-icon" onclick="javaScript:history.go(-1)">
        <img src="/static/new/images/head_back.png">
    </a>
    <p class="mui-text-center">优惠券</p>
   
</header>
<div class="wrap yhquan">
    <div class="meiyou_gd"></div>
    <div class="yhq_w">
        <ul>
            <!-- 未使用 -->
            <li class="mui-row yhq01_li">
                <div class="mui-text-center yhq_cont_l">
                    <p class="yhq_num">福利</p>
                    <p class="yhq_keyong">贷款可用</p>
                </div>
                <div class="yhq_cont_c">
                    <p class="yhq_name">利息优惠券</p>
                    <p class="yhq_date color_hui02">
                        <?php 
                        if($user['yhq'] == 1){
                        echo '有效期至领取日起3日后';
                    }else if($user['yhq'] == 2){
                    echo "有效期:".date("Y-m-d",$user['yhqtime']);
                    }else if($user['yhq'] == 3){
                        echo '已使用或到期';
                    }
                     ?>
                        </p>
                </div>
                <div class="yhq_cont_r mui-text-center">
                  <?php 
                        if($user['yhq'] == 1){
                        echo '<p class="yhq_zt" style="margin-top: 10px; " onclick="lingqu()">领<br>取';
                        }else if($user['yhq'] == 2){
                        echo '<p class="yhq_zt">未<br>使<br>用';
                        }else if($user['yhq'] == 3){
                        echo '<p class="yhq_zt">已<br>使<br>用';
                        }
                         ?></p>
                </div>
            </li>
            <!--&lt;!&ndash; 已使用 &ndash;&gt;-->
            <!--<li class="mui-row yhq02_li">-->
                <!--<div class="mui-text-center yhq_cont_l">-->
                    <!--<p class="yhq_num">￥10</p>-->
                    <!--<p class="yhq_keyong">贷款可用</p>-->
                <!--</div>-->
                <!--<div class="yhq_cont_c">-->
                    <!--<p class="yhq_name">利息优惠券</p>-->
                    <!--<p class="yhq_date color_hui02">有效期至:2017-08-03</p>-->
                <!--</div>-->
                <!--<div class="yhq_cont_r mui-text-center">-->
                    <!--<p class="yhq_zt color_hui02">已</br>使</br>用</p>-->
                <!--</div>-->
            <!--</li>-->
            <!--&lt;!&ndash; 已作废 &ndash;&gt;-->
            <!--<li class="mui-row yhq02_li">-->
                <!--<div class="mui-text-center yhq_cont_l">-->
                    <!--<p class="yhq_num">￥10</p>-->
                    <!--<p class="yhq_keyong">贷款可用</p>-->
                <!--</div>-->
                <!--<div class="yhq_cont_c">-->
                    <!--<p class="yhq_name">利息优惠券</p>-->
                    <!--<p class="yhq_date color_hui02">有效期至:2017-08-03</p>-->
                <!--</div>-->
                <!--<div class="yhq_cont_r mui-text-center">-->
                    <!--<p class="yhq_zt color_hui02">已</br>作</br>废</p>-->
                <!--</div>-->
            <!--</li>-->
            <!--&lt;!&ndash; 已冻结 &ndash;&gt;-->
            <!--<li class="mui-row yhq02_li">-->
                <!--<div class="mui-text-center yhq_cont_l">-->
                    <!--<p class="yhq_num">￥10</p>-->
                    <!--<p class="yhq_keyong">贷款可用</p>-->
                    <!--<img src="/static/new/images/dj_yinzhang.png" class="dj_ioc">-->
                <!--</div>-->
                <!--<div class="yhq_cont_c">-->
                    <!--<p class="yhq_name">利息优惠券</p>-->
                    <!--<p class="yhq_date color_hui02">有效期至:2017-08-03</p>-->
                <!--</div>-->
                <!--<div class="yhq_cont_r mui-text-center">-->
                    <!--<p class="yhq_zt color_hui02">已</br>作</br>废</p>-->
                <!--</div>-->
            <!--</li>-->

        </ul>
        <br>
        <ul class="mui-table-view">
            <li class="mui-table-view-cell mui-media" style="border: 1px solid #c8c7cc;border-radius: 4px;">
                <a href="javascript:;">
                    <div class="mui-text-center">利息折扣券说明</div>
                    <div class="mui-media-body">
                        <p style="font-size: 10px;"> 1：利息折扣券有限期为3天，过期不能再次领取<br/>
                            2：利息折扣券必须填写完认证流程才能领取，否则无法领取 <br/>
                            3：利息折扣券分5折、6折、8折,填写完认证流程后随机产生折扣力度<br>
                            4：最终解释权归优享钱包所有
                        </p>
                    </div>
                </a>
            </li>

        </ul>
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
    function lingqu() {
        $.get('<?php echo url('user/province'); ?>',function (gdata) {
            if(gdata.code == 1){
                mui.toast(gdata.msg);
                setTimeout(function () {
                    location.reload();
                },2000);

            }else{
                mui.toast(gdata.msg);
            }
        });
    }
</script>
</html>