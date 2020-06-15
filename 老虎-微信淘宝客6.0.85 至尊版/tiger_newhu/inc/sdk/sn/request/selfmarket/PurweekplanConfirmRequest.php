<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-22
 */
class PurweekplanConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $purchaseWeekPlans;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getPurchaseWeekPlans() {
		return $this->purchaseWeekPlans;
	}
	
	public function setPurchaseWeekPlans($purchaseWeekPlans) {
		$this->purchaseWeekPlans = $purchaseWeekPlans;
		$arr = array();
		foreach ($purchaseWeekPlans as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["purchaseWeekPlans"] = $arr;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.purweekplan.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "confirmPurweekplan";
	}
	
}

class PurchaseWeekPlans {

	private $apiParams = array();
	
	private $itemStatus;
	
	private $locationCode;
	
	private $plantCode;
	
	private $purchaseWeekPlanNo;
	
	private $replenishmentQty;
	
	private $snProductCode;
	
	private $supplierComment;
	
	private $supplierConfirmTime;
	
	private $weekItem;
	
	private $weekplanStartDate;
	
	public function getItemStatus() {
		return $this->itemStatus;
	}

	public function setItemStatus($itemStatus) {
		$this->itemStatus = $itemStatus;
		$this->apiParams["itemStatus"] = $itemStatus;
	}
	
	public function getLocationCode() {
		return $this->locationCode;
	}

	public function setLocationCode($locationCode) {
		$this->locationCode = $locationCode;
		$this->apiParams["locationCode"] = $locationCode;
	}
	
	public function getPlantCode() {
		return $this->plantCode;
	}

	public function setPlantCode($plantCode) {
		$this->plantCode = $plantCode;
		$this->apiParams["plantCode"] = $plantCode;
	}
	
	public function getPurchaseWeekPlanNo() {
		return $this->purchaseWeekPlanNo;
	}

	public function setPurchaseWeekPlanNo($purchaseWeekPlanNo) {
		$this->purchaseWeekPlanNo = $purchaseWeekPlanNo;
		$this->apiParams["purchaseWeekPlanNo"] = $purchaseWeekPlanNo;
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
	
	public function getWeekItem() {
		return $this->weekItem;
	}

	public function setWeekItem($weekItem) {
		$this->weekItem = $weekItem;
		$this->apiParams["weekItem"] = $weekItem;
	}
	
	public function getWeekplanStartDate() {
		return $this->weekplanStartDate;
	}

	public function setWeekplanStartDate($weekplanStartDate) {
		$this->weekplanStartDate = $weekplanStartDate;
		$this->apiParams["weekplanStartDate"] = $weekplanStartDate;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>