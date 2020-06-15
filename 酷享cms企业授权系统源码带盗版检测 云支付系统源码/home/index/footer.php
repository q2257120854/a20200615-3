<div id="footer" class="min_wrapper_1200">
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
                    <img src="/public/home/picture/qq2.png">
                    咨询在线QQ客服
                </div>
            </div>
        </div>
        <div class="item">
            <span class="iconfont icondianhua6"></span>
            <div class="itemCon">
                <div class="phone">
                    <div class="arrow"></div>
                    <img src="/public/home/picture/phone01.png" class="dis">
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
<script>
     var qq=<?=$conf['wap_qq']?>;
     var get_source_code="<?=$conf['kaiyuan_url']?>";
    $(function () {
        $('.function .list li').hover(function () {
            $(this).find('.pictrue').addClass('bounceIn');
        },function () {
            $(this).find('.pictrue').removeClass('bounceIn');
        });
      $('.kaiyuan').on('click',function () {
            window.open(get_source_code);
        });
        $('.min_wrapper_1200 .set_2_button').on('click',function () {
             window.location.href="/home/index/systemversion.html";
        });
         $('.btqq').on('click',function () {
            window.open("http://wpa.qq.com/msgrd?v=3&uin="+qq+"&site=qq&menu=yes");
        });
       
    })
</script>


</body>
</html>