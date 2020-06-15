<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-5-23
 */
class PurchaseplanconfirmAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $purchasePlanResult;
	
	public function getPurchasePlanResult() {
		return $this->purchasePlanResult;
	}
	
	public function setPurchasePlanResult($purchasePlanResult) {
		$this->purchasePlanResult = $purchasePlanResult;
		$arr = array();
		foreach ($purchasePlanResult as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["purchasePlanResult"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.purchaseplanconfirm.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "addPurchaseplan";
	}
	
}

class PurchasePlanResult {

	private $apiParams = array();
	
	private $commodityCode;
	
	private $commodityName;
	
	private $feedbackCount;
	
	private $feedbackDateTime;
	
	private $purchasePlanNo;
	
	private $remark;
	
	private $snPlanCount;
	
	public function getCommodityCode() {
		return $this->commodityCode;
	}

	public function setCommodityCode($commodityCode) {
		$this->commodityCode = $commodityCode;
		$this->apiParams["commodityCode"] = $commodityCode;
	}
	
	public function getCommodityName() {
		return $this->commodityName;
	}

	public function setCommodityName($commodityName) {
		$this->commodityName = $commodityName;
		$this->apiParams["commodityName"] = $commodityName;
	}
	
	public function getFeedbackCount() {
		return $this->feedbackCount;
	}

	public function setFeedbackCount($feedbackCount) {
		$this->feedbackCount = $feedbackCount;
		$this->apiParams["feedbackCount"] = $feedbackCount;
	}
	
	public function getFeedbackDateTime() {
		return $this->feedbackDateTime;
	}

	public function setFeedbackDateTime($feedbackDateTime) {
		$this->feedbackDateTime = $feedbackDateTime;
		$this->apiParams["feedbackDateTime"] = $feedbackDateTime;
	}
	
	public function getPurchasePlanNo() {
		return $this->purchasePlanNo;
	}

	public function setPurchasePlanNo($purchasePlanNo) {
		$this->purchasePlanNo = $purchasePlanNo;
		$this->apiParams["purchasePlanNo"] = $purchasePlanNo;
	}
	
	public function getRemark() {
		return $this->remark;
	}

	public function setRemark($remark) {
		$this->remark = $remark;
		$this->apiParams["remark"] = $remark;
	}
	
	public function getSnPlanCount() {
		return $this->snPlanCount;
	}

	public function setSnPlanCount($snPlanCount) {
		$this->snPlanCount = $snPlanCount;
		$this->apiParams["snPlanCount"] = $snPlanCount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>