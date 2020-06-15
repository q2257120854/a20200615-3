<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class SsshopcouponModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $activityEndTime;
	
	/**
	 * 
	 */
	private $activityName;
	
	/**
	 * 
	 */
	private $activityStartTime;
	
	/**
	 * 
	 */
	private $appStoreCode;
	
	/**
	 * 
	 */
	private $circulation;
	
	/**
	 * 
	 */
	private $shopCode;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getActivityEndTime() {
		return $this->activityEndTime;
	}
	
	public function setActivityEndTime($activityEndTime) {
		$this->activityEndTime = $activityEndTime;
		$this->apiParams["activityEndTime"] = $activityEndTime;
	}
	
	public function getActivityName() {
		return $this->activityName;
	}
	
	public function setActivityName($activityName) {
		$this->activityName = $activityName;
		$this->apiParams["activityName"] = $activityName;
	}
	
	public function getActivityStartTime() {
		return $this->activityStartTime;
	}
	
	public function setActivityStartTime($activityStartTime) {
		$this->activityStartTime = $activityStartTime;
		$this->apiParams["activityStartTime"] = $activityStartTime;
	}
	
	public function getAppStoreCode() {
		return $this->appStoreCode;
	}
	
	public function setAppStoreCode($appStoreCode) {
		$this->appStoreCode = $appStoreCode;
		$this->apiParams["appStoreCode"] = $appStoreCode;
	}
	
	public function getCirculation() {
		return $this->circulation;
	}
	
	public function setCirculation($circulation) {
		$this->circulation = $circulation;
		$this->apiParams["circulation"] = $circulation;
	}
	
	public function getShopCode() {
		return $this->shopCode;
	}
	
	public function setShopCode($shopCode) {
		$this->shopCode = $shopCode;
		$this->apiParams["shopCode"] = $shopCode;
	}
	
	public function getApiMethodName(){
		return 'suning.store.ssshopcoupon.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
	}
	
	public function getBizName(){
		return "modifySsshopcoupon";
	}
	
}

?>