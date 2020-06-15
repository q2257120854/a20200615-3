{include file="header.tpl"}

<section class="chat {if $option.send_key=='enter'}enter-noctrl{/if}" style="background: rgba(255,255,255,{$alpha});">
  <section class="chat-header">
    <div class="pull-left">
      <ul class="chat-tab">
        <li data-key="chat" class="current">聊天</li>
        {if $pc_nav}
          {foreach $pc_nav as $v}
          {$v}
          {/foreach}
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
      <section class="chat-main" style="right:{$width_right}px">
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
        
      </section>
    </section>
    <section class="tab-body" data-key="web">
      <iframe class="frame" width="100%" height="100%" frameborder="0" src="about:blank"></iframe>
    </section>
  </section>
</section>
{include file="footer.tpl"}