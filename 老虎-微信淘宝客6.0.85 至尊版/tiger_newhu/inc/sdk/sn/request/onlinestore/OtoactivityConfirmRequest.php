<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-2
 */
class OtoactivityConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityQryCommReqBo;
	
	/**
	 * 
	 */
	private $businessType;
	
	/**
	 * 
	 */
	private $customerNo;
	
	public function getActivityQryCommReqBo() {
		return $this->activityQryCommReqBo;
	}
	
	public function setActivityQryCommReqBo($activityQryCommReqBo) {
		$this->activityQryCommReqBo = $activityQryCommReqBo;
		$arr = array();
		foreach ($activityQryCommReqBo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["activityQryCommReqBo"] = $arr;
	}
	
	public function getBusinessType() {
		return $this->businessType;
	}
	
	public function setBusinessType($businessType) {
		$this->businessType = $businessType;
		$this->apiParams["businessType"] = $businessType;
	}
	
	public function getCustomerNo() {
		return $this->customerNo;
	}
	
	public function setCustomerNo($customerNo) {
		$this->customerNo = $customerNo;
		$this->apiParams["customerNo"] = $customerNo;
	}
	
	public function getApiMethodName(){
		return 'suning.onlinestore.activity.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->businessType, 'businessType');
		RequestCheckUtil::checkNotNull($this->customerNo, 'customerNo');
	}
	
	public function getBizName(){
		return "confirmOtoactivity";
	}
	
}

class ActivityQryCommReqBo {

	private $apiParams = array();
	
	private $activityId;
	
	private $cmmdtyQty;
	
	private $commCode;
	
	private $itemNo;
	
	private $storeCode;
	
	public function getActivityId() {
		return $this->activityId;
	}

	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	public function getCmmdtyQty() {
		return $this->cmmdtyQty;
	}

	public function setCmmdtyQty($cmmdtyQty) {
		$this->cmmdtyQty = $cmmdtyQty;
		$this->apiParams["cmmdtyQty"] = $cmmdtyQty;
	}
	
	public function getCommCode() {
		return $this->commCode;
	}

	public function setCommCode($commCode) {
		$this->commCode = $commCode;
		$this->apiParams["commCode"] = $commCode;
	}
	
	public function getItemNo() {
		return $this->itemNo;
	}

	public function setItemNo($itemNo) {
		$this->itemNo = $itemNo;
		$this->apiParams["itemNo"] = $itemNo;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}

	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>