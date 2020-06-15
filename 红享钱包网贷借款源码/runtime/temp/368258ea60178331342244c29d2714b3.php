<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"/www/wwwroot/66/public/../application/index/view/loan/index.html";i:1545832166;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>借款记录</title>
    <link href="/static/new/css/mui.min.css" rel="stylesheet" />
    <link href="/static/new/css/style.css" rel="stylesheet" />
  <script src="/static/new/js/mui.min.js"></script>
    <style type="text/css">
        body{
            /*background: #fff;*/
        }
      .jiekuan_jl .jilu_wrap .jilu_list {
    height: 9rem;
	}
      .jiekuan_jl .anyield {
    top: 5rem;
    left: -3rem;
	}
    </style>
</head>
<body>
<header>
    <a class="mui-icon" onclick="javaScript:history.go(-1)">
        <img src="/static/new/images/head_back.png">
    </a>
    <p class="mui-text-center">借款记录</p>
    <a href="<?php echo url('user/msglist'); ?>" class="top_xiaoxi">
        <img src="/static/new/images/xiaoxi_weidu.png">
    </a>
</header>
<div class="wrap jiekuan_jl">
    <div class="jie_jilu_top">
        <p class="jie_title mui-text-center">借款记录</p>
        <div class="dh_jine mui-row jl_top_b">
            <div class="mui-col-xs-6">
            <p class="dh_num"><?php echo $sucount['allmoney']; ?></p>
            <p class="dh_tit">待还款总金额</p>
            </div>
            <div class="mui-col-xs-6">
                <p class="dh_num"><?php echo $sucount['repayment']; ?></p>
                <p class="dh_tit">月供还款金额</p>
            </div>
        </div>
        <div class="mui-row jl_top_b">
            <div class="mui-col-xs-6">
                <p class="top_b_num"><?php echo $count; ?><span>&nbsp;笔</span></p>
                <p class="top_b_tit">借款笔数</p>
            </div>
            <div class="mui-col-xs-6">
                <p class="top_b_num"><?php echo $exc; ?><span>&nbsp;期</span></p>
                <p class="top_b_tit">申请的总期数</p>
            </div>
        </div>
    </div>
    <?php if($loan == '0'): ?>
    <!-- 没有记录 -->
    <div class="mei_gd mui-text-center">
        <img src="/static/new/images/mei_gdimg.png" class="mei_gd_img">
        <p class="mei_gd_tishi color_hui02">还没有账单，快去借款吧</p>
    </div>
    <?php else: ?>
    <!-- 有记录 -->
    <div class="jilu_wrap">
        <ul>
            <?php if(is_array($loan) || $loan instanceof \think\Collection || $loan instanceof \think\Paginator): $i = 0; $__LIST__ = $loan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li class="jilu_list" <?php if($vo['status'] == '1'): if($vo['viptype'] == '1'): ?>onclick="vipxx()"<?php endif; endif; ?>>
                <a href="javascript:;" class="block_a mui-row">
                    <div class="mui-col-xs-6">
                        <p class="jilu_li_zt">银行卡：<?php $bankd = json_decode($vuser['bankAuth'],true);echo $bankd['idcard']; ?></p>
                        <p class="jilu_li_ztc">姓名：<?php echo $vuser['name']; ?></p>
                    </div>
                    <div class="mui-col-xs-6 mui-text-right">
                        <p class="jilu_li_date color_hui02">审核后获得提现额度</p>
                        <p class="color_red jilu_li_jine">￥<?php echo $vo['loanamount']; ?></p>
                      <p class="color_red jilu_li_jine"><?php if($vo['status'] == '0'): ?>
                    <div class="anyield mui-text-center">
                        <img src="/static/new/images/jiazaizhong.gif" class="shz_img mui-pull-left">
                        <?php $retime = $sucount['addtime'] - time(); ?>
                        <p class="sh_shjian"><?php echo $retime; ?></p>
                    </div>
           
                <?php endif; ?></p>
                    </div>
                </a>

                
            </li>
            <?php endforeach; endif; else: echo "" ;endif; 
                            if($vo['status'] == 0){
                            echo '<button type="button" class="mui-btn" style="width: 100%;margin-top: 20px;">审核中</button>';
                            }else if($vo['status'] == 1 && $vo['viptype'] == 1){
                            echo '<button type="button" class="mui-btn mui-btn-danger" style="width: 100%;margin-top: 20px;" onclick="vipxx()">通过未支付</button>';
                            }else if($vo['status'] == 1 && $vo['viptype'] == 2){
                            echo '<button type="button" class="mui-btn mui-btn-danger" style="width: 100%;margin-top: 20px;">已支付等待放款</button>';
                            }else if($vo['status'] == 2){
                            echo '<button type="button" class="mui-btn mui-btn-danger" style="width: 100%;margin-top: 20px;">已放款</button>';
                            }else if($vo['status'] == 3){
                            echo '<button type="button" class="mui-btn mui-btn-danger" style="width: 100%;margin-top: 20px;">已提款</button>';
                            }else if($vo['status'] == 5){
                            echo '<button type="button" class="mui-btn mui-btn-danger" style="width: 100%;margin-top: 20px;">已还清</button>';
                            }else if($vo['status'] == 6){
                            echo '<button type="button" class="mui-btn mui-btn-danger" style="width: 100%;margin-top: 20px;">已拒绝,原因：'.$vo['errortext'].'</button>';
                            }
                             ?>
