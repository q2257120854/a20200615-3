<?php
!defined('IN_ONEZ') && exit('Access Denied');
#进入第一个菜单
foreach(onez('admin')->menu as $k=>$v){
  if($v['href']){
    onez()->location(onez()->href($v['href']));
  }elseif($v['url']){
    onez()->location($v['url']);
  }
}
onez()->location(onez('onez')->href('/onez/cloud/quick.php'));