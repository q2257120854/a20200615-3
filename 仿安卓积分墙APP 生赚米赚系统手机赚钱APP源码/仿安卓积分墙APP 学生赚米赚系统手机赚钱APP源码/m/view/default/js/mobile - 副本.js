var url = "http://www.wuliaozhuan.com/shell/mobile.php";  
jQuery.getJSON(url, function(data){
	if(data == '1'){
		window.location.href = 'http://www.wuliaozhuan.com/?m=wap&uid='+uid;
	}
});