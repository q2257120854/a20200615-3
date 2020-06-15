<?php

!defined('IN_ONEZ') && exit('Access Denied');
$option=$G['this']->option();
#模板名称
$G['template']=$option['template'];
!$G['template'] && $G['template']='chat.group.templates.biz';
onez($G['template']);


$G['title']=$option['sitename'];
!$G['title'] && $G['title']='仿QQ群内部交流系统';
$G['header'].=onez('jquery')->head(1);
$G['header'].=onez('jqueryui')->head(1);
$G['header'].=onez('bootstrap')->head(1);
if(!$option['background']){
  $option['background']=onez('chat.group.common')->url.'/images/bg.jpg';
  $option['background_type']='repeat';
}
if(!$groupid && $option['background']){
  $G['header'].=<<<ONEZ
<style>
body{
  background-image: url($option[background])!important;
}
</style>
ONEZ;
}
$G['footer'].=onez('ui')->js(onez('admin')->url.'/assets/js/bootbox.js');
$G['footer'].=onez('ui')->js(onez('admin')->url.'/assets/js/onez.js');
$G['smarty']=onez('chat.group.common');
onez('smarty')->assign('baseurl',$baseurl);
onez('smarty')->assign('option',$option);