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

      @header('Content-Type: text/html; charset=UTF-8');
       exit("<script language='javascript'>alert('修改成功！');history.go(-1);</script>");
    }
?>
 <div class="row">
                 <div class="col-md-12">
                   <div class="white-box">
                     <h2 class="header-title">基本设置</h2>
                        <form class="form-horizontal" action="set.html?my=modify" method="post">
                         <div class="form-group">
                            <label class="col-sm-2 control-label">关闭网站</label>
                            <div class="col-sm-2">
                                <select class="form-control" name="website">
                              <option value="0"<?=$conf['website']==0?"selected":""?>> 
                                开启
                              </option>
                              <option value="1"<?=$conf['website']==1?"selected":""?>>
                               关闭
                              </option>
                           </select>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-md-2 control-label">网站简称:</label>
                            <div class="col-md-10">
                             <input type="text" name="title" class="form-control" value="<?=$conf['title']?>" required>
                            </div>
                          </div>
                         
                          <div class="form-group">
                          <label class="col-md-2 control-label">首页标题:</label>
                          <div class="col-md-10">
                        <input type="text" name="title_bt" class="form-control" value="<?=$conf['title_bt']?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                      <label class="col-md-2 control-label">首页关键词:</label>
                        <div class="col-md-10">
                        <input type="text" name="keywords" class="form-control" value="<?=$conf['keywords']?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                       <label class="col-md-2 control-label">首页描述:</label>
                        <div class="col-md-10">
                        <input type="text" name="description" class="form-control" value="<?=$conf['description']?>" required>
                        </div>
                      </div>
                          
                          <div class="form-group">
                            <label class="col-md-2 control-label" for="example-email">网站LOGO:</label>
                            <div class="col-md-8">
                               <input type="text" name="logo_img" class="form-control" value="<?=$conf['logo_img']?>" required>
                            </div>
                             <label class="checkbox-inline">
                          <input type="checkbox" class="uniform" checked disabled>
                         远程图片地址
                     </label>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-md-2 control-label">网站网址:</label>
                            <div class="col-md-10">
                             <input type="text" name="website_url" class="form-control" value="<?=$conf['website_url']?>" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label">ICP备案号:</label>
                            <div class="col-md-10">
                            <input type="text" name="icp_bei" class="form-control" value="<?=$conf['icp_bei']?>" required>
                            </div>
                          </div>

                           <div class="form-group">
                            <label class="col-md-2 control-label">版权信息:</label>
                            <div class="col-md-10">
                              <input type="text" name="copyright" class="form-control" value="<?=$conf['copyright']?>" required>
                            </div>
                          </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label">网站模板:</label>
                            <div class="col-sm-4">
                              <select class="form-control" name="template">
                              <option value="moban"<?=$conf['template']=='moban'?"selected":""?>> 
                                官方模板
                              </option>
                              <option value="moban1"<?=$conf['template']=='moban1'?"selected":""?>>
                                默认模板
                              </option>
                           </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label">手机/固话:</label>
                            <div class="col-md-10">
                               <input type="text" name="phone" class="form-control" value="<?=$conf['phone']?>" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label">QQ号码:</label>
                            <div class="col-md-10">
                              <input type="text" name="wap_qq" class="form-control" value="<?=$conf['wap_qq']?>" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label">QQ交流群:</label>
                            <div class="col-md-10">
                                <input type="text" name="wap_qun" class="form-control" value="<?=$conf['wap_qun']?>" required>
                            </div>
                          </div>
                           <div class="form-group">
                            <label class="col-md-2 control-label">QQ加群链接:</label>
                            <div class="col-md-10">
                                <input type="text" name="wap_lian" class="form-control" value="<?=$conf['wap_lian']?>" required>
                            </div>
                          </div>
                           <div class="form-group">
                            <label class="col-md-2 control-label">微信二维码:</label>
                            <div class="col-md-8">
                                 <input type="text" name="wx_img" class="form-control" value="<?=$conf['wx_img']?>" required>
                            </div>
                            <label class="checkbox-inline">
                          <input type="checkbox" class="uniform" checked disabled>
                         远程图片地址
                        </label>
                          </div>
                           <div class="form-group">
                            <label class="col-md-2 control-label">帮助文档URL:</label>
                            <div class="col-md-10">
                               <input type="text" name="ban_url" class="form-control" value="<?=$conf['ban_url']?>" required>
                            </div>
                          </div>
                           
                           <div class="form-group">
                            <label class="col-md-2 control-label">官方论坛URL:</label>
                            <div class="col-md-10">
                                <input type="text" name="guan_url" class="form-control" value="<?=$conf['guan_url']?>" required>
                            </div>
                          </div>
                           
                           <div class="form-group">
                            <label class="col-md-2 control-label">帮助文档URL:</label>
                            <div class="col-md-10">
                               <input type="text" name="ban_url" class="form-control" value="<?=$conf['ban_url']?>" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label">统计代码:</label>
                            <div class="col-md-10">
                              <textarea class="form-control" name="tongji" rows="5"><?=$conf['tongji']?></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                          <label class="col-md-2 control-label">友链设置:</label>
                         <div class="col-md-10">
                        <textarea class="form-control" name="you-url_tips" rows="5"><?=$conf['you-url_tips']?></textarea>
                        </div>
                          </div>
                        <div class="button-wrap">
                        <button type="submit" id="submit" class="btn btn-primary btn-block">确定提交</button>
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