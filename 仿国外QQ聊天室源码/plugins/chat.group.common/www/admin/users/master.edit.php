<?php

!defined('IN_ONEZ') && exit('Access Denied');
define('CUR_URL',onez('chat.group.common')->href('/admin/users/master.php',0));

$id=(int)onez()->gp('id');
if($id){#编辑
  $item=$rs=$G['this']->data()->open('member')->one("id='$id'");
  $G['title']='编辑房间管理员信息';
  $btnname='保存修改';
  unset($item['password']);
}else{#添加
  $G['title']='添加房间管理员';
  $btnname='立即添加';
}

#初始化表单
$form=onez('admin')->widget('form')
  ->set('title',$G['title'])
  ->set('values',$item)
;
#创建表单项
$form->add(array('type'=>'hidden','key'=>'action','value'=>'save'));
$form->add(array('label'=>'显示昵称','type'=>'text','key'=>'nickname','hint'=>'','notempty'=>'显示昵称不能为空'));
$form->add(array('label'=>'登录账号','type'=>'text','key'=>'username','hint'=>'请填写登录账号','notempty'=>'登录账号不能为空'));
$form->add(array('label'=>'QQ号码','type'=>'text','key'=>'qq','hint'=>'','notempty'=>''));
if($id){
  $form->add(array('label'=>'登录密码','type'=>'password','key'=>'password','hint'=>'已加密，不改请留空','notempty'=>''));
}else{
  $form->add(array('label'=>'登录密码','type'=>'password','key'=>'password','hint'=>'请填写登录密码','notempty'=>'登录密码不能为空'));
}
#处理提交
if($onez=$form->submit()){
  ob_clean();
  if($id){
    $G['this']->data()->open('member')->rows("`username`='$onez[username]' and id<>$id")>0 && onez()->error('这个账号已经存在，请更换');
    if($onez['password']){
      $onez['password']=md5($onez['password']);
    }else{
      unset($onez['password']);
    }
    $G['this']->data()->open('member')->update($onez,"userid='$id'");
  }else{
    $G['this']->data()->open('member')->rows("`username`='$onez[username]'")>0 && onez()->error('这个账号已经存在，请更换');
    $onez['password']=md5($onez['password']);
    $onez['grade']='master';
    $G['this']->data()->open('member')->insert($onez);
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
        <button type="submit" class="btn btn-primary">
          <?php echo $btnname?>
        </button>
      </div>
    </div>
    <input type="hidden" name="action" value="save" />
  </form>
</section>
<?php
echo $form->js();
onez('admin')->footer();
?>