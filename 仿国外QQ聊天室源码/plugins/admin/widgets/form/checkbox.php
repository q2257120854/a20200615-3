<?php

!defined('IN_ONEZ') && exit('Access Denied');
if($TYPE=='code'){
  if(gettype($arr['options'])=='array'){
    if(!is_array($value)){
      $value=explode("\t",trim($value,"\t ,"));
    }
    $select='';
    $select.='<div class="form-group '.$arr['group'].'">';
      $select.='<label>'.$arr['label'].'</label>';
      $select.='<div class="row">';
      foreach($arr['options'] as $k=>$v){
        $select.='<div class="col-md-'.($arr['col']?$arr['col']:3).'">';
          $s=in_array($k,$value)?' checked':'';
          $select.='<input type="checkbox" id="input-'.$arr['key'].'-'.$k.'" name="'.$arr['key'].'[]" '.$s.' value="'.$k.'" style="position: relative;top: 2px;margin-right:2px">';
          $select.='<label for="input-'.$arr['key'].'-'.$k.'" style="font-weight:normal">'.$v.'</label> &nbsp;';
        $select.='</div>';
      }
      $select.='</div>';
    $select.='</div>';
    $this->html.=$select;
  }else{
    $this->html.='<div class="form-group '.$arr['group'].'">
        <label>
          <input type="checkbox" id="input-'.$arr['key'].'" name="'.$arr['key'].'" '.($value?' checked':'').' value="1">
          '.$arr['label'].'
        </label>
      </div>';
  }
  
}