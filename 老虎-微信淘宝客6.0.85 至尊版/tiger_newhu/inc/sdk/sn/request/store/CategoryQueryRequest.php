<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class CategoryQueryRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.store.category.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryCategory";
	}
	
}

?>