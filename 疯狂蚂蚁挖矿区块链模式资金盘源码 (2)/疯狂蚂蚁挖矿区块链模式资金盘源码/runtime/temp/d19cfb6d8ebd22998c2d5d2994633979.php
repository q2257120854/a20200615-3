<?php /*a:2:{s:71:"D:\phpstudy_pro\WWW\127.0.0.1\application\admin\view\event\funding.html";i:1566132242;s:70:"D:\phpstudy_pro\WWW\127.0.0.1\application\admin\view\common\world.html";i:1574597284;}*/ ?>
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
    <title>创业众筹</title>
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
                
<div class="d-flex">
    <div class="btn-list">
        <a href="/admin/event/funding.html" class="btn btn-primary">内排中心</a>
        <a href="/admin/event/funding_audit.html" class="btn btn-secondary">内排审核</a>
        <a href="/admin/event/funding_log.html" class="btn btn-secondary">内排记录</a>
    </div>

</div>
<div class="card mt-3">
    <div class="card-body p-0">
        <table class="table table-hover table-outline table-vcenter card-table">
            <thead>
                <tr>
                    <th>名称</th>
                    <th>状态</th>
                    <th>目标金额</th>
                    <th>当前金额</th>
                    <th>参与人数</th>
                    <th>参与次数</th>
                    <th>到期时间</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if(is_array($logs) || $logs instanceof \think\Collection || $logs instanceof \think\Paginator): $i = 0; $__LIST__ = $logs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$log): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <td>
                            <?php if($log['type'] == '8'): ?><span class="badge badge-primary badge-md">官</span><?php endif; ?>
                            <?php echo htmlentities($log['title']); if(empty($log['visible']) || (($log['visible'] instanceof \think\Collection || $log['visible'] instanceof \think\Paginator ) && $log['visible']->isEmpty())): ?> <span class="badge badge-default badge-md">不可见</span><?php endif; ?></td>
                        <td>
                            <?php switch($log['status']): case "1": ?><span class="status-icon bg-success"></span>进行中<?php break; case "2": ?><span class="status-icon bg-warning"></span>待审核<?php break; case "3": ?><span class="status-icon bg-danger"></span>已结束<?php break; endswitch; ?>
                        </td>
                        <td><?php echo htmlentities(money($log['target'])); ?></td>
                        <td><?php echo htmlentities(money($log['current'])); ?></td>
                        <td><?php echo htmlentities($log['people']); ?></td>
                        <td><?php echo htmlentities($log['count']); ?></td>
                        <td><?php echo htmlentities($log['expire_at']); ?></td>
                        <td>
                            <button class="btn btn-secondary btn-sm btn-edit" data-id="<?php echo htmlentities($log['id']); ?>">编辑</button>
                        </td>
                    </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer"><?php echo $logs; ?></div>
