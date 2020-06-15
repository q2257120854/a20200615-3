<?php
include 'fhincludes/common.php';
include 'fhincludes/core.php';
include 'fhincludes/qqzl.php';
include 'fhincludes/txprotect.php';

if(strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')!==false){
      session_start();
      $_SESSION['siteurl'] = $t_url;
     include 'fhincludes/wxzlmb.php';
    }else{
     include 'fhincludes/ord.php';
    }


//header("Location: $t_urltz");
?>