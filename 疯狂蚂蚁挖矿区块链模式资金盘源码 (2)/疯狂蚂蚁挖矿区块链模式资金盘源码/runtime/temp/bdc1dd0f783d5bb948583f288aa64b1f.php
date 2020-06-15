<?php /*a:2:{s:63:"/www/wwwroot/77q73.cn/application/index/view/account/index.html";i:1551531764;s:62:"/www/wwwroot/77q73.cn/application/index/view/common/world.html";i:1551429184;}*/ ?>
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
            会员中心
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
        
<style>
.main_menu_bg {
    width: 25%;
}
</style>
<div class="swiper-container" data-space-between="10">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="static/images/b_2.jpg" alt=""></div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<div class="row" style="margin-left:0px;">
    <div class="main_menu_bg" onclick="javascript:qiandao()" style="display: none;"><img src="static/images/hot.png"><span>我要签到</span>
    </div>
    <div class="main_menu_bg"><a href="/news.html"><img src="static/images/duihuan.png"/><span>系统公告</span></a>
    </div>

    <div class="main_menu_bg"><a href="/team/inviter.html"><img src="static/images/qiandao.png"/><span>推广二维码</span></a>
    </div>

    <div class="main_menu_bg"><a href="javascript:alert('暂未开放')"><img src="static/images/dingdan.png"/><span>回购</span></a>
    </div>

    <div class="main_menu_bg"><a href="/message.html"><img src="static/images/dingdan.png"/><span>联系客服</span></a>
    </div>
</div>

<div align="center" style="padding: 10px; font-size:12px;display: none">
    发行量
</div>
<div class="row" style="margin-left:0px;">
    <div class="main_now_tab">
        <div class="now_title">蚁后商城</div>
        <div class="content-padded lobby-nav">
            <?php if(is_array($shop) || $shop instanceof \think\Collection || $shop instanceof \think\Paginator): $i = 0; $__LIST__ = $shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$machine): $mod = ($i % 2 );++$i;?>
            <li>
                <span><img src="/store/<?php echo htmlentities($machine['image']); ?>" height="150"></span>
                <div class="title_shop"><?php echo htmlentities($machine['title']); ?><br>
                    释放/小时：<?php echo htmlentities(money($machine['income'])); ?>/<?php echo htmlentities($machine['cycle']); ?>
                </div>
                <div class="price_shop">

                    <font style="color:#F00">价格：<?php echo htmlentities(money($machine['price'])); ?> </font>
                </div>
                <div class="price_shop"><a href="shop.html?id=<?php echo htmlentities($machine['id']); ?>" class="button button-fill button-warning" style="width:80%; margin:0 auto">立即租用</a></div>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>
<?php if($open==1): ?>
<div>
    <style type="text/css">.nbaMask {
        position: fixed;
        z-index: 1000;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
    }

    .nbaMaskTransparent {
        position: fixed;
        z-index: 1000;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
    }

    .nbaDialog {
        position: fixed;
        z-index: 5000;
        width: 80%;
        max-width: 300px;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        background-color: #fff;
        text-align: center;
        border-radius: 8px;
        overflow: hidden;
        opacity: 1;
        color: white;
    }

    .nbaDialog .nbaDialogHd {
        padding: 1rem .27rem .08rem .27rem;
    }
.nbaDialogTitle{
    	color:red
    }
    .nbaDialog .nbaDialogHd .nbaDialogTitle {
        font-size: 17px;
        font-weight: 400;
    }

    .nbaDialog .nbaDialogBd {
        padding: 0 .27rem;
        font-size: 15px;
        line-height: 2;
        word-wrap: break-word;
        word-break: break-all;
        color: #000000;
    }

    .nbaDialog .nbaDialogFt {
        position: relative;
        line-height: 48px;
        font-size: 17px;
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
    }

    .nbaDialog .nbaDialogFt:after {
        content: " ";
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        height: 1px;
        border-top: 1px solid #e6e6e6;
        color: #e6e6e6;
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        -webkit-transform: scaleY(0.5);
        transform: scaleY(0.5);
    }

    .nbaDialog .nbaDialogBtn {
        display: block;
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        flex: 1;
        color: #09BB07;
        text-decoration: none;
        -webkit-tap-highlight-color: transparent;
        position: relative;
        margin-bottom: 0;
    }

    .nbaDialog .nbaDialogBtn:after {
        content: " ";
        position: absolute;
        left: 0;
        top: 0;
        width: 1px;
        bottom: 0;
        border-left: 1px solid #e6e6e6;
        color: #e6e6e6;
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        -webkit-transform: scaleX(0.5);
        transform: scaleX(0.5);
    }

    .nbaDialog a {
        text-decoration: none;
        -webkit-tap-highlight-color: transparent;
    }
    </style>  	
    <div id="dialogs2" style="display: none;">
        <div class="nbaMask"></div>
        <div class="nbaDialog">
            <div class="nbaDialogHd"><strong class="nbaDialogTitle">公告通知</strong></div>
            <div class="nbaDialogBd" id="dialog_msg2">
          		<?php echo htmlentities($gonggao); ?>
          	</div>
            <div class="nbaDialogHd"><strong class="nbaDialogTitle"></strong></div>
            <div class="nbaDialogFt">
                <a href="javascript:;" class="nbaDialogBtn nbaDialogBtnPrimary" id="dialog_ok2">确定</a>
            </div>
        </div>
    </div> 
</div>
<?php endif; ?>

    </div>
</div>
<script type="text/javascript" src="/static/images/alert.js"  ></script>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>

<script type="text/javascript">

    $(function(){
    	var cookie = {
            set:function(key,val,time){
                var date=new Date();
                var expiresDays=time;
                date.setTime(date.getTime()+expiresDays*24*3600*1000);
                document.cookie=key + "=" + val +";expires="+date.toGMTString();
            },
            get:function(key){
                var getCookie = document.cookie.replace(/[ ]/g,"");
                var arrCookie = getCookie.split(";");
                var tips;
                for(var i=0;i<arrCookie.length;i++){
                    var arr=arrCookie[i].split("=");
                    if(key==arr[0]){
                        tips=arr[1];
                        break;
                    }
                }
                return tips;
            }
        };
      	<?php if($open==1): ?>
        var dialog_ok2 = document.getElementById("dialog_ok2");
        dialog_ok2.onclick = function() {
            dialogs2.style.display = 'none';
        };      	
        if (cookie.get("gonggao")!='open') {
          	cookie.set("gonggao","open",0.5)
            dialogs2.style.display = 'block';
        } else {
             dialogs2.style.display = 'none';
        }
      	console.log(cookie.get("gonggao"));
      	<?php else: ?>
        cookie.set("gonggao","",0.5)
      	<?php endif; ?>
      	console.log(cookie.get("gonggao"));
    })
    function qiandao() {
        $(function () {
            var params = {};
            $.ajax({
                type: 'post',
                url: api.account.qiandao,
                cache: false,
                data: params,
                dataType: 'json',
                success: function (data) {
                    alert(data.message);
                    if (data.code == 200) {
                       // window.location.href="shop_my.html";//需要跳转的地址
                        return true;
                    } else {
                        $("#sub01").removeAttr('disabled');
                    }
                },
            });
        });

        return false;
    }

</script>

</body>
</html>