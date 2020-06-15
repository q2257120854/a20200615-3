<?php


!defined('IN_ONEZ') && exit('Access Denied');
define('CUR_URL',onez('chat.group.common')->href('/admin/group/group.php',0));

$id=(int)onez()->gp('id');
if($id){#编辑
  $item=$G['this']->data()->open('group')->one("id='$id'");
  $G['title']='清除记录';
  $btnname='立即清除';
}
!$item['alpha'] && $item['alpha']='10';

#初始化表单
$form=onez('admin')->widget('form')
  ->set('title',$G['title'])
  ->set('values',$item)
;
#创建表单项
$form->add(array('type'=>'hidden','key'=>'action','value'=>'save'));

$form->add(array('label'=>'您要清除多久以前的聊天记录','type'=>'form.time','key'=>'time','hint'=>'留空为清除所有'));


#处理提交
if($onez=$form->submit()){
  ob_clean();
  $time=$onez['time'];
  if($time){
    $G['this']->data()->open('message')->delete("upid='$id' and addtime<=".strtotime($time));
  }else{
    $G['this']->data()->open('message')->delete("upid='$id'");
  }
  #onez()->ok('操作成功',onez('chat.group.common')->href('/admin/group/group.php'));
  onez()->ok('清除成功','reload2');
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