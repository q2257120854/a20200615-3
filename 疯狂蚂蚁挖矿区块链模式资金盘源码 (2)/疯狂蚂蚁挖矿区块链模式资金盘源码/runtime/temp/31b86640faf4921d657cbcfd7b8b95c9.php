<?php /*a:1:{s:68:"/www/wwwroot/url.stak.cn/application/index/view/market/selling.html";i:1566132242;}*/ ?>
﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <title><?php echo htmlentities(app('config')->get('hello.title')); ?></title>
    <link rel="stylesheet" type="text/css" href="/static/jycss/iconfont.css">
    <link rel="shortcut icon" href="favicon.ico"/>
    <link href="/static/jycss/mui.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/static/images/iconfont.css">
    <link href="/static/jycss/bootstrap.min.css" rel="stylesheet"/>
    <link href="/static/jycss/base.css" rel="stylesheet"/>
    <link href="/static/jycss/style.css" rel="stylesheet"/>
    <link href="/static/jycss/public.css" rel="stylesheet"/>
    <style>
        body {
            line-height: 1 !important;
        }

        .foot-bar {
            position: absolute;
            padding: 0;
            width: 100%;
            right: 0;
            left: 0;
            bottom: 0;
            z-index: 10;
            height: 60px;
            text-align: center;

            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            table-layout: fixed;
            padding-top: 10px;
            border-top: solid 1px #272727;
            /*background-image: linear-gradient(top,#F6383A,#AD0406);
            background-image: -webkit-linear-gradient(top,#F6383A,#AD0406);*/
            background-color: #272727;
            font-family: simun;
        }

        .foot-bar .foot-menu {
            width: 18.3%;
            display: inline-block;
        }

        .foot-bar .foot-menu a {
            color: #FFF;
        }

        .foot-bar .foot-menu a:hover {
            color: #FFF;
        }

        .foot-bar .foot-menu .iconfont {
            margin: 0;
            padding: 0;
            font-size: 20px;
        }

        .foot-bar .foot-menu span {
            margin: 0;
            padding: 5px 0px 0px 0px;
            display: block;
            font-size: 14px;
        }

        @media only screen and (-webkit-min-device-pixel-ratio: 2) {
            .foot-bar:before {
                transform: scaleY(0.7);
            }
        }

        @media only screen and (-webkit-min-device-pixel-ratio: 3) {
            .foot-bar:before {
                transform: scaleY(0.5);
            }
        }
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
<!-- title -->
<header class="mui-bar mui-bar-nav mui_header mui_list_header">
    <h1 class="mui-title">交易</h1>
</header>

<nav class="foot-bar">
        <div class="foot-menu"><a href="/account.html">
           <img src="/static/42/images/shouye@<?php echo app('request')->path()=='account' || app('request')->path() == ''?'3' : '1'; ?>x.png" alt=""><span class="<?php echo app('request')->path()=='account' || app('request')->path() == ''?'active' : ''; ?>">首页</span></a></div>
        <div class="foot-menu"><a href="/machine.html">
            <img src="/static/42/images/kuangjishangcheng@<?php echo app('request')->path()=='machine'?'3' : '1'; ?>x.png" alt=""></i><span class="<?php echo app('request')->path()=='machine'?'active' : ''; ?>">我的蚁后</span></a></div>
        <div class="foot-menu"><a href="/team.html">
            <img src="/static/42/images/tuandui@<?php echo app('request')->path()=='team'?'3' : '1'; ?>x.png" alt=""><span class="<?php echo app('request')->path()=='team'?'active' : ''; ?>">我的团队</span></a></div>
        <div class="foot-menu"><a href="/market.html">
            <img src="/static/42/images/jiaoyi%20(1)@3x.png" alt=""></i><span class="active">交易中心</span></a></div>
        <div class="foot-menu"><a href="/home.html">
            <img src="/static/42/images/wo@<?php echo app('request')->path()=='home'?'3' : '1'; ?>x.png" alt=""><span class="<?php echo app('request')->path()=='home'?'active' : ''; ?>">会员中心</span></a></div>
    </nav>

<!--mui-scroll-wrapper-->
<div id="pullrefresh" class="mui-content mui-scroll-wrapper">
    <div class="mui-scroll">
        <div id="segmentedControl" class="mui-segmented-control mui_title">
            <a class="mui-control-item" href="/market.html">交易大厅</a>
            <a class="mui-control-item" href="/market/buy.html">买进</a>
            <a class="mui-control-item  mui-active">卖出</a>
        </div>


        <div id="item3" class="mui-control-content mui-active">
            <div class="mui_online mui_push">
                <h3>卖出列表</h3>
                <div class="mui_cot_ul">
                    <div class="mui_sum sum_tit">
                        <span>时间</span>
                        <span>数量</span>
                        <span>单价</span>
                        <span>金额</span>
                        <span>状态</span>
                        <span>交易</span>
                        <span>操作</span>
                    </div>
                    <div id="ssss">
                    </div>

                </div>
            </div>
            <div class="mui_jl">
                <em>
                    共<span id="a"><?php echo htmlentities($count); ?></span>条记录&nbsp;&nbsp;
                    第<span id="aa"><?php echo htmlentities($page); ?></span>页/共<span id="aaa"><?php echo htmlentities($index); ?></span>页
                </em>
                <span>
                    <a id="aprv" class="page2" data-page="0">上一页</a>
                    <a id="anext" class="page2" data-page="2">下一页</a>
                </span>
            </div>
            <div class="mui_online mui_push">
                <h3>卖出记录列表</h3>
                <div id="mccc">
                    暂无记录...
                </div>
                <div class="mui-content-padded">
                    <div class="mui-content-padded">
                        <ul class="mui-pager">
                            <li>
                                <a id="bprv" class="page3" data-page="0">上一页</a>
                            </li>
                            <li>
                                <a id="bnext" class="page3" data-page="2">下一页</a>
                            </li>
                        </ul>
                      	<br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/static/jyjs/mui.min.js"></script>
