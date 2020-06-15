<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"/www/wwwroot/chat.kstao.com/public/../application/index/view/user/cion.html";i:1545795452;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>钱包</title>
    <link href="/static/new/css/mui.min.css" rel="stylesheet" />
    <link href="/static/new/css/style.css" rel="stylesheet" />
    <style>
        header{
            background: #ff3846;
        }
    </style>
</head>
<body>
<header>
    <a class="mui-icon" onclick="javaScript:history.go(-1)">
        <img src="/static/new/images/head_back_b.png">
    </a>
    <p class="mui-text-center"></p>
    <a href="<?php echo url('user/msglist'); ?>" class="top_xiaoxi">
        <img src="/static/new/images/xiaoxi_weidu_b.png">
    </a>
</header>
<div class="wrap qianbao">
    <div class="qb_touxiang mui-text-center">
        <img src="/static/new/images/touxiang.png" class="tx_img">
        <p class="hy_shouji"><?php echo $user['mobile']; ?></p>
        <p class="shiming_ts"><?php if($user['name'] == ''): ?><a href="renzheng.html" class="dk_btn block_a">请先实名</a><?php else: ?><a href="renzheng.html" class="dk_btn block_a">已实名</a><?php endif; ?></p>
    </div>
    <div class="qb_yue">
        <ul class="mui-row mui-text-center">
            <li class="zh_nav mui-col-xs-6">
                <p class="zh_top color_red" id="money"><?php echo $user['money']; ?></p>
                <p class="zh_bom">账户余额</p>
            </li>
            <li class="zh_nav mui-col-xs-6">
                <?php if($user['viptype'] == '0'): ?>
                <p class="zh_top color_red" id="viptime">未开通</p>

                <?php else: ?>
                <p class="zh_top color_red" id="viptime"><?php echo date("Y-m-d",$user['vipend']); ?></p>
                <?php endif; ?>
                <p class="zh_bom">会员到期时间</p>
           </li>
        </ul>
    </div>
    <div class="qb_ka">
        <a href="<?php echo url('user/vip'); ?>" class="block_a"><img src="/static/new/images/<?php if($user['viptype'] == '0'): ?>w<?php else: ?>y<?php endif; ?>hq.png"></a>
    </div>
    <div class="qb_txbut">
        <button class="dk_btn" <?php if($user['money'] != '0.00'): ?>onclick="tx_sqi()"<?php endif; ?>>提&nbsp;&nbsp;现</button>
    </div>
</div>
<footer>
    <nav class="mui-bar mui-bar-tab">
        <a class="mui-tab-item" href="<?php echo url('index/index'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc01_b.png"></span>
            <span class="mui-tab-label">首页</span>
        </a>
        <a class="mui-tab-item" href="<?php echo url('loan/index'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc02_b.png"></span>
            <span class="mui-tab-label">借款</span>
        </a>
        <a class="mui-tab-item mui-active" href="<?php echo url('user/cion'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc03_a.png"></span>
            <span class="mui-tab-label">钱包</span>
        </a>
        <a class="mui-tab-item" href="<?php echo url('user/index'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc04_b.png"></span>
            <span class="mui-tab-label">我的</span>
        </a>
    </nav>
</footer>
<div class="qianbao_tx_wrap" style="display:none">
    <div class="tx_cont">

        <h3 class="mui-text-center color_hui01">提&nbsp;现</h3>
        <div class="mui-input-row">
            <label>签到天数</label>
            <span class="tx_cont_oplo"><?php echo $user['qiandao']; ?>天</span>
            <button class="qiandao_btn" onclick="qiandao()">点击签到</button>
        </div>
        <div class="mui-input-row">
            <label>当前积分</label>
            <span class="tx_cont_oplo"><?php echo $user['jifen']; ?>积分</span>
        </div>
        <div class="mui-input-row">
            <label>提现金额</label>
            <input type="text" placeholder="可提现金额<?php echo $user['money']; ?>元" id="putmoney">
        </div>
        <!-- <p class="zj_anquan">账户资金安全由银行保障</p> -->
        <div class="tx_tishi">
            <p>1、因每日额度有限，没有抢到额度的排队签到！</p>
            <p>2、连续签到六天或可以考虑购买VIP卡缩短至三天签到时间自动放款，没有抢到额度的客户福利！</p>
            <p>3、自动放款时间统一为完成签到任务后隔天下午16时，因资金正在筹集中，请耐心等待！</p>
        </div>
        <p class="tx_tj_btn"><button class="dk_btn" onclick="tixian()">提&nbsp;&nbsp;交</button></p>
    </div>
</div>
</body>
<script src="/static/new/js/mui.min.js"></script>
<script src="/static/new/js/jquery.min.js"></script>
<script>
    setInterval(function () {
       $.get('<?php echo url('user/getdata'); ?>',function (data) {
           $('#money').html(data.money);
           if(data.viptype > 0){
               $('#viptime').html(timestampToTime(data.vipend));
           }
        });
    },10000);
    mui('footer').on('tap','a',function(){document.location.href=this.href;});
    function tx_sqi(){
        var mask=mui.createMask(function(){
            $(".qianbao_tx_wrap").hide();
        });

        mask.show();//显示遮罩
        $(".qianbao_tx_wrap").show();
    }


    // 签到
    function qiandao(){
        $.get('<?php echo url('user/qiandao'); ?>',function (qdata) {
            if(qdata.code == 1){
                mui.toast(qdata.msg,{ duration:'long', type:'div' });
                setTimeout(function () {
                    location.reload();
                },2000);

                return false;
            }else{
                mui.toast(qdata.msg,{ duration:'long', type:'div' });
            }
        });
    }
    //提交提现
    function tixian() {
        var imoney = $('#putmoney').val();
        if(!imoney){
            mui.toast('提现余额不可为空',{ duration:'long', type:'div' });
            return false;
        }
        $.ajax({
          url:'<?php echo url('user/wallet'); ?>',
          type:'POST',
          data:{money:imoney},
          datatype:'JSON',
          success:function (data) {
              if(data.code == 1){
                  mui.toast(data.msg);
                  setTimeout(function () {
                      location.reload();
                  },2000);
              }else{
                  mui.toast(data.msg);
              }
          }
          
      });  
    }
    /*
 *时间戳转时间
 */
    function timestampToTime(timestamp) {
        var date = new Date(timestamp * 1000);//时间戳为10位需*1000，时间戳为13位的话不需乘1000
        Y = date.getFullYear() + '-';
        M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
        D = date.getDate() + ' ';
        h = date.getHours() + ':';
        m = date.getMinutes() + ':';
        s = date.getSeconds();
        return Y+M+D;
    }

</script>
</html>