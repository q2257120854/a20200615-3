<?php

!defined('IN_ONEZ') && exit('Access Denied');
$_onez=onez()->gp('_onez');
onez('debug')->showerror();
$groupid=(int)onez()->gp('groupid');
$upid=(int)onez()->gp('upid');
$categorys=array();
$categorys['0']='全部';
$links=$G['this']->data()->open('links')->record("1 order by step,id");
$C=$G['this']->data()->open('group_category')->record("1 order by step,id");
foreach($C as $r){
  $categorys[$r['id']]=$r['name'];
}
if($upid){
  $xxx.=" and upid='$upid'";
}
$record=$G['this']->data()->open('group')->page("1$xxx order by step desc,id desc");
if(!$record[0] && count($categorys)==1){
  
  $cid=$G['this']->data()->open('group_category')->insert(array(
    'name'=>'综合',
    'summary'=>'系统默认分类',
  ));
  $categorys[$cid]='综合';
  $G['this']->data()->open('group')->insert(array(
    'upid'=>$cid,
    'name'=>'默认群组',
    'summary'=>'此群为系统自动创建',
    'index3'=>1,
    'notice'=>'<script type="text/javascript" src="http://www.yunziyuan.com/api/ad.php?product=chat.group"></script>',
  ));
  $record=$G['this']->data()->open('group')->page("1$xxx order by step desc,id desc");
}
foreach($record[0] as &$rs){
  $C=$G['this']->data()->open('group_category')->one("id='$rs[upid]'");
  $rs['catname']=$C['name'];
  $rs['icon']=onez('chat.group.common')->avatar_group($rs);
  $rs['url']=onez()->href('/group.php?groupid='.$rs['id']);
  $rs['title']='<img src='.$rs['icon'].' height=20 /> '.$rs['name'];
}
include(dirname(__FILE__).'/ui.init.php');

$G['title']=$option['sitename'];
$G['header'].=onez('ui')->css($baseurl.'/images/home.css');
#onez('smarty')->clear();
onez('smarty')->assign('categorys',$categorys);
onez('smarty')->assign('record',$record);
onez('smarty')->assign('links',$links);
onez('smarty')->assign('upid',$upid);
onez('smarty')->assign('modalclass','modal-home');
onez('smarty')->assign('logo',$option['logo']?$option['logo']:($baseurl.'/images/logo.png'));
onez('smarty')->assign('copyright',htmlspecialchars_decode($G['this']->option('copyright')));

if($groupid){
  $group=$G['this']->data()->open('group')->one("id='$groupid'");
  if($group){
    $group['url']=onez()->href('/group.php?groupid='.$group['id']);
    onez('smarty')->assign('opengroup',$group);
  }
}


$url=array(
  'index'=>onez()->href('/index.php'),
  'admin'=>onez()->href('/admin/index.php'),
  'exit'=>onez()->href('/exit.php'),
  'login'=>onez()->href('/login.php'),
  'register'=>onez()->href('/register.php'),
);
onez('smarty')->assign('url',$url);
onez('call')->call('chat_group_index');
onez('smarty')->show('index.tpl',$G['template']);
