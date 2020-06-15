<?php

!defined('IN_ONEZ') && exit('Access Denied');
define('CUR_URL',onez('chat.group.common')->href('/admin/group/group.php',0));


$G['title']='群组管理';
$action=onez()->gp('action');
if($action=='delete'){
  $id=(int)onez()->gp('id');
  $G['this']->data()->open('group')->delete("id='$id'");
  onez()->ok('删除群组成功','reload');

}elseif($action=='clear'){
  $id=(int)onez()->gp('id');
  $G['this']->data()->open('message')->delete("upid='$id'");
  onez()->ok('记录已清空','reload');

}elseif($action=='steps'){
  ob_clean();
  $ids=explode(',',onez()->gp('ids'));
  $n=-100000;
  foreach($ids as $k=>$id){
    $rs=array();
    $rs['step']=$n;
    $G['this']->data()->open('group')->update($rs,"id='$id'");
    $n++;
  }
  onez()->ok('重新排序成功','reload');
}
$xxx="";

$upid=(int)onez()->gp('upid');
$categorys=array();
$categorys['0']='所有分类';
$C=$G['this']->data()->open('group_category')->record("1 order by step,id");
if(!$C){
  $G['this']->data()->open('group_category')->insert(array(
    'name'=>'综合',
    'summary'=>'系统默认分类',
  ));
  $C=$G['this']->data()->open('group_category')->record("1 order by step,id");
}
foreach($C as $r){
  $categorys[$r['id']]=$r['name'];
}
if($upid){
  $xxx.=" and upid='$upid'";
}


onez('admin')->header();

$record=$G['this']->data()->open('group')->page("1$xxx order by step desc,id desc");
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
<?php  foreach($categorys as $k=>$v){ ?>
      <a href="<?php echo onez('chat.group.common')->href('/admin/group/group.php')?>&type=<?php echo $type?>&upid=<?php echo $k?>" class="btn btn-<?php echo $k==$upid?'info':'default'?>">
        <?php echo $v?>
      </a>
<?php  } ?>
    </div>
    <div class="pull-right">

      <a href="<?php echo onez('chat.group.common')->href('/admin/group/group.edit.php')?>&upid=<?php echo $upid?>" data-width="960" class="onez-miniwin btn btn-success">
        创建新群组
      </a>
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
            <th>所属分类</th>
            <th>群组名称</th>
            <th>允许游客进入</th>
            <th>备注</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody class="todo-list">
          <?php foreach($record[0] as $rs){ ?>
<?php 
$C=$G['this']->data()->open('group_category')->one("id='$rs[upid]'");
$ex=onez('call')->call('chat_group_admin_group_list',$rs);
$summarys=$btns=$more=array();
if($ex){
  foreach($ex as $v){
    if($v['summary']){
      $summarys[]=$v['summary'];
    }
    if($v['btns']){
      $btns[]=$v['btns'];
    }
    if($v['more']){
      $more[]=$v['more'];
    }
  }
}
$rows=$more?5:4;
 ?>
          <tr>
            <td rowspan="<?php echo $rows?>" style="vertical-align: middle;"><?php echo $C['name']?></td>
            <td rowspan="<?php echo $rows?>" style="vertical-align: middle;border-right: 1px solid #eee">
              <img src="<?php echo onez('chat.group.common')->avatar_group($rs)?>" height="16" /> <?php echo $rs['name']?>
            </td>
            <td>
              <?php 
              echo $rs['index3']?('<span style="color:green">允许</span>'):'<span style="color:red">不允许</span>';
              ?>
            </td>
            <td>
              <?php echo $summarys?implode(' ',$summarys):''?>
            </td>
            <td>
              <a href="<?php echo onez()->href('/group.php?groupid='.$rs['id'])?>" target="_blank" class="btn btn-xs btn-info">
                进入1
              </a>
              <a href="<?php echo onez()->href('/index.php?groupid='.$rs['id'])?>" target="_blank" class="btn btn-xs btn-info">
                进入2
              </a>
              <a href="<?php echo onez('chat.group.common')->href('/admin/group/group.edit.php?id='.$rs['id'])?>" data-width="960" class="onez-miniwin btn btn-xs btn-success">
                编辑
              </a>
              <?php echo $btns?implode(' ',$btns):''?>
              <a href="javascript:void(0)" onclick="onez.del('<?php echo $rs['id']?>')" class="btn btn-xs btn-danger">
                删除
              </a>
            </td>
          </tr>
          <tr>
            <td colspan="20" style="color:gray;">
              群简介: <?php echo $rs['summary']?$rs['summary']:'暂无简介'?>
            </td>
          </tr>
          <tr>
            <td colspan="20" style="color:gray;">
              群公告: <?php echo $rs['notice']?strip_tags($rs['notice']):'暂无公告'?>
            </td>
          </tr>
          <tr>
            <td colspan="20" style="color:gray;">
              管理组: 
              <a href="<?php echo onez('chat.group.common')->href('/admin/group/group.master.add.php?upid='.$rs['id'])?>" data-width="960" class="onez-miniwin btn btn-xs btn-success">
                添加
              </a>
              <?php 
              $T=$G['this']->data()->open('group_master')->record("upid='$rs[id]' order by index1 desc");
              foreach($T as $r){
                echo '<a href="'.onez('chat.group.common')->href('/admin/group/group.master.edit.php?id='.$r['id']).'" data-width="960" class="onez-miniwin">'.onez('chat.group.common')->nickname($r['userid']).'</a>、 ';
              }
              ?>
              
            </td>
          </tr>
          <?php if($more){?>
          <tr>
            <td colspan="20">
              <?php echo implode(' ',$more)?>
            </td>
          </tr>
          <?php }?>
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
onez.clear=function(id){
  onez.confirm('您确定清除这个群的聊天记录吗？',function(){
    $.post(window.location.href,{action:'clear',id:id,ajax:1},function(data){
      onez.doit(data);
    },'json');
  });
};
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