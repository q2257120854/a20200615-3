<?php
include '../includes/common.php';
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
				<div class="row">  
      <div class="container-box white-bg">
        <div class="title"> <a class="current" >我的资料</a> </div>
        <div class="row form-box">
          <form class="form-horizontal" method="post">
            <input type="hidden" name="dopost" value="save" />
            <div class="form-group">
            <label for="input1" class="col-sm-2 control-label">用户名： </label>
            <div class="col-sm-4"> 
              <b><?=$userrow['username']?></b>
              </div>     
            </div>
            <div class="form-group">
              <label for="uname" class="col-sm-2 control-label">昵称：</label>
              <div class="col-sm-4">
                <input name="user_name" type="text" value="<?=$userrow['user_name']?>" class="form-control"/>
              </div>
              <div class="col-sm-6"></div>
            </div>
                        <div class="form-group">
              <label for="userpwd" class="col-sm-2 control-label">重置密码：</label>
              <div class="col-sm-4">
                <input name="userpwd" type="text" class="form-control" placeholder="为空默认不修改" value="" />
              </div>
              <div class="col-sm-6">
                <p></p>
              </div>
            </div>

             <div class="form-group">
              <label for="uname" class="col-sm-2 control-label">支付宝收款昵称：</label>
              <div class="col-sm-4">
                <input name="number_nc" type="text" value="<?=$userrow['number_nc']?>" class="form-control"/>
              </div>
              <div class="col-sm-6"></div>
            </div>
             <div class="form-group">
              <label for="uname" class="col-sm-2 control-label">支付宝收款账号：</label>
              <div class="col-sm-4">
                <input name="number_zh" type="text" value="<?=$userrow['number_zh']?>" class="form-control"/>
              </div>
              <div class="col-sm-6"></div>
            </div>
              <div class="form-group">
              <label for="email" class="col-sm-2 control-label">电子邮箱：</label>
              <div class="col-sm-4">
                <input type="text" name="email" id="email" value="<?=$userrow['user_qq']?>@qq.com" class="form-control"/> 
              </div>
              <div class="col-sm-6">
                <input type="button" class="btn btn-danger" data-rank='100' value="获取验证码" onclick='sendEmail(this);'>
              </div>
            </div>
                        <div class="form-group" id="div_email_code" style="display: none;">
              <label for="email" class="col-sm-2 control-label">邮箱验证码：</label>
              <div class="col-sm-4">
                <input name="email_code" type="text" value="" class="form-control" placeholder="请输入收到的邮箱验证码" />
              </div>
              <div class="col-sm-6">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="button" class="btn btn-info" id="useredit" style="margin-top:10px;">确认修改</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!--个人资料--end-->                    
             
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
  $("#useredit").click(function(){
            var user_name=$(":input[name='user_name']").val();
            var userpwd=$(":input[name='userpwd']").val();
            var number_nc=$(":input[name='number_nc']").val();
            var number_zh=$(":input[name='number_zh']").val();
            var email_code=$(":input[name='email_code']").val();
            var reg =/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,}$/;
            if (userpwd!='') {
            if(!reg.test(userpwd)){
               layer.alert('密码长度要大于6位，必须由数字和字母组成！',{icon:5,title:'提示信息！'});
                        return false;}
                        }
             if (user_name == ''){
                    layer.alert('昵称不能为空！',{icon:5,title:'提示信息！'});
                        return false;}
            if (email_code == ''){
                    layer.alert('验证码不能为空！',{icon:5,title:'提示信息！'});
                        return false;}
            var load = layer.load(0, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=useredit",
                    data : {user_name:user_name,userpwd:userpwd,number_nc:number_nc,number_zh:number_zh,email_code:email_code},
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

function sendEmail(obj)
    {
        if ($('#email').val() == '') {
            $('#email').focus();
            layer.msg('电子邮箱不能为空！', {icon: 2,time: 2000});
            return false;
        }
        var   re=/^[\w.-]+@([0-9a-z][\w-]+\.)+[a-z]{2,3}$/i;
        if (!re.test($('#email').val())) {
            $('#email').focus();
            layer.msg('电子邮箱格式不正确！', {icon: 2,time: 2000});
            return false;
        }
         var load = layer.load(0, {shade:[0.1,'#fff']});
        $.ajax({
          url: 'ajax.php?act=sendEmail',
          type: 'POST',
          dataType: 'JSON',
          data: {email:$('#email').val()},
          success: function(res){
            layer.closeAll();
            if (1 == res.code) {
                countdown(obj);
                $('#div_email_code').show();
                layer.msg(res.msg, {icon: 1, time: 2000});
            } else {
                layer.msg(res.msg, {icon: 2, time: 2000});
            }
          },
          error: function(e){
            layer.closeAll();
            layer.msg('网络失败，请刷新页面后重试', {icon: 5, title:false});
          }
        })
    }

          function countdown(obj){
        // 倒计时
        var setTime;
        var time = 60;
        setTime = setInterval(function(){
            if(0 >= time){
                clearInterval(setTime);
                return;
            }
            time--;
            $(obj).val('倒计时'+time+'秒');
            $(obj).attr('disabled', 'disabled');

            if(time == 0){
                $(obj).val('获取验证码');
                $(obj).removeAttr("disabled");
            }
        },1000);
    };

</script> 
	</body>
</html>	