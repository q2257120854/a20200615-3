<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"/www/wwwroot/m.mkuaixun09.cn/public/../application/index/view/login/register.html";i:1541433566;}*/ ?>
<!DOCTYPE html>
<html lang="en" data-dpr="1" style="font-size: 55.2px;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title><?php echo \think\Config::get('config.title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link href="/static/new/css/mui.min.css" rel="stylesheet" />
    <style type="text/css">
        *{
            box-sizing: border-box;

        }
        div,form,ul,li,ol,h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        body{
            margin: 0;
            background: <?php echo \think\Config::get('tuiguang.color'); ?>;
            color:#666;
        }
        .banner{
            width: 100%;
            overflow: hidden;
            height: 5.00rem;
        }
        .banner img{
            width:100%;
        }
        .group{
            background-color: <?php echo \think\Config::get('tuiguang.centcolor'); ?>;
          
            background-image: url(/static/reg/bg.png);
            background-repeat: no-repeat;
            background-size: contain;
            height:7.06rem;
            padding: 0 0.55rem;
          padding-top: 10px;
        }
        .form-input{
            border-radius: 0.40rem;
            background-color: #FFF;
            padding:0.20rem 0.40rem;
            margin-bottom: 0.30rem;
            font-size:0.28rem;
            line-height: 0.40rem;
        }
        .form-input input{
            border: 0;
            vertical-align: middle;
            margin: 0;
            padding: 0;
            height: 0.40rem;
            line-height: 0.40rem;
            font-size:0.28rem;
            outline: none;
        }

        .form-icon-m{
            background-image: url(/static/reg/mobile.png);
            background-repeat: no-repeat;
            background-size:auto 0.28rem;
            background-position: 0.40rem center;
            padding-left: 0.90rem;
        }
        .form-icon-c{
            background-image: url(/static/reg/code.png);
            background-repeat: no-repeat;
            background-size:auto 0.28rem;
            background-position: 0.38rem center;
            padding-left: 0.90rem;
        }
        .form-icon-p{
            background-image: url(/static/reg/pass.png);
            background-repeat: no-repeat;
            background-size:auto 0.28rem;
            background-position: 0.42rem center;
            padding-left: 0.90rem;
        }
        .form-check{
            font-size: 0.24rem;
            line-height: 1em;
            text-align: center;
            color: #FFF;
            vertical-align: middle;
            margin-bottom: 0.30rem;
        }
        .form-check input{
            vertical-align: middle;
        }
        .form-btn{
            border-radius: 0.50rem;
            background-color: <?php echo \think\Config::get('tuiguang.buttomc'); ?>;
            padding:0.20rem 0.40rem;
            margin-bottom: 0.30rem;
            font-size:0.28rem;
            line-height: 0.40rem;
            text-align: center;
            border: 0.02rem solid #340207;
            /*background-image: url(/static/reg/btn_bg.png);*/
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
              .appform-btn{
            border-radius: 0.50rem;
            background-color: <?php echo \think\Config::get('tuiguang.appbuttomc'); ?>;
            padding:0.20rem 0.40rem;
            margin-bottom: 0.30rem;
            font-size:0.28rem;
            line-height: 0.40rem;
            text-align: center;
            border: 0.02rem solid #340207;
            /*background-image: url(/static/reg/btn_bg.png);*/
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .form-btn input{
            background: none;
            background: transparent;
            border: none;
            font-size:0.32rem;
            color:#FFF;
        }
        .info{
            background-color: #FFF6E8;
            padding:0 0.38rem;
        }
        .info>div{
            height:2.06rem;
            border-bottom: 0.01rem solid #979797;
        }
        .info>div:last-child{
            border-bottom: 0;
        }
        .info h2{
            font-size: 0.32rem;
            line-height: 2.06rem;
            display: inline-block;
            color:#340207;
        }
        .info span{
            font-size: 0.28rem;
            line-height: 2.06rem;
            color:#666666;
        }
        .info-icon-s{
            background-repeat: no-repeat;
            background-image: url(/static/reg/Group2.png);
            background-size: auto 1.11rem;
            background-position: left center;
            padding-left: 1.72rem;
        }
        .info-icon-e{
            background-repeat: no-repeat;
            background-image: url(/static/reg/Group3.png);
            background-size: auto 1.11rem;
            background-position: right center;
            padding-right: 1.72rem;
        }
        .info-icon-f{
            background-repeat: no-repeat;
            background-image: url(/static/reg/Group4.png);
            background-size: auto 1.11rem;
            background-position: left center;
            padding-left: 1.72rem;
        }
        /*dialog*/
        .dialog,.dialog-box{
            position: fixed;
            top:0;
            bottom: 0;
            left:0;
            right:0;
            z-index: 9999;
        }
        .dialog-mask,.dialog-box-mask{
            position: fixed;
            top:0;
            bottom: 0;
            left:0;
            right:0;
            background-color: rgba(0,0,0,0.3);
        }
        .dialog-box-mask{
            position: fixed;
            top:0;
            bottom: 0;
            left:0;
            right:0;
            background-color: rgba(0,0,0,0.8);
        }
        .dialog-alert,.dialog-box-alert{
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            background-color: rgba(255,255,255,1);
            border-radius: 0.06rem;
            width: 80%;
        }
        .dialog-msg,.dialog-box-msg{
            font-size: 0.28rem;
            color: #000;
            text-align: left;
            padding: 2.7em 20px 1.7em;

        }
        .dialog-btn,.dialog-box-btn{
            background: <?php echo \think\Config::get('tuiguang.buttomc'); ?>;
            font-size: 0.32rem;
            color: #0BB20C;
            padding: 0.25rem 0 0.25rem;
            text-align: center;
            border-top: 0.01rem solid #EEEEEE;
            margin-top: 0.20rem;
        }

        .dialog-btn:active,.dialog-box-btn:active{
            background-color: rgba(0,0,0,.05);
        }

        .dialog-box-prompt{
            position: fixed;
            padding: 0 0.30rem;
        }
        .dialog-box-prompt img{
            width: 100%;
        }
        /*dialog*/
        .arrow{
            position: relative;
        }
        .arrow:before{
            content: "";
            position: absolute;
            width: 0.32rem;
            height: 0.32rem;
            border: 0.01rem solid #FFF;
            border-width: 0.01rem 0 0 0.01rem;
            -webkit-transform: rotate(-135deg);
            transform: rotate(-135deg);
            top: 50%;
            left: 50%;
            margin-left: -0.16rem;
        }
        .err-msg{
            color:#f9dd17;
            font-size: 0.24rem;
            text-align: center;
        }
        .submit{

        }
        .submit[disabled]{
            color: #CCC;
        }
        .loading{
            position: absolute;
            z-index: 1052;
        }
        .loading-bg{
            position: fixed;
            left: 0;
            right:0;
            bottom:0;
            top:0;
            background-color: rgba(0,0,0,0);
        }
        .loading-content{
            position: fixed;
            left: 35%;
            right:35%;
            top:40%;
            background-color: #000000;
            text-align: center;
            color:#FFF;
            border-radius: .3em;
            padding: .5em 0;
            opacity: .8;
        }
        .loading-content progress{
            opacity: .5;
        }
        /*错误提示*/
        .error-msg{
            font-size:12px;
            color:red;
        }

        /*loading*/
        .spinner {
            margin: 20px auto;
            width: 30px;
            height: 30px;
            position: relative;
        }

        .container1 > div, .container2 > div, .container3 > div {
            width: 6px;
            height: 6px;
            background-color: #CCCCCC;

            border-radius: 100%;
            position: absolute;
            -webkit-animation: bouncedelay 1.2s infinite ease-in-out;
            animation: bouncedelay 1.2s infinite ease-in-out;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .spinner .spinner-container {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .container2 {
            -webkit-transform: rotateZ(45deg);
            transform: rotateZ(45deg);
        }

        .container3 {
            -webkit-transform: rotateZ(90deg);
            transform: rotateZ(90deg);
        }

        .circle1 { top: 0; left: 0; }
        .circle2 { top: 0; right: 0; }
        .circle3 { right: 0; bottom: 0; }
        .circle4 { left: 0; bottom: 0; }

        .container2 .circle1 {
            -webkit-animation-delay: -1.1s;
            animation-delay: -1.1s;
        }

        .container3 .circle1 {
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
        }

        .container1 .circle2 {
            -webkit-animation-delay: -0.9s;
            animation-delay: -0.9s;
        }

        .container2 .circle2 {
            -webkit-animation-delay: -0.8s;
            animation-delay: -0.8s;
        }

        .container3 .circle2 {
            -webkit-animation-delay: -0.7s;
            animation-delay: -0.7s;
        }

        .container1 .circle3 {
            -webkit-animation-delay: -0.6s;
            animation-delay: -0.6s;
        }

        .container2 .circle3 {
            -webkit-animation-delay: -0.5s;
            animation-delay: -0.5s;
        }

        .container3 .circle3 {
            -webkit-animation-delay: -0.4s;
            animation-delay: -0.4s;
        }

        .container1 .circle4 {
            -webkit-animation-delay: -0.3s;
            animation-delay: -0.3s;
        }

        .container2 .circle4 {
            -webkit-animation-delay: -0.2s;
            animation-delay: -0.2s;
        }

        .container3 .circle4 {
            -webkit-animation-delay: -0.1s;
            animation-delay: -0.1s;
        }
        .form-control[readonly]{
            color:#ccc;
        }
        .region[readonly]{
            color:#999;
        }

        @-webkit-keyframes bouncedelay {
            0%, 80%, 100% { -webkit-transform: scale(0.0) }
            40% { -webkit-transform: scale(1.0) }
        }

        @keyframes bouncedelay {
            0%, 80%, 100% {
                transform: scale(0.0);
                -webkit-transform: scale(0.0);
            } 40% {
                  transform: scale(1.0);
                  -webkit-transform: scale(1.0);
              }
        }
      .appform-btn input {
    background: none;
    background: transparent;
    border: none;
    font-size: 0.32rem;
    color: #FFF;
}
        /*loading*/
    </style>
</head>
<body style="font-size: 0.32rem;">
<div class="page-content">
    <div class="banner">
        <img src="<?php echo \think\Config::get('tuiguang.bgimg'); ?>" style="height:5rem;">
    </div>
    <div class="group">
        <form action="<?php echo url('login/regdatas'); ?>" method="post" id="idform">
        <div class="form-input form-icon-m">
            <input type="tel" placeholder="请输入手机号码" name="mobile" id="mobileNo" maxlength="11">
        </div>
        <div class="form-input form-icon-c">
            <input type="tel" placeholder="请输入验证码" name="recode" maxlength="6" id="validCode" style="width:2.44rem;"><span style="color: #EEEEEE;">| </span><span style="color:#CCC" id="getValicode">发送短信</span>
        </div>
        <div class="form-input form-icon-p">
            <input type="password" placeholder="请输入密码" name="password" id="password" maxlength="16">
        </div>
        <div class="form-check">
            <input type="checkbox" checked="" id="agree">同意<a href="<?php echo url('index/regtext'); ?>" style="text-decoration: none;color:#FFF">《注册协议》</a>
        </div>
        <div class="form-btn">
            <input type="button" value="立即注册" class="submit" onclick="tijiao()">
        </div>
        </form>
      <div class="appform-btn">
            <input type="button" value="APP下载" class="submit" onclick="appdown()">
        </div>
        <div class="err-msg">&nbsp;</div>
        <div>
            <div class="arrow"></div>
        </div>
    </div>
    <div class="info">
        <div class="info-icon-s"><h2 style="padding-right:0.60rem;">申请易</h2><span>有</span><span style="color:#FFBE04">身份证</span><span>就能贷！</span></div>
        <div class="info-icon-e"><h2 style="padding-right:0.60rem;">额度高</h2><span>仅凭身份证就可贷</span><span style="color:#FFBE04">5万</span><span>！</span></div>
        <div class="info-icon-f"><h2 style="padding-right:0.60rem;">放贷快</h2><span>快至</span><span style="color:#FFBE04">五分钟</span><span>放款；</span></div>
    </div>
    <footer style="text-align: center;font-size: 0.24rem;color:#666; line-height: 2;height: 30px;">
        <?php echo \think\Config::get('config.copyright'); ?>
    </footer>
</div>
<div>
</div>

<script src="/static/new/js/mui.min.js"></script>
<script src="/static/new/js/jquery.min.js"></script>
<script>

$("#mobileNo").on('input',function(){
    if($('#mobileNo').val().length == 11){
       $.get("<?php echo url('login/getmobile'); ?>?mobile="+$('#mobileNo').val(),function (data) {
           if(!data){
               mui.alert("当前账号已注册，正在跳转下载页面");
               setTimeout("appdown()",2000)
               return false;
           }else{
               $('#getValicode').css({"color":"#000"});
               $('#getValicode').attr("onclick","sendsms();");
           }

       });
    }
})
//发送短信
    function sendsms() {
        var mobile = $('#mobileNo').val();
        $.get('<?php echo url('login/smscode'); ?>?tip=1001&mobile='+mobile,function (sms) {
            if(sms.code ==1){
                mui.alert("短信验证码发送成功");
              daojishi();
                $('#getValicode').html('已发送');
                $("#getValicode").removeAttr("onclick");
            }else if(sms.code == 0){
                mui.alert(sms.msg);
            }
        });
    }
    var i = 60;
  	function daojishi(){
       i = i - 1;  
    $("#getValicode").html("重发"+i+"秒");  
    if (i == 0) {  
        $("#getValicode").html("重新发送");
         $("#getValicode").attr("onclick","sendsms();");
        i = 60;  
        return;  
    }  
    setTimeout('daojishi()',1000);  
    }
  
    function tijiao() {
       var mobile = $('#mobileNo').val();
       var recode = $('#validCode').val();
       var passwd = $('#password').val();
       if(mobile && recode && passwd){
           $("#idform").submit();
       }else{
           mui.alert("提交数据错误，请重新提交");
       }
    }
    function appdown() {
		 window.location.href='<?php echo \think\Config::get('tuiguang.and'); ?>';
       /* var u = navigator.userAgent, app = navigator.appVersion;
        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; //g
        var isIOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
        if (isAndroid) {
            //这个是安卓操作系统
            window.location.href='<?php echo \think\Config::get('tuiguang.and'); ?>';
            return false;
        }
        if (isIOS) {
            //这个是ios操作系统
            window.location.href='<?php echo \think\Config::get('tuiguang.ios'); ?>';
            return false;
        }*/
    }

</script>

</body></html>