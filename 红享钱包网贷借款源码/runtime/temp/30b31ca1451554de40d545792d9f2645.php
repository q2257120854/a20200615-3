<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"/www/wwwroot/m.mkuaixun09.cn/public/../application/index/view/info/personal.html";i:1541220226;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<title>个人资料认证</title>
	<link href="/static/new/css/mui.min.css" rel="stylesheet" />
	<link href="/static/new/css/mui.picker.css" rel="stylesheet" />
	<link href="/static/new/css/mui.poppicker.css" rel="stylesheet" />
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
		<p class="mui-text-center">个人资料认证</p>
	
	</header>
	<div class="wrap shiming_rz">
		<p class="renzheng_title">实名认证一旦成功认证不可修改</p>
      <form action="<?php echo url('info/personal'); ?>" method="post" id="upload_files" onsubmit="return false;">
		<ul class="sm_ul">
			<li class="sm_list">
				<p class="sm_title">学历</p>
				<p class="sm_ipt"><input type="text" id="xueli_xz" name="xueli"  placeholder="请选择您的学历"></p>
				<p class="cw_tishi" style="display: none">请选择学历</p>
			</li>
			<li class="sm_list">
				<p class="sm_title">现居地址</p>
				<p class="sm_ipt"><input type="text" id="diqu_xz" name="diqu" placeholder="请选择地区"></p>
				<p class="cw_tishi" style="display: none">请选择地区</p>
			</li>
			<li class="sm_list">
				<p class="sm_title">街道地址</p>
				<p class="sm_ipt"><input type="text" id="rz_put03" name="xiangxidizhi" placeholder="请填写街道信息"></p>
				<p class="cw_tishi" style="display: none">请正确填写详细地址</p>
			</li>
			<li class="sm_list">
				<p class="sm_title">工作单位</p>
				<p class="sm_ipt"><input type="text" id="rz_put04" name="danwei" placeholder="请填写工作单位名称"></p>
				<p class="cw_tishi" style="display: none">请输入单位名称</p>
			</li>
			<li class="sm_list">
				<p class="sm_title">单位地址</p>
				<p class="sm_ipt"><input type="text" id="diqu_xz_2" name="danweidz" placeholder="请选择地区"></p>
				<p class="cw_tishi" style="display: none">请选择地区</p>
			</li>
			<li class="sm_list">
				<p class="sm_title">单位详细地址</p>
				<p class="sm_ipt"><input type="text" id="rz_put06" name="dwxiangxi" placeholder="请填写单位详细地址"></p>
				<p class="cw_tishi" style="display: none">请正确填写详细地址</p>
			</li>
		</ul>
		<p class="lxren_tit">联系人信息（近6个月需要联系）</p>
		<ul class="sm_ul">
			<li class="sm_list">
				<p class="sm_title">联系人(1)关系</p>
				<p class="sm_ipt"><input type="text" id="guanxi_xz_01" name="lxrgx" placeholder="请选择"></p>
				<p class="cw_tishi" style="display: none">请选择关系</p>
			</li>
			<li class="sm_list">
				<p class="sm_title">真实姓名</p>
				<p class="sm_ipt"><input type="text" id="rz_put07" name="lxrxm" placeholder="请输入真实姓名"></p>
				<p class="cw_tishi" style="display: none">姓名输入有误</p>
			</li>
			<li class="sm_list">
				<p class="sm_title">手机号码</p>
				<p class="sm_ipt"><input type="tel" id="rz_put08" name="lxrsj" placeholder="请输入真实的手机号码"></p>
				<p class="cw_tishi" style="display: none">手机号码有误</p>
			</li>
			<li class="sm_list">
				<p class="sm_title">联系人(2)关系</p>
				<p class="sm_ipt"><input type="text" id="guanxi_xz_02" name="lxrgx2" placeholder="请选择"></p>
				<p class="cw_tishi" style="display: none">请选择关系</p>
			</li>
			<li class="sm_list">
				<p class="sm_title">真实姓名</p>
				<p class="sm_ipt"><input type="text" id="rz_put10" name="lxrxm2" placeholder="请输入真实姓名"></p>
				<p class="cw_tishi" style="display: none">姓名输入有误</p>
			</li>
			<li class="sm_list">
				<p class="sm_title">手机号码</p>
				<p class="sm_ipt"><input type="tel" id="rz_put11" name="lxrsj2" placeholder="请输入真实的手机号码"></p>
				<p class="cw_tishi" style="display: none">手机号码有误</p>
			</li>
		</ul>
		<p class="sm_ptn_p"><button onclick="tijiao()">提交认证</button></p>
         </form>
	</div>
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
<script src="/static/new/js/mui.picker.js"></script>
<script src="/static/new/js/mui.poppicker.js"></script>
<script src="/static/new/js/jquery.min.js"></script>
<script src="/static/new/js/shangchuan.js"></script>
<script src="/static/new/js/city.data.js" type="text/javascript" charset="utf-8"></script>
<script src="/static/new/js/city.data-3.js" type="text/javascript" charset="utf-8"></script>
<script>
mui('footer').on('tap','a',function(){document.location.href=this.href;});
function tijiao(){

    mui.toast('正在认证中....',{ duration:'long', type:'div' });
    var data = new FormData($('#upload_files')[0]);
  
      setTimeout(function () { 
           $.ajax({
        url: '<?php echo url('info/personal'); ?>',//上传路径
        type: 'POST',
        data: data,
        dataType: 'JSON',
        cache: false,
        processData: false,
        contentType: false,
        success: function (data) {
        mui.toast('认证成功',{ duration:'long', type:'div' });
        window.setTimeout("window.location='<?php echo url('user/renzheng'); ?>'",2000);
    }
})
    }, 3000);



}
// 学历验证
function xueli_yz(){
	var xueli_val = $("#xueli_xz").val();
	if(xueli_val.length < 2){
		$("#xueli_xz").parent().next().show();
		return false;
	}else{
		$("#xueli_xz").parent().next().hide();
		return true;
	}
}
// 现居地址验证
function xjd_yz(){
	var xjd_val = $("#diqu_xz").val();
	if(xjd_val.length < 2){
		$("#diqu_xz").parent().next().show();
		return false;
	}else{
		$("#diqu_xz").parent().next().hide();
		return true;
	}
}
// 街道地址验证
function jiedao_yz(){
	var jiedao_val = $("#rz_put03").val();
	if(jiedao_val.length < 5){
		$("#rz_put03").parent().next().show();
		return false;
	}else{
		$("#rz_put03").parent().next().hide();
		return true;
	}
}
// 工作单位验证
function gz_dw_yz(){
	var gzdanwei = $("#rz_put04").val();
	if(gzdanwei.length < 3){
		$("#rz_put04").parent().next().show();
		return false;
	}else{
		$("#rz_put04").parent().next().hide();
		return true;
	}
}
// 单位地址验证
function dw_diqu_yz(){
	var dw_diqu = $("#diqu_xz_2").val();
	if(dw_diqu.length < 1){
		$("#diqu_xz_2").parent().next().show();
		return false;
	}else{
		$("#diqu_xz_2").parent().next().hide();
		return true;
	}
}
// 单位街道地址验证
function dw_jiedao_yz(){
	var da_jiedao = $("#rz_put06").val();
	if(da_jiedao.length < 4){
		$("#rz_put06").parent().next().show();
		return false;
	}else{
		$("#rz_put06").parent().next().hide();
		return true;
	}
}
// 联系人1关系验证
function lxra_gx(){
	var lxra_gx = $("#guanxi_xz_01").val();
	if(lxra_gx.length < 1){
		$("#guanxi_xz_01").parent().next().show();
		return false;
	}else{
		$("#guanxi_xz_01").parent().next().hide();
		return true;
	}
}
// 联系人1姓名验证
function lxra_name(){
	var lxra_name = $("#rz_put07").val();
	if(lxra_name.length < 2){
		$("#rz_put07").parent().next().show();
		return false;
	}else{
		$("#rz_put07").parent().next().hide();
		return true;
	}
}
// 联系人1手机号码验证
function lxra_shouji(){
	var lxra_shouji = $("#rz_put08").val();
	var reg = /^[1][3,4,5,7,6,8,9][0-9]{9}$/;
	if(reg.test(lxra_shouji) === false){
		$("#rz_put08").parent().next().show();
		return false;
	}else{
		$("#rz_put08").parent().next().hide();
		return true;
	}
}
// 联系人2关系验证
function lxrb_gx(){
	var lxrb_gx = $("#guanxi_xz_02").val();
	if(lxrb_gx.length < 1){
		$("#guanxi_xz_02").parent().next().show();
		return false;
	}else{
		$("#guanxi_xz_02").parent().next().hide();
		return true;
	}
}
// 联系人2姓名验证
function lxrb_name(){
	var lxrb_name = $("#rz_put10").val();
	if(lxrb_name.length < 2){
		$("#rz_put10").parent().next().show();
		return false;
	}else{
		$("#rz_put10").parent().next().hide();
		return true;
	}
}
// 联系人2手机号码验证
function lxrb_shouji(){
	var lxrb_shouji = $("#rz_put11").val();
	var reg = /^[1][3,4,5,7,6,8,9][0-9]{9}$/;
	if(reg.test(lxrb_shouji) === false){
		$("#rz_put11").parent().next().show();
		return false;
	}else{
		$("#rz_put11").parent().next().hide();
		return true;
	}
}
</script>

