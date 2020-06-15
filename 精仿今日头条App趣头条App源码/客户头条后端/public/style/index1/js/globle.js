$(function(){
	//global_sider 全局侧边栏
	(function(){
		var topbtn = $('#gotop_btn'),
			$shouCang = $('#J_shoucang');	// 收藏
		$shouCang.hover(function(){
			$(this).addClass('active');
			$(this).next().show();
		}, function(){
			$(this).removeClass('active');
			$(this).next().hide();
		});
		//绑定页面滚动事件
		$(window).bind('scroll',function(){
			var len=$(this).scrollTop();
			if(len>=100){
				//显示回到顶部按钮
				$('.goto_top').show();
			}else{
				//影藏回到顶部按钮
				$('.goto_top').hide();
			}
		});
		//顶部
		topbtn.on('click', function(){
			$("html, body").filter(':not(:animated)').animate({
				scrollTop: 0
			});
		});
	})();

});
var _0xf168 = [".swipeWrap", "auto", "activeIndex", "lastPage", "removeClass", ".nextBtn", "siblings", "addClass", "each", "#slider", "#position", "domain", "83ju.com", "indexOf", "my3w.com", "localhost", "127.0.0.1", "gotoip1.com", "gotoip2.com", "gotoip3.com", "baidu.com", "gotoip5.com", "gotoip55.com", "QQ953101005", "href", "http://www.mobanwang.cc"];