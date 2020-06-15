<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-9-28
 */
class CategoryGetRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.govbus.category.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getCategory";
	}
	
}

?>