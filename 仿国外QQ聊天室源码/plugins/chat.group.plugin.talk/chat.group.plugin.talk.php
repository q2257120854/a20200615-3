<?php
!defined('IN_ONEZ') && exit('Access Denied');
#名称：仿QQ群内部交流系统 - 私聊系统
#标识：chat.group.plugin.talk

class onezphp_chat_group_plugin_talk extends onezphp{
  function __construct(){
    
  }
  function bind_chat_group_index(){
    global $G;
    #未读消息
    $friend=$G['this']->data()->open('friends')->record("userid='$G[userid]' and index2>0");
    if($friend){
      $G['footer'].='<div class="apps">';
      foreach($friend as $rs){
        $G['footer'].='<div class="app-item animated infinite flash" data-idtype="uid" data-id="'.$rs['index1'].'">';
          $G['footer'].='<div class="app-item-icon"><img src="'.onez('chat.group.common')->avatar($rs['index1']).'"></div>';
          $G['footer'].='<h3>'.$rs['key1'].'</h3>';
        $G['footer'].='</div>';
      }
      $G['footer'].='</div>';
    }
    
    $G['header'].=onez('ui')->js(onez('chat.group.common')->url.'/theme/default/www/js/socket.io/2.0.3/socket.io.js');
    $G['footer'].=onez('animate.css')->head(1);
    $G['footer'].=onez('ui')->css($this->url.'/css/common.css?t='.filemtime($this->path.'/css/common.css'));
    if($G['userid']){
      $option=$G['this']->option();
      $server_host=onez('chat.group.common')->server_host($option);
      $server_room=md5($option['onez_sitekey']."\t".$_SERVER['SERVER_ADDR']."\t0");
      $G['footer'].='<div class="apps-message" data-host="'.$server_host.'" data-room="'.$server_room.'" data-userid="'.$G['userid'].'"></div>';
    }
    $G['footer'].='
<div class="modal modal-dialog-user" style="display: none">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btn-close" data-dismiss="modal"><i class="glyphicon glyphicon-remove" style="font-size: 28px"></i></button>
        <button type="button" class="close btn-max"><i class="glyphicon glyphicon-resize-full" style="font-size: 20px;margin:3px"></i></button>
        <button type="button" class="close btn-small"><i class="glyphicon glyphicon-resize-small" style="font-size: 20px;margin:3px"></i></button>
        <button type="button" class="close btn-min"><i class="glyphicon glyphicon-resize-min" style="font-size: 20px;margin:3px"></i></button>
        <h4 class="modal-title">系统提示</h4>
      </div>
      <div class="modal-body"><iframe src="about:blank" width="100%" height="100%" frameborder="0" allowtransparency="true" style="background-color=transparent" ></iframe></div>
    </div>
  </div>
</div>';
    $G['footer'].=onez('ui')->js($this->url.'/js/common.js?t='.filemtime($this->path.'/js/common.js'));
  }
  function bind_chat_group_viewuser_all($guser){
    global $G;
    $uid=onez()->gp('uid');
    $btns='';
    if(strpos($uid,'guest.')===false){
      $btns.='<button type="button" class="btn btn-success" onclick="$(\'.bootbox-alert,.modal-backdrop\').remove();talkTo('.intval($uid).','.var_export($guser['nickname'].'',1).','.var_export($guser['avatar'].'',1).');">发消息</button> ';
    }
    return $btns;
  }
  function bind_chat_group_pc_talk(){
    global $G;
    //echo onez('ui')->js($this->url.'/js/common.js?t='.filemtime($this->path.'/js/common.js'));
    echo <<<ONEZ
<script type="text/javascript">
var talkTo=function(uid,uname,avatar){
  var app=$('[data-idtype="uid"][data-id="'+uid+'"]');
  if(app.length>0){
    app.trigger('click');
    return;
  }
  var href='?mod=group.php&_onez=chat.group.plugin.talk%7C%2Fdialog.php%3Fuserid%3D'+uid+'%26&miniwin=1';
  var w=640,width=w;
  var h=480,height=h;
  window.open(href,"user-"+uid,"toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width="+width+",height="+height+",left="+((screen.width-width)/2+Math.floor(Math.random()*100))+",top="+((screen.height-height)/2+Math.floor(Math.random()*100)));
};
</script>
ONEZ;
  }
}