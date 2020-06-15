<?php
include '../../home/index/head.php';
$sql = "SELECT * FROM ku_article where state='0' and type='0' order by addtime desc limit 20";
$gsql = "SELECT * FROM ku_article where state='0' and type='2' and dada='2' order by addtime desc limit 10";
?>
<div class="case-center">
 <div id="fullSlide">
        <div class="bd">
            <ul>  <?php
                    $rs=$DB->query($gsql);
        while($res = $DB->fetch($rs))
            {
                 ?>
                 <li style="background:url(<?=$res['img']?>) center 0 no-repeat;">
                    <a target="_blank" href="<?=$res['content']?>" title="<?=$res['title']?>"></a>
                </li>
                  <?php }?>   
                            </ul>
        </div>
        <div class="wrapper_1200 button">
            <a class="prev iconfont iconzuo001" href="javascript:void(0)"></a>
            <a class="next iconfont iconyou001" href="javascript:void(0)"></a>
        </div>
    </div>
    <div class="nav">
        <div class="wrapper_1200">
            <div class="item"><span class="iconfont iconicon4"></span>客户案例</div>
            <div class="item"><span class="iconfont iconicon"></span>定制案例</div>
        </div>
    </div>
    <div class="wrapper_1200">
                <div class="caseList">
        <div class="customer" style="text-align: center;">
                  <?php
                    $rs=$DB->query($sql);
       while($res = $DB->fetch($rs))
            {
                 ?>
                        <div class="item">
                <div class="one">
                    <div class="pictrue">
                        <img src="<?=$res['img']?>" class="caseBg">
                    </div>
                    <div class="text">
                        <div class="name"><?=$res['title']?></div>
                        <div class="infor"><?=$res['content']?></div>
                        <div class="industry"><?=$res['title']?></div>
                    </div>
                </div>
               
            </div>
            <?php }?>
                
                    </div>
            <div class="clearfix"></div>
        <div class="more set_8_button outline" data-type="1">查看更多<span class="lines"></span></div>
        <div class="more no_more" >没有更多了</div>
    </div>
                </div>
    <div class="clearfix"></div>
    <div id="advers" class="min_wrapper_1200">
        <div class="wrapper_1200 wrapper1" >免费体验CoolYun后台管理系统<span>立即体验</span></div>
    </div>
<?php
include '../../home/index/footer.php';
?>
<script type="text/javascript">

var experience_url="<?=$conf['yan_url']?>";

 $('.wrapper1').on('click',function () {
            window.open(experience_url);
        });

</script>
