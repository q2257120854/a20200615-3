<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-5-23
 */
class ReceiptQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $endReceivedDate;
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $receivedCode;
	
	/**
	 * 
	 */
	private $startReceivedDate;
	
	/**
	 * 
	 */
	private $vendorRefNo;
	
	
	
	public function getEndReceivedDate() {
		return $this->endReceivedDate;
	}
	
	public function setEndReceivedDate($endReceivedDate) {
		$this->endReceivedDate = $endReceivedDate;
		$this->apiParams["endReceivedDate"] = $endReceivedDate;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getReceivedCode() {
		return $this->receivedCode;
	}
	
	public function setReceivedCode($receivedCode) {
		$this->receivedCode = $receivedCode;
		$this->apiParams["receivedCode"] = $receivedCode;
	}
	
	public function getStartReceivedDate() {
		return $this->startReceivedDate;
	}
	
	public function setStartReceivedDate($startReceivedDate) {
		$this->startReceivedDate = $startReceivedDate;
		$this->apiParams["startReceivedDate"] = $startReceivedDate;
	}
	
	public function getVendorRefNo() {
		return $this->vendorRefNo;
	}
	
	public function setVendorRefNo($vendorRefNo) {
		$this->vendorRefNo = $vendorRefNo;
		$this->apiParams["vendorRefNo"] = $vendorRefNo;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.selfmarket.receipt.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "receiptQuery";
	}
	
}

?>