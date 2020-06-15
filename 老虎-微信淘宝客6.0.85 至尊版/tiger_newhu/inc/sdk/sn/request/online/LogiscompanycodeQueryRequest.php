<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-15
 */
class LogiscompanycodeQueryRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.online.logiscompanycode.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryLogiscompanycode";
	}
	
}

?>