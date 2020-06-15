<?php
include 'fhincludes/common.php';
include 'fhincludes/core.php';
include 'fhincludes/qqtz.php';
include 'fhincludes/txprotect.php';

if(strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')!==false){
      session_start();
      $_SESSION['siteurl'] = $t_url;
     include 'fhincludes/wxtzmb.php';
    }else{
     include 'fhincludes/ord.php';
    }


//header("Location: $t_urltz");
?>