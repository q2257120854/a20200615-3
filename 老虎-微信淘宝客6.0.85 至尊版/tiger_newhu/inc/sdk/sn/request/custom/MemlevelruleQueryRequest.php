<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-28
 */
class MemlevelruleQueryRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.custom.memlevelrule.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryMemlevelrule";
	}
	
}

?>