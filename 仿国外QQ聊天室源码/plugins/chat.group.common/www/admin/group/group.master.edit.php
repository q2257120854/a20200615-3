<?php

!defined('IN_ONEZ') && exit('Access Denied');
define('CUR_URL',onez('chat.group.common')->href('/admin/users/users.php',0));
$id=(int)onez()->gp('id');
if($id){#编辑
  $item=$rs=$G['this']->data()->open('group_master')->one("id='$id'");
  $group=$G['this']->data()->open('group')->one("id='$item[upid]'");
  $G['title']='编辑群管理信息';
  $btnname='保存修改';
}
$action=onez()->gp('action');
if($action=='delete'){
  $id=(int)onez()->gp('id');
  $G['this']->data()->open('group_master')->delete("upid='$item[upid]' and id='$id'");
  $G['this']->data()->open('group')->update(array(
    'master_list_time'=>0,
  ),"id='$item[upid]'");
  onez()->ok('删除成功','reload2');

}

#初始化表单
$form=onez('admin')->widget('form')
  ->set('title',$G['title'])
  ->set('values',$item)
;
#创建表单项
$form->add(array('type'=>'hidden','key'=>'action','value'=>'save'));
$form->add(array('label'=>'群组名称','type'=>'html','html'=>'<code>'.$group['name'].'</code>','hint'=>''));
$form->add(array('label'=>'当前用户','type'=>'html','html'=>'<code>'.onez('chat.group.common')->nickname($item['userid']).'</code>','hint'=>''));
#$form->add(array('label'=>'显示昵称','type'=>'text','key'=>'nickname','hint'=>'','notempty'=>'显示昵称不能为空'));

#处理提交
if($onez=$form->submit()){
  ob_clean();
  if($id){
  }else{
  }
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
        <!--<button type="submit" class="btn btn-primary">
          <?php echo $btnname?>
        </button>-->
        <a href="javascript:void(0)" onclick="onez.del('<?php echo $id?>')" class="btn btn-danger">
          删除
        </a>
      </div>
    </div>
    <input type="hidden" name="action" value="save" />
  </form>
</section>
<?php
echo $form->js();
onez('admin')->footer();
?>