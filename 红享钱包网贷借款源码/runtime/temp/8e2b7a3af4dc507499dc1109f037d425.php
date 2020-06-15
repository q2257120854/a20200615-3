<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"/www/wwwroot/qumuban.com/public/../application/index/view/loan/loanatonce.html";i:1545803680;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>借款详情</title>
    <link href="/static/new/css/mui.min.css" rel="stylesheet" />
    <link href="/static/new/css/style.css" rel="stylesheet" />
    <style>
        .mui-checkbox input[type=checkbox]:before, .mui-radio input[type=radio]:before{
            font-size: 2rem;
            line-height: 2.6rem;
        }
        .mui-checkbox input[type=checkbox], .mui-radio input[type=radio]{
            top: .4rem;

        }
        .mui-checkbox.mui-left input[type=checkbox], .mui-radio.mui-left input[type=radio]{
            left: 0px;
        }
        .mui-checkbox input[type=checkbox]:checked:before, .mui-radio input[type=radio]:checked:before{
            color:#ff5057;
        }
        .mui-input-group{
            background: none;
        }
        .mui-input-group:before{
            background: none;
        }
        .mui-input-group:after{
            background: none;
        }
        .mui-numbox {
            width: 86%;
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
  <style>
    .num-numbox{
      width: 86%;
      position: relative;
      display: inline-block;
      overflow: hidden;
      width: 120px;
      height: 35px;
      padding: 0 40px;
      vertical-align: top;
      vertical-align: middle;
      border: solid 1px #bbb;
      border-radius: 3px;
      background-color: #efeff4;
    }
    .num-numbox [class*=btn-numbox], .num-numbox  [class*=numbox-btn] {
    font-size: 18px;
    font-weight: 400;
    line-height: 100%;
    position: absolute;
    top: 0;
    overflow: hidden;
    width: 40px;
    height: 100%;
    padding: 0;
    color: #555;
    border: none;
    border-radius: 0;
    background-color: #f9f9f9;
}
    .num-numbox .mui-numbox-btn-plus {
    right: 0;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}
 .num-numbox .mui-numbox-btn-minus {
    left: 0;
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
}
  .num-numbox .mui-numbox-input {
    display: inline-block;
    overflow: hidden;
    width: 100%!important;
    height: 100%;
    margin: 0;
    padding: 0 3px!important;
    text-align: center;
    text-overflow: ellipsis;
    word-break: normal;
    border: none!important;
    border-right: solid 1px #ccc!important;
    border-left: solid 1px #ccc!important;
    border-radius: 0!important;
}
  </style>
<form action="<?php echo url('loan/saveloan'); ?>" onsubmit="return false" method="post" id="loandatago">
<div class="wrap jiekaun_cont">
    <h3 class="huankuan_tit">借款详情</h3>
    <div class="jie_cont">
        <div class="jie_cont_t_ioc"></div>
        <div class="jie_xinxi">
            <div class="mui-row mui-text-center">
                <div class="mui-col-xs-6 color_red">
                     <div class="num-numbox"  style="width: 86%;" data-numbox-step='<?php echo $minim['0']; ?>' data-numbox-min='<?php echo $minim['0']; ?>' data-numbox-max='<?php echo $maxm; ?>'>
                        <button class="mui-btn mui-numbox-btn-minus" type="button" id="xxvar">-</button>
                        <input class="mui-numbox-input" type="number" name="money" id="loanmoney" value="<?php echo $maxm; ?>"/>
                        <button class="mui-btn mui-numbox-btn-plus" type="button" id="jjvar">+</button>
                    </div>
                    <p class="color_hui01">借款金额(元)</p>
                </div>
                <div class="mui-col-xs-6 color_yellow">
                    <div class="num-numbox"  style="width: 86%;" data-numbox-step='<?php echo $termini['0']; ?>' data-numbox-min='<?php echo $termini['0']; ?>' data-numbox-max='<?php echo $termmax; ?>'>
                        <button class="mui-btn mui-numbox-btn-minus" type="button" id="varxx">-</button>
                        <input class="mui-numbox-input" type="number" name="term" id="loantime" value="<?php echo $termmax; ?>"/>
                        <button class="mui-btn mui-numbox-btn-plus" type="button" id="varjj">+</button>
                    </div>
                    <p class="color_hui01">借款期限(<?php echo \think\Config::get('loan.typeterm'); ?>)</p>
                </div>
            </div>
            <div class="mui-row mui-text-center">
                <div class="mui-col-xs-6 color_red">
                    <span id="allmoney">0.00</span>
                    <input type="hidden" name="timemoney" id="timemoney">
                    <input type="hidden" name="lixi" id="lixi">
                    <p class="color_hui01">还款金额(元)</p>
                </div>
                <div class="mui-col-xs-6 color_yellow">
                    <span id="dieloan">1971-01-01</span>
                    <input type="hidden" name="addtime" id="rechetime">
                    <p class="color_hui01">到期时间</p>
                </div>
            </div>
            <ul class="jie_cont_ul">
                <li>
                    借款人
                    <span class="cont_r_span"><?php echo $user['name']; ?></span>
                </li>
                <li>
                    月供金额
                    <span class="cont_r_span"><span id="vxllsd"></span>元</span>
                </li>
                <li>
                    入账卡号
                    <span class="cont_r_span"><?php echo $bank['idcard']; ?></span>
                </li>
                <?php if($user['yhq'] == '2'): ?>
                <li>
                    是否使用优惠券
                    <span class="cont_r_span"><input type="checkbox" name="youhui" id="varbin"/></span>
                </li>
                <?php endif; ?>
                <p class="color_hui02 ul_b_tishi">小页内容以最终生成的内容为主</p>
            </ul>
        </div>
        <div class="jie_bot_ioc"></div>
    </div>
    <div class="jie_bom">
        <div class="mui-input-row mui-checkbox mui-left mui-input-group">
            <p class="xieyi_p"><input name="checkbox" value="Item 1" type="checkbox" checkbox="checkbox" checked>我已阅读并同意<a href="<?php echo url('index/xieyi'); ?>"><span class="color_red">《借款协议》</span></a></p>

        </div>
        <button type="button" class="qd_jie dk_btn" onclick="loanpaygo()">确定借款</button>
    </div>
</div>
</form>
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
<script src="/static/new/js/mui.min.js"></script>
<script src="/static/new/js/jquery.min.js"></script>
<script>
  
  $(".num-numbox").each(function(){
  	$(this).find(".mui-numbox-btn-minus").click(function(){
    var min_num = parseInt($(this).parent().attr("data-numbox-min"));
    var max_num = parseInt($(this).parent().attr("data-numbox-max"));
    var step_num = parseInt($(this).parent().attr("data-numbox-step"));
    var th_val = parseInt($(this).parent().find(".mui-numbox-input").val());
      if(th_val <= min_num){
      	var th_val = parseInt($(this).parent().find(".mui-numbox-input").val(min_num));
      }else{
        th_val = th_val-step_num;
        var th_val = parseInt($(this).parent().find(".mui-numbox-input").val(th_val));
      }
      loanmoney();
  })
    
    	$(this).find(".mui-numbox-btn-plus").click(function(){
        var min_num = parseInt($(this).parent().attr("data-numbox-min"));
        var max_num = parseInt($(this).parent().attr("data-numbox-max"));
        var step_num = parseInt($(this).parent().attr("data-numbox-step"));
        var th_val = parseInt($(this).parent().find(".mui-numbox-input").val());
          if(th_val >= max_num){
            var th_val = parseInt($(this).parent().find(".mui-numbox-input").val(max_num));
          }else{
            th_val = th_val+step_num;
            var th_val = parseInt($(this).parent().find(".mui-numbox-input").val(th_val));
          }
           loanmoney();
      })
    })
  
    $(function() {
        loanmoney();
    });
   
    $("#varbin").click(function(){
        if($('#varbin').is(':checked')) {
            var money= $('#loanmoney').val();
            var dtime= $('#loantime').val();
            console.log(<?php echo \think\Config::get('loan.youhui'); ?>/100);
            var lixi =money * (<?php echo \think\Config::get('loan.loanint'); ?>/100)*(<?php echo \think\Config::get('loan.youhui'); ?>/100);
            <?php if(\think\Config::get('loan.typeterm') == '天'): ?>
            var allmoney = parseInt(money)+parseInt((lixi*dtime));
            var addtime = Math.round(new Date() / 1000) +dtime*86400;
            $('#lixi').val(lixi*dtime);
            <?php else: ?>
                var allmoney = parseInt(money)+parseInt((lixi*dtime*30));
                var addtime = Math.round(new Date() / 1000) +dtime*86400*30;
                $('#lixi').val(lixi*dtime*30);
                <?php endif; ?>

                    $('#allmoney').html(allmoney);
                    $('#vxllsd').html(parseInt(allmoney/dtime));
                    $('#dieloan').html(timestampToTime(addtime));
                    $('#timemoney').val(allmoney);
                    $('#rechetime').val(addtime);
        }else{
                var money= $('#loanmoney').val();
                var dtime= $('#loantime').val();
                var lixi =money * (<?php echo \think\Config::get('loan.loanint'); ?>/100);
                <?php if(\think\Config::get('loan.typeterm') == '天'): ?>
                var allmoney = parseInt(money)+parseInt((lixi*dtime));
                var addtime = Math.round(new Date() / 1000) +dtime*86400;
                $('#lixi').val(lixi*dtime);
                <?php else: ?>
                    var allmoney = parseInt(money)+parseInt((lixi*dtime*30));
                    var addtime = Math.round(new Date() / 1000) +dtime*86400*30;
                    $('#lixi').val(lixi*dtime*30);
                    <?php endif; ?>

                        $('#allmoney').html(allmoney);
                        $('#dieloan').html(timestampToTime(addtime));
                     $('#vxllsd').html(Math.round(allmoney/dtime));
                        $('#timemoney').val(allmoney);
                        $('#rechetime').val(addtime);
        }
    });
    mui('footer').on('tap','a',function(){document.location.href=this.href;});
    mui('.mui-input-group').on('change', 'input', function() {
        var value = this.checked?"true":"false";
        if(value == "true"){
            $(".qd_jie").removeAttr("disabled");

        }else{
            $(".qd_jie").attr("disabled","disabled")
        }
    });
</script>
<script>
    function loanmoney(){
		
        var money= $('#loanmoney').val();
     	console.log(money)
        var dtime= $('#loantime').val();
        var lixi =money * (<?php echo \think\Config::get('loan.loanint'); ?>/100);
                           
        <?php if(\think\Config::get('loan.typeterm') == '天'): ?>
        var allmoney = parseInt(money)+parseInt((lixi*dtime));
        var addtime = Math.round(new Date() / 1000) +dtime*86400;
        $('#lixi').val(lixi*dtime);
     
        <?php else: ?>
        
            var allmoney = parseInt(money)+parseInt((lixi*dtime*30));
            var addtime = Math.round(new Date() / 1000) +dtime*86400*30;
            $('#lixi').val(lixi*dtime*30);
            <?php endif; ?>
				
                $('#allmoney').html(allmoney);
                $('#dieloan').html(timestampToTime(addtime));
             	$('#vxllsd').html(Math.round(allmoney/dtime));
                $('#timemoney').val(allmoney);
                $('#rechetime').val(addtime);
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
                return Y+M+D+h+m+s;
            }

      function loanpaygo(){
		var data = $('#loandatago').serialize();
        //console.log(data);
        
          $.ajax({ 
            type:'post',  
            url:'<?php echo url('loan/saveloan'); ?>', 
            data:data,  
            dataType:'json', 
            success:function(datas){      
              if(datas.code == 1){
				mui.toast(datas.msg,{ duration:'long', type:'div' });
        		setTimeout(function(){top.location.href = '<?php echo url('loan/index'); ?>'},2000);
      }else{
          mui.toast(datas.msg,{ duration:'long', type:'div' })
          }
            },
            error:function(){ 
             mui.toast('请求失败',{ duration:'long', type:'div' })
            }
   })
      }

</script>
</html>