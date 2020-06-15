<?php

!defined('IN_ONEZ') && exit('Access Denied');
define('CUR_URL','/notice.php');
$groupid=onez()->gp('groupid');

$id=(int)onez()->gp('id');
$item=$rs=$G['this']->data()->open('group_notice')->one("id='$id' and `upid`='$groupid'");
$G['title']=$rs['subject'];

#初始化表单
$form=onez('admin')->widget('form')
  ->set('title',$G['title'])
  ->set('values',$item)
;
#创建表单项
$form->add(array('type'=>'hidden','key'=>'action','value'=>'save'));
$form->add(array('label'=>'发布时间','type'=>'html','html'=>'<code>'.date('Y-m-d H:i:s',$rs['addtime']).'</code>'));

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
          <a href="javascript:history.go(-1);" class="btn btn-sm btn-default">
            返回
          </a>
        </div>
      </div>
      <div class="box-body">
        <p style="color: #999;font-size:12px">
          发布时间: <?php echo date('Y-m-d H:i:s',$rs['addtime'])?>
        </p>
        <?php echo $rs['content']?>
      </div>
    </div>
    <input type="hidden" name="action" value="save" />
  </form>
</section>
<?php
echo $form->js();
onez('admin')->footer();
?>