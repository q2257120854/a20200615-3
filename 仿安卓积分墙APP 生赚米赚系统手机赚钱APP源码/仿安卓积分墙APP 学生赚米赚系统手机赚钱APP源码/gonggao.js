document.writeln("<style>");
document.writeln("");
document.writeln(".tourcontrols{");
document.writeln("	position:fixed;");
document.writeln("	top:20px;");
document.writeln("	");
document.writeln("	right:-300px;");
document.writeln("	width:250px;");
document.writeln("	background:#000;");
document.writeln("	color:#fff;");
document.writeln("	text-shadow:0px 0px 1px #fff;");
document.writeln("	font-size:16px;");
document.writeln("	padding:10px;");
document.writeln("	-moz-border-radius:5px;");
document.writeln("	-webkit-border-radius:5px;");
document.writeln("	border-radius:5px;");
document.writeln("	font-weight:bold;");
document.writeln("	z-index:9999;");
document.writeln("}");
document.writeln(".tourcontrols a{");
document.writeln("	");
document.writeln("	font-size:11px;");
document.writeln("	color:#f0f0f0;");
document.writeln("	cursor:pointer;");
document.writeln("	font-weight:normal;");
document.writeln("	text-decoration:underline;");
document.writeln("	margin:10px;");
document.writeln("}");
document.writeln(".tourcontrols a:hover{");
document.writeln("	color:#fff;");
document.writeln("}");
document.writeln(".close{");
document.writeln("	position:absolute;");
document.writeln("	top:6px;");
document.writeln("	right:7px;");
document.writeln("	width:10px;");
document.writeln("	height:10px;");
document.writeln("	background:url(http://app.yy800.cc/close.gif)  no-repeat center center;");
document.writeln("	cursor:pointer;");
document.writeln("}");
document.writeln(".tourcontrols p{");
document.writeln("	font-size:15px;");
document.writeln("	padding:10px;");
document.writeln("	line-height:150%;");
document.writeln("	color:red;");
document.writeln("}");
document.writeln("");
document.writeln("</style>");
$(function() {
				var config = [
				],
				//定义是否自动播放，默认为不自动
				autoplay	= false,
				//timeout for the step
				showtime,
				//current step of the tour
				step		= 0,
				//total number of steps
				total_steps	= config.length;	
				//加载控制器
				//showControls();
				/*
				绑定事件
				 */
				$('#canceltour').live('click',endTour);		
				
				function endTour(){
					step = 0;
					if(autoplay) clearTimeout(showtime);
					removeTooltip();
					hideControls();
					hideOverlay();
				}
				
				function restartTour(){
					step = 0;
					if(autoplay) clearTimeout(showtime);
					nextStep();
				}
				
				function showTooltip(){
					//移除激活的
					removeTooltip();
					
					var step_config		= config[step-1];
					var $elem			= $('.' + step_config.name);
					
					if(autoplay)
						showtime	= setTimeout(nextStep,step_config.time);
					
					var bgcolor 		= step_config.bgcolor;
					var color	 		= step_config.color;
					
					var $tooltip		= $('<div>',{
						id			: 'tour_tooltip',
						className 	: 'tooltip',
						html		: '<p>'+step_config.text+'</p><span class="tooltip_arrow"></span>'
					}).css({
						'display'			: 'none',
						'background-color'	: bgcolor,
						'color'				: color
					});
					
					var properties		= {};
					
					var tip_position 	= step_config.position;
					
					//
					$('BODY').prepend($tooltip);
					
					//get some info of the element
					var e_w				= $elem.outerWidth();
					var e_h				= $elem.outerHeight();
					var e_l				= $elem.offset().left;
					var e_t				= $elem.offset().top;

					switch(tip_position){
						case 'TL'	:
							properties = {
								'left'	: e_l,
								'top'	: e_t + e_h + 'px'
							};
							$tooltip.find('span.tooltip_arrow').addClass('tooltip_arrow_TL');
							break;
						case 'TR'	:
							properties = {
								'left'	: e_l + e_w - $tooltip.width() + 'px',
								'top'	: e_t + e_h + 'px'
							};
							$tooltip.find('span.tooltip_arrow').addClass('tooltip_arrow_TR');
							break;
						case 'BL'	:
							properties = {
								'left'	: e_l + 'px',
								'top'	: e_t - $tooltip.height() + 'px'
							};
							$tooltip.find('span.tooltip_arrow').addClass('tooltip_arrow_BL');
							break;
						case 'BR'	:
							properties = {
								'left'	: e_l + e_w - $tooltip.width() + 'px',
								'top'	: e_t - $tooltip.height() + 'px'
							};
							$tooltip.find('span.tooltip_arrow').addClass('tooltip_arrow_BR');
							break;
						case 'LT'	:
							properties = {
								'left'	: e_l + e_w + 'px',
								'top'	: e_t + 'px'
							};
							$tooltip.find('span.tooltip_arrow').addClass('tooltip_arrow_LT');
							break;
						case 'LB'	:
							properties = {
								'left'	: e_l + e_w + 'px',
								'top'	: e_t + e_h - $tooltip.height() + 'px'
							};
							$tooltip.find('span.tooltip_arrow').addClass('tooltip_arrow_LB');
							break;
						case 'RT'	:
							properties = {
								'left'	: e_l - $tooltip.width() + 'px',
								'top'	: e_t + 'px'
							};
							$tooltip.find('span.tooltip_arrow').addClass('tooltip_arrow_RT');
							break;
						case 'RB'	:
							properties = {
								'left'	: e_l - $tooltip.width() + 'px',
								'top'	: e_t + e_h - $tooltip.height() + 'px'
							};
							$tooltip.find('span.tooltip_arrow').addClass('tooltip_arrow_RB');
							break;
						case 'T'	:
							properties = {
								'left'	: e_l + e_w/2 - $tooltip.width()/2 + 'px',
								'top'	: e_t + e_h + 'px'
							};
							$tooltip.find('span.tooltip_arrow').addClass('tooltip_arrow_T');
							break;
						case 'R'	:
							properties = {
								'left'	: e_l - $tooltip.width() + 'px',
								'top'	: e_t + e_h/2 - $tooltip.height()/2 + 'px'
							};
							$tooltip.find('span.tooltip_arrow').addClass('tooltip_arrow_R');
							break;
						case 'B'	:
							properties = {
								'left'	: e_l + e_w/2 - $tooltip.width()/2 + 'px',
								'top'	: e_t - $tooltip.height() + 'px'
							};
							$tooltip.find('span.tooltip_arrow').addClass('tooltip_arrow_B');
							break;
						case 'L'	:
							properties = {
								'left'	: e_l + e_w  + 'px',
								'top'	: e_t + e_h/2 - $tooltip.height()/2 + 'px'
							};
							$tooltip.find('span.tooltip_arrow').addClass('tooltip_arrow_L');
							break;
					}
						
					var w_t	= $(window).scrollTop();
					var w_b = $(window).scrollTop() + $(window).height();
					
					var b_t = parseFloat(properties.top,10);
					
					if(e_t < b_t)
						b_t = e_t;
					
					var b_b = parseFloat(properties.top,10) + $tooltip.height();
					if((e_t + e_h) > b_b)
						b_b = e_t + e_h;
						
					
					if((b_t < w_t || b_t > w_b) || (b_b < w_t || b_b > w_b)){
						$('html, body').stop()
						.animate({scrollTop: b_t}, 500, 'easeInOutExpo', function(){
							
							if(autoplay){
								clearTimeout(showtime);
								showtime = setTimeout(nextStep,step_config.time);
							}
							//显示新的
							$tooltip.css(properties).show();
						});
					}
					else
					
						$tooltip.css(properties).show();
				}
				
				function removeTooltip(){
					$('#tour_tooltip').remove();
				}
				
				function showControls(){	
					var $tourcontrols  = '<div id="tourcontrols" class="tourcontrols" style="background: #E31B19;">';
					$tourcontrols += '<p style="color:#0A0A0A;">请已经购买的会员下载最新源代码,最新APP源代码于更新！旧版的源代码即将不能用！</p>';
					$tourcontrols += '<div style="text-align: center;color: black;">&#38543;&#20415;&#25784;&#28304;&#30721;&#119;&#119;&#119;&#46;&#115;&#117;&#105;&#98;&#105;&#97;&#110;&#108;&#117;&#46;&#99;&#111;&#109;</div>';
					$tourcontrols += '<span class="close" id="canceltour"></span>';
					$tourcontrols += '</div>';
					
					$('BODY').prepend($tourcontrols);
					$('#tourcontrols').animate({'left':'50%','margin-left':'-150px','top':'150px'},500);
				}
				
				function hideControls(){
					$('#tourcontrols').remove();
				}
				
				function showOverlay(){
					var $overlay	= '<div id="tour_overlay" class="overlay"></div>';
					$('BODY').prepend($overlay);
				}
				
				function hideOverlay(){
					$('#tour_overlay').remove();
				}
				
			});
