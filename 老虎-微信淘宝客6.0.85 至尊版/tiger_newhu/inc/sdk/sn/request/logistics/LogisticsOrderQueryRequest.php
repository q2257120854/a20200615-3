<?php
/**
 * 苏宁开放平台接口 - 查询苏宁物流顾客面单打印信息 
 *
 * @author suning
 * @date   2014-8-26
 */
class LogisticsOrderQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 开始时间
	 */
	private $startTime;
	
	/**
	 * 结束时间
	 */
	private $endTime;
	
	
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
		return 'suning.custom.logisticsorder.query';
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
		return "queryLogisticsOrder";
	}
	
}

?>