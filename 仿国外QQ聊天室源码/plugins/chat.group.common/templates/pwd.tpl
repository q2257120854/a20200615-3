{include file="header.tpl"}
<div class="signin" style="margin-top: -60px">
	<form class="form-signin" method="post" role="form">
    <p class="form-item">
      <i class="fa fa-key"></i>
      <input type="password" id="password" name="password" class="form-control" placeholder="请输入房间密码" required />
    </p>
		<button class="btn btn-lg btn-warning btn-block" type="submit">立即进入</button>
    <input type="hidden" name="action" value="chklogin" />
	</form>
</div>
{literal}
<script type="text/javascript">
$(function(){
  $('.form-signin').unbind('submit').bind('submit',function(){
    $.post(window.location.href,$(this).serialize(),function(o){
      if(o.error){
        $('.rndcode-img').trigger('click');
        onez.alert(o.error);
      }else{
        location.reload();
      }
    },'json');
    return false;
  });
});
</script>
{/literal}
{include file="footer.tpl"}