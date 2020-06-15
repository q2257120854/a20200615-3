<?php


!defined('IN_ONEZ') && exit('Access Denied');
$option=$G['this']->option();

#模板名称
$G['template']=$option['template'];
!$G['template'] && $G['template']='chat.group.templates.default';
onez($G['template']);

$G['header'].=onez('jquery')->head(1);
$G['header'].=onez('jqueryui')->head(1);
$G['header'].=onez('bootstrap')->head(1);

$G['footer'].=onez('ui')->js(onez('admin')->url.'/assets/js/bootbox.js');
$G['footer'].=onez('ui')->js(onez('admin')->url.'/assets/js/onez.js');
$G['smarty']=onez('chat.group.plugin.talk');
onez('smarty')->assign('option',$option);