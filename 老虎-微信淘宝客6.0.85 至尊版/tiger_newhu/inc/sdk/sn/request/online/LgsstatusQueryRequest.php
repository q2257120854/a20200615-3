<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-1-9
 */
class LgsstatusQueryRequest  extends SuningRequest{
	
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
		return 'suning.online.lgsstatus.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "queryLgsstatus";
	}
	
}

?>