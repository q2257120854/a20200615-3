<?php /*a:2:{s:61:"/www/wwwroot/77q73.cn/application/admin/view/store/order.html";i:1530508658;s:62:"/www/wwwroot/77q73.cn/application/admin/view/common/world.html";i:1550219596;}*/ ?>
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
    <title>商城订单</title>
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
                                    <a href="/admin/wallet/give.html" class="dropdown-item">批量赠送</a>
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
                
<form method="get" class="">
	<div class="row">
		<div class="col-md-6 col-lg-3 mb-3">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">状态</span>
				</div>
				<select class="custom-select input-group-text" name="status">
					<option value="">全部</option>
					<?php if(is_array($statuses) || $statuses instanceof \think\Collection || $statuses instanceof \think\Paginator): $i = 0; $__LIST__ = $statuses;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$status): $mod = ($i % 2 );++$i;if(is_null(app('request')->get('status')) || app('request')->get('status') == ''): ?>
							<option value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($status); ?></option>
						<?php else: if(app('request')->get('status') == $key): ?>
								<option selected="true" value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($status); ?></option>
							<?php else: ?>
								<option value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($status); ?></option>
							<?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
			    </select>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 mb-3">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">商品类型</span>
				</div>
				<select class="custom-select input-group-text" name="catalog">
					<option value="">全部</option>
					<?php if(is_array(app('config')->get('hello.store.catalog')) || app('config')->get('hello.store.catalog') instanceof \think\Collection || app('config')->get('hello.store.catalog') instanceof \think\Paginator): $i = 0; $__LIST__ = app('config')->get('hello.store.catalog');if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$catalog): $mod = ($i % 2 );++$i;if(is_null(app('request')->get('catalog')) || app('request')->get('catalog') == ''): ?>
							<option value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($catalog); ?></option>
						<?php else: if(app('request')->get('catalog') == $key): ?>
								<option selected="true" value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($catalog); ?></option>
							<?php else: ?>
								<option value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($catalog); ?></option>
							<?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
			    </select>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 mb-3">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">具体商品</span>
				</div>
				<select class="custom-select input-group-text" name="product">
					<option value="">全部</option>
					<?php if(is_array($products) || $products instanceof \think\Collection || $products instanceof \think\Paginator): $i = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if(is_null(app('request')->get('product')) || app('request')->get('product') == ''): ?>
							<option value="<?php echo htmlentities($item['id']); ?>"><?php echo htmlentities($item['title']); ?></option>
						<?php else: if(app('request')->get('product') == $item['id']): ?>
								<option selected="true" value="<?php echo htmlentities($item['id']); ?>"><?php echo htmlentities($item['title']); ?></option>
							<?php else: ?>
								<option value="<?php echo htmlentities($item['id']); ?>"><?php echo htmlentities($item['title']); ?></option>
							<?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
			    </select>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 mb-3">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">用户账号</span>
				</div>
				<input type="text" class="form-control" name="username" value="<?php echo htmlentities(app('request')->get('username')); ?>" />
			</div>
		</div>
		<div class="col-lg-2 mb-3">
			<button class="btn btn-primary w-100" type="submit">立即查询</button>
		</div>
	</div>
</form>
<div class="card">
	<div class="table-responsive">
	    <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
	        <thead>
	            <tr>
	                <th>用户</th>
	                <th>状态</th>
	                <th>类目</th>
	                <th>商品</th>
	                <th>收货信息</th>
	                <th>发货信息</th>
	                <th>时间</th>
	                <th>操作</th>
	            </tr>
	        </thead>
	        <tbody>
			<?php if(is_array($logs) || $logs instanceof \think\Collection || $logs instanceof \think\Paginator): $i = 0; $__LIST__ = $logs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$log): $mod = ($i % 2 );++$i;?>
				<tr>
					<td>
						<div class="mb-1"><span class="tag tag-azure">买家</span> <?php echo htmlentities($log['buyer']); ?></div>
						<div><span class="tag tag-blue">卖家</span> <?php echo htmlentities((isset($log['seller']) && ($log['seller'] !== '')?$log['seller']:"官方")); ?></div>
					</td>
					<td>
						<?php switch($log['status']): case "1": ?>
								<span class="status-icon bg-success"></span> <small>交易成功</small>
							<?php break; case "2": ?>
								<span class="status-icon bg-warning"></span> <small>待发货</small>
							<?php break; case "3": ?>
								<span class="status-icon bg-warning"></span> <small>待确认</small>
							<?php break; case "0": ?>
								<span class="status-icon bg-danger"></span> <small>失败</small>
							<?php break; endswitch; ?>
					</td>
					<td><?php echo htmlentities(app('config')->get('hello.store.catalog')[$log['catalog']]); ?></td>
					<td><?php echo htmlentities($log['title']); ?></td>
					<td>
						<?php if(!(empty($log['address']) || (($log['address'] instanceof \think\Collection || $log['address'] instanceof \think\Paginator ) && $log['address']->isEmpty()))): ?>
							<div><?php echo htmlentities($log['address']['name']); ?> <?php echo htmlentities($log['address']['mobile']); ?></div>
							<div><?php echo htmlentities($log['address']['province']); ?><?php echo htmlentities($log['address']['city']); ?><?php echo htmlentities($log['address']['county']); ?><?php echo htmlentities($log['address']['address']); ?></div>
							<?php if(!(empty($log['address']['remark']) || (($log['address']['remark'] instanceof \think\Collection || $log['address']['remark'] instanceof \think\Paginator ) && $log['address']['remark']->isEmpty()))): ?>
							<div><?php echo htmlentities($log['address']['remark']); ?></div>
							<?php endif; endif; ?>
					</td>
					<td><?php echo htmlentities($log['express']); ?></td>
					<td><?php echo htmlentities($log['date']); ?></td>
					<td>
						<?php if($log['status'] == '2'): ?>
							<button class="btn btn-secondary btn-sm btn-shipped" data-id="<?php echo htmlentities($log['oid']); ?>">发货</button>
						<?php endif; ?>
						<a class="btn btn-secondary btn-sm" href="/admin/store/removeOrder?oid=<?php echo htmlentities($log['oid']); ?>" onclick="return confirm('确定要删除吗？');">删除</a>
					</td>
				</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
	        </tbody>
	    </table>
	</div>
	<div class="card-footer"><?php echo $logs; ?></div>
</div>
<div class="modal modal-shipped" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content" style="margin-top: -100px;">
			<form method="post" action="/admin/store/shipped">
				<input type="hidden" name="oid" />
				<div class="modal-header">
					<h5 class="modal-title">发货信息</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<textarea name="send" class="form-control" cols="30" rows="5" placeholder="填写快递公司和单号或其他信息"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
					<button type="submit" class="btn btn-primary btn-shipped-post">立即发货</button>
				</div>
			</form>
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
                    Copyright © 2018 <a href="."><?php echo htmlentities(app('config')->get('hello.title')); ?></a>. All rights reserved.
                </div>
            </div>
        </div>
    </footer>
</div>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>

<script type="text/javascript">
require(['jquery'], function($){
	$(function(){
		$('.btn-shipped').on('click', function(){
			window.oid = $(this).data('id');
			$('.modal-shipped input[name=oid]').val(oid);
			$('.modal-shipped').modal();
		});
	});
});
</script>

</body>
</html>