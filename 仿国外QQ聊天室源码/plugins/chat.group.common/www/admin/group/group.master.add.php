<?php


!defined('IN_ONEZ') && exit('Access Denied');
$groupid=(int)onez()->gp('upid');
$group=$G['this']->data()->open('group')->one("id='$groupid'");

$G['title']='请选择用户';
$action=onez()->gp('action');
if($action=='add'){
  $id=(int)onez()->gp('id');
  $G['this']->data()->open('group_master')->insert(array(
    'upid'=>$groupid,
    'userid'=>$id,
  ));
  $G['this']->data()->open('group')->update(array(
    'master_list_time'=>0,
  ),"id='$groupid'");
  onez()->ok('添加管理成功','reload2');
}
$xxx="";
onez('admin')->header();
$uids=array();
$T=$G['this']->data()->open('group_master')->record("upid='$rs[id]' order by index1 desc");
foreach($T as $r){
  $uids[]=$r['userid'];
}
if($uids){
  $xxx.=" and id not in (".implode(',',$uids).")";
}
$kw=onez()->gp('kw');
if($kw){
  $_GET['kw']=$kw;
  $xxx.=" and (`username` like '%$kw%' or key8 like '%$kw%' or key9 like '%$kw%' or key10 like '%$kw%')";
}

$record=$G['this']->data()->open('member')->page("1$xxx order by id desc");
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
<form id="form-search" method="post" style="padding-bottom: 10px">
<table>
	<tr>
		<td><input class="form-control" id="input-kw" name="kw" type="text" style="width: 300px" placeholder="请填写昵称/登录账号/编号/IP" value="<?php echo $kw?>"></td>
		<td style="padding-left: 5px">
        <button type="submit" class="btn btn-primary">
          查询
        </button>
    </td>
	</tr>
</table>
  </form>
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
              <a href="javascript:void(0)" onclick="onez.add('<?php echo $rs['id']?>')" class="btn btn-xs btn-primary">
                添加
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
<script type="text/javascript">
onez.add=function(id){
  onez.confirm('您确定要将此用户添加为群(<?php echo $group['name']?>)管理员吗？',function(){
    $.post(window.location.href,{action:'add',id:id,ajax:1},function(data){
      onez.doit(data);
    },'json');
  });
};
</script>
<?php
onez('admin')->footer();
?>