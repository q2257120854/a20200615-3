<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-14
 */
class CarbrandQueryRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.custom.carbrand.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryCarbrand";
	}
	
}

?>