<li></li>
        </ul>
    </div>
    <?php endif; ?>


</div>
<footer>
    <nav class="mui-bar mui-bar-tab">
        <a class="mui-tab-item" href="<?php echo url('index/index'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc01_b.png"></span>
            <span class="mui-tab-label">首页</span>
        </a>
        <a class="mui-tab-item  mui-active" href="<?php echo url('loan/index'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc02_a.png"></span>
            <span class="mui-tab-label">借款</span>
        </a>
        <a class="mui-tab-item" href="<?php echo url('user/cion'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc03_b.png"></span>
            <span class="mui-tab-label">钱包</span>
        </a>
        <a class="mui-tab-item" href="<?php echo url('user/index'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc04_b.png"></span>
            <span class="mui-tab-label">我的</span>
        </a>
    </nav>
</footer>
</body>
<script src="/static/new/js/jquery.min.js"></script>
<script>
    mui('footer').on('tap','a',function(){document.location.href=this.href;});
</script>
<?php if($status == '2'): if($viptype == '1'): ?>
<script>
    vipxx();
  /*parseInt()*/
    function vipxx(){
        var btnArray = ['否', '是'];
        var huiyuanfei = <?php echo $sucount['loanamount']; ?>*(<?php echo \think\Config::get('loan.servicepay'); ?>/100)
        mui.confirm('支付会员费用享受极速下款服务，如遇特殊情况无下款，会员费可退，借款期间如无逾期，额度循环使用', '支付会员费'+huiyuanfei.toFixed(2)+'元', btnArray, function(e) {
            if (e.index == 1) {
                window.location.href='<?php echo url('pay/shpay'); ?>';
            } else {
                mui.toast('取消支付',{ duration:'long', type:'div' })
            }
        })

    }

</script>
<?php endif; endif; if($status == '3'): ?>
<script>
    var btnArray = ['否', '是'];
    mui.confirm('当前还款第<?php echo $sucount['qishu']; ?>期，还款费用<?php echo $sucount['repayment']; ?>元', '还款', btnArray, function(e) {
        if (e.index == 1) {
            window.location.href='<?php echo url('pay/huankuan'); ?>?id=<?php echo $sucount['id']; ?>';
        } else {
            mui.toast('取消支付',{ duration:'long', type:'div' })
        }
    })
</script>  
  <?php endif; if($status == '1'): ?>
<script type="text/javascript">
    // 180秒倒计时
    <?php $retime = $sucount['addtime'] - time(); ?>
    sh_djs = '<?php echo $retime; ?>';
    function djs_ks(){
        if(sh_djs <= 0){
            clearInterval(djs_Timer);

                    location.reload();


        }else{
            sh_djs = parseInt($(".sh_shjian").html());
            sh_djs = sh_djs-1;
            $(".sh_shjian").html(sh_djs);
        }

    }
    djs_Timer=setInterval(djs_ks,1000)
</script>
<?php endif; ?>
</html>