<?php
include '../../home/index/head.php';
$id=$_GET['id'];
$wenrow = $DB->get_row("select * from ku_article where id = '$id' and state='0' and type='0' ");
//数字输出网页计数器
        $max_len = 9;
        $CounterFile = "counter.dat";
        if(!file_exists($CounterFile)){
            $counter = 0;                  
            $cf = fopen($CounterFile,"w"); 
            fclose($cf);                   
        }
        else{                                   
            $cf = fopen($CounterFile,"r");
            $counter = trim(fgets($cf,$max_len));
            fclose($cf);
        }
        $counter++;                                   
        $cf = fopen($CounterFile,"w");
        fputs($cf,$counter);
        fclose($cf);
?>
<div class="case-details">

<div id="fullSlide">
        <div class="bd">
            <ul>
                     <li style="background:url(<?=$conf['website_url']?>/public/home/images/productnews.jpg) center 0 no-repeat;">
                    <a target="_blank" href="#"></a>
                </li>
                                <li style="background:url(<?=$conf['website_url']?>/public/home/images/productnews.jpg) center 0 no-repeat;">
                    <a target="_blank" href="#"></a>
                </li>
                            </ul>
        </div>
        <div class="wrapper_1200 button">
            <a class="prev iconfont iconzuo001" href="javascript:void(0)"></a>
            <a class="next iconfont iconyou001" href="javascript:void(0)"></a>
        </div>
    </div>

<div class="wrapper_1200">
        <div class="nav"><a href="/">首页</a><span class="iconfont iconyoujian2"></span><a href="/home/index/casecenter.html">案例中心</a><span class="iconfont iconyoujian2"></span>内容</div>
        <div class="caseCon">
            <div class="name"><?=$wenrow['title']?></div>
            <div class="browse"><span class="iconfont iconliulan"></span>浏览量 <?=$counter?><span class="iconfont iconshijian"></span>时间 <?=$wenrow['addtime']?></div>
            <div class="conter">
             <p><span style="color: rgb(51, 51, 51); font-family: 微软雅黑, arial, 宋体; white-space: normal; background-color: rgb(245, 245, 245);"><?=$wenrow['content']?></span>

               </p></div>
             <!-- <div class="share pull-right">
                <div class="dis">分享：</div>
                <div id="share-2" class="dis"></div>
            </div>  -->
        </div>
    </div>
    <div id="advers" class="min_wrapper_1200">
        <div class="wrapper_1200 wrapper1">免费体验CoolYun后台管理系统<span>立即体验</span></div>
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