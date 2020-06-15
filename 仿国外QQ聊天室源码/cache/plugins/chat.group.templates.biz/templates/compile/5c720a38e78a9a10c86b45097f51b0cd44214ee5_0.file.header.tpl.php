<?php
/* Smarty version 3.1.31, created on 2017-10-17 14:17:49
  from "E:\blue\www\group\plugins\chat.group.common\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59e5a08d68b1d6_89682657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c720a38e78a9a10c86b45097f51b0cd44214ee5' => 
    array (
      0 => 'E:\\blue\\www\\group\\plugins\\chat.group.common\\templates\\header.tpl',
      1 => 1508220670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e5a08d68b1d6_89682657 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9,chrome=1">
<title><?php echo $_smarty_tpl->tpl_vars['G']->value['title'];?>
</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<?php echo $_smarty_tpl->tpl_vars['G']->value['header'];?>

<style>
.modal-dialog {
  
}
body{
  <?php if ($_smarty_tpl->tpl_vars['option']->value['background_type'] == 'repeat') {?>
  background-repeat: repeat;
  background-size: inherit;
  <?php } else { ?>
  background-repeat: no-repeat!important;
  background-position: center top!important;
  background-size: cover!important;
  <?php }?>
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
    <![endif]--><?php }
}
