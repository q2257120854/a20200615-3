<?php
include '../../home/index/head.php';
$id=$_GET['id'];
$gexrow = $DB->get_row("select * from ku_article where id = '$id' and state='0' and type='1' ");
//数字输出网页计数器
        $max_len = 9;
        $CounterFile = "coter.dat";
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
<div class="news-content-page">
  <div class="publicHeader2 min_wrapper_1200"></div>
    <div class="conter wrapper_1200">
<!--        <div class="asideNav">-->
<!--            <div class="item  on" data-opt="0">公司新闻</div>-->
<!--            <div class="item  " data-opt="2">行业新闻</div>-->
<!--            <div class="item  " data-opt="1">功能更新</div>-->
<!--        </div>-->
        <div class="asideCon">
            <a class="home" href="/home/index/gengxin.html" ><< 点击返回功能更新列表</a>
            <div class="article">
                <div class="name"><?=$gexrow['title']?></div>
                <div class="browse"><span class="iconfont iconliulan"></span>浏览量 <?=$counter?><span class="iconfont iconshijian"></span>时间 <?=$gexrow['addtime']?></div>
                <div class="articleCon">
                    <p><?=$gexrow['content']?></p> 
                                   </div>

             <br><br>   
            </div>
           </div>
           </div>
           </div>
    <div class="clearfix"></div>
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