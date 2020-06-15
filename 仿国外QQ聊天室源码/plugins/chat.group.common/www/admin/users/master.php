<?php


!defined('IN_ONEZ') && exit('Access Denied');
$type=onez()->gp('type');
define('CUR_URL',onez('chat.group.common')->href('/admin/users/master.php',0));


$G['title']='房间管理员管理';
$action=onez()->gp('action');
if($action=='delete'){
  $id=(int)onez()->gp('id');
  $G['this']->data()->open('member')->delete("id='$id'");
  onez()->ok('删除房间管理员成功','reload');
}
$xxx="";
onez('admin')->header();

$record=$G['this']->data()->open('member')->page("`grade`='master' order by id desc");
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
      <?php echo $G['title']?>
    </li>
  </ol>
</section>
<section class="content">
  <div class="btns" style="padding-bottom: 10px">
    <div class="pull-left">
      <a href="<?php echo onez('chat.group.common')->href('/admin/users/master.edit.php')?>" class="onez-miniwin btn btn-success">
        添加新用户
      </a>
    </div>
    <div class="pull-right">
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
            <th>显示昵称</th>
            <th>注册时间</th>
            <th>登录账号</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody class="todo-list">
          <?php foreach($record[0] as $rs){?>
          <tr>
            <td>
              <?php echo $rs['nickname']?>
            </td>
            <td>
              <?php echo date('Y-m-d H:i:s',$rs['addtime'])?>
            </td>
            <td>
              <?php echo $rs['username']?>
            </td>
            <td>
              <a href="<?php echo onez('chat.group.common')->href('/admin/users/master.edit.php?id='.$rs['id'])?>" class="onez-miniwin btn btn-xs btn-success">
                编辑
              </a>
              <a href="javascript:void(0)" onclick="onez.del('<?php echo $rs['id']?>')" class="btn btn-xs btn-danger">
                删除
              </a>
            </td>
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
<?php if($record[1]){ ?>
    <div class="box-footer clearfix">
      <?php echo $record[1]?>
    </div>
<?php  } ?>
  </div>
</section>
<?php
onez('admin')->footer();
?>