 <?php
include './includes/common.php';
?> <div id="footer" class="min_wrapper_1200">
    <div class="wrapper_1200">
        <ul class="list">
         <li>
                <div class="name">关于我们</div> 
                <a class="item" href="/home/index/aboutus.html">关于我们</a>
                <a class="item" href="/home/index/contactus.html">联系我们</a>
                <a  class="item" href="/home/index/recruit.html" >加入我们</a>

            </li>
            <li>
                <div class="name">案例详情</div>
                <a class="item" href="/home/index/casecenter.html">案例中心</a>
                <a class="item" href="/home/index/gengxin.html">更新日志</a>
            </li>
            <li>
                <div class="name">产品介绍</div>
                <a class="item" href="/home/index/product.html">产品介绍</a>
                <a class="item" href="<?=$conf['ban_url']?>" target="_blank">帮助文档</a>
            </li>
            <li>
                <div class="name">其他链接</div>
                <a class="item" href="http://www.yunziyuan.com.cn/">公司官网</a>
                <a class="item" href="<?=$conf['guan_url']?>" target="_blank">技术论坛</a>
            </li>
            <li>
                <div class="name">联系方式</div>
                <div class="item">全国热线 ：<span><?=$conf['phone']?></span></div>
                <div class="item">项目合作 ：<span><?=$conf['wap_qq']?> (QQ)</span></div>
                <div class="item" style="">技术交流 ：
                    <div style="width: 150px;float: right;">
                     <span style="display: block;"> <a target="_blank" href="<?=$conf['wap_lian']?>" style="color: #6aa6ff;"><?=$conf['wap_qun']?>(QQ群)</a></span>
                                            </div>

                </div>
            </li>
            <li>
                <div class="name">关注我们</div>
                <div class="official">
                    <img src="<?=$conf['wx_img']?>" width="110" height="110">
                    <div class="ewm"><span class="iconfont iconweixin-copy"></span>官方公众号</div>
                </div>
                <div class="official">
                    <img src="<?=$conf['wx_img']?>" width="110" height="110">
                    <div class="ewm"><span class="iconfont iconxiaochengxu"></span>官方小程序</div>
                </div>
            </li>
        </ul>
        <div class="clearfix"></div>
                <div class="friendship">
            <a >友情链接：</a>
                       <?=$conf['you-url_tips']?>
                    </div>
                <div class="copy">
            <div class="pull-left"><?=$conf['copyright']?>   <a href="http://www.beian.miit.gov.cn" style="color:#fff"><?=$conf['icp_bei']?></a>  <a href="http://shuidi.cn/claim-certificate?digest=b9069a5c45d4ebe10db64adbd1e7a901" style="color:#fff">水滴信用</a></div>
              &nbsp;<a id="jsl_speed_stat2" href="http://www.yunaq.com/#zid=5cc6e7b445475e25c023f7d9" target="_blank">知道创宇云安全</a> <script src="//static.yunaq.com/static/js/stat/picture2_stat.js" charset="utf-8" type="text/javascript"></script>&nbsp;<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? "https://" : "http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1277378235'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s96.cnzz.com/z_stat.php%3Fid%3D1277378235%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
        </div>
    </div>
</div>
<?=$conf['tongji']?>
</div>
<div class="customerService animated qqcs">
    <div class="pos">
        <div class="iconfont iconguanbi"></div>
    </div>
</div>
<div class="customerClose">
    <a class="bnt qqcs" href="javascript:void(0);" >QQ咨询</a>
</div>
<div class="floatWindow">
    <div class="list">
        <div class="item">
            <span class="iconfont iconqq2"></span>
            <div class="itemCon qqcs">
                <div class="qq show">
                    <div class="arrow"></div>
                    <img src="public/home/picture/qq2.png">
                    咨询在线QQ客服
                </div>
            </div>
        </div>
        <div class="item">
            <span class="iconfont icondianhua6"></span>
            <div class="itemCon">
                <div class="phone">
                    <div class="arrow"></div>
                    <img src="public/home/picture/phone01.png" class="dis">
                    <div class="dis">
                        <div class="items">服务热线</div>
                        <div class="items num"><?=$conf['phone']?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <span class="iconfont iconerweima2"></span>
            <div class="itemCon">
                <div class="ewm">
                    <div class="pictrue">
                        <div class="arrow"></div>
                        <img src="<?=$conf['wx_img']?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="item return">
            <span class="iconfont iconzhiding"></span>
        </div>
    </div>
