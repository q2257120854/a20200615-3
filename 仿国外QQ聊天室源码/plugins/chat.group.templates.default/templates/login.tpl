{include file="header.tpl"}
<div class="signin">
	<div class="signin-head"><img src="{$baseurl}/images/qq.jpg" alt="" class="img-circle"></div>
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
      {if !$goto}
        <a href="{$url.index}">返回首页</a>
      {/if}
      </div>
      <div class="pull-right">
      {if !$option.is_close_register}
        <a href="{$url.register}">免费注册</a>
      {/if}
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="" style="padding-top: 10px;text-align: center;">
      {onez ptoken="call" method="call" args="third_login"}
    </div>
	</form>
</div>
{literal}
<script type="text/javascript">
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
</script>
{/literal}
{include file="footer.tpl"}