<script type="text/javascript" src="/static/jyjs/jquery-2.1.1.js"></script>
<script src="/static/jyjs/layer.js"></script>
<script>

    mui.init({
        pullRefresh: {
            container: '#pullrefresh',
            down: {
                callback: pulldownRefresh
            }


        }
    });

    /**
     * 下拉刷新具体业务实现
     */
    function pulldownRefresh() {
        setTimeout(function () {
            window.location.reload()
        }, 1500);
    }
    mui("#pullrefresh").on('tap', 'a.page-link,a.orderinfo', function (event) {
        this.click();

        window.location.href = this.href
        event.stopPropagation();//  阻止除了 a标签以外事件的点击
    });
    mui("#pullrefresh").on('tap', 'a', function (event) {
        this.click();
        if (this.href != '') {

            window.location.href = this.href
        }

        event.stopPropagation();//  阻止除了 a标签以外事件的点击
    });


</script>
<script type="text/javascript">
    $(document).ready(function () {
        var statuses = ['已取消', '匹配中', '待付款', '待确认', '投诉中', '', '', '', '交易成功'];

        function ajax2(page=0, load='') {
            page = page;
            $.ajax({
                url: "/market/list",
                type: "post",
                data: {page: page,type:4},
                success: function (e) {
                    if (e.code == 200) {
                        $('#mm').text(e.data.current_page);
                        if (e.data.data != '') {
                            var html = '';
                            for (i = 0; i < e.data.length; i++) {
                                html += ' <div class="mui_sum">';
                                html += '   <span>' + e.data[i].create_at + '</span>';
                                html += '   <span>' + e.data[i].number + '</span>';
                                html += '   <span>' + e.data[i].price + '</span>';
                                html += '   <span>' + e.data[i].mprice + '</span>';
                                html += '   <span style="color:red">' + statuses[e.data[i].status]+ '</span>';
                                html += '   <span>未完成</span>';
                                html += '    <span>' + e.data[i].sdd + '</span>';
                                html += ' </div>';
                            }
                            page = parseInt(page);
                            $('#mprv').attr('data-page', page - 1)
                            $('#mnext').attr('data-page', page + 1)
                            $('#ssss').html(html)
                        }
                        if (e.data == '' && page>0) {
                            layer.msg('已经到最后一页了');
                        }
                        if (load != '') {
                            layer.close(load)
                        }

                    }
                }, error: function (e) {

                }

            })

        }

        function ajax3(page=0, load='') {
            page = page;
            $.ajax({
                url: "/market/list",
                type: "post",
                data: {page:page,type:6},
                success: function (e) {
                    if (e.code == 200) {
                        if (e.data != '') {
                            var html = '';
                            for (i = 0; i < e.data.length; i++) {
                                html += '  <div class="y_com">';
                                html += '  <div class="y_qr">交易状态：已完成</div>';
                                html += '   <div class="y_tab">';
                                html += '   <span>' + e.data[i].create_at + '</span>';
                                html += '   <span>数量：' + e.data[i].number + '</span>';
                                html += '   <span>单价：' + e.data[i].price + '</span>';
                                html += '   <span>总价：' + e.data[i].mprice + '</span>';
                                html += '    </div>';
                                html += '    </div>';

                            }
                            page = parseInt(page);
                            $('#bmprv').attr('data-page', page - 1)
                            $('#bmnext').attr('data-page', page + 1)
                            $('#mccc').html(html)
                        }

                        if (e.data.data == ''  && page>0) {
                            layer.msg('已经到最后一页了');
                        }
                        if (load != '') {
                            layer.close(load)
                        }

                    }
                }, error: function (e) {

                }

            })

        }

        ajax2();
        ajax3();

        $('.page2').click(function () {
            var load = layer.load(0);
            var page = $(this).attr('data-page');
            console.log(page)
            if (page == 0 || page == undefined) {
                layer.close(load)
                layer.msg('已经是第一页了!');
                return;
            }
            ajax2(page, load);

        })
        $('.page3').click(function () {
            var load = layer.load(0);
            var page = $(this).attr('data-page');

            if (page == 0 || page == undefined) {
                layer.close(load)
                layer.msg('已经是第一页了!');
                return;
            }
            ajax3(page, load);

        })

        $('body').on('click', '.cancelorder', function () {
            var orderid = $(this).attr('data-id');
            layer.confirm('确定取消订单？', {icon: 3, title: '提示'}, function (index) {
                var load = layer.load(0);
                $.ajax({
                    url: "/user/market/cancelorder.html",
                    type: "post",
                    data: {
                        orderid: orderid
                    }, success: function (e) {
                        layer.close(load);
                        if (e.code == 1) {
                            layer.msg(e.msg, {time: 1000}, function () {
                                window.location.reload();
                            });
                        } else {
                            layer.msg(e.msg);
                        }


                    }, error: function (e) {
                        layer.close(load);
                        layer.msg('网络不给力');
                    }

                })


            })


        })


    })


</script>


</body>

</html>