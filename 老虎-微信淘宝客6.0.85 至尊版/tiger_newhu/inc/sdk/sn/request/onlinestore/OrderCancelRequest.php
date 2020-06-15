<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-10
 */
class OrderCancelRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $flag;
	
	/**
	 * 
	 */
	private $orderId;
	
	public function getFlag() {
		return $this->flag;
	}
	
	public function setFlag($flag) {
		$this->flag = $flag;
		$this->apiParams["flag"] = $flag;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getApiMethodName(){
		return 'suning.onlinestore.order.cancel';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->flag, 'flag');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "cancelOrder";
	}
	
}

?>