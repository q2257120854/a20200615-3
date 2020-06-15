<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class SspriceQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $activityName;
	
	/**
	 * 
	 */
	private $activityStatus;
	
	/**
	 * 
	 */
	private $appStoreCode;
	
	
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getActivityName() {
		return $this->activityName;
	}
	
	public function setActivityName($activityName) {
		$this->activityName = $activityName;
		$this->apiParams["activityName"] = $activityName;
	}
	
	public function getActivityStatus() {
		return $this->activityStatus;
	}
	
	public function setActivityStatus($activityStatus) {
		$this->activityStatus = $activityStatus;
		$this->apiParams["activityStatus"] = $activityStatus;
	}
	
	public function getAppStoreCode() {
		return $this->appStoreCode;
	}
	
	public function setAppStoreCode($appStoreCode) {
		$this->appStoreCode = $appStoreCode;
		$this->apiParams["appStoreCode"] = $appStoreCode;
	}
	
	
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.store.ssprice.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "querySsprice";
	}
	
}

?>