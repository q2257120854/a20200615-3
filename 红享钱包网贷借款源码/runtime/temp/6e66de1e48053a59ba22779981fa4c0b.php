<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"/www/wwwroot/qumuban.com/public/../application/index/view/info/phtoshop.html";i:1541357312;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<title>身份证认证</title>
	<link href="/static/new/css/mui.min.css" rel="stylesheet" />
	<link href="/static/new/css/style.css" rel="stylesheet" />
	<style type="text/css">
		body{
			/*background: #fff;*/
		}
	</style>
</head>
<body>
	<header>
		<a class="mui-icon" onclick="javaScript:history.go(-1)">
			<img src="/static/new/images/head_back.png">
		</a>
		<p class="mui-text-center">身份证认证</p>
	
	</header>
  <form enctype="multipart/form-data" method="post" id="upload_files"  onsubmit="return false;">
	<div class="wrap sfz_rz">
		<!-- 证件上传 -->
			<div class="sc_wrap mui-text" style="background: #fff;">
				<p style="padding:1.25rem">提醒：照片必须和样例方向一致</p>
				<div class="sc_list mui-text-center">
					<div id="preview01">
		                <img id="imghead01" border="0" src="/static/new/images/zheng_01.png" onclick="$('#previewImg01').click();" class="shi_img">
		             </div>         
		            <input type="file" style="display: none;" id="previewImg01">
                     <input id="img01" name="imgs1" type="hidden"/>
					<p>点击拍摄或上传身份证人像面</p>	
				</div>

				<div class="sc_list mui-text-center">
					<div id="preview02">
		                <img id="imghead02" border="0" src="/static/new/images/zheng_02.png" onclick="$('#previewImg02').click();" class="shi_img">
		             </div>         
		            <input type="file" style="display: none;" id="previewImg02">
                     <input id="img02" name="imgs2" type="hidden"/>
					<p>点击拍摄或上传身份证国徽面</p>	
				</div>

				<div class="sc_list mui-text-center">
					<div id="preview03">
		                <img id="imghead03" border="0" src="/static/new/images/zheng_03.png" onclick="$('#previewImg03').click();" class="shi_img">
		             </div>         
		            <input type="file"  style="display: none;" id="previewImg03">
                     <input id="img03" name="imgs3" type="hidden"/>
					<p>点击拍摄或上传手持身份证照片</p>	
				</div>
		
				<!--div class="sc_list mui-text-center">
					<div id="preview04">
		                <img id="imghead04" border="0" src="/static/new/images/zheng_04.png" onclick="$('#previewImg04').click();" class="shi_img">
		             </div>         
		            <input type="file" onchange="previewImage04(this)" style="display: none;" id="previewImg04" name="imgs4">
					<p>点击拍摄或上传正面免冠照片</p>	
				</div>


			</div-->
			<div class="tj_but_wrap">
				<button class="dk_btn" onclick="tijiao()">提交认证</button>
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
        <a class="mui-tab-item mui-active" href="<?php echo url('user/index'); ?>">
            <span class="mui-icon b-menu-icon"><img src="/static/new/images/foot_ioc04_a.png"></span>
            <span class="mui-tab-label">我的</span>
        </a>
    </nav>
</footer>
</body>
<script src="/static/new/js/mui.min.js"></script>
<script src="/static/new/js/jquery.min.js"></script>
<script src="/static/new/newjs/tools.js"></script>
<script src="/static/new/newjs/pictureHandle.js"></script>
<script>
mui('footer').on('tap','a',function(){document.location.href=this.href;});
function tijiao() {
    mui.toast('正在上传中....',{ duration:'long', type:'div' });
    var data = new FormData($('#upload_files')[0]);
  
      setTimeout(function () { 
           $.ajax({
        url: '<?php echo url('info/phtoshop'); ?>',//上传路径
        type: 'POST',
        data: data,
        dataType: 'JSON',
        cache: false,
        processData: false,
        contentType: false,
        success: function (data) {
        mui.toast('上传成功',{ duration:'long', type:'div' });
        window.setTimeout("window.location='<?php echo url('user/renzheng'); ?>'",2000);
    }
})
    }, 3000);


}
</script>
</html>