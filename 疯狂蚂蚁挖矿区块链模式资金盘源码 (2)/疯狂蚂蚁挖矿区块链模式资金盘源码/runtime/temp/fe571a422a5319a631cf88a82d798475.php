<?php /*a:2:{s:64:"/www/wwwroot/77q73.cn/application/index/view/machine/index1.html";i:1551428175;s:62:"/www/wwwroot/77q73.cn/application/index/view/common/world.html";i:1551429184;}*/ ?>
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
    
<style>
#speed {
    position: absolute;right: 0rem;top: .45rem;
}
@media (max-width: 640px) {
    .o-auto {
        max-height: 20rem;
    }
}
</style>

</head>

<body>
<!-- content -->
<div class="page">
    <header class="bar bar-nav">

        <a style="position: absolute;z-index: 19;width: 94%;text-align: center;display: inline-block;line-height: 50px;font-size: 1.1rem; color:#FFF;">
            我的蚁后
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
        

<div class="buttons-tab">
    <a href="machine.html" class=" button">正常蚁后</a>
    <a href="machine.html?type=2" class="active button">到期蚁后</a>
</div>

<div class="tabs">

    <div class="card">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" id="table-5">
            <thead>
            <tr><th  align="center"><div align="center">蚁后照片</div></th>
                <th  align="center"><div align="center">蚁后类型</div></th>
                <th align="center"><div align="center">运行时间</div></th>
                <th align="center"><div align="center">已领取</div></th>
                <th align="center"><div align="center">状态</div></th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($expire) || $expire instanceof \think\Collection || $expire instanceof \think\Paginator): $i = 0; $__LIST__ = $expire;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$machine): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td align="center" valign="middle">
                        <img src="upload/1.png" width="60">

                    </td>
                    <td align="center" valign="middle"><?php echo htmlentities($machine['name']); ?><br>
                        预计<?php echo htmlentities(money($machine['yuji'])); ?>/小时</td>
                    <td align="center" valign="middle"><?php echo htmlentities(money($machine['already'])); ?>/<?php echo htmlentities($machine['cycle']); ?></td>
                    <td align="center" valign="middle"><?php echo htmlentities(money($machine['profit'])); ?></td>
                    <td align="center" valign="middle">已到期</td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
</div>


    </div>
</div>
<script type="text/javascript" src="/static/images/alert.js"  ></script>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>



</body>
</html>