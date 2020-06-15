<?php /*a:2:{s:62:"/www/wwwroot/77q73.cn/application/index/view/account/home.html";i:1550217760;s:62:"/www/wwwroot/77q73.cn/application/index/view/common/world.html";i:1551429184;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex,nofollow">
    <meta name="robots" content="noarchive">
    <title>BTE</title>
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
    
</head>

<body>
<!-- content -->
<div class="page">
    <header class="bar bar-nav">

        <a style="position: absolute;z-index: 19;width: 94%;text-align: center;display: inline-block;line-height: 50px;font-size: 1.1rem; color:#FFF;">
            会员中心
        </a>
        <div class="logo">
             <a id="cancle" href="javascript:history.go(-1)"><i class="icon icon-left"></i></a>
        </div>
        <a class="icon pull-right open-panel"></a>
    </header>
    
    <nav class="foot-bar">
        <div class="foot-menu"><a href="/account.html">
            <i class="iconfont icon-shouye"></i><span>首页</span></a></div>
        <div class="foot-menu"><a href="/machine.html">
            <i class="iconfont icon-wxbmingxingdianpu"></i><span>我的蚁后</span></a></div>
        <div class="foot-menu"><a href="/team.html">
            <i class="iconfont icon-friend"></i><span>我的团队</span></a></div>
        <div class="foot-menu"><a href="/market.html">
            <i class="iconfont icon-wxbdingwei"></i><span>交易中心</span></a></div>
        <div class="foot-menu"><a href="/home.html">
            <i class="iconfont icon-geren"></i><span>会员中心</span></a></div>
    </nav>
    

    <div class="content" id="main_content">
        
<div class="info-top">
    <div class="uphoto"><img src="/static/images/user1.png"></div>
    <div class="uinfo">
        <p>会员账号：<?php echo htmlentities($user['account']['username']); ?></p>
        <p>会员姓名：<?php echo !empty($user['profile']['realname']) ? htmlentities($user['profile']['realname']) : '未更新'; ?></p>
        <p>会员等级：<?php echo htmlentities($user['account']['typename']); ?></p>
        <p>注册时间：<?php echo htmlentities($user['account']['create_at']); ?></p>

    </div>
</div>
<div class="my-qiandao" style="width:100%;">
    <div class="row-box clearfix"><a class="col-xs-3 sub-tab" style="border:0px;"><span
            class="num_qiandao"><?php echo htmlentities(money_four($user['wallet']['money'])); ?></span>
        <p class="subtitle">可售YCB</p>
    </a><a class="col-xs-3 sub-tab"><span class="num_qiandao"><?php echo htmlentities(money_four($user['wallet']['cansell'])); ?></span>
        <p class="subtitle">可售额度</p>
    </a><a class="col-xs-3 sub-tab"><span class="num_qiandao"><?php echo htmlentities(money_four($user['wallet']['poll'])); ?></span>
        <p class="subtitle">蚁巢</p>
    </a></div>
</div>
<div class="my-qiandao" style="width:100%;">
    <div class="row-box clearfix"><a class="col-xs-3 sub-tab" style="border:0px;"><span class="num_qiandao"><?php echo htmlentities(money_four($user['wallet']['mpocket'])); ?></span>
        <p class="subtitle">蚁巢钱包</p>
    </a><a class="col-xs-3 sub-tab"><span class="num_qiandao"><?php echo htmlentities(money_four($user['wallet']['deposit'])); ?></span>
        <p class="subtitle">交易冻结</p>
    </a><a class="col-xs-3 sub-tab"><span class="num_qiandao"><?php echo htmlentities($mnums); ?>个</span>
        <p class="subtitle">蚁后数量</p>
    </a></div>
</div>
<div class="my-qiandao" style="width:100%;">
    <div class="row-box clearfix"><a class="col-xs-3 sub-tab" style="border:0px;"><span class="num_qiandao"><?php echo htmlentities($team_count); ?></span>
        <p class="subtitle">团队人数</p>
    </a>
        <a class="col-xs-3 sub-tab"><span class="num_qiandao"><?php echo htmlentities(money_four($user['wallet']['score'])); ?></span>
            <p class="subtitle">我的积分</p>
        </a>
        <a class="col-xs-3 sub-tab"><span class="num_qiandao"><?php echo htmlentities($user['dashboard']['one']); ?></span>
            <p class="subtitle">直推人数</p>
        </a>
    </div>
</div>
<style>
    .info-list {
        margin-bottom: 1px;
        height: auto;
    }

    .info-list li {
        height: 100%;
        padding: 20px 0 19px 0;
        border-bottom: 1px solid #efeff4;
        margin-top: 0px;
    }
</style>
<div class="info-list">
    <ul>

        <li>
            <a id="btnn" onclick="qiandao()"><img src="/static/images/info-jsbz.png"><span>每日释放</span></a>

        </li>
        <li><a href="/zhuanru.html"><img src="/static/images/info-zhuan.png"><span>兑换管理</span></a></li>
        <li><a href="/zhuanchu.html"><img src="/static/images/info-jsbz.png"><span>蚁巢资产</span></a></li>

        <li><a href="/jiefeng.html"><img src="/static/images/info-pass.png"><span>账户解封</span></a></li>
        <!--  -->
        <li><a href="javascript:alert('暂未开放')"><img src="/static/images/info-code.png"><span>活动奖励</span></a></li>

        <li><a href="/financial.html"><img src="/static/images/info-tgbz.png"><span>财务明细</span></a></li>
        <li><a href="/account/authen.html"><img src="/static/images/info-tuandui.png"><span>实名认证</span></a></li>
        <li><a href="/account/profile.html"><img src="/static/images/info-update.png"><span>修改资料</span></a></li>
        <li><a href="/password.html"><img src="/static/images/info-pass.png"><span>登陆密码</span></a></li>
        <li><a href="/secpwd.html"><img src="/static/images/info-pass.png"><span>交易密码</span></a></li>
        <li><a href="/news.html"><img src="/static/images/info-out.png"><span>系统公告</span></a></li>
        <li><a href="javascript:alert('暂未开放')"><img src="/static/images/info-score.png"><span>积分商城</span></a></li>
    </ul>
</div>

<div class="content-block" style="margin:10px;">
    <div class="row">
        <div class="col-100">
            <a href="/signout.html">
                <button id="logout" type="button" class="button button-big button-fill button-success"
                        style="width: 100%;" o>退出登录
                </button>
            </a>
        </div>
    </div>
</div>

    </div>
</div>
<script type="text/javascript" src="/static/images/alert.js"  ></script>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>

<script type="text/javascript">
    ajax(api.machine.allprofit, {}, function(res){
        if (res.code == 200) {
            window.location.reload();
        }else{
            console.log(res.message);
        }
    });
    function qiandao() {
        $('#btnn').attr("disabled", "disabled");

        $(function () {
            var params = {};
            $.ajax({
                type: 'post',
                url: api.account.qiandao,
                cache: false,
                data: params,
                dataType: 'json',
                success: function (data) {
                    alert(data.message);
                    if (data.code == 200) {
                        window.setTimeout("window.location='/home.html'", 1000);
                        //window.location.href="";//需要跳转的地址
                        return true;
                    } else {
                        $("#btnn").removeAttr('disabled');
                    }
                },
            });
        });

        return false;
    }
</script>

</body>
</html>