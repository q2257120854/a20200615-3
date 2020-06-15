// 签名：com.g1013175107.hag
// 签名：a304b4751d737b859dc48841e9140973
var fx_gurl = 'http://test.52jscn.com/';
var fx_url = fx_gurl + 'index.php/';
var html_win = 'widget://html/';
var _token=$api.getStorage('token');
var _user=$api.getStorage('user')
var _yejian=$api.getStorage('_yejian')
if(!_token || !_user){
	_uot();
}
if(_yejian){
	$api.addCls($api.dom('body'),'fx-yejian')
}
// 上拉滚动参数统一设置
var textDown='下拉刷新...',
	textUp='松开刷新...',
	bgColor='#fff',
	textColor='#000',
	visible=true,
	showTime=true,
	loadingImg='',
	textLoading,
	textTime
;
function _shangla(functions,refreshHeaderLoading){
	api.parseTapmode();
//	var image=new Array;
//	for(var i=0;i<39;i++){
//		image[i]='widget://image/loading/'+(i+1)+'.fw.png'
//	}
//	api.setCustomRefreshHeaderInfo({
//	    bgColor: '#fff',
//	    refreshHeaderHeight : 60 ,
//	    loadAnimInterval : 30 ,
//	    isScale: false,
//	    image: {
//	        pull: image,
//	        load: image
//	    }
//	},functions);
	api.setRefreshHeaderInfo({
					visible : true,
					loadingImg : loadingImg,
					bgColor : bgColor,
					textColor : textColor,
					textDown : textDown,
					textUp : textUp,
					showTime : true,

				}, functions);
	// 第一次打开APP，自动执行刷新
	if(!refreshHeaderLoading){
		api.refreshHeaderLoading();
	}
}
//设置距离底部多少距离时触发，默认值为0，数字类型
var threshold=100;
//打开窗口
// pageParam 传递参数
// url 打开文件名
// d   默认读取html文件，若在文件在根目录读取html目录文件，需要填写第二个参数为空即可
function _url(pageParam,url,token) {
	if (token == true) {
		var userasd = $api.getStorage('user');
		if (!userasd) {
			_url({title:'会员登陆',url:'login'})
			return;
		}
	}
	var nameUrl=url;
	if(!url){
		url='win';
		nameUrl=pageParam.url;
	}
	if(url=='photo_browser'){
		api.openWin({
			name : nameUrl,
			url : html_win+url+'.html',
			pageParam : pageParam,
			reload:true,
			animation:{
			   	type:"fade",                //动画类型（详见动画类型常量）
				subType:"from_right",       //动画子类型（详见动画子类型常量）
				duration:300
			}
		});
	}else{
		api.openWin({
			name : nameUrl,
			url : html_win+url+'.html',
			pageParam : pageParam,
			reload:true,
		});
	}

}


// 封装ajax
// url 		请求地址
// callback 返回回调
// method	默认值get
// data 	字段
// dataType 返回格式 默认json
function _ajax(url, callback, data) {
	var type = '';
	if (data) {
		type = 'post';
	} else {
		type = 'get';
	}
	var token = $api.getStorage('token');
	if (token) {
		if (data) {
			var json = {};
			var json1 = data;
			var json2 = {
				token : token
			};
			json = eval('(' + (JSON.stringify(json1) + JSON.stringify(json2)).replace(/}{/, ',') + ')');
			data = json;
		} else {
			data = {
				token : token
			}
		}
		type = 'post';
	}
	api.ajax({
		url :  url,
		method : type,
		data : {
			values : data
		},
		cache : true,
	}, callback);

}

