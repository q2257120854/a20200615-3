<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-12-27
 */
class IsvorderQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $buyerCode;
	
	/**
	 * 
	 */
	private $itemCode;
	
	/**
	 * 
	 */
	private $orderEndTime;
	
	/**
	 * 
	 */
	private $orderStartTime;
	
	
	
	public function getBuyerCode() {
		return $this->buyerCode;
	}
	
	public function setBuyerCode($buyerCode) {
		$this->buyerCode = $buyerCode;
		$this->apiParams["buyerCode"] = $buyerCode;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getOrderEndTime() {
		return $this->orderEndTime;
	}
	
	public function setOrderEndTime($orderEndTime) {
		$this->orderEndTime = $orderEndTime;
		$this->apiParams["orderEndTime"] = $orderEndTime;
	}
	
	public function getOrderStartTime() {
		return $this->orderStartTime;
	}
	
	public function setOrderStartTime($orderStartTime) {
		$this->orderStartTime = $orderStartTime;
		$this->apiParams["orderStartTime"] = $orderStartTime;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.fontorder.isvorder.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderEndTime, 'orderEndTime');
		RequestCheckUtil::checkNotNull($this->orderStartTime, 'orderStartTime');
	}
	
	public function getBizName(){
		return "queryIsvorder";
	}
	
}

?>