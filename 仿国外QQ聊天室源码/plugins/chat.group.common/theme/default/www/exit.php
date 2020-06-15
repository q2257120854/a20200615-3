<?php

!defined('IN_ONEZ') && exit('Access Denied');
$goto=onez()->gp('goto');
ob_clean();
onez()->cookie('chat_group','del');
if($goto){
  onez()->location($goto);
}
onez()->location(onez()->href('/index.php?t='.time()));