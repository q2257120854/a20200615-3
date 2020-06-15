<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-28
 */
class ReservesupplierQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $appointmentOrder;
	
	/**
	 * 
	 */
	private $endPlannedArrivalDate;
	
	/**
	 * 
	 */
	private $endUpdateTime;
	
	/**
	 * 
	 */
	private $orderCode;
	
	
	
	/**
	 * 
	 */
	private $startPlannedArrivalDate;
	
	/**
	 * 
	 */
	private $startUpdateTime;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	/**
	 * 
	 */
	private $wayBillOrder;
	
	public function getAppointmentOrder() {
		return $this->appointmentOrder;
	}
	
	public function setAppointmentOrder($appointmentOrder) {
		$this->appointmentOrder = $appointmentOrder;
		$this->apiParams["appointmentOrder"] = $appointmentOrder;
	}
	
	public function getEndPlannedArrivalDate() {
		return $this->endPlannedArrivalDate;
	}
	
	public function setEndPlannedArrivalDate($endPlannedArrivalDate) {
		$this->endPlannedArrivalDate = $endPlannedArrivalDate;
		$this->apiParams["endPlannedArrivalDate"] = $endPlannedArrivalDate;
	}
	
	public function getEndUpdateTime() {
		return $this->endUpdateTime;
	}
	
	public function setEndUpdateTime($endUpdateTime) {
		$this->endUpdateTime = $endUpdateTime;
		$this->apiParams["endUpdateTime"] = $endUpdateTime;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	
	
	public function getStartPlannedArrivalDate() {
		return $this->startPlannedArrivalDate;
	}
	
	public function setStartPlannedArrivalDate($startPlannedArrivalDate) {
		$this->startPlannedArrivalDate = $startPlannedArrivalDate;
		$this->apiParams["startPlannedArrivalDate"] = $startPlannedArrivalDate;
	}
	
	public function getStartUpdateTime() {
		return $this->startUpdateTime;
	}
	
	public function setStartUpdateTime($startUpdateTime) {
		$this->startUpdateTime = $startUpdateTime;
		$this->apiParams["startUpdateTime"] = $startUpdateTime;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getWayBillOrder() {
		return $this->wayBillOrder;
	}
	
	public function setWayBillOrder($wayBillOrder) {
		$this->wayBillOrder = $wayBillOrder;
		$this->apiParams["wayBillOrder"] = $wayBillOrder;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.reservesupplier.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "queryReservesupplier";
	}
	
}

?>