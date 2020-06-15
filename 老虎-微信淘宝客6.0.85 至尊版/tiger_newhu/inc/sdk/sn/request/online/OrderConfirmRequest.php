<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-22
 */
class OrderConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderstatus;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderstatus() {
		return $this->orderstatus;
	}
	
	public function setOrderstatus($orderstatus) {
		$this->orderstatus = $orderstatus;
		$this->apiParams["orderstatus"] = $orderstatus;
	}
	
	public function getApiMethodName(){
		return 'suning.online.order.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->orderstatus, 'orderstatus');
	}
	
	public function getBizName(){
		return "confirmOrder";
	}
	
}

?>