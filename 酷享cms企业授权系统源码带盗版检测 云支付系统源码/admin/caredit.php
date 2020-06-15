<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
if ($my == "edit") {
 $editid = $_GET['id'];
 $row = $DB->get_row("select * from ku_carmine where id =".$editid." limit 1");
}
if ($my == "edit_submit") {
$editid = $_GET['id']; 
$carmine=daddslashes($_POST['carmine']);
$status=daddslashes($_POST['status']);
$sql="update `ku_carmine` set `carmine` ='{$carmine}',`status` ='{$status}' where `id`='{$editid}'";
if ($DB->query($sql)) {
	 @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('修改卡密成功！');window.location.href='./carmine.html';</script>");
}else{

 @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('修改卡密失败！');window.location.href='./carmine.html';</script>");	
}
}
 ?>
 <br>
 <div class="row">
            <div class="col-md-12">
              <div class="white-box">
                <div class="widget-header">
                  <h4>
                    <i class="icon-reorder">
                    </i>
                   编辑卡密状态
                  </h4>
                </div>
                <div class="widget-content">
                  <form class="form-horizontal row-border" action="?my=edit_submit&id=<?php echo $editid; ?>" method="POST" onsubmit="return checkadd()">
                    <div class="form-group">
                      <label class="col-md-2 control-label">
                        卡密:
                      </label>
                      <div class="col-md-10">
                        <input type="text" name="carmine" id="carmine" class="form-control" value="<?=$row['carmine'];?>">
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-2 control-label">
                        卡密状态:
                      </label>
                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-md-10">
                            <select class="form-control" name="status">
                              <option value="0"<?=$row['status']==0?"selected":""?>> 
                                正常
                              </option>
                               <option value="1"<?=$row['status']==1?"selected":""?>> 
                                已使用
                              </option>
                              <option value="2"<?=$row['status']==2?"selected":""?>>
                               封禁[代理无权限]
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
                         <button id="submit" class="btn btn-primary btn-block">确认修改</button>
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