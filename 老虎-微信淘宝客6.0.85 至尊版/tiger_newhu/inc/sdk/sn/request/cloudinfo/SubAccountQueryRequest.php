<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-8-24
 */
class SubAccountQueryRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.cloudinfo.subaccount.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "querySubAccount";
	}
	
}

?>