<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
?>
 <?php
if($my == "clear"){
    unset($_SESSION['pz']);
}
if(!empty($my) && $my != null && $my == "so"){
  if ($_POST['pz']=='') {
    	@header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('搜索框内容,不能为空！');history.go(-1);</script>");
    }
    $_SESSION['pz'] =$_POST['pz'];

} 
if(!empty($_SESSION['pz']) && $_SESSION['pz'] != ""){
    $pz = $_SESSION['pz'];   
    $numrows=$DB->count("SELECT count(*) from ku_paycarry where out_trade_no  like '%$pz%' or username like '%$pz%' or operation like '%$pz%' ");
}else{

    $numrows=$DB->count("SELECT count(*) from ku_paycarry");
}

$pagesize=20;
$pages=intval($numrows/$pagesize);
if ($numrows%$pagesize)
{
 $pages++;
 }
if (isset($_GET['page'])){
$page=intval($_GET['page']);
}
else{
$page=1;
}
$offset=$pagesize*($page - 1);

if(!empty($_SESSION['pz']) && $_SESSION['pz'] != ""){
    $pz = $_SESSION['pz'];
    $sql = "SELECT * FROM ku_paycarry WHERE  out_trade_no  like '%$pz%' or username like '%$pz%' or operation like '%$pz%'  order by addtime desc limit $offset,$pagesize";  
}else{
    $sql = "SELECT * FROM ku_paycarry  order by addtime desc limit $offset,$pagesize";
   
}
if($my == "detaqc"){
          
                 $sql = "delete from ku_paycarry where state = 1";
                if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('清除已完成！');window.location.href='./payuser_list.html';</script>");
                }else{
                 
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('清除失败！');history.go(-1);</script>");
                }
            }                  
if($my == "deta"){
              $stat=1;
        $filename = '../excel/order-'.date("Y-m-d").'-'.rand(10000,99999).'.xlsx';
        $download = "<a class='btn btn-primary' href='{$filename}'>下载</a>";
        $ex = new PHPExcel();
        $ex->createSheet();
        $ex->setActiveSheetIndex(0);
        $objSheet = $ex->getActiveSheet();
        $objSheet->setTitle('待提现列表');
        $data = $DB->query("SELECT * FROM `ku_paycarry` WHERE `state`='0'");
        $objSheet->setCellValue('A1', "订单号")->setCellValue('B1', "结算昵称")->setCellValue('C1', "结算账户")->setCellValue('D1', "结算金额")->setCellValue('E1', "状态")->setCellValue('F1', '创建时间');
        $l = 2;
        while ($row_us = $DB->fetch($data)) {
            $objSheet->setCellValue('A' . $l, $row_us['out_trade_no'])->setCellValue('B' . $l,$row_us['number_nc'])->setCellValue('C' . $l, $row_us['number_zh'])->setCellValue('D' . $l, $row_us['money'])->setCellValue('E' . $l,'未打款')->setCellValue('F' . $l, $row_us['addtime']);
            $l++;
        } 
        $DB->query("update `ku_paycarry` set `operation` ='{$row['name']}',`eidetime` ='{$date}',`state` ='{$stat}' where `state`='0'");
        $objWriter = PHPExcel_IOFactory::createWriter($ex, 'Excel2007');
        $objWriter->save($filename);
        if (file_exists($filename)) {
            ?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        导出订单
                    </h3>
                </div>
                <div class="panel-body">
                    导出成功！一共导出<?=$l-2?>个订单<hr />
                    <?=$download?> <a class='btn btn-primary' href='./payuser_list.html'>返回</a>
                </div>
            </div>
            <?php
        } else {
            showmsg('导出失败，未知错误');
        }
      }
       if($my == "payadd"){
            $id = $_GET['id'];
            $stat=1;
             $sql="update `ku_paycarry` set `operation` ='{$row['name']}',`eidetime` ='{$date}',`state` ='{$stat}' where `out_trade_no`='{$id}'";
                if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('该笔提现状态修改成功！');history.go(-1);</script>");
                }else{
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('提现状态修改失败！');history.go(-1);</script>");
                }
                }   
if($my == "reject"){
            $id = $_GET['id'];

            $row_bh = $DB->get_row("select * from ku_paycarry where out_trade_no =".$id." limit 1");
            $money_get=$row_bh['money']+$row_bh['fee_money'];
            $money_pe = "UPDATE `ku_user` SET `money` = money+{$money_get} WHERE `username` = '{$row_bh['username']}'";
	        if ($DB->query($money_pe)) {      
            $stat=2;
	           $sql="update `ku_paycarry` set `state` ='{$stat}' where `out_trade_no`='{$id}'";
                if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('该笔提现驳回成功！');history.go(-1);</script>");
                }else{
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('驳回失败！');history.go(-1);</script>");
                }

                 }
                }            
