<?php /*a:2:{s:63:"/www/wwwroot/77q73.cn/application/admin/view/account/audit.html";i:1531215222;s:62:"/www/wwwroot/77q73.cn/application/admin/view/common/world.html";i:1550219596;}*/ ?>
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
    <title>审核列表</title>
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
	                <th class="text-center w-1"><i class="icon-people"></i></th>
	                <th>用户</th>
	                <th>账号</th>
	                <th>状态</th>
	                <th>姓名</th>
	                <th>身份证</th>
	                <th>支付宝首页</th>
	                <th>资料</th>
	                <th>上次拒绝理由</th>
	                <th class="text-center">操作</th>
	            </tr>
	        </thead>
	        <tbody>
	        	<?php if(is_array($users) || $users instanceof \think\Collection || $users instanceof \think\Paginator): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
	            <tr>
	                <td class="text-center">
	                    <div class="avatar d-block" style="background-image: url(<?php echo avatar($user['avatar'], $user['idcard']); ?>)"></div>
	                </td>
	                <td>
	                    <div><?php echo htmlentities($user['nickname']); ?></div>
	                    <div class="small text-muted"><?php echo htmlentities($user['create_at']); ?></div>
	                </td>
	                <td><?php echo htmlentities($user['username']); ?></td>
	                <td>
	                	<?php switch($user['authen']): case "1": ?><span class="status-icon bg-success"></span>已通过<?php break; case "2": ?><span class="status-icon bg-warning"></span>待审核<?php break; default: if(empty($user['authen_reason']) || (($user['authen_reason'] instanceof \think\Collection || $user['authen_reason'] instanceof \think\Paginator ) && $user['authen_reason']->isEmpty())): ?>
                                	<span class="status-icon bg-secondary"></span>未申请
	                            <?php else: ?>
	                                <span class="status-icon bg-red"></span>被拒绝
	                            <?php endif; endswitch; ?>
	                </td>
	                <td><?php echo htmlentities($user['realname']); ?></td>
	                <td><?php echo htmlentities($user['idcard']); ?></td>
	                <td>
	                	<?php if(!(empty($user['certificate']) || (($user['certificate'] instanceof \think\Collection || $user['certificate'] instanceof \think\Paginator ) && $user['certificate']->isEmpty()))): if(!(empty($user['certificate']['front']) || (($user['certificate']['front'] instanceof \think\Collection || $user['certificate']['front'] instanceof \think\Paginator ) && $user['certificate']['front']->isEmpty()))): ?>
	                			<a href="/cert/<?php echo htmlentities($user['certificate']['front']); ?>" class="btn btn-secondary btn-sm" target="_blank" data-toggle="popover" data-trigger="hover" data-html="true" title="<img src='/cert/<?php echo htmlentities($user['certificate']['front']); ?>' />">正面</a>
	                		<?php endif; if(!(empty($user['certificate']['back']) || (($user['certificate']['back'] instanceof \think\Collection || $user['certificate']['back'] instanceof \think\Paginator ) && $user['certificate']['back']->isEmpty()))): ?>
	                			<a href="/cert/<?php echo htmlentities($user['certificate']['back']); ?>" class="btn btn-secondary btn-sm" target="_blank" data-toggle="popover" data-trigger="hover" data-html="true" title="<img src='/cert/<?php echo htmlentities($user['certificate']['back']); ?>' />">反面</a>
	                		<?php endif; if(!(empty($user['certificate']['hold']) || (($user['certificate']['hold'] instanceof \think\Collection || $user['certificate']['hold'] instanceof \think\Paginator ) && $user['certificate']['hold']->isEmpty()))): ?>
	                			<a href="/cert/<?php echo htmlentities($user['certificate']['hold']); ?>" class="btn btn-secondary btn-sm" target="_blank" data-toggle="popover" data-trigger="hover" data-html="true" title="<img src='/cert/<?php echo htmlentities($user['certificate']['hold']); ?>' />">手持</a>
	                		<?php endif; endif; ?>
	                </td>
					<td>
						<?php if(!(empty($user['certificate']) || (($user['certificate'] instanceof \think\Collection || $user['certificate'] instanceof \think\Paginator ) && $user['certificate']->isEmpty()))): if(!(empty($user['certificate']['alipay']) || (($user['certificate']['alipay'] instanceof \think\Collection || $user['certificate']['alipay'] instanceof \think\Paginator ) && $user['certificate']['alipay']->isEmpty()))): ?>
						<a href="/cert/<?php echo htmlentities($user['certificate']['alipay']); ?>" class="btn btn-secondary btn-sm" target="_blank" data-toggle="popover" data-trigger="hover" data-html="true" title="<img src='/cert/<?php echo htmlentities($user['certificate']['alipay']); ?>' />">支付宝首页</a>
						<?php endif; endif; ?>
					</td>
	                <td><?php echo htmlentities($user['authen_reason']); ?></td>
	                <td class="text-center">
	                	<a href="javascript:;" data-username="<?php echo htmlentities($user['username']); ?>" class="btn btn-primary btn-sm btn-ok">通过</a>
	                	<a href="javascript:;" data-username="<?php echo htmlentities($user['username']); ?>" class="btn btn-danger btn-sm btn-no">拒绝</a>
	                </td>
	            </tr>
	            <?php endforeach; endif; else: echo "" ;endif; ?>
	        </tbody>
	    </table>
	</div>
	<div class="card-footer"><?php echo $users; ?></div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">请输入拒绝理由</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
                    <textarea rows="3" class="form-control" name="authen_reason">很抱歉、姓名或身份证信息不正确！</textarea>
                </div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
				<button type="button" class="btn btn-primary btn-confirm">确认调整</button>
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
                    Copyright © 2018 <a href="."><?php echo htmlentities(app('config')->get('hello.title')); ?></a>. All rights reserved.
                </div>
            </div>
        </div>
    </footer>
</div>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>

<script type="text/javascript">
var username = null, $tr = null;
require(['jquery', 'tap'], function($, tap){
	$(function(){
		$('.btn-ok').on('tap', function(){
			if ($(this).hasClass('btn-loading')) {
				return false;
			}
			$(this).addClass('btn-loading');
			$tr = $(this).parents('tr');
			var username = $(this).data('username');
			$.post('/admin/account/quickAuthen', {username: username, authen: 1}, function(res){
				alert(res.message);
				if (res.code == 200) {
					$tr.remove();
				}
			});
		});
		$('.btn-no').on('tap', function(){
			$('.modal').modal('show');
			username = $(this).data('username');
			$tr = $(this).parents('tr');
		});
		$('.btn-confirm').on('tap', function(){
			$('.modal').modal('hide');
			var reason = $('textarea[name=authen_reason]').val();
			$.post('/admin/account/quickAuthen', {username: username, authen: 0, authen_reason: reason}, function(res){
				alert(res.message);
				if (res.code == 200) {
					$tr.remove();
				}
			});
		});
	});
});
</script>

</body>
</html>