<?php
/**
 * 苏宁开放平台接口 - 获取苏宁物流顾客面单打印信息 
 *
 * @author suning
 * @date   2014-8-22
 */
class LogisticsOrderGetRequest  extends SuningRequest{
	
	/**
	 * 苏宁物流订单号
	 */
	private $logisticOrderId;
	
	/**
	 * 苏宁物流运单号
	 */
	private $logisticExpressId;
	
	public function getLogisticOrderId() {
		return $this->logisticOrderId;
	}
	
	public function setLogisticOrderId($logisticOrderId) {
		$this->logisticOrderId = $logisticOrderId;
		$this->apiParams["logisticOrderId"] = $logisticOrderId;
	}
	
	public function getLogisticExpressId() {
		return $this->logisticExpressId;
	}
	
	public function setLogisticExpressId($logisticExpressId) {
		$this->logisticExpressId = $logisticExpressId;
		$this->apiParams["logisticExpressId"] = $logisticExpressId;
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