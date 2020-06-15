<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class ProductlistQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 
	 */
	private $classifyCode;
	
	/**
	 * 
	 */
	private $storeCode;
	
	/**
	 * 
	 */
	private $appStoreCode;
	
	/**
	 * 
	 */
	private $secondClassifyCode;
	
	/**
	 * 
	 */
	private $saleStatus;
	
	/**
	 * 
	 */
	private $productCode;
	
	
	
	public function getClassifyCode() {
		return $this->classifyCode;
	}
	
	public function setClassifyCode($classifyCode) {
		$this->classifyCode = $classifyCode;
		$this->apiParams["classifyCode"] = $classifyCode;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getAppStoreCode() {
		return $this->appStoreCode;
	}
	
	public function setAppStoreCode($appStoreCode) {
		$this->appStoreCode = $appStoreCode;
		$this->apiParams["appStoreCode"] = $appStoreCode;
	}
	
	public function getSecondClassifyCode() {
		return $this->secondClassifyCode;
	}
	
	public function setSecondClassifyCode($secondClassifyCode) {
		$this->secondClassifyCode = $secondClassifyCode;
		$this->apiParams["secondClassifyCode"] = $secondClassifyCode;
	}
	
	public function getSaleStatus() {
		return $this->saleStatus;
	}
	
	public function setSaleStatus($saleStatus) {
		$this->saleStatus = $saleStatus;
		$this->apiParams["saleStatus"] = $saleStatus;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiMethodName(){
		return 'suning.store.productlist.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->classifyCode, 'classifyCode');
		RequestCheckUtil::checkNotNull($this->saleStatus, 'saleStatus');
	}
	
	public function getBizName(){
		return "queryProductlist";
	}
	
}

?>