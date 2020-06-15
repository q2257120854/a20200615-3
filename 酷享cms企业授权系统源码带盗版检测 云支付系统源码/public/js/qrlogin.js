function setCookie(name,value)
{
	var exp = new Date();
	exp.setTime(exp.getTime() + 30*1000);
	document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
}
function getCookie(name) 
{
	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
	if(arr=document.cookie.match(reg))
		return unescape(arr[2]);
	else
		return null;
}
function getqrpic(force){
	force = force || false;
	var qrsig = getCookie('qrsig');
	var qrimg = getCookie('qrimg');
	if(qrsig!=null && qrimg!=null && force==false){
		$('#qrimg').attr('qrsig',qrsig);
		$('#qrimg').html('<img id="qrcodeimg" onclick="getqrpic(true)" src="data:image/png;base64,'+qrimg+'" title="点击刷新">');
		if( /Android|SymbianOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini|Windows Phone|Midp/i.test(navigator.userAgent) && navigator.userAgent.indexOf("QQ/") == -1) {
			$('#mobile').show();
		}
	}else{
		var getvcurl='includes/qrlogin.php?do=getqrpic&r='+Math.random(1);
		$.get(getvcurl, function(d) {
			if(d.saveOK ==0){
				setCookie('qrsig',d.qrsig);
				setCookie('qrimg',d.data);
				$('#qrimg').attr('qrsig',d.qrsig);
				$('#qrimg').html('<img id="qrcodeimg" onclick="getqrpic(true)" src="data:image/png;base64,'+d.data+'" title="点击刷新">');
				if( /Android|SymbianOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini|Windows Phone|Midp/i.test(navigator.userAgent) && navigator.userAgent.indexOf("QQ/") == -1) {
					$('#mobile').show();
				}
			}else{
				alert(d.msg);
			}
		});
	} 
}
function ptuiCB(code,uin,sid,skey,pskey,pskey2,nick){
	var msg='请扫描二维码';
	switch(code){
		case '0':
			$('#login').html('<div class="alert alert-success">QQ授权登入成功！'+decodeURIComponent(nick)+'</div><br/><a href="download_get.php?type=installer&qq='+uin+'" target="_blank" class="btn btn-primary">完整安装包</a>&nbsp;<a href="download_get.php?type=updater&qq='+uin+'" target="_blank" class="btn btn-success">更新包</a><hr/>提示：如果需要全新搭建或之前未搭建过，请下载完整安装包；如果之前搭建过，请下载更新包直接覆盖，数据不会丢失。');
			$('#qrimg').hide();
			$('#submit').hide();
			$('#mobile').hide();
			$('#login').attr("data-lock", "true");
			break;
		case '1':
			getqrpic(true);
			alert('请重新扫描二维码');
			msg='请重新扫描二维码';
			break;
		case '2':
			alert('请使用QQ手机版扫描二维码后再点击验证');
			msg='使用QQ手机版扫描二维码';
			break;
		case '3':
			alert('扫码成功，请在手机上确认授权登录');
			msg='扫码成功，请在手机上确认授权登录';
			break;
		case '4':
			alert('你的QQ未通过验证，请使用购买授权的QQ扫码！'+uin);
			msg='你的QQ未通过验证，请使用购买授权的QQ扫码！'+uin+'!';
			break;
		case '5':
			alert('QQ验证失败，请解除登录异常后重试！');
			msg='QQ验证失败，请解除登录异常后重试！';
			break;
		default:
			msg=sid;
			break;
	}
	$('#loginmsg').html(msg);
}
function loadScript(c) {
	if ($('#login').attr("data-lock") === "true") return;
	var qrsig=$('#qrimg').attr('qrsig');
	c = c || "includes/qrlogin.php?do=qqlogin&qrsig="+decodeURIComponent(qrsig)+"&r=" + Math.random(1);
	var a = document.createElement("script");
	a.onload = a.onreadystatechange = function() {
		if (!this.readyState || this.readyState === "loaded" || this.readyState === "complete") {
			if (typeof d == "function") {
				d()
			}
			a.onload = a.onreadystatechange = null;
			if (a.parentNode) {
				a.parentNode.removeChild(a)
			}
		}
	};
	a.src = c;
	document.getElementsByTagName("head")[0].appendChild(a)
}
function loginload(){
	if ($('#login').attr("data-lock") === "true") return;
	var load=document.getElementById('loginload').innerHTML;
	var len=load.length;
	if(len>2){
		load='.';
	}else{
		load+='.';
	}
	document.getElementById('loginload').innerHTML=load;
}
function mloginurl(){
	var imagew = $('#qrcodeimg').attr('src');
	imagew = imagew.replace(/data:image\/png;base64,/, "");
	$('#mlogin').html("正在跳转...");
	$.post("includes/qrcode.php?r="+Math.random(1),"image="+encodeURIComponent(imagew), function(arr) {
		if(arr.code==0) {
			$('#loginmsg').html('跳转到QQ登录后请返回此页面');
			window.location.href='mqqapi://forward/url?version=1&src_type=web&url_prefix='+window.btoa(arr.url);
		}else{
			alert(arr.msg);
		}
		$('#mlogin').html("跳转QQ快捷登录");
	}, 'json');
}
$(document).ready(function(){
	getqrpic();
	$('#submit').click(function(){
		loadScript();
	});
	//window.setInterval(loginload,1000);
	//window.setInterval(loadScript,3000);
});