<?php /*a:2:{s:61:"D:\wwwroot\prvd.cn\application\index\view\account\signin.html";i:1555510915;s:59:"D:\wwwroot\prvd.cn\application\index\view\common\world.html";i:1555433041;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex,nofollow">
    <meta name="robots" content="noarchive">
    <title><?php echo htmlentities(app('config')->get('hello.title')); ?></title>
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
  <style>
    .foot-menu img{
        width: 30%;
        height: 30%;
        margin: 0 auto;
    }
    .foot-menu span{
       color:#4f528c;
    }
    .foot-menu .active{
      color: #53acff;
    }
    .foot-bar{
    	background: #323663;
    }
  </style>
    
</head>

<body>
<!-- content -->
<div class="page">
    <header class="bar bar-nav">

        <a style="position: absolute;z-index: 19;width: 94%;text-align: center;display: inline-block;line-height: 50px;font-size: 1.1rem; color:#FFF;">
            用户登陆
        </a>
        <div class="logo">
             <a id="cancle" href="javascript:history.go(-1)"><i class="icon icon-left"></i></a>
        </div>
        <a class="icon pull-right open-panel"></a>
    </header>
    

    <div class="content" id="main_content">
        
<style type="text/css">
    .page{
      background: url(/static/images/loginbg.jpg) 50%;
      background-size: cover;
    }
    .page {
        background-color: #fff;
    }
    #cancle{
        display: none;
    }
    .list-block {
        margin: 1.75rem 1rem;
    }

    .list-block ul {
        background: none;
        color: #777575;
    }

    .list-block input[type="text"], .list-block input[type="password"] {
        color: #777575;
    }

    .list-block .item-content {
        padding-left: 0px;
    }

    .list-block .item-media + .item-inner {
        margin-left: 0.5rem;
    }

    .button-success.button-fill {
        color: #FFF;
        font-size: 1.2rem;
        border-radius: 20px;
    }

    .button-success.button-fill:active {
        background-color: #2672ac;
    }

    .list-block .item-title.label {
        width: 25%;
    }
</style>

<form method="post" onsubmit="return sub()">
    <div class="content" style="margin-bottom:0px;">
        <div style="height:22%; text-align:center;">
            <img src="/static/images/logo.png" alt="" width="180px;" height="60px" style="margin-top: 20px;"/>
        </div>
        <div class="list-block">
            <ul>
                <!-- Text inputs -->
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon iconfont icon-wxbzhanghu"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">手机号</div>
                            <div class="item-input">
                                <input name="username" type="text" id="username" placeholder="请输入手机号"
                                       onkeyup="value=value.replace(/[^\d]/g,'')" maxlength="11"/>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-media"><i class="icon iconfont icon-lock"></i></div>
                        <div class="item-inner">
                            <div class="item-title label">密&nbsp;码</div>
                            <div class="item-input">
                                <input type="password" name="password" id="password" placeholder="请输入密码"
                                       maxlength="16"/>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>

            <div class="content-block" style="padding:0;">
                <div class="row">
                    <div class="col-100">
                        <input type="button" value="登 &nbsp; &nbsp; 录"
                               class="button button-big button-fill button-success" id="btnn"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-50 login-link">
                        <a href="/signup.html" style=" color:#333333;">注册新用户</a>
                    </div>
                    <div class="col-50 login-link" style="text-align: right;">
                        <a href="/forgot.html" style="color:#333333;">找回密码</a>
                    </div>
                </div>
              <div style="margin-top: 50px;color: #333333;text-align: center;"><a href="https://ei3o5h.cn/app.php/112">APP下载</a></div>
              <div align="center" style="margin-top:20px;color:#333333">
             客服微信 ycb0188
        </div>
            </div>
        </div>
        <?php if(!(empty($appurl) || (($appurl instanceof \think\Collection || $appurl instanceof \think\Paginator ) && $appurl->isEmpty()))): ?>
        <div align="center">
            <a href="images/erweima.png">点击下载APP</a><br>
        </div>
        <?php endif; ?>
    </div>
</form>

    </div>
</div>
<script type="text/javascript" src="/static/images/alert.js"  ></script>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#btnn').click(function () {
            if (!$("#username").val()) {
                alert('请输入账号!');
                return false;
            }

            if (!$("#password").val()) {
                alert('请输入密码!');
                return false;
            }

            $("#btnn").attr("disabled", "true");
            $(function () {
                var params = {
                    username: $("#username").val(),
                    password: $("#password").val(),
                };
                $.ajax({
                    type: 'post',
                    url: api.account.signin,
                    cache: false,
                    data: params,
                    dataType: 'json',
                    success: function (data) {
                        alert(data.message);
                        if (data.code == 200) {
                            window.setTimeout("window.location='/account.html'", 1000);
                            //window.location.href="main.html";//需要跳转的地址
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