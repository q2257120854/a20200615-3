<?php
!defined('IN_ONEZ') && exit('Access Denied');
if($G['user']['grade']=='admin'){//
  onez()->location(onez()->href('/admin/index.php'));
}else{
  onez('login')->logout();
  onez()->location(onez()->href('/index.php'));
}
