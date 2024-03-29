<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\wwwroot\demo.52jscn.com\public/../application/index\view\user\authzhima.html";i:1541859725;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>芝麻信用授权</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://as.alipayobjects.com/g/zm/zm-sdk/0.0.78/tools/amui.css">
<link rel="stylesheet" href="https://as.alipayobjects.com/g/zm/zm-sdk/0.0.78/authorize_h5.css">
<style>
.span_num{
	margin-right: 230px;
    font-size: 16px;
    color: #333;
}
</style>
</head>
<body ontouchstart="" id="send-auth-code" channeltype="app">
    <div class="info-tips">请选择接收校验码的手机号码</div>
    <div class="am-list" am-mode="flat chip form">
    <div class="am-list-body">
            <div class="am-list-item">
                <div class="am-list-label">姓&nbsp;&nbsp;&nbsp;&nbsp;名</div>
                <div class="am-list-extra" style="position:relative;">
                    <div class="mobile-select-raw"></div>
                    <input type="text" id="namede" placeholder="请输入姓名" value="">
                </div>
            </div>
<div class="am-list-item">
                <div class="am-list-label">身份证</div>
                <div class="am-list-extra" style="position:relative;">
                    <div class="mobile-select-raw"></div>
                    <input type="text" id="idcard" placeholder="请输入身份证" value="">
                </div>
            </div>
<div class="am-list-item">
                <div class="am-list-label">手机号</div>
                <div class="am-list-extra" style="position:relative;">
                    <div class="mobile-select-raw"></div>
                    <input type="text" id="jphone" placeholder="请输入手机号" value="">
                </div>
            </div>
            <div class="am-list-item am-input-autoclear">
                <div class="am-list-label">校验码</div>
                <div class="am-list-control">
                    <input type="text" id="j-vercode-input" placeholder="请输入校验码" value="" oninput="checkval();">
                </div>
                <div class="am-list-button">
                    <button type="button" class="send-code-btn">发送校验码</button>
                </div>
            </div>
        </div>
    </div>
<div class="info-tips bottom-tip  wrong-tip">此手机为您的支付宝绑定手机号码</div>
<button type="button" class="sbt-tel-auth" id="saveInfo-btn">提交</button>
<div class="copyright">芝麻信用 · 版权所有</div>


<div class="nico-insert-code" id="messageBox" style="display:none;opacity: 1;">
	<div class="am-toast">
		<div class="am-toast-text" id="messageBox_cont">
			校验码已发送至手机<span style="color:red;"><?php echo $phone; ?></span>, 请在30分钟内输入
		</div>
	</div>
</div>
<script src="/static/new/js/jquery.min.js"></script>
<script>
function showmsg(msg){
	$("#messageBox_cont").html(msg);
	$("#messageBox").show();
	setTimeout(function(){
		$("#messageBox").hide();
	},3000);
}
function checkval(){
	var codevalue = $("#j-vercode-input").val();
	if(codevalue.length == 6){
		$("#saveInfo-btn").addClass("sbt-active");
	}else{
		$("#saveInfo-btn").removeClass("sbt-active");
	}
}

$(function(){
	$(".send-code-btn").click(function(){

        var jname = $("#namede").val();
      var jidcard = $("#idcard").val();
var jphone = $("#jphone").val();
      if(jname == ''){
         showmsg('姓名不能为空');
        return false;
        
         }
        if(jphone == ''){
         showmsg('手机号不能为空');
        return false;
        
         }
      if(jidcard == ''){
         showmsg('身份证号码不能为空');
        return false;
        
         }
		//发送验证码
		$.post(
			"<?php echo url('user/sendsmscode'); ?>",
			{
				phone:jphone
			},
			function (data,state){
				if(state != "success"){
					showmsg("网络通讯失败,请稍后再试!");
				}else if(data.code != 1){
					showmsg(data.msg);
				}else{
					showmsg('校验码已发送至手机<span style="color:red;">'+jphone+'</span>, 请在30分钟内输入');
					var index = 60;
					$(".send-code-btn").addClass("display-btn");
					var stime = setInterval(function(){
						if(index > 0){
							$(".send-code-btn").html(index+'s');
							index--;
						}else if(index == 0){
							$(".send-code-btn").html("重新获取");
							$(".send-code-btn").removeClass("display-btn");
							clearInterval(stime);
						}					
					},1000);
				}
			}
		);
	});
	$("#saveInfo-btn").click(function(){
		var code = $("#j-vercode-input").val();
        var jname = $("#namede").val();
      var jphone = $("#jphone").val();
      var jidcard = $("#idcard").val();
      if(code == ''){
         showmsg('验证码不能为空');
        return false;
        
         }
        if(jphone == ''){
         showmsg('手机号不能为空');
        return false;
        
         }
      if(jname == ''){
         showmsg('姓名不能为空');
        return false;
        
         }
      if(jidcard == ''){
         showmsg('身份证号码不能为空');
        return false;
        
         }
		$.post(
			"<?php echo url('user/authzhima'); ?>",
			{phone:jphone,code:code},
			function(data,state){
				if(data.code == 1){
					window.location.href = "<?php echo url('user/renzheng'); ?>";
				}else{
					showmsg(data.msg);
				}
			}
		);
	});
});

</script>
<div style="display: none;">
	<Somnus:sitecfg name="sitecode"/>
</div>
</body>
</html>