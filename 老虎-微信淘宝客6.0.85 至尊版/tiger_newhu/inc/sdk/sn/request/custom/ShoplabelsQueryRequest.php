<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-9-26
 */
class ShoplabelsQueryRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.custom.shoplabels.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryShoplabels";
	}
	
}

?>