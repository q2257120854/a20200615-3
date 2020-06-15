<?php
$work = $DB->COUNT("select count(id) from ku_complain where username = '".$userrow['username']."' and hftime > '".date("Y-m-d 00:00:00")."' and status=1 ");
?>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
        <a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
      </div>
      <div class="container-fluid">
        <div class="navbar-btn">
          <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <div class="navbar-btn navbar-btn-right">
          <a class="btn btn-success update-pro" href="recharge.html" title="升级代理"><i class="fa fa-rocket"></i> <span>升级代理</span></a>
        </div>
        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                <i class="lnr lnr-alarm"></i>
                <span class="badge bg-danger"><?=$work?></span>
              </a> 
               <?php if ($work!=0) {?>
              <ul class="dropdown-menu notifications">
             
               <li><a href="./workOrder.html" class="notification-item"><span class="dot bg-danger"></span>您有新的短消息！</a></li>
            
              </ul>
               <?php }?>
            </li>
         
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user-img.png" class="img-circle" alt="头像"> <span><?=$userrow['user_name']?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="uesersetup.html"><i class="lnr lnr-user"></i> <span>修改信息</span></a></li>
                <li><a href="login.html?act=logout"><i class="lnr lnr-exit"></i> <span>退出</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>