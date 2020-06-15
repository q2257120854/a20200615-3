<?php
/**
 * 苏宁开放平台接口 - 苏宁物流跨境购任务派发信息单笔查询
 *
 * @author suning
 * @date   2015-1-22
 */
class GetLogisticsCrossbuyTaskRequest  extends SuningRequest{
	
	/**
	 * 苏宁物流订单号
	 */
	private $logisticOrderId;
	
	public function getLogisticOrderId() {
		return $this->logisticOrderId;
	}
	
	public function setLogisticOrderId($logisticOrderId) {
		$this->logisticOrderId = $logisticOrderId;
		$this->apiParams["logisticOrderId"] = $logisticOrderId;
	}
	
	public function getApiMethodName(){
		return 'suning.logistics.crossbuytask.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->logisticOrderId, 'logisticOrderId');
	}
	
	public function getBizName(){
		return "getLogisticsCrossbuyTask";
	}
	
}

?>