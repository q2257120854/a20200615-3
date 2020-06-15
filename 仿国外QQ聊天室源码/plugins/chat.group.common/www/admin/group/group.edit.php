<?php

!defined('IN_ONEZ') && exit('Access Denied');
define('CUR_URL',onez('chat.group.common')->href('/admin/group/group.php',0));

$id=(int)onez()->gp('id');
if($id){#编辑
  $item=$G['this']->data()->open('group')->one("id='$id'");
  $G['title']='编辑群组';
  $btnname='保存修改';
}else{#添加
  $item=array();
  $copyid=(int)onez()->gp('copyid');
  if($copyid){
    $item=$G['this']->data()->open('group')->one("id='$copyid'");
  }
  $G['title']='添加群组';
  $item['index1']='';
  $btnname='立即添加';
}
!$item['alpha'] && $item['alpha']='10';

#初始化表单
$form=onez('admin')->widget('form')
  ->set('title',$G['title'])
  ->set('values',$item)
;
#创建表单项
$form->add(array('type'=>'hidden','key'=>'action','value'=>'save'));
$options=array();
$C=$G['this']->data()->open('group_category')->record("1$xxx order by step,id");
foreach($C as $r){
  $options[$r['id']]=$r['name'];
}
$form->add(array('label'=>'所属分类','type'=>'select','key'=>'upid','options'=>$options,'group'=>''));
$form->add(array('label'=>'群组图标','type'=>'form.file','key'=>'icon','hint'=>'','notempty'=>'','group'=>''));
$form->add(array('label'=>'群组名称','type'=>'text','key'=>'name','hint'=>'','notempty'=>'群组名称不能为空','group'=>''));
$form->add(array('label'=>'群简介','type'=>'textarea','key'=>'summary','hint'=>'','notempty'=>'','group'=>''));
$form->add(array('label'=>'优先级','type'=>'text','key'=>'step','hint'=>'数字越大越靠前','notempty'=>'','group'=>''));
$form->add(array('label'=>'允许游客进入','type'=>'checkbox','key'=>'index3','group'=>''));
onez('call')->call('chat_group_admin_group_edit',$form);
onez('ueditor');
$form->add(array('label'=>'群公告','type'=>'ueditor','full'=>1,'key'=>'notice','hint'=>'','notempty'=>'','group'=>''));


#处理提交
if($onez=$form->submit()){
  ob_clean();
  if($id){
    $G['this']->data()->open('group')->update($onez,"id='$id'");
  }else{
    $onez['userid']=$G['userid'];
    $id=$G['this']->data()->open('group')->insert($onez);
  }
  #onez()->ok('操作成功',onez('chat.group.common')->href('/admin/group/group.php'));
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
          <?php echo $btnname?>
        </button>
        <!--<a href="<?php echo onez('chat.group.common')->href('/admin/group/group.php')?>" class="btn btn-default">
          返回
        </a>-->
      </div>
    </div>
    <input type="hidden" name="action" value="save" />
  </form>
</section>
<?php
echo $form->js();
onez('admin')->footer();
?>