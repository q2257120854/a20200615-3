<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-6-28
 */
class LogisticsOrderGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $logisticExpressId;
	
	/**
	 * 
	 */
	private $logisticOrderId;
	
	public function getLogisticExpressId() {
		return $this->logisticExpressId;
	}
	
	public function setLogisticExpressId($logisticExpressId) {
		$this->logisticExpressId = $logisticExpressId;
		$this->apiParams["logisticExpressId"] = $logisticExpressId;
	}
	
	public function getLogisticOrderId() {
		return $this->logisticOrderId;
	}
	
	public function setLogisticOrderId($logisticOrderId) {
		$this->logisticOrderId = $logisticOrderId;
		$this->apiParams["logisticOrderId"] = $logisticOrderId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.logisticsorder.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getLogisticsOrder";
	}
	
}

?>