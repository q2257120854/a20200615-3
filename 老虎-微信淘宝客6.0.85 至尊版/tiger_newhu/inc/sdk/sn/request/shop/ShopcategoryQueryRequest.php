<?php
/**
 * 苏宁开放平台接口 - 店铺分类查询
 *
 * @author suning
 * @date   2014-8-26
 */
class ShopcategoryQueryRequest  extends SelectSuningRequest{
	
	public function getApiMethodName(){
		return 'suning.custom.shopcategory.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "shopCategory";
	}
	
}

?>