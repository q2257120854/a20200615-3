<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"/www/wwwroot/66/public/../application/varjoker/view/login/index.html";i:1541767614;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo \think\Config::get('config.title'); ?>-登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="/static/skin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="/static/skin/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="/static/skin/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <link href='/static/skin/css/font.css' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="/static/skin/css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <script src="/static/skin/js/jquery-1.10.2.min.js"></script>
    <!--clock init-->
</head>
<body>
<!--/login-->

<div class="error_page">
    <!--/login-top-->

    <div class="error-top">
        <h2 class="inner-tittle page"><?php echo \think\Config::get('config.title'); ?></h2>
        <div class="login">
            <h3 class="inner-tittle t-inner"></h3>
            <div class="buttons login">
                <ul>
                    <li><a href="javascript:;" class="hvr-sweep-to-right">后台管理</a></li>
                    <!--li class="lost"><a href="javascript:;" class="hvr-sweep-to-left">系统登录</a> </li-->
                    <div class="clearfix"></div>
                </ul>
            </div>

                <input type="text" class="text" id="email" placeholder="帐号">
                <input type="password" class="text" id="password" placeholder="密码">
                <div class="submit"><input type="submit" onclick="mylogin()" value="登录" ></div>
                <div class="clearfix"></div>

                <!--div class="new">
                    <p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i>Forgot Password ?</label></p>
                    <p class="sign">Do not have an account ? <a href="sign.html">Sign Up</a></p>
                    <div class="clearfix"></div>
                </div-->

        </div>


    </div>


    <!--//login-top-->
</div>

<!--//login-->
<!--footer section start-->
<div class="footer">
    <div class="error-btn">
        <!--<a class="read fourth" href="index.html">Return to Home</a>-->
    </div>
    <p><?php echo \think\Config::get('config.copyright'); ?></p>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close second" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title">系统提示</h2>
            </div>
            <div class="modal-body">
                <h2 id="boxmsg"></h2>
            </div>
            <div class="modal-footer">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
</div>
</div>

<!--footer section end-->
<!--/404-->
<!--js -->
<script src="/static/skin/js/jquery.nicescroll.js"></script>
<script src="/static/skin/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/static/skin/js/bootstrap.min.js"></script>
<script>
    function mylogin() {
     var email = $('#email').val();
     var pass  = $('#password').val();
     if(email == '' || pass == ''){
         $('#myModal').modal();
         $('#boxmsg').html('账号或密码不可为空');
         return false;
     }
     $.ajax({
         url:'LogChek.html',
         type:'POST',
         data:{user:email,pass:pass},
         datatype:'JSON',
         success:function(ret){
             if(ret.code == 0){
                 $('#myModal').modal();
                 $('#boxmsg').html(ret.msg);
                 return false;
             }else if(ret.code == 1){
                 window.location.href=ret.url;
         }
     }});

    }
</script>
</body>
</html>