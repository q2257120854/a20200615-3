var fx_gurl = 'http://test.52jscn.com/';
var fx_cdn = 'http://qiniu.123444.cn/';
//var fx_gurl = 'http://192.168.1.105:8002/';
//var fx_cdn = 'http://192.168.1.105:8002/';
var fx_url = fx_gurl + 'index.php/';

var img_url = 'http://qiniu.123.cn/';

var html_win = 'widget://html/';
var _token = $api.getStorage('token');
var _user = $api.getStorage('user');
console.log(JSON.stringify(_user))

var _yejian;

var config_json = {
	"yaoqing": {
		"title": "每名徒弟奖励8元了，马上收徒",
		"msg": "徒弟每天阅读，都能向您进贡金币",
		"fenxiang_title": "分享标题",
		"fenxiang_content": "分享描述",
		"renwu": "签到领金币、开宝箱",
		"duihuan": "秒赚金币100倍",
		"money_yaoqing": "0.50",
		"money_yaoqing_s1": "0.30",
		"jinbi_yaoqing": "20",
		"jinbi_yaoqing_s1": "10",
		"money_login": "0.10",
		"money_login_s1": "0.10",
		"jinbi_login": "20",
		"jinbi_login_s1": "20",
		"money_news_num": "1",
		"money_news_time": 2000,
		"money_news": "",
		"money_news_s1": "",
		"jinbi_news": "20",
		"jinbi_news_s1": "10",
		"money_weitoutiao": "0.10",
		"money_weitoutiao_s1": "0.10",
		"jinbi_weitoutiao": "20",
		"jinbi_weitoutiao_s1": "10",
		"money_fenxiang_1": "0.20",
		"money_fenxiang_1_s1": "0.10",
		"jinbi_fenxiang_1": "20",
		"jinbi_fenxiang_1_s1": "10",
		"money_fenxiang_2": "0.20",
		"money_fenxiang_2_s1": "0.20",
		"jinbi_fenxiang_2": "20",
		"jinbi_fenxiang_2_s1": "10",
		"shouxufei": "3%"
	},
	"config": {
		"url": "http://test.52jscn.com",
		"title": "【小赚头条】为你私人定制的资讯客户端",
		"dtitle": "小赚头条",
		"logo": "/public/uploads/20170127/49a890dd7936d393476883091014dbb4.png",
		"keywords": "小赚头条，新闻资讯应用，头条，热点，科技，娱乐，健康，时尚，家居，教育，旅行，两性，美食，星座，阅读，个性化新闻",
		"description": "小赚头条是一款高度智能的新闻资讯应用，通过它你可以搜索并订阅任意关键词，它会自动帮你聚合整理并实时更新相关资讯，同时会智能分析你的兴趣爱好，为你推荐感兴趣的内容。看新闻资讯，每日头条就够了！",
		"phone": "0798-6300000",
		"qq": "612012",
		"switch": "1",
		"copyright": "<p>Copyright &amp;copy; 2016-2018&nbsp; 版权所有</p>"
	}
}


var _config = $api.getStorage('config');

if (!_config) {
	$api.setStorage('config', config_json);
}

console.log(JSON.stringify(_config))
if (!_token || !_user) {
	_uot();
}
if (_yejian) {
	$api.addCls($api.dom('body'), 'fx-yejian');
}
// 上拉滚动参数统一设置
var textDown = '下拉刷新...',
	textUp = '松开刷新...',
	bgColor = '#fff',
	textColor = '#000',
	visible = true,
	showTime = true,
	loadingImg = '',
	textLoading,
	textTime;


var exitStatu;

function keyback() {
	if (!exitStatu) {
		exitStatu = 1;
		api.toast({
			msg: "再按一次返回键退出"
		});
		setTimeout(function () {
			exitStatu = null;
		}, 2000)
	} else if (exitStatu == 1) {
		api.closeWidget({
			silent: true
		});
		//          MainClass.api_toLauncher();
	}
}

function _shangla(functions, refreshHeaderLoading) {
	api.parseTapmode();
	api.setRefreshHeaderInfo({
		visible: true,
		loadingImg: loadingImg,
		bgColor: bgColor,
		textColor: textColor,
		textDown: textDown,
		textUp: textUp,
		showTime: true,

	}, functions);
	// 第一次打开APP，自动执行刷新
	if (!refreshHeaderLoading) {
		api.refreshHeaderLoading();
	}
}

function viewA() {
	_ajax('api/member/info', function (ret, err) {
		if (ret) {
			$api.setStorage('user', ret.ret);
			_user = ret.ret
		} else {
			_uot()
			_alert('请重新登陆', function (ret, err) {
				_login();
			})
		}
	})
}



//设置距离底部多少距离时触发，默认值为0，数字类型
var threshold = 100;
//打开窗口
// pageParam 传递参数
// url 打开文件名
// d   默认读取html文件，若在文件在根目录读取html目录文件，需要填写第二个参数为空即可
function _url(pageParam, url, token) {
	//alert(url);
	if (token == true) {
		var userasd = $api.getStorage('user');
		if (!userasd) {
			_url({
				title: '会员登陆',
				url: 'login'
			})
			return;
		}
	}
	var nameUrl = url;
	if (!url) {
		url = 'win';
		nameUrl = pageParam.url;
		console.log(nameUrl)
	}
	if (url == 'photo_browser') {
		api.openWin({
			name: nameUrl,
			url: html_win + url + '.html',
			pageParam: pageParam,
			reload: true,
			animation: {
				type: "fade", //动画类型（详见动画类型常量）
				subType: "from_right", //动画子类型（详见动画子类型常量）
				duration: 300
			}
		});
	} else {
		api.openWin({
			name: nameUrl,
			url: html_win + url + '.html',
			pageParam: pageParam,
			reload: true,
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
	console.log(url)
	var type = '';
	if (data) {
		type = 'post';
	} else {
		type = 'get';
	}
	var token = $api.getStorage('token');
	// alert(token)
	console.log(token)
	if (token) {
		if (data) {
			var json = {};
			var json1 = data;
			var json2 = {
				token: token
			};
			json = eval('(' + (JSON.stringify(json1) + JSON.stringify(json2)).replace(/}{/, ',') + ')');
			data = json;
		} else {
			data = {
				token: token
			}
		}
		type = 'post';
	}
	//  alert(JSON.stringify(fx_url+url));
	console.log(JSON.stringify(fx_url + url))
	api.ajax({
		url: fx_url + url,
		method: type,
		data: {
			values: data
		},
		cache: true,
	}, callback);

}
//时间
// var timestamp;

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
function _lists(url, page, loading, data) {
	console.log(url)
	heigutgao = 0;
	var gz_url_ret = url.match('lists/typeid/999999999');
	// console.log(url_ret);

	// if (gz_url_ret) { //如果不是关注页面
	// 关闭滚动
	// _ajax(url + '?page=' + page, function (ret, err) {
	// 	if (ret) {

	// 		// <div class="aui-tips aui-text-center">今日头条推荐引擎有8条更新</div>
	// 		console.log(JSON.stringify(ret));

	// 		// alert(JSON.stringify(ret))
	// 		//			if(isContains(url,'api/article/lists/') && page==1){
	// 		//				$api.prepend($api.dom('body'),'<div class="aui-tips aui-text-center">今日头条推荐引擎有8条更新</div>');
	// 		//				_tipsDel();
	// 		//			}
	// 		if (loading == 1) { // 上拉刷新时  初始化参数
	// 			// 重置滚动统计
	// 			pagenum = heigutgao = 1
	// 			// 移除底部没有了
	// 			$api.remove($api.dom('#loadingNo'));
	// 			// 停止刷新
	// 			api.refreshHeaderLoadDone();
	// 		}
	// 		// 获取得到数据线删除底部加载提示
	// 		$api.remove($api.dom('.fx-dibu_loading'));
	// 		page_total = ret.total
	// 		//渲染模版
	// 		var evalData = doT.template($api.html($api.byId('fx-list')));
	// 		console.log(JSON.stringify(evalData))

	// 		if (loading == 1) { // 上拉刷新时 清空列表
	// 			$api.html($api.byId('fx-view'), '');
	// 		}
	// 		$api.append($api.byId('fx-view'), evalData(ret));
	// 		console.log(JSON.stringify($api.byId('fx-view')));
	// 		console.log(JSON.stringify(evalData(ret)));

	// 		//console.log(evalData(ret))
	// 		// 插入底部加载提示
	// 		page_per_page = Math.ceil(page_total / ret.per_page);
	// 		if (page_per_page <= page) {
	// 			heigutgao = 0 //关闭滚动
	// 			$api.append($api.byId('fx-view'), '<div id="loadingNo">已经到最底部啦~</div>')
	// 		} else {
	// 			$api.append($api.byId('fx-view'), '<div class="fx-dibu_loading load-container loadingdi"><div class="loader">loadingdi...</div></div>');
	// 			// 数据插入成功 设置 heigutgao=1 滚动才能继续加载
	// 			heigutgao = 1;
	// 		}
	// 		// 图片缓存本地
	// 		_imageCache();
	// 		api.parseTapmode();
	// 		//			api.toast({
	// 		//	            msg:'page_per_page:'+page_per_page+"\r\npage:"+page
	// 		//          });
	// 	} else {
	// 		$api.html($api.byId('fx-view'), "<div class='aui-text-center aui-margin-15'>" + err.msg + "</div>");
	// 		api.refreshHeaderLoadDone();
	// 		//alert(JSON.stringify(err))
	// 	}
	// }, data)
	// }
	//如果是首页关注
	api.sendEvent({name:'post_loadling',extra: ''});

	_ajax(url + '?page=' + page, function (ret, err) {
			api.sendEvent({name:'post_loaded',extra: ''});
		if (ret) {
			console.log(JSON.stringify(ret));
			var rdata = ret.data;
			var arr = [];
			for (r in rdata) {
				arr.push(rdata[r]);
			}
			ret.data = arr;
			console.log(JSON.stringify(ret));

			if (loading == 1) { // 上拉刷新时  初始化参数
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
			//alert(JSON.stringify(ret.awhere))
			//渲染模版
			var evalData = doT.template($api.html($api.byId('fx-list')));
			console.log(JSON.stringify(evalData))

			if (loading == 1) { // 上拉刷新时 清空列表
				$api.html($api.byId('fx-view'), '');
			}
			$api.append($api.byId('fx-view'), evalData(ret));
			//console.log(JSON.stringify($api.byId('fx-view')));
			console.log(JSON.stringify(evalData(ret)));

			//console.log(evalData(ret))
			// 插入底部加载提示
			page_per_page = Math.ceil(page_total / ret.per_page);
			if (page_per_page <= page) {
				heigutgao = 0 //关闭滚动
				$api.append($api.byId('fx-view'), '<div id="loadingNo">已经到最底部啦~</div>')
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
			$api.html($api.byId('fx-view'), "<div class='aui-text-center aui-margin-15'>" + err.msg + "</div>");
			api.refreshHeaderLoadDone();
			//alert(JSON.stringify(err))
		}
	}, data)






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
function _openFrame(url, header, footer, pageParam, useHi, bounces) {
	// 解析属性	消除点击300S 延时问题 tapmode
	api.parseTapmode();
	if (!useHi) {
		useHi = false;
	} else {
		useHi = true;
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
		$api.fixTabBar($api.byId('fx-footer'))
		footerh = $api.offset($api.byId('fx-footer')).h;
	}
	if (bounces) {
		bounces = false
	} else {
		bounces = true
	}
	api.openFrame({
		name: url,
		url: html_win + url + '.html',
		bounces: true,
		//showProgress : true,
		reload: true,
		rect: {
			x: 0,
			y: headerh,
			w: 'auto',
			h: body_h - headerh - footerh
		},

		//useWKWebView : true,
		//historyGestureEnabled : true,
		//		vScrollBarEnabled : false,
		//		hScrollBarEnabled : false,
		pageParam: pageParam,
	})

}

//返回上一页
function _close(heibai) {
	// var color;
	// if (stylesas == 2) {
	// 	stylesas = 'dark';
	// 	color = '#000';
	// } else if (stylesas == 1) {
	// 	stylesas = 'light';
	// 	color = '#fff';
	// }
	// api.setStatusBarStyle({
	// 	style: stylesas,
	// 	color: color,
	// });

	api.closeWin();
	_heibai(heibai)
}
// 图片缓存本地
function _imageCache(thumbnail) {
	if (!thumbnail) {
		thumbnail = false;
	}
	var srcs = $("img#ffxiangImgCache");
	if (srcs.length > 0) {
		for (var i = 0; i < srcs.length; i++) {
			(function (imgObj) {
				var imgUrl = imgObj.attr("ffxiang-src");
				imgObj.attr("src", imgUrl);
				// console.log(JSON.stringify(imgObj))
				imgObj.removeAttr('id')
				imgObj.removeAttr('ffxiang-src')
				//				api.imageCache({
				//					url : imgUrl,
				//					thumbnail:thumbnail,
				//				}, function(ret, err) {
				//					if (ret) {
				//						if (!ret.status) {
				//							ret.url = imgUrl
				//						}
				//						imgObj.attr("src", ret.url);
				//						imgObj.removeAttr('id')
				//						imgObj.removeAttr('ffxiang-src')
				//					}
				//				});
			})($(srcs[i]));
		}
	}
}

// 底部4个按钮跳转文件
// id 0首页 1视频 2关注 3我的
function _index_win(url) {

	api.openWin({
		name: url,
		url: html_win + url + '.html',
		animation: {
			type: "none",
		},
		slidBackEnabled: false,
	});
	if (url == 'video_win' || url == 'weitoutiao_win') {
		_heibai(1)
	} else if (url == 'member_win') {
		_heibai()
	}
}
// 刷新首页
function _shuaxin(index) {
	//	api.refreshHeaderLoading();
	if(index == 0){
		api.sendEvent({	name: 'newsclick',extra: 'click'});
	}
	if(index == 1){
			api.sendEvent({	name: 'videoclick',extra: 'click'});
	}
	if(index == 2){
			api.sendEvent({	name: 'weitoutiaoclick',extra: 'click'});
	}
}

// 跳到主页
function _hone() {
	_heibai()
	playModule = api.require('playModule');
	playModule.cleanPlayers(function(ret, err) {
			console.error(JSON.stringify(ret));
	});
	api.openWin({
		// name : 'root',
		name: 'ffxiang_win',
		animation: {
			type: 'none',
		},
		slidBackEnabled: false
	})
	return;
	//	api.closeToWin({
	//		name : 'root',
	//		animation : {
	//			type : 'none',
	//		}
	//	});
}

// 弹出提示
function _alert(title, functions, msg) {
	api.alert({
		msg: title,
		title: msg,
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
		msg: title,
		duration: location,
		location: duration
	});
}

//loading层
function _loading(title) {
	if (!title) {
		title = '努力加载中...';
	}
	api.showProgress({
		title: title,
		text: '先喝杯茶...',
		modal: true,
		animationType: 'zoom',
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
function _set(key, value) {
	api.setPrefs({
		key: key,
		value: value
	});
}
// 服装读取数据
function _get(key, sync) {
	if (!sync) {
		sync = true
	} else {
		sync = false
	}
	var token = api.getPrefs({
		sync: false,
		key: key
	});
	if (token) {
		token = eval('(' + token + ')');
	}
	return token;
}
// 退出登录
function _uot() {
	$api.rmStorage('token')
	$api.rmStorage('user')
	_user = ''
	_token = '';
}
// 通用列表
function _ffxiangList(url, data) {
	_ajax(url, function (ret, err) {
		if (ret) {
			var evalData = doT.template($('#fx-list').html());
			$('#fx-view').append(evalData(ret))
			// 图片缓存本地
			_imageCache();
		}
	}, data)
}
// 会员登陆
function _login() {
	_url({
		url: 'login',
		title: '登陆'
	})
}
// 更新会员数据
function _userInfo() {
	_ajax('api/member/info', function (ret, err) {

		//console.info("更新会员数据" + JSON.stringify(ret))
		//console.info("更新会员数据" + JSON.stringify(err))
		if (ret) {
			if (ret.ret) {
				$api.setStorage('user', ret.ret);
			} else {
				_uot()
			}
		} else {
			alert(JSON.stringify(err));
			_uot()
		}
	})
}
// 夜间
function _yejians() {
	console.log(_yejian)
	if (_yejian) {
		// $api.rmStorage('yejian')
		$api.removeCls($api.dom('body'), 'fx-yejian')
		_yejian = 0;

	} else {
		$api.addCls($api.dom('body'), 'fx-yejian')
		_yejian = 1;

	}
	$api.setStorage(_yejian);
	_heibai()
}
// 黑白状态
function _heibai(type) {
	if (type == 1) {
		api.setStatusBarStyle({
			style: 'dark',
		});
	} else if (type != 3 || !type || type == 0) {
		api.setStatusBarStyle({
			style: 'light',
		});
	}
}

function _clto_win(winname) {
	   //alert(winname);

    //api.closeWin({name:'smallvideo'});
		if(winname == 'home'){
      _hone();
		}else{
			_index_win(winname)
		}
		//api.closeWin({name:'smallvideo'});
		//setTimeout("api.closeWin({name:'smallvideo'})",1000);

}

function _share_post() {


	var shareid = $api.getStorage('shareid');
	if(!shareid){
		return;
	}
	var getName = $api.getStorage('shareid'+shareid);
	if (getName && getName == _myDate()) {
		console.log('分享'+shareid + ':停止')
		return;
	}

	_ajax('api/yaoqing/share_post/id/' + shareid, function (ret, err) {
		if (ret) {
			console.log(JSON.stringify(ret) + JSON.stringify(err))
			//	alert(JSON.stringify(ret)+JSON.stringify(err))
			//			return;
			if (ret && ret.status) {
				$api.setStorage('shareid'+shareid, _myDate());
				var amount = _config.yaoqing.jinbi_article_share;
				api.toast({msg : '加'+amount+'金币',location: 'top'});
			}
		} else {
			console.log(JSON.stringify(err))
		}
	})

}


// 每日奖励
//'title'					=>		'每名徒弟奖励8元了，马上收徒',		// 我的  标题
//'msg'						=>		'徒弟每天阅读，都能向您进贡金币',	// 我的  提示
//'fenxiang_title'			=>		'分享标题',
//'fenxiang_content'		=>		'分享描述',
//'money_yaoqing'			=>		'0.50',			// 徒弟邀请成功奖励
//'money_yaoqing_s1'		=>		'0.30',			// 师傅邀请成功奖励
//'money_login'				=>		'0.10',			// 徒弟每日登录奖励
//'money_login_s1'			=>		'0.10',			// 师傅每日登录奖励
//'money_news'				=>		'0.10',			// 徒弟每日浏览5篇内容奖励
//'money_news_s1'			=>		'0.10',			// 师傅每日浏览5篇内容奖励
//'money_add'				=>		'0.10',			// 徒弟每日发布微头条奖励
//'money_add_s1'			=>		'0.10',			// 师傅每日发布微头条奖励
//'money_mobile'			=>		'0.50',			// 徒弟绑定手机奖励人民币
//'money_mobile_s1'			=>		'0.30',			// 师傅绑定手机奖励人民币
//'money_fenxiang_1'		=>		'0.20',			// 徒弟邀请师徒页面每日分享奖励
//'money_fenxiang_1_s1'		=>		'0.10',			// 师傅邀请师徒页面每日分享奖励
//'money_fenxiang_2'		=>		'0.20',			// 徒弟每日分享文章奖励
//'money_fenxiang_2_s1'		=>		'0.20',			// 师傅师傅每日分享文章奖励
//'shouxufei'				=>		'1%',			// 提现手续费
function _daily(data) {
	//	console.log('data.name：'+data.name)
	// alert(JSON.stringify($api.getStorage('config')));
	var yaoqing = $api.getStorage('config').yaoqing;
	// alert(JSON.stringify(yaoqing))
	if (!yaoqing) {
		return;
	}

	if (!$api.getStorage('user') || !data) {
		return;
	}
	if (!data.name) {
		return;
	}

	//每篇文章分享奖励
  if(data.name == 'money_fenxiang_2'){
     //_share_post();
	}

	var getName = $api.getStorage(data.name);
	if (getName && getName == _myDate()) {
		console.log(data.name + ':停止')
		return;
	}
	// 登录奖励
	if (data.name == 'money_login') {
		if (!yaoqing.money_login && !yaoqing.money_login_s1) {
			return;
		}
		//		if(getName && getName == _myDate()){
		//			console.log(data.name+':停止')
		//			return;
		//		}
	}
	// 阅读奖励
	if (data.name == 'money_news') {
		if (!yaoqing.money_news_num) {
			return;
		}
		if (!yaoqing.money_news && !yaoqing.money_news_s1) {
			return;
		}
		//		if(getName && getName == _myDate()){
		//			console.log(data.name+':停止')
		//			return;
		//		}
	}

	_ajax('api/yaoqing/daily/type/' + data.name, function (ret, err) {
		if (ret) {
			console.log(JSON.stringify(ret) + JSON.stringify(err))
			//	alert(JSON.stringify(ret)+JSON.stringify(err))
			//			return;
			if (ret.ret) {
				$api.setStorage(data.name, _myDate());
				api.openFrame({
					name: 'hongbao',
					url: html_win + 'hongbao.html',
					bounces: false,
					rect: {
						x: 0,
						y: 0,
						w: 'auto',
						h: 'auto'
					},
					useWKWebView: true,
					bgColor: 'rgba(0,0,0,0)',
					pageParam: ret.ret,
					animation: {
						type: "fade", //动画类型（详见动画类型常量）
						subType: "from_bottom", //动画子类型（详见动画子类型常量）
						duration: 300 //动画过渡时间，默认300毫秒
					}
				})
			} else {
				console.log(JSON.stringify(ret.err))
			}
		} else {
			console.log(JSON.stringify(err))
		}
	})
}
// 获取时间
function _myDate() {
	var myDate = new Date(); //获取系统当前时间
	var myTime = myDate.getFullYear() + (myDate.getMonth() + 1) + myDate.getDate();
	console.log('myTime:' + myTime)
	return myTime;
}
// 验证手机号码
function _isMobile(mobile) {
	if (mobile == "") {
		return false;
	} else {
		if (!/^0{0,1}(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[0-9])[0-9]{8}$/.test(mobile)) {
			return false;
		}
		return true;
	}
}


function _open_smallvideo(win){
	api.closeWin({name:'smallvideo'});
	api.showProgress({  modal: false});
	var timestamp = Date.parse(new Date());
	timestamp = timestamp / 1000;
	/*
	var vids = [];
	var vidsstr = '';
	var xsp_sj = $api.getStorage('xsp_sj');
	if(xsp_sj && xsp_sj.length>0){
      for(i in xsp_sj){
          vids.push(xsp_sj[i].id);
			}
			vidsstr = vids.join(',');
	}
	*/


	$api.post(fx_url+'api/article/lists/mychannel/4/date/'+timestamp, {
			values: {
				page: 1,
				vids: '',
			}
		}, function(ret){
			api.hideProgress();
			if(ret.data){
				$api.setStorage('xsp_sj', ret.data);
				$api.setStorage('xsp_sj_time', timestamp);
				$api.setStorage('xsp_sj_page', 1);
				_index_win('smallvideo');
			}
		})
}


function altips3(tips){
	api.openFrame({
		name: 'tips',
		url: html_win + 'tips.html',
		bounces: false,
		rect: {
			x: 0,
			y: 0,
			w: 'auto',
			h: 'auto'
		},
		useWKWebView: true,
		bgColor: 'rgba(0,0,0,0)',
		pageParam: tips,
		animation: {
			type: "fade", //动画类型（详见动画类型常量）
			//subType: "from_bottom", //动画子类型（详见动画子类型常量）
			duration: 300 //动画过渡时间，默认300毫秒
		}
	});

	setTimeout("api.closeFrame({name: 'tips'});",2000);

}
