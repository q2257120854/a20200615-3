<?php
/**
 * 苏宁开放平台接口 - 获取店铺评分
 *
 * @author suning
 * @date   2016-5-4
 */
class DsrInfoGetRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.custom.dsrinfo.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getDsrInfo";
	}
	
}

?>