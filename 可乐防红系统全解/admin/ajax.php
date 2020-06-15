<?php
include("../includes/common.php");

$act=isset($_GET['act'])?daddslashes($_GET['act']):null;

@header('Content-Type: application/json; charset=UTF-8');

switch($act){
case 'getcount':
	$thtime=date("Y-m-d").' 00:00:00';
	$count1=$DB->count("SELECT count(*) from shua_orders");
	$count2=$DB->count("SELECT count(*) from shua_orders where status=1");
	$count3=$DB->count("SELECT count(*) from shua_orders where status=0");
	$count4=$DB->count("SELECT count(*) from shua_orders where addtime>='$thtime'");
	$count5=$DB->count("SELECT sum(money) from shua_pay where tid!=-1 and addtime>='$thtime' and status=1");

	$strtotime=strtotime($conf['build']);//获取开始统计的日期的时间戳
	$now=time();//当前的时间戳
	$yxts=ceil(($now-$strtotime)/86400);//取相差值然后除于24小时(86400秒)

	$count6=$DB->count("SELECT count(*) from shua_site");
	$count7=$DB->count("SELECT count(*) from shua_site where addtime>='$thtime'");
	$count8=$DB->count("SELECT sum(point) from shua_points where action='提成' and addtime>='$thtime'");

	$count9=$DB->count("SELECT sum(point) from shua_points where action='提成'");
	$count10=$DB->count("SELECT sum(rmb) from shua_site where status=1");
	$count11=$DB->count("SELECT sum(realmoney) FROM `shua_tixian` WHERE `status` = 0");

	$count12=$DB->count("SELECT sum(money) FROM `shua_pay` WHERE (`type` = 'qqpay' or `type` = 'tenpay') AND `addtime` > '$thtime' AND `status` = 1");
	$count13=$DB->count("SELECT sum(money) FROM `shua_pay` WHERE `type` = 'wxpay' AND `addtime` > '$thtime' AND `status` = 1");
	$count14=$DB->count("SELECT sum(money) FROM `shua_pay` WHERE `type` = 'alipay' AND `addtime` > '$thtime' AND `status` = 1");

	$result=array("code"=>0,"yxts"=>$yxts,"count1"=>$count1,"count2"=>$count2,"count3"=>$count3,"count4"=>$count4,"count5"=>round($count5,2),"count6"=>$count6,"count7"=>$count7,"count8"=>round($count8,2),"count9"=>round($count9,2),"count10"=>round($count10,2),"count11"=>round($count11,2),"count12"=>round($count12,2),"count13"=>round($count13,2),"count14"=>round($count14,2));
	exit(json_encode($result));
break;
case 'tool':
	$tid=intval($_POST['tid']);
	$rows=$DB->get_row("select * from shua_tools where tid='$tid' limit 1");
	if(!$rows)
		exit('{"code":-1,"msg":"商品ID不存在"}');
	exit('{"code":0,"name":"'.$rows['name'].'"}');
break;
case 'order':
	$id=intval($_GET['id']);
	$rows=$DB->get_row("select * from shua_orders where id='$id' limit 1");
	if(!$rows)
		exit('{"code":-1,"msg":"当前订单不存在！"}');
	$tool=$DB->get_row("select * from shua_tools where tid='{$rows['tid']}' limit 1");
	if(strpos($rows['tradeno'],'kid')!==false){
		$kid=explode(':',$rows['tradeno']);
		$kid=$kid[1];
		$trade=$DB->get_row("select * from shua_kms where kid='$kid' limit 1");
		$trade['type']='卡密';
		$addstr='<li class="list-group-item"><b>使用卡密：</b>'.$trade['km'].'</li>';
	}elseif(strpos($rows['tradeno'],'invite')!==false){
		$trade['type']='推广赠送';
	}elseif(!empty($rows['tradeno'])){
		$trade=$DB->get_row("select * from shua_pay where trade_no='{$rows['tradeno']}' limit 1");
		$addstr='<li class="list-group-item"><b>支付订单号：</b>'.$trade['trade_no'].'</li><li class="list-group-item"><b>支付金额：</b>'.$trade['money'].'</li><li class="list-group-item"><b>支付IP：</b><a href="http://m.ip138.com/ip.asp?ip='.$trade['ip'].'" target="_blank">'.$trade['ip'].'</a></li>';
	}else{
		$trade['type']='默认';
	}
	$input=$tool['input']?$tool['input']:'下单QQ';
	$inputs=explode('|',$tool['inputs']);
	$value=$tool['value']>0?$tool['value']:1;
	$data = '<li class="list-group-item"><b>商品名称：</b>'.$tool['name'].'</li><li class="list-group-item"><b>下单数据：</b><br/>'.$input.'：'.$rows['input'].($rows['input2']?'<br/>'.$inputs[0].'：'.$rows['input2']:null).($rows['input3']?'<br/>'.$inputs[1].'：'.$rows['input3']:null).($rows['input4']?'<br/>'.$inputs[2].'：'.$rows['input4']:null).($rows['input5']?'<br/>'.$inputs[3].'：'.$rows['input5']:null).'</li><li class="list-group-item"><b>下单数量：</b>'.($rows['value']*$value).'</li><li class="list-group-item"><b>站点ID：</b>'.$rows['zid'].'</li><li class="list-group-item"><b>下单时间：</b>'.$rows['addtime'].'</li><li class="list-group-item"><b>购买方式：</b>'.$trade['type'].'</li>'.$addstr;
	$result=array("code"=>0,"msg"=>"succ","data"=>$data);
	exit(json_encode($result));
break;
case 'order2':
	$id=intval($_GET['id']);
	$rows=$DB->get_row("select * from shua_orders where id='$id' limit 1");
	if(!$rows)
		exit('{"code":-1,"msg":"当前订单不存在！"}');
	$tool=$DB->get_row("select * from shua_tools where tid='{$rows['tid']}' limit 1");
	$input=$tool['input']?$tool['input']:'下单ＱＱ';
	$inputs=explode('|',$tool['inputs']);
	$data = '<div class="form-group"><div class="input-group"><div class="input-group-addon" id="inputname">'.$input.'</div><input type="text" id="inputvalue" value="'.$rows['input'].'" class="form-control" required/></div></div>';
	if($inputs[0])$data .= '<div class="form-group"><div class="input-group"><div class="input-group-addon" id="inputname2">'.$inputs[0].'</div><input type="text" id="inputvalue2" value="'.$rows['input2'].'" class="form-control" required/></div></div>';
	if($inputs[1])$data .= '<div class="form-group"><div class="input-group"><div class="input-group-addon" id="inputname3">'.$inputs[1].'</div><input type="text" id="inputvalue3" value="'.$rows['input3'].'" class="form-control" required/></div></div>';
	if($inputs[2])$data .= '<div class="form-group"><div class="input-group"><div class="input-group-addon" id="inputname4">'.$inputs[2].'</div><input type="text" id="inputvalue4" value="'.$rows['input4'].'" class="form-control" required/></div></div>';
	if($inputs[3])$data .= '<div class="form-group"><div class="input-group"><div class="input-group-addon" id="inputname5">'.$inputs[3].'</div><input type="text" id="inputvalue5" value="'.$rows['input5'].'" class="form-control" required/></div></div>';
	$data .= '<input type="submit" id="save" onclick="saveOrder('.$id.')" class="btn btn-primary btn-block" value="保存">';
	$result=array("code"=>0,"msg"=>"succ","data"=>$data);
	exit(json_encode($result));
break;
case 'order3':
	$id=intval($_GET['id']);
	$rows=$DB->get_row("select * from shua_orders where id='$id' limit 1");
	if(!$rows)
		exit('{"code":-1,"msg":"当前订单不存在！"}');
	$data = '<div class="form-group"><div class="input-group"><div class="input-group-addon">份数</div><input type="text" id="num" value="'.$rows['value'].'" class="form-control" required/></div></div>';
	$data .= '<input type="submit" id="save" onclick="saveOrderNum('.$id.')" class="btn btn-primary btn-block" value="保存">';
	$result=array("code"=>0,"msg"=>"succ","data"=>$data);
	exit(json_encode($result));
break;
case 'editOrder':
	$id=intval($_POST['id']);
	$inputvalue=trim(daddslashes($_POST['inputvalue']));
	$inputvalue2=trim(daddslashes($_POST['inputvalue2']));
	$inputvalue3=trim(daddslashes($_POST['inputvalue3']));
	$inputvalue4=trim(daddslashes($_POST['inputvalue4']));
	$inputvalue5=trim(daddslashes($_POST['inputvalue5']));
	$sds=$DB->query("update `shua_orders` set `input`='$inputvalue',`input2`='$inputvalue2',`input3`='$inputvalue3',`input4`='$inputvalue4',`input5`='$inputvalue5' where `id`='$id'");
	if($sds)
		exit('{"code":0,"msg":"修改订单成功！"}');
	else
		exit('{"code":-1,"msg":"修改订单失败！'.$DB->error().'"}');
break;
case 'editOrderNum':
	$id=intval($_POST['id']);
	$num=intval($_POST['num']);
	$sds=$DB->query("update `shua_orders` set `value`='$num' where `id`='$id'");
	if($sds)
		exit('{"code":0,"msg":"修改订单成功！"}');
	else
		exit('{"code":-1,"msg":"修改订单失败！'.$DB->error().'"}');
break;
case 'result':
	$id=intval($_POST['id']);
	$rows=$DB->get_row("select * from shua_orders where id='$id' limit 1");
	if(!$rows)
		exit('{"code":-1,"msg":"当前订单不存在！"}');
	exit('{"code":0,"result":"'.$rows['result'].'"}');
break;
case 'setresult':
	$id=intval($_POST['id']);
	$rows=$DB->get_row("select * from shua_orders where id='$id' limit 1");
	if(!$rows)
		exit('{"code":-1,"msg":"当前订单不存在！"}');
	$result=$_POST['result'];
	if($DB->query("update shua_orders set result='$result' where id='{$id}'"))
		exit('{"code":0,"msg":"修改订单成功！"}');
	else
		exit('{"code":-1,"msg":"修改订单失败！'.$DB->error().'"}');
break;
case 'checkshequ':
	$url = $_POST['url'];
	if(gethostbyname($url)=='127.0.0.1'){
		exit('{"code":0}');
	}else{
		exit('{"code":1}');
	}
break;
case 'checkclone':
	$url = $_POST['url'];
	$url_arr = parse_url($url);
	if($url_arr['host']==$_SERVER['HTTP_HOST'])exit('{"code":2}');
	$data = get_curl($url.'api.php?act=clone');
	$arr = json_decode($data,true);
	if(array_key_exists('code',$arr) && array_key_exists('msg',$arr)){
		exit('{"code":1}');
	}elseif(substr(bin2hex($data),0,6)=='efbbbf'){
		exit('{"code":3}');
	}else{
		exit('{"code":0}');
	}
break;
case 'checkdwz':
	$url = $_POST['url'];
	$data = get_curl($url);
	if(json_decode($data,true)){
		exit('{"code":1}');
	}elseif($data){
		exit('{"code":2}');
	}else{
		exit('{"code":0}');
	}
break;
case 'tixian': //查看提现信息
	$id=intval($_GET['id']);
	$rows=$DB->get_row("select * from shua_tixian where id='$id' limit 1");
	if(!$rows)
		exit('{"code":-1,"msg":"当前提现记录不存在！"}');
	$data = '<div class="form-group"><div class="input-group"><div class="input-group-addon">提现方式</div><select class="form-control" id="pay_type" default="'.$userrow['pay_type'].'"><option value="0">支付宝</option><option value="1">微信</option><option value="2">QQ钱包</option></select></div></div>';
	$data .= '<div class="form-group"><div class="input-group"><div class="input-group-addon">提现账号</div><input type="text" id="pay_account" value="'.$rows['pay_account'].'" class="form-control" required/></div></div>';
	$data .= '<div class="form-group"><div class="input-group"><div class="input-group-addon">提现姓名</div><input type="text" id="pay_name" value="'.$rows['pay_name'].'" class="form-control" required/></div></div>';
	$data .= '<input type="submit" id="save" onclick="saveInfo('.$id.')" class="btn btn-primary btn-block" value="保存">';
	$result=array("code"=>0,"msg"=>"succ","data"=>$data);
	exit(json_encode($result));
break;
case 'editTixian': //修改提现信息
	$id=intval($_POST['id']);
	$pay_type=trim(daddslashes($_POST['pay_type']));
	$pay_account=trim(daddslashes($_POST['pay_account']));
	$pay_name=trim(daddslashes($_POST['pay_name']));
	$sds=$DB->query("update `shua_tixian` set `pay_type`='$pay_type',`pay_account`='$pay_account',`pay_name`='$pay_name' where `id`='$id'");
	if($sds)
		exit('{"code":0,"msg":"修改记录成功！"}');
	else
		exit('{"code":-1,"msg":"修改记录失败！'.$DB->error().'"}');
break;
case 'getmoney': //退款查询
	$id=intval($_POST['id']);
	$row=$DB->get_row("select * from shua_orders where id='$id' limit 1");
	if(!$row)
		exit('{"code":-1,"msg":"当前订单不存在！"}');
	if($row['zid']<1)exit('{"code":-1,"msg":"退款失败，该订单属于主站"}');
	if($row['status']==4)exit('{"code":-1,"msg":"该订单已退款请勿重复提交"}');
	if($row['status']!=0&&$row['status']!=3)exit('{"code":-1,"msg":"只有未处理和异常的订单才支持退款"}');
	if($row['money']==0){
		$tool=$DB->get_row("select * from shua_tools where tid='{$row['tid']}' limit 1");
		$money=$tool['cost']>0?$tool['cost']:$tool['price'];
		$money=$row['value']*$money;
	}else{
		$money=$row['money'];
	}
	$tc_point=$DB->get_column("select point from shua_points where zid='{$row['zid']}' and action='提成' and orderid='$id' limit 1");
	if($tc_point>0)$money-=$tc_point;
	if($money==0)exit('{"code":-1,"msg":"该订单为0元"}');
	exit('{"code":0,"money":"'.$money.'"}');
break;
case 'refund': //退款操作
	$id=intval($_POST['id']);
	$money=trim(daddslashes($_POST['money']));
	$row=$DB->get_row("select * from shua_orders where id='$id' limit 1");
	if(!$row)
		exit('{"code":-1,"msg":"当前订单不存在！"}');
	if($row['zid']<1)exit('{"code":-1,"msg":"退款失败，该订单属于主站"}');
	if($row['status']==4)exit('{"code":-1,"msg":"该订单已退款请勿重复提交"}');
	if($row['status']!=0&&$row['status']!=3)exit('{"code":-1,"msg":"只有未处理和异常的订单才支持退款"}');
	if($money<=0)$money=$row['money'];
	$DB->query("update `shua_site` set `rmb`=`rmb`+{$money} where `zid`='{$row['zid']}'");
	addPointRecord($row['zid'], $money, '退款', '订单(ID'.$id.')已退款到分站余额');
	rollbackPoint($id);
	$DB->query("update shua_orders set status='4',result=NULL where id='{$id}'");
	exit('{"code":0,"msg":"该订单已成功退款给分站ID'.$row['zid'].'"}');
break;
case 'djOrder': //重新下单
	$id=intval($_GET['id']);
	$result = do_goods($id);
	if(strpos($result,'成功')!==false){
		exit('{"code":0,"msg":"下单成功！"}');
	}else{
		exit('{"code":-1,"msg":"'.$result.'"}');
	}
break;
case 'showStatus': //订单进度查询
	$id=intval($_GET['id']);
	$row=$DB->get_row("select * from shua_orders where id='$id' limit 1");
	if(!$row)
		exit('{"code":-1,"msg":"当前订单不存在！"}');
	$tool=$DB->get_row("select * from shua_tools where tid='{$row['tid']}' limit 1");
	$shequ=$DB->get_row("select * from shua_shequ where id='{$tool['shequ']}' limit 1");
	if($shequ['type']==1){
		$list = yile_chadan($shequ['url'], $tool['goods_id'], $row['input'], $row['djorder']);
	}elseif($shequ['type']==0 || $shequ['type']==2){
		$list = jiuwu_chadan($shequ['url'], $tool['goods_id'], $row['input'], $row['djorder']);
	}elseif($shequ['type']==3 || $shequ['type']==5){
		$list = xmsq_chadan($shequ['url'], $tool['goods_id'], $row['input'], $row['djorder']);
	}elseif($shequ['type']==10){
		$list = qqbug_chadan($shequ['password'], $row['djorder']);
		$shequ['url']='QQbug社区';
	}else{
		exit('{"code":-1,"msg":"该对接类型暂不支持查询订单进度"}');
	}
	if(is_array($list)){
		$result=array('code'=>0,'msg'=>'succ','domain'=>$shequ['url'],'data'=>$list);
	}else{
		$result=array('code'=>-1,'msg'=>'获取数据失败');
	}
	exit(json_encode($result));
break;
case 'setTools': //商品上下架
	$tid=intval($_GET['tid']);
	$active=intval($_GET['active']);
	$DB->query("update shua_tools set active='$active' where tid='{$tid}'");
	exit('{"code":0,"msg":"succ"}');
break;
case 'setClass': //分类上下架
	$cid=intval($_GET['cid']);
	$active=intval($_GET['active']);
	$DB->query("update shua_class set active='$active' where cid='{$cid}'");
	exit('{"code":0,"msg":"succ"}');
break;
case 'setToolSort': //排序操作
	$cid=intval($_GET['cid']);
	$tid=intval($_GET['tid']);
	$sort=intval($_GET['sort']);
	if(setToolSort($cid,$tid,$sort)){
		exit('{"code":0,"msg":"succ"}');
	}else{
		exit('{"code":-1,"msg":"失败"}');
	}
break;
case 'setClassSort': //排序操作
	$cid=intval($_GET['cid']);
	$sort=intval($_GET['sort']);
	if(setClassSort($cid,$sort)){
		exit('{"code":0,"msg":"succ"}');
	}else{
		exit('{"code":-1,"msg":"失败"}');
	}
break;
case 'getGoodsList': //获取对接商品列表
	$shequ=intval($_POST['shequ']);
	$row=$DB->get_row("select * from shua_shequ where id='$shequ' limit 1");
	if($row['type']==1){
		$type = 'yile';
		$list = yile_goodslist($row['url']);
	}elseif($row['type']==0 || $row['type']==2){
		$type = 'jiuwu';
		$list = jiuwu_goodslist($row['url'],$row['username'],$row['password']);
	}elseif($row['type']==3 || $row['type']==5){
		$type = 'xingmo';
		$list = xmsq_goodslist($row['url']);
	}else{
		exit('{"code":-1,"msg":"请直接在参数名处填写下单页面地址"}');
	}
	if(!is_array($list))$result=array('code'=>-1,'msg'=>$list);
	else $result=array('code'=>0,'msg'=>'succ','type'=>$type,'data'=>$list);
	exit(json_encode($result));
break;
case 'getGoodsParam': //获取对接参数名
	$shequ=intval($_POST['shequ']);
	$goodsid=intval($_POST['goodsid']);
	$row=$DB->get_row("select * from shua_shequ where id='$shequ' limit 1");
	$result = jiuwu_goodsparam($row['url'],$goodsid);
	exit(json_encode($result));
break;
case 'getfakatool': //获取发卡商品
	$cid=intval($_GET['cid']);
	$rs=$DB->query("SELECT * FROM shua_tools WHERE cid='$cid' and is_curl=4 and active=1 order by sort asc");
	$data = array();
	while($res = $DB->fetch($rs)){
		$data[]=array('tid'=>$res['tid'],'name'=>$res['name']);
	}
	$result=array("code"=>0,"msg"=>"succ","data"=>$data);
	exit(json_encode($result));
break;
case 'setSite': //开启关闭站点
	$zid=intval($_GET['zid']);
	$active=intval($_GET['active']);
	$DB->query("update shua_site set status='$active' where zid='{$zid}'");
	exit('{"code":0,"msg":"succ"}');
break;
case 'setSuper': //切换站点版本
	$zid=intval($_GET['zid']);
	$row=$DB->get_row("select * from shua_site where zid='$zid' limit 1");
	if($row['power']==1)$power=0;
	else $power=1;
	$DB->query("update shua_site set power='$power' where zid='{$zid}'");
	exit('{"code":0,"msg":"succ"}');
break;
case 'siteRecharge': //分站充值
	$zid=intval($_POST['zid']);
	$do=intval($_POST['actdo']);
	$rmb=floatval($_POST['rmb']);
	$row=$DB->get_row("select * from shua_site where zid='$zid' limit 1");
	if(!$row)
		exit('{"code":-1,"msg":"当前分站不存在！"}');
	if($do==1 && $rmb>$row['rmb'])$rmb=$row['rmb'];
	if($do==0)$DB->query("update shua_site set rmb=rmb+{$rmb} where zid='{$zid}'");
	else $DB->query("update shua_site set rmb=rmb-{$rmb} where zid='{$zid}'");
	exit('{"code":0,"msg":"succ"}');
break;
case 'add_member':
	$name=$_POST['name'];
	$tid=$_POST['tid'];
	$rate=str_replace('%','',$_POST['rate']);
	if(!$name||!$tid||!$rate){
		exit('{"code":-1,"msg":"请输入完整！"}');
	}
	$sql=$DB->query("INSERT INTO `shua_gift`(`name`,`tid`,`rate`,`ok`) VALUES ('{$name}','{$tid}',{$rate},0)");
	if($sql){
		exit('{"code":0,"msg":"添加成功"}');
	}else{
		exit('{"code":1,"msg":"添加失败，'.$DB->error().'"}');
	}
break;
case 'edit_cj':
	$id=$_POST['id'];
	if(!$id){
		exit('{"code":-1,"msg":"请输入完整！"}');
	}
	$sql=$DB->get_row("SELECT * FROM shua_gift where id='{$id}'");
	if($sql){
		$cid = $DB->get_column("select cid from shua_tools where tid='{$sql['tid']}' limit 1");
		exit('{"code":0,"msg":"查询成功","id":"'.$id.'","name":"'.$sql['name'].'","cid":"'.$cid.'","tid":"'.$sql['tid'].'","rate":"'.$sql['rate'].'"}');
	}else{
		exit('{"code":1,"msg":"查询失败，'.$DB->error().'"}');
	}
break;
case 'edit_cj_ok':
	$id=$_POST['id'];
	$name=$_POST['name'];
	$tid=$_POST['tid'];
	$rate=$_POST['rate'];
	if(!$id){
		exit('{"code":-1,"msg":"请输入完整！"}');
	}
	$sql=$DB->query("UPDATE shua_gift set name='{$name}',tid='{$tid}',rate='{$rate}' where id='{$id}'");
	if($sql){
		exit('{"code":0,"msg":"修改成功"}');
	}else{
		exit('{"code":1,"msg":"修改失败，'.$DB->error().'"}');
	}
break;
case 'del_member':
	$id=$_POST['id'];
	if(!$id){
		exit('{"code":-1,"msg":"请输入完整！"}');
	}
	$sql=$DB->query("DELETE FROM shua_gift WHERE id='{$id}'");
	if($sql){
		exit('{"code":0,"msg":"删除成功"}');
	}else{
		exit('{"code":1,"msg":"删除失败，'.$DB->error().'"}');
	}
break;
case 'cishu':
	$cishu=$_GET['cishu'];
	$gift_open=$_GET['gift_open'];
	$cjmsg=$_GET['cjmsg'];
	$cjmoney=$_GET['cjmoney'];
	if($cishu==''||$cishu==0 || $gift_open==''||$cjmsg==''){
		exit('{"code":-1,"msg":"请输入完整！"}');
	}
	if($cjmoney==''){
		$cjmoney=0;
	}
	saveSetting('cjcishu',$cishu);
	saveSetting('gift_open',$gift_open);
	saveSetting('cjmsg',$cjmsg);
	saveSetting('cjmoney',$cjmoney);
	$ad=$CACHE->clear();
	if($ad){
		exit('{"code":0,"msg":"修改成功"}');
	}else{
		exit('{"code":1,"msg":"修改失败，'.$DB->error().'"}');
	}
break;
default:
	exit('{"code":-4,"msg":"No Act"}');
break;
}