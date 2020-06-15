<?php
include '../../home/index/head.php';
$sql = "SELECT * FROM ku_article where state='0' and type='1' order by addtime desc limit 6";
$sqlup = "SELECT * FROM ku_article where state='0' and type='1' order by id desc limit 6";
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
<div class="productNews">
 <div class="publicHeader2 min_wrapper_1200"></div>
    <div class="wrapper_1200">
        <div class="sortNav">
            <div class="item item2 on">
                <div class="active on"></div>
                <div class="active1 animated"></div>
                <div class="name line1">更新日志</div>
                <div class="infor line1">CoolYun官方更新日志发布</div>
            </div>
            <div class="item item3 ">
                <div class="active "></div>
                <div class="active1 animated"></div>
                <div class="name line1">行业新闻</div>
                <div class="infor line1">最新的互联网行业信息</div>
            </div>
            <div class="item ">
                <div class="active "></div>
                <div class="active1 animated"></div>
                <div class="name line1">功能更新</div>
                <div class="infor line1">系统代码每日更新每周发布！</div>
            </div>
        </div>
    </div>
    <div class="conter wrapper_1200">
        <div class="left">
            <div class="publicLists">
            <div class="publicList">
              <?php
                    $rs=$DB->query($sql);
       while($res = $DB->fetch($rs))
            {
                 ?>
                               <a href="/home/index/content.html?id=<?=$res['id']?>"> <div class="item details">
                    <div class="pictrue dis"><img src="<?=$res['img']?>"></div>
                    <div class="text dis">
                        <div class="name"><?=$res['title']?></div>
                        <div class="icons"><span class="iconfont iconshijian"></span><?=$res['addtime']?><span class="iconfont iconliulan"></span><?=$counter?></div>
                        <div class="infor"><?=$res['content']?>

 </div>
                    </div>
                </div>
                </a>
                <?php }?>
                    
                     
                            </div>
                <div class="more set_8_button outline">查看更多<span class="lines"></span></div>
                <div class="more no_more" >没有更多了</div>
            </div>
        </div>
        <div class="right">
            <div class="newsHead">
                <div class="title">更新日志</div>
                 <?php
                    $rs=$DB->query($sqlup);
                    $f=1;
       while($res = $DB->fetch($rs))
            {
                 ?>
                <div class="list">
                                       <a href="/home/index/content.html?id=<?=$res['id']?>"> <div class="item details">
                        <div class="dis num"><?=$f?></div>
                        <div class="dis text">
                            <div class="line1"><?=$res['content']?></div>
                        </div>
                    </div></a>
             </div>
              <?php 
               $f++;
              }?>
            </div>
            <div class="advers" ><img src="/public/home/picture/201905271.jpg"></div>
          
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