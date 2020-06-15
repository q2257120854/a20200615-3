{include file="header.tpl"}
<style>
body{
  background-image:url({$baseurl}/images/bg.jpg);
}
.signin:before{
  display: none;
}
</style>
<div class="signin" style="margin-top: -60px">
	<form class="form-signin" method="post" role="form"  style="padding-top: 30px;color:red">
    {$html}
	</form>
</div>
{include file="footer.tpl"}