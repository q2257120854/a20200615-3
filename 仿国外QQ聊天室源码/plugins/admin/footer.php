<?php

!defined('IN_ONEZ') && exit('Access Denied');
?>
  </div>
  <!-- /.content-wrapper -->

</div>
<div class="modal fade" id="hide-miniwin" style="display: none">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close" style="font-size: 28px"></i></button>
        <h4 class="modal-title">系统提示</h4>
      </div>
      <div class="modal-body"><iframe id="NoPermissioniframe" width="100%" height="100%" frameborder="0" ></iframe></div>
    </div>
  </div>
</div>
<?php echo $G['footer']?>
<script type="text/javascript">
<?php echo $G['footer-js']?>

function closeWin(){
  $("#hide-miniwin").modal('hide');
}
function openWin(href,title,maxwidth,reload){
  if(href.indexOf('?')==-1){
    href+='?miniwin=1';
  }else{
    href+='&miniwin=1';
  }
  $('#hide-miniwin h4').text(title);
  if(isNaN(maxwidth)){
    maxwidth=800;
  }
  var w=$(window).width()-80;
  if(w>maxwidth){
    w=maxwidth;
  }
  $('#hide-miniwin .modal-dialog').css({width:w+'px'});
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
  }
  var _scrollHeight = $(document).scrollTop();
  var wHeight = $(window).height();
  var this_height=wHeight-60;
  var this_top=(wHeight-this_height)/2+_scrollHeight+"px";
  var this_top=(wHeight-this_height)/2+"px";

  var h=this_height-60;
  if(h>600){
    //h=600;
  }
  var myifmcss={height:h+'px'};//iframe样式
  $('#hide-miniwin .modal-dialog').find('.modal-content').css({height: '100%',width: '100%'}).find('h4').html(title||"").end().find('.modal-body').find("#NoPermissioniframe").css(myifmcss);
}
$(function(){
  $('a.onez-miniwin').each(function(){
    $(this).attr('data-href',$(this).attr('href'));
    $(this).attr('href','javascript:;');
    $(this).click(function(){
      var href=$(this).attr('data-href');
      openWin(href,$(this).attr('data-title'),parseInt($(this).attr('data-width')+''),$(this).attr('data-reload'));
    });
  });
  $('[data-ajax]').wrap('<div class="ajaxBox"></div>').bind('input click',function(){
    var _input=$(this);
    var kw=$(this).val();
    var ajax=$(this).attr('data-ajax');
    var inputs=$(this).attr('data-inputs');
    var data={action:'search-ajax',kw:kw};
    if(typeof inputs=='string'){
      var o=inputs.split('|');
      for(var i=0;i<o.length;i++){
        data[o[i]]=$('#input-'+o[i]).val();
      }
    }
    if(ajax=='self'){
      ajax=window.location.href;
    }
    $.post(ajax,data,function(o){
      if($('.ajaxBox .mybox').length<1){
        $('<div class="mybox"></div>').insertAfter(_input);
      }
      var mybox=$('.ajaxBox .mybox');
      mybox.empty();
      for(var i=0;i<o.record.length;i++){
        var item=o.record[i];
        if(typeof item.token!='undefined'){
          var data='';
          for(var k in item){
            data+=' data-'+k+'="'+item[k]+'"';
          }
          $('<a href="javascript:;" onclick="'+item.token+'(this)" '+data+' />').addClass(item.type).attr('data-text',item.text).html(item.title?item.title:item.text).appendTo(mybox);
        }else if(item.href){
          $('<a href="'+item.href+'" />').addClass(item.type).html(item.text).appendTo(mybox);
        }else{
          $('<a href="javascript:;" />').addClass(item.type).attr('data-text',item.text).html(item.title?item.title:item.text).bind('mousedown',function(){
            if($(this).hasClass('tip')){
              return;
            }
            _input.val($(this).attr('data-text'));
            $('.ajaxBox .mybox').remove();
          }).appendTo(mybox);
        }
      }
    },'json');
  });
  $('body').bind('click',function(){
    $('.ajaxBox .mybox').remove();
  });
  $('input.date').datepicker({
    format: 'yyyy-mm-dd',
		language: 'zh-CN',
    autoclose: true
  });
});
</script>
</body>
</html>
