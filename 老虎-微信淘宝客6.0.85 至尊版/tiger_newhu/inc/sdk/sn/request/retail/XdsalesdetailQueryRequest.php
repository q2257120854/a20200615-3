<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-20
 */
class XdsalesdetailQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 
	 */
	private $statisDate;
	
	/**
	 * 
	 */
	private $storeCode;
	
	
	
	public function getStatisDate() {
		return $this->statisDate;
	}
	
	public function setStatisDate($statisDate) {
		$this->statisDate = $statisDate;
		$this->apiParams["statisDate"] = $statisDate;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retail.xdsalesdetail.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->statisDate, 'statisDate');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
	}
	
	public function getBizName(){
		return "queryXdsalesdetail";
	}
	
}

?>