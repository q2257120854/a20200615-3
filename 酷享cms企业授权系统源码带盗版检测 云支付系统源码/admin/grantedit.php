<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
if($my == "edit_submit"){
                $sq_id = $_GET['id'];
                 $row = $DB->get_row("select * from ku_author where id =".$sq_id." limit 1");
                 if(!$row){
                      @header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('修改失败,授权不存在！');history.go(-1);</script>");
                  }
                 foreach ($_POST as $k => $value) {
                        if($k=='Submit')continue;

                        if($set != ""){
                            $set = $set . ",";
                        } 
                         $set .= $k ."= '".$value."'";
                    }
                $sql = "update ku_author set {$set} where id = ".$sq_id;
                
                if($DB->query($sql)){
                    tb_update($row['kuhost'], $row['ku_qq'], $set);
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('修改授权成功！');window.location.href='./authorize.html';</script>");
                }else{
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('修改失败！');history.go(-1);</script>");
                }

}
?>
<?php
 if($my == "edit"){
            	 $sq_id = $_GET['id'];
                $sq_row = $DB->get_row("select * from ku_author where id = ".$sq_id." limit 1");     
 ?>  
 <div class="white-box"> 
  <div class="row">
            <div class="col-md-12">
              <div class="white-box">
                <div class="widget-header">
                  <h4>
                    <i class="icon-reorder">
                    </i>
                   修改授权
                  </h4>
                </div>
                <div class="widget-content">
                  <form class="form-horizontal row-border" action="?my=edit_submit&id=<?=$sq_id?>" method="POST" onsubmit="return checkadd()">
                    <div class="form-group">
                      <label class="col-md-2 control-label">
                        授权域名:
                      </label>
                      <div class="col-md-10">
                        <input type="text" name="kuhost" id="kuhost" class="form-control" value="<?=$sq_row['kuhost']?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">
                        授权QQ:
                      </label>
                      <div class="col-md-10">
                        <input type="text" name="ku_qq" id="ku_qq" class="form-control" value="<?=$sq_row['ku_qq']?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">
                        修改授权次数:
                      </label>

                      <div class="col-md-10">
                        <input type="text" name="number" id="number" class="form-control" value="<?=$sq_row['number']?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">
                        授权到期时间:
                      </label>
                      <div class="col-md-10">
                      <input class="form-control" name="dhtime" id="datebut" type="text" placeholder="请选择授权日期" onClick="jeDate({dateCell:'#datebut',isTime:true,format:'YYYY-MM-DD hh:mm:ss'})" value="<?=$sq_row['dhtime']?>" readonly>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-2 control-label">
                        授权状态:
                      </label>
                      <div class="col-md-10">
                        <div class="row">
                          <div class="col-md-10">
                            <select class="form-control" name="state">
                              <option value="0"<?=$sq_row['state']==0?"selected":""?>>
                                冻结
                              </option>
                              <option value="1"<?=$sq_row['state']==1?"selected":""?>>
                               正常
                              </option>
                               <option value="2"<?=$sq_row['state']==2?"selected":""?>>
                               封禁[代理无法操作]
                              </option>
                           </select>
                          </div>
                        </div>
                       </div>
                       </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">
                        备注信息:
                      </label>
                      <div class="col-md-10">
                        <input type="text" name="remarks" id="remarks" class="form-control" value="<?=$sq_row['remarks']?>">
                      </div>
                    </div>
                </div>
              </div>
                <div class="form-group">
                      <label class="col-md-2 control-label">
                      </label>
                      <div class="col-md-12">
                         <button type="submit" id="submit" class="btn btn-primary btn-block">确认修改</button>
                      </div>
                    </div>

                  </form>
            </div>
          </div>
          <?php }?>
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
<script>
function checkadd(){
    if($("#kuhost").val() == ""){
        alert("授权域名不能为空");
        return false;
    }
    if($("#ku_qq").val() == ""){
        alert("绑定的QQ不能为空");
        return false;
    }
     if($("#dhtime").val() == ""){
        alert("到期时间不能为空");
        return false;
    }
    var host = $("#kuhost").val();
    if(host.indexOf("/") >= 0){
        alert("授权域名不格式错误");
        return false;
    }
     if(host.indexOf(".") == -1){
        alert("授权域名不格式错误");
        return false;
    }
   
}

</script>
</body>

</html>