// 通用设置变量
var pagenum = 1;
//  禁止滚动
var heigutgao = 0;
// 滚动执行 1执行  0不执行
var page_total = 0;
// 数据总数
var page_per_page = 0;
// 数据分页
// 封装输入列表数据
// url 请求地址
// page分页
// loading 当使用上拉刷新，loading有值会执行api.refreshHeaderLoadDone();
function _lists(url, page, loading,data) {


		_loading()
	heigutgao = 0;
	// 关闭滚动
	_ajax(url + '?p=' + page, function(ret, err) {
		if (ret) {
			_loadingCloes()
			//console.log(JSON.stringify(ret))
			// <div class="aui-tips aui-text-center">今日头条推荐引擎有8条更新</div>
			//console.log(JSON.stringify(err))
//			if(isContains(url,'api/article/lists/') && page==1){
//				$api.prepend($api.dom('body'),'<div class="aui-tips aui-text-center">今日头条推荐引擎有8条更新</div>');
//				_tipsDel();
//			}
			if (loading == 1) {// 上拉刷新时  初始化参数
				// 重置滚动统计
				pagenum = heigutgao = 1
				// 移除底部没有了
				$api.remove($api.dom('#loadingNo'));
				// 停止刷新
				api.refreshHeaderLoadDone();
			}
			// 获取得到数据线删除底部加载提示
			$api.remove($api.dom('.fx-dibu_loading'));
			page_total = ret.total
			//渲染模版
			var evalData = doT.template($api.html($api.byId('fx-list')));

			if (loading == 1) {// 上拉刷新时 清空列表
				$api.html($api.byId('fx-view'), '');
			}
			$api.append($api.byId('fx-view'), evalData(ret));
			// 插入底部加载提示
			page_per_page = Math.ceil(page_total / ret.per_page);
			if (page_per_page <= page) {
				heigutgao = 0//关闭滚动
				$api.append($api.byId('fx-view'), '<div id="loadingNo">底部没有数据了...</div>')
			} else {
				$api.append($api.byId('fx-view'), '<div class="fx-dibu_loading load-container loadingdi"><div class="loader">loadingdi...</div></div>');
				// 数据插入成功 设置 heigutgao=1 滚动才能继续加载
				heigutgao = 1;
			}
			// 图片缓存本地
			_imageCache();
			api.parseTapmode();
			//			api.toast({
			//	            msg:'page_per_page:'+page_per_page+"\r\npage:"+page
			//          });
		} else {
			$api.html($api.byId('fx-view'), "<div class='aui-text-center aui-margin-15'>"+err.msg+"</div>");
			api.refreshHeaderLoadDone();
			//alert(JSON.stringify(err))
		}
	},data)
}
// 判断一个字符串是否包含一个子串的方法
function isContains(str, substr) {
    return str.indexOf(substr) >= 0;
}
//// 删除tips提示
//function _tipsDel(){
//	setTimeout(function(){
//		$api.css($api.dom('.aui-tips'),'height:0rem');
//		setTimeout(function(){
//			$api.remove($api.dom('.aui-tips'))
//		},100)
//	},2000)
//}

// 统一服装调用 Frame页面
// url 页面文件命
// header 不填写默认读取顶部高度    填写1表示不显示header
// footer 不填写默认读取底部高度    填写1表示不显示footer
function _openFrame(url, header, footer, pageParam,useHi,bounces) {
	// 解析属性	消除点击300S 延时问题 tapmode
	api.parseTapmode();
	if(!useHi){
		useHi=false;
	}else{
		useHi=true;
	}
	var headerh;
	var footerh;
	if (header == 1) {
		headerh = 0;
	} else {
		var header = $api.byId('fx-header');
		$api.fixStatusBar(header);
		var headerPos = $api.offset(header);
		headerh = headerPos.h
	}
	var body_h = api.winHeight;
	if (footer == 1) {
		footerh = 0;
	} else {
		footerh = $api.offset($api.byId('fx-footer')).h;
	}
	if(bounces){
		bounces=false
	}else{
		bounces=true
	}
	api.openFrame({
		name : url,
		url : html_win + url + '.html',
		bounces : true,
		//showProgress : true,
		reload : true,
		rect : {
			x : 0,
			y : headerh,
			w : 'auto',
			h : body_h - headerh - footerh
		},


		pageParam : pageParam,
	})

}

//返回上一页
function _close(heibai) {
//	var color;
//	if (stylesas == 2) {
//		stylesas = 'dark';
//		color = '#000';
//	} else if(stylesas == 1){
//		stylesas = 'light';
//		color = '#fff';
//	}
//	api.setStatusBarStyle({
//		style : stylesas,
//		color : color,
//	});

	api.closeWin();
	_heibai(heibai)
}
// 图片缓存本地
function _imageCache(thumbnail) {
	return;
	if(!thumbnail){
		thumbnail=false;
	}
	var srcs = $("img#ffxiangImgCache");
	if (srcs.length > 0) {
		for (var i = 0; i < srcs.length; i++) {
			(function(imgObj) {
				var imgUrl = imgObj.attr("ffxiang-src");
				api.imageCache({
					url : imgUrl,
					thumbnail:thumbnail,
				}, function(ret, err) {
					if (ret) {
						if (!ret.status) {
							ret.url = imgUrl
						}
						imgObj.attr("src", ret.url);
						imgObj.removeAttr('id')
						imgObj.removeAttr('ffxiang-src')
					}
				});
			})($(srcs[i]));
		}
	}
}

