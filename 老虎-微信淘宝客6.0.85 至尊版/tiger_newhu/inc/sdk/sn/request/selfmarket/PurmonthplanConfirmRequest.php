<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-22
 */
class PurmonthplanConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $purchaseMonthPlans;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getPurchaseMonthPlans() {
		return $this->purchaseMonthPlans;
	}
	
	public function setPurchaseMonthPlans($purchaseMonthPlans) {
		$this->purchaseMonthPlans = $purchaseMonthPlans;
		$arr = array();
		foreach ($purchaseMonthPlans as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["purchaseMonthPlans"] = $arr;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.purmonthplan.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "confirmPurmonthplan";
	}
	
}

class PurchaseMonthPlans {

	private $apiParams = array();
	
	private $monthItem;
	
	private $planMonth;
	
	private $purchaseMonthPlanNo;
	
	private $replenishmentQty;
	
	private $snProductCode;
	
	private $supplierComment;
	
	private $supplierConfirmTime;
	
	public function getMonthItem() {
		return $this->monthItem;
	}

	public function setMonthItem($monthItem) {
		$this->monthItem = $monthItem;
		$this->apiParams["monthItem"] = $monthItem;
	}
	
	public function getPlanMonth() {
		return $this->planMonth;
	}

	public function setPlanMonth($planMonth) {
		$this->planMonth = $planMonth;
		$this->apiParams["planMonth"] = $planMonth;
	}
	
	public function getPurchaseMonthPlanNo() {
		return $this->purchaseMonthPlanNo;
	}

	public function setPurchaseMonthPlanNo($purchaseMonthPlanNo) {
		$this->purchaseMonthPlanNo = $purchaseMonthPlanNo;
		$this->apiParams["purchaseMonthPlanNo"] = $purchaseMonthPlanNo;
	}
	
	public function getReplenishmentQty() {
		return $this->replenishmentQty;
	}

	public function setReplenishmentQty($replenishmentQty) {
		$this->replenishmentQty = $replenishmentQty;
		$this->apiParams["replenishmentQty"] = $replenishmentQty;
	}
	
	public function getSnProductCode() {
		return $this->snProductCode;
	}

	public function setSnProductCode($snProductCode) {
		$this->snProductCode = $snProductCode;
		$this->apiParams["snProductCode"] = $snProductCode;
	}
	
	public function getSupplierComment() {
		return $this->supplierComment;
	}

	public function setSupplierComment($supplierComment) {
		$this->supplierComment = $supplierComment;
		$this->apiParams["supplierComment"] = $supplierComment;
	}
	
	public function getSupplierConfirmTime() {
		return $this->supplierConfirmTime;
	}

	public function setSupplierConfirmTime($supplierConfirmTime) {
		$this->supplierConfirmTime = $supplierConfirmTime;
		$this->apiParams["supplierConfirmTime"] = $supplierConfirmTime;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>