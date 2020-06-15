<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-17
 */
class CmmdtysearchbycategoryQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $filters;
	
	/**
	 * 
	 */
	private $pnumber;
	
	/**
	 * 
	 */
	private $psize;
	
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
	
	public function getFilters() {
		return $this->filters;
	}
	
	public function setFilters($filters) {
		$this->filters = $filters;
		$arr = array();
		foreach ($filters as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["filters"] = $arr;
	}
	
	public function getPnumber() {
		return $this->pnumber;
	}
	
	public function setPnumber($pnumber) {
		$this->pnumber = $pnumber;
		$this->apiParams["pnumber"] = $pnumber;
	}
	
	public function getPsize() {
		return $this->psize;
	}
	
	public function setPsize($psize) {
		$this->psize = $psize;
		$this->apiParams["psize"] = $psize;
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
		return 'suning.retailer.cmmdtysearchbycategory.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->pnumber, 'pnumber');
		RequestCheckUtil::checkNotNull($this->psize, 'psize');
		RequestCheckUtil::checkNotNull($this->purchaseType, 'purchaseType');
		RequestCheckUtil::checkNotNull($this->showCategoryCode, 'showCategoryCode');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
	}
	
	public function getBizName(){
		return "queryCmmdtysearchbycategory";
	}
	
}

class Filters {

	private $apiParams = array();
	
	private $highScreenGroupCode;
	
	private $highScreenItems;
	
	public function getHighScreenGroupCode() {
		return $this->highScreenGroupCode;
	}

	public function setHighScreenGroupCode($highScreenGroupCode) {
		$this->highScreenGroupCode = $highScreenGroupCode;
		$this->apiParams["highScreenGroupCode"] = $highScreenGroupCode;
	}
	
	public function getHighScreenItems() {
		return $this->highScreenItems;
	}

	public function setHighScreenItems($highScreenItems) {
		$this->highScreenItems = $highScreenItems;
		$arr = array();
		foreach ($highScreenItems as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["highScreenItems"] = $arr;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class HighScreenItems {

	private $apiParams = array();
	
	private $highScreenCode;
	
	public function getHighScreenCode() {
		return $this->highScreenCode;
	}

	public function setHighScreenCode($highScreenCode) {
		$this->highScreenCode = $highScreenCode;
		$this->apiParams["highScreenCode"] = $highScreenCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>