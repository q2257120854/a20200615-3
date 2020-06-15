<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-6-25
 */
class RepairgoodsCancelRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cancelReason;
	
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
	private $sheetId;
	
	/**
	 * 
	 */
	private $skuId;
	
	public function getCancelReason() {
		return $this->cancelReason;
	}
	
	public function setCancelReason($cancelReason) {
		$this->cancelReason = $cancelReason;
		$this->apiParams["cancelReason"] = $cancelReason;
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
	
	public function getSheetId() {
		return $this->sheetId;
	}
	
	public function setSheetId($sheetId) {
		$this->sheetId = $sheetId;
		$this->apiParams["sheetId"] = $sheetId;
	}
	
	public function getSkuId() {
		return $this->skuId;
	}
	
	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.repairgoods.cancel';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cancelReason, 'cancelReason');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->sheetId, 'sheetId');
		RequestCheckUtil::checkNotNull($this->skuId, 'skuId');
	}
	
	public function getBizName(){
		return "cancelRepairgoods";
	}
	
}

?>