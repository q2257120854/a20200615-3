<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-11-16
 */
class ProductmappingQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $currentPage;
	
	public function getCurrentPage() {
		return $this->currentPage;
	}
	
	public function setCurrentPage($currentPage) {
		$this->currentPage = $currentPage;
		$this->apiParams["currentPage"] = $currentPage;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.productmapping.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->currentPage, 'currentPage');
	}
	
	public function getBizName(){
		return "queryProductmapping";
	}
	
}

?>