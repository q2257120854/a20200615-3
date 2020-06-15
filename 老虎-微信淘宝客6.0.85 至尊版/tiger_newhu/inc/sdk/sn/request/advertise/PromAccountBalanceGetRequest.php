<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-10-19
 */
class PromAccountBalanceGetRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.advertise.promaccountbalance.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getPromAccountBalance";
	}
	
}

?>