<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\wwwroot\demo.52jscn.com\public/../application/index\view\user\vip.html";i:1545835813;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>会员卡</title>
    <link href="/static/new/css/mui.min.css" rel="stylesheet" />
    <link href="/static/new/css/style.css" rel="stylesheet" />
    <style>
        .mui-checkbox input[type=checkbox], .mui-radio input[type=radio]{
            position: relative;
            top: 0px;
            left: 0px;
        }
        .mui-checkbox input[type=checkbox]:before, .mui-radio input[type=radio]:before{
            font-size: 1.8rem;
        }
        .mui-input-group .mui-input-row{
            height: 3rem;
        }
        .mui-input-group .mui-input-row:after{
            display: none;
        }
        .mui-checkbox input[type=checkbox]:checked:before, .mui-radio input[type=radio]:checked:before{
            color:#ff5057;
        }
    </style>
</head>
<body>
<header>
    <a class="mui-icon" onclick="javaScript:history.go(-1)">
        <img src="/static/new/images/head_back.png">
    </a>
    <!-- <a href="#" class="top_xiaoxi">
        <img src="images/xiaoxi_weidu.png">
    </a> -->
</header>
<div class="wrap hyk">
    <div class="ka_img">
       <?php if($user['viptype'] == '0'): ?>
        <img src="/static/new/images/whq.png">
      <?php else: ?>
       <img src="/static/new/images/yhq.png">
        <?php endif; ?>
    </div>
    <div class="ka_jianjie">
        <div class="ka_jianjie_wrap">
            <h3 class="mui-text-center">会员卡说明：</h3>
            <p>1:初级钻石卡198元6个月,中级钻石卡298元12个月,高级钻石卡398元24个月<br/>
                2:开通VIP会员卡后，根据购买等级,最长有效期为24个月，限申请一次借款使用,过期自动消失，可再次购买使用 <br/>
                3:使用VIP会员卡申请借款，优先下款,不限制借款额度，最高50000元内。<br>
                4:最终解释权归优享钱包所有
            </p>
        </div>
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
<div class="gm_hyk_wrap" style="display:none">
    <div class="tx_cont">
        <h3 class="mui-text-center color_hui01">是否购买VIP会员卡</h3>
        <form class="mui-input-group">
            <ul>
                <li>
                    <p>选择等级</p>
                    <div class="mui-input-row mui-radio">
                        <span><?php echo $vipname['0']; ?></span>
                        <input name="radio1" id="type1" name="vip" value="<?php echo $vip['0']; ?>" type="radio" checked>
                        <span><?php echo $vipname['1']; ?></span>
                        <input name="radio1" id="type2" name="vip" value="<?php echo $vip['1']; ?>" type="radio">
                        <span><?php echo $vipname['2']; ?></span>
                        <input name="radio1" id="type3" name="vip" value="<?php echo $vip['2']; ?>" type="radio">
                    </div>
                </li>
                <!--li>
                    <p>支付方式</p>
                    <div class="mui-input-row mui-radio" >
                        <span>支付宝</span>
                        <input name="radio2" type="radio" checked>
                        <span>微信</span>
                        <input name="radio2" type="radio">
                        <span>杉德</span>
                        <input name="radio2" type="radio">
                    </div>
                </li-->
            </ul>
        </form>
        <div class="mui-row mui-text-center bot_btn">
            <a class="mui-col-xs-6" onclick="gm_hide()">取消</a>
            <a class="mui-col-xs-6" onclick="pay()">确认</a>
        </div>
    </div>
</div>
</body>
<script src="/static/new/js/mui.min.js"></script>
<script src="/static/new/js/jquery.min.js"></script>
<script>
    mui('footer').on('tap','a',function(){document.location.href=this.href;});
  <?php if($user['viptype'] == '0'): ?>
    $(".ka_img").click(function(){
        mask=mui.createMask(function(){
            $(".gm_hyk_wrap").hide();
        });
        mask.show();//显示遮罩
        $(".gm_hyk_wrap").show();

    })
    function gm_hide(){
        mask.close();
        $(".gm_hyk_wrap").hide();
    }

    function pay() {
        if($('#type1').is(':checked')) {
            var vip = $('#type1').val();
        }
        if($('#type2').is(':checked')) {
            var vip = $('#type2').val();
        }
        if($('#type3').is(':checked')) {
            var vip = $('#type3').val();
        }
            window.location.href = "<?php echo url('pay/payvip'); ?>?vip="+vip;
    }
  <?php endif; ?>
</script>
</html>