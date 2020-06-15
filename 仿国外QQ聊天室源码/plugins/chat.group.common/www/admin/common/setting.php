<?php

!defined('IN_ONEZ') && exit('Access Denied');
define('CUR_URL',onez('chat.group.common')->href('/admin/common/setting.php',0));

onez('form.file');
onez('form.time');
onez('ip');
$item=$G['this']->option();
$G['title']='基本设置';
$btnname='保存';
#初始化表单
$form=onez('admin')->widget('form')
  ->set('title',$G['title'])
  ->set('values',$item)
;
#创建表单项
$form->add(array('type'=>'hidden','key'=>'action','value'=>'save'));

$form->add(array('label'=>'关闭内置注册功能','type'=>'checkbox','key'=>'is_close_register','hint'=>'','notempty'=>'','group'=>''));

$options=array();
$options['chat.group.common']='默认风格';
$r=onez('call')->call('templates_name');
if($r){
  foreach($r as $v){
    list($ptoken,$name)=$v;
    $options[$ptoken]=$name;
  }
}
$form->add(array('label'=>'模板风格','type'=>'select','key'=>'template','options'=>$options));

$form->add(array('label'=>'修正网站地址','type'=>'text','key'=>'homepage','hint'=>'如网站显示正常，请勿修改','notempty'=>'','group'=>''));
$form->add(array('label'=>'网站名称','type'=>'text','key'=>'sitename','hint'=>'','notempty'=>'','group'=>''));
$form->add(array('label'=>'昵称最大长度','type'=>'text','key'=>'nickname_maxlength','hint'=>'','notempty'=>'','group'=>''));
$form->add(array('label'=>'服务端地址','type'=>'text','key'=>'server_host','hint'=>'ws://m.onez.cn:11111','notempty'=>'','group'=>''));
#$form->add(array('label'=>'进入房间提示语','type'=>'textarea','key'=>'tip_join','hint'=>'','notempty'=>'','group'=>''));
#$form->add(array('label'=>'离开房间提示语','type'=>'textarea','key'=>'tip_leave','hint'=>'','notempty'=>'','group'=>''));
$form->add(array('label'=>'底部版权信息','type'=>'textarea','key'=>'copyright','hint'=>'','notempty'=>'','group'=>''));
$form->add(array('label'=>'图片最大边尺寸','type'=>'text','key'=>'image_maxsize','hint'=>'默认280像素','notempty'=>'','group'=>''));

$options=array();
$options['ctrl_enter']='Ctrl+回车发送';
$options['enter']='回车发送';
$form->add(array('label'=>'默认发消息按键','type'=>'select','key'=>'send_key','options'=>$options,'notempty'=>'','group'=>''));
onez('call')->call('chat_setting',$form);

#处理提交
if($onez=$form->submit()){
  $G['this']->option_set($onez);
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