<?php
include 'common.php';
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:GET,POST");
header('Access-Control-Allow-Headers:x-requested-with,content-type');
header("Content-Type: text/html; charset=utf-8");

$value = NULL;
if (isset($_GET['longurl']))     $value = $_GET['longurl'];
if (isset($_POST['longurl']))    $value = $_POST['longurl'];
if(!empty($value)){
  if(strpos($value,'http')===false){
    $longurl = 'http://'.daddslashes($value);
  }else{
    $longurl = daddslashes($value);
  }
}else{
    exit('{"msg":"URL不能为空"}');
}
$url_arr = parse_url($longurl);
$domain = $url_arr['host'];

$urls=$DB->count("SELECT count(*) FROM quan_host WHERE 1"); //获取域名数量
$logs=$DB->count("SELECT count(*) from quan_report WHERE 1"); //获取生成数量
$pvs=$DB->count("SELECT count(*)  from quan_log WHERE domain='$domain'"); //获取PV数量
$uvs=$DB->count("SELECT count( DISTINCT user_agent,ip_address)  from quan_log WHERE domain='$domain'"); //获取UV数量
$ips=$DB->count("SELECT count( DISTINCT ip_address)  from quan_log WHERE domain='$domain'"); //获取IP数量
?>
<!DOCTYPE html>
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-control" content="no-cache" />
<meta name='viewport' content='width=device-width,user-scalable=no'>
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">-->
<title>访问统计</title>

<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.jqplot.min.js"></script>
<script src="../assets/js/plugins/jqplot.pieRenderer.min.js"></script>
<script src="../assets/js/plugins/jqplot.donutRenderer.min.js"></script>


<link href="../assets/css/jquery.jqplot.min.css" rel="stylesheet" />
<style>
  *{ font-size:12px; margin:0; padding:0; font-family:, "黑体"; color:#6d6d6d; list-style:none; font-style:normal;}
  body{ text-align:center;}
  h1{ font-size:18px; color:#666; margin:20px;}
  strong{ font-size:18px; font-weight:normal;}
  .Box{ max-width:640px; margin:auto; text-align:left;}
  .Border{border:1px solid #dadada;border-top-right-radius:10px;-webkit-border-top-right-radius:10px;border-bottom-left-radius:10px;-webkit-border-bottom-left-radius:10px; margin-bottom:20px;}

  #Header{height: 50px;width: 149px;  }
  #Log{}
  #Log .LogList{ padding:20px;}
  #Log .LogList p{ margin-bottom:20px; color:#6d6d6d}
  #Antecedents .List{ padding:0px 20px;}
  #Antecedents .List table tr td{ height:32px; line-height:32px; border-top:1px dotted #dadada}
  #Antecedents .List table tr td{ text-align:center;}
  #Overview{ height:100px;}
  #Overview span{ float:left;}
  #Overview span i{ margin-left:20px;}
  #Overview ul{ float:right; padding-top:22px;}
  #Overview ul li{ width:60px; height:60px;border-radius:60px;-webkit-border-radius:60px; float:right; text-align:center;; margin-right:20px; font-family:Arial, Helvetica, sans-serif;}
  #Overview ul .ip{ background:#a3d315}
  #Overview ul .pv{ background:#15d38a}
  #Overview ul .uv{ background:#1584d3}
  #Overview ul .vip{ background:#FF9800}
  #Overview ul li i{ height:20px; line-height:30px; display:block;color:#fff}
  #Overview ul li em{height:40px; font-size:14px; display:block;color:#fff}
</style>
</head>

<body>
<div class="Box">
    <div style="cursor:pointer" id="Header" onclick='javascript:location.href="/"'><h1><?php echo $conf['sitename']; ?></h1></div>
    <!--span style="float: right; margin-top:5px">(普通用户仅支持30天内秒级实时统计)　</span-->
   <div id="Overview" class="Border">
     <span>
        <h1>实时概览</h1>
        <i> 统计页面：<a href="http://<?= $domain?>" target="_blank"><?= $domain?></a></i>
      </span>

        <ul>
         <!--li class="vip"><i>vip</i><em>No</em></li-->
         <li class="pv"><i>PV</i><em><?= $pvs?></em></li>
         <li class="uv"><i>UV</i><em><?= $uvs?></em></li>
         <li class="ip"><i>IP</i><em><?= $ips?></em></li>
        </ul>
   </div>
   <div id="Antecedents" class="Border">
      <h1>客户端</h1>
      <div class="List">
           <div id="chart" style="max-width:600px;height:300px; background:#FFF"></div>

           <script>
           $(function () {
            <?php 
              $pcs=$DB->count("SELECT count(*) from quan_log WHERE domain='$domain' and user_agent like '%Windows%' "); 
              $Iphones=$DB->count("SELECT count(*) from quan_log WHERE domain='$domain' and user_agent like '%iPhone%' "); 
              $Androids=$DB->count("SELECT count(*) from quan_log WHERE domain='$domain' and user_agent like '%Android%' "); 
              $Winphones=$DB->count("SELECT count(*) from quan_log WHERE domain='$domain' and user_agent like '%Winphone%' "); 
              $Pads=$DB->count("SELECT count(*) from quan_log WHERE domain='$domain' and user_agent like '%Pad%' "); 
            ?>
             var data = [
             ['PC', <?= $pcs;?>], ['Iphone', <?= $Iphones;?>], ['Android', <?= $Androids;?>],['Winphone', <?= $Winphones;?>], ['Pad', <?= $Pads;?>]
            ];

            $.jqplot('chart', [data], {
                 seriesDefaults: {
                      renderer:$.jqplot.PieRenderer,
                      rendererOptions: {
                         showDataLabels: true,
                         dataLabels: 'value',
                         seriesColors: ["#4bb2c5", "#c5b47f", "#EAA228", "#579575", "#839557", "#958c12", "#953579", "#4b5de4", "#d8b83f", "#ff5800", "#0085cc"],
                          shadow:false,       //为饼的每个部分的边框设置阴影，以突出其立体效果 //默认显示的分类颜色，如果分类的数量超过这里的颜色数量，则从该队列中第一个位置开始重新取值赋给相应的分类
                          sliceMargin: 9

                      }
                 },
                 legend: {
                     show: true,
                     location: "nw"
                 }
             });
         });

           </script>

      </div>
    </div>

    <div id="Antecedents" class="Border">
      <h1>每日数据</h1>
      <div class="List">
          <table width="100%" border="0" cellspacing="0">
              <tr>
                <td>&nbsp;</td>
                <td>IP</td>
                <td>UV</td>
                <td>PV</td>
              </tr>

                <?php  
$row = $DB->query("select DISTINCT click_time from `quan_log` where domain='$domain' order by click_time desc");
foreach($row as $key => $value){
  $date = $value['click_time'];
  $dpvs=$DB->count("SELECT count(*) from quan_log WHERE domain='$domain' and click_time='$date'"); 
  $duvs=$DB->count("SELECT count( DISTINCT user_agent,ip_address)  from quan_log WHERE domain='$domain' and click_time='$date'"); 
  $dips=$DB->count("SELECT count( DISTINCT ip_address)  from quan_log WHERE domain='$domain' and click_time='$date'"); 
  echo "<tr><td>".$date."</td><td>".$dips."</td><td>".$duvs."</td><td>".$dpvs."</td></tr>";
}
                ?>
          
          </table>

      </div>
    </div>

    <div id="Log" class="Border">
      <h1>User-Agent</h1>
      <div class="LogList">
        <?php  
$row = $DB->query("select * from `quan_log` where domain='$domain'");
foreach($row as $key => $value){
  $ua = $value['user_agent'];
  echo "<p>$ua</p>";
}
                ?>
        
      </div>
    </div>
</div>
</body>
</html>
