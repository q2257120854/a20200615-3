<?php
include '../../home/index/head.php';
//数字输出网页计数器
        $max_len = 9;
        $CounterFile = "coun.dat";
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
        <div class="asideCon" style="margin: auto 90px ;">
            <div class="article">
                <div class="name">CoolYun团队招聘</div>
                <div class="browse"><span class="iconfont iconliulan"></span>浏览量 <?=$counter?><span class="iconfont iconshijian"></span>时间 2019-05-23</div>
                <div class="articleCon">
                    <h3><span style="color:#3f3f3f;font-size:24px">高级前端开发工程师</span></h3><p><span style="color:#3f3f3f"><br/></span></p><p><span style="color:#3f3f3f">岗位职责：</span></p><p><span style="color:#3f3f3f">1、参与需求分析、前端架构设计；</span></p><p><span style="color:#3f3f3f">2、负责前端界面（微信，PC）构建，交互设计与实现；</span></p><p><span style="color:#3f3f3f">3、负责前端组件的设计与规划，关键核心组件开发；</span></p><p><span style="color:#3f3f3f">4、持续优化性能、效率，提升用户体验；</span></p><p><span style="color:#3f3f3f">5、Web前沿技术调研，并给出具体可行的应用建议。</span></p><p><span style="color:#3f3f3f"><br/></span></p><p><span style="color:#3f3f3f">岗位要求：</span></p><p><span style="color:#3f3f3f">1、本科及以上学历，计算机相关理工科专业，</span><span style="color: rgb(63, 63, 63);">具备3年以上Web&nbsp;前端工作经验，熟练掌握 HTML5/CSS3/JavaScript&nbsp;相&nbsp; &nbsp; &nbsp; &nbsp;关技能；</span></p><p><span style="color:#3f3f3f">2、有较强的JavaScript&nbsp;编写能力，能够用原生JavaScript(ES5、ES6、ES6+)&nbsp;实现复杂功能和UI&nbsp;模块；</span></p><p><span style="color:#3f3f3f">3、精通react，vue等前端框架，至少开发过一款成熟的产品；</span></p><p><span style="color:#3f3f3f">4、熟悉Promise、Koa、Babel、Webpack等开发或运用；</span></p><p><span style="color:#3f3f3f">5、对解决移动设备下及微信平台中遇到的问题有一定经验；</span></p><p><span style="color:#3f3f3f">6、有基于微信平台，大型电商前端工作、小程序经验者优先。</span></p><p><span style="color:#3f3f3f"><br/></span></p><p><span style="color:#3f3f3f"><br/></span></p><h3><span style="color: rgb(63, 63, 63);font-size:24px">PHP开发工程师</span></h3><p><span style="color:#3f3f3f"><br/></span></p><p><span style="color:#3f3f3ffont-size:16px">岗位职责：</span></p><p><span style="color:#3f3f3ffont-size:16px">1、负责项目服务端和后台页面的实现方案设计及平台核心代码（PHP）开发；</span></p><p><span style="color:#3f3f3ffont-size:16px">2、负责相关的网络平台的系统维护，处理反馈回来的系统bug；</span></p><p><span style="color:#3f3f3ffont-size:16px">3、负责相关需求说明书、技术文档的撰写。</span></p><p><span style="color:#3f3f3ffont-size:16px">4、负责技术难点和关键问题的解决。</span></p><p><span style="color:#3f3f3ffont-size:16px"><br/></span></p><p><span style="color:#3f3f3ffont-size:16px">任职要求：</span></p><p><span style="color:#3f3f3ffont-size:16px">1.&nbsp; 本科及以上学历，计算机相关理工科专业优先，3年以上PHP和Mysql的开发经验，具备OPP开发思想。</span><br/></p><p><span style="color:#3f3f3ffont-size:16px">2、熟练掌握XML、HTML、CSS、Bootstrap、Jquery（必须）等Web前端技术。</span></p><p><span style="color:#3f3f3ffont-size:16px">3、熟练掌握MySQL数据库，有一定的数据库设计、优化经验，能够透彻理解数据库事务机制。</span></p><p><span style="color:#3f3f3ffont-size:16px">4、熟悉Linux系统基本操作，熟悉apache、MySQL和PHP安装配置以及主要的参数。</span></p><p><span style="color:#3f3f3ffont-size:16px">5、熟悉thinkphp开发框架，有电商类项目经验者优先，有其他PHP MVC框架开发经验亦可。</span></p><p><span style="color:#3f3f3ffont-size:16px">6、拥有良好的编码规范、网站安全意识、有团队意识，善于沟通，思维敏捷。</span></p><p><span style="color:#3f3f3ffont-size:16px">7、同时会PHP和python语言者优先考虑。</span></p><p><span style="color:#3f3f3ffont-size:16px"><br/></span></p><p style="text-align: left;"><span style="font-size:16px"><span style="color: rgb(63, 63, 63);">联系邮箱：</span>2316803263@qq.com</span><br/></p><p><br/></p>                </div>
              
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
<script src="/public/home/js/jquery.share.min.js"></script>
<script type="text/javascript">

var experience_url="<?=$conf['yan_url']?>";
 $('.wrapper1').on('click',function () {
            window.open(experience_url);
        });

</script>