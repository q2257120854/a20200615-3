<?php
include '../../home/index/head.php';
$gsql = "SELECT * FROM ku_article where state='0' and type='2' and dada='1' order by addtime desc limit 10";
?>
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
                        <ul>
                        <?php
                    $rs=$DB->query($gsql);
                  while($res = $DB->fetch($rs))
                  {
                   ?>             
                    <li></li>
                    <?php }?>  
                        </ul>
                    </div>
        <a class="prev iconfont iconzuo001" href="javascript:void(0)"></a>
        <a class="next iconfont iconyou001" href="javascript:void(0)"></a>
    </div>
    <div class="function">
        <div class="wrapper_1200">
            <div class="TiTle">
                <div class="name">CoolYun支付核心功能</div>
                <div class="infor">致力于帮助更多的中小企业开展线上线下支付业务、组合多种通道形成第四方支付产品，支持wap、pc等多种支付场景</div>
            </div>
            <ul class="list">
                <li>
                    <div class="pictrue iconfont iconqudaotuiguang animated"></div>
                    <div class="name">邀请返佣</div>
                    <div class="infor">通过微信社交好友推广发展商户获取对应奖金</div>
                </li>
                <li>
                    <div class="pictrue iconfont iconwodepintuan animated"></div>
                    <div class="name">商户系统</div>
                    <div class="infor">商户基础功能，结算设置，订单查询</div>
                </li>
              
        
                <li>
                    <div class="pictrue iconfont iconshuxing animated"></div>
                    <div class="name">基础功能</div>
                    <div class="infor">订单管理、转账管理。邀请管理、</div>
                </li>
                <li>
                    <div class="pictrue iconfont iconzhifu animated"></div>
                    <div class="name">支付功能</div>
                    <div class="infor">接口设置，支付调用，支付回调</div>
                </li>
                <li>
                    <div class="pictrue iconfont iconjifen animated"></div>
                    <div class="name">结算系统</div>
                    <div class="infor">手动结算、支付宝、微信企业结算</div>
                </li>
                <li>
                    <div class="pictrue iconfont icontongzhi animated"></div>
                    <div class="name">邀请通知</div>
                    <div class="infor">每成功邀请一位商户及时提醒，通知到邀请人及客服人员</div>
                </li>
                <li>
                    <div class="pictrue iconfont iconxiaoliang animated"></div>
                    <div class="name">数据统计</div>
                    <div class="infor">订单统计、文章统计、余额统计、结算统计</div>
                </li>
              
                <li>
                    <div class="pictrue iconfont iconzhifu animated"></div>
                    <div class="name">接入文档</div>
                    <div class="infor">配备完善的接入文档，与DEMO，对接目标网站更快捷</div>
                </li>
                <li>
                    <div class="pictrue iconfont iconfankui animated"></div>
                    <div class="name">订单投诉</div>
                    <div class="infor">调用支付的同时，显示说明：投诉QQ联系方式</div>
                </li>
                 <li>
                    <div class="pictrue iconfont iconwodepintuan animated"></div>
                    <div class="name">会员等级</div>
                    <div class="infor">会员等级分普通会员、黄金会员、钻石会员，等级越高费率越低</div>
                </li>
              
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
 
    <div class="marketing">
        <div class="wrapper_1200">
            <div class="TiTle">
                <div class="name">商户后台演示如图：</div>
                <div class="infor">致力于帮助更多的中小企业开展线上线下支付业务、组合多种通道形成第四方支付产品，支持wap、pc等多种支付场景</div>
            </div>
        </div>
        <ul class="list">
            <li>
                <div class="wrapper_1200">
                    <div class="text pull-left animated">
                        <div class="tableCell">
                            <div class="num"><img src="/public/home/picture/01.png"></div>
                            <div class="name">管理后台</div>
                            <div class="infor">网站管理、平台管理、订单管理、转账管理、邀请管理、结算管理、商户管理、接口配置、商户配置、监控配置、</div>
                        </div>
                    </div>
                    <div class="pictrue pull-right animated">
                        <div class="img"><img src="/public/home/picture/kuyun1.png"></div>
                    </div>
                </div>
            </li>
            <li class="bgColor min_wrapper_1200">
                <div class="wrapper_1200">
                    <div class="text pull-right animated">
                        <div class="tableCell">
                            <div class="num"><img src="/public/home/picture/02.png"></div>
                            <div class="name">商户后台中心</div>
                            <div class="infor">
                            订单统计、结算统计、邀请统计、账号设置、订单管理、转账功能、邀请返佣、集成包插件、商户排行榜、支付测试、申请结算、收款设置</div>
                        </div>
                    </div>
                    <div class="pictrue pull-left animated">
                        <div class="img"><img src="/public/home/picture/kuyun.png"></div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="source min_wrapper_1200">
        <div class="name">强大的CoolYun支付，就应大有做为</div>
        <div class="infor"></div>
        <div class="bnt code set_4_button1 raised kaiyuan">
            <div class="anim"></div>
            <span>获取免费版</span>
        </div>
        <div class="bnt set_2_button">
            <span>了解商业版</span>
        </div>
    </div>
<?php
include '../../home/index/footer.php';
?>


