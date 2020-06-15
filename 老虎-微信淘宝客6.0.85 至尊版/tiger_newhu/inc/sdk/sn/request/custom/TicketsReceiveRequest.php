<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-22
 */
class TicketsReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $failedCode;
	
	/**
	 * 
	 */
	private $failedReason;
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $orderItemCode;
	
	/**
	 * 
	 */
	private $orderStatus;
	
	/**
	 * 
	 */
	private $successTime;
	
	/**
	 * 
	 */
	private $ticketList;
	
	public function getFailedCode() {
		return $this->failedCode;
	}
	
	public function setFailedCode($failedCode) {
		$this->failedCode = $failedCode;
		$this->apiParams["failedCode"] = $failedCode;
	}
	
	public function getFailedReason() {
		return $this->failedReason;
	}
	
	public function setFailedReason($failedReason) {
		$this->failedReason = $failedReason;
		$this->apiParams["failedReason"] = $failedReason;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getOrderItemCode() {
		return $this->orderItemCode;
	}
	
	public function setOrderItemCode($orderItemCode) {
		$this->orderItemCode = $orderItemCode;
		$this->apiParams["orderItemCode"] = $orderItemCode;
	}
	
	public function getOrderStatus() {
		return $this->orderStatus;
	}
	
	public function setOrderStatus($orderStatus) {
		$this->orderStatus = $orderStatus;
		$this->apiParams["orderStatus"] = $orderStatus;
	}
	
	public function getSuccessTime() {
		return $this->successTime;
	}
	
	public function setSuccessTime($successTime) {
		$this->successTime = $successTime;
		$this->apiParams["successTime"] = $successTime;
	}
	
	public function getTicketList() {
		return $this->ticketList;
	}
	
	public function setTicketList($ticketList) {
		$this->ticketList = $ticketList;
		$arr = array();
		foreach ($ticketList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["ticketList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.tickets.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
		RequestCheckUtil::checkNotNull($this->orderItemCode, 'orderItemCode');
		RequestCheckUtil::checkNotNull($this->orderStatus, 'orderStatus');
	}
	
	public function getBizName(){
		return "receiveTickets";
	}
	
}

class TicketList {

	private $apiParams = array();
	
	private $pdfCode;
	
	private $qrCode;
	
	private $additional;
	
	private $serialCode;
	
	public function getPdfCode() {
		return $this->pdfCode;
	}

	public function setPdfCode($pdfCode) {
		$this->pdfCode = $pdfCode;
		$this->apiParams["pdfCode"] = $pdfCode;
	}
	
	public function getQrCode() {
		return $this->qrCode;
	}

	public function setQrCode($qrCode) {
		$this->qrCode = $qrCode;
		$this->apiParams["qrCode"] = $qrCode;
	}
	
	public function getAdditional() {
		return $this->additional;
	}

	public function setAdditional($additional) {
		$this->additional = $additional;
		$this->apiParams["additional"] = $additional;
	}
	
	public function getSerialCode() {
		return $this->serialCode;
	}

	public function setSerialCode($serialCode) {
		$this->serialCode = $serialCode;
		$this->apiParams["serialCode"] = $serialCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>