// 底部4个按钮跳转文件
// id 0首页 1视频 2关注 3我的
function _index_win(url) {
	api.openWin({
		name : url,
		url : html_win+url+'.html',
		animation : {
			type : "none",
		},
		slidBackEnabled : false,
	});
	if(url=='video_win' || url=='weitoutiao_win'){
		_heibai(1)
	}else if(url=='member_win'){
		_heibai()
	}
}
// 刷新首页
function _shuaxin(){
//	api.refreshHeaderLoading();
}

// 跳到主页
function _hone() {
	_heibai()
	api.closeToWin({
		// name : 'root',
		name : 'ffxiang_win',
		animation : {
			type : 'none',
		}
	});
}

// 弹出提示
function _alert(title, functions, msg) {
	api.alert({
		msg : title,
		title : msg,
	}, functions)
}

// msg提示
function _msg(title, location, duration) {
	//top            //顶部
	//middle        //中间
	//bottom        //底部
	if (!location) {
		location = 2000
	}
	if (!duration) {
		duration = 'middle'
	}
	api.toast({
		msg : title,
		duration : location,
		location : duration
	});
}

//loading层
function _loading(title) {
	if(!title){
		title='努力加载中...';
	}
	api.showProgress({
		title : title,
		text : '先喝杯茶...',
		modal : true,
		animationType:'zoom',
	});
}

// 加载提示
//var layerload;
// 关闭 提示
function _loadingCloes() {
	//layer.close(layerload);
	api.hideProgress();
	api.refreshHeaderLoadDone();
}

// 封装存储数据
function _set(key,value){
	api.setPrefs({
		key: key,
	 	value: value
	});
}
// 服装读取数据
function _get(key,sync){
	if(!sync){
		sync=true
	}else{
		sync=false
	}
	var token = api.getPrefs({
	    sync: false,
	    key: key
	});
	if(token){
		token=eval('(' + token + ')');
	}
	return token;
}
// 退出登录
function _uot(){
	$api.rmStorage('token')
	$api.rmStorage('user')
	_user=''
	_token='';
}
// 通用列表
function _ffxiangList(url,data){
	_ajax(url,function(ret,err){
		if(ret){
			var evalData = doT.template($('#fx-list').html());
			$('#fx-view').append(evalData(ret))
			// 图片缓存本地
			_imageCache();
		}
	},data)
}
// 会员登陆
function _login(){
	_url({url:'login',title:'登陆'})
}
// 更新会员数据
function _userInfo() {
	_ajax('api/member/info', function(ret, err) {

		//console.info("更新会员数据" + JSON.stringify(ret))
		//console.info("更新会员数据" + JSON.stringify(err))
		if (ret) {
			if(ret.ret){
				$api.setStorage('user', ret.ret);
			}else{
				_uot()
			}
		} else {
			alert(JSON.stringify(err));
			_uot()
		}
	})
}
// 夜间
function _yejians(){
	if(_yejian){
		$api.rmStorage('yejian')
		_yejian='';
		$api.removeCls($api.dom('body'),'fx-yejian')

	}else{
		$api.addCls($api.dom('body'),'fx-yejian')
		$api.setStorage('yejian', '1');
		_yejian=1;

	}
	_heibai()
}
// 黑白状态
function _heibai(type){
	if(type==1){
		api.setStatusBarStyle({
			style : 'dark',
			color : '#000',
		});
	}else if(type!=3 || !type ||type==0){
		api.setStatusBarStyle({
			style: 'light',
			color: '#fff',
		});
	}
}






































// 下面以前写的通用代码

function diopen(url) {
	api.openWin({
		name : url,
		url : url,
		animation : {
			type : "none",
		},
		delay : 200,
		slidBackEnabled : false,
	});
}

//var 变量
function varbl() {
	var pagea = 1;
	// 	滚动递增+1
	var pagemsg = 1;
	// 	判断滚动页面是否最后  1表示继续 0表示结束
	var htmlg = '';
	// 	清空#goods_list商品赋值内容
	var pagemsgh;
	//	获取分页商品数量
}

//重设变量
function chongshevar() {
	pagemsg = 1;
	htmlg = '';
	pagemsgh = 1;
	pagemsg = 1;
	pagea = 1;
}

