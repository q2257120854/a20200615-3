<?php

!defined('IN_ONEZ') && exit('Access Denied');
$G['title']='';
$action=onez()->gp('action');
!$G['ismaster'] && onez('chat.group.common')->error('没有权限');
if($action=='clear'){
  $id=(int)onez()->gp('id');
  
  onez()->ok('操作成功','reload');
}
include_once(dirname(__FILE__).'/header.php');
?>
<style>
#userlist img{
  width:16px;
  height: 16px;
  display: inline-block;
  margin-right: 2px;
}
</style>
<section class="content" style="padding: 10px">
  <div class="box box-info">
    <div class="box-header with-border">
      <div class="">
        <input type="text" name="table_search" id="kw" class="form-control" placeholder="请输入用户昵称">
      </div>
    </div>
    <div class="box-body  table-responsive no-padding">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>显示昵称</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody id="userlist">
        </tbody>
      </table>
    </div>
  </div>
</section>
<script type="text/javascript">
function _clear(gid){
  onez.confirm('您确定要清空这个用户的所有聊天记录吗？',function(){
    $.post(window.location.href,{action:'clear',gid:gid,ajax:1},function(data){
      doit({
        groupid:'<?php echo $groupid?>',
        action:'che',
        userid:'<?php echo $userid?>'
      });
    },'json');
  });
}
function _tickout(gid){
  openWin('<?php echo onez()->href('/master.tickout.php?groupid='.$groupid)?>&gid='+gid,'踢出用户');
}
function _lock(gid){
  openWin('<?php echo onez()->href('/master.lock.php?groupid='.$groupid)?>&gid='+gid,'禁言用户');
}
function doit(obj){
  parent.doit(obj);
};
$(function(){
  var users=$('.userlist li[data-uid]',parent.document);
  if(users.length>0){
    users.each(function(i){
      var btns='';
      btns+='<button type="button" class="btn btn-xs btn-info" onclick="_clear(\''+$(this).attr('data-gid')+'\')">清</button> ';
      btns+='<button type="button" class="btn btn-xs btn-info" onclick="_tickout(\''+$(this).attr('data-gid')+'\')">踢</button> ';
      btns+='<button type="button" class="btn btn-xs btn-info" onclick="_lock(\''+$(this).attr('data-gid')+'\')">禁</button> ';
      $('<tr><td>'+$(this).html()+'</td><td>'+btns+'</td></tr>').appendTo('#userlist');
    });
  }
  $('#kw').bind('keyup input',function(){
    var kw=$(this).val();
    $('#userlist tr').hide();
    $('#userlist tr').each(function(){
      if($(this).text().indexOf(kw)!=-1){
        $(this).show();
      }
    });
  });
});
</script>
<?php 
include_once(dirname(__FILE__).'/footer.php');