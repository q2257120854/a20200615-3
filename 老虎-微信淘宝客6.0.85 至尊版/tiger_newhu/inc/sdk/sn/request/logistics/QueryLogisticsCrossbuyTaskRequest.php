<?php
/**
 * 苏宁开放平台接口 - 苏宁物流跨境购任务派发信息批量查询
 *
 * @author suning
 * @date   2015-1-22
 */
class QueryLogisticsCrossbuyTaskRequest  extends SelectSuningRequest{
	
	/**
	 * 查询开始时间
	 */
	private $startTime;
	
	/**
	 * 查询结束时间
	 */
	private $endTime;
	
	/**
	 * 业务类型。C003-跨境的入库单、C004-跨境集货入库单、C005-跨境备货销售订单、C006-跨境集货销售订单
	 */
	private $businessType;
	
	
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getBusinessType() {
		return $this->businessType;
	}
	
	public function setBusinessType($businessType) {
		$this->businessType = $businessType;
		$this->apiParams["businessType"] = $businessType;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.logistics.crossbuytask.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
	}
	
	public function getBizName(){
		return "queryLogisticsCrossbuyTask";
	}
	
}

?>