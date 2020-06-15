<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
$my = isset($_GET['my']) ? $_GET['my'] : null;
            if($my == "add"){
                foreach ($_POST as $k => $value) {
                        $value=daddslashes($value);
                        $DB->query("insert into ku_config set `k`='{$k}',`v`='{$value}' on duplicate key update `v`='{$value}'");
                }
       exit("<script language='javascript'>alert('修改成功！');window.location.href='./edition.html';</script>");
    }

?>

  <div class="row">
                  <div class="col-md-12">
                      <div class="white-box">
                          <h2 class="header-title">版本管理</h2>
                          <div class="row">
                          <form  action="edition.html?my=add" method="post">
                              <div class="col-md-6">
                              
                                  <div class="form-group">
                                    <label>当前版本号:</label>
                                   <input type="text" name="version" class="form-control" value="<?=$conf['version']?>" required>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label>当前版本编号:</label>
                                   <input type="text" name="buiid" class="form-control" value="<?=$conf['buiid']?>" required>
                                  </div>
        
                              </div>
                              
                              <div class="col-md-6">
                              
                                  <div class="form-group">
                                    <label>在线更新ZIP地址:</label>
                                     <input type="text" name="updatezip" class="form-control" value="<?=$conf['updatezip']?>" required>
                                  </div>
        
                                  <div class="form-group">
                                    <label>当前版本介绍:</label>
                                     <textarea  class="form-control" name="version-msg" maxlength="225" rows="2" placeholder=""><?=$conf['version-msg']?></textarea>
                                  </div> 
                              </div> 
                          </div>
                      </div>
                       <button id="submit" class="btn btn-primary btn-block">保存当前版本</button>
                              </form>
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