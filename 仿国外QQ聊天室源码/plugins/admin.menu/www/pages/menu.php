<?php

!defined('IN_ONEZ') && exit('Access Denied');
$grade=onez()->gp('grade');
$action=onez()->gp('action');
if($action=='delete'){
  $id=(int)onez()->gp('id');
  $G['this']->data()->open('dev.admin.menu')->delete("id='$id'");
  onez()->ok('删除菜单成功','reload');
}elseif($action=='save'){
  $enabled=onez()->gp('enabled');
  $ids=array_keys($enabled);
  $G['this']->data()->open('dev.admin.menu')->update(array('index1'=>0),"");
  if($ids){
    $G['this']->data()->open('dev.admin.menu')->update(array('index1'=>1),"id in (".implode(',',$ids).")");
  }
  onez()->ok('保存成功','reload');
}elseif($action=='steps'){
  ob_clean();
  $ids=explode(',',onez()->gp('ids'));
  $n=-1000;
  foreach($ids as $k=>$id){
    $rs=array();
    $rs['step']=$n;
    $G['this']->data()->open('dev.admin.menu')->update($rs,"id='$id'");
    $n++;
  }
  onez()->ok('重新排序成功','reload');
}elseif($action=='reset'){
  $G['this']->data()->open('dev.admin.menu')->delete("token='$grade'");
  $T=$G['this']->data()->open('dev.admin.menu')->record("token='$grade' order by step,id");
  onez()->location(onez('admin.menu')->href('/pages/menu.php'));
}
$record=$G['this']->data()->open('dev.admin.menu')->record("token='$grade' order by step,id");
$G['title']='菜单列表';
onez('admin')->header();
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
  <form id="form-common" method="post">
  <div class="btns" style="padding-bottom: 10px">
    <div class="pull-left">
      <a href="<?php echo onez('admin.menu')->href('/pages/menu.edit.php?grade='.$grade.'&type=group')?>" class="btn btn-success">
        添加分类
      </a>
      <a href="<?php echo onez('admin.menu')->href('/pages/menu.edit.php?grade='.$grade)?>" class="btn btn-success">
        添加菜单
      </a>
    </div>
    <div class="pull-right">
      <button type="button" class="btn btn-danger" onclick="_reset()">
        重置菜单
      </button>
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
    <div class="box-body  no-padding">
      <table class="table table-striped">
        <thead>
          <tr>
                      <th>菜单名称(拖动可排序)</th>
                      <th>菜单级别</th>
                      <th>链接地址</th>
                      <th>是否显示</th>
                      <th>操作</th>
          </tr>
        </thead>
        <tbody class="todo-list">
          <?php foreach($record as $rs){
            $href=$rs['key3'].$rs['key4'];
            $gradename=$href?'菜单':'<code>分类</code>';
             ?>
          <tr>
                      <td><span class="handle" data-id="<?php echo $rs['id'];?>">
              <i class="fa fa-ellipsis-v"></i>
              <i class="fa fa-ellipsis-v"></i>
            </span><span style="<?php echo $href?'':'color:#2351B9;font-weight:bold'?>"><?php echo $rs['name']?></span></td>
                      <td><?php echo $gradename?></td>
                      <td><?php echo $href?></td>
                      <td><input type="checkbox" name="enabled[<?php echo $rs['id'];?>]" value="1"<?php echo $rs['index1']?' checked':''?> /></td>
                      <td>
              <a href="<?php echo onez('admin.menu')->href('/pages/menu.edit.php?grade='.$grade.'&id='.$rs['id'])?>" class="btn btn-xs btn-success">
                编辑
              </a>
<?php if($rs['index2']){?>
              <a href="javascript:void(0)" onclick="onez.del('<?php echo $rs['id'];?>')" class="btn btn-xs btn-danger">
                删除
              </a>
<?php }?>
                      </td>
                    
            <td>
            </td>
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
      <button type="submit" class="btn btn-primary">
        保存
      </button>
  <input type="hidden" name="action" value="save" />
  </form>
</section>
<script type="text/javascript">
function _reset(){
  onez.confirm('您确定要重新初始化菜单吗？所有排序和名称将被重置',function(){
    location.href='<?php echo onez('admin.menu')->href('/pages/menu.php?grade='.$grade.'&action=reset')?>';
  });
}
$(function(){
  $('#form-common').bind('submit',function(){
    onez.formpost(this);
    return false;
  });
});
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
