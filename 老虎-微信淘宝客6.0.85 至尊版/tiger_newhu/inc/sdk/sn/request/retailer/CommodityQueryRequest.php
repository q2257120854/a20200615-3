<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-4-28
 */
class CommodityQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $cmmdtyCode;
	
	/**
	 * 
	 */
	private $distributorCode;
	
	/**
	 * 
	 */
	private $merchantCustNo;
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}
	
	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getDistributorCode() {
		return $this->distributorCode;
	}
	
	public function setDistributorCode($distributorCode) {
		$this->distributorCode = $distributorCode;
		$this->apiParams["distributorCode"] = $distributorCode;
	}
	
	public function getMerchantCustNo() {
		return $this->merchantCustNo;
	}
	
	public function setMerchantCustNo($merchantCustNo) {
		$this->merchantCustNo = $merchantCustNo;
		$this->apiParams["merchantCustNo"] = $merchantCustNo;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.commodity.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->cmmdtyCode, 'cmmdtyCode');
		RequestCheckUtil::checkNotNull($this->distributorCode, 'distributorCode');
		RequestCheckUtil::checkNotNull($this->merchantCustNo, 'merchantCustNo');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
	}
	
	public function getBizName(){
		return "queryCommodity";
	}
	
}

?>