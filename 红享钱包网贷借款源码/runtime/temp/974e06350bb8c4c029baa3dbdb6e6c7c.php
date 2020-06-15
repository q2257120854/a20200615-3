<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\wwwroot\demo.52jscn.com\public/../application/index\view\login\reg.html";i:1546517214;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>用户注册</title>
    <link href="/static/new/css/mui.min.css" rel="stylesheet" />
    <link href="/static/new/css/style.css" rel="stylesheet" />
    <style type="text/css">
        body{
            background: #fff;
        }
        body:before {
            content: ' ';
            position: fixed;
            z-index: -1;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: url(/static/new/images/login_bg.jpg) no-repeat #fff bottom center;
            background-size: cover;
        }
    </style>
</head>
<body>
<!-- <header>
    <a class="mui-icon" onclick="javaScript:history.go(-1)">
        <img src="images/head_back.png">
    </a>
    <a href="#" class="top_xiaoxi">
        <img src="images/xiaoxi_weidu.png">
    </a>
</header> -->
<div class="wrap login">
    <div class="logoer mui-text-center">
        <img src="/static/new/images/login_logo.png" class="lo_logoimg">
    </div>
    <div class="inputer">
        <p class="ipt_p">
            <img src="/static/new/images/login_ioc01.png" class="ipt_ioc">
            <input type="tel" name="" placeholder="手机号" id="login_ipt01">
            <span class="cw_tishi" style="display: none">请输入正确的手机号码</span>
        </p>
        <p class="ipt_p">
            <img src="/static/new/images/login_ioc02.png" class="ipt_ioc">
            <input type="text" name="" placeholder="验证码" id="login_ipt02">
            <a id="redcode" class="fa_yzm"><span onclick="smscode()">发送验证码</span></a>
        </p>
        <p class="ipt_p">
            <img src="/static/new/images/login_ioc03.png" class="ipt_ioc">
            <input type="password" name="" placeholder="设置密码" id="login_ipt03">
            <span class="cw_tishi" style="display: none">密码至少设置6位</span>
        </p>
        <p class="ipt_p">
            <img src="/static/new/images/login_ioc03.png" class="ipt_ioc">
            <input type="password" name="" placeholder="重复密码" id="login_ipt04">
            <span class="cw_tishi" style="display: none">两次输入密码不一致</span>
        </p>
    </div>
    <div class="btner">
        <p class="btn_p"><button class="l_btn01" onclick="tijiao()">注册</button></p>
        <p class="btn_p"><button class="l_btn02" onclick="login()">去登录</button></p>
    </div>
</div>
</body>
<script src="/static/new/js/mui.min.js"></script>
<script src="/static/new/js/jquery.min.js"></script>
<script>
    mui('footer').on('tap','a',function(){document.location.href=this.href;});
    function login(){
        window.location.href="<?php echo url('login/index'); ?>"; 	//url跳转
    }

    function tijiao(){
        if(shouji_yz() && yzm_yz() &&  pass01_yz() &&  pass02_yz()){
            // 成功
            var mobile = $("#login_ipt01").val();
            var recode = $("#login_ipt02").val();
            var password = $("#login_ipt03").val();
            $.ajax({
                url:'<?php echo url('login/regdata'); ?>',
                type:'POST',
                data:{mobile,mobile,recode:recode,password:password},
                datatype:'JSON',
                success:function (data) {
                if(data.code == 1){
                    mui.toast(data.msg,{ duration:'long', type:'div' });
                    setTimeout(function(){window.location.href = data.url;},data.wait*1000);
                }else{
                    mui.toast(data.msg,{ duration:'long', type:'div' });
                }
            }
            });
        }
    }

    // 手机号验证
    function shouji_yz(){
        var shouji_val = $("#login_ipt01").val();
        var reg = /^[1][3,4,5,7,6,8,9][0-9]{9}$/;
        if(reg.test(shouji_val) === false){
            $("#login_ipt01").next().show();
            return false;
        }else{
            $("#login_ipt01").next().hide();
            return true;
        }
    }
    // 验证码验证
    function yzm_yz(){
        var yzm_val = $("#login_ipt02").val();
        if(yzm_val.length < 4){
            mui.alert("请输手机收到的验证码")
            return false;
        }else{
            return true;
        }
    }
    // 密码验证
    function pass01_yz(){
        var pass01_val = $("#login_ipt03").val();
        if(pass01_val.length < 6){
            $("#login_ipt03").next().show();
            return false;
        }else{
            $("#login_ipt03").next().hide();
            return true;
        }
    }
    // 重复密码验证
    function pass02_yz(){
        var pass01_val = $("#login_ipt03").val();
        var pass02_val = $("#login_ipt04").val();
        if(pass01_val === pass02_val){
            $("#login_ipt04").next().hide();
            return true;
        }else{
            $("#login_ipt04").next().show();
            return false;
        }

    }
    //发送验证码
    function smscode() {
        if(shouji_yz()){
            var mobile = $("#login_ipt01").val();
            $.get('<?php echo url('login/smscode'); ?>?tip=1001&mobile='+mobile,function (sms) {
                if(sms.code ==1){
                    mui.alert("短信验证码发送成功");
                    $('#redcode').html('已发送');
                }else if(sms.code == 0){
                    mui.alert(sms.msg+"33");
                }
            });
        }

    }
</script>
</html>