<?php /*a:2:{s:62:"D:\wwwroot\prvd.cn\application\index\view\account\profile.html";i:1550201078;s:59:"D:\wwwroot\prvd.cn\application\index\view\common\world.html";i:1555433041;}*/ ?>
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
            修改资料
        </a>
        <div class="logo">
             <a id="cancle" href="javascript:history.go(-1)"><i class="icon icon-left"></i></a>
        </div>
        <a class="icon pull-right open-panel"></a>
    </header>
    
    <nav class="foot-bar">
        <div class="foot-menu"><a href="/account.html">
           <img src="/static/42/images/shouye@<?php echo app('request')->path()=='account' || app('request')->path() == ''?'3' : '1'; ?>x.png" alt=""><span class="<?php echo app('request')->path()=='account' || app('request')->path() == ''?'active' : ''; ?>">首页</span></a></div>
        <div class="foot-menu"><a href="/machine.html">
            <img src="/static/42/images/kuangjishangcheng@<?php echo app('request')->path()=='machine'?'3' : '1'; ?>x.png" alt=""></i><span class="<?php echo app('request')->path()=='machine'?'active' : ''; ?>">我的蚁后</span></a></div>
        <div class="foot-menu"><a href="/team.html">
            <img src="/static/42/images/tuandui@<?php echo app('request')->path()=='team'?'3' : '1'; ?>x.png" alt=""><span class="<?php echo app('request')->path()=='team'?'active' : ''; ?>">我的团队</span></a></div>
        <div class="foot-menu"><a href="/market.html">
            <img src="/static/42/images/jiaoyi%20(1)@<?php echo app('request')->path()=='market'?'3' : '1'; ?>x.png" alt=""></i><span class="<?php echo app('request')->path()=='market'?'active' : ''; ?>">交易中心</span></a></div>
        <div class="foot-menu"><a href="/home.html">
            <img src="/static/42/images/wo@<?php echo app('request')->path()=='home'?'3' : '1'; ?>x.png" alt=""><span class="<?php echo app('request')->path()=='home'?'active' : ''; ?>">会员中心</span></a></div>
    </nav>
    

    <div class="content" id="main_content">
        
<div class="buttons-tab">
    <a href="/account/profile.html" class="active button">个人资料</a>
    <a href="/account/password.html" class="button">修改登录密码</a>
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
    .btn-proof input[type="file"] {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        opacity: 0;
    }
</style>
<div class="list-block">
    <script type="text/javascript" src="/static/js/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/webuploader.css">
    <script type="text/javascript" src="/static/js/webuploader.js"></script>
    <script type="text/javascript" src="/static/js/getting-started.js"></script>
    <script type="text/javascript" src="/static/js/ajaxfileupload.js"></script>
    <script type="text/javascript">

        function uplodeFile() {
            var params = {};
            $.ajaxFileUpload
            (
                {
                    url: '/ajax_upload.html',//用于文件上传的服务器端请求地址
                    secureuri: false,//一般设置为false
                    data: params,
                    fileElementId: 'file',//文件上传空间的id属性  <input type="file" id="file" name="file" />
                    dataType: 'json',//返回值类型 一般设置为json
                    success: function (data)  //服务器成功响应处理函数
                    {
                        alert(data.message);
                        window.setTimeout("window.location='/ziliao.html'", 1000);
                        //window.location.href="/ziliao.html";//需要跳转的地址
                        return true;

                    },
                    error: function (data, status, e)//服务器响应失败处理函数
                    {
                        alert(e);
                    }
                }
            )
            return false;
        }
    </script>
    <ul>
        <li>
            <div class="item-content">
                <div class="item-media"><i class="icon icon-form-name"></i></div>
                <div class="item-inner">
                    <div class="item-title label">用户名</div>
                    <div class="item-input">
                        <?php echo htmlentities($user['account']['username']); ?>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="item-content">
                <div class="item-media"><i class="icon icon-form-name"></i></div>
                <div class="item-inner">
                    <div class="item-title label">推荐人</div>
                    <div class="item-input"><?php echo htmlentities($user['account']['inviter']); ?></div>
                </div>
            </div>
        </li>

        <li>
            <div class="item-content">
                <div class="item-media"><i class="icon icon-form-name"></i></div>
                <div class="item-inner">
                    <div class="item-title label">真实姓名</div>
                    <div class="item-input">
                        <?php echo htmlentities($user['profile']['realname']); ?>
                    </div>
                </div>
            </div>
        </li>

        <li>
            <div class="item-content">
                <div class="item-media"><i class="icon icon-form-name"></i></div>
                <div class="item-inner">
                    <div class="item-title label">支付宝</div>
                    <div class="item-input">
                        <?php echo htmlentities($user['profile']['alipay']); ?>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="item-content">
                <div class="item-media"><i class="icon icon-form-name"></i></div>
                <div class="item-inner">
                    <div class="item-title label">注册时间</div>
                    <div class="item-input"><?php echo htmlentities($user['account']['create_at']); ?></div>
                </div>
            </div>
        </li>
        <li>
            <div class="item-content">
                <div class="item-media"><i class="icon icon-form-name"></i></div>
                <div class="item-inner">
                    <div class="item-title label">收款码</div>
                    <div class="item-input">
                        <img src="<?php echo htmlentities($user['profile']['alipay_image']); ?>" alt="" width="100%" height="100%" id="xmTanImg"/>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="item-content">
                <div class="item-media"><i class="icon icon-form-name"></i></div>
                <div class="item-inner">
                    <div class="item-title label">收款码</div>
                    <div class="item-input">
                        <div>
                            <div class="uploader-list" style=" display:none;"><img src="static/picture/loader.gif">
                            </div>
                            <div class="webuploader-container">
                                <button class="btn btn-secondary btn-proof" data-option="5" data-type="image">上传支付宝二维码<input type="file" accept="image/*" /></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>

    </ul>
</div>

    </div>
</div>
<script type="text/javascript" src="/static/images/alert.js"  ></script>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>

<script type="text/javascript">
    $('.webuploader-container').on('change', 'input[type=file]', function(){
        if ($(this)[0].files.length) {
            ajax(api.account.profile, {image: $(this)[0].files[0]}, function(res){
                if (res.code == 200) {
                    $("#xmTanImg").attr('src',res.image)
                } else {
                    alert(res.message);
                }
            }, 'file');
        }
    });
</script>

</body>
</html>