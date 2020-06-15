<?php
if(empty($islogin2) || $islogin2 != 1 ){
  exit("<script language='javascript'>window.location.href='./login.html';</script>");
  exit();
} 
if($userrow['user_status'] == 1){
    setcookie("user_token", "", time() - 604800);
	@header('Content-Type: text/html; charset=UTF-8');
    exit("<script language='javascript'>alert('您的账号异常,已被禁止登陆！请联系管理员');window.location.href='./login.html';</script>");
  exit();
}
?>
<div id="sidebar-nav" class="sidebar"> 
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
          <?php if ($userrow['user_limit']==0) {?>
            <li><a href="index.html" class="active"><i class="lnr lnr-home"></i> <span>我的首页</span></a></li>
            <li><a href="recharge.html" class=""><i class="iconfont icon-chongzhi"></i> <span>业务充值</span></a></li>
            <li>
              <a href="#dingdang" data-toggle="collapse" class="collapsed"><i class="iconfont icon-dingdanguanli"></i> <span>订单管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="dingdang" class="collapse">
                <ul class="nav">
                  <li><a href="rechar_list.html" class="">充值记录</a></li>
                   <li><a href="power_list.html" class="">授权记录</a></li>
                  <li><a href="cons_list.html" class="">消费记录</a></li>
                </ul>
              </div>
            </li>
             <li><a href="workOrder.html" class=""><i class="lnr lnr-file-empty"></i> <span>我的工单</span></a></li>
             <li><a href="uesersetup.html" class=""><i class="lnr lnr-cog"></i> <span>个人设置</span></a></li>
             <?php }elseif($userrow['user_limit']==1){?>
             <li><a href="index.html" class="active"><i class="lnr lnr-home"></i> <span>我的首页</span></a></li>
             <li><a href="recharge.html" class=""><i class="iconfont icon-chongzhi"></i> <span>业务充值</span></a></li>
             <li>

             <li>
              <a href="#dingdang" data-toggle="collapse" class="collapsed"><i class="iconfont icon-dingdanguanli"></i> <span>订单管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="dingdang" class="collapse">
                <ul class="nav">
                  <li><a href="rechar_list.html" class="">充值记录</a></li>
                  <li><a href="power_list.html" class="">授权记录</a></li>
                  <li><a href="cons_list.html" class="">消费记录</a></li>
                </ul>
              </div>
            </li>
            <li><a href="grantadd.html" class=""><i class="iconfont icon-lvzhou_tianjiazizhanghaodequyushouquan"></i> <span>添加授权</span></a></li>
            <li><a href="grant_list.html" class=""><i class="iconfont icon-ziyuanxhdpi"></i><span>授权列表</span></a></li>
             <li>
             <li><a href="workOrder.html" class=""><i class="lnr lnr-file-empty"></i> <span>我的工单</span></a></li>
             <li><a href="uesersetup.html" class=""><i class="lnr lnr-cog"></i> <span>个人设置</span></a></li>
             <?php }elseif($userrow['user_limit']==2){?>
              <li><a href="index.html" class="active"><i class="lnr lnr-home"></i> <span>我的首页</span></a></li>
             <li><a href="recharge.html" class=""><i class="iconfont icon-chongzhi"></i> <span>业务充值</span></a></li>
              <li>
              <li>
              <a href="#dingdang" data-toggle="collapse" class="collapsed"><i class="iconfont icon-dingdanguanli"></i> <span>订单管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="dingdang" class="collapse">
                <ul class="nav">
                  <li><a href="rechar_list.html" class="">充值记录</a></li>
                  <li><a href="power_list.html" class="">授权记录</a></li>
                  <li><a href="cons_list.html" class="">消费记录</a></li>
                </ul>
              </div>
            </li>
             <li><a href="grantadd.html" class=""><i class="iconfont icon-lvzhou_tianjiazizhanghaodequyushouquan"></i> <span>添加授权</span></a></li>
            <li><a href="grant_list.html" class=""><i class="iconfont icon-ziyuanxhdpi"></i><span>授权列表</span></a></li>
               <li>
              <a href="#kami" data-toggle="collapse" class="collapsed"><i class="fa fa-credit-card"></i> <span>卡密管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="kami" class="collapse ">
                <ul class="nav">
                  <li><a href="kalmanadd.html" class="">生成卡密</a></li>
                  <li><a href="kalmanlist.html" class="">卡密列表</a></li>
                  <li><a href="kalmanlog.html" class="">使用记录</a></li> 
                </ul>
              </div>
            </li>
            <li><a href="workOrder.html" class=""><i class="lnr lnr-file-empty"></i> <span>我的工单</span></a></li>
            <li><a href="uesersetup.html" class=""><i class="lnr lnr-cog"></i> <span>个人设置</span></a></li>
             <?php }elseif($userrow['user_limit']==3){?>

            <li><a href="index.html" class="active"><i class="lnr lnr-home"></i> <span>我的首页</span></a></li>
             <li><a href="recharge.html" class=""><i class="iconfont icon-chongzhi"></i> <span>业务充值</span></a></li>
              <li>
              <a href="#dingdang" data-toggle="collapse" class="collapsed"><i class="iconfont icon-dingdanguanli"></i> <span>订单管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="dingdang" class="collapse">
                <ul class="nav">
                  <li><a href="rechar_list.html" class="">充值记录</a></li>
                  <li><a href="power_list.html" class="">授权记录</a></li>
                  <li><a href="cons_list.html" class="">消费记录</a></li>
                </ul>
              </div>
            </li>
            <li><a href="grantadd.html" class=""><i class="iconfont icon-lvzhou_tianjiazizhanghaodequyushouquan"></i> <span>添加授权</span></a></li>
            <li><a href="grant_list.html" class=""><i class="iconfont icon-ziyuanxhdpi"></i><span>授权列表</span></a></li>
             <li>
              <a href="#kami" data-toggle="collapse" class="collapsed"><i class="fa fa-credit-card"></i> <span>卡密管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="kami" class="collapse ">
                <ul class="nav">
                  <li><a href="kalmanadd.html" class="">生成卡密</a></li>
                  <li><a href="kalmanlist.html" class="">卡密列表</a></li>
                  <li><a href="kalmanlog.html" class="">使用记录</a></li> 
                </ul>
              </div>
            </li>
             <li>
              <a href="#fenyong" data-toggle="collapse" class="collapsed"><i class="iconfont icon-yongjinguanli"></i> <span>代理分佣</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="fenyong" class="collapse ">
                <ul class="nav">
                  <li><a href="branch_list.html" class="">收入明细</a></li>
                  <li><a href="carrypay.html" class="">申请提现</a></li>
                  <li><a href="carrypay_list.html" class="">提现列表</a></li>
                </ul>
              </div>
            </li>
             <li><a href="workOrder.html" class=""><i class="lnr lnr-file-empty"></i> <span>我的工单</span></a></li>
            <li>
              <a href="#daili" data-toggle="collapse" class="collapsed"><i class="lnr lnr-users"></i> <span>代理管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="daili" class="collapse ">
                <ul class="nav">
                  <li><a href="agentadd.html" class="">添加代理</a></li>
                  <li><a href="agentlist.html" class="">代理管理</a></li>
                </ul>
              </div>
            </li>
            <li><a href="uesersetup.html" class=""><i class="lnr lnr-cog"></i> <span>个人设置</span></a></li>
             <?php } ?>
          </ul>
        </nav>
      </div>
    </div>
