<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
?>
      <div class="row">
 <div class="col-md-12">
                    <div class="white-box">
                      <h2 class="header-title">添加授权</h2>
                    <form method="post" role="form">
                      <div class="form-group">
                        <label>授权域名:</label>
                       <input type="text" name="kuhost" class="form-control" value="">
                      </div>
                     <div class="form-group">
                        <label>授权QQ:</label>
                      <input type="text" name="ku_qq" class="form-control" value="">
                      </div>
                       <div class="form-group">
                        <label>授权到期时间:</label>
                       <input type="text" name="dhtime" class="form-control" value="<?=date("Y-m-d H:i:s",strtotime("+10years",strtotime($date)));?>">
                      </div>
                       <div class="form-group">
                        <label>备注信息:</label>
                       <input type="text" name="remarks" id="remarks" class="form-control" value="">
                      </div>
                    
                      <button type="button" id="granadd" class="btn btn-primary">确定添加</button>
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
    <script src="./admin/plugins/morris-chart/morris.js"></script>
    <script src="./admin/plugins/morris-chart/raphael-min.js"></script>
    <script src="./admin/plugins/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="/public/layer/layer.js"></script>
 <script>
        $(function () {
            $("#granadd").click(function(){
                var kuhost=$("input[name='kuhost']").val();
                var ku_qq=$("input[name='ku_qq']").val();
                var dhtime=$("input[name='dhtime']").val();
                var remarks=$("input[name='remarks']").val();
                if (kuhost == '' || ku_qq == '' || dhtime == '' || remarks == ''){
                    layer.alert('请确保每项都不为空！',{icon:5,title:'提示信息！'});
                        return false;}
                var load = layer.load(2, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=granadd",
                    data : {kuhost:kuhost,ku_qq:ku_qq,dhtime:dhtime,remarks:remarks},
                    dataType : 'json',
                    success : function(data) {
                        layer.close(load);
                        if(data.code == -1){
                            layer.alert(data.msg,{icon:5,title:'提示信息！'});
                        }else{
                            if (data.code ==1){
                                 layer.alert(data.msg,{icon:6,title:'提示信息！'},function(){
                               window.location.href = "authorize.html";
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