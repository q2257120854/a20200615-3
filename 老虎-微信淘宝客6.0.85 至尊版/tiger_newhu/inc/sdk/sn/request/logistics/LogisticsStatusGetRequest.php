<?php
/**
 * 苏宁开放平台接口 - 获取苏宁物流状态信息 
 *
 * @author suning
 * @date   2014-8-22
 */
class LogisticsStatusGetRequest  extends SuningRequest{
	
	/**
	 * 苏宁物流订单号
	 */
	private $logisticOrderId;
	
	/**
	 * 苏宁运单号
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
		return 'suning.custom.logisticsstatus.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->logisticOrderId, 'logisticOrderId');
		RequestCheckUtil::checkNotNull($this->logisticExpressId, 'logisticExpressId');
	}
	
	public function getBizName(){
		return "getLogisticsStatus";
	}
	
}

?>