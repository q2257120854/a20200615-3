{include file="header.tpl"}

<section class="chat {if $option.send_key=='enter'}enter-noctrl{/if}" style="background: rgba(255,255,255,{$alpha});">
  <section class="chat-header">
    <div class="pull-left">
      <ul class="chat-tab">
        <li data-key="chat" class="current">聊天</li>
        <li data-key="notice" data-url="{$url.notice}">公告</li>
        {if $pc_nav}
          {foreach $pc_nav as $v}
          {$v}
          {/foreach}
        {/if}
        {if $G.userid}
          <li onclick="openWin('{$url.modify}','修改资料')">修改资料</li>
          <li data-key="logout">退出</li>
        {else}
          <li data-key="login" data-url="{$url.login}">登录</li>
          {if $option.is_close_register}
          <li data-key="register" data-url="{$url.register}">注册</li>
          {/if}
        {/if}
      </ul>
    </div>
    <div class="pull-right">
      {$ad_pc_tr}
    </div>
    <div class="clearfix"></div>
  </section>
  <section class="chat-body">
    <section class="tab-body" data-key="chat">
      <section class="chat-main" style="right:<?=$width_right?>px">
        <div class="btn-bar">
          <a href="javascript:;" class="btn-bar-open" title="隐藏侧边"></a>
          <a href="javascript:;" class="btn-bar-close" title="显示侧边"></a>
        </div>
        <section class="ad_pc_mt">
          {$ad_pc_mt}
        </section>
        <section class="showbox">
          
        </section>
        <section class="ad_pc_mb">
          {$ad_pc_mb}
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
              {$ad_pc_bl}
            </div>
            <div class="pull-right">
            {if $miniwin}
              <button class="btn btn-sm btn-default" onclick="parent.closeWin()">关闭</button>
            {/if}
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
      <section class="chat-right" style="width:{$width_right}px">
        <section class="chat-notice">
          <div class="chat-notice-box">{$group.notice}</div>
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
<script type="text/javascript">
var onez={};
var group=new onezgroup('.chat',{
  baseurl:'{$baseurl}',
  pluginurl:'{$pluginurl}',
  groupid:'{$group.id}',
  history:'{$group.key1}',
  mode:'{$group.key2}',
  index5:'{$group.index5}',
  nickname:'{$G.nickname}',
  status:'{$guser.key1}',
  image_maxsize:{$image_maxsize},
  newuser_limit_time:{$G.newuser_limit_time},
  talk_busy_time:{$G.talk_busy_time},
  ismaster:{$ismaster},
  masters:{$masters},
  plugins:{$plugins},
  width_right:{$width_right}
});
group.connect('{$server_host}','{$room}','{$userid}');
</script>
{include file="footer.tpl"}