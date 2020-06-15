<?php
/* Smarty version 3.1.31, created on 2017-10-17 14:17:49
  from "E:\blue\www\group\plugins\chat.group.common\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59e5a08d61bb11_13852957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6528a109bfbae19247f833abf03597f458c0eeee' => 
    array (
      0 => 'E:\\blue\\www\\group\\plugins\\chat.group.common\\templates\\login.tpl',
      1 => 1508220670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59e5a08d61bb11_13852957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="signin">
	<div class="signin-head"><img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/qq.jpg" alt="" class="img-circle"></div>
	<form class="form-signin" method="post" role="form">
    <p class="form-item">
      <i class="fa fa-user"></i>
      <input type="text" name="username" class="form-control" placeholder="登录账号" required autofocus />
    </p>
    <p class="form-item">
      <i class="fa fa-key"></i>
      <input type="password" name="password" class="form-control" placeholder="登录密码" required />
    </p>
		<button class="btn btn-lg btn-warning btn-block" type="submit">登录</button>
    <input type="hidden" name="action" value="chklogin" />
    
    <div class="" style="padding-top: 10px">
      <div class="pull-left">
      <?php if (!$_smarty_tpl->tpl_vars['goto']->value) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['index'];?>
">返回首页</a>
      <?php }?>
      </div>
      <div class="pull-right">
      <?php if (!$_smarty_tpl->tpl_vars['option']->value['is_close_register']) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['register'];?>
">免费注册</a>
      <?php }?>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="" style="padding-top: 10px;text-align: center;">
      <?php echo onezphp_smarty::onez(array('ptoken'=>"call",'method'=>"call",'args'=>"third_login"),$_smarty_tpl);?>

    </div>
	</form>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
  $('.form-signin').unbind('submit').bind('submit',function(){
    $.post(window.location.href,$(this).serialize(),function(o){
      if(o.error){
        $('.rndcode-img').trigger('click');
        alert(o.error);
      }else{
        parent.location.href=o.goto;
      }
    },'json');
    return false;
  });
});
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
