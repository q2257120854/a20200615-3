<?php
include './includes/common.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
<meta name="browsermode" content="application"/>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- 禁止百度转码 -->
<meta http-equiv="Cache-Control" content="no-siteapp">
<!-- uc强制竖屏 -->
<meta name="screen-orientation" content="portrait">
<!-- QQ强制竖屏 -->
<meta name="x5-orientation" content="portrait">
<meta name="description" content="<?=$conf['description']?>">
<meta name="keywords" content="<?=$conf['keywords']?>">
    <title><?=$conf['title']?>|<?=$conf['title_bt']?></title>
    <link rel="stylesheet" href="public/home/fonts/iconfont.css">
    <link rel="stylesheet" href="public/home/css/reset.css">
    <link rel="stylesheet" href="public/home/css/animate.css">
    <link rel="stylesheet" href="public/home/css/style.css">
    <script src="public/home/js/jquery-1.11.3.min.js"></script>
    <script src="public/home/js/jquery.superslide.2.1.1.js"></script>
    <script src="public/home/js/js.js"></script>
    <link rel="stylesheet" href="public/home/css/layer.css">
    <script src="public/home/js/layer.js"></script>

</head>
<body>
<div class="index">
    <div id="header" class="min_wrapper_1200">
    <div class="pull-left">
        <span class="item"><span class="iconfont icondianhua"></span>官方电话：<span class="phone"><?=$conf['phone']?></span></span>
     <!--  <span class="item"><span class="iconfont icondianhua4"></span>联系电话：<span class="phone"><?=$conf['phone']?></span></span> -->
        <span class="item"><span class="iconfont iconicon-test"></span>QQ技术交流群：
          <span class="phone"></span>
                                 <span class="phone" style="margin-left: 6px;">
                        <a target="_blank" href="<?=$conf['wap_lian']?>" style="color: #fff;"><?=$conf['wap_qun']?>(QQ群)</a>
                    </span>
                            </span>
    </div>
    <div class="pull-right">
        <a href="<?=$conf['ban_url']?>" target="_blank">帮助文档</a>
        <a href="/home/index/apply.html">在线授权</a>
        <a href="<?=$conf['guan_url']?>" target="_blank">技术论坛</a>
    </div>
</div>
<div class="clearfix"></div>
<div id="nav">
    <div class="pull-left"><img src="<?=$conf['logo_img']?>"></div>
    <div class="pull-right">
        <a class="item on" href="./">首页</a>
        <a class="item " href="/home/index/product.html">产品介绍</a>
        <a class="item " href="/home/index/casecenter.html">案例中心</a>
        <a class="item " href="/home/index/gengxin.html">更新日志</a>
        <a class="item " >商业授权
            <div class="list">
                <div class="itemn business">授权查询</div>
                <div class="itemn applys">申请授权</div>
            </div>
        </a>
        <a class="item " href="/home/index/systemversion.html"><img src="public/home/picture/fire.gif">产品价格</a>
        <a class="item" href="<?=$conf['guan_url']?>" target="_blank">技术论坛</a>
        <a class="demoCenter" >演示中心
            <div class="demoCon">
            <div class="demo">
                <div class="whiteBg">
                    <div class="name"><?=$conf['yan_name']?>相关演示地址及账号</div>
                    <div class="infor">PC端前台演示地址</div>
                    <table border="1">
                        <tr>
                            <th width="50%">演示网址</th>
                            <th width="25%">账号</th>
                            <th width="25%">密码</th>
                        </tr>
                                                <tr>
                            <td><a href="<?=$conf['yan_url']?>" target="_blank" style="color:#2a7efb;"><?=$conf['yan_url']?></a></td>
                            <td><?=$conf['yan_number']?></td>
                            <td><?=$conf['yan_pas']?></td>
                        </tr>
                                            </table>
                                            <div class="showTitle">PC端后台演示地址</div>
                    <table border="1">
                        <tr>
                            <th width="50%">演示网址</th>
                            <th width="25%">账号</th>
                            <th width="25%">密码</th>
                        </tr>
                                                <tr>
                            <td><a href="<?=$conf['yan_url1']?>" target="_blank" style="color:#2a7efb;"><?=$conf['yan_url1']?></a></td>
                            <td><?=$conf['yan_number1']?></td>
                            <td><?=$conf['yan_pas1']?></td>
                        </tr>
                                            </table><br>
                <!--    <div class="showTitle">移动端二维码演示</div> -->
                   <!--  <div class="showHow">
                        <div class="dis">
                            <div class="pictrue"><img src="空"></div>
                            <div class="showCode">手机 演示码</div>
                        </div>
                        <div class="dis">
                            <div class="pictrue"><img src="空"></div>
                            <div class="showCode">公众号演示码</div>
                        </div>
                    </div> --> 
                </div>
            </div>

        </div>
        </a>
        <a class="demoCenter download" href="/user/login.html" target="_blank">登录 | 注册</a>
    </div>
</div>