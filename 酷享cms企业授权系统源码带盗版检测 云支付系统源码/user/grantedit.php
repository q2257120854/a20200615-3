<?php
include '../includes/common.php';
 $sqid = $_GET['id'];
 $usersq_row = $DB->get_row("select * from ku_author where  operation = '".$userrow['username']."' and id = ".$sqid." limit 1");
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
			   <?php if ($userrow['user_limit']==0) { ?>
			   	1.关于修改授权提示：您是<?=index_daili_lv($userrow['user_limit'])?>本次修改授权将扣除您1修改次数，当前账号默认授权修改数量为：<?=$conf['squan_limit']?>次<br>
				2.友情提醒：如修改授权数量不足时请联系客服修改授权！
			   <?php }else{ ?>
                1.关于修改授权提示：您是<?=index_daili_lv($userrow['user_limit'])?>,享受无限次修改授权——权限！<br>
			   <?php }?>
				
				</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body progress-panel">
                            <div class="task-progress">
                                <h3>修改授权</h3>
                                <p>填写授权信息并保存.</p>
                            </div>
                        </div>
                         <div class="panel-body">
                      <form  method="post" role="form">
                       <input type="hidden" name="id" class="form-control" value="<?=$sqid?>">
                      <?php if ($userrow['user_limit']==0) { ?>
                            <div class="form-group">
                                <label for="txtDomain">当前已修改次数：</label>
                                <input type="text" class="form-control" placeholder="修改次数量" value="<?=$userrow['squan_limit']?>次" disabled>
                            </div>
                          <?php }?>
                            <div class="form-group">
                                <label for="txtDomain">授权域名</label>
                                <input type="text" name="kuhost" class="form-control" placeholder="kuxiangcms.cn" value="<?=$usersq_row['kuhost']?>">
                            </div>
                          
                            <div class="form-group">
                                <label for="txtDomain">联系QQ</label>
                                <input type="text" name="ku_qq" class="form-control" placeholder="请输入授权QQ" value="<?=$usersq_row['ku_qq']?>">
                            </div>
                            <div class="form-group">
                                <label for="txtDomain">备注</label>
                                <input type="text" name="remarks" class="form-control" placeholder="备注信息可不填" value="<?=$usersq_row['remarks']?>">
                            </div>
                            <div class="form-group">
                            <?php if ($userrow['user_limit']!=0) { ?>
                  <label for="txtDomain" class="col-md-2 control-label">状态：</label>
              <div>
                <label class="radio-inline">
                  <input type="radio" name="state" value="1" <?=$usersq_row['state']==1?"checked":""?>/>
                  正常 </label>
                <label class="radio-inline">
                 <input type="radio" name="state" value="0" <?=$usersq_row['state']==0?"checked":""?>/>
                 冻结 </label>
                <label class="radio-inline">
                  <input type="radio" name="state" value="2'" <?=$usersq_row['state']==2?"checked":""?>/>
                  封禁 </label>
              </div>
              </div>
                   <?php }?>


                            <button type="button" id="squan" class="btn btn-info">确定修改授权</button>
                         
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
  	        var id=$("input[name='id']").val();
            var kuhost=$("input[name='kuhost']").val();
            var ku_qq=$(":input[name='ku_qq']").val();
            var remarks=$(":input[name='remarks']").val();
            var state=$(":input[name='state']:checked").val();
             if (kuhost == '' || ku_qq == ''|| id == ''){
                    layer.alert('请确保每项都不为空！',{icon:5,title:'提示信息！'});
                        return false;}
            var load = layer.load(0, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=squanedit",
                    data : {id:id,kuhost:kuhost,ku_qq:ku_qq,remarks:remarks,state:state},
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