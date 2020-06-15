<?php /*a:2:{s:60:"/www/wwwroot/qiyu.ink/application/admin/view/store/edit.html";i:1530515624;s:62:"/www/wwwroot/qiyu.ink/application/admin/view/common/world.html";i:1550219596;}*/ ?>
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
    <title>编辑商品</title>
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
    
<style type="text/css">
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
                
<div class="page">
	<div class="page-single">
		<form class="card" method="post" style="max-width: 50rem;" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo htmlentities($product['id']); ?>" />
			<div class="card-body">
				<div class="card-title">编辑商品</div>
				<div class="card-subtitle mb-5">不论蚁后的状态是哪一种，都可以通过系统进行赠送。</div>
				<div class="card-subtitle mb-5"><b>每小时的产量</b> 等于 <b>预计收入</b> 除以 <b>运行周期</b>。</div>
				<div class="card-subtitle mb-5">如果有小数，则保留<b>8</b>位小数，假如第<b>9</b>位小数大于等于<b>5</b>，那么则四舍五入到第<b>8</b>位。</div>
				<div class="card-subtitle">举例：A蚁后，周期7小时，产量10货币，前6个小时的产量为1.42857143，最后一个小时的产量为1.42857142。</div>
				<div class="row">
				    <div class="col-sm-6">
				        <div class="form-group">
				            <label class="form-label">商品名称</label>
				            <input type="text" class="form-control" name="title" placeholder="商品名称" value="<?php echo htmlentities($product['title']); ?>" maxlength="30" />
				        </div>
				    </div>
				    <div class="col-sm-6">
				        <div class="form-group">
                            <div class="form-label">商品图片</div>
                            <div class="custom-file">
                                <input type="file" accept="image/*" class="custom-file-input" name="image" />
                                <label class="custom-file-label">不选表示不换图片</label>
                            </div>
                        </div>
				    </div>
				    <div class="col-sm-6">
				        <div class="form-group">
				            <label class="form-label">排列顺序</label>
				            <input type="text" class="form-control" name="sort" placeholder="数字越大越靠前" value="<?php echo htmlentities($product['sort']); ?>" />
				        </div>
				    </div>
				    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label">商品状态</label>
                            <select class="form-control custom-select" name="status">
                            <?php if($product['status'] == '1'): ?>
                                <option value="1">在售（用户可见可购买）</option>
                                <option value="0">停售（用户不可见不可购买）</option>
                            <?php else: ?>
                            	<option value="1">在售（用户可见可购买）</option>
                                <option value="0" selected="true">停售（用户不可见不可购买）</option>
                            <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 attr-machine">
                    	<div class="form-group">
                            <label class="form-label">蚁后等级</label>
                            <select class="form-control custom-select" name="divide">
                            	<?php $__FOR_START_1739751930__=0;$__FOR_END_1739751930__=9;for($i=$__FOR_START_1739751930__;$i < $__FOR_END_1739751930__;$i+=1){ if($product['divide'] == $i): ?>
                                		<option value="<?php echo htmlentities($i); ?>" selected="true"><?php echo htmlentities($i); ?>级</option>
                            		<?php else: ?>
                            			<option value="<?php echo htmlentities($i); ?>"><?php echo htmlentities($i); ?>级</option>
                            		<?php endif; } ?>
                            </select>
                            <small id="emailHelp" class="form-text text-muted">例如推广关系链为A->B->C->D，假如D购买了等级为2的蚁后，那么D每次收矿的时候，C和B都能获取到部分利润，但A获取不到，因为蚁后等级为2级，代表着关系链最多为2级</small>
                            <small id="emailHelp" class="form-text text-muted">0级的蚁后通常用于实名认证后自动赠送的新手蚁后</small>
                        </div>
                    </div>
                    <div class="col-sm-6 attr-machine">
				        <div class="form-group">
				            <label class="form-label">运行周期</label>
				            <input type="text" class="form-control" name="cycle" placeholder="单位为小时" value="<?php echo htmlentities($product['cycle']); ?>" />
				        </div>
				    </div>
				    <div class="col-sm-6 attr-machine">
				        <div class="form-group">
				            <label class="form-label">预计收入（<?php echo htmlentities(app('config')->get('hello.unit')); ?>）</label>
				            <input type="text" class="form-control" name="income" placeholder="周期结束后总计收入" value="<?php echo htmlentities(money($product['income'])); ?>" />
				        </div>
				    </div>
				    <div class="col-sm-4">
				        <div class="form-group">
				            <label class="form-label">商品价格（<?php echo htmlentities(app('config')->get('hello.unit')); ?>）</label>
				            <input type="text" class="form-control" name="price" placeholder="使用<?php echo htmlentities(app('config')->get('hello.unit')); ?>付款需要多少" value="<?php echo htmlentities(money($product['price'])); ?>" />
				        </div>
				    </div>
				    <div class="col-sm-4">
				        <div class="form-group">
				            <label class="form-label">商品价格（<?php echo htmlentities(app('config')->get('hello.score.unit')); ?>）</label>
				            <input type="text" class="form-control" name="price_score" placeholder="可选、使用<?php echo htmlentities(app('config')->get('hello.score.unit')); ?>付款需要多少" value="<?php echo htmlentities(money($product['price_score'])); ?>" />
				        </div>
				    </div>
				    <div class="col-sm-4">
				        <div class="form-group">
				            <label class="form-label">赠送算力</label>
				            <input type="text" class="form-control" name="power" placeholder="每小时可计算次数" value="<?php echo htmlentities(money($product['power'])); ?>" />
				        </div>
				    </div>
				    <div class="col-sm-4">
				        <div class="form-group mb-0">
				            <label class="form-label">商品库存</label>
				            <input type="text" class="form-control" name="stock" placeholder="剩余库存" value="<?php echo htmlentities($product['stock']); ?>" />
				        </div>
				    </div>
				    <div class="col-sm-4">
				        <div class="form-group mb-0">
				            <label class="form-label">每人限购</label>
				            <input type="text" class="form-control" name="limit" placeholder="不填或填0代表不限量" maxlength="7" value="<?php echo htmlentities($product['limit']); ?>" />
				        </div>
				    </div>
				    <div class="col-sm-4">
				        <div class="form-group mb-0">
				            <label class="form-label">每天限购</label>
				            <input type="text" class="form-control" name="day" placeholder="不填或填0代表不限量" maxlength="7" value="<?php echo htmlentities($product['day']); ?>" />
				        </div>
				    </div>
				    <div class="col-sm-12 mt-3 attr-editor">
				    	<div class="form-group">
				    		<label class="form-label">商品介绍</label>
				            <script id="editor" name="content" type="text/plain" style="height: 20rem;"><?php echo $product['content']; ?></script>
				        </div>
				    </div>
				</div>
			</div>
			<div class="card-footer text-right">
				<button class="btn btn-primary">提交修改</button>
			</div>
		</form>
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
var catalog = '<?php echo htmlentities($product['catalog']); ?>';
</script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
require(['jquery', 'tap', 'ZeroClipboard'], function($, tap, ZeroClipboard){
	window['ZeroClipboard'] = ZeroClipboard;
	var layout = function(catalog){
		if (catalog == 1) {
			$('.attr-machine').prop('hidden', false);
			$('.attr-editor').prop('hidden', true);
		} else if (catalog == 2) {
			$('.attr-machine').prop('hidden', true);
			$('.attr-editor').prop('hidden', true);
		} else {
			$('.attr-machine').prop('hidden', true);
			$('.attr-editor').prop('hidden', false);
		}
	}
	$(function(){
		// 实例化编辑器
		var ue = UE.getEditor('editor');
		// 界面调整
		layout(catalog);
	});
});
</script>

</body>
</html>