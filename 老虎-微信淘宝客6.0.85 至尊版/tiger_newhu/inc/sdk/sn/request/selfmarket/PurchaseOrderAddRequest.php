<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-16
 */
class PurchaseOrderAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $confirmDeliveryDate;
	
	/**
	 * 
	 */
	private $confirmType;
	
	/**
	 * 
	 */
	private $itemNo;
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getConfirmDeliveryDate() {
		return $this->confirmDeliveryDate;
	}
	
	public function setConfirmDeliveryDate($confirmDeliveryDate) {
		$this->confirmDeliveryDate = $confirmDeliveryDate;
		$this->apiParams["confirmDeliveryDate"] = $confirmDeliveryDate;
	}
	
	public function getConfirmType() {
		return $this->confirmType;
	}
	
	public function setConfirmType($confirmType) {
		$this->confirmType = $confirmType;
		$this->apiParams["confirmType"] = $confirmType;
	}
	
	public function getItemNo() {
		return $this->itemNo;
	}
	
	public function setItemNo($itemNo) {
		$this->itemNo = $itemNo;
		$this->apiParams["itemNo"] = $itemNo;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.purchaseorder.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->confirmType, 'confirmType');
		RequestCheckUtil::checkNotNull($this->itemNo, 'itemNo');
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "purchaseOrderConfirm";
	}
	
}

?>