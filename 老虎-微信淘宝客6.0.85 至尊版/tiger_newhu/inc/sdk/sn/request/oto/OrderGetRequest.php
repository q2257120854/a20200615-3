<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-12-2
 */
class OrderGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $b2cOrderId;
	
	public function getB2cOrderId() {
		return $this->b2cOrderId;
	}
	
	public function setB2cOrderId($b2cOrderId) {
		$this->b2cOrderId = $b2cOrderId;
		$this->apiParams["b2cOrderId"] = $b2cOrderId;
	}
	
	public function getApiMethodName(){
		return 'suning.oto.order.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->b2cOrderId, 'b2cOrderId');
	}
	
	public function getBizName(){
		return "getOrder";
	}
	
}

?>