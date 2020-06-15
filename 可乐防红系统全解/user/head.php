<?php
@header('Content-Type: text/html; charset=UTF-8');
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8" />
  <title><?php echo $title ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link href="//lib.baomitu.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="//lib.baomitu.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link href="//lib.baomitu.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <script src="//lib.baomitu.com/jquery/1.12.4/jquery.min.js"></script>
  <script src="//lib.baomitu.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../assets/user/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="../assets/user/css/app.css" type="text/css" />
  <script src="../assets/user/js/app.js"></script>
  <!--[if lt IE 9]>
    <script src="//lib.baomitu.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//lib.baomitu.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]--><style>
.shuaibi-tip {
    background: #fafafa repeating-linear-gradient(-45deg,#fff,#fff 1.125rem,transparent 1.125rem,transparent 2.25rem);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
    margin: 20px 0px;
    padding: 15px;
    border-radius: 5px;
    font-size: 14px;
    color: #555555;
}
</style>
</head>
<?php if($islogin2==1){
if($userrow['status']==0){
	sysmsg('当前分站已关闭！',true);exit;
}elseif($userrow['endtime']<$date){
	sysmsg('你的账号已到期，请联系管理员续费！',true);exit;
}
?>
<body>
<div class="app app-header-fixed  ">
  <header id="header" class="app-header navbar ng-scope" role="menu">
      <div class="navbar-header bg-primary">
        <button class="pull-right visible-xs" ui-toggle="off-screen" target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <a href="./" class="navbar-brand text-lt">
          <i class="fa fa-desktop hidden-xs"></i>
          <span class="hidden-folded m-l-xs">分站管理中心</span>
        </a>
      </div>

      <div class="collapse pos-rlt navbar-collapse box-shadow bg-primary">
        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs">
          <a href="#" class="btn no-shadow navbar-btn" ui-toggle="app-aside-folded" target=".app">
            <i class="fa fa-dedent fa-fw text"> 菜单</i>
            <i class="fa fa-indent fa-fw text-active">菜单</i>
          </a>
        </div>
        <!-- / buttons -->

        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="//q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $userrow['qq']?$userrow['qq']:'10000';?>&spec=100">
                <i class="on md b-white bottom"></i>
              </span>
              <span class="hidden-sm hidden-md"><?php echo $userrow['qq']?$userrow['qq']:'10000';?></span> <b class="caret"></b>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeInRight w">
              <li>
                <a href="./">
                  <span>用户中心</span>
                </a>
              </li>
              <li>
                <a href="./uset.php?mod=user">
                  <span>修改资料</span>
                </a>
              </li>
			  <li>
                <a href="../">
                  <span>返回首页</span>
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a ui-sref="access.signin" href="login.php?logout">退出登录</a>
              </li>
            </ul>
            <!-- / dropdown -->
          </li>
        </ul>
        <!-- / navbar right -->
      </div>
      <!-- / navbar collapse -->
  </header>
  <!-- / header -->
  <!-- aside -->
  <aside id="aside" class="app-aside hidden-xs bg-light dker">
      <div class="aside-wrap">
        <div class="navi-wrap">

          <!-- nav -->
          <nav ui-nav class="navi">
            <ul class="nav">
              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span>导航</span>
              </li>
              <li class="active">
                <a href="./">
                  <i class="fa fa-user"></i>
                  <span>用户中心</span>
                </a>
              </li>
              <li class="">
                <a href="./hbmd.php">                      
                  <i class="fa fa-check-square"></i>
                  <span>黑白名单</span>
                </a>
              </li>
			  
			  			  <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span>查询</span>
              </li>              
              <li class="">
                              <li class="">
                <a href="./record.php">                      
                  <i class="fa fa-hashtag"></i>
                  <span>收支明细</span>
                </a>
              </li>
			         
              </li><li class="">           
			  			  <li class="">

			                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">          
                <span>其他</span>
              </li>
              <li class="">
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="fa fa-resistance"></i>
                  <span>系统设置</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="">
                    <a href="./uset.php?mod=site">
                      <span>网站信息设置</span>
                    </a>
                  </li>
				  <li class="">
                    <a href="./uset.php?mod=user">
                      <span>用户资料设置</span>
                    </a>
                  </li> 
			  
                  <li class="">
                    <a href="./uset.php?mod=logo">
                      <span>网站Logo设置</span>
                    </a>
                  </li>
                  <li class="">
                    <a href="./uset.php?mod=skimg">
                      <span>收款图设置</span>
                    </a>
                  </li>
			                  </ul>
              </li>
			                <li>
                <a ui-sref="access.signin" href="login.php?logout">
                  <i class="fa fa-power-off"></i>
                  <span>退出登录</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
  </aside>
<div id="content" class="app-content" role="main">
    <div class="app-content-body ">
				<div class="bg-light lter b-b wrapper-sm ng-scope">
					<ul class="breadcrumb" style="padding: 0;margin: 0;">
						<li><i class="fa fa-home"></i><a href="./">管理中心</a></li>
						<li><?php echo $title ?></li>
					</ul>
				</div>
  <!-- / aside -->
<link rel="stylesheet" href="//lib.baomitu.com/toastr.js/latest/css/toastr.min.css">


<?php }?>