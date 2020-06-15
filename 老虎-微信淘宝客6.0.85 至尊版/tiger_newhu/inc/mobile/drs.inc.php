<?php
global $_GPC,$_W;
	 $cfg = $this->module['config'];



	if($_GPC['op']==1){
		$url="http://v2.api.haodanku.com/talent_info/apikey/".$cfg['hlAppKey']."/talentcat/".$page;
		$content=$this->curl_request($url);   
		  exit($content);
		$data = @json_decode($content, true);
		echo "<pre>";
		print_r($data);
		exit;
		// exit
	}

		include $this->template ( 'drs/drs' );  
?>