<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-17
 */
class CmmdtyhighscreengroupQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $keyword;
	
	/**
	 * 
	 */
	private $purchaseType;
	
	/**
	 * 
	 */
	private $showCategoryCode;
	
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
	
	public function getKeyword() {
		return $this->keyword;
	}
	
	public function setKeyword($keyword) {
		$this->keyword = $keyword;
		$this->apiParams["keyword"] = $keyword;
	}
	
	public function getPurchaseType() {
		return $this->purchaseType;
	}
	
	public function setPurchaseType($purchaseType) {
		$this->purchaseType = $purchaseType;
		$this->apiParams["purchaseType"] = $purchaseType;
	}
	
	public function getShowCategoryCode() {
		return $this->showCategoryCode;
	}
	
	public function setShowCategoryCode($showCategoryCode) {
		$this->showCategoryCode = $showCategoryCode;
		$this->apiParams["showCategoryCode"] = $showCategoryCode;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.cmmdtyhighscreengroup.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->purchaseType, 'purchaseType');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
	}
	
	public function getBizName(){
		return "queryCmmdtyhighscreengroup";
	}
	
}

?>