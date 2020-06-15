<?php

!defined('IN_ONEZ') && exit('Access Denied');
$G['title']='菜单管理';
$upid=(int)onez()->gp('upid');
$action=onez()->gp('action');
if($action=='delete'){
  $id=(int)onez()->gp('id');
  $G['this']->data()->open('menus')->delete("id='$id'");
  $G['this']->data()->open('menus')->delete("upid='$id'");
  onez()->ok('删除菜单成功','reload');
}elseif($action=='save'){
  ob_clean();
  $name=onez()->gp('name');
  $step=onez()->gp('step');
  $index1=onez()->gp('index1');
  foreach($name as $id=>$v){
    $rs=array();
    $rs['name']=$name[$id];
    $rs['step']=(int)$step[$id];
    $rs['index1']=(int)$index1[$id];
    $G['this']->data()->open('menus')->update($rs,"id='$id'");
  }
  onez('showmessage')->ok('操作成功',onez()->cururl());
}
$mod=onez()->gp('mod');
$mod=trim($mod,'/');
list($grade)=explode('/',$mod);


$options=array();
$options['left']='页面左侧';
$options['top.left']='顶部左侧';
$options['top.right']='顶部右侧';
$pos=onez()->gp('pos');
if(empty($options[$pos])){
  $pos=key($options);
}

onez('admin')->header();

/*
list($menu_top_left,$menu_top_right,$menu)=onez('admin')->old_menus;
$menus=array();
$hash=0;
if($pos=='left'){
  $upid=0;
  $menus=$cmenus=array();
  foreach($menu as $v){
    if(!$v['href'] && !$v['url']){
      if($cmenus){
        $menus[]=$cmenus;
      }
      #$hash=md5(serialize($v));
      $hash++;
      $cmenus=array('name'=>$v['name'],'hash'=>$hash,'children'=>array());
      continue;
    }
    #$hash=md5(serialize($v));
    $hash++;
    $v['hash']=$hash;
    $cmenus['children'][]=$v;
  }
  if($cmenus){
    $menus[]=$cmenus;
  }
}elseif($pos=='top.left' || $pos=='top.right'){
  
}
foreach($menus as $v1){
  unset($old_menus_hash[$v1['hash']]);
  $T=$G['this']->data()->open('menus')->one("token='$grade' and key1='$pos' and key2='$v1[hash]'");
  $mid=0;
  if(!$T){
    $onez=array();
    $onez['upid']=0;
    $onez['name']=$v1['name'];
    $onez['href']=$v1['href'];
    $onez['url']=$v1['url'];
    $onez['target']=$v1['target'];
    $onez['class']=$v1['class'];
    $onez['token']=$grade;
    $onez['key1']=$pos;
    $onez['key2']=$v1['hash'];
    $onez['index1']=1;
    $mid=$G['this']->data()->open('menus')->insert($onez);
  }
  foreach($v1['children'] as $v2){
    unset($old_menus_hash[$v2['hash']]);
    $T=$G['this']->data()->open('menus')->one("token='$grade' and key1='$pos' and key2='$v2[hash]'");
    if(!$T){
      $onez=array();
      $onez['upid']=$mid;
      $onez['name']=$v2['name'];
      $onez['href']=$v2['href'];
      $onez['url']=$v2['url'];
      $onez['target']=$v2['target'];
      $onez['class']=$v2['class'];
      $onez['token']=$grade;
      $onez['key1']=$pos;
      $onez['key2']=$v2['hash'];
      $onez['index1']=1;
      $G['this']->data()->open('menus')->insert($onez);
    }
  }
}
if($old_menus_hash){
  $ids=implode(',',array_values($old_menus_hash));
  $T=$G['this']->data()->open('menus')->record("token='$grade' and key1='$pos' and id in ($ids)");
  foreach($T as $rs){
    $G['this']->data()->open('menus')->delete("id='$rs[id]'");
    $G['this']->data()->open('menus')->delete("upid='$rs[id]'");
  }
}

*/
$record=$G['this']->data()->open('menus')->record("upid=0 and token='$grade' and key1='$pos' order by step,id");

?>
<style>
.icon-item{
  text-align:center;
  display: inline-block;
}
.icon-item .icon{
  width:38px;
  height:38px;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center center;
  display: inline-block;
}
.icon-item p{
  margin: 5px;
}
</style>
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
      <?php echo $G['title']?>
    </li>
  </ol>