</div>
<div class="modal modal-create" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="action" value="create" />
                <div class="modal-header">
                    <h5 class="modal-title">发布新项目</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-3" style="display: none">
                            <div class="form-group">
                                <label class="form-label">项目分类</label>
                                <select class="custom-select input-group-text" name="catalog">
                                    <?php if(is_array(app('config')->get('hello.funding.catalog')) || app('config')->get('hello.funding.catalog') instanceof \think\Collection || app('config')->get('hello.funding.catalog') instanceof \think\Paginator): $i = 0; $__LIST__ = app('config')->get('hello.funding.catalog');if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($item); ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label">项目名称</label>
                                <input type="text" class="form-control" placeholder="项目名称" name="title" />
                            </div>
                        </div>
                        <div class="col-lg-4" style="display: none">
                            <div class="form-group">
                                <label class="form-label">项目图片</label>
                                <div class="custom-file">
                                    <input type="file" accept="image/*" class="custom-file-input" name="image" />
                                    <label class="custom-file-label">选择图片</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3" style="display: none">
                            <div class="form-group">
                                <label class="form-label">项目类型</label>
                                <select class="custom-select input-group-text" name="type">
                                        <option value="1">普通项目</option>
                                        <option value="8">官方项目</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-5" style="display: none">
                            <div class="form-group">
                                <label class="form-label">项目发起人</label>
                                <input type="text" class="form-control" placeholder="选填、发起人的手机号码" name="owner" maxlength="11" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">目标金额</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="必填" name="target" />
                                    <span class="input-group-append" id="basic-addon2">
                                        <span class="input-group-text"><?php echo htmlentities(app('config')->get('hello.unit')); ?></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" style="display: none">
                            <div class="form-group">
                                <label class="form-label">项目详情</label>
                                <script id="editor" name="content" type="text/plain" style="height: 20rem;"></script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                    <button type="submit" class="btn btn-primary">发布项目</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal modal-update" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" />
                <input type="hidden" name="action" value="update" />
                <div class="modal-header">
                    <h5 class="modal-title">编辑内排中心</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-3" style="display: none">
                            <div class="form-group">
                                <label class="form-label">项目分类</label>
                                <select class="custom-select input-group-text" name="catalog">
                                    <?php if(is_array(app('config')->get('hello.funding.catalog')) || app('config')->get('hello.funding.catalog') instanceof \think\Collection || app('config')->get('hello.funding.catalog') instanceof \think\Paginator): $i = 0; $__LIST__ = app('config')->get('hello.funding.catalog');if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($item); ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="form-label">项目名称</label>
                                <input type="text" class="form-control" placeholder="项目名称" name="title" />
                            </div>
                        </div>
                        <div class="col-lg-4" style="display: none">
                            <div class="form-group">
                                <label class="form-label">项目图片</label>
                                <div class="custom-file">
                                    <input type="file" accept="image/*" class="custom-file-input" name="image" />
                                    <label class="custom-file-label">不选，代表不改图片</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3" style="display: none">
                            <div class="form-group">
                                <label class="form-label">排列顺序</label>
                                <input type="text" class="form-control" placeholder="数字越大越靠前" name="sort" />
                            </div>
                        </div>
                        <div class="col-lg-3" style="display: none">
                            <div class="form-group">
                                <label class="form-label">是否显示</label>
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="visible" value="1" checked="">
                                        <span class="custom-control-label">显示</span>
                                    </label>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="visible" value="0">
                                        <span class="custom-control-label">隐藏</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3" style="display: none">
                            <div class="form-group">
                                <label class="form-label">项目类型</label>
                                <select class="custom-select input-group-text" name="type">
                                        <option value="1">普通项目</option>
                                        <option value="8">官方项目</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-label">项目状态</label>
                                <select class="custom-select input-group-text" name="status">
                                        <option value="1">进行中</option>
                                        <option value="2">待审核</option>
                                        <option value="3">已结束</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4" style="display: none">
                            <div class="form-group">
                                <label class="form-label">发布人</label>
                                <input type="text" class="form-control" placeholder="选填、发布人手机号码" name="owner" maxlength="11" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">目标金额</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="必填" name="target" />
                                    <span class="input-group-append" id="basic-addon2">
                                        <span class="input-group-text"><?php echo htmlentities(app('config')->get('hello.unit')); ?></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">到期时间</label>
                                <input type="text" class="form-control" placeholder="格式 2018-08-08 12:30:00" name="expire_at" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="display: none">
                            <div class="form-group">
                                <label class="form-label">宝贝详情</label>
                                <script id="editor2" name="content" type="text/plain" style="height: 20rem;"></script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                    <button type="submit" class="btn btn-primary">保存设置</button>
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
                    Copyright © 2018 <a href="http://www.zgymw.com">中国源码网</a>. All rights reserved.
                </div>
            </div>
        </div>
    </footer>
</div>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>

<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
<script>
require(['jquery', 'ZeroClipboard'], function($, ZeroClipboard){
    window['ZeroClipboard'] = ZeroClipboard;
    $(function(){
        // 实例化编辑器
        var ue = UE.getEditor('editor', {
            zIndex: 2900,
        });
        var ue2 = UE.getEditor('editor2', {
            zIndex: 2900,
        });
        // 编辑项目
        $('.btn-edit').on('click', function(){
            if ($('.btn-loading').length) {
                return false;
            }
            $(this).addClass('btn-loading');
            var id = $(this).data('id');
            ajax('/admin/event/funding', {action: 'get', id: id}, function(res){
                $('.btn-edit[data-id=' + id + ']').removeClass('btn-loading');
                $('.modal-update input[name=id]').val(res.data.id);
                $('.modal-update select[name=catalog]').val(res.data.catalog);
                $('.modal-update input[name=title]').val(res.data.title);
                $('.modal-update input[name=sort]').val(res.data.sort);
                if (res.data.visible) {
                    $('.modal-update input[name=visible][value=1]').prop('checked', true);
                } else {
                    $('.modal-update input[name=visible][value=1]').prop('checked', false);
                    $('.modal-update input[name=visible][value=0]').prop('checked', true);
                }
                $('.modal-update select[name=type]').val(res.data.type);
                $('.modal-update select[name=status]').val(res.data.status);
                $('.modal-update input[name=owner]').val(res.data.owner);
                $('.modal-update input[name=target]').val(res.data.target);
                $('.modal-update input[name=expire_at]').val(res.data.expire_at);
                ue2.setContent(res.data.content ? res.data.content : '');
                $('.modal-update').modal();
            });
        });
    });
});
</script>

</body>
</html>