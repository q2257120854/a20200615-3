<?php

!defined('IN_ONEZ') && exit('Access Denied');
define('CUR_URL',onez('chat.group.common')->href('/admin/group/group.category.php',0));


$G['title']='分类';
$action=onez()->gp('action');
if($action=='delete'){
  $id=(int)onez()->gp('id');
  $G['this']->data()->open('group_category')->delete("id='$id'");
  $G['this']->data()->open('group')->delete("upid='$id'");
  onez()->ok('删除分类成功','reload');

}elseif($action=='steps'){
  ob_clean();
  $ids=explode(',',onez()->gp('ids'));
  $n=-100000;
  foreach($ids as $k=>$id){
    $rs=array();
    $rs['step']=$n;
    $G['this']->data()->open('group_category')->update($rs,"id='$id'");
    $n++;
  }
  onez()->ok('重新排序成功','reload');
}
$xxx="";
onez('admin')->header();

$record=$G['this']->data()->open('group_category')->page("1$xxx order by step,id");
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

      <a href="<?php echo onez('chat.group.common')->href('/admin/group/group.category.edit.php')?>" class="btn btn-success">
        添加分类
      </a>
    </div>
    <div class="pull-right">
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">
        <?php echo $G['title']?>
      </h3>
      <div class="box-tools pull-right">
      </div>
    </div>
    <div class="box-body  table-responsive no-padding">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>分类名称</th>
            <th>分类描述</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody class="todo-list">
          <?php foreach($record[0] as $rs){ ?>
          <tr>
            <td>
            <span class="handle" data-id="<?php echo $rs['id']?>">
              <i class="fa fa-ellipsis-v"></i>
              <i class="fa fa-ellipsis-v"></i>
            </span>
              <?php echo $rs['name']?>            </td>
            <td>
              <?php echo $rs['summary']?>
            </td>
            <td>
              <a href="<?php echo onez('chat.group.common')->href('/admin/group/group.category.edit.php?id='.$rs['id'])?>" class="btn btn-xs btn-success">
                编辑
              </a>
              <a href="javascript:void(0)" onclick="onez.del('<?php echo $rs['id']?>')" class="btn btn-xs btn-danger">
                删除
              </a>
            </td>
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
<script type="text/javascript">
$(function(){
  $(".todo-list").sortable({
    placeholder: "tr",
    handle: ".handle",
    forcePlaceholderSize: true,
    stop: function(){
      var ids=[];
      $('[data-id]').each(function(){
        ids.push($(this).attr('data-id'));
      });
      $.post(window.location.href,{action:'steps',ids:ids.join(',')},function(){
      });
    },
    zIndex: 999999
  });
});
</script>
<?php
onez('admin')->footer();
?>