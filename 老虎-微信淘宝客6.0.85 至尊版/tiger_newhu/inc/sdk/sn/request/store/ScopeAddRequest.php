<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class ScopeAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appStoreCode;
	
	/**
	 * 
	 */
	private $coverageType;
	
	/**
	 * 
	 */
	private $deleteFlag;
	
	/**
	 * 
	 */
	private $latitudeRectangle;
	
	/**
	 * 
	 */
	private $radius;
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getAppStoreCode() {
		return $this->appStoreCode;
	}
	
	public function setAppStoreCode($appStoreCode) {
		$this->appStoreCode = $appStoreCode;
		$this->apiParams["appStoreCode"] = $appStoreCode;
	}
	
	public function getCoverageType() {
		return $this->coverageType;
	}
	
	public function setCoverageType($coverageType) {
		$this->coverageType = $coverageType;
		$this->apiParams["coverageType"] = $coverageType;
	}
	
	public function getDeleteFlag() {
		return $this->deleteFlag;
	}
	
	public function setDeleteFlag($deleteFlag) {
		$this->deleteFlag = $deleteFlag;
		$this->apiParams["deleteFlag"] = $deleteFlag;
	}
	
	public function getLatitudeRectangle() {
		return $this->latitudeRectangle;
	}
	
	public function setLatitudeRectangle($latitudeRectangle) {
		$this->latitudeRectangle = $latitudeRectangle;
		$this->apiParams["latitudeRectangle"] = $latitudeRectangle;
	}
	
	public function getRadius() {
		return $this->radius;
	}
	
	public function setRadius($radius) {
		$this->radius = $radius;
		$this->apiParams["radius"] = $radius;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.store.scope.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->coverageType, 'coverageType');
	}
	
	public function getBizName(){
		return "addScope";
	}
	
}

?>