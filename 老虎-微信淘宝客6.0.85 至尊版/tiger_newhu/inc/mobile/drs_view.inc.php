<?php
global $_GPC,$_W;
	$cfg = $this->module['config'];
	
	
	$url="http://v2.api.haodanku.com/talent_article/apikey/".$cfg['hlAppKey']."/id/".$_GPC['id'];
	
	$content=$this->curl_request($url);   
	$view = @json_decode($content, true);
	// echo "<pre>";
	// print_r($view);
	// exit;
	$view=$view['data'];
	$view['article']=htmlspecialchars_decode($view['article']);
	$itemlist=json_encode($view['items']);
	
	


		include $this->template ( 'drs/drs_view' );  
?>