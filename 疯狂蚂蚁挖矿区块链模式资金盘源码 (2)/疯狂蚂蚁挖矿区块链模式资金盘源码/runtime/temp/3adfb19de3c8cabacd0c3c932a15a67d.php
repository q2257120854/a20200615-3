<?php /*a:1:{s:60:"C:\wwwroot\gec.com\application\index\view\account\index.html";i:1566132243;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>首页</title>
    <link rel="stylesheet" href="/static/42/css/swiper.min.css">
    <script src="/static/42/js/rem_config.js"></script>
    <link rel="stylesheet" href="/static/42/css/basic.css">
    <link rel="stylesheet" href="/static/42/css/index.css">
</head>
<body>
<!--包裹整个页面的盒子-->
<div class="mach_layout">
    <div class="navTit">
      <p>首页</p>
    </div>

    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img class="p" src="<?php echo htmlentities(app('config')->get('hello.swiper1')); ?>" alt="">
        </div>
        <div class="swiper-slide">
          <img class="p" src="<?php echo htmlentities(app('config')->get('hello.swiper2')); ?>" alt="">
        </div>
        <div class="swiper-slide">
          <img class="p" src="<?php echo htmlentities(app('config')->get('hello.swiper3')); ?>" alt="">
        </div>
      </div>
    </div>
    <nav class="mach_nav">
        <ul class="clearfix">
            <li>
                <a id='qiandao' href="#" onclick="javascript:qiandao()" >
                    <img src="/static/42/images/01.png" alt="">
                    <span>释放</span>
                </a>
            </li>
            <li>
                <a href="/team/inviter.html">
                    <img src="/static/42/images/02.png" alt="">
                    <span>推广二维码</span>
                </a>
            </li>
			<li>
                <a id='qiandao1' href="#" onclick="javascript:qiandao1()" >
                    <img src="/static/42/images/01.png" alt="">
                    <span>签到</span>
                </a>
            </li>
            <li>
                <a href="/news.html">
                    <img src="/static/42/images/04.png" alt="">
                    <span>公告</span>
                </a>
            </li>
            <li>
                <a href="/message.html">
                    <img src="/static/42/images/03.png" alt="">
                    <span>联系客服</span>
                </a>
            </li>
        </ul>
    </nav>
    <!--main-->
    <main>
        <section class="commend mach_product">
            <div class="mach_product_top">
                <h4 class="title">蚁后基地</h4>
            </div>
            <div class="commend_content">
                <ul class="clearfix list">
                  	 <?php if(is_array($shop) || $shop instanceof \think\Collection || $shop instanceof \think\Paginator): $i = 0; $__LIST__ = $shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$machine): $mod = ($i % 2 );++$i;?>
                    <li>
                      <a href="shop.html?id=<?php echo htmlentities($machine['id']); ?>">
                        <img src="/store/<?php echo htmlentities($machine['image']); ?>" alt="">
                      </a>
                      <div class="commend_text">
                        <p>
                          <a href="#"><?php echo htmlentities($machine['title']); ?></a>
                          <span>YCB <?php echo htmlentities(money($machine['price'])); ?></span>
                        </p>
                        <div class="price clearfix">
                          <span>释放/小时 <?php echo htmlentities(money($machine['income'])); ?>/<?php echo htmlentities($machine['cycle']); ?></span>
                          <a href="shop.html?id=<?php echo htmlentities($machine['id']); ?>">立即租用</a>
                        </div>
                      </div>
                    </li>
                  	 <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </section>
    </main>
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
    <!--footer固定-->
    <div class="footer_fix" style="    line-height: 1;
    font-size: 14px;
    height: 60px;">
        <ul class="clearfix">
            <li class="current"><a href="/account.html"><img src="/static/42/images/shouye2@2x.png" alt=""><span>首页</span></a></li>
            <li><a href="/machine.html"><img src="/static/42/images/kuangjishangcheng@1x.png" alt=""><span>我的蚁后</span></a></li>
            <li><a href="/team.html"><img src="/static/42/images/tuandui@1x.png" alt=""><span>我的团队</span></a></li>
            <li><a href="/market.html"><img src="/static/42/images/jiaoyi%20(1)@1x.png" alt=""><span>交易中心</span></a></li>
            <li><a href="/home.html"><img src="/static/42/images/wo@1x.png" alt=""><span>会员中心</span></a></li>
        </ul>
    </div>
</div>
<script src="/static/42/js/zepto.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
<script src="/static/42/js/index.js"></script>
<script src="/static/jyjs/mui.min.js"></script>
  <style>
  
.mui-popup-backdrop {
    position: fixed;
    z-index: 998;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    -webkit-transition-duration: 400ms;
    transition-duration: 400ms;
    opacity: 0;
    background: rgba(0, 0, 0, .4)
}

.mui-popup-backdrop.mui-active {
    opacity: 1
}

.mui-popup {
    position: fixed;
    z-index: 10000;
    top: 50%;
    left: 50%;
    display: none;
    overflow: hidden;
    width: 270px;
    -webkit-transition-property: -webkit-transform, opacity;
    transition-property: transform, opacity;
    -webkit-transform: translate3d(-50%, -50%, 0) scale(1.185);
    transform: translate3d(-50%, -50%, 0) scale(1.185);
    text-align: center;
    opacity: 0;
    color: #000;
    border-radius: 13px
}

.mui-popup.mui-popup-in {
    display: block;
    -webkit-transition-duration: 400ms;
    transition-duration: 400ms;
    -webkit-transform: translate3d(-50%, -50%, 0) scale(1);
    transform: translate3d(-50%, -50%, 0) scale(1);
    opacity: 1
}

.mui-popup.mui-popup-out {
    -webkit-transition-duration: 400ms;
    transition-duration: 400ms;
    -webkit-transform: translate3d(-50%, -50%, 0) scale(1);
    transform: translate3d(-50%, -50%, 0) scale(1);
    opacity: 0
}

.mui-popup-inner {
    position: relative;
    padding: 15px;
    border-radius: 13px 13px 0 0;
    background: rgba(255, 255, 255, .95)
}

.mui-popup-inner:after {
    position: absolute;
    z-index: 15;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 1px;
    content: '';
    -webkit-transform: scaleY(.5);
    transform: scaleY(.5);
    -webkit-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
    background-color: rgba(0, 0, 0, .2)
}

.mui-popup-title {
    font-size: 18px;
    font-weight: 500;
    text-align: center
}

.mui-popup-title + .mui-popup-text {
    font-family: inherit;
    font-size: 14px;
    margin: 5px 0 0
}

.mui-popup-buttons {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    height: 44px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    justify-content: center
}

.mui-popup-button {
    font-size: 17px;
    line-height: 44px;
    position: relative;
    display: block;
    overflow: hidden;
    box-sizing: border-box;
    width: 100%;
    height: 44px;
    padding: 0 5px;
    cursor: pointer;
    text-align: center;
    white-space: nowrap;
    text-overflow: ellipsis;
    color: #007aff;
    background: rgba(255, 255, 255, .95);
    -webkit-box-flex: 1
}

.mui-popup-button:after {
    position: absolute;
    z-index: 15;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    display: block;
    width: 1px;
    height: 100%;
    content: '';
    -webkit-transform: scaleX(.5);
    transform: scaleX(.5);
    -webkit-transform-origin: 100% 50%;
    transform-origin: 100% 50%;
    background-color: rgba(0, 0, 0, .2)
}

.mui-popup-button:first-child {
    border-radius: 0 0 0 13px
}

.mui-popup-button:first-child:last-child {
    border-radius: 0 0 13px 13px
}

.mui-popup-button:last-child {
    border-radius: 0 0 13px
}

.mui-popup-button:last-child:after {
    display: none
}

.mui-popup-button.mui-popup-button-bold {
    font-weight: 600
}

.mui-popup-input input {
    font-size: 14px;
    width: 100%;
    height: 26px;
    margin: 15px 0 0;
    padding: 0 5px;
    border: 1px solid rgba(0, 0, 0, .3);
    border-radius: 0;
    background: #fff
}

  </style>
<script type="text/javascript">
      $(function(){
        $.post('/machine/allprofit', {}, function(res){
          if (res.code == 200) {
            window.location.reload();
          }else{
            console.log(res.message);
          }
        });
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
			  if ($('#qiandao').hasClass('btn-loading')) {
                    return false;
			}
			 $('#qiandao').addClass('btn-loading');
             var params = {};
             $.ajax({
               type: 'post',
               url: '/account/shifang',
               cache: false,
               data: params,
               dataType: 'json',
               success: function (data) {
                 mui.alert(data.message);
                 if (data.code == 200) {
                   // window.location.href="shop_my.html";//需要跳转的地址
                   $("#qiandao").removeClass('btn-loading');
                 } else {
                   $("#qiandao").removeClass('btn-loading');
                 }
               },
             });
           });

           return false;
         }
		 
		 function qiandao1() {
           $(function () {
			  if ($('#qiandao1').hasClass('btn-loading')) {
                    return false;
			}
			 $('#qiandao1').addClass('btn-loading');
             var params = {};
             $.ajax({
               type: 'post',
               url: '/account/qiandao1',
               cache: false,
               data: params,
               dataType: 'json',
               success: function (data) {
                 mui.alert(data.message);
                 if (data.code == 200) {
                   // window.location.href="shop_my.html";//需要跳转的地址
                   $("#qiandao1").removeClass('btn-loading');
                 } else {
                   $("#qiandao1").removeClass('btn-loading');
                 }
               },
             });
           });

           return false;
         }

    </script>
</body>
</html>