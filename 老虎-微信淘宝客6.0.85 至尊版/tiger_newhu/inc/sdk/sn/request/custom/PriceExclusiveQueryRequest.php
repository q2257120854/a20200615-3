<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-8-24
 */
class PriceExclusiveQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $activityStatus;
	
	/**
	 * 
	 */
	private $startTime;
	
	/**
	 * 
	 */
	private $endTime;
	
	
	
	public function getActivityStatus() {
		return $this->activityStatus;
	}
	
	public function setActivityStatus($activityStatus) {
		$this->activityStatus = $activityStatus;
		$this->apiParams["activityStatus"] = $activityStatus;
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
	
	
	
	public function getApiMethodName(){
		return 'suning.custom.priceexclusive.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryPriceExclusive";
	}
	
}

?>