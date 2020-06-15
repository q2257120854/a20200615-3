<?php
/* Smarty version 3.1.31, created on 2017-10-30 09:06:05
  from "E:\blue\www\group\plugins\chat.group.plugin.talk\templates\dialog.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f67afd3be721_33416549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc6d38edff0296fd569eebe02d1d796225cf6003' => 
    array (
      0 => 'E:\\blue\\www\\group\\plugins\\chat.group.plugin.talk\\templates\\dialog.tpl',
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
function content_59f67afd3be721_33416549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section class="chat <?php if ($_smarty_tpl->tpl_vars['option']->value['send_key'] == 'enter') {?>enter-noctrl<?php }?>" style="background: rgba(255,255,255,<?php echo $_smarty_tpl->tpl_vars['alpha']->value;?>
);">
  <section class="chat-header">
    <div class="pull-left">
      <ul class="chat-tab">
        <li data-key="chat" class="current">聊天</li>
        <?php if ($_smarty_tpl->tpl_vars['pc_nav']->value) {?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pc_nav']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
          <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        <?php }?>
      </ul>
    </div>
    <div class="pull-right">
      <?php echo $_smarty_tpl->tpl_vars['ad_pc_tr']->value;?>

    </div>
    <div class="clearfix"></div>
  </section>
  <section class="chat-body">
    <section class="tab-body" data-key="chat">
      <section class="chat-main" style="right:<?php echo $_smarty_tpl->tpl_vars['width_right']->value;?>
px">
        <div class="btn-bar">
          <a href="javascript:;" class="btn-bar-open" title="隐藏侧边"></a>
          <a href="javascript:;" class="btn-bar-close" title="显示侧边"></a>
        </div>
        <section class="ad_pc_mt">
          <?php echo $_smarty_tpl->tpl_vars['ad_pc_mt']->value;?>

        </section>
        <section class="showbox">
          
        </section>
        <section class="ad_pc_mb">
          <?php echo $_smarty_tpl->tpl_vars['ad_pc_mb']->value;?>

        </section>
        <section class="chat-footer">
          <section class="chat-toolbar">
            <a href="javascript:;" class="icon-emote">表情</a>
          </section>
          <section class="chat-input">
            <textarea class="inputbox"></textarea>
          </section>
          <section class="chat-bottom">
            <div class="pull-left">
              <?php echo $_smarty_tpl->tpl_vars['ad_pc_bl']->value;?>

            </div>
            <div class="pull-right">
            <?php if ($_smarty_tpl->tpl_vars['miniwin']->value) {?>
              <button class="btn btn-sm btn-default" onclick="parent.closeWin()">关闭</button>
            <?php }?>
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-info btn-send">发送</button>
                  <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu send-key-set" role="menu">
                      <li class="key-enter"><a href="#"><span class="glyphicon glyphicon-ok"></span> 按Enter键发送消息</a></li>
                      <li class="key-ctrl-enter"><a href="#"><span class="glyphicon glyphicon-ok"></span> 按Ctrl+Enter键发送消息</a></li>
                  </ul>
              </div>
            </div>
            <div class="clearfix"></div>
          </section>
        </section>




  <div class="box_emote"></div>




      </section>
      <section class="chat-right" style="width:<?php echo $_smarty_tpl->tpl_vars['width_right']->value;?>
px">
        
      </section>
    </section>
    <section class="tab-body" data-key="web">
      <iframe class="frame" width="100%" height="100%" frameborder="0" src="about:blank"></iframe>
    </section>
  </section>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
