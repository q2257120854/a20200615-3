<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9,chrome=1">
<title>{$G.title}</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
{$G.header}
<style>
.modal-dialog {
  
}
body{
  {if $option['background_type']=='repeat'}
  background-repeat: repeat;
  background-size: inherit;
  {else}
  background-repeat: no-repeat!important;
  background-position: center top!important;
  background-size: cover!important;
  {/if}
}
</style>
</head>
<body>
<!--[if lt IE 10]>
    <p class="browsehappy" style="background: #ccc;color: #000;padding: 12px 36px;font-size:18px;">
        <a style="float:right;" href="javascript:;" onclick="window.history.back();">返回</a>
        您使用的浏览器 <strong>版本过低</strong>
        ，请
        使用极速的 <a href="//browser.qq.com" target="_blank">QQ浏览器</a> 或 <a href="http://browsehappy.com/" target="_blank">升级您的浏览器</a>
        以使用该功能。
    </p>
    <![endif]-->