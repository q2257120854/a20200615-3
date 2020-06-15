<?php

!defined('IN_ONEZ') && exit('Access Denied');
#名称：后台自定义导航菜单
#标识：admin.menu

class onezphp_admin_menu extends onezphp{
  var $hide_tokens=array();
  var $hide_urls=array();
  function __construct(){
    
  }
  function hide(){
    foreach(func_get_args() as $v){
      $this->hide_tokens[]=$v;
    }
    return $this;
  }
  function hideurl(){
    foreach(func_get_args() as $v){
      $this->hide_urls[]=$v;
    }
    return $this;
  }
  function init($grade,&$Menu){
    global $G;
    if($G['grade']){
      $grade=$G['grade'];
    }
    $hasT=$hasM=$add=$del=array();
    #应用中的菜单
    onez('call')->set('admin_menu',array());
    foreach(onez('call')->plugins(false,'admin_menu') as $p){
      $token=$p->token;
      if(in_array($token,$this->hide_tokens)){
        continue;
      }
      $T=$G['this']->data()->open('addons')->one("index1='1' and token='$token'");
      if($T['is_hidemenu']){
        continue;
      }
      $r=$p->bind_admin_menu($grade);
      if($r){
        $Menu[]=$r;
      }
    }
    $admin_menu=onez('call')->get('admin_menu');
    if($admin_menu){
      $Menu=array_merge($Menu,$admin_menu);
    }
    foreach($Menu as $k=>$v){
      if(in_array($v['href'],$this->hide_urls)){
        unset($Menu[$k]);
      }
    }
    #是否开启设计菜单
    if(!$G['this']->option('dev.menu.design')){
      return;
    }
    $T=$G['this']->data()->open('dev.admin.menu')->record("token='$grade' order by step,id");
    foreach($T as $rs){
      if($rs['index2']){
        continue;
      }
      $hasT[$rs['key1']]=$rs;
    }
    
    foreach($Menu as $k=>$menu){
      $key=md5($menu['name'].$menu['href'].$menu['url']);
      if(empty($hasT[$key])){//新增
        $add[$key]=$menu;
      }
      $hasM[$key]=$menu;
    }
    foreach($hasT as $key=>$menu){
      if(empty($hasM[$key])){//已删除
        $del[$key]=$menu;
      }
    }
    if($add){
      foreach($add as $key=>$menu){
        $G['this']->data()->open('dev.admin.menu')->insert(array(
          'key1'=>$key,
          'key2'=>$menu['name'],
          'name'=>$menu['name'],
          'key3'=>$menu['href'],
          'key4'=>$menu['url'],
          'index1'=>1,
          'index2'=>0,
          'token'=>$grade,
          'step'=>6200103,
        ));
      }
    }
    if($del){
      foreach($del as $rs){
        $G['this']->data()->open('dev.admin.menu')->delete("token='$grade' and id='$rs[id]'");
      }
    }
    if($add || $del){
      $T=$G['this']->data()->open('dev.admin.menu')->record("token='$grade' order by step,id");
    }
    $Menu=array();
    foreach($T as $rs){
      if(!$rs['index1']){
        continue;
      }
      $menu=array(
        'name'=>$rs['name'],
      );
      $rs['key3'] && $menu['href']=$rs['key3'];
      $rs['key4'] && $menu['url']=$rs['key4'];
      $Menu[]=$menu;
    }
    onez('admin')->menu_top_left.='<ul class="nav navbar-nav nav-admin-menu">';
    onez('admin')->menu_top_left.='<li><a href="'.onez('admin.menu')->href('/pages/menu.php?grade='.$grade,0).'" class="onez-miniwin">设计菜单</a></li>';
    onez('admin')->menu_top_left.='</ul>';

  }
}