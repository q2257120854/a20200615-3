<?php


!defined('IN_ONEZ') && exit('Access Denied');
class onezphp_bootstrap_form_kz extends onezphp{
  var $box;
  var $arr=array();
  var $input=false;
  function __construct(){
    
  }
  function init($arr){
    $this->arr=$arr;
    $this->box=onez('html')->create('div')->attr('class','form-group');
    
    $label=onez('html')->create('label')->attr('for','input-'.$arr['key'])->html($arr['label']);
    
    $this->input=onez('html')->create('input')->attr('class','form-control')
                                        ->attr('id','input-'.$arr['key'])
                                        ->attr('name',$arr['key'])
                                        ->attr('placeholder',$arr['hint'])
                                        ->attr('value',$value)
                                      ;
    
    $this->box->add($label);
    return $this;
  }
  function code(){
    $arr=$this->arr;
    if($arr['before'] || $arr['after']){
      $group=onez('html')->create('div')->attr('class','input-group');
      if($arr['before']){
        $span=onez('html')->create('span')->attr('class','input-group-btn')->html($arr['before']);
        $group->add($span);
      }
      $this->input && $group->add($this->input);
      if($arr['after']){
        $span=onez('html')->create('span')->attr('class','input-group-btn')->html($arr['after']);
        $group->add($span);
      }               ;
      $this->box->add($group);
    }else{
      $this->input && $this->box->add($this->input);
    }
    return $this->box->code();
  }
}