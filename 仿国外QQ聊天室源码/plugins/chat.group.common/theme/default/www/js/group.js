var onezgroup=function(box,option){
  var that=this;
  if(typeof option!='object'){
    option={};
  }
  that.options=option;
  that.online=0;
  that.box=$(box);
  that.box.attr('data-groupid',option.groupid);
  that.box.bind('chat-doit',function(e,data){
    var groupid=$(this).attr('data-groupid');
    if(groupid!=data.groupid){
      return;
    }
    that.sendmsg({
      type:'doit',
      event:data,
    });
  });
  that.box.bind('chat-print',function(e,data){
    var groupid=$(this).attr('data-groupid');
    if(groupid!=data.groupid){
      return;
    }
    that.print(data);
  });
  that.box.bind('chat-event',function(e,data){
    var groupid=$(this).attr('data-groupid');
    if(groupid!=data.groupid){
      return;
    }
    if(data.action=='at'){
      that.at=data.userid;
      that.box.find('.inputbox').val('@'+data.nickname+' ');
      return;
    }
    $.post(window.location.href,data,function(o){
      if(typeof o.error!='undefined'){
        onez.alert(o.error);
      }
      if(typeof o.print!='undefined'){
        that.print(o.print);
      }
      if(typeof o.msg!='undefined'){
        that.sendmsg(o.msg);
      }
    },'json');
  });
  that.box.bind('chat-file',function(e,data){
    that.AddImage();
    that.box.find('.inputbox').val('[img]'+data+'[/img]');
    that.send();
  });
  that.resize=function(){
    var winW=$(window).innerWidth();
    var winH=$(window).innerHeight();
    var headerH=$('.chat-header').height();
    var footerH=$('.chat-footer').height();
    var BodyH=winH-headerH;
    var mainH=BodyH;
    var mainW=winW;
    if(!that.box.hasClass('noright')){
      mainW-=that.options.width_right;
    }
    var showboxH=mainH-footerH;
    showboxH-=that.box.find('.ad_pc_mt').height();
    showboxH-=that.box.find('.ad_pc_mb').height();
    var userlistH=winH-that.box.find('.userlist dd').offset().top;
    
    that.box.find('.chat-body').height(BodyH);
    that.box.find('.chat-main').width(mainW);
    that.box.find('.showbox').height(showboxH);
    that.box.find('.inputbox').width(mainW-10);
    that.box.find('.userlist dd').height(userlistH);
    that.box.find('.frame').width(winW).height(mainH);
    //that.box.find('.box_font').css({top:that.box.find('.chat-footer').offset().top-that.box.find('.box_font').height()-5+'px'});
  };
  that.connect=function(host,room,userid){
    that.userid=userid;
    that.socket= io.connect(host); 
    that.socket.on('getmsg',function(item) {
      if(typeof onez.plugin_getmsg=='function'){
        item=onez.plugin_getmsg=item;
      }
      //console.log(item);
      if(item.type=='in'){
        $(document).trigger('chat-in',item);
        that.socket.emit('getRoomList',{});
      }else if(item.type=='out'){
        $(document).trigger('chat-out',item);
        that.socket.emit('getRoomList',{});
      }else if(item.type=='doit'){
        var event=item.event;
        if(typeof event.tip!='undefined'){
          that.print({msgid:Math.random(),type:'system',text:event.tip});
        }
        if(event.action=='notice'){
          $.post(window.location.href,{action:'notice'},function(o){
            that.box.find('.chat-notice-box').html(o.notice);
          },'json');
        }else if(event.action=='tickout'){
          that.box.find('.userlist li[data-uid="'+event.userid+'"]').remove();
          if(event.userid==that.userid){
            that.options.status='tickout';
            try{
              parent.closeWin();
            }catch(e){
            }
            location.href='?';
          }
        }else if(event.action=='lock'){
          if(event.userid==that.userid){
            that.options.status='lock';
          }
        }else if(event.action=='setname'){
          if(typeof that.users[event.userid]!='undefined'){
            delete that.users[event.userid];
          }
          that.box.find('.userlist li[data-uid="'+event.userid+'"]').remove();
          that.socket.emit('getRoomList',{});
        }else if(event.action=='alert'){
          if(event.userid=='0'||event.userid==that.userid){
            alert(event.alert);
          }
        }else if(event.action=='reload'){
          if(event.userid=='0'||event.userid==that.userid){
            location.reload();
          }
        }else if(event.action=='logout'){
          if(event.userid=='0'||event.userid==that.userid){
            location.href='?mod=/exit.php&goto='+encodeURIComponent(location.href);
          }
        }else if(event.action=='userlist_update'){
          that.users={};
          that.box.find('.userlist li[data-uid]').remove();
          that.socket.emit('getRoomList',{});
        }else if(event.action=='che'){
          if(typeof event.msgid!='undefined'){
            that.box.find('.showbox .msg-item[data-msgid="'+event.msgid+'"]').remove();
          }
          if(typeof event.userid!='undefined'){
            that.box.find('.showbox .msg-item[data-userid="'+event.userid+'"]').remove();
          }
        }else if(event.action=='lockall'){
          that.options.index5=event.status+'';
          that.box.find('.event-lockall').removeClass('event-lockall-0').removeClass('event-lockall-1').addClass('event-lockall-'+event.status);
        }else if(event.action=='setdata'){
          for(var k in event.data){
            that.options[k]=event.data[k];
          }
        }
      }else if(item.type=='getmsg'){
        var msg={
          type:'user',
          msgid:item.id,
          nickname:item.nickname,
          style:item.style,
          message:item.message,
          time:item.time,
          isnew:true
        };
        if(userid==item.userid){
          msg.type='me';
        }
        that.print(msg);
      }
    });
    that.socket.on('welcome', function (item) {
      that.socket.emit('join',{uid:''+userid,room:room});
      that.socket.emit('getRoomList',{});
    });
    that.socket.on('roomlist', function (item) {
      that.roomlist_update(item);
    });
  };
  that.users={};
  that.newuids={};
  that.roomlist_update=function(item){
    if(typeof item=='undefined'){
      return;
    }
    if(typeof item.uids=='undefined'){
      return;
    }
    that.box.find('.userlist li[data-uid]').addClass('offline');
    that.online=item.uids.length;
    for(var i=0;i<item.uids.length;i++){
      that.adduser(item.uids[i]);
    }
    that.loaduser();
    if(that.options.mode=='chat'){
      that.box.find('.userlist li.offline[data-uid]').remove();
    }
    that.box.find('.userlist li[data-uid].offline').each(function(){
      var uid=$(this).attr('data-uid');
      if(uid.indexOf('U')!=-1){
        $(this).removeClass('offline');
        $(this).prependTo(that.box.find('.userlist-user'));
        return true;
      }
      $(this).appendTo(that.box.find('.userlist-user'));
    });
    var totalnum=that.box.find('.userlist li[data-uid]').length;
    var onlinenum=totalnum-that.box.find('.userlist li[data-uid].offline').length;
    that.box.find('.online-info').html('('+onlinenum+' / '+totalnum+')');
  };
  that.adduser=function(userid){
    var item=that.box.find('.userlist li[data-uid="'+userid+'"]');
    if(item.length>0){
      item.removeClass('offline');
      return;
    }
    var item=$('<li data-uid="'+userid+'" class="online"></li>').appendTo(that.box.find('.userlist-loading'));
    if(userid.indexOf('O')!=-1 || userid.indexOf('U')!=-1){
      item.addClass('user-tag');
    }
    that.newuids[userid]=1;
  };
  that.loaduser=function(){
    var uids=[];
    for(var userid in that.newuids){
      if(typeof that.users[userid]=='undefined'){
        uids.push(userid);
      }else{
        that.showuser(userid);
      }
    }
    if(uids.length<1){
      return;
    }
    $.post(window.location.href,{action:'loaduser',online:that.online,uids:uids.join(',')},function(o){
      if(typeof o.users!='undefined'){
        for(var userid in o.users){
          if(typeof that.newuids[userid]!='undefined'){
            delete that.newuids[userid];
          }
          that.users[userid]=o.users[userid];
          that.users[userid].userid=userid;
          that.showuser(userid);
          $(document).trigger('chat-adduser',that.users[userid]);
        }
      }
    },'json');
  };
  that.showuser=function(userid){
    if(typeof userid=='undefined'){
      return;
    }
    if(typeof that.users[userid]=='undefined'){
      return;
    }
    var user=that.users[userid];
    var html='<img src="'+user.avatar+'" class="avatar" /><span>'+user.nickname+'</span>';
    var item=that.box.find('.userlist li[data-uid="'+userid+'"]');
    if(item.length<1){
      item=$('<li data-uid="'+userid+'" class="online"></li>').appendTo(that.box.find('.userlist-loading'));
    }
    item.attr('data-gid',user.gid);
    item.html(html);
    if(user.type=='me'){
      item.appendTo(that.box.find('.userlist-me'));
    }else if(user.type=='master'){
      item.appendTo(that.box.find('.userlist-master'));
    }else if(user.type=='user'){
      item.appendTo(that.box.find('.userlist-user'));
    }else if(user.type=='guest'){
      item.appendTo(that.box.find('.userlist-guest'));
    }else{
      item.appendTo(that.box.find('.userlist-'+user.type));
    }
    if(!item.hasClass('is-event')){
      item.addClass('is-event');
      item.bind('click',function(){
        var gid=$(this).attr('data-gid');
        var uid=$(this).attr('data-uid');
        $.post(window.location.href,{action:'viewuser',online:that.online,uid:uid,gid:gid},function(o){
          if(typeof o.info!='undefined'){
            $('.bootbox-alert,.modal-backdrop').remove();
            onez.alert('<div class="master-panel">'+o.info+'</div>');
            $('.bootbox-alert .master-panel [data-token]').bind('click',function(){
              $('.bootbox-alert,.modal-backdrop').remove();
              var data=$(this).data();
              if(data.token=='web'){
                openWin(data.url,$(this).text());
              }
            });
          }
        },'json');
      }).hover(function(){
        $(this).addClass('hover');
      },function(){
        $(this).removeClass('hover');
      });
    }
    that.box.find('.userlist li[data-uid].offline').each(function(){
      var uid=$(this).attr('data-uid');
      if(uid.indexOf('U')!=-1){
        $(this).removeClass('offline');
        $(this).prependTo(that.box.find('.userlist-user'));
        return true;
      }
      $(this).appendTo(that.box.find('.userlist-user'));
    });
    var totalnum=that.box.find('.userlist li[data-uid]').length;
    var onlinenum=totalnum-that.box.find('.userlist li[data-uid].offline').length;
    that.box.find('.online-info').html('('+onlinenum+' / '+totalnum+')');
  };
  that.send=function(){
    
    if(!that.options.ismaster){
      if(that.options.talk_busy_time>0){
        if(that.talk_busy_time<that.options.talk_busy_time){
          that.print({msgid:Math.random(),type:'tip',tip:'您的发言太快'});
          return;
        }
        that.talk_busy_time=0;
      }
      
    }
    if(that.options.status!='ok'){
      that.print({msgid:Math.random(),type:'tip',tip:'您已被系统禁言。'});
      return;
    }
    if(that.options.index5=='1'){
      if(!that.options.ismaster){
        that.print({msgid:Math.random(),type:'tip',tip:'当前房间禁止发言'});
        return;
      }
    }
    
    var message=that.box.find('.inputbox').val();
  	message=message.replace(new RegExp('<scr'+'ipt[^>]*?>.*?</scr'+'ipt>','g'), "") ;
  	message=message.replace(new RegExp('\<\!\-\-.*?\-\-\>','g'), "") ;
  	message=message.replace('\<\!\-\-', "") ;
    if(typeof onez.plugin_send=='function'){
      message=onez.plugin_send(message);
    }
    if(message.length<1){
      return false;
    }
    that.box.find('.inputbox').val('');
    that.box.find('.inputbox').get(0).focus();
    that.at='';
    if(that.options.history=='none'){
      that.sendmsg({
        type:'getmsg',
        id:Math.random(),
        nickname:that.options.nickname,
        userid:that.userid,
        style:that.msg_style,
        message:message,
        at:that.at,
        time:that.now(),
      });
      return;
    }
    $.post(window.location.href,{action:'send',online:that.online,style:that.msg_style,message:message,at:that.at},function(o){
      if(typeof o.error!='undefined'){
        onez.alert(o.error);
      }
      if(typeof o.print!='undefined'){
        that.print(o.print);
      }
      if(typeof o.msg!='undefined'){
        that.sendmsg(o.msg);
      }
    },'json');
  };
  that.sendmsg=function(msg){
    that.socket.emit('sendmsg',msg);
  };
  that.is_master=function(userid){
    for(var k in that.options.masters){
      if(that.options.masters[k]==userid){
        return true;
      }
    }
    return false;
  };
  that.at='';
  that.call_plugins=function(name,args){
    var f=that[name];
    if(typeof f=='function'){
      return f.apply(that, [args]);
    }
    return '';
  };
  that.print=function(msg){
    if(typeof msg.msgid=='undefined'){
      return;
    }
    if(that.box.find('.showbox [data-msgid="'+msg.msgid+'"]').length>0){
      return;
    }
    var item=$('<div class="msg-item" data-msgid="'+msg.msgid+'" data-userid="'+msg.userid+'"></div>');
    if(typeof msg.classname!='undefined'){
      item.addClass(msg.classname);
    }
    if(typeof msg.time=='undefined'){
      msg.time='';
    }
    var btns=that.call_plugins('nickname_after',msg);
    if(msg.type=='me'){
      $('<div class="im_to">'+that.call_plugins('nickname_front',msg)+'<span class="uname">'+msg.nickname+'</span> <span>'+msg.time+'</span> '+btns+'</div>').appendTo(item);
    }else if(msg.type=='user'){
      if(that.is_master(msg.userid) || that.options.ismaster){
        btns+='<span onclick="chat_event(this)" class="text-at" data-groupid="'+that.options.groupid+'" data-action="at" data-userid="'+msg.userid+'" data-nickname="'+msg.nickname+'">@</span>';
      }
      $('<div class="im_from">'+that.call_plugins('nickname_before',msg)+'<span class="uname">'+msg.nickname+'</span> <span>'+msg.time+'</span> '+btns+'</div>').appendTo(item);
    }else if(msg.type=='system'){
      $('<div class="im_sys">'+that.ubbtohtml(msg.text)+'</div>').appendTo(item);
    }else if(msg.type=='tip'){
      $('<div class="im_tip">'+that.ubbtohtml(msg.tip)+'</div>').appendTo(item);
    }
    if(typeof msg.message!='undefined'){
      if(typeof msg.style=='undefined'){
        msg.style='';
      }
      $('<div class="im_content" style="'+msg.style+'">'+that.ubbtohtml(msg.message)+'</div>').appendTo(item);
    }
    that.call_plugins('message_print',item);
    var data={item:item,msg:msg};
    item.find('.large-image').css({cursor:'pointer'}).viewer({navbar:false,title:false,button:true,toolbar:false});
    item.find('img').bind('load',function(){
      that.toBottom();
    }).end().appendTo(that.box.find('.showbox'));
    that.toBottom();
    $('.chat').trigger('message-print',data);
  };
  that.imgLoaded=function(){
    return 'if(this.width>'+that.options.image_maxsize+'){this.width='+that.options.image_maxsize+'};if(this.height>'+that.options.image_maxsize+'){this.height='+that.options.image_maxsize+'}';
  };
  that.toBottom=function(){
    if(!that.is_bottom){
      return;
    }
    that.box.find('.showbox').scrollTop(that.box.find('.showbox').get(0).scrollHeight);
  };
  that.now=function(){
  	var date = new Date();
  	H_=date.getHours().toString();
  	i_=date.getMinutes().toString();
  	s_=date.getSeconds().toString();
  	if(H_.length==1)H_="0"+H_;
  	if(i_.length==1)i_="0"+i_;
  	if(s_.length==1)s_="0"+s_;
  	return H_+":"+i_+":"+s_;
  };
    
  
  that.box.find('.chat-tab li[data-key]').bind('click',function(){
    var key=$(this).attr('data-key');
    if(key=='logout'){
      onez.confirm('你确定要确出登录吗？',function(){
        location.href='?mod=/exit.php&goto='+encodeURIComponent(location.href);
      });
      return;
    }
    that.box.find('.chat-tab li[data-key]').removeClass('current');
    $(this).addClass('current');
    that.box.find('.tab-body').hide();
    if(key=='chat'){
      that.box.find('.tab-body[data-key="chat"]').show();
      that.box.find('.frame').attr('src','about:blank');
    }else{
      that.box.find('.tab-body[data-key="web"]').show();
      var url=$(this).attr('data-url');
      that.box.find('.frame').attr('src',url);
    }
  });
  that.box.find('.btn-bar a.btn-bar-open').bind('click',function(){
    that.box.addClass('noright');
    that.resize();
  });
  that.box.find('.btn-bar a.btn-bar-close').bind('click',function(){
    that.box.removeClass('noright');
    that.resize();
  });
  that.box.find('.btn-bar').hover(function(){
    $(this).addClass('hover');
  },function(){
    $(this).removeClass('hover');
  });
  that.box.find('.key-ctrl-enter').bind('click',function(){
    that.box.removeClass('enter-noctrl');
  });
  that.box.find('.key-enter').bind('click',function(){
    that.box.addClass('enter-noctrl');
  });
  that.box.find('.userlist dt').bind('click',function(e){
    if($(e.target).text().trim()!='禁'){
      that.box.toggleClass('right-hide-notice');
      that.resize();
    }
  });
  that.box.find('.btn-send').bind('click',function(){
    that.send();
  });
  that.box.find('a.icon-font').bind('click',function(){
    if($(this).hasClass('current')){
      that.box.find('.box_font').hide();
      $(this).removeClass('current');
    }else{
      that.box.find('.box_font').show();//.css({top:that.box.find('.chat-footer').offset().top-that.box.find('.box_font').height()-5+'px'});
      $(this).addClass('current');
    }
  });
  that.box.find('a.icon-emote').bind('click',function(){
    that.box.find('.box_emote').toggle();
  });
  that.box.find('a.icon-image').bind('click',function(){
    
  });
  that.fileid=0;
  that.AddImage=function(){
    var Width=that.box.find('a.icon-image').width();
    var Height=that.box.find('a.icon-image').height();
    that.fileid++;
    var ID='image'+that.fileid;
    var Vars='&rndid=image'+that.fileid;
    var Flash=that.options.baseurl+'/images/image.swf?rndid='+ID+'';
    var FlashHtml='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" style="position: absolute;left: 0;top: 0;" ';
    FlashHtml+='codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,29,0" ';
    FlashHtml+='width="' + Width + '" height="' + Height + '" id="' + ID + '">';
    FlashHtml+='<param name="movie" value="' + Flash + '">';
    FlashHtml+='<param name="quality" value="high">';
    FlashHtml+='<param name="wmode" value="transparent">';
    FlashHtml+='<param name="allowScriptAccess" value="always">';
    FlashHtml+='<param name="FlashVars" value="'+Vars+'">';
    FlashHtml+='<embed src="' + Flash + '" style="position: absolute;left: 0;top: 0;" name="' + ID + '" quality="high" allowScriptAccess="always" pluginspage="http://www.macromedia.com/go/getflashplayer" ';
    FlashHtml+='type="application/x-shockwave-flash" width="' + Width + '" FlashVars="'+Vars+'" wmode="transparent" height="' + Height + '"></embed>';
    FlashHtml+='</object>';
    that.box.find('.flash-image').remove();
    $('<div class="flash-image" style="position: absolute;left: 0;top: 0;"></div>').html(FlashHtml).css({width:Width+'px',height:Height+'px'}).appendTo(that.box.find('a.icon-image'));
  };
  that.AddImage();
  that.msg_style='';
  that.font_color='#000000';
  that.font_family='Microsoft YaHei';
  that.font_size='14';
  that.font_b='0';
  that.font_i='0';
  that.font_u='0';
  that.SetFont=function(){
    that.font_family=that.box.find('.font-family').val();
    that.font_size=that.box.find('.font-size').val();
    that.font_b=that.box.find('span.font-b').hasClass('current')?'1':'0';
    that.font_i=that.box.find('span.font-i').hasClass('current')?'1':'0';
    that.font_u=that.box.find('span.font-u').hasClass('current')?'1':'0';

    that.box.find('.inputbox').attr('data-color',that.font_color);
    that.box.find('.inputbox').attr('data-family',that.font_family);
    that.box.find('.inputbox').attr('data-size',that.font_size);
    that.box.find('.inputbox').attr('data-b',that.font_b);
    that.box.find('.inputbox').attr('data-i',that.font_i);
    that.box.find('.inputbox').attr('data-u',that.font_u);

    var css={};
    if(that.font_color!='#000000'){
      css['color']=that.font_color;
    }
    if(that.font_family!='Microsoft YaHei'){
      css['font-family']=that.font_family;
    }
    if(that.font_size!='14'){
      css['font-size']=that.font_size+'px';
    }
    if(that.font_b=='1'){
      css['font-weight']='bold';
    }
    if(that.font_i=='1'){
      css['font-style']='italic';
    }
    if(that.font_u=='1'){
      css['text-decoration']='underline';
    }
    var style=[];
    for(var k in css){
      style.push(k+':'+css[k]);
    }
    that.msg_style=style.join(';');
    that.box.find('.inputbox').attr('style',style.join('; ')+'; width:'+that.box.find('.inputbox').width()+'px; height:'+that.box.find('.inputbox').height()+'px');
  };
  that.box.find(".font-color").colorpicker({
    fillcolor:true,
    success:function(o,color){
      that.font_color=color;
      that.SetFont();
    }
  });
  that.box.find('.box_font select').bind("change",function(){
    that.SetFont();
  });  
  that.box.find('.box_font td').bind("selectstart",function(){return false;});  
  that.box.find('.box_font td span').hover(function(){
    $(this).addClass('hover');
  },function(){
    if(!$(this).hasClass('current')){
      $(this).removeClass('hover');
    }
  }).click(function(){
    if($(this).hasClass('font-color')){
      return;
    }
    $(this).toggleClass('current');
    that.SetFont();
  });
  that.box.find('.box_font .font-family').val(that.font_family);
  that.box.find('.box_font .font-size').val(that.font_size);
  if(that.font_b=='1'){
    that.box.find('.box_font span.font-b').addClass('current');
  }
  if(that.font_i=='1'){
    that.box.find('.box_font span.font-i').addClass('current');
  }
  if(that.font_u=='1'){
    that.box.find('.box_font span.font-u').addClass('current');
  }
  that.SetFont();
  that.box.find('a.icon-file').bind('click',function(){
    
  });
  that.box.find('.inputbox').bind('keydown',function(e){
    if(e.keyCode ==13){
      if(that.box.hasClass('enter-noctrl')){
        if(!e.ctrlKey){
          e.preventDefault();
          e.returnValue=false;
          that.send();
        }
      }else if(e.ctrlKey){
        e.preventDefault();
        e.returnValue=false;
        that.send();
      }
    }
  });
  that.box.find('.showbox,.inputbox').bind('click',function(e){
    $('.box_emote').hide();
  });
  that.is_bottom=true;
  that.box.find('.showbox,.inputbox').bind('scroll',function(e){
    var bottom=$(this).get(0).scrollHeight-$(this).scrollTop()-$(this).height();
    that.is_bottom=bottom<100;
  });
  that.box.find('.chat-toolbar span.icon-text').hover(function(){
    $(this).addClass('hover');
  },function(){
    $(this).removeClass('hover');
  });
  
  
  $.post(window.location.href,{action:'history'},function(o){
    if(typeof o.history!='undefined'){
      for(var i=o.history.length-1;i>=0;i--){
        that.print(o.history[i]);
      }
    }
  },'json');
  if(that.options.mode=='group'){
    $.post(window.location.href,{action:'userlist'},function(o){
      if(typeof o.users!='undefined'){
        for(var userid in o.users){
          if(typeof that.newuids[userid]!='undefined'){
            delete that.newuids[userid];
          }
          that.adduser(userid);
          that.users[userid]=o.users[userid];
          that.showuser(userid);
        }
        that.newuids={};
        that.socket.emit('getRoomList',{});
      }
    },'json');
    
  }
  var html='<table><tr>';
  for(var i=1;i<=69;i++){
    html+='<td><img src="'+that.options.pluginurl+'/images/smiley/emoji_'+i+'.png" data-emote=":emoji_'+i+'" /></td>';
    if(i % 13==0){
      html+='</tr><tr>';
    }
  }
  html+='</tr></table>';
  that.box.find('.box_emote').html(html).find('[data-emote]').bind('click',function(){
    var emote=$(this).attr('data-emote');
    that.box.find('.inputbox').insertAtCaret(emote);
    that.box.find('.box_emote').hide();
  });
  that.talk_busy_time=that.options.talk_busy_time;
  that.touch_sec=0;
  setInterval(function(){
    if(that.options.newuser_limit_time>0){
      that.options.newuser_limit_time--;
    }
    that.talk_busy_time++;
    that.touch_sec++;
    if(that.touch_sec>=20){
      that.touch_sec=0;
      $.post(window.location.href,{action:'touch'},function(o){
      },'json');
    }
  },1000);
  $(window).bind('resize',that.resize);
  that.resize();
  setTimeout(function(){
    that.resize();
  },100);
};
onezgroup.prototype.ubbtohtml=function(fdata){
  var that=this;
  if(typeof fdata!='string'){
    fdata='';
  }
  var reg=/http:\/\/[\w-]*(\.[A-Za-z0-9-_%&\?\/.=]*)+/ig,fdata=fdata.replace(reg,function(url){
    return '[url]'+url+'[/url]';
  });
  fdata=fdata.replace(/\n/g,'<br />');
  fdata=fdata.replace(new RegExp('(\\[img\\]\\[url\\])+','gi'),'[img]');
  fdata=fdata.replace(new RegExp('(\\[\/url\\]\\[\/img\\])+','gi'),'[/img]');
  fdata=fdata.replace(new RegExp(':([a-zA-Z]+)_([0-9]{1,2})','g'),'<img class="emote" src="'+that.options.pluginurl+'/images/smiley/$1_$2.png">');
  fdata=fdata.replace(new RegExp('\\[url\\](www.|http:\/\/){1}([^\[\"\']+?)\\[\/url\\]','gi'),'<a href="$1$2" target="_blank">$1$2</a>');
  fdata=fdata.replace(new RegExp('\\[url=(www.|http:\/\/){1}([^\[\"\']+?)\\](.+?)\\[\/url\\]','gi'),'<a href="$1$2" target="_blank">$3</a>');
  fdata=fdata.replace(new RegExp('\\[img\\]([^\[\"\']+?)\\[\/img\\]','gi'),'<img src="$1" style="max-width:'+that.options.image_maxsize+'px;max-height:'+that.options.image_maxsize+'px;vertical-align: inherit;" onclick="'+that.imgLoaded()+'" class="large-image"" />');
  return fdata;
};
function doit(obj){
  $('.chat').trigger('chat-doit',obj);
};
function chat_event(obj){
  var data=$(obj).data();
  $('.chat').trigger('chat-event',data);
};
function file_ok(rndid,data){
  if(data.indexOf('ok')!=-1){
    $('.chat').trigger('chat-file',data.substr(2));
  }else{
    alert(data);
  }
}