<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-6-30
 */
class PurchaseOrderQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $endDate;
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $orderStatus;
	
	/**
	 * 
	 */
	private $orderType;
	
	
	
	/**
	 * 
	 */
	private $startDate;
	
	public function getEndDate() {
		return $this->endDate;
	}
	
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->apiParams["endDate"] = $endDate;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getOrderStatus() {
		return $this->orderStatus;
	}
	
	public function setOrderStatus($orderStatus) {
		$this->orderStatus = $orderStatus;
		$this->apiParams["orderStatus"] = $orderStatus;
	}
	
	public function getOrderType() {
		return $this->orderType;
	}
	
	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->apiParams["orderType"] = $orderType;
	}
	
	
	
	public function getStartDate() {
		return $this->startDate;
	}
	
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		$this->apiParams["startDate"] = $startDate;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.purchaseorder.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "purchaseOrder";
	}
	
}

?>