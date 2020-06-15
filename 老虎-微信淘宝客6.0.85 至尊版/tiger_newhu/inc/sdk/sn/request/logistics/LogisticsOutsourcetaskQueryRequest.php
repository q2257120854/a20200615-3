<?php
/**
 * 苏宁开放平台接口 - 苏宁物流外包任务派发批量查询
 *
 * @author suning
 * @date   2014-9-25
 */
class LogisticsOutsourcetaskQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 查询开始时间(查询的提货日期时间跨度不能大于1天)。格式: YYYY-MM-DD HH:MM:SS
	 */
	private $startTime;
	
	/**
	 * 查询结束时间(查询的提货日期时间跨度不能大于1天)。格式YYYY-MM-DD HH:MM:SS
	 */
	private $endTime;
	
	/**
	 * 每页条数。最大值：50。默认值：10。
	 */
	
	/**
	 * 当前页码，默认是1
	 */
	
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
		return 'suning.logistics.outsourcetask.query';
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
		return "queryLogisticsOutsourceTask";
	}
	
}

?>