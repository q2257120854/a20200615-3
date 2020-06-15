<?php
/**
 * 苏宁开放平台接口 - 限时打折活动批量查询
 *
 * @author suning
 * @date   2014-10-16
 */
class QueryPriceReduceRequest  extends SelectSuningRequest{
	
	/**
	 * 时间类型
	 */
	private $timeType;
	
	/**
	 * 查询开始时间
	 */
	private $startTime;
	
	/**
	 * 查询结束时间
	 */
	private $endTime;
	
	/**
	 * 活动状态
	 */
	private $acStatusCode;
	
	public function getTimeType() {
		return $this->timeType;
	}
	
	public function setTimeType($timeType) {
		$this->timeType = $timeType;
		$this->apiParams["timeType"] = $timeType;
	}
	
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
	
	
	
	public function getAcStatusCode() {
		return $this->acStatusCode;
	}
	
	public function setAcStatusCode($acStatusCode) {
		$this->acStatusCode = $acStatusCode;
		$this->apiParams["acStatusCode"] = $acStatusCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.pricereduce.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->timeType, 'timeType');
	}
	
	public function getBizName(){
		return "queryPriceReduce";
	}
	
}

?>