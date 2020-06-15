<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-23
 */
class DeliveryorderAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $deliveryDetail;
	
	/**
	 * 
	 */
	private $deliveryHead;
	
	public function getDeliveryDetail() {
		return $this->deliveryDetail;
	}
	
	public function setDeliveryDetail($deliveryDetail) {
		$this->deliveryDetail = $deliveryDetail;
		$arr = array();
		foreach ($deliveryDetail as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["deliveryDetail"] = $arr;
	}
	
	public function getDeliveryHead() {
		return $this->deliveryHead;
	}
	
	public function setDeliveryHead($deliveryHead) {
		$this->deliveryHead = $deliveryHead;
		$this->apiParams["deliveryHead"] = $deliveryHead->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.deliveryorder.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "addDeliveryorder";
	}
	
}

class DeliveryDetail {

	private $apiParams = array();
	
	private $deliveryItemNo;
	
	private $deliveryQty;
	
	private $orderCode;
	
	private $orderItem;
	
	public function getDeliveryItemNo() {
		return $this->deliveryItemNo;
	}

	public function setDeliveryItemNo($deliveryItemNo) {
		$this->deliveryItemNo = $deliveryItemNo;
		$this->apiParams["deliveryItemNo"] = $deliveryItemNo;
	}
	
	public function getDeliveryQty() {
		return $this->deliveryQty;
	}

	public function setDeliveryQty($deliveryQty) {
		$this->deliveryQty = $deliveryQty;
		$this->apiParams["deliveryQty"] = $deliveryQty;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}

	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getOrderItem() {
		return $this->orderItem;
	}

	public function setOrderItem($orderItem) {
		$this->orderItem = $orderItem;
		$this->apiParams["orderItem"] = $orderItem;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class DeliveryHead {

	private $apiParams = array();
	
	private $carrierName;
	
	private $carrierTel;
	
	private $deliveryDate;
	
	private $deliveryNo;
	
	private $plannedArrivalDate;
	
	private $plannedArrivalTime;
	
	private $supplierCode;
	
	public function getCarrierName() {
		return $this->carrierName;
	}

	public function setCarrierName($carrierName) {
		$this->carrierName = $carrierName;
		$this->apiParams["carrierName"] = $carrierName;
	}
	
	public function getCarrierTel() {
		return $this->carrierTel;
	}

	public function setCarrierTel($carrierTel) {
		$this->carrierTel = $carrierTel;
		$this->apiParams["carrierTel"] = $carrierTel;
	}
	
	public function getDeliveryDate() {
		return $this->deliveryDate;
	}

	public function setDeliveryDate($deliveryDate) {
		$this->deliveryDate = $deliveryDate;
		$this->apiParams["deliveryDate"] = $deliveryDate;
	}
	
	public function getDeliveryNo() {
		return $this->deliveryNo;
	}

	public function setDeliveryNo($deliveryNo) {
		$this->deliveryNo = $deliveryNo;
		$this->apiParams["deliveryNo"] = $deliveryNo;
	}
	
	public function getPlannedArrivalDate() {
		return $this->plannedArrivalDate;
	}

	public function setPlannedArrivalDate($plannedArrivalDate) {
		$this->plannedArrivalDate = $plannedArrivalDate;
		$this->apiParams["plannedArrivalDate"] = $plannedArrivalDate;
	}
	
	public function getPlannedArrivalTime() {
		return $this->plannedArrivalTime;
	}

	public function setPlannedArrivalTime($plannedArrivalTime) {
		$this->plannedArrivalTime = $plannedArrivalTime;
		$this->apiParams["plannedArrivalTime"] = $plannedArrivalTime;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}

	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>