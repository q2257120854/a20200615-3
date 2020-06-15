<?php /*a:2:{s:67:"/www/wwwroot/77q73.cn/application/index/view/wallet/financial2.html";i:1547052818;s:62:"/www/wwwroot/77q73.cn/application/index/view/common/world.html";i:1551429184;}*/ ?>
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
            财务明细
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
    <a href="/financial.html?type=1" class=" button">蚁后明细</a>
    <a href="/financial.html?type=3" class=" button">交易明细</a>
    <a href="/financial.html?type=2" class="active button">可售YCB</a>
</div>


<div class="tabs">

    <hr color="#333333" size="1">
    <div class="card">

        <table width="100%" border="0" cellpadding="0" cellspacing="0" id="table-5">
            <thead>
            <tr>
                <th align="center">
                    <div align="center">记录时间</div>
                </th>

                <th align="center">
                    <div align="center">变动</div>
                </th>
                <th align="center">
                    <div align="center">余额</div>
                </th>
                <th align="center">
                    <div align="center">说明</div>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$log): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td align="center"><?php echo htmlentities($log['create_at']); ?></td>
                    <td align="center"><?php echo htmlentities(money_four($log['now'])); ?></td>
                    <td align="center"><?php echo htmlentities(money_four($log['after'])); ?></td>
                    <td align="center">
                        <?php echo htmlentities($business[$log['business']]); ?>
                    </td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
</div>
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
<script type="text/javascript" src="/static/images/alert.js"  ></script>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>

</body>
</html>