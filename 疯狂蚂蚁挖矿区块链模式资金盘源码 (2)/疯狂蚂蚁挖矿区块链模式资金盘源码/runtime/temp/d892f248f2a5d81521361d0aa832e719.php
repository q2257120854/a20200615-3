<?php /*a:1:{s:71:"D:\phpstudy_pro\WWW\127.0.0.1\application\index\view\machine\index.html";i:1566132242;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/static/42/js/rem_config.js"></script>
    <title>我的蚁后</title>
    <link rel="stylesheet" href="/static/42/css/basic.css">
    <link rel="stylesheet" href="/static/42/css/kuangMall.css">
</head>
<body>
    <div class="navTit" id="curTit">
        <p>我的蚁后</p>
        <a class="a_" href="/"><img class="iconArrow" src="/static/42/images/arrow.png" alt=""></a>
    </div>
    
    <div class="topNav">
        <ul class="clearfloat">
            <li class="left curLi">正常蚁后</li>
            <li class="left">到期蚁后</li>
        </ul>
    </div>
	<div class="contentdiv isshow">
        <!--div class="bigShow">
          <img id="showPic" src="/store/<?php echo htmlentities($store[0]['image']); ?>" alt="">
        </div>

        <div class="bor_"></div>

        <div class="list clearfloat">
          <img class="a_ arrow1 left" id="leftArrow" src="/static/42/images/arrow.png" alt="">
          <ul class="left clearfloat" id="picList">
            <?php if(is_array($store) || $store instanceof \think\Collection || $store instanceof \think\Paginator): $k = 0; $__LIST__ = $store;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?>
            <li class="left <?php if($k==1): ?>curLiImg<?php endif; ?>">
              <img src="/store/<?php echo htmlentities($v['image']); ?>" alt="">
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <img class="a_ arrow2 left" id="rightArrow" src="/static/42/images/arrow.png" alt="">
        </div>

        <div class="bor_"></div-->

        <div class="infos">
          <div class="clearfloat t">
            <p class="left"></p>
            <h3 class="left">蚁后性能</h3>
          </div>

          <div class="machine_list">
             <?php if(is_array($running) || $running instanceof \think\Collection || $running instanceof \think\Paginator): $i = 0; $__LIST__ = $running;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$machine): $mod = ($i % 2 );++$i;?>
            <div class="tent">
              <div class="v1">
                <p><span>蚁后类型：</span><?php echo htmlentities($machine['name']); ?></p>
                <h3>预计 <?php echo htmlentities(money($machine['yuji'])); ?>/小时</h3>
                <h4>工作中</h4>
              </div>
              <div class="clearfloat v2">
                <p class="left"><span>运行时间：</span><?php echo htmlentities($machine['already']); ?>/<?php echo htmlentities($machine['cycle']); ?></p>
                <p class="left"><span>已领取：</span><?php echo htmlentities(money_two($machine['profit'])); ?></p>
              </div>
            </div>
             <?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
        </div>
   </div>
    <div class="contentdiv">
      	<div class="infos">
          <div class="clearfloat t">
            <p class="left"></p>
            <h3 class="left">到期蚁后</h3>
          </div>

          <div class="machine_list">
            <?php if(is_array($expire) || $expire instanceof \think\Collection || $expire instanceof \think\Paginator): $i = 0; $__LIST__ = $expire;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$machine): $mod = ($i % 2 );++$i;?>
            <div class="tent">
              <div class="v1">
                <p><span>蚁后类型：</span><?php echo htmlentities($machine['name']); ?></p>
                <h4>已到期</h4>
              </div>
              <div class="clearfloat v2">
                <p class="left"><span>运行时间：</span><?php echo htmlentities($machine['alruner']); ?></p>
                <p class="left"><span>已领取：</span><?php echo htmlentities(money_two($machine['profit'])); ?></p>
              </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
        </div>
 	</div>
  	 <div class="footer_fix" style="    line-height: 1;
    font-size: 14px;
    height: 60px;">
        <ul class="clearfix">
            <li><a href="/account.html"><img src="/static/42/images/shouye@1x.png" alt=""><span>首页</span></a></li>
            <li class="current"><a href="/machine.html"><img src="/static/42/images/kuangjishangcheng@3x.png" alt=""><span>我的蚁后</span></a></li>
            <li><a href="/team.html"><img src="/static/42/images/tuandui@1x.png" alt=""><span>我的团队</span></a></li>
            <li><a href="/market.html"><img src="/static/42/images/jiaoyi%20(1)@1x.png" alt=""><span>交易中心</span></a></li>
            <li><a href="/home.html"><img src="/static/42/images/wo@1x.png" alt=""><span>会员中心</span></a></li>
        </ul>
    </div>
    <script src="/static/42/js/zepto.min.js"></script>
    <script src="/static/42/js/kuangMall.js"></script>
    <script>
        $.post('/machine/allprofit', {}, function(res){
            if (res.code == 200) {
                window.location.reload();
            }else{
                console.log(res.message);
            }
        });
    </script>
</body>
</html>