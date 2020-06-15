//
var chat_newmsessage={
  _step: 0,
  _title: document.title,
  _timer: null,
  //显示新消息提示
  show: function() {
      var temps = chat_newmsessage._title.replace("【　　　】", "").replace("【新消息】", "");
      chat_newmsessage._timer = setTimeout(function() {
          chat_newmsessage.show();
          chat_newmsessage._step++;
          if (chat_newmsessage._step == 3) {
              chat_newmsessage._step = 1
          };
          if (chat_newmsessage._step == 1) {
              document.title = "【　　　】" + temps
          };
          if (chat_newmsessage._step == 2) {
              document.title = "【新消息】" + temps
          };
      },
      800);
      return [chat_newmsessage._timer, chat_newmsessage._title];
  },
  //取消新消息提示
  clear: function() {
      clearTimeout(chat_newmsessage._timer);
      document.title = chat_newmsessage._title;
  }
};
var apps_message_init=function(){
  $('.apps-message').each(function(i){
    var host=$(this).attr('data-host');
    var userid=$(this).attr('data-userid');
    var room=$(this).attr('data-room');
    var id='apps-message-'+i;
    $(this).attr('data-id',id);
    if(typeof window.sockets=='undefined'){
      window.sockets={};
    }
    window.sockets[id]=io.connect(host);
    var socket=window.sockets[id];
    socket=io.connect(host); 
    socket.apps_message_id=id;
    socket.on('getmsg',function(item){
      var box=$('.apps-message[data-id="'+this.apps_message_id+'"]');
      var userid=box.attr('data-userid');
      
      if(item.id_to==userid && typeof item.msgtype!='undefined' && item.msgtype=='talk'){
        setTimeout(function(){
          $.post('?mod=group.php&_onez=chat.group.plugin.talk%7C%2Fonez.php%3Fuserid%3D%26&miniwin=1',{action:'getmsg',msgid:item.id},function(o){
            if(typeof o.newmsg!='undefined'){
              var app=apps_add('uid',o.newmsg.uid,o.newmsg.uname,o.newmsg.avatar);
              app.addClass('animated infinite flash');
              $('.btn-lastusers').addClass('animated infinite flash');
              $(document).trigger('chat-newmsg-tip');
            }
          },'json');
        },1000);
      }
    });
    socket.on('welcome', function(item,e) {
      var box=$('.apps-message[data-id="'+this.apps_message_id+'"]');
      var userid=box.attr('data-userid');
      var room=box.attr('data-room');
      this.emit('join',{uid:''+userid,room:room});
      this.emit('getRoomList',{});
    });
  });
};
var openWin2=function(url,width,height){
  if(typeof width=='undefined' || isNaN(width)){
    width=800;
  }
  height=parseInt(height+'');
  if(typeof height=='undefined' || isNaN(height)){
    height=600;
  }
  height=parseInt(height+'');
  
  window.open(url,'',"toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width="+width+",height="+height+",left="+(screen.width-width)/2+",top="+(screen.height-height)/2);
};
$(function(){
  apps_message_init();
  var btn_last=$('<button type="button" class="btn-lastusers btn btn-success" style="margin-right:5px">最近联系人</button>').insertBefore($('.home .pull-right .btn-danger'));
  btn_last.bind('click',function(){
    openWin2('?mod=group.php&_onez=chat.group.plugin.talk%7C%2Flast.php%3Fminiwin=1',1000);
    setTimeout(function(){
      $.post('?mod=group.php&_onez=chat.group.plugin.talk%7C%2Fonez.php%3Fuserid%3D%26&miniwin=1',{action:'newmsg'},function(o){
        if(typeof o.newmsg!='undefined'){
          $('.btn-lastusers').attr('title',o.newmsg.title).addClass('animated infinite flash');
        }else{
          $('.btn-lastusers').removeAttr('title').removeClass('animated infinite flash');
        }
      },'json');
    },1000);
  });
  window.chat_current_window=false;
  $(document).bind('chat-newmsg-tip',function(e,data){
    if(!window.chat_current_window){
      chat_newmsessage.show();
      if(typeof onezphp!='undefined'){
        onezphp.tip(data.nickname+':'+data.message);
        onezphp.blink('您收到一条新的消息');
      }
    }
  });
  $(window).bind('focus click',function(){
    window.chat_current_window=true;
    chat_newmsessage.clear();
    if(typeof onezphp!='undefined'){
      onezphp.blink('');
    }
  });
  $(window).bind('blur',function(){
    window.chat_current_window=false;
  });
  
  $('.onez-miniwin[data-href]').unbind('click').bind('click',function(){
    var href=$(this).attr('data-href');
    var gid=href;
    if(gid.indexOf('groupid=')!=-1){
      gid=gid.split('groupid=')[1];
    }
    if(gid.indexOf('&')!=-1){
      gid=gid.split('&')[0];
    }
    var width=parseInt($(this).attr('data-width'));
    var height=parseInt($(this).attr('data-height'));
    window.open(href,"group-"+gid,"toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width="+width+",height="+height+",left="+($(window).width()-width)/2+",top="+($(window).height()-height)/2);
  });
  return;
  var min=$('<button type="button" class="close btn-min"><i class="glyphicon glyphicon-resize-min" style="font-size: 20px;margin:3px"></i></button>').insertBefore('#hide-miniwin .modal-title').click(function(){
    var dialog=$(this).parents('#hide-miniwin');
    var gid=dialog.find('#NoPermissioniframe').attr('src');
    if(gid.indexOf('groupid=')!=-1){
      gid=gid.split('groupid=')[1];
    }
    if(gid.indexOf('&')!=-1){
      gid=gid.split('&')[0];
    }
    var title=dialog.find('h4.modal-title').text();
    var avatar=dialog.find('h4.modal-title img').attr('src');
    dialog.attr('data-dialog-gid',gid);
    apps_add('gid',gid,title,avatar);
    dialog.ani('zoomOutRight');
    setTimeout(function(){
      dialog.hide();
    }, 1000);
  });
  
});
var apps_update=function(){
  $('div.apps .app-item').unbind('click').bind('click',function(){
    var idtype=$(this).attr('data-idtype');
    var id=$(this).attr('data-id');
    $(this).remove();
    if($('[data-dialog-'+idtype+'="'+id+'"]').length<1){
      if(idtype=='uid'){
        var href='?mod=group.php&_onez=chat.group.plugin.talk%7C%2Fdialog.php%3Fuserid%3D'+id+'%26&miniwin=1';
        var width=640;
        var height=480;
        window.open(href,"user-"+id,"toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width="+width+",height="+height+",left="+($(window).width()-width)/2+",top="+($(window).height()-height)/2);
      }else if(idtype=='gid'){
        
      }
      return;
    }
    $('[data-dialog-'+idtype+'="'+id+'"]').show();
  });
};
var apps_add=function(idtype,id,name,avatar){
  var app=$('.app-item[data-idtype="'+idtype+'"][data-id="'+id+'"]');
  if(app.length>0){
    return app;
  }
  var item=$('<div class="app-item" data-idtype="'+idtype+'" data-id="'+id+'"></div>');
  $('<div class="app-item-icon"><img src="'+avatar+'"></div>').appendTo(item);
  $('<h3>'+name+'</h3>').appendTo(item);
  item.appendTo('div.apps');
  item.ani('zoomInDown');
  item.attr('title',name);
  apps_update();
  return item;
};
if($('div.apps').length<1){
  $('<div class="apps"></div>').appendTo('body');
}
apps_update();
var talkTo=function(uid,uname,avatar){
  var app=$('[data-idtype="uid"][data-id="'+uid+'"]');
  if(app.length>0){
    app.trigger('click');
    return;
  }
  var href='?mod=group.php&_onez=chat.group.plugin.talk%7C%2Fdialog.php%3Fuserid%3D'+uid+'%26&miniwin=1';
  openWin2(href,640,480);
  return;
  
  var newDlg=$('.modal-dialog-user').clone().appendTo('body');
  newDlg.attr('data-dialog-uid',uid);
  newDlg.attr('data-dialog-uname',uname);
  newDlg.attr('data-dialog-avatar',avatar);
  newDlg.find('.modal-dialog').css({width:w+'px',height:h+'px'});
  newDlg.find('.modal-body').css({padding:'0px'});
  newDlg.find('iframe').attr("src", href);
  newDlg.show();
  newDlg.find('.btn-close').click(function(){
    closeTalk($(this).parents('[data-dialog-uid]').attr('data-dialog-uid'));
  });
  newDlg.find('.btn-min').click(function(){
    var dialog=$(this).parents('[data-dialog-uid]');
    //dialog.hide();
    apps_add('uid',dialog.attr('data-dialog-uid'),dialog.attr('data-dialog-uname'),dialog.attr('data-dialog-avatar'));
    dialog.ani('zoomOutRight');
    setTimeout(function(){
      dialog.hide();
    }, 1000);
  });
  newDlg.find('.btn-max').click(function(){
    $(this).parents('[data-dialog-uid]').addClass('modal-full');
  });
  newDlg.find('.btn-small').click(function(){
    $(this).parents('[data-dialog-uid]').removeClass('modal-full');
  });

  var myifmcss={height:h-50+'px'};//iframe样式
  newDlg.find('.modal-content').css({height: '100%',width: '100%'}).find('h4').html(uname||"").end().find('.modal-body').find("iframe").css(myifmcss).attr('data-height',h-50);
}
function closeTalk(uid){
  $('.modal-dialog-user[data-dialog-uid="'+uid+'"]').remove();
}