// 人气商品

// 调用商品goods_list  pages分页数字   shangla=1上拉刷新  url商品网址 typeid分类ID  paixu 排序
function goods_list(pages, shangla, urla, typeid, paixu) {
	//api.toast({msg:'正在加载',location: 'bottom'});
	// pages 页面数字   shangla 1表示在上拉
	if (!typeid) {
		typeid = 0
	}
	if (!paixu) {
		paixu = 1
	}
	if (urla == undefined) {
		urla = '/api/app/lists/' + typeid + '_0_2.html?p=';
	} else if (urla == '人气') {
		urla = '/api/app/lists/' + typeid + '_0_2.html?p=';
	} else if (urla == '最新') {
		urla = '/api/app/lists/' + typeid + '_0_4.html?p=';
	} else if (urla == '价格') {
		urla = '/api/app/lists/' + typeid + '_0_5.html?p=';
	} else if (urla == '剩余次数') {
		urla = '/api/app/lists/' + typeid + '_0_3.html?p=';
	} else if (urla == '价格↑') {
		//alert(urla)
		urla = '/api/app/lists/' + typeid + '_0_5.html?p=';
	} else if (urla == '价格↓') {
		//alert(urla)
		urla = '/api/app/lists/' + typeid + '_0_6.html?p=';
	} else {
		urla = '/api/app/lists/' + typeid + '_0_0.html?p=';
	}
	//alert(urla)
	api.ajax({
		cache : true,
		url : url + urla + pages,
		method : 'get',
		dataType : 'json',
		//report : 'true',
	}, function(ret, err) {
		$api.remove($api.dom('.loading'));
		$api.remove($api.dom('#diLoading'));
		if (ret) {
			var html = '';
			if (ret.length) {
				for (var i = 0; i < ret.length; i++) {
					html += '<li class="aui-list-view-cell aui-img aui-col-xs-6 goods_li">';
					if (ret[i].yunjiage == "10.00") {
						html += '<i id="i10"></i>';
					}
					html += '<img tapmode onclick="goods_item_win(' + ret[i].id + ')" class="aui-img-object" src="' + gurl + '/statics/uploads/' + ret[i].thumb + '">';
					html += '<div class="aui-img-body goods_info">';
					html += '<span tapmode onclick="goods_item_win(' + ret[i].id + ')">' + ret[i].title + '</span>';
					html += '<div class="jindu">';
					html += '<div class="jindu_l" tapmode onclick="goods_item_win(' + ret[i].id + ')">';
					html += '<h4>揭晓进度   <font color="#0079fe">' + Math.round(width(ret[i].canyurenshu, ret[i].zongrenshu, 100)) + '%</font></h4>';
					html += '<div class="aui-progress aui-progress-xxs" tapmode onclick="goods_item_win(' + ret[i].id + ')">';
					html += '<div class="aui-progress-xxs aui-progress-warning" style="width: ' + width(ret[i].canyurenshu, ret[i].zongrenshu, 100) + '%;"></div></div>';
					html += '</div></div><div onclick="goods_cart(' + ret[i].id + ')" class="aui-text-danger aui-border  fx-cart-list">加入清单</div></div></li>';
				}
				if (ret.length > 9) {
					html += '<li class="aui-list-view-cell aui-img aui-col-xs-6 goods_li" id="diLoading"></li>'
				}
				$api.append($api.byId('goods_list'), html);
				api.parseTapmode();
			} else {
				api.toast({
					msg : '没有商品了',
					location : 'bottom'
				});
			}

		} else {
			api.toast({
				msg : '没有商品了',
				location : 'bottom'
			});
		}
		loading();
	});

}

// 打开商品详细内页
function goods_item_win(goods_id) {
	api.openWin({
		name : 'goodsItem',
		url : html_win + 'goods_item_win.html',
		pageParam : {
			goods_id : goods_id,
		},
		reload : true,
	});
}

// 开奖进度算法
function width(p, t, w) {
	return p / t * w;
}

// 开奖剩余次数算法
function percent(p, t) {
	// if($p<=0){return false;}
	var a = [p - t] / p * 100;
	return Math.ceil(a) + '%';
}

