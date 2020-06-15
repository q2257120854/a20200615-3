<?php
include 'common.php';
include 'core.php';
include 'qqzl.php';
include 'txprotect.php';

if(strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')!==false){
      session_start();
      $_SESSION['siteurl'] = $t_url;
     include 'wxzlmb.php';
    }else{
     include 'ord.php';
    }


//header("Location: $t_urltz");
?>