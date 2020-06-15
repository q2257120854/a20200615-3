<?php
include '../includes/common.php';
if($userrow['user_status']==2){
  @header('Content-Type: text/html; charset=UTF-8');
    exit("<script language='javascript'>alert('您的账号处于冻结状态,所有权限不能使用！请联系管理员或您的上级代理！');window.location.href='./';</script>");
  exit();
  }
?>
<!doctype html>
<html lang="en"> 
<head>
   <title>用户后台 | <?=$conf['title']?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
  <link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/demo.css">
  <link rel="stylesheet" href="assets/css/user.css">
  <link rel="stylesheet" href="assets/foot/iconfont.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>
<body>
<?php
include 'header.php';
?>
<?php
 include 'nav.php';
 ?>
 <div class="main">
     <div class="main-content">
        <div class="container-fluid">   
   <div class="mainBody">
    <div class="container-fluid"> 
      <!--个人信息--start-->
      <div class="user-info white-bg">
        <div class="user-text fl">
          <div class="user-infos"><span><span>亲爱的<b><?=$userrow['user_name']?></b></span><span><?=index_daili_lv($userrow['user_limit'])?></span></span>
           <?php if (!empty($userrow['reward_money'])) { ?>                   
                  <span> 金币：<b><?=$userrow['reward_money']?></b> 个</span>
                  <?php }else{?>
                  <span> 金币：<b>0</b> 个</span>
                  <?php }?>
          <span><a href="rechar_list.html">充值/消费记录</a></span></div>
        </div>
      </div>
      <!--个人信息--end--> 
      <!--购买金币--start style="display: none;"-->
      <div class="container-box white-bg" >
        <div class="title"> <a class="current" >购买金币</a> </div>
        <div class="form-box">
          <form action="/online/czpay.html" method="post">
            <input type="hidden" name="username" value="<?=$userrow['username']?>" />
            <input type="hidden" name="ascription" value="<?=$userrow['user_belong']?>" />
            <div class="row tit tb-border">
              <div class="col-sm-1">选择</div>
              <div class="col-sm-7">点卡类型</div>
              <div class="col-sm-2">金币数量</div>
              <div class="col-sm-2">价格</div>
            </div>
                        <div class="row">
              <div class="col-sm-1">
                <input type="radio" name="coin" value="1" checked="true">
              </div>
              <div class="col-sm-7">充值<?=$conf['coin_nb']?>金币</div>
              <div class="col-sm-2"><?=$conf['coin_nb']?></div>
              <div class="col-sm-2"><b class="orange"> <?=$conf['coin_money']?></b>元</div>
            </div>            <div class="row">
              <div class="col-sm-1">
                <input type="radio" name="coin" value="2">
              </div>
              <div class="col-sm-7">充值<?=$conf['coin_nb_1']?>金币</div>
              <div class="col-sm-2"><?=$conf['coin_nb_1']?></div>
              <div class="col-sm-2"><b class="orange"> <?=$conf['coin_money_1']?></b>元</div>
            </div>            <div class="row">
              <div class="col-sm-1">
                <input type="radio" name="coin" value="3">
              </div>
              <div class="col-sm-7">充值<?=$conf['coin_nb_2']?>金币</div>
              <div class="col-sm-2"><?=$conf['coin_nb_2']?></div>
              <div class="col-sm-2"><b class="orange"> <?=$conf['coin_money_2']?></b>元</div>
            </div>

                <div class="row">
              <div class="col-sm-10">
                <span>&nbsp;</span>
                
              </div>
              <div class="col-sm-2">
                <button type="submit"  class="btn btn-warning" onclick="return confirm('是否确定购买金币?');">立即购买</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!--购买金币--end--> 
   <div class="container-box white-bg">
        <div class="title"> <a class="current" >购买授权</a> </div>
        <div class="form-box ">
          <form name="f1" action="/online/epay.php" method="post">
            <input type="hidden" name="sq_qq" value="<?=$userrow['user_qq']?>" />
            <input type="hidden" name="username" value="<?=$userrow['username']?>" />
            <input type="hidden" name="ascription" value="<?=$userrow['user_belong']?>" />
            <div class="row tit tb-border" >
              <div class="col-sm-1">选择</div> 
              <div class="col-sm-7">产品名称</div>
              <div class="col-sm-2">时限(天)</div>
              <div class="col-sm-2">价格</div>
            </div>
                        <div class="row" >
              <div class="col-sm-1">
                <input type="radio" name="mayid" data-rank='100' value="0" checked="true" onclick='selectProduct(this);'>
              </div>
              <div class="col-sm-7">商业授权版，绑定1个域名</div>
              <div class="col-sm-2">终身授权</div>
              <div class="col-sm-2"><b class="orange"><?=$conf['pay_fee']?></b>元</div>
            </div>
                    <div class="row" >
              <div class="col-sm-1">
                <input type="radio" name="mayid" data-rank='150' value="1" onclick='selectProduct(this);'>
              </div>
              <div class="col-sm-7">商业开源版（赠送<?=$conf['user_lv']?>个授权，赠送<?=$conf['reward_money']?>金币）</div>
              <div class="col-sm-2">终身使用</div> 
              <div class="col-sm-2"><b class="orange"><?=$conf['pay_fee_kai']?></b>元</div>
            </div>
                       <div class="row">
              <div class="col-sm-10" id="span_domain">
                <label class="fl" for="domain">绑定授权域名：</label>
                <div class="fl">
                  <input style="margin-top:14px;" type="text" name="sq_url" id="sq_url" placeholder="比如：kuxiangcms.com" class="form-control" value="" onkeyup="check_domain_cn(this);" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\_\-\.\w]/g,''));"/>
                </div>
                <span>&nbsp;</span>
                <div id="tips_cn">
                  （提醒：输入授权域名请使用主域名授权，如有疑问请联系在线客服。）
                </div>
              </div>
              <div class="col-sm-2">
                <button type="submit" class="btn btn-success" onclick="return confirm('是否确定购买商业授权?');">立即购买</button>
              </div>
            </div>
          </form>
        </div>
</div>
      <script type="text/javascript">
       function check_domain_cn(obj)
          {
            var sq_url = $(obj).val();
            var reg = /[\u4E00-\u9FA5]/;
            if (sq_url != '' && reg.test(sq_url))
            {
              $('#tips_cn').show();
            } else {
              $('#tips_cn').hide();
              sq_url = sq_url.replace(/[^\_\-\.\w]/g,'');
              $(obj).val(sq_url);
            }
          }

          function selectProduct(obj)
          {
            var rank = $(obj).data('rank');
            if (150 == rank) {
              $('#span_domain').hide();
            } else {
              $('#span_domain').show();
            }
          }
        </script>


 <!--会员升级--start-->
      <div class="container-box white-bg">
        <div class="title"> <a class="current" >会员升级</a> </div>
        <div class="form-box"> 
          <form  method="post" role="form">
            <input type="hidden" name="username" value="<?=$userrow['username']?>" />
            <input type="hidden" name="user_belong" value="<?=$userrow['user_belong']?>" />
            <div class="row tit tb-border">
              <div class="col-sm-1">选择</div>
              <div class="col-sm-7">产品名称</div>
              <div class="col-sm-2">时限(天)</div>
              <div class="col-sm-2">金币数量</div>
            </div>
              <div class="row">
              <div class="col-sm-1">
                <input type="radio" name="user_limit" value="1" checked="true">
              </div>
              <div class="col-sm-7">升级为普通代理</div>
              <div class="col-sm-2">永久</div>
              <div class="col-sm-2"><b class="orange"> <?=$conf['reward']?></b>个</div>
            </div>           
            <div class="row">
              <div class="col-sm-1">
                <input type="radio" name="user_limit" value="2">
              </div>
              <div class="col-sm-7">升级为高级代理</div>
              <div class="col-sm-2">永久</div>
              <div class="col-sm-2"><b class="orange"> <?=$conf['reward_gj']?></b>个</div>
            </div> 
            <div class="row">
              <div class="col-sm-1">
                <input type="radio" name="user_limit" value="3">
              </div>
              <div class="col-sm-7">升级为砖石代理</div>
              <div class="col-sm-2">永久</div>
              <div class="col-sm-2"><b class="orange"> <?=$conf['reward_zs']?></b>个</div>
               </div> 
                       <div class="row">
              <div class="col-sm-10"> </div>
              <div class="col-sm-2">
                <button type="button" id="goldcoin" class="btn btn-danger">立即购买</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!--会员升级--end--> 
</div>
</div>
</div>
</div>
</div>
   <div class="clearfix"></div>
    <footer>
      <div class="container-fluid">
        <p class="copyright"><a href="http://www.kuxiangcms.com/" title="5G云资源" target="_blank"><?php echo $conf['copyright'] ?></a></p>
      </div>
    </footer>
  </div>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
  <script src="assets/vendor/chartist/js/chartist.min.js"></script>
  <script src="/public/js/jquery-1.12.4.min.js"></script>
  <script src="/public/layer/layer.js"></script>
<script> 
$(function () {          
  $("#goldcoin").click(function(){
            var username=$("input[name='username']").val();
            var user_limit=$(":input[name='user_limit']:checked").val();
            var user_belong=$(":input[name='user_belong']").val();
            var load = layer.load(0, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=goldcoin",
                    data : {username:username,user_limit:user_limit,user_belong:user_belong},
                    dataType : 'json',
                    success : function(data) {
                        layer.close(load);
                        if(data.code == -1){
                            layer.alert(data.msg,{icon:5,title:'提示信息！'});
                        }else{
                            if (data.code == 1){
                                layer.alert(data.msg,{icon:6,title:'提示信息！'});
                            }else{
                                layer.alert(data.msg,{icon:5,title:'提示信息！'});
                            }
                        }
                    }
                });
            });
   });

</script> 
</body>
</html>