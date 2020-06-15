<?php


!defined('IN_ONEZ') && exit('Access Denied');
$pos=onez()->gp('pos');
$mod=onez()->gp('mod');
$mod=trim($mod,'/');
list($grade)=explode('/',$mod);


$id=(int)onez()->gp('id');
$upid=(int)onez()->gp('upid');
if($id){#编辑
  $item=$G['this']->data()->open('menus')->one("token='$grade' and key1='$pos' and id='$id'");
  $G['title']='编辑菜单';
  $upid=$item['upid'];
  $btnname='保存修改';
}else{#添加
  $item=array();
  $G['title']='添加菜单';
  $btnname='立即添加';
}

#初始化表单
$form=onez('admin')->widget('form')
  ->set('title',$G['title'])
  ->set('values',$item)
;

#创建表单项
$form->add(array('type'=>'hidden','key'=>'action','value'=>'save'));

if($upid){
  $T=$G['this']->data()->open('menus')->record("token='$grade' and key1='$pos' and upid='0' order by step,id");
  $options=array();
  foreach($T as $rs){
    $options[$rs['id']]=$rs['name'];
  }
  $form->add(array('label'=>'上级菜单','type'=>'select','key'=>'upid','options'=>$options));
}
$form->add(array('label'=>'菜单名称','type'=>'text','key'=>'name','hint'=>'请填写菜单名称','notempty'=>'菜单名称不能为空'));
if(!$id || $item['key2']=='none'){
  $form->add(array('label'=>'链接地址','type'=>'text','key'=>'href','hint'=>'','notempty'=>''));
}
$options=array();
$options['_self']='跳转';
$options['_blank']='新窗口';
$options['miniwin']='对话框';
$form->add(array('label'=>'打开方式','type'=>'select','key'=>'target','options'=>$options));


#处理提交
if($onez=$form->submit()){
  if($id){
    if($pos=='left' && $item['key2']=='none'){
      $onez['url']=$onez['href'];
    }
    $G['this']->data()->open('menus')->update($onez,"id='$id'");
  }else{
    if($pos=='left'){
      $onez['url']=$onez['href'];
    }
    $onez['upid']=$upid;
    $onez['token']=$grade;
    $onez['key1']=$pos;
    $onez['key2']='none';
    $onez['index1']=1;
    $G['this']->data()->open('menus')->insert($onez);
  }
  onez()->ok('操作成功','reload2');
}
onez('admin')->header();
?>
<section class="content-header">
  <h1>
    <?php echo $G['title']?><small><?php echo $F['subject']?></small>
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
      </div>
    </div>
    <input type="hidden" name="action" value="save" />
  </form>
</section>
<?php
echo $form->js();
onez('admin')->footer();
?>