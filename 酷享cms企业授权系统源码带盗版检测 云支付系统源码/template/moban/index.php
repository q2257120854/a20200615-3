<!--///////////////////////////////////////////////////////////
//                         _ooOoo_                           //
//                        o8888888o                          //
//                        88" . "88                          //
//                        (| ^_^ |)                          //
//                        O\  =  /O                          //
//                     ____/`---'\____                       //
//                   .'  \\|     |//  `.                     //
//                  /  \\|||  :  |||//  \                    //
//                 /  _||||| -:- |||||-  \                   //
//                 |   | \\\  -  /// |   |                   //
//                 | \_|  ''\---/''  |   |                   //
//                 \  .-\__  `-`  ___/-. /                   //
//               ___`. .'  /--.--\  `. . ___                 //
//             ."" '<  `.___\_<|>_/___.'  >'"".              //
//           | | :  `- \`.;`\ _ /`;.`/ - ` : | |             //
//           \  \ `-.   \_ __\ /__ _/   .-` /  /             //
//     ========`-.____`-.___\_____/___.-`____.-'========     //
//                          `=---='                          //
//     ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^     //
//          佛祖保佑         永无BUG         永不修改        //
///////////////////////////////////////////////////////////////-->
<!--5G云资源 酷享云授权系统 作者：余生 QQ：2316803263 盗版必究 购买正版请联系作者 盗版有风险-->
<?php 
include 'home/head.php'; 
$sql = "SELECT * FROM ku_article where state='0' and type='0' order by addtime desc limit 3";
$gsql = "SELECT * FROM ku_article where state='0' and type='2' and dada='0' order by addtime desc limit 10";

?> 
<div class="clearfix"></div>
<script>
    $('.business').click(function () {
        window.location.href="/home/index/memberauthorize.html";
    });
    $('.applys').click(function () {
        window.location.href="/home/index/apply.html";
    });
</script>
    <div id="fullSlide">
        <div class="bd"> 
            <ul>
                  <?php
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
        <div class="hd">
            <ul>  <?php
                    $rs=$DB->query($gsql);
                  while($res = $DB->fetch($rs))
                  {
                   ?>             
                                <li></li>
                                
                                <?php }?>  
                            </ul>
        </div>
    </div>
    <div class="category">
        <a class="item" href="<?=$conf['ban_url']?>" target="_blank">
            <div class="itemCon">
                <div class="line">
                    <div class="dis pictrue animated"><img src="public/home/picture/category1.png"></div>
                    <div class="dis text">
                        <div class="name">帮助文档</div>
                        <div>安装配置帮助文档</div>
                    </div>
                </div>
            </div>
        </a>
        <a class="item" href="/home/index/memberauthorize.html">
            <div class="itemCon">
                <div class="line">
                    <div class="dis pictrue animated"><img src="public/home/picture/category2.png"></div>
                    <div class="dis text">
                        <div class="name">查询授权</div>
                        <div>查询系统授权信息</div>
                    </div>
                </div>
            </div>
        </a>
        <a class="item" href="<?=$conf['kaiyuan_url']?>" target="_blank">
            <div class="itemCon">
                <div class="line">
                    <div class="dis pictrue animated"><img src="public/home/picture/category3.png"></div>
                    <div class="dis text">
                        <div class="name">免费下载</div>
                        <div>免费支付源码下载</div>
                    </div>
                </div>
            </div>
        </a>
        <a class="item" href="/home/index/systemversion.html">
            <div class="itemCon">
                <div class="line">
                    <div class="dis pictrue animated"><img src="public/home/picture/category4.png"></div>
                    <div class="dis text">
                        <div class="name">商用授权</div>
                        <div>获取商用授权版源码</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="clearfix"></div>
    <div class="freeSystem min_wrapper_1200">
        <div class="title">
            <div class="name">不断迭代的CoolYun开源系统</div>
            <div>CoolYun支付系统是把支付宝支付，微信支付，财付通，公众号支付，WAP支付等聚合为一个付款渠道接口，通过标准的API接口发放给下级商户使用
