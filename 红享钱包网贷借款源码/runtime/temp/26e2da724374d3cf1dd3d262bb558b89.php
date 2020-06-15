<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"/www/wwwroot/qumuban.com/public/../application/index/view/login/index.html";i:1536301790;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>用户登录</title>
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
            <img src="/static/new/images/login_ioc03.png" class="ipt_ioc">
            <input type="password" name="" placeholder="登录密码" id="login_ipt03">
            <span class="cw_tishi" style="display: none">密码至少6位</span>
        </p>
    </div>
    <p class="mui-text-right wangji_pass"><a href="<?php echo url('login/findpass'); ?>">忘记密码</a></p>
    <div class="btner">
        <p class="btn_p"><button class="l_btn01" onclick="tijiao()">登录</button></p>
        <p class="btn_p"><button class="l_btn02" onclick="reg()">去注册</button></p>
    </div>
</div>
</body>
<script src="/static/new/js/mui.min.js"></script>
<script src="/static/new/js/jquery.min.js"></script>
<script>
    mui('footer').on('tap','a',function(){document.location.href=this.href;});
    function reg(){
        window.location.href="<?php echo url('login/reg'); ?>"; 	//url跳转
    }

    function tijiao(){
        if(shouji_yz() &&  pass01_yz()){
            // 成功
            var mobile = $("#login_ipt01").val();
            var password = $("#login_ipt03").val();
            $.ajax({
                url:'<?php echo url('login/logchek'); ?>',
                type:'POST',
                data:{mobile:mobile,password:password},
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

</script>
</html>