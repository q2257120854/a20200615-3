<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-22
 */
class StoregrouplistQueryRequest  extends SelectSuningRequest{
	
	
	
	
	
	public function getApiMethodName(){
		return 'suning.custom.storegrouplist.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
	}
	
	public function getBizName(){
		return "queryStoregrouplist";
	}
	
}

?>