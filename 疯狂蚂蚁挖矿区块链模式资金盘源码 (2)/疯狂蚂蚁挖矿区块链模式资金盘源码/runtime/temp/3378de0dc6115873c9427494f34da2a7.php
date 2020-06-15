<?php /*a:1:{s:59:"D:\wwwroot\prvd.cn\application\index\view\account\home.html";i:1555523164;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>会员中心</title>
    <script src="/static/42/js/rem_config.js"></script>
    <link rel="stylesheet" href="/static/42/css/basic.css">
    <link rel="stylesheet" href="/static/42/css/memberCener.css">
</head>
<body style="padding-bottom: 50px;">
    <div class="navTit">
        <p>会员中心</p>
    </div>

    <!-- 会员信息 -->
    <div class="userInfo">
        <div class="topInfo">
            <img class="left p" id="userPic" src="/static/images/user1.png" alt="">
            <div class="left v1">
                <p id="user">编号 : <?php echo htmlentities($user['account']['uid']); ?></p>
                <div class="vv">
                    <span id="name"><?php echo !empty($user['profile']['realname']) ? htmlentities($user['profile']['realname']) : '未更新'; ?></span>
                    <span id="grade"><?php echo htmlentities($user['account']['typename']); ?></span>
                </div>
            </div>
            <div class="back v2" onclick="location.href='/signout.html'">退出</div>
          	<div class="time v2" id="loginTime" style="bottom:0">
              <span style="padding-left: 3.15rem;">算力：<?php echo htmlentities(money_two($user['dashboard']['power'])); ?> </span>
              <span style="padding-left: 2.2rem;">直推：<?php echo htmlentities($user['dashboard']['one']); ?> 团队：<?php echo htmlentities($user['dashboard']['team_count']); ?></span>
            </div>
            
        </div>
        <div class="botInfo">
            <ul class="clearfloat">
                <li class="left">
                    <p id="saleBi"><?php echo htmlentities(money_four($user['wallet']['money'])); ?></p>
                    <h3>可售YCB</h3>
                </li>
                <li class="left">
                    <p id="saleBiEdu"><?php echo htmlentities(money_four($user['wallet']['cansell'])); ?></p>
                    <h3>可售额度</h3>
                </li>
                <li class="left">
                    <p id="saleBiMoney"><?php echo htmlentities(money_four($user['wallet']['deposit'])); ?></p>
                    <h3>交易冻结</h3>
                </li>
            </ul>
        </div>
    </div>

    <!-- 第二栏蚁巢信息 -->
    <div class="kuang">
        <ul class="clearfloat">
            <li class="left">
                <p id="kuangchi"><?php echo htmlentities(money_four($user['wallet']['poll'])); ?></p>
                <h3>蚁巢</h3>
            </li>
            <li class="left">
                <p id="kuangchiMoney"><?php echo htmlentities(money_four($user['wallet']['mpocket'])); ?></p>
                <h3>蚁巢钱包</h3>
            </li>
            <li class="left">
                <p id="kuangchiCount"><?php echo htmlentities($mnums); ?></p>
                <h3>蚁后数量</h3>
            </li>
        </ul>
    </div>

    <!-- 中间banner图 -->
    <div class="ad">
        <img src="/static/42//images/huiyuan-banner.png" alt="">
    </div>

    <!-- 9个功能菜单 -->
    <div class="menus">
        <ul class="clearfloat">
            <li class="left">
                <a href="/zhuanru.html">
                    <div class="v"><img src="/static/42/images/huiyuan-menu1.png" alt=""></div>
                    <p>兑换管理</p> 
                </a>
            </li>
            <li class="left">
                <a href="/zhuanchu.html">
                    <div class="v"><img src="/static/42/images/huiyuan-menu2.png" alt=""></div>
                    <p>蚁巢资产</p>
                </a>
            </li>
            <li class="left">
                <a href="javascript:mui.alert('敬请期待')">
                    <div class="v"><img src="/static/42/images/collect.png" alt=""></div>
                    <p>蚂蚁回购</p>
                </a>
            </li>
            <li class="left">
                <a href="/jiefeng.html">
                    <div class="v"><img src="/static/42/images/huiyuan-menu4.png" alt=""></div>
                    <p>账户解封</p>
                </a>
            </li>
            <li class="left">
                <a href="javascript:mui.alert('敬请期待')">
                    <div class="v"><img src="/static/42/images/huiyuan-menu5.png" alt=""></div>
                    <p>行情走势</p>
                </a>
            </li>
            <li class="left">
                <a href="/financial.html">
                    <div class="v"><img src="/static/42/images/huiyuan-menu6.png" alt=""></div>
                    <p>财务明细</p>
                </a>
            </li>
            <li class="left">
                <a href="/account/authen.html">
                    <div class="v"><img src="/static/42/images/huiyuan-menu7.png" alt=""></div>
                    <p>实名认证</p>
                </a>
            </li>
            <li class="left">
                <a href="/account/profile.html">
                    <div class="v"><img src="/static/42/images/huiyuan-menu8.png" alt=""></div>
                    <p>修改资料</p>
                </a>
            </li>
            <li class="left">
                <a href="javascript:mui.alert('敬请期待')">
                    <div class="v"><img src="/static/42/images/huiyuan-menu9.png" alt=""></div>
                    <p>蚂蚁商城</p>
                </a>
            </li>
        </ul>
    </div>


    <!--footer固定-->
    <div class="footer_fix" style="    line-height: 1;
    font-size: 14px;
    height: 60px;">
        <ul class="clearfix">
            <li><a href="/account.html"><img src="/static/42/images/shouye@1x.png" alt=""><span>首页</span></a></li>
            <li><a href="/machine.html"><img src="/static/42/images/kuangjishangcheng@1x.png" alt=""><span>我的蚁后</span></a></li>
            <li><a href="/team.html"><img src="/static/42/images/tuandui@1x.png" alt=""><span>我的团队</span></a></li>
            <li><a href="/market.html"><img src="/static/42/images/jiaoyi%20(1)@1x.png" alt=""><span>交易中心</span></a></li>
            <li class="current"><a href="/home.html"><img src="/static/42/images/wo@3x.png" alt=""><span>会员中心</span></a></li>
        </ul>
    </div>


    <script src="/static/42/js/zepto.min.js"></script>
    <script src="/static/jyjs/mui.min.js"></script>
  <style>
.mui-popup-backdrop {
    position: fixed;
    z-index: 998;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    -webkit-transition-duration: 400ms;
    transition-duration: 400ms;
    opacity: 0;
    background: rgba(0, 0, 0, .4)
}

.mui-popup-backdrop.mui-active {
    opacity: 1
}

.mui-popup {
    position: fixed;
    z-index: 10000;
    top: 50%;
    left: 50%;
    display: none;
    overflow: hidden;
    width: 270px;
    -webkit-transition-property: -webkit-transform, opacity;
    transition-property: transform, opacity;
    -webkit-transform: translate3d(-50%, -50%, 0) scale(1.185);
    transform: translate3d(-50%, -50%, 0) scale(1.185);
    text-align: center;
    opacity: 0;
    color: #000;
    border-radius: 13px
}

.mui-popup.mui-popup-in {
    display: block;
    -webkit-transition-duration: 400ms;
    transition-duration: 400ms;
    -webkit-transform: translate3d(-50%, -50%, 0) scale(1);
    transform: translate3d(-50%, -50%, 0) scale(1);
    opacity: 1
}

.mui-popup.mui-popup-out {
    -webkit-transition-duration: 400ms;
    transition-duration: 400ms;
    -webkit-transform: translate3d(-50%, -50%, 0) scale(1);
    transform: translate3d(-50%, -50%, 0) scale(1);
    opacity: 0
}

.mui-popup-inner {
    position: relative;
    padding: 15px;
    border-radius: 13px 13px 0 0;
    background: rgba(255, 255, 255, .95)
}

.mui-popup-inner:after {
    position: absolute;
    z-index: 15;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 1px;
    content: '';
    -webkit-transform: scaleY(.5);
    transform: scaleY(.5);
    -webkit-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
    background-color: rgba(0, 0, 0, .2)
}

.mui-popup-title {
    font-size: 18px;
    font-weight: 500;
    text-align: center
}

.mui-popup-title + .mui-popup-text {
    font-family: inherit;
    font-size: 14px;
    margin: 5px 0 0
}

.mui-popup-buttons {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    height: 44px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    justify-content: center
}

.mui-popup-button {
    font-size: 17px;
    line-height: 44px;
    position: relative;
    display: block;
    overflow: hidden;
    box-sizing: border-box;
    width: 100%;
    height: 44px;
    padding: 0 5px;
    cursor: pointer;
    text-align: center;
    white-space: nowrap;
    text-overflow: ellipsis;
    color: #007aff;
    background: rgba(255, 255, 255, .95);
    -webkit-box-flex: 1
}

.mui-popup-button:after {
    position: absolute;
    z-index: 15;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    display: block;
    width: 1px;
    height: 100%;
    content: '';
    -webkit-transform: scaleX(.5);
    transform: scaleX(.5);
    -webkit-transform-origin: 100% 50%;
    transform-origin: 100% 50%;
    background-color: rgba(0, 0, 0, .2)
}

.mui-popup-button:first-child {
    border-radius: 0 0 0 13px
}

.mui-popup-button:first-child:last-child {
    border-radius: 0 0 13px 13px
}

.mui-popup-button:last-child {
    border-radius: 0 0 13px
}

.mui-popup-button:last-child:after {
    display: none
}

.mui-popup-button.mui-popup-button-bold {
    font-weight: 600
}

.mui-popup-input input {
    font-size: 14px;
    width: 100%;
    height: 26px;
    margin: 15px 0 0;
    padding: 0 5px;
    border: 1px solid rgba(0, 0, 0, .3);
    border-radius: 0;
    background: #fff
}
  </style>
</body>
</html>