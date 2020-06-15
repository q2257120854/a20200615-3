<?php
/* Smarty version 3.1.31, created on 2017-10-30 09:06:05
  from "E:\blue\www\group\plugins\chat.group.plugin.talk\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f67afd3e2be9_91920192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '245477912f1fb52d46ebf210a03d75b9fb020e40' => 
    array (
      0 => 'E:\\blue\\www\\group\\plugins\\chat.group.plugin.talk\\templates\\header.tpl',
      1 => 1509325549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f67afd3e2be9_91920192 (Smarty_Internal_Template $_smarty_tpl) {
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
<body><?php }
}
