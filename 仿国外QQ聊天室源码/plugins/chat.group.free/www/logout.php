<?php

!defined('IN_ONEZ') && exit('Access Denied');
ob_clean();
onez()->cookie('chat_group','del');
onez()->location(onez()->href('/index.php?t='.time()));