<script>
	(function($, doc) {
				$.init();
				$.ready(function() {
					/**
					 * 获取对象属性的值
					 * 主要用于过滤三级联动中，可能出现的最低级的数据不存在的情况，实际开发中需要注意这一点；
					 * @param {Object} obj 对象
					 * @param {String} param 属性名
					 */
					var _getParam = function(obj, param) {
						return obj[param] || '';
					};
					//普通示例
					var xueli = new $.PopPicker();
					xueli.setData(['小学','初中','中专/高中','专科','本科','硕士研究生','博士研究生及以上']);
					var showUserPickerButton = doc.getElementById('xueli_xz');
					showUserPickerButton.addEventListener('tap', function(event) {
						xueli.show(function(items) {
							var li = items[0];
							jQuery("#xueli_xz").val(li);
							//返回 false 可以阻止选择框的关闭
							//return false;
						});
					}, false);

					//居住地址选择
					var cityPicker3 = new $.PopPicker({
						layer: 3
					});
					cityPicker3.setData(cityData3);
					var showCityPickerButton = doc.getElementById('diqu_xz');
					var cityResult3 = doc.getElementById('cityResult3');
					showCityPickerButton.addEventListener('tap', function(event) {
						cityPicker3.show(function(items) {
							var diqu_val= _getParam(items[0], 'text') + " " + _getParam(items[1], 'text') + " " + _getParam(items[2], 'text');
							jQuery("#diqu_xz").val(diqu_val);
							//返回 false 可以阻止选择框的关闭
							//return false;
						});
					}, false);

					//单位地址选择
					var cityPicker3 = new $.PopPicker({
						layer: 3
					});
					cityPicker3.setData(cityData3);
					var showCityPickerButton = doc.getElementById('diqu_xz_2');
					var cityResult3 = doc.getElementById('cityResult3');
					showCityPickerButton.addEventListener('tap', function(event) {
						cityPicker3.show(function(items) {
							var diqu_val= _getParam(items[0], 'text') + " " + _getParam(items[1], 'text') + " " + _getParam(items[2], 'text');
							jQuery("#diqu_xz_2").val(diqu_val);
							//返回 false 可以阻止选择框的关闭
							//return false;
						});
					}, false);

					//关系选择01
					var peiou = new $.PopPicker();
					peiou.setData(['配偶','父母','兄弟/姐妹','子女','同事','朋友']);
					var showUserPickerButton = doc.getElementById('guanxi_xz_01');
					showUserPickerButton.addEventListener('tap', function(event) {
						peiou.show(function(items) {
							var li = items[0];
							jQuery("#guanxi_xz_01").val(li);
							//返回 false 可以阻止选择框的关闭
							//return false;
						});
					}, false);

					//关系选择02
					var peiou = new $.PopPicker();
					peiou.setData(['配偶','父母','兄弟/姐妹','子女','同事','朋友']);
					var showUserPickerButton = doc.getElementById('guanxi_xz_02');
					showUserPickerButton.addEventListener('tap', function(event) {
						peiou.show(function(items) {
							var li = items[0];
							jQuery("#guanxi_xz_02").val(li);
							//返回 false 可以阻止选择框的关闭
							//return false;
						});
					}, false);
				});
			})(mui, document);
</script>
</html>