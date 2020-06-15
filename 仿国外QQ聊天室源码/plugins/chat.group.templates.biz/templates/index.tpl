{include file="header.tpl"}

<section class="home">
  <div class="container" style="padding: 50px 0">
    <div class="row">
      <div class="panel-group">
      	<div class="panel-heading">
          <div class="">
            <div class="pull-left">
    {foreach $categorys as $k=>$v}
          <a href="{$url.index}&upid={$k}" class="btn btn-{if $k==$upid}info{else}default{/if}">
            {$v}
          </a>
    {/foreach}
    {if $links}
    {foreach $links as $rs}
    <a href="{$rs.url}" target="_blank" class="btn btn-default">
      {$rs.name}
    </a>
    {/foreach}
    {/if}

    {if !$option.del_onez_links}
    {/if}
            </div>
            <div class="pull-right">
            {if $G.userid}
              <img src="{$G.user.avatar}" width="32" height="32" style="border-radius: 50%" />
              {$G.user.nickname},你好！
              {if $G.user.grade=='admin'}
                <a href="{$url.admin}" class="btn btn-warning">超级管理中心</a>
              {/if}
              <a href="{$url.exit}" class="btn btn-danger">退出</a>
            {else}
              <a href="{$url.login}" class="btn btn-success">登录</a>
    {if !$option.is_close_register}
              <a href="{$url.register}" class="btn btn-success">注册</a>
    {/if}
            {/if}
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="panel-body">
    <ul class="group-list">
        {foreach $record.0 as $rs}
			<li>
        <a href="{$rs.url}" data-width="960" data-height="700" data-title="{$rs.title}" data-bgcolor="{$rs.bgcolor}" class="onez-miniwin new">
					<div class="icons icon-manage-verify" data-tag="mana_verifyr"><img src="{$rs.icon}" /></div>
					<dl data-tag="click">
						<dt class="color-tit" data-tag="mana_verify">{$rs.name}</dt>
						<dd data-tag="mana_verify">
							<p data-tag="mana_verify">{$rs.summary}</p>
						</dd>
            <div class="clearfix"></div>
					</dl>
				</a>
			</li>
          {/foreach}
		</ul>
    <div class="box-footer clearfix">
      {$record.1}
    </div>
      
        </div>
      </div>
    </div>
  </div>
</section>
<section class="copyright">
  {$copyright}Powered by OnezPHP v2.0 | Copyright © onezphp.com All rights reserved.
</section>

{if $opengroup}
<script type="text/javascript">
$(function(){
  openWin('{$opengroup.url}','{$opengroup.name}',960,700,'{$opengroup.bgcolor}');
});
</script>
{/if}
{include file="footer.tpl"}