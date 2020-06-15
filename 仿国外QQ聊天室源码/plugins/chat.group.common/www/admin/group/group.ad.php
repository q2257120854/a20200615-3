<?php

!defined('IN_ONEZ') && exit('Access Denied');
define('CUR_URL',onez('chat.group.common')->href('/admin/group/group.php',0));

$id=(int)onez()->gp('id');
$item=$G['this']->data()->open('group')->one("id='$id'");
$G['title']='编辑群广告';
$btnname='保存修改';
$types=array();
$types['ad_pc_tr']='电脑版右上角';
$types['ad_pc_bl']='电脑版左下角';
$types['ad_pc_mt']='电脑版消息框顶部';
$types['ad_pc_mb']='电脑版消息框底部';
$types['ad_m_t']='手机版顶部';
$type=onez()->gp('type');
if(empty($types[$type])){
  $type=key($types);
}
$G['title'].=' - '.$types[$type];

#初始化表单
$form=onez('admin')->widget('form')
  ->set('title',$G['title'])
  ->set('values',$item)
;
#创建表单项
$form->add(array('type'=>'hidden','key'=>'action','value'=>'save'));

onez('ueditor');
$type!='ad_m_t' && $form->add(array('label'=>'自定义代码','type'=>'textarea','key'=>$type.'_code','hint'=>'','notempty'=>'','group'=>''));
$form->add(array('label'=>'','type'=>'ueditor','full'=>1,'key'=>$type,'hint'=>'','notempty'=>'','group'=>''));


#处理提交
if($onez=$form->submit()){
  ob_clean();
  $onez[$type.'_code']=$_REQUEST[$type.'_code'];
  $G['this']->data()->open('group')->update($onez,"id='$id'");
  onez()->ok('操作成功','reload');
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
  <div class="btns" style="padding-bottom: 10px">
    <div class="pull-left">
<?php  foreach($types as $k=>$v){ ?>
      <a href="<?php echo onez('chat.group.common')->href('/admin/group/group.ad.php?id='.$id)?>&type=<?php echo $k?>" class="btn btn-<?php echo $k==$type?'info':'default'?>">
        <?php echo $v?>
      </a>
<?php  } ?>
    </div>
    <div class="pull-right">
    </div>
    <div class="clearfix"></div>
  </div>
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