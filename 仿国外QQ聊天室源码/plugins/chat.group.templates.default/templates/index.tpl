{include file="header.tpl"}

<section class="home">
  <div class="container" style="padding: 50px 0">
      <p style="text-align: center;padding-bottom: 30px"><img src="{$logo}"></p>
    <div class="row well">
      <div class="" style="padding-bottom: 10px">
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
      <div class="panel panel-primary">
      	<div class="panel-heading">
          请选择您要参与聊天的群组
          <div class="pull-right"></div>
        </div>
        <div class="panel-body">

      <table class="table table-striped">
        <thead>
          <tr>
            <th>分类</th>
            <th>群组名称</th>
            <th>群简介</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody class="todo-list">
        {foreach $record.0 as $rs}
          <tr>
            <td>{$rs.catname}</td>
            <td>
              <img src="{$rs.icon}" height="16" /> {$rs.name}
            </td>
            <td>
              {$rs.summary}
            </td>
            <td>
              <a href="{$rs.url}" data-width="960" data-height="700" data-title="{$rs.title}" data-bgcolor="{$rs.bgcolor}" class="onez-miniwin btn btn-xs btn-info">
                进入
              </a>
            </td>
          </tr>
          {/foreach}
        </tbody>
      </table>
      
    <div class="box-footer clearfix">
      {$record.1}
    </div>
      
        </div>
      </div>
    </div>
  </div>
</section>
<section class="copyright">
  {$copyright}
</section>

{if $opengroup}
<script type="text/javascript">
$(function(){
  openWin('{$opengroup.url}','{$opengroup.name}',960,700,'{$opengroup.bgcolor}');
});
</script>
{/if}
{include file="footer.tpl"}