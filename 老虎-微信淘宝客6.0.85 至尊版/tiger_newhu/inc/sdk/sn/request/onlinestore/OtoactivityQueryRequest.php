<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-15
 */
class OtoactivityQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityId;
	
	/**
	 * 
	 */
	private $businessType;
	
	/**
	 * 
	 */
	private $commCode;
	
	/**
	 * 
	 */
	private $customerNo;
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getActivityId() {
		return $this->activityId;
	}
	
	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	public function getBusinessType() {
		return $this->businessType;
	}
	
	public function setBusinessType($businessType) {
		$this->businessType = $businessType;
		$this->apiParams["businessType"] = $businessType;
	}
	
	public function getCommCode() {
		return $this->commCode;
	}
	
	public function setCommCode($commCode) {
		$this->commCode = $commCode;
		$this->apiParams["commCode"] = $commCode;
	}
	
	public function getCustomerNo() {
		return $this->customerNo;
	}
	
	public function setCustomerNo($customerNo) {
		$this->customerNo = $customerNo;
		$this->apiParams["customerNo"] = $customerNo;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.onlinestore.activity.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityId, 'activityId');
		RequestCheckUtil::checkNotNull($this->businessType, 'businessType');
		RequestCheckUtil::checkNotNull($this->commCode, 'commCode');
		RequestCheckUtil::checkNotNull($this->customerNo, 'customerNo');
	}
	
	public function getBizName(){
		return "queryOtoactivity";
	}
	
}

?>