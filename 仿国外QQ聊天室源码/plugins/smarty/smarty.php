<?php

!defined('IN_ONEZ') && exit('Access Denied');
#名称：Smarty模板
#标识：smarty
#smarty-3.1.31

class onezphp_smarty extends onezphp{
  var $allow_include=0;
  function __construct(){
    
  }
  function smarty(){
    if(!$this->smarty){
      include_once(dirname(__FILE__).'/libs/Smarty.class.php');
      $this->smarty=new Smarty;
      $this->smarty->debugging = false;
      $this->smarty->caching = false;
      $this->smarty->cache_lifetime = 120;
      $this->smarty->setCacheDir(ONEZ_CACHE_PATH.'/plugins/default/templates/cache/');
      $this->smarty->setCompileDir(ONEZ_CACHE_PATH.'/plugins/default/templates/compile/');
      $this->smarty->setTemplateDir(ONEZ_ROOT.'/templates/');
      $this->smarty->registerPlugin('function','onez',array('onezphp_smarty','onez'));
      $this->smarty->registerPlugin('modifier','onez',array('onezphp_smarty','modifier'));
      $this->smarty->registerPlugin('block','onezblock',array('onezphp_smarty','block'));
      $this->smarty->assign("tplurl", onez()->homepage().'/templates/');
    }
    return $this->smarty;
  }
  function assign($key,$value){
    $this->smarty()->assign($key, $value);
    return $this;
  }
  function clear(){
    $this->smarty()->clearAllCache();
    return $this;
  }
  function show($tpl,$ptoken=false){
    global $G;
    if($ptoken===false){
      $ptoken=$G['template'];
    }
    if($ptoken && onez()->exists($ptoken)){
      $tplpath=onez($ptoken)->path.'/templates/';
      $this->smarty()->setCacheDir(ONEZ_CACHE_PATH.'/plugins/'.$ptoken.'/templates/cache/');
      $this->smarty()->setCompileDir(ONEZ_CACHE_PATH.'/plugins/'.$ptoken.'/templates/compile/');
      $this->smarty()->setTemplateDir($tplpath);
      $this->smarty()->assign("tplurl", onez($ptoken)->url.'/templates/');
    }
    $file=$tplpath.$tpl;
    if(!file_exists($file)){
      if($G['smarty']){
        $file=$G['smarty']->path.'/templates/'.$tpl;
        if(file_exists($file)){
          $this->smarty()->setTemplateDir($G['smarty']->path.'/templates/');
          $this->smarty()->assign("tplurl", $G['smarty']->url.'/templates/');
        }
      }elseif($G['this']){
        $file=$G['this']->path.'/templates/'.$tpl;
        if(file_exists($file)){
          $this->smarty()->setTemplateDir($G['this']->path.'/templates/');
          $this->smarty()->assign("tplurl", $G['this']->url.'/templates/');
        }else{
          $file=ONEZ_ROOT.'/templates/'.$tpl;
          if(file_exists($file)){
            $this->smarty()->setTemplateDir(ONEZ_ROOT.'/templates/');
            $this->smarty()->assign("tplurl", onez()->homepage().'templates/');
          }
        }
      }
    }
    if($G['footer_js']){
      
    }else{
      $G['footer_js']=$G['footer-js'];
      unset($G['footer-js']);
    }
    $this->smarty()->assign("G", $G);
    $this->smarty()->display($tpl);
    return $this;
  }
  static function onez($args,$smarty){
    global $G;
    if($args['type']){
      $args[$args['type']]=$args['args'];
    }
    if($args['include']){
      $args['include']=str_replace('\\','/',$args['include']);
      if(strpos($args['include'],'plugins/')!==false || strpos($args['include'],'/onezblue/source/')!==false){
        include($args['include']);
        return;
      }
    }elseif($args['include_once']){
      $args['include_once']=str_replace('\\','/',$args['include_once']);
      if(strpos($args['include_once'],'plugins/')!==false || strpos($args['include_once'],'/onezblue/source/')!==false){
        include_once($args['include_once']);
        return;
      }
    }
    if($args['ptoken'] && onez()->exists($args['ptoken'])){
      $onez=onez($args['ptoken']);
    }elseif(!$args['ptoken']){
      $onez=onez();
    }
    if($onez && $args['method']){
      $args['args']=explode('|',$args['args']);
      $r=call_user_func_array(array($onez, $args['method']), $args['args']);
      $smarty->assign("G", $G);
      if($args['return']){
        return $r;
      }
    }
  }
  static function modifier($value){
    return $value;
  }
  static function block($params, $content, $smarty, &$repeat){
    if(isset($content)){
      $args=$params;
      $args['args']=$content;
      $args['return']=1;
      return onezphp_smarty::onez($args,$smarty);
    }
  }
}