</section>
<style>
.pictext2 img.icon{
  float: left;
  width:60px;
  margin:0 5px 0 0;
}
.pictext2 h3{
  margin: 0;
  font-size: 16px;
}
</style>
<section class="content">
  <form id="form-common" method="post">
  <div class="btns" style="padding-bottom: 10px">
    <div class="pull-left">
<?php  foreach($options as $k=>$v){ ?>
      <a href="<?php echo onez('site')->href('/diy/menus.php')?>&pos=<?php echo $k?>" class="btn btn-<?php echo $k==$pos?'info':'default'?>">
        <?php echo $v?>
      </a>
<?php  } ?>
    </div>
    <div class="pull-right">
      <a href="<?php echo onez('site')->href('/diy/menus.edit.php')?>&pos=<?php echo $pos?>" class="onez-miniwin btn btn-success">
        添加主菜单
      </a>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">
        <?php echo $G['title']?>
      </h3>
      <div class="box-tools pull-right">
      </div>
    </div>
    <div class="box-body  table-responsive no-padding">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              菜单名称
            </th>
            <th>
              排序
            </th>
            <th>
              可用
            </th>
            <th>
              操作
            </th>
          </tr>
        </thead>
        <tbody class="todo-list">
          <?php foreach($record as $rs){
$record2=$G['this']->data()->open('menus')->record("upid=$rs[id] and token='$grade' and key1='$pos' order by step,id");
            ?>
          <tr>
            <td width="220">
              <input type="text" style="width:200px" class="form-control" name="name[<?php echo $rs['id']?>]" value="<?php echo $rs['name']?>" />
            </td>
            <td width="80">
              <input type="text" style="width:60px" class="form-control" name="step[<?php echo $rs['id']?>]" value="<?php echo $rs['step']?>" />
            </td>
            <td width="40" style="vertical-align: middle;">
              <input type="checkbox" name="index1[<?php echo $rs['id']?>]" value="1" <?php echo $rs['index1']?' checked':''?> />
            </td>
            <td style="vertical-align: middle;">
              <a href="<?php echo onez('site')->href('/diy/menus.edit.php?upid='.$rs['id'])?>&pos=<?php echo $pos?>" class="onez-miniwin btn btn-xs btn-info">
                添加子菜单
              </a>
              <a href="<?php echo onez('site')->href('/diy/menus.edit.php?id='.$rs['id'])?>&pos=<?php echo $pos?>" class="onez-miniwin btn btn-xs btn-success">
                编辑
              </a>
              <?php if($rs['key2']=='none'){?>
              <a href="javascript:void(0)" onclick="onez.del('<?php echo $rs['id'];?>')" class="btn btn-xs btn-danger">
                删除
              </a>
              <?php }?>
            </td>
          </tr>
          
          
          <?php foreach($record2 as $rs2){
            ?>
          <tr>
            <td width="220">
              <input type="text" style="width:200px;text-align: right;color:#999" class="form-control" name="name[<?php echo $rs2['id']?>]" value="<?php echo $rs2['name']?>" />
            </td>
            <td width="80">
              <input type="text" style="width:60px" class="form-control" name="step[<?php echo $rs2['id']?>]" value="<?php echo $rs2['step']?>" />
            </td>
            <td width="40" style="vertical-align: middle;">
              <input type="checkbox" name="index1[<?php echo $rs2['id']?>]" value="1" <?php echo $rs2['index1']?' checked':''?> />
            </td>
            <td style="vertical-align: middle;">
              <a href="<?php echo onez('site')->href('/diy/menus.edit.php?id='.$rs2['id'])?>&pos=<?php echo $pos?>" class="onez-miniwin btn btn-xs btn-success">
                编辑
              </a>
              <?php if($rs2['key2']=='none'){?>
              <a href="javascript:void(0)" onclick="onez.del('<?php echo $rs2['id'];?>')" class="btn btn-xs btn-danger">
                删除
              </a>
              <?php }?>
            </td>
          </tr>
          <?php }?>
          
          
          <?php }?>
          
        </tbody>
      </table>
    </div>
  </div>
    <button type="submit" class="btn btn-primary">
      保存修改    </button>
    <input type="hidden" name="action" value="save" />
  </form>
</section>
<?php
onez('admin')->footer();
?>