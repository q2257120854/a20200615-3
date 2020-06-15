<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
$my = isset($_GET['my']) ? $_GET['my'] : null;
            if($my == "notice"){
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
                     <h2 class="header-title">公告设置</h2>
                        <form class="form-horizontal" action="notice_set.html?my=notice" method="post">
                        
                          <div class="form-group">
                      <label class="col-md-2 control-label">
                        网站首页公告:
                      </label>
                      <div class="col-md-10">
                        <textarea rows="5" name="kunotice" class="form-control"><?=$conf['kunotice']?></textarea>
                      </div>
                    </div>
                      <div class="form-group">
                      <label class="col-md-2 control-label">
                       普通会员公告:
                      </label>
                      <div class="col-md-10">
                        <textarea rows="5" name="agent_notice" class="form-control"><?=$conf['agent_notice']?></textarea>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-2 control-label">
                       普通代理公告:
                      </label>
                      <div class="col-md-10">
                        <textarea rows="5" name="agent_notice_pu" class="form-control"><?=$conf['agent_notice_pu']?></textarea>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-2 control-label">
                       高级代理公告:
                      </label>
                      <div class="col-md-10">
                        <textarea rows="5" name="agent_notice_gj" class="form-control"><?=$conf['agent_notice_gj']?></textarea>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-2 control-label">
                       砖石代理公告:
                      </label>
                      <div class="col-md-10">
                        <textarea rows="5" name="agent_notice_zs" class="form-control"><?=$conf['agent_notice_zs']?></textarea>
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="col-md-2 control-label">
                        投诉公告信息:
                      </label>
                      <div class="col-md-10">
                        <textarea rows="5" name="ts-line_tips" class="form-control"><?=$conf['ts-line_tips']?></textarea>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-2 control-label">
                        卡密授权公告:
                      </label>
                      <div class="col-md-10">
                        <textarea rows="5" name="on-line_tips" class="form-control"><?=$conf['on-line_tips']?></textarea>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-2 control-label">
                        在线支付授权公告:
                      </label>
                      <div class="col-md-10">
                        <textarea rows="5" name="pay-line_tips" class="form-control"><?=$conf['pay-line_tips']?></textarea>
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="col-md-2 control-label">
                        未授权提示: 
                      </label>
                      <div class="col-md-10">
                        <textarea rows="5" name="not_tips" class="form-control"><?=$conf['not_tips']?></textarea>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-2 control-label">
                        授权异常提示:
                      </label>
                      <div class="col-md-10">
                        <textarea rows="5" name="abnormal" class="form-control"><?=$conf['abnormal']?></textarea>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-2 control-label">
                        授权到期提示:
                      </label>
                      <div class="col-md-10">
                        <textarea rows="5" name="expire_tips" class="form-control"><?=$conf['expire_tips']?></textarea>
                      </div>
                    </div>
                   
                        <div class="button-wrap">
                        <button type="submit" class="btn btn-primary btn-block">确定提交</button>
                        </div>
                       </form>  
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
