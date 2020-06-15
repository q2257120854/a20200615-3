<?php

!defined('IN_ONEZ') && exit('Access Denied');
$type=onez()->gp('type');
$grade=onez()->gp('grade');
$id=(int)onez()->gp('id');
if($id){#编辑
  $item=$G['this']->data()->open('dev.admin.menu')->one("id='$id'");
  $type=($item['href'] || $item['url']?'item':'group');
  $grade=$item['token'];
  $G['title']='编辑菜单项';
  $btnname='保存修改';
}else{#添加
  $item=array();
  $G['title']='添加菜单项';
  $btnname='立即添加';
}

#初始化表单
$form=onez('admin')->widget('form')
  ->set('title',$G['title'])
  ->set('values',$item)
;

#创建表单项
$form->add(array('type'=>'hidden','key'=>'action','value'=>'save'));

if($type=='group'){
  $form->add(array('label'=>'分类名称','type'=>'text','key'=>'name','hint'=>'','notempty'=>'分类名称不能为空'));
}else{
  $form->add(array('label'=>'菜单名称','type'=>'text','key'=>'name','hint'=>'','notempty'=>'菜单名称不能为空'));
  $form->add(array('label'=>'链接地址','type'=>'text','key'=>'href','hint'=>'','notempty'=>'链接地址不能为空'));
}

#处理提交
if($onez=$form->submit()){

  if($id){
    $G['this']->data()->open('dev.admin.menu')->update($onez,"id='$id'");
  }else{
    $onez['userid']=$G['userid'];
    $onez['token']=$grade;
    $onez['index1']=1;
    $onez['index2']=1;
    $G['this']->data()->open('dev.admin.menu')->insert($onez);
  }
  onez()->ok('操作成功',onez('admin.menu')->href('/pages/menu.php?grade='.$grade));
}
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
      <?php echo $G['title'];?>
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
        <?php echo $form->code();?>
      </div>
      <div class="box-footer clearfix">
        <button type="submit" class="btn btn-primary">
          <?php echo $btnname;?>
        </button>
        <a href="<?php echo onez('admin.menu')->href('/pages/menu.php?grade='.$grade)?>" class="btn btn-default">
          返回
        </a>
      </div>
    </div>
  </form>
</section>
<?php
echo $form->js();
onez('admin')->footer();
?>