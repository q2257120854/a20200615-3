<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
?>
  <div class="alert alert-info fade in">
                      <i class="icon-remove close" data-dismiss="alert">
                      </i>
                     关于卡密生成：单次卡密生成数量不可超过<?=$conf['kalman_limit']?>张，生成次数无限次，生成好的卡密请直接下载TXT文本。
                    </div> 
<div class="row">
            <div class="col-md-12">
              <div class="white-box">
                <div class="widget-header">
                <h4 class="page-title">卡密生成</h4>
                </div>
                <div class="widget-content">
                  <form class="form-horizontal" method="post">
                    <div class="form-group">
                      <label class="col-md-2 control-label">
                        卡密生成数:
                      </label>
                      <div class="col-md-10">
                        <input type="text" name="quantity" class="form-control" value="" oninput ="value=value.replace(/[^\d]/g,'')" required>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-2 control-label">
                        授权到期时间:
                      </label>
                      <div class="col-md-10">
                      <input class="form-control" name="endtime" type="text" placeholder="请选择授权日期" value="<?=date("Y-m-d H:i:s",strtotime("+10years",strtotime($date)));?>">
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-2 control-label">
                      </label>
                      <div class="col-md-12">
                         <button  type="button" id="kamisheng" class="btn btn-primary btn-block">确认生成</button>
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
  $("#kamisheng").click(function(){
            var quantity=$(":input[name='quantity']").val();
            var endtime=$(":input[name='endtime']").val();
             if (quantity == ''){
                    layer.alert('生成数量不能为空！',{icon:5,title:'提示信息！'});
                        return false;}
             if (quantity <= 0){
                    layer.alert('非法数据重新输入！',{icon:5,title:'提示信息！'});
                        return false;}
            var load = layer.load(0, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=kamiadd",
                    data : {quantity:quantity,endtime:endtime},
                    dataType : 'json',
                    success : function(data) {
                        layer.close(load);
                        if(data.code == -1){
                            layer.alert(data.msg,{icon:5,title:'提示信息！'});
                        }else{
                            if (data.code == 1){
                               var lay_alert= layer.alert(data.msg,{icon:6,title:'提示信息！',
                                  'btn':['下载txt','确定'],
                                  'yes':function(){
                                    $('<a></a>').attr('href',data.savesrc).attr('download',data.savename).append('<b></b>').find('b').trigger('click').remove();
                                    layer.close(lay_alert);
                                    
                                  }

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