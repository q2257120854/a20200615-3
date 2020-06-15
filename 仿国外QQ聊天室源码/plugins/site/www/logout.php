<?php


!defined('IN_ONEZ') && exit('Access Denied');
onez('cache')->cookie('quick_userid','del');
onez('login')->logout();
onez()->location(onez()->href('/index.php'));