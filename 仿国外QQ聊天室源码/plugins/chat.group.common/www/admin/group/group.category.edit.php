<?php


!defined('IN_ONEZ') && exit('Access Denied');
define('CUR_URL',onez('chat.group.common')->href('/admin/group/group.category.php',0));

$id=(int)onez()->gp('id');
if($id){#编辑
  $item=$G['this']->data()->open('group_category')->one("id='$id'");
  $G['title']='编辑分类';
  $btnname='保存修改';
}else{#添加
  $item=array();
  $copyid=(int)onez()->gp('copyid');
  if($copyid){
    $item=$G['this']->data()->open('group_category')->one("id='$copyid'");
  }
  $G['title']='添加分类';
  $btnname='立即添加';
}

#初始化表单
$form=onez('admin')->widget('form')
  ->set('title',$G['title'])
  ->set('values',$item)
;
#创建表单项
$form->add(array('type'=>'hidden','key'=>'action','value'=>'save'));
$form->add(array('label'=>'分类名称','type'=>'text','key'=>'name','hint'=>'','notempty'=>'分类名称不能为空','group'=>''));
$form->add(array('label'=>'分类描述','type'=>'textarea','key'=>'summary','hint'=>'','notempty'=>'','group'=>''));


#处理提交
if($onez=$form->submit()){
  ob_clean();
  if($id){
    $G['this']->data()->open('group_category')->update($onez,"id='$id'");
  }else{
    $onez['userid']=$G['userid'];
    $id=$G['this']->data()->open('group_category')->insert($onez);
  }
  onez()->ok('操作成功',onez('chat.group.common')->href('/admin/group/group.category.php'));
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
        <a href="<?php echo onez('chat.group.common')->href('/admin/group/group.category.php')?>" class="btn btn-default">
          返回
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