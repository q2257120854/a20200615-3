<?php
include 'common.php';
include 'core.php';
include 'qqtz.php';
include 'txprotect.php';

if(strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')!==false){
      session_start();
      $_SESSION['siteurl'] = $t_url;
     include 'wxtzmb.php';
    }else{
     include 'ord.php';
    }


//header("Location: $t_urltz");
?>