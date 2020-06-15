<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-15
 */
class RefundordersyncCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $createDate;
	
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
	private $payChannelReNumber;
	
	/**
	 * 
	 */
	private $payNumber;
	
	/**
	 * 
	 */
	private $refundAmount;
	
	/**
	 * 
	 */
	private $refundDate;
	
	/**
	 * 
	 */
	private $refundId;
	
	/**
	 * 
	 */
	private $refundStatus;
	
	/**
	 * 
	 */
	private $refundType;
	
	public function getCreateDate() {
		return $this->createDate;
	}
	
	public function setCreateDate($createDate) {
		$this->createDate = $createDate;
		$this->apiParams["createDate"] = $createDate;
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
	
	public function getPayChannelReNumber() {
		return $this->payChannelReNumber;
	}
	
	public function setPayChannelReNumber($payChannelReNumber) {
		$this->payChannelReNumber = $payChannelReNumber;
		$this->apiParams["payChannelReNumber"] = $payChannelReNumber;
	}
	
	public function getPayNumber() {
		return $this->payNumber;
	}
	
	public function setPayNumber($payNumber) {
		$this->payNumber = $payNumber;
		$this->apiParams["payNumber"] = $payNumber;
	}
	
	public function getRefundAmount() {
		return $this->refundAmount;
	}
	
	public function setRefundAmount($refundAmount) {
		$this->refundAmount = $refundAmount;
		$this->apiParams["refundAmount"] = $refundAmount;
	}
	
	public function getRefundDate() {
		return $this->refundDate;
	}
	
	public function setRefundDate($refundDate) {
		$this->refundDate = $refundDate;
		$this->apiParams["refundDate"] = $refundDate;
	}
	
	public function getRefundId() {
		return $this->refundId;
	}
	
	public function setRefundId($refundId) {
		$this->refundId = $refundId;
		$this->apiParams["refundId"] = $refundId;
	}
	
	public function getRefundStatus() {
		return $this->refundStatus;
	}
	
	public function setRefundStatus($refundStatus) {
		$this->refundStatus = $refundStatus;
		$this->apiParams["refundStatus"] = $refundStatus;
	}
	
	public function getRefundType() {
		return $this->refundType;
	}
	
	public function setRefundType($refundType) {
		$this->refundType = $refundType;
		$this->apiParams["refundType"] = $refundType;
	}
	
	public function getApiMethodName(){
		return 'suning.online.refundordersync.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->createDate, 'createDate');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->refundAmount, 'refundAmount');
		RequestCheckUtil::checkNotNull($this->refundDate, 'refundDate');
		RequestCheckUtil::checkNotNull($this->refundId, 'refundId');
		RequestCheckUtil::checkNotNull($this->refundStatus, 'refundStatus');
		RequestCheckUtil::checkNotNull($this->refundType, 'refundType');
	}
	
	public function getBizName(){
		return "createRefundordersync";
	}
	
}

?>