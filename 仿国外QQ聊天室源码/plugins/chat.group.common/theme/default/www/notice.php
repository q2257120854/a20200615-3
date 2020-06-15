<?php

!defined('IN_ONEZ') && exit('Access Denied');
define('CUR_URL','/admin/pages/group_notice.php');

$groupid=onez()->gp('groupid');

$G['title']='群公告';
$action=onez()->gp('action');
if($G['ismaster']){
  if($action=='delete'){
    $id=(int)onez()->gp('id');
    $G['this']->data()->open('group_notice')->delete("id='$id' and `upid`='$groupid'");
    if($group['noticeid']==$id){
      $G['this']->data()->open('group')->update(array(
        'noticeid'=>0,
        'notice'=>'',
      ),"id='$groupid'");
    }
    onez()->ok('删除公告成功','reload');
  }
}
$xxx="";



onez('admin')->header();

$record=$G['this']->data()->open('group_notice')->page("1$xxx and `upid`='$groupid' order by id desc");
?>
<section class="content-header">
  <h1>
    <?php echo $G['title']?><small></small>
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
  <div class="btns" style="padding-bottom: 10px">
    <div class="pull-left">
<?php if($G['ismaster']){?>
      <a href="<?php echo onez()->href('/notice.edit.php&groupid='.$groupid)?>" data-width="960" class="onez-miniwin btn btn-success">
        发布新公告
      </a>
<?php }?>
    </div>
    <div class="pull-right">
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="box box-info">
    <div class="box-body  table-responsive no-padding">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>标题</th>
<?php if($G['ismaster']){?>
            <th>操作</th>
<?php }?>
          </tr>
        </thead>
        <tbody class="todo-list">
          <?php foreach($record[0] as $rs){ ?>
          <tr>
            <td>
              <a href="<?php echo onez()->href('/notice.view.php?id='.$rs['id'].'&groupid='.$groupid)?>"><?php echo $rs['subject']?></a>
            </td>
<?php if($G['ismaster']){?>
            <td>
              <a href="<?php echo onez()->href('/notice.edit.php?id='.$rs['id'].'&groupid='.$groupid)?>" data-width="960" class="onez-miniwin btn btn-xs btn-success">
                编辑
              </a>
              <a href="javascript:void(0)" onclick="onez.del('<?php echo $rs['id']?>')" class="btn btn-xs btn-danger">
                删除
              </a>
            </td>
<?php }?>
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
<?php if($record[1]){ ?>
    <div class="box-footer clearfix">
      <?php echo $record[1]?>
    </div>
<?php  } ?>
  </div>
</section>
<?php 
if($G['ismaster']){
if($group['noticetime']<$group['updatetime']){
  $G['this']->data()->open('group')->update(array(
    'noticetime'=>time(),
  ),"id='$groupid'");
  ?>
<script type="text/javascript">
parent.doit({
  groupid:'<?php echo $groupid?>',
  tip:'管理员修改了群公告',
  action:'notice'
});
</script>
  <?php 
}
}
?>
<?php
onez('admin')->footer();
?>