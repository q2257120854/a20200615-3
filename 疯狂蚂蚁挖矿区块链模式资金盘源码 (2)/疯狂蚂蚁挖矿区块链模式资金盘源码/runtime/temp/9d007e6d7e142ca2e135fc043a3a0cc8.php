<?php /*a:2:{s:62:"/www/wwwroot/qiyu.ink/application/admin/view/account/edit.html";i:1555265953;s:62:"/www/wwwroot/qiyu.ink/application/admin/view/common/world.html";i:1555285885;}*/ ?>
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
    <title>用户修改</title>
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
                
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header" data-toggle="card-collapse">
                <h3 class="card-title">资料编辑</h3>
                <div class="card-options mr-0">
                    <a href="#" class="card-options-collapse"><i class="fe fe-chevron-up"></i></a>
                </div>
            </div>
            <div class="card-body">
                <form class="d-block w-100" method="post" action="/admin/account/edit" enctype="multipart/form-data">
                    <input type="hidden" name="username" value="<?php echo htmlentities($user['account']['username']); ?>" />
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">用户编号</label>
                                <input type="text" class="form-control" disabled="true" name="uid" placeholder="用户编号" value="<?php echo htmlentities($user['account']['uid']); ?>" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">用户账号</label>
                                <input type="text" class="form-control" readonly="true" name="username" placeholder="用户账号" value="<?php echo htmlentities($user['account']['username']); ?>" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">个性昵称</label>
                                <input type="text" class="form-control" name="nickname" placeholder="个性昵称" value="<?php echo htmlentities($user['profile']['nickname']); ?>" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <div class="form-label">用户头像</div>
                                <div class="custom-file">
                                    <input type="file" accept="image/*" class="custom-file-input" name="avatar" />
                                    <label class="custom-file-label">不选表示不更换</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">微信账号</label>
                                <input type="text" class="form-control" name="wechat" placeholder="微信账号" value="<?php echo htmlentities($user['profile']['wechat']); ?>" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">QQ号码</label>
                                <input type="tel" class="form-control" name="qq" placeholder="QQ号码" value="<?php echo htmlentities($user['profile']['qq']); ?>" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label">支付宝账号</label>
                                <input type="tel" class="form-control" name="alipay" placeholder="支付宝账号" value="<?php echo htmlentities($user['profile']['alipay']); ?>" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">银行名称</label>
                                <input type="text" class="form-control" name="bankname" placeholder="银行名称" value="<?php echo htmlentities($user['profile']['bankname']); ?>" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">银行卡号</label>
                                <input type="text" class="form-control" name="bankcard" placeholder="银行卡号" value="<?php echo htmlentities($user['profile']['bankcard']); ?>" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label">分行地址</label>
                                <input type="text" class="form-control" name="bankaddress" placeholder="分行地址" value="<?php echo htmlentities($user['profile']['bankaddress']); ?>" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text-right">
                                <button class="btn btn-primary">更新档案</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card card-collapsed">
            <div class="card-header" data-toggle="card-collapse">
                <h3 class="card-title">资金调整</h3>
                <div class="card-options mr-0">
                    <a href="#" class="card-options-collapse"><i class="fe fe-chevron-up"></i></a>
                </div>
            </div>
            <div class="card-body">
                <form class="d-block w-100" method="post" action="/admin/account/capital">
                    <input type="hidden" name="username" value="<?php echo htmlentities($user['account']['username']); ?>" />
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">可用<?php echo htmlentities(app('config')->get('hello.unit')); ?></label>
                                <input type="text" class="form-control" name="money" placeholder="可用<?php echo htmlentities(app('config')->get('hello.unit')); ?>" value="<?php echo htmlentities($user['wallet']['money']); ?>" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">冻结<?php echo htmlentities(app('config')->get('hello.unit')); ?></label>
                                <input type="text" class="form-control" name="deposit" placeholder="冻结<?php echo htmlentities(app('config')->get('hello.unit')); ?>" value="<?php echo htmlentities($user['wallet']['deposit']); ?>" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">可用<?php echo htmlentities(app('config')->get('hello.score.unit')); ?></label>
                                <input type="text" class="form-control" name="score" placeholder="可用<?php echo htmlentities(app('config')->get('hello.score.unit')); ?>" value="<?php echo htmlentities($user['wallet']['score']); ?>" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">冻结<?php echo htmlentities(app('config')->get('hello.score.unit')); ?></label>
                                <input type="text" class="form-control" name="score_deposit" placeholder="冻结<?php echo htmlentities(app('config')->get('hello.score.unit')); ?>" value="<?php echo htmlentities($user['wallet']['score_deposit']); ?>" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text-right">

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card card-collapsed">
            <div class="card-header" data-toggle="card-collapse">
                <h3 class="card-title">状态更改</h3>
                <div class="card-options mr-0">
                    <a href="#" class="card-options-collapse"><i class="fe fe-chevron-up"></i></a>
                </div>
            </div>
            <div class="card-body">
                <form class="d-block w-100" method="post" action="/admin/account/status">
                    <input type="hidden" name="username" value="<?php echo htmlentities($user['account']['username']); ?>" />
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="form-label">用户状态</label>
                                <select class="form-control custom-select" name="status">
                                    <?php if($user['account']['status'] == '1'): ?>
                                    <option value="1" selected="true">正常</option>
                                    <option value="0">冻结</option>
                                    <?php else: ?>
                                    <option value="1">正常</option>
                                    <option value="0" selected="true">冻结</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="form-label">&nbsp;</label>
                                <div class="text-right">
                                    <button class="btn btn-primary">立刻调整</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="text-muted">冻结状态下，用户无法登录，无法操作资金。</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card card-collapsed">
            <div class="card-header" data-toggle="card-collapse">
                <h3 class="card-title">密码管理</h3>
                <div class="card-options mr-0">
                    <a href="#" class="card-options-collapse"><i class="fe fe-chevron-up"></i></a>
                </div>
            </div>
            <div class="card-body">
                <form class="d-block w-100" method="post" action="/admin/account/password">
                    <input type="hidden" name="username" value="<?php echo htmlentities($user['account']['username']); ?>" />
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">登录密码</label>
                                <input type="text" class="form-control" name="password" placeholder="为空表示不修改" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">安全密码</label>
                                <input type="text" class="form-control" name="safeword" placeholder="为空表示不修改" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text-right">
                                <button class="btn btn-primary">修改密码</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card card-collapsed">
            <div class="card-header" data-toggle="card-collapse">
                <h3 class="card-title">实名认证</h3>
                <div class="card-options mr-0">
                    <a href="#" class="card-options-collapse"><i class="fe fe-chevron-up"></i></a>
                </div>
            </div>
            <div class="card-body">
                <form class="d-block w-100" method="post" action="/admin/account/authen">
                    <input type="hidden" name="username" value="<?php echo htmlentities($user['account']['username']); ?>" />
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">真实姓名</label>
                                <input type="text" class="form-control" name="realname" placeholder="与身份证及支付宝上一致" value="<?php echo htmlentities($user['profile']['realname']); ?>" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">身份证号码</label>
                                <input type="text" class="form-control" name="idcard" placeholder="18位身份证号码" value="<?php echo htmlentities($user['profile']['idcard']); ?>" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">实名认证</label>
                                <select class="form-control custom-select" name="authen">
                                    <?php switch($user['account']['authen']): case "1": ?>
                                    <option value="0">未申请</option>
                                    <option value="1" selected="true">通过</option>
                                    <option value="2">待审核</option>
                                    <option value="3">拒绝</option>
                                    <?php break; case "2": ?>
                                    <option value="0">未申请</option>
                                    <option value="1">通过</option>
                                    <option value="2" selected="true">待审核</option>
                                    <option value="3">拒绝</option>
                                    <?php break; case "3": ?>
                                    <option value="0">未申请</option>
                                    <option value="1">通过</option>
                                    <option value="2">待审核</option>
                                    <option value="3" selected="true">拒绝</option>
                                    <?php break; default: ?>
                                    <option value="0">未申请</option>
                                    <option value="1">通过</option>
                                    <option value="2">待审核</option>
                                    <option value="3">拒绝</option>
                                    <?php endswitch; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label">实名认证拒绝理由</label>
                                <textarea rows="3" class="form-control" placeholder="只有用户的实名认证状态为拒绝时才会显示" name="authen_reason"><?php echo htmlentities($user['profile']['authen_reason']); ?></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text-right">
                                <button class="btn btn-primary">调整认证</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card card-collapsed">
            <div class="card-header" data-toggle="card-collapse">
                <h3 class="card-title">会长级别</h3>
                <div class="card-options mr-0">
                    <a href="#" class="card-options-collapse"><i class="fe fe-chevron-up"></i></a>
                </div>
            </div>
            <div class="card-body">
                <form class="d-block w-100" method="post" action="/admin/account/level">
                    <input type="hidden" name="username" value="<?php echo htmlentities($user['account']['username']); ?>" />
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="form-label">用户类型</label>
                                <select class="form-control custom-select" name="type">
                                    <?php if(is_array(app('config')->get('hello.level')) || app('config')->get('hello.level') instanceof \think\Collection || app('config')->get('hello.level') instanceof \think\Paginator): $i = 0; $__LIST__ = app('config')->get('hello.level');if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($user['account']['type'] == $key): ?>
                                            <option value="<?php echo htmlentities($key); ?>" selected="true"><?php echo htmlentities($item['name']); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($item['name']); ?></option>
                                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="form-label">&nbsp;</label>
                                <div class="text-right">
                                    <button class="btn btn-primary">立刻调整</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="text-muted">跨级调整会依次升级并发放奖励，某级别已发放过的奖励不会再次发放</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card card-collapsed">
            <div class="card-header" data-toggle="card-collapse">
                <h3 class="card-title">推荐人修改</h3>
                <div class="card-options mr-0">
                    <a href="#" class="card-options-collapse"><i class="fe fe-chevron-up"></i></a>
                </div>
            </div>
            <div class="card-body">
                <form class="d-block w-100" method="post" action="/admin/account/inviter">
                    <input type="hidden" name="username" value="<?php echo htmlentities($user['account']['username']); ?>" />
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group mb-0">
                                <label class="form-label">推荐人</label>
                                <input type="text" class="form-control" name="inviter" placeholder="推荐人" value="<?php echo htmlentities($user['account']['inviter']); ?>" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="form-label">&nbsp;</label>
                                <div class="text-right">
                                    <button class="btn btn-primary">立刻调整</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="text-muted">修改用户的推荐人，会导致原有关系链上的用户数据核算不清，比如该用户为原上级带去了100的利润，突然这个用户不见了，原上级会不明白这100的利润是如何来的。</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6" hidden>
        <div class="card">
            <div class="card-header">
                <div class="card-title">操作日志</div>
            </div>
            <div class="card-body">
                <ul class="timeline">
                	<?php if(is_array($logs) || $logs instanceof \think\Collection || $logs instanceof \think\Paginator): $i = 0; $__LIST__ = $logs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$log): $mod = ($i % 2 );++$i;?>
                    <li class="timeline-item">
                        <div class="timeline-badge"></div>
                        <?php if(empty($log['text']) || (($log['text'] instanceof \think\Collection || $log['text'] instanceof \think\Paginator ) && $log['text']->isEmpty())): ?>
                        	<?php echo htmlentities(app('config')->get('hello.log')[$log['type']]); else: ?>
                        	<div class="w-50">
	                            <strong><?php echo htmlentities(app('config')->get('hello.log')[$log['type']]); ?></strong>
	                            <small class="d-block text-muted"><?php echo htmlentities($log['text']); ?></small>
	                        </div>
                        <?php endif; ?>
                        <div class="timeline-time">
                        	<div><?php echo htmlentities($log['create_at']); ?></div>
                        </div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="card-footer"><?php echo $logs; ?></div>
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
 
</body>
</html>