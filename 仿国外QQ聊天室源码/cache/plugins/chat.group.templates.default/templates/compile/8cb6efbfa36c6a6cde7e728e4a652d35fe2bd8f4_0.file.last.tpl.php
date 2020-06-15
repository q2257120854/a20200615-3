<?php
/* Smarty version 3.1.31, created on 2017-10-30 09:06:16
  from "E:\blue\www\group\plugins\chat.group.plugin.talk\templates\last.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f67b08aee1a7_39603714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cb6efbfa36c6a6cde7e728e4a652d35fe2bd8f4' => 
    array (
      0 => 'E:\\blue\\www\\group\\plugins\\chat.group.plugin.talk\\templates\\last.tpl',
      1 => 1509325549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59f67b08aee1a7_39603714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tplurl']->value;?>
/images/style.css" />
<section class="last">
  <div class="container">
    <div class="row">
      <div class="panel-friend">
        <div class="panel-body">
    <ul class="friend-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['friends']->value, 'rs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->value) {
?>
			<li>
        <a href="javascript:;" onclick="talkTo('<?php echo $_smarty_tpl->tpl_vars['rs']->value['friendid'];?>
','<?php echo $_smarty_tpl->tpl_vars['rs']->value['nickname'];?>
','<?php echo $_smarty_tpl->tpl_vars['rs']->value['avatar'];?>
')" class="<?php if ($_smarty_tpl->tpl_vars['rs']->value['new'] == 1) {?> new<?php }?>">
					<div class="icons icon-manage-verify" data-tag="mana_verifyr"><img src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['avatar'];?>
" /></div>
					<dl data-tag="click">
						<dt class="color-tit" data-tag="mana_verify"><?php echo $_smarty_tpl->tpl_vars['rs']->value['nickname'];?>
</dt>
						<dd data-tag="mana_verify">
							<p data-tag="mana_verify"><?php echo $_smarty_tpl->tpl_vars['rs']->value['summary'];?>
</p>
						</dd>
            <div class="clearfix"></div>
					</dl>
				</a>
			</li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

		</ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
