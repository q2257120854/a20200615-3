<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\wwwroot\demo.52jscn.com\public/../application/index\view\info\idcard.html";i:1540574525;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>实名认证</title>
    <link href="/static/new/css/mui.min.css" rel="stylesheet" />
    <link href="/static/new/css/style.css" rel="stylesheet" />
    <style type="text/css">
        body{
            /*background: #fff;*/
        }
    </style>
</head>
<body>
<header>
    <a class="mui-icon" onclick="javaScript:history.go(-1)">
        <img src="/static/new/images/head_back.png">
    </a>
    <p class="mui-text-center">实名认证</p>
</header>
<form action="<?php echo url('info/idcard'); ?>" method="post" id="upload_files" onsubmit="return false;">
<div class="wrap shiming_rz">
    <p class="renzheng_title">实名认证一旦成功认证不可修改</p>
    <ul class="sm_ul">
        <li class="sm_list">
            <p class="sm_title">真实姓名</p>
            <p class="sm_ipt"><input type="text" id="rz_put01" name="name" placeholder="请输入真实姓名"></p>
            <p class="cw_tishi" style="display: none">请输入姓名</p>
        </li>
        <li class="sm_list">
            <p class="sm_title">证件号码</p>
            <p class="sm_ipt"><input type="number" id="rz_put02" name="idcard" placeholder="请输入您的证件号码"></p>
            <p class="cw_tishi" style="display: none">请输入正确的证件号码</p>
        </li>
    </ul>
    <p class="sm_ptn_p"><button onclick="tijiao()">提交认证</button></p>
</div>
</form>
<footer>
    <nav class="mui-bar mui-bar-tab">
        <a class="mui-tab-item" href="<?php echo url('index/index'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc01_b.png"></span>
            <span class="mui-tab-label">首页</span>
        </a>
        <a class="mui-tab-item" href="<?php echo url('loan/index'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc02_b.png"></span>
            <span class="mui-tab-label">借款</span>
        </a>
        <a class="mui-tab-item" href="<?php echo url('user/cion'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc03_b.png"></span>
            <span class="mui-tab-label">钱包</span>
        </a>
        <a class="mui-tab-item mui-active" href="<?php echo url('user/index'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc04_a.png"></span>
            <span class="mui-tab-label">我的</span>
        </a>
    </nav>
</footer>
</body>
<script src="/static/new/js/mui.min.js"></script>
<script src="/static/new/js/jquery.min.js"></script>
<script src="/static/new/js/shangchuan.js"></script>
<script>
    mui('footer').on('tap','a',function(){document.location.href=this.href;});
    function tijiao(){
    mui.toast('正在认证中....',{ duration:'long', type:'div' });
    var data = new FormData($('#upload_files')[0]);
  
      setTimeout(function () { 
           $.ajax({
        url: '<?php echo url('info/idcard'); ?>',//上传路径
        type: 'POST',
        data: data,
        dataType: 'JSON',
        cache: false,
        processData: false,
        contentType: false,
        success: function (data) {
        mui.toast('认证成功',{ duration:'long', type:'div' });
        window.setTimeout("window.location='<?php echo url('user/renzheng'); ?>'",2000);
    }
})
    }, 3000);



    }

    // 姓名验证
    function name_yz(){
        var name_val = $("#rz_put01").val();
        var reg =  /^[\u4E00-\u9FA5A-Za-z]+$/;
        if(reg.test(name_val) === false){
            $("#rz_put01").parent().next().show();
            return false;
        }else{
            $("#rz_put01").parent().next().hide();
            return true;
        }
    }
    // 身份证号码验证
    function shenfen_yz(){
        var shenfen_id = $("#rz_put02").val();
        var reg = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
        if(reg.test(shenfen_id) === false){
            $("#rz_put02").parent().next().show();
            return false;
        }else{
            $("#rz_put02").parent().next().hide();
            return true;
        }

    }
</script>
</html>