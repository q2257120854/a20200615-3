$(function(){
	
	$('.swiper-partial').swiper({
		slidesPerSlide:'auto'
	})
	$('#safetyV-green').click(function(){
		//alert('lero');
		$('#mod-toast01').show();
	})
	$('#mod-toast01').click(function(){
		$('#mod-toast01').hide();
	})
	$('#mod-toast02').click(function(){
		$('#mod-toast02').hide();
	})
	$('.swiper-wrapper img').click(function(){
	$('#appshots').addClass("active");
		var swiper = new Swiper('.swiper1', {
		pagination : '.pagination1',
		loop:true,
		grabCursor: true
		});
		
		//$('#appshots').show();
	})
	
});
function HidePicDiv(){
	$('#appshots').removeClass("active");
	//$('#appshots').hide();
}
function downapp(){
	location.href="http://android.myapp.com/android/down.jsp?appid=10407729&pkgid=17709794&icfa=-1&lmid=1022&g_f=0&actiondetail=0&downtype=1&transactionid=1395581457683340&topicid=-1&softname=%E8%B1%B9%E5%AD%90%E7%8E%8B";
	return ;
}
function openEvaluation(){
	location.href="http://wx.ihuizhi.com/index.php?g=Bzw&m=Index&a=bzwqqapp_comment";
	return ;
	
}
