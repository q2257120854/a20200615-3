/*
 * 367dns JavaScript Library
 * Copyright (c) 2014 367dns.com
 */



function openWin (winname,path,Param) {

    var delay = 0;
     if(api.systemType != 'ios'){
            delay = 300;
    }

	api.openWin({
		name:winname,
		url: path,
		vScrollBarEnabled:false,
		delay:delay,
		allowEdit:true,
		pageParam:Param
	});
}

function closewin (winname) {
	api.closeWin({name:winname});
}

function ajaxstart (offset,refresh) {
	if(offset == 1){if(refresh == 0){api.showProgress()};}else{ $(".loadingdi").removeClass('aui-hide');}
}
function ajaxstop (offset,refresh) {
	if(offset == 1){if(refresh == 0){api.hideProgress();}else{api.refreshHeaderLoadDone();}}else{  $(".loadingdi").addClass('aui-hide');}
}



function data_update(){
   apiready();
}
