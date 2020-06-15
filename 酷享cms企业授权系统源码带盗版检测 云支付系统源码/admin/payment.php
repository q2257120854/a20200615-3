<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
$my = isset($_GET['my']) ? $_GET['my'] : null;
            if($my == "payment"){
                foreach ($_POST as $k => $value) {
                        $value=daddslashes($value);
                        $DB->query("insert into ku_config set `k`='{$k}',`v`='{$value}' on duplicate key update `v`='{$value}'");
                }
       exit("<script language='javascript'>alert('设置成功！');window.location.href='./payment.html';</script>");
    }

?>
<div class="row"> 
<div class="col-md-12">
         <div class="alert alert-info fade in">
                      <i class="icon-remove close" data-dismiss="alert">
                      </i>
                       1、 邮箱说明：请使用QQ邮箱接口。 <a href="http://kuxiangcms.com/?forum-5.htm"><button class="btn btn-xs btn-danger">邮箱配置教程</button></a>
                      <br>
                       2、接口说明：本系统已经集成第四方易支付接口和酷享云支付接口，把相关信息填好即可使用。接口配置只提供给首页在线授权使用。酷享云支付接口申请地址：<a href="https://pay.kuxiangcms.cn/user/login.php"><button class="btn btn-xs btn-danger">
                      访问云支付官网
                    </button></a><br>
                    </div>
                    </div>
                    </div>

<div class="row"> 
            <div class="col-md-6">
              <div class="white-box">
                <div class="widget-header">
                 <h4 class="header-title">支付接口设置【已经集成酷享云支付接口】</h4>
                </div>
                <div class="widget-content">
                  <form class="form-horizontal row-border" id="validate-1" action="payment.php?my=payment" method="post">
                   <div class="form-group">
                      <label class="col-md-3 control-label">
                        接口API
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="pay_api" class="form-control required" minlength="5" placeholder="请输入接口api！" value="<?=$conf['pay_api']?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">
                       商户ID
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="pay_pid" class="form-control required" maxlength="5" placeholder="请输入商户ID！" value="<?=$conf['pay_pid']?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">
                        商户key
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="pay_key" class="form-control required" rangelength="5, 10" placeholder="请输入商户key！" value="<?=$conf['pay_key']?>" required> 
                      </div>
                    </div>
                 
                    <div class="form-group">
                      <label class="col-md-3 control-label">
                        回调地址
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="pay_url" class="form-control required digits" max="5" placeholder="请输入回调地址！" value="<?=$conf['pay_url']?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">
                       通知地址
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                       <input type="text" name="pay_tzurl" class="form-control required digits" range="5, 10" placeholder="请输入通知地址！" value="<?=$conf['pay_tzurl']?>" required>
                      </div>
                    </div>
                    <div class="form-actions">
                      <input type="submit" value="确定设置" class="btn btn-primary pull-right">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="white-box">
                <div class="widget-header">
                   <h4 class="header-title">邮箱配置</h4>
                </div>
                <div class="widget-content">
                  <form class="form-horizontal row-border" id="validate-2" action="payment.php?my=payment" method="post">
                    <div class="form-group">
                      <label class="col-md-3 control-label">
                        邮箱SMTP验证
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                            <select class="form-control" name="mail_state">
                              <option value="1"<?=$conf['mail_state']==1?"selected":""?>> 
                                开启
                              </option>
                              <option value="0"<?=$conf['mail_state']==0?"selected":""?>>
                               关闭
                              </option>
                           </select>
                          </div>
                       </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">
                        邮箱SMTP服务器
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="mail_stmp" class="form-control required" value="<?=$conf['mail_stmp']?>" required>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-3 control-label">
                        邮箱SMTP端口
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="mail_port" class="form-control required" value="<?=$conf['mail_port']?>" required>
                      </div>
                    </div>
                       <div class="form-group">
                      <label class="col-md-3 control-label">
                        邮箱账号
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="mail_name" class="form-control required email" value="<?=$conf['mail_name']?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">
                        邮箱密码
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="mail_pwd" class="form-control required email" value="<?=$conf['mail_pwd']?>" required>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-3 control-label">
                        邮件名称
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="sitename" class="form-control required email" value="<?=$conf['sitename']?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">
                        邮件发送间隔(秒)
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="send_interval" class="form-control required url" value="<?=$conf['send_interval']?>" required>
                      </div>
                    </div>

                    <div class="form-actions">
                      <input type="submit" value="确认设置" class="btn btn-primary pull-right">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div><br><br><br><br><br><br><br><br><br> 
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