</div>

   <script src="public/layer/layer.js"></script>
        <script type="text/javascript">
        <?php
            if ($conf['kunotice'] != ''){ ?>
                     window.onload = function () {
        var s = document.cookie;
        if (s.indexOf('myad=1') != -1) return; 
        var d = new Date();
        d.setHours(d.getHours() + 24); 
        document.cookie = 'myad=1;expires='+d.toGMTString();
         layer.open({
         area: ['500px', '300px'],
         title: '官方公告：',
        content: '<?=$conf['kunotice'];?>'
     });
    }
           <?php }
            ?>
            </script>
<script>
    var qq=<?=$conf['wap_qq']?>;
    var get_source_code="<?=$conf['kaiyuan_url']?>";
    $(function () {

        jQuery("#fullSlide").slide({ titCell:".hd li", mainCell:".bd ul", effect:"leftLoop", easing:"easeInOutQuad",
            autoPlay:true, delayTime:700});
        $('.freeSystem ul li').on("mouseenter",function(){
            $(this).find('.item1').addClass('on').parent().siblings().find('.item1').removeClass('on');
            $(this).find('.item2').addClass('on').parent().siblings().find('.item2').removeClass('on');
        });
        $('.set_4_button1s').on('click',function () {
            window.open(get_source_code);
        });

        $('.freeSystem ul li').hover(function () {
            $(this).find('.item2 .bgcolor .name').addClass('bounceInLeft');
            $(this).find('.item2 .bgcolor .infor').addClass('bounceInRight');
        },function () {
            $(this).find('.item2 .bgcolor .name').removeClass('bounceInLeft');
            $(this).find('.item2 .bgcolor .infor').removeClass('bounceInRight');
        });
        jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});
        $('.category .item').hover(function (){
            $(this).find('.pictrue').addClass('bounceIn');
        },function () {
            $(this).find('.pictrue').removeClass('bounceIn');
        });
        $('.outline').click(function () {
            window.t = $(this);
            var _this = $(this),opt =_this.data('opt');
            window.location.href="/home/news/productnews.html?opt="+opt;
        });
        $('.details').click(function () {
            window.t = $(this);
            var _this = $(this),id =_this.data('id');
            window.location.href="/home/news/content.html?id="+id;
        });
        $('.Upgrade').click(function () {
            window.location.href="/home/index/systemversion.html";
        });
        $('.mask').click(function () {
            $('.mask').css('display','none');
            $('.ewmPay').removeClass('on');
            location.reload();
        });
        $('.ewmPay .iconfont').click(function () {
            $('.mask').css('display','none');
            $('.ewmPay').removeClass('on');
            location.reload();
        });
        $('.qqcs').on('click',function () {
            window.open("http://wpa.qq.com/msgrd?v=3&uin="+qq+"&site=qq&menu=yes");
        });
        $('#essentialInformation').click(function () {
            var username=$("input[name='username']").val();
            var phone=$("input[name='phone']").val();
            var qq=$("input[name='qq']").val();
            var rsd=/^1[3|4|5|6|7|8|9]\d{9}$/;
            var qqzz=/[1-9][0-9]{4,}$/;
            var re=new RegExp(rsd);
            if(!username){
                layer.msg('填写您的姓名', {icon: 5});
                return false;
            }
            if(!phone){
                layer.msg('填写您的联系电话', {icon: 5});
                return false;
            }
            if(!re.test(phone)){
                layer.msg('手机号有误', {icon: 5});
                return false;
            }
            if(!qqzz.test(qq)){
                layer.msg('QQ号有误', {icon: 5});
                return false;
            }
            $.ajax({
                url:"/home/index/essentialinformation.html",
                type:"post",
                datatype:"json",
                data:{username:username,phone:phone,qq:qq},
                success:function (res) {
                    if(res.code==1){
                        layer.msg('提交成功！');
                        $('.mask').css('display','block ');
                        $('.ewmPay').addClass('on');
                    }else if(res.code==3){
                        layer.msg('手机号已存在！');
                    }else{
                        layer.msg('提交失败！');
                    }
                }
            })
        })
    })
</script>


</body>
</html>