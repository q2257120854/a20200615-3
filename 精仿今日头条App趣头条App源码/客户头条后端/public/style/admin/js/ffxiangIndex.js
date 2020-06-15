//URL跳转
function winurl(url){
    layer.load(0, {time:30000,shade: [0.5,'#000']});
    window.location.href=url; 
}
//弹出提示
// title 标题
// text 描述  ,
// type错误提示 success成功 error错误
// url 跳转连接  1刷新当前页面
function swal_msg(title,text,type,url){
    swal({
        title: title,
        text: text,
        type: type,
    },function(ret){
        if(ret){
            if(url){
                if(url==1){
                    self.location.reload();
                }else if(url==-1){
                    parent.self.location.reload();
                    var index = parent.layer.getFrameIndex(window.name); 
                    parent.layer.close(index);
                }else if(url==0){
                     
                }else{
                    winurl(url)
                }
            }
        }
    })
}
// type 提交参数 post get
// url 地址 
// data 字段
// dataType 输入参数 json
// success 成功回调  ret 
// error  失败回调 err
function ajaxFun(type,url,data,dataType,success,error){
    $.ajax({
        type: type,
        url: url,
        data: data,
        dataType: dataType,
        success:success,
        error:function(err){
           // swal_msg("错误",JSON.stringify(err),"error");
           alert(JSON.stringify(err))
        }
    });
}
// 加载提示
function loading(css,title){
    if(!title){
        title='提交中...';
    }
    $(css).html(title)
    $(css).attr({"disabled":"disabled"});
}
// 结束提示
function loadingClose(css,title){
    if(!title){
        title='提交';
    }
    $(css).html(title);
    $(css).removeAttr("disabled");//将按钮可用
}
// id 字段
// url 地址
// data  无
function swal_del(id,url,data){
    swal({
        title: "您确定要删除这条信息吗",
        text: "删除后将无法恢复，请谨慎操作！",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "删除",
        cancelButtonText: "不删除",
    },
    function(isConfirm) {
        if (isConfirm) {
            var index = layer.load(1, {
             // shade: [0.1,'#fff'] //0.1透明度的白色背景
            });
            ajaxFun("post",url,{id:id},'json',function(ret){
                if(ret){
                    if(ret.ret){
                        layer.msg(ret.ret)
                        $("#id"+id).hide('fast',function(){
                             $("#id"+id).remove();
                        })
                    }else{
                        layer.msg(ret.err)
                    }
                }else{
                    swal_msg("错误",ret,"error");
                }
                layer.close(index); 
            })
        }
    })
}
// id 字段
// url 地址
// data  无
function swal_delAll(data,url,reload){
    swal({
        title: "您确定要删除这条信息吗",
        text: "删除后将无法恢复，请谨慎操作！",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "删除",
        cancelButtonText: "不删除",
    },
    function(isConfirm) {
        if (isConfirm) {
            var index = layer.load(1);
            ajaxFun("post",url,data,'json',function(ret){
                if(ret){
                    if(ret.ret){
                        if(reload=='1'){
                            self.location.reload();
                        }else{
                            layer.msg(ret.ret)
                            $("#id"+id).hide('fast',function(){
                                 $("#id"+id).remove();
                            })
                        }  
                    }else{
                        layer.msg(ret.err)
                    }
                }else{
                    swal_msg("错误",ret,"error");
                }
                layer.close(index); 
            })
        }
    })
}
function layerOpen(type,title,shadeClose,shade,area,skin,shift,content){
    if(!type){type=2}                   // layer提供了5种层类型。可传入的值有：0（信息框，默认）1（页面层）2（iframe层）3（加载层）4（tips层）。 若你采用layer.open({type: 1})方式调用，则type为必填项（信息框除外）
    if(!title){title=false}             // title支持三种类型的值，若你传入的是普通的字符串，如title :'我是标题'，那么只会改变标题文本；若你还需要自定义标题区域样式，那么你可以title: ['文本', 'font-size:18px;']，数组第二项可以写任意css样式；如果你不想显示标题栏，你可以title: false
    if(!shadeClose){shadeClose=true}    //如果你的shade是存在的，那么你可以设定shadeClose来控制点击弹层外区域关闭。
    if(!shade){shade=0.2}               // 透明色
    if(!area){area='auto'}              // 在默认状态下，layer是宽高都自适应的，但当你只想定义宽度时，你可以area: '500px'，高度仍然是自适应的。当你宽高都要定义时，你可以area: ['500px', '300px']
    if(!skin){skin='shangchuantup'}     // 自定义样式class
    if(!shift){shift=1}                 // 从1.9开始，我们的出场动画全部采用CSS3。这意味着除了ie6-9，其它所有浏览器都是支持的。目前shift可支持的动画类型有0-6
    if(!content){content=false}              //content可传入的值是灵活多变的，不仅可以传入普通的html内容，还可以指定DOM
    layer.open({
      type: type,
      title: title,
      shadeClose: shadeClose,
      shade: shade,
      area: area,
      skin:skin,
      shift:shift,
      content: content,
    }); 
}
// id 字段
// url 地址
// data  无
function hide(id,url){
    var index = layer.load(1, {
     // shade: [0.1,'#fff'] //0.1透明度的白色背景
    });
    var text='';
    ajaxFun("post",url,{id:id},'json',function(ret){
        if(ret){
            if(ret.ret){
                $("#id"+id+' #hide').text(ret.text);
                if(ret.id==1){
                    text='隐藏';
                }else{
                    text='显示';
                }
                $("#id"+id+' #hides a').text(text);
                layer.msg(ret.ret)
            }else{
                layer.msg(ret.err)
            }
        }else{
            swal_msg("错误",ret,"error");
        }
        layer.close(index); 
    })
}