var oneztalk=function(s,options){
  this.box=$(s);
  this.options=options;
  var that=this;
  
  that.call_plugins=function(name,args){
    var f=that[name];
    if(typeof f=='function'){
      return f.apply(that, [args]);
    }
    return '';
  };
  that.box.find('.btn-send').bind('click',function(){
    that.send();
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
  
  that.resize=function(){
    var winW=$(window).innerWidth();
    var winH=$(window).innerHeight();
    var headerH=$('.chat-header').height();
    var footerH=$('.chat-footer').height();
    var BodyH=winH-headerH;
    var mainH=BodyH;
    var mainW=winW;
    if(!that.box.hasClass('noright')){
      mainW-=$('.chat-right').width();
    }
    var showboxH=mainH-footerH;
    showboxH-=that.box.find('.ad_pc_mt').height();
    showboxH-=that.box.find('.ad_pc_mb').height();
    
    that.box.find('.chat-body').height(BodyH);
    that.box.find('.chat-main').width(mainW);
    that.box.find('.showbox').height(showboxH);
    that.box.find('.inputbox').width(mainW-10);
    that.box.find('.frame').width(winW).height(mainH);
  };
  
  that.box.find('a.icon-emote').bind('click',function(){
    that.box.find('.box_emote').toggle();
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
  $(document).bind('talk-getmsg',function(e,item){
    var msg={
      type:'user',
      msgid:item.id,
      nickname:item.nickname,
      style:item.style,
      message:item.message,
      time:item.time,
      isnew:true
    };
    that.print(msg);
    $(document).trigger('chat-newmsg-tip');
  });
  $(window).bind('resize',that.resize);
  that.resize();
  setTimeout(function(){
    that.resize();
  },100);
  this.load_history();
};
oneztalk.prototype.ubbtohtml=function(fdata){
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
oneztalk.prototype.connect=function(host,room,userid){
  var that=this;
  that.userid=userid;
  that.socket= io.connect(host); 
  that.socket.on('getmsg',function(item){
    that.getmsg(item);
  });
  that.socket.on('welcome', function (item) {
    that.socket.emit('join',{uid:''+userid,room:room});
    that.socket.emit('getRoomList',{});
  });
  that.socket.on('roomlist', function (item) {
  });
};
oneztalk.prototype.load_history=function(){
  var that=this;
  $.post(window.location.href,{action:'history'},function(o){
    if(typeof o.history!='undefined'){
      for(var i=o.history.length-1;i>=0;i--){
        that.print(o.history[i]);
      }
    }
  },'json');
};
oneztalk.prototype.getmsg=function(item){
  var that=this;
  if(item.id_to==that.userid){
    if(that.options.id_friend=='0'){
      $(document).trigger('talk-newmsg',item);
    }else{
      if(item.id_from==that.options.id_friend){
        $(document).trigger('talk-getmsg',item);
        $.post('?mod=group.php&_onez=chat.group.plugin.talk%7C%2Fonez.php%3Fuserid%3D%26&miniwin=1',{action:'read',msgid:item.id},function(o){
        },'json');
      }
    }
  }
};
oneztalk.prototype.send=function(){
  var that=this;
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
  $.post(window.location.href,{action:'send',message:message},function(o){
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
oneztalk.prototype.sendmsg=function(msg){
  var that=this;
  that.socket.emit('sendmsg',msg);
};