//更新会员信息
function userConfig(typeUlr) {
	api.ajax({
		cache : true,
		url : url + '/api/appUser/config',
		method : 'post',
		timeout : 30,
		dataType : 'json',
		data : {
			values : {
				uid : $api.getStorage('user').uid,
				mobile : $api.getStorage('user').mobile,
				email : $api.getStorage('user').email,
				password : $api.getStorage('user').password,
			}
		}
	}, function(ret, err) {
		//alert('ret:' + JSON.stringify(ret) + ' || ' + 'err:' + JSON.stringify(err))
		if (ret) {
			if (ret.info) {
				api.toast({
					msg : ret.info
				});
				setTimeout(login, 1500);

			} else {
				$api.setStorage('user', ret);
				if (!typeUlr) {
					//					api.toast({
					//						msg : '会员更新成功',
					//					});
				} else {
					setTimeout(hone, 200);
				}
			}
		} else {
			alert(JSON.stringify(err))
		}
	});
}

//退出会员
function user_out() {
	$api.rmStorage('user')
	api.toast({
		msg : '退出成功'
	});
	setTimeout(hone, 1500);
}

//加入购物车
function goods_cart(id) {
	if (id) {
		var cartlist = $api.getStorage('cartlist');
		//		alert(JSON.stringify(cartlist));
		//		return false;
		if (cartlist == undefined) {
			$api.setStorage('cartlist', id);
			api.execScript({
				name : 'root',
				script : 'Mycart();'
			});
			api.execScript({
				name : 'root',
				script : 'gouwuchedu();'
			});
			api.toast({
				msg : '添加成功',
				location : 'middle'
			});
		} else {
			var Cts = cartlist;
			if (Cts.indexOf(",") > 0) {
				var strs = new Array();
				//定义一数组
				strs = cartlist.split(",");
				//字符分割
				var idnofor = 1
				for ( i = 0; i < strs.length; i++) {
					if (strs[i] == id) {
						idnofor = 0;
					}
				}
				if (idnofor == 1) {
					cartlist = id + ',' + cartlist
					$api.setStorage('cartlist', cartlist);
					api.execScript({
						name : 'root',
						script : 'Mycart();'
					});
					api.toast({
						msg : '添加成功',
						location : 'middle'
					});
				} else {
					api.toast({
						msg : '商品已在清单',
						location : 'middle'
					});
				}
			} else {
				if (cartlist == id) {
					api.toast({
						msg : '商品已在清单',
						location : 'middle'
					});
				} else {
					cartlist = cartlist + ',' + id
					$api.setStorage('cartlist', cartlist);
					api.execScript({
						name : 'root',
						script : 'Mycart();'
					});
					api.toast({
						msg : '添加成功',
						location : 'middle'
					});
				}
			}

		}

	}

}

function Mycart() {
	var cartlist = $api.getStorage('cartlist');
	if (!cartlist) {
		$api.html($api.dom('#cartNum'), '0');
		$api.css($api.dom('#cartNum'), 'display:none');
	} else {
		var Cts = cartlist;
		if (Cts.indexOf(",") > 0) {
			var strs = new Array();
			//定义一数组
			strs = cartlist.split(",");
			//字符分割
			$api.html($api.dom('#cartNum'), strs.length);
			//alert(strs.length)
		} else {
			$api.html($api.dom('#cartNum'), '1');
		}
	}
}

Mycart()
// 更新购物车ID
function cart_list_id() {
	var cartlist = $api.getStorage('cartlist');
	if (cartlist) {
		$api.get(url + '/api/app/cartlist_id/' + cartlist, function(ret) {
			if (ret) {
				//ret=ret.replace('"','');
				$api.setStorage('cartlist', ret);
				//alert(ret);
			}
		}, 'text');
	}
	Mycart()

}



//去掉所有的html标记
function delHtmlTag(str) {
	return str.replace(/<[^>]+>/g, "");
}

// 加载提示
function showProgress() {
	api.showProgress({
		style : 'default',
		animationType : 'zoom',
		title : '努力加载中...',
		text : '先喝杯茶...',
		modal : false
	});
}

function loading() {
	api.hideProgress();
	api.refreshHeaderLoadDone();
}

function login() {
	api.openWin({
		name : 'login',
		url : login_win,
		animation : {
			type : "movein",
			subType : "from_bottom",
			duration : 300,
		},
	});
}

//会员主页
function user_index(uid) {
	api.openWin({
		name : 'u_index_win',
		url : html_win + 'u_index_win.html',
		pageParam : {
			uid : uid
		},
		reload : true,
		animation : {
			type : "movein",
			subType : "from_bottom",
			duration : 300,
		},
	});
}
