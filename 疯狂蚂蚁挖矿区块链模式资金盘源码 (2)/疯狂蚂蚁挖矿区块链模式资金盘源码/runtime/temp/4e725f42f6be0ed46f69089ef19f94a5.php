<?php /*a:2:{s:65:"/www/wwwroot/77q73.cn/application/index/view/account/jiefeng.html";i:1547095638;s:62:"/www/wwwroot/77q73.cn/application/index/view/common/world.html";i:1551429184;}*/ ?>
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
            账户解封
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
        
<style type="text/css">
    body {
        background: #FFF;
    }

    .li_touxiang img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
    }
</style>
<div class="list-block">
    <form class="cmxform form-horizontal tasi-form" action="" name="xgmm" id="xgmm" method="post">
        <ul>
            <li>
                <div class="item-content">
                    <div class="item-media"><i class="icon icon-form-name"></i></div>
                    <div class="item-inner">
                        <div class="item-title label">可售YCB</div>
                        <div class="item-input">
                            <?php echo htmlentities(money($user['wallet']['money'])); ?>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-content">
                    <div class="item-media"><i class="icon icon-form-name"></i></div>
                    <div class="item-inner">
                        <div class="item-title label">解封账号</div>
                        <div class="item-input">
                            <input class="col-20" type="text" placeholder="请输入您需要解封的手机号" name="username" value=""
                                   id="username"/>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="item-content">
                    <div class="item-media"><i class="icon icon-form-name"></i></div>
                    <div class="item-inner">
                        <div class="item-title label">二级密码</div>
                        <div class="item-input">
                            <input class="col-20" type="password" placeholder="请输入您的二级密码" name="secpwd" value=""
                                   id="secpwd"/>
                        </div>
                    </div>
                </div>
            </li>


        </ul>
    </form>
</div>
<div class="content-block">
    <div class="row">
        <input id="btnn" type="button" class="button button-big button-fill button-success js-submit"
               style="width: 100%;" value="提交"/>
    </div>
</div>

    </div>
</div>
<script type="text/javascript" src="/static/images/alert.js"  ></script>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#btnn').click(function () {
            if (!$("#username").val()) {
                alert("解封账户不能为空");
                return false;
            }
            if (!$("#secpwd").val()) {
                alert("二级密码不能为空");
                return false;
            }
            $('#btnn').attr("disabled", "true");
            $(function () {
                var params = {
                    username: $("#username").val(),
                    safeword: $("#secpwd").val()
                };
                $.ajax({
                    type: 'post',
                    url: api.account.jiefeng,
                    cache: false,
                    data: params,
                    dataType: 'json',
                    success: function (data) {
                        alert(data.message);
                        if (data.code == 200) {
                            window.setTimeout("window.location='/home.html'", 1000);
                            //window.location.href="jiefeng.html";//需要跳转的地址
                            return true;
                        } else {
                            $("#btnn").removeAttr('disabled');
                        }

                    },
                });
            });
            return false;
        });
    });
</script>

</body>
</html>