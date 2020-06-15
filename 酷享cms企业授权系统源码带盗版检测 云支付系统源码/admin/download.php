<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
$my = isset($_GET['my']) ? $_GET['my'] : null;
            if($my == "modify"){
                foreach ($_POST as $k => $value) {
                        $value=daddslashes($value);
                        $DB->query("insert into ku_config set `k`='{$k}',`v`='{$value}' on duplicate key update `v`='{$value}'");
                }
       exit("<script language='javascript'>alert('设置成功！');window.location.href='./download.html';</script>");
    }
?>
<div class="row"> 
            <div class="col-md-8">
              <div class="white-box">
                <div class="widget-header">
                 <h4 class="header-title">下载配置</h4>
                </div>
                <div class="widget-content">
                  <form class="form-horizontal row-border" action="download.php?my=modify" method="post">
                    <div class="form-group">
                      <label class="col-md-2 control-label">
                        自定义下载:
                      </label>
                      <div class="col-md-4">
                        <div class="row">
                          <div class="col-md-4">
                            <select class="form-control" name="custom">
                              <option value="0" <?=$conf['custom']==0?"selected":""?>>
                               是
                              </option>
                              <option value="1" <?=$conf['custom']==1?"selected":""?>>
                               否
                              </option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="form-group">
                      <label class="col-md-2 control-label">
                       开源版下载地址:
                      </label>
                      <div class="col-md-10">
                        <input class="form-control input-width-xxlarge" type="text" name="kaiyuan_url" value="<?=$conf['kaiyuan_url']?>" placeholder="请输入开源版下载地址！"
                        style="display: block; margin-top: 6px;" required> 
                      </div>
                    </div>
                    <?php if ($conf['custom']==0) { ?>
                      
                   
                    <div class="form-group">
                      <label class="col-md-2 control-label">
                       下载网盘地址:
                      </label>
                      <div class="col-md-10">
                        <input class="form-control input-width-xxlarge" type="text" name="down_w_url" value="<?=$conf['down_w_url']?>" placeholder="请输入网盘地址！"
                        style="display: block; margin-top: 6px;" required> 
                      </div>
                    </div>
                    <?php } ?>
                     <div class="form-group">
                      <label class="col-md-2 control-label">
                        下载程序名称:
                      </label>
                      <div class="col-md-10">
                        <input class="form-control input-width-xxlarge" type="text" name="down_file" value="<?=$conf['down_file']?>" placeholder="请输入程序名称！"
                        style="display: block; margin-top: 6px;" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label">
                        授权目录地址文件名:
                      </label>
                      <div class="col-md-10">
                        <input class="form-control input-width-xxlarge" type="text" name="auth_file_path" value="<?=$conf['auth_file_path']?>" placeholder="请输入文件名！"
                        style="display: block; margin-top: 6px;" required>
                      </div>
                    </div>
               
                    <div class="form-actions">
                      <input type="submit" value="确定设置" class="btn btn-primary pull-right">
                    </div>
                  </form>
                </div>
              </div>
            </div>
        
          </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>  
             </div>      
    <footer class="footer-main"><a target="_blank" href="http://www.kuxiangcms.com/"><?php echo $conf['copyright'] ?></a></footer>  
       </div>
    <script src="./admin/js/jquery.min.js"></script>
    <script src="./admin/js/bootstrap.min.js"></script>
    <script src="./admin/plugins/moment/moment.js"></script>
    <script  src="./admin/js/jquery.slimscroll.js "></script>
    <script src="./admin/js/jquery.nicescroll.js"></script>
    <script src="./admin/js/functions.js"></script>
</body>
</html>