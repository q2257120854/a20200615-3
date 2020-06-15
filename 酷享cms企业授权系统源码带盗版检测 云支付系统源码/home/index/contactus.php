<?php
include '../../home/index/head.php';?>
<div class="contactUs">
 <div class="publicHeader min_wrapper_1200">
        <div class="headerBg"></div>
        <div class="text wrapper_1200">
            <div class="title">心之所向 素履以往</div>
            <div class="infor">CoolYun累计更新百余次，每一次的完善背后都离不开所有技术人员的辛勤付出</div>
            <div class="img"><a href="<?=$conf['wap_lian']?>" target="_blank">加入交流群</a></div>
        </div>
    </div>
    <div class="publicNav">
        <div class="wrapper_1200">
            <div class="item development" data-ids="1"><span class="iconfont iconicon1"></span>关于CoolYun</div>
<!--            <div class="item development" data-ids="2"><span class="iconfont iconicon2"></span>开发团队</div>-->
            <div class="item on"><span class="iconfont iconicon3"></span>联系我们</div>
<!--            <div class="item development" data-ids="3"><span class="iconfont iconicon4"></span>版本更新</div>-->
        </div>
    </div>
    <div class="wrapper_1200">
        <div class="contact">
            <div class="title">联系我们</div>
            <div class="list">
                <div class="item">
                    <div class="iconfont icondianhua2 animated"></div>
                    <div class="name">热线电话</div>
                    <div class="num"><?=$conf['phone']?></div>
                </div>
                <div class="item">
                    <div class="iconfont iconjingli animated"></div>
                    <div class="name">客户经理</div>
                    <div class="num"><?=$conf['phone']?></div>
                </div>
                <div class="item">
                    <div class="iconfont iconyouxiang animated"></div>
                    <div class="name">企业邮箱</div>
                    <div class="num"><?=$conf['wap_qq']?>@qq.com</div>
                </div>
                <div class="item qqcs">
                    <div class="iconfont iconqq animated"></div>
                    <div class="name">咨询客服</div>
                    <div class="num btqq">点击咨询</div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="title title2">公司地址</div>
            <div class="map"><img src="/public/home/picture/map.png"></div>
        </div>
    </div>
    <div class="address min_wrapper_1200">
        <div class="wrapper_1200">
            <div class="item">地 址：陕西省西安市碑林区新庆巷59号1号楼1单元0902室</div>
            <div class="item">总 机：<?=$conf['phone']?></div>
            <div class="item">定制咨询：<?=$conf['wap_qq']?></div>
            <div class="item">公司邮箱：<?=$conf['wap_qq']?>@qq.com</div>
            <div class="ewm"><img src="<?=$conf['wx_img']?>"></div>
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
<script>
    $(function () {
        $('.contact .list .item').hover(function () {
            $(this).find('.iconfont').addClass('bounce');
        },function () {
            $(this).find('.iconfont').removeClass('bounce');
        })
        $(".development").on("click",function(){
            window.t = $(this);
            var _this = $(this),ids =_this.data('ids');
            if(ids==1){
                window.location.href="/home/index/aboutus.html";
            }else if(ids==2){
                window.location.href="/home/index/teambuilding.html";
            }else if(ids==3){
                window.location.href="/home/index/versionupdate.html";
            }
        });
    })
</script>