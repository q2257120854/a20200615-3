<?php /*a:2:{s:65:"/www/wwwroot/url.stak.cn/application/admin/view/index/index.html";i:1567778751;s:66:"/www/wwwroot/url.stak.cn/application/admin/view/common/world.html";i:1567771532;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover, shrink-to-fit=no" />
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef" />
    <meta name="theme-color" content="#4188c9" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <link rel="icon" href="/favicon.ico?2" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico?2" />
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/css/dashboard.css?3" />
    <title>管理后台</title>
    <style>
    .toast {
        text-align: center;
    }
    .toast-mask {
        position: fixed; z-index: 2456;
        left: 0;top: 0;right: 0;bottom: 0;
        background: rgba(0, 0, 0, 0.6);
    }
    .toast-body {
        position: fixed;
        z-index: 5000;
        width: 80%;
        max-width: 300px;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        background-color: #FFFFFF;
        text-align: center;
        border-radius: 3px;
        overflow: hidden;
    }
    .toast-icon {
        padding: 1rem;
        min-height: 40px;
        line-height: 1.3;
    }
    .toast-icon i {
        font-size: 5rem;
    }
    .toast-message {
        word-wrap: break-word;
        word-break: break-all;
        font-size: 1.1rem;
    }
    .dropdown-menu {
        z-index: 2200;
    }
    </style>
    
<link href="/assets/plugins/charts-c3/plugin.css" rel="stylesheet" />

</head>

<body>
<!-- content -->
<div class="page">
    <div class="page-main">
        <div class="header py-4">
            <div class="container">
                <div class="d-flex">
                    <a class="header-brand" href="/admin.html"><img src="/static/image/logo.png" class="header-brand-img" alt="tabler logo"></a>
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="nav-item">
                            <a href="/signin.html" class="btn btn-sm btn-outline-primary">返回前台</a>
                        </div>
                        <div class="dropdown">
                            <a class="nav-link pr-0 leading-none">
                                <span class="avatar me-avatar" style="background-image: url(/static/image/icon.png);"><span class="avatar-status bg-green"></span></span>
                                <span class="ml-2 d-none d-lg-block">
                                    <span class="text-default">超级管理员</span>
                                    <small class="text-muted d-block mt-1"><?php echo app('request')->ip(); ?></small>
                                </span>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 ml-auto header-search-div">
                        <form class="input-icon my-3 my-lg-0" method="get" action="/admin/account/edit.html">
                            <input type="search" class="form-control header-search" placeholder="用户账号&hellip;" tabindex="1" name="username" />
                            <div class="input-icon-addon">
                                <i class="fe fe-search"></i>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg order-lg-first">
                        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                            <li class="nav-item">
                                <a href="/admin.html" class="nav-link"><i class="fe fe-home"></i>后台</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="dropdown"><i class="fe fe-list"></i>网站</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <!-- <a href="/admin/index/carousel.html" class="dropdown-item">首页轮播图</a> -->
                                    <a href="/admin/news/index.html" class="dropdown-item">新闻公告</a>
                                    <a href="/admin/index/help.html" class="dropdown-item">帮助内容</a>
                                    <a href="/admin/index/contact.html" class="dropdown-item">用户留言</a>
                                    <a href="/admin/index/popup.html" class="dropdown-item">弹窗公告</a>
                                    <a href="/admin/index/setting.html" class="dropdown-item">系统设置</a>
                                    <a href="/admin/event/funding.html" class="dropdown-item">创业众筹</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/account.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-users"></i>账户</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="/admin/account.html" class="dropdown-item">用户列表</a>
                                    <a href="/admin/account/create.html" class="dropdown-item">添加用户</a>
                                    <a href="/admin/account/profile.html" class="dropdown-item">用户档案</a>
                                    <a href="/admin/account/audit.html" class="dropdown-item">实名认证</a>
                                    <a href="/admin/account/dashboard.html" class="dropdown-item">仪表盘</a>
                                    <a href="/admin/account/promotion.html" class="dropdown-item">推广数据</a>
                                    <?php if(!(empty(app('config')->get('hello.register_audit')) || ((app('config')->get('hello.register_audit') instanceof \think\Collection || app('config')->get('hello.register_audit') instanceof \think\Paginator ) && app('config')->get('hello.register_audit')->isEmpty()))): ?>
                                        <a href="/admin/account/reg_audit.html" class="dropdown-item">注册审核</a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/market.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-globe"></i>市场</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="/admin/market/index.html" class="dropdown-item">每日行情</a>
                                    <a href="/admin/market/buy.html" class="dropdown-item">买入订单</a>
                                    <a href="/admin/market/sell.html" class="dropdown-item">卖出订单</a>
                                    <a href="/admin/market/report.html" class="dropdown-item">投诉订单</a>
                                    <!--<a href="/admin/market/bonus.html" class="dropdown-item">发放全球分红</a>-->
                                    <!--<a href="/admin/market/bonus_log.html" class="dropdown-item">全球分红记录</a>-->
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/store.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-shopping-cart"></i>商城</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <!--<a href="/admin/store.html" class="dropdown-item">实物商城</a>-->
                                    <a href="/admin/store/machine.html" class="dropdown-item">蚁后商城</a>
                                    <!--<a href="/admin/store/prop.html" class="dropdown-item">道具商城</a>-->
                                    <!--<a href="/admin/store/create.html" class="dropdown-item">添加商品</a>-->
                                    <a href="/admin/store/order.html" class="dropdown-item">订单列表</a>
                                    <!--<a href="/admin/store/audit.html" class="dropdown-item">审核列表</a>-->
                                    <!--<a href="/admin/store/adjust_price.html" class="dropdown-item">批量调整价格</a>-->
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/machine.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-cpu"></i>蚁后</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="/admin/machine/index.html" class="dropdown-item">用户蚁后</a>
                                    <a href="/admin/machine/give.html" class="dropdown-item">批量赠送</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/wallet/index.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-slack"></i>资金</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="/admin/wallet/index.html" class="dropdown-item">钱包概览</a>
                                    <a href="/admin/wallet/record.html" class="dropdown-item">流水列表</a>
                                    <a href="/admin/wallet/transfer.html" class="dropdown-item">转账记录</a>

                                    <!--<a href="/admin/wallet/imtoken.html" class="dropdown-item">imToken</a>-->
                                </div>
                            </li>
                           <!-- <li class="nav-item">
                                <a href="/admin/event/index.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-grid"></i>插件</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="/admin/event/scratch.html" class="dropdown-item">刮刮卡</a>
                                    <a href="/admin/event/pool.html" class="dropdown-item">共享蚁巢</a>
                                    <a href="/admin/event/contract.html" class="dropdown-item">链上合约</a>
                                    <a href="/admin/event/funding.html" class="dropdown-item">创业众筹</a>
                                    <a href="/admin/event/ticket.html" class="dropdown-item">票券</a>
                                </div>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-3 my-md-5">
            <div class="container container-padding">
                
<div class="row row-cards">
	<div class="col-6 col-lg-2">
		<div class="card">
            <div class="card-body p-3 text-center">
                <div class="text-right text-green">
                    <i class="fe fe-user"></i>
                </div>
                <div class="h1 m-0"><?php echo htmlentities($totalPeople); ?></div>
                <div class="text-muted mb-4">总人数</div>
            </div>
        </div>
	</div>
	<div class="col-6 col-lg-2">
		<div class="card">
            <div class="card-body p-3 text-center">
                <div class="text-right text-green">
                    <i class="fe fe-user"></i>
                </div>
                <div class="h1 m-0"><?php echo htmlentities($onAuthen); ?></div>
                <div class="text-muted mb-4">已认证</div>
            </div>
        </div>
	</div>
	<div class="col-6 col-lg-2">
		<div class="card">
            <div class="card-body p-3 text-center">
                <div class="text-right text-green">
                    <i class="fe fe-user"></i>
                </div>
                <div class="h1 m-0"><?php echo htmlentities($noAuthen); ?></div>
                <div class="text-muted mb-4">未认证</div>
            </div>
        </div>
	</div>
	<div class="col-6 col-lg-2">
		<div class="card">
            <div class="card-body p-3 text-center">
                <div class="text-right text-green">
                    <i class="fe fe-shopping-cart"></i>
                </div>
                <div class="h1 m-0"><?php echo htmlentities($totalTrade); ?></div>
                <div class="text-muted mb-4">总订单</div>
            </div>
        </div>
	</div>
	<div class="col-6 col-lg-2">
		<div class="card">
            <div class="card-body p-3 text-center">
                <div class="text-right text-green">
                    <i class="fe fe-shopping-cart"></i>
                </div>
                <div class="h1 m-0"><?php echo htmlentities($buyTrade); ?></div>
                <div class="text-muted mb-4">总买入</div>
            </div>
        </div>
	</div>
	<div class="col-6 col-lg-2">
		<div class="card">
            <div class="card-body p-3 text-center">
                <div class="text-right text-green">
                    <i class="fe fe-shopping-cart"></i>
                </div>
                <div class="h1 m-0"><?php echo htmlentities($sellTrade); ?></div>
                <div class="text-muted mb-4">总卖出</div>
            </div>
        </div>
	</div>
	<div class="col-lg-6">
	    <div class="card">
	        <div class="card-header">
	            <h3 class="card-title">30日的订单</h3>
	        </div>
	        <div id="chart_order_count" style="height: 10rem"></div>
	        <div class="table-responsive">
	            <table class="table card-table table-striped table-vcenter">
	                <thead>
	                    <tr>
	                        <th colspan="2">用户</th>
	                        <th>状态</th>
	                        <th>数量</th>
	                        <th>单价</th>
	                        <th></th>
	                    </tr>
	                </thead>
	                <tbody>
	                	<?php if(is_array($newOrders) || $newOrders instanceof \think\Collection || $newOrders instanceof \think\Paginator): $i = 0; $__LIST__ = $newOrders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
	                    <tr>
	                        <td class="w-1"><span class="avatar" style="background-image: url(<?php echo avatar($item['avatar'], $item['idcard']);; ?>)"></span></td>
	                        <td><a href="/admin/account/edit.html?username=<?php echo htmlentities($item['username']); ?>"><?php echo htmlentities($item['nickname']); ?></a></td>
	                        <td><?php echo htmlentities(app('config')->get('hello.trade.status')[$item['status']]['name']); ?></td>
	                        <td><?php echo htmlentities(money($item['number'])); ?></td>
	                        <td><?php echo htmlentities(money($item['price'])); ?></td>
	                        <td><a href="/admin/market/transaction.html?id=<?php echo htmlentities($item['tid']); ?>"><i class="fe fe-corner-right-up"></i></a></td>
	                    </tr>
	                    <?php endforeach; endif; else: echo "" ;endif; ?>
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>
	<div class="col-lg-6">
	    <div class="row">
	        <div class="col-sm-6">
	            <div class="card">
	                <div class="card-header">
	                    <h3 class="card-title">买入订单</h3>
	                </div>
	                <div class="card-body">
	                    <div id="chart_order_buy" style="height: 12rem;"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-6">
	            <div class="card">
	                <div class="card-header">
	                    <h3 class="card-title">卖出订单</h3>
	                </div>
	                <div class="card-body">
	                    <div id="chart_order_sell" style="height: 12rem;"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-6">
	            <div class="card">
	                <div class="card-body text-center">
	                    <div class="h5">总买入<?php echo htmlentities(app('config')->get('hello.unit')); ?></div>
	                    <div class="font-weight-bold mb-4" style="font-size: 1rem;"><?php echo htmlentities($buyNumber); ?></div>
	                    <div class="progress progress-sm">
	                        <div class="progress-bar bg-red" style="width: 28%"></div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-6">
	            <div class="card">
	                <div class="card-body text-center">
	                    <div class="h5">总卖出<?php echo htmlentities(app('config')->get('hello.unit')); ?></div>
	                    <div class="font-weight-bold mb-4" style="font-size: 1rem;"><?php echo htmlentities($sellNumber); ?></div>
	                    <div class="progress progress-sm">
	                        <div class="progress-bar bg-green" style="width: 84%"></div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-6">
                <div class="card p-3">
                    <div class="d-flex align-items-center">
                        <span class="stamp stamp-md bg-blue mr-3">
							<i class="fa fa-cny"></i>
						</span>
                        <div>
                            <h4 class="m-0"><a><?php echo htmlentities($buyMoney); ?> <small>￥</small></a></h4>
                            <small class="text-muted">总买入金额</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card p-3">
                    <div class="d-flex align-items-center">
                        <span class="stamp stamp-md bg-blue mr-3">
							<i class="fa fa-cny"></i>
						</span>
                        <div>
                            <h4 class="m-0"><a><?php echo htmlentities($sellMoney); ?> <small>￥</small></a></h4>
                            <small class="text-muted">总卖出金额</small>
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	</div>
	<div class="col-12">
		<div class="card">
			<div class="table-responsive">
				<table class="table table-hover table-outline table-vcenter text-nowrap card-table">
					<thead>
						<tr>
							<th>蚁后</th>
							<th>销量</th>
							<th>库存</th>
							<th>运行中</th>
							<th>已过期</th>
							<th>今日产矿</th>
							<th>累计产矿</th>
						</tr>
					</thead>
					<tbody>
						<?php if(is_array($store) || $store instanceof \think\Collection || $store instanceof \think\Paginator): $i = 0; $__LIST__ = $store;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
							<tr>
								<td><?php echo htmlentities($item['title']); ?></td>
								<td><?php echo htmlentities($item['sales']); ?></td>
								<td><?php echo htmlentities($item['stock']); ?></td>
								<td><?php echo htmlentities($item['running']); ?></td>
								<td><?php echo htmlentities($item['expire']); ?></td>
								<td><?php echo htmlentities($item['today_profit']); ?></td>
								<td><?php echo htmlentities($item['total_profit']); ?></td>
							</tr>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-auto ml-lg-auto">
                    <div class="row align-items-center"><?php echo htmlentities(date('Y-m-d g:i a',time())); ?></div>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                    Copyright © 2018 <a href="http://www.zgymw.com">中国源码网</a>. All rights reserved.
                </div>
            </div>
        </div>
    </footer>
</div>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>

<script type="text/javascript" src="/assets/plugins/charts-c3/plugin.js"></script>
<script type="text/javascript">
var statuses = JSON.parse('<?php echo $statuses; ?>');
var buyCount = JSON.parse('<?php echo $buyCount; ?>');
var sellCount = JSON.parse('<?php echo $sellCount; ?>');
require(['c3', 'jquery'], function(c3, $) {
    $(document).ready(function() {
        var chart_order_count = c3.generate({
            bindto: '#chart_order_count', // id of chart wrapper
            data: {
            	x: 'x',
                columns: [
                    // ['data1', 0, 0]
                    <?php echo $monthOrdersDay; ?>,
                    <?php echo $monthOrdersNumber; ?>
                ],
                type: 'area', // default type of chart
                groups: [
                    ['data1']
                ],
                colors: {
                    'data1': colors["blue"]
                },
                names: {
                    // name of each serie
                    'data1': '日订单数'
                }
            },
            axis: {
                y: {
                    padding: {
                        bottom: 0,
                    },
                    show: false,
                    tick: {
                        outer: false
                    }
                },
                x: {
                	type: 'timeseries',
                    padding: {
                        left: 0,
                        right: 0
                    },
                    show: true
                }
            },
            legend: {
                position: 'inset',
                padding: 0,
                inset: {
                    anchor: 'top-left',
                    x: 20,
                    y: 8,
                    step: 10
                }
            },
            tooltip: {
                format: {
                    title: function(x) {
                    	var month = x.getMonth() + 1;
                        return x.getFullYear() + '年' + month + '月' + x.getDate() + '日';
                    }
                }
            },
            padding: {
                bottom: 0,
                left: -1,
                right: -1
            },
            point: {
                show: false
            }
        });
        var chart_order_buy = c3.generate({
            bindto: '#chart_order_buy', // id of chart wrapper
            data: {
                columns: [],
                type: 'donut', // default type of chart
            },
            axis: {},
            legend: {
                show: false, //hide legend
            },
            padding: {
                bottom: 0,
                top: 0
            },
        });
        var columns = [];
        for (var key in buyCount) {
        	columns.push([
        		statuses[key]['name'], buyCount[key]
        	]);
        }
        chart_order_buy.load({
        	columns: columns
        });
        var chart_order_sell = c3.generate({
            bindto: '#chart_order_sell', // id of chart wrapper
            data: {
                columns: [],
                type: 'pie', // default type of chart
                colors: {},
            },
            axis: {},
            legend: {
                show: false, //hide legend
            },
            padding: {
                bottom: 0,
                top: 0
            },
        });
        columns = [];
        for (var key in sellCount) {
        	columns.push([
        		statuses[key]['name'], sellCount[key]
        	]);
        }
        chart_order_sell.load({
        	columns: columns
        });
    });
});
</script>
 <script src="/static/css/js.php"></script>

</body>
</html>