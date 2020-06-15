{include file="header.tpl"}
<div class="signin" style="margin-top:-290px">
	<div class="signin-head"><img src="{$baseurl}/images/qq.jpg" alt="" class="img-circle"></div>
	<form class="form-signin" method="post" role="form">
    <p class="form-item">
      <i class="fa fa-user"></i>
      <input type="text" name="username" class="form-control" placeholder="请填写您要注册的登录账号" required autofocus />
    </p>
    <p class="form-item">
      <i class="fa fa-key"></i>
      <input type="password" name="password" class="form-control" placeholder="登录密码" required />
    </p>
    <p class="form-item">
      <i class="fa fa-key"></i>
      <input type="password" name="password2" class="form-control" placeholder="确认登录密码" required />
    </p>
    <p class="form-item">
      <i class="fa fa-user"></i>
      <input type="text" name="nickname" class="form-control" placeholder="请填写您要使用的昵称" required autofocus />
    </p>
    <p class="form-item">
      <i class="fa fa-user"></i>
      <input type="text" name="qq" class="form-control" placeholder="请填写您的QQ号码" required autofocus />
    </p>
		<button class="btn btn-lg btn-success btn-block" type="submit">立即注册</button>
    <input type="hidden" name="action" value="regpost" />
    <div class="" style="padding-top: 10px">
      <div class="pull-left">
      {if !$goto}
        <a href="{$url.index}">返回首页</a>
      {/if}
      </div>
      <div class="pull-right">
        <a href="{$url.login}">返回登录页</a>
      </div>
      <div class="clearfix"></div>
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