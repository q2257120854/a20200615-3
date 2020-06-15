<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
if ($my == "dit") {
 $id = $_GET['id'];
 $rowkr = $DB->get_row("select * from ku_complain where id =".$id." limit 1");
}
?>
<div class="row">
            <div class="col-md-12">
              <div class="white-box">
                 <h2 class="header-title">回复工单</h2>
                <div class="widget-content">
                  <form method="post" role="form">
                  <input type="hidden" name="id" class="form-control" value="<?=$id?>">
                    <div class="form-group">
                      <label class="col-md-2 control-label">
                        产品类型:
                      </label>
                      <div class="col-md-2">
                        <input type="text" class="form-control" value="<?=$rowkr['title'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">
                        投诉内容:
                      </label>
                      <div class="col-md-4">
                        <textarea rows="5" cols="5" class="form-control" disabled><?=$rowkr['content']?></textarea>
                      </div>
                    </div>
                      <div class="form-group">
                      <label class="col-md-2 control-label">
                        发件账号:
                      </label>
                      <div class="col-md-2">
                        <input type="text" class="form-control" value="<?=$rowkr['username'];?>" disabled>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-2 control-label">
                        投诉类型:
                      </label>
                      <div class="col-md-4">
                        <div class="row">
                          <div class="col-md-4">
                            <select class="form-control" name="typepe">
                              <option value="0"<?=$rowkr['type']==0?"selected":""?>> 
                                bug反馈
                              </option>
                              <option value="1"<?=$rowkr['type']==1?"selected":""?>>
                               账号问题
                              </option>
                               <option value="2"<?=$rowkr['type']==2?"selected":""?>>
                               代理问题
                              </option>
                               <option value="3"<?=$rowkr['type']==3?"selected":""?>>
                               订单问题
                              </option>
                               <option value="4"<?=$rowkr['type']==4?"selected":""?>>
                               授权问题
                              </option>
                               <option value="5"<?=$rowkr['type']==5?"selected":""?>>
                               其他建议
                              </option>
                           </select>
                          </div>
                        </div>
                       </div>
                       </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">
                        回复内容:
                      </label>
                      <div class="col-md-4">
                        <textarea rows="5" cols="5" name="hfconte" class="form-control" required=""></textarea>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-2 control-label">
                      </label>
                      <div class="col-md-12">
                         <button type="button" id="comedit" class="btn btn-primary btn-block">确定回复</button>
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
    <script src="/public/layer/layer.js"></script>
    <script>
        $(function () {
            $("#comedit").click(function(){
                var id=$("input[name='id']").val();
                var typepe=$("select[name='typepe']").val();
                var hfconte=$("textarea[name='hfconte']").val();
                if (typepe == '' || hfconte == ''){
                    layer.alert('请确保每项都不为空！',{icon:5,title:'提示信息！'});
                        return false;}
              if (id == ''){
                    layer.alert('缺少参数，错误！',{icon:5,title:'提示信息！'});
                        return false;}
                var load = layer.load(2, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=comedit",
                    data : {id:id,typepe:typepe,hfconte:hfconte},
                    dataType : 'json',
                    success : function(data) {
                        layer.close(load);
                        if(data.code == -1){
                            layer.alert(data.msg,{icon:5,title:'提示信息！'});
                        }else{
                            if (data.code ==1){
                                 layer.alert(data.msg,{icon:6,title:'提示信息！'},function(){
                               window.location.href = "complain.html";
                               });
                            }else{
                               layer.alert(data.msg,{icon:5,title:'提示信息！'});
                            }
                        }
                    }
                });
            });
          });
    </script>
</body>
</html>