// 锦尚中国技术开发 QQ 1013175107
// 提示
function _msg(text){
    layer.msg(text);  
}
function _ajax(url,success,data){

    var type = '';
    if (data) {
        type = 'post';
    } else {
        type = 'get';
    }
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
    $.ajax({
        url : url,
        type : type,
        data:data,
        dataType:'json',
        success : success,
    })
}
// 通用列表
function _list(url,data){
    layui.use('flow', function(){
        layui.flow.load({
            elem: '#fx-view',   // 选择器
            done: function(page, next){
                // 读取数据
                if(!data){
                    data='';
                }
                _ajax(url+'?page='+page,function(ret){
                    if(ret){
                        //渲染模版
                        var evalData = doT.template($('#fx-list').html());
                        next(evalData(ret), page < ret.total / ret.per_page );
                    }else{
                        next('',0);
                    }
                },data)     
            }
        });
    });
}
// 跳转
function _url(url){
    window.location.href=url;
}
// 加载提示
function _loading(){
    var index = layer.load(0, {shade: [0.1,'#000']});
}
// 关闭提示
function _loadingCloes(){
    layer.close(layer.index)
}
// 关注用户
function _guanzhu(thiss){
	if(!token){
		_msg('请先登录')
		return;
	}
	var type=$(thiss).data('type'); //0关注 1已关注
	var gz_uid=$(thiss).data('uid');
	if(!gz_uid){return _msg('操作失败');}
	_loading()
	_ajax(type==0 ? '/api/member/guanzhu' : '/api/member/guanzhuDel',function(ret){
		_loadingCloes()
		var text
		if(ret.ret){
			text=ret.ret
		}else{
			text=ret.err
		}
		_msg(text)
		if(type==0){
			$(thiss).text('已关注');
			$(thiss).data('type',1);
		}else{
			$(thiss).text('关注');
			$(thiss).data('type',0);
		}
	},{gz_uid:gz_uid})
}