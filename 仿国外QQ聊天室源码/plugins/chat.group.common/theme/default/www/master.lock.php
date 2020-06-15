<?php

!defined('IN_ONEZ') && exit('Access Denied');
define('CUR_URL','/admin/pages/group_notice.php');
$groupid=onez()->gp('groupid');
$gid=(int)onez()->gp('gid');

!$G['ismaster'] && onez('chat.group.common')->error('没有权限');

$G['title']='禁言';

$guser=$item=$G['this']->data()->open('group_users')->one("upid='$groupid' and id='$gid'");

$item['lock_exptime']=max(time(),$item['lock_exptime']);
#初始化表单
$form=onez('admin')->widget('form')
  ->set('title',$G['title'])
  ->set('values',$item)
;
#创建表单项
$form->add(array('type'=>'hidden','key'=>'action','value'=>'save'));
$form->add(array('label'=>'群组名称','type'=>'html','html'=>'<code>'.$group['name'].'</code>','hint'=>''));
if($guser['token']=='guest'){
  $userid='guest.'.$guser['userid'];
  $nickname=onez('chat.group.common')->nickname_guest($guser['userid']);
  $form->add(array('label'=>'当前用户','type'=>'html','html'=>'【游客】<code>'.onez('chat.group.common')->nickname_guest($guser['userid']).'</code>','hint'=>''));
}else{
  $userid=$guser['userid'];
  $nickname=onez('chat.group.common')->nickname($guser['userid']);
  $form->add(array('label'=>'当前用户','type'=>'html','html'=>'<code>'.onez('chat.group.common')->nickname($guser['userid']).'</code>','hint'=>''));
}
$form->add(array('label'=>'禁言理由','type'=>'text','key'=>'lock_because','hint'=>'','notempty'=>'','group'=>''));
$form->add(array('label'=>'解封时间','type'=>'form.time','key'=>'lock_exptime','hint'=>'','notempty'=>'','group'=>''));


#处理提交
if($onez=$form->submit()){
  ob_clean();
  $id=$G['this']->data()->open('group_badlock')->insert(array(
    'upid'=>$groupid,
    'userid'=>(int)$G['userid'],
    'index1'=>(int)$gid,
    'index2'=>(int)$guser['userid'],
    'key3'=>$onez['ip'],
    'key1'=>$guser['token'],
    'key2'=>$userid,
    'lock_because'=>$onez['lock_because'],
    'lock_exptime'=>$onez['lock_exptime'],
    'token'=>'lock',
  ));
  $G['this']->data()->open('group_users')->update(array(
    'lock_because'=>$onez['lock_because'],
    'lock_exptime'=>$onez['lock_exptime'],
    'lock_masteruid'=>$G['userid'],
    'key1'=>'lock',
  ),"id='$gid'");
  onez()->ok('操作成功','reload2');
}
onez('admin')->header();
?>
<section class="content-header">
  <h1>
    <?php echo $G['title']?>
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="<?php echo onez()->href('/')?>">
        <i class="fa fa-dashboard">
        </i>
        管理首页
      </a>
    </li>
    <li class="active">
      <?php echo $G['title']?>
    </li>
  </ol>
</section>
<section class="content">
  <form id="form-common" method="post">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">
          <?php echo $G['title']?>
        </h3>
        <div class="box-tools pull-right">
        </div>
      </div>
      <div class="box-body">
        <?php echo $form->code()?>
      </div>
      <div class="box-footer clearfix">
        <button type="submit" class="btn btn-primary">
          立即禁言
        </button>
        <!--<a href="<?php echo $G['this']->href('/admin/pages/group_notice.php&groupid='.$groupid)?>" class="btn btn-default">
          返回
        </a>-->
      </div>
    </div>
    <input type="hidden" name="action" value="save" />
  </form>
</section>
<script type="text/javascript">
$(function(){
  $('#form-common').bind('submit',function(){
    $.post(window.location.href,$(this).serialize()+'&ajax=1',function(data){
      if(data.status=='success'){
        parent.doit({
          groupid:'<?php echo $groupid?>',
          action:'lock',
          tip:'管理员禁止了<?php echo $nickname?>的发言功能',
          userid:'<?php echo $userid?>'
        });
        parent.closeWin();
      }else{
        onez.doit(data);
      }
    },'json');
    return false;
  });
});
</script>
<?php
onez('admin')->footer();
?>