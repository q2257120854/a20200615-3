<?php
include '../includes/common.php';
include 'header.php';
//卡密统计
$kaminum = $DB->COUNT("select count(id) from ku_carmine");
//代理统计
$daili = $DB->COUNT("select count(id) from ku_user where user_limit!='0'");
//会员统计
$user_list = $DB->COUNT("select count(id) from ku_user where user_limit='0'");
//授权统计
$sqnum = $DB->COUNT("select count(id) from ku_author"); 
//盗版统计
$piracy = $DB->COUNT("select count(url) from ku_piracy"); 
//订单统计
$dingd = $DB->COUNT("select count(out_trade_no) from ku_order where status='1'");
//工单未处理统计
$gongdang_list = $DB->COUNT("select count(addtime) from ku_complain where status='0'");
//收入统计
$manidi=$DB->COUNT("SELECT SUM(money) FROM ku_order where status='1'");
//今日新增授权统计
$authnum = $DB->COUNT("select count(id) from ku_author where addtime > '".date("Y-m-d 00:00:00")."'");
//待提现金额统计
$tixian=$DB->COUNT("SELECT SUM(money) FROM ku_paycarry where state='0'");
include 'nav.php';
?>
       
                 <div class="row">
                     <div class="container">
                         <div class="analytics-box">
                         
                         </div>
                     </div>
                 </div>
                  <div class="row">
                   <div class="col-md-2 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p><?=$dingd?></p>
                              <span>成功订单</span>
                          </div>
                          <div class="info-icon text-primary ">
                              <i class="mdi mdi-calendar-multiple-check"></i>
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                             </div>
                          </div>
                          </div>
                       </div>
                   </div>
                  
                        <div class="col-md-2 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p><?=$manidi?></p>
                              <span>总收入</span>
                          </div>
                          <div class="info-icon text-warning">
                              <i class="fa fa-dollar"></i>
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                              </div>
                          </div>
                          </div>
                       </div>
                   </div>

                     <div class="col-md-2 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p><?=$tixian?></p>
                              <span>待提现金额</span>
                          </div>
                          <div class="info-icon text-warning">
                              <i class="mdi mdi-format-strikethrough-variant"></i>
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                              </div>
                          </div>
                          </div>
                       </div>
                   </div>

               
                   <div class="col-md-2 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p><?=$sqnum?></p>
                              <span>授权数量</span>
                          </div>
                          <div class="info-icon text-info">
                             <i class="mdi mdi-account-convert"></i> 
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                </div>
                          </div>
                          </div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p><?=$authnum?></p>
                              <span>今日新增</span>
                          </div>
                          <div class="info-icon text-danger">
                              <i class="mdi mdi-google-circles-group"></i>
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                             </div>
                          </div>
                          </div>
                       </div>
                   </div>
                  <div class="col-md-2 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p><?=$user_list?></p>
                              <span>会员数量</span>
                          </div>
                          <div class="info-icon text-info">
                             <i class="mdi mdi-account-location"></i> 
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                             </div>
                          </div>
                          </div>
                       </div>
                   </div>
                   <div class="col-md-2 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p><?=$daili?></p>
                              <span>代理数量</span>
                          </div>
                          <div class="info-icon text-info">
                             <i class="mdi mdi-account-multiple"></i> 
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                                </div>
                          </div>
                          </div>
                       </div>
                   </div>
                
                     <div class="col-md-2 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p><?=$kaminum?></p>
                              <span>卡密数量</span>
                          </div>
                          <div class="info-icon text-info">
                             <i class="mdi mdi-credit-card-multiple"></i> 
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-pink" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                             </div>
                          </div>
                          </div>
                       </div>
                   </div>
                     <div class="col-md-2 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p><?=$piracy?></p>
                              <span>盗版数据</span>
                          </div>
                          <div class="info-icon text-info">
                             <i class="mdi mdi-database"></i> 
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                             </div>
                          </div>
                          </div>
                       </div>
                   </div>
                       <div class="col-md-4 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p><?=$gongdang_list?></p>
                              <span>未处理工单</span>
                          </div>
                          <div class="info-icon text-info">
                             <i class="mdi mdi-file-chart"></i> 
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                             </div>
                          </div>
                          </div>
                       </div>
                   </div>
                
                  </div>
                  <div class="row">
                       <div class="col-md-12">
                 <div class="white-box">
                    <h2 class="header-title">程序信息</h2>
                     <div class="table-wrap">
                            <table class="table table-bordered">
                          <tbody>
                             <tr>
                        <td>
                          <code>
                            系统更新
                          </code>
                        </td>
                        <td>
                         已经是最新
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>
                            当前版本
                          </code>
                        </td>
                        <td>
                          v.2.0
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>
                            程序名称
                          </code>
                        </td>
                        <td>
                         酷享授权站
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>
                           版本所有
                          </code>
                        </td>
                        <td>
                          正版
                        </td>
                      </tr>
                          </tbody>
                        </table>
                     </div>
                 </div>
                 </div>
                 </div>

          
             <div class="row">
                <div class="col-md-6">
                 <div class="white-box">
                    <h2 class="header-title">系统信息</h2>
                     <div class="table-wrap">
                            <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td>
                          <code>
                           服务器操作系统：
                          </code>
                        </td>
                        <td>
                          <?php echo PHP_OS; ?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>
                          服务器环境
                          </code>
                        </td>
                        <td>
                         <?php echo $_SERVER ['SERVER_SOFTWARE'];  ?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>
                           网站目录：
                          </code>
                        </td>
                        <td>
                         <?php echo __FILE__;?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>
                          文件上传限制：
                          </code>
                        </td>
                        <td>
                          <?php echo ini_get('upload_max_filesize'); ?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>
                          POST限制：
                          </code>
                        </td>
                        <td>
                           <?php echo ini_get('post_max_size'); ?>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
            </div>

             <div class="col-md-6">
                 <div class="white-box">
                     <h2 class="header-title"></h2>
                     <div class="table-wrap">
                            <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td>
                          <code>
                          服务器域名/IP：
                          </code>
                        </td>
                        <td>
                          <?php echo $_SERVER["SERVER_NAME"];?>/ <?php echo $_SERVER['SERVER_ADDR']?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>
                         PHP 版本：
                          </code>
                        </td>
                        <td>
                         <?php echo PHP_VERSION?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>
                          服务器语言：
                          </code>
                        </td>
                        <td>
                       <?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE']?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>
                          最大占用内存：
                          </code>
                        </td>
                        <td>
                         <?php echo get_cfg_var ("memory_limit")?get_cfg_var("memory_limit"):"无" ?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>
                         最大执行时间：：
                          </code>
                        </td>
                        <td>
                          <?php echo get_cfg_var("max_execution_time")."秒 ";?>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
             
           <div class="row">
           <div class="col-md-12">
            <div class="white-box">
                     <h2 class="header-title">开发团队</h2>
                     <div class="table-wrap">
                            <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td>
                          <code>
                          开发者
                          </code>
                        </td>
                        <td>
                          5G云资源(2316803263@qq.com)
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>
                         技术QQ
                          </code>
                        </td>
                        <td>
                        2316803263
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>
                         版本所有
                          </code>
                        </td>
                        <td>
                       西安市碑林区5G云资源 <a href="https://www.kuxiangcms.com/">访问官网</a> 
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              </div>
            </div>
            </div>
        <footer class="footer-main"><a target="_blank" href="http://www.kuxiangcms.com/"><?php echo $conf['copyright'] ?></a></footer>  
       </div>
    <script src="./admin/js/jquery.min.js"></script>
    <script src="./admin/js/bootstrap.min.js"></script>
    <script src="./admin/plugins/moment/moment.js"></script>
    <script  src="./admin/js/jquery.slimscroll.js "></script>
    <script src="./admin/js/jquery.nicescroll.js"></script>
    <script src="./admin/js/functions.js"></script>
    <script src="./admin/plugins/morris-chart/morris.js"></script>
    <script src="./admin/plugins/morris-chart/raphael-min.js"></script>
    <script src="./admin/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
</body>
</html>
