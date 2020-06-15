<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-12-29
 */
class LeaguerstatusAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $iqStatus;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderItemId;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getIqStatus() {
		return $this->iqStatus;
	}
	
	public function setIqStatus($iqStatus) {
		$this->iqStatus = $iqStatus;
		$this->apiParams["iqStatus"] = $iqStatus;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.leaguerstatus.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->iqStatus, 'iqStatus');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
	}
	
	public function getBizName(){
		return "addLeaguerstatus";
	}
	
}

?>