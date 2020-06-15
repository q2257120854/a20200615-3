<?php

!defined('IN_ONEZ') && exit('Access Denied');
if($TYPE=='code'){
  
  $box=onez('html')->create('div')->attr('class','form-group '.$arr['group']);
  
  $label=onez('html')->create('label')->attr('for','input-'.$arr['key'])->html($arr['label']);
  $input=onez('html')->create('div')->attr('class','')
                                    ->attr('id','html-'.$arr['key'])
                                  ;
  $input->html($arr['html'])->is_end=1;
  $box->add($label);
  
  if($arr['before'] || $arr['after']){
    $group=onez('html')->create('div')->attr('class','input-group '.$arr['group']);
    if($arr['before']){
      $span=onez('html')->create('span')->attr('class','input-group-btn')->html($arr['before']);
      $group->add($span);
    }
    $group->add($input);
    if($arr['after']){
      $span=onez('html')->create('span')->attr('class','input-group-btn')->html($arr['after']);
      $group->add($span);
    }               ;
    $box->add($group);
  }else{
    $box->add($input);
  }
  $this->html.=$box->code();
}