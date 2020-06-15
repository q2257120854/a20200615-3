<?php


!defined('IN_ONEZ') && exit('Access Denied');
$Menu=array();
onez('admin.menu')->init('admin',$Menu);
onez('admin')->menu=$Menu;