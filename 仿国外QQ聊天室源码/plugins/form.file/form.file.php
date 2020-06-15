<?php

!defined('IN_ONEZ') && exit('Access Denied');
class onezphp_form_file extends onezphp{
  function __construct(){
    
  }
  function form_code($arr){
    $html='';
    #只加载一次
    if($this->times(1)){
      $html.=<<<ONEZ
<script type="text/javascript">
function OnezUploadResult(type,result,data){
  if(result=='ok'){
    $('#input-'+type).val(data);
    if(data.indexOf('.jpg')!=-1 || data.indexOf('.png')!=-1 || data.indexOf('.gif')!=-1 || data.indexOf('.jpeg')!=-1){
      $('#preview-'+type).html('<img src="'+data+'" onload="if(this.width>300)this.width=300" />');
    }
  }else{
    alert(data);
  }
}
</script>
ONEZ;
    }
    $filetypes=array();
    $allowed_file_types=$arr['filetypes'];
    if($allowed_file_types){
      foreach($allowed_file_types as $v){
        $filetypes[]='*.'.$v;
      }
    }else{
      $filetypes[]='*.*';
    }
    $input=str_replace('#','',$arr['key']);
    if($arr['local'] && !$arr['filetype']){
      $arr['filetype']='tmp';
    }
    $F=array(
      'serverurl'=>$this->view('savefile&ftype='.$arr['filetype']),
      'type'=>$input,
      'filter_desc'=>'支持的格式('.implode(',',$filetypes).')',
      'filter_exts'=>implode(';',$filetypes),
    );
    $swfurl=$this->url.'/res/upload.swf?t='.filemtime(dirname(__FILE__)."/res/upload.swf");
    $swfurl.='&'.http_build_query($F).'&';
    $html.=<<<ONEZ
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="600" height="20" align="middle">
<param name="allowFullScreen" value="false" />
<param name="allowScriptAccess" value="always" />
<param name="movie" value="$swfurl" />
<param name="quality" value="high" />
<param name="bgcolor" value="#ffffff" />
<param name="wmode" value="transparent">
<embed src="$swfurl" quality="high" bgcolor="#ffffff" width="600" height="20" name="update" align="middle" allowScriptAccess="always" wmode="transparent" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
ONEZ;
    $myhtml='';
    if($value=$arr['value']){
      $o=explode('.', $value);
      $ext=strtolower($o[count($o)-1]);
      if(in_array($ext,array('gif','jpg','bmp','png','jpeg'))){
        $myhtml='<img src="'.$value.'" onload="if(this.width>300)this.width=300" />';
      }
    }
    //$html.='<input type="text" name="'.$arr['name'].'" id="'.$input.'" value="'.$value.'" class="control text">';
    $html.='<div class="preview" id="preview-'.$input.'">'.$myhtml.'</div>';
    
    $formkz=onez('bootstrap_form_kz')->init($arr);
    
    
    $hint='远程图片地址';
    !$arr['filetype'] && $arr['filetype']='image';
    if($arr['filetype']!='image'){
      $hint='远程文件地址';
    }
    
    $formkz->input->attr('id','input-'.$arr['key'])
                                        ->attr('name',$arr['key'])
                                        ->attr('type','text')
                                        ->attr('class','form-control')
                                        ->attr('placeholder',$hint)
                                        ->attr('style','margin-top:5px;')
                                        ->attr('value',$arr['value'])
                                      ;
                                      
    $input_flash=onez('html')->create('div');
    $input_flash->html=$html;
    $formkz->box->add($input_flash);
    
    $html=$formkz->code();
    
    return $html;
  }
  function form_save(&$value,$arr){
    if($arr['local']){
      $value=str_replace(ONEZ_CACHE_URL,ONEZ_CACHE_PATH,$value);
    }
  }
  function toLocal($url){
    $data=onez()->post($url);
    list($filename)=explode('?',$url);
    $o=explode('.',$filename);
    $ext=$o[count($o)-1];
    if(!in_array($ext,array('png','jpg'))){
      $ext='tmp';
    }
    $file='/plugins/form.file/'.date('Y/m/d').'/'.uniqid().'.'.$ext;
    onez()->write(ONEZ_CACHE_PATH.$file,$data);
    return ONEZ_CACHE_URL.$file;
  }
  function savefile($token=''){
    // 指定允许其他域名访问  
    header('Access-Control-Allow-Origin:*');  
    // 响应类型  
    header('Access-Control-Allow-Methods:POST');  
    // 响应头设置  
    header('Access-Control-Allow-Headers:x-requested-with,content-type');
    
    $tmpfile=$_FILES['file']['tmp_name'];
    if(!$tmpfile || !file_exists($tmpfile)){
      onez()->output(array('message'=>'文件无效','code'=>0,'file'=>$_FILES));
    }
    
    
    $type=onez()->gp('ftype');
    !$type && $type='image';
    
    $data=onez()->read($tmpfile);
    
    if($type=='image'){
      $file='/plugins/form.file/'.date('Y/m/d').'/'.uniqid().'.jpg';
      
      onez()->mkdirs(dirname(ONEZ_CACHE_PATH.$file));
      
      $im=imagecreatefromstring($data);
      imagesavealpha($im,true);//
      
      $width=imagesx($im);
      $height=imagesy($im);
      
      $w=$width;
      $h=$height;
      if($w>800){
        $bl=800/$w;
        $w=800;
        $h*=$bl;
      }
      
      $image = imagecreatetruecolor($w, $h);
      $alpha = imagecolorallocatealpha($image, 0, 0, 0, 127);  
      imagefill($image, 0, 0, $alpha);  
      imagecopyresampled($image, $im, 0, 0, 0, 0,$w, $h,$width, $height);
      imagesavealpha($image, true);
      imagepng($image,ONEZ_CACHE_PATH.$file); 
      imagedestroy($im);
      
      
      
      @unlink($temp_file);
    }elseif($type=='mp3'){
      $file='/plugins/form.file/'.date('Y/m/d').'/'.uniqid().'.mp3';
      onez()->mkdirs(dirname(ONEZ_CACHE_PATH.$file));
      @move_uploaded_file($tmpfile,ONEZ_CACHE_PATH.$file);
    }else{
      $file='/plugins/form.file/'.date('Y/m/d').'/'.uniqid().'.tmp';
      onez()->mkdirs(dirname(ONEZ_CACHE_PATH.$file));
      @move_uploaded_file($tmpfile,ONEZ_CACHE_PATH.$file);
    }
    
    $result=array();
    if(file_exists(ONEZ_CACHE_PATH.$file)){
      onez()->output(array(
        'message'=>'ok',
        'url'=>ONEZ_CACHE_URL.$file,
        'code'=>200,
      ));
    }else{
      onez()->output(array('message'=>'文件无效','code'=>0));
    }
  }
}