<?php /*a:2:{s:72:"D:\phpstudy\PHPTutorial\WWW\demo1\application\index\view\team\index.html";i:1555042426;s:74:"D:\phpstudy\PHPTutorial\WWW\demo1\application\index\view\common\world.html";i:1555433041;}*/ ?>
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
            我的直推
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
        
<div class="tabs">

    <div class="card">
        <table class="table-member" width="100%" border="0" cellpadding="0" cellspacing="0" id="table-5">
            <thead>
            <tr>
              	<th align="center"><div align="center">手机号码</div></th>
                <th align="center"><div align="center">姓名</div></th>
                <th align="center"><div align="center">等级</div></th>
                <th align="center"><div align="center">直推人数</div></th>
                <th align="center"><div align="center">团队人数</div></th>
            </tr>
            </thead>
            <tbody>
            </tbody></table>
    </div>
</div>
    <div align="right" class="pages" style="background-color: #ADADAD">
        <br/>
        <?php if($page>1): ?>
        <a class="previous" href="team.html?type=1&page=2">上一页</a>
        <?php endif; ?>
        <span class="current"><?php echo htmlentities($page); ?></span>
        <?php if(($page+1)<$index): ?>
        <a class="next" href="team.html?page=<?php echo htmlentities($page+1); ?>">下一页</a>
        <?php endif; ?>
        <span class="rows"> 第<b><?php echo htmlentities($page); ?></b>页/共<b><?php echo htmlentities($index); ?></b>页</span>
    </div>


    </div>
</div>
<script type="text/javascript" src="/static/images/alert.js"  ></script>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>

<script type="text/javascript">
    require(['jquery'], function($){
        var page = <?php echo htmlentities($page); ?>, size = 20, type = '', key = '', loading = false;
        var member = function(){
            var param = {
                page: page,
                size: size
            }
            if (type != '') {
                param.type = type;
            }
            if (key != '') {
                param.key = key;
            }
            loading = true;
            ajax(api.team.member, param, function(res){
                loading = false;
                if (res.code == 200) {
                    if (res.data && res.data.length) {
                        var html = '';
                        for (var i = 0; i < res.data.length; i++) {
                            var item = res.data[i];
                            html += '<tr>';
                          	html += '<td class="text-center">';
                            html += '<div>' + item.username + '</div>';
                            html += '</td>';
                            html += '<td class="text-center">';
                            html += '<div>' + item.realname + '</div>';
                            html += '</td>';
                            html += '<td class="text-center">';
                            html += '<div>' + item.type + '</div>';
                            html += '</td>';
                            html += '<td class="text-center">';
                            html += '<div>' + item.zt + '</div>';
                            html += '</td>';
                            html += '<td class="text-center">';
                            html += '<div>' + item.team_count + '</div>';
                            html += '</td>';
                            html += '</tr>';
                        }
                        $('.table-member tbody').append(html);
                    }
                }
            });
        }
        $(function(){
            member();
        });
    });

</script>

</body>
</html>