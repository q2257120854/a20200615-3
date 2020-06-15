<?php
!defined('IN_ONEZ') && exit('Access Denied');
onez('login')->logout();
onez()->location(onez()->href('/index.php'));