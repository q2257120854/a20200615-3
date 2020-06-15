<?php
/**
 * 苏宁开放平台接口 - 批量查询库存信息（平行仓）
 *
 * @author suning
 * @date   2016-5-18
 */
class ParallelInvaddressQueryRequest  extends SelectSuningRequest{
	
	
	
	
	
	public function getApiMethodName(){
		return 'suning.custom.parallelinvaddress.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryParallelInvaddress";
	}
	
}

?>