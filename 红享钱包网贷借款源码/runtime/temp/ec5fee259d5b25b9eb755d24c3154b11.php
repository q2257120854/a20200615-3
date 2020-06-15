<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"/www/wwwroot/m.mkuaixun09.cn/public/../application/varjoker/view/setting/loanindex.html";i:1538916476;s:73:"/www/wwwroot/m.mkuaixun09.cn/application/varjoker/view/public/header.html";i:1535373624;s:73:"/www/wwwroot/m.mkuaixun09.cn/application/varjoker/view/public/footer.html";i:1545506972;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo \think\Config::get('config.title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="/static/skin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="/static/skin/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="/static/skin/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <link href='/static/skin/css/font.css' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="/static/skin/css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <script src="/static/skin/js/jquery-1.10.2.min.js"></script>
    <link href="/static/skin/css/fabochart.css" rel='stylesheet' type='text/css' />
    <!--clock init-->
    <script src="/static/skin/js/css3clock.js"></script>
    <!--Easy Pie Chart-->
    <!--skycons-icons-->
    <script src="/static/skin/js/skycons.js"></script>


    <!--//skycons-icons-->
</head>
<body>
<div class="page-container">
    <!--/content-inner-->
    <div class="left-content">
        <div class="inner-content">
            <!-- header-starts -->
            <div class="header-section">
                <!--menu-right-->
                <div class="top_menu">

                    <!--/profile_details-->
                    <div class="profile_details_left">
                        <ul class="nofitications-dropdown">
                            <li class="dropdown note dra-down">
                                <div id="dd" class="wrapper-dropdown-3" tabindex="1">
                                    <span style="font-size: 10px;">站点设置</span>
                                    <ul class="dropdown">
                                        <li><a class="deutsch">清除缓存</a></li>
                                        <li><a class="deutsch" onclick="delbase()">清空数据库</a></li>
                                    </ul>
                                </div>
                                <script type="text/javascript">

                                    function DropDown(el) {
                                        this.dd = el;
                                        this.placeholder = this.dd.children('span');
                                        this.opts = this.dd.find('ul.dropdown > li');
                                        this.val = '';
                                        this.index = -1;
                                        this.initEvents();
                                    }
                                    DropDown.prototype = {
                                        initEvents : function() {
                                            var obj = this;

                                            obj.dd.on('click', function(event){
                                                $(this).toggleClass('active');
                                                return false;
                                            });

                                            obj.opts.on('click',function(){
                                                var opt = $(this);
                                                obj.val = opt.text();
                                                obj.index = opt.index();
                                                obj.placeholder.text(obj.val);
                                            });
                                        },
                                        getValue : function() {
                                            return this.val;
                                        },
                                        getIndex : function() {
                                            return this.index;
                                        }
                                    }

                                    $(function() {

                                        var dd = new DropDown( $('#dd') );

                                        $(document).click(function() {
                                            // all dropdowns
                                            $('.wrapper-dropdown-3').removeClass('active');
                                        });

                                    });

                                </script>
                            </li>

                            <div class="clearfix"></div>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!--//profile_details-->
                </div>
                <!--//menu-right-->
                <div class="clearfix"></div>
            </div>
            <!-- //header-ends -->
<div class="outter-wp">
    <!--/sub-heard-part-->


    <!--/set-2-->
    <div class="set-1">
        <div class="graph-2 general">
            <div class="sub-heard-part">
                <ol class="breadcrumb m-b-0">
                    <li><a>系统</a></li>
                    <li class="active">借款设置</li>
                </ol>
            </div>
            <div class="grid-1">
                <div class="form-body">
                    <form class="form-horizontal" action="<?php echo url('setting/saveloan'); ?>" method="post">
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">借款金额</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="loanmoney" value="<?php echo \think\Config::get('loan.loanmoney'); ?>">
                            </div>
                            <div class="col-sm-2">
                                <p class="help-block">使用英文,号分割</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">过滤关键词</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="safekey" value="<?php echo \think\Config::get('loan.safekey'); ?>">
                            </div>
                            <div class="col-sm-2">
                                <p class="help-block">使用英文,号分割</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">审核方式</label>
                            <div class="col-sm-8">
                                <input type="radio" name="totype" value="1" <?php if(\think\Config::get('loan.totype') == '1'): ?>checked<?php endif; ?>>手动<input type="radio" name="totype" value="2" <?php if(\think\Config::get('loan.totype') == '2'): ?>checked<?php endif; ?>>自动
                            </div>
                            <div class="col-sm-2">
                                <!--<p class="help-block">Your help text!</p>-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">借款期限</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="loanterm" value="<?php echo \think\Config::get('loan.loanterm'); ?>">
                            </div>
                            <div class="col-sm-2">
                                <p class="help-block">使用英文,号分割</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">期限单位</label>
                            <div class="col-sm-8">
                                <input type="radio" name="typeterm" value="天" <?php if(\think\Config::get('loan.typeterm') == '天'): ?>checked<?php endif; ?>>天<input type="radio" name="typeterm" value="月" <?php if(\think\Config::get('loan.typeterm') == '月'): ?>checked<?php endif; ?>>月
                            </div>
                            <div class="col-sm-2">
                                <!--<p class="help-block">Your help text!</p>-->
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">借款利息</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="loanint" value="<?php echo \think\Config::get('loan.loanint'); ?>">
                            </div>
                            <div class="col-sm-2">
                                <p class="help-block"> 单位(%) 根据期限单位含义不同("天"为日息，"月"为月息)</p>
                            </div>
                        </div>
                      <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">自动审核到账百分比</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="loanshfv" value="<?php echo \think\Config::get('loan.loanshfv'); ?>">
                            </div>
                            <div class="col-sm-2">
                                <p class="help-block"> 单位(%) 填90就是90%</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">审核时间</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="loansh" value="<?php echo \think\Config::get('loan.loansh'); ?>">
                            </div>
                            <div class="col-sm-2">
                                <p class="help-block"> 单位(分钟) xx分钟后审核完成</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">优惠券</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="youhui" value="<?php echo \think\Config::get('loan.youhui'); ?>">
                            </div>
                            <div class="col-sm-2">
                                <p class="help-block"> 单位(%) 根据期限单位含义不同("天"为日息，"月"为月息)</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">是否开启服务费用</label>
                            <div class="col-sm-8">
                                <input type="radio" name="serviceswitch" value="1" <?php if(\think\Config::get('loan.serviceswitch') == '1'): ?>checked<?php endif; ?>>开<input type="radio" name="serviceswitch" value="0" <?php if(\think\Config::get('loan.serviceswitch') == '0'): ?>checked<?php endif; ?>>关
                            </div>
                            <div class="col-sm-2">
                                <!--<p class="help-block">Your help text!</p>-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">服务费用</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="servicepay" value="<?php echo \think\Config::get('loan.servicepay'); ?>">
                            </div>
                            <div class="col-sm-2">
                                <p class="help-block">单位(%) 除利息外额外收取的费用</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">还款方式</label>
                            <div class="col-sm-8">
                                <input type="radio" name="loanmode" value="1" <?php if(\think\Config::get('loan.loanmode') == '1'): ?>checked<?php endif; ?>>扣除利息到期还款本金 <input type="radio" name="loanmode" value="0" <?php if(\think\Config::get('loan.loanmode') == '0'): ?>checked<?php endif; ?>>到期还款本金和利息
                            </div>
                            <div class="col-sm-2">
                                <!--<p class="help-block">Your help text!</p>-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">提现最低金额</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="txmini" value="<?php echo \think\Config::get('loan.txmini'); ?>">
                            </div>
                            <div class="col-sm-2">
                               <p class="help-block">元</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">是否开启邀请码</label>
                            <div class="col-sm-8">
                                <input type="radio" name="regswitch" value="1" <?php if(\think\Config::get('loan.regswitch') == '1'): ?>checked<?php endif; ?>>开 <input type="radio" name="regswitch" value="0" <?php if(\think\Config::get('loan.regswitch') == '0'): ?>checked<?php endif; ?>>关
                            </div>
                            <div class="col-sm-2">
                                <!--<p class="help-block">Your help text!</p>-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">注册邀请码</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="regcode" value="<?php echo \think\Config::get('loan.regcode'); ?>">
                            </div>
                            <div class="col-sm-2">
                                <!--<p class="help-block">Your help text!</p>-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">是否开启放款码</label>
                            <div class="col-sm-8">
                                <input type="radio" name="reswitch" value="1" <?php if(\think\Config::get('loan.reswitch') == '1'): ?>checked<?php endif; ?>>开 <input type="radio" name="reswitch" value="0" <?php if(\think\Config::get('loan.reswitch') == '0'): ?>checked<?php endif; ?>>关
                            </div>
                            <div class="col-sm-2">
                                <!--<p class="help-block">Your help text!</p>-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">提现放款码</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="recode" value="<?php echo \think\Config::get('loan.recode'); ?>">
                            </div>
                            <div class="col-sm-2">
                                <!--<p class="help-block">Your help text!</p>-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">VIP开关</label>
                            <div class="col-sm-8">
                                <input type="radio" name="vipswitch" value="1" <?php if(\think\Config::get('loan.vipswitch') == '1'): ?>checked<?php endif; ?>>开 <input type="radio" name="vipswitch" value="0" <?php if(\think\Config::get('loan.vipswitch') == '0'): ?>checked<?php endif; ?>>关
                            </div>
                            <div class="col-sm-2">
                                <!--<p class="help-block">Your help text!</p>-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">VIP价格</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="vipmoney" value="<?php echo \think\Config::get('loan.vipmoney'); ?>">
                            </div>
                            <div class="col-sm-2">
                                <p class="help-block">使用英文,号分割</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">VIP类型</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="viptype" value="<?php echo \think\Config::get('loan.viptype'); ?>">
                            </div>
                            <div class="col-sm-2">
                                <p class="help-block">使用英文,号分割</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">VIP名称</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="vipname" value="<?php echo \think\Config::get('loan.vipname'); ?>">
                            </div>
                            <div class="col-sm-2">
                                <p class="help-block">使用英文,号分割</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">VIP期限</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="vipterm" value="<?php echo \think\Config::get('loan.vipterm'); ?>">
                            </div>
                            <div class="col-sm-2">
                                <p class="help-block">（单位 月）使用英文,号分割</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">审核失败禁止开关</label>
                            <div class="col-sm-8">
                                <input type="radio" name="authdie" value="1" <?php if(\think\Config::get('loan.authdie') == '1'): ?>checked<?php endif; ?>>开 <input type="radio" name="authdie" value="0" <?php if(\think\Config::get('loan.authdie') == '0'): ?>checked<?php endif; ?>>关
                            </div>
                            <div class="col-sm-2">
                                <!--<p class="help-block">Your help text!</p>-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">禁止天数</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="stopday" value="<?php echo \think\Config::get('loan.stopday'); ?>">
                            </div>
                            <div class="col-sm-2">
                                <!--<p class="help-block">Your help text!</p>-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">实名认证扣款开关</label>
                            <div class="col-sm-8">
                                <input type="radio" name="authswitch" value="1" <?php if(\think\Config::get('loan.authswitch') == '1'): ?>checked<?php endif; ?>>开 <input type="radio" name="authswitch" value="0" <?php if(\think\Config::get('loan.authswitch') == '0'): ?>checked<?php endif; ?>>关
                            </div>
                            <div class="col-sm-2">
                                <!--<p class="help-block">Your help text!</p>-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">实名认证金额</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="authmoney" value="<?php echo \think\Config::get('loan.authmoney'); ?>">
                            </div>
                            <div class="col-sm-2">
                                <p class="help-block">(身份证，淘宝，运营商，银行卡）使用英文,号分割</p>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">提交</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<!--footer section start-->

<footer>

    <p><?php echo \think\Config::get('config.copyright'); ?></p>
</footer>
<!--footer section end-->
</div>
</div>
<!--//content-inner-->
<!--/sidebar-menu-->
<div class="sidebar-menu">
    <header class="logo">
        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>系统管理</h1></span>
        <!--<img id="logo" src="" alt="Logo"/>-->
    </a>
    </header>
    <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
    <!--/down-->
    <div class="down">

        <a href="index.html"><span class=" name-caret"><?php echo $admin['adminuser']; ?></span></a>

        <ul>
            <li><a class="tooltips" href="index.html"><span>管理添加</span><i class="lnr lnr-user"></i></a></li>
            <li><a class="tooltips" href="index.html"><span>个人设置</span><i class="lnr lnr-cog"></i></a></li>
            <li><a class="tooltips" href="<?php echo url('login/logout'); ?>"><span>退出登录</span><i class="lnr lnr-power-switch"></i></a></li>
        </ul>
    </div>
    <!--//down-->
    <div class="menu">
        <ul id="menu" >
            <li><a href="<?php echo url('index/index'); ?>"><i class="fa fa-tachometer"></i> <span>控制台</span></a></li>
          <li><a href="<?php echo url('index/source'); ?>"><i class="lnr lnr-code"></i> <span>推广设置</span><span class="fa fa-angle-right" style="float: right"></span></a></li>
            <li><a href="#"><i class="lnr lnr-apartment"></i> <span>首页设置</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul>
                    <li><a href="<?php echo url('broadcast/index'); ?>"><i class="fa fa-inbox"></i> 首页轮播</a></li>
                    <li><a href="<?php echo url('notice/index'); ?>"><i class="fa fa-pencil-square-o"></i> 首页公告</a></li>
                    <li><a href="<?php echo url('consultation/index'); ?>"><span class="lnr lnr-highlight"></span> 首页咨询</a></li>
                    <li><a href="<?php echo url('consultation/loanlist'); ?>"><span class="lnr lnr-highlight"></span> 借款轮播</a></li>
                </ul>
            </li>
            <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> 系统设置</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" ><a href="<?php echo url('setting/index'); ?>">站点设置</a></li>
                    <li id="menu-academico-boletim" ><a href="<?php echo url('setting/apiindex'); ?>">接口设置</a></li>
                    <li id="menu-academico-boletim" ><a href="<?php echo url('setting/auto'); ?>">关于我们</a></li>
                    <li id="menu-academico-boletim" ><a href="<?php echo url('setting/xieyi'); ?>">借款协议</a></li>
                    <li id="menu-academico-boletim" ><a href="<?php echo url('setting/regtext'); ?>">注册协议</a></li>
                    <li id="menu-academico-avaliacoes" ><a href="<?php echo url('setting/loanindex'); ?>">借款设置</a></li>
                    <li id="menu-academico-avaliacoes" ><a href="<?php echo url('setting/smsindex'); ?>">短信模板设置</a></li>
                    <li id="menu-academico-avaliacoes" ><a href="<?php echo url('setting/tuiguang'); ?>">推广页设置</a></li>
                </ul>
            </li>
            <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>用户列表</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" ><a href="<?php echo url('user/index'); ?>">所有用户</a></li>
                    <li id="menu-academico-boletim" ><a href="<?php echo url('user/index','perfect=2'); ?>">已实名用户</a></li>
                    <li id="menu-academico-boletim" ><a href="<?php echo url('user/index','perfect=1'); ?>">未实名用户</a></li>
                </ul>
            </li>
            <!--<li><a href="typography.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>-->
            <li id="menu-academico" ><a href="#"><i class="lnr lnr-book"></i> <span>借款列表</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                  <li id="menu-academico-avaliacoes" ><a href="<?php echo url('loan/index'); ?>">所有订单</a></li>
                    <li id="menu-academico-avaliacoes" ><a href="<?php echo url('loan/index','status=9'); ?>">未审核</a></li>
                    <li id="menu-academico-boletim" ><a href="<?php echo url('loan/index','status=1&viptype=1'); ?>">未支付</a></li>
                    <li id="menu-academico-boletim" ><a href="<?php echo url('loan/index','status=1&viptype=2'); ?>">已支付</a></li>
                    <li id="menu-academico-boletim" ><a href="<?php echo url('loan/index','status=2&viptype=2'); ?>">已放款</a></li>
                    <li id="menu-academico-boletim" ><a href="<?php echo url('loan/index','status=3&viptype=2'); ?>">已提款</a></li>
                    <li id="menu-academico-boletim" ><a href="<?php echo url('loan/index','status=5&viptype=2'); ?>">已还款</a></li>
                    <li id="menu-academico-boletim" ><a href="<?php echo url('loan/index','status=6&viptype=2'); ?>">已拒绝</a></li>
                </ul>
            </li>

            <li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>订单列表</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                  <li id="menu-academico-avaliacoes" ><a href="<?php echo url('pay/vip'); ?>">VIP订单</a></li>
                    <li id="menu-academico-avaliacoes" ><a href="<?php echo url('pay/index'); ?>">充值订单</a></li>
                    <li id="menu-academico-boletim" ><a href="<?php echo url('pay/putforward'); ?>">提现订单</a></li>

                </ul>
            </li>
            <!--li><a href="<?php echo url('syslog/index'); ?>"><i class="lnr lnr-pencil"></i> <span>系统日志</span><span class="fa fa-angle-right" style="float: right"></span></a></li-->
        </ul>
    </div>
</div>
<div class="clearfix"></div>
</div>
<script>
    var toggle = true;

    $(".sidebar-icon").click(function() {
        if (toggle)
        {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({"position":"absolute"});
        }
        else
        {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function() {
                $("#menu span").css({"position":"relative"});
            }, 400);
        }

        toggle = !toggle;
    });
    function delbase() {

        if(confirm("确认清空数据库？该操作不可逆，请确认后操作")){
            //点击确定后操作
            window.location.href='<?php echo url('index/cleardatabase'); ?>';
        }
    }
</script>
<!--js -->
<!-- Bootstrap Core JavaScript -->
<script src="/static/skin/js/bootstrap.min.js"></script>
</body>
</html>