<?php
/* Smarty version 3.1.31, created on 2017-10-17 14:17:38
  from "E:\blue\www\group\plugins\chat.group.templates.biz\templates\group.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59e5a082343d87_26655299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d368dedf433908cf5c93ea37030275f594e78c5' => 
    array (
      0 => 'E:\\blue\\www\\group\\plugins\\chat.group.templates.biz\\templates\\group.tpl',
      1 => 1508220806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59e5a082343d87_26655299 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section class="chat <?php if ($_smarty_tpl->tpl_vars['option']->value['send_key'] == 'enter') {?>enter-noctrl<?php }?>" style="background: rgba(255,255,255,<?php echo $_smarty_tpl->tpl_vars['alpha']->value;?>
);">
  <section class="chat-header">
    <div class="pull-left">
      <ul class="chat-tab">
        <li data-key="chat" class="current">聊天</li>
        <li data-key="notice" data-url="<?php echo $_smarty_tpl->tpl_vars['url']->value['notice'];?>
">公告</li>
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
        <?php if ($_smarty_tpl->tpl_vars['G']->value['userid']) {?>
          <li onclick="openWin('<?php echo $_smarty_tpl->tpl_vars['url']->value['modify'];?>
','修改资料')">修改资料</li>
          <li data-key="logout">退出</li>
        <?php } else { ?>
          <li data-key="login" data-url="<?php echo $_smarty_tpl->tpl_vars['url']->value['login'];?>
">登录</li>
          <?php if ($_smarty_tpl->tpl_vars['option']->value['is_close_register']) {?>
          <li data-key="register" data-url="<?php echo $_smarty_tpl->tpl_vars['url']->value['register'];?>
">注册</li>
          <?php }?>
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
        <section class="chat-notice">
          <div class="chat-notice-box"><?php echo $_smarty_tpl->tpl_vars['group']->value['notice'];?>
</div>
        </section>
        <section class="userlist">
          <dl>
            <dt class="info" title="展开群成员">
              <span class="name">
                群成员
                <span class="online-info"></span>
              </span>
            </dt>
            <dd>
              <ul class="userlist-me"></ul>
              <ul class="userlist-master"></ul>
              <ul class="userlist-user"></ul>
              <ul class="userlist-guest"></ul>
              <ul class="userlist-loading"></ul>
            </dd>
          </dl>
        </section>
      </section>
    </section>
    <section class="tab-body" data-key="web">
      <iframe class="frame" width="100%" height="100%" frameborder="0" ></iframe>
    </section>
  </section>
</section>
<?php echo '<script'; ?>
 type="text/javascript">
var onez={};
var group=new onezgroup('.chat',{
  baseurl:'<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
',
  pluginurl:'<?php echo $_smarty_tpl->tpl_vars['pluginurl']->value;?>
',
  groupid:'<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
',
  history:'<?php echo $_smarty_tpl->tpl_vars['group']->value['key1'];?>
',
  mode:'<?php echo $_smarty_tpl->tpl_vars['group']->value['key2'];?>
',
  index5:'<?php echo $_smarty_tpl->tpl_vars['group']->value['index5'];?>
',
  nickname:'<?php echo $_smarty_tpl->tpl_vars['G']->value['nickname'];?>
',
  status:'<?php echo $_smarty_tpl->tpl_vars['guser']->value['key1'];?>
',
  image_maxsize:<?php echo $_smarty_tpl->tpl_vars['image_maxsize']->value;?>
,
  newuser_limit_time:<?php echo $_smarty_tpl->tpl_vars['G']->value['newuser_limit_time'];?>
,
  talk_busy_time:<?php echo $_smarty_tpl->tpl_vars['G']->value['talk_busy_time'];?>
,
  ismaster:<?php echo $_smarty_tpl->tpl_vars['ismaster']->value;?>
,
  masters:<?php echo $_smarty_tpl->tpl_vars['masters']->value;?>
,
  plugins:<?php echo $_smarty_tpl->tpl_vars['plugins']->value;?>
,
  width_right:<?php echo $_smarty_tpl->tpl_vars['width_right']->value;?>

});
group.connect('<?php echo $_smarty_tpl->tpl_vars['server_host']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['room']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
');
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
