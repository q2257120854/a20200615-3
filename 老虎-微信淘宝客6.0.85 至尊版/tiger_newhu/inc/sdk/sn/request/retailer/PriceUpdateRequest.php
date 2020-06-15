<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-3
 */
class PriceUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $storeCode;
	
	/**
	 * 
	 */
	private $merchantCustNo;
	
	/**
	 * 
	 */
	private $salesMode;
	
	/**
	 * 
	 */
	private $cmmdtyList;
	
	/**
	 * 
	 */
	private $timestamp;
	
	/**
	 * 
	 */
	private $appId;
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getMerchantCustNo() {
		return $this->merchantCustNo;
	}
	
	public function setMerchantCustNo($merchantCustNo) {
		$this->merchantCustNo = $merchantCustNo;
		$this->apiParams["merchantCustNo"] = $merchantCustNo;
	}
	
	public function getSalesMode() {
		return $this->salesMode;
	}
	
	public function setSalesMode($salesMode) {
		$this->salesMode = $salesMode;
		$this->apiParams["salesMode"] = $salesMode;
	}
	
	public function getCmmdtyList() {
		return $this->cmmdtyList;
	}
	
	public function setCmmdtyList($cmmdtyList) {
		$this->cmmdtyList = $cmmdtyList;
		$arr = array();
		foreach ($cmmdtyList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cmmdtyList"] = $arr;
	}
	
	public function getTimestamp() {
		return $this->timestamp;
	}
	
	public function setTimestamp($timestamp) {
		$this->timestamp = $timestamp;
		$this->apiParams["timestamp"] = $timestamp;
	}
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.price.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
		RequestCheckUtil::checkNotNull($this->merchantCustNo, 'merchantCustNo');
		RequestCheckUtil::checkNotNull($this->timestamp, 'timestamp');
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "updatePrice";
	}
	
}

class CmmdtyList {

	private $apiParams = array();
	
	private $cmmdtyCode;
	
	private $salePrice;
	
	private $guideLimitPrice;
	
	private $shopownerLimitPrice;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getSalePrice() {
		return $this->salePrice;
	}

	public function setSalePrice($salePrice) {
		$this->salePrice = $salePrice;
		$this->apiParams["salePrice"] = $salePrice;
	}
	
	public function getGuideLimitPrice() {
		return $this->guideLimitPrice;
	}

	public function setGuideLimitPrice($guideLimitPrice) {
		$this->guideLimitPrice = $guideLimitPrice;
		$this->apiParams["guideLimitPrice"] = $guideLimitPrice;
	}
	
	public function getShopownerLimitPrice() {
		return $this->shopownerLimitPrice;
	}

	public function setShopownerLimitPrice($shopownerLimitPrice) {
		$this->shopownerLimitPrice = $shopownerLimitPrice;
		$this->apiParams["shopownerLimitPrice"] = $shopownerLimitPrice;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>