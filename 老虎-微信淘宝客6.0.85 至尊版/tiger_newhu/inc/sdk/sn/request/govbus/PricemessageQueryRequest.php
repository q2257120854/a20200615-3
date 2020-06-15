<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-11-29
 */
class PricemessageQueryRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.govbus.pricemessage.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryPricemessage";
	}
	
}

?>