?>
<?php
if ($my == "delesc") {
	$id = $_GET['id'];
                  $rowkb = $DB->get_row("select * from ku_paycarry where out_trade_no =".$id." limit 1");
                  if(!$rowkb){
                      @header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('数据库异常操作！');history.go(-1);</script>");
                  }
                  if ($rowkb['state']==0) {
                  	 @header('Content-Type: text/html; charset=UTF-8');
                      exit("<script language='javascript'>alert('待处理提现无权限删除！');history.go(-1);</script>");
                  }
                  $sql = "delete from ku_paycarry where out_trade_no = ".$id;
                  if($DB->query($sql)){
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除成功！');history.go(-1);</script>");
                }else{
                    @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('删除失败！');history.go(-1);</script>");
                }
}?>
<div class="white-box">
                <div class="row">
                <div class="col-md-4">
                    <form class="form-horizontal" action="?my=so" method="POST">
                         <div class="input-group">
                               <input type="text" class="form-control" name="pz" placeholder="请输入搜索内容！" value="<?=$_POST['pz']?>">
                              <span class="input-group-btn">
                             <button class="btn btn-success" type="submit">
                             搜索
                            </button> 
                             </span>
                         
                        </div>
                    </form>
               </div>
                  <span class="input-group-btn">
                               <?php
     if(!empty($_SESSION['pz'])){
         echo ' <a href="?my=clear"><button class="btn btn-inverse">查看全部记录</button></a>';
     }
     ?> 
        </span>
        </div><br>   
                        <a href="?my=deta" onclick="return confirm('你确定要导出所有待打款订单吗？');">
                    <button class="btn btn-primary">
                    导出待打款订单
                    </button>
                    </a>
                     <a href="?my=detaqc" onclick="return confirm('你确定要删除所有已完成提现吗？');">
                  <button class="btn btn-danger">
                    全部删除已完成提现记录
                    </button>
                    </a>        
    <div class="row">              
            <div class="col-md-12">
                 <div class="white-box">
                      <h2 class="header-title">提现列表</h2>
                         <div class="table-wrap">
                            <table class="table table-bordered">

                    <thead>
                      <tr>
                        <th>
                          提现单号
                        </th>
                        <th data-hide="phone,tablet">
                          收款昵称
                        </th>
                        <th data-hide="phone,tablet">
                          收款账号
                        </th>
                        <th data-hide="phone,tablet">
                          申请时间
                        </th>
                        <th data-hide="phone,tablet">
                         待打款金额
                        </th>
                        <th data-hide="phone,tablet">
                         已扣除费率
                        </th>
                         <th data-hide="phone,tablet">
                         申请账号
                        </th>
                        <th data-hide="phone,tablet">
                         处理时间
                        </th>
                        <th data-hide="phone,tablet">
                          操作人
                        </th>
                        <th data-hide="phone,tablet">
                          状态
                        </th>
                        <th data-hide="phone,tablet">
                          操作
                        </th>
                      </tr>
                    </thead>
                    <tbody>

           <?php
                    $rs=$DB->query($sql);
       while($res = $DB->fetch($rs))
        
            {
                 ?>
                      <tr>
                         <td>
                         <?=$res['out_trade_no']?>
                        </td>
                        <td>
                          <?=$res['number_nc']?>
                        </td>
                        <td>
                          <?=$res['number_zh']?>
                        </td>
                        <td>
                          <?=$res['addtime']?>
                        </td>
                        <td>
                        <?=$res['money']?>元 </a>
                        </td>
                        <td>
                          <?=$res['fee_money']?>元
                        </td>
                          <td>
                           <?=$res['username']?>
                          
                        </td>
                           <td>
                           <?=$res['eidetime']?>
                          
                        </td>
                           <td>
                           <?=$res['operation']?>
                          
                        </td>
                           <td>
                           <?=pay_lv($res['state'])?>
                        </td>
                        <td>
                          
                           
                              <?php if ($res['state']!=2 && $res['state']==0) {?>
                                <a href="?my=payadd&id=<?=$res['out_trade_no']?>"  onclick="return confirm('你确定对该笔提现订单打款吗？');"><span class="badge badge-pill badge-danger m-1" title="驳回">打款</a>
                                <a href="?my=reject&id=<?=$res['out_trade_no']?>"  onclick="return confirm('你确定要驳回该笔提现？');" class="badge badge-pill badge-primary m-1" title="驳回">
                                驳回
                              </a>

                            <?php  } ?>
                            
                              <a href="?my=delesc&id=<?=$res['out_trade_no']?>" class=" badge badge-pill badge-success m-1" title="删除">
                                删除
                              </a>
                        </td>    
                      </tr>
                      <?php

                       }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
<div class="dataTables_footer clearfix">
<div class="col-md-12">
<div class="dataTables_paginate paging_bootstrap">
              <?php
echo'<ul class="pagination">';
$first=1;
$prev=$page-1;
$next=$page+1;
$last=$pages;
if ($page>1)
{
echo '<li class="prev disabled"><a href="?page='.$first.$link.'">首页</a></li>';
echo '<li><a href="?page='.$prev.$link.'">&laquo;</a></li>';
} else {
echo '<li><a>首页</a></li>';
echo '<li ><a>&laquo;</a></li>';
}
for ($i=1;$i<$page;$i++)
echo '<li><a href="?page='.$i.$link.'">'.$i .'</a></li>';
echo '<li ><a>'.$page.'</a></li>';
for ($i=$page+1;$i<=$pages;$i++)
echo '<li><a href="?page='.$i.$link.'">'.$i .'</a></li>';
echo '';
if ($page<$pages)
{
echo '<li><a href="?page='.$next.$link.'">&raquo;</a></li>';
echo '<li><a href="?page='.$last.$link.'">尾页</a></li>';
} else {
echo '<li ><a>&raquo;</a></li>';
echo '<li ><a>尾页</a></li>';
}
echo'</ul>';
#分页
           
?>
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
    <script src="./admin/plugins/morris-chart/morris.js"></script>
    <script src="./admin/plugins/morris-chart/raphael-min.js"></script>
    <script src="./admin/plugins/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script type="text/javascript" src="/public/layer/layer.js"></script>
</body>

</html>