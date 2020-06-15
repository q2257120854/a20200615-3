<?php
/* Smarty version 3.1.31, created on 2017-10-17 14:13:27
  from "E:\blue\www\group\plugins\chat.group.templates.biz\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59e59f87039f75_40762025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd118108cdf771a4dc87484e2fd0ff26cd70335d7' => 
    array (
      0 => 'E:\\blue\\www\\group\\plugins\\chat.group.templates.biz\\templates\\header.tpl',
      1 => 1508220806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e59f87039f75_40762025 (Smarty_Internal_Template $_smarty_tpl) {
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

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tplurl']->value;?>
/images/style.css" />
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
  background-color:#fbfbfb;
}
</style>
</head>
<body><?php }
}
