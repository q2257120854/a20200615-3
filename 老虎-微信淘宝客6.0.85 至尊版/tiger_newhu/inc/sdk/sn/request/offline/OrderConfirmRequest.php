<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-11-16
 */
class OrderConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $counterCode;
	
	/**
	 * 
	 */
	private $orderAmount;
	
	/**
	 * 
	 */
	private $payId;
	
	/**
	 * 
	 */
	private $payItemInfo;
	
	/**
	 * 
	 */
	private $payTime;
	
	/**
	 * 
	 */
	private $rtStoreCode;
	
	/**
	 * 
	 */
	private $verifyCode;
	
	public function getCounterCode() {
		return $this->counterCode;
	}
	
	public function setCounterCode($counterCode) {
		$this->counterCode = $counterCode;
		$this->apiParams["counterCode"] = $counterCode;
	}
	
	public function getOrderAmount() {
		return $this->orderAmount;
	}
	
	public function setOrderAmount($orderAmount) {
		$this->orderAmount = $orderAmount;
		$this->apiParams["orderAmount"] = $orderAmount;
	}
	
	public function getPayId() {
		return $this->payId;
	}
	
	public function setPayId($payId) {
		$this->payId = $payId;
		$this->apiParams["payId"] = $payId;
	}
	
	public function getPayItemInfo() {
		return $this->payItemInfo;
	}
	
	public function setPayItemInfo($payItemInfo) {
		$this->payItemInfo = $payItemInfo;
		$arr = array();
		foreach ($payItemInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["payItemInfo"] = $arr;
	}
	
	public function getPayTime() {
		return $this->payTime;
	}
	
	public function setPayTime($payTime) {
		$this->payTime = $payTime;
		$this->apiParams["payTime"] = $payTime;
	}
	
	public function getRtStoreCode() {
		return $this->rtStoreCode;
	}
	
	public function setRtStoreCode($rtStoreCode) {
		$this->rtStoreCode = $rtStoreCode;
		$this->apiParams["rtStoreCode"] = $rtStoreCode;
	}
	
	public function getVerifyCode() {
		return $this->verifyCode;
	}
	
	public function setVerifyCode($verifyCode) {
		$this->verifyCode = $verifyCode;
		$this->apiParams["verifyCode"] = $verifyCode;
	}
	
	public function getApiMethodName(){
		return 'suning.offline.order.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderAmount, 'orderAmount');
		RequestCheckUtil::checkNotNull($this->payId, 'payId');
		RequestCheckUtil::checkNotNull($this->payTime, 'payTime');
		RequestCheckUtil::checkNotNull($this->rtStoreCode, 'rtStoreCode');
	}
	
	public function getBizName(){
		return "confirmOrder";
	}
	
}

class PayItemInfo {

	private $apiParams = array();
	
	private $orderItemId;
	
	private $payAmount;
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getPayAmount() {
		return $this->payAmount;
	}

	public function setPayAmount($payAmount) {
		$this->payAmount = $payAmount;
		$this->apiParams["payAmount"] = $payAmount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>