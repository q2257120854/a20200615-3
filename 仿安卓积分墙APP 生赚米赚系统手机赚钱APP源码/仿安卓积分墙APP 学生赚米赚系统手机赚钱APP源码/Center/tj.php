<?php
include("sjk.php");
$id = $_POST['id'];
$jf = $_POST['jf'];
$sj = $_POST['sj'];
$result = mysql_query("select * from vip  where account='{$id}'");
if($id == "" or $jf == ""){
	echo "账号或积分不能为空！";
	 mysql_close($con);
	return;
	}
else{
	if(mysql_num_rows($result)){
		echo("此账号已被注册！");
 		mysql_close($con);
		return;
 		}
	
		else{
 			$sql = mysql_query("insert into vip (account,jf,sj) values('{$id}','{$jf}','{$sj}')",$con);//添加记录
 				if(mysql_affected_rows() == 1){
				echo "添加成功!账号：".$id . "  初始积分：".$jf . "  登录时间：".$sj;
					}else{
					echo mysql_error();
					}
				}
}
	


?>