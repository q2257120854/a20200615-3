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
					<div class="alert alert-info alert-dismissible" role="alert">
				1.关于卡密生成提示：您是<?=index_daili_lv($userrow['user_limit'])?>您当前单张卡密价格为
       <?php if ($userrow['user_limit']==2) {?>
              <?=$conf['kami_price'];?>
       <?php }elseif ($userrow['user_limit']==3) {?>
              <?=$conf['z_kami_price'];?>
        <?php }?>金币<br>
				2.友情提醒：如金币数量不足时请使用在线充值,生成卡密单次上限不可超<?=$conf['kalman_limit']?>张！<br>
        3.卡密生成成功后请下载好，如未下载到，请提交工单反馈给官方客服，提交工单时请到生成卡密日志里把卡密生成的订单号一并提交给客服，方便及时审核回复。
				</div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-body">
                            <h3 class="box-title m-b-0">生成卡密</h3>
                            <br>
                            <form class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label class="col-md-12">金币余额</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" value="<?=$userrow['reward_money']?>个" disabled></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="example-email">生成卡密数</label>
                                    <div class="col-md-12">
                                        <input type="text" name="quantity" class="form-control" placeholder="一次性生成卡密的张数" value="" oninput ="value=value.replace(/[^\d]/g,'')"> </div>
                                </div>
                            <div class="form-group">
                            <label class="col-md-12">授权到期的时间</label>
                            <div class="col-md-12">
                            <input class="form-control" name="endtime" type="text" value="<?=date("Y-m-d H:i:s",strtotime("+10years",strtotime($date)));?> "  disabled>
                           </div>
                            </div>
                              <button type="button" id="kamisheng" class="btn btn-info">确定生成</button>
                               
                            </form>
                        </div>
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
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
  <script src="assets/vendor/chartist/js/chartist.min.js"></script>
 
  <script src="/public/layer/layer.js"></script>
  <script>
$(function () {          
  $("#kamisheng").click(function(){
            var quantity=$(":input[name='quantity']").val();
            var endtime=$(":input[name='endtime']").val();
             if (quantity == ''){
                    layer.alert('生成数量不能为空！',{icon:5,title:'提示信息！'});
                        return false;}
             if (quantity <= 0){
                    layer.alert('非法数据重新输入！',{icon:5,title:'提示信息！'});
                        return false;}
            var load = layer.load(0, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=kamiadd",
                    data : {quantity:quantity,endtime:endtime},
                    dataType : 'json',
                    success : function(data) {
                        layer.close(load);
                        if(data.code == -1){
                            layer.alert(data.msg,{icon:5,title:'提示信息！'});
                        }else{
                            if (data.code == 1){
                               var lay_alert= layer.alert(data.msg,{icon:6,title:'提示信息！',
                                	'btn':['下载txt','确定'],
                                	'yes':function(){
                                		$('<a></a>').attr('href',data.savesrc).attr('download',data.savename).append('<b></b>').find('b').trigger('click').remove();
                                		layer.close(lay_alert);
                                		
                                	}

                                });
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