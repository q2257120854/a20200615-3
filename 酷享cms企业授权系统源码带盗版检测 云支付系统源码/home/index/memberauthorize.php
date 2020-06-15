<?php
include '../../home/index/head.php';
        $max_len = 9;
        $CounterFile = "problem.dat";
        if(!file_exists($CounterFile)){
            $problem = 0;                  
            $cf = fopen($CounterFile,"w"); 
            fclose($cf);                   
        }
        else{                                   
            $cf = fopen($CounterFile,"r");
            $problem = trim(fgets($cf,$max_len));
            fclose($cf);
        }
        $problem++;                                   
        $cf = fopen($CounterFile,"w");
        fputs($cf,$problem);
        fclose($cf);
?>
<div class="member-authorize">
   <div class="header min_wrapper_1200">
        <div class="name">商业使用授权证书，保护您的合法权益</div>
        <div class="infor">您的支持是我们不断进步的动力，商业授权更多是一个保障和附加的增值服务，让您优先享受新版本的强大功能和安全保障</div>
        <div class="search">
            <input type="text" placeholder="请输入域名或订单号" class="pull-left" name="kuhost">
            <div class="query pull-left raised" >
                <div class="anim"></div>
                <span>授权查询</span>
            </div>
        </div>
        <div class="dataNumsBg">
            <div class="dis">已有&nbsp;&nbsp;&nbsp;</div>
            <div class="dis" id="dataNums"></div>
            <div class="dis">&nbsp;&nbsp;&nbsp;人查询授权</div>
        </div>
    </div> 
    <div class="certificate">
        <div class="wrapper_1200">
            <div class="TiTle">
                <div class="name">为什么需要授权证书？</div>
                <div class="infor">对于商业用户,我们建议您购买商业授权以保护您的合法权益，通过CoolYun的授权，获得的不仅是一张证书，而是更多的增值服务</div>
            </div>
            <div class="list">
                <div class="item">
                    <div class="border">
                        <div class="blue iconfont iconhefaxingjiance"></div>
                    </div>
                    <div class="line"></div>
                    <div class="name">经营合法性</div>
                    <div class="infor">系统商业运行合法性避免法律纠纷，安全地使用CoolYun支付系统，无后顾之忧，提高了用户商业信誉度，很容易积累自身品牌价值</div>
                </div>
                <div class="item">
                    <div class="border">
                        <div class="blue iconfont iconprogramming__easyiconnet"></div>
                    </div>
                    <div class="line"></div>
                    <div class="name">全面开源</div>
                    <div class="infor">所有支付系统功能模块开放源代码，支持商业用户深度定制，极大地方便了自身开发团队的二次开发工作</div>
                </div>
                <div class="item">
                    <div class="border">
                        <div class="blue iconfont iconupgrade"></div>
                    </div>
                    <div class="line"></div>
                    <div class="name">免费升级</div>
                    <div class="infor">获得授权之后，在软件升级、功能调整时，将优先考虑授权用户需求，授权用户可通过更新包一键升级</div>
                </div>
                <div class="item on">
                    <div class="border">
                        <div class="blue iconfont iconxitong"></div>
                    </div>
                    <div class="line"></div>
                    <div class="name">技术支持</div>
                    <div class="infor">成为我们的VIP会员，无需担心技术问题，我们是您最坚强的技术后盾</div>
                </div>
            </div>
        </div>
    </div>
    <div class="empower min_wrapper_1200">
        <div class="wrapper_1200">
            <div class="title">获取商业授权，为您的商业运营保驾护航！</div>
            <div class="empowerBnt">
                <div class="bnt set_4_button1 apply">
                    <div class="anim"></div>
                    <span>获取授权</span>
                </div>
                <div class="bnt consult set_2_button qqcs">
                    <span><i class="iconfont iconzixun"></i>我要咨询</span>
                </div>
            </div>
        </div>
    </div>
        <div class="common-problem">
        <div class="wrapper_1200">
            <div class="title">常见问题</div>
            <div class="list">
                                <div class="item">
                    <div>
                        <div class="dis problem">获取商业版权后可以去除全部商业版权吗？</div>
                        <div class="iconfont iconxiala dis"></div>
                    </div>
                    <div class="answer">取得商业授权后，可以去除官方版权信息。</div>
                </div>
                                <div class="item">
                    <div>
                        <div class="dis problem">商业授权码生成后域名可以更改吗？</div>
                        <div class="iconfont iconxiala dis"></div>
                    </div>
                    <div class="answer">由于商品的特殊性，商业授权码生成后不提供免费更改域名服务，如需更改域名需要缴纳更改时官方授权费用的50%。</div>
                </div>
                                <div class="item">
                    <div>
                        <div class="dis problem">一份商业授权可以用于多个网站吗？</div>
                        <div class="iconfont iconxiala dis"></div>
                    </div>
                    <div class="answer">不可以，商业授权是根据网站域名来授权的，一份商业授权只能授予一个网站一个域名，或域名的二级域名。</div>
                </div>
                                <div class="item">
                    <div>
                        <div class="dis problem">公开代码为什么还要购买版权？</div>
                        <div class="iconfont iconxiala dis"></div>
                    </div>
                    <div class="answer">公开不等于完全免费！公开代码是为了方便用户二次开发，便于学习和交流，免费使用请务必保留官方版权标识和链接。免费版只有基础的功能，购买具有商业授权的版本后，还可享受后续的系统修复升级等特权。</div>
                </div>
                                <div class="item">
                    <div>
                        <div class="dis problem">什么是商业授权？</div>
                        <div class="iconfont iconxiala dis"></div>
                    </div>
                    <div class="answer">商业授权是软件开发者授权用户将软件用于商业用途的凭证（商业使用权利）。根据协议可免费用于学习交流，且不限制商业用途，但必须保留底部官方版权信息和链接；如果在未经官方商业授权而将系统版权去除，则将会被官方视为侵权。</div>
                </div>
                                <div class="item">
                    <div>
                        <div class="dis problem">怎样才能获得正版商业授权？</div>
                        <div class="iconfont iconxiala dis"></div>
                    </div>
                    <div class="answer">在淘宝官方店、官方网站、互站店铺购买的源码保存订单；
在官网点击授权菜单，输入QQ信息，域名信息，订单信息，提交授权；
官方授权成功后可下载商业授权源码程序。</div>
                </div>
                            </div>
        </div>
    </div>
 <div class="clearfix" style="margin-top: 60px;"></div>
    <div id="advers" class="min_wrapper_1200" >
        <div class="wrapper_1200 wrapper1">免费体验CoolYun支付系统<span>立即体验</span></div>
    </div>
       <div class="empowerWindow one">
        <div class="pictrue"><img src="/public/home/picture/badge1.png"><div class="iconfont iconguanbi"></div></div>
        <div class="tip"><a class="link"></a> 尚未获得商用授权许可！</div>
        <div class="infor">如果你是在CoolYun官方渠道购买的产品，请检查信息是否填写有误！如有疑问，可咨询客服。</div>
        <div class="query">重新查询</div>
    </div>
    <div class="empowerWindow two">
        <div class="pictrue"><img src="/public/home/picture/badge.png"><div class="iconfont iconguanbi"></div></div>
        <div class="tip"><a class="link"></a> 您已获得商用授权许可！</div>
        <div class="infor">正版商业授权支持，技术维护一键升级更新与更多增值服务！</div>
        <div class="query">确定</div>
    </div>
    <div class="ewmPay">
        <div class="pictrue"><img src="<?=$conf['wx_img']?>"></div>
        <div class="infor">使用微信扫码关注公众号,享受会员特权</div>
        <div class="iconfont iconguanbi"></div>
    </div>
  <!--   <div class="payStatus">
        <div class="iconfont iconzhifushibai"></div>
        <div class="status fail">支付失败</div>
        <div class="infor">您未支付成功，可尝试重新支付或通过淘宝购买会员版，有任何疑问可以咨询我们的在线客服。</div>
        <div class="button">
            <div class="bnt">淘宝购买</div>
            <div class="bnt">好的</div>
        </div>
    </div> -->

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
       var qq=<?=$conf['wap_qq']?>;
        var number_enquiries=<?=$problem?>;
        $('.apply').on('click',function () {
             window.location.href="/home/index/systemversion.html";
        });
        $('.qqcs').on('click',function () {
            window.open("http://wpa.qq.com/msgrd?v=3&uin="+qq+"&site=qq&menu=yes");
        });
        $('.certificate .list .item').on("mouseenter",function(){
            $(this).addClass('on').siblings().removeClass('on');
        });
        var id=0;
        $('.header .query').on("click",function(){
            var number=$("input[name='kuhost']").val();
            if(!number){
            	 layer.msg('请输入查询域名或订单号！', {icon: 5});
                return false;
            }
            $.ajax({
                url:"ajax.php?act=cha",
                type:"POST",
                data:{number:number},
                datatype:"json",
                success:function (res) {
                    if(res.code==1){
                        $('.two').addClass('on');
                        $('.mask').show();
                        $('.link').text(number);
                        id=res.id;
                    }else{
                        $('.one').addClass('on');
                        $('.mask').show();
                        $('.link').text(number);
                        id=0;
                    }
                }
            });
        });
        jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:false,
            vis:3,trigger:"click"});
        $('.one .query').on('click',function () {
            $('.empowerWindow').removeClass('on');
            $('.mask').hide();
            location.replace(location);
        });
        $('.two .query').on('click',function () {
            $('.empowerWindow').removeClass('on');
            $('.mask').hide();
            window.location.href="/home/index/memberauthorize.html";
        });
        $('.empowerWindow .iconfont').on('click',function () {
            $('.empowerWindow').removeClass('on');
            $('.mask').hide();

        });
        $('.ewmPay .iconfont').on('click',function () {
            $('.ewmPay').removeClass('on');
            $('.mask').hide();
        });
        $("#dataNums").rollNum({
            deVal:number_enquiries
        });
        $('.common-problem .list .item').on('mouseenter',function () {
            $(this).addClass('on');
            $(this).find('.answer').show();
            $(this).find('.iconfont').addClass('iconxiala-copy');
        });
        $('.common-problem .list .item').on('mouseleave',function () {
            $(this).removeClass('on');
            $(this).find('.answer').hide();
            $(this).find('.iconfont').removeClass('iconxiala-copy');
        });
    })
</script>