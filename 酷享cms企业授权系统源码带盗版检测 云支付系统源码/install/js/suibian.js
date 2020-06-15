// JavaScript Document
$(document).ready(function(e) {
	  $(".menter_btn_a_a_lfa").click(function(){
		if($(".check_boxId").is(":checked")){
			
	     	window.location.href="index.php?do=1";
		}
		else
		{
			alert("请同意安装协议");
		}
	});
});


