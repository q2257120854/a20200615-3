<?php

!defined('IN_ONEZ') && exit('Access Denied');
$G['title']='群聊天记录';
include_once(dirname(__FILE__).'/header.php');
echo onez('ui')->css($baseurl.'/images/group.css?t='.filemtime(dirname(__FILE__).'/images/group.css'));
$page=(int)onez()->gp('page');
if(!$page){
  $_REQUEST['page']=99999999;
}
$T=$G['this']->data()->open('message')->page("upid='$groupid' order by id");
$today=date('Y-m-d');
?>
<style>
body{
  background: #fff;
}
</style>
<div class="content-wrapper">
  <section class="chat">
    <section class="chat-body" style="top: 0">
      <section class="tab-body" data-key="chat">
        <section class="chat-main" style="right:0px">
          <section class="showbox" style="padding: 5px">
  <?php foreach($T[0] as $rs){
    $item=array(
      'type'=>'user',
      'msgid'=>$rs['id'],
      'nickname'=>$rs['nickname'],
      'style'=>$rs['style'],
      'message'=>$rs['message'],
      'time'=>date('Y-m-d H:i:s',$rs['addtime']),
    );
    if($rs['key1']==$userid){
      $item['type']='me';
    }
    $item['time']=str_replace($today.' ','',$item['time']);
    $item['message']=str_replace("\n",'<br />',$item['message']);
    $item['message']=preg_replace('/:([a-zA-Z]+)_([0-9]{1,2})/i','<img src="'.onez('chat.group.common')->url.'/images/smiley/$1_$2.png">',$item['message']);
    $item['message']=preg_replace('/\[img\]([^\[\"\']+?)\.(gif|jpg|bmp|png){1}\[\/img\]/i','<a href="$1.$2" target="_blank"><img src="$1.$2" style="max-height:120px" /></a>',$item['message']);
    ?>
  <div class="im_from"><?php echo $item['nickname']?> <span><?php echo $item['time']?></span></div>
  <div class="im_content" style="<?php echo $item['style']?>"><?php echo $item['message']?></div>
  <?php }?>
          </section>
          <section class="pages" style="padding: 0 10px;text-align: center;">
            <?php echo $T[1]?>
          </section>
          
        </section>
      </section>
    </section>
  </section>
</div>
<script type="text/javascript">
$(function(){
  $('.showbox').height($(window).height()-70);
  $('.showbox').find('img').bind('load',function(){
    $('.showbox').scrollTop($('.showbox').get(0).scrollHeight);
  });
  $('.showbox').scrollTop($('.showbox').get(0).scrollHeight);
});
</script>
<?php 
include_once(dirname(__FILE__).'/footer.php');