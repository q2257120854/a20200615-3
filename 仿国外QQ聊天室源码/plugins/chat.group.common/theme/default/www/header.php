<?php

!defined('IN_ONEZ') && exit('Access Denied');
$G['title']=$G['this']->option('sitename');
onez('ui')->init();
onez('ui')->header();
onez('jqueryui')->head();
?>
<style>
.modal-dialog {
  
}
body{
{if $option.background}
  background-image: url('{$option.background}');
{/if}
}
</style>
<!--[if lt IE 10]>
    <p class="browsehappy" style="background: #ccc;color: #000;padding: 12px 36px;font-size:18px;">
        <a style="float:right;" href="javascript:;" onclick="window.history.back();">返回</a>
        您使用的浏览器 <strong>版本过低</strong>
        ，请
        使用极速的 <a href="//browser.qq.com" target="_blank">QQ浏览器</a> 或 <a href="http://browsehappy.com/" target="_blank">升级您的浏览器</a>
        以使用该功能。
    </p>
    <![endif]-->