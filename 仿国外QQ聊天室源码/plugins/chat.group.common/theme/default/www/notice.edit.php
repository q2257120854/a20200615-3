<?php

!defined('IN_ONEZ') && exit('Access Denied');
define('CUR_URL','/admin/pages/group_notice.php');
$groupid=onez()->gp('groupid');
!$G['ismaster'] && onez('chat.group.common')->error('没有权限');

$id=(int)onez()->gp('id');
if($id){#编辑
  $item=$G['this']->data()->open('group_notice')->one("id='$id' and `upid`='$groupid'");
  $G['title']='编辑公告';
  $btnname='保存修改';
}else{#添加
  $item=array();
  $copyid=(int)onez()->gp('copyid');
  if($copyid){
    $item=$G['this']->data()->open('group_notice')->one("id='$copyid' and `upid`='$groupid'");
  }
  $G['title']='添加公告';
  $btnname='立即添加';
}

#初始化表单
$form=onez('admin')->widget('form')
  ->set('title',$G['title'])
  ->set('values',$item)
;
#创建表单项
$form->add(array('type'=>'hidden','key'=>'action','value'=>'save'));
$form->add(array('label'=>'标题','type'=>'text','key'=>'subject','hint'=>'','notempty'=>'标题不能为空','group'=>''));
$form->add(array('label'=>'公告内容','type'=>'ueditor','full'=>1,'key'=>'content','hint'=>'','notempty'=>'','group'=>''));


#处理提交
if($onez=$form->submit()){
  ob_clean();
  if($id){
    $G['this']->data()->open('group_notice')->update($onez,"id='$id' and `upid`='$groupid'");
    if($group['noticeid']==$id){
      $G['this']->data()->open('group')->update(array(
        'notice'=>$onez['content'],
        'noticetime'=>0,
      ),"id='$groupid'");
    }
  }else{
    $onez['userid']=$G['userid'];
    $onez['upid']=$groupid;
    $id=$G['this']->data()->open('group_notice')->insert($onez);
    $G['this']->data()->open('group')->update(array(
      'noticeid'=>$id,
      'noticetime'=>0,
      'notice'=>$onez['content'],
    ),"id='$groupid'");
  }
  
  onez('call')->call('chat_push',array(
    'type'=>'notice',
    'groupid'=>$groupid,
    'userid'=>$userid,
    'message'=>$onez['content'],
  ));
  #onez()->ok('操作成功',$G['this']->href('/admin/pages/group_notice.php&groupid='.$groupid));
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
        <!--<a href="<?php echo $G['this']->href('/admin/pages/group_notice.php&groupid='.$groupid)?>" class="btn btn-default">
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