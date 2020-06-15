<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9,chrome=1">
<title>{$G.title}</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
{$G.header}
<style>
.modal-dialog {
  
}
body{
  {if $option['background_type']=='repeat'}
  background-repeat: repeat;
  background-size: inherit;
  {else}
  background-repeat: no-repeat!important;
  background-position: center top!important;
  background-size: cover!important;
  {/if}
}
</style>
</head>
<body>