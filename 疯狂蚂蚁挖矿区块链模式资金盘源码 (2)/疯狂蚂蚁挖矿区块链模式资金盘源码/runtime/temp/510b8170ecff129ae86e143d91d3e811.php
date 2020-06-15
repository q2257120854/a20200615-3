<?php /*a:2:{s:64:"/www/wwwroot/qiyu.ink/application/index/view/account/forgot.html";i:1553585954;s:62:"/www/wwwroot/qiyu.ink/application/index/view/common/world.html";i:1554545436;}*/ ?>
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
            找回密码
        </a>
        <div class="logo">
             <a id="cancle" href="javascript:history.go(-1)"><i class="icon icon-left"></i></a>
        </div>
        <a class="icon pull-right open-panel"></a>
    </header>
    

    <div class="content" id="main_content">
        
<form class="form-signin" id="loginForm" name="loginForm" method="post" onsubmit="return sub()">
    <div class="list-block">
        <ul>
            <li>
                <div class="item-content">
                    <div class="item-media"><i class="icon icon-form-name"></i></div>
                    <div class="item-inner">
                        <div class="item-title label">手机号</div>
                        <div class="item-input">
                            <input class="col-20" name="username" id="username" placeholder="手机号" type="text"
                                   maxlength="11"/>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="item-content">
                    <div class="item-media"><i class="icon icon-form-name"></i></div>
                    <div class="item-inner">
                        <div class="item-title label">短信验证码</div>
                        <input type="text" placeholder="短信验证码" name="code" id="code" maxlength="6"/>
                        <input name="button" type="button"
                               class="button button-fill button-warning  col-20 fr reg-mobile-js" style="width:200px;"
                               id="zphone" onclick="get_mobile_code();" value="获取验证码"/>
                    </div>
                </div>
            </li>

            <li>
                <div class="item-content">
                    <div class="item-media"><i class="icon icon-form-name"></i></div>
                    <div class="item-inner">
                        <div class="item-title label">登录密码</div>
                        <div class="item-input">
                            <input class="col-20" name="password" id="password" placeholder="登录密码" type="text" maxlength="32"/>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="item-content">
                    <div class="item-media"><i class="icon icon-form-name"></i></div>
                    <div class="item-inner">
                        <div class="item-title label">确认密码</div>
                        <div class="item-input">
                            <input class="col-20" name="confirm" id="confirm" placeholder="再输入一次登录密码" type="text" maxlength="32"/>
                        </div>
                    </div>
                </div>
            </li>



        </ul>

    </div>
    <div class="content-block">
        <div class="row">
            <div class="col-100">
                <input id="sub01" type="submit" class="button button-big button-fill button-success js-submit"
                       style="width: 100%;" value="确定找回"/>
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
    //发送短信验证码
    function get_mobile_code() {

        document.getElementById('zphone').value = '正在发送';
        document.getElementById('zphone').disabled = true;

        //发送手机短信开始
        $(function () {
            var params = {
                mobile : $("#username").val(),
            };
            $.ajax({
                type: 'post',
                url: api.service.sms,
                cache: false,
                data: params,
                dataType: 'json',
                success: function (data) {
                    alert(data.message);
                    if (data.code == 200) {
                        RemainTime();
                    } else {
                        document.getElementById('zphone').value = '重新发送';
                        document.getElementById('zphone').disabled = false;
                    }
                },
            });
        });
        //发送手机短信结束
    }
    var iTime = 180;
    var Account;
    //短信发送成功执行
    function RemainTime() {
        document.getElementById('zphone').disabled = true;
        var iSecond, sSecond = "", sTime = "";
        if (iTime >= 0) {
            iSecond = parseInt(iTime % 60);
            iMinute = parseInt(iTime / 60)
            if (iSecond >= 0) {
                if (iMinute > 0) {
                    sSecond = iMinute + "分" + iSecond + "秒";
                } else {
                    sSecond = iSecond + "秒";
                }
            }
            sTime = sSecond;
            if (iTime == 0) {
                clearTimeout(Account);
                sTime = '获取手机验证码';
                iTime = 59;
                document.getElementById('zphone').disabled = false;
            } else {
                Account = setTimeout("RemainTime()", 1000);
                iTime = iTime - 1;
            }
        } else {
            sTime = '没有倒计时';
        }
        document.getElementById('zphone').value = sTime;
    }
    //注册账户
    function sub() {
        if (!$("#username").val()) {
            alert("手机号不能为空");
            return false;
        }
        if (!$("#code").val()) {
            alert("短信验证码不能为空");
            return false;
        }
        if (!$("#password").val()) {
            alert("登录密码不能为空");
            return false;
        }
        if (!$("#confirm").val()) {
            alert("确认密码不能为空");
            return false;
        }
        if ($("#confirm").val() != $("#password").val())
        {
            alert("很抱歉、确认登录密码必须与登录密码一致！");
            return false;
        }
        $("#sub01").attr("disabled", "disabled");
        $(function () {
            var params = {
                username: $("#username").val(),
                verify_code: $("#code").val(),
                password: $("#password").val(),
                confirm: $("#confirm").val()
            };
            $.ajax({
                type: 'post',
                url: api.account.forgot,
                cache: false,
                data: params,
                dataType: 'json',
                success: function (data) {
                    alert(data.message);
                    if (data.code == 200) {
                        window.setTimeout("window.location='/signin.html'", 1000);
                        //window.location.href="login.html";//需要跳转的地址
                        return true;
                    } else {
                        $("#sub01").removeAttr('disabled');
                    }

                },
            });
        });
        return false;
        var isCommitted = false;//表单是否已经提交标识，默认为false  
        if (isCommitted == false) {
            isCommitted = true;//提交表单后，将表单是否已经提交标识设置为true
            return true;//返回true让表单正常提交
        } else {
            return false;//返回false那么表单将不提交
        }
    }
</script>

</body>
</html>