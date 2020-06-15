<?php
if(empty($islogin) || $islogin != 1){
  exit("<script language='javascript'>window.location.href='./login.html';</script>");
  exit();
}
?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?=$conf['description']?>">
  <meta name="keywords" content="<?=$conf['keywords']?>">
  <link rel="icon" href="./admin/images/favicon.png" type="image/png">
  <title>后台首页 | <?=$conf['title']?></title>
    <link href="./admin/plugins/morris-chart/morris.css" rel="stylesheet">
    <link href="./admin/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"/>
    <link href="./admin/css/icons.css" rel="stylesheet">
    <link href="./admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="./admin/css/style.css" rel="stylesheet">
    <link href="./admin/css/responsive.css" rel="stylesheet">
   
</head>
<body class="sticky-header">