个性化定制聚合支付平台，支付通道资源优势互补，中立、灵活、便捷。</div>
        </div>
        <ul>
            <li>
                <div class="item1">
                    <div class="iconfont iconzhifu animated"></div>
                    <div class="name">支付系统</div>
                    <div>多通道支付接口助力企业运营</div>
                    <div class="list">
                        <div class="item">全新UI</div>
                        <div class="item">接口管理</div>
                        <div class="item">多接口管理</div>
                    </div>
                </div>
                <div class="item2">
                    <div class="bgcolor">
                        <div class="name animated">Pay管理</div>
                        <div class="infor animated">多通道支付接口助力企业运营</div>
                    </div>
                    <div class="list">
                        <div class="item">
                            <div class="dis iconfont iconjingzhimoban"></div>
                            <div class="dis">
                                <div class="name">全新UI</div>
                                <div class="explanation">全新后台UI设计，更好用户体验</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dis iconfont iconjingzhunweihu"></div>
                            <div class="dis">
                                <div class="name">接口管理</div>
                                <div class="explanation" style="">官方支付宝微信QQ、码支付个码，第四方易支付接口</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dis iconfont iconqiangdazhifu"></div>
                            <div class="dis">
                                <div class="name">多官方轮训</div>
                                <div class="explanation">对接多个第三方支付接口，实线限额支付通道轮训</div>
                            </div>
                        </div>
                      
                        <div class="more qqcs">查看更多 ></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item1">
                    <div class="dis iconfont iconjiaohusheji"></div>
                    <div class="name">订单系统</div>
                    <div>订单统计，支付详情</div>
                    <div class="list">
                        <div class="item">订单查询</div>
                        <div class="item">重新通知</div>
                    </div>
                </div>
                <div class="item2">
                    <div class="bgcolor">
                        <div class="name animated">订单管理</div>
                        <div class="infor animated">订单统计，支付调用详情一目了然。</div>
                    </div>
                    <div class="list">
                        <div class="item">
                            <div class="dis iconfont iconjiaoyifenxi"></div>
                            <div class="dis">
                                <div class="name">订单查询</div>
                                <div class="explanation">一键查询每条订单详情，支付状态</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dis iconfont iconjifenxitong"></div>
                            <div class="dis">
                                <div class="name">重新通知</div>
                                <div class="explanation">订单重新通知回调接入网站。</div>
                            </div>
                        </div>
                      
                        <div class="more qqcs">查看更多 ></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item1">
                    <div class="iconfont iconqudaotuiguang"></div>
                    <div class="name">分销推广</div>
                    <div>社群营销促进粉丝快速裂变</div>
                    <div class="list">
                        <div class="item">邀请推广</div>
                        <div class="item">邀请分佣</div>
                        <div class="item">链接分享</div>
                    </div>
                </div>
                <div class="item2">
                    <div class="bgcolor">
                        <div class="name animated">分销推广</div>
                        <div class="infor animated">社群营销促进粉丝快速裂变</div>
                    </div>
                    <div class="list">
                        <div class="item">
                            <div class="dis iconfont iconrenrenfenxiao"></div>
                            <div class="dis">
                                <div class="name">邀请推广</div>
                                <div class="explanation">用户参与邀请推广，促进用户快速增长</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dis iconfont iconzhidingfenxiao"></div>
                            <div class="dis">
                                <div class="name">邀请分佣</div>
                                <div class="explanation">后台开启设置佣金，邀请成功用户得佣金奖励</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dis iconfont iconhaibaofenxiang"></div>
                            <div class="dis">
                                <div class="name">链接分享</div>
                                <div class="explanation">用户后台复制邀请链接，实现快速分享</div>
                            </div>
                        </div>
                        <div class="more qqcs">查看更多 ></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item1">
                    <div class="iconfont iconkehuguanli"></div>
                    <div class="name">会员系统</div>
                    <div>享受低费率和手动申请结算即时到账特权</div>
                    <div class="list">
                        <div class="item">会员等级</div>
                        <div class="item">会员费率</div>
                        <div class="item">结算特权</div>
                    </div>
                </div>
                <div class="item2">
                    <div class="bgcolor">
                        <div class="name animated">会员系统</div>
                        <div class="infor animated">享受低费率和手动申请结算即时到账特权</div>
                    </div>
                    <div class="list">
                        <div class="item">
                            <div class="dis iconfont iconhuiyuandengji"></div>
                            <div class="dis">
                                <div class="name">会员等级</div>
                                <div class="explanation">普通会员、黄金会员、钻石会员、</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dis iconfont iconhuiyuanzhekou"></div>
                            <div class="dis">
                                <div class="name">会员费率</div>
                                <div class="explanation">会员享受不同等级的费率</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dis iconfont iconjifenxitong"></div>
                            <div class="dis">
                                <div class="name">结算特权</div>
                                <div class="explanation">结算特权，根据会员等级，给与d+0结算特权</div>
                            </div>
                        </div>
                       
                        <div class="more qqcs">查看更多 ></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item1 on">
                    <div class="iconfont iconshujufenxi"></div>
                    <div class="name">数据分析</div>
                    <div>全方位数据剖析，辅助经营决策</div>
                    <div class="list">
                        <div class="item">支付数据</div>
                        <div class="item">结算数据</div>
                        <div class="item">会员数据</div>
                    </div>
                </div>
                <div class="item2 on">
                    <div class="bgcolor">
                        <div class="name animated">数据分析</div>
                        <div class="infor animated">全方位数据剖析，辅助经营决策</div>
                    </div>
                    <div class="list">
                        <div class="item">
                            <div class="dis iconfont iconjiaoyishuju"></div>
                            <div class="dis">
                                <div class="name">支付数据</div>
                                <div class="explanation">支付金额，订单统计，一目了然</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dis iconfont iconcaiwushuju"></div>
                            <div class="dis">
                                <div class="name">结算数据</div>
                                <div class="explanation">结算订单统计，结算金额统计，一目了然</div>
                            </div>
                        </div>
                      
                        <div class="item">
                            <div class="dis iconfont iconhuiyuanshuju"></div>
                            <div class="dis">
                                <div class="name">会员数据</div>
                                <div class="explanation">用户统计，会员增长数据分析</div>
                            </div>
                        </div>
                        <div class="more qqcs">查看更多 ></div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="clearfix"></div>
        <div class="freeBnt set_2_button set_4_button1s">
            <span>免费获取</span>
        </div>
    </div>
    <div class="unlock min_wrapper_1200">
        <div class="title">
            <div class="name">解锁更多的系统特权</div>
            <div>购买商业授权版本，获得更多系统功能，畅享版本免费升级</div>
        </div>
        <div class="pictrue">
            <img src="public/home/picture/home.png" class="img">
            <div class="item item1">
                <div class="name"><img src="public/home/picture/zs.png">商业授权证书</div>
                <div>官方正式授权证书，保障系统安全可靠</div>
            </div>
            <div class="item item2">
                <div class="name"><img src="public/home/picture/yx.png">更多系统功能</div>
                <div>升级文章管理，会员互转等功能</div>
            </div>
            <div class="item item3">
                <div class="name"><img src="public/home/picture/qq.png">会员群服务</div>
                <div>技术群指导服务，帮助开发者快速熟悉系统架构</div>
            </div>
            <div class="item item4">
                <div class="name"><img src="public/home/picture/gx.png">在线更新</div>
                <div>免费更新升级，解决系统维护难题</div>
            </div>
        </div>
        <div class="member set_4_button1 raised hoverable Upgrade">
            <div class="anim"></div>
            <span><i class="iconfont iconhuojian"></i>了解商业版</span>
        </div>
    </div>
    <div class="case">
        <div class="title">我们的客户案例</div>
        <div class="tip">无论项目大小，我们都会不遗余力的为您提供最优质的产品和高质量的服务</div>
        <div class="wrapper_1200">
            <div id="slideBox" class="slideBox">
                <div class="hd">
                    <ul>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                </div>
                <a class="prev iconfont iconzuo001" href="javascript:void(0)"></a>
                <div class="bd">
                    <ul> <?php
                    $rs=$DB->query($sql);
       while($res = $DB->fetch($rs))
            {
                 ?>
                                               <li>
                            <a href="/home/index/casedetails.html?id=<?=$res['id']?>">
                                <div class="dis text">
                                    <div class="name"><span>“</span><?=$res['title']?></div>
                                    <div class="textCon"><?=$res['content']?></div>
                                    <div class="caseBnt set_2_button caseDetails" data-id="34">
                                        <span>查看案例</span>
                                    </div>
                                </div>
                                <div class="dis pictrue"><img src="<?=$res['img']?>"/></div>
                            </a>
                        </li>
                        <?php }?>
                             
                           
                          
                                           </ul>
                </div>
                <a class="dis iconfont iconyou001 next" href="javascript:void(0)"></a>
            </div>
        </div>
    </div><br>
     <div class="customized min_wrapper_1200">
        <div class="wrapper_1200">
            <div class="title">我要做定制支付系统，抢占第四方支付市场！</div>
            <div class="bnt set_4_button1 raised hoverable qqcs">
                <div class="anim"></div>
                <span>我要定制</span>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
 <?php 
include 'home/footer.php';
?>
