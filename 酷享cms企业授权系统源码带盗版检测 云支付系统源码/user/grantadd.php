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
				1.关于授权提示：您是<?=index_daili_lv($userrow['user_limit'])?>本次添加授权将扣除您
        <?php if ($userrow['user_limit']==1) {?>
              <?=$conf['psq_price'];?>
       <?php }elseif ($userrow['user_limit']==2) {?>
              <?=$conf['sq_price'];?>
       <?php }elseif ($userrow['user_limit']==3) {?>
              <?=$conf['zssq_price'];?>
        <?php }?>金币，当前账号赠送授权剩余数量为：<?=$userrow['user_lv']?>个<br>
				2.友情提醒：如金币数量不足时请使用在线充值或联系您上级代理充值享受更多优惠！
				</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body progress-panel">
                            <div class="task-progress">
                                <h3>添加新授权</h3>
                                <p>填写授权信息并保存.</p>
                            </div>
                        </div>
                         <div class="panel-body">
                      <form  method="post" role="form">
                            <div class="form-group col-md-6">
                                <label for="txtDomain">当前金币数：</label>
                                <input type="text" name="reward_money" class="form-control" placeholder="金币剩余数量" value="<?=$userrow['reward_money']?>个" disabled>
                            </div>
                             <div class="form-group col-md-6">
                                <label for="txtDomain">当前赠送授权剩余数量：</label>
                                <input type="text" name="user_lv" class="form-control" placeholder="赠送授权剩余数量" value="<?=$userrow['user_lv']?>个" disabled>
                            </div>
                            <div class="form-group">
                                <label for="txtDomain">授权域名</label>
                                <input type="text" name="kuhost" class="form-control" placeholder="kuxiangcms.cn" value="">
                            </div>
                           
                            <div class="form-group">
                                <label for="txtDomain">联系QQ</label>
                                <input type="text" name="ku_qq" class="form-control" placeholder="请输入授权QQ" value="">
                            </div>
                            <div class="form-group">
                                <label for="txtDomain">备注</label>
                                <input type="text" name="remarks" class="form-control" placeholder="备注信息可不填" value="">
                            </div>
                            <button type="button" id="squan" class="btn btn-info">确定授权</button>
                         </div>
                        </form>
                    </div>
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
  <script src="/public/js/jquery-1.12.4.min.js"></script>
  <script src="/public/layer/layer.js"></script>
<script> 
$(function () {          
  $("#squan").click(function(){
            var kuhost=$("input[name='kuhost']").val();
            var ku_qq=$(":input[name='ku_qq']").val();
            var remarks=$(":input[name='remarks']").val();
             if (kuhost == '' || ku_qq == ''){
                    layer.alert('请确保每项都不为空！',{icon:5,title:'提示信息！'});
                        return false;}
            var load = layer.load(0, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=squan",
                    data : {kuhost:kuhost,ku_qq:ku_qq,remarks:remarks},
                    dataType : 'json',
                    success : function(data) {
                        layer.close(load);
                        if(data.code == -1){
                            layer.alert(data.msg,{icon:5,title:'提示信息！'});
                        }else{
                            if (data.code == 1){
                                 layer.alert(data.msg,{icon:6,title:'提示信息！'},function(){
                               window.location.href = "grant_list.html";
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