<?php if(empty($islogin) || $islogin != 1){
  exit("<script language='javascript'>window.location.href='./login.html';</script>");
  exit();
} 
 $dingdnum  = $DB->COUNT("select count(out_trade_no) from ku_order where  status='1'  and endtime > '".date("Y-m-d 00:00:00")."'");
 $ussq = $DB->COUNT("select count(id) from ku_authorlog where time > '".date("Y-m-d 00:00:00")."'");
 ?>
    <div class="left-side sticky-left-side">
        <!--logo-->
        <div class="logo">
            <a href="./"><img src="/user/assets/img/logo-dark.png" alt="<?=$conf['title']?>"></a>
        </div>
        <div class="logo-icon text-center">
            <a href="./"><img src="/user/assets/img/logo-dark.png" alt="<?=$conf['title']?>"></a>
        </div> 
        <!--logo-->
        <div class="left-side-inner">
            <ul class="nav nav-pills nav-stacked custom-nav">
            <li class="menu-list"><a href="./"><i class="icon-home"></i> <span>首页</span></a>
             <ul class="sub-menu-list">
                        <li><a href="./">首页</a></li>
                       
                    </ul>
            </li>
                </li>
                <li class="menu-list"><a href="javascript:void(0);"><i class="icon-settings"></i> <span>网站管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="set.html">基本设置</a></li>
                        <li><a href="system_set.html">系统设置</a></li>
                        <li><a href="notice_set.html">公告设置</a></li>
                        <li><a href="payment.html">接口设置</a></li>
                        <li><a href="business.html">价格设置</a></li>
                        <li><a href="download.html">下载设置</a></li>
                    </ul>
                </li>
                
                <li class="menu-list"><a href="javascript:void(0);"><i class="icon-menu"></i> <span>平台管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="Article.html">文章管理</a></li>
                        <li><a href="widesue.html"> 广告管理</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="javascript:void(0);"><i class="icon-social-dribbble"></i> <span>授权管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="grantadd.html"> 添加授权</a></li>
                        <li><a href="authorize.html">授权列表</a></li>
                        <li><a href="authorizelog.html">授权日志</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="javascript:void(0);"><i class="icon-folder"></i> <span>订单管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="payorder.html">支付订单</a></li>
                        <li><a href="rechar_list.html">充值订单</a></li>
                        <li><a href="cons_list.html">消费订单</a></li>
                    </ul>
                </li>
                
                
                <li class="menu-list"><a href="javascript:void(0);"><i class="icon-folder-alt"></i> <span>卡密管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="caradd.html"> 生成卡密</a></li>
                        <li><a href="carmine.html">卡密列表</a></li>
                        <li><a href="carminesq.html">卡密授权记录</a></li>
                        <li><a href="carminelog.html">卡密生成日志</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="javascript:void(0);"><i class="icon-people"></i> <span>代理管理</span></a>
                    <ul class="sub-menu-list">
                    <li><a href="agentadd.html">添加代理</a></li>
                    <li><a href="agent_list.html">代理管理</a></li>
                   <!--  <li><a href="agent_log.html">登入日志</a></li> -->
                    </ul>
                </li>
                  <li class="menu-list"><a href="javascript:void(0);"><i class="icon-pie-chart"></i> <span>分佣管理</span></a>
                    <ul class="sub-menu-list">
                    <li><a href="pay_mission.html">分佣设置</a></li>
                    <li><a href="pay_mission_list.html">收入明细</a></li>
                    <li><a href="payuser_list.html">提现列表</a></li>
                    </ul>
                </li>
                <li><a href="complain.html"><i class="icon-loop"></i> <span>工单管理</span></a></li>
               
                 <li><a href="edition.html"><i class="icon-grid"></i> <span>版本管理</span></a></li>
                <li class="menu-list"><a href="javascript:void(0);"><i class="icon-user"></i> <span>管理员</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="useradd.html"> 添加管理</a></li>
                        <li><a href="userlist.html"> 管理列表</a></li>
                        <li><a href="userlog.html"> 登入日志</a></li>
                    </ul>
                </li>
                 <li class="menu-list"><a href="javascript:void(0);"><i class="icon-layers"></i> <span>盗版管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="piracylist.html"> 站点列表</a></li>
                        <li><a href="getgain.html"> 获取密码</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content" >
        <div class="header-section">
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge"><?=$ussq?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title"> 你有<?=$ussq?>条操作日志</h5>
                            <ul class="dropdown-list">
                          
                            <li class="notification-scroll-list notification-list "> 
                              <?php
              $sql = "SELECT * FROM ku_authorlog where time > '".date("Y-m-d 00:00:00")."' order by time desc limit 2";
                    $rs=$DB->query($sql);
       while($res = $DB->fetch($rs))          
            {?>
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-plus-square noti-primary"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">新增授权域名：<?=$res['host']?>&nbsp;时间：<?=$res['time']?></h5>
                                        <p class="m-0">
                                            <small>操作人：<?=$res['name']?></small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                                 <?php }?>
                             </li>
                           
                             <li class="last"> <a href="./authorizelog.html">查看所有操作日志</a> </li>
                        </ul>
                        </div>
                    </li>
                     <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge"><?=$dingdnum?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">你有<?=$dingdnum?>条订单信息。</h5>
                            <ul class="dropdown-list">
                            <li class="notification-scroll-list notification-list "> 
                              <?php
                           $sql = "SELECT * FROM ku_order where status='1' and endtime > '".date("Y-m-d 00:00:00")."' order by endtime desc limit 3";
                                         $rs=$DB->query($sql);
                         while($res = $DB->fetch($rs))          
                             {?>
                               <a href="javascript:void(0);" class="list-group-item">

                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa  fa-check-square-o noti-primary"></em>
                                     </div>
                                 
                                     <div class="media-body">
                                        <h5 class="media-heading"><?=$res['name']?>订单号：<?=$res['out_trade_no']?>已完成支付！</h5>
                                        <p class="m-0">
                                            <small><?=$res['endtime']?></small>
                                        </p>
                                     </div>
                                     
                                  </div> 
                               </a>
                                <?php }?>
                             </li>
                            
                             <li class="last"> <a href="./payorder.html">查看所有订单信息</a> </li>
                        </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="/user/assets/img/user-img.png" alt="logo" />
                            <?=$row['name'];?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                          <li> <a href="useredit.html?my=useredit&id=<?=$row['id']?>"> <i class="fa fa-user"></i>修改资料</a> </li>
                          <li> <a href="set.html"> <i class="fa fa-wrench"></i>设置</a> </li>
                          <li> <a href="login.php?logout"> <i class="fa fa-lock"></i> 退出</a> </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
         <div class="wrapper">
           <div class="page-title-box">
                 <div class="page-title">欢迎, 管理员：<?=$row['name'];?>!</div>
                <ol class="breadcrumb">
                    <li>
                      当前时间:<?php echo date('Y-m-d h:i:s', time());?>
                    </li>
                </ol>
                <div class="clearfix"></div>
             </div>
            