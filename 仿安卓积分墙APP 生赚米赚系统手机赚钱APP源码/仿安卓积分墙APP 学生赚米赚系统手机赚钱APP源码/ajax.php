<?php
//更多资源请关注：三岁半资源网:sansuib.com
	include 'conf/config.php';

	$username=$_POST['username'];
	$password=$_POST['password'];
	$rpassword=$_POST['rpassword'];
	$email=$_POST['email'];

	if(isset($username)){
		if(empty($username)){
			echo "null";die;
		}
		$sql="select * from user where username='$username'";
		$result=mysql_query($sql);
		if($result&&mysql_num_rows($result)){
			echo "no";die;
		}else{
			echo "ok";die;
		}
	}

	if(isset($email)){
		if(empty($email)){
			echo "null";die;
		}
		$pattern = "/[a-zA-Z0-9]+@[0-9a-zA-Z-]+\.\w+(\.\w+)?/";
		if(preg_match($pattern,$email,$match)){
			if($email=$_POST['email']);
			$sql="select * from user where email='$email'";
			$result=mysql_query($sql);
			if($result&&mysql_num_rows($result)){
				echo "no";die;
			}else{
				echo "ok";die;
			}
		}else{
			echo "null";die;
		}
	}

	if(isset($password)&&!isset($rpassword)){
		if(empty($password)){
			echo "null";die;
		}
		$pattern = "/^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,22}$/";
		if(preg_match($pattern,$password)){
			echo "ok";die;
		}else{
			echo "no";die;
		}
	}

	if(isset($password)&&isset($rpassword)){
		if(empty($rpassword)){
			echo "null";die;
		}
		if($password!=$rpassword){
			echo "no";die;
		}else{
			echo "ok";die;
		}
	}
?>