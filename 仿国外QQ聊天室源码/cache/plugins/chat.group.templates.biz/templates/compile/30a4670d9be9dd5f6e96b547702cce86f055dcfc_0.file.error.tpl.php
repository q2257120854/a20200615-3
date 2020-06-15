<?php
/* Smarty version 3.1.31, created on 2017-10-30 09:05:58
  from "E:\blue\www\group\plugins\chat.group.common\templates\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f67af66e1e84_25200549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30a4670d9be9dd5f6e96b547702cce86f055dcfc' => 
    array (
      0 => 'E:\\blue\\www\\group\\plugins\\chat.group.common\\templates\\error.tpl',
      1 => 1508222938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59f67af66e1e84_25200549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
body{
  background-image:url(<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/bg.jpg);
}
.signin:before{
  display: none;
}
</style>
<div class="signin" style="margin-top: -60px">
	<form class="form-signin" method="post" role="form"  style="padding-top: 30px;color:red">
    <?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
