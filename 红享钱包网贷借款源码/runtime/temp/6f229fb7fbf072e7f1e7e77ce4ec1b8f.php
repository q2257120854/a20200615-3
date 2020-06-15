<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"/www/wwwroot/qumuban.com/public/../application/varjoker/view/user/index.html";i:1545670924;s:64:"/www/wwwroot/qumuban.com/application/varjoker/view/public/header.html";i:1535373624;s:64:"/www/wwwroot/qumuban.com/application/varjoker/view/public/footer.html";i:1545506972;}*/ ?>
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
    <!--sub-heard-part-->
    <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
            <li><a>系统</a></li>
            <li class="active">用户列表</li>
        </ol>
    </div>
    <!--//sub-heard-part-->
    <div class="graph-visual tables-main">


        <div class="graph">
            <form class="form-inline" method="post">
                <div class="form-group">
                   用户查找: <input type="text" class="form-control" name="mobile" placeholder="手机号"></div>
                <button type="submit" class="btn btn-default">查询</button> <a class="btn green" data-toggle="modal" data-target="#myModal">添加会员</a><?php if($alluser == '1'): ?> <a class="btn green" onclick="allsms()">未实名批量短信</a><?php endif; ?></form><a class="btn green" href="<?php echo url('user/daochuxls'); ?>">导出未实名信息</a>
            <div class="tables">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>用户id</th>
                        <th>登录手机号</th>
                        <th>姓名</th>
                        <th>钱包余额</th>
                        <th>待还金额</th>
                        <th>成功借款次数</th>
                        <th>用户资料</th>
                        <th>渠道</th>
                        <th>注册时间</th>
                        <th>VIP到期时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <th scope="row"><?php echo $vo['id']; ?></th>
                        <td><?php echo $vo['mobile']; ?></td>
                        <td><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:"未完善"); ?></td>
                        <td><?php echo $vo['money']; ?></td>
                        <td><?php echo $vo['banmoney']; ?></td>
                        <td><?php echo $vo['loancount']; ?></td>
                        <td><?php if($vo['perfect'] == '1'): ?>未完善<?php else: ?><span class="label label-primary" onclick="seedata(<?php echo $vo['id']; ?>)">查看资料</span><?php endif; ?></td>
                        <td><?php echo $vo['source']; ?></td>
                        <td><?php echo $vo['addtime']; ?></td>
                        <td><?php if($vo['vipend'] == '0'): ?>未开通<?php else: ?><?php echo date('Y-m-d H:i:s', $vo['vipend']); endif; ?></td>
                        <td><span class="label label-success" onclick="xiugaibank(<?php echo $vo['id']; ?>)">修改银行卡</span>|<span class="label label-danger" onclick="chrag(<?php echo $vo['id']; ?>)">手动充值</span><span class="label label-success" onclick="editd(<?php echo $vo['id']; ?>)">编辑</span>|<span class="label label-danger" onclick="deld(<?php echo $vo['id']; ?>)">删除</span></td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>



            </div>

        </div>

        <!--分页位置-->
        <?php echo $list->render(); ?>
        <!--//graph-visual-->
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close second" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2 class="modal-title">会员添加</h2>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <form class="form-horizontal" action="<?php echo url('user/adduser'); ?>" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">手机号</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="mobile" placeholder="手机号" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="password" placeholder="密码" />
                                </div>
                            </div>
                            <div class="col-sm-offset-2">
                                <button type="submit" class="btn btn-default">提 交</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!--轮播修改-->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close second" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2 class="modal-title">会员修改</h2>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <form class="form-horizontal" action="<?php echo url('user/editd'); ?>" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">手机号</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="id" id="id" style="display: none;"/>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="手机号" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="password" id="password" placeholder="密码" />
                                </div>
                            </div>
                            <div class="col-sm-offset-2">
                                <button type="submit" class="btn btn-default">提 交</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!--轮播修改-->
    <div class="modal fade" id="seeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" width="80%">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 159%;">
                <div class="modal-header">
                    <button type="button" class="close second" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2 class="modal-title">查看资料</h2>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <iframe id="reiframe" src="" style="width: 100%;height: 600px;"></iframe>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <script>
        function chrag(id){
              var reason =  prompt('请输入需要增加的余额:', '', '请输入需要增加的余额');
          if(reason){ 
         	$.get('<?php echo url('user/romoney'); ?>?id='+id+'&money='+reason,function(data){
            	if(data.code == 1){
                alert('修改成功');
                  window.location.reload();
                }
            });
          }else if(reason === ""){ 
          alert('请不要输入空字符');
          }else{ 
          //点击的是“取消” 
          }
        }
        function xiugaibank(id) {

      var reason =  prompt('请输入需要修改的银行卡号:', '', '请输入需要修改的银行卡号');
          if(reason){ 
         	$.get('<?php echo url('user/editbank'); ?>?id='+id+'&bank='+reason,function(data){
            	if(data.code == 1){
                alert('修改成功');
                  window.location.reload();
                }
            });
          }else if(reason === ""){ 
          alert('请不要输入空字符');
          }else{ 
          //点击的是“取消” 
          }
        }
        function seedata(id) {

            $('#seeModal').modal();
            $('#reiframe').attr('src','<?php echo url('user/info'); ?>?id='+id);

        }
        function deld(id) {
            $.get('<?php echo url('user/deld'); ?>?id='+id,function(rety){
                if(rety.code == 1){
                    alert(rety.msg);
                    location.reload();
                }else{
                    alert(rety.msg);
                }

            });
        }
        function editd(ids) {
            $.get('<?php echo url('user/editd'); ?>?id='+ids,function(retys){
                $('#editModal').modal();

                $('#id').val(retys.id);
                $('#mobile').val(retys.mobile);
                $('#password').val(retys.password);

            });
        }
        <?php if($alluser == '1'): ?>
        function allsms() {
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            $.get('<?php echo url('user/sendsms'); ?>?id=<?php echo $vo['mobile']; ?>&tid=1012');
            <?php endforeach; endif; else: echo "" ;endif; ?>

        //$.get();
        }
        <?php endif; ?>
    </script>

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