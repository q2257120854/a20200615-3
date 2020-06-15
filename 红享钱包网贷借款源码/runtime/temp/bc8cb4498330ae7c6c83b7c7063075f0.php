<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"D:\phpstudy_pro\WWW\127.0.0.4\public/../application/varjoker\view\index\index.html";i:1536162310;s:74:"D:\phpstudy_pro\WWW\127.0.0.4\application\varjoker\view\public\header.html";i:1535373624;s:74:"D:\phpstudy_pro\WWW\127.0.0.4\application\varjoker\view\public\footer.html";i:1545506972;}*/ ?>
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
                <!--custom-widgets-->
                <div class="custom-widgets">
                    <div class="row-one">
                        <div class="col-md-3 widget">
                            <div class="stats-left ">
                                <h5>系统</h5>
                                <h4> 用户量</h4>
                            </div>
                            <div class="stats-right">
                                <label><?php echo $alldata['userall']; ?></label>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-3 widget states-mdl">
                            <div class="stats-left">
                                <h5>系统</h5>
                                <h4>放款量</h4>
                            </div>
                            <div class="stats-right">
                                <label> <?php echo $alldata['loanmoney']; ?></label>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-3 widget states-thrd">
                            <div class="stats-left">
                                <h5>系统</h5>
                                <h4>实名量</h4>
                            </div>
                            <div class="stats-right">
                                <label><?php echo $alldata['shiming']; ?></label>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-3 widget states-last">
                            <div class="stats-left">
                                <h5>系统</h5>
                                <h4>访问量</h4>
                            </div>
                            <div class="stats-right">
                                <label><?php echo $alldata['getip']; ?></label>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>

                        <!--//bottom-grids-->
                    </div>
            <div class="graph">
                <div class="tables">

                    <table class="table table-bordered">
                        <thead>
                        <tr><th>省份</th><?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><th><?php echo $vo['title']; ?></th><?php endforeach; endif; else: echo "" ;endif; ?><th>总计</th></tr>

                        </thead> <tbody>
                    <tr> <th scope="row">注册量</th><?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><th scope="row"><?php echo $vo['zhuce']; ?></th><?php endforeach; endif; else: echo "" ;endif; ?><th scope="row"><?php echo $scount['zhuce']; ?></th></tr>
                    <tr> <th scope="row">支付量</th><?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><th scope="row"><?php echo $vo['count']; ?></th><?php endforeach; endif; else: echo "" ;endif; ?><th scope="row"><?php echo $scount['count']; ?></th></tr>
                    <tr> <th scope="row">资料量</th><?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><th scope="row"><?php echo $vo['ziliao']; ?></th><?php endforeach; endif; else: echo "" ;endif; ?><th scope="row"><?php echo $scount['ziliao']; ?></th></tr>
               </tbody> </table>
                </div>
                <!--//menu-right-->
                <div class="clearfix" style="height: 100px;"></div>



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