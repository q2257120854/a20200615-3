<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-4-24
 */
class SuporderstatusAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $supOrderStatus;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getSupOrderStatus() {
		return $this->supOrderStatus;
	}
	
	public function setSupOrderStatus($supOrderStatus) {
		$this->supOrderStatus = $supOrderStatus;
		$arr = array();
		foreach ($supOrderStatus as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["supOrderStatus"] = $arr;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.suporderstatus.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "addSuporderstatus";
	}
	
}

class SupOrderStatus {

	private $apiParams = array();
	
	private $latestArrTime;
	
	private $notPassReasons;
	
	private $number;
	
	private $omsItemNo;
	
	private $omsOrderNo;
	
	private $planArrTime;
	
	private $purchaseOrderNo;
	
	private $purOrderItemNo;
	
	private $state;
	
	private $statusOccurTime;
	
	public function getLatestArrTime() {
		return $this->latestArrTime;
	}

	public function setLatestArrTime($latestArrTime) {
		$this->latestArrTime = $latestArrTime;
		$this->apiParams["latestArrTime"] = $latestArrTime;
	}
	
	public function getNotPassReasons() {
		return $this->notPassReasons;
	}

	public function setNotPassReasons($notPassReasons) {
		$this->notPassReasons = $notPassReasons;
		$this->apiParams["notPassReasons"] = $notPassReasons;
	}
	
	public function getNumber() {
		return $this->number;
	}

	public function setNumber($number) {
		$this->number = $number;
		$this->apiParams["number"] = $number;
	}
	
	public function getOmsItemNo() {
		return $this->omsItemNo;
	}

	public function setOmsItemNo($omsItemNo) {
		$this->omsItemNo = $omsItemNo;
		$this->apiParams["omsItemNo"] = $omsItemNo;
	}
	
	public function getOmsOrderNo() {
		return $this->omsOrderNo;
	}

	public function setOmsOrderNo($omsOrderNo) {
		$this->omsOrderNo = $omsOrderNo;
		$this->apiParams["omsOrderNo"] = $omsOrderNo;
	}
	
	public function getPlanArrTime() {
		return $this->planArrTime;
	}

	public function setPlanArrTime($planArrTime) {
		$this->planArrTime = $planArrTime;
		$this->apiParams["planArrTime"] = $planArrTime;
	}
	
	public function getPurchaseOrderNo() {
		return $this->purchaseOrderNo;
	}

	public function setPurchaseOrderNo($purchaseOrderNo) {
		$this->purchaseOrderNo = $purchaseOrderNo;
		$this->apiParams["purchaseOrderNo"] = $purchaseOrderNo;
	}
	
	public function getPurOrderItemNo() {
		return $this->purOrderItemNo;
	}

	public function setPurOrderItemNo($purOrderItemNo) {
		$this->purOrderItemNo = $purOrderItemNo;
		$this->apiParams["purOrderItemNo"] = $purOrderItemNo;
	}
	
	public function getState() {
		return $this->state;
	}

	public function setState($state) {
		$this->state = $state;
		$this->apiParams["state"] = $state;
	}
	
	public function getStatusOccurTime() {
		return $this->statusOccurTime;
	}

	public function setStatusOccurTime($statusOccurTime) {
		$this->statusOccurTime = $statusOccurTime;
		$this->apiParams["statusOccurTime"] = $statusOccurTime;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>