<?php
/* Smarty version 3.1.31, created on 2017-10-17 14:41:49
  from "E:\blue\www\group\plugins\chat.group.templates.biz\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59e5a62d9df0b5_72497409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5087a8ecbce2ab53ffae7bfee3de7f78433c6a86' => 
    array (
      0 => 'E:\\blue\\www\\group\\plugins\\chat.group.templates.biz\\templates\\index.tpl',
      1 => 1508222506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59e5a62d9df0b5_72497409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section class="home">
  <div class="container" style="padding: 50px 0">
    <div class="row">
      <div class="panel-group">
      	<div class="panel-heading">
          <div class="">
            <div class="pull-left">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorys']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['index'];?>
&upid=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="btn btn-<?php if ($_smarty_tpl->tpl_vars['k']->value == $_smarty_tpl->tpl_vars['upid']->value) {?>info<?php } else { ?>default<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

          </a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    <?php if ($_smarty_tpl->tpl_vars['links']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'rs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->value) {
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url'];?>
" target="_blank" class="btn btn-default">
      <?php echo $_smarty_tpl->tpl_vars['rs']->value['name'];?>

    </a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['option']->value['del_onez_links']) {?>
          <a href="http://www.yunziyuan.com/?mod=%2Fcategory.php&tag=%E6%89%A9%E5%B1%95&upid=69" target="_blank" class="btn btn-default">
            更多功能
          </a>
          <a href="http://www.yunziyuan.com/?mod=%2Fview.php&id=69&bid=42" target="_blank" class="btn btn-default">
            商业版
          </a>
          <a href="http://build.onez.cn/" target="_blank" class="btn btn-default">
            生成客户端
          </a>
    <?php }?>
            </div>
            <div class="pull-right">
            <?php if ($_smarty_tpl->tpl_vars['G']->value['userid']) {?>
              <img src="<?php echo $_smarty_tpl->tpl_vars['G']->value['user']['avatar'];?>
" width="32" height="32" style="border-radius: 50%" />
              <?php echo $_smarty_tpl->tpl_vars['G']->value['user']['nickname'];?>
,你好！
              <?php if ($_smarty_tpl->tpl_vars['G']->value['user']['grade'] == 'admin') {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
" class="btn btn-warning">超级管理中心</a>
              <?php }?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['exit'];?>
" class="btn btn-danger">退出</a>
            <?php } else { ?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['login'];?>
" class="btn btn-success">登录</a>
    <?php if (!$_smarty_tpl->tpl_vars['option']->value['is_close_register']) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['register'];?>
" class="btn btn-success">注册</a>
    <?php }?>
            <?php }?>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="panel-body">
    <ul class="group-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['record']->value[0], 'rs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->value) {
?>
			<li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url'];?>
" data-width="960" data-height="700" data-title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
" data-bgcolor="<?php echo $_smarty_tpl->tpl_vars['rs']->value['bgcolor'];?>
" class="onez-miniwin new">
					<div class="icons icon-manage-verify" data-tag="mana_verifyr"><img src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['icon'];?>
" /></div>
					<dl data-tag="click">
						<dt class="color-tit" data-tag="mana_verify"><?php echo $_smarty_tpl->tpl_vars['rs']->value['name'];?>
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
    <div class="box-footer clearfix">
      <?php echo $_smarty_tpl->tpl_vars['record']->value[1];?>

    </div>
      
        </div>
      </div>
    </div>
  </div>
</section>
<section class="copyright">
  <?php echo $_smarty_tpl->tpl_vars['copyright']->value;?>
Powered by OnezPHP v2.0 | Copyright © onezphp.com All rights reserved.
</section>

<?php if ($_smarty_tpl->tpl_vars['opengroup']->value) {
echo '<script'; ?>
 type="text/javascript">
$(function(){
  openWin('<?php echo $_smarty_tpl->tpl_vars['opengroup']->value['url'];?>
','<?php echo $_smarty_tpl->tpl_vars['opengroup']->value['name'];?>
',960,700,'<?php echo $_smarty_tpl->tpl_vars['opengroup']->value['bgcolor'];?>
');
});
<?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
