<?php


!defined('IN_ONEZ') && exit('Access Denied');
!$G['user']['grade'] && $G['user']['grade']='admin';
if($G['user']['grade']=='admin'){//
  onez()->location(onez()->href('/admin/index.php'));
}else{
  onez()->location(onez()->href('/'.$G['user']['grade'].'/index.php'));
}
