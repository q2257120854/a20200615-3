<?php

!defined('IN_ONEZ') && exit('Access Denied');
echo onez('ui')->js(onez('admin')->url.'/assets/js/bootbox.js');
echo onez('ui')->js(onez('admin')->url.'/assets/js/onez.js');
?>
<style>
.modal .btn-max{
  display: none;
}
.modal .btn-small{
  display: none;
}
.modal-home .btn-max{
  display: block;
}
.modal-home .modal-header {
  border-bottom: 0;
  padding: 10px;
  background: rgba(255,255,255,0.9)!important;
}
.modal-home #NoPermissioniframe {
  background: transparent;
}
.modal-full,.modal-full .modal-dialog{
  margin: 0;
  padding: 0;
  left: 0!important;
  top: 0!important;
  width: 100%!important;
  height: 100%!important;
  position: fixed;
}
.modal-full .modal-content{
  border: 0!important;
  border-radius: 0!important;
}
.modal-full .btn-max{
  display: none;
}
.modal-full .btn-small{
  display: block;
}
</style>
<div class="modal fade <?php echo $modalclass?>" id="hide-miniwin" style="display: none">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="glyphicon glyphicon-remove" style="font-size: 28px"></i></button>
        <button type="button" class="close btn-max"><i class="glyphicon glyphicon-resize-full" style="font-size: 20px;margin:3px"></i></button>
        <button type="button" class="close btn-small"><i class="glyphicon glyphicon-resize-small" style="font-size: 20px;margin:3px"></i></button>
        <h4 class="modal-title">系统提示</h4>
      </div>
      <div class="modal-body"><iframe id="NoPermissioniframe" width="100%" height="100%" frameborder="0" allowtransparency="true" style="background-color=transparent"></iframe></div>
    </div>
  </div>
</div>
<script type="text/javascript">

function closeWin(){
  $("#hide-miniwin").modal('hide');
}
function openWin(href,title,maxwidth,maxheight,reload,bgcolor){
  if(href.indexOf('?')==-1){
    href+='?miniwin=1';
  }else{
    href+='&miniwin=1';
  }
  if(typeof bgcolor=='undefined' || bgcolor==''){
    bgcolor='#ffffff';
  }
  $('#hide-miniwin h4').text(title);
  if(isNaN(maxwidth)){
    maxwidth=800;
  }
  var w=$(window).width()-80;
  if(w>maxwidth){
    w=maxwidth;
  }
  if(isNaN(maxheight)){
    maxheight=600;
  }
  var h=$(window).height()-60;
  if(h>maxheight){
    h=maxheight;
  }
  $('#hide-miniwin .modal-dialog').css({width:w+'px',height:h+'px'});
  $('#hide-miniwin .modal-body').css({padding:'0px'});
  $("#NoPermissioniframe").attr("src", href);
  var win=$("#hide-miniwin").draggable({
		cursor: "move",
		handle: '.modal-header'
	}).modal({backdrop: 'static', keyboard: false});
  if(typeof reload!='undefined' && reload=='1'){
    win.on('hide.bs.modal',function(){
      location.reload();
    })
  }else{
    win.on('hide.bs.modal',function(){
      $('.modal-home').removeClass('modal-full');
    });
  }
  var _scrollHeight = $(document).scrollTop();
  var wHeight = $(window).height();
  var this_height=wHeight-60;
  var this_top=(wHeight-this_height)/2+_scrollHeight+"px";
  var this_top=(wHeight-h)/2+"px";

  
  var myifmcss={height:h-50+'px'};//iframe样式
  $('#hide-miniwin .modal-dialog').find('.modal-content').css({height: '100%',width: '100%','background-color':bgcolor}).find('h4').html(title||"").end().find('.modal-body').find("#NoPermissioniframe").css(myifmcss).attr('data-height',h-50);
}
$(function(){
  $('.btn-max').bind('click',function(){
    $('.modal-home').addClass('modal-full');
    $('.modal-home #NoPermissioniframe').height($(window).height()-$('.modal-header').height()-20);
  });
  $('.btn-small').bind('click',function(){
    $('.modal-home').removeClass('modal-full');
    $('.modal-home #NoPermissioniframe').height(parseInt($('.modal-home #NoPermissioniframe').attr('data-height')));
  });
  $(window).bind('resize',function(){
    $('.modal-full #NoPermissioniframe').height($(window).height()-$('.modal-header').height()-20);
  });
  $('a.onez-miniwin').each(function(){
    $(this).attr('data-href',$(this).attr('href'));
    $(this).attr('href','javascript:;');
    $(this).click(function(){
      var href=$(this).attr('data-href');
      openWin(href,$(this).attr('data-title'),parseInt($(this).attr('data-width')+''),parseInt($(this).attr('data-height')+''),$(this).attr('data-reload'),$(this).attr('data-bgcolor'));
    });
  });
});
</script>
<?php onez('ui')->footer();?>