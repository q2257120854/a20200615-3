{include file="header.tpl"}
<link rel="stylesheet" href="{$tplurl}/images/style.css" />
<section class="last">
  <div class="container">
    <div class="row">
      <div class="panel-friend">
        <div class="panel-body">
    <ul class="friend-list">
        {foreach $friends as $rs}
			<li>
        <a href="javascript:;" onclick="talkTo('{$rs.friendid}','{$rs.nickname}','{$rs.avatar}')" class="{if $rs.new==1} new{/if}">
					<div class="icons icon-manage-verify" data-tag="mana_verifyr"><img src="{$rs.avatar}" /></div>
					<dl data-tag="click">
						<dt class="color-tit" data-tag="mana_verify">{$rs.nickname}</dt>
						<dd data-tag="mana_verify">
							<p data-tag="mana_verify">{$rs.summary}</p>
						</dd>
            <div class="clearfix"></div>
					</dl>
				</a>
			</li>
          {/foreach}
		</ul>
        </div>
      </div>
    </div>
  </div>
</section>
{include file="footer.tpl"}