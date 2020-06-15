var url = "m";  
jQuery.getJSON(url, function(data){
	if(data == '1'){
		window.location.href = '/?m=wap&uid='+uid;
	}
});