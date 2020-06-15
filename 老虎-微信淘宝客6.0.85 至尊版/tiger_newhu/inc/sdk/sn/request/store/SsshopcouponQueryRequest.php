<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class SsshopcouponQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $activityName;
	
	/**
	 * 
	 */
	private $activityShowStatus;
	
	/**
	 * 
	 */
	private $appStoreCode;
	
	
	
	/**
	 * 
	 */
	private $shopCode;
	
	public function getActivityName() {
		return $this->activityName;
	}
	
	public function setActivityName($activityName) {
		$this->activityName = $activityName;
		$this->apiParams["activityName"] = $activityName;
	}
	
	public function getActivityShowStatus() {
		return $this->activityShowStatus;
	}
	
	public function setActivityShowStatus($activityShowStatus) {
		$this->activityShowStatus = $activityShowStatus;
		$this->apiParams["activityShowStatus"] = $activityShowStatus;
	}
	
	public function getAppStoreCode() {
		return $this->appStoreCode;
	}
	
	public function setAppStoreCode($appStoreCode) {
		$this->appStoreCode = $appStoreCode;
		$this->apiParams["appStoreCode"] = $appStoreCode;
	}
	
	
	
	public function getShopCode() {
		return $this->shopCode;
	}
	
	public function setShopCode($shopCode) {
		$this->shopCode = $shopCode;
		$this->apiParams["shopCode"] = $shopCode;
	}
	
	public function getApiMethodName(){
		return 'suning.store.ssshopcoupon.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "querySsshopcoupon";
	}
	
}

?>