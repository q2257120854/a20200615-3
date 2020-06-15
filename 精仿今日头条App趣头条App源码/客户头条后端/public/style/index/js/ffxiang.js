function _ajax(url,type,data,ret,dataType,err){
	type=type ? type : 'get';
	url=url ? url : '';
	data=data ? data : '';
	dataType=dataType ? dataType :'json'
    $.ajax({
        type: type,
        url: url,
        data: data,
        dataType: dataType,
        success:ret,
        error:err
    });
}
