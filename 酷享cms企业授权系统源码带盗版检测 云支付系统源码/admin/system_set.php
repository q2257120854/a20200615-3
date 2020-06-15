<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
$my = isset($_GET['my']) ? $_GET['my'] : null;
            if($my == "system"){
            foreach ($_POST as $k => $value) {
                        $value=daddslashes($value);
                        $DB->query("insert into ku_config set `k`='{$k}',`v`='{$value}' on duplicate key update `v`='{$value}'");
                }
      @header('Content-Type: text/html; charset=UTF-8');
       exit("<script language='javascript'>alert('修改成功！');history.go(-1);</script>");
    }
?>
 <div class="row">
                 <div class="col-md-12">
              <div class="white-box">
                <div class="widget-header">
                  <h4>
                    系统设置
                  </h4>
                </div>
                <div class="widget-content">
                        <form class="form-horizontal row-border" action="system_set.html?my=system" method="post">
                         <div class="form-group">
                            <label class="col-sm-2 control-label"> 登入IP白名单:</label>
                            <div class="col-sm-2">
                               <select class="form-control" name="limit_ip">
                              <option value="1"<?=$conf['limit_ip']==1?"selected":""?>> 
                                开启
                              </option>
                              <option value="0"<?=$conf['limit_ip']==0?"selected":""?>>
                               关闭
                              </option>
                           </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label"> 卡密前缀:</label>
                            <div class="col-md-10">
                             <input type="text" name="kalman" class="form-control" value="<?=$conf['kalman']?>" required>
                            </div>
                          </div>
                         
                          <div class="form-group">
                          <label class="col-md-2 control-label">卡密授权功能:</label>
                          <div class="col-md-5">
                         <select class="form-control" name="squan">
                              <option value="1"<?=$conf['squan']==1?"selected":""?>>
                                开
                              </option>
                              <option value="0"<?=$conf['squan']==0?"selected":""?>>
                               关
                              </option>
                           </select>
                        </div>
                      </div>
                      <div class="form-group">
                      <label class="col-md-2 control-label">更换授权上限:</label>
                        <div class="col-md-10">
                        <input type="text" name="squan_limit" class="form-control" value="<?=$conf['squan_limit']?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                       <label class="col-md-2 control-label">代理生成卡密上限:</label>
                        <div class="col-md-10">
                       <input type="text" name="kalman_limit" class="form-control" value="<?=$conf['kalman_limit']?>" required>
                        </div>
                      </div>

                          <div class="form-group">
                            <label class="col-md-2 control-label">QQ扫描登入IP:</label>
                            <div class="col-md-10">
                            <input type="text" name="loginip" class="form-control" value="<?=$conf['loginip']?>" required>
                            </div>
                          </div>

                           <div class="form-group">
                            <label class="col-sm-2 control-label">演示相关设置</label>
                            <div class="col-sm-10">
                              <p class="form-control-static">以下为演示数据设置</p>
                            </div>
                          </div>
                          <div class="form-group">
                      <label class="col-md-2 control-label">
                      演示产品名称:
                      </label>
                      <div class="col-md-10">
                        <input type="text" name="yan_name" class="form-control" placeholder="请输入演示产品名称" value="<?=$conf['yan_name']?>" required>
                      </div>
                      </div>

                           <div class="form-group">
                      <label class="col-md-2 control-label">
                       前台演示账号:
                      </label>
                      <div class="col-md-2">
                        <input type="text" name="yan_url" class="form-control" placeholder="请输入演示产品url地址" value="<?=$conf['yan_url']?>" >
                      </div>
                      <div class="col-md-2">
                        <input type="text" name="yan_number" placeholder="请输入演示产品账号" class="form-control" value="<?=$conf['yan_number']?>" >
                      </div>
                      <div class="col-md-2">
                        <input type="text" name="yan_pas" placeholder="请输入演示产品密码" class="form-control" value="<?=$conf['yan_pas']?>" >
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-2 control-label">
                       后台演示账号:
                      </label>
                      <div class="col-md-2">
                        <input type="text" name="yan_url1" class="form-control" placeholder="请输入演示产品url地址" value="<?=$conf['yan_url1']?>" >
                      </div>
                      <div class="col-md-2">
                        <input type="text" name="yan_number1" placeholder="请输入演示产品账号" class="form-control" value="<?=$conf['yan_number1']?>" >
                      </div>
                      <div class="col-md-2">
                        <input type="text" name="yan_pas1" placeholder="请输入演示产品密码" class="form-control" value="<?=$conf['yan_pas1']?>" >
                      </div>
                      </div>
                   </div> 
                  </div>
                   <div class="button-wrap">
                        <button type="submit" class="btn btn-primary btn-block">确定提交</button>
                        </div>
                       </form> 
                  </div>
              </div>
              </div>
              <br><br><br><br><br><br>
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
