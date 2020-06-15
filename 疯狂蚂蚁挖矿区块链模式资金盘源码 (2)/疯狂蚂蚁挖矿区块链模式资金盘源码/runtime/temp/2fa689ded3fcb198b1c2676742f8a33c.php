<?php /*a:2:{s:69:"/www/wwwroot/url.stak.cn/application/index/view/account/message.html";i:1566132242;s:66:"/www/wwwroot/url.stak.cn/application/index/view/common/world.html";i:1566132242;}*/ ?>
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
            联系客服
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
        
<div class="list-block" style="margin:0px;">
    <ul>
        <li>
            <div class="item-content">
                <div class="item-media"><i class="icon icon-form-name"></i></div>
                <div class="item-inner">
                    <div class="item-title label" style="width: 60px;">标题</div>
                    <div class="item-input">
                        <input class="col-20" name="title" id="title" placeholder="请输入你要咨询的问题" type="text" value=""
                               maxlength="11"/>

                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="item-content">
                <div class="item-media"><i class="icon icon-form-name"></i></div>
                <div class="item-inner">
                    <div class="item-title label" style="width: 60px;">内容</div>
                    <div class="item-input" style="height: 190px;">
                        <textarea style="border: 1px solid	#F0FFFF;;height: 180px;" rows="3" placeholder="请输入您要咨询的内容"
                                  id="content" name="content" maxlength="400"></textarea>

                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="content-block">
                <div class="row">
                    <div class="col-100">
                        <input id="btnn" type="button" class="button button-big button-fill button-success js-submit"
                               style="width: 100%;" value="提交"/>
                        <br/>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <br/>
    <ul class="list-container" id="list_content">
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$message): $mod = ($i % 2 );++$i;?>
        <li>
            <a href="/message.html?id=<?php echo htmlentities($message['id']); ?>" class="item-link item-content">
                <div class="item-inner">
                    <div class="item-title" style="padding-left:10px; font-size:16px;">

                        <?php echo htmlentities($message['title']); ?> -<?php echo !empty($message['reply']) ? '已回复' : '未回复'; ?>-<?php echo htmlentities($message['create_at']); ?>
                    </div>
                </div>
            </a>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>

    <div align="right" class="pages" style="background-color: #fff">
        <br/>
        <?php if($page>1): ?>
        <a class="previous" href="buying.html?page=<?php echo htmlentities($page-1); ?>">上一页</a>
        <?php endif; ?>
        <span class="current"><?php echo htmlentities($page); ?></span>
        <?php if(($page+1)<$index): ?>
        <a class="next" href="buying.html?page=<?php echo htmlentities($page+1); ?>">下一页</a>
        <?php endif; ?>
        <span class="rows"> 第<b><?php echo htmlentities($page); ?></b>页/共<b><?php echo htmlentities($index); ?></b>页</span>
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
            if (!$("#title").val()) {
                alert("标题不能为空");
                return false;
            }
            if (!$("#content").val()) {
                alert("内容不能为空");
                return false;
            }
            $('#btnn').attr("disabled", "true");

            $(function () {
                var params = {
                    title: $("#title").val(),
                    content: $("#content").val()

                };
                $.ajax({
                    type: 'post',
                    url: api.account.message,
                    cache: false,
                    data: params,
                    dataType: 'json',
                    success: function (data) {
                        alert(data.message);
                        if (data.code == 200) {
                            window.setTimeout("window.location='/message.html'", 1000);
                            //window.location.href="message.html";//需要跳转的地址
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