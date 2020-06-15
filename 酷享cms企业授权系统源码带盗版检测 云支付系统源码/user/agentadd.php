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
				1.关于添加代理提示：您是<?=index_daili_lv($userrow['user_limit'])?>本次添加代理扣费详情介绍：
       <?php if ($userrow['user_limit']==2) { ?>
        普通代理扣除<?=$conf['gjaddpu_price'];?>金币，高级代理扣除<?=$conf['gjaddgj_price'];?>金币，
       <?php }elseif($userrow['user_limit']==3) { ?>
        普通代理扣费<?=$conf['adding_price'];?>金币，高级代理扣除<?=$conf['zsadding_price'];?>金币，
        砖石代理扣除<?=$conf['zsadd_price'];?>金币，
        <?php  }?>
        当前账号剩余金币数量为：<?=$userrow['reward_money']?>个<br>
				2.友情提醒：如金币数量不足时请使用在线充值享受更多优惠！
				</div>
          <div class="row">
              <div class="col-md-12">
                <div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">添加代理</h3>
						</div>
						  <form  method="post" role="form">
			            <div class="panel-body">
			          
					          <div class="form-group">
                           <label for="exampleInputEmail1">代理账号</label>
                           <input type="text" class="form-control" name="username" value="" placeholder="请填写11位手机号码">
                           </div>
                           <div class="form-group">
                           <label for="exampleInputPassword1">登陆密码</label>
                           <input type="text" class="form-control" name="pwd" value="" placeholder="请填写代理登录密码">
                           </div>
                           <div class="form-group">
                           <label for="exampleInputPassword1">联系QQ</label>
                           <input type="text" class="form-control" name="user_qq" value="" placeholder="请填写代理联系QQ">
                           </div>
                           <div class="form-group">
                           <label for="exampleInputPassword1">代理昵称</label>
                           <input type="text" class="form-control" name="user_name" value="" placeholder="请填写代理昵称或公司名称或工作室名称">
                           </div>
                           <div class="form-group">
                           <label for="exampleInputPassword1">代理级别</label>
                           <select class="form-control" name="user_limit">
                           <option value="1">普通代理</option>
                           <option value="2">高级代理</option>
                           <?php if ($userrow['user_limit']==3) {?>
                            <option value="3">砖石代理</option>
                          <?php }?>
                           </select>
                           </div>
                          <button type="button" id="agentadd" class="btn btn-info">确定添加代理</button>
				        </div>
				        </form>
			         </div>
			     </div>
            </div>
        </div>
    </div>
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
  $("#agentadd").click(function(){
            var username=$("input[name='username']").val();
            var pwd=$(":input[name='pwd']").val();
            var user_qq=$(":input[name='user_qq']").val();
            var user_name=$(":input[name='user_name']").val();
            var user_limit=$(":input[name='user_limit']").val();
            var patrn = /^[0-9]*$/;
            var myreg=/^[1][3,4,5,7,8][0-9]{9}$/;
             if (username == '' || pwd == '' || user_qq == '' || user_name == ''){
                    layer.alert('请确保每项都不为空！',{icon:5,title:'提示信息！'});
                        return false;}
             if (!patrn.test(user_qq)) {
             layer.msg('联系QQ格式有误！', {icon: 5});
                        return false;}
            if (!myreg.test(username)) {
              layer.msg('账号必须为11位手机号码！', {icon: 5});
                        return false;}
            var load = layer.load(0, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=agentadd",
                    data : {username:username,pwd:pwd,user_qq:user_qq,user_name:user_name,user_limit:user_limit},
                    dataType : 'json',
                    success : function(data) {
                        layer.close(load);
                        if(data.code == -1){
                            layer.alert(data.msg,{icon:5,title:'提示信息！'});
                        }else{
                            if (data.code == 1){
                                 layer.alert(data.msg,{icon:6,title:'提示信息！'},function(){
                               window.location.href = "agentlist.html";
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
</html>