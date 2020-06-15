<?php /*a:2:{s:66:"/www/wwwroot/77q73.cn/application/index/view/account/password.html";i:1546997846;s:62:"/www/wwwroot/77q73.cn/application/index/view/common/world.html";i:1551429184;}*/ ?>
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
            修改密码
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
        
<div class="buttons-tab">
    <a href="/account/profile.html" class=" button">个人资料</a>
    <a href="/account/password.html" class="active button">修改登录密码</a>
    <a href="/account/secpwd.html" class=" button">修改交易密码</a>
</div>
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
<form class="cmxform form-horizontal tasi-form" name="xgmm" id="xgmm" method="post" onsubmit="return sub()">
    <div class="list-block">
        <ul>
            <li>
                <div class="item-content">
                    <div class="item-media"><i class="icon icon-form-name"></i></div>
                    <div class="item-inner">
                        <div class="item-title label">原登录密码</div>
                        <div class="item-input">
                            <input class="col-20" type="password" placeholder="请输入原登录密码" name="oldpass" value=""
                                   id="oldpass"/>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-content">
                    <div class="item-media"><i class="icon icon-form-name"></i></div>
                    <div class="item-inner">
                        <div class="item-title label">新登录密码</div>
                        <div class="item-input">
                            <input class="col-20" type="password" placeholder="请输入新登录密码" name="newpass" value=""
                                   id="newpass"/>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-content">
                    <div class="item-media"><i class="icon icon-form-name"></i></div>
                    <div class="item-inner">
                        <div class="item-title label">新登入密码确认</div>
                        <div class="item-input">
                            <input class="col-20" type="password" placeholder="请输入新登录密码" name="newpass2" value=""
                                   id="newpass2"/>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

    </div>
    <div class="content-block">
        <div class="row">
            <div class="col-100">
                <input id="btnn" type="button" class="button button-big button-fill button-success js-submit"
                       style="width: 100%;" value="提交"/>
            </div>
        </div>
    </div>
</form>

    </div>
</div>
<script type="text/javascript" src="/static/images/alert.js"  ></script>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>

<script language="javascript">

    $(document).ready(function () {
        $('#btnn').click(function () {
            if (!$("#oldpass").val()) {
                alert("原登陆密码不能为空");
                return false;
            }

            if ($("#newpass").val().length < 6 || $("#newpass").val().length > 16) {
                alert('登录密码长度必须在6到16之间!');
                return false;
            }
            if ($("#newpass2").val().length > 16 || $("#newpass2").val().length < 6) {
                alert('确认密码长度必须在6到16之间!');
                return false;
            }
            if ($("#newpass").val() != $("#newpass2").val()) {
                alert("两次密码不一致");
                return false;
            }
            $('#btnn').attr("disabled", "true");
            $(function () {
                var params = {
                    oldpass: $("#oldpass").val(),
                    newpass: $("#newpass").val(),
                    state: 1
                };
                $.ajax({
                    type: 'post',
                    url: api.account.password,
                    cache: false,
                    data: params,
                    dataType: 'json',
                    success: function (data) {
                        alert(data.message);
                        if (data.code == 200) {
                            window.setTimeout("window.location='password.html'", 1000);
                            //window.location.href="password.html";//需要跳转的地址
                            return true;
                        } else {
                            $("#sub01").removeAttr('disabled');
                        }

                    },
                });
            });
            return false;
        });
    });

    var param = {
        type: hello.type.value,
        verify_code: hello.verify_code.value,
        password: hello.password.value,
        confirm: hello.confirm.value,
    }
    ajax(api.account.reset, param, function(res){
        $('.reset .dimmer').removeClass('active');
        if (res.code == 200) {
            if (hello.type.value == 1) {
                toast('恭喜您、密码重置成功！', function(){
                    window.location.href = '/signin.html';
                });
            } else {
                toast('恭喜您、密码重置成功！', function(){
                    $(hello.password.selector).val('');
                    hello.marker(hello.password.selector, null);
                    $(hello.confirm.selector).val('');
                    hello.marker(hello.confirm.selector, null);
                    $(hello.captcha.selector).val('');
                    $(hello.captcha.selector).prop('readonly', false);
                    hello.marker(hello.captcha.selector, null);
                    $(hello.verify_code.selector).val('');
                    $(hello.verify_code.selector).prop('readonly', false);
                    hello.marker(hello.verify_code.selector, null);
                });
            }
        } else {
            toast(res.message);
        }
    });
</script>

</body>
</html>