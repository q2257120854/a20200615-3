<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"/www/wwwroot/qumuban.com/public/../application/index/view/user/bank.html";i:1536732660;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>我的银行卡</title>
    <link href="/static/new/css/mui.min.css" rel="stylesheet" />
    <link href="/static/new/css/style.css" rel="stylesheet" />
</head>
<body>
<header>
    <a class="mui-icon" onclick="javaScript:history.go(-1)">
        <img src="/static/new/images/head_back.png">
    </a>
    <!-- <a href="#" class="top_xiaoxi">
        <img src="images/jiahao.png" class="yhk_jia">
    </a> -->
</header>
<div class="wrap yhk">
    <h3 class="huankuan_tit">我的银行卡</h3>
    <div class="yhl_list">
        <ul>
            <li class="yhk_01 yhk_li" id="ka_id_01"> <!--不同银行卡颜色不一样 总共三个三色 yhk_01、yhk_02、yhk_03-->
                <a href="javascript:" class="block_a mui-text-center yhk_li_a">
                    <span><?php echo $bank['idcard']; ?></span>
                </a>

                <div class="yh_name"> <!--银行-->
                    <div class="yhk_img mui-pull-left"><img src="https://cashier.sandpay.com.cn/static/fastpay/image/bank/m-<?php echo $img['openBankNo']; ?>.png"></div>
                    <!--银行卡图标 中国银行：h_01.jpg;工商：h_02.jpg，招商：h_03农业：h_04建设h_05民生h_06光大h_07中信h_08交通h_09兴业h_10浦发h_11华夏h_12发展h_13储蓄h_14-->
                    <div class="yhk_names mui-pull-left">
                        <p class="yhk_name_1"><?php echo $img['openBankName']; ?></p>
                        <p class="yhk_name_2">储蓄卡</p>
                    </div>
                </div>
                <div class="moren_s"><a href="#" class="xz_a xz_a_01 block_a">设为默认</a></div> <!--设为默认-->
                <div class="riqi"><p>03-02</p></div> <!--卡日期-->
                <div class="shanfu"><img src="/static/new/images/shanfu_ioc.png"></div> <!--闪付图标-->
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
    mui('footer').on('tap','a',function(){document.location.href=this.href;});//适配苹果x

</script>
</html>