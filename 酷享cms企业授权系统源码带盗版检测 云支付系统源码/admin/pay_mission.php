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
       exit("<script language='javascript'>alert('修改成功！');window.location.href='./pay_mission.html';</script>");
    }

?> 
<div class="row">
<div class="col-md-12">
         <div class="alert alert-info fade in">
                      <i class="icon-remove close" data-dismiss="alert">
                      </i>
                       1、分佣说明：1:100 请合理设置分佣。<br>
                      2、提现设置说明：默认100,填100代表必须赏金金额必须满100才可申请提现。<br>
                    </button></a>
                    </div>
                    </div>
                    </div>

        <div class="row"> 
         <div class="col-md-8">
              <div class="white-box">
                <div class="widget-header">
                   <h4 class="header-title">分佣设置</h4>
                                    <div class="widget-content">
                              <form class="form-horizontal row-border" action="pay_mission.php?my=modify" method="post">
                        <div class="form-group">
                      <label class="col-md-3 control-label">
                      高级代理分佣比例
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="user_gj_money" class="form-control required digits" min="5" placeholder="请输入高级代理分佣比例 1：100！" value="<?=$conf['user_gj_money']?>" required>
                      </div>
                       <label class="control-label">
                      1：100
                      </label>
                    </div>
                      <div class="form-group">
                      <label class="col-md-3 control-label">
                       砖石代理分佣比例
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="user_zs_money" class="form-control required digits" min="5" placeholder="请输入砖石代理分佣比例 1：100！" value="<?=$conf['user_zs_money']?>" required>
                      </div>
                      <label class="control-label">
                     1：100
                      </label>
                    </div>
                     <div class="form-actions">
                      <input type="submit" value="确定设置" class="btn btn-primary pull-right">
                    </div>
                    </form>
                     </div>
                  </div>
            </div>
         </div>
</div>

        <div class="row"> 
         <div class="col-md-8">
              <div class="white-box">
                <div class="widget-header">
                   <h4 class="header-title">提现费率设置</h4>
                                    <div class="widget-content">
                              <form class="form-horizontal row-border" action="pay_mission.php?my=modify" method="post">
                    
                      <div class="form-group">
                      <label class="col-md-3 control-label">
                       提现手续费
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="carrypay" class="form-control required digits" min="5" placeholder="请输入提现手续费比例 1：100！" value="<?=$conf['carrypay']?>" required>
                      </div>
                      <label class="control-label">
                     1：100
                      </label>
                    </div>
                        <div class="form-group">
                      <label class="col-md-3 control-label">
                      提现最低限制
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="carrypay_money" class="form-control required digits" min="5" placeholder="  默认100,填100代表必须赏金金额必须满100才可申请提现" value="<?=$conf['carrypay_money']?>" required>
                      </div>
                       <label class="control-label">
                      元
                      </label>
                    </div>
                     <div class="form-actions">
                      <input type="submit" value="确定设置" class="btn btn-primary pull-right">
                    </div>
                    </form>
                     </div>
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
</body>
</html>