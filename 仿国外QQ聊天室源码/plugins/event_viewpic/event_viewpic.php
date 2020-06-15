<?php

!defined('IN_ONEZ') && exit('Access Denied');
onez('event');
class onezphp_event_viewpic extends onezphp_event{
  function init(){
    global $G;
    $this->eventName='onez.viewpic';
    $url=$this->url;
    if(!$this->loaded){
      $this->loaded=1;
      $G['footer'].=<<<ONEZ
<link rel="stylesheet" href="$url/css/viewer.min.css">
<script src="$url/js/viewer.min.js"></script>
ONEZ;
      $G['footer-js'].=<<<ONEZ
var onez=onez||{};
onez.viewpic=function(){
};
$(function(){
  var p=$('.viewpic').parents('tr');
  if(p.length<1){
    p=$('.viewpic').parent();
  }
  p.viewer();
});

ONEZ;
    }
  }
}