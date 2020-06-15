<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-1-9
 */
class OrderUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderItems;
	
	/**
	 * 
	 */
	private $orderStatus;
	
	/**
	 * 
	 */
	private $payDate;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItems() {
		return $this->orderItems;
	}
	
	public function setOrderItems($orderItems) {
		$this->orderItems = $orderItems;
		$arr = array();
		foreach ($orderItems as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderItems"] = $arr;
	}
	
	public function getOrderStatus() {
		return $this->orderStatus;
	}
	
	public function setOrderStatus($orderStatus) {
		$this->orderStatus = $orderStatus;
		$this->apiParams["orderStatus"] = $orderStatus;
	}
	
	public function getPayDate() {
		return $this->payDate;
	}
	
	public function setPayDate($payDate) {
		$this->payDate = $payDate;
		$this->apiParams["payDate"] = $payDate;
	}
	
	public function getApiMethodName(){
		return 'suning.online.order.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->orderStatus, 'orderStatus');
	}
	
	public function getBizName(){
		return "updateOrder";
	}
	
}

class PreferentialInfo {

	private $apiParams = array();
	
	private $preferentialAmount;
	
	private $preferentialType;
	
	private $provider;
	
	public function getPreferentialAmount() {
		return $this->preferentialAmount;
	}

	public function setPreferentialAmount($preferentialAmount) {
		$this->preferentialAmount = $preferentialAmount;
		$this->apiParams["preferentialAmount"] = $preferentialAmount;
	}
	
	public function getPreferentialType() {
		return $this->preferentialType;
	}

	public function setPreferentialType($preferentialType) {
		$this->preferentialType = $preferentialType;
		$this->apiParams["preferentialType"] = $preferentialType;
	}
	
	public function getProvider() {
		return $this->provider;
	}

	public function setProvider($provider) {
		$this->provider = $provider;
		$this->apiParams["provider"] = $provider;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class OrderItems {

	private $apiParams = array();
	
	private $orderItemId;
	
	private $payChannelNumber;
	
	private $payNumber;
	
	private $preferentialInfo;
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getPayChannelNumber() {
		return $this->payChannelNumber;
	}

	public function setPayChannelNumber($payChannelNumber) {
		$this->payChannelNumber = $payChannelNumber;
		$this->apiParams["payChannelNumber"] = $payChannelNumber;
	}
	
	public function getPayNumber() {
		return $this->payNumber;
	}

	public function setPayNumber($payNumber) {
		$this->payNumber = $payNumber;
		$this->apiParams["payNumber"] = $payNumber;
	}
	
	public function getPreferentialInfo() {
		return $this->preferentialInfo;
	}

	public function setPreferentialInfo($preferentialInfo) {
		$this->preferentialInfo = $preferentialInfo;
		$arr = array();
		foreach ($preferentialInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["preferentialInfo"] = $arr;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>