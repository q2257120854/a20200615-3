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
				1.提现注意事项：单笔提现金额≥<?=$conf['carrypay_money'];?>元，手续费<?=$conf['carrypay'];?>%，72小时左右处理，提现结果请留意提现列表记录。<br>
				2.请核对清楚您的支付宝收款账号与昵称是否正确，不正确请在未申请提现前到个人设置中心修改正确的账号，如收款账号有误，将有可能提现失败。【具体留意提现列表记录】
				</div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-body">
                            <h3 class="box-title m-b-0">申请提现</h3>
                            <br>
                            <form class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label class="col-md-12">赏金余额</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" value="<?=$userrow['money']?>元" disabled></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="example-email">支付宝收款名称</label>
                                    <div class="col-md-12">
                                        <input type="text" name="number_nc" class="form-control" placeholder="支付宝收款昵称" value="<?=$userrow['number_nc']?>" disabled> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="example-email">支付宝收款账号</label>
                                    <div class="col-md-12">
                                        <input type="text" name="number_zh" class="form-control" placeholder="支付宝收款账号" value="<?=$userrow['number_zh']?>" disabled> </div>
                                </div>
                            <div class="form-group">
                            <label class="col-md-12">提现金额</label>
                            <div class="col-md-12">
                            <input class="form-control" name="money" type="text" placeholder="请输入提现金额" value="" oninput ="value=value.replace(/[^\d]/g,'')">
                           </div>
                            </div>
                              <button type="button" id="carrypay" class="btn btn-info">确定提现</button>  
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
  $("#carrypay").click(function(){
            var number_nc=$(":input[name='number_nc']").val();
            var number_zh=$(":input[name='number_zh']").val();
            var money=$(":input[name='money']").val();
             if (money == '' || number_nc=='' || number_zh==''){
                    layer.alert('请确保各项不能为空！',{icon:5,title:'提示信息！'});
                        return false;}
             if (money <= 0){
                    layer.alert('非法数据重新输入！',{icon:5,title:'提示信息！'});
                        return false;}
            var load = layer.load(0, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=carrypay",
                    data : {money:money},
                    dataType : 'json',
                    success : function(data) {
                        layer.close(load);
                        if(data.code == -1){
                            layer.alert(data.msg,{icon:5,title:'提示信息！'});
                        }else{
                          if (data.code == 1){
                                layer.alert(data.msg,{icon:6,title:'提示信息！'},function(){
                               window.location.href = "carrypay_list.html";
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