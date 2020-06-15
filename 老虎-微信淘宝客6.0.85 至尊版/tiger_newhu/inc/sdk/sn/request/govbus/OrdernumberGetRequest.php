<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-12-19
 */
class OrdernumberGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderId;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.ordernumber.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "getOrdernumber";
	}
	
}

?>