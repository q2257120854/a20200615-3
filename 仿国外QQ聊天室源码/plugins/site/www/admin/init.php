<?php


!defined('IN_ONEZ') && exit('Access Denied');

#网站样式
onez('admin')->style='skin-red';

$Menu=array();
$Menu=array_merge($Menu,include(dirname(__FILE__).'/menu.inc.php'));
$G['this']->getExtra('menu',$Menu);
onez('admin.menu')->init($G['user']['grade'],$Menu);
onez('admin')->menu=$Menu;
onez('